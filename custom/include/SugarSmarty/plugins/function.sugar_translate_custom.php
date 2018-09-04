<?php

function smarty_function_sugar_translate_custom($params, &$smarty) {

    if (!empty($params['field_defs']) && !empty($params['smarty_field_name'])) {

        if ($params['field_defs'][$params['smarty_field_name']]['type'] == 'multienum') {

            global $app_list_strings;
            $values = unencodeMultienum($params['value']);
            $opitons = $params['field_defs'][$params['smarty_field_name']]['options'];
            $ret_val = '';

            foreach ($values as $val) {
                $ret_val.=$app_list_strings[$opitons][$val] . ', ';
            }

            return rtrim($ret_val, ', ');
        } else if ($params['field_defs'][$params['smarty_field_name']]['type'] == 'email') {
            return $params['id'];
        } else if ($params['field_defs'][$params['smarty_field_name']]['type'] == 'enum') {
            global $app_list_strings;
            return $app_list_strings[$params['field_defs'][$params['smarty_field_name']]['options']][$params['value']];
        } else if ($params['field_defs'][$params['smarty_field_name']]['type'] == 'parent') {
            $lang = return_module_language('en_us', $params['bean']->parent_type);
            return $lang['LBL_MODULE_NAME'] . ' - ' . $params['bean']->{$params['smarty_field_name']};
        } else if ($params['smarty_field_name'] == 'to_collection' && $params['bean']->module_name == 'Emails') {
            return $params['bean']->to_addrs_names;
        } else if ($params['smarty_field_name'] == 'from_collection' && $params['bean']->module_name == 'Emails') {

            return $params['bean']->from_addr_name;
        } else if ($params['smarty_field_name'] == 'cc_collection' && $params['bean']->module_name == 'Emails') {

            return $params['bean']->cc_addrs_names;
        } else if ($params['smarty_field_name'] == 'bcc_collection' && $params['bean']->module_name == 'Emails') {

            return $params['bean']->bcc_addrs_names;
        } else if ($params['smarty_field_name'] == 'duration' && $params['bean']->module_name == 'Calls' || ($params['smarty_field_name'] == 'duration' && $params['bean']->module_name == 'Meetings')) {
            return $params['bean']->date_start . ' - ' . $params['bean']->date_end;
        } else if ($params['smarty_field_name'] == 'description_html' && $params['bean']->module_name == 'Emails') {
            $html = preg_replace('~\<img([^>]+)src="index(.*?)"([^>]*)>~i', '&nbsp;',$params['bean']->description_html );
            return $html;
        }
        //to round the numeric value upto 2 digits 
        if ($params['field_defs'][$params['smarty_field_name']]['type'] == 'decimal' || $params['field_defs'][$params['smarty_field_name']]['type'] == 'float' || $params['field_defs'][$params['smarty_field_name']]['type'] == 'currency') {
            return round($params['value'], 2);
        }
        return $params['value'];
    }

    $module = (isset($params['module'])) ? $params['module'] : '';
    $smarty_field_name = (isset($params['smarty_field_name'])) ? $params['smarty_field_name'] : '';
    if ($smarty_field_name == 'description_html' && $module == 'Emails') {
        $value = 'Description:';
        return $value;
    } else {
        if (!empty($params['label'])) {

            $value = translate($params['label'], $module);
        } else {
            //grap from vardefs
            if (!empty($module) && !empty($smarty_field_name)) {

                $bean = BeanFactory::getBean($module);

                if (!empty($bean->field_defs[$smarty_field_name]['vname'])) {
                    $value = translate($bean->field_defs[$smarty_field_name]['vname'], $module);
                } else if (!empty($bean->field_defs[$smarty_field_name]['label'])) {
                    $value = translate($bean->field_defs[$smarty_field_name]['label'], $module);
                } else {
                    $value = '';
                }
            }
        }
    }
    return $value;
}
