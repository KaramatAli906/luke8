<?php

// Field for save and send invites button to check if request from save_send_invites button
$dictionary['Meeting']['fields']['send_invites_jobqueue'] = array(
      'name' => 'send_invites_jobqueue',
      'vname' => 'LBL_SEND_INVITES_JOBQUEUE',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not to send out invites via job queue or not',
      'massupdate' => false,
      'exportable' => false,
);

// Field in Admin Section to set the email template for Invites in Config file.
$dictionary['Meeting']['fields']['email_template_id_for_invites'] = array(
      'name' => 'email_template_id_for_invites',
      'vname' => 'LBL_EMAIL_TEMPLATE_ID_FOR_INVITES',
      'type' => 'email-template-for-invites-enum',
      'source' => 'non-db',
      'massupdate' => false,
      'exportable' => false,
      'required' => true
);
