<?php
use Sugarcrm\Sugarcrm\Elasticsearch\Provider\Visibility\StrategyInterface as ElasticStrategyInterface;
use Sugarcrm\Sugarcrm\Elasticsearch\Provider\Visibility\Visibility;
use Sugarcrm\Sugarcrm\Elasticsearch\Analysis\AnalysisBuilder;
use Sugarcrm\Sugarcrm\Elasticsearch\Mapping\Mapping;
use Sugarcrm\Sugarcrm\Elasticsearch\Adapter\Document;

abstract class CustomSugarVisibility extends SugarVisibility implements ElasticStrategyInterface
{
    /**
     * This function will return if the visibility should be applied
     *
     * @return boolean
     */
    protected function shouldApplyVisibility()
    {
        global $current_user;

        // current user is admin
        //if ($current_user->isAdmin()) {
            return false;
        //}

        //return true;
    }

    /**
     * This function will return the alias of the main table
     *
     * @return $table_alias
     */
    protected function getTableAlias()
    {
        $table_alias = $this->getOption('table_alias');
        if (empty($table_alias)) {
            $table_alias = $this->bean->table_name;
        }

        return $table_alias;
    }

    /**
     * This function will return the term field mapping for global search
     *
     * @param array term => field mapping
     */
    protected function getFieldTermMapping()
    {
        return array();
    }

    /**
     * {@override}
     */
    public function addVisibilityWhereQuery(SugarQuery $sugarQuery)
    {
        $cond = '';
        $this->addVisibilityWhere($cond);
        if (!empty($cond)) {
            $sugarQuery->whereRaw($cond);
        }

        return $sugarQuery;
    }

    /**
     * {@inheritdoc}
     */
      public function elasticAddFilters1(User $user, \Elastica\Query\BoolQuery $filter, Visibility $provider)
      {
          
      }
    abstract public function elasticAddFilters(User $user, \Elastica\Query\BoolQuery $filter, Visibility $provider);

    /**
     * {@inheritdoc}
     */
    public function elasticBuildAnalysis(AnalysisBuilder $analysisBuilder, Visibility $provider)
    {
        // no special analyzers needed
    }

    /**
     * {@inheritdoc}
     */
    public function elasticBuildMapping(Mapping $mapping, Visibility $provider)
    {
        foreach ($this->getFieldTermMapping() as $term => $field) {
            $mapping->addNotAnalyzedField($term);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function elasticProcessDocumentPreIndex(Document $document, \SugarBean $bean, Visibility $provider)
    {
        foreach ($this->getFieldTermMapping() as $term => $field) {
            $document->setDataField($term, isset($bean->$field) ? $bean->$field : '');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function elasticGetBeanIndexFields($module, Visibility $provider)
    {
        return array_values($this->getFieldTermMapping());
    }
    
}
