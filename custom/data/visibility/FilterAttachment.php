<?php

require_once('custom/data/visibility/SugarVisibility.php');

use Sugarcrm\Sugarcrm\Elasticsearch\Provider\Visibility\StrategyInterface as ElasticStrategyInterface;
use Sugarcrm\Sugarcrm\Elasticsearch\Provider\Visibility\Visibility;
use Sugarcrm\Sugarcrm\Elasticsearch\Analysis\AnalysisBuilder;
use Sugarcrm\Sugarcrm\Elasticsearch\Mapping\Mapping;
use Sugarcrm\Sugarcrm\Elasticsearch\Adapter\Document;

class FilterAttachment extends CustomSugarVisibility {

    protected $no_access_role_name;
    protected $no_access_role_names;
    protected $filter_category_id = array(
        'Subcontract',
        'Subcontract Information Form',
        'Sub Exhibit A',
        'Sub Exhibit B',
        'Sub Insurance',
        'Subcontract CCB',
        'SubW9',
        'Sub_Other',
        'Sub Archive',
    );

    /**
     * {@inheritdoc}
     */
    public function __construct(SugarBean $bean, $params = null) {

        parent::__construct($bean, $params);
        // To get more value that are not the part of filter_category _id array
        global $app_list_strings;
        $dom = array();
        if (isset($app_list_strings['document_template_type_dom'])) {
            $dom = $app_list_strings['document_template_type_dom'];
        }
        foreach ($dom as $key => $frontvalue) {
            if ('sub - ' == substr(strtolower($frontvalue), 0, 6) && !in_array($key, $this->filter_category_id)) {
                $this->filter_category_id[] = $key;
            }
        }
        //get  role name and it's member's
        global $current_user;
        $sugarQuery = new SugarQuery();
        $sugarQuery->from(BeanFactory::newBean('ACLRoles'));
        $sugarQuery->select(array('id', 'name'));
        $sugarQuery->where()->contains('name', 'No Access');
        $result = $sugarQuery->execute();
        $this->no_access_role_name = $result[0]['name'];

        $this->no_access_role_names = ACLRole::getUserRoleNames($current_user->id);
    }

    /**
     * {@inheritdoc}
     */
    public function addVisibilityWhere(&$query) {
        $whereClause = '';
        if (!$this->isSecurityApplicable()) {
            return $query;
        }
        $func = array('array_map');
        // prepare where clause categpry not in the filter_category_id array
        $whereClause = sprintf(
                "%s.category_id NOT IN (%s)", $this->getTableAlias(), implode(',', $func[0](array($this->bean->db, 'quoted'), $this->filter_category_id))
        );

        if (!empty($query)) {
            $query .= " AND $whereClause ";
        } else {
            $query = $whereClause;
        }
        return $query;
    }

    protected function isSecurityApplicable() {

        if (in_array($this->no_access_role_name, $this->no_access_role_names)) {
            return true;
        }
        return false;
    }

    /**
     * Get table alias
     * @return string
     */
    protected function getTableAlias() {
        $tableAlias = $this->getOption('table_alias');
        if (empty($tableAlias)) {
            $tableAlias = $this->bean->table_name;
        }
        return $tableAlias;
    }

    public function elasticAddFilters(User $user, \Elastica\Query\BoolQuery $filter, Visibility $provider) {
        if (!$this->isSecurityApplicable()) {
            return;
        }

        // apply elastic filter to exclude the given sales stages

        $filter->addMustNot($provider->createFilter(
                        'CustomField', array(
                    'filter_name' => 'filter_category_id',
                    'filter_value' => $this->filter_category_id,
                        )
        ));
    }

    /**
     * {@inheritdoc}
     */
    protected function getFieldTermMapping() {
        return array(
            'filter_category_id' => 'category_id',
        );
    }

}
