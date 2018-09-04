<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AdministrationViewExcelSheetFieldsMapping extends SugarView {
    

    public function preDisplay() {
        parent::preDisplay();
    }

    /**
     * display the form
     */
    public function display() {
        $this->ss->display('custom/modules/Administration/tpls/excelsheet_fields_mapping.tpl');
    }
    
    
}
