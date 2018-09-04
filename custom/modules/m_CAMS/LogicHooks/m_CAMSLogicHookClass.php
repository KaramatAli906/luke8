<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');


class m_CAMSLogicHookClass {

    function beforeSave($bean, $event, $arguments) {
        if (!$bean->sugar_to_smartsheet_sync)
            $bean->has_synchronized = false;

        if (!$bean->smart_sheet_write_log)
            $bean->smart_sheet_write_log = '';

        //Update/Re-Calculate account_id in cams if relationship with opportunity exists but account_id is empty.
        //$bean->ignore_before_save is being set when account is removed from opportunity, so that to avoid recalculation in this case.
        if (!empty($bean->m_cams_opportunities_1opportunities_idb) && empty($bean->account_id) && !isset($bean->ignore_before_save)) {
            $opp = BeanFactory::retrieveBean('Opportunities', $bean->m_cams_opportunities_1opportunities_idb);
            $bean->account_id = $opp->account_id;
        }
    }

    function afterSave($bean, $event, $arguments) {
        $this->sendEmailEscrow($bean, $event, $arguments);
    }

    function sendEmailEscrow($bean, $event, $arguments) {
        if ($bean->construction_stage == "Punchlist Complete" && isset($arguments['dataChanges']['construction_stage'])) {
            require_once('include/SugarQueue/SugarJobQueue.php');

            // First, let's create the new job
            $job = new SchedulersJob();
            $job->name = "Send EMail To Escrow Job - {$bean->name}";
            $job->data = $bean->id;
            // key piece, this is data we are passing to the job that it can use to run it.
            $job->target = "function::SendEmailToEscrowJob";
            //function to call global
            global $current_user;
            //user the job runs as
            $job->assigned_user_id = $current_user->id;
            // Now push into the queue to run
            $jq = new SugarJobQueue();
            $jobid = $jq->submitJob($job);
        }
    }
}