<?php

require_once 'modules/Configurator/Configurator.php';

class CustomConfiguratorApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'saveInConfig' => array(
                'reqType' => 'POST',
                'path' => array('Configurator', 'save-value'),
                'pathVars' => array('module', ''),
                'method' => 'saveValueInConfig',
                'shortHelp' => 'Save the value in config file',
                'longHelp' => '',
            )
        );
    }

    public function saveValueInConfig($api, $args)
    {
        try {
            $this->requireArgs($args, array('configData'));
            if (empty($args['configData'])) {
                return false;
            }
            $cf = new Configurator();
            $cf->loadConfig();
            
            foreach ($args['configData'] as $key => $value) {
                $cf->config[$key] = $value;
            }

            $cf->handleOverride();
            return true;
        } catch (Exception $e) {
            throw new SugarApiExceptionInvalidParameter($e->getMessage());
        }
    }
}
