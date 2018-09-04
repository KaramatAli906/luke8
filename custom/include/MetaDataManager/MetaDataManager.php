<?php

require_once 'include/MetaDataManager/MetaDataManager.php';

class CustomMetaDataManager extends MetaDataManager
{
    /**
     * Add information about thresholds to the config
     *
     * @return array
     */
    protected function getConfigs()
    {
        global $sugar_config;
        $result = parent::getConfigs();
        /**
         * Export every config key that is under 'js_available'
         */
        $exportConfig = !empty($sugar_config['js_available'])
            ? array_values($sugar_config['js_available']) : array();

        foreach ($exportConfig as $jsKey) {
            $result[$jsKey] = $sugar_config[$jsKey];
        }

        return $result;
    }
}
