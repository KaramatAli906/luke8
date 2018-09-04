<?php 
 $relationships = array (
  'accounts_bugs' => 
  array (
    'name' => 'accounts_bugs',
    'table' => 'accounts_bugs',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'bug_id' => 
      array (
        'name' => 'bug_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acc_bug_acc',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acc_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_account_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_bugs' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bugs',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bugs',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'bug_id',
  ),
  'accounts_contacts' => 
  array (
    'name' => 'accounts_contacts',
    'table' => 'accounts_contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'primary_account' => 
      array (
        'name' => 'primary_account',
        'type' => 'bool',
        'default' => '0',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_contid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_contacts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_contacts',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'contact_id',
        'primary_flag_column' => 'primary_account',
        'primary_flag_side' => 'rhs',
        'primary_flag_default' => true,
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_contacts',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'contact_id',
    'primary_flag_column' => 'primary_account',
    'primary_flag_side' => 'rhs',
    'primary_flag_default' => true,
  ),
  'accounts_opportunities' => 
  array (
    'name' => 'accounts_opportunities',
    'table' => 'accounts_opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_opportunity',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_oppid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_opportunities' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'one-to-many',
        'join_table' => 'accounts_opportunities',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'opportunity_id',
        'true_relationship_type' => 'one-to-many',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'accounts_opportunities',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'opportunity_id',
    'true_relationship_type' => 'one-to-many',
  ),
  'calls_contacts' => 
  array (
    'name' => 'calls_contacts',
    'table' => 'calls_contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => '36',
      ),
      'call_id' => 
      array (
        'name' => 'call_id',
        'type' => 'id',
        'len' => '36',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
        'len' => '36',
      ),
      'required' => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      'accept_status' => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_call_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_contacts' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_contacts',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_contacts',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'contact_id',
  ),
  'calls_users' => 
  array (
    'name' => 'calls_users',
    'table' => 'calls_users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => '36',
      ),
      'call_id' => 
      array (
        'name' => 'call_id',
        'type' => 'id',
        'len' => '36',
      ),
      'user_id' => 
      array (
        'name' => 'user_id',
        'type' => 'id',
        'len' => '36',
      ),
      'required' => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      'accept_status' => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_call_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'user_id',
        ),
      ),
      4 => 
      array (
        'name' => 'idx_call_users_del',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'user_id',
          2 => 'deleted',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_users' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_users',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_users',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'user_id',
  ),
  'calls_leads' => 
  array (
    'name' => 'calls_leads',
    'table' => 'calls_leads',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => '36',
      ),
      'call_id' => 
      array (
        'name' => 'call_id',
        'type' => 'id',
        'len' => '36',
      ),
      'lead_id' => 
      array (
        'name' => 'lead_id',
        'type' => 'id',
        'len' => '36',
      ),
      'required' => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      'accept_status' => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_call_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_leads' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_leads',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_leads',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'lead_id',
  ),
  'cases_bugs' => 
  array (
    'name' => 'cases_bugs',
    'table' => 'cases_bugs',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'case_id' => 
      array (
        'name' => 'case_id',
        'type' => 'id',
      ),
      'bug_id' => 
      array (
        'name' => 'bug_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'cases_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_cas_bug_cas',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cas_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_case_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'cases_bugs' => 
      array (
        'lhs_module' => 'Cases',
        'lhs_table' => 'cases',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'cases_bugs',
        'join_key_lhs' => 'case_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'cases_bugs',
    'join_key_lhs' => 'case_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_bugs' => 
  array (
    'name' => 'contacts_bugs',
    'table' => 'contacts_bugs',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'bug_id' => 
      array (
        'name' => 'bug_id',
        'type' => 'id',
      ),
      'contact_role' => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_bug_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contact_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_bugs' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_bugs',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_bugs',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_cases' => 
  array (
    'name' => 'contacts_cases',
    'table' => 'contacts_cases',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'case_id' => 
      array (
        'name' => 'case_id',
        'type' => 'id',
      ),
      'contact_role' => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_casespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_case_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_cases',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_cases' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_cases',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_cases',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'case_id',
  ),
  'contacts_users' => 
  array (
    'name' => 'contacts_users',
    'table' => 'contacts_users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'user_id' => 
      array (
        'name' => 'user_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_users_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_users_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_users' => 
      array (
        'lhs_module' => 'Users',
        'lhs_table' => 'users',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'user-based',
        'join_table' => 'contacts_users',
        'join_key_lhs' => 'user_id',
        'join_key_rhs' => 'contact_id',
        'user_field' => 'user_id',
      ),
    ),
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'contacts_users',
    'join_key_lhs' => 'user_id',
    'join_key_rhs' => 'contact_id',
    'user_field' => 'user_id',
  ),
  'emailaddresses_emailparticipants' => 
  array (
    'name' => 'emailaddresses_emailparticipants',
    'lhs_module' => 'EmailAddresses',
    'lhs_table' => 'email_addresses',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailParticipants',
    'rhs_table' => 'emails_email_addr_rel',
    'rhs_key' => 'email_address_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_accounts_rel' => 
  array (
    'name' => 'emails_accounts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_bugs_rel' => 
  array (
    'name' => 'emails_bugs_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_cases_rel' => 
  array (
    'name' => 'emails_cases_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_contacts_rel' => 
  array (
    'name' => 'emails_contacts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_leads_rel' => 
  array (
    'name' => 'emails_leads_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_opportunities_rel' => 
  array (
    'name' => 'emails_opportunities_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_tasks_rel' => 
  array (
    'name' => 'emails_tasks_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_users_rel' => 
  array (
    'name' => 'emails_users_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_project_task_rel' => 
  array (
    'name' => 'emails_project_task_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProjectTask',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_projects_rel' => 
  array (
    'name' => 'emails_projects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Project',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_prospects_rel' => 
  array (
    'name' => 'emails_prospects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_quotes' => 
  array (
    'name' => 'emails_quotes',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Quotes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'meetings_contacts' => 
  array (
    'name' => 'meetings_contacts',
    'table' => 'meetings_contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => '36',
      ),
      'meeting_id' => 
      array (
        'name' => 'meeting_id',
        'type' => 'id',
        'len' => '36',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
        'len' => '36',
      ),
      'required' => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      'accept_status' => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_mtg_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_contacts' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_contacts',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_contacts',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'contact_id',
  ),
  'meetings_users' => 
  array (
    'name' => 'meetings_users',
    'table' => 'meetings_users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => '36',
      ),
      'meeting_id' => 
      array (
        'name' => 'meeting_id',
        'type' => 'id',
        'len' => '36',
      ),
      'user_id' => 
      array (
        'name' => 'user_id',
        'type' => 'id',
        'len' => '36',
      ),
      'required' => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      'accept_status' => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_mtg_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'user_id',
        ),
      ),
      4 => 
      array (
        'name' => 'idx_meeting_users_del',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'user_id',
          2 => 'deleted',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_users' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_users',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_users',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'user_id',
  ),
  'meetings_leads' => 
  array (
    'name' => 'meetings_leads',
    'table' => 'meetings_leads',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => '36',
      ),
      'meeting_id' => 
      array (
        'name' => 'meeting_id',
        'type' => 'id',
        'len' => '36',
      ),
      'lead_id' => 
      array (
        'name' => 'lead_id',
        'type' => 'id',
        'len' => '36',
      ),
      'required' => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      'accept_status' => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_meeting_meeting',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_meeting_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_leads' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_leads',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_leads',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'lead_id',
  ),
  'opportunities_contacts' => 
  array (
    'name' => 'opportunities_contacts',
    'table' => 'opportunities_contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'contact_role' => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_opp_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_opportunities_contacts',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'opportunities_contacts' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_contacts',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_contacts',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'contact_id',
  ),
  'team_sets_teams' => 
  array (
    'name' => 'team_sets_teams',
    'table' => 'team_sets_teams',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_ud_id',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_ud_set_id',
        'type' => 'unique',
        'fields' => 
        array (
          0 => 'team_set_id',
          1 => 'team_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_ud_team_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'team_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_ud_team_set_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'team_set_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'team_sets_teams' => 
      array (
        'lhs_module' => 'TeamSets',
        'lhs_table' => 'team_sets',
        'lhs_key' => 'id',
        'rhs_module' => 'Teams',
        'rhs_table' => 'teams',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'team_sets_teams',
        'join_key_lhs' => 'team_set_id',
        'join_key_rhs' => 'team_id',
      ),
    ),
    'lhs_module' => 'TeamSets',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
  ),
  'prospect_list_campaigns' => 
  array (
    'name' => 'prospect_list_campaigns',
    'table' => 'prospect_list_campaigns',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'prospect_list_id' => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'id',
      ),
      'campaign_id' => 
      array (
        'name' => 'campaign_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prospect_list_campaignspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pro_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'prospect_list_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cam_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'campaign_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_prospect_list_campaigns',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'prospect_list_id',
          1 => 'campaign_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'prospect_list_campaigns' => 
      array (
        'lhs_module' => 'ProspectLists',
        'lhs_table' => 'prospect_lists',
        'lhs_key' => 'id',
        'rhs_module' => 'Campaigns',
        'rhs_table' => 'campaigns',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'prospect_list_campaigns',
        'join_key_lhs' => 'prospect_list_id',
        'join_key_rhs' => 'campaign_id',
      ),
    ),
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_list_campaigns',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'campaign_id',
  ),
  'prospect_list_contacts' => 
  array (
    'name' => 'prospect_list_contacts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'prospect_list_id' => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'id',
      ),
      'related_id' => 
      array (
        'name' => 'related_id',
        'type' => 'id',
      ),
      'related_type' => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_prospects' => 
  array (
    'name' => 'prospect_list_prospects',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'prospect_list_id' => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'id',
      ),
      'related_id' => 
      array (
        'name' => 'related_id',
        'type' => 'id',
      ),
      'related_type' => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_leads' => 
  array (
    'name' => 'prospect_list_leads',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'prospect_list_id' => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'id',
      ),
      'related_id' => 
      array (
        'name' => 'related_id',
        'type' => 'id',
      ),
      'related_type' => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_users' => 
  array (
    'name' => 'prospect_list_users',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'prospect_list_id' => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'id',
      ),
      'related_id' => 
      array (
        'name' => 'related_id',
        'type' => 'id',
      ),
      'related_type' => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_accounts' => 
  array (
    'name' => 'prospect_list_accounts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'prospect_list_id' => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'id',
      ),
      'related_id' => 
      array (
        'name' => 'related_id',
        'type' => 'id',
      ),
      'related_type' => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'roles_users' => 
  array (
    'name' => 'roles_users',
    'table' => 'roles_users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'role_id' => 
      array (
        'name' => 'role_id',
        'type' => 'id',
      ),
      'user_id' => 
      array (
        'name' => 'user_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_ru_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_ru_user_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'roles_users' => 
      array (
        'lhs_module' => 'Roles',
        'lhs_table' => 'roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Roles',
    'lhs_table' => 'roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'acl_role_sets_acl_roles' => 
  array (
    'name' => 'acl_role_sets_acl_roles',
    'table' => 'acl_role_sets_acl_roles',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'acl_role_set_id' => 
      array (
        'name' => 'acl_role_set_id',
        'type' => 'id',
      ),
      'acl_role_id' => 
      array (
        'name' => 'acl_role_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_rsr_id',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_rsr_set_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'acl_role_set_id',
          1 => 'acl_role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_rsr_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'acl_role_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_rsr_acl_role_set_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'acl_role_set_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_role_sets_acl_roles' => 
      array (
        'lhs_module' => 'ACLRoleSets',
        'lhs_table' => 'acl_role_sets',
        'lhs_key' => 'id',
        'rhs_module' => 'ACLRoles',
        'rhs_table' => 'acl_roles',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_role_sets_roles',
        'join_key_lhs' => 'acl_role_set_id',
        'join_key_rhs' => 'acl_role_id',
      ),
    ),
    'lhs_module' => 'ACLRoleSets',
    'lhs_table' => 'acl_role_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLRoles',
    'rhs_table' => 'acl_roles',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_role_sets_roles',
    'join_key_lhs' => 'acl_role_set_id',
    'join_key_rhs' => 'acl_role_id',
  ),
  'projects_bugs' => 
  array (
    'name' => 'projects_bugs',
    'table' => 'projects_bugs',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'bug_id' => 
      array (
        'name' => 'bug_id',
        'type' => 'id',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_bugs_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_bug_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_bugs_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_bugs' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_bugs',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_bugs',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'bug_id',
  ),
  'projects_cases' => 
  array (
    'name' => 'projects_cases',
    'table' => 'projects_cases',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'case_id' => 
      array (
        'name' => 'case_id',
        'type' => 'id',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_cases_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_case_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_cases_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_cases' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_cases',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_cases',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'case_id',
  ),
  'projects_products' => 
  array (
    'name' => 'projects_products',
    'table' => 'projects_products',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'product_id' => 
      array (
        'name' => 'product_id',
        'type' => 'id',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_products_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_prod_project',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_prod_product',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'product_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_products_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'product_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_products' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_products',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_products',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'product_id',
  ),
  'projects_accounts' => 
  array (
    'name' => 'projects_accounts',
    'table' => 'projects_accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_accounts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_acct_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_acct_acct',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_accounts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_accounts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_accounts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'account_id',
  ),
  'projects_contacts' => 
  array (
    'name' => 'projects_contacts',
    'table' => 'projects_contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_contacts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_con_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_con_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_contacts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_contacts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_contacts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'contact_id',
  ),
  'projects_opportunities' => 
  array (
    'name' => 'projects_opportunities',
    'table' => 'projects_opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_opportunities_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_opp_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_opportunities' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_opportunities',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_opportunities',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'reportschedules_users' => 
  array (
    'name' => 'reportschedules_users',
    'table' => 'reportschedules_users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => '36',
      ),
      'reportschedule_id' => 
      array (
        'name' => 'reportschedule_id',
        'type' => 'id',
        'len' => '36',
      ),
      'user_id' => 
      array (
        'name' => 'user_id',
        'type' => 'id',
        'len' => '36',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'reportschedules_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_rs_rs',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'reportschedule_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_rs_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_rs_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'reportschedule_id',
          1 => 'user_id',
        ),
      ),
      4 => 
      array (
        'name' => 'idx_reportschedule_users_del',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'reportschedule_id',
          1 => 'user_id',
          2 => 'deleted',
        ),
      ),
    ),
    'relationships' => 
    array (
      'reportschedules_users' => 
      array (
        'lhs_module' => 'ReportSchedules',
        'lhs_table' => 'report_schedules',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'reportschedules_users',
        'join_key_lhs' => 'reportschedule_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'ReportSchedules',
    'lhs_table' => 'report_schedules',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'reportschedules_users',
    'join_key_lhs' => 'reportschedule_id',
    'join_key_rhs' => 'user_id',
  ),
  'product_bundle_note' => 
  array (
    'name' => 'product_bundle_note',
    'table' => 'product_bundle_note',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
      'bundle_id' => 
      array (
        'name' => 'bundle_id',
        'type' => 'id',
      ),
      'note_id' => 
      array (
        'name' => 'note_id',
        'type' => 'id',
      ),
      'note_index' => 
      array (
        'name' => 'note_index',
        'type' => 'int',
        'len' => '11',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_bundl_notepk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pbn_bundle',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pbn_note',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'note_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_pbn_pb_nb',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'note_id',
          1 => 'bundle_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_bundle_note' => 
      array (
        'lhs_module' => 'ProductBundles',
        'lhs_table' => 'product_bundles',
        'lhs_key' => 'id',
        'rhs_module' => 'ProductBundleNotes',
        'rhs_table' => 'product_bundle_notes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_bundle_note',
        'join_key_lhs' => 'bundle_id',
        'join_key_rhs' => 'note_id',
        'true_relationship_type' => 'one-to-many',
      ),
    ),
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundleNotes',
    'rhs_table' => 'product_bundle_notes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_bundle_note',
    'join_key_lhs' => 'bundle_id',
    'join_key_rhs' => 'note_id',
    'true_relationship_type' => 'one-to-many',
  ),
  'product_bundle_product' => 
  array (
    'name' => 'product_bundle_product',
    'table' => 'product_bundle_product',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
      'bundle_id' => 
      array (
        'name' => 'bundle_id',
        'type' => 'id',
      ),
      'product_id' => 
      array (
        'name' => 'product_id',
        'type' => 'id',
      ),
      'product_index' => 
      array (
        'name' => 'product_index',
        'type' => 'int',
        'len' => '11',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_bundl_prodpk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pbp_bundle',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pbp_quote',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'product_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_pbp_bq',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'product_id',
          1 => 'bundle_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_bundle_product' => 
      array (
        'lhs_module' => 'ProductBundles',
        'lhs_table' => 'product_bundles',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_bundle_product',
        'join_key_lhs' => 'bundle_id',
        'join_key_rhs' => 'product_id',
        'true_relationship_type' => 'one-to-many',
      ),
    ),
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_bundle_product',
    'join_key_lhs' => 'bundle_id',
    'join_key_rhs' => 'product_id',
    'true_relationship_type' => 'one-to-many',
  ),
  'product_bundle_quote' => 
  array (
    'name' => 'product_bundle_quote',
    'table' => 'product_bundle_quote',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
      'bundle_id' => 
      array (
        'name' => 'bundle_id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
      'bundle_index' => 
      array (
        'name' => 'bundle_index',
        'type' => 'int',
        'len' => '11',
        'default' => 0,
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_bundl_quotepk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pbq_bundle',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pbq_quote',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'quote_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_pbq_bq',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quote_id',
          1 => 'bundle_id',
        ),
      ),
      4 => 
      array (
        'name' => 'bundle_index_idx',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_index',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_bundle_quote' => 
      array (
        'lhs_module' => 'Quotes',
        'lhs_table' => 'quotes',
        'lhs_key' => 'id',
        'rhs_module' => 'ProductBundles',
        'rhs_table' => 'product_bundles',
        'rhs_key' => 'id',
        'relationship_type' => 'one-to-many',
        'join_table' => 'product_bundle_quote',
        'join_key_lhs' => 'quote_id',
        'join_key_rhs' => 'bundle_id',
        'true_relationship_type' => 'one-to-many',
      ),
    ),
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundles',
    'rhs_table' => 'product_bundles',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'product_bundle_quote',
    'join_key_lhs' => 'quote_id',
    'join_key_rhs' => 'bundle_id',
    'true_relationship_type' => 'one-to-many',
  ),
  'product_product' => 
  array (
    'name' => 'product_product',
    'table' => 'product_product',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
      ),
      'child_id' => 
      array (
        'name' => 'child_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_prodpk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pp_parent',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'parent_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pp_child',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'child_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_product' => 
      array (
        'lhs_module' => 'Products',
        'lhs_table' => 'products',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_product',
        'join_key_lhs' => 'parent_id',
        'join_key_rhs' => 'child_id',
        'reverse' => '1',
      ),
    ),
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_product',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'child_id',
    'reverse' => '1',
  ),
  'quotes_billto_accounts' => 
  array (
    'name' => 'quotes_billto_accounts',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_accounts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'account_id',
    'relationship_role_column' => 'account_role',
    'relationship_role_column_value' => 'Bill To',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'account_role' => 
      array (
        'name' => 'account_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_shipto_accounts' => 
  array (
    'name' => 'quotes_shipto_accounts',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_accounts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'account_id',
    'relationship_role_column' => 'account_role',
    'relationship_role_column_value' => 'Ship To',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'account_role' => 
      array (
        'name' => 'account_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_contacts_shipto' => 
  array (
    'name' => 'quotes_contacts_shipto',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_contacts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'contact_id',
    'relationship_role_column' => 'contact_role',
    'relationship_role_column_value' => 'Ship To',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
      'contact_role' => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_contacts_billto' => 
  array (
    'name' => 'quotes_contacts_billto',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_contacts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'contact_id',
    'relationship_role_column' => 'contact_role',
    'relationship_role_column_value' => 'Bill To',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
      'contact_role' => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_opportunities' => 
  array (
    'name' => 'quotes_opportunities',
    'table' => 'quotes_opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'quotes_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_opp_qte_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_quote_oportunities',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quote_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'quotes_opportunities' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'true_relationship_type' => 'one-to-many',
        'join_table' => 'quotes_opportunities',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_opportunities',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'quote_id',
  ),
  'contracts_opportunities' => 
  array (
    'name' => 'contracts_opportunities',
    'table' => 'contracts_opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'contract_id' => 
      array (
        'name' => 'contract_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_opp_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_opp_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_opportunities' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Contracts',
        'rhs_table' => 'contracts',
        'rhs_key' => 'id',
        'relationship_type' => 'one-to-many',
        'join_table' => 'contracts_opportunities',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'contract_id',
        'true_relationship_type' => 'one-to-many',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'contracts_opportunities',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'contract_id',
    'true_relationship_type' => 'one-to-many',
  ),
  'contracts_contacts' => 
  array (
    'name' => 'contracts_contacts',
    'table' => 'contracts_contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'contract_id' => 
      array (
        'name' => 'contract_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_contacts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'contract_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_contacts' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_contacts',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_contacts',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'contact_id',
  ),
  'contracts_quotes' => 
  array (
    'name' => 'contracts_quotes',
    'table' => 'contracts_quotes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
      'contract_id' => 
      array (
        'name' => 'contract_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_quot_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_quot_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
          1 => 'quote_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_quotes' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_quotes',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_quotes',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'quote_id',
  ),
  'contracts_products' => 
  array (
    'name' => 'contracts_products',
    'table' => 'contracts_products',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'product_id' => 
      array (
        'name' => 'product_id',
        'type' => 'id',
      ),
      'contract_id' => 
      array (
        'name' => 'contract_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_prod_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_prod_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
          1 => 'product_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_products' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_products',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_products',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'product_id',
  ),
  'projects_quotes' => 
  array (
    'name' => 'projects_quotes',
    'table' => 'projects_quotes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_quotes_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_quote_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_quote_quote',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'quote_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_quotes_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'quote_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_quotes' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_quotes',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_quotes',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'quote_id',
  ),
  'projects_revenuelineitems' => 
  array (
    'name' => 'projects_revenuelineitems',
    'table' => 'projects_revenue_line_items',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'rli_id' => 
      array (
        'name' => 'rli_id',
        'type' => 'id',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_rli_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_rli_project',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_rli_product',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'rli_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_rli_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'rli_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_revenuelineitems' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'RevenueLineItems',
        'rhs_table' => 'revenue_line_items',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_products',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'rli_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_products',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'rli_id',
  ),
  'users_holidays' => 
  array (
    'name' => 'users_holidays',
    'table' => 'users_holidays',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'user_id' => 
      array (
        'name' => 'user_id',
        'type' => 'id',
      ),
      'holiday_id' => 
      array (
        'name' => 'holiday_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'users_holidays_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_user_holi_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_user_holi_holi',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'holiday_id',
        ),
      ),
      3 => 
      array (
        'name' => 'users_quotes_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'user_id',
          1 => 'holiday_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'users_holidays' => 
      array (
        'lhs_module' => 'Users',
        'lhs_table' => 'users',
        'lhs_key' => 'id',
        'rhs_module' => 'Holidays',
        'rhs_table' => 'holidays',
        'rhs_key' => 'person_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'related_module',
        'relationship_role_column_value' => NULL,
      ),
    ),
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Holidays',
    'rhs_table' => 'holidays',
    'rhs_key' => 'person_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'related_module',
    'relationship_role_column_value' => NULL,
  ),
  'contacts_dataprivacy' => 
  array (
    'name' => 'contacts_dataprivacy',
    'table' => 'contacts_dataprivacy',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'dataprivacy_id' => 
      array (
        'name' => 'dataprivacy_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_dataprivacypk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_dataprivacy_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_dataprivacy_dataprivacy',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dataprivacy_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_dataprivacy',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'dataprivacy_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_dataprivacy' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'DataPrivacy',
        'rhs_table' => 'data_privacy',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_dataprivacy',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'dataprivacy_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_dataprivacy',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'dataprivacy_id',
  ),
  'leads_dataprivacy' => 
  array (
    'name' => 'leads_dataprivacy',
    'table' => 'leads_dataprivacy',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'lead_id' => 
      array (
        'name' => 'lead_id',
        'type' => 'id',
      ),
      'dataprivacy_id' => 
      array (
        'name' => 'dataprivacy_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'leads_dataprivacypk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_dataprivacy_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_dataprivacy_dataprivacy',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dataprivacy_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_leads_dataprivacy',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'lead_id',
          1 => 'dataprivacy_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'leads_dataprivacy' => 
      array (
        'lhs_module' => 'Leads',
        'lhs_table' => 'leads',
        'lhs_key' => 'id',
        'rhs_module' => 'DataPrivacy',
        'rhs_table' => 'data_privacy',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'leads_dataprivacy',
        'join_key_lhs' => 'lead_id',
        'join_key_rhs' => 'dataprivacy_id',
      ),
    ),
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'leads_dataprivacy',
    'join_key_lhs' => 'lead_id',
    'join_key_rhs' => 'dataprivacy_id',
  ),
  'prospects_dataprivacy' => 
  array (
    'name' => 'prospects_dataprivacy',
    'table' => 'prospects_dataprivacy',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'prospect_id' => 
      array (
        'name' => 'prospect_id',
        'type' => 'id',
      ),
      'dataprivacy_id' => 
      array (
        'name' => 'dataprivacy_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prospects_dataprivacypk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_prospect_dataprivacy_prospect',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'prospect_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_prospect_dataprivacy_dataprivacy',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dataprivacy_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_prospects_dataprivacy',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'prospect_id',
          1 => 'dataprivacy_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'prospects_dataprivacy' => 
      array (
        'lhs_module' => 'Prospects',
        'lhs_table' => 'prospects',
        'lhs_key' => 'id',
        'rhs_module' => 'DataPrivacy',
        'rhs_table' => 'data_privacy',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'prospects_dataprivacy',
        'join_key_lhs' => 'prospect_id',
        'join_key_rhs' => 'dataprivacy_id',
      ),
    ),
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospects_dataprivacy',
    'join_key_lhs' => 'prospect_id',
    'join_key_rhs' => 'dataprivacy_id',
  ),
  'accounts_dataprivacy' => 
  array (
    'name' => 'accounts_dataprivacy',
    'table' => 'accounts_dataprivacy',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
      ),
      'dataprivacy_id' => 
      array (
        'name' => 'dataprivacy_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_dataprivacypk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acc_dataprivacy_acc',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acc_dataprivacy_dataprivacy',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dataprivacy_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_accounts_dataprivacy',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'dataprivacy_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_dataprivacy' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'DataPrivacy',
        'rhs_table' => 'data_privacy',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_dataprivacy',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'dataprivacy_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_dataprivacy',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'dataprivacy_id',
  ),
  'acl_roles_actions' => 
  array (
    'name' => 'acl_roles_actions',
    'table' => 'acl_roles_actions',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'role_id' => 
      array (
        'name' => 'role_id',
        'type' => 'id',
      ),
      'action_id' => 
      array (
        'name' => 'action_id',
        'type' => 'id',
      ),
      'access_override' => 
      array (
        'name' => 'access_override',
        'type' => 'int',
        'len' => '3',
        'required' => false,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_actionspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acl_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acl_action_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'action_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_del_override',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'deleted',
          2 => 'action_id',
          3 => 'access_override',
        ),
      ),
      4 => 
      array (
        'name' => 'idx_aclrole_action',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'action_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_actions' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'ACLActions',
        'rhs_table' => 'acl_actions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_actions',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'action_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLActions',
    'rhs_table' => 'acl_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_actions',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'action_id',
  ),
  'acl_roles_users' => 
  array (
    'name' => 'acl_roles_users',
    'table' => 'acl_roles_users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'role_id' => 
      array (
        'name' => 'role_id',
        'type' => 'id',
      ),
      'user_id' => 
      array (
        'name' => 'user_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_aclrole_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acluser_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_user',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_users' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
        'relationship_class' => 'ACLRoleUserRelationship',
        'relationship_file' => 'modules/ACLRoles/ACLRoleUserRelationship.php',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
    'relationship_class' => 'ACLRoleUserRelationship',
    'relationship_file' => 'modules/ACLRoles/ACLRoleUserRelationship.php',
  ),
  'email_marketing_prospect_lists' => 
  array (
    'name' => 'email_marketing_prospect_lists',
    'table' => 'email_marketing_prospect_lists',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'prospect_list_id' => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'id',
      ),
      'email_marketing_id' => 
      array (
        'name' => 'email_marketing_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'email_mp_listspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'email_mp_prospects',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'email_marketing_id',
          1 => 'prospect_list_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'email_marketing_prospect_lists' => 
      array (
        'lhs_module' => 'EmailMarketing',
        'lhs_table' => 'email_marketing',
        'lhs_key' => 'id',
        'rhs_module' => 'ProspectLists',
        'rhs_table' => 'prospect_lists',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'email_marketing_prospect_lists',
        'join_key_lhs' => 'email_marketing_id',
        'join_key_rhs' => 'prospect_list_id',
      ),
    ),
    'lhs_module' => 'EmailMarketing',
    'lhs_table' => 'email_marketing',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_marketing_prospect_lists',
    'join_key_lhs' => 'email_marketing_id',
    'join_key_rhs' => 'prospect_list_id',
  ),
  'contracts_documents' => 
  array (
    'name' => 'contracts_documents',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
      ),
      'document_revision_id' => 
      array (
        'name' => 'document_revision_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'contracttype_documents' => 
  array (
    'name' => 'contracttype_documents',
    'lhs_module' => 'ContractTypes',
    'lhs_table' => 'contract_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ContracTemplates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
      ),
      'document_revision_id' => 
      array (
        'name' => 'document_revision_id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'documents_accounts' => 
  array (
    'name' => 'documents_accounts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_accounts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_accounts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'table' => 'documents_accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
        'len' => 36,
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
        'type' => 'id',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_accounts_account_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_accounts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'account_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_accounts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'account_id',
  ),
  'documents_contacts' => 
  array (
    'name' => 'documents_contacts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_contacts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_contacts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'table' => 'documents_contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
        'len' => 36,
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_contacts_contact_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_contacts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_contacts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'contact_id',
  ),
  'documents_opportunities' => 
  array (
    'name' => 'documents_opportunities',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_opportunities' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_opportunities',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'table' => 'documents_opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
        'len' => 36,
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_docu_opps_oppo_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_docu_oppo_docu_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_opportunities',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'documents_cases' => 
  array (
    'name' => 'documents_cases',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_cases' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_cases',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'table' => 'documents_cases',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
        'len' => 36,
      ),
      'case_id' => 
      array (
        'name' => 'case_id',
        'type' => 'id',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_casesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_cases_case_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_cases_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'case_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_cases',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'case_id',
  ),
  'documents_bugs' => 
  array (
    'name' => 'documents_bugs',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_bugs' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_bugs',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'table' => 'documents_bugs',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
        'len' => 36,
      ),
      'bug_id' => 
      array (
        'name' => 'bug_id',
        'type' => 'id',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_bugsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_bugs_bug_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bug_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_bugs_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_bugs',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'bug_id',
  ),
  'documents_products' => 
  array (
    'name' => 'documents_products',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_products' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_products',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'table' => 'documents_products',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
        'len' => 36,
      ),
      'product_id' => 
      array (
        'name' => 'product_id',
        'type' => 'id',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_productsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_products_product_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'product_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_products_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'product_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_products',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'product_id',
  ),
  'documents_revenuelineitems' => 
  array (
    'name' => 'documents_revenuelineitems',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_revenuelineitems' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'RevenueLineItems',
        'rhs_table' => 'revenue_line_items',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_revenuelineitems',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'rli_id',
      ),
    ),
    'table' => 'documents_revenuelineitems',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
      ),
      'rli_id' => 
      array (
        'name' => 'rli_id',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_revenuelineitemssspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_revenuelineitems_revenuelineitem_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'rli_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_revenuelineitems_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'rli_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_revenuelineitems',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'rli_id',
  ),
  'documents_quotes' => 
  array (
    'name' => 'documents_quotes',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_quotes' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_quotes',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'table' => 'documents_quotes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_quotesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_quotes_quote_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quote_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_quotes_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'quote_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_quotes',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'quote_id',
  ),
  'activities_users' => 
  array (
    'name' => 'activities_users',
    'table' => 'activities_users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'activities_users_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'activities_records',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'parent_type',
          1 => 'parent_id',
        ),
      ),
      2 => 
      array (
        'name' => 'activities_users_parent',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'activity_id',
          1 => 'parent_id',
          2 => 'parent_type',
        ),
      ),
    ),
    'relationships' => 
    array (
      'activities_users' => 
      array (
        'lhs_module' => 'Activities',
        'lhs_table' => 'activities',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'activities_users',
        'join_key_lhs' => 'activity_id',
        'join_key_rhs' => 'parent_id',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'Users',
      ),
      'activities_teams' => 
      array (
        'lhs_module' => 'Activities',
        'lhs_table' => 'activities',
        'lhs_key' => 'id',
        'rhs_module' => 'Teams',
        'rhs_table' => 'teams',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'activities_users',
        'join_key_lhs' => 'activity_id',
        'join_key_rhs' => 'parent_id',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'Teams',
      ),
    ),
    'lhs_module' => 'Activities',
    'lhs_table' => 'activities',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'activity_id',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Users',
  ),
  'activities_teams' => 
  array (
    'name' => 'activities_teams',
    'lhs_module' => 'Activities',
    'lhs_table' => 'activities',
    'lhs_key' => 'id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'activity_id',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Teams',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'kbusefulness' => 
  array (
    'name' => 'kbusefulness',
    'table' => 'kbusefulness',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'kbarticle_id' => 
      array (
        'name' => 'kbarticle_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'user_id' => 
      array (
        'name' => 'user_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
        'len' => 36,
        'required' => false,
        'isnull' => true,
      ),
      'vote' => 
      array (
        'name' => 'vote',
        'type' => 'smallint',
        'isnull' => 'true',
      ),
      'zeroflag' => 
      array (
        'name' => 'zeroflag',
        'type' => 'tinyint',
        'isnull' => 'true',
      ),
      'ssid' => 
      array (
        'name' => 'ssid',
        'type' => 'id',
        'isnull' => 'true',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'kbusefulness_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'kbusefulness_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'kbarticle_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'kbusefulness' => 
      array (
        'lhs_module' => 'Users',
        'lhs_table' => 'users',
        'lhs_key' => 'id',
        'rhs_module' => 'KBContents',
        'rhs_table' => 'kbcontents',
        'rhs_key' => 'kbarticle_id',
        'join_key_rhs' => 'kbarticle_id',
        'join_key_lhs' => 'user_id',
        'true_relationship_type' => 'many-to-many',
        'primary_flag_column' => 'zeroflag',
        'relationship_class' => 'KBUsefulnessRelationship',
        'relationship_file' => 'modules/KBContents/KBUsefulnessRelationship.php',
      ),
    ),
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'kbarticle_id',
    'join_key_rhs' => 'kbarticle_id',
    'join_key_lhs' => 'user_id',
    'true_relationship_type' => 'many-to-many',
    'primary_flag_column' => 'zeroflag',
    'relationship_class' => 'KBUsefulnessRelationship',
    'relationship_file' => 'modules/KBContents/KBUsefulnessRelationship.php',
  ),
  'jckl_filtertemplates_jckl_filterselections' => 
  array (
    'name' => 'jckl_filtertemplates_jckl_filterselections',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'jckl_filtertemplates_jckl_filterselections' => 
      array (
        'lhs_module' => 'jckl_FilterTemplates',
        'lhs_table' => 'jckl_filtertemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'jckl_FilterSelections',
        'rhs_table' => 'jckl_filterselections',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'jckl_filtertemplates_jckl_filterselections_c',
        'join_key_lhs' => 'jckl_filtertemplates_ida',
        'join_key_rhs' => 'jckl_filterselections_idb',
      ),
    ),
    'table' => 'jckl_filtertemplates_jckl_filterselections_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'jckl_filtertemplates_ida' => 
      array (
        'name' => 'jckl_filtertemplates_ida',
        'type' => 'id',
      ),
      'jckl_filterselections_idb' => 
      array (
        'name' => 'jckl_filterselections_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'jckl_filtertemplates_jckl_filterselectionsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'jckl_filtertemplates_jckl_filterselections_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'jckl_filtertemplates_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'jckl_filtertemplates_jckl_filterselections_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'jckl_filterselections_idb',
        ),
      ),
    ),
    'lhs_module' => 'jckl_FilterTemplates',
    'lhs_table' => 'jckl_filtertemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterSelections',
    'rhs_table' => 'jckl_filterselections',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'jckl_filtertemplates_jckl_filterselections_c',
    'join_key_lhs' => 'jckl_filtertemplates_ida',
    'join_key_rhs' => 'jckl_filterselections_idb',
  ),
  'jckl_filtertemplates_jckl_filterdeployments' => 
  array (
    'name' => 'jckl_filtertemplates_jckl_filterdeployments',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'jckl_filtertemplates_jckl_filterdeployments' => 
      array (
        'lhs_module' => 'jckl_FilterTemplates',
        'lhs_table' => 'jckl_filtertemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'jckl_FilterDeployments',
        'rhs_table' => 'jckl_filterdeployments',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'jckl_filtertemplates_jckl_filterdeployments_c',
        'join_key_lhs' => 'jckl_filtertemplates_ida',
        'join_key_rhs' => 'jckl_filterdeployments_idb',
      ),
    ),
    'table' => 'jckl_filtertemplates_jckl_filterdeployments_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'jckl_filtertemplates_ida' => 
      array (
        'name' => 'jckl_filtertemplates_ida',
        'type' => 'id',
      ),
      'jckl_filterdeployments_idb' => 
      array (
        'name' => 'jckl_filterdeployments_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'jckl_filtertemplates_jckl_filterdeploymentsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'jckl_filtertemplates_jckl_filterdeployments_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'jckl_filtertemplates_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'jckl_filtertemplates_jckl_filterdeployments_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'jckl_filterdeployments_idb',
        ),
      ),
    ),
    'lhs_module' => 'jckl_FilterTemplates',
    'lhs_table' => 'jckl_filtertemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterDeployments',
    'rhs_table' => 'jckl_filterdeployments',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'jckl_filtertemplates_jckl_filterdeployments_c',
    'join_key_lhs' => 'jckl_filtertemplates_ida',
    'join_key_rhs' => 'jckl_filterdeployments_idb',
  ),
  'cases_mv_srvreq_1' => 
  array (
    'name' => 'cases_mv_srvreq_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'cases_mv_srvreq_1' => 
      array (
        'lhs_module' => 'Cases',
        'lhs_table' => 'cases',
        'lhs_key' => 'id',
        'rhs_module' => 'mv_SrvReq',
        'rhs_table' => 'mv_srvreq',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'cases_mv_srvreq_1_c',
        'join_key_lhs' => 'cases_mv_srvreq_1cases_ida',
        'join_key_rhs' => 'cases_mv_srvreq_1mv_srvreq_idb',
      ),
    ),
    'table' => 'cases_mv_srvreq_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'cases_mv_srvreq_1cases_ida' => 
      array (
        'name' => 'cases_mv_srvreq_1cases_ida',
        'type' => 'id',
      ),
      'cases_mv_srvreq_1mv_srvreq_idb' => 
      array (
        'name' => 'cases_mv_srvreq_1mv_srvreq_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_cases_mv_srvreq_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_cases_mv_srvreq_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'cases_mv_srvreq_1cases_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cases_mv_srvreq_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'cases_mv_srvreq_1mv_srvreq_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'cases_mv_srvreq_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'cases_mv_srvreq_1mv_srvreq_idb',
        ),
      ),
    ),
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_SrvReq',
    'rhs_table' => 'mv_srvreq',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'cases_mv_srvreq_1_c',
    'join_key_lhs' => 'cases_mv_srvreq_1cases_ida',
    'join_key_rhs' => 'cases_mv_srvreq_1mv_srvreq_idb',
  ),
  'm_cams_opportunities_1' => 
  array (
    'name' => 'm_cams_opportunities_1',
    'true_relationship_type' => 'one-to-one',
    'from_studio' => true,
    'relationships' => 
    array (
      'm_cams_opportunities_1' => 
      array (
        'lhs_module' => 'm_CAMS',
        'lhs_table' => 'm_cams',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'm_cams_opportunities_1_c',
        'join_key_lhs' => 'm_cams_opportunities_1m_cams_ida',
        'join_key_rhs' => 'm_cams_opportunities_1opportunities_idb',
      ),
    ),
    'table' => 'm_cams_opportunities_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'm_cams_opportunities_1m_cams_ida' => 
      array (
        'name' => 'm_cams_opportunities_1m_cams_ida',
        'type' => 'id',
      ),
      'm_cams_opportunities_1opportunities_idb' => 
      array (
        'name' => 'm_cams_opportunities_1opportunities_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_m_cams_opportunities_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_m_cams_opportunities_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'm_cams_opportunities_1m_cams_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_m_cams_opportunities_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'm_cams_opportunities_1opportunities_idb',
          1 => 'deleted',
        ),
      ),
    ),
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'm_cams_opportunities_1_c',
    'join_key_lhs' => 'm_cams_opportunities_1m_cams_ida',
    'join_key_rhs' => 'm_cams_opportunities_1opportunities_idb',
  ),
  'opportunities_cases_1' => 
  array (
    'name' => 'opportunities_cases_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'opportunities_cases_1' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_cases_1_c',
        'join_key_lhs' => 'opportunities_cases_1opportunities_ida',
        'join_key_rhs' => 'opportunities_cases_1cases_idb',
      ),
    ),
    'table' => 'opportunities_cases_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'opportunities_cases_1opportunities_ida' => 
      array (
        'name' => 'opportunities_cases_1opportunities_ida',
        'type' => 'id',
      ),
      'opportunities_cases_1cases_idb' => 
      array (
        'name' => 'opportunities_cases_1cases_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_opportunities_cases_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_opportunities_cases_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunities_cases_1opportunities_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_opportunities_cases_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunities_cases_1cases_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'opportunities_cases_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunities_cases_1cases_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_cases_1_c',
    'join_key_lhs' => 'opportunities_cases_1opportunities_ida',
    'join_key_rhs' => 'opportunities_cases_1cases_idb',
  ),
  'contacts_leads_1' => 
  array (
    'name' => 'contacts_leads_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'contacts_leads_1' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_leads_1_c',
        'join_key_lhs' => 'contacts_leads_1contacts_ida',
        'join_key_rhs' => 'contacts_leads_1leads_idb',
      ),
    ),
    'table' => 'contacts_leads_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'contacts_leads_1contacts_ida' => 
      array (
        'name' => 'contacts_leads_1contacts_ida',
        'type' => 'id',
      ),
      'contacts_leads_1leads_idb' => 
      array (
        'name' => 'contacts_leads_1leads_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_contacts_leads_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_contacts_leads_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contacts_leads_1contacts_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_contacts_leads_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contacts_leads_1leads_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'contacts_leads_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contacts_leads_1leads_idb',
        ),
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_leads_1_c',
    'join_key_lhs' => 'contacts_leads_1contacts_ida',
    'join_key_rhs' => 'contacts_leads_1leads_idb',
  ),
  'm_cams_activities_1_meetings' => 
  array (
    'name' => 'm_cams_activities_1_meetings',
    'relationships' => 
    array (
      'm_cams_activities_1_meetings' => 
      array (
        'lhs_module' => 'm_CAMS',
        'lhs_table' => 'm_cams',
        'lhs_key' => 'id',
        'rhs_module' => 'Meetings',
        'rhs_table' => 'meetings',
        'relationship_role_column_value' => 'm_CAMS',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
      ),
    ),
    'fields' => '',
    'indices' => '',
    'table' => '',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'relationship_role_column_value' => 'm_CAMS',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'm_cams_activities_1_calls' => 
  array (
    'name' => 'm_cams_activities_1_calls',
    'relationships' => 
    array (
      'm_cams_activities_1_calls' => 
      array (
        'lhs_module' => 'm_CAMS',
        'lhs_table' => 'm_cams',
        'lhs_key' => 'id',
        'rhs_module' => 'Calls',
        'rhs_table' => 'calls',
        'relationship_role_column_value' => 'm_CAMS',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
      ),
    ),
    'fields' => '',
    'indices' => '',
    'table' => '',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'relationship_role_column_value' => 'm_CAMS',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'm_cams_activities_1_notes' => 
  array (
    'name' => 'm_cams_activities_1_notes',
    'relationships' => 
    array (
      'm_cams_activities_1_notes' => 
      array (
        'lhs_module' => 'm_CAMS',
        'lhs_table' => 'm_cams',
        'lhs_key' => 'id',
        'rhs_module' => 'Notes',
        'rhs_table' => 'notes',
        'relationship_role_column_value' => 'm_CAMS',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
      ),
    ),
    'fields' => '',
    'indices' => '',
    'table' => '',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'relationship_role_column_value' => 'm_CAMS',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'm_cams_activities_1_tasks' => 
  array (
    'name' => 'm_cams_activities_1_tasks',
    'relationships' => 
    array (
      'm_cams_activities_1_tasks' => 
      array (
        'lhs_module' => 'm_CAMS',
        'lhs_table' => 'm_cams',
        'lhs_key' => 'id',
        'rhs_module' => 'Tasks',
        'rhs_table' => 'tasks',
        'relationship_role_column_value' => 'm_CAMS',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
      ),
    ),
    'fields' => '',
    'indices' => '',
    'table' => '',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'relationship_role_column_value' => 'm_CAMS',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'm_cams_activities_1_emails' => 
  array (
    'name' => 'm_cams_activities_1_emails',
    'relationships' => 
    array (
      'm_cams_activities_1_emails' => 
      array (
        'lhs_module' => 'm_CAMS',
        'lhs_table' => 'm_cams',
        'lhs_key' => 'id',
        'rhs_module' => 'Emails',
        'rhs_table' => 'emails',
        'relationship_role_column_value' => 'm_CAMS',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'emails_beans',
        'join_key_rhs' => 'email_id',
        'join_key_lhs' => 'bean_id',
        'relationship_role_column' => 'bean_module',
      ),
    ),
    'fields' => '',
    'indices' => '',
    'table' => '',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'relationship_role_column_value' => 'm_CAMS',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_rhs' => 'email_id',
    'join_key_lhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
  ),
  'dp_doucumentspackets_m_cams' => 
  array (
    'name' => 'dp_doucumentspackets_m_cams',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'dp_doucumentspackets_m_cams' => 
      array (
        'lhs_module' => 'DP_DoucumentsPackets',
        'lhs_table' => 'dp_doucumentspackets',
        'lhs_key' => 'id',
        'rhs_module' => 'm_CAMS',
        'rhs_table' => 'm_cams',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'dp_doucumentspackets_m_cams',
        'join_key_lhs' => 'dp_doucumentspackets_m_camsdp_doucumentspackets_ida',
        'join_key_rhs' => 'dp_doucumentspackets_m_camsm_cams_idb',
      ),
    ),
    'table' => 'dp_doucumentspackets_m_cams',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'dp_doucumentspackets_m_camsdp_doucumentspackets_ida' => 
      array (
        'name' => 'dp_doucumentspackets_m_camsdp_doucumentspackets_ida',
        'type' => 'id',
      ),
      'dp_doucumentspackets_m_camsm_cams_idb' => 
      array (
        'name' => 'dp_doucumentspackets_m_camsm_cams_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_dp_doucumentspackets_m_cams_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_dp_doucumentspackets_m_cams_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_m_camsdp_doucumentspackets_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_dp_doucumentspackets_m_cams_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_m_camsm_cams_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'dp_doucumentspackets_m_cams_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_m_camsdp_doucumentspackets_ida',
          1 => 'dp_doucumentspackets_m_camsm_cams_idb',
        ),
      ),
    ),
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'dp_doucumentspackets_m_cams',
    'join_key_lhs' => 'dp_doucumentspackets_m_camsdp_doucumentspackets_ida',
    'join_key_rhs' => 'dp_doucumentspackets_m_camsm_cams_idb',
  ),
  'dp_doucumentspackets_cases' => 
  array (
    'name' => 'dp_doucumentspackets_cases',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'dp_doucumentspackets_cases' => 
      array (
        'lhs_module' => 'DP_DoucumentsPackets',
        'lhs_table' => 'dp_doucumentspackets',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'dp_doucumentspackets_cases',
        'join_key_lhs' => 'dp_doucumentspackets_casesdp_doucumentspackets_ida',
        'join_key_rhs' => 'dp_doucumentspackets_casescases_idb',
      ),
    ),
    'table' => 'dp_doucumentspackets_cases',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'dp_doucumentspackets_casesdp_doucumentspackets_ida' => 
      array (
        'name' => 'dp_doucumentspackets_casesdp_doucumentspackets_ida',
        'type' => 'id',
      ),
      'dp_doucumentspackets_casescases_idb' => 
      array (
        'name' => 'dp_doucumentspackets_casescases_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_dp_doucumentspackets_cases_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_dp_doucumentspackets_cases_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_casesdp_doucumentspackets_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_dp_doucumentspackets_cases_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_casescases_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'dp_doucumentspackets_cases_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_casesdp_doucumentspackets_ida',
          1 => 'dp_doucumentspackets_casescases_idb',
        ),
      ),
    ),
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'dp_doucumentspackets_cases',
    'join_key_lhs' => 'dp_doucumentspackets_casesdp_doucumentspackets_ida',
    'join_key_rhs' => 'dp_doucumentspackets_casescases_idb',
  ),
  'dp_doucumentspackets_mv_attachments_1' => 
  array (
    'name' => 'dp_doucumentspackets_mv_attachments_1',
    'true_relationship_type' => 'one-to-one',
    'from_studio' => true,
    'relationships' => 
    array (
      'dp_doucumentspackets_mv_attachments_1' => 
      array (
        'lhs_module' => 'DP_DoucumentsPackets',
        'lhs_table' => 'dp_doucumentspackets',
        'lhs_key' => 'id',
        'rhs_module' => 'mv_Attachments',
        'rhs_table' => 'mv_attachments',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'dp_doucumentspackets_mv_attachments_1_c',
        'join_key_lhs' => 'dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida',
        'join_key_rhs' => 'dp_doucumentspackets_mv_attachments_1mv_attachments_idb',
      ),
    ),
    'table' => 'dp_doucumentspackets_mv_attachments_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida' => 
      array (
        'name' => 'dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida',
        'type' => 'id',
      ),
      'dp_doucumentspackets_mv_attachments_1mv_attachments_idb' => 
      array (
        'name' => 'dp_doucumentspackets_mv_attachments_1mv_attachments_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_dp_doucumentspackets_mv_attachments_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_dp_doucumentspackets_mv_attachments_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_dp_doucumentspackets_mv_attachments_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_mv_attachments_1mv_attachments_idb',
          1 => 'deleted',
        ),
      ),
    ),
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'dp_doucumentspackets_mv_attachments_1_c',
    'join_key_lhs' => 'dp_doucumentspackets_mv_attachments_1dp_doucumentspackets_ida',
    'join_key_rhs' => 'dp_doucumentspackets_mv_attachments_1mv_attachments_idb',
  ),
  'dp_doucumentspackets_attachments' => 
  array (
    'name' => 'dp_doucumentspackets_attachments',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'dp_doucumentspackets_attachments' => 
      array (
        'lhs_module' => 'DP_DoucumentsPackets',
        'lhs_table' => 'dp_doucumentspackets',
        'lhs_key' => 'id',
        'rhs_module' => 'mv_Attachments',
        'rhs_table' => 'mv_attachments',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'dp_doucumentspackets_attachments',
        'join_key_lhs' => 'packet_id',
        'join_key_rhs' => 'attachment_id',
      ),
    ),
    'table' => 'dp_doucumentspackets_attachments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'packet_id' => 
      array (
        'name' => 'packet_id',
        'type' => 'id',
      ),
      'attachment_id' => 
      array (
        'name' => 'attachment_id',
        'type' => 'id',
      ),
      'document_status' => 
      array (
        'name' => 'document_status',
        'type' => 'varchar',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_dp_doucumentspackets_attachment_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_dp_doucumentspackets_attachment_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'packet_id',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_dp_doucumentspackets_attachment_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'attachment_id',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'dp_doucumentspackets_attachment_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'packet_id',
          1 => 'attachment_id',
        ),
      ),
    ),
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'dp_doucumentspackets_attachments',
    'join_key_lhs' => 'packet_id',
    'join_key_rhs' => 'attachment_id',
  ),
  'dp_doucumentspackets_accounts' => 
  array (
    'name' => 'dp_doucumentspackets_accounts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'dp_doucumentspackets_accounts' => 
      array (
        'lhs_module' => 'DP_DoucumentsPackets',
        'lhs_table' => 'dp_doucumentspackets',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'dp_doucumentspackets_accounts_c',
        'join_key_lhs' => 'dp_doucumentspackets_accountsdp_doucumentspackets_ida',
        'join_key_rhs' => 'dp_doucumentspackets_accountsaccounts_idb',
      ),
    ),
    'table' => 'dp_doucumentspackets_accounts_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'dp_doucumentspackets_accountsdp_doucumentspackets_ida' => 
      array (
        'name' => 'dp_doucumentspackets_accountsdp_doucumentspackets_ida',
        'type' => 'id',
      ),
      'dp_doucumentspackets_accountsaccounts_idb' => 
      array (
        'name' => 'dp_doucumentspackets_accountsaccounts_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_dp_doucumentspackets_accounts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_dp_doucumentspackets_accounts_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_accountsdp_doucumentspackets_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_dp_doucumentspackets_accounts_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_accountsaccounts_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'dp_doucumentspackets_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_accountsdp_doucumentspackets_ida',
          1 => 'dp_doucumentspackets_accountsaccounts_idb',
        ),
      ),
    ),
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'dp_doucumentspackets_accounts_c',
    'join_key_lhs' => 'dp_doucumentspackets_accountsdp_doucumentspackets_ida',
    'join_key_rhs' => 'dp_doucumentspackets_accountsaccounts_idb',
  ),
  'dp_doucumentspackets_contacts' => 
  array (
    'name' => 'dp_doucumentspackets_contacts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'dp_doucumentspackets_contacts' => 
      array (
        'lhs_module' => 'DP_DoucumentsPackets',
        'lhs_table' => 'dp_doucumentspackets',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'dp_doucumentspackets_contacts_c',
        'join_key_lhs' => 'dp_doucumentspackets_contactsdp_doucumentspackets_ida',
        'join_key_rhs' => 'dp_doucumentspackets_contactscontacts_idb',
      ),
    ),
    'table' => 'dp_doucumentspackets_contacts_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'dp_doucumentspackets_contactsdp_doucumentspackets_ida' => 
      array (
        'name' => 'dp_doucumentspackets_contactsdp_doucumentspackets_ida',
        'type' => 'id',
      ),
      'dp_doucumentspackets_contactscontacts_idb' => 
      array (
        'name' => 'dp_doucumentspackets_contactscontacts_idb',
        'type' => 'id',
      ),
      'receipnt_status' => 
      array (
        'name' => 'receipnt_status',
        'type' => 'varchar',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_dp_doucumentspackets_contacts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_dp_doucumentspackets_contacts_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_contactsdp_doucumentspackets_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_dp_doucumentspackets_contacts_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_contactscontacts_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'dp_doucumentspackets_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_contactsdp_doucumentspackets_ida',
          1 => 'dp_doucumentspackets_contactscontacts_idb',
        ),
      ),
    ),
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'dp_doucumentspackets_contacts_c',
    'join_key_lhs' => 'dp_doucumentspackets_contactsdp_doucumentspackets_ida',
    'join_key_rhs' => 'dp_doucumentspackets_contactscontacts_idb',
  ),
  'dp_doucumentspackets_opportunities_1' => 
  array (
    'name' => 'dp_doucumentspackets_opportunities_1',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'dp_doucumentspackets_opportunities_1' => 
      array (
        'lhs_module' => 'DP_DoucumentsPackets',
        'lhs_table' => 'dp_doucumentspackets',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'dp_doucumentspackets_opportunities_1_c',
        'join_key_lhs' => 'dp_doucumentspackets_opportunities_1dp_doucumentspackets_ida',
        'join_key_rhs' => 'dp_doucumentspackets_opportunities_1opportunities_idb',
      ),
    ),
    'table' => 'dp_doucumentspackets_opportunities_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'dp_doucumentspackets_opportunities_1dp_doucumentspackets_ida' => 
      array (
        'name' => 'dp_doucumentspackets_opportunities_1dp_doucumentspackets_ida',
        'type' => 'id',
      ),
      'dp_doucumentspackets_opportunities_1opportunities_idb' => 
      array (
        'name' => 'dp_doucumentspackets_opportunities_1opportunities_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_dp_doucumentspackets_opportunities_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_dp_doucumentspackets_opportunities_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_opportunities_1dp_doucumentspackets_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_dp_doucumentspackets_opportunities_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_opportunities_1opportunities_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'dp_doucumentspackets_opportunities_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_opportunities_1dp_doucumentspackets_ida',
          1 => 'dp_doucumentspackets_opportunities_1opportunities_idb',
        ),
      ),
    ),
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'dp_doucumentspackets_opportunities_1_c',
    'join_key_lhs' => 'dp_doucumentspackets_opportunities_1dp_doucumentspackets_ida',
    'join_key_rhs' => 'dp_doucumentspackets_opportunities_1opportunities_idb',
  ),
  'dp_doucumentspackets_leads_1' => 
  array (
    'name' => 'dp_doucumentspackets_leads_1',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'dp_doucumentspackets_leads_1' => 
      array (
        'lhs_module' => 'DP_DoucumentsPackets',
        'lhs_table' => 'dp_doucumentspackets',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'dp_doucumentspackets_leads_1_c',
        'join_key_lhs' => 'dp_doucumentspackets_leads_1dp_doucumentspackets_ida',
        'join_key_rhs' => 'dp_doucumentspackets_leads_1leads_idb',
      ),
    ),
    'table' => 'dp_doucumentspackets_leads_1_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'dp_doucumentspackets_leads_1dp_doucumentspackets_ida' => 
      array (
        'name' => 'dp_doucumentspackets_leads_1dp_doucumentspackets_ida',
        'type' => 'id',
      ),
      'dp_doucumentspackets_leads_1leads_idb' => 
      array (
        'name' => 'dp_doucumentspackets_leads_1leads_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_dp_doucumentspackets_leads_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_dp_doucumentspackets_leads_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_leads_1dp_doucumentspackets_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_dp_doucumentspackets_leads_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_leads_1leads_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'dp_doucumentspackets_leads_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_leads_1dp_doucumentspackets_ida',
          1 => 'dp_doucumentspackets_leads_1leads_idb',
        ),
      ),
    ),
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'dp_doucumentspackets_leads_1_c',
    'join_key_lhs' => 'dp_doucumentspackets_leads_1dp_doucumentspackets_ida',
    'join_key_rhs' => 'dp_doucumentspackets_leads_1leads_idb',
  ),
  'dp_doucumentspackets_documents' => 
  array (
    'name' => 'dp_doucumentspackets_documents',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'dp_doucumentspackets_documents' => 
      array (
        'lhs_module' => 'DP_DoucumentsPackets',
        'lhs_table' => 'dp_doucumentspackets',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'dp_doucumentspackets_documents_c',
        'join_key_lhs' => 'dp_doucumentspackets_documentsdp_doucumentspackets_ida',
        'join_key_rhs' => 'dp_doucumentspackets_documentsdocuments_idb',
      ),
    ),
    'table' => 'dp_doucumentspackets_documents_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'dp_doucumentspackets_documentsdp_doucumentspackets_ida' => 
      array (
        'name' => 'dp_doucumentspackets_documentsdp_doucumentspackets_ida',
        'type' => 'id',
      ),
      'dp_doucumentspackets_documentsdocuments_idb' => 
      array (
        'name' => 'dp_doucumentspackets_documentsdocuments_idb',
        'type' => 'id',
      ),
      'document_revision_id' => 
      array (
        'name' => 'document_revision_id',
        'type' => 'id',
      ),
      'document_status' => 
      array (
        'name' => 'document_status',
        'type' => 'varchar',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_dp_doucumentspackets_documents_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_dp_doucumentspackets_documents_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_documentsdp_doucumentspackets_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_dp_doucumentspackets_documents_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_documentsdocuments_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'dp_doucumentspackets_documents_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'dp_doucumentspackets_documentsdp_doucumentspackets_ida',
          1 => 'dp_doucumentspackets_documentsdocuments_idb',
        ),
      ),
    ),
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'dp_doucumentspackets_documents_c',
    'join_key_lhs' => 'dp_doucumentspackets_documentsdp_doucumentspackets_ida',
    'join_key_rhs' => 'dp_doucumentspackets_documentsdocuments_idb',
  ),
  'mvh_colorselection_m_cams' => 
  array (
    'name' => 'mvh_colorselection_m_cams',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'mvh_colorselection_m_cams' => 
      array (
        'lhs_module' => 'mvh_Colorselection',
        'lhs_table' => 'mvh_colorselection',
        'lhs_key' => 'id',
        'rhs_module' => 'm_CAMS',
        'rhs_table' => 'm_cams',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'mvh_colorselection_m_cams_c',
        'join_key_lhs' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
        'join_key_rhs' => 'mvh_colorselection_m_camsm_cams_idb',
      ),
    ),
    'table' => 'mvh_colorselection_m_cams_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'mvh_colorselection_m_camsmvh_colorselection_ida' => 
      array (
        'name' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
        'type' => 'id',
      ),
      'mvh_colorselection_m_camsm_cams_idb' => 
      array (
        'name' => 'mvh_colorselection_m_camsm_cams_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_mvh_colorselection_m_cams_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_mvh_colorselection_m_cams_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'mvh_colorselection_m_camsmvh_colorselection_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_mvh_colorselection_m_cams_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'mvh_colorselection_m_camsm_cams_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'mvh_colorselection_m_cams_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'mvh_colorselection_m_camsm_cams_idb',
        ),
      ),
    ),
    'lhs_module' => 'mvh_Colorselection',
    'lhs_table' => 'mvh_colorselection',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'mvh_colorselection_m_cams_c',
    'join_key_lhs' => 'mvh_colorselection_m_camsmvh_colorselection_ida',
    'join_key_rhs' => 'mvh_colorselection_m_camsm_cams_idb',
  ),
  'mvh_colorselection_opportunities' => 
  array (
    'name' => 'mvh_colorselection_opportunities',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'mvh_colorselection_opportunities' => 
      array (
        'lhs_module' => 'mvh_Colorselection',
        'lhs_table' => 'mvh_colorselection',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'mvh_colorselection_opportunities_c',
        'join_key_lhs' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
        'join_key_rhs' => 'mvh_colorselection_opportunitiesopportunities_idb',
      ),
    ),
    'table' => 'mvh_colorselection_opportunities_c',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
      'mvh_colorselection_opportunitiesmvh_colorselection_ida' => 
      array (
        'name' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
        'type' => 'id',
      ),
      'mvh_colorselection_opportunitiesopportunities_idb' => 
      array (
        'name' => 'mvh_colorselection_opportunitiesopportunities_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_mvh_colorselection_opportunities_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_mvh_colorselection_opportunities_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_mvh_colorselection_opportunities_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'mvh_colorselection_opportunitiesopportunities_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'mvh_colorselection_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'mvh_colorselection_opportunitiesopportunities_idb',
        ),
      ),
    ),
    'lhs_module' => 'mvh_Colorselection',
    'lhs_table' => 'mvh_colorselection',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'mvh_colorselection_opportunities_c',
    'join_key_lhs' => 'mvh_colorselection_opportunitiesmvh_colorselection_ida',
    'join_key_rhs' => 'mvh_colorselection_opportunitiesopportunities_idb',
  ),
  'user_direct_reports' => 
  array (
    'name' => 'user_direct_reports',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_users_signatures' => 
  array (
    'name' => 'users_users_signatures',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UserSignatures',
    'rhs_table' => 'users_signatures',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_email_addresses' => 
  array (
    'name' => 'users_email_addresses',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'users_email_addresses_primary' => 
  array (
    'name' => 'users_email_addresses_primary',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_columns' => 
    array (
      'primary_address' => '1',
      'bean_module' => 'Users',
    ),
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'users_team_count_relationship' => 
  array (
    'name' => 'users_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_teams' => 
  array (
    'name' => 'users_teams',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'users_forecasts' => 
  array (
    'name' => 'users_forecasts',
    'rhs_module' => 'Forecasts',
    'rhs_table' => 'forecasts',
    'rhs_key' => 'user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'forecast_type',
    'relationship_role_column_value' => 'Rollup',
  ),
  'users_quotas' => 
  array (
    'name' => 'users_quotas',
    'rhs_module' => 'Quotas',
    'rhs_table' => 'quotas',
    'rhs_key' => 'user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'quota_type',
    'relationship_role_column_value' => 'Direct',
  ),
  'users_team_sets' => 
  array (
    'name' => 'users_team_sets',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_id',
    'join_key_rhs' => 'team_set_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'users_team' => 
  array (
    'name' => 'users_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'default_team',
    'relationship_type' => 'one-to-many',
  ),
  'users_acl_role_sets' => 
  array (
    'name' => 'users_acl_role_sets',
    'lhs_module' => 'ACLRoleSets',
    'lhs_table' => 'acl_role_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'acl_role_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_created_by' => 
  array (
    'name' => 'users_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'created_by',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'outbound_email_email_addresses' => 
  array (
    'name' => 'outbound_email_email_addresses',
    'lhs_module' => 'EmailAddresses',
    'lhs_table' => 'email_addresses',
    'lhs_key' => 'id',
    'rhs_module' => 'OutboundEmail',
    'rhs_table' => 'outbound_email',
    'rhs_key' => 'email_address_id',
    'relationship_type' => 'one-to-many',
  ),
  'teams_modified_user' => 
  array (
    'name' => 'teams_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'teams_created_by' => 
  array (
    'name' => 'teams_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'team_activities' => 
  array (
    'name' => 'team_activities',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Teams',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'teams_following' => 
  array (
    'name' => 'teams_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Teams',
    'user_field' => 'created_by',
  ),
  'teams_favorite' => 
  array (
    'name' => 'teams_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Teams',
    'user_field' => 'created_by',
  ),
  'teams_locked_fields' => 
  array (
    'name' => 'teams_locked_fields',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Teams',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'calls_modified_user' => 
  array (
    'name' => 'calls_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_created_by' => 
  array (
    'name' => 'calls_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'call_activities' => 
  array (
    'name' => 'call_activities',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'calls_assigned_user' => 
  array (
    'name' => 'calls_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_notes' => 
  array (
    'name' => 'calls_notes',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
  ),
  'calls_following' => 
  array (
    'name' => 'calls_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
    'user_field' => 'created_by',
  ),
  'calls_favorite' => 
  array (
    'name' => 'calls_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Calls',
    'user_field' => 'created_by',
  ),
  'calls_tags' => 
  array (
    'name' => 'calls_tags',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Calls',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'calls_locked_fields' => 
  array (
    'name' => 'calls_locked_fields',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Calls',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'calls_team_count_relationship' => 
  array (
    'name' => 'calls_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_teams' => 
  array (
    'name' => 'calls_teams',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'calls_team' => 
  array (
    'name' => 'calls_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_flex_relate_dri_workflows' => 
  array (
    'name' => 'calls_flex_relate_dri_workflows',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'relationship_role_column_value' => 'Calls',
    'relationship_role_column' => 'parent_type',
  ),
  'call_dri_workflow_task_templates' => 
  array (
    'name' => 'call_dri_workflow_task_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Task_Templates',
    'lhs_table' => 'dri_workflow_task_templates',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'dri_workflow_task_template_id',
  ),
  'call_dri_subworkflows' => 
  array (
    'name' => 'call_dri_subworkflows',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_SubWorkflows',
    'lhs_table' => 'dri_subworkflows',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'dri_subworkflow_id',
  ),
  'call_dri_subworkflow_templates' => 
  array (
    'name' => 'call_dri_subworkflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_SubWorkflow_Templates',
    'lhs_table' => 'dri_subworkflow_templates',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'dri_subworkflow_template_id',
  ),
  'call_dri_workflow_templates' => 
  array (
    'name' => 'call_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'calls_mv_attachments' => 
  array (
    'name' => 'calls_mv_attachments',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
  ),
  'meetings_modified_user' => 
  array (
    'name' => 'meetings_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_created_by' => 
  array (
    'name' => 'meetings_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'meeting_activities' => 
  array (
    'name' => 'meeting_activities',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'meetings_assigned_user' => 
  array (
    'name' => 'meetings_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_notes' => 
  array (
    'name' => 'meetings_notes',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
  ),
  'meetings_following' => 
  array (
    'name' => 'meetings_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
    'user_field' => 'created_by',
  ),
  'meetings_favorite' => 
  array (
    'name' => 'meetings_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Meetings',
    'user_field' => 'created_by',
  ),
  'meetings_tags' => 
  array (
    'name' => 'meetings_tags',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Meetings',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'meetings_locked_fields' => 
  array (
    'name' => 'meetings_locked_fields',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Meetings',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'meetings_team_count_relationship' => 
  array (
    'name' => 'meetings_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_teams' => 
  array (
    'name' => 'meetings_teams',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'meetings_team' => 
  array (
    'name' => 'meetings_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_flex_relate_dri_workflows' => 
  array (
    'name' => 'meetings_flex_relate_dri_workflows',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'relationship_role_column_value' => 'Meetings',
    'relationship_role_column' => 'parent_type',
  ),
  'meeting_dri_workflow_task_templates' => 
  array (
    'name' => 'meeting_dri_workflow_task_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Task_Templates',
    'lhs_table' => 'dri_workflow_task_templates',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'dri_workflow_task_template_id',
  ),
  'meeting_dri_subworkflows' => 
  array (
    'name' => 'meeting_dri_subworkflows',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_SubWorkflows',
    'lhs_table' => 'dri_subworkflows',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'dri_subworkflow_id',
  ),
  'meeting_dri_subworkflow_templates' => 
  array (
    'name' => 'meeting_dri_subworkflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_SubWorkflow_Templates',
    'lhs_table' => 'dri_subworkflow_templates',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'dri_subworkflow_template_id',
  ),
  'meeting_dri_workflow_templates' => 
  array (
    'name' => 'meeting_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'meetings_mv_attachments' => 
  array (
    'name' => 'meetings_mv_attachments',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
  ),
  'tasks_modified_user' => 
  array (
    'name' => 'tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_created_by' => 
  array (
    'name' => 'tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'task_activities' => 
  array (
    'name' => 'task_activities',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'tasks_notes' => 
  array (
    'name' => 'tasks_notes',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Tasks',
  ),
  'tasks_assigned_user' => 
  array (
    'name' => 'tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'task_meetings_parent' => 
  array (
    'name' => 'task_meetings_parent',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Tasks',
  ),
  'task_calls_parent' => 
  array (
    'name' => 'task_calls_parent',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Tasks',
  ),
  'tasks_following' => 
  array (
    'name' => 'tasks_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Tasks',
    'user_field' => 'created_by',
  ),
  'tasks_favorite' => 
  array (
    'name' => 'tasks_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Tasks',
    'user_field' => 'created_by',
  ),
  'tasks_tags' => 
  array (
    'name' => 'tasks_tags',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Tasks',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'tasks_locked_fields' => 
  array (
    'name' => 'tasks_locked_fields',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'tasks_team_count_relationship' => 
  array (
    'name' => 'tasks_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_teams' => 
  array (
    'name' => 'tasks_teams',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'tasks_team' => 
  array (
    'name' => 'tasks_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_flex_relate_dri_workflows' => 
  array (
    'name' => 'tasks_flex_relate_dri_workflows',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'relationship_role_column_value' => 'Tasks',
    'relationship_role_column' => 'parent_type',
  ),
  'task_dri_workflow_task_templates' => 
  array (
    'name' => 'task_dri_workflow_task_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Task_Templates',
    'lhs_table' => 'dri_workflow_task_templates',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'dri_workflow_task_template_id',
  ),
  'task_dri_subworkflows' => 
  array (
    'name' => 'task_dri_subworkflows',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_SubWorkflows',
    'lhs_table' => 'dri_subworkflows',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'dri_subworkflow_id',
  ),
  'task_dri_subworkflow_templates' => 
  array (
    'name' => 'task_dri_subworkflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_SubWorkflow_Templates',
    'lhs_table' => 'dri_subworkflow_templates',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'dri_subworkflow_template_id',
  ),
  'task_dri_workflow_templates' => 
  array (
    'name' => 'task_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'tasks_mv_attachments' => 
  array (
    'name' => 'tasks_mv_attachments',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Tasks',
  ),
  'notes_modified_user' => 
  array (
    'name' => 'notes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_created_by' => 
  array (
    'name' => 'notes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'note_activities' => 
  array (
    'name' => 'note_activities',
    'lhs_module' => 'Notes',
    'lhs_table' => 'notes',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Notes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'notes_following' => 
  array (
    'name' => 'notes_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Notes',
    'user_field' => 'created_by',
  ),
  'notes_favorite' => 
  array (
    'name' => 'notes_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Notes',
    'user_field' => 'created_by',
  ),
  'notes_tags' => 
  array (
    'name' => 'notes_tags',
    'lhs_module' => 'Notes',
    'lhs_table' => 'notes',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Notes',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'notes_locked_fields' => 
  array (
    'name' => 'notes_locked_fields',
    'lhs_module' => 'Notes',
    'lhs_table' => 'notes',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Notes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'notes_assigned_user' => 
  array (
    'name' => 'notes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_team_count_relationship' => 
  array (
    'name' => 'notes_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_teams' => 
  array (
    'name' => 'notes_teams',
    'lhs_module' => 'Notes',
    'lhs_table' => 'notes',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'notes_team' => 
  array (
    'name' => 'notes_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_mv_attachments' => 
  array (
    'name' => 'notes_mv_attachments',
    'lhs_module' => 'Notes',
    'lhs_table' => 'notes',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Notes',
  ),
  'reports_modified_user' => 
  array (
    'name' => 'reports_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reports_created_by' => 
  array (
    'name' => 'reports_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'savedreport_activities' => 
  array (
    'name' => 'savedreport_activities',
    'lhs_module' => 'Reports',
    'lhs_table' => 'saved_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Reports',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'reports_last_run_date' => 
  array (
    'name' => 'reports_last_run_date',
    'lhs_module' => 'Reports',
    'lhs_table' => 'saved_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'join_table' => 'report_cache',
    'join_key_lhs' => 'id',
    'join_key_rhs' => 'assigned_user_id',
    'relationship_type' => 'user-based',
    'user_field' => 'assigned_user_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'id',
        'required' => true,
      ),
      'contents' => 
      array (
        'name' => 'contents',
        'type' => 'text',
        'comment' => 'contents of report object',
        'default' => NULL,
      ),
      'report_options' => 
      array (
        'name' => 'report_options',
        'type' => 'text',
        'comment' => 'options of report object like hide details, hide shart etc..',
        'default' => NULL,
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'varchar',
        'len' => 1,
        'required' => true,
      ),
      'date_entered' => 
      array (
        'name' => 'date_entered',
        'vname' => 'LBL_DATE_ENTERED',
        'type' => 'datetime',
        'required' => true,
        'comment' => 'Date record created',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'vname' => 'LBL_DATE_MODIFIED',
        'type' => 'datetime',
        'required' => true,
        'comment' => 'Date record last modified',
      ),
    ),
  ),
  'reports_reportschedules' => 
  array (
    'name' => 'reports_reportschedules',
    'lhs_module' => 'Reports',
    'lhs_table' => 'saved_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportSchedules',
    'rhs_table' => 'report_schedules',
    'rhs_key' => 'report_id',
    'relationship_type' => 'one-to-many',
  ),
  'reports_favorite' => 
  array (
    'name' => 'reports_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Reports',
    'user_field' => 'created_by',
  ),
  'reports_tags' => 
  array (
    'name' => 'reports_tags',
    'lhs_module' => 'Reports',
    'lhs_table' => 'saved_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Reports',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'reports_assigned_user' => 
  array (
    'name' => 'reports_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reports_team_count_relationship' => 
  array (
    'name' => 'reports_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'reports_teams' => 
  array (
    'name' => 'reports_teams',
    'lhs_module' => 'Reports',
    'lhs_table' => 'saved_reports',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'reports_team' => 
  array (
    'name' => 'reports_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_modified_user' => 
  array (
    'name' => 'leads_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_created_by' => 
  array (
    'name' => 'leads_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'lead_activities' => 
  array (
    'name' => 'lead_activities',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'lead_prospect' => 
  array (
    'name' => 'lead_prospect',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'lead_id',
    'relationship_type' => 'one-to-one',
  ),
  'lead_direct_reports' => 
  array (
    'name' => 'lead_direct_reports',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'lead_tasks' => 
  array (
    'name' => 'lead_tasks',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_notes' => 
  array (
    'name' => 'lead_notes',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_meetings' => 
  array (
    'name' => 'lead_meetings',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_calls' => 
  array (
    'name' => 'lead_calls',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_emails' => 
  array (
    'name' => 'lead_emails',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_campaign_log' => 
  array (
    'name' => 'lead_campaign_log',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_following' => 
  array (
    'name' => 'leads_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
    'user_field' => 'created_by',
  ),
  'leads_favorite' => 
  array (
    'name' => 'leads_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Leads',
    'user_field' => 'created_by',
  ),
  'leads_tags' => 
  array (
    'name' => 'leads_tags',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'leads_locked_fields' => 
  array (
    'name' => 'leads_locked_fields',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'leads_assigned_user' => 
  array (
    'name' => 'leads_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_team_count_relationship' => 
  array (
    'name' => 'leads_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_teams' => 
  array (
    'name' => 'leads_teams',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'leads_team' => 
  array (
    'name' => 'leads_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_email_addresses' => 
  array (
    'name' => 'leads_email_addresses',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'leads_email_addresses_primary' => 
  array (
    'name' => 'leads_email_addresses_primary',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'primary_flag_column' => 'primary_address',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'lead_dri_workflow_templates' => 
  array (
    'name' => 'lead_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'leads_mv_attachments' => 
  array (
    'name' => 'leads_mv_attachments',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'contacts_modified_user' => 
  array (
    'name' => 'contacts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_created_by' => 
  array (
    'name' => 'contacts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contact_activities' => 
  array (
    'name' => 'contact_activities',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'contact_direct_reports' => 
  array (
    'name' => 'contact_direct_reports',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_leads' => 
  array (
    'name' => 'contact_leads',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_notes' => 
  array (
    'name' => 'contact_notes',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_notes_parent' => 
  array (
    'name' => 'contact_notes_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_calls_parent' => 
  array (
    'name' => 'contact_calls_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_meetings_parent' => 
  array (
    'name' => 'contact_meetings_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_tasks' => 
  array (
    'name' => 'contact_tasks',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks_parent' => 
  array (
    'name' => 'contact_tasks_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contacts_assigned_user' => 
  array (
    'name' => 'contacts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_products' => 
  array (
    'name' => 'contact_products',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_campaign_log' => 
  array (
    'name' => 'contact_campaign_log',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_following' => 
  array (
    'name' => 'contacts_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
    'user_field' => 'created_by',
  ),
  'contacts_favorite' => 
  array (
    'name' => 'contacts_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Contacts',
    'user_field' => 'created_by',
  ),
  'contacts_tags' => 
  array (
    'name' => 'contacts_tags',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'contacts_locked_fields' => 
  array (
    'name' => 'contacts_locked_fields',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'contacts_team_count_relationship' => 
  array (
    'name' => 'contacts_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_teams' => 
  array (
    'name' => 'contacts_teams',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'contacts_team' => 
  array (
    'name' => 'contacts_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_email_addresses' => 
  array (
    'name' => 'contacts_email_addresses',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contacts_email_addresses_primary' => 
  array (
    'name' => 'contacts_email_addresses_primary',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'primary_flag_column' => 'primary_address',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contact_dri_workflow_templates' => 
  array (
    'name' => 'contact_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'contacts_mv_attachments' => 
  array (
    'name' => 'contacts_mv_attachments',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'accounts_modified_user' => 
  array (
    'name' => 'accounts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_created_by' => 
  array (
    'name' => 'accounts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'account_activities' => 
  array (
    'name' => 'account_activities',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'member_accounts' => 
  array (
    'name' => 'member_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_cases' => 
  array (
    'name' => 'account_cases',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_tasks' => 
  array (
    'name' => 'account_tasks',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_notes' => 
  array (
    'name' => 'account_notes',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_meetings' => 
  array (
    'name' => 'account_meetings',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_calls' => 
  array (
    'name' => 'account_calls',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_emails' => 
  array (
    'name' => 'account_emails',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_leads' => 
  array (
    'name' => 'account_leads',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_assigned_user' => 
  array (
    'name' => 'accounts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_campaign_log' => 
  array (
    'name' => 'account_campaign_log',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_following' => 
  array (
    'name' => 'accounts_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'user_field' => 'created_by',
  ),
  'accounts_favorite' => 
  array (
    'name' => 'accounts_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Accounts',
    'user_field' => 'created_by',
  ),
  'accounts_tags' => 
  array (
    'name' => 'accounts_tags',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'accounts_locked_fields' => 
  array (
    'name' => 'accounts_locked_fields',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'accounts_team_count_relationship' => 
  array (
    'name' => 'accounts_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_teams' => 
  array (
    'name' => 'accounts_teams',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'accounts_team' => 
  array (
    'name' => 'accounts_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_email_addresses' => 
  array (
    'name' => 'accounts_email_addresses',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'accounts_email_addresses_primary' => 
  array (
    'name' => 'accounts_email_addresses_primary',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'primary_flag_column' => 'primary_address',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'account_dri_workflow_templates' => 
  array (
    'name' => 'account_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'accounts_mv_attachments' => 
  array (
    'name' => 'accounts_mv_attachments',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'opportunities_modified_user' => 
  array (
    'name' => 'opportunities_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_created_by' => 
  array (
    'name' => 'opportunities_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_activities' => 
  array (
    'name' => 'opportunity_activities',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'opportunity_calls' => 
  array (
    'name' => 'opportunity_calls',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_meetings' => 
  array (
    'name' => 'opportunity_meetings',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_tasks' => 
  array (
    'name' => 'opportunity_tasks',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_notes' => 
  array (
    'name' => 'opportunity_notes',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_emails' => 
  array (
    'name' => 'opportunity_emails',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_leads' => 
  array (
    'name' => 'opportunity_leads',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_assigned_user' => 
  array (
    'name' => 'opportunities_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_revenuelineitems' => 
  array (
    'name' => 'opportunities_revenuelineitems',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_following' => 
  array (
    'name' => 'opportunities_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
    'user_field' => 'created_by',
  ),
  'opportunities_favorite' => 
  array (
    'name' => 'opportunities_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Opportunities',
    'user_field' => 'created_by',
  ),
  'opportunities_tags' => 
  array (
    'name' => 'opportunities_tags',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Opportunities',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'opportunities_locked_fields' => 
  array (
    'name' => 'opportunities_locked_fields',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'opportunities_team_count_relationship' => 
  array (
    'name' => 'opportunities_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_teams' => 
  array (
    'name' => 'opportunities_teams',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'opportunities_team' => 
  array (
    'name' => 'opportunities_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_currencies' => 
  array (
    'name' => 'opportunities_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_dri_workflow_templates' => 
  array (
    'name' => 'opportunity_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'opportunities_mv_attachments' => 
  array (
    'name' => 'opportunities_mv_attachments',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'emails_assigned_user' => 
  array (
    'name' => 'emails_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_modified_user' => 
  array (
    'name' => 'emails_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_created_by' => 
  array (
    'name' => 'emails_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'emails_attachments' => 
  array (
    'name' => 'emails_attachments',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'email_id',
    'relationship_type' => 'one-to-many',
    'relationship_class' => 'EmailAttachmentRelationship',
    'relationship_file' => 'modules/Emails/EmailAttachmentRelationship.php',
    'relationship_role_column' => 'email_type',
    'relationship_role_column_value' => 'Emails',
  ),
  'emails_notes_rel' => 
  array (
    'name' => 'emails_notes_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Notes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_revenuelineitems_rel' => 
  array (
    'name' => 'emails_revenuelineitems_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'RevenueLineItems',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_products_rel' => 
  array (
    'name' => 'emails_products_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Products',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      'email_id' => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      'campaign_data' => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_from' => 
  array (
    'name' => 'emails_from',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailParticipants',
    'rhs_table' => 'emails_email_addr_rel',
    'rhs_key' => 'email_id',
    'relationship_type' => 'one-to-one',
    'relationship_class' => 'EmailSenderRelationship',
    'relationship_file' => 'modules/Emails/EmailSenderRelationship.php',
    'relationship_role_columns' => 
    array (
      'address_type' => 'from',
    ),
  ),
  'emails_to' => 
  array (
    'name' => 'emails_to',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailParticipants',
    'rhs_table' => 'emails_email_addr_rel',
    'rhs_key' => 'email_id',
    'relationship_type' => 'one-to-many',
    'relationship_class' => 'EmailRecipientRelationship',
    'relationship_file' => 'modules/Emails/EmailRecipientRelationship.php',
    'relationship_role_columns' => 
    array (
      'address_type' => 'to',
    ),
  ),
  'emails_cc' => 
  array (
    'name' => 'emails_cc',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailParticipants',
    'rhs_table' => 'emails_email_addr_rel',
    'rhs_key' => 'email_id',
    'relationship_type' => 'one-to-many',
    'relationship_class' => 'EmailRecipientRelationship',
    'relationship_file' => 'modules/Emails/EmailRecipientRelationship.php',
    'relationship_role_columns' => 
    array (
      'address_type' => 'cc',
    ),
  ),
  'emails_bcc' => 
  array (
    'name' => 'emails_bcc',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailParticipants',
    'rhs_table' => 'emails_email_addr_rel',
    'rhs_key' => 'email_id',
    'relationship_type' => 'one-to-many',
    'relationship_class' => 'EmailRecipientRelationship',
    'relationship_file' => 'modules/Emails/EmailRecipientRelationship.php',
    'relationship_role_columns' => 
    array (
      'address_type' => 'bcc',
    ),
  ),
  'emails_favorite' => 
  array (
    'name' => 'emails_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Emails',
    'user_field' => 'created_by',
  ),
  'emails_following' => 
  array (
    'name' => 'emails_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Emails',
    'user_field' => 'created_by',
  ),
  'emails_tags' => 
  array (
    'name' => 'emails_tags',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Emails',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'emails_team_count_relationship' => 
  array (
    'name' => 'emails_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_teams' => 
  array (
    'name' => 'emails_teams',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'emails_team' => 
  array (
    'name' => 'emails_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_modified_user' => 
  array (
    'name' => 'campaigns_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_created_by' => 
  array (
    'name' => 'campaigns_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_activities' => 
  array (
    'name' => 'campaign_activities',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Campaigns',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'campaign_accounts' => 
  array (
    'name' => 'campaign_accounts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_contacts' => 
  array (
    'name' => 'campaign_contacts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_products' => 
  array (
    'name' => 'campaign_products',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_revenuelineitems' => 
  array (
    'name' => 'campaign_revenuelineitems',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
    'workflow' => false,
  ),
  'campaign_leads' => 
  array (
    'name' => 'campaign_leads',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_prospects' => 
  array (
    'name' => 'campaign_prospects',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_opportunities' => 
  array (
    'name' => 'campaign_opportunities',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_email_marketing' => 
  array (
    'name' => 'campaign_email_marketing',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_emailman' => 
  array (
    'name' => 'campaign_emailman',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMan',
    'rhs_table' => 'emailman',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaignlog' => 
  array (
    'name' => 'campaign_campaignlog',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_assigned_user' => 
  array (
    'name' => 'campaign_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_modified_user' => 
  array (
    'name' => 'campaign_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_following' => 
  array (
    'name' => 'campaigns_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Campaigns',
    'user_field' => 'created_by',
  ),
  'campaigns_favorite' => 
  array (
    'name' => 'campaigns_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Campaigns',
    'user_field' => 'created_by',
  ),
  'campaigns_locked_fields' => 
  array (
    'name' => 'campaigns_locked_fields',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Campaigns',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'campaigns_assigned_user' => 
  array (
    'name' => 'campaigns_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_team_count_relationship' => 
  array (
    'name' => 'campaigns_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_teams' => 
  array (
    'name' => 'campaigns_teams',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'campaigns_team' => 
  array (
    'name' => 'campaigns_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_currencies' => 
  array (
    'name' => 'campaigns_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_modified_user' => 
  array (
    'name' => 'prospects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_created_by' => 
  array (
    'name' => 'prospects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'prospect_activities' => 
  array (
    'name' => 'prospect_activities',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'prospect_tasks' => 
  array (
    'name' => 'prospect_tasks',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_notes' => 
  array (
    'name' => 'prospect_notes',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_meetings' => 
  array (
    'name' => 'prospect_meetings',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_calls' => 
  array (
    'name' => 'prospect_calls',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_emails' => 
  array (
    'name' => 'prospect_emails',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_campaign_log' => 
  array (
    'name' => 'prospect_campaign_log',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_following' => 
  array (
    'name' => 'prospects_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
    'user_field' => 'created_by',
  ),
  'prospects_favorite' => 
  array (
    'name' => 'prospects_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Prospects',
    'user_field' => 'created_by',
  ),
  'prospects_tags' => 
  array (
    'name' => 'prospects_tags',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'prospects_locked_fields' => 
  array (
    'name' => 'prospects_locked_fields',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'prospects_assigned_user' => 
  array (
    'name' => 'prospects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_team_count_relationship' => 
  array (
    'name' => 'prospects_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_teams' => 
  array (
    'name' => 'prospects_teams',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'prospects_team' => 
  array (
    'name' => 'prospects_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_email_addresses' => 
  array (
    'name' => 'prospects_email_addresses',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospects_email_addresses_primary' => 
  array (
    'name' => 'prospects_email_addresses_primary',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'primary_flag_column' => 'primary_address',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospectlists_assigned_user' => 
  array (
    'name' => 'prospectlists_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_modified_user' => 
  array (
    'name' => 'prospectlists_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectList',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_created_by' => 
  array (
    'name' => 'prospectlists_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectList',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_tags' => 
  array (
    'name' => 'prospectlists_tags',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProspectLists',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'prospectlists_team_count_relationship' => 
  array (
    'name' => 'prospectlists_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_teams' => 
  array (
    'name' => 'prospectlists_teams',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'prospectlists_team' => 
  array (
    'name' => 'prospectlists_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_modified_user' => 
  array (
    'name' => 'quotes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_created_by' => 
  array (
    'name' => 'quotes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'quote_activities' => 
  array (
    'name' => 'quote_activities',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'quote_tasks' => 
  array (
    'name' => 'quote_tasks',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_notes' => 
  array (
    'name' => 'quote_notes',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_meetings' => 
  array (
    'name' => 'quote_meetings',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_calls' => 
  array (
    'name' => 'quote_calls',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_emails' => 
  array (
    'name' => 'quote_emails',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_products' => 
  array (
    'name' => 'quote_products',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'quote_id',
    'relationship_type' => 'one-to-many',
  ),
  'quote_revenuelineitems' => 
  array (
    'name' => 'quote_revenuelineitems',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'quote_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_assigned_user' => 
  array (
    'name' => 'quotes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_following' => 
  array (
    'name' => 'quotes_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
    'user_field' => 'created_by',
  ),
  'quotes_favorite' => 
  array (
    'name' => 'quotes_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Quotes',
    'user_field' => 'created_by',
  ),
  'quotes_tags' => 
  array (
    'name' => 'quotes_tags',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Quotes',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'quotes_locked_fields' => 
  array (
    'name' => 'quotes_locked_fields',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Quotes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'quotes_team_count_relationship' => 
  array (
    'name' => 'quotes_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_teams' => 
  array (
    'name' => 'quotes_teams',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'quotes_team' => 
  array (
    'name' => 'quotes_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_currencies' => 
  array (
    'name' => 'quotes_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_modified_user' => 
  array (
    'name' => 'products_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_created_by' => 
  array (
    'name' => 'products_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'product_activities' => 
  array (
    'name' => 'product_activities',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Products',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'product_notes' => 
  array (
    'name' => 'product_notes',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Products',
  ),
  'opportunities_products' => 
  array (
    'name' => 'opportunities_products',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_accounts' => 
  array (
    'name' => 'products_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_categories' => 
  array (
    'name' => 'product_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'category_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates' => 
  array (
    'name' => 'product_templates',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'product_template_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_types' => 
  array (
    'name' => 'product_types',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'type_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_assigned_user' => 
  array (
    'name' => 'products_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_revenuelineitems' => 
  array (
    'name' => 'products_revenuelineitems',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'revenuelineitem_id',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-one',
  ),
  'product_calls' => 
  array (
    'name' => 'product_calls',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Products',
  ),
  'product_meetings' => 
  array (
    'name' => 'product_meetings',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Products',
  ),
  'product_manufacturers' => 
  array (
    'name' => 'product_manufacturers',
    'lhs_module' => 'Manufacturers',
    'lhs_table' => 'manufacturers',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'manufacturer_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_following' => 
  array (
    'name' => 'products_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Products',
    'user_field' => 'created_by',
  ),
  'products_favorite' => 
  array (
    'name' => 'products_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Products',
    'user_field' => 'created_by',
  ),
  'products_tags' => 
  array (
    'name' => 'products_tags',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Products',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'products_locked_fields' => 
  array (
    'name' => 'products_locked_fields',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Products',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'products_team_count_relationship' => 
  array (
    'name' => 'products_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_teams' => 
  array (
    'name' => 'products_teams',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'products_team' => 
  array (
    'name' => 'products_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_currencies' => 
  array (
    'name' => 'products_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecasts_created_by' => 
  array (
    'name' => 'forecasts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Forecasts',
    'rhs_table' => 'forecasts',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecasts_currencies' => 
  array (
    'name' => 'forecasts_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Forecasts',
    'rhs_table' => 'forecasts',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_modified_user' => 
  array (
    'name' => 'contracts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_created_by' => 
  array (
    'name' => 'contracts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contract_activities' => 
  array (
    'name' => 'contract_activities',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'contracts_contract_types' => 
  array (
    'name' => 'contracts_contract_types',
    'lhs_module' => 'ContractTypes',
    'lhs_table' => 'contract_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'type',
    'relationship_type' => 'one-to-many',
  ),
  'contract_notes' => 
  array (
    'name' => 'contract_notes',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'relationship_type' => 'one-to-many',
  ),
  'account_contracts' => 
  array (
    'name' => 'account_contracts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_assigned_user' => 
  array (
    'name' => 'contracts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_following' => 
  array (
    'name' => 'contracts_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'user_field' => 'created_by',
  ),
  'contracts_favorite' => 
  array (
    'name' => 'contracts_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Contracts',
    'user_field' => 'created_by',
  ),
  'contracts_tags' => 
  array (
    'name' => 'contracts_tags',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contracts',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'contracts_locked_fields' => 
  array (
    'name' => 'contracts_locked_fields',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contracts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'contracts_team_count_relationship' => 
  array (
    'name' => 'contracts_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_teams' => 
  array (
    'name' => 'contracts_teams',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'contracts_team' => 
  array (
    'name' => 'contracts_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_currencies' => 
  array (
    'name' => 'contracts_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_project_modified_user' => 
  array (
    'name' => 'pmse_project_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Project',
    'rhs_table' => 'pmse_project',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_project_created_by' => 
  array (
    'name' => 'pmse_project_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Project',
    'rhs_table' => 'pmse_project',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_project_activities' => 
  array (
    'name' => 'pmse_project_activities',
    'lhs_module' => 'pmse_Project',
    'lhs_table' => 'pmse_project',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_Project',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_project_following' => 
  array (
    'name' => 'pmse_project_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Project',
    'rhs_table' => 'pmse_project',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_Project',
    'user_field' => 'created_by',
  ),
  'pmse_project_favorite' => 
  array (
    'name' => 'pmse_project_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Project',
    'rhs_table' => 'pmse_project',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_Project',
    'user_field' => 'created_by',
  ),
  'pmse_project_team_count_relationship' => 
  array (
    'name' => 'pmse_project_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Project',
    'rhs_table' => 'pmse_project',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_project_teams' => 
  array (
    'name' => 'pmse_project_teams',
    'lhs_module' => 'pmse_Project',
    'lhs_table' => 'pmse_project',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'pmse_project_team' => 
  array (
    'name' => 'pmse_project_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Project',
    'rhs_table' => 'pmse_project',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_project_assigned_user' => 
  array (
    'name' => 'pmse_project_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Project',
    'rhs_table' => 'pmse_project',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_inbox_modified_user' => 
  array (
    'name' => 'pmse_inbox_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Inbox',
    'rhs_table' => 'pmse_inbox',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_inbox_created_by' => 
  array (
    'name' => 'pmse_inbox_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Inbox',
    'rhs_table' => 'pmse_inbox',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_inbox_activities' => 
  array (
    'name' => 'pmse_inbox_activities',
    'lhs_module' => 'pmse_Inbox',
    'lhs_table' => 'pmse_inbox',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_Inbox',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_inbox_following' => 
  array (
    'name' => 'pmse_inbox_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Inbox',
    'rhs_table' => 'pmse_inbox',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_Inbox',
    'user_field' => 'created_by',
  ),
  'pmse_inbox_favorite' => 
  array (
    'name' => 'pmse_inbox_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Inbox',
    'rhs_table' => 'pmse_inbox',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_Inbox',
    'user_field' => 'created_by',
  ),
  'pmse_inbox_team_count_relationship' => 
  array (
    'name' => 'pmse_inbox_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Inbox',
    'rhs_table' => 'pmse_inbox',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_inbox_teams' => 
  array (
    'name' => 'pmse_inbox_teams',
    'lhs_module' => 'pmse_Inbox',
    'lhs_table' => 'pmse_inbox',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'pmse_inbox_team' => 
  array (
    'name' => 'pmse_inbox_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Inbox',
    'rhs_table' => 'pmse_inbox',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_inbox_assigned_user' => 
  array (
    'name' => 'pmse_inbox_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Inbox',
    'rhs_table' => 'pmse_inbox',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_business_rules_modified_user' => 
  array (
    'name' => 'pmse_business_rules_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Business_Rules',
    'rhs_table' => 'pmse_business_rules',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_business_rules_created_by' => 
  array (
    'name' => 'pmse_business_rules_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Business_Rules',
    'rhs_table' => 'pmse_business_rules',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_business_rules_activities' => 
  array (
    'name' => 'pmse_business_rules_activities',
    'lhs_module' => 'pmse_Business_Rules',
    'lhs_table' => 'pmse_business_rules',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_Business_Rules',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_business_rules_following' => 
  array (
    'name' => 'pmse_business_rules_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Business_Rules',
    'rhs_table' => 'pmse_business_rules',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_Business_Rules',
    'user_field' => 'created_by',
  ),
  'pmse_business_rules_favorite' => 
  array (
    'name' => 'pmse_business_rules_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Business_Rules',
    'rhs_table' => 'pmse_business_rules',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_Business_Rules',
    'user_field' => 'created_by',
  ),
  'pmse_business_rules_team_count_relationship' => 
  array (
    'name' => 'pmse_business_rules_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Business_Rules',
    'rhs_table' => 'pmse_business_rules',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_business_rules_teams' => 
  array (
    'name' => 'pmse_business_rules_teams',
    'lhs_module' => 'pmse_Business_Rules',
    'lhs_table' => 'pmse_business_rules',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'pmse_business_rules_team' => 
  array (
    'name' => 'pmse_business_rules_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Business_Rules',
    'rhs_table' => 'pmse_business_rules',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_business_rules_assigned_user' => 
  array (
    'name' => 'pmse_business_rules_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Business_Rules',
    'rhs_table' => 'pmse_business_rules',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_emails_templates_modified_user' => 
  array (
    'name' => 'pmse_emails_templates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Emails_Templates',
    'rhs_table' => 'pmse_emails_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_emails_templates_created_by' => 
  array (
    'name' => 'pmse_emails_templates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Emails_Templates',
    'rhs_table' => 'pmse_emails_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_emails_templates_activities' => 
  array (
    'name' => 'pmse_emails_templates_activities',
    'lhs_module' => 'pmse_Emails_Templates',
    'lhs_table' => 'pmse_emails_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_Emails_Templates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_emails_templates_following' => 
  array (
    'name' => 'pmse_emails_templates_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Emails_Templates',
    'rhs_table' => 'pmse_emails_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_Emails_Templates',
    'user_field' => 'created_by',
  ),
  'pmse_emails_templates_favorite' => 
  array (
    'name' => 'pmse_emails_templates_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Emails_Templates',
    'rhs_table' => 'pmse_emails_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_Emails_Templates',
    'user_field' => 'created_by',
  ),
  'pmse_emails_templates_team_count_relationship' => 
  array (
    'name' => 'pmse_emails_templates_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Emails_Templates',
    'rhs_table' => 'pmse_emails_templates',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_emails_templates_teams' => 
  array (
    'name' => 'pmse_emails_templates_teams',
    'lhs_module' => 'pmse_Emails_Templates',
    'lhs_table' => 'pmse_emails_templates',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'pmse_emails_templates_team' => 
  array (
    'name' => 'pmse_emails_templates_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Emails_Templates',
    'rhs_table' => 'pmse_emails_templates',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_emails_templates_assigned_user' => 
  array (
    'name' => 'pmse_emails_templates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_Emails_Templates',
    'rhs_table' => 'pmse_emails_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_modified_user' => 
  array (
    'name' => 'documents_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_created_by' => 
  array (
    'name' => 'documents_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'document_activities' => 
  array (
    'name' => 'document_activities',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Documents',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'related_documents' => 
  array (
    'name' => 'related_documents',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'related_doc_id',
    'relationship_type' => 'one-to-many',
  ),
  'document_revisions' => 
  array (
    'name' => 'document_revisions',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'document_id',
    'relationship_type' => 'one-to-many',
  ),
  'latest_document_revision' => 
  array (
    'name' => 'latest_document_revision',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'document_revision_id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-one',
  ),
  'documents_following' => 
  array (
    'name' => 'documents_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Documents',
    'user_field' => 'created_by',
  ),
  'documents_favorite' => 
  array (
    'name' => 'documents_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Documents',
    'user_field' => 'created_by',
  ),
  'documents_locked_fields' => 
  array (
    'name' => 'documents_locked_fields',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Documents',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'documents_assigned_user' => 
  array (
    'name' => 'documents_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_team_count_relationship' => 
  array (
    'name' => 'documents_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_teams' => 
  array (
    'name' => 'documents_teams',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'documents_team' => 
  array (
    'name' => 'documents_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_modified_user' => 
  array (
    'name' => 'cases_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_created_by' => 
  array (
    'name' => 'cases_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'case_activities' => 
  array (
    'name' => 'case_activities',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'case_calls' => 
  array (
    'name' => 'case_calls',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_tasks' => 
  array (
    'name' => 'case_tasks',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_notes' => 
  array (
    'name' => 'case_notes',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_meetings' => 
  array (
    'name' => 'case_meetings',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_emails' => 
  array (
    'name' => 'case_emails',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'cases_assigned_user' => 
  array (
    'name' => 'cases_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_following' => 
  array (
    'name' => 'cases_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
    'user_field' => 'created_by',
  ),
  'cases_favorite' => 
  array (
    'name' => 'cases_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Cases',
    'user_field' => 'created_by',
  ),
  'cases_tags' => 
  array (
    'name' => 'cases_tags',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Cases',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'cases_locked_fields' => 
  array (
    'name' => 'cases_locked_fields',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'cases_team_count_relationship' => 
  array (
    'name' => 'cases_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_teams' => 
  array (
    'name' => 'cases_teams',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'cases_team' => 
  array (
    'name' => 'cases_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'case_dri_workflow_templates' => 
  array (
    'name' => 'case_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'cases_mv_attachments' => 
  array (
    'name' => 'cases_mv_attachments',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'projects_notes' => 
  array (
    'name' => 'projects_notes',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_tasks' => 
  array (
    'name' => 'projects_tasks',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_meetings' => 
  array (
    'name' => 'projects_meetings',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_calls' => 
  array (
    'name' => 'projects_calls',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_emails' => 
  array (
    'name' => 'projects_emails',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_project_tasks' => 
  array (
    'name' => 'projects_project_tasks',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'project_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_assigned_user' => 
  array (
    'name' => 'projects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_modified_user' => 
  array (
    'name' => 'projects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_created_by' => 
  array (
    'name' => 'projects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'projects_users_resources' => 
  array (
    'name' => 'projects_users_resources',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'project_resources',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'resource_id',
    'relationship_role_column' => 'resource_type',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'required' => true,
        'type' => 'id',
        'reportable' => false,
        'comment' => 'Unique identifier',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'vname' => 'LBL_DATE_MODIFIED',
        'type' => 'datetime',
        'required' => true,
        'comment' => 'Date record last modified',
      ),
      'modified_user_id' => 
      array (
        'name' => 'modified_user_id',
        'rname' => 'user_name',
        'id_name' => 'modified_user_id',
        'vname' => 'LBL_MODIFIED_USER_ID',
        'type' => 'assigned_user_name',
        'table' => 'users',
        'isnull' => false,
        'dbType' => 'id',
        'reportable' => true,
        'comment' => 'User who last modified record',
      ),
      'created_by' => 
      array (
        'name' => 'created_by',
        'rname' => 'user_name',
        'id_name' => 'modified_user_id',
        'vname' => 'LBL_CREATED_BY',
        'type' => 'assigned_user_name',
        'table' => 'users',
        'isnull' => false,
        'dbType' => 'id',
        'comment' => 'User who created record',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'vname' => 'LBL_PROJECT_ID',
        'reportable' => false,
        'dbtype' => 'id',
        'type' => 'id',
      ),
      'resource_id' => 
      array (
        'name' => 'resource_id',
        'vname' => 'LBL_RESOURCE_ID',
        'reportable' => false,
        'dbtype' => 'id',
        'type' => 'id',
      ),
      'resource_type' => 
      array (
        'name' => 'resource_type',
        'vname' => 'LBL_RESOURCE_TYPE',
        'reportable' => false,
        'type' => 'varchar',
        'len' => 20,
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'required' => false,
        'default' => 0,
        'comment' => 'Record deletion indicator',
      ),
    ),
  ),
  'projects_contacts_resources' => 
  array (
    'name' => 'projects_contacts_resources',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'project_resources',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'resource_id',
    'relationship_role_column' => 'resource_type',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'required' => true,
        'type' => 'id',
        'reportable' => false,
        'comment' => 'Unique identifier',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'vname' => 'LBL_DATE_MODIFIED',
        'type' => 'datetime',
        'required' => true,
        'comment' => 'Date record last modified',
      ),
      'modified_user_id' => 
      array (
        'name' => 'modified_user_id',
        'rname' => 'user_name',
        'id_name' => 'modified_user_id',
        'vname' => 'LBL_MODIFIED_USER_ID',
        'type' => 'assigned_user_name',
        'table' => 'users',
        'isnull' => false,
        'dbType' => 'id',
        'reportable' => true,
        'comment' => 'User who last modified record',
      ),
      'created_by' => 
      array (
        'name' => 'created_by',
        'rname' => 'user_name',
        'id_name' => 'modified_user_id',
        'vname' => 'LBL_CREATED_BY',
        'type' => 'assigned_user_name',
        'table' => 'users',
        'isnull' => false,
        'dbType' => 'id',
        'comment' => 'User who created record',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
        'vname' => 'LBL_PROJECT_ID',
        'reportable' => false,
        'dbtype' => 'id',
        'type' => 'id',
      ),
      'resource_id' => 
      array (
        'name' => 'resource_id',
        'vname' => 'LBL_RESOURCE_ID',
        'reportable' => false,
        'dbtype' => 'id',
        'type' => 'id',
      ),
      'resource_type' => 
      array (
        'name' => 'resource_type',
        'vname' => 'LBL_RESOURCE_TYPE',
        'reportable' => false,
        'type' => 'varchar',
        'len' => 20,
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'required' => false,
        'default' => 0,
        'comment' => 'Record deletion indicator',
      ),
    ),
  ),
  'projects_holidays' => 
  array (
    'name' => 'projects_holidays',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Holidays',
    'rhs_table' => 'holidays',
    'rhs_key' => 'related_module_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'related_module',
    'relationship_role_column_value' => 'Project',
  ),
  'project_team_count_relationship' => 
  array (
    'name' => 'project_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_teams' => 
  array (
    'name' => 'project_teams',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'project_team' => 
  array (
    'name' => 'project_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_modified_user' => 
  array (
    'name' => 'bugs_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_created_by' => 
  array (
    'name' => 'bugs_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bug_activities' => 
  array (
    'name' => 'bug_activities',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bug_tasks' => 
  array (
    'name' => 'bug_tasks',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_meetings' => 
  array (
    'name' => 'bug_meetings',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_calls' => 
  array (
    'name' => 'bug_calls',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_emails' => 
  array (
    'name' => 'bug_emails',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_notes' => 
  array (
    'name' => 'bug_notes',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bugs_assigned_user' => 
  array (
    'name' => 'bugs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_release' => 
  array (
    'name' => 'bugs_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'found_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_fixed_in_release' => 
  array (
    'name' => 'bugs_fixed_in_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'fixed_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_following' => 
  array (
    'name' => 'bugs_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
    'user_field' => 'created_by',
  ),
  'bugs_favorite' => 
  array (
    'name' => 'bugs_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Bugs',
    'user_field' => 'created_by',
  ),
  'bugs_tags' => 
  array (
    'name' => 'bugs_tags',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bugs',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bugs_locked_fields' => 
  array (
    'name' => 'bugs_locked_fields',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bugs_team_count_relationship' => 
  array (
    'name' => 'bugs_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_teams' => 
  array (
    'name' => 'bugs_teams',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bugs_team' => 
  array (
    'name' => 'bugs_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'dataprivacy_modified_user' => 
  array (
    'name' => 'dataprivacy_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dataprivacy_created_by' => 
  array (
    'name' => 'dataprivacy_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dataprivacy_activities' => 
  array (
    'name' => 'dataprivacy_activities',
    'lhs_module' => 'DataPrivacy',
    'lhs_table' => 'data_privacy',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DataPrivacy',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dataprivacy_following' => 
  array (
    'name' => 'dataprivacy_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DataPrivacy',
    'user_field' => 'created_by',
  ),
  'dataprivacy_favorite' => 
  array (
    'name' => 'dataprivacy_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'DataPrivacy',
    'user_field' => 'created_by',
  ),
  'dataprivacy_tags' => 
  array (
    'name' => 'dataprivacy_tags',
    'lhs_module' => 'DataPrivacy',
    'lhs_table' => 'data_privacy',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DataPrivacy',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dataprivacy_locked_fields' => 
  array (
    'name' => 'dataprivacy_locked_fields',
    'lhs_module' => 'DataPrivacy',
    'lhs_table' => 'data_privacy',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DataPrivacy',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dataprivacy_assigned_user' => 
  array (
    'name' => 'dataprivacy_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dataprivacy_team_count_relationship' => 
  array (
    'name' => 'dataprivacy_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'dataprivacy_teams' => 
  array (
    'name' => 'dataprivacy_teams',
    'lhs_module' => 'DataPrivacy',
    'lhs_table' => 'data_privacy',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'dataprivacy_team' => 
  array (
    'name' => 'dataprivacy_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'DataPrivacy',
    'rhs_table' => 'data_privacy',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'tags_modified_user' => 
  array (
    'name' => 'tags_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tags_created_by' => 
  array (
    'name' => 'tags_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tag_activities' => 
  array (
    'name' => 'tag_activities',
    'lhs_module' => 'Tags',
    'lhs_table' => 'tags',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Tags',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'tags_following' => 
  array (
    'name' => 'tags_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Tags',
    'user_field' => 'created_by',
  ),
  'tags_favorite' => 
  array (
    'name' => 'tags_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Tags',
    'user_field' => 'created_by',
  ),
  'tags_locked_fields' => 
  array (
    'name' => 'tags_locked_fields',
    'lhs_module' => 'Tags',
    'lhs_table' => 'tags',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Tags',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'tags_assigned_user' => 
  array (
    'name' => 'tags_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontents_modified_user' => 
  array (
    'name' => 'kbcontents_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontents_created_by' => 
  array (
    'name' => 'kbcontents_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontent_activities' => 
  array (
    'name' => 'kbcontent_activities',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBContents',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'kbcontent_notes' => 
  array (
    'name' => 'kbcontent_notes',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBContents',
  ),
  'kbcontent_attachments' => 
  array (
    'name' => 'kbcontent_attachments',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBContents',
  ),
  'kbdocuments_kbcontents' => 
  array (
    'name' => 'kbdocuments_kbcontents',
    'lhs_module' => 'KBDocuments',
    'lhs_table' => 'kbdocuments',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'kbdocument_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbarticles_kbcontents' => 
  array (
    'name' => 'kbarticles_kbcontents',
    'lhs_module' => 'KBArticles',
    'lhs_table' => 'kbarticles',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'kbarticle_id',
    'relationship_type' => 'one-to-many',
  ),
  'localizations' => 
  array (
    'name' => 'localizations',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'kbdocument_id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'kbdocument_id',
    'join_table' => 'kbcontents',
    'join_key_lhs' => 'kbdocument_id',
    'join_key_rhs' => 'kbdocument_id',
    'relationship_type' => 'one-to-many',
  ),
  'revisions' => 
  array (
    'name' => 'revisions',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'kbarticle_id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'kbarticle_id',
    'join_table' => 'kbcontents',
    'join_key_lhs' => 'kbarticle_id',
    'join_key_rhs' => 'kbarticle_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbsapprovers_kbcontents' => 
  array (
    'name' => 'kbsapprovers_kbcontents',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'kbsapprover_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontent_calls' => 
  array (
    'name' => 'kbcontent_calls',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBContents',
  ),
  'kbcontent_meetings' => 
  array (
    'name' => 'kbcontent_meetings',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBContents',
  ),
  'relcases_kbcontents' => 
  array (
    'name' => 'relcases_kbcontents',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'kbscase_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontent_tasks' => 
  array (
    'name' => 'kbcontent_tasks',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBContents',
  ),
  'kbcontents_following' => 
  array (
    'name' => 'kbcontents_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBContents',
    'user_field' => 'created_by',
  ),
  'kbcontents_favorite' => 
  array (
    'name' => 'kbcontents_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'KBContents',
    'user_field' => 'created_by',
  ),
  'kbcontents_tags' => 
  array (
    'name' => 'kbcontents_tags',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'KBContents',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'kbcontents_locked_fields' => 
  array (
    'name' => 'kbcontents_locked_fields',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'KBContents',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'kbcontents_team_count_relationship' => 
  array (
    'name' => 'kbcontents_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontents_teams' => 
  array (
    'name' => 'kbcontents_teams',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbcontents_team' => 
  array (
    'name' => 'kbcontents_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontents_assigned_user' => 
  array (
    'name' => 'kbcontents_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'm_cams_modified_user' => 
  array (
    'name' => 'm_cams_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'm_cams_created_by' => 
  array (
    'name' => 'm_cams_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'm_cams_activities' => 
  array (
    'name' => 'm_cams_activities',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'm_CAMS',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'm_cams_following' => 
  array (
    'name' => 'm_cams_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'm_CAMS',
    'user_field' => 'created_by',
  ),
  'm_cams_favorite' => 
  array (
    'name' => 'm_cams_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'm_CAMS',
    'user_field' => 'created_by',
  ),
  'm_cams_tags' => 
  array (
    'name' => 'm_cams_tags',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'm_CAMS',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'm_cams_locked_fields' => 
  array (
    'name' => 'm_cams_locked_fields',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'm_CAMS',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'm_cams_team_count_relationship' => 
  array (
    'name' => 'm_cams_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'm_cams_teams' => 
  array (
    'name' => 'm_cams_teams',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'm_cams_team' => 
  array (
    'name' => 'm_cams_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'm_cams_assigned_user' => 
  array (
    'name' => 'm_cams_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'm_cams_dri_workflow_templates' => 
  array (
    'name' => 'm_cams_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'm_cams_mv_attachments' => 
  array (
    'name' => 'm_cams_mv_attachments',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'm_CAMS',
  ),
  'contacts_m_cams' => 
  array (
    'name' => 'contacts_m_cams',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'm_cam_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_m_cams' => 
  array (
    'name' => 'documents_m_cams',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'm_cam_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_cams_relation' => 
  array (
    'name' => 'account_cams_relation',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'm_CAMS',
    'rhs_table' => 'm_cams',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'jckl_filtertemplates_modified_user' => 
  array (
    'name' => 'jckl_filtertemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterTemplates',
    'rhs_table' => 'jckl_filtertemplates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jckl_filtertemplates_created_by' => 
  array (
    'name' => 'jckl_filtertemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterTemplates',
    'rhs_table' => 'jckl_filtertemplates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jckl_filtertemplates_activities' => 
  array (
    'name' => 'jckl_filtertemplates_activities',
    'lhs_module' => 'jckl_FilterTemplates',
    'lhs_table' => 'jckl_filtertemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'jckl_FilterTemplates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'jckl_filtertemplates_following' => 
  array (
    'name' => 'jckl_filtertemplates_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterTemplates',
    'rhs_table' => 'jckl_filtertemplates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'jckl_FilterTemplates',
    'user_field' => 'created_by',
  ),
  'jckl_filtertemplates_favorite' => 
  array (
    'name' => 'jckl_filtertemplates_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterTemplates',
    'rhs_table' => 'jckl_filtertemplates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'jckl_FilterTemplates',
    'user_field' => 'created_by',
  ),
  'jckl_filtertemplates_tags' => 
  array (
    'name' => 'jckl_filtertemplates_tags',
    'lhs_module' => 'jckl_FilterTemplates',
    'lhs_table' => 'jckl_filtertemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'jckl_FilterTemplates',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'jckl_filtertemplates_locked_fields' => 
  array (
    'name' => 'jckl_filtertemplates_locked_fields',
    'lhs_module' => 'jckl_FilterTemplates',
    'lhs_table' => 'jckl_filtertemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'jckl_FilterTemplates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'jckl_filtertemplates_assigned_user' => 
  array (
    'name' => 'jckl_filtertemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterTemplates',
    'rhs_table' => 'jckl_filtertemplates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflows_modified_user' => 
  array (
    'name' => 'dri_workflows_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflows_created_by' => 
  array (
    'name' => 'dri_workflows_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflow_activities' => 
  array (
    'name' => 'dri_workflow_activities',
    'lhs_module' => 'DRI_Workflows',
    'lhs_table' => 'dri_workflows',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DRI_Workflows',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflows_following' => 
  array (
    'name' => 'dri_workflows_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DRI_Workflows',
    'user_field' => 'created_by',
  ),
  'dri_workflows_favorite' => 
  array (
    'name' => 'dri_workflows_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'DRI_Workflows',
    'user_field' => 'created_by',
  ),
  'dri_workflows_tags' => 
  array (
    'name' => 'dri_workflows_tags',
    'lhs_module' => 'DRI_Workflows',
    'lhs_table' => 'dri_workflows',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DRI_Workflows',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflows_locked_fields' => 
  array (
    'name' => 'dri_workflows_locked_fields',
    'lhs_module' => 'DRI_Workflows',
    'lhs_table' => 'dri_workflows',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DRI_Workflows',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflows_assigned_user' => 
  array (
    'name' => 'dri_workflows_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflows_team_count_relationship' => 
  array (
    'name' => 'dri_workflows_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflows_teams' => 
  array (
    'name' => 'dri_workflows_teams',
    'lhs_module' => 'DRI_Workflows',
    'lhs_table' => 'dri_workflows',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflows_team' => 
  array (
    'name' => 'dri_workflows_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflow_accounts' => 
  array (
    'name' => 'dri_workflow_accounts',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'account_id',
  ),
  'dri_workflow_contacts' => 
  array (
    'name' => 'dri_workflow_contacts',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'contact_id',
  ),
  'dri_workflow_leads' => 
  array (
    'name' => 'dri_workflow_leads',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'lead_id',
  ),
  'dri_workflow_opportunities' => 
  array (
    'name' => 'dri_workflow_opportunities',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'opportunity_id',
  ),
  'dri_workflow_cases' => 
  array (
    'name' => 'dri_workflow_cases',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'case_id',
  ),
  'dri_workflow_dri_workflow_templates' => 
  array (
    'name' => 'dri_workflow_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'dri_workflow_current_stage_dri_subworkflows' => 
  array (
    'name' => 'dri_workflow_current_stage_dri_subworkflows',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_SubWorkflows',
    'lhs_table' => 'dri_subworkflows',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'current_stage_id',
  ),
  'dri_workflow_m_cams' => 
  array (
    'name' => 'dri_workflow_m_cams',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'm_CAMS',
    'lhs_table' => 'm_cams',
    'rhs_module' => 'DRI_Workflows',
    'rhs_table' => 'dri_workflows',
    'rhs_key' => 'm_cams_id',
  ),
  'mv_attachments_modified_user' => 
  array (
    'name' => 'mv_attachments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'mv_attachments_created_by' => 
  array (
    'name' => 'mv_attachments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'mv_attachments_activities' => 
  array (
    'name' => 'mv_attachments_activities',
    'lhs_module' => 'mv_Attachments',
    'lhs_table' => 'mv_attachments',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'mv_Attachments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'mv_attachments_following' => 
  array (
    'name' => 'mv_attachments_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'mv_Attachments',
    'user_field' => 'created_by',
  ),
  'mv_attachments_favorite' => 
  array (
    'name' => 'mv_attachments_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mv_Attachments',
    'user_field' => 'created_by',
  ),
  'mv_attachments_tags' => 
  array (
    'name' => 'mv_attachments_tags',
    'lhs_module' => 'mv_Attachments',
    'lhs_table' => 'mv_attachments',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'mv_Attachments',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'mv_attachments_locked_fields' => 
  array (
    'name' => 'mv_attachments_locked_fields',
    'lhs_module' => 'mv_Attachments',
    'lhs_table' => 'mv_attachments',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'mv_Attachments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'mv_attachments_team_count_relationship' => 
  array (
    'name' => 'mv_attachments_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'mv_attachments_teams' => 
  array (
    'name' => 'mv_attachments_teams',
    'lhs_module' => 'mv_Attachments',
    'lhs_table' => 'mv_attachments',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'mv_attachments_team' => 
  array (
    'name' => 'mv_attachments_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'mv_attachments_assigned_user' => 
  array (
    'name' => 'mv_attachments_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'mv_srvreq_modified_user' => 
  array (
    'name' => 'mv_srvreq_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_SrvReq',
    'rhs_table' => 'mv_srvreq',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'mv_srvreq_created_by' => 
  array (
    'name' => 'mv_srvreq_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_SrvReq',
    'rhs_table' => 'mv_srvreq',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'mv_srvreq_activities' => 
  array (
    'name' => 'mv_srvreq_activities',
    'lhs_module' => 'mv_SrvReq',
    'lhs_table' => 'mv_srvreq',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'mv_SrvReq',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'mv_srvreq_following' => 
  array (
    'name' => 'mv_srvreq_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_SrvReq',
    'rhs_table' => 'mv_srvreq',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'mv_SrvReq',
    'user_field' => 'created_by',
  ),
  'mv_srvreq_favorite' => 
  array (
    'name' => 'mv_srvreq_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_SrvReq',
    'rhs_table' => 'mv_srvreq',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mv_SrvReq',
    'user_field' => 'created_by',
  ),
  'mv_srvreq_tags' => 
  array (
    'name' => 'mv_srvreq_tags',
    'lhs_module' => 'mv_SrvReq',
    'lhs_table' => 'mv_srvreq',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'mv_SrvReq',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'mv_srvreq_locked_fields' => 
  array (
    'name' => 'mv_srvreq_locked_fields',
    'lhs_module' => 'mv_SrvReq',
    'lhs_table' => 'mv_srvreq',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'mv_SrvReq',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'mv_srvreq_team_count_relationship' => 
  array (
    'name' => 'mv_srvreq_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_SrvReq',
    'rhs_table' => 'mv_srvreq',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'mv_srvreq_teams' => 
  array (
    'name' => 'mv_srvreq_teams',
    'lhs_module' => 'mv_SrvReq',
    'lhs_table' => 'mv_srvreq',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'mv_srvreq_team' => 
  array (
    'name' => 'mv_srvreq_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_SrvReq',
    'rhs_table' => 'mv_srvreq',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'mv_srvreq_assigned_user' => 
  array (
    'name' => 'mv_srvreq_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_SrvReq',
    'rhs_table' => 'mv_srvreq',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'mv_srvreq_mv_attachments' => 
  array (
    'name' => 'mv_srvreq_mv_attachments',
    'lhs_module' => 'mv_SrvReq',
    'lhs_table' => 'mv_srvreq',
    'lhs_key' => 'id',
    'rhs_module' => 'mv_Attachments',
    'rhs_table' => 'mv_attachments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'mv_SrvReq',
  ),
  'dp_doucumentspackets_modified_user' => 
  array (
    'name' => 'dp_doucumentspackets_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DP_DoucumentsPackets',
    'rhs_table' => 'dp_doucumentspackets',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dp_doucumentspackets_created_by' => 
  array (
    'name' => 'dp_doucumentspackets_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DP_DoucumentsPackets',
    'rhs_table' => 'dp_doucumentspackets',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dp_doucumentspackets_activities' => 
  array (
    'name' => 'dp_doucumentspackets_activities',
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DP_DoucumentsPackets',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dp_doucumentspackets_following' => 
  array (
    'name' => 'dp_doucumentspackets_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DP_DoucumentsPackets',
    'rhs_table' => 'dp_doucumentspackets',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DP_DoucumentsPackets',
    'user_field' => 'created_by',
  ),
  'dp_doucumentspackets_favorite' => 
  array (
    'name' => 'dp_doucumentspackets_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DP_DoucumentsPackets',
    'rhs_table' => 'dp_doucumentspackets',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'DP_DoucumentsPackets',
    'user_field' => 'created_by',
  ),
  'dp_doucumentspackets_tags' => 
  array (
    'name' => 'dp_doucumentspackets_tags',
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DP_DoucumentsPackets',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dp_doucumentspackets_locked_fields' => 
  array (
    'name' => 'dp_doucumentspackets_locked_fields',
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DP_DoucumentsPackets',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dp_doucumentspackets_team_count_relationship' => 
  array (
    'name' => 'dp_doucumentspackets_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'DP_DoucumentsPackets',
    'rhs_table' => 'dp_doucumentspackets',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'dp_doucumentspackets_teams' => 
  array (
    'name' => 'dp_doucumentspackets_teams',
    'lhs_module' => 'DP_DoucumentsPackets',
    'lhs_table' => 'dp_doucumentspackets',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'dp_doucumentspackets_team' => 
  array (
    'name' => 'dp_doucumentspackets_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'DP_DoucumentsPackets',
    'rhs_table' => 'dp_doucumentspackets',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'dp_doucumentspackets_assigned_user' => 
  array (
    'name' => 'dp_doucumentspackets_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DP_DoucumentsPackets',
    'rhs_table' => 'dp_doucumentspackets',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'mvh_colorselection_modified_user' => 
  array (
    'name' => 'mvh_colorselection_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mvh_Colorselection',
    'rhs_table' => 'mvh_colorselection',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'mvh_colorselection_created_by' => 
  array (
    'name' => 'mvh_colorselection_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mvh_Colorselection',
    'rhs_table' => 'mvh_colorselection',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'mvh_colorselection_activities' => 
  array (
    'name' => 'mvh_colorselection_activities',
    'lhs_module' => 'mvh_Colorselection',
    'lhs_table' => 'mvh_colorselection',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'mvh_Colorselection',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'mvh_colorselection_following' => 
  array (
    'name' => 'mvh_colorselection_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mvh_Colorselection',
    'rhs_table' => 'mvh_colorselection',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'mvh_Colorselection',
    'user_field' => 'created_by',
  ),
  'mvh_colorselection_favorite' => 
  array (
    'name' => 'mvh_colorselection_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mvh_Colorselection',
    'rhs_table' => 'mvh_colorselection',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mvh_Colorselection',
    'user_field' => 'created_by',
  ),
  'mvh_colorselection_tags' => 
  array (
    'name' => 'mvh_colorselection_tags',
    'lhs_module' => 'mvh_Colorselection',
    'lhs_table' => 'mvh_colorselection',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'mvh_Colorselection',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'mvh_colorselection_locked_fields' => 
  array (
    'name' => 'mvh_colorselection_locked_fields',
    'lhs_module' => 'mvh_Colorselection',
    'lhs_table' => 'mvh_colorselection',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'mvh_Colorselection',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'mvh_colorselection_team_count_relationship' => 
  array (
    'name' => 'mvh_colorselection_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'mvh_Colorselection',
    'rhs_table' => 'mvh_colorselection',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'mvh_colorselection_teams' => 
  array (
    'name' => 'mvh_colorselection_teams',
    'lhs_module' => 'mvh_Colorselection',
    'lhs_table' => 'mvh_colorselection',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'mvh_colorselection_team' => 
  array (
    'name' => 'mvh_colorselection_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'mvh_Colorselection',
    'rhs_table' => 'mvh_colorselection',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'mvh_colorselection_assigned_user' => 
  array (
    'name' => 'mvh_colorselection_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mvh_Colorselection',
    'rhs_table' => 'mvh_colorselection',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'rt_gsync_modified_user' => 
  array (
    'name' => 'rt_gsync_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'rt_GSync',
    'rhs_table' => 'rt_gsync',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'rt_gsync_created_by' => 
  array (
    'name' => 'rt_gsync_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'rt_GSync',
    'rhs_table' => 'rt_gsync',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'rt_gsync_activities' => 
  array (
    'name' => 'rt_gsync_activities',
    'lhs_module' => 'rt_GSync',
    'lhs_table' => 'rt_gsync',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rt_GSync',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'rt_gsync_following' => 
  array (
    'name' => 'rt_gsync_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'rt_GSync',
    'rhs_table' => 'rt_gsync',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rt_GSync',
    'user_field' => 'created_by',
  ),
  'rt_gsync_favorite' => 
  array (
    'name' => 'rt_gsync_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'rt_GSync',
    'rhs_table' => 'rt_gsync',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'rt_GSync',
    'user_field' => 'created_by',
  ),
  'rt_gsync_tags' => 
  array (
    'name' => 'rt_gsync_tags',
    'lhs_module' => 'rt_GSync',
    'lhs_table' => 'rt_gsync',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'rt_GSync',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'rt_gsync_locked_fields' => 
  array (
    'name' => 'rt_gsync_locked_fields',
    'lhs_module' => 'rt_GSync',
    'lhs_table' => 'rt_gsync',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'rt_GSync',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'rt_gsync_team_count_relationship' => 
  array (
    'name' => 'rt_gsync_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'rt_GSync',
    'rhs_table' => 'rt_gsync',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'rt_gsync_teams' => 
  array (
    'name' => 'rt_gsync_teams',
    'lhs_module' => 'rt_GSync',
    'lhs_table' => 'rt_gsync',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'rt_gsync_team' => 
  array (
    'name' => 'rt_gsync_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'rt_GSync',
    'rhs_table' => 'rt_gsync',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'rt_gsync_assigned_user' => 
  array (
    'name' => 'rt_gsync_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'rt_GSync',
    'rhs_table' => 'rt_gsync',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tracker_monitor_id' => 
  array (
    'name' => 'tracker_monitor_id',
    'lhs_module' => 'TrackerPerfs',
    'lhs_table' => 'tracker_perf',
    'lhs_key' => 'monitor_id',
    'rhs_module' => 'Trackers',
    'rhs_table' => 'tracker',
    'rhs_key' => 'monitor_id',
    'relationship_type' => 'one-to-one',
  ),
  'aclrolesets_modified_user' => 
  array (
    'name' => 'aclrolesets_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLRoleSets',
    'rhs_table' => 'acl_role_sets',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aclrolesets_created_by' => 
  array (
    'name' => 'aclrolesets_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLRoleSets',
    'rhs_table' => 'acl_role_sets',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aclroleset_activities' => 
  array (
    'name' => 'aclroleset_activities',
    'lhs_module' => 'ACLRoleSets',
    'lhs_table' => 'acl_role_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ACLRoleSets',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'aclrolesets_following' => 
  array (
    'name' => 'aclrolesets_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLRoleSets',
    'rhs_table' => 'acl_role_sets',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ACLRoleSets',
    'user_field' => 'created_by',
  ),
  'aclrolesets_favorite' => 
  array (
    'name' => 'aclrolesets_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLRoleSets',
    'rhs_table' => 'acl_role_sets',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ACLRoleSets',
    'user_field' => 'created_by',
  ),
  'aclrolesets_tags' => 
  array (
    'name' => 'aclrolesets_tags',
    'lhs_module' => 'ACLRoleSets',
    'lhs_table' => 'acl_role_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ACLRoleSets',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'aclrolesets_locked_fields' => 
  array (
    'name' => 'aclrolesets_locked_fields',
    'lhs_module' => 'ACLRoleSets',
    'lhs_table' => 'acl_role_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ACLRoleSets',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'project_tasks_notes' => 
  array (
    'name' => 'project_tasks_notes',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_tasks' => 
  array (
    'name' => 'project_tasks_tasks',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_meetings' => 
  array (
    'name' => 'project_tasks_meetings',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_calls' => 
  array (
    'name' => 'project_tasks_calls',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_emails' => 
  array (
    'name' => 'project_tasks_emails',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_assigned_user' => 
  array (
    'name' => 'project_tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_modified_user' => 
  array (
    'name' => 'project_tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_created_by' => 
  array (
    'name' => 'project_tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'projecttask_team_count_relationship' => 
  array (
    'name' => 'projecttask_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'projecttask_teams' => 
  array (
    'name' => 'projecttask_teams',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'projecttask_team' => 
  array (
    'name' => 'projecttask_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'email_template_email_marketings' => 
  array (
    'name' => 'email_template_email_marketings',
    'lhs_module' => 'EmailTemplates',
    'lhs_table' => 'email_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'template_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_contact' => 
  array (
    'name' => 'campaignlog_contact',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_lead' => 
  array (
    'name' => 'campaignlog_lead',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_created_opportunities' => 
  array (
    'name' => 'campaignlog_created_opportunities',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_targeted_users' => 
  array (
    'name' => 'campaignlog_targeted_users',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'target_id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_sent_emails' => 
  array (
    'name' => 'campaignlog_sent_emails',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaigntrakers' => 
  array (
    'name' => 'campaign_campaigntrakers',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignTrackers',
    'rhs_table' => 'campaign_trkrs',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_modified_user' => 
  array (
    'name' => 'schedulers_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_created_by' => 
  array (
    'name' => 'schedulers_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'scheduler_activities' => 
  array (
    'name' => 'scheduler_activities',
    'lhs_module' => 'Schedulers',
    'lhs_table' => 'schedulers',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Schedulers',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'schedulers_created_by_rel' => 
  array (
    'name' => 'schedulers_created_by_rel',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'schedulers_modified_user_id_rel' => 
  array (
    'name' => 'schedulers_modified_user_id_rel',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_jobs_rel' => 
  array (
    'name' => 'schedulers_jobs_rel',
    'lhs_module' => 'Schedulers',
    'lhs_table' => 'schedulers',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'job_queue',
    'rhs_key' => 'scheduler_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_following' => 
  array (
    'name' => 'schedulers_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Schedulers',
    'user_field' => 'created_by',
  ),
  'schedulers_favorite' => 
  array (
    'name' => 'schedulers_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Schedulers',
    'user_field' => 'created_by',
  ),
  'schedulers_locked_fields' => 
  array (
    'name' => 'schedulers_locked_fields',
    'lhs_module' => 'Schedulers',
    'lhs_table' => 'schedulers',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Schedulers',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'schedulersjob_notes' => 
  array (
    'name' => 'schedulersjob_notes',
    'lhs_module' => 'SchedulersJobs',
    'lhs_table' => 'job_queue',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'schedulersjobs_following' => 
  array (
    'name' => 'schedulersjobs_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'job_queue',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'SchedulersJobs',
    'user_field' => 'created_by',
  ),
  'schedulersjobs_favorite' => 
  array (
    'name' => 'schedulersjobs_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'job_queue',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'SchedulersJobs',
    'user_field' => 'created_by',
  ),
  'schedulersjobs_assigned_user' => 
  array (
    'name' => 'schedulersjobs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'job_queue',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_assigned_user' => 
  array (
    'name' => 'emailtemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_modified_user' => 
  array (
    'name' => 'emailtemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_created_by' => 
  array (
    'name' => 'emailtemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_attachments' => 
  array (
    'name' => 'emailtemplates_attachments',
    'lhs_module' => 'EmailTemplates',
    'lhs_table' => 'email_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'email_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'email_type',
    'relationship_role_column_value' => 'EmailTemplates',
  ),
  'emailtemplates_team_count_relationship' => 
  array (
    'name' => 'emailtemplates_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_teams' => 
  array (
    'name' => 'emailtemplates_teams',
    'lhs_module' => 'EmailTemplates',
    'lhs_table' => 'email_templates',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'emailtemplates_team' => 
  array (
    'name' => 'emailtemplates_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'usersignatures_modified_user' => 
  array (
    'name' => 'usersignatures_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UserSignatures',
    'rhs_table' => 'users_signatures',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'usersignatures_created_by' => 
  array (
    'name' => 'usersignatures_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UserSignatures',
    'rhs_table' => 'users_signatures',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'usersignature_activities' => 
  array (
    'name' => 'usersignature_activities',
    'lhs_module' => 'UserSignatures',
    'lhs_table' => 'users_signatures',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'UserSignatures',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'usersignatures_following' => 
  array (
    'name' => 'usersignatures_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UserSignatures',
    'rhs_table' => 'users_signatures',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'UserSignatures',
    'user_field' => 'created_by',
  ),
  'usersignatures_favorite' => 
  array (
    'name' => 'usersignatures_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UserSignatures',
    'rhs_table' => 'users_signatures',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'UserSignatures',
    'user_field' => 'created_by',
  ),
  'usersignatures_tags' => 
  array (
    'name' => 'usersignatures_tags',
    'lhs_module' => 'UserSignatures',
    'lhs_table' => 'users_signatures',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'UserSignatures',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'usersignatures_locked_fields' => 
  array (
    'name' => 'usersignatures_locked_fields',
    'lhs_module' => 'UserSignatures',
    'lhs_table' => 'users_signatures',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'UserSignatures',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'tracker_user_id' => 
  array (
    'name' => 'tracker_user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TrackerSessions',
    'rhs_table' => 'tracker',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tracker_tracker_queries' => 
  array (
    'name' => 'tracker_tracker_queries',
    'table' => 'tracker_tracker_queries',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'int',
        'len' => '11',
        'isnull' => 'false',
        'auto_increment' => true,
        'reportable' => false,
      ),
      'monitor_id' => 
      array (
        'name' => 'monitor_id',
        'type' => 'id',
        'len' => '36',
      ),
      'query_id' => 
      array (
        'name' => 'query_id',
        'type' => 'id',
        'len' => '36',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'tracker_tracker_queriespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_tracker_tq_monitor',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'monitor_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_tracker_tq_query',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'query_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'tracker_tracker_queries' => 
      array (
        'lhs_module' => 'Trackers',
        'lhs_table' => 'tracker',
        'lhs_key' => 'monitor_id',
        'rhs_module' => 'TrackerQueries',
        'rhs_table' => 'tracker_queries',
        'rhs_key' => 'query_id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'tracker_tracker_queries',
        'join_key_lhs' => 'monitor_id',
        'join_key_rhs' => 'query_id',
      ),
    ),
    'lhs_module' => 'Trackers',
    'lhs_table' => 'tracker',
    'lhs_key' => 'monitor_id',
    'rhs_module' => 'TrackerQueries',
    'rhs_table' => 'tracker_queries',
    'rhs_key' => 'query_id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tracker_tracker_queries',
    'join_key_lhs' => 'monitor_id',
    'join_key_rhs' => 'query_id',
  ),
  'revisions_created_by' => 
  array (
    'name' => 'revisions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'styleguide_modified_user' => 
  array (
    'name' => 'styleguide_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Styleguide',
    'rhs_table' => 'styleguide',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'styleguide_created_by' => 
  array (
    'name' => 'styleguide_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Styleguide',
    'rhs_table' => 'styleguide',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'styleguide_activities' => 
  array (
    'name' => 'styleguide_activities',
    'lhs_module' => 'Styleguide',
    'lhs_table' => 'styleguide',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Styleguide',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'styleguide_following' => 
  array (
    'name' => 'styleguide_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Styleguide',
    'rhs_table' => 'styleguide',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Styleguide',
    'user_field' => 'created_by',
  ),
  'styleguide_favorite' => 
  array (
    'name' => 'styleguide_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Styleguide',
    'rhs_table' => 'styleguide',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Styleguide',
    'user_field' => 'created_by',
  ),
  'styleguide_locked_fields' => 
  array (
    'name' => 'styleguide_locked_fields',
    'lhs_module' => 'Styleguide',
    'lhs_table' => 'styleguide',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Styleguide',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'styleguide_email_addresses' => 
  array (
    'name' => 'styleguide_email_addresses',
    'lhs_module' => 'Styleguide',
    'lhs_table' => 'styleguide',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Styleguide',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'styleguide_email_addresses_primary' => 
  array (
    'name' => 'styleguide_email_addresses_primary',
    'lhs_module' => 'Styleguide',
    'lhs_table' => 'styleguide',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Styleguide',
    'primary_flag_column' => 'primary_address',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'email_address_id' => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      'primary_address' => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'reply_to_address' => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      'date_created' => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'styleguide_assigned_user' => 
  array (
    'name' => 'styleguide_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Styleguide',
    'rhs_table' => 'styleguide',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'inbound_email_created_by' => 
  array (
    'name' => 'inbound_email_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'inbound_email_modified_user_id' => 
  array (
    'name' => 'inbound_email_modified_user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-one',
  ),
  'inbound_email_emails' => 
  array (
    'name' => 'inbound_email_emails',
    'lhs_module' => 'InboundEmail',
    'lhs_table' => 'inbound_email',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'mailbox_id',
    'relationship_type' => 'one-to-many',
  ),
  'inboundemail_team_count_relationship' => 
  array (
    'name' => 'inboundemail_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'inboundemail_teams' => 
  array (
    'name' => 'inboundemail_teams',
    'lhs_module' => 'InboundEmail',
    'lhs_table' => 'inbound_email',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'inboundemail_team' => 
  array (
    'name' => 'inboundemail_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'saved_search_assigned_user' => 
  array (
    'name' => 'saved_search_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'savedsearch_team_count_relationship' => 
  array (
    'name' => 'savedsearch_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'savedsearch_teams' => 
  array (
    'name' => 'savedsearch_teams',
    'lhs_module' => 'SavedSearch',
    'lhs_table' => 'saved_search',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'savedsearch_team' => 
  array (
    'name' => 'savedsearch_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'employees_created_by' => 
  array (
    'name' => 'employees_created_by',
    'lhs_module' => 'Employees',
    'lhs_table' => 'users',
    'lhs_key' => 'created_by',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'team_memberships' => 
  array (
    'name' => 'team_memberships',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_memberships',
    'join_key_lhs' => 'team_id',
    'join_key_rhs' => 'user_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      'user_id' => 
      array (
        'name' => 'user_id',
        'type' => 'id',
      ),
      'explicit_assign' => 
      array (
        'name' => 'explicit_assign',
        'type' => 'bool',
        'len' => 1,
        'default' => 0,
        'required' => true,
      ),
      'implicit_assign' => 
      array (
        'name' => 'implicit_assign',
        'type' => 'bool',
        'len' => 1,
        'default' => 0,
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => 1,
        'default' => 0,
      ),
    ),
  ),
  'revenuelineitems_modified_user' => 
  array (
    'name' => 'revenuelineitems_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitems_created_by' => 
  array (
    'name' => 'revenuelineitems_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitem_activities' => 
  array (
    'name' => 'revenuelineitem_activities',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'RevenueLineItems',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'revenuelineitem_tasks' => 
  array (
    'name' => 'revenuelineitem_tasks',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'RevenueLineItems',
  ),
  'revenuelineitem_notes' => 
  array (
    'name' => 'revenuelineitem_notes',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'RevenueLineItems',
  ),
  'revenuelineitems_accounts' => 
  array (
    'name' => 'revenuelineitems_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitem_categories' => 
  array (
    'name' => 'revenuelineitem_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'category_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitem_templates' => 
  array (
    'name' => 'revenuelineitem_templates',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'product_template_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitem_types' => 
  array (
    'name' => 'revenuelineitem_types',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'type_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitem_calls' => 
  array (
    'name' => 'revenuelineitem_calls',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'RevenueLineItems',
  ),
  'revenuelineitem_meetings' => 
  array (
    'name' => 'revenuelineitem_meetings',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'RevenueLineItems',
  ),
  'revenuelineitems_manufacturers' => 
  array (
    'name' => 'revenuelineitems_manufacturers',
    'lhs_module' => 'Manufacturers',
    'lhs_table' => 'manufacturers',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'manufacturer_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitems_following' => 
  array (
    'name' => 'revenuelineitems_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'RevenueLineItems',
    'user_field' => 'created_by',
  ),
  'revenuelineitems_favorite' => 
  array (
    'name' => 'revenuelineitems_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'RevenueLineItems',
    'user_field' => 'created_by',
  ),
  'revenuelineitems_tags' => 
  array (
    'name' => 'revenuelineitems_tags',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'RevenueLineItems',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'revenuelineitems_locked_fields' => 
  array (
    'name' => 'revenuelineitems_locked_fields',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'RevenueLineItems',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'revenuelineitems_assigned_user' => 
  array (
    'name' => 'revenuelineitems_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitems_team_count_relationship' => 
  array (
    'name' => 'revenuelineitems_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitems_teams' => 
  array (
    'name' => 'revenuelineitems_teams',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'revenuelineitems_team' => 
  array (
    'name' => 'revenuelineitems_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitems_currencies' => 
  array (
    'name' => 'revenuelineitems_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_bundle_taxrate' => 
  array (
    'name' => 'product_bundle_taxrate',
    'rhs_module' => 'ProductBundles',
    'rhs_table' => 'product_bundles',
    'rhs_key' => 'taxrate_id',
    'lhs_module' => 'TaxRates',
    'lhs_table' => 'taxrates',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'productbundles_team_count_relationship' => 
  array (
    'name' => 'productbundles_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundles',
    'rhs_table' => 'product_bundles',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'productbundles_teams' => 
  array (
    'name' => 'productbundles_teams',
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'productbundles_team' => 
  array (
    'name' => 'productbundles_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundles',
    'rhs_table' => 'product_bundles',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'productbundles_currencies' => 
  array (
    'name' => 'productbundles_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundles',
    'rhs_table' => 'product_bundles',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'producttemplates_modified_user' => 
  array (
    'name' => 'producttemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'producttemplates_created_by' => 
  array (
    'name' => 'producttemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'producttemplate_activities' => 
  array (
    'name' => 'producttemplate_activities',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProductTemplates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'product_templates_product_categories' => 
  array (
    'name' => 'product_templates_product_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'category_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_product_types' => 
  array (
    'name' => 'product_templates_product_types',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'type_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_manufacturers' => 
  array (
    'name' => 'product_templates_manufacturers',
    'lhs_module' => 'Manufacturers',
    'lhs_table' => 'manufacturers',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'manufacturer_id',
    'relationship_type' => 'one-to-many',
  ),
  'producttemplates_following' => 
  array (
    'name' => 'producttemplates_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProductTemplates',
    'user_field' => 'created_by',
  ),
  'producttemplates_favorite' => 
  array (
    'name' => 'producttemplates_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProductTemplates',
    'user_field' => 'created_by',
  ),
  'producttemplates_tags' => 
  array (
    'name' => 'producttemplates_tags',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProductTemplates',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'producttemplates_locked_fields' => 
  array (
    'name' => 'producttemplates_locked_fields',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProductTemplates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'producttemplates_assigned_user' => 
  array (
    'name' => 'producttemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'producttemplates_currencies' => 
  array (
    'name' => 'producttemplates_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'producttypes_modified_user' => 
  array (
    'name' => 'producttypes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTypes',
    'rhs_table' => 'product_types',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'producttypes_created_by' => 
  array (
    'name' => 'producttypes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTypes',
    'rhs_table' => 'product_types',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'producttype_activities' => 
  array (
    'name' => 'producttype_activities',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProductTypes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'producttypes_following' => 
  array (
    'name' => 'producttypes_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTypes',
    'rhs_table' => 'product_types',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProductTypes',
    'user_field' => 'created_by',
  ),
  'producttypes_favorite' => 
  array (
    'name' => 'producttypes_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTypes',
    'rhs_table' => 'product_types',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProductTypes',
    'user_field' => 'created_by',
  ),
  'producttypes_tags' => 
  array (
    'name' => 'producttypes_tags',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProductTypes',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'producttypes_locked_fields' => 
  array (
    'name' => 'producttypes_locked_fields',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProductTypes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'productcategories_modified_user' => 
  array (
    'name' => 'productcategories_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductCategories',
    'rhs_table' => 'product_categories',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'productcategories_created_by' => 
  array (
    'name' => 'productcategories_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductCategories',
    'rhs_table' => 'product_categories',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'productcategory_activities' => 
  array (
    'name' => 'productcategory_activities',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProductCategories',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'member_categories' => 
  array (
    'name' => 'member_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductCategories',
    'rhs_table' => 'product_categories',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'productcategories_following' => 
  array (
    'name' => 'productcategories_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductCategories',
    'rhs_table' => 'product_categories',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProductCategories',
    'user_field' => 'created_by',
  ),
  'productcategories_favorite' => 
  array (
    'name' => 'productcategories_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductCategories',
    'rhs_table' => 'product_categories',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProductCategories',
    'user_field' => 'created_by',
  ),
  'productcategories_locked_fields' => 
  array (
    'name' => 'productcategories_locked_fields',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProductCategories',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'productcategories_assigned_user' => 
  array (
    'name' => 'productcategories_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductCategories',
    'rhs_table' => 'product_categories',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'manufacturers_modified_user' => 
  array (
    'name' => 'manufacturers_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Manufacturers',
    'rhs_table' => 'manufacturers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'manufacturers_created_by' => 
  array (
    'name' => 'manufacturers_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Manufacturers',
    'rhs_table' => 'manufacturers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'manufacturer_activities' => 
  array (
    'name' => 'manufacturer_activities',
    'lhs_module' => 'Manufacturers',
    'lhs_table' => 'manufacturers',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Manufacturers',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'manufacturers_following' => 
  array (
    'name' => 'manufacturers_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Manufacturers',
    'rhs_table' => 'manufacturers',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Manufacturers',
    'user_field' => 'created_by',
  ),
  'manufacturers_favorite' => 
  array (
    'name' => 'manufacturers_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Manufacturers',
    'rhs_table' => 'manufacturers',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Manufacturers',
    'user_field' => 'created_by',
  ),
  'manufacturers_tags' => 
  array (
    'name' => 'manufacturers_tags',
    'lhs_module' => 'Manufacturers',
    'lhs_table' => 'manufacturers',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Manufacturers',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'manufacturers_locked_fields' => 
  array (
    'name' => 'manufacturers_locked_fields',
    'lhs_module' => 'Manufacturers',
    'lhs_table' => 'manufacturers',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Manufacturers',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'shippers_modified_user' => 
  array (
    'name' => 'shippers_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Shippers',
    'rhs_table' => 'shippers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'shippers_created_by' => 
  array (
    'name' => 'shippers_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Shippers',
    'rhs_table' => 'shippers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'shipper_activities' => 
  array (
    'name' => 'shipper_activities',
    'lhs_module' => 'Shippers',
    'lhs_table' => 'shippers',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Shippers',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'shipper_quotes' => 
  array (
    'name' => 'shipper_quotes',
    'lhs_module' => 'Shippers',
    'lhs_table' => 'shippers',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'shipper_id',
    'relationship_type' => 'one-to-many',
  ),
  'shippers_following' => 
  array (
    'name' => 'shippers_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Shippers',
    'rhs_table' => 'shippers',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Shippers',
    'user_field' => 'created_by',
  ),
  'shippers_favorite' => 
  array (
    'name' => 'shippers_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Shippers',
    'rhs_table' => 'shippers',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Shippers',
    'user_field' => 'created_by',
  ),
  'shippers_tags' => 
  array (
    'name' => 'shippers_tags',
    'lhs_module' => 'Shippers',
    'lhs_table' => 'shippers',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Shippers',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'shippers_locked_fields' => 
  array (
    'name' => 'shippers_locked_fields',
    'lhs_module' => 'Shippers',
    'lhs_table' => 'shippers',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Shippers',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'taxrates_modified_user' => 
  array (
    'name' => 'taxrates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TaxRates',
    'rhs_table' => 'taxrates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'taxrates_created_by' => 
  array (
    'name' => 'taxrates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TaxRates',
    'rhs_table' => 'taxrates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'taxrate_activities' => 
  array (
    'name' => 'taxrate_activities',
    'lhs_module' => 'TaxRates',
    'lhs_table' => 'taxrates',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'TaxRates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'taxrate_quotes' => 
  array (
    'name' => 'taxrate_quotes',
    'lhs_module' => 'TaxRates',
    'lhs_table' => 'taxrates',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'taxrate_id',
    'relationship_type' => 'one-to-many',
  ),
  'taxrates_following' => 
  array (
    'name' => 'taxrates_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TaxRates',
    'rhs_table' => 'taxrates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'TaxRates',
    'user_field' => 'created_by',
  ),
  'taxrates_favorite' => 
  array (
    'name' => 'taxrates_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TaxRates',
    'rhs_table' => 'taxrates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'TaxRates',
    'user_field' => 'created_by',
  ),
  'taxrates_tags' => 
  array (
    'name' => 'taxrates_tags',
    'lhs_module' => 'TaxRates',
    'lhs_table' => 'taxrates',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'TaxRates',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'taxrates_locked_fields' => 
  array (
    'name' => 'taxrates_locked_fields',
    'lhs_module' => 'TaxRates',
    'lhs_table' => 'taxrates',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'TaxRates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'teamnotices_team_count_relationship' => 
  array (
    'name' => 'teamnotices_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'TeamNotices',
    'rhs_table' => 'team_notices',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'teamnotices_teams' => 
  array (
    'name' => 'teamnotices_teams',
    'lhs_module' => 'TeamNotices',
    'lhs_table' => 'team_notices',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'teamnotices_team' => 
  array (
    'name' => 'teamnotices_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'TeamNotices',
    'rhs_table' => 'team_notices',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'related_timeperiods' => 
  array (
    'name' => 'related_timeperiods',
    'lhs_module' => 'TimePeriods',
    'lhs_table' => 'timeperiods',
    'lhs_key' => 'id',
    'rhs_module' => 'TimePeriods',
    'rhs_table' => 'timeperiods',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_modified_user' => 
  array (
    'name' => 'forecastworksheets_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_created_by' => 
  array (
    'name' => 'forecastworksheets_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheet_activities' => 
  array (
    'name' => 'forecastworksheet_activities',
    'lhs_module' => 'ForecastWorksheets',
    'lhs_table' => 'forecast_worksheets',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ForecastWorksheets',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'forecastworksheets_accounts' => 
  array (
    'name' => 'forecastworksheets_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_opportunities' => 
  array (
    'name' => 'forecastworksheets_opportunities',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_campaigns' => 
  array (
    'name' => 'forecastworksheets_campaigns',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_templates' => 
  array (
    'name' => 'forecastworksheets_templates',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'product_template_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_categories' => 
  array (
    'name' => 'forecastworksheets_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'category_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_following' => 
  array (
    'name' => 'forecastworksheets_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ForecastWorksheets',
    'user_field' => 'created_by',
  ),
  'forecastworksheets_favorite' => 
  array (
    'name' => 'forecastworksheets_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ForecastWorksheets',
    'user_field' => 'created_by',
  ),
  'forecastworksheets_locked_fields' => 
  array (
    'name' => 'forecastworksheets_locked_fields',
    'lhs_module' => 'ForecastWorksheets',
    'lhs_table' => 'forecast_worksheets',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ForecastWorksheets',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'forecastworksheets_assigned_user' => 
  array (
    'name' => 'forecastworksheets_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_team_count_relationship' => 
  array (
    'name' => 'forecastworksheets_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_teams' => 
  array (
    'name' => 'forecastworksheets_teams',
    'lhs_module' => 'ForecastWorksheets',
    'lhs_table' => 'forecast_worksheets',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'forecastworksheets_team' => 
  array (
    'name' => 'forecastworksheets_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_currencies' => 
  array (
    'name' => 'forecastworksheets_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheets_modified_user' => 
  array (
    'name' => 'forecastmanagerworksheets_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheets_created_by' => 
  array (
    'name' => 'forecastmanagerworksheets_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheet_activities' => 
  array (
    'name' => 'forecastmanagerworksheet_activities',
    'lhs_module' => 'ForecastManagerWorksheets',
    'lhs_table' => 'forecast_manager_worksheets',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ForecastManagerWorksheets',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'forecastmanagerworksheets_following' => 
  array (
    'name' => 'forecastmanagerworksheets_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ForecastManagerWorksheets',
    'user_field' => 'created_by',
  ),
  'forecastmanagerworksheets_favorite' => 
  array (
    'name' => 'forecastmanagerworksheets_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ForecastManagerWorksheets',
    'user_field' => 'created_by',
  ),
  'forecastmanagerworksheets_locked_fields' => 
  array (
    'name' => 'forecastmanagerworksheets_locked_fields',
    'lhs_module' => 'ForecastManagerWorksheets',
    'lhs_table' => 'forecast_manager_worksheets',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ForecastManagerWorksheets',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'forecastmanagerworksheets_assigned_user' => 
  array (
    'name' => 'forecastmanagerworksheets_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheets_team_count_relationship' => 
  array (
    'name' => 'forecastmanagerworksheets_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheets_teams' => 
  array (
    'name' => 'forecastmanagerworksheets_teams',
    'lhs_module' => 'ForecastManagerWorksheets',
    'lhs_table' => 'forecast_manager_worksheets',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'forecastmanagerworksheets_team' => 
  array (
    'name' => 'forecastmanagerworksheets_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheets_currencies' => 
  array (
    'name' => 'forecastmanagerworksheets_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotas_modified_user' => 
  array (
    'name' => 'quotas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotas',
    'rhs_table' => 'quotas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotas_created_by' => 
  array (
    'name' => 'quotas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotas',
    'rhs_table' => 'quotas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'quota_activities' => 
  array (
    'name' => 'quota_activities',
    'lhs_module' => 'Quotas',
    'lhs_table' => 'quotas',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotas',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'quotas_following' => 
  array (
    'name' => 'quotas_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotas',
    'rhs_table' => 'quotas',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotas',
    'user_field' => 'created_by',
  ),
  'quotas_favorite' => 
  array (
    'name' => 'quotas_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotas',
    'rhs_table' => 'quotas',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Quotas',
    'user_field' => 'created_by',
  ),
  'quotas_locked_fields' => 
  array (
    'name' => 'quotas_locked_fields',
    'lhs_module' => 'Quotas',
    'lhs_table' => 'quotas',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Quotas',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'quotas_assigned_user' => 
  array (
    'name' => 'quotas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotas',
    'rhs_table' => 'quotas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotas_currencies' => 
  array (
    'name' => 'quotas_currencies',
    'lhs_module' => 'Currencies',
    'lhs_table' => 'currencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotas',
    'rhs_table' => 'quotas',
    'rhs_key' => 'currency_id',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_triggers' => 
  array (
    'name' => 'workflow_triggers',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowTriggerShells',
    'rhs_table' => 'workflow_triggershells',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'frame_type',
    'relationship_role_column_value' => 'Primary',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_trigger_filters' => 
  array (
    'name' => 'workflow_trigger_filters',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowTriggerShells',
    'rhs_table' => 'workflow_triggershells',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'frame_type',
    'relationship_role_column_value' => 'Secondary',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_alerts' => 
  array (
    'name' => 'workflow_alerts',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowAlertShells',
    'rhs_table' => 'workflow_alertshells',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_actions' => 
  array (
    'name' => 'workflow_actions',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowActionShells',
    'rhs_table' => 'workflow_actionshells',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'past_triggers' => 
  array (
    'name' => 'past_triggers',
    'lhs_module' => 'WorkFlowTriggerShells',
    'lhs_table' => 'workflow_triggershells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'past_trigger',
    'relationship_type' => 'one-to-many',
  ),
  'future_triggers' => 
  array (
    'name' => 'future_triggers',
    'lhs_module' => 'WorkFlowTriggerShells',
    'lhs_table' => 'workflow_triggershells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'future_trigger',
    'relationship_type' => 'one-to-many',
  ),
  'trigger_expressions' => 
  array (
    'name' => 'trigger_expressions',
    'lhs_module' => 'WorkFlowTriggerShells',
    'lhs_table' => 'workflow_triggershells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'expression',
    'relationship_type' => 'one-to-many',
  ),
  'alert_components' => 
  array (
    'name' => 'alert_components',
    'lhs_module' => 'WorkFlowAlertShells',
    'lhs_table' => 'workflow_alertshells',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowAlerts',
    'rhs_table' => 'workflow_alerts',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'expressions' => 
  array (
    'name' => 'expressions',
    'lhs_module' => 'WorkFlowAlerts',
    'lhs_table' => 'workflow_alerts',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'filter',
    'relationship_type' => 'one-to-many',
  ),
  'rel1_alert_fil' => 
  array (
    'name' => 'rel1_alert_fil',
    'lhs_module' => 'WorkFlowAlerts',
    'lhs_table' => 'workflow_alerts',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rel1_alert_fil',
    'relationship_type' => 'one-to-many',
  ),
  'rel2_alert_fil' => 
  array (
    'name' => 'rel2_alert_fil',
    'lhs_module' => 'WorkFlowAlerts',
    'lhs_table' => 'workflow_alerts',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rel2_alert_fil',
    'relationship_type' => 'one-to-many',
  ),
  'actions' => 
  array (
    'name' => 'actions',
    'lhs_module' => 'WorkFlowActionShells',
    'lhs_table' => 'workflow_actionshells',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowActions',
    'rhs_table' => 'workflow_actions',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'action_bridge' => 
  array (
    'name' => 'action_bridge',
    'lhs_module' => 'WorkFlowActionShells',
    'lhs_table' => 'workflow_actionshells',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlow',
    'rhs_table' => 'workflow',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'rel1_action_fil' => 
  array (
    'name' => 'rel1_action_fil',
    'lhs_module' => 'WorkFlowActionShells',
    'lhs_table' => 'workflow_actionshells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rel1_action_fil',
    'relationship_type' => 'one-to-many',
  ),
  'member_expressions' => 
  array (
    'name' => 'member_expressions',
    'lhs_module' => 'Expressions',
    'lhs_table' => 'expressions',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_exp_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracttypes_modified_user' => 
  array (
    'name' => 'contracttypes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ContractTypes',
    'rhs_table' => 'contract_types',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracttypes_created_by' => 
  array (
    'name' => 'contracttypes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ContractTypes',
    'rhs_table' => 'contract_types',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contracttype_activities' => 
  array (
    'name' => 'contracttype_activities',
    'lhs_module' => 'ContractTypes',
    'lhs_table' => 'contract_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ContractTypes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'contracttypes_following' => 
  array (
    'name' => 'contracttypes_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ContractTypes',
    'rhs_table' => 'contract_types',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ContractTypes',
    'user_field' => 'created_by',
  ),
  'contracttypes_favorite' => 
  array (
    'name' => 'contracttypes_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ContractTypes',
    'rhs_table' => 'contract_types',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ContractTypes',
    'user_field' => 'created_by',
  ),
  'contracttypes_tags' => 
  array (
    'name' => 'contracttypes_tags',
    'lhs_module' => 'ContractTypes',
    'lhs_table' => 'contract_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ContractTypes',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'contracttypes_locked_fields' => 
  array (
    'name' => 'contracttypes_locked_fields',
    'lhs_module' => 'ContractTypes',
    'lhs_table' => 'contract_types',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ContractTypes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'customqueries_team_count_relationship' => 
  array (
    'name' => 'customqueries_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'CustomQueries',
    'rhs_table' => 'custom_queries',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'customqueries_teams' => 
  array (
    'name' => 'customqueries_teams',
    'lhs_module' => 'CustomQueries',
    'lhs_table' => 'custom_queries',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'customqueries_team' => 
  array (
    'name' => 'customqueries_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'CustomQueries',
    'rhs_table' => 'custom_queries',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'datasets_team_count_relationship' => 
  array (
    'name' => 'datasets_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'DataSets',
    'rhs_table' => 'data_sets',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'datasets_teams' => 
  array (
    'name' => 'datasets_teams',
    'lhs_module' => 'DataSets',
    'lhs_table' => 'data_sets',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'datasets_team' => 
  array (
    'name' => 'datasets_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'DataSets',
    'rhs_table' => 'data_sets',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'reportmaker_team_count_relationship' => 
  array (
    'name' => 'reportmaker_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportMaker',
    'rhs_table' => 'report_maker',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'reportmaker_teams' => 
  array (
    'name' => 'reportmaker_teams',
    'lhs_module' => 'ReportMaker',
    'lhs_table' => 'report_maker',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'reportmaker_team' => 
  array (
    'name' => 'reportmaker_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportMaker',
    'rhs_table' => 'report_maker',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnactivity_modified_user' => 
  array (
    'name' => 'pmse_bpmnactivity_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnActivity',
    'rhs_table' => 'pmse_bpmn_activity',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnactivity_created_by' => 
  array (
    'name' => 'pmse_bpmnactivity_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnActivity',
    'rhs_table' => 'pmse_bpmn_activity',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnactivity_activities' => 
  array (
    'name' => 'pmse_bpmnactivity_activities',
    'lhs_module' => 'pmse_BpmnActivity',
    'lhs_table' => 'pmse_bpmn_activity',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnActivity',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnactivity_following' => 
  array (
    'name' => 'pmse_bpmnactivity_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnActivity',
    'rhs_table' => 'pmse_bpmn_activity',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnActivity',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnactivity_favorite' => 
  array (
    'name' => 'pmse_bpmnactivity_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnActivity',
    'rhs_table' => 'pmse_bpmn_activity',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnActivity',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnactivity_assigned_user' => 
  array (
    'name' => 'pmse_bpmnactivity_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnActivity',
    'rhs_table' => 'pmse_bpmn_activity',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnartifact_modified_user' => 
  array (
    'name' => 'pmse_bpmnartifact_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnArtifact',
    'rhs_table' => 'pmse_bpmn_artifact',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnartifact_created_by' => 
  array (
    'name' => 'pmse_bpmnartifact_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnArtifact',
    'rhs_table' => 'pmse_bpmn_artifact',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnartifact_activities' => 
  array (
    'name' => 'pmse_bpmnartifact_activities',
    'lhs_module' => 'pmse_BpmnArtifact',
    'lhs_table' => 'pmse_bpmn_artifact',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnArtifact',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnartifact_following' => 
  array (
    'name' => 'pmse_bpmnartifact_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnArtifact',
    'rhs_table' => 'pmse_bpmn_artifact',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnArtifact',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnartifact_favorite' => 
  array (
    'name' => 'pmse_bpmnartifact_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnArtifact',
    'rhs_table' => 'pmse_bpmn_artifact',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnArtifact',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnartifact_assigned_user' => 
  array (
    'name' => 'pmse_bpmnartifact_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnArtifact',
    'rhs_table' => 'pmse_bpmn_artifact',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnbound_modified_user' => 
  array (
    'name' => 'pmse_bpmnbound_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnBound',
    'rhs_table' => 'pmse_bpmn_bound',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnbound_created_by' => 
  array (
    'name' => 'pmse_bpmnbound_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnBound',
    'rhs_table' => 'pmse_bpmn_bound',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnbound_activities' => 
  array (
    'name' => 'pmse_bpmnbound_activities',
    'lhs_module' => 'pmse_BpmnBound',
    'lhs_table' => 'pmse_bpmn_bound',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnBound',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnbound_following' => 
  array (
    'name' => 'pmse_bpmnbound_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnBound',
    'rhs_table' => 'pmse_bpmn_bound',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnBound',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnbound_favorite' => 
  array (
    'name' => 'pmse_bpmnbound_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnBound',
    'rhs_table' => 'pmse_bpmn_bound',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnBound',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnbound_assigned_user' => 
  array (
    'name' => 'pmse_bpmnbound_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnBound',
    'rhs_table' => 'pmse_bpmn_bound',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmndata_modified_user' => 
  array (
    'name' => 'pmse_bpmndata_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnData',
    'rhs_table' => 'pmse_bpmn_data',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmndata_created_by' => 
  array (
    'name' => 'pmse_bpmndata_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnData',
    'rhs_table' => 'pmse_bpmn_data',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmndata_activities' => 
  array (
    'name' => 'pmse_bpmndata_activities',
    'lhs_module' => 'pmse_BpmnData',
    'lhs_table' => 'pmse_bpmn_data',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnData',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmndata_following' => 
  array (
    'name' => 'pmse_bpmndata_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnData',
    'rhs_table' => 'pmse_bpmn_data',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnData',
    'user_field' => 'created_by',
  ),
  'pmse_bpmndata_favorite' => 
  array (
    'name' => 'pmse_bpmndata_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnData',
    'rhs_table' => 'pmse_bpmn_data',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnData',
    'user_field' => 'created_by',
  ),
  'pmse_bpmndata_assigned_user' => 
  array (
    'name' => 'pmse_bpmndata_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnData',
    'rhs_table' => 'pmse_bpmn_data',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmndiagram_modified_user' => 
  array (
    'name' => 'pmse_bpmndiagram_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnDiagram',
    'rhs_table' => 'pmse_bpmn_diagram',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmndiagram_created_by' => 
  array (
    'name' => 'pmse_bpmndiagram_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnDiagram',
    'rhs_table' => 'pmse_bpmn_diagram',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmndiagram_activities' => 
  array (
    'name' => 'pmse_bpmndiagram_activities',
    'lhs_module' => 'pmse_BpmnDiagram',
    'lhs_table' => 'pmse_bpmn_diagram',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnDiagram',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmndiagram_following' => 
  array (
    'name' => 'pmse_bpmndiagram_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnDiagram',
    'rhs_table' => 'pmse_bpmn_diagram',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnDiagram',
    'user_field' => 'created_by',
  ),
  'pmse_bpmndiagram_favorite' => 
  array (
    'name' => 'pmse_bpmndiagram_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnDiagram',
    'rhs_table' => 'pmse_bpmn_diagram',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnDiagram',
    'user_field' => 'created_by',
  ),
  'pmse_bpmndiagram_assigned_user' => 
  array (
    'name' => 'pmse_bpmndiagram_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnDiagram',
    'rhs_table' => 'pmse_bpmn_diagram',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmndocumentation_modified_user' => 
  array (
    'name' => 'pmse_bpmndocumentation_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnDocumentation',
    'rhs_table' => 'pmse_bpmn_documentation',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmndocumentation_created_by' => 
  array (
    'name' => 'pmse_bpmndocumentation_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnDocumentation',
    'rhs_table' => 'pmse_bpmn_documentation',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmndocumentation_activities' => 
  array (
    'name' => 'pmse_bpmndocumentation_activities',
    'lhs_module' => 'pmse_BpmnDocumentation',
    'lhs_table' => 'pmse_bpmn_documentation',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnDocumentation',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmndocumentation_following' => 
  array (
    'name' => 'pmse_bpmndocumentation_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnDocumentation',
    'rhs_table' => 'pmse_bpmn_documentation',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnDocumentation',
    'user_field' => 'created_by',
  ),
  'pmse_bpmndocumentation_favorite' => 
  array (
    'name' => 'pmse_bpmndocumentation_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnDocumentation',
    'rhs_table' => 'pmse_bpmn_documentation',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnDocumentation',
    'user_field' => 'created_by',
  ),
  'pmse_bpmndocumentation_assigned_user' => 
  array (
    'name' => 'pmse_bpmndocumentation_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnDocumentation',
    'rhs_table' => 'pmse_bpmn_documentation',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnevent_modified_user' => 
  array (
    'name' => 'pmse_bpmnevent_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnEvent',
    'rhs_table' => 'pmse_bpmn_event',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnevent_created_by' => 
  array (
    'name' => 'pmse_bpmnevent_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnEvent',
    'rhs_table' => 'pmse_bpmn_event',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnevent_activities' => 
  array (
    'name' => 'pmse_bpmnevent_activities',
    'lhs_module' => 'pmse_BpmnEvent',
    'lhs_table' => 'pmse_bpmn_event',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnEvent',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnevent_following' => 
  array (
    'name' => 'pmse_bpmnevent_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnEvent',
    'rhs_table' => 'pmse_bpmn_event',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnEvent',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnevent_favorite' => 
  array (
    'name' => 'pmse_bpmnevent_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnEvent',
    'rhs_table' => 'pmse_bpmn_event',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnEvent',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnevent_assigned_user' => 
  array (
    'name' => 'pmse_bpmnevent_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnEvent',
    'rhs_table' => 'pmse_bpmn_event',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnextension_modified_user' => 
  array (
    'name' => 'pmse_bpmnextension_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnExtension',
    'rhs_table' => 'pmse_bpmn_extension',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnextension_created_by' => 
  array (
    'name' => 'pmse_bpmnextension_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnExtension',
    'rhs_table' => 'pmse_bpmn_extension',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnextension_activities' => 
  array (
    'name' => 'pmse_bpmnextension_activities',
    'lhs_module' => 'pmse_BpmnExtension',
    'lhs_table' => 'pmse_bpmn_extension',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnExtension',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnextension_following' => 
  array (
    'name' => 'pmse_bpmnextension_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnExtension',
    'rhs_table' => 'pmse_bpmn_extension',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnExtension',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnextension_favorite' => 
  array (
    'name' => 'pmse_bpmnextension_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnExtension',
    'rhs_table' => 'pmse_bpmn_extension',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnExtension',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnextension_assigned_user' => 
  array (
    'name' => 'pmse_bpmnextension_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnExtension',
    'rhs_table' => 'pmse_bpmn_extension',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnflow_modified_user' => 
  array (
    'name' => 'pmse_bpmnflow_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnFlow',
    'rhs_table' => 'pmse_bpmn_flow',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnflow_created_by' => 
  array (
    'name' => 'pmse_bpmnflow_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnFlow',
    'rhs_table' => 'pmse_bpmn_flow',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnflow_activities' => 
  array (
    'name' => 'pmse_bpmnflow_activities',
    'lhs_module' => 'pmse_BpmnFlow',
    'lhs_table' => 'pmse_bpmn_flow',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnFlow',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnflow_following' => 
  array (
    'name' => 'pmse_bpmnflow_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnFlow',
    'rhs_table' => 'pmse_bpmn_flow',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnFlow',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnflow_favorite' => 
  array (
    'name' => 'pmse_bpmnflow_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnFlow',
    'rhs_table' => 'pmse_bpmn_flow',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnFlow',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnflow_assigned_user' => 
  array (
    'name' => 'pmse_bpmnflow_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnFlow',
    'rhs_table' => 'pmse_bpmn_flow',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmngateway_modified_user' => 
  array (
    'name' => 'pmse_bpmngateway_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnGateway',
    'rhs_table' => 'pmse_bpmn_gateway',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmngateway_created_by' => 
  array (
    'name' => 'pmse_bpmngateway_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnGateway',
    'rhs_table' => 'pmse_bpmn_gateway',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmngateway_activities' => 
  array (
    'name' => 'pmse_bpmngateway_activities',
    'lhs_module' => 'pmse_BpmnGateway',
    'lhs_table' => 'pmse_bpmn_gateway',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnGateway',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmngateway_following' => 
  array (
    'name' => 'pmse_bpmngateway_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnGateway',
    'rhs_table' => 'pmse_bpmn_gateway',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnGateway',
    'user_field' => 'created_by',
  ),
  'pmse_bpmngateway_favorite' => 
  array (
    'name' => 'pmse_bpmngateway_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnGateway',
    'rhs_table' => 'pmse_bpmn_gateway',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnGateway',
    'user_field' => 'created_by',
  ),
  'pmse_bpmngateway_assigned_user' => 
  array (
    'name' => 'pmse_bpmngateway_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnGateway',
    'rhs_table' => 'pmse_bpmn_gateway',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnlane_modified_user' => 
  array (
    'name' => 'pmse_bpmnlane_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnLane',
    'rhs_table' => 'pmse_bpmn_lane',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnlane_created_by' => 
  array (
    'name' => 'pmse_bpmnlane_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnLane',
    'rhs_table' => 'pmse_bpmn_lane',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnlane_activities' => 
  array (
    'name' => 'pmse_bpmnlane_activities',
    'lhs_module' => 'pmse_BpmnLane',
    'lhs_table' => 'pmse_bpmn_lane',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnLane',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnlane_following' => 
  array (
    'name' => 'pmse_bpmnlane_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnLane',
    'rhs_table' => 'pmse_bpmn_lane',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnLane',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnlane_favorite' => 
  array (
    'name' => 'pmse_bpmnlane_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnLane',
    'rhs_table' => 'pmse_bpmn_lane',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnLane',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnlane_assigned_user' => 
  array (
    'name' => 'pmse_bpmnlane_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnLane',
    'rhs_table' => 'pmse_bpmn_lane',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnlaneset_modified_user' => 
  array (
    'name' => 'pmse_bpmnlaneset_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnLaneset',
    'rhs_table' => 'pmse_bpmn_laneset',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnlaneset_created_by' => 
  array (
    'name' => 'pmse_bpmnlaneset_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnLaneset',
    'rhs_table' => 'pmse_bpmn_laneset',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnlaneset_activities' => 
  array (
    'name' => 'pmse_bpmnlaneset_activities',
    'lhs_module' => 'pmse_BpmnLaneset',
    'lhs_table' => 'pmse_bpmn_laneset',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnLaneset',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnlaneset_following' => 
  array (
    'name' => 'pmse_bpmnlaneset_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnLaneset',
    'rhs_table' => 'pmse_bpmn_laneset',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnLaneset',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnlaneset_favorite' => 
  array (
    'name' => 'pmse_bpmnlaneset_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnLaneset',
    'rhs_table' => 'pmse_bpmn_laneset',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnLaneset',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnlaneset_assigned_user' => 
  array (
    'name' => 'pmse_bpmnlaneset_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnLaneset',
    'rhs_table' => 'pmse_bpmn_laneset',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnparticipant_modified_user' => 
  array (
    'name' => 'pmse_bpmnparticipant_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnParticipant',
    'rhs_table' => 'pmse_bpmn_participant',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnparticipant_created_by' => 
  array (
    'name' => 'pmse_bpmnparticipant_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnParticipant',
    'rhs_table' => 'pmse_bpmn_participant',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnparticipant_activities' => 
  array (
    'name' => 'pmse_bpmnparticipant_activities',
    'lhs_module' => 'pmse_BpmnParticipant',
    'lhs_table' => 'pmse_bpmn_participant',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnParticipant',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnparticipant_following' => 
  array (
    'name' => 'pmse_bpmnparticipant_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnParticipant',
    'rhs_table' => 'pmse_bpmn_participant',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnParticipant',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnparticipant_favorite' => 
  array (
    'name' => 'pmse_bpmnparticipant_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnParticipant',
    'rhs_table' => 'pmse_bpmn_participant',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnParticipant',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnparticipant_assigned_user' => 
  array (
    'name' => 'pmse_bpmnparticipant_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnParticipant',
    'rhs_table' => 'pmse_bpmn_participant',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnprocess_modified_user' => 
  array (
    'name' => 'pmse_bpmnprocess_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnProcess',
    'rhs_table' => 'pmse_bpmn_process',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnprocess_created_by' => 
  array (
    'name' => 'pmse_bpmnprocess_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnProcess',
    'rhs_table' => 'pmse_bpmn_process',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnprocess_activities' => 
  array (
    'name' => 'pmse_bpmnprocess_activities',
    'lhs_module' => 'pmse_BpmnProcess',
    'lhs_table' => 'pmse_bpmn_process',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnProcess',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnprocess_following' => 
  array (
    'name' => 'pmse_bpmnprocess_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnProcess',
    'rhs_table' => 'pmse_bpmn_process',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmnProcess',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnprocess_favorite' => 
  array (
    'name' => 'pmse_bpmnprocess_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnProcess',
    'rhs_table' => 'pmse_bpmn_process',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmnProcess',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnprocess_assigned_user' => 
  array (
    'name' => 'pmse_bpmnprocess_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmnProcess',
    'rhs_table' => 'pmse_bpmn_process',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmflow_modified_user' => 
  array (
    'name' => 'pmse_bpmflow_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmFlow',
    'rhs_table' => 'pmse_bpm_flow',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmflow_created_by' => 
  array (
    'name' => 'pmse_bpmflow_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmFlow',
    'rhs_table' => 'pmse_bpm_flow',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmflow_activities' => 
  array (
    'name' => 'pmse_bpmflow_activities',
    'lhs_module' => 'pmse_BpmFlow',
    'lhs_table' => 'pmse_bpm_flow',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmFlow',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmflow_following' => 
  array (
    'name' => 'pmse_bpmflow_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmFlow',
    'rhs_table' => 'pmse_bpm_flow',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmFlow',
    'user_field' => 'created_by',
  ),
  'pmse_bpmflow_favorite' => 
  array (
    'name' => 'pmse_bpmflow_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmFlow',
    'rhs_table' => 'pmse_bpm_flow',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmFlow',
    'user_field' => 'created_by',
  ),
  'pmse_bpmflow_assigned_user' => 
  array (
    'name' => 'pmse_bpmflow_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmFlow',
    'rhs_table' => 'pmse_bpm_flow',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmthread_modified_user' => 
  array (
    'name' => 'pmse_bpmthread_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmThread',
    'rhs_table' => 'pmse_bpm_thread',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmthread_created_by' => 
  array (
    'name' => 'pmse_bpmthread_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmThread',
    'rhs_table' => 'pmse_bpm_thread',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmthread_activities' => 
  array (
    'name' => 'pmse_bpmthread_activities',
    'lhs_module' => 'pmse_BpmThread',
    'lhs_table' => 'pmse_bpm_thread',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmThread',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmthread_following' => 
  array (
    'name' => 'pmse_bpmthread_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmThread',
    'rhs_table' => 'pmse_bpm_thread',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmThread',
    'user_field' => 'created_by',
  ),
  'pmse_bpmthread_favorite' => 
  array (
    'name' => 'pmse_bpmthread_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmThread',
    'rhs_table' => 'pmse_bpm_thread',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmThread',
    'user_field' => 'created_by',
  ),
  'pmse_bpmthread_assigned_user' => 
  array (
    'name' => 'pmse_bpmthread_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmThread',
    'rhs_table' => 'pmse_bpm_thread',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnotes_modified_user' => 
  array (
    'name' => 'pmse_bpmnotes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmNotes',
    'rhs_table' => 'pmse_bpm_notes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnotes_created_by' => 
  array (
    'name' => 'pmse_bpmnotes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmNotes',
    'rhs_table' => 'pmse_bpm_notes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmnotes_activities' => 
  array (
    'name' => 'pmse_bpmnotes_activities',
    'lhs_module' => 'pmse_BpmNotes',
    'lhs_table' => 'pmse_bpm_notes',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmNotes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmnotes_following' => 
  array (
    'name' => 'pmse_bpmnotes_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmNotes',
    'rhs_table' => 'pmse_bpm_notes',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmNotes',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnotes_favorite' => 
  array (
    'name' => 'pmse_bpmnotes_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmNotes',
    'rhs_table' => 'pmse_bpm_notes',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmNotes',
    'user_field' => 'created_by',
  ),
  'pmse_bpmnotes_assigned_user' => 
  array (
    'name' => 'pmse_bpmnotes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmNotes',
    'rhs_table' => 'pmse_bpm_notes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmrelateddependency_modified_user' => 
  array (
    'name' => 'pmse_bpmrelateddependency_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmRelatedDependency',
    'rhs_table' => 'pmse_bpm_related_dependency',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmrelateddependency_created_by' => 
  array (
    'name' => 'pmse_bpmrelateddependency_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmRelatedDependency',
    'rhs_table' => 'pmse_bpm_related_dependency',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmrelateddependency_activities' => 
  array (
    'name' => 'pmse_bpmrelateddependency_activities',
    'lhs_module' => 'pmse_BpmRelatedDependency',
    'lhs_table' => 'pmse_bpm_related_dependency',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmRelatedDependency',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmrelateddependency_following' => 
  array (
    'name' => 'pmse_bpmrelateddependency_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmRelatedDependency',
    'rhs_table' => 'pmse_bpm_related_dependency',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmRelatedDependency',
    'user_field' => 'created_by',
  ),
  'pmse_bpmrelateddependency_favorite' => 
  array (
    'name' => 'pmse_bpmrelateddependency_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmRelatedDependency',
    'rhs_table' => 'pmse_bpm_related_dependency',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmRelatedDependency',
    'user_field' => 'created_by',
  ),
  'pmse_bpmrelateddependency_assigned_user' => 
  array (
    'name' => 'pmse_bpmrelateddependency_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmRelatedDependency',
    'rhs_table' => 'pmse_bpm_related_dependency',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmactivityuser_modified_user' => 
  array (
    'name' => 'pmse_bpmactivityuser_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityUser',
    'rhs_table' => 'pmse_bpm_activity_user',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmactivityuser_created_by' => 
  array (
    'name' => 'pmse_bpmactivityuser_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityUser',
    'rhs_table' => 'pmse_bpm_activity_user',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmactivityuser_activities' => 
  array (
    'name' => 'pmse_bpmactivityuser_activities',
    'lhs_module' => 'pmse_BpmActivityUser',
    'lhs_table' => 'pmse_bpm_activity_user',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmActivityUser',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmactivityuser_following' => 
  array (
    'name' => 'pmse_bpmactivityuser_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityUser',
    'rhs_table' => 'pmse_bpm_activity_user',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmActivityUser',
    'user_field' => 'created_by',
  ),
  'pmse_bpmactivityuser_favorite' => 
  array (
    'name' => 'pmse_bpmactivityuser_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityUser',
    'rhs_table' => 'pmse_bpm_activity_user',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmActivityUser',
    'user_field' => 'created_by',
  ),
  'pmse_bpmactivityuser_assigned_user' => 
  array (
    'name' => 'pmse_bpmactivityuser_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityUser',
    'rhs_table' => 'pmse_bpm_activity_user',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmeventdefinition_modified_user' => 
  array (
    'name' => 'pmse_bpmeventdefinition_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmEventDefinition',
    'rhs_table' => 'pmse_bpm_event_definition',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmeventdefinition_created_by' => 
  array (
    'name' => 'pmse_bpmeventdefinition_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmEventDefinition',
    'rhs_table' => 'pmse_bpm_event_definition',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmeventdefinition_activities' => 
  array (
    'name' => 'pmse_bpmeventdefinition_activities',
    'lhs_module' => 'pmse_BpmEventDefinition',
    'lhs_table' => 'pmse_bpm_event_definition',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmEventDefinition',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmeventdefinition_following' => 
  array (
    'name' => 'pmse_bpmeventdefinition_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmEventDefinition',
    'rhs_table' => 'pmse_bpm_event_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmEventDefinition',
    'user_field' => 'created_by',
  ),
  'pmse_bpmeventdefinition_favorite' => 
  array (
    'name' => 'pmse_bpmeventdefinition_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmEventDefinition',
    'rhs_table' => 'pmse_bpm_event_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmEventDefinition',
    'user_field' => 'created_by',
  ),
  'pmse_bpmeventdefinition_assigned_user' => 
  array (
    'name' => 'pmse_bpmeventdefinition_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmEventDefinition',
    'rhs_table' => 'pmse_bpm_event_definition',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmgatewaydefinition_modified_user' => 
  array (
    'name' => 'pmse_bpmgatewaydefinition_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGatewayDefinition',
    'rhs_table' => 'pmse_bpm_gateway_definition',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmgatewaydefinition_created_by' => 
  array (
    'name' => 'pmse_bpmgatewaydefinition_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGatewayDefinition',
    'rhs_table' => 'pmse_bpm_gateway_definition',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmgatewaydefinition_activities' => 
  array (
    'name' => 'pmse_bpmgatewaydefinition_activities',
    'lhs_module' => 'pmse_BpmGatewayDefinition',
    'lhs_table' => 'pmse_bpm_gateway_definition',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmGatewayDefinition',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmgatewaydefinition_following' => 
  array (
    'name' => 'pmse_bpmgatewaydefinition_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGatewayDefinition',
    'rhs_table' => 'pmse_bpm_gateway_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmGatewayDefinition',
    'user_field' => 'created_by',
  ),
  'pmse_bpmgatewaydefinition_favorite' => 
  array (
    'name' => 'pmse_bpmgatewaydefinition_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGatewayDefinition',
    'rhs_table' => 'pmse_bpm_gateway_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmGatewayDefinition',
    'user_field' => 'created_by',
  ),
  'pmse_bpmgatewaydefinition_assigned_user' => 
  array (
    'name' => 'pmse_bpmgatewaydefinition_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGatewayDefinition',
    'rhs_table' => 'pmse_bpm_gateway_definition',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmactivitydefinition_modified_user' => 
  array (
    'name' => 'pmse_bpmactivitydefinition_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityDefinition',
    'rhs_table' => 'pmse_bpm_activity_definition',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmactivitydefinition_created_by' => 
  array (
    'name' => 'pmse_bpmactivitydefinition_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityDefinition',
    'rhs_table' => 'pmse_bpm_activity_definition',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmactivitydefinition_activities' => 
  array (
    'name' => 'pmse_bpmactivitydefinition_activities',
    'lhs_module' => 'pmse_BpmActivityDefinition',
    'lhs_table' => 'pmse_bpm_activity_definition',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmActivityDefinition',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmactivitydefinition_following' => 
  array (
    'name' => 'pmse_bpmactivitydefinition_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityDefinition',
    'rhs_table' => 'pmse_bpm_activity_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmActivityDefinition',
    'user_field' => 'created_by',
  ),
  'pmse_bpmactivitydefinition_favorite' => 
  array (
    'name' => 'pmse_bpmactivitydefinition_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityDefinition',
    'rhs_table' => 'pmse_bpm_activity_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmActivityDefinition',
    'user_field' => 'created_by',
  ),
  'pmse_bpmactivitydefinition_assigned_user' => 
  array (
    'name' => 'pmse_bpmactivitydefinition_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityDefinition',
    'rhs_table' => 'pmse_bpm_activity_definition',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmactivitystep_modified_user' => 
  array (
    'name' => 'pmse_bpmactivitystep_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityStep',
    'rhs_table' => 'pmse_bpm_activity_step',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmactivitystep_created_by' => 
  array (
    'name' => 'pmse_bpmactivitystep_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityStep',
    'rhs_table' => 'pmse_bpm_activity_step',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmactivitystep_activities' => 
  array (
    'name' => 'pmse_bpmactivitystep_activities',
    'lhs_module' => 'pmse_BpmActivityStep',
    'lhs_table' => 'pmse_bpm_activity_step',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmActivityStep',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmactivitystep_following' => 
  array (
    'name' => 'pmse_bpmactivitystep_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityStep',
    'rhs_table' => 'pmse_bpm_activity_step',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmActivityStep',
    'user_field' => 'created_by',
  ),
  'pmse_bpmactivitystep_favorite' => 
  array (
    'name' => 'pmse_bpmactivitystep_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityStep',
    'rhs_table' => 'pmse_bpm_activity_step',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmActivityStep',
    'user_field' => 'created_by',
  ),
  'pmse_bpmactivitystep_assigned_user' => 
  array (
    'name' => 'pmse_bpmactivitystep_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmActivityStep',
    'rhs_table' => 'pmse_bpm_activity_step',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmformaction_modified_user' => 
  array (
    'name' => 'pmse_bpmformaction_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmFormAction',
    'rhs_table' => 'pmse_bpm_form_action',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmformaction_created_by' => 
  array (
    'name' => 'pmse_bpmformaction_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmFormAction',
    'rhs_table' => 'pmse_bpm_form_action',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmformaction_activities' => 
  array (
    'name' => 'pmse_bpmformaction_activities',
    'lhs_module' => 'pmse_BpmFormAction',
    'lhs_table' => 'pmse_bpm_form_action',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmFormAction',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmformaction_following' => 
  array (
    'name' => 'pmse_bpmformaction_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmFormAction',
    'rhs_table' => 'pmse_bpm_form_action',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmFormAction',
    'user_field' => 'created_by',
  ),
  'pmse_bpmformaction_favorite' => 
  array (
    'name' => 'pmse_bpmformaction_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmFormAction',
    'rhs_table' => 'pmse_bpm_form_action',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmFormAction',
    'user_field' => 'created_by',
  ),
  'pmse_bpmformaction_assigned_user' => 
  array (
    'name' => 'pmse_bpmformaction_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmFormAction',
    'rhs_table' => 'pmse_bpm_form_action',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmdynaform_modified_user' => 
  array (
    'name' => 'pmse_bpmdynaform_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmDynaForm',
    'rhs_table' => 'pmse_bpm_dynamic_forms',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmdynaform_created_by' => 
  array (
    'name' => 'pmse_bpmdynaform_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmDynaForm',
    'rhs_table' => 'pmse_bpm_dynamic_forms',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmdynaform_activities' => 
  array (
    'name' => 'pmse_bpmdynaform_activities',
    'lhs_module' => 'pmse_BpmDynaForm',
    'lhs_table' => 'pmse_bpm_dynamic_forms',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmDynaForm',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmdynaform_following' => 
  array (
    'name' => 'pmse_bpmdynaform_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmDynaForm',
    'rhs_table' => 'pmse_bpm_dynamic_forms',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmDynaForm',
    'user_field' => 'created_by',
  ),
  'pmse_bpmdynaform_favorite' => 
  array (
    'name' => 'pmse_bpmdynaform_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmDynaForm',
    'rhs_table' => 'pmse_bpm_dynamic_forms',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmDynaForm',
    'user_field' => 'created_by',
  ),
  'pmse_bpmdynaform_assigned_user' => 
  array (
    'name' => 'pmse_bpmdynaform_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmDynaForm',
    'rhs_table' => 'pmse_bpm_dynamic_forms',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmprocessdefinition_modified_user' => 
  array (
    'name' => 'pmse_bpmprocessdefinition_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmprocessdefinition_created_by' => 
  array (
    'name' => 'pmse_bpmprocessdefinition_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmprocessdefinition_activities' => 
  array (
    'name' => 'pmse_bpmprocessdefinition_activities',
    'lhs_module' => 'pmse_BpmProcessDefinition',
    'lhs_table' => 'pmse_bpm_process_definition',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmProcessDefinition',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmprocessdefinition_following' => 
  array (
    'name' => 'pmse_bpmprocessdefinition_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmProcessDefinition',
    'user_field' => 'created_by',
  ),
  'pmse_bpmprocessdefinition_favorite' => 
  array (
    'name' => 'pmse_bpmprocessdefinition_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmProcessDefinition',
    'user_field' => 'created_by',
  ),
  'pmse_bpmprocessdefinition_assigned_user' => 
  array (
    'name' => 'pmse_bpmprocessdefinition_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboards_modified_user' => 
  array (
    'name' => 'dashboards_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Dashboards',
    'rhs_table' => 'dashboards',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboards_created_by' => 
  array (
    'name' => 'dashboards_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Dashboards',
    'rhs_table' => 'dashboards',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dashboard_activities' => 
  array (
    'name' => 'dashboard_activities',
    'lhs_module' => 'Dashboards',
    'lhs_table' => 'dashboards',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Dashboards',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dashboards_team_count_relationship' => 
  array (
    'name' => 'dashboards_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Dashboards',
    'rhs_table' => 'dashboards',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboards_teams' => 
  array (
    'name' => 'dashboards_teams',
    'lhs_module' => 'Dashboards',
    'lhs_table' => 'dashboards',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'dashboards_team' => 
  array (
    'name' => 'dashboards_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Dashboards',
    'rhs_table' => 'dashboards',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboards_following' => 
  array (
    'name' => 'dashboards_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Dashboards',
    'rhs_table' => 'dashboards',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Dashboards',
    'user_field' => 'created_by',
  ),
  'dashboards_favorite' => 
  array (
    'name' => 'dashboards_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Dashboards',
    'rhs_table' => 'dashboards',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Dashboards',
    'user_field' => 'created_by',
  ),
  'dashboards_locked_fields' => 
  array (
    'name' => 'dashboards_locked_fields',
    'lhs_module' => 'Dashboards',
    'lhs_table' => 'dashboards',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Dashboards',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dashboards_assigned_user' => 
  array (
    'name' => 'dashboards_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Dashboards',
    'rhs_table' => 'dashboards',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_modified_user' => 
  array (
    'name' => 'kbdocuments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_created_by' => 
  array (
    'name' => 'kbdocuments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocument_activities' => 
  array (
    'name' => 'kbdocument_activities',
    'lhs_module' => 'KBDocuments',
    'lhs_table' => 'kbdocuments',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBDocuments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'kbdocuments_following' => 
  array (
    'name' => 'kbdocuments_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBDocuments',
    'user_field' => 'created_by',
  ),
  'kbdocuments_favorite' => 
  array (
    'name' => 'kbdocuments_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'KBDocuments',
    'user_field' => 'created_by',
  ),
  'kbdocuments_locked_fields' => 
  array (
    'name' => 'kbdocuments_locked_fields',
    'lhs_module' => 'KBDocuments',
    'lhs_table' => 'kbdocuments',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'KBDocuments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'kbdocuments_team_count_relationship' => 
  array (
    'name' => 'kbdocuments_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_teams' => 
  array (
    'name' => 'kbdocuments_teams',
    'lhs_module' => 'KBDocuments',
    'lhs_table' => 'kbdocuments',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbdocuments_team' => 
  array (
    'name' => 'kbdocuments_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_assigned_user' => 
  array (
    'name' => 'kbdocuments_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmconfig_modified_user' => 
  array (
    'name' => 'pmse_bpmconfig_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmConfig',
    'rhs_table' => 'pmse_bpm_config',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmconfig_created_by' => 
  array (
    'name' => 'pmse_bpmconfig_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmConfig',
    'rhs_table' => 'pmse_bpm_config',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmconfig_activities' => 
  array (
    'name' => 'pmse_bpmconfig_activities',
    'lhs_module' => 'pmse_BpmConfig',
    'lhs_table' => 'pmse_bpm_config',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmConfig',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmconfig_following' => 
  array (
    'name' => 'pmse_bpmconfig_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmConfig',
    'rhs_table' => 'pmse_bpm_config',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmConfig',
    'user_field' => 'created_by',
  ),
  'pmse_bpmconfig_favorite' => 
  array (
    'name' => 'pmse_bpmconfig_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmConfig',
    'rhs_table' => 'pmse_bpm_config',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmConfig',
    'user_field' => 'created_by',
  ),
  'pmse_bpmconfig_assigned_user' => 
  array (
    'name' => 'pmse_bpmconfig_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmConfig',
    'rhs_table' => 'pmse_bpm_config',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmgroup_modified_user' => 
  array (
    'name' => 'pmse_bpmgroup_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGroup',
    'rhs_table' => 'pmse_bpm_group',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmgroup_created_by' => 
  array (
    'name' => 'pmse_bpmgroup_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGroup',
    'rhs_table' => 'pmse_bpm_group',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmgroup_activities' => 
  array (
    'name' => 'pmse_bpmgroup_activities',
    'lhs_module' => 'pmse_BpmGroup',
    'lhs_table' => 'pmse_bpm_group',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmGroup',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmgroup_following' => 
  array (
    'name' => 'pmse_bpmgroup_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGroup',
    'rhs_table' => 'pmse_bpm_group',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmGroup',
    'user_field' => 'created_by',
  ),
  'pmse_bpmgroup_favorite' => 
  array (
    'name' => 'pmse_bpmgroup_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGroup',
    'rhs_table' => 'pmse_bpm_group',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmGroup',
    'user_field' => 'created_by',
  ),
  'pmse_bpmgroup_assigned_user' => 
  array (
    'name' => 'pmse_bpmgroup_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGroup',
    'rhs_table' => 'pmse_bpm_group',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmgroupuser_modified_user' => 
  array (
    'name' => 'pmse_bpmgroupuser_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGroupUser',
    'rhs_table' => 'pmse_bpm_group_user',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmgroupuser_created_by' => 
  array (
    'name' => 'pmse_bpmgroupuser_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGroupUser',
    'rhs_table' => 'pmse_bpm_group_user',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pmse_bpmgroupuser_activities' => 
  array (
    'name' => 'pmse_bpmgroupuser_activities',
    'lhs_module' => 'pmse_BpmGroupUser',
    'lhs_table' => 'pmse_bpm_group_user',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmGroupUser',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pmse_bpmgroupuser_following' => 
  array (
    'name' => 'pmse_bpmgroupuser_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGroupUser',
    'rhs_table' => 'pmse_bpm_group_user',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'pmse_BpmGroupUser',
    'user_field' => 'created_by',
  ),
  'pmse_bpmgroupuser_favorite' => 
  array (
    'name' => 'pmse_bpmgroupuser_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGroupUser',
    'rhs_table' => 'pmse_bpm_group_user',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'pmse_BpmGroupUser',
    'user_field' => 'created_by',
  ),
  'pmse_bpmgroupuser_assigned_user' => 
  array (
    'name' => 'pmse_bpmgroupuser_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmGroupUser',
    'rhs_table' => 'pmse_bpm_group_user',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reportschedules_modified_user' => 
  array (
    'name' => 'reportschedules_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportSchedules',
    'rhs_table' => 'report_schedules',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reportschedules_created_by' => 
  array (
    'name' => 'reportschedules_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportSchedules',
    'rhs_table' => 'report_schedules',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'reportschedule_activities' => 
  array (
    'name' => 'reportschedule_activities',
    'lhs_module' => 'ReportSchedules',
    'lhs_table' => 'report_schedules',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ReportSchedules',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'report_reportschedules' => 
  array (
    'name' => 'report_reportschedules',
    'lhs_module' => 'Reports',
    'lhs_table' => 'saved_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportSchedules',
    'rhs_table' => 'report_schedules',
    'rhs_key' => 'report_id',
    'relationship_type' => 'one-to-many',
  ),
  'reportschedules_following' => 
  array (
    'name' => 'reportschedules_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportSchedules',
    'rhs_table' => 'report_schedules',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ReportSchedules',
    'user_field' => 'created_by',
  ),
  'reportschedules_favorite' => 
  array (
    'name' => 'reportschedules_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportSchedules',
    'rhs_table' => 'report_schedules',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ReportSchedules',
    'user_field' => 'created_by',
  ),
  'reportschedules_locked_fields' => 
  array (
    'name' => 'reportschedules_locked_fields',
    'lhs_module' => 'ReportSchedules',
    'lhs_table' => 'report_schedules',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ReportSchedules',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'reportschedules_assigned_user' => 
  array (
    'name' => 'reportschedules_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportSchedules',
    'rhs_table' => 'report_schedules',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reportschedules_team_count_relationship' => 
  array (
    'name' => 'reportschedules_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportSchedules',
    'rhs_table' => 'report_schedules',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'reportschedules_teams' => 
  array (
    'name' => 'reportschedules_teams',
    'lhs_module' => 'ReportSchedules',
    'lhs_table' => 'report_schedules',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'reportschedules_team' => 
  array (
    'name' => 'reportschedules_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ReportSchedules',
    'rhs_table' => 'report_schedules',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'notifications_modified_user' => 
  array (
    'name' => 'notifications_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notifications_created_by' => 
  array (
    'name' => 'notifications_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'notifications_activities' => 
  array (
    'name' => 'notifications_activities',
    'lhs_module' => 'Notifications',
    'lhs_table' => 'notifications',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Notifications',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'notifications_following' => 
  array (
    'name' => 'notifications_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Notifications',
    'user_field' => 'created_by',
  ),
  'notifications_favorite' => 
  array (
    'name' => 'notifications_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Notifications',
    'user_field' => 'created_by',
  ),
  'notifications_locked_fields' => 
  array (
    'name' => 'notifications_locked_fields',
    'lhs_module' => 'Notifications',
    'lhs_table' => 'notifications',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Notifications',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'notifications_assigned_user' => 
  array (
    'name' => 'notifications_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_modified_user' => 
  array (
    'name' => 'eapm_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_created_by' => 
  array (
    'name' => 'eapm_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_activities' => 
  array (
    'name' => 'eapm_activities',
    'lhs_module' => 'EAPM',
    'lhs_table' => 'eapm',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'EAPM',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'eapm_following' => 
  array (
    'name' => 'eapm_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'EAPM',
    'user_field' => 'created_by',
  ),
  'eapm_favorite' => 
  array (
    'name' => 'eapm_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'EAPM',
    'user_field' => 'created_by',
  ),
  'eapm_locked_fields' => 
  array (
    'name' => 'eapm_locked_fields',
    'lhs_module' => 'EAPM',
    'lhs_table' => 'eapm',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'EAPM',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'eapm_assigned_user' => 
  array (
    'name' => 'eapm_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_modified_user' => 
  array (
    'name' => 'oauthkeys_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_created_by' => 
  array (
    'name' => 'oauthkeys_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkey_activities' => 
  array (
    'name' => 'oauthkey_activities',
    'lhs_module' => 'OAuthKeys',
    'lhs_table' => 'oauth_consumer',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'OAuthKeys',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'oauthkeys_following' => 
  array (
    'name' => 'oauthkeys_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'OAuthKeys',
    'user_field' => 'created_by',
  ),
  'oauthkeys_favorite' => 
  array (
    'name' => 'oauthkeys_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'OAuthKeys',
    'user_field' => 'created_by',
  ),
  'oauthkeys_locked_fields' => 
  array (
    'name' => 'oauthkeys_locked_fields',
    'lhs_module' => 'OAuthKeys',
    'lhs_table' => 'oauth_consumer',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'OAuthKeys',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'oauthkeys_assigned_user' => 
  array (
    'name' => 'oauthkeys_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'consumer_tokens' => 
  array (
    'name' => 'consumer_tokens',
    'lhs_module' => 'OAuthKeys',
    'lhs_table' => 'oauth_consumer',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'consumer',
    'relationship_type' => 'one-to-many',
  ),
  'oauthtokens_assigned_user' => 
  array (
    'name' => 'oauthtokens_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_oauthtokens' => 
  array (
    'name' => 'contacts_oauthtokens',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfavorites_modified_user' => 
  array (
    'name' => 'sugarfavorites_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfavorites_created_by' => 
  array (
    'name' => 'sugarfavorites_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfavorites_activities' => 
  array (
    'name' => 'sugarfavorites_activities',
    'lhs_module' => 'SugarFavorites',
    'lhs_table' => 'sugarfavorites',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'SugarFavorites',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'sugarfavorites_following' => 
  array (
    'name' => 'sugarfavorites_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'SugarFavorites',
    'user_field' => 'created_by',
  ),
  'sugarfavorites_favorite' => 
  array (
    'name' => 'sugarfavorites_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'SugarFavorites',
    'user_field' => 'created_by',
  ),
  'sugarfavorites_locked_fields' => 
  array (
    'name' => 'sugarfavorites_locked_fields',
    'lhs_module' => 'SugarFavorites',
    'lhs_table' => 'sugarfavorites',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'SugarFavorites',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'sugarfavorites_assigned_user' => 
  array (
    'name' => 'sugarfavorites_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'weblogichooks_modified_user' => 
  array (
    'name' => 'weblogichooks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WebLogicHooks',
    'rhs_table' => 'weblogichooks',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'weblogichooks_created_by' => 
  array (
    'name' => 'weblogichooks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WebLogicHooks',
    'rhs_table' => 'weblogichooks',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'weblogichook_activities' => 
  array (
    'name' => 'weblogichook_activities',
    'lhs_module' => 'WebLogicHooks',
    'lhs_table' => 'weblogichooks',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'WebLogicHooks',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'weblogichooks_following' => 
  array (
    'name' => 'weblogichooks_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WebLogicHooks',
    'rhs_table' => 'weblogichooks',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'WebLogicHooks',
    'user_field' => 'created_by',
  ),
  'weblogichooks_favorite' => 
  array (
    'name' => 'weblogichooks_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WebLogicHooks',
    'rhs_table' => 'weblogichooks',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'WebLogicHooks',
    'user_field' => 'created_by',
  ),
  'weblogichooks_locked_fields' => 
  array (
    'name' => 'weblogichooks_locked_fields',
    'lhs_module' => 'WebLogicHooks',
    'lhs_table' => 'weblogichooks',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'WebLogicHooks',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'activities_modified_user' => 
  array (
    'name' => 'activities_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'activities_created_by' => 
  array (
    'name' => 'activities_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'activity_activities' => 
  array (
    'name' => 'activity_activities',
    'lhs_module' => 'Activities',
    'lhs_table' => 'activities',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Activities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'comments' => 
  array (
    'name' => 'comments',
    'lhs_module' => 'Activities',
    'lhs_table' => 'activities',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'activities_following' => 
  array (
    'name' => 'activities_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Activities',
    'user_field' => 'created_by',
  ),
  'activities_favorite' => 
  array (
    'name' => 'activities_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Activities',
    'user_field' => 'created_by',
  ),
  'activities_locked_fields' => 
  array (
    'name' => 'activities_locked_fields',
    'lhs_module' => 'Activities',
    'lhs_table' => 'activities',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Activities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'comments_modified_user' => 
  array (
    'name' => 'comments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'comments_created_by' => 
  array (
    'name' => 'comments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'comment_activities' => 
  array (
    'name' => 'comment_activities',
    'lhs_module' => 'Comments',
    'lhs_table' => 'comments',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Comments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'comments_following' => 
  array (
    'name' => 'comments_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Comments',
    'user_field' => 'created_by',
  ),
  'comments_favorite' => 
  array (
    'name' => 'comments_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Comments',
    'user_field' => 'created_by',
  ),
  'comments_locked_fields' => 
  array (
    'name' => 'comments_locked_fields',
    'lhs_module' => 'Comments',
    'lhs_table' => 'comments',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Comments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'subscriptions_modified_user' => 
  array (
    'name' => 'subscriptions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Subscriptions',
    'rhs_table' => 'subscriptions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'subscriptions_created_by' => 
  array (
    'name' => 'subscriptions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Subscriptions',
    'rhs_table' => 'subscriptions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'subscription_activities' => 
  array (
    'name' => 'subscription_activities',
    'lhs_module' => 'Subscriptions',
    'lhs_table' => 'subscriptions',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Subscriptions',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'subscriptions_following' => 
  array (
    'name' => 'subscriptions_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Subscriptions',
    'rhs_table' => 'subscriptions',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Subscriptions',
    'user_field' => 'created_by',
  ),
  'subscriptions_favorite' => 
  array (
    'name' => 'subscriptions_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Subscriptions',
    'rhs_table' => 'subscriptions',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Subscriptions',
    'user_field' => 'created_by',
  ),
  'subscriptions_locked_fields' => 
  array (
    'name' => 'subscriptions_locked_fields',
    'lhs_module' => 'Subscriptions',
    'lhs_table' => 'subscriptions',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Subscriptions',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'filters_modified_user' => 
  array (
    'name' => 'filters_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'filters_created_by' => 
  array (
    'name' => 'filters_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'filters_activities' => 
  array (
    'name' => 'filters_activities',
    'lhs_module' => 'Filters',
    'lhs_table' => 'filters',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Filters',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'filters_following' => 
  array (
    'name' => 'filters_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Filters',
    'user_field' => 'created_by',
  ),
  'filters_favorite' => 
  array (
    'name' => 'filters_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Filters',
    'user_field' => 'created_by',
  ),
  'filters_locked_fields' => 
  array (
    'name' => 'filters_locked_fields',
    'lhs_module' => 'Filters',
    'lhs_table' => 'filters',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Filters',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'filters_team_count_relationship' => 
  array (
    'name' => 'filters_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'filters_teams' => 
  array (
    'name' => 'filters_teams',
    'lhs_module' => 'Filters',
    'lhs_table' => 'filters',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'filters_team' => 
  array (
    'name' => 'filters_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'filters_assigned_user' => 
  array (
    'name' => 'filters_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'categories_modified_user' => 
  array (
    'name' => 'categories_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Categories',
    'rhs_table' => 'categories',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'categories_created_by' => 
  array (
    'name' => 'categories_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Categories',
    'rhs_table' => 'categories',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'category_activities' => 
  array (
    'name' => 'category_activities',
    'lhs_module' => 'Categories',
    'lhs_table' => 'categories',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Categories',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'categories_following' => 
  array (
    'name' => 'categories_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Categories',
    'rhs_table' => 'categories',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Categories',
    'user_field' => 'created_by',
  ),
  'categories_favorite' => 
  array (
    'name' => 'categories_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Categories',
    'rhs_table' => 'categories',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Categories',
    'user_field' => 'created_by',
  ),
  'categories_locked_fields' => 
  array (
    'name' => 'categories_locked_fields',
    'lhs_module' => 'Categories',
    'lhs_table' => 'categories',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Categories',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pdfmanager_modified_user' => 
  array (
    'name' => 'pdfmanager_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pdfmanager_created_by' => 
  array (
    'name' => 'pdfmanager_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pdfmanager_activities' => 
  array (
    'name' => 'pdfmanager_activities',
    'lhs_module' => 'PdfManager',
    'lhs_table' => 'pdfmanager',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'PdfManager',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pdfmanager_following' => 
  array (
    'name' => 'pdfmanager_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'PdfManager',
    'user_field' => 'created_by',
  ),
  'pdfmanager_favorite' => 
  array (
    'name' => 'pdfmanager_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'PdfManager',
    'user_field' => 'created_by',
  ),
  'pdfmanager_locked_fields' => 
  array (
    'name' => 'pdfmanager_locked_fields',
    'lhs_module' => 'PdfManager',
    'lhs_table' => 'pdfmanager',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'PdfManager',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pdfmanager_team_count_relationship' => 
  array (
    'name' => 'pdfmanager_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'pdfmanager_teams' => 
  array (
    'name' => 'pdfmanager_teams',
    'lhs_module' => 'PdfManager',
    'lhs_table' => 'pdfmanager',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'pdfmanager_team' => 
  array (
    'name' => 'pdfmanager_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'pdfmanager_assigned_user' => 
  array (
    'name' => 'pdfmanager_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbarticles_modified_user' => 
  array (
    'name' => 'kbarticles_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBArticles',
    'rhs_table' => 'kbarticles',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbarticles_created_by' => 
  array (
    'name' => 'kbarticles_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBArticles',
    'rhs_table' => 'kbarticles',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kbarticle_activities' => 
  array (
    'name' => 'kbarticle_activities',
    'lhs_module' => 'KBArticles',
    'lhs_table' => 'kbarticles',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBArticles',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'kbdocuments_kbarticles' => 
  array (
    'name' => 'kbdocuments_kbarticles',
    'lhs_module' => 'KBDocuments',
    'lhs_table' => 'kbdocuments',
    'lhs_key' => 'id',
    'rhs_module' => 'KBArticles',
    'rhs_table' => 'kbarticles',
    'rhs_key' => 'kbdocument_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbarticles_following' => 
  array (
    'name' => 'kbarticles_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBArticles',
    'rhs_table' => 'kbarticles',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBArticles',
    'user_field' => 'created_by',
  ),
  'kbarticles_favorite' => 
  array (
    'name' => 'kbarticles_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBArticles',
    'rhs_table' => 'kbarticles',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'KBArticles',
    'user_field' => 'created_by',
  ),
  'kbarticles_locked_fields' => 
  array (
    'name' => 'kbarticles_locked_fields',
    'lhs_module' => 'KBArticles',
    'lhs_table' => 'kbarticles',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'KBArticles',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'kbarticles_team_count_relationship' => 
  array (
    'name' => 'kbarticles_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBArticles',
    'rhs_table' => 'kbarticles',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbarticles_teams' => 
  array (
    'name' => 'kbarticles_teams',
    'lhs_module' => 'KBArticles',
    'lhs_table' => 'kbarticles',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbarticles_team' => 
  array (
    'name' => 'kbarticles_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBArticles',
    'rhs_table' => 'kbarticles',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbarticles_assigned_user' => 
  array (
    'name' => 'kbarticles_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBArticles',
    'rhs_table' => 'kbarticles',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontenttemplates_modified_user' => 
  array (
    'name' => 'kbcontenttemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContentTemplates',
    'rhs_table' => 'kbcontent_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontenttemplates_created_by' => 
  array (
    'name' => 'kbcontenttemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContentTemplates',
    'rhs_table' => 'kbcontent_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontenttemplate_activities' => 
  array (
    'name' => 'kbcontenttemplate_activities',
    'lhs_module' => 'KBContentTemplates',
    'lhs_table' => 'kbcontent_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBContentTemplates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'kbcontenttemplates_following' => 
  array (
    'name' => 'kbcontenttemplates_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContentTemplates',
    'rhs_table' => 'kbcontent_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'KBContentTemplates',
    'user_field' => 'created_by',
  ),
  'kbcontenttemplates_favorite' => 
  array (
    'name' => 'kbcontenttemplates_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContentTemplates',
    'rhs_table' => 'kbcontent_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'KBContentTemplates',
    'user_field' => 'created_by',
  ),
  'kbcontenttemplates_locked_fields' => 
  array (
    'name' => 'kbcontenttemplates_locked_fields',
    'lhs_module' => 'KBContentTemplates',
    'lhs_table' => 'kbcontent_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'KBContentTemplates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'kbcontenttemplates_team_count_relationship' => 
  array (
    'name' => 'kbcontenttemplates_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContentTemplates',
    'rhs_table' => 'kbcontent_templates',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontenttemplates_teams' => 
  array (
    'name' => 'kbcontenttemplates_teams',
    'lhs_module' => 'KBContentTemplates',
    'lhs_table' => 'kbcontent_templates',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbcontenttemplates_team' => 
  array (
    'name' => 'kbcontenttemplates_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContentTemplates',
    'rhs_table' => 'kbcontent_templates',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'embeddedfiles_modified_user' => 
  array (
    'name' => 'embeddedfiles_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmbeddedFiles',
    'rhs_table' => 'embedded_files',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'embeddedfiles_created_by' => 
  array (
    'name' => 'embeddedfiles_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmbeddedFiles',
    'rhs_table' => 'embedded_files',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'embeddedfile_activities' => 
  array (
    'name' => 'embeddedfile_activities',
    'lhs_module' => 'EmbeddedFiles',
    'lhs_table' => 'embedded_files',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'EmbeddedFiles',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'embeddedfiles_following' => 
  array (
    'name' => 'embeddedfiles_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmbeddedFiles',
    'rhs_table' => 'embedded_files',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'EmbeddedFiles',
    'user_field' => 'created_by',
  ),
  'embeddedfiles_favorite' => 
  array (
    'name' => 'embeddedfiles_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmbeddedFiles',
    'rhs_table' => 'embedded_files',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'EmbeddedFiles',
    'user_field' => 'created_by',
  ),
  'embeddedfiles_locked_fields' => 
  array (
    'name' => 'embeddedfiles_locked_fields',
    'lhs_module' => 'EmbeddedFiles',
    'lhs_table' => 'embedded_files',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'EmbeddedFiles',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'jckl_filterdeployments_modified_user' => 
  array (
    'name' => 'jckl_filterdeployments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterDeployments',
    'rhs_table' => 'jckl_filterdeployments',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jckl_filterdeployments_created_by' => 
  array (
    'name' => 'jckl_filterdeployments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterDeployments',
    'rhs_table' => 'jckl_filterdeployments',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jckl_filterdeployments_activities' => 
  array (
    'name' => 'jckl_filterdeployments_activities',
    'lhs_module' => 'jckl_FilterDeployments',
    'lhs_table' => 'jckl_filterdeployments',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'jckl_FilterDeployments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'jckl_filterdeployments_following' => 
  array (
    'name' => 'jckl_filterdeployments_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterDeployments',
    'rhs_table' => 'jckl_filterdeployments',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'jckl_FilterDeployments',
    'user_field' => 'created_by',
  ),
  'jckl_filterdeployments_favorite' => 
  array (
    'name' => 'jckl_filterdeployments_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterDeployments',
    'rhs_table' => 'jckl_filterdeployments',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'jckl_FilterDeployments',
    'user_field' => 'created_by',
  ),
  'jckl_filterdeployments_tags' => 
  array (
    'name' => 'jckl_filterdeployments_tags',
    'lhs_module' => 'jckl_FilterDeployments',
    'lhs_table' => 'jckl_filterdeployments',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'jckl_FilterDeployments',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'jckl_filterdeployments_locked_fields' => 
  array (
    'name' => 'jckl_filterdeployments_locked_fields',
    'lhs_module' => 'jckl_FilterDeployments',
    'lhs_table' => 'jckl_filterdeployments',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'jckl_FilterDeployments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'jckl_filterdeployments_assigned_user' => 
  array (
    'name' => 'jckl_filterdeployments_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterDeployments',
    'rhs_table' => 'jckl_filterdeployments',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jckl_filterselections_modified_user' => 
  array (
    'name' => 'jckl_filterselections_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterSelections',
    'rhs_table' => 'jckl_filterselections',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jckl_filterselections_created_by' => 
  array (
    'name' => 'jckl_filterselections_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterSelections',
    'rhs_table' => 'jckl_filterselections',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jckl_filterselections_activities' => 
  array (
    'name' => 'jckl_filterselections_activities',
    'lhs_module' => 'jckl_FilterSelections',
    'lhs_table' => 'jckl_filterselections',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'jckl_FilterSelections',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'jckl_filterselections_following' => 
  array (
    'name' => 'jckl_filterselections_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterSelections',
    'rhs_table' => 'jckl_filterselections',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'jckl_FilterSelections',
    'user_field' => 'created_by',
  ),
  'jckl_filterselections_favorite' => 
  array (
    'name' => 'jckl_filterselections_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterSelections',
    'rhs_table' => 'jckl_filterselections',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'jckl_FilterSelections',
    'user_field' => 'created_by',
  ),
  'jckl_filterselections_tags' => 
  array (
    'name' => 'jckl_filterselections_tags',
    'lhs_module' => 'jckl_FilterSelections',
    'lhs_table' => 'jckl_filterselections',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'jckl_FilterSelections',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'jckl_filterselections_locked_fields' => 
  array (
    'name' => 'jckl_filterselections_locked_fields',
    'lhs_module' => 'jckl_FilterSelections',
    'lhs_table' => 'jckl_filterselections',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'jckl_FilterSelections',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'jckl_filterselections_assigned_user' => 
  array (
    'name' => 'jckl_filterselections_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jckl_FilterSelections',
    'rhs_table' => 'jckl_filterselections',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_subworkflows_modified_user' => 
  array (
    'name' => 'dri_subworkflows_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflows',
    'rhs_table' => 'dri_subworkflows',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_subworkflows_created_by' => 
  array (
    'name' => 'dri_subworkflows_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflows',
    'rhs_table' => 'dri_subworkflows',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dri_subworkflow_activities' => 
  array (
    'name' => 'dri_subworkflow_activities',
    'lhs_module' => 'DRI_SubWorkflows',
    'lhs_table' => 'dri_subworkflows',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DRI_SubWorkflows',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_subworkflows_following' => 
  array (
    'name' => 'dri_subworkflows_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflows',
    'rhs_table' => 'dri_subworkflows',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DRI_SubWorkflows',
    'user_field' => 'created_by',
  ),
  'dri_subworkflows_favorite' => 
  array (
    'name' => 'dri_subworkflows_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflows',
    'rhs_table' => 'dri_subworkflows',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'DRI_SubWorkflows',
    'user_field' => 'created_by',
  ),
  'dri_subworkflows_tags' => 
  array (
    'name' => 'dri_subworkflows_tags',
    'lhs_module' => 'DRI_SubWorkflows',
    'lhs_table' => 'dri_subworkflows',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DRI_SubWorkflows',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_subworkflows_locked_fields' => 
  array (
    'name' => 'dri_subworkflows_locked_fields',
    'lhs_module' => 'DRI_SubWorkflows',
    'lhs_table' => 'dri_subworkflows',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DRI_SubWorkflows',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_subworkflows_team_count_relationship' => 
  array (
    'name' => 'dri_subworkflows_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflows',
    'rhs_table' => 'dri_subworkflows',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_subworkflows_teams' => 
  array (
    'name' => 'dri_subworkflows_teams',
    'lhs_module' => 'DRI_SubWorkflows',
    'lhs_table' => 'dri_subworkflows',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'dri_subworkflows_team' => 
  array (
    'name' => 'dri_subworkflows_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflows',
    'rhs_table' => 'dri_subworkflows',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_subworkflows_assigned_user' => 
  array (
    'name' => 'dri_subworkflows_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflows',
    'rhs_table' => 'dri_subworkflows',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_subworkflow_dri_subworkflow_templates' => 
  array (
    'name' => 'dri_subworkflow_dri_subworkflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_SubWorkflow_Templates',
    'lhs_table' => 'dri_subworkflow_templates',
    'rhs_module' => 'DRI_SubWorkflows',
    'rhs_table' => 'dri_subworkflows',
    'rhs_key' => 'dri_subworkflow_template_id',
  ),
  'dri_subworkflow_dri_workflows' => 
  array (
    'name' => 'dri_subworkflow_dri_workflows',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflows',
    'lhs_table' => 'dri_workflows',
    'rhs_module' => 'DRI_SubWorkflows',
    'rhs_table' => 'dri_subworkflows',
    'rhs_key' => 'dri_workflow_id',
  ),
  'dri_workflow_templates_modified_user' => 
  array (
    'name' => 'dri_workflow_templates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Templates',
    'rhs_table' => 'dri_workflow_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflow_templates_created_by' => 
  array (
    'name' => 'dri_workflow_templates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Templates',
    'rhs_table' => 'dri_workflow_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflow_template_activities' => 
  array (
    'name' => 'dri_workflow_template_activities',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DRI_Workflow_Templates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflow_templates_following' => 
  array (
    'name' => 'dri_workflow_templates_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Templates',
    'rhs_table' => 'dri_workflow_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DRI_Workflow_Templates',
    'user_field' => 'created_by',
  ),
  'dri_workflow_templates_favorite' => 
  array (
    'name' => 'dri_workflow_templates_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Templates',
    'rhs_table' => 'dri_workflow_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'DRI_Workflow_Templates',
    'user_field' => 'created_by',
  ),
  'dri_workflow_templates_tags' => 
  array (
    'name' => 'dri_workflow_templates_tags',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DRI_Workflow_Templates',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflow_templates_locked_fields' => 
  array (
    'name' => 'dri_workflow_templates_locked_fields',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DRI_Workflow_Templates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflow_templates_team_count_relationship' => 
  array (
    'name' => 'dri_workflow_templates_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Templates',
    'rhs_table' => 'dri_workflow_templates',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflow_templates_teams' => 
  array (
    'name' => 'dri_workflow_templates_teams',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflow_templates_team' => 
  array (
    'name' => 'dri_workflow_templates_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Templates',
    'rhs_table' => 'dri_workflow_templates',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflow_template_copied_template_dri_workflow_templates' => 
  array (
    'name' => 'dri_workflow_template_copied_template_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'DRI_Workflow_Templates',
    'rhs_table' => 'dri_workflow_templates',
    'rhs_key' => 'copied_template_id',
  ),
  'dri_subworkflow_templates_modified_user' => 
  array (
    'name' => 'dri_subworkflow_templates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflow_Templates',
    'rhs_table' => 'dri_subworkflow_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_subworkflow_templates_created_by' => 
  array (
    'name' => 'dri_subworkflow_templates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflow_Templates',
    'rhs_table' => 'dri_subworkflow_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dri_subworkflow_template_activities' => 
  array (
    'name' => 'dri_subworkflow_template_activities',
    'lhs_module' => 'DRI_SubWorkflow_Templates',
    'lhs_table' => 'dri_subworkflow_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DRI_SubWorkflow_Templates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_subworkflow_templates_following' => 
  array (
    'name' => 'dri_subworkflow_templates_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflow_Templates',
    'rhs_table' => 'dri_subworkflow_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DRI_SubWorkflow_Templates',
    'user_field' => 'created_by',
  ),
  'dri_subworkflow_templates_favorite' => 
  array (
    'name' => 'dri_subworkflow_templates_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflow_Templates',
    'rhs_table' => 'dri_subworkflow_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'DRI_SubWorkflow_Templates',
    'user_field' => 'created_by',
  ),
  'dri_subworkflow_templates_tags' => 
  array (
    'name' => 'dri_subworkflow_templates_tags',
    'lhs_module' => 'DRI_SubWorkflow_Templates',
    'lhs_table' => 'dri_subworkflow_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DRI_SubWorkflow_Templates',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_subworkflow_templates_locked_fields' => 
  array (
    'name' => 'dri_subworkflow_templates_locked_fields',
    'lhs_module' => 'DRI_SubWorkflow_Templates',
    'lhs_table' => 'dri_subworkflow_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DRI_SubWorkflow_Templates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_subworkflow_templates_team_count_relationship' => 
  array (
    'name' => 'dri_subworkflow_templates_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflow_Templates',
    'rhs_table' => 'dri_subworkflow_templates',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_subworkflow_templates_teams' => 
  array (
    'name' => 'dri_subworkflow_templates_teams',
    'lhs_module' => 'DRI_SubWorkflow_Templates',
    'lhs_table' => 'dri_subworkflow_templates',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'dri_subworkflow_templates_team' => 
  array (
    'name' => 'dri_subworkflow_templates_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_SubWorkflow_Templates',
    'rhs_table' => 'dri_subworkflow_templates',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_subworkflow_template_dri_workflow_templates' => 
  array (
    'name' => 'dri_subworkflow_template_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'DRI_SubWorkflow_Templates',
    'rhs_table' => 'dri_subworkflow_templates',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'dri_workflow_task_templates_modified_user' => 
  array (
    'name' => 'dri_workflow_task_templates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Task_Templates',
    'rhs_table' => 'dri_workflow_task_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflow_task_templates_created_by' => 
  array (
    'name' => 'dri_workflow_task_templates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Task_Templates',
    'rhs_table' => 'dri_workflow_task_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflow_task_template_activities' => 
  array (
    'name' => 'dri_workflow_task_template_activities',
    'lhs_module' => 'DRI_Workflow_Task_Templates',
    'lhs_table' => 'dri_workflow_task_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DRI_Workflow_Task_Templates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflow_task_templates_following' => 
  array (
    'name' => 'dri_workflow_task_templates_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Task_Templates',
    'rhs_table' => 'dri_workflow_task_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'DRI_Workflow_Task_Templates',
    'user_field' => 'created_by',
  ),
  'dri_workflow_task_templates_favorite' => 
  array (
    'name' => 'dri_workflow_task_templates_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Task_Templates',
    'rhs_table' => 'dri_workflow_task_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'DRI_Workflow_Task_Templates',
    'user_field' => 'created_by',
  ),
  'dri_workflow_task_templates_tags' => 
  array (
    'name' => 'dri_workflow_task_templates_tags',
    'lhs_module' => 'DRI_Workflow_Task_Templates',
    'lhs_table' => 'dri_workflow_task_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DRI_Workflow_Task_Templates',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflow_task_templates_locked_fields' => 
  array (
    'name' => 'dri_workflow_task_templates_locked_fields',
    'lhs_module' => 'DRI_Workflow_Task_Templates',
    'lhs_table' => 'dri_workflow_task_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'DRI_Workflow_Task_Templates',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflow_task_templates_team_count_relationship' => 
  array (
    'name' => 'dri_workflow_task_templates_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Task_Templates',
    'rhs_table' => 'dri_workflow_task_templates',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflow_task_templates_teams' => 
  array (
    'name' => 'dri_workflow_task_templates_teams',
    'lhs_module' => 'DRI_Workflow_Task_Templates',
    'lhs_table' => 'dri_workflow_task_templates',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'dri_workflow_task_templates_team' => 
  array (
    'name' => 'dri_workflow_task_templates_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'DRI_Workflow_Task_Templates',
    'rhs_table' => 'dri_workflow_task_templates',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'dri_workflow_task_template_dri_subworkflow_templates' => 
  array (
    'name' => 'dri_workflow_task_template_dri_subworkflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_SubWorkflow_Templates',
    'lhs_table' => 'dri_subworkflow_templates',
    'rhs_module' => 'DRI_Workflow_Task_Templates',
    'rhs_table' => 'dri_workflow_task_templates',
    'rhs_key' => 'dri_subworkflow_template_id',
  ),
  'dri_workflow_task_template_dri_workflow_templates' => 
  array (
    'name' => 'dri_workflow_task_template_dri_workflow_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Templates',
    'lhs_table' => 'dri_workflow_templates',
    'rhs_module' => 'DRI_Workflow_Task_Templates',
    'rhs_table' => 'dri_workflow_task_templates',
    'rhs_key' => 'dri_workflow_template_id',
  ),
  'dri_workflow_task_template_blocked_by_dri_workflow_task_templates' => 
  array (
    'name' => 'dri_workflow_task_template_blocked_by_dri_workflow_task_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Task_Templates',
    'lhs_table' => 'dri_workflow_task_templates',
    'rhs_module' => 'DRI_Workflow_Task_Templates',
    'rhs_table' => 'dri_workflow_task_templates',
    'rhs_key' => 'blocked_by_id',
  ),
  'dri_workflow_task_template_parent_dri_workflow_task_templates' => 
  array (
    'name' => 'dri_workflow_task_template_parent_dri_workflow_task_templates',
    'relationship_type' => 'one-to-many',
    'lhs_key' => 'id',
    'lhs_module' => 'DRI_Workflow_Task_Templates',
    'lhs_table' => 'dri_workflow_task_templates',
    'rhs_module' => 'DRI_Workflow_Task_Templates',
    'rhs_table' => 'dri_workflow_task_templates',
    'rhs_key' => 'parent_id',
  ),
  'rt_docusign_modified_user' => 
  array (
    'name' => 'rt_docusign_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RT_DocuSign',
    'rhs_table' => 'rt_docusign',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'rt_docusign_created_by' => 
  array (
    'name' => 'rt_docusign_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RT_DocuSign',
    'rhs_table' => 'rt_docusign',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'rt_docusign_activities' => 
  array (
    'name' => 'rt_docusign_activities',
    'lhs_module' => 'RT_DocuSign',
    'lhs_table' => 'rt_docusign',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'RT_DocuSign',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'rt_docusign_following' => 
  array (
    'name' => 'rt_docusign_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RT_DocuSign',
    'rhs_table' => 'rt_docusign',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'RT_DocuSign',
    'user_field' => 'created_by',
  ),
  'rt_docusign_favorite' => 
  array (
    'name' => 'rt_docusign_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RT_DocuSign',
    'rhs_table' => 'rt_docusign',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'RT_DocuSign',
    'user_field' => 'created_by',
  ),
  'rt_docusign_tags' => 
  array (
    'name' => 'rt_docusign_tags',
    'lhs_module' => 'RT_DocuSign',
    'lhs_table' => 'rt_docusign',
    'lhs_key' => 'id',
    'rhs_module' => 'Tags',
    'rhs_table' => 'tags',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tag_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'tag_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'RT_DocuSign',
    'dynamic_subpanel' => true,
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'tag_id' => 
      array (
        'name' => 'tag_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'rt_docusign_locked_fields' => 
  array (
    'name' => 'rt_docusign_locked_fields',
    'lhs_module' => 'RT_DocuSign',
    'lhs_table' => 'rt_docusign',
    'lhs_key' => 'id',
    'rhs_module' => 'pmse_BpmProcessDefinition',
    'rhs_table' => 'pmse_bpm_process_definition',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'locked_field_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'pd_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'RT_DocuSign',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'pd_id' => 
      array (
        'name' => 'pd_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_id' => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      'bean_module' => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'rt_docusign_team_count_relationship' => 
  array (
    'name' => 'rt_docusign_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'RT_DocuSign',
    'rhs_table' => 'rt_docusign',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'rt_docusign_teams' => 
  array (
    'name' => 'rt_docusign_teams',
    'lhs_module' => 'RT_DocuSign',
    'lhs_table' => 'rt_docusign',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      'team_set_id' => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
        'required' => true,
      ),
      'team_id' => 
      array (
        'name' => 'team_id',
        'type' => 'id',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'rt_docusign_team' => 
  array (
    'name' => 'rt_docusign_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'RT_DocuSign',
    'rhs_table' => 'rt_docusign',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'rt_docusign_assigned_user' => 
  array (
    'name' => 'rt_docusign_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RT_DocuSign',
    'rhs_table' => 'rt_docusign',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
);