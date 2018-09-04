<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'include/SugarQueue/SugarJobQueue.php';

/**
 * Schedule the Job(s)
 *
 * @param array $args
 * @return string $jobId
 */
function scheduleCustomJob($args)
{
    if (empty($args['job_name']) || empty($args['job_target'])) {
        return false;
    }

    $job = BeanFactory::newBean('SchedulersJobs');
    
    $job->name = $args['job_name'];
    $job->data = base64_encode(serialize($args['data']));
    $job->target = $args['job_target'];
    $job->assigned_user_id = !empty($args['assigned_user_id'])?  $args['assigned_user_id'] : '1';
    
    $jq = new SugarJobQueue();
    $jobId = $jq->submitJob($job);

    $GLOBALS['log']->debug(__file__.': '.__function__.'(): Creating a job ('. $jobId.') '.
        'Data for the job is: '.print_r($args, 1));

    return $jobId;
}
