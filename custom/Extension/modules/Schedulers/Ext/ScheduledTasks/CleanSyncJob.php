<?php

require_once('custom/include/Google/GoogleHelper.php');

/**
* This class acts as a job to perform clean sync functionality for RTGSync
*/
class CleanSyncJob implements RunnableSchedulerJob
{
    /**
     * This method implements setJob from RunnableSchedulerJob. It sets the
     * SchedulersJob instance for the class.
     *
     * @param SchedulersJob $job the SchedulersJob instance set by the job queue
     */
    public function setJob(SchedulersJob $job)
    {
        $this->job = $job;
    }

    /**
     * Executes a job to clean sync.
     * @param $data
     * @return bool
     */
    public function run($data)
    {
        try{
            $data = json_decode($data,1);
            if (!empty($data['stored_credentials']) && !empty($data['gmail_id']) && !empty($data['user_bean_id']))
            {
                $gh = new GoogleHelper();
                $gh->cleanSync($data['gmail_id'], $data['user_bean_id'], $data['stored_credentials']);
            }
            $this->unlockCalendarSync($data['sync_lock_id']);
        } catch (Exception $e) {
            $this->job->failJob($e->getMessage());
            return false;
        }

        return true;
    }

    /**
    * set lock attributes in config
    * @param $lock_id string
    */
    private function unlockCalendarSync($lock_id = '')
    {
        //unlock calendar sync job
        $calender_sync_lock_config = SugarConfig::getInstance()->get('calender_sync_lock');
        if (!empty($lock_id) && !empty($calender_sync_lock_config[$lock_id])) {
            $configurator = new Configurator();
            $configurator->config['calender_sync_lock'][$lock_id] = false;
            $configurator->saveConfig();
        }
    }
}
