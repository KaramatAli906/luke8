<?php

class ExtensionModuleListApi extends SugarApi {

    public function registerApiRest() {
        return array(
            'chromeExtensionModuleList' => array(
                'reqType' => 'GET',
                'path' => array('extensionModuleList'),
                'pathVars' => array(''),
                'method' => 'ExtensionModuleList',
                'shortHelp' => '',
                'longHelp' => '',
            ),
        );
    }

    /**
     * extensionModuleList will return the module to display in chrome esxtension
     * @global array $moduleList
     * @global array $app_list_strings
     * @param ServiceBase $api
     * @param array $args
     * @return JSON
     */
    public function extensionModuleList(ServiceBase $api, array $args) {
        global $moduleList, $app_list_strings;
        $modules = array(
            'Leads',
            'Contacts',
            'Accounts',
            'Opportunities',
            'm_CAMS',
            'Cases',
            'Tasks',
            'Notes',
            'mv_SrvReq',
        );
        $modules_color=array(
            'Leads' => '#7651fc',
            'Contacts' => '#51b71a',
            'Accounts' => '#51cd15',
            'Opportunities' => '#a05cff',
            'm_CAMS' => '#555',
            'Cases' => '#e85479',
            'Tasks' => '#de5af1',
            'Notes' => '#198cc6',
            'mv_SrvReq' => '#555',
        );
        //$extension_module_list = array_intersect($modules, $moduleList);
        $extension_modules = array();
        
        foreach ($moduleList as $module) {

            $module_label = $app_list_strings['moduleList'][$module];
            $extension_modules[$module]['label'] = $module_label;
            $extension_modules[$module]['icon_label'] = $this->getmoduleIconLabel($module_label);
            $extension_modules[$module]['color']=!empty($modules_color[$module]) ? $modules_color[$module] : "#555";
            

            if(in_array($module,$modules)) {
                $extension_modules[$module]['enabled']=true;
            } else {
                $extension_modules[$module]['enabled']=false;
            }

        }
        return $extension_modules;
    }

    /**
     * getmoduleIconLabel will construct the icon label for modules
     * @param string $name
     * @return string
     */
    private function getmoduleIconLabel($name) {
        $moduleIconLabel = '';
        $name = trim($name);
        if (!empty($name) && strpos($name, ' ')) {
            preg_match_all("/[A-Z]/", ucwords(strtolower($name)), $matches);
            $moduleIconLabel = implode('', $matches[0]);
        } elseif (!empty($name)) {
            $moduleIconLabel = substr(ucwords(strtolower($name)), 0, 2);
        }
        return $moduleIconLabel;
    }

}
