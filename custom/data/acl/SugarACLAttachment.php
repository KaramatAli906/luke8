<?php

require_once 'data/SugarACLStrategy.php';

class SugarACLAttachment extends SugarACLStrategy {

    private $view_role_name;
    private $no_access_role_name;
    private $view_role_names;
    private $no_access_role_names;

    public function __construct() {
        global $current_user;
        //To get the name of the role that contains NO Access in Name
        $sugarQuery = new SugarQuery();
        $sugarQuery->from(BeanFactory::newBean('ACLRoles'));
        $sugarQuery->select(array('id', 'name'));
        $sugarQuery->where()->contains('name', 'No Access');
        $result = $sugarQuery->execute();
        $this->no_access_role_name = $result[0]['name'];

        //To get the name of the role that contains View Access in Name
        $sugarQuery_acl = new SugarQuery();
        $sugarQuery_acl->from(BeanFactory::newBean('ACLRoles'));
        $sugarQuery_acl->select(array('id', 'name'));
        $sugarQuery_acl->where()->contains('name', 'View Access');
        $result_acl = $sugarQuery_acl->execute();
        $this->view_role_name = $result_acl[0]['name'];

        $this->view_role_names = ACLRole::getUserRoleNames($current_user->id);
        $this->no_access_role_names = ACLRole::getUserRoleNames($current_user->id);
    }

    public function checkAccess($module, $view, $context) {

        if ((isset($context['bean']) && is_object($context['bean']))) {
            if (strtolower(substr($context['bean']->category_id, 0, 3)) == 'sub') {
                if (in_array($this->no_access_role_name, $this->no_access_role_names)) {
                    return $this->customNoaccess($module, $view, $context);
                } else if (in_array($this->view_role_name, $this->view_role_names)) {
                    return $this->customhasaccess($module, $view, $context);
                } else {
                    return true;
                }
            }
            return true;
        }
        return true;
    }

//To give access to view only to user in team "View Team"
    public function customhasaccess($module, $view, $context) {

        if (in_array(strtolower($view), array('edit', 'delete'), true)) {
            return false;
        } else if ($view == 'field' && in_array(strtolower($context['action']), array('edit', 'delete'), true)) {
            return false;
        } else {
            return true;
        }
    }

//To give no access to the user in team "No Access"
    public function customNoaccess($module, $view, $context) {

        if (in_array(strtolower($view), array('edit', 'delete', 'list', 'detail', 'read', 'access'), true)) {
            return false;
        } else if ($view == 'field' && in_array(strtolower($context['action']), array('edit', 'delete', 'list', 'detail', 'read', 'access'), true)) {
            return false;
        } else {
            return true;
        }
    }

}
