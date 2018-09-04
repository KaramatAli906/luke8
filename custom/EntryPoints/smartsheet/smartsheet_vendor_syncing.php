<?php

require_once 'custom/include/Helpers/SmartSheets/SmartSheetApiHelper.php';

//global $smartsheet_to_Account_sugar_fields;
//$smartsheet_to_Account_sugar_fields = array(
//    '0' => 'name',
//    //'1' => 'name',
//    //'2' => 'Title',
//    '3' => 'account_type',
//    '4' => 'Trade',
//    '5' => 'shipping_address',
//    '6' => 'phone_office',
//    //'7' => 'phone_office',
//    '8' => 'email1',
//        //'9' => 'ccb_num',
//);
global $smartsheet_to_Attachment_sugar_fields;
$smartsheet_to_Attachment_sugar_fields = array(
    'id' => 'smartsheet_attachment_id',
    'name' => 'name',
    'mimeType' => 'file_mime_type',
);
global $Attachment_type;
$Attachment_type = array();
global $account_found;
$account_found = array();
global $contact_found;
$contact_found = array();
global $Attachment_dtype;
$Attachment_dtype = array();
global $account_ids;
$account_ids = array();
global $already_account;
$already_account = array();
global $already_contact;
$already_contact = array();
global $counter;
global $account_counter;
global $contact_counter;

//$api_helper = new SmartSheetApiHelper();
//To get comment
//$row = $api_helper->retrieveFromSmartSheet("https://api.smartsheet.com/2.0" . "/sheets/2439666013104004/rows/3656705862068100/discussions?include=comments");
//$rows = $api_helper->getAllRows('2439666013104004');
//sheet id 2439666013104004
//row id 8481942274369412
//attachment id 8863171139135364
//To get all rows
//$sheet = $api_helper->retrieveFromSmartSheet("https://api.smartsheet.com/2.0" . "/sheets/2439666013104004?include=attachments");
////To get row with attachment
//$sheet = getSmartSheetData("");
$sheet = getSmartSheetData("?include=attachments");
//$row = getSmartSheetData("/rows/3656705862068100?include=attachments");
//$row = getSmartSheetData("/rows/2435899165304708?include=attachments");
//for contact creation
//$row = getSmartSheetData("/rows/3947219484206980?include=attachments");
//createUpdateAccountAttachmentNotes($row);
//$row = getSmartSheetData("/rows/6030581045716868?include=attachments");
//createUpdateContactAttachmentNotes($row);
//$row = getSmartSheetData("/rows/6854178748295044?include=attachments");
//createUpdateAccountAttachmentNotes($row);
//$row = getSmartSheetData("/rows/2934784322234244");
//createUpdateAccountAttachmentNotes($row);
//code start
global $smartsheet_account_ids;
$smartsheet_account_ids = array();
global $smartsheet_contact_ids;
$smartsheet_contact_ids = array();
$counter = 0;
foreach ($sheet->rows as $row) {
    if ($counter <= 281) {
        accountORcontact($row);
        $counter++;
    }
}

//createUpdateAccountAttachmentNotes($row);

function accountORcontact($row) {
    //$GLOBALS['log']->fatal("in accountORcontact ");
    if (!empty($row) && (!empty($row->cells[1]->value) || !empty($row->cells[3]->value) || !empty($row->cells[4]->value))) {
        if (!isset($row->siblingId) || empty($row->siblingId)) {
            if (!array_key_exists($row->parentId, $GLOBALS['smartsheet_account_ids'])) {
                createUpdateAccountAttachmentNotes($row);
                $GLOBALS['smartsheet_account_ids'][$row->id] = $row->id;
            } else {
                createUpdateContactAttachmentNotes($row);
                $GLOBALS['smartsheet_contact_ids'][$row->id] = $row->id;
            }
        } else if (array_key_exists($row->siblingId, $GLOBALS['smartsheet_contact_ids'])) {
            createUpdateContactAttachmentNotes($row);
            $GLOBALS['smartsheet_contact_ids'][$row->id] = $row->id;
        } else {
            createUpdateAccountAttachmentNotes($row);
            $GLOBALS['smartsheet_account_ids'][$row->id] = $row->id;
        }
    }
}

//it will create account and link attachment and notes
function createUpdateAccountAttachmentNotes($row) {

    if (!empty($row) && (!empty($row->cells[1]->value) || !empty($row->cells[3]->value) || !empty($row->cells[4]->value))) {
        //$GLOBALS['log']->fatal("in createUpdateAccountAttachmentNotes ");
        $acc_bean = getRecordBean($row, 'Accounts');
        //if these created new reocrd then get the id from array if query fail to find it 
        if (empty($acc_bean->id)) {
            if (array_key_exists(trim($row->cells[0]->value), $GLOBALS['already_account'])) {
                $name = $row->cells[0]->value;
                $id = $GLOBALS['already_account'][$name];
                $acc_bean = BeanFactory::getBean('Accounts', $id);
                $GLOBALS['log']->fatal("alreadyaccount" . $row->cells[0]->value);
            }
        }
        $GLOBALS['account_found'][] = $acc_bean->name;
        $GLOBALS['account_counter'] ++;
        //$GLOBALS['log']->fatal("Account row id -->" . print_r($row->id, 1));
        //$GLOBALS['log']->fatal("Account row number -->" . print_r($row->rowNumber, 1));
//        foreach ($smartsheet_to_Account_sugar_fields as $smartsheetfield => $sugarfield) {
//            
//        }
        $trade_type = '';
        //$acc_bean = BeanFactory::getBean('Accounts');
        if (!empty($row->cells[4]->value))
            $trade_type = getTradeType($row->cells[4]->value);
        $GLOBALS['log']->fatal("account id is " . $row->id);
        $acc_bean->smartsheet_account_id = $row->id;
        $acc_bean->name = $row->cells[0]->value;
        if (!empty($row->cells[3]->value))
            $acc_bean->account_type = $row->cells[3]->value;
        $acc_bean->account_trade = $trade_type;
        if (!empty($row->cells[5]->value) && empty($acc_bean->shipping_address_street))
            $acc_bean->shipping_address_street = $row->cells[5]->value;
        if (!empty($row->cells[6]->value))
            $acc_bean->phone_office = $row->cells[6]->value;
        //$acc_bean->phone_alternate = $row->cells[7]->value;
        if (!empty($row->cells[8]->value))
            $acc_bean->email1 = $row->cells[8]->value;
        if (!empty($row->cells[9]->value)) {
            if (preg_match_all("/[0-9]/", $row->cells[9]->value) <= 6) {
                $acc_bean->ccb_num = preg_replace('/[^0-9]/', '', $row->cells[9]->value);
            } else {
                $acc_bean->tin = preg_replace('/[^0-9]/', '', $row->cells[9]->value);
            }
        }
        $account_bean_id = $acc_bean->save();
        //sleep(3);
        $GLOBALS['already_account'][trim($acc_bean->name)] = $acc_bean->id;
//        $GLOBALS['log']->fatal("account id to contac after save".print_r($account_bean_id,1));
        $GLOBALS['log']->fatal("bean account id to contac after save" . $acc_bean->id);
        if (!empty($row->cells[1]->value))
            createUpdateContactAttachmentNotes($row, $acc_bean->id);
        $GLOBALS['Attachment_type'][] = $acc_bean->id;
        $GLOBALS['account_ids'][$row->id] = $acc_bean->id;
        $attachment_ids = array();
        $notes_ids = array();
        if (isset($row->attachments) && !empty($row->attachments)) {
            $attachment_ids = createAttachments($row->attachments);
            //$GLOBALS['log']->fatal("attachment_id is:  " . print_r($attachment_ids, 1));
        }
        foreach ($attachment_ids as $attachment_id) {
            $acc_bean->load_relationship('accounts_mv_attachments');
            $acc_bean->accounts_mv_attachments->add($attachment_id);
            $acc_bean->save();
        }
        $notes_ids = ctreatNotes($row->id);
        foreach ($notes_ids as $note_id) {
            $acc_bean->load_relationship('notes');
            $acc_bean->notes->add($note_id);
            $acc_bean->save();
        }
    }
    return true;
}

//it will create contact and link attachment and notes
function createUpdateContactAttachmentNotes($row, $parent_account_id = '') {

    if (!empty($row) && !empty($row->cells[1]->value)) {
        //$GLOBALS['log']->fatal("in createUpdateContactAttachmentNotes ");
        $GLOBALS['contact_counter'] ++;
        $con_bean = getRecordBean($row, 'Contacts');
        if (empty($con_bean->id)) {
            if (array_key_exists(trim($row->cells[1]->value), $GLOBALS['already_contact'])) {
                $name = $row->cells[1]->value;
                $id = $GLOBALS['already_contact'][$name];
                $con_bean = BeanFactory::getBean('Contacts', $id);
                $GLOBALS['log']->fatal("alreadycontact" . $row->cells[1]->value);
            }
        }
        //$GLOBALS['log']->fatal("contact id is " . $row->id);
        $GLOBALS['contact_found'][] = $con_bean->first_name . " " . $con_bean->last_name;
//        $GLOBALS['Attachment_type'][] = $con_bean->id;
        //for testing only
//        if (array_key_exists($row->cells[8]->value, $GLOBALS['Attachment_type'])) {
//            $GLOBALS['Attachment_dtype'][] = "name:" . $row->cells[0]->value . "::::::::" . "emailis:   " . $row->cells[8]->value . "  phone :" . $row->cells[7]->value;
//        }
//        $GLOBALS['Attachment_type'][$row->cells[8]->value] = "name:" . $row->cells[0]->value . "::::::::" . $row->cells[8]->value . "  phone :" . $row->cells[7]->value;
//        if (!empty($row->cells[8]->value))
//            $GLOBALS['counter'] ++;
        //end of testing
        //$GLOBALS['log']->fatal("        contact row id -->" . print_r($row->id, 1));
        //$GLOBALS['log']->fatal("        contact row number -->" . print_r($row->rowNumber, 1));
//        $GLOBALS['log']->fatal("        contact row Name -->" . print_r($row->cells[0]->value, 1));
//        $con_bean = BeanFactory::getBean('Contacts');
        $con_bean->smartsheet_contact_id = $row->id;
        if ($row->cells[1]->value != $con_bean->first_name . ' ' . $con_bean->last_name) {
            $name = split_name($row->cells[1]->value);
            $con_bean->first_name = $name['first_name'];
            $con_bean->last_name = $name['last_name'];
        }
        if (!empty($row->cells[2]->value))
            $con_bean->title = $row->cells[2]->value;
        if (!empty($row->cells[6]->value))
            $con_bean->phone_work = $row->cells[6]->value;
        if (!empty($row->cells[7]->value))
            $con_bean->phone_mobile = $row->cells[7]->value;
        if (!empty($row->cells[8]->value))
            $con_bean->email1 = $row->cells[8]->value;
        $account_id = $parent_account_id;
        if (empty($parent_account_id)) {
            $account_id = $GLOBALS['account_ids'][$row->parentId];
        }
        $con_bean->account_id = $account_id;
        $con_bean->save();
        $GLOBALS['already_contact'][trim($con_bean->name)] = $con_bean->id;
        //sleep(3);
        //if we are creating the contact from the account then no need to create Attachment AND Notes
        if (empty($parent_account_id)) {
            $attachment_ids = array();
            $notes_ids = array();
            $GLOBALS['Attachment_type'][] = $con_bean->id;
            if (isset($row->attachments) && !empty($row->attachments)) {
                $attachment_ids = createAttachments($row->attachments);
                //$GLOBALS['log']->fatal("contact attachment_id are:  " . print_r($attachment_ids, 1));
            }
            foreach ($attachment_ids as $attachment_id) {
                $con_bean->load_relationship('contacts_mv_attachments');
                $con_bean->contacts_mv_attachments->add($attachment_id);
                $con_bean->save();
            }
            $notes_ids = ctreatNotes($row->id);
            foreach ($notes_ids as $note_id) {
                $con_bean->load_relationship('notes');
                $con_bean->notes->add($note_id);
                $con_bean->save();
            }
        }
    }
    return true;
}

//it will create the attachment 
function createAttachments($attachments) {
    //$GLOBALS['log']->fatal("attachments are:    " . print_r($attachments->name, 1));
    $attachment_bean_id = array();
    foreach ($attachments as $attachment) {
        if (!empty($attachment->id)) {
            $attachmenyt_type = getAttachmentType($attachment->name);

            $attachment_bean = BeanFactory::getBean('mv_Attachments');
            //$GLOBALS['Attachment_type'][$attachment->name] = $attachment->name;
            $attachment_bean->assigned_user_id = 'a2e20440-7c44-11e7-88d9-066ef3c54f7d';
            $attachment_bean->smartsheet_attachment_id = $attachment->id;
            $attachment_bean->document_name = $attachment->name;
            $attachment_bean->category_id = $attachmenyt_type;
            $attachment_bean->filename = $attachment->name;
            $attachment_bean->file_mime_type = $attachment->mimeType;
            $attachment_bean->save();
            //get specific Attached File from the Smartsheet
            $sheet_attachment = getSmartSheetData("/attachments/" . $attachment->id);
            downloadFileFromUrlToUploadFolder($sheet_attachment->url, $attachment_bean->id);
            $attachment_bean_id[] = $attachment_bean->id;
        }
    }
    return $attachment_bean_id;
}

//For create Notes related to and account
function ctreatNotes($row_id) {
    $notes_ids = array();
    $notes = getSmartSheetData("/rows/" . $row_id . "/discussions?include=comments");

    if (!empty($notes->data)) {
        //$GLOBALS['log']->fatal("notes are:    " . print_r($notes, 1));
        $note_text = '';
        $note_bean = BeanFactory::getBean('Notes');
        $note_bean->assigned_user_id = 'a2e20440-7c44-11e7-88d9-066ef3c54f7d';
        $note_bean->name = "SmartSheet Row Comments";
        foreach ($notes->data as $note) {
            $note_bean->smartshseet_note_id = $note->id;
            foreach ($note->comments as $text) {
                $note_text.= $text->text . "\n\r";
                $note_text.= "Comment added by: \t" . $text->createdBy->name . "( " . $text->createdBy->email . ") at ";
                $note_text.= str_replace('T', ' ', str_replace('Z', ' ', $text->createdAt)) . "\n\r\n\r";
            }
        }
        $note_bean->description = $note_text;
        $note_bean->save();
        $notes_ids[] = $note_bean->id;
    }
    return $notes_ids;
}

//For Download Attachment to Upload Folder
function downloadFileFromUrlToUploadFolder($url, $filename = "abc") {
    $ch = curl_init($url);
    $func = array('sugar_fopen', 'fclose');
    $my_save_dir = 'upload/';
    $complete_save_loc = $my_save_dir . $filename;
    $fp = $func[0]($complete_save_loc, 'wb');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_exec($ch);
    curl_close($ch);
    $func[1]($fp);
}

//to get data from the smartsheet
function getSmartSheetData($url) {
    $api_helper = new SmartSheetApiHelper();
    return $api_helper->retrieveFromSmartSheet("https://api.smartsheet.com/2.0" . "/sheets/2439666013104004" . $url);
}

//to get specific record on specific condition
function getModuleRecord($module_name, $where_clause = '', $flag = false) {

    $query = '';
    $ids = array();
    if ($flag) {
        $query = "SELECT acc.id
            FROM  $module_name acc 
            WHERE  acc.deleted=0     " . $where_clause;
    } else {
        $query = "SELECT acc.id
            FROM  $module_name acc LEFT JOIN email_addr_bean_rel email_acc ON acc.id = email_acc.bean_id and email_acc.deleted=0 LEFT JOIN email_addresses email
            ON email_acc.email_address_id = email.id and email.deleted=0 
            WHERE  acc.deleted=0     " . $where_clause;
    }
    $GLOBALS['log']->fatal(" query are " . $query);
    $result = $GLOBALS["db"]->query($query);
    while ($row = $GLOBALS["db"]->fetchByAssoc($result)) {
        if (!in_array($row['id'], $GLOBALS['Attachment_type'])) {
            $ids[] = $row['id'];
        }
    }
    return $ids;
}

//it will return the existing or new bean 
function getRecordBean($row, $bean_name) {
    $email_address = '';
    $phone_office = '';
    $name = '';
    $phone_where = '';
    $email_where = '';
    $record_id = array();
    $name_where = '';
    //to create phone where for contat or account 
    if ($bean_name == 'Contacts' && !empty($row->cells[7]->value)) {
        $phone_office = preg_replace("/[^0-9]/", "", $row->cells[7]->value); //remove non digit number from the smartsheet phone field
        $phone_where = " and (" . formatPhone('phone_work') . " = '" . $phone_office . "' OR " . formatPhone('phone_mobile') . " = '" . $phone_office . "')";
    } elseif ($bean_name == 'Accounts' && !empty($row->cells[6]->value)) {
        $phone_office = preg_replace("/[^0-9]/", "", $row->cells[6]->value);
        $phone_where = " and ( " . formatPhone('phone_office') . " = '" . $phone_office . "'  OR  " . formatPhone('phone_alternate') . " = '" . $phone_office . "')";
    }
    //to create email where for contat or account 
    if (!empty($row->cells[8]->value)) {
        $email_address = $row->cells[8]->value;
        $email_where = " and email.email_address = '" . trim($email_address) . "' ";
    }
    //to create name where for contat or account 
    if ($bean_name == 'Contacts' && !empty($row->cells[1]->value)) {
        $name = $row->cells[1]->value;
        //return name if we have manually match the name from smartsheet to Sugar
        $contact_name = contact_name_match($name);
        if (!empty($contact_name)) {
            $name = $contact_name;
        }
        $name_where = " and  CONCAT( first_name, CONCAT(  ' ', last_name ) ) = " . $GLOBALS['db']->quoted(trim($name)) . " ";
    } elseif ($bean_name == 'Accounts' && !empty($row->cells[0]->value)) {
        $name = $row->cells[0]->value;
        //return name if we have manually match the name from smartsheet to Sugar
        $account_name = account_name_match($name);
        if (!empty($account_name)) {
            $name = $account_name;
        }
        $name_where = " and name = " . $GLOBALS['db']->quoted(trim($name)) . " ";
    }

//    if ($bean_name == 'Contacts' && !empty($row->cells[1]->value)) {
//        $name = $row->cells[1]->value;
//        $name_where = " and  CONCAT( first_name, CONCAT(  ' ', last_name ) ) = '" . trim($name) . "' ";
//    } 
//    
//    for testing
    //$email_where = " and email.email_address = 'lou@totaltakeoffs.com'";
//   $email_where = " and email.email_address = '503living@gmail.com'";
//    $phone_where = " and ".formatPhone('phone_office')." = '5032540100' ";
    //for testing end
    //$GLOBALS['log']->fatal("id's 4  in getrecord bean ");

    $record_id = getModuleRecord(strtolower($bean_name), $name_where, $flag = true);
    if (empty($record_id)) {
        if (!empty($row->cells[8]->value))
            $record_id = getModuleRecord(strtolower($bean_name), $email_where);
    }
    if (empty($record_id)) {
        if (!empty($phone_where))
            $record_id = getModuleRecord(strtolower($bean_name), $phone_where, $flag = true);
    }

    if (!empty($record_id)) {
        if (count($record_id) > 1) {
            $where = '';
            $where = $email_where . ' ' . $phone_where . ' ' . $name_where;
            $record_ids = getModuleRecord(strtolower($bean_name), $where);
            if (!empty($record_ids)) {
                if (count($record_ids) == 1) {
//                    if (empty($row->cells[6]->value) && empty($row->cells[8]->value)) {
//                        
//                    } else {
                    $GLOBALS['log']->fatal("id's 1  " . print_r($record_ids, 1));
                    //$GLOBALS['log']->fatal("  email are:  " . $row->cells[8]->value . "   phone  " . $row->cells[6]->value . "where clause: " . $where);
                    $acc_bean = BeanFactory::getBean($bean_name, $record_ids[0]);
                    return $acc_bean;
                    //}
                } else {

                    $GLOBALS['log']->fatal("id's 2  " . print_r($record_ids, 1));
                    $GLOBALS['log']->fatal("id's2 is used  " . $record_ids[0]);
                    $acc_bean = BeanFactory::getBean($bean_name, $record_ids[0]);
                    return $acc_bean;
                }
            } else {
                $GLOBALS['log']->fatal("id's 3  " . print_r($record_id, 1));
                $acc_bean = BeanFactory::getBean($bean_name, $record_id[0]);
                $acc_bean->assigned_user_id = 'a2e20440-7c44-11e7-88d9-066ef3c54f7d';
                return $acc_bean;
            }
        } else {
            $GLOBALS['log']->fatal("id's 4  " . print_r($record_id, 1));

            $acc_bean = BeanFactory::getBean($bean_name, $record_id[0]);
            return $acc_bean;
        }
    } else {
        $GLOBALS['log']->fatal("id's 5  " . print_r($record_id, 1));
        $acc_bean = BeanFactory::getBean($bean_name);
        $acc_bean->assigned_user_id = 'a2e20440-7c44-11e7-88d9-066ef3c54f7d';
        return $acc_bean;
    }
}

//contact name check if we manually match the contact from smartsheet to sugar 
function contact_name_match($name) {
    $contact_name_array = array(
        "John Sheggeby" => "John Shevgevy",
        "Grant Ryder" => "Grant Rider",
        "Martina & Victor Chavez" => "Martina Chavez",
        "Howard" => "Howard JL's",
        "Jon Neal" => "John JR Neal",
        "Tom" => "Tom JL's",
        "Office / Service" => "Office Service",
        "Erick Dickerson" => "Eric Dickerson",
        "General Phone Line" => "Mark Morgan",
        "Grad Rozema" => "Marshall Weaver",
        "Richard Hayden" => "Hayden (Hayden)",
        "John Wambeke" => "John No Last Name",
        "Don & Davalee Gist" => "Don Don",
    );
    if (array_key_exists($name, $contact_name_array)) {
        $GLOBALS['log']->fatal("in contact match" . $name);
        return $contact_name_array[$name];
    } else {
        return '';
    }
}

//account name check if we manually match the contact from smartsheet to sugar 
function account_name_match($name) {
    $account_names_array = array(
        "Mike's Mobile Mix" => "Mikes Mobile Mix - Concrete",
        "O So Kleen, Inc." => "O So Kleen Inc",
        "Lone Pine Contracting LLC" => "Lone Pine Builders LLC",
        "Grant Ryder Concrete, INC." => "Grant Rider Concrete",
        "A&J Cabinets" => "A&J Custom Cabinets, Inc.",
        "Christiansen Contracting LLC" => "Christiansen's Contracting Company, LLC",
        "Gary's Vacuflow" => "Gary's Vacuflo, Inc",
        "Intemperie Construction LLC" => "Intemperie Construction, LLC",
        "Mike's Fence Center" => "Mike's Fence Center, Inc",
        "Professional Heating & Cooling" => "Professional Heating & Cooling, Inc",
        "Pro Build" => "ProBuild - Bend",
        "City of Bend - Full Contact List" => "City of Bend",
        "Suburban Door" => "Suburban Door Co. Inc",
        "First Class Landscaping" => "First Class Professionals Landscaping",
        "Full Moon Painting & Design, LLC" => "Full Moon Painting and Design, LLC",
        "Tracey Hannan Concrete" => "Tracey Hannan Construction",
        "Corona Carpenters LLC" => "Corona Carpenter's LLC",
        "Intermountain West" => "Intermountain West Insulation",
        "Rock Hard Granite" => "Rock Hard Granite II, LLC",
        "Alden Plumbing, LLC" => "Alden Plumbing",
        "TBar Construction INC." => "T Bar Construction Inc",
        "Umatilla Electric" => "Umatilla Electric Cooperative - Hermiston",
        "Cascade Natural Gas" => "Cascade Natural Gas Corporation",
        "HomeSphere" => "HomeSphere, INC",
        "KIE Supply Corporation" => "KIE Supply",
        "Parr Lumber" => "Parr Lumber Co.",
        "ProBuild" => "ProBuild - Hermiston",
        "The Home Depot" => "Home Depot",
        "Umatilla Ready Mix" => "Umatilla Ready-Mix, INC",
        "Noland Door" => "Noland Door Co.",
        "Eastern Oregon Heating & Air LLC" => "Eastern Oregon Heating & Air",
        "Findley Brothers Construction" => "Findley Brothers Construcion",
        "Rock Hard Granite" => "Rock Hard Granite II, LLC",
        "Scott Helfer Construction" => "Helfer Construction and Excavation",
        "Wambeke" => "Wambeke Window Washing",
        "SGS Development LLC" => "SGS Development, LLC.",
        "A. Burk & Co. Glass" => "A Burk & Co Glass",
        "Ferguson" => "Ferguson Enterprises",
        "MJConcrete, Inc." => "MJ Concrete, Inc.",
        "Elite Roofing, LLC" => "Elite Roofing",
    );
    if (array_key_exists($name, $account_names_array)) {
        $GLOBALS['log']->fatal("in account match" . $name);
        return $account_names_array[$name];
    } else {
        return '';
    }
}

//it will create db query to unformat the mobile phone 
function formatPhone($phone) {
    return "REPLACE( REPLACE(REPLACE(REPLACE(REPLACE($phone,' ','' ),')',''),'(',''),'.',''),'-','')";
}

//function to get file type
function getAttachmentType($attachment_name) {

    $attachment_type_array = array(
        'ExhibitA-GotLawn.doc' => 'Sub Exhibit A',
        'ExhibitA-Huntwood.docx' => 'Sub Exhibit A',
        'ExhibitA-CortesContractors,LLC-Painting-.docx' => 'Sub Exhibit A',
        'ExhibitAsigned-MountainVistaConstructionLLC(finalclean).pdf' => 'Sub Exhibit A',
        'ExhibitAsigned-MountainVistaConstructionLLC(framing).pdf' => 'Sub Exhibit A',
        'ExhibitAsigned-MountainVistaConstructionLLC(jobsiteclean).pdf' => 'Sub Exhibit A',
        'ExhibitAsigned-MountainVistaConstructionLLC(siding).pdf' => 'Sub Exhibit A',
        'JobsiteClean-ExhibitA-MountainVistaConstructionLLC.docx' => 'Sub Exhibit A',
        'FinalClean-ExhibitA-MountainVistaConstructionLLC.docx' => 'Sub Exhibit A',
        'Siding-ExhibitA-MountainVistaConstructionLLC.docx' => 'Sub Exhibit A',
        'Framing-ExhibitA-MountainVistaConstructionLLC.docx' => 'Sub Exhibit A',
        'ExhibitA-VasquezConstructionCompany.docx.pdf' => 'Sub Exhibit A',
        'ExhibitA-VasquezConstructionCompanyLLC.docx' => 'Sub Exhibit A',
        'ExhibitASigned-CentralOregonGarageDoor.pdf' => 'Sub Exhibit A',
        'ExhibitA-CentralOregonGarageDoors-.docx' => 'Sub Exhibit A',
        'ExhibitA-J&JGutters.pdf' => 'Sub Exhibit A',
        'ExhibitA-J&JGutters.docx' => 'Sub Exhibit A',
        '49-ExhibitA-MasterCleaningSR.pdf' => 'Sub Exhibit A',
        '49-ExhibitA-MasterCleaningSR.docx' => 'Sub Exhibit A',
        'ExhibitASigned-WaterWaysPlumbing.pdf' => 'Sub Exhibit A',
        'ExhibitA-WaterwaysPlumbing.pdf' => 'Sub Exhibit A',
        'ExhibitA-PerformanceInsulation.pdf' => 'Sub Exhibit A',
        '27-ExhibitA-PerformanceInsulation.docx' => 'Sub Exhibit A',
        '27-ExhibitA-Tri-CountyClimate.docx.pdf' => 'Sub Exhibit A',
        '27-ExhibitA-Tri-CountyClimate.docx' => 'Sub Exhibit A',
        'ExhibitA(Foundations)-GrantRyderConcrete.doc' => 'Sub Exhibit A',
        'ExhibitA(Flatwork)-GrantRyderConcrete.docx' => 'Sub Exhibit A',
        'ExhibitA(Foundations)-GrantRyderConcrete.pdf' => 'Sub Exhibit A',
        'ExhibitA(Flatwork)-GrantRyderConcrete.pdf' => 'Sub Exhibit A',
        'ExhibitA(Framing)-DougMonsonConstruction.pdf' => 'Sub Exhibit A',
        'ExhibitA(Framing)-DougMonsonConstruction.docx' => 'Sub Exhibit A',
        'ExhibitA(Siding)-DryRiverConstruction.pdf' => 'Sub Exhibit A',
        'ExhibitA(Siding)-DryRiverConstruction.docx' => 'Sub Exhibit A',
        'ExhibitA-DoranRoofing.pdf' => 'Sub Exhibit A',
        'ExhibitA-DoranRoofing.docx' => 'Sub Exhibit A',
        'ExhibitA-GenesisConstructionGroup.pdf' => 'Sub Exhibit A',
        'ExhibitA-GenesisConstructionGroup.docx' => 'Sub Exhibit A',
        'ExhibitA-4JConstruction(SiteClean)5-17-17.pdf' => 'Sub Exhibit A',
        'ExhibitA-AllSystemsElectric.pdf' => 'Sub Exhibit A',
        '58-ExhibitA-AllSystemsElectric.docx' => 'Sub Exhibit A',
        '51&58-ExhibitA(siteclean)-CentralOregonCleaningService-3-8-17.docx.pdf' => 'Sub Exhibit A',
        '51&58-ExhibitA-CentralOregonCleaningService-3-8-17.docx.pdf' => 'Sub Exhibit A',
        '51&58-ExhibitA(siteclean)-CentralOregonCleaningService-3-8-17.docx' => 'Sub Exhibit A',
        '51&58-ExhibitA-CentralOregonCleaningService-3-8-17.docx' => 'Sub Exhibit A',
        'ExhibitA(Flatwork)-CGBrothersConstruction.pdf' => 'Sub Exhibit A',
        'ExhibitA(Foundations)-CGBrothersConstruction.pdf' => 'Sub Exhibit A',
        'ExhibitA(Flatwork)-CGBrothersConstruction.docx' => 'Sub Exhibit A',
        'ExhibitA(Foundations)-CGBrothersConstruction.doc' => 'Sub Exhibit A',
        'ExhibitA(Framing)-EliteRoofing.pdf' => 'Sub Exhibit A',
        'ExhibitA(Roofing)-EliteRoofing.pdf' => 'Sub Exhibit A',
        'ExhibitA(Siding)-EliteRoofing.pdf' => 'Sub Exhibit A',
        '63-ExhibitA(Roofing)-EliteRoofing-.docx' => 'Sub Exhibit A',
        '63-ExhibitA(framing)-EliteRoofing.docx' => 'Sub Exhibit A',
        '63-ExhibitA(Siding)-EliteRoofing,LLC.docx' => 'Sub Exhibit A',
        'ExhibitA-HappyGoat-3-8-17.doc.pdf' => 'Sub Exhibit A',
        'ExhibitA-HappyGoat-3-8-17.doc' => 'Sub Exhibit A',
        'ExhibitA-IntemperieContruction.pdf' => 'Sub Exhibit A',
        'ExhibitA-IntemperieContruction.docx' => 'Sub Exhibit A',
        "ExhibitA-Joe'sJanitorial-01-01-17.pdf" => 'Sub Exhibit A',
        'ExhibitA-M&DGutters.pdf' => 'Sub Exhibit A',
        'ExhibitA-M&DGutters.docx' => 'Sub Exhibit A',
        'ExhibitA-MJConcrete.pdf' => 'Sub Exhibit A',
        'ExhibitA(Foundations)-SageCreek.pdf' => 'Sub Exhibit A',
        'ExhibitA(Flatwork)-SageCreek.pdf' => 'Sub Exhibit A',
        'ExhibitA(Foundations)-SageCreek.doc' => 'Sub Exhibit A',
        'ExhibitA(Flatwork)-SageCreek.docx' => 'Sub Exhibit A',
        '27-ExhibitA-SoneliConstruction(siteclean).docx.pdf' => 'Sub Exhibit A',
        '27-ExhibitA-SoneliConstruction(FinalClean).docx.pdf' => 'Sub Exhibit A',
        'ExhibitA-SoneliCostruction.pdf' => 'Sub Exhibit A',
        '58-ExhibitA-SoneliConstruction.docx' => 'Sub Exhibit A',
        'ExhibitA-SparkleCleaningCompany.pdf' => 'Sub Exhibit A',
        '58-ExhibitA-ThreeRocks.pdf' => 'Sub Exhibit A',
        'ExhibitA-TYMCleaning(FinalClean).pdf' => 'Sub Exhibit A',
        'ExhibitA-TYMCleaning(SiteClean).pdf' => 'Sub Exhibit A',
        'ExhibitA-TYMCleaning(FinalClean).docx' => 'Sub Exhibit A',
        'ExhibitA-TYMCleaning(SiteClean).docx' => 'Sub Exhibit A',
        'ExhibitA-VortexPainting(signed).docx.pdf' => 'Sub Exhibit A',
        'ExhibitA-VortexPainting.docx' => 'Sub Exhibit A',
        'ExhibitA-WillieFariasRoofing.pdf' => 'Sub Exhibit A',
        'ExhibitA-WillieFariasRoofing.docx' => 'Sub Exhibit A',
        'ExhibitA-RockSolidRoofing.pdf' => 'Sub Exhibit A',
        'ExhibitA-RockSolidRoofing.docx' => 'Sub Exhibit A',
        'AllSubdivisions-ExhibitA-Aarow,Inc4.10.17.pdf' => 'Sub Exhibit A',
        '58-ExhibitA-AxisEnterprisesLLC-12-06-16.docx.pdf' => 'Sub Exhibit A',
        '58-ExhibitA-AxisEnterprisesLLC-12-06-16.docx' => 'Sub Exhibit A',
        'ExhibitA-B&ARoofing(Framing)4-20-17.pdf' => 'Sub Exhibit A',
        'ExhibitA-B&ARoofing(Siding)4-13-17.pdf' => 'Sub Exhibit A',
        "ExhibitA(siteclean)-Contractor'sCleaningCompany.docx.pdf" => 'Sub Exhibit A',
        "ExhibitA(finalclean)-Contractor'sCleaningCompany.docx.pdf" => 'Sub Exhibit A',
        "ExhibitA(finalclean)-Contractor'sCleaningCompany.docx" => 'Sub Exhibit A',
        "ExhibitA(siteclean)-Contractor'sCleaningCompany.docx" => 'Sub Exhibit A',
        'ExhibitA-EcoPlusPainting-5-11-17.pdf' => 'Sub Exhibit A',
        'ExhibitA-EcoPlusPainting-5-11-17.docx' => 'Sub Exhibit A',
        '49-ExhibitA-EcoPlusPainting-4-24-17.pdf' => 'Sub Exhibit A',
        'ExhibitA-L&LBendormexLLC.pdf' => 'Sub Exhibit A',
        'ExhibitA-L&LBendormex-2-06-17.docx' => 'Sub Exhibit A',
        'ExhibitA-NorthwestJobSiteMaintenance(siteclean)-3-15-17.docx.pdf' => 'Sub Exhibit A',
        'ExhibitA-NorthwestJobSiteMaintenance(finalclean)-3-15-17.docx.pdf' => 'Sub Exhibit A',
        'ExhibitA-NorthwestJobSiteMaintenance(siteclean)-3-15-17.docx' => 'Sub Exhibit A',
        'ExhibitA-NorthwestJobSiteMaintenance(finalclean)-3-15-17.docx' => 'Sub Exhibit A',
        '49-ExhibitA-PendletonPlumbing-11-26-16.docx.pdf' => 'Sub Exhibit A',
        "ExhibitA-Terry'sBestConstruction.docx" => 'Sub Exhibit A',
        "ExhibitA-Terry'sBestConstruction.pdf" => 'Sub Exhibit A',
        '49-ExhibitA-BruceHeatingandAir-11-26-16.docx.pdf' => 'Sub Exhibit A',
        '49-ExhibitA-ButtercreekContracting04-26-17.pdf' => 'Sub Exhibit A',
        '49-ExhibitA-HermistonCleaningServices.pdf' => 'Sub Exhibit A',
        '49-ExhibitA-HermistonCleaningServices.docx' => 'Sub Exhibit A',
        'ExhibitA-JMadrigalConcrete.doc' => 'Sub Exhibit A',
        'ExhibitA-JMadrigalConcrete.pdf' => 'Sub Exhibit A',
        '49-ExhibitA-JMadrigalConcrete-12-30-16.pdf' => 'Sub Exhibit A',
        'ExhibitA-FinalFinishescontracting2018.docx' => 'Sub Exhibit A',
        'ExhibitA-JobSiteCleanUp-MartinsConstruction.docx' => 'Sub Exhibit A',
        'DS-ExhibitA-MillerandSonsExcavating12-12-2016.pdf' => 'Sub Exhibit A',
        '41-ExhibitA-TBarConstructionINC.pdf' => 'Sub Exhibit A',
        '41-ExhibitA-TBarConstructionINC.doc' => 'Sub Exhibit A',
        'ExhibitA-Round-UpCityPlumbing.pdf' => 'Sub Exhibit A',
        'ExhibitA-Round-UpCityPlumbing.docx' => 'Sub Exhibit A',
        '49-ExhibitA-CleaningwithDavis,LLC-5-3-17.pdf' => 'Sub Exhibit A',
        '49-ExhibitA-CleaningwithDavis,LLC(Final)5-03-17.docx' => 'Sub Exhibit A',
        '27-ExhibitA-GamacheLandscaping.pdf' => 'Sub Exhibit A',
        '27-ExhibitA-GamacheLandscaping.doc' => 'Sub Exhibit A',
        'ExhibitB-GotLawn.doc' => 'Sub Exhibit B',
        'Addendum1toExhibitB-CortesContractors,LLC.pdf' => 'Sub Exhibit B',
        'ExhibitB-CortesContractors,LLC-Painting-.doc' => 'Sub Exhibit B',
        'ExhibitBsigned-MountainVistaConstructionLLC(finalclean).pdf' => 'Sub Exhibit B',
        'ExhibitBsigned-MountainVistaConstructionLLC(framing).pdf' => 'Sub Exhibit B',
        'ExhibitBsigned-MountainVistaConstructionLLC(jobsiteclean).pdf' => 'Sub Exhibit B',
        'ExhibitBsigned-MountainVistaConstructionLLC(siding).pdf' => 'Sub Exhibit B',
        'FinalClean-ExhibitB-MountainVistaConstructionLLC.doc' => 'Sub Exhibit B',
        'JobsiteClean-ExhibitB-MountainVistaConstructionLLC.doc' => 'Sub Exhibit B',
        'Siding-ExhibitB-MountainVistaConstructionLLC.doc' => 'Sub Exhibit B',
        'Framing-ExhibitB-MountainVistaConstructionLLC.doc' => 'Sub Exhibit B',
        'ExhibitB-VasquezConstructionCompany.docx.pdf' => 'Sub Exhibit B',
        'ExhibitB-VasquezConstructionCompanyLLC.pdf' => 'Sub Exhibit B',
        'ExhibitB-VasquezConstructionCompanyLLC.doc' => 'Sub Exhibit B',
        'ExhibitBsigned-ZVBuilders(framing).pdf' => 'Sub Exhibit B',
        'ExhibitB-ZVBuilders(framing).doc.pdf' => 'Sub Exhibit B',
        'ExhibitB-Brundage-BoneConcretePumping.pdf' => 'Sub Exhibit B',
        'ExhibitB-JJGutters.pdf' => 'Sub Exhibit B',
        'ExhibitB-JJGutters.doc' => 'Sub Exhibit B',
        'ExhibitB-MartinsConstruction.pdf' => 'Sub Exhibit B',
        '49-ExhibitB-MasterCleaningSR.doc' => 'Sub Exhibit B',
        '49-ExhibitB-MasterCleaningSR.pdf' => 'Sub Exhibit B',
        'ExhibitBSigned-WaterWaysPlumbing.pdf' => 'Sub Exhibit B',
        '02-ExhibitB-WaterwaysPlumbing.pdf' => 'Sub Exhibit B',
        'ExhibitB-4JConstruction(SiteClean).pdf' => 'Sub Exhibit B',
        'ExhibitB-4JConstruction(masterpricing).pdf' => 'Sub Exhibit B',
        '2018ExhibitB-ACCSContracting.pdf' => 'Sub Exhibit B',
        'ExhibitB-AllSystems.pdf' => 'Sub Exhibit B',
        'ExhibitB-CentralOregonCleaning.pdf' => 'Sub Exhibit B',
        'ExhibitB-CentralOregonCleaningService.doc' => 'Sub Exhibit B',
        'ExhibitB-CentralOregonCleaningService.doc.pdf' => 'Sub Exhibit B',
        'ExhibitB-CGBrothersConstruction.pdf' => 'Sub Exhibit B',
        'ExhibitB-CGBrothersConstruction.doc' => 'Sub Exhibit B',
        'ExhibitBMasterPricing-CreativeOutdoorLandscape_LLC.doc' => 'Sub Exhibit B',
        '63-ExhibitB-CreativeOutdoor.pdf' => 'Sub Exhibit B',
        'ExhibitBExample.pdf' => 'Sub Exhibit B',
        'ExhibitBMasterPricing-CreativeOutdoorLandscape,LLC.doc.pdf' => 'Sub Exhibit B',
        'ExhibitB-DoInsulation(masterupgradepricing).pdf' => 'Sub Exhibit B',
        'ExhibitB-Dynamic.pdf' => 'Sub Exhibit B',
        'ExhibitB-GasPipeSystems(1).doc.pdf' => 'Sub Exhibit B',
        'ExhibitB-GasPipeSystems(1).doc' => 'Sub Exhibit B',
        'ExhibitB-HappyGoatLandscaping.doc.pdf' => 'Sub Exhibit B',
        'ExhibitB-HappyGoatLandscaping.doc' => 'Sub Exhibit B',
        'ExhibitB-IntemperieConstruction(siding).pdf' => 'Sub Exhibit B',
        'ExhibitB-IntemperieConstruction(siding).doc' => 'Sub Exhibit B',
        "ExhibitB-Joe'sJanitorial-Masterpricing.pdf" => 'Sub Exhibit B',
        "51-ExhibitB-JL'sDrywall.doc.pdf" => 'Sub Exhibit B',
        'ExhibitB-M&DGutters.pdf' => 'Sub Exhibit B',
        'ExhibitB-M&DGutters.doc' => 'Sub Exhibit B',
        'ExhibitB-MJConcrete(flatwork).pdf' => 'Sub Exhibit B',
        'ExhibitB-MJConcrete.pdf' => 'Sub Exhibit B',
        "ExhibitB-Polo'sPainting(siding)(1).pdf" => 'Sub Exhibit B',
        "ExhibitB-Polo'sPainting(siding)(1).doc" => 'Sub Exhibit B',
        "58-ExhibitB-Polo'sPainting(Painting).pdf" => 'Sub Exhibit B',
        "58-ExhibitB-Polo'sPainting(Siding).pdf" => 'Sub Exhibit B',
        "51-ExhibitB-Polo'sPainting(siding).doc" => 'Sub Exhibit B',
        'ExhibitB-SageCreekConcrete.pdf' => 'Sub Exhibit B',
        'ExhibitB-SageCreekConcrete.doc' => 'Sub Exhibit B',
        'DeckFraming-ExhibitB-SatherMasonry.pdf' => 'Sub Exhibit B',
        'DeckFraming-ExhibitB-SatherMasonry.doc' => 'Sub Exhibit B',
        '27-ExhibitB-SoneliConstruction(FinalClean).doc.pdf' => 'Sub Exhibit B',
        '27-ExhibitB-SoneliConstruction(siteclean).doc.pdf' => 'Sub Exhibit B',
        'ExhibitB(Siding)-SoneliConstruction.doc' => 'Sub Exhibit B',
        'ExhibitB-SoneliConstruction.pdf' => 'Sub Exhibit B',
        '27-ExhibitB-SoneliConstuction(framing).doc' => 'Sub Exhibit B',
        'ExhibitB-SparkleCleaning.doc.pdf' => 'Sub Exhibit B',
        'ExhibitB-SparkleCleaning.doc' => 'Sub Exhibit B',
        'ExhibitB-TYMCleaningCustomz.pdf' => 'Sub Exhibit B',
        'ExhibitB-VortexPainting(signed).doc.pdf' => 'Sub Exhibit B',
        'ExhibitB-VortexPainting.doc' => 'Sub Exhibit B',
        'ExhibitB-VortextPainting-3-21-18.pdf' => 'Sub Exhibit B',
        'ExhibitB(MillWork)-BuildingSolutions.pdf' => 'Sub Exhibit B',
        'ExhibitB(Doors)-BuildingSolutions.pdf' => 'Sub Exhibit B',
        'ExhibitB(Hardware)-BuildingSolutions.pdf' => 'Sub Exhibit B',
        'ExhibitBMasterPricing-Arrow(FramingandDeckLabor).pdf' => 'Sub Exhibit B',
        '58-ExhibitB-AxisEnterprisesLLC(framing).doc.pdf' => 'Sub Exhibit B',
        '58-ExhibitB-AxisEnterprisesLLC(framing).doc' => 'Sub Exhibit B',
        "ExhibitB(siteclean)-Contractor'sCleaningCompany.doc.pdf" => 'Sub Exhibit B',
        "ExhibitB(finalclean)-Contractor'sCleaningCompany.doc.pdf" => 'Sub Exhibit B',
        "ExhibitB(finalclean)-Contractor'sCleaningCompany.doc" => 'Sub Exhibit B',
        "ExhibitB(siteclean)-Contractor'sCleaningCompany.doc" => 'Sub Exhibit B',
        'ExhibitB-EcoPlusPainting.pdf' => 'Sub Exhibit B',
        'ExhibitB-EcoPlusPainting.doc' => 'Sub Exhibit B',
        '49-ExhibitB-EcoPlusPainting(Painting).pdf' => 'Sub Exhibit B',
        'EcoPlusPainting-ExhibitBNon-Primer.pdf' => 'Sub Exhibit B',
        'ExhibitB-L&LBendormexLLC.pdf' => 'Sub Exhibit B',
        'BASE-ExhibitB-L&LBendormex.doc' => 'Sub Exhibit B',
        'ExhibitB-NorthwestJobSiteMaintenance.doc.pdf' => 'Sub Exhibit B',
        'ExhibitB-NorthwestJobSiteMaintenance.doc' => 'Sub Exhibit B',
        'ExhibitB-QBEElectric.pdf' => 'Sub Exhibit B',
        'ExhibitB-QBE.doc' => 'Sub Exhibit B',
        '49-ExhibitB-PendletonPlumbing.doc.pdf' => 'Sub Exhibit B',
        "ExhibitB-Terry'sBestConstruction.pdf" => 'Sub Exhibit B',
        "ExhibitB-Terry'sBestConstruction.doc" => 'Sub Exhibit B',
        '49-ExhibitB-ButtercreekContracting(Excavation).pdf' => 'Sub Exhibit B',
        'ExhibitB-JMadrigalConcrete.doc' => 'Sub Exhibit B',
        'ExhibitB-JMadrigalConcrete.pdf' => 'Sub Exhibit B',
        '49-ExhibitB-JMadrigalConcrete.pdf' => 'Sub Exhibit B',
        'ExhibitB-MartinConstructionSiteCleanUp03-09-2018.doc' => 'Sub Exhibit B',
        'ExhibitB-MartinConstructionFinalFinishContractor03-09-2018.doc' => 'Sub Exhibit B',
        'ExhibitB-TBARConstructionInc.10-10-2017.pdf' => 'Sub Exhibit B',
        'ExhibitB-TBARConstructionInc.10-10-2017.doc' => 'Sub Exhibit B',
        '49-ExhibitB-WashingtonGreen-(Hydroseed).pdf' => 'Sub Exhibit B',
        '49-ExhibitB-WashingtonGreen-(Hydroseed).doc' => 'Sub Exhibit B',
        'ExhibitB-Round-UpCityPlumbing.pdf' => 'Sub Exhibit B',
        '49-ExhibitB-CleaningwithDavis,LLC.doc' => 'Sub Exhibit B',
        '49-ExhibitB-CleaningwithDavis,LLC.pdf' => 'Sub Exhibit B',
        'ExhibitB-GamancheLandscaping.pdf' => 'Sub Exhibit B',
        '49-ExhibitB-Gamanche.doc' => 'Sub Exhibit B',
        'Huntwood-LiabilityInsurance.pdf' => 'Sub Insurance',
        'Huntwood-WorkersComp.Insurance.pdf' => 'Sub Insurance',
        "Liability&Workers'CompInsurance-MountainVistaConstructionLLC.jpg" => 'Sub Insurance',
        'LiabilityInsurance-VasquezConstructionCompany.docx.pdf' => 'Sub Insurance',
        'LiabilityInsurance-CentralOregonGarageDoor.pdf' => 'Sub Insurance',
        "LiabilityandWorkers'CompInsurance-Mike'sMobileMix.pdf" => 'Sub Insurance',
        'LiabilityInsurance-ZVBuilders(framing).pdf' => 'Sub Insurance',
        'LiabilityInsurance-WaterWaysPlumbing.PDF' => 'Sub Insurance',
        'Insurance-PerformanceInsulation.pdf' => 'Sub Insurance',
        'Insurance-Tri-CountyClimate.PDF' => 'Sub Insurance',
        'CertificateofInsurance-AllSystemsElectric.PDF' => 'Sub Insurance',
        'LiabilityInsurance-CentralOregonCleaning.pdf' => 'Sub Insurance',
        'Insurance-EliteRoofing.pdf' => 'Sub Insurance',
        'ProofofInsurance-Intemperie.PDF' => 'Sub Insurance',
        'Cert.ofLiability-IntemperieConstruction.PDF' => 'Sub Insurance',
        'MonteVistaHomesMail-certificateofinsuranceforworkerscomp.pdf' => 'Sub Insurance',
        'LiabilityInsurance10-13-2017.pdf' => 'Sub Insurance',
        "Workman'sCompInsurance-M&DGutters.pdf" => 'Sub Insurance',
        "Workers'CompInsurance-ProfessionalHeating&Cooling.pdf" => 'Sub Insurance',
        'LiabilityInsurance7-20-18.pdf' => 'Sub Insurance',
        'Insurance-ThreeRocksConstruction.PDF' => 'Sub Insurance',
        'Insurance-TymCleaningCustomz.PDF' => 'Sub Insurance',
        'VortexPainting-LiabilityInsurance.pdf' => 'Sub Insurance',
        'LiabilityInsurance-WestCoastTubRepair.pdf' => 'Sub Insurance',
        'AarowLiabilityInsurance.pdf' => 'Sub Insurance',
        "Workman'sCompInsurance-Aarow,Inc..pdf" => 'Sub Insurance',
        "LiabilityInsurance-Contractor'sCleaningCompany.pdf" => 'Sub Insurance',
        'LiabilityInsurance2-8-17.pdf' => 'Sub Insurance',
        "Workman'sCompInsurance-GamancheLandscaping.pdf" => 'Sub Insurance',
        'CertofInsurance-HermistonCleaning.pdf' => 'Sub Insurance',
        'LiabilityInsurance-JMadrigalConcrete.pdf' => 'Sub Insurance',
        'MartinsConstruction-WorkersCompInsurance.jpg' => 'Sub Insurance',
        'MartinsConstruction-LiabilityInsurance.jpg' => 'Sub Insurance',
        'Insurance-TBar.pdf' => 'Sub Insurance',
        'CertificateofLiabilityInsurance.pdf' => 'Sub Insurance',
        'LiabilityInsurance-Round-UpCityPlumbing.PDF' => 'Sub Insurance',
        'LiabilityInsurance5-5-17.pdf' => 'Sub Insurance',
        'MasterSubcontractorAgreementSigned-MountainVistaConstructionLLC.pdf' => 'Subcontract',
        'MasterSubcontractorAgreement-CentralOregonGarageDoor.pdf' => 'Subcontract',
        'MasterAgreement-ZVBuilders.pdf' => 'Subcontract',
        'MasterSubcontractorAgreementSigned-WaterWaysPlumbing.pdf' => 'Subcontract',
        'MasterAgreement-BlankForm03-01-2018-1.pdf' => 'Subcontract',
        'MasterSubcontractorAgreement-PerformanceInsulations.pdf' => 'Subcontract',
        'MasterSubcontractorAgreement-Tri-CountyClimate.pdf' => 'Subcontract',
        'MasterAgreement-TCS.pdf' => 'Subcontract',
        'MasterAgreement-4JConstruction.pdf' => 'Subcontract',
        'MasterAgreement-ACCS.pdf' => 'Subcontract',
        'MasterAgreement-BestVueBlinds.pdf' => 'Subcontract',
        'NewSubPacket&MasterAgreement-CentralOregonCleaningService.pdf' => 'Subcontract',
        'MasterAgreement-ChavezM.Construction.pdf' => 'Subcontract',
        'MasterAgreement-ChristiansenContractingLLC.pdf' => 'Subcontract',
        'MasterAgreement-CreativeOutdoorLandscaping.pdf' => 'Subcontract',
        'MasterAgreement-DoInsulation.pdf' => 'Subcontract',
        'MasterAgreement-DynamicContractors.pdf' => 'Subcontract',
        'MasterSubcontractorPacket-EliteRoofing.pdf' => 'Subcontract',
        "MasterAgreement-Gary'sVacuflow.pdf" => 'Subcontract',
        'MasterAgreement-GasPipeSystems.pdf' => 'Subcontract',
        'MasterAgreement-HappyGoatLandscaping.pdf' => 'Subcontract',
        'MonteVistaHomesMasterSubcontractorAgreement-docusigned.pdf' => 'Subcontract',
        'MasterAgreement-HydroProInc.pdf' => 'Subcontract',
        "MasterAgreement-JL'sDrywall.pdf" => 'Subcontract',
        "MasterAgreement-Mike'sFenceCenter.pdf" => 'Subcontract',
        'MasterAgreement-MJConcrete,Inc.pdf' => 'Subcontract',
        'MasterAgreement-PerformanceBuildingProducts.pdf' => 'Subcontract',
        "MasterAgreement-Polo'sPainting.pdf" => 'Subcontract',
        "MasterAgreement-ProfessionalHeating&Cooling.pdf" => 'Subcontract',
        "MasterAgreement-Resist-AllSeamlessGuttersLLC.pdf" => 'Subcontract',
        "MasterAgreement-SatherMasonry.pdf" => 'Subcontract',
        "MasterSubcontractorAgreement-SoneliConstruction.pdf" => 'Subcontract',
        "MasterSubontractorAgreement-ThreeRocksContruction.pdf" => 'Subcontract',
        "MasterSubcontractorAgreement-TYMCleaningCustomz.pdf" => 'Subcontract',
        "MasterAgreement-VortexPainting.pdf" => 'Subcontract',
        "MasterAgreement-WadeRoger'sExcavation.pdf" => 'Subcontract',
        "MasterAgreement-WestCoastTubRepair.pdf" => 'Subcontract',
        "MasterSubPacket-WillieFarias.pdf" => 'Subcontract',
        "MasterAgreement-AlpineRidgeGeneralContracting.pdf" => 'Subcontract',
        "MasterAgreement-ARN'AConstruction.pdf" => 'Subcontract',
        "MasterAgreement-B&ARoofing.pdf" => 'Subcontract',
        "MasterAgreement-CascadeFence&Construction.pdf" => 'Subcontract',
        "MasterAgreement-CastanedaConstruction.pdf" => 'Subcontract',
        "MasterAgreement-DDConcrete.pdf" => 'Subcontract',
        "MasterAgreement-FirstClassLandscaping.pdf" => 'Subcontract',
        "MasterAgreement-FullMoonPainting&DesignLLC.pdf" => 'Subcontract',
        "MasterAgreement-KnudtsonConstructionLLC.pdf" => 'Subcontract',
        "MasterAgreement-Let'sConstructionCleaningServices.pdf" => 'Subcontract',
        "NewSubPacket&MasterAgreement-L&LBendormexLLC.pdf" => 'Subcontract',
        "MasterAgreement-MesarichElectric.pdf" => 'Subcontract',
        "MasterAgreement-MooreClimateControl.pdf" => 'Subcontract',
        "NewSubPacket&MasterAgreement-NorthwestJobSiteMaintenance.pdf" => 'Subcontract',
        "MasterAgreement-S&VConstructionLLC.pdf" => 'Subcontract',
        "MasterAgreement-SmileAMile.pdf" => 'Subcontract',
        "MasterAgreement-TerrebonneElectric.pdf" => 'Subcontract',
        "MasterAgreement-ThadMHerberPainting.pdf" => 'Subcontract',
        "MasterAgreement-TraceyHannanConcrete.pdf" => 'Subcontract',
        "MasterAgreement-TravisVailConstruction.pdf" => 'Subcontract',
        "MasterAgreement-QualityBuildersElectricInc.pdf" => 'Subcontract',
        "MasterAgreement-PendletonPlumbing.pdf" => 'Subcontract',
        "fwdquickupdatemastersubcontractlist.zip" => 'Subcontract',
        "MasterAgreement-AmericanFencing.pdf" => 'Subcontract',
        "MasterAgreement-BradReisch.pdf" => 'Subcontract',
        "MasterAgreement-BruceHeating&Air.pdf" => 'Subcontract',
        "MasterAgreement-BudgetBlinds.pdf" => 'Subcontract',
        "MasterAgreement-C&CConstructionServices.pdf" => 'Subcontract',
        "MasterAgreement-DougHanson.pdf" => 'Subcontract',
        "MasterAgreement&Exhibits-DreamstoReality.pdf" => 'Subcontract',
        "MasterAgreement-DreamstoRealityConstruction.pdf" => 'Subcontract',
        "MasterAgreement-FredCarlsonJrElectricalCo.pdf" => 'Subcontract',
        "MasterAgreement-HermistonCleaningServicesLLC.pdf" => 'Subcontract',
        "MasterAgreement-HomeInsulation.pdf" => 'Subcontract',
        "MasterAgreement-IntermountainWest.pdf" => 'Subcontract',
        "MasterAgreement&Insurance-JMadrigalConcrete.pdf" => 'Subcontract',
        "MasterAgreement-LegacyDrywall.doc.pdf" => 'Subcontract',
        "Mastersubcontractoragreement-MartinsConstruction.pdf" => 'Subcontract',
        "12-5-201606SiteWork-MillerExcavatingMasterAgreement.pdf" => 'Subcontract',
        "MasterAgreement-MrInsulation.pdf" => 'Subcontract',
        "MasterAgreement-RockHardGranite.pdf" => 'Subcontract',
        "MasterSubContract-TBar.pdf" => 'Subcontract',
        "GlassNookNewSubPacket.pdf" => 'Subcontract',
        "MasterAgreement-VescoLandscaping.pdf" => 'Subcontract',
        "SubcontractorMasterAgreement-CleaningwithDavis,LLC.pdf" => 'Subcontract',
        "MasterAgreement-JZDConstruction.pdf" => 'Subcontract',
        "Huntwood-CCBLicense.pdf" => 'Subcontract CCB',
        "CCBLicense-VasquezConstructionCompany.pdf" => 'Subcontract CCB',
        "CCBLicense-CentralOregonGarageDoor.pdf" => 'Subcontract CCB',
        "CCBLicense-WaterWaysPlumbing.pdf" => 'Subcontract CCB',
        "CCB-PerformanceInsulation.pdf" => 'Subcontract CCB',
        "CCBLicenseTri-CountyClimate.pdf" => 'Subcontract CCB',
        "CCBLicense-AllSystems.pdf" => 'Subcontract CCB',
        "CCB-CGBrothers.pdf" => 'Subcontract CCB',
        "CCB-IntemperieConstruction.pdf" => 'Subcontract CCB',
        "CCB-M&DGutter's.pdf" => 'Subcontract CCB',
        "CCB-SageCreekConcrete.pdf" => 'Subcontract CCB',
        "CCB-Soneli.pdf" => 'Subcontract CCB',
        "CCBLicense-WestCoastTubRepair.pdf" => 'Subcontract CCB',
        "CCB-WillieFarias.pdf" => 'Subcontract CCB',
        "AxisEnterprisesCCBLicense(front).jpeg" => 'Subcontract CCB',
        "AxisEnterprisesCCBLicense(back).jpeg" => 'Subcontract CCB',
        "EcoPlusPaintingCCBLicense.pdf" => 'Subcontract CCB',
        "EcoPlusPaintingCCBCertificate.pdf" => 'Subcontract CCB',
        "CCBLicense2-TraceyHannanConcrete.JPG" => 'Subcontract CCB',
        "CCBLicense1-TraceyHannanConcrete.JPG" => 'Subcontract CCB',
        "CCBLicensepdf.pdf" => 'Subcontract CCB',
        "CCBCard.JPG" => 'Subcontract CCB',
        "CCBCertificate.JPG" => 'Subcontract CCB',
        "MartinsConstruction-CCBLicense.jpg" => 'Subcontract CCB',
        "CCBLicense-TBar.pdf" => 'Subcontract CCB',
        "CCB-AldenPlumbing.pdf" => 'Subcontract CCB',
        "CCBLicense-RoundUpCityPlumbing.pdf" => 'Subcontract CCB',
        "CCB-GamancheLandscaping.pdf" => 'Subcontract CCB',
        "ContactCard.jpg" => 'Subcontract',
        "Huntwood-BlanketAIFormCGD2460805.pdf" => 'Subcontract',
        "Huntwood-AutoAIWOSCAT4710215.pdf" => 'Sub Insurance',
        "Huntwood-ExtendedGeneralLiability.pdf" => 'Sub Insurance',
        "Huntwood-GeneralLiability.pdf" => 'Subcontract Information Form',
        "Huntwood-SubcontractorInfoForm.pdf" => 'Subcontract',
        "Huntwood-W9.pdf" => 'Subcontract',
        "NewSubcontractorPacket-docusigned.pdf" => 'Subcontract',
        "CortesConstructionBusinessCard.pdf" => 'Subcontract',
        "Workers'Comp.-VasquezConstructionCompany.pdf" => 'Subcontract',
        "NewVendorInformation-CentralOregonGarageDoor.pdf" => 'Subcontract',
        "LiabilityBroadenedEndorsement-CentralOregonGarageDoor.pdf" => 'Sub Insurance',
        "W-9-CentralOregonGarageDoor.pdf" => 'Subcontract',
        "GeneralLiabilityExtension-Mike'sMobileMix.PDF" => 'Sub Insurance',
        "Pricing-Mike'sMobileMix.pdf" => 'Subcontract',
        "Image2017-08-1012-59-23.jpeg" => 'Subcontract',
        "COI-Brundage-Bone.pdf" => 'Sub Insurance',
        "W-9-BrundageBone.pdf" => 'Subcontract',
        "CertofLiability-J&JGutters.pdf" => 'Sub Insurance',
        "Workers'CompCoverage-WaterWaysPlumbing.pdf" => 'Sub Insurance',
        "NewVendorInformation-WaterWaysPlumbing.pdf" => 'Subcontract',
        "W-9-WaterWaysPlumbing.pdf" => 'Subcontract',
        "Workman'sComp-PerformanceInsulation.pdf" => 'Sub Insurance',
        "ACCS2018-PricingIncrease.pdf" => 'Subcontract',
        "00ElectricalPricingandCalculator-AllSystems-8-30-17.xlsx" => 'Subcontract',
        "workerscomp-CGbrothers.pdf" => 'Sub Insurance',
        "CertofIns-CGBrother'sConstruction.PDF" => 'Sub Insurance',
        "DynamicBasePricing-ExibitBAttachment.pdf" => 'Subcontract',
        "NewSubcontractorPacket-Joe'sJanitorial.pdf" => 'Subcontract',
        "CertOfLiabilityIns-M&DGutters.pdf" => 'Sub Insurance',
        "Cert.ofLiability-SageCreek.pdf" => 'Sub Insurance',
        "ConcreteLabor.docx" => 'Subcontract',
        "CertofIns-SoneliConstruction.PDF" => 'Sub Insurance',
        "SparkleCleaningSpreadsheet.xlsx" => 'Subcontract',
        "Workman'sComp-4-01-2018.pdf" => 'Sub Insurance',
        "SubcontractorAgreement-2017.pdf" => 'Subcontract',
        "image1(1).JPG" => 'Subcontract',
        "ContractorsLicense.pdf" => 'Subcontract CCB',
        "Cert.ofLiability-TYMCleaningCustomz.pdf" => 'Subcontract',
        "TymCleaningcancnotice.pdf" => 'Subcontract',
        "Sub-Contractorchecklist-VortexPaintingLLC.pdf" => 'Subcontract',
        "VortexPainting-BusinessLicense.pdf" => 'Subcontract CCB',
        "VortexPainting-Workers'Comp..pdf" => 'Sub Insurance',
        "VortexPainting-W-9.pdf" => 'Subcontract',
        "VortextPainting-3-21-18.xlsx" => 'Subcontract',
        "W-9-WestCoastTubRepair.pdf" => 'Subcontract',
        "LettertoMVHomes.docx" => 'Subcontract',
        "Willieworkmanscompcert.pdf" => 'Sub Insurance',
        "Cert.ofLiability-WillieFarias.pdf" => 'Sub Insurance',
        "BusinessLicense-WillieFarias.pdf" => 'Subcontract CCB',
        "Cert.ofLiabilityIns.-BuildingSolutions.pdf" => 'Sub Insurance',
        "Endorsement-AdditionalInsured-Aarow,Inc..pdf" => 'Sub Insurance',
        "NewSubcontractorPacket-Aarow,Inc..pdf" => 'Subcontract',
        "Liability&Workman'sComp-AxisEnterprisesLLC.pdf" => 'Sub Insurance',
        "NewSubcontractorPacket-AxisEnterprisesLLC.pdf" => 'Subcontract',
        "W-9-Contractor'sCleaningCompany.pdf" => 'Subcontract',
        "JanitorialServiceBond-Contractor'sCleaningCompany.pdf" => 'Sub Insurance',
        "Workman'sComp-Contractor'sCleaningCompany.pdf" => 'Sub Insurance',
        "Image2017-04-0706-50-45.jpeg" => 'Subcontract',
        "Image2017-04-0706-50-33.jpeg" => 'Subcontract',
        "Image2017-04-0706-50-18.jpeg" => 'Subcontract',
        "W-9Completed.pdf" => 'Subcontract',
        "EcoPlusPaintingCertificateofLiability4-21-17.pdf" => 'Sub Insurance',
        "CertificateofLiability-NorthwestJobSiteMaintenance.pdf" => 'Sub Insurance',
        "Workman'sComp-TraceyHannanConcrete.pdf" => 'Sub Insurance',
        "PricingSpreadsheet5-05-17.pdf" => 'Subcontract',
        "CertificateofLiability.pdf" => 'Subcontract',
        "W9.pdf" => 'Subcontract',
        "SubcontractorInformation.pdf" => 'Subcontract',
        "PendletonPlumbingContractDocs.pdf" => 'Subcontract',
        "Bid-GowdyBros.pdf" => 'Subcontract',
        "Hawkin'sElectric&Ductless-Bid.html" => 'Subcontract',
        "CertificateofLiability8-23-17.PDF" => 'Sub Insurance',
        "SubcontractorAgreement5-1-17.pdf" => 'Subcontract',
        "P7-W-9form.pdf" => 'Subcontract',
        "P3-CloudCrest_SubInfo2014p3.pdf" => 'Subcontract',
        "03ExhibitC-InterimRelease(2016).pdf" => 'Subcontract',
        "MartinsConstruction-PowerofAttorney.jpg" => 'Subcontract',
        "DS-ScopeofWork-MillerandSons-RetainingWall12-12-16.pdf" => 'Subcontract',
        "DSMillerandSonsexcavating12-12-2016.pdf" => 'Subcontract',
        "12-5-2016-06-DesertShadowretainingwall.pdf" => 'Subcontract',
        "05SiteWorkScope-signed12-14-16.pdf" => 'Subcontract',
        "T-Barinfosheet.pdf" => 'Subcontract',
        "11-27-2016-62_-_Hydro_seeding.pdf" => 'Subcontract',
        "49_-_Exhibit_B_-_Washington_Green_-_(Hydroseed).pdf" => 'Subcontract',
        "11-27-2016-62-Hydroseeding.pdf" => 'Subcontract',
        "11-27-2016-62-Hydroseeding.doc" => 'Subcontract',
        "CertificateofLiabilityIns..pdf" => 'Sub Insurance',
        "WorkmansCompIns.pdf" => 'Sub Insurance',
        "WAContractorsLicense.pdf" => 'Subcontract CCB',
        "WGHInfoSheet.doc" => 'Subcontract',
        "BUSINESSINFORMATIONREQUESTFORM.docx" => 'Subcontract',
        "ORContractorsLicense.pdf" => 'Subcontract CCB',
        "W-92017.pdf" => 'Subcontract',
        "StateofWashingtonBusinessLicense.pdf" => 'Subcontract',
        "Businesslicense-AldenPlumbing.pdf" => 'Subcontract',
        "Workman'sComp-AldenPlumbing.pdf" => 'Sub Insurance',
        "COI-AldenPlumbing.pdf" => 'Subcontract',
        "Workman'sComp-Round-UpCityPlumbing.PDF" => 'Sub Insurance',
        "CertofIns-Round-UpCityPlumbing.PDF" => 'Sub Insurance',
        "DOCUSIGNTEST-docusigned.pdf" => 'Subcontract',
        "BusinessCertificateofOregon.pdf" => 'Subcontract CCB',
        "SW-PaintPricing7-24-17.pdf" => 'Subcontract',
    );
    if (array_key_exists(str_replace(' ', '', $attachment_name), $attachment_type_array)) {
        return $attachment_type_array[str_replace(' ', '', $attachment_name)];
    } else {
        //$GLOBALS['log']->fatal("inelsecase  :" . $attachment_name);
        return 'Subcontract';
    }
}

function getTradeType($trade_type) {
    $trade_type_array = array(
        'Appliances' => '^Appliances^',
        'Appliances/Windows' => '^Appliances^',
        'Assistant Manager' => '^Other^',
        'Blinds' => '^Blinds^',
        'Bookeeper/Office Manager' => '^Other^',
        'Cabinets' => '^Cabinets^',
        'Carpet, vinyl, ceramic, hardwood' => '^Flooring^,^Countertops^',
        'Civil, Structural, Elec Engineering, Surveying, Planning' => '^Engineering^',
        'Cleaner' => '^Cleaning^',
        'Cleaning' => '^Cleaning^',
        'Cleaning & Restoration' => '^Cleaning^',
        'Cleanup -interior and exterior' => '^Cleaning^',
        'Cloud Crest Homes' => '^Other^',
        'Concrete' => '^Foundations^,^Flatwork^',
        'Concrete Flatwork' => '^Flatwork^',
        'Concrete Flatwork & Foundations' => '^Foundations^,^Flatwork^',
        'Concrete forms & accessories' => '^Concrete Supply^',
        'Concrete Foundation' => '^Foundations^',
        'Concrete Materials' => '^Concrete Supply^',
        'Concrete Pumping' => '^Concrete Pumps^',
        'Concrete Supplier' => '^Concrete Supply^',
        'Concrete/excavating' => '^Foundations^,^Site Work^',
        'Concrete/Flatwork' => '^Flatwork^',
        'Concrete/Framing/Siding' => '^Concrete^,^Framing^,^Siding^',
        'Construction Clean Up' => '^Cleaning^',
        'Decks / Framing' => '^Decks^,^Framing^',
        'Development Associate' => '^Other^',
        'Director of Development' => '^Other^',
        'Doors / Windows' => '^Supply and Materials^',
        'Doors & Millwork' => '^Supply and Materials^',
        'Drywall' => '^Drywall^',
        'Electric/Utility' => '^Electric^',
        'Electrician' => '^Electric^',
        'Excavating' => '^SiteWork^',
        'Excavation' => '^SiteWork^',
        'Excavation / Foundation' => '^Foundations^,^Site Work^',
        'Excavation/Concrete' => '^Foundations^,^Site Work^',
        'Excavation/Concrete/Gen' => '^Foundations^,^Site Work^',
        'Excavator' => '^Site Work^',
        'Exterior Paint Mat/Lab, Interior Paint/Labor' => '^Painting^',
        'Fencing' => '^Fencing^',
        'Fencing & Misc' => '^Fencing^',
        'Fencing/Staining' => '^Painting^',
        'Final Clean' => '^Cleaning^',
        'Final/Site Cleaning' => '^Cleaning^',
        'Finish Carpenter' => '^Finish Carpentry^',
        'Finish Carpentry' => 'Finish Carpentry',
        'Fireplace Unit & HVAC/Piping' => '^HVAC^',
        'Flatwork / Framing' => '^Framing^,^Flatwork^',
        'Flatwork/Concrete' => '^Foundations^,^Flatwork^',
        'Flooring & Granite' => '^Flooring^,^Countertops^',
        'Foundation' => '^Foundations^',
        'Foundation & Flatwork Labor' => '^Foundations^,^Flatwork^',
        'Foundations / Flatwork' => '^Foundations^,^Flatwork^',
        'Foundations & Flatwork' => '^Foundations^,^Flatwork^',
        'Frame / Finish' => '^Framing^,^Finish Carpentry^',
        'Framer' => '^Framer^',
        'Framer / Sider' => '^Framer^,^Sider^',
        'Framing' => '^Framing^',
        'Framing / Siding / Jobsite Cleaning & Final Clean' => '^Framing^,^Siding^,^Cleaning^',
        'Framing Labor' => '^Framing^',
        'Framing/Painting' => '^Framing^,^Painting^',
        'Framing/Siding' => '^Framing^,^Siding^',
        'Framing/siding/decks' => '^Framing^,^Siding^,^Decks^',
        'Framing/Siding/Masonry' => '^Framing^,^Siding^,^Masonry^',
        'Garage Doors' => '^Garage Doors^',
        'Gas Piping' => '^HVAC^',
        'Glass shower doors/mirrors/millwork/bath & Door Hardware' => '',
        'Granite' => '^Counters^',
        'Gutters' => '^Gutters^',
        'Handyman' => '^Handyman^',
        'Hard Surfaces / Carpet' => '^Flooring^,^Counters^',
        'Hard Surfaces / Flooring' => '^Flooring^,^Counters^',
        'Hard Surfaces/Flooring' => '^Flooring^,^Counters^',
        'Home Repair Service' => '^Handyman^',
        'HVAC' => '^HVAC^',
        'Hydroseeding' => '^Landscaping^',
        'Insulation' => '^Insulation^',
        'Insulation / Bath Accessories' => '^Insulation^,^Bath Accessories^',
        'Insulation/not in use 2017' => '^Insulation^',
        'Job Site Clean Up' => '^Cleaning^',
        'Jobsite Cleaning & Final Finish' => '^Cleaning^',
        'Landscape/Irrigation' => '^Landscaping^',
        'Landscaper' => '^Landscaping^',
        'Landscaping' => '^Landscaping^',
        'landscaping/maintenance' => '^Landscaping^',
        'Lawn Mowing' => '^Landscaping Maintenance^',
        'Lighting' => '^Light FIxtures^',
        'Low Voltage' => '^Low Voltage^',
        'Lumber' => '^Supply and Materials^',
        'Lumber Supplier' => '^Supply and Materials^',
        'Marketing Coordinator' => '^Other^',
        'Mason' => '^Masonry^',
        'Masonry' => '^Masonry^',
        'Owner' => '^Other^',
        'Paint / Drywall' => '^Painting^,^Drywall^',
        'Paint Materials' => '^Supply and Materials^',
        'Painter' => '^Painting^',
        'Painter/Siding' => '^Painting^,^Siding^',
        'Painting' => '^Painting^',
        'Painting & Design' => '^Painting^',
        'Painting & Staining' => '^Painting^',
        'Permits and Inspections' => '',
        'Plan Review' => '',
        'Plumber' => '^Plumbing^',
        'Plumbing' => '^Plumbing^',
        'Plumbing, appliances, Cabinets, Irrigation, lighting' => '',
        'PM 2' => 'ShouldNot',
        'Project Manager' => '^Other^',
        'Purchasing Manager' => '^Other^',
        'Real Estate transaction coordinator/Principal Broker' => '^Other^',
        'Realtor - Bend' => '^Other^',
        'Realtor - Hermiston' => '^Other^',
        'Realtor-Bend/Redmond' => '^Other^',
        'Regional Sales Manager' => '^Other^',
        'Residential Framing and siding' => '^Framing^,^Siding^',
        'Roofer' => '^Roofing^',
        'Roofing' => '^Roofing^',
        'Roofing / Framing' => '^Roofing^,^Framing^',
        'Roofing Labor' => '^Roofing^',
        'Roofing Material' => '^Supply and Materials^',
        'Shirts and Embroidery' => '^Supply and Materials^',
        'Shower doors/mirrors' => '^Bath Accessories^',
        'Sider' => '^Siding^',
        'Siding' => '^Siding^',
        'Siding & Decking' => '^Siding^,^Decks^',
        'Siding Labor' => '^Siding^',
        'Siding/Framing/Finish Carpentry' => '^Siding^,^Framing^,^Finish Carpentry^',
        'Site Maintenance & Interior Clean' => '^Cleaning^',
        'Site Work/Development' => '^Site Work^',
        'Site Work/Excavation' => '^Site Work^',
        'Stone,brick, block, repairs' => '^Masonry^',
        'Store Manager' => '^Other^',
        'Streets and Right of Way' => '^Permits and Planning^',
        'Territory Manager' => '^Other^',
        'Trusses' => '^Trusses^',
        'Tub Repair' => '^Tub Repair^',
        'Utilities - Gas Company' => '^Utility Company^',
        'Utilities - Water Dept' => '^Utility Company^',
        'Utilities-Gas Company---Our houses are all 139000btu' => '^Utility Company^',
        'Whole House Vac' => '^Vac System^',
        'Window & Door' => '^Supply and Materials^',
        '' => '',
    );
    if (array_key_exists($trade_type, $trade_type_array)) {
        return $trade_type_array[$trade_type];
    } else {
        $GLOBALS['log']->fatal("inelsecasetrade" . $trade_type);
        return 'other';
    }
}

//to split first and last name in contacts
function split_name($name) {
    $last_name = '';
    $parts = explode(' ', $name);
    $names = array();
    $names['first_name'] = trim($parts[0]);
    array_shift($parts);
    $last_name = implode(' ', $parts);
    $names['last_name'] = $last_name;
    return $names;
}

//foreach ($account_found as $type) {
//    echo $type . "<br>";
//}
//echo "<br><br><br>" . "SuccessFull!" . "<br>";
//echo "SuccessFull!" . "<br>";
//echo "SuccessFull!" . "<br>";
//echo "SuccessFull!" . "<br><br><br>";
//foreach ($contact_found as $type) {
//    echo $type . "<br>";
//}
//
//
//echo "<br><br><br>account counter" . $account_counter . "contact counter" . $contact_counter;
//////echo "number of email are" . $counter . "array lenght" . count($Attachment_type) . "<br><br>";
////foreach ($Attachment_dtype as $type) {
////    $GLOBALS['log']->fatal($type);
//    echo $type . "<br>";
//}


//            if (empty($attachmenyt_type)) {
//                $GLOBALS['log']->fatal("empty1 attachment name");
//            } else {
//                $GLOBALS['log']->fatal("notempty " . $attachmenyt_type);
//            }