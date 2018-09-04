<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once('include/upload_file.php');
require_once('modules/Import/sources/ImportFile.php');
require_once('include/utils/sugar_file_utils.php');
$upload_dir_path = SugarConfig::getInstance()->get('upload_dir');
$filename = $upload_dir_path . 'builders_temp.csv';
$file_system = new Symfony\Component\Filesystem\Filesystem();

if (empty($_POST)) {
    $uploadFile = new UploadFile('excel');
    if (isset($_FILES['excel']) && $uploadFile->confirm_upload()) {
        $fileName = sprintf("builders_temp.csv");
        $fileUploaded = $uploadFile->final_move($fileName);
        if (!$fileUploaded) {
            return false;
        }
    } else {
        return false;
    }
    $importFile = new ImportFile("upload://builders_temp.csv", ',', '', false);
    $importFile->autoDetectCSVProperties();

    $hasHeaderRow = $importFile->hasHeaderRow();
    $headerColumns = $importFile->getHeaderColumns();
    $builder_names = array();
    $count = 0;
    while ($row = $importFile->getNextRow()) {
        $builder_names[$row[9]] = $count;
        $count++;
    }
    echo json_encode($builder_names);
    exit;
} else {
    $downloadfilePath = "upload/Builders.csv";
    $uploadFile = new UploadFile();
    $uploadFile->temp_file_location = $filename;
    $file_contents = $uploadFile->get_file_contents();

    $names = [];
    foreach ($_POST as $key => $value) {
        $value = htmlspecialchars_decode($value);

        if ($value != $key) {
            $arr = explode("=", $value);

            $key = $arr[1];
            $value = $arr[0];
            $names[$value][] = $key;
        }
    }
    foreach ($names as $key => $value) {
        rsort($value);
        $file_contents = str_replace($value, $key, $file_contents);
    }

    $file_system->dumpFile($downloadfilePath, $file_contents);
    $file_info = array("file_path" => $downloadfilePath);
    echo json_encode($file_info);
    exit;
}

    
