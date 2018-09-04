<?php

/* * *******************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 * ****************************************************************************** */

/**
 * <b>subtractDate(date1,date2)</b><br>
 * return days between date1 and date2
 *
 */
class ProjectDateExpression extends GenericExpression {

    public function evaluate() {

        if(empty($this->context->projected_close_date)) {
            return null;
        }

        $params = $this->getParameters();
        $date1=$params[1]->evaluate()->formatDateTime("date","db");
        $date2=$params[2]->evaluate()->formatDateTime("date","db");
        $bean_date=$this->context->projected_close_date;
        
        if ($params[0]->evaluate()->__toString() == "true") {
           return $bean_date == $date1 ? $date1 : $bean_date;
        } else {
           return $bean_date == $date2 ? $date2 : $bean_date;
        }

    }

    /**
     * Returns the JS Equivalent of the evaluate function.
     */
    public static function getJSEvaluate() {
    return <<<EOQ

	    var params = this.getParameters();
            var condition = params[0].evaluate();
            var date1 = params[1].evaluate();
            var date2 = params[2].evaluate();
            var field= this.context.view.getField('projected_close_date');
            if (SUGAR.App.user.get('type') == 'admin') {
                setTimeout(function(){
                    field.setDisabled(false);
                }, 500);
            }
        
        if(condition) {
            return date1;
        } else {
            return date2;
        }
EOQ;
    }

    /**
     * Returns the opreation name that this Expression should be
     * called by.
     */
    public static function getOperationName() {
        
        return "projectDate";
    }

    public static function getParameterTypes() {
        
        return array(AbstractExpression::$GENERIC_TYPE, AbstractExpression::$GENERIC_TYPE,AbstractExpression::$GENERIC_TYPE);
    }

    /**
     * Returns the maximum number of parameters needed.
     */
    public static function getParamCount() {
        
        return 3;
    }

}
