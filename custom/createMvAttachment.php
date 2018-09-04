<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once('include/upload_file.php');
require_once('modules/Import/sources/ImportFile.php');
require_once('include/utils/sugar_file_utils.php');

$upload_dir_path = SugarConfig::getInstance()->get('upload_dir');
$filename = $upload_dir_path . $_FILES['pdfFile']['name'];
$uploadFile = new UploadFile('pdfFile');

if (isset($_FILES['pdfFile']) && $uploadFile->confirm_upload()) {

    $attachment = new mv_Attachments();
    $attachment->document_name = $_FILES['pdfFile']['name'];
    $attachment->filename = $_FILES['pdfFile']['name'];
    $attachment->file_mime_type = 'application/pdf';
    $attachment->file_ext = "pdf";

    $attachment->parent_id = $_POST['parent_id'];
    $attachment->parent_type = $_POST['parent_module'];

    $attachment->save();

    $fileUploaded = $uploadFile->final_move($attachment->id);

    $docInfo->id = $attachment->id;
    $docInfo->name = $attachment->document_name;
    echo json_encode($docInfo);
    exit();
}