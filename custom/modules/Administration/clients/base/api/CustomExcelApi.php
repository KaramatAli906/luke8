<?php

class CustomExcelApi extends SugarApi {

    public function registerApiRest() {
        return array(
            'customDownloadFile' => array(
                'reqType' => 'GET',
                'noLoginRequired' => true,
                'path' => array('customdownloadfileexcel'),
                'pathVars' => array(),
                'method' => 'downloadExcelFile',
                'shortHelp' => 'This method Downloads a file',
                'longHelp' => '',
                'rawPostContents' => true,
        ));
    }

    public function downloadExcelFile($api, $args) {
        $filePath = "upload";
        $download = new DownloadFile();
        $file_name = $filePath . "/Builders.csv";


        $fileInfo = array(
            'name' => "Builders.csv",
            'path' => $file_name,
        );
        $download->outputFile(true, $fileInfo);
    }

}

