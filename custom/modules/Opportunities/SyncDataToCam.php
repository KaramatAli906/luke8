<?php

class DataSync {

    //Opp => CAM
    static $relation_updated = false;
    static $related_id = null;
    protected static $watchedFields = [
        'amount' => 'contract_price',
        'sales_stage' => 'sales_stage',
        'date_closed' => 'closing_date',
        'opportunity_type' => 'sale_type',
        'warranty_exp' => 'warranty_exp',
        'pending_date' => 'pending_date',
        'elevation' => 'elevation',
        'garage_type' => 'garage_type',
        'floor_plan' => 'floor_plan',
        'square_ft' => 'square_footage',
        'precon' => 'precon',
        'account_id' => 'account_id',
    ];
    public $Date_field_array = array('closing_date', 'warranty_exp', 'precon');

    function after_relationship_add_method($opportunity, $event, $args) {
        if (!self::isCAMRelationship($args))
            return false;


        $cam = self::fetchCam($args);


        $cam->contract_price = $opportunity->amount;
        $cam->sales_stage = $opportunity->sales_stage;
        $cam->closing_date = $opportunity->date_closed;
        $cam->sale_type = $opportunity->opportunity_type;
        $cam->warranty_exp = $opportunity->warranty_exp;
        $cam->pending_date = $opportunity->pending_date;
        $cam->elevation = $opportunity->elevation;
        $cam->garage_type = $opportunity->garage_type;
        $cam->floor_plan = $opportunity->floor_plan;
        $cam->square_footage = $opportunity->square_ft;
        $cam->precon = $opportunity->precon;
        $cam->account_id = $opportunity->account_id;
        $cam->save();

        return;
    }

    protected static function isCAMRelationship($args) {
        return $args['related_module'] === 'm_CAMS';
    }

    protected static function fetchCam($args) {
        $cam = BeanFactory::retrieveBean('m_CAMS', $args['related_id']);
        return $cam;
    }

    public function after_save_method($opp, $event, $args) {
//        if (self::isNew($args)) {
//            return false;
//        }
        if ((!self::hasRelevantFieldChanges($args) OR ! self::hasCAM($opp)) && !self::$relation_updated) {
            return false;
        }
        $related_id = $opp->m_cams_opportunities_1m_cams_ida ? $opp->m_cams_opportunities_1m_cams_ida : self::$related_id;
        $CAM = self::fetchCam(['related_id' => $related_id]);
        if ($CAM) {
            $needsSave = false;
            foreach (self::$watchedFields as $oppField => $camField) {

                if ($opp->$oppField != $CAM->$camField) {
                    $needsSave = true;
                    $CAM->$camField = $opp->$oppField;
                    if (empty($opp->$oppField) && in_array($camField, $this->Date_field_array)) {
                        $CAM->$camField = ' ';
                    }
                }
            }
            if ($needsSave) {
                $CAM->ignore_before_save = true;
                $CAM->save();
            }
        }

        return true;
    }

    protected static function isNew($args) {
        return !$args['isUpdate'];
    }

    protected static function hasRelevantFieldChanges($args) {
        return !empty(array_intersect(array_keys($args['dataChanges']), array_keys(self::$watchedFields)));
    }

    protected static function hasCAM($opp) {
        return !empty($opp->m_cams_opportunities_1m_cams_ida);
    }

    public function before_relationship_delete_or_add($opp, $event, $args) {
        if (!SugarBean::enterOperation('before_relationship_delete_or_add' . $opp->id)) {
            return;
        }
        if ($args['link'] == 'm_cams_opportunities_1' && $args['relationship'] == 'm_cams_opportunities_1' && $args['related_module'] == 'm_CAMS' && $args['id'] == $opp->id && !empty($args['related_id'])) {
            //Update account_id in cams when relationship between opportunity and cam is updated from opportunity module.
            self::$relation_updated = true;
            self::$related_id = $args['related_id'];
        } else if ($args['link'] == 'accounts' && $args['relationship'] == 'accounts_opportunities' && $args['related_module'] == 'Accounts' && $args['id'] == $opp->id && !empty($args['related_id'])) {
            //Update account_id in cams when relationship between account and opportunity is updated from accounts module.
            if (!empty($opp->m_cams_opportunities_1m_cams_ida)) {
                $CAM = self::fetchCam(['related_id' => $opp->m_cams_opportunities_1m_cams_ida]);
                $account_id = $event == 'before_relationship_delete' ? "" : $args['related_id'];
                if ($CAM) {
                    $CAM->account_id = $account_id;
                    $CAM->ignore_before_save = true;
                    $CAM->save();
                }
            }
        }
        SugarBean::leaveOperation('before_relationship_delete_or_add' . $opp->id);
    }

}
