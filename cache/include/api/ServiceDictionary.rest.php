<?php
$apiDictionary['rest'] = array (
  4 => 
  array (
    'base' => 
    array (
      'POST' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveFilePost',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves a file. The file can be a new file or a file override.',
                  'longHelp' => 'include/api/help/module_record_file_field_post_help.html',
                  'file' => 'clients/base/api/FileApi.php',
                  'className' => 'FileApi',
                  'score' => 9.5,
                ),
              ),
            ),
            'link' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'link',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'link_name',
                  ),
                  'method' => 'createRelatedRecord',
                  'shortHelp' => 'Create a single record and relate it to this module',
                  'longHelp' => 'include/api/help/module_record_link_link_name_post_help.html',
                  'file' => 'clients/base/api/RelateRecordApi.php',
                  'className' => 'RelateRecordApi',
                  'score' => 9.5,
                ),
                1 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'link',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'link_name',
                  ),
                  'method' => 'createRelatedRecord',
                  'shortHelp' => 'Create a single record and relate it to this module',
                  'longHelp' => 'include/api/help/module_record_link_link_name_post_help.html',
                  'file' => 'custom/clients/base/api/CustomRelateRecordApi.php',
                  'className' => 'CustomRelateRecordApi',
                  'score' => 10.0,
                ),
              ),
            ),
          ),
          'temp' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => 'temp',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'temp',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveTempImagePost',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves an image to a temporary folder.',
                  'longHelp' => 'include/api/help/module_temp_file_field_post_help.html',
                  'file' => 'clients/base/api/FileTempApi.php',
                  'className' => 'FileTempApi',
                  'score' => 10.5,
                ),
              ),
            ),
          ),
        ),
        '?' => 
        array (
          '?' => 
          array (
            'customer-journey' => 
            array (
              'start-cycle' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => '?',
                    1 => '?',
                    2 => 'customer-journey',
                    3 => 'start-cycle',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                  ),
                  'method' => 'startCycle',
                  'shortHelp' => '',
                  'longHelp' => '',
                  'noEtag' => true,
                  'file' => 'modules/DRI_Workflows/clients/base/api/DRIWorkflowsApi.php',
                  'className' => 'DRIWorkflowsApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'Documents' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => 'Documents',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveFilePost',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves a file. The file can be a new file or a file override.',
                  'longHelp' => 'include/api/help/module_record_file_field_post_help.html',
                  'file' => 'modules/Documents/clients/base/api/DocumentsFileApi.php',
                  'className' => 'DocumentsFileApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'Administration' => 
        array (
          'elasticsearch' => 
          array (
            'refresh' => 
            array (
              'trigger' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => 'Administration',
                    1 => 'elasticsearch',
                    2 => 'refresh',
                    3 => 'trigger',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                  ),
                  'method' => 'elasticSearchRefreshTrigger',
                  'shortHelp' => 'Elasticsearch trigger an index refresh',
                  'longHelp' => 'include/api/help/administration_elasticsearch_refresh_trigger_post_help.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionNotAuthorized',
                    1 => 'SugarApiExceptionSearchUnavailable',
                  ),
                  'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                  'className' => 'AdministrationApi',
                  'score' => 12.25,
                ),
              ),
              'enable' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => 'Administration',
                    1 => 'elasticsearch',
                    2 => 'refresh',
                    3 => 'enable',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                  ),
                  'method' => 'elasticSearchRefreshEnable',
                  'shortHelp' => 'Elasticsearch enable index refresh',
                  'longHelp' => 'include/api/help/administration_elasticsearch_refresh_enable_post_help.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionNotAuthorized',
                    1 => 'SugarApiExceptionSearchUnavailable',
                  ),
                  'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                  'className' => 'AdministrationApi',
                  'score' => 12.25,
                ),
              ),
            ),
            'replicas' => 
            array (
              'enable' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => 'Administration',
                    1 => 'elasticsearch',
                    2 => 'replicas',
                    3 => 'enable',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                  ),
                  'method' => 'elasticSearchReplicasEnable',
                  'shortHelp' => 'Elasticsearch enable index replicas',
                  'longHelp' => 'include/api/help/administration_elasticsearch_replicas_enable_post_help.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionNotAuthorized',
                    1 => 'SugarApiExceptionSearchUnavailable',
                  ),
                  'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                  'className' => 'AdministrationApi',
                  'score' => 12.25,
                ),
              ),
            ),
          ),
          'idm' => 
          array (
            'migration' => 
            array (
              'enable' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => 'Administration',
                    1 => 'idm',
                    2 => 'migration',
                    3 => 'enable',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                  ),
                  'method' => 'enableIdmMigration',
                  'shortHelp' => 'Enable IDM api to perform migrations',
                  'longHelp' => 'include/api/help/administration_enable_idm_migrations_post_help.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionNotAuthorized',
                  ),
                  'minVersion' => '11.2',
                  'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                  'className' => 'AdministrationApi',
                  'score' => 12.25,
                ),
              ),
              'disable' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => 'Administration',
                    1 => 'idm',
                    2 => 'migration',
                    3 => 'disable',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                  ),
                  'method' => 'disableIdmMigration',
                  'shortHelp' => 'Disable IDM migrations',
                  'longHelp' => 'include/api/help/administration_disable_idm_migrations_post_help.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionNotAuthorized',
                  ),
                  'minVersion' => '11.2',
                  'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                  'className' => 'AdministrationApi',
                  'score' => 12.25,
                ),
              ),
            ),
          ),
        ),
        'EmbeddedFiles' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'POST',
                  'path' => 
                  array (
                    0 => 'EmbeddedFiles',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveFilePost',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves a file. The file can be a new file or a file override.',
                  'longHelp' => 'include/api/help/module_record_file_field_post_help.html',
                  'file' => 'modules/EmbeddedFiles/clients/base/api/EmbeddedFileApi.php',
                  'className' => 'EmbeddedFileApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'PUT',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveFilePut',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves a file. The file can be a new file or a file override. (This is an alias of the POST method save.)',
                  'longHelp' => 'include/api/help/module_record_file_field_put_help.html',
                  'file' => 'clients/base/api/FileApi.php',
                  'className' => 'FileApi',
                  'score' => 9.5,
                ),
              ),
            ),
            'movebefore' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'PUT',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'movebefore',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => 'movebefore',
                    3 => 'target',
                  ),
                  'method' => 'moveBefore',
                  'shortHelp' => 'This method record as previous sibling of target',
                  'longHelp' => 'modules/Categories/clients/base/api/help/tree_put_movebefore_help.html',
                  'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                  'className' => 'TreeApi',
                  'score' => 9.5,
                ),
              ),
            ),
            'moveafter' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'PUT',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'moveafter',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => 'moveafter',
                    3 => 'target',
                  ),
                  'method' => 'moveAfter',
                  'shortHelp' => 'This method record as next sibling of target',
                  'longHelp' => 'modules/Categories/clients/base/api/help/tree_put_moveafter_help.html',
                  'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                  'className' => 'TreeApi',
                  'score' => 9.5,
                ),
              ),
            ),
            'movefirst' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'PUT',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'movefirst',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => 'movefirst',
                    3 => 'target',
                  ),
                  'method' => 'moveFirst',
                  'shortHelp' => 'This method record as first child of target',
                  'longHelp' => 'modules/Categories/clients/base/api/help/tree_put_movefirst_help.html',
                  'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                  'className' => 'TreeApi',
                  'score' => 9.5,
                ),
              ),
            ),
            'movelast' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'PUT',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'movelast',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => 'movelast',
                    3 => 'target',
                  ),
                  'method' => 'moveLast',
                  'shortHelp' => 'This method record as last child of target',
                  'longHelp' => 'modules/Categories/clients/base/api/help/tree_put_movelast_help.html',
                  'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                  'className' => 'TreeApi',
                  'score' => 9.5,
                ),
              ),
            ),
          ),
        ),
        'Documents' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'PUT',
                  'path' => 
                  array (
                    0 => 'Documents',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveFilePut',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves a file. The file can be a new file or a file override. (This is an alias of the POST method save.)',
                  'longHelp' => 'include/api/help/module_record_file_field_put_help.html',
                  'file' => 'modules/Documents/clients/base/api/DocumentsFileApi.php',
                  'className' => 'DocumentsFileApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'pmse_Project' => 
        array (
          'CrmData' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'PUT',
                  'path' => 
                  array (
                    0 => 'pmse_Project',
                    1 => 'CrmData',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => 'record',
                    3 => 'filter',
                  ),
                  'method' => 'putCrmData',
                  'acl' => 'create',
                  'shortHelp' => 'Updates information about Fields, Modules, Users, Roles, etc.',
                  'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_crm_data_put_help.html',
                  'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                  'className' => 'PMSEProjectApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'EmbeddedFiles' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'PUT',
                  'path' => 
                  array (
                    0 => 'EmbeddedFiles',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'saveFilePut',
                  'rawPostContents' => true,
                  'shortHelp' => 'Saves a file. The file can be a new file or a file override.
                    (This is an alias of the POST method save.)',
                  'longHelp' => 'include/api/help/module_record_file_field_put_help.html',
                  'file' => 'modules/EmbeddedFiles/clients/base/api/EmbeddedFileApi.php',
                  'className' => 'EmbeddedFileApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
      ),
      'GET' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'getFile',
                  'rawReply' => true,
                  'allowDownloadCookie' => true,
                  'shortHelp' => 'Gets the contents of a single file related to a field for a module record.',
                  'longHelp' => 'include/api/help/module_record_file_field_get_help.html',
                  'file' => 'clients/base/api/FileApi.php',
                  'className' => 'FileApi',
                  'score' => 9.5,
                ),
              ),
            ),
            'link' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'link',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'link_name',
                  ),
                  'jsonParams' => 
                  array (
                    0 => 'filter',
                  ),
                  'method' => 'filterRelated',
                  'shortHelp' => 'Lists related records.',
                  'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                  'file' => 'clients/base/api/RelateApi.php',
                  'className' => 'RelateApi',
                  'score' => 9.5,
                ),
              ),
              'signed_copies' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'link',
                    3 => 'signed_copies',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => 'link',
                    3 => 'link_name',
                  ),
                  'jsonParams' => 
                  array (
                    0 => 'filter',
                  ),
                  'method' => 'signedCopies',
                  'shortHelp' => 'Lists related records.',
                  'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                  'file' => 'custom/clients/base/api/SignedCopiesApi.php',
                  'className' => 'SignedCopiesApi',
                  'score' => 11.0,
                ),
              ),
              'activities' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'link',
                    3 => 'activities',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                  ),
                  'method' => 'getRecordActivities',
                  'shortHelp' => 'This method retrieves a record\'s activities',
                  'longHelp' => 'modules/ActivityStream/clients/base/api/help/recordActivities.html',
                  'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
                  'className' => 'ActivitiesApi',
                  'score' => 10.5,
                ),
              ),
              'history' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'link',
                    3 => 'history',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                  ),
                  'method' => 'filterModuleList',
                  'jsonParams' => 
                  array (
                    0 => 'filter',
                  ),
                  'shortHelp' => 'Get the history records for a specific record',
                  'longHelp' => 'include/api/help/history_filter.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionInvalidParameter',
                    1 => 'SugarApiExceptionNotAuthorized',
                  ),
                  'file' => 'modules/History/clients/base/api/HistoryApi.php',
                  'className' => 'HistoryApi',
                  'score' => 10.5,
                ),
              ),
            ),
            'collection' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'collection',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'collection_name',
                  ),
                  'method' => 'getCollection',
                  'shortHelp' => 'Lists collection records.',
                  'longHelp' => 'include/api/help/module_record_collection_collection_name_get_help.html',
                  'file' => 'clients/base/api/RelateCollectionApi.php',
                  'className' => 'RelateCollectionApi',
                  'score' => 9.5,
                ),
              ),
            ),
            'tree' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'tree',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'link_name',
                  ),
                  'method' => 'filterSubTree',
                  'exception' => 
                  array (
                    0 => 'SugarApiExceptionInvalidParameter',
                    1 => 'SugarApiExceptionNotAuthorized',
                    2 => 'SugarApiExceptionNotFound',
                  ),
                  'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                  'className' => 'TreeApi',
                  'score' => 9.5,
                ),
              ),
            ),
          ),
          'chart' => 
          array (
            'pipeline' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => 'chart',
                    2 => 'pipeline',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => '',
                    3 => 'timeperiod_id',
                  ),
                  'method' => 'pipeline',
                  'shortHelp' => 'Get the current opportunity pipeline data for a specific timeperiod',
                  'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                  'file' => 'clients/base/api/PipelineChartApi.php',
                  'className' => 'PipelineChartApi',
                  'score' => 10.5,
                ),
              ),
            ),
          ),
        ),
        'pmse_Inbox' => 
        array (
          'ReassignForm' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'pmse_Inbox',
                    1 => 'ReassignForm',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => 'data',
                    3 => 'flowId',
                  ),
                  'method' => 'getReassign',
                  'keepSession' => true,
                  'shortHelp' => 'Retrieve information for Assign to new user window. DEPRECATED',
                  'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_deprecate.html',
                  'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
                  'className' => 'PMSEEngineApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
          'AdhocReassign' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'pmse_Inbox',
                    1 => 'AdhocReassign',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => 'data',
                    3 => 'flowId',
                  ),
                  'method' => 'getAdhoc',
                  'keepSession' => true,
                  'shortHelp' => 'Retrieve information for Change Process User window. DEPRECATED',
                  'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_deprecate.html',
                  'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
                  'className' => 'PMSEEngineApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
          'case' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'pmse_Inbox',
                    1 => 'case',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'case',
                    2 => 'id',
                    3 => 'idflow',
                  ),
                  'method' => 'selectCase',
                  'keepSession' => true,
                  'shortHelp' => 'Retrieve information of the process record',
                  'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_select_case_help.html',
                  'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
                  'className' => 'PMSEEngineApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
          'caseRecord' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'pmse_Inbox',
                    1 => 'caseRecord',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                    1 => '',
                    2 => 'module',
                    3 => 'record',
                  ),
                  'method' => 'getCaseRecord',
                  'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
                  'className' => 'PMSEEngineApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'pmse_Inbox',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'getFile',
                  'rawReply' => true,
                  'allowDownloadCookie' => true,
                  'shortHelp' => 'Returns the process status image file',
                  'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_get_file_help.html',
                  'file' => 'modules/pmse_Inbox/clients/base/api/PMSEImageGeneratorApi.php',
                  'className' => 'PMSEImageGeneratorApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'pmse_Project' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'pmse_Project',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'getProjectFile',
                  'rawReply' => true,
                  'allowDownloadCookie' => true,
                  'file' => 'modules/pmse_Inbox/clients/base/api/PMSEImageGeneratorApi.php',
                  'className' => 'PMSEImageGeneratorApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
          'CrmData' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'pmse_Project',
                    1 => 'CrmData',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => 'data',
                    3 => 'filter',
                  ),
                  'method' => 'getCrmData',
                  'acl' => 'view',
                  'shortHelp' => 'Retrieves information about Fields, Modules, Users, Roles, etc.',
                  'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_crm_data_get_help.html',
                  'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                  'className' => 'PMSEProjectApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        '?' => 
        array (
          '?' => 
          array (
            'customer-journey' => 
            array (
              'chart-data' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => '?',
                    1 => '?',
                    2 => 'customer-journey',
                    3 => 'chart-data',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                  ),
                  'method' => 'chartData',
                  'shortHelp' => '',
                  'longHelp' => '',
                  'noEtag' => true,
                  'file' => 'modules/DRI_Workflows/clients/base/api/DRIWorkflowsApi.php',
                  'className' => 'DRIWorkflowsApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'DRI_Workflow_Templates' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              'dri_subworkflow_templates' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'DRI_Workflow_Templates',
                    1 => '?',
                    2 => 'link',
                    3 => 'dri_subworkflow_templates',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'link_name',
                  ),
                  'jsonParams' => 
                  array (
                    0 => 'filter',
                  ),
                  'method' => 'filterRelated',
                  'shortHelp' => 'Lists related records.',
                  'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                  'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRIWorkflowTemplatesRelateApi.php',
                  'className' => 'DRIWorkflowTemplatesRelateApi',
                  'score' => 11.25,
                ),
              ),
            ),
          ),
        ),
        'ops_Backups' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'ops_Backups',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'download',
                  'shortHelp' => 'Retrieves the URL to download the specified backup record',
                  'longHelp' => '',
                  'file' => 'modules/ops_Backups/clients/base/api/DownloadApi.php',
                  'className' => 'DownloadApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'ForecastManagerWorksheets' => 
        array (
          'chart' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'ForecastManagerWorksheets',
                    1 => 'chart',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => 'timeperiod_id',
                    3 => 'user_id',
                  ),
                  'method' => 'forecastManagerWorksheetsChartGet',
                  'jsonParams' => 
                  array (
                  ),
                  'shortHelp' => 'Filter records and reformat data for chart presentation',
                  'longHelp' => 'modules/Forecasts/clients/base/api/help/forecastManagerWorksheetsChartGet.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionError',
                    1 => 'SugarApiExceptionInvalidParameter',
                    2 => 'SugarApiExceptionNotAuthorized',
                    3 => 'SugarApiExceptionNotFound',
                  ),
                  'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
                  'className' => 'ForecastManagerWorksheetsFilterApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'Administration' => 
        array (
          'elasticsearch' => 
          array (
            'refresh' => 
            array (
              'status' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'Administration',
                    1 => 'elasticsearch',
                    2 => 'refresh',
                    3 => 'status',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                  ),
                  'method' => 'elasticSearchRefreshStatus',
                  'shortHelp' => 'Elasticsearch index refresh status',
                  'longHelp' => 'include/api/help/administration_elasticsearch_refresh_status_get_help.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionNotAuthorized',
                    1 => 'SugarApiExceptionSearchUnavailable',
                  ),
                  'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                  'className' => 'AdministrationApi',
                  'score' => 12.25,
                ),
              ),
            ),
            'replicas' => 
            array (
              'status' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'Administration',
                    1 => 'elasticsearch',
                    2 => 'replicas',
                    3 => 'status',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                  ),
                  'method' => 'elasticSearchReplicasStatus',
                  'shortHelp' => 'Elasticsearch index replica status',
                  'longHelp' => 'include/api/help/administration_elasticsearch_replicas_status_get_help.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionNotAuthorized',
                    1 => 'SugarApiExceptionSearchUnavailable',
                  ),
                  'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                  'className' => 'AdministrationApi',
                  'score' => 12.25,
                ),
              ),
            ),
          ),
        ),
        'Forecasts' => 
        array (
          '?' => 
          array (
            'progressRep' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'Forecasts',
                    1 => '?',
                    2 => 'progressRep',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                    1 => 'timeperiod_id',
                    2 => '',
                    3 => 'user_id',
                  ),
                  'method' => 'progressRep',
                  'shortHelp' => 'Projected Rep data',
                  'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastProgressRepApi.html',
                  'file' => 'modules/Forecasts/clients/base/api/ForecastsProgressApi.php',
                  'className' => 'ForecastsProgressApi',
                  'score' => 10.25,
                ),
              ),
            ),
            'progressManager' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'Forecasts',
                    1 => '?',
                    2 => 'progressManager',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => '',
                    1 => 'timeperiod_id',
                    2 => '',
                    3 => 'user_id',
                  ),
                  'method' => 'progressManager',
                  'shortHelp' => 'Progress Manager data',
                  'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastProgressManagerApi.html',
                  'file' => 'modules/Forecasts/clients/base/api/ForecastsProgressApi.php',
                  'className' => 'ForecastsProgressApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'ForecastWorksheets' => 
        array (
          'chart' => 
          array (
            '?' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'ForecastWorksheets',
                    1 => 'chart',
                    2 => '?',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => '',
                    2 => 'timeperiod_id',
                    3 => 'user_id',
                  ),
                  'method' => 'forecastWorksheetsChartGet',
                  'jsonParams' => 
                  array (
                  ),
                  'shortHelp' => 'Filter records and reformat data for chart presentation',
                  'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsWorksheetChartGet.html',
                  'exceptions' => 
                  array (
                    0 => 'SugarApiExceptionError',
                    1 => 'SugarApiExceptionInvalidParameter',
                    2 => 'SugarApiExceptionNotAuthorized',
                    3 => 'SugarApiExceptionNotFound',
                  ),
                  'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
                  'className' => 'ForecastWorksheetsFilterApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
        'DRI_SubWorkflow_Templates' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              'dri_workflow_task_templates' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'DRI_SubWorkflow_Templates',
                    1 => '?',
                    2 => 'link',
                    3 => 'dri_workflow_task_templates',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'link_name',
                  ),
                  'jsonParams' => 
                  array (
                    0 => 'filter',
                  ),
                  'method' => 'filterRelated',
                  'shortHelp' => 'Lists related records.',
                  'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                  'file' => 'modules/DRI_SubWorkflow_Templates/clients/base/api/DRISubWorkflowTemplatesRelateApi.php',
                  'className' => 'DRISubWorkflowTemplatesRelateApi',
                  'score' => 11.25,
                ),
              ),
            ),
          ),
        ),
        'EmbeddedFiles' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'GET',
                  'path' => 
                  array (
                    0 => 'EmbeddedFiles',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'getFile',
                  'rawReply' => true,
                  'allowDownloadCookie' => true,
                  'shortHelp' => 'Gets the contents of a single file related to a field for a module record.',
                  'longHelp' => 'include/api/help/module_record_file_field_get_help.html',
                  'noLoginRequired' => true,
                  'file' => 'modules/EmbeddedFiles/clients/base/api/EmbeddedFileApi.php',
                  'className' => 'EmbeddedFileApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
      ),
      'DELETE' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'DELETE',
                  'path' => 
                  array (
                    0 => '<module>',
                    1 => '?',
                    2 => 'file',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'record',
                    2 => '',
                    3 => 'field',
                  ),
                  'method' => 'removeFile',
                  'rawPostContents' => true,
                  'shortHelp' => 'Removes a file from a field.',
                  'longHelp' => 'include/api/help/module_record_file_field_delete_help.html',
                  'file' => 'clients/base/api/FileApi.php',
                  'className' => 'FileApi',
                  'score' => 9.5,
                ),
              ),
            ),
          ),
        ),
        'Filters' => 
        array (
          '?' => 
          array (
            'used' => 
            array (
              '?' => 
              array (
                0 => 
                array (
                  'reqType' => 'DELETE',
                  'path' => 
                  array (
                    0 => 'Filters',
                    1 => '?',
                    2 => 'used',
                    3 => '?',
                  ),
                  'pathVars' => 
                  array (
                    0 => 'module',
                    1 => 'module_name',
                    2 => 'used',
                    3 => 'record',
                  ),
                  'method' => 'deleteUsed',
                  'shortHelp' => 'This method deletes the used filter for the current user',
                  'longHelp' => '',
                  'file' => 'modules/Filters/clients/base/api/PreviouslyUsedFiltersApi.php',
                  'className' => 'PreviouslyUsedFiltersApi',
                  'score' => 10.25,
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'base' => 
    array (
      'GET' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'file' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'file',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getFileList',
                'shortHelp' => 'Gets a listing of files related to a field for a module record.',
                'longHelp' => 'include/api/help/module_record_file_get_help.html',
                'file' => 'clients/base/api/FileApi.php',
                'className' => 'FileApi',
                'score' => 8.75,
              ),
            ),
            'pii' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'pii',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'pii',
                ),
                'minVersion' => '11.1',
                'method' => 'getPiiFields',
                'shortHelp' => 'Returns pii fields',
                'longHelp' => 'include/api/help/module_record_pii_help.html',
                'file' => 'clients/base/api/ModuleApi.php',
                'className' => 'ModuleApi',
                'score' => 8.75,
              ),
            ),
            'vcard' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'vcard',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'vCardDownload',
                'rawReply' => true,
                'allowDownloadCookie' => true,
                'shortHelp' => 'An API to download a contact as a vCard.',
                'longHelp' => 'include/api/help/module_vcarddownload_get_help.html',
                'file' => 'clients/base/api/vCardApi.php',
                'className' => 'vCardApi',
                'score' => 8.75,
              ),
            ),
            'tree' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'tree',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'root',
                  2 => '',
                ),
                'method' => 'tree',
                'noEtag' => true,
                'shortHelp' => 'This method returns formatted tree for selected root',
                'longHelp' => 'modules/Categories/clients/base/api/help/tree_get_tree_help.html',
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
            'children' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'children',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'children',
                'shortHelp' => 'This method returns children categories for selected record',
                'longHelp' => 'modules/Categories/clients/base/api/help/tree_get_children_help.html',
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
            'next' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'next',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'next',
                'shortHelp' => 'This method returns next sibling of selected record',
                'longHelp' => 'modules/Categories/clients/base/api/help/tree_get_next_help.html',
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
            'prev' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'prev',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'prev',
                'shortHelp' => 'This method returns previous sibling of selected record',
                'longHelp' => 'modules/Categories/clients/base/api/help/tree_get_prev_help.html',
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
            'parent' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'parent',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getParent',
                'shortHelp' => 'This method returns parent node of selected record',
                'longHelp' => 'modules/Categories/clients/base/api/help/tree_get_parent_help.html',
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
            'path' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'path',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'path',
                'shortHelp' => 'This method returns full path of selected record',
                'longHelp' => 'modules/Categories/clients/base/api/help/tree_get_path_help.html',
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
            'audit' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'audit',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'audit',
                ),
                'method' => 'viewChangeLog',
                'shortHelp' => 'View audit log in record view',
                'longHelp' => 'include/api/help/audit_get_help.html',
                'file' => 'modules/Audit/clients/base/api/AuditApi.php',
                'className' => 'AuditApi',
                'score' => 8.75,
              ),
            ),
          ),
          'chart' => 
          array (
            'pipeline' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'chart',
                  2 => 'pipeline',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'pipeline',
                'shortHelp' => 'Get the current opportunity pipeline data for the current timeperiod',
                'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                'file' => 'clients/base/api/PipelineChartApi.php',
                'className' => 'PipelineChartApi',
                'score' => 9.75,
              ),
            ),
          ),
          'enum' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'enum',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'enum',
                  2 => 'field',
                ),
                'method' => 'getEnumValues',
                'shortHelp' => 'This method returns enum values for a specified field',
                'longHelp' => 'include/api/help/module_enum_get_help.html',
                'file' => 'clients/base/api/ModuleApi.php',
                'className' => 'ModuleApi',
                'score' => 8.75,
              ),
            ),
          ),
          'record_list' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'record_list',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record_list_id',
                ),
                'method' => 'recordListGet',
                'shortHelp' => 'An API to fetch a previously created record list',
                'longHelp' => 'include/api/help/module_recordlist_get.html',
                'file' => 'clients/base/api/RecordListApi.php',
                'className' => 'RecordListApi',
                'score' => 8.75,
              ),
            ),
          ),
          'export' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'export',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record_list_id',
                ),
                'method' => 'export',
                'rawReply' => true,
                'allowDownloadCookie' => true,
                'shortHelp' => 'Returns a record set in CSV format along with HTTP headers to indicate content type.',
                'longHelp' => 'include/api/help/module_export_get_help.html',
                'file' => 'clients/base/api/ExportApi.php',
                'className' => 'ExportApi',
                'score' => 8.75,
              ),
            ),
          ),
          'filter' => 
          array (
            'count' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'filter',
                  2 => 'count',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'getFilterListCount',
                'shortHelp' => 'Lists filtered records.',
                'longHelp' => 'include/api/help/module_filter_post_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionError',
                  2 => 'SugarApiExceptionNotAuthorized',
                  3 => 'SugarApiExceptionInvalidParameter',
                ),
                'file' => 'clients/base/api/FilterApi.php',
                'className' => 'FilterApi',
                'score' => 9.75,
              ),
            ),
          ),
          'tree' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'tree',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'link_name',
                ),
                'method' => 'filterTree',
                'exception' => 
                array (
                  0 => 'SugarApiExceptionInvalidParameter',
                  1 => 'SugarApiExceptionNotAuthorized',
                  2 => 'SugarApiExceptionNotFound',
                ),
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
          ),
          'Activities' => 
          array (
            'filter' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'Activities',
                  2 => 'filter',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                ),
                'method' => 'getModuleActivities',
                'shortHelp' => 'This method retrieves a filtered list of a module\'s activities',
                'longHelp' => 'modules/ActivityStream/clients/base/api/help/moduleActivities.html',
                'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
                'className' => 'ActivitiesApi',
                'score' => 9.75,
              ),
            ),
          ),
        ),
        'connector' => 
        array (
          'twitter' => 
          array (
            'currentUser' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'connector',
                  1 => 'twitter',
                  2 => 'currentUser',
                ),
                'pathVars' => 
                array (
                  0 => 'connector',
                  1 => 'module',
                  2 => 'twitterId',
                ),
                'method' => 'getCurrentUser',
                'shortHelp' => 'Gets current tweets for a user',
                'longHelp' => 'include/api/help/twitter_get_help.html',
                'file' => 'clients/base/api/TwitterApi.php',
                'className' => 'TwitterApi',
                'score' => 10.5,
              ),
            ),
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'connector',
                  1 => 'twitter',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'connector',
                  1 => 'module',
                  2 => 'twitterId',
                ),
                'method' => 'getTweets',
                'shortHelp' => 'Gets current tweets for a user',
                'longHelp' => 'include/api/help/twitter_get_help.html',
                'file' => 'clients/base/api/TwitterApi.php',
                'className' => 'TwitterApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreference',
                'shortHelp' => 'Returns a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_get_help.html',
                'file' => 'clients/base/api/CurrentUserApi.php',
                'className' => 'CurrentUserApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'lang' => 
        array (
          'public' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'lang',
                  1 => 'public',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'lang',
                ),
                'method' => 'getPublicLanguage',
                'shortHelp' => 'Returns the public labels for the application',
                'longHelp' => 'include/api/html/metadata_all_help.html',
                'noLoginRequired' => true,
                'rawReply' => true,
                'noEtag' => true,
                'ignoreMetaHash' => true,
                'ignoreSystemStatusError' => true,
                'file' => 'clients/base/api/MetadataApi.php',
                'className' => 'MetadataApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'collection' => 
        array (
          '?' => 
          array (
            'count' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'collection',
                  1 => '?',
                  2 => 'count',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => 'collection_name',
                  2 => '',
                ),
                'method' => 'getCollectionCount',
                'shortHelp' => 'Counts collection records.',
                'longHelp' => 'include/api/help/collection_collection_name_count_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionError',
                  2 => 'SugarApiExceptionNotAuthorized',
                ),
                'file' => 'clients/base/api/ModuleCollectionApi.php',
                'className' => 'ModuleCollectionApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'get_mailchimp_lists' => 
        array (
          '?' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'get_mailchimp_lists',
                  1 => '?',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => 'module',
                  2 => 'id',
                ),
                'method' => 'getMailchimpLists',
                'file' => 'custom/clients/base/api/MailChimpListsApi.php',
                'className' => 'MailChimpListsApi',
                'score' => 9.0,
              ),
            ),
          ),
        ),
        'ExpressionEngine' => 
        array (
          '?' => 
          array (
            'related' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ExpressionEngine',
                  1 => '?',
                  2 => 'related',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getRelatedValues',
                'shortHelp' => 'Retrieve the Chart data for the given data in the Forecast Module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastChartApi.html',
                'file' => 'modules/ExpressionEngine/clients/base/api/RelatedValueApi.php',
                'className' => 'RelatedValueApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'pmse_Inbox' => 
        array (
          'historyLog' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Inbox',
                  1 => 'historyLog',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'filter',
                ),
                'method' => 'retrieveHistoryLog',
                'keepSession' => true,
                'shortHelp' => 'Returns the history log for a process',
                'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_retrieve_history_log_help.html',
                'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
                'className' => 'PMSEEngineApi',
                'score' => 9.5,
              ),
            ),
          ),
          'note_list' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Inbox',
                  1 => 'note_list',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'cas_id',
                ),
                'method' => 'getNotes',
                'keepSession' => true,
                'shortHelp' => 'Returns the notes list for a process',
                'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_get_notes_help.html',
                'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
                'className' => 'PMSEEngineApi',
                'score' => 9.5,
              ),
            ),
          ),
          'changeCaseUser' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Inbox',
                  1 => 'changeCaseUser',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'cas_id',
                ),
                'method' => 'changeCaseUser',
                'keepSession' => true,
                'shortHelp' => 'Retrieve information for Change Process User window. DEPRECATED',
                'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_deprecate.html',
                'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
                'className' => 'PMSEEngineApi',
                'score' => 9.5,
              ),
            ),
          ),
          'userListByTeam' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Inbox',
                  1 => 'userListByTeam',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'id',
                ),
                'method' => 'userListByTeam',
                'keepSession' => true,
                'shortHelp' => 'Retrieve users associated to a Team. DEPRECATED',
                'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_deprecate.html',
                'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
                'className' => 'PMSEEngineApi',
                'score' => 9.5,
              ),
            ),
          ),
          'reassignFlows' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Inbox',
                  1 => 'reassignFlows',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record',
                ),
                'jsonParams' => 
                array (
                  0 => 'filter',
                ),
                'method' => 'getReassignFlows',
                'keepSession' => true,
                'acl' => 'adminOrDev',
                'shortHelp' => 'Retrieve information to reassign processes',
                'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_get_reassign_flows_help.html',
                'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
                'className' => 'PMSEEngineApi',
                'score' => 9.5,
              ),
            ),
          ),
          'processUsersChart' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Inbox',
                  1 => 'processUsersChart',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'filter',
                ),
                'method' => 'returnProcessUsersChart',
                'acl' => 'adminOrDev',
                'file' => 'modules/pmse_Inbox/clients/base/api/PMSECasesListApi.php',
                'className' => 'PMSECasesListApi',
                'score' => 9.5,
              ),
            ),
          ),
          'processStatusChart' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Inbox',
                  1 => 'processStatusChart',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'filter',
                ),
                'method' => 'returnProcessStatusChart',
                'acl' => 'adminOrDev',
                'file' => 'modules/pmse_Inbox/clients/base/api/PMSECasesListApi.php',
                'className' => 'PMSECasesListApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Users' => 
        array (
          '?' => 
          array (
            'freebusy' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Users',
                  1 => '?',
                  2 => 'freebusy',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getFreeBusySchedule',
                'shortHelp' => 'Retrieve a list of calendar event start and end times for specified person',
                'longHelp' => 'include/api/help/user_get_freebusy_help.html',
                'file' => 'modules/Users/clients/base/api/UsersApi.php',
                'className' => 'UsersApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'jckl_FilterTemplates' => 
        array (
          'getCategoryData' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'jckl_FilterTemplates',
                  1 => 'getCategoryData',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'category',
                ),
                'method' => 'getCategoryData',
                'shortHelp' => 'Retrieves List of Users, Roles, Or Teams based on selection',
                'file' => 'modules/jckl_FilterTemplates/clients/base/api/jckl_FilterTemplatesApi.php',
                'className' => 'jckl_FilterTemplatesApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'DRI_Workflows' => 
        array (
          '?' => 
          array (
            'widget-data' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'DRI_Workflows',
                  1 => '?',
                  2 => 'widget-data',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'widgetData',
                'shortHelp' => '',
                'longHelp' => '',
                'noEtag' => true,
                'file' => 'modules/DRI_Workflows/clients/base/api/DRIWorkflowsApi.php',
                'className' => 'DRIWorkflowsApi',
                'score' => 9.5,
              ),
            ),
          ),
          'config' => 
          array (
            'enabled_modules' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'DRI_Workflows',
                  1 => 'config',
                  2 => 'enabled_modules',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                ),
                'method' => 'readConfigureModules',
                'shortHelp' => '',
                'longHelp' => '',
                'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyConfigApi.php',
                'className' => 'DRICustomerJourneyConfigApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'pmse_Emails_Templates' => 
        array (
          '?' => 
          array (
            'etemplate' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Emails_Templates',
                  1 => '?',
                  2 => 'etemplate',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'emailTemplateDownload',
                'rawReply' => true,
                'allowDownloadCookie' => true,
                'acl' => 'view',
                'shortHelp' => 'Exports a .pet file with a Process Email Templates definition',
                'longHelp' => 'modules/pmse_Emails_Templates/clients/base/api/help/email_templates_export_help.html',
                'file' => 'modules/pmse_Emails_Templates/clients/base/api/PMSEEmailsTemplates.php',
                'className' => 'PMSEEmailsTemplates',
                'score' => 9.5,
              ),
            ),
            'find_modules' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Emails_Templates',
                  1 => '?',
                  2 => 'find_modules',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'retrieveRelatedBeans',
                'acl' => 'view',
                'shortHelp' => 'Retrieve a list of related modules',
                'longHelp' => 'modules/pmse_Emails_Templates/clients/base/api/help/email_templates_module_list_get_help.html',
                'file' => 'modules/pmse_Emails_Templates/clients/base/api/PMSEEmailsTemplates.php',
                'className' => 'PMSEEmailsTemplates',
                'score' => 9.5,
              ),
            ),
          ),
          'variables' => 
          array (
            'find' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Emails_Templates',
                  1 => 'variables',
                  2 => 'find',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'findVariables',
                'acl' => 'view',
                'shortHelp' => 'Get the variable list for a module',
                'longHelp' => 'modules/pmse_Emails_Templates/clients/base/api/help/email_templates_variable_list_get_help.html',
                'file' => 'modules/pmse_Emails_Templates/clients/base/api/PMSEEmailsTemplates.php',
                'className' => 'PMSEEmailsTemplates',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'DRI_Workflow_Templates' => 
        array (
          '?' => 
          array (
            'export' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'DRI_Workflow_Templates',
                  1 => '?',
                  2 => 'export',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'export',
                'rawReply' => true,
                'allowDownloadCookie' => true,
                'shortHelp' => 'Exports a Customer Journey Template in .json format.',
                'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyTemplatesImportExportApi.php',
                'className' => 'DRICustomerJourneyTemplatesImportExportApi',
                'score' => 9.5,
              ),
            ),
            'last-stage' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'DRI_Workflow_Templates',
                  1 => '?',
                  2 => 'last-stage',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'getLastStage',
                'shortHelp' => '',
                'longHelp' => '',
                'noEtag' => true,
                'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRIWorkflowTemplatesApi.php',
                'className' => 'DRIWorkflowTemplatesApi',
                'score' => 9.5,
              ),
            ),
            'widget-data' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'DRI_Workflow_Templates',
                  1 => '?',
                  2 => 'widget-data',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'widgetData',
                'shortHelp' => '',
                'longHelp' => '',
                'noEtag' => true,
                'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRIWorkflowTemplatesApi.php',
                'className' => 'DRIWorkflowTemplatesApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Meetings' => 
        array (
          '?' => 
          array (
            'external' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Meetings',
                  1 => '?',
                  2 => 'external',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'external',
                ),
                'method' => 'getExternalInfo',
                'shortHelp' => 'This method retrieves info about launching an external meeting',
                'longHelp' => 'modules/Meetings/clients/base/api/help/MeetingsApiExternalGet.html',
                'file' => 'modules/Meetings/clients/base/api/MeetingsApi.php',
                'className' => 'MeetingsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Mail' => 
        array (
          'recipients' => 
          array (
            'find' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Mail',
                  1 => 'recipients',
                  2 => 'find',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'findRecipients',
                'shortHelp' => 'Search For Email Recipients',
                'longHelp' => 'modules/Emails/clients/base/api/help/mail_recipients_find_get_help.html',
                'file' => 'modules/Emails/clients/base/api/MailApi.php',
                'className' => 'MailApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Emails' => 
        array (
          'filter' => 
          array (
            'count' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Emails',
                  1 => 'filter',
                  2 => 'count',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'getFilterListCount',
                'shortHelp' => 'Lists filtered records.',
                'longHelp' => 'include/api/help/module_filter_post_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionError',
                  2 => 'SugarApiExceptionNotAuthorized',
                  3 => 'SugarApiExceptionInvalidParameter',
                ),
                'file' => 'modules/Emails/clients/base/api/EmailsFilterApi.php',
                'className' => 'EmailsFilterApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'ForecastManagerWorksheets' => 
        array (
          '?' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ForecastManagerWorksheets',
                  1 => '?',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'timeperiod_id',
                  2 => 'user_id',
                ),
                'method' => 'ForecastManagerWorksheetsGet',
                'jsonParams' => 
                array (
                ),
                'shortHelp' => 'Filter records from a single module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastManagerWorksheetGet.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionError',
                  1 => 'SugarApiExceptionInvalidParameter',
                  2 => 'SugarApiExceptionNotAuthorized',
                  3 => 'SugarApiExceptionNotFound',
                ),
                'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
                'className' => 'ForecastManagerWorksheetsFilterApi',
                'score' => 8.5,
              ),
            ),
          ),
          'chart' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ForecastManagerWorksheets',
                  1 => 'chart',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'timeperiod_id',
                ),
                'method' => 'forecastManagerWorksheetsChartGet',
                'jsonParams' => 
                array (
                ),
                'shortHelp' => 'Filter records and reformat data for chart presentation',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/forecastManagerWorksheetsChartGet.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionError',
                  1 => 'SugarApiExceptionInvalidParameter',
                  2 => 'SugarApiExceptionNotAuthorized',
                  3 => 'SugarApiExceptionNotFound',
                ),
                'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
                'className' => 'ForecastManagerWorksheetsFilterApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'RT_DocuSign' => 
        array (
          'validate' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'RT_DocuSign',
                  1 => 'validate',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'key',
                ),
                'method' => 'validate',
                'shortHelp' => 'This method validates SugarOutfitter key',
                'longHelp' => '',
                'file' => 'modules/RT_DocuSign/clients/base/api/RT_DocuSignConfig.php',
                'className' => 'RT_DocuSignConfig',
                'score' => 9.5,
              ),
            ),
          ),
          'change' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'RT_DocuSign',
                  1 => 'change',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'key',
                ),
                'method' => 'change',
                'shortHelp' => 'This method boost user count for GSync',
                'longHelp' => '',
                'file' => 'modules/RT_DocuSign/clients/base/api/RT_DocuSignConfig.php',
                'className' => 'RT_DocuSignConfig',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'pmse_Business_Rules' => 
        array (
          '?' => 
          array (
            'brules' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Business_Rules',
                  1 => '?',
                  2 => 'brules',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'businessRuleDownload',
                'rawReply' => true,
                'allowDownloadCookie' => true,
                'acl' => 'view',
                'shortHelp' => 'Exports a .pbr file with a Process Business Rules definition',
                'longHelp' => 'modules/pmse_Business_Rules/clients/base/api/help/business_rules_export_help.html',
                'file' => 'modules/pmse_Business_Rules/clients/base/api/PMSEBusinessRules.php',
                'className' => 'PMSEBusinessRules',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'KBContents' => 
        array (
          '?' => 
          array (
            'related_documents' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'KBContents',
                  1 => '?',
                  2 => 'related_documents',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'relatedDocuments',
                'shortHelp' => 'Get related documents for current record.',
                'longHelp' => '',
                'file' => 'modules/KBContents/clients/base/api/KBContentsApi.php',
                'className' => 'KBContentsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Administration' => 
        array (
          'search' => 
          array (
            'status' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'search',
                  2 => 'status',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'searchStatus',
                'shortHelp' => 'Search status',
                'longHelp' => 'include/api/help/administration_search_status_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                ),
                'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                'className' => 'AdministrationApi',
                'score' => 10.5,
              ),
            ),
            'fields' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'search',
                  2 => 'fields',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'searchFields',
                'shortHelp' => 'List search field configuration',
                'longHelp' => 'include/api/help/administration_search_fields_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                ),
                'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                'className' => 'AdministrationApi',
                'score' => 10.5,
              ),
            ),
          ),
          'elasticsearch' => 
          array (
            'queue' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'elasticsearch',
                  2 => 'queue',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'elasticSearchQueue',
                'shortHelp' => 'Elasticsearch queue statistics',
                'longHelp' => 'include/api/help/administration_elasticsearch_queue_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                  1 => 'SugarApiExceptionSearchUnavailable',
                ),
                'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                'className' => 'AdministrationApi',
                'score' => 10.5,
              ),
            ),
            'routing' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'elasticsearch',
                  2 => 'routing',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'elasticSearchRouting',
                'shortHelp' => 'Elasticsearch index routing',
                'longHelp' => 'include/api/help/administration_elasticsearch_routing_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                  1 => 'SugarApiExceptionSearchUnavailable',
                ),
                'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                'className' => 'AdministrationApi',
                'score' => 10.5,
              ),
            ),
            'indices' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'elasticsearch',
                  2 => 'indices',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'elasticSearchIndices',
                'shortHelp' => 'Elasticsearch index statistics',
                'longHelp' => 'include/api/help/administration_elasticsearch_indices_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                  1 => 'SugarApiExceptionSearchUnavailable',
                ),
                'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                'className' => 'AdministrationApi',
                'score' => 10.5,
              ),
            ),
            'mapping' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'elasticsearch',
                  2 => 'mapping',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'elasticSearchMapping',
                'shortHelp' => 'Elasticsearch index mappings',
                'longHelp' => 'include/api/help/administration_elasticsearch_mapping_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                  1 => 'SugarApiExceptionSearchUnavailable',
                ),
                'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                'className' => 'AdministrationApi',
                'score' => 10.5,
              ),
            ),
          ),
          'idm' => 
          array (
            'users' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'idm',
                  2 => 'users',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'getIdmUsers',
                'shortHelp' => 'Fetch users for IDM migration',
                'longHelp' => 'include/api/help/administration_idm_user_filter_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionError',
                  1 => 'SugarApiExceptionInvalidParameter',
                  2 => 'SugarApiExceptionNotAuthorized',
                ),
                'minVersion' => '11.2',
                'file' => 'modules/Administration/clients/base/api/IdmUserFilterApi.php',
                'className' => 'IdmUserFilterApi',
                'score' => 10.5,
              ),
            ),
          ),
          'settings' => 
          array (
            'auth' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'settings',
                  2 => 'auth',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'authSettings',
                'shortHelp' => 'Fetch auth settings',
                'longHelp' => 'include/api/help/administration_idm_auth_settings.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                ),
                'minVersion' => '11.2',
                'file' => 'modules/Administration/clients/base/api/AuthSettingsApi.php',
                'className' => 'AuthSettingsApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Forecasts' => 
        array (
          'user' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Forecasts',
                  1 => 'user',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'user_id',
                ),
                'method' => 'retrieveSelectedUser',
                'shortHelp' => 'Returns selectedUser object for given user',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsApiUserGet.html',
                'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                'className' => 'ForecastsApi',
                'score' => 9.5,
              ),
            ),
          ),
          'enum' => 
          array (
            'selectedTimePeriod' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Forecasts',
                  1 => 'enum',
                  2 => 'selectedTimePeriod',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => '',
                ),
                'method' => 'timeperiod',
                'shortHelp' => 'forecast timeperiod',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastApiTimePeriodGet.html',
                'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                'className' => 'ForecastsApi',
                'score' => 10.5,
              ),
            ),
          ),
          'reportees' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Forecasts',
                  1 => 'reportees',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'user_id',
                ),
                'method' => 'getReportees',
                'shortHelp' => 'Gets reportees to a user by id',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastApiReporteesGet.html',
                'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                'className' => 'ForecastsApi',
                'score' => 9.5,
              ),
            ),
          ),
          'orgtree' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Forecasts',
                  1 => 'orgtree',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'user_id',
                ),
                'method' => 'getOrgTree',
                'shortHelp' => 'Gets managers and reportees of user',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastApiOrgetreeGet.html',
                'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                'className' => 'ForecastsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Contacts' => 
        array (
          '?' => 
          array (
            'opportunity_stats' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Contacts',
                  1 => '?',
                  2 => 'opportunity_stats',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'opportunityStats',
                'shortHelp' => 'Get opportunity statistics for current record',
                'longHelp' => '',
                'file' => 'modules/Contacts/clients/base/api/ContactsApi.php',
                'className' => 'ContactsApi',
                'score' => 9.5,
              ),
            ),
            'influencers' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Contacts',
                  1 => '?',
                  2 => 'influencers',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'influencers',
                'shortHelp' => '',
                'longHelp' => '',
                'file' => 'modules/Contacts/clients/base/api/ContactsApi.php',
                'className' => 'ContactsApi',
                'score' => 9.5,
              ),
            ),
            'freebusy' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Contacts',
                  1 => '?',
                  2 => 'freebusy',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getFreeBusySchedule',
                'shortHelp' => 'Retrieve a list of calendar event start and end times for specified person',
                'longHelp' => 'include/api/help/contact_get_freebusy_help.html',
                'file' => 'modules/Contacts/clients/base/api/ContactsApi.php',
                'className' => 'ContactsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'ForecastWorksheets' => 
        array (
          '?' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ForecastWorksheets',
                  1 => '?',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'timeperiod_id',
                  2 => 'user_id',
                ),
                'method' => 'forecastWorksheetsGet',
                'jsonParams' => 
                array (
                ),
                'shortHelp' => 'Filter records from a single module',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetGet.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionError',
                  1 => 'SugarApiExceptionInvalidParameter',
                  2 => 'SugarApiExceptionNotAuthorized',
                  3 => 'SugarApiExceptionNotFound',
                ),
                'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
                'className' => 'ForecastWorksheetsFilterApi',
                'score' => 8.5,
              ),
            ),
          ),
          'chart' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ForecastWorksheets',
                  1 => 'chart',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'timeperiod_id',
                ),
                'method' => 'forecastWorksheetsChartGet',
                'jsonParams' => 
                array (
                ),
                'shortHelp' => 'Filter records and reformat data for chart presentation',
                'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsWorksheetChartGet.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionError',
                  1 => 'SugarApiExceptionInvalidParameter',
                  2 => 'SugarApiExceptionNotAuthorized',
                  3 => 'SugarApiExceptionNotFound',
                ),
                'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
                'className' => 'ForecastWorksheetsFilterApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Filters' => 
        array (
          '?' => 
          array (
            'used' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Filters',
                  1 => '?',
                  2 => 'used',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'module_name',
                  2 => 'used',
                ),
                'method' => 'getUsed',
                'shortHelp' => 'This method gets the used filter for the current user',
                'longHelp' => '',
                'file' => 'modules/Filters/clients/base/api/PreviouslyUsedFiltersApi.php',
                'className' => 'PreviouslyUsedFiltersApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Accounts' => 
        array (
          '?' => 
          array (
            'opportunity_stats' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Accounts',
                  1 => '?',
                  2 => 'opportunity_stats',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'opportunityStats',
                'shortHelp' => 'Get opportunity statistics for current record',
                'longHelp' => '',
                'file' => 'modules/Accounts/clients/base/api/AccountsApi.php',
                'className' => 'AccountsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Opportunities' => 
        array (
          'enum' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Opportunities',
                  1 => 'enum',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'enum',
                  2 => 'field',
                ),
                'method' => 'getEnumValues',
                'shortHelp' => 'This method returns enum values for a specified field',
                'longHelp' => 'include/api/help/module_enum_get_help.html',
                'file' => 'modules/Opportunities/clients/base/api/OpportunitiesEnumApi.php',
                'className' => 'OpportunitiesEnumApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Reports' => 
        array (
          '?' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Reports',
                  1 => '?',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'export_type',
                ),
                'method' => 'exportRecord',
                'rawReply' => true,
                'shortHelp' => 'This method exports a record in the specified type',
                'longHelp' => '',
                'file' => 'modules/Reports/clients/base/api/ReportsExportApi.php',
                'className' => 'ReportsExportApi',
                'score' => 8.5,
              ),
            ),
            'records' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Reports',
                  1 => '?',
                  2 => 'records',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getReportRecords',
                'jsonParams' => 
                array (
                  0 => 'group_filters',
                ),
                'shortHelp' => 'An API to deliver filtered records from a saved report',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_records_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionInvalidParameter',
                ),
                'file' => 'modules/Reports/clients/base/api/ReportsApi.php',
                'className' => 'ReportsApi',
                'score' => 9.5,
              ),
            ),
            'record_count' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Reports',
                  1 => '?',
                  2 => 'record_count',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getRecordCount',
                'jsonParams' => 
                array (
                  0 => 'group_filters',
                ),
                'shortHelp' => 'An API to get total number of filtered records from a saved report',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_recordcount_get_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionInvalidParameter',
                ),
                'file' => 'modules/Reports/clients/base/api/ReportsApi.php',
                'className' => 'ReportsApi',
                'score' => 9.5,
              ),
            ),
            'chart' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Reports',
                  1 => '?',
                  2 => 'chart',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getSavedReportChartById',
                'shortHelp' => 'An API to get chart data for a saved report',
                'longHelp' => 'modules/Reports/clients/base/api/help/report_chart_get_help.html',
                'file' => 'modules/Reports/clients/base/api/ReportsApi.php',
                'className' => 'ReportsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'DRI_SubWorkflow_Templates' => 
        array (
          '?' => 
          array (
            'last-task' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'DRI_SubWorkflow_Templates',
                  1 => '?',
                  2 => 'last-task',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'getLastTask',
                'shortHelp' => '',
                'longHelp' => '',
                'noEtag' => true,
                'file' => 'modules/DRI_SubWorkflow_Templates/clients/base/api/DRISubWorkflowTemplatesApi.php',
                'className' => 'DRISubWorkflowTemplatesApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'pmse_Project' => 
        array (
          'project' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => 'project',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'customAction',
                  2 => 'record',
                ),
                'method' => 'retrieveCustomProject',
                'acl' => 'view',
                'shortHelp' => 'Retrieves the schema data to be used by the Process Definition designer',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_project_get_help.html',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
          ),
          'CrmData' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => 'CrmData',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'data',
                ),
                'method' => 'getCrmData',
                'acl' => 'view',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
          ),
          'ActivityDefinition' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => 'ActivityDefinition',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record',
                ),
                'method' => 'getActivityDefinition',
                'acl' => 'view',
                'shortHelp' => 'Retrieves the definition data for an activity',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_activity_get_help.html',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
          ),
          'EventDefinition' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => 'EventDefinition',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record',
                ),
                'method' => 'getEventDefinition',
                'acl' => 'view',
                'shortHelp' => 'Retrieves the definition data for an event',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_event_get_help.html',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
          ),
          'GatewayDefinition' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => 'GatewayDefinition',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record',
                ),
                'method' => 'getGatewayDefinition',
                'acl' => 'view',
                'shortHelp' => 'Retrieves the definition data for a gateway',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_gateway_get_help.html',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
          ),
          '?' => 
          array (
            'verify' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => '?',
                  2 => 'verify',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'verify',
                ),
                'method' => 'verifyRunningProcess',
                'acl' => 'view',
                'shortHelp' => 'Verifies whether the Process Definition has any pending processes',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_record_verify_help.html',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
            'dproject' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => '?',
                  2 => 'dproject',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'projectDownload',
                'rawReply' => true,
                'allowDownloadCookie' => true,
                'acl' => 'view',
                'shortHelp' => 'Exports a .bpm file with a Process Definition',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_export_help.html',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectImportExportApi.php',
                'className' => 'PMSEProjectImportExportApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'ProcessBusinessRules' => 
        array (
          'fields' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'ProcessBusinessRules',
                  1 => 'fields',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'data',
                  2 => 'filter',
                ),
                'method' => 'getBRFields',
                'acl' => 'view',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Leads' => 
        array (
          '?' => 
          array (
            'freebusy' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Leads',
                  1 => '?',
                  2 => 'freebusy',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'getFreeBusySchedule',
                'shortHelp' => 'Retrieve a list of calendar event start and end times for specified person',
                'longHelp' => 'include/api/help/lead_get_freebusy_help.html',
                'file' => 'modules/Leads/clients/base/api/LeadsApi.php',
                'className' => 'LeadsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Home' => 
        array (
          'enum' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'Home',
                  1 => 'enum',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'enum',
                  2 => 'field',
                ),
                'method' => 'getEnumValues',
                'shortHelp' => 'This method returns enum values for a specified field',
                'longHelp' => 'include/api/help/module_enum_get_help.html',
                'file' => 'custom/modules/Home/clients/base/api/HomeModuleApi.php',
                'className' => 'HomeModuleApi',
                'score' => 10.0,
              ),
            ),
          ),
        ),
      ),
      'POST' => 
      array (
        'oauth2' => 
        array (
          'bwc' => 
          array (
            'login' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'oauth2',
                  1 => 'bwc',
                  2 => 'login',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => '',
                ),
                'method' => 'bwcLogin',
                'shortHelp' => 'Bwc login for bwc modules. Internal usage only.',
                'longHelp' => 'include/api/help/oauth2_bwc_login_post_help.html',
                'keepSession' => true,
                'ignoreMetaHash' => true,
                'ignoreSystemStatusError' => true,
                'file' => 'clients/base/api/OAuth2Api.php',
                'className' => 'OAuth2Api',
                'score' => 10.5,
              ),
            ),
          ),
          'sudo' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'oauth2',
                  1 => 'sudo',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'user_name',
                ),
                'method' => 'sudo',
                'shortHelp' => 'Get an access token for another user',
                'longHelp' => 'include/api/help/oauth2_sudo_post_help.html',
                'ignoreMetaHash' => true,
                'file' => 'clients/base/api/OAuth2Api.php',
                'className' => 'OAuth2Api',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'link',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'createRelatedLinks',
                'shortHelp' => 'Relates existing records to this module.',
                'longHelp' => 'include/api/help/module_record_link_post_help.html',
                'file' => 'clients/base/api/RelateRecordApi.php',
                'className' => 'RelateRecordApi',
                'score' => 8.75,
              ),
              1 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'link',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'createRelatedLinks',
                'shortHelp' => 'Relates existing records to this module.',
                'longHelp' => 'include/api/help/module_record_link_post_help.html',
                'file' => 'custom/clients/base/api/CustomRelateRecordApi.php',
                'className' => 'CustomRelateRecordApi',
                'score' => 9.25,
              ),
            ),
            'subscribe' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'subscribe',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'subscribeToRecord',
                'shortHelp' => 'This method subscribes the user to the current record, for activity stream updates.',
                'longHelp' => 'modules/ActivityStream/clients/base/api/help/recordSubscribe.html',
                'file' => 'modules/ActivityStream/clients/base/api/SubscriptionsApi.php',
                'className' => 'SubscriptionsApi',
                'score' => 8.75,
              ),
            ),
          ),
          'file' => 
          array (
            'vcard_import' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'file',
                  2 => 'vcard_import',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'vCardImport',
                'rawPostContents' => true,
                'shortHelp' => 'Imports a person record from a vcard',
                'longHelp' => 'include/api/help/module_file_vcard_import_post_help.html',
                'file' => 'clients/base/api/vCardApi.php',
                'className' => 'vCardApi',
                'score' => 9.75,
              ),
            ),
          ),
          'filter' => 
          array (
            'count' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'filter',
                  2 => 'count',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'filterListCount',
                'shortHelp' => 'Lists filtered records.',
                'longHelp' => 'include/api/help/module_filter_post_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionError',
                  2 => 'SugarApiExceptionNotAuthorized',
                  3 => 'SugarApiExceptionInvalidParameter',
                ),
                'file' => 'clients/base/api/FilterApi.php',
                'className' => 'FilterApi',
                'score' => 9.75,
              ),
            ),
          ),
          'append' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'append',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'append',
                  2 => 'target',
                ),
                'method' => 'append',
                'shortHelp' => 'This method append record to target as last child',
                'longHelp' => 'modules/Categories/clients/base/api/help/tree_post_append_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionInvalidParameter',
                ),
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
          ),
          'prepend' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'prepend',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'prepend',
                  2 => 'target',
                ),
                'method' => 'prepend',
                'shortHelp' => 'This method prepend record to target as first child',
                'longHelp' => 'modules/Categories/clients/base/api/help/tree_post_prepend_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionInvalidParameter',
                ),
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
          ),
          'insertbefore' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'insertbefore',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'insertbefore',
                  2 => 'target',
                ),
                'method' => 'insertBefore',
                'shortHelp' => 'This method insert record as previous sibling of target',
                'longHelp' => 'modules/Categories/clients/base/api/help/tree_post_insertbefore_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionInvalidParameter',
                ),
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
          ),
          'insertafter' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'insertafter',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'insertafter',
                  2 => 'target',
                ),
                'method' => 'insertAfter',
                'shortHelp' => 'This method insert record as next sibling of target',
                'longHelp' => 'modules/Categories/clients/base/api/help/tree_post_insertafter_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionInvalidParameter',
                ),
                'file' => 'modules/Categories/clients/base/api/TreeApi.php',
                'className' => 'TreeApi',
                'score' => 8.75,
              ),
            ),
          ),
        ),
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceSave',
                'shortHelp' => 'Create a preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_post_help.html',
                'file' => 'clients/base/api/CurrentUserApi.php',
                'className' => 'CurrentUserApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Users' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Users',
                  1 => '?',
                  2 => 'link',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'createRelatedLinks',
                'shortHelp' => 'Relates existing records to this module.',
                'longHelp' => 'include/api/help/module_record_link_post_help.html',
                'file' => 'modules/Users/clients/base/api/UsersRelateRecordApi.php',
                'className' => 'UsersRelateRecordApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'pmse_Emails_Templates' => 
        array (
          'file' => 
          array (
            'emailtemplates_import' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'pmse_Emails_Templates',
                  1 => 'file',
                  2 => 'emailtemplates_import',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'emailTemplatesImport',
                'rawPostContents' => true,
                'acl' => 'create',
                'shortHelp' => 'Imports a Process Email Templates from a .pet file',
                'longHelp' => 'modules/pmse_Emails_Templates/clients/base/api/help/email_templates_import_help.html',
                'file' => 'modules/pmse_Emails_Templates/clients/base/api/PMSEEmailsTemplates.php',
                'className' => 'PMSEEmailsTemplates',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'DRI_Workflow_Templates' => 
        array (
          'file' => 
          array (
            'template_import' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'DRI_Workflow_Templates',
                  1 => 'file',
                  2 => 'template_import',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'import',
                'rawPostContents' => true,
                'acl' => 'create',
                'shortHelp' => 'Imports a Customer Journey Template from a .json file',
                'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyTemplatesImportExportApi.php',
                'className' => 'DRICustomerJourneyTemplatesImportExportApi',
                'score' => 10.5,
              ),
            ),
            'check_template_import' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'DRI_Workflow_Templates',
                  1 => 'file',
                  2 => 'check_template_import',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'checkImport',
                'rawPostContents' => true,
                'acl' => 'create',
                'shortHelp' => 'Imports a Customer Journey Template from a .json file',
                'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyTemplatesImportExportApi.php',
                'className' => 'DRICustomerJourneyTemplatesImportExportApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Quotes' => 
        array (
          '?' => 
          array (
            'opportunity' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Quotes',
                  1 => '?',
                  2 => 'opportunity',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'opportunity',
                ),
                'method' => 'convertQuote',
                'shortHelp' => 'Convert a Quote into another record',
                'longHelp' => 'modules/Quotes/clients/base/api/help/quote_convert.html',
                'file' => 'modules/Quotes/clients/base/api/QuoteConvertApi.php',
                'className' => 'QuoteConvertApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Mail' => 
        array (
          'recipients' => 
          array (
            'lookup' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Mail',
                  1 => 'recipients',
                  2 => 'lookup',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'recipientLookup',
                'shortHelp' => 'Lookup Email Recipient Info',
                'longHelp' => 'modules/Emails/clients/base/api/help/mail_recipients_lookup_post_help.html',
                'file' => 'modules/Emails/clients/base/api/MailApi.php',
                'className' => 'MailApi',
                'score' => 10.5,
              ),
            ),
          ),
          'address' => 
          array (
            'validate' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Mail',
                  1 => 'address',
                  2 => 'validate',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'validateEmailAddresses',
                'shortHelp' => 'Validate One Or More Email Address',
                'longHelp' => 'modules/Emails/clients/base/api/help/mail_address_validate_post_help.html',
                'file' => 'modules/Emails/clients/base/api/MailApi.php',
                'className' => 'MailApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Emails' => 
        array (
          'filter' => 
          array (
            'count' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Emails',
                  1 => 'filter',
                  2 => 'count',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'filterListCount',
                'shortHelp' => 'Lists filtered records.',
                'longHelp' => 'include/api/help/module_filter_post_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotFound',
                  1 => 'SugarApiExceptionError',
                  2 => 'SugarApiExceptionNotAuthorized',
                  3 => 'SugarApiExceptionInvalidParameter',
                ),
                'file' => 'modules/Emails/clients/base/api/EmailsFilterApi.php',
                'className' => 'EmailsFilterApi',
                'score' => 10.5,
              ),
            ),
          ),
          '?' => 
          array (
            'link' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Emails',
                  1 => '?',
                  2 => 'link',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'createRelatedLinks',
                'shortHelp' => 'Relates existing records to an email',
                'longHelp' => 'modules/Emails/clients/base/api/help/emails_record_link_post_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionMissingParameter',
                  1 => 'SugarApiExceptionNotAuthorized',
                  2 => 'SugarApiExceptionNotFound',
                ),
                'file' => 'modules/Emails/clients/base/api/EmailsRelateRecordApi.php',
                'className' => 'EmailsRelateRecordApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'pmse_Business_Rules' => 
        array (
          'file' => 
          array (
            'businessrules_import' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'pmse_Business_Rules',
                  1 => 'file',
                  2 => 'businessrules_import',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'businessRulesImport',
                'rawPostContents' => true,
                'acl' => 'create',
                'shortHelp' => 'Imports a Process Business Rules definition from a .pbr file',
                'longHelp' => 'modules/pmse_Business_Rules/clients/base/api/help/business_rules_import_help.html',
                'file' => 'modules/pmse_Business_Rules/clients/base/api/PMSEBusinessRules.php',
                'className' => 'PMSEBusinessRules',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'KBContents' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'KBContents',
                  1 => '?',
                  2 => 'link',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'createRelatedLinks',
                'shortHelp' => 'Relates existing records to this module.',
                'longHelp' => 'include/api/help/module_record_link_post_help.html',
                'file' => 'modules/KBContents/clients/base/api/KBContentsRelateRecordApi.php',
                'className' => 'KBContentsRelateRecordApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Administration' => 
        array (
          'search' => 
          array (
            'reindex' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'search',
                  2 => 'reindex',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'searchReindex',
                'shortHelp' => 'Perform a reindex',
                'longHelp' => 'include/api/help/administration_search_reindex_post_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                  1 => 'SugarApiExceptionSearchUnavailable',
                ),
                'file' => 'modules/Administration/clients/base/api/AdministrationApi.php',
                'className' => 'AdministrationApi',
                'score' => 10.5,
              ),
            ),
          ),
          'settings' => 
          array (
            'idmMode' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'settings',
                  2 => 'idmMode',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'switchOnIdmMode',
                'shortHelp' => 'Turns IDM mode on',
                'longHelp' => 'include/api/help/administration_settings_post_idm_mode_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                  1 => 'SugarApiExceptionMissingParameter',
                ),
                'minVersion' => '11.2',
                'file' => 'modules/Administration/clients/base/api/AuthSettingsApi.php',
                'className' => 'AuthSettingsApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'RevenueLineItems' => 
        array (
          '?' => 
          array (
            'quote' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'RevenueLineItems',
                  1 => '?',
                  2 => 'quote',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'action',
                ),
                'method' => 'convertToQuote',
                'shortHelp' => 'Convert a Revenue Line Item Into A Quote Record',
                'longHelp' => 'modules/RevenueLineItems/clients/base/api/help/convert_to_quote.html',
                'file' => 'modules/RevenueLineItems/clients/base/api/RevenueLineItemToQuoteConvertApi.php',
                'className' => 'RevenueLineItemToQuoteConvertApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Reports' => 
        array (
          '?' => 
          array (
            'record_list' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Reports',
                  1 => '?',
                  2 => 'record_list',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'createRecordList',
                'shortHelp' => 'An API to create a record list from a saved report',
                'longHelp' => 'modules/Reports/api/help/module_recordlist_post.html',
                'file' => 'modules/Reports/clients/base/api/ReportsApi.php',
                'className' => 'ReportsApi',
                'score' => 9.5,
              ),
            ),
          ),
          'chart' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Reports',
                  1 => 'chart',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'reportId',
                ),
                'method' => 'getSavedReportChartById',
                'shortHelp' => 'Updates a ForecastWorksheet model',
                'longHelp' => 'modules/Reports/clients/base/api/help/ReportsDashletApiGetSavedReportById.html',
                'file' => 'modules/Reports/clients/base/api/ReportsDashletsApi.php',
                'className' => 'ReportsDashletsApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Teams' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Teams',
                  1 => '?',
                  2 => 'link',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => '',
                ),
                'method' => 'createRelatedLinks',
                'shortHelp' => 'Relates existing records to this module.',
                'longHelp' => 'include/api/help/module_record_link_post_help.html',
                'file' => 'modules/Teams/clients/base/api/TeamsRelateRecordApi.php',
                'className' => 'TeamsRelateRecordApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'pmse_Project' => 
        array (
          'file' => 
          array (
            'project_import' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => 'file',
                  2 => 'project_import',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => '',
                ),
                'method' => 'projectImport',
                'rawPostContents' => true,
                'acl' => 'create',
                'shortHelp' => 'Imports a Process Definition from a .bpm file',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_import_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                  1 => 'SugarApiExceptionNotAuthorized',
                  2 => 'SugarApiExceptionRequestMethodFailure',
                  3 => 'SugarApiExceptionMissingParameter',
                ),
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectImportExportApi.php',
                'className' => 'PMSEProjectImportExportApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Leads' => 
        array (
          '?' => 
          array (
            'convert' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Leads',
                  1 => '?',
                  2 => 'convert',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => 'leadId',
                  2 => '',
                ),
                'method' => 'convertLead',
                'shortHelp' => 'Convert Lead to a Contact and optionally link it to a new or existing module such as an Account or Opportunity',
                'longHelp' => 'modules/Leads/clients/base/api/help/LeadConvertApi.html',
                'file' => 'modules/Leads/clients/base/api/LeadConvertApi.php',
                'className' => 'LeadConvertApi',
                'score' => 9.5,
              ),
              1 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'Leads',
                  1 => '?',
                  2 => 'convert',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => 'leadId',
                  2 => '',
                ),
                'method' => 'convertLead',
                'shortHelp' => 'Convert Lead to a Contact and optionally link it to a new or existing module such as an Account or Opportunity',
                'longHelp' => 'modules/Leads/clients/base/api/help/LeadConvertApi.html',
                'file' => 'custom/modules/Leads/clients/base/api/CustomLeadConvertApi.php',
                'className' => 'CustomLeadConvertApi',
                'score' => 10.0,
              ),
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceSave',
                'shortHelp' => 'Update a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_put_help.html',
                'file' => 'clients/base/api/CurrentUserApi.php',
                'className' => 'CurrentUserApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        '<module>' => 
        array (
          '?' => 
          array (
            'favorite' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'favorite',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'favorite',
                ),
                'method' => 'setFavorite',
                'shortHelp' => 'This method sets a record of the specified type as a favorite',
                'longHelp' => 'include/api/help/module_record_favorite_put_help.html',
                'file' => 'clients/base/api/ModuleApi.php',
                'className' => 'ModuleApi',
                'score' => 8.75,
              ),
            ),
            'unfavorite' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'unfavorite',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'unfavorite',
                ),
                'method' => 'unsetFavorite',
                'shortHelp' => 'This method unsets a record of the specified type as a favorite',
                'longHelp' => 'include/api/help/module_record_favorite_delete_help.html',
                'file' => 'clients/base/api/ModuleApi.php',
                'className' => 'ModuleApi',
                'score' => 8.75,
              ),
            ),
          ),
        ),
        'pmse_Inbox' => 
        array (
          'clearLog' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'pmse_Inbox',
                  1 => 'clearLog',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'clearLog',
                  2 => 'typelog',
                ),
                'method' => 'clearLog',
                'jsonParams' => 
                array (
                ),
                'acl' => 'adminOrDev',
                'shortHelp' => 'Clear the PMSE.log file log',
                'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_clear_log_help.html',
                'file' => 'modules/pmse_Inbox/clients/base/api/PMSECasesListApi.php',
                'className' => 'PMSECasesListApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'DRI_Workflows' => 
        array (
          'config' => 
          array (
            'activate-users' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'DRI_Workflows',
                  1 => 'config',
                  2 => 'activate-users',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                ),
                'method' => 'activateUsers',
                'shortHelp' => '',
                'longHelp' => '',
                'noEtag' => true,
                'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyConfigApi.php',
                'className' => 'DRICustomerJourneyConfigApi',
                'score' => 10.5,
              ),
            ),
            'deactivate-users' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'DRI_Workflows',
                  1 => 'config',
                  2 => 'deactivate-users',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                ),
                'method' => 'deactivateUsers',
                'shortHelp' => '',
                'longHelp' => '',
                'noEtag' => true,
                'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyConfigApi.php',
                'className' => 'DRICustomerJourneyConfigApi',
                'score' => 10.5,
              ),
            ),
            'enabled_modules' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'DRI_Workflows',
                  1 => 'config',
                  2 => 'enabled_modules',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                ),
                'method' => 'saveConfigureModules',
                'shortHelp' => '',
                'longHelp' => '',
                'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyConfigApi.php',
                'className' => 'DRICustomerJourneyConfigApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'KBContents' => 
        array (
          '?' => 
          array (
            'useful' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'KBContents',
                  1 => '?',
                  2 => 'useful',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'useful',
                ),
                'method' => 'voteUseful',
                'shortHelp' => 'This method votes a record of the specified type as useful',
                'longHelp' => 'include/api/help/kb_vote_put_help.html',
                'file' => 'modules/KBContents/clients/base/api/KBContentsUsefulnessApi.php',
                'className' => 'KBContentsUsefulnessApi',
                'score' => 9.5,
              ),
            ),
            'notuseful' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'KBContents',
                  1 => '?',
                  2 => 'notuseful',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'notuseful',
                ),
                'method' => 'voteNotUseful',
                'shortHelp' => 'This method votes a record of the specified type as not useful',
                'longHelp' => 'include/api/help/kb_vote_put_help.html',
                'file' => 'modules/KBContents/clients/base/api/KBContentsUsefulnessApi.php',
                'className' => 'KBContentsUsefulnessApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Filters' => 
        array (
          '?' => 
          array (
            'used' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'Filters',
                  1 => '?',
                  2 => 'used',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'module_name',
                  2 => 'used',
                ),
                'method' => 'setUsed',
                'shortHelp' => 'This method sets the filter as used for the current user',
                'longHelp' => '',
                'file' => 'modules/Filters/clients/base/api/PreviouslyUsedFiltersApi.php',
                'className' => 'PreviouslyUsedFiltersApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'pmse_Project' => 
        array (
          'project' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => 'project',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'customAction',
                  2 => 'record',
                ),
                'method' => 'updateCustomProject',
                'acl' => 'create',
                'shortHelp' => 'Updates the schema data from the Process Definition designer',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_project_put_help.html',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
          ),
          'ActivityDefinition' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => 'ActivityDefinition',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record',
                ),
                'method' => 'putActivityDefinition',
                'acl' => 'create',
                'shortHelp' => 'Updates the definition data for an activity',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_activity_put_help.html',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
          ),
          'EventDefinition' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => 'EventDefinition',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record',
                ),
                'method' => 'putEventDefinition',
                'acl' => 'create',
                'shortHelp' => 'Updates the definition data for an event',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_event_put_help.html',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
          ),
          'GatewayDefinition' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'pmse_Project',
                  1 => 'GatewayDefinition',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record',
                ),
                'method' => 'putGatewayDefinition',
                'acl' => 'create',
                'shortHelp' => 'Updates the definition data for a gateway',
                'longHelp' => 'modules/pmse_Project/clients/base/api/help/project_gateway_put_help.html',
                'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectApi.php',
                'className' => 'PMSEProjectApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
      'DELETE' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceDelete',
                'shortHelp' => 'Delete a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_delete_help.html',
                'file' => 'clients/base/api/CurrentUserApi.php',
                'className' => 'CurrentUserApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        '<module>' => 
        array (
          '?' => 
          array (
            'favorite' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'favorite',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                  2 => 'favorite',
                ),
                'method' => 'unsetFavorite',
                'shortHelp' => 'This method unsets a record of the specified type as a favorite',
                'longHelp' => 'include/api/help/module_record_favorite_delete_help.html',
                'file' => 'clients/base/api/ModuleApi.php',
                'className' => 'ModuleApi',
                'score' => 8.75,
              ),
            ),
            'unsubscribe' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => '<module>',
                  1 => '?',
                  2 => 'unsubscribe',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'record',
                ),
                'method' => 'unsubscribeFromRecord',
                'shortHelp' => 'This method unsubscribes the user from the current record, for activity stream updates.',
                'longHelp' => 'modules/ActivityStream/clients/base/api/help/recordUnsubscribe.html',
                'file' => 'modules/ActivityStream/clients/base/api/SubscriptionsApi.php',
                'className' => 'SubscriptionsApi',
                'score' => 8.75,
              ),
            ),
          ),
          'record_list' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => '<module>',
                  1 => 'record_list',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'record_list_id',
                ),
                'method' => 'recordListDelete',
                'shortHelp' => 'An API to delete an old record list',
                'longHelp' => 'include/api/help/module_recordlist_delete.html',
                'file' => 'clients/base/api/RecordListApi.php',
                'className' => 'RecordListApi',
                'score' => 8.75,
              ),
            ),
          ),
        ),
        'pmse_Inbox' => 
        array (
          'delete_notes' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'pmse_Inbox',
                  1 => 'delete_notes',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => '',
                  2 => 'id',
                ),
                'method' => 'deleteNotes',
                'keepSession' => true,
                'shortHelp' => 'Deletes a note for a process',
                'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_delete_notes_help.html',
                'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
                'className' => 'PMSEEngineApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'Mail' => 
        array (
          'attachment' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'Mail',
                  1 => 'attachment',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'file_guid',
                ),
                'method' => 'removeAttachment',
                'rawPostContents' => true,
                'shortHelp' => 'Removes a mail attachment',
                'longHelp' => 'modules/Emails/clients/base/api/help/mail_attachment_record_delete_help.html',
                'file' => 'modules/Emails/clients/base/api/MailApi.php',
                'className' => 'MailApi',
                'score' => 9.5,
              ),
            ),
            'cache' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'Mail',
                  1 => 'attachment',
                  2 => 'cache',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => '',
                ),
                'method' => 'clearUserCache',
                'rawPostContents' => true,
                'shortHelp' => 'Clears the user\'s attachment cache directory',
                'longHelp' => 'modules/Emails/clients/base/api/help/mail_attachment_cache_delete_help.html',
                'file' => 'modules/Emails/clients/base/api/MailApi.php',
                'className' => 'MailApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Administration' => 
        array (
          'settings' => 
          array (
            'idmMode' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'Administration',
                  1 => 'settings',
                  2 => 'idmMode',
                ),
                'pathVars' => 
                array (
                  0 => '',
                ),
                'method' => 'switchOffIdmMode',
                'shortHelp' => 'Turns IDM mode off',
                'longHelp' => 'include/api/help/administration_settings_delete_idm_mode_help.html',
                'exceptions' => 
                array (
                  0 => 'SugarApiExceptionNotAuthorized',
                ),
                'minVersion' => '11.2',
                'file' => 'modules/Administration/clients/base/api/AuthSettingsApi.php',
                'className' => 'AuthSettingsApi',
                'score' => 10.5,
              ),
            ),
          ),
        ),
        'Filters' => 
        array (
          '?' => 
          array (
            'used' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'Filters',
                  1 => '?',
                  2 => 'used',
                ),
                'pathVars' => 
                array (
                  0 => 'module',
                  1 => 'module_name',
                  2 => 'used',
                ),
                'method' => 'deleteUsed',
                'shortHelp' => 'This method deletes all used filters for the current user',
                'longHelp' => '',
                'file' => 'modules/Filters/clients/base/api/PreviouslyUsedFiltersApi.php',
                'className' => 'PreviouslyUsedFiltersApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
    ),
    'mobile' => 
    array (
      'POST' => 
      array (
        'oauth2' => 
        array (
          'bwc' => 
          array (
            'login' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'oauth2',
                  1 => 'bwc',
                  2 => 'login',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => '',
                ),
                'method' => 'bwcLogin',
                'shortHelp' => 'Bwc login for bwc modules. Internal usage only.',
                'longHelp' => 'include/api/help/oauth2_bwc_login_post_help.html',
                'keepSession' => true,
                'ignoreMetaHash' => true,
                'ignoreSystemStatusError' => true,
                'file' => 'clients/mobile/api/OAuth2MobileApi.php',
                'className' => 'OAuth2MobileApi',
                'score' => 10.5,
              ),
            ),
          ),
          'sudo' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'oauth2',
                  1 => 'sudo',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'user_name',
                ),
                'method' => 'sudo',
                'shortHelp' => 'Get an access token for another user',
                'longHelp' => 'include/api/help/oauth2_sudo_post_help.html',
                'ignoreMetaHash' => true,
                'file' => 'clients/mobile/api/OAuth2MobileApi.php',
                'className' => 'OAuth2MobileApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceSave',
                'shortHelp' => 'Create a preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_post_help.html',
                'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
                'className' => 'CurrentUserMobileApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
      'GET' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreference',
                'shortHelp' => 'Returns a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_get_help.html',
                'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
                'className' => 'CurrentUserMobileApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceSave',
                'shortHelp' => 'Update a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_put_help.html',
                'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
                'className' => 'CurrentUserMobileApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
      'DELETE' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceDelete',
                'shortHelp' => 'Delete a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_delete_help.html',
                'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
                'className' => 'CurrentUserMobileApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
    ),
    'portal' => 
    array (
      'GET' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'GET',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreference',
                'shortHelp' => 'Returns a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_get_help.html',
                'file' => 'clients/portal/api/CurrentUserPortalApi.php',
                'className' => 'CurrentUserPortalApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
      'POST' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'POST',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceSave',
                'shortHelp' => 'Create a preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_post_help.html',
                'file' => 'clients/portal/api/CurrentUserPortalApi.php',
                'className' => 'CurrentUserPortalApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'PUT',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceSave',
                'shortHelp' => 'Update a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_put_help.html',
                'file' => 'clients/portal/api/CurrentUserPortalApi.php',
                'className' => 'CurrentUserPortalApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
      'DELETE' => 
      array (
        'me' => 
        array (
          'preference' => 
          array (
            '?' => 
            array (
              0 => 
              array (
                'reqType' => 'DELETE',
                'path' => 
                array (
                  0 => 'me',
                  1 => 'preference',
                  2 => '?',
                ),
                'pathVars' => 
                array (
                  0 => '',
                  1 => '',
                  2 => 'preference_name',
                ),
                'method' => 'userPreferenceDelete',
                'shortHelp' => 'Delete a specific preference for the current user',
                'longHelp' => 'include/api/help/me_preference_preference_name_delete_help.html',
                'file' => 'clients/portal/api/CurrentUserPortalApi.php',
                'className' => 'CurrentUserPortalApi',
                'score' => 9.5,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'base' => 
    array (
      'GET' => 
      array (
        '<module>' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'config',
              'shortHelp' => 'Retrieves the config settings for a given module',
              'longHelp' => 'include/api/help/module_config_get_help.html',
              'file' => 'clients/base/api/ConfigModuleApi.php',
              'className' => 'ConfigModuleApi',
              'score' => 8.0,
            ),
            1 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'config',
              'shortHelp' => 'Retrieves the config settings for a given module',
              'longHelp' => 'include/api/help/module_config_get_help.html',
              'file' => 'modules/KBContents/clients/base/api/KBContentsConfigApi.php',
              'className' => 'KBContentsConfigApi',
              'score' => 8.0,
            ),
          ),
          'globalsearch' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => 'globalsearch',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'globalSearch',
              'shortHelp' => 'Global search',
              'longHelp' => 'include/api/help/globalsearch_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotAuthorized',
                1 => 'SugarApiExceptionSearchUnavailable',
                2 => 'SugarApiExceptionSearchRuntime',
              ),
              'file' => 'clients/base/api/GlobalSearchApi.php',
              'className' => 'GlobalSearchApi',
              'score' => 8.0,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'retrieveRecord',
              'shortHelp' => 'Returns a single record',
              'longHelp' => 'include/api/help/module_record_get_help.html',
              'file' => 'clients/base/api/ModuleApi.php',
              'className' => 'ModuleApi',
              'score' => 7.0,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Lists filtered records.',
              'longHelp' => 'include/api/help/module_filter_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionInvalidParameter',
                3 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'clients/base/api/FilterApi.php',
              'className' => 'FilterApi',
              'score' => 8.0,
            ),
          ),
          'count' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => 'count',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'getFilterListCount',
              'shortHelp' => 'List of all records in this module',
              'longHelp' => 'include/api/help/module_filter_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionInvalidParameter',
              ),
              'file' => 'clients/base/api/FilterApi.php',
              'className' => 'FilterApi',
              'score' => 8.0,
            ),
          ),
          'Activities' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => '<module>',
                1 => 'Activities',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'getModuleActivities',
              'shortHelp' => 'This method retrieves a module\'s activities',
              'longHelp' => 'modules/ActivityStream/clients/base/api/help/moduleActivities.html',
              'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
              'className' => 'ActivitiesApi',
              'score' => 8.0,
            ),
          ),
        ),
        'login' => 
        array (
          'content' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'login',
                1 => 'content',
              ),
              'method' => 'getMarketingExtras',
              'shortHelp' => 'An API to receive marketing extra URLs',
              'longHelp' => 'include/api/help/marketing_extras_get_help.html',
              'minVersion' => '11.2',
              'noLoginRequired' => true,
              'file' => 'clients/base/api/MarketingExtrasApi.php',
              'className' => 'MarketingExtrasApi',
              'score' => 8.75,
            ),
          ),
        ),
        'me' => 
        array (
          'preferences' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'me',
                1 => 'preferences',
              ),
              'pathVars' => 
              array (
              ),
              'method' => 'userPreferences',
              'shortHelp' => 'Returns all the current user\'s stored preferences',
              'longHelp' => 'include/api/help/me_preferences_get_help.html',
              'ignoreMetaHash' => true,
              'file' => 'clients/base/api/CurrentUserApi.php',
              'className' => 'CurrentUserApi',
              'score' => 8.75,
            ),
          ),
          'following' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'me',
                1 => 'following',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getMyFollowedRecords',
              'shortHelp' => 'This method retrieves all followed methods for the user.',
              'longHelp' => 'include/api/help/me_getfollowed_help.html',
              'file' => 'clients/base/api/CurrentUserApi.php',
              'className' => 'CurrentUserApi',
              'score' => 8.75,
            ),
          ),
        ),
        'css' => 
        array (
          'preview' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'css',
                1 => 'preview',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'previewCSS',
              'shortHelp' => 'Compile the css for a platform and a theme just as a preview',
              'longHelp' => 'include/api/help/css_preview_get_help.html',
              'noLoginRequired' => true,
              'rawReply' => true,
              'file' => 'clients/base/api/ThemeApi.php',
              'className' => 'ThemeApi',
              'score' => 8.75,
            ),
          ),
        ),
        'metadata' => 
        array (
          '_hash' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'metadata',
                1 => '_hash',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'getAllMetadataHash',
              'shortHelp' => 'This method will return the hash of all metadata for the system',
              'longHelp' => 'include/api/html/metadata_all_help.html',
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/MetadataApi.php',
              'className' => 'MetadataApi',
              'score' => 8.75,
            ),
          ),
          'public' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'metadata',
                1 => 'public',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'getPublicMetadata',
              'shortHelp' => 'This method will return the metadata needed when not logged in',
              'longHelp' => 'include/api/html/metadata_all_help.html',
              'noLoginRequired' => true,
              'noEtag' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/MetadataApi.php',
              'className' => 'MetadataApi',
              'score' => 8.75,
            ),
          ),
        ),
        'lang' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'lang',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'lang',
              ),
              'method' => 'getLanguage',
              'shortHelp' => 'Returns the labels for the application',
              'longHelp' => 'include/api/html/metadata_all_help.html',
              'rawReply' => true,
              'noEtag' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/MetadataApi.php',
              'className' => 'MetadataApi',
              'score' => 7.75,
            ),
          ),
        ),
        'collection' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'collection',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'collection_name',
              ),
              'method' => 'getCollection',
              'shortHelp' => 'Lists collection records.',
              'longHelp' => 'include/api/help/collection_collection_name_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionInvalidParameter',
                3 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'clients/base/api/ModuleCollectionApi.php',
              'className' => 'ModuleCollectionApi',
              'score' => 7.75,
            ),
          ),
        ),
        'password' => 
        array (
          'request' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'password',
                1 => 'request',
              ),
              'pathVars' => 
              array (
                0 => 'module',
              ),
              'method' => 'requestPassword',
              'shortHelp' => 'This method sends email requests to reset passwords',
              'longHelp' => 'include/api/help/password_request_get_help.html',
              'noLoginRequired' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/PasswordApi.php',
              'className' => 'PasswordApi',
              'score' => 8.75,
            ),
          ),
        ),
        'help' => 
        array (
          'exceptions' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'help',
                1 => 'exceptions',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getExceptionsHelp',
              'shortHelp' => 'Shows the exceptions thrown by the API',
              'longHelp' => 'include/api/help/help_get_exceptions.html',
              'rawReply' => true,
              'noLoginRequired' => true,
              'file' => 'clients/base/api/HelpApi.php',
              'className' => 'HelpApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ping' => 
        array (
          'whattimeisit' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ping',
                1 => 'whattimeisit',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'sub_method',
              ),
              'method' => 'ping',
              'shortHelp' => 'An example API only responds with the current time in server format.',
              'longHelp' => 'include/api/help/ping_whattimeisit_get_help.html',
              'file' => 'clients/base/api/PingApi.php',
              'className' => 'PingApi',
              'score' => 8.75,
            ),
          ),
        ),
        'rt_GSyncConfig' => 
        array (
          'prefs' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'rt_GSyncConfig',
                1 => 'prefs',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'userConfig',
              'shortHelp' => 'This method is used for user configuration options',
              'longHelp' => '',
              'file' => 'custom/clients/base/api/rt_GSyncCustomApi.php',
              'className' => 'rt_GSyncCustomApi',
              'score' => 9.25,
            ),
          ),
        ),
        'OutboundEmailConfiguration' => 
        array (
          'list' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'OutboundEmailConfiguration',
                1 => 'list',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'listConfigurations',
              'shortHelp' => 'A list of outbound email configurations',
              'longHelp' => 'modules/OutboundEmailConfiguration/clients/base/api/help/outbound_email_configuration_list_get_help.html',
              'file' => 'modules/OutboundEmailConfiguration/clients/base/api/OutboundEmailConfigurationApi.php',
              'className' => 'OutboundEmailConfigurationApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ProductTemplates' => 
        array (
          'tree' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ProductTemplates',
                1 => 'tree',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'type',
              ),
              'method' => 'getTemplateTree',
              'shortHelp' => 'Returns a filterable tree structure of all Product Templates and Product Categories',
              'longHelp' => 'modules/ProductTemplates/clients/base/api/help/tree.html',
              'file' => 'modules/ProductTemplates/clients/base/api/ProductTemplateTreeApi.php',
              'className' => 'ProductTemplateTreeApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ExpressionEngine' => 
        array (
          'functions' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ExpressionEngine',
                1 => 'functions',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getSugarLogicFunctions',
              'shortHelp' => 'Retrieve the js for SugarLogic Expressions and Actions',
              'longHelp' => '',
              'noLoginRequired' => true,
              'rawReply' => true,
              'noEtag' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'modules/ExpressionEngine/clients/base/api/SugarLogicFunctionsApi.php',
              'className' => 'SugarLogicFunctionsApi',
              'score' => 8.75,
            ),
          ),
        ),
        'pmse_Inbox' => 
        array (
          'unattendedCases' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'unattendedCases',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'getUnattendedCases',
              'keepSession' => true,
              'acl' => 'adminOrDev',
              'shortHelp' => 'Retrieves the processes to show on Unattended Process view',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_get_unattended_cases_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
          'settings' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'settings',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'getSettingsEngine',
              'keepSession' => true,
              'acl' => 'adminOrDev',
              'shortHelp' => 'Retrieve settings for the PA engine',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_get_settings_engine_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionInvalidParameter',
                3 => 'SugarApiExceptionNotAuthorized',
              ),
              'shortHelp' => 'Returns a list of Processes by user',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_filter_list_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineFilterApi.php',
              'className' => 'PMSEEngineFilterApi',
              'score' => 8.75,
            ),
          ),
          'count' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'count',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'filterListCount',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineFilterApi.php',
              'className' => 'PMSEEngineFilterApi',
              'score' => 8.75,
            ),
          ),
          'casesList' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'casesList',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'casesList',
              ),
              'method' => 'selectCasesList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'acl' => 'adminOrDev',
              'shortHelp' => 'Returns a list with the processes for Process Management',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_select_cases_list_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSECasesListApi.php',
              'className' => 'PMSECasesListApi',
              'score' => 8.75,
            ),
          ),
          'getLog' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'getLog',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'getLog',
              ),
              'method' => 'selectLogLoad',
              'jsonParams' => 
              array (
              ),
              'acl' => 'adminOrDev',
              'shortHelp' => 'Return the text of the PMSE.log file',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_select_log_load_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSECasesListApi.php',
              'className' => 'PMSECasesListApi',
              'score' => 8.75,
            ),
          ),
          'logGetConfig' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'logGetConfig',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'logGetConfig',
              ),
              'method' => 'configLogLoad',
              'jsonParams' => 
              array (
              ),
              'acl' => 'adminOrDev',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSECasesListApi.php',
              'className' => 'PMSECasesListApi',
              'score' => 8.75,
            ),
          ),
        ),
        'DRI_Workflows' => 
        array (
          'validate-license' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'DRI_Workflows',
                1 => 'validate-license',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'validateLicense',
              'shortHelp' => '',
              'longHelp' => '',
              'noEtag' => true,
              'file' => 'modules/DRI_Workflows/clients/base/api/DRIWorkflowsApi.php',
              'className' => 'DRIWorkflowsApi',
              'score' => 8.75,
            ),
          ),
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'DRI_Workflows',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
              ),
              'method' => 'getConfig',
              'shortHelp' => '',
              'longHelp' => '',
              'noEtag' => true,
              'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyConfigApi.php',
              'className' => 'DRICustomerJourneyConfigApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Activities' => 
        array (
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Activities',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'getHomeActivities',
              'shortHelp' => 'This method gets a filtered list of homepage activities for a user',
              'longHelp' => 'modules/ActivityStream/clients/base/api/help/homeActivities.html',
              'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
              'className' => 'ActivitiesApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Meetings' => 
        array (
          'Agenda' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Meetings',
                1 => 'Agenda',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getAgenda',
              'shortHelp' => 'Fetch an agenda for a user',
              'longHelp' => 'include/api/html/meetings_agenda_get_help',
              'file' => 'modules/Meetings/clients/base/api/MeetingsApi.php',
              'className' => 'MeetingsApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ops_Backups' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ops_Backups',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'config',
              'shortHelp' => 'Retrieves the config settings for a given module',
              'longHelp' => 'include/api/help/module_config_get_help.html',
              'file' => 'modules/ops_Backups/clients/base/api/OnDemandConfigApi.php',
              'className' => 'OnDemandConfigApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Emails' => 
        array (
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Emails',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Lists filtered records.',
              'longHelp' => 'modules/Emails/clients/base/api/help/emails_filter_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionInvalidParameter',
                3 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'modules/Emails/clients/base/api/EmailsFilterApi.php',
              'className' => 'EmailsFilterApi',
              'score' => 8.75,
            ),
          ),
          'count' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Emails',
                1 => 'count',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'getFilterListCount',
              'shortHelp' => 'List of all records in this module',
              'longHelp' => 'modules/Emails/clients/base/api/help/emails_filter_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionInvalidParameter',
              ),
              'file' => 'modules/Emails/clients/base/api/EmailsFilterApi.php',
              'className' => 'EmailsFilterApi',
              'score' => 8.75,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Emails',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'retrieveRecord',
              'shortHelp' => 'Returns a single Emails record',
              'longHelp' => 'modules/Emails/clients/base/api/help/emails_record_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionMissingParameter',
                1 => 'SugarApiExceptionNotAuthorized',
                2 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/Emails/clients/base/api/EmailsApi.php',
              'className' => 'EmailsApi',
              'score' => 7.75,
            ),
          ),
        ),
        'ForecastManagerWorksheets' => 
        array (
          'export' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => 'export',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'export',
              'rawReply' => true,
              'allowDownloadCookie' => true,
              'shortHelp' => 'Returns a record set in CSV format along with HTTP headers to indicate content type.',
              'longHelp' => 'include/api/help/module_export_get_help.html',
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsExportApi.php',
              'className' => 'ForecastManagerWorksheetsExportApi',
              'score' => 8.75,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'timeperiod_id',
              ),
              'method' => 'ForecastManagerWorksheetsGet',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastManagerWorksheetGet.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionError',
                1 => 'SugarApiExceptionInvalidParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
              'className' => 'ForecastManagerWorksheetsFilterApi',
              'score' => 7.75,
            ),
          ),
          'chart' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => 'chart',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastManagerWorksheetsChartGet',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Filter records and reformat data for chart presentation',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/forecastManagerWorksheetsChartGet.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionError',
                1 => 'SugarApiExceptionInvalidParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
              'className' => 'ForecastManagerWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastManagerWorksheetFilter.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionError',
                1 => 'SugarApiExceptionInvalidParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
              'className' => 'ForecastManagerWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'RT_DocuSign' => 
        array (
          'retrieve' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'retrieve',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
                2 => 'info',
              ),
              'method' => 'MyGetMethod',
              'shortHelp' => 'Some help text',
              'file' => 'modules/RT_DocuSign/clients/base/api/RT_DocuSignConfig.php',
              'className' => 'RT_DocuSignConfig',
              'score' => 8.75,
            ),
          ),
          'save' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'save',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
                2 => 'data',
              ),
              'method' => 'MySaveMethod',
              'shortHelp' => 'Some help text',
              'file' => 'modules/RT_DocuSign/clients/base/api/RT_DocuSignConfig.php',
              'className' => 'RT_DocuSignConfig',
              'score' => 8.75,
            ),
          ),
          'test' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'test',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
                2 => 'data',
              ),
              'method' => 'Test_credientials',
              'shortHelp' => 'Some help text',
              'file' => 'modules/RT_DocuSign/clients/base/api/RT_DocuSignConfig.php',
              'className' => 'RT_DocuSignConfig',
              'score' => 8.75,
            ),
          ),
          'testschedular' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'testschedular',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
                2 => 'data',
              ),
              'method' => 'Test_Schedular',
              'shortHelp' => 'Some help text',
              'file' => 'modules/RT_DocuSign/clients/base/api/RT_DocuSignConfig.php',
              'className' => 'RT_DocuSignConfig',
              'score' => 8.75,
            ),
          ),
          'prefs' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'prefs',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'validateModule',
              'shortHelp' => 'This method is used for validating license for modules',
              'longHelp' => '',
              'file' => 'modules/RT_DocuSign/clients/base/api/RT_DocuSignConfig.php',
              'className' => 'RT_DocuSignConfig',
              'score' => 8.75,
            ),
          ),
          'getadmin' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'getadmin',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
                2 => 'data',
              ),
              'method' => 'getLicenceFromAdminConfig',
              'shortHelp' => 'This method boost user count for GSync',
              'longHelp' => '',
              'file' => 'modules/RT_DocuSign/clients/base/api/RT_DocuSignConfig.php',
              'className' => 'RT_DocuSignConfig',
              'score' => 8.75,
            ),
          ),
          'sendforsign' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'sendforsign',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
                2 => 'data',
              ),
              'method' => 'SendForSignature',
              'shortHelp' => 'Some help text',
              'file' => 'custom/modules/RT_DocuSign/clients/base/api/RT_DocuSign_Api.php',
              'className' => 'RT_DocuSign_Api',
              'score' => 9.25,
            ),
          ),
          'docuSignTemplates' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'docuSignTemplates',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
                2 => 'data',
              ),
              'method' => 'docuSignTemplates',
              'shortHelp' => 'Some help text',
              'file' => 'custom/modules/RT_DocuSign/clients/base/api/RT_DocuSign_Api.php',
              'className' => 'RT_DocuSign_Api',
              'score' => 9.25,
            ),
          ),
          'docuSignTemplate' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'docuSignTemplate',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
                2 => 'data',
              ),
              'method' => 'docuSignTemplate',
              'shortHelp' => 'Some help text',
              'file' => 'custom/modules/RT_DocuSign/clients/base/api/RT_DocuSign_Api.php',
              'className' => 'RT_DocuSign_Api',
              'score' => 9.25,
            ),
          ),
          'docuSignTemplateFields' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'docuSignTemplateFields',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
                2 => 'data',
              ),
              'method' => 'docuSignTemplateFields',
              'shortHelp' => 'Some help text',
              'file' => 'custom/modules/RT_DocuSign/clients/base/api/RT_DocuSign_Api.php',
              'className' => 'RT_DocuSign_Api',
              'score' => 9.25,
            ),
          ),
          'docuSignSaveFieldsMapping' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RT_DocuSign',
                1 => 'docuSignSaveFieldsMapping',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
                2 => 'data',
              ),
              'method' => 'docuSignSaveFieldsMapping',
              'shortHelp' => 'Some help text',
              'file' => 'custom/modules/RT_DocuSign/clients/base/api/RT_DocuSign_Api.php',
              'className' => 'RT_DocuSign_Api',
              'score' => 9.25,
            ),
          ),
        ),
        'KBContents' => 
        array (
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'KBContents',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Lists filtered records.',
              'longHelp' => 'include/api/help/module_filter_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionInvalidParameter',
                3 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'modules/KBContents/clients/base/api/KBContentsFilterApi.php',
              'className' => 'KBContentsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Forecasts' => 
        array (
          'init' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'init',
              ),
              'pathVars' => 
              array (
              ),
              'method' => 'forecastsInitialization',
              'shortHelp' => 'Returns forecasts initialization data and additional user data',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsApiInitGet.html',
              'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
              'className' => 'ForecastsApi',
              'score' => 8.75,
            ),
          ),
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'config',
              'shortHelp' => 'Retrieves the config settings for a given module',
              'longHelp' => 'include/api/help/config_get_help.html',
              'file' => 'modules/Forecasts/clients/base/api/ForecastsConfigApi.php',
              'className' => 'ForecastsConfigApi',
              'score' => 8.75,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsFilter.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionError',
                1 => 'SugarApiExceptionInvalidParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/Forecasts/clients/base/api/ForecastsFilterApi.php',
              'className' => 'ForecastsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Calendar' => 
        array (
          'invitee_search' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Calendar',
                1 => 'invitee_search',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'inviteeSearch',
              'shortHelp' => 'This method searches for people to invite to an event',
              'longHelp' => 'modules/Calendar/clients/base/api/help/calendar_invitee_search_get_help.html',
              'file' => 'modules/Calendar/clients/base/api/CalendarApi.php',
              'className' => 'CalendarApi',
              'score' => 8.75,
            ),
          ),
        ),
        'TimePeriods' => 
        array (
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'TimePeriods',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Lists filtered records.',
              'longHelp' => 'include/api/help/module_filter_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionInvalidParameter',
                3 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'modules/TimePeriods/clients/base/api/TimePeriodsFilterApi.php',
              'className' => 'TimePeriodsFilterApi',
              'score' => 8.75,
            ),
          ),
          'current' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'TimePeriods',
                1 => 'current',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'getCurrentTimePeriod',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Return the Current Timeperiod',
              'longHelp' => 'modules/TimePeriods/clients/base/api/help/TimePeriodsCurrentApi.html',
              'file' => 'modules/TimePeriods/clients/base/api/TimePeriodsCurrentApi.php',
              'className' => 'TimePeriodsCurrentApi',
              'score' => 8.75,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'TimePeriods',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'date',
              ),
              'method' => 'getTimePeriodByDate',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Return a Timeperiod by a given date',
              'longHelp' => 'modules/TimePeriods/clients/base/api/help/TimePeriodsGetByDateApi.html',
              'file' => 'modules/TimePeriods/clients/base/api/TimePeriodsCurrentApi.php',
              'className' => 'TimePeriodsCurrentApi',
              'score' => 7.75,
            ),
          ),
        ),
        'RevenueLineItems' => 
        array (
          'by_country' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'RevenueLineItems',
                1 => 'by_country',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
                2 => '',
              ),
              'method' => 'salesByCountry',
              'shortHelp' => 'Get opportunities won by country',
              'longHelp' => '',
              'file' => 'modules/RevenueLineItems/clients/base/api/RevenueLineItemsGlobeChartApi.php',
              'className' => 'RevenueLineItemsGlobeChartApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Dashboards' => 
        array (
          '<module>' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'minVersion' => '10',
              'maxVersion' => '10',
              'path' => 
              array (
                0 => 'Dashboards',
                1 => '<module>',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'module',
              ),
              'method' => 'getDashboards',
              'shortHelp' => 'Get dashboards for a module',
              'longHelp' => 'include/api/help/get_dashboards.html',
              'cacheEtag' => true,
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionInvalidParameter',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'modules/Dashboards/clients/base/api/DashboardListApi.php',
              'className' => 'DashboardListApi',
              'score' => 8.0,
            ),
          ),
          'Activities' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'minVersion' => '10',
              'maxVersion' => '10',
              'path' => 
              array (
                0 => 'Dashboards',
                1 => 'Activities',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'module',
              ),
              'method' => 'getDashboards',
              'shortHelp' => 'Get dashboards for activity stream',
              'longHelp' => 'include/api/help/get_activities_dashboards.html',
              'cacheEtag' => true,
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionInvalidParameter',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'modules/Dashboards/clients/base/api/DashboardListApi.php',
              'className' => 'DashboardListApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ForecastWorksheets' => 
        array (
          'export' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => 'export',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'export',
              'rawReply' => true,
              'allowDownloadCookie' => true,
              'shortHelp' => 'Returns a record set in CSV format along with HTTP headers to indicate content type.',
              'longHelp' => 'include/api/help/module_export_get_help.html',
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsExportApi.php',
              'className' => 'ForecastWorksheetsExportApi',
              'score' => 8.75,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'timeperiod_id',
              ),
              'method' => 'forecastWorksheetsGet',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetGet.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionError',
                1 => 'SugarApiExceptionInvalidParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
              'className' => 'ForecastWorksheetsFilterApi',
              'score' => 7.75,
            ),
          ),
          'chart' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => 'chart',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastWorksheetsChartGet',
              'jsonParams' => 
              array (
              ),
              'shortHelp' => 'Filter records and reformat data for chart presentation',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsWorksheetChartGet.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionError',
                1 => 'SugarApiExceptionInvalidParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
              'className' => 'ForecastWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastWorksheetsGet',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetFilter.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionError',
                1 => 'SugarApiExceptionInvalidParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
              'className' => 'ForecastWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Reports' => 
        array (
          'saved_reports' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'Reports',
                1 => 'saved_reports',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getSavedReports',
              'shortHelp' => 'Returns items from the saved_reports table based on a few criteria',
              'longHelp' => 'modules/Reports/clients/base/api/help/ReportsDashletApiGetSavedReports.html',
              'file' => 'modules/Reports/clients/base/api/ReportsDashletsApi.php',
              'className' => 'ReportsDashletsApi',
              'score' => 8.75,
            ),
          ),
        ),
      ),
      'POST' => 
      array (
        '<module>' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Creates the config entries for the given module',
              'longHelp' => 'include/api/help/module_config_post_help.html',
              'file' => 'clients/base/api/ConfigModuleApi.php',
              'className' => 'ConfigModuleApi',
              'score' => 8.0,
            ),
            1 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Creates the config entries for the given module',
              'longHelp' => 'include/api/help/module_config_post_help.html',
              'file' => 'modules/KBContents/clients/base/api/KBContentsConfigApi.php',
              'className' => 'KBContentsConfigApi',
              'score' => 8.0,
            ),
          ),
          'duplicateCheck' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'duplicateCheck',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'checkForDuplicates',
              'shortHelp' => 'Check for duplicate records within a module',
              'longHelp' => 'include/api/help/module_duplicatecheck_post_help.html',
              'file' => 'clients/base/api/DuplicateCheckApi.php',
              'className' => 'DuplicateCheckApi',
              'score' => 8.0,
            ),
          ),
          'globalsearch' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'globalsearch',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'globalSearch',
              'shortHelp' => 'Global search',
              'longHelp' => 'include/api/help/globalsearch_get_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotAuthorized',
                1 => 'SugarApiExceptionSearchUnavailable',
                2 => 'SugarApiExceptionSearchRuntime',
              ),
              'file' => 'clients/base/api/GlobalSearchApi.php',
              'className' => 'GlobalSearchApi',
              'score' => 8.0,
            ),
          ),
          'record_list' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'record_list',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'recordListCreate',
              'shortHelp' => 'An API to create and save lists of records',
              'longHelp' => 'include/api/help/module_recordlist_post.html',
              'file' => 'clients/base/api/RecordListApi.php',
              'className' => 'RecordListApi',
              'score' => 8.0,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'shortHelp' => 'Lists filtered records.',
              'longHelp' => 'include/api/help/module_filter_post_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionInvalidParameter',
                3 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'clients/base/api/FilterApi.php',
              'className' => 'FilterApi',
              'score' => 8.0,
            ),
          ),
          'create' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => '<module>',
                1 => 'create',
              ),
              'pathVars' => 
              array (
                0 => 'module',
              ),
              'method' => 'createCase',
              'shortHelp' => 'Create service requests from Montevista service request forms in SugarCRM',
              'longHelp' => '',
              'noLoginRequired' => true,
              'file' => 'custom/modules/Cases/clients/base/api/webToCaseApi.php',
              'className' => 'webToCaseApi',
              'score' => 8.5,
            ),
          ),
        ),
        'oauth2' => 
        array (
          'token' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'oauth2',
                1 => 'token',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'token',
              'shortHelp' => 'OAuth2 token requests.',
              'longHelp' => 'include/api/help/oauth2_token_post_help.html',
              'noLoginRequired' => true,
              'keepSession' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/OAuth2Api.php',
              'className' => 'OAuth2Api',
              'score' => 8.75,
            ),
          ),
          'logout' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'oauth2',
                1 => 'logout',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'logout',
              'shortHelp' => 'OAuth2 logout.',
              'longHelp' => 'include/api/help/oauth2_logout_post_help.html',
              'keepSession' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/base/api/OAuth2Api.php',
              'className' => 'OAuth2Api',
              'score' => 8.75,
            ),
          ),
        ),
        'me' => 
        array (
          'password' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'me',
                1 => 'password',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'verifyPassword',
              'shortHelp' => 'Verifies current user\'s password',
              'longHelp' => 'include/api/help/me_password_post_help.html',
              'file' => 'clients/base/api/CurrentUserApi.php',
              'className' => 'CurrentUserApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Leads' => 
        array (
          'register' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Leads',
                1 => 'register',
              ),
              'pathVars' => 
              array (
                0 => 'module',
              ),
              'method' => 'createLeadRecord',
              'shortHelp' => 'This method registers leads',
              'longHelp' => 'include/api/help/leads_register_post_help.html',
              'noLoginRequired' => true,
              'file' => 'clients/base/api/RegisterLeadApi.php',
              'className' => 'RegisterLeadApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ProductTemplates' => 
        array (
          'tree' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'ProductTemplates',
                1 => 'tree',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'type',
              ),
              'method' => 'getTemplateTree',
              'shortHelp' => 'Returns a filterable tree structure of all Product Templates and Product Categories',
              'longHelp' => 'modules/ProductTemplates/clients/base/api/help/tree.html',
              'file' => 'modules/ProductTemplates/clients/base/api/ProductTemplateTreeApi.php',
              'className' => 'ProductTemplateTreeApi',
              'score' => 8.75,
            ),
          ),
        ),
        'pmse_Inbox' => 
        array (
          'save_notes' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'save_notes',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'saveNotes',
              'keepSession' => true,
              'shortHelp' => 'Creates a new note for a process',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_save_notes_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
        ),
        'jckl_FilterTemplates' => 
        array (
          'deployTemplate' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'jckl_FilterTemplates',
                1 => 'deployTemplate',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'path',
              ),
              'method' => 'deployTemplate',
              'shortHelp' => 'Receives Template ID, Category, And Deploy IDs and copies Templates to proper users',
              'file' => 'modules/jckl_FilterTemplates/clients/base/api/jckl_FilterTemplatesApi.php',
              'className' => 'jckl_FilterTemplatesApi',
              'score' => 8.75,
            ),
          ),
          'deployFilter' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'jckl_FilterTemplates',
                1 => 'deployFilter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'path',
              ),
              'method' => 'deployFilter',
              'shortHelp' => 'Receives Filter ID, and copies Templates to users',
              'file' => 'modules/jckl_FilterTemplates/clients/base/api/jckl_FilterTemplatesApi.php',
              'className' => 'jckl_FilterTemplatesApi',
              'score' => 8.75,
            ),
          ),
        ),
        'DRI_Workflows' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'DRI_Workflows',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Creates the config entries for the given module',
              'longHelp' => 'include/api/help/module_config_post_help.html',
              'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyConfigApi.php',
              'className' => 'DRICustomerJourneyConfigApi',
              'score' => 8.75,
            ),
          ),
        ),
        'DRI_Workflow_Templates' => 
        array (
          'import-templates' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'DRI_Workflow_Templates',
                1 => 'import-templates',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'importTemplates',
              'shortHelp' => '',
              'longHelp' => '',
              'noEtag' => true,
              'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyControlPanelApi.php',
              'className' => 'DRICustomerJourneyControlPanelApi',
              'score' => 8.75,
            ),
          ),
          'resave-all' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'DRI_Workflow_Templates',
                1 => 'resave-all',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'resaveAll',
              'shortHelp' => '',
              'longHelp' => '',
              'noEtag' => true,
              'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyControlPanelApi.php',
              'className' => 'DRICustomerJourneyControlPanelApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ops_Backups' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'ops_Backups',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Creates the config entries for the given module',
              'longHelp' => 'include/api/help/module_config_post_help.html',
              'file' => 'modules/ops_Backups/clients/base/api/OnDemandConfigApi.php',
              'className' => 'OnDemandConfigApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Mail' => 
        array (
          'archive' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Mail',
                1 => 'archive',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'archiveMail',
              'shortHelp' => 'Archive Mail Item',
              'longHelp' => 'modules/Emails/clients/base/api/help/mail_archive_help.html',
              'file' => 'modules/Emails/clients/base/api/MailApi.php',
              'className' => 'MailApi',
              'score' => 8.75,
            ),
          ),
          'attachment' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Mail',
                1 => 'attachment',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'saveAttachment',
              'rawPostContents' => true,
              'shortHelp' => 'Saves a mail attachment.',
              'longHelp' => 'modules/Emails/clients/base/api/help/mail_attachment_post_help.html',
              'file' => 'modules/Emails/clients/base/api/MailApi.php',
              'className' => 'MailApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Emails' => 
        array (
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Emails',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'shortHelp' => 'Lists filtered records.',
              'longHelp' => 'include/api/help/module_filter_post_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
                1 => 'SugarApiExceptionError',
                2 => 'SugarApiExceptionInvalidParameter',
                3 => 'SugarApiExceptionNotAuthorized',
              ),
              'file' => 'modules/Emails/clients/base/api/EmailsFilterApi.php',
              'className' => 'EmailsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'ForecastManagerWorksheets' => 
        array (
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastManagerWorksheetFilter.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionError',
                1 => 'SugarApiExceptionInvalidParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
              'className' => 'ForecastManagerWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
          'assignQuota' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'ForecastManagerWorksheets',
                1 => 'assignQuota',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'action',
              ),
              'method' => 'assignQuota',
              'shortHelp' => 'Assign the Quota for Users with out actually committing',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetManagerAssignQuota.html',
              'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsApi.php',
              'className' => 'ForecastManagerWorksheetsApi',
              'score' => 8.75,
            ),
          ),
        ),
        'KBContents' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'KBContents',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Creates the config entries for the KBContents module.',
              'longHelp' => 'modules/KBContents/clients/base/api/help/kb_config_put_help.html',
              'file' => 'modules/KBContents/clients/base/api/KBContentsConfigApi.php',
              'className' => 'KBContentsConfigApi',
              'score' => 8.75,
            ),
          ),
          'duplicateCheck' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'KBContents',
                1 => 'duplicateCheck',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'checkForDuplicates',
              'shortHelp' => 'Check for duplicate records within a module',
              'longHelp' => 'include/api/help/module_duplicatecheck_post_help.html',
              'file' => 'modules/KBContents/clients/base/api/KBSDuplicateCheckApi.php',
              'className' => 'KBSDuplicateCheckApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Forecasts' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastsConfigSave',
              'shortHelp' => 'Creates the config entries for the Forecasts module.',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsConfigPut.html',
              'file' => 'modules/Forecasts/clients/base/api/ForecastsConfigApi.php',
              'className' => 'ForecastsConfigApi',
              'score' => 8.75,
            ),
          ),
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'filterList',
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsFilter.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionError',
                1 => 'SugarApiExceptionInvalidParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/Forecasts/clients/base/api/ForecastsFilterApi.php',
              'className' => 'ForecastsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'RevenueLineItems' => 
        array (
          'multi-quote' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'RevenueLineItems',
                1 => 'multi-quote',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'action',
              ),
              'method' => 'multiConvertToQuote',
              'shortHelp' => 'Convert a Revenue Line Item Into A Quote Record',
              'longHelp' => 'modules/RevenueLineItems/clients/base/api/help/multi_convert_to_quote.html',
              'file' => 'modules/RevenueLineItems/clients/base/api/RevenueLineItemToQuoteConvertApi.php',
              'className' => 'RevenueLineItemToQuoteConvertApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Dashboards' => 
        array (
          '<module>' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'minVersion' => '10',
              'maxVersion' => '10',
              'path' => 
              array (
                0 => 'Dashboards',
                1 => '<module>',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => 'module',
              ),
              'method' => 'createDashboard',
              'shortHelp' => 'Create a new dashboard for a module',
              'longHelp' => 'include/api/help/create_dashboard.html',
              'file' => 'modules/Dashboards/clients/base/api/DashboardApi.php',
              'className' => 'DashboardApi',
              'score' => 8.0,
            ),
          ),
        ),
        'ForecastWorksheets' => 
        array (
          'filter' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => 'filter',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastWorksheetsGet',
              'shortHelp' => 'Filter records from a single module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetFilter.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionError',
                1 => 'SugarApiExceptionInvalidParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
              'className' => 'ForecastWorksheetsFilterApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Opportunities' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Opportunities',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Save the config settings for the Opportunities Module',
              'longHelp' => 'modules/Opportunities/clients/base/api/help/config_post_help.html',
              'file' => 'modules/Opportunities/clients/base/api/OpportunitiesConfigApi.php',
              'className' => 'OpportunitiesConfigApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Configurator' => 
        array (
          'save-value' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'Configurator',
                1 => 'save-value',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'saveValueInConfig',
              'shortHelp' => 'Save the value in config file',
              'longHelp' => '',
              'file' => 'custom/modules/Configurator/clients/base/api/CustomConfiguratorApi.php',
              'className' => 'CustomConfiguratorApi',
              'score' => 9.25,
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        '<module>' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => '<module>',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Updates the config entries for given module',
              'longHelp' => 'include/api/help/module_config_put_help.html',
              'file' => 'clients/base/api/ConfigModuleApi.php',
              'className' => 'ConfigModuleApi',
              'score' => 8.0,
            ),
            1 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => '<module>',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Updates the config entries for given module',
              'longHelp' => 'include/api/help/module_config_put_help.html',
              'file' => 'modules/KBContents/clients/base/api/KBContentsConfigApi.php',
              'className' => 'KBContentsConfigApi',
              'score' => 8.0,
            ),
          ),
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => '<module>',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'updateRecord',
              'shortHelp' => 'This method updates a record of the specified type',
              'longHelp' => 'include/api/help/module_record_put_help.html',
              'file' => 'clients/base/api/ModuleApi.php',
              'className' => 'ModuleApi',
              'score' => 7.0,
            ),
          ),
          'MassUpdate' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => '<module>',
                1 => 'MassUpdate',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'massUpdate',
              'shortHelp' => 'An API to handle mass update.',
              'longHelp' => 'include/api/help/module_massupdate_put_help.html',
              'file' => 'clients/base/api/MassUpdateApi.php',
              'className' => 'MassUpdateApi',
              'score' => 8.0,
            ),
          ),
        ),
        'me' => 
        array (
          'password' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'me',
                1 => 'password',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'updatePassword',
              'shortHelp' => 'Updates current user\'s password',
              'longHelp' => 'include/api/help/me_password_put_help.html',
              'file' => 'clients/base/api/CurrentUserApi.php',
              'className' => 'CurrentUserApi',
              'score' => 8.75,
            ),
          ),
          'preferences' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'me',
                1 => 'preferences',
              ),
              'pathVars' => 
              array (
              ),
              'method' => 'userPreferencesSave',
              'shortHelp' => 'Mass Save Updated Preferences For a User',
              'longHelp' => 'include/api/help/me_preferences_put_help.html',
              'file' => 'clients/base/api/CurrentUserApi.php',
              'className' => 'CurrentUserApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Tags' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'Tags',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'updateRecord',
              'shortHelp' => 'This method updates a record of the specified type',
              'longHelp' => 'include/api/help/module_record_put_help.html',
              'file' => 'modules/Tags/clients/base/api/TagsApi.php',
              'className' => 'TagsApi',
              'score' => 7.75,
            ),
          ),
        ),
        'pmse_Inbox' => 
        array (
          'engine_route' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'engine_route',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'engineRoute',
              'keepSession' => true,
              'shortHelp' => 'Evaluates the response of the user form Show Process [Approve, Reject, Route]',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_engine_route_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
          'engine_claim' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'engine_claim',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'engineClaim',
              'keepSession' => true,
              'shortHelp' => 'Claims the processes to the current user',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_engine_claim_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
          'ReassignForm' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'ReassignForm',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'reassignRecord',
              'keepSession' => true,
              'shortHelp' => 'Update the user assigned to the record associated to the process. DEPRECATED',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_deprecate.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
          'AdhocReassign' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'AdhocReassign',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'adhocReassign',
              'keepSession' => true,
              'shortHelp' => 'Update the process user associated to the process. DEPRECATED',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_deprecate.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
          'reactivateFlows' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'reactivateFlows',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'reactivateFlows',
              'keepSession' => true,
              'acl' => 'adminOrDev',
              'shortHelp' => 'Call methods to re-execute processes. DEPRECATED',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_deprecate.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
          'reassignFlows' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'reassignFlows',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'reassignFlows',
              'keepSession' => true,
              'acl' => 'adminOrDev',
              'shortHelp' => 'Call methods to reassign processes',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_reassign_flows_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
          'cancelCases' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'cancelCases',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'cancelCase',
              'keepSession' => true,
              'acl' => 'adminOrDev',
              'shortHelp' => 'Call methods to cancel a process',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_cancel_case_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
          'settings' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'settings',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'putSettingsEngine',
              'keepSession' => true,
              'acl' => 'adminOrDev',
              'shortHelp' => 'Update settings for the PA engine',
              'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_put_settings_engine_help.html',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineApi.php',
              'className' => 'PMSEEngineApi',
              'score' => 8.75,
            ),
          ),
          'logSetConfig' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'pmse_Inbox',
                1 => 'logSetConfig',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configLogPut',
              'acl' => 'adminOrDev',
              'file' => 'modules/pmse_Inbox/clients/base/api/PMSECasesListApi.php',
              'className' => 'PMSECasesListApi',
              'score' => 8.75,
            ),
          ),
        ),
        'DRI_Workflows' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'DRI_Workflows',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Updates the config entries for given module',
              'longHelp' => 'include/api/help/module_config_put_help.html',
              'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRICustomerJourneyConfigApi.php',
              'className' => 'DRICustomerJourneyConfigApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Meetings' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'Meetings',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'updateCalendarEvent',
              'shortHelp' => 'This method updates a single event record or a series of event records of the specified type',
              'longHelp' => 'include/api/help/calendar_events_record_update_help.html',
              'file' => 'modules/Meetings/clients/base/api/MeetingsApi.php',
              'className' => 'MeetingsApi',
              'score' => 7.75,
            ),
          ),
        ),
        'ops_Backups' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'ops_Backups',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Updates the config entries for given module',
              'longHelp' => 'include/api/help/module_config_put_help.html',
              'file' => 'modules/ops_Backups/clients/base/api/OnDemandConfigApi.php',
              'className' => 'OnDemandConfigApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Emails' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'Emails',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'updateRecord',
              'shortHelp' => 'This method updates an Emails record',
              'longHelp' => 'modules/Emails/clients/base/api/help/emails_record_put_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionInvalidParameter',
                1 => 'SugarApiExceptionMissingParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
                4 => 'SugarApiException',
                5 => 'SugarApiExceptionError',
              ),
              'file' => 'modules/Emails/clients/base/api/EmailsApi.php',
              'className' => 'EmailsApi',
              'score' => 7.75,
            ),
          ),
        ),
        'OutboundEmail' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'OutboundEmail',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'updateRecord',
              'shortHelp' => 'This method updates an OutboundEmail record',
              'longHelp' => 'modules/OutboundEmail/clients/base/api/help/outbound_email_record_put_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionInvalidParameter',
                1 => 'SugarApiExceptionMissingParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
                4 => 'SugarApiException',
              ),
              'file' => 'modules/OutboundEmail/clients/base/api/OutboundEmailApi.php',
              'className' => 'OutboundEmailApi',
              'score' => 7.75,
            ),
          ),
        ),
        'KBContents' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'KBContents',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'configSave',
              'shortHelp' => 'Updates the config entries for the KBContents module',
              'longHelp' => 'modules/KBContents/clients/base/api/help/kb_config_put_help.html',
              'file' => 'modules/KBContents/clients/base/api/KBContentsConfigApi.php',
              'className' => 'KBContentsConfigApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Forecasts' => 
        array (
          'config' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'Forecasts',
                1 => 'config',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'method' => 'forecastsConfigSave',
              'shortHelp' => 'Updates the config entries for the Forecasts module',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsConfigPut.html',
              'file' => 'modules/Forecasts/clients/base/api/ForecastsConfigApi.php',
              'className' => 'ForecastsConfigApi',
              'score' => 8.75,
            ),
          ),
        ),
        'Calls' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'Calls',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'updateCalendarEvent',
              'shortHelp' => 'This method updates a single event record or a series of event records of the specified type',
              'longHelp' => 'include/api/help/calendar_events_record_update_help.html',
              'file' => 'modules/Calls/clients/base/api/CallsApi.php',
              'className' => 'CallsApi',
              'score' => 7.75,
            ),
          ),
        ),
        'EmailAddresses' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'EmailAddresses',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'updateRecord',
              'shortHelp' => 'This method updates an EmailAddresses record',
              'longHelp' => 'modules/EmailAddresses/clients/base/api/help/email_addresses_record_put_help.html',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionInvalidParameter',
                1 => 'SugarApiExceptionMissingParameter',
                2 => 'SugarApiExceptionNotAuthorized',
                3 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/EmailAddresses/clients/base/api/EmailAddressesApi.php',
              'className' => 'EmailAddressesApi',
              'score' => 7.75,
            ),
          ),
        ),
        'ForecastWorksheets' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'ForecastWorksheets',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'forecastWorksheetSave',
              'shortHelp' => 'Updates a ForecastWorksheet model',
              'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetPut.html',
              'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsApi.php',
              'className' => 'ForecastWorksheetsApi',
              'score' => 7.75,
            ),
          ),
        ),
        'pmse_Project' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'pmse_Project',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'updateRecord',
              'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectCRUDApi.php',
              'className' => 'PMSEProjectCRUDApi',
              'score' => 7.75,
            ),
          ),
        ),
      ),
      'DELETE' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'DELETE',
              'path' => 
              array (
                0 => '<module>',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'deleteRecord',
              'shortHelp' => 'This method deletes a record of the specified type',
              'longHelp' => 'include/api/help/module_record_delete_help.html',
              'file' => 'clients/base/api/ModuleApi.php',
              'className' => 'ModuleApi',
              'score' => 7.0,
            ),
          ),
          'MassUpdate' => 
          array (
            0 => 
            array (
              'reqType' => 'DELETE',
              'path' => 
              array (
                0 => '<module>',
                1 => 'MassUpdate',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'jsonParams' => 
              array (
                0 => 'filter',
              ),
              'method' => 'massDelete',
              'shortHelp' => 'An API to handle mass delete.',
              'longHelp' => 'include/api/help/module_massupdate_delete_help.html',
              'file' => 'clients/base/api/MassUpdateApi.php',
              'className' => 'MassUpdateApi',
              'score' => 8.0,
            ),
          ),
        ),
        'Users' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'DELETE',
              'path' => 
              array (
                0 => 'Users',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'deleteUser',
              'shortHelp' => 'This method deletes a User record',
              'longHelp' => 'modules/Users/clients/base/api/help/UsersApi.html',
              'file' => 'modules/Users/clients/base/api/UsersApi.php',
              'className' => 'UsersApi',
              'score' => 7.75,
            ),
          ),
        ),
        'Meetings' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'DELETE',
              'path' => 
              array (
                0 => 'Meetings',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'deleteCalendarEvent',
              'shortHelp' => 'This method deletes a single event record or a series of event records of the specified type',
              'longHelp' => 'include/api/help/calendar_events_record_delete_help.html',
              'file' => 'modules/Meetings/clients/base/api/MeetingsApi.php',
              'className' => 'MeetingsApi',
              'score' => 7.75,
            ),
          ),
        ),
        'Calls' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'DELETE',
              'path' => 
              array (
                0 => 'Calls',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'deleteCalendarEvent',
              'shortHelp' => 'This method deletes a single event record or a series of event records of the specified type',
              'longHelp' => 'include/api/help/calendar_events_record_delete_help.html',
              'file' => 'modules/Calls/clients/base/api/CallsApi.php',
              'className' => 'CallsApi',
              'score' => 7.75,
            ),
          ),
        ),
        'pmse_Project' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => 'DELETE',
              'path' => 
              array (
                0 => 'pmse_Project',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => 'record',
              ),
              'method' => 'deleteRecord',
              'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectCRUDApi.php',
              'className' => 'PMSEProjectCRUDApi',
              'score' => 7.75,
            ),
          ),
        ),
      ),
      '?' => 
      array (
        'KBDocuments' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => '?',
              'path' => 
              array (
                0 => 'KBDocuments',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'extraScore' => 1,
              'method' => 'disableApi',
              'shortHelp' => 'Disable KBDocuments',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/KBContents/clients/base/api/KBContentsApi.php',
              'className' => 'KBContentsApi',
              'score' => 7.75,
            ),
          ),
        ),
        'KBArticles' => 
        array (
          '?' => 
          array (
            0 => 
            array (
              'reqType' => '?',
              'path' => 
              array (
                0 => 'KBArticles',
                1 => '?',
              ),
              'pathVars' => 
              array (
                0 => 'module',
                1 => '',
              ),
              'extraScore' => 1,
              'method' => 'disableApi',
              'shortHelp' => 'Disable KBArticles',
              'exceptions' => 
              array (
                0 => 'SugarApiExceptionNotFound',
              ),
              'file' => 'modules/KBContents/clients/base/api/KBContentsApi.php',
              'className' => 'KBContentsApi',
              'score' => 7.75,
            ),
          ),
        ),
      ),
    ),
    'mobile' => 
    array (
      'POST' => 
      array (
        'oauth2' => 
        array (
          'token' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'oauth2',
                1 => 'token',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'token',
              'shortHelp' => 'OAuth2 token requests.',
              'longHelp' => 'include/api/help/oauth2_token_post_help.html',
              'noLoginRequired' => true,
              'keepSession' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/mobile/api/OAuth2MobileApi.php',
              'className' => 'OAuth2MobileApi',
              'score' => 8.75,
            ),
          ),
          'logout' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'oauth2',
                1 => 'logout',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'logout',
              'shortHelp' => 'OAuth2 logout.',
              'longHelp' => 'include/api/help/oauth2_logout_post_help.html',
              'keepSession' => true,
              'ignoreMetaHash' => true,
              'ignoreSystemStatusError' => true,
              'file' => 'clients/mobile/api/OAuth2MobileApi.php',
              'className' => 'OAuth2MobileApi',
              'score' => 8.75,
            ),
          ),
        ),
        'me' => 
        array (
          'password' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'me',
                1 => 'password',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'verifyPassword',
              'shortHelp' => 'Verifies current user\'s password',
              'longHelp' => 'include/api/help/me_password_post_help.html',
              'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
              'className' => 'CurrentUserMobileApi',
              'score' => 8.75,
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        'me' => 
        array (
          'password' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'me',
                1 => 'password',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'updatePassword',
              'shortHelp' => 'Updates current user\'s password',
              'longHelp' => 'include/api/help/me_password_put_help.html',
              'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
              'className' => 'CurrentUserMobileApi',
              'score' => 8.75,
            ),
          ),
          'preferences' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'me',
                1 => 'preferences',
              ),
              'pathVars' => 
              array (
              ),
              'method' => 'userPreferencesSave',
              'shortHelp' => 'Mass Save Updated Preferences For a User',
              'longHelp' => 'include/api/help/me_preferences_put_help.html',
              'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
              'className' => 'CurrentUserMobileApi',
              'score' => 8.75,
            ),
          ),
        ),
      ),
      'GET' => 
      array (
        'me' => 
        array (
          'preferences' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'me',
                1 => 'preferences',
              ),
              'pathVars' => 
              array (
              ),
              'method' => 'userPreferences',
              'shortHelp' => 'Returns all the current user\'s stored preferences',
              'longHelp' => 'include/api/help/me_preferences_get_help.html',
              'ignoreMetaHash' => true,
              'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
              'className' => 'CurrentUserMobileApi',
              'score' => 8.75,
            ),
          ),
          'following' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'me',
                1 => 'following',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getMyFollowedRecords',
              'shortHelp' => 'This method retrieves all followed methods for the user.',
              'longHelp' => 'include/api/help/me_getfollowed_help.html',
              'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
              'className' => 'CurrentUserMobileApi',
              'score' => 8.75,
            ),
          ),
        ),
      ),
    ),
    'portal' => 
    array (
      'PUT' => 
      array (
        'me' => 
        array (
          'password' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'me',
                1 => 'password',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'updatePassword',
              'shortHelp' => 'Updates current user\'s password',
              'longHelp' => 'include/api/help/me_password_put_help.html',
              'file' => 'clients/portal/api/CurrentUserPortalApi.php',
              'className' => 'CurrentUserPortalApi',
              'score' => 8.75,
            ),
          ),
          'preferences' => 
          array (
            0 => 
            array (
              'reqType' => 'PUT',
              'path' => 
              array (
                0 => 'me',
                1 => 'preferences',
              ),
              'pathVars' => 
              array (
              ),
              'method' => 'userPreferencesSave',
              'shortHelp' => 'Mass Save Updated Preferences For a User',
              'longHelp' => 'include/api/help/me_preferences_put_help.html',
              'file' => 'clients/portal/api/CurrentUserPortalApi.php',
              'className' => 'CurrentUserPortalApi',
              'score' => 8.75,
            ),
          ),
        ),
      ),
      'POST' => 
      array (
        'me' => 
        array (
          'password' => 
          array (
            0 => 
            array (
              'reqType' => 'POST',
              'path' => 
              array (
                0 => 'me',
                1 => 'password',
              ),
              'pathVars' => 
              array (
                0 => '',
              ),
              'method' => 'verifyPassword',
              'shortHelp' => 'Verifies current user\'s password',
              'longHelp' => 'include/api/help/me_password_post_help.html',
              'file' => 'clients/portal/api/CurrentUserPortalApi.php',
              'className' => 'CurrentUserPortalApi',
              'score' => 8.75,
            ),
          ),
        ),
      ),
      'GET' => 
      array (
        'me' => 
        array (
          'preferences' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'me',
                1 => 'preferences',
              ),
              'pathVars' => 
              array (
              ),
              'method' => 'userPreferences',
              'shortHelp' => 'Returns all the current user\'s stored preferences',
              'longHelp' => 'include/api/help/me_preferences_get_help.html',
              'ignoreMetaHash' => true,
              'file' => 'clients/portal/api/CurrentUserPortalApi.php',
              'className' => 'CurrentUserPortalApi',
              'score' => 8.75,
            ),
          ),
          'following' => 
          array (
            0 => 
            array (
              'reqType' => 'GET',
              'path' => 
              array (
                0 => 'me',
                1 => 'following',
              ),
              'pathVars' => 
              array (
                0 => '',
                1 => '',
              ),
              'method' => 'getMyFollowedRecords',
              'shortHelp' => 'This method retrieves all followed methods for the user.',
              'longHelp' => 'include/api/help/me_getfollowed_help.html',
              'file' => 'clients/portal/api/CurrentUserPortalApi.php',
              'className' => 'CurrentUserPortalApi',
              'score' => 8.75,
            ),
          ),
        ),
      ),
    ),
  ),
  5 => 
  array (
    'base' => 
    array (
      'GET' => 
      array (
        '<module>' => 
        array (
          'chart' => 
          array (
            'pipeline' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => 'chart',
                      2 => 'pipeline',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => '',
                      2 => '',
                      3 => 'timeperiod_id',
                      4 => 'type',
                    ),
                    'method' => 'pipeline',
                    'shortHelp' => 'Get the current opportunity pipeline data for the current timeperiod',
                    'longHelp' => 'modules/Opportunities/clients/base/api/help/OpportunitiesPipelineChartApi.html',
                    'file' => 'clients/base/api/PipelineChartApi.php',
                    'className' => 'PipelineChartApi',
                    'score' => 11.25,
                  ),
                ),
              ),
            ),
          ),
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'getRelatedRecord',
                    'shortHelp' => 'Fetch a single record related to this module',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_get_help.html',
                    'file' => 'clients/base/api/RelateRecordApi.php',
                    'className' => 'RelateRecordApi',
                    'score' => 10.25,
                  ),
                  1 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'getRelatedRecord',
                    'shortHelp' => 'Fetch a single record related to this module',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_get_help.html',
                    'file' => 'custom/clients/base/api/CustomRelateRecordApi.php',
                    'className' => 'CustomRelateRecordApi',
                    'score' => 10.75,
                  ),
                ),
                'filter' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => 'filter',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => '',
                    ),
                    'jsonParams' => 
                    array (
                      0 => 'filter',
                    ),
                    'method' => 'filterRelated',
                    'shortHelp' => 'Lists related filtered records.',
                    'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                    'file' => 'clients/base/api/RelateApi.php',
                    'className' => 'RelateApi',
                    'score' => 11.25,
                  ),
                ),
                'count' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => 'count',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => '',
                    ),
                    'jsonParams' => 
                    array (
                      0 => 'filter',
                    ),
                    'method' => 'filterRelatedCount',
                    'shortHelp' => 'Counts all filtered related records.',
                    'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                    'file' => 'clients/base/api/RelateApi.php',
                    'className' => 'RelateApi',
                    'score' => 11.25,
                  ),
                ),
              ),
              'signed_copies' => 
              array (
                'count' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => 'signed_copies',
                      4 => 'count',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => 'link',
                      3 => 'link_name',
                      4 => '',
                    ),
                    'jsonParams' => 
                    array (
                      0 => 'filter',
                    ),
                    'method' => 'signedCopiesCount',
                    'shortHelp' => 'Lists related records.',
                    'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                    'file' => 'custom/clients/base/api/SignedCopiesApi.php',
                    'className' => 'SignedCopiesApi',
                    'score' => 12.75,
                  ),
                ),
              ),
              'activities' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => 'activities',
                      4 => 'filter',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                    ),
                    'method' => 'getRecordActivities',
                    'shortHelp' => 'This method retrieves a filtered list of a record\'s activities',
                    'longHelp' => 'modules/ActivityStream/clients/base/api/help/recordActivities.html',
                    'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
                    'className' => 'ActivitiesApi',
                    'score' => 12.25,
                  ),
                ),
              ),
            ),
            'collection' => 
            array (
              '?' => 
              array (
                'count' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'collection',
                      3 => '?',
                      4 => 'count',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'collection_name',
                      4 => '',
                    ),
                    'method' => 'getCollectionCount',
                    'shortHelp' => 'Counts collection records.',
                    'longHelp' => 'include/api/help/module_record_collection_collection_name_count_get_help.html',
                    'file' => 'clients/base/api/RelateCollectionApi.php',
                    'className' => 'RelateCollectionApi',
                    'score' => 11.25,
                  ),
                ),
              ),
            ),
          ),
          'temp' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => 'temp',
                      2 => 'file',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'field',
                      4 => 'temp_id',
                    ),
                    'method' => 'getTempImage',
                    'rawReply' => true,
                    'allowDownloadCookie' => true,
                    'shortHelp' => 'Reads a temporary image and deletes it.',
                    'longHelp' => 'include/api/help/module_temp_file_field_temp_id_get_help.html',
                    'file' => 'clients/base/api/FileTempApi.php',
                    'className' => 'FileTempApi',
                    'score' => 11.25,
                  ),
                ),
              ),
            ),
          ),
        ),
        'pmse_Inbox' => 
        array (
          'temp' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'pmse_Inbox',
                      1 => 'temp',
                      2 => 'file',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'field',
                      4 => 'temp_id',
                    ),
                    'method' => 'getTempImage',
                    'rawReply' => true,
                    'allowDownloadCookie' => true,
                    'file' => 'modules/pmse_Inbox/clients/base/api/PMSEImageGeneratorApi.php',
                    'className' => 'PMSEImageGeneratorApi',
                    'score' => 12.0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'pmse_Project' => 
        array (
          'temp' => 
          array (
            'file' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'pmse_Project',
                      1 => 'temp',
                      2 => 'file',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'field',
                      4 => 'temp_id',
                    ),
                    'method' => 'getTempImage',
                    'rawReply' => true,
                    'allowDownloadCookie' => true,
                    'file' => 'modules/pmse_Inbox/clients/base/api/PMSEImageGeneratorApi.php',
                    'className' => 'PMSEImageGeneratorApi',
                    'score' => 12.0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'DRI_Workflow_Templates' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              'dri_subworkflow_templates' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'DRI_Workflow_Templates',
                      1 => '?',
                      2 => 'link',
                      3 => 'dri_subworkflow_templates',
                      4 => 'filter',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => '',
                    ),
                    'jsonParams' => 
                    array (
                      0 => 'filter',
                    ),
                    'method' => 'filterRelated',
                    'shortHelp' => 'Lists related filtered records.',
                    'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                    'file' => 'modules/DRI_Workflow_Templates/clients/base/api/DRIWorkflowTemplatesRelateApi.php',
                    'className' => 'DRIWorkflowTemplatesRelateApi',
                    'score' => 13.0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Forecasts' => 
        array (
          '?' => 
          array (
            'quotas' => 
            array (
              'rollup' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'Forecasts',
                      1 => '?',
                      2 => 'quotas',
                      3 => 'rollup',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => '',
                      1 => 'timeperiod_id',
                      2 => '',
                      3 => 'quota_type',
                      4 => 'user_id',
                    ),
                    'method' => 'getQuota',
                    'shortHelp' => 'Returns the rollup quota for the user by timeperiod',
                    'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsQuotasApiGet.html',
                    'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                    'className' => 'ForecastsApi',
                    'score' => 12.0,
                  ),
                ),
              ),
              'direct' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'Forecasts',
                      1 => '?',
                      2 => 'quotas',
                      3 => 'direct',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => '',
                      1 => 'timeperiod_id',
                      2 => '',
                      3 => 'quota_type',
                      4 => 'user_id',
                    ),
                    'method' => 'getQuota',
                    'shortHelp' => 'Returns the direct quota for the user by timeperiod',
                    'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastsQuotasApiGet.html',
                    'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
                    'className' => 'ForecastsApi',
                    'score' => 12.0,
                  ),
                ),
              ),
            ),
            '?' => 
            array (
              'chart' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'Forecasts',
                      1 => '?',
                      2 => '?',
                      3 => 'chart',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => '',
                      1 => 'timeperiod_id',
                      2 => 'user_id',
                      3 => '',
                      4 => 'display_manager',
                    ),
                    'method' => 'chart',
                    'shortHelp' => 'Retrieve the Chart data for the given data in the Forecast Module',
                    'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastChartApi.html',
                    'file' => 'modules/Forecasts/clients/base/api/ForecastsChartApi.php',
                    'className' => 'ForecastsChartApi',
                    'score' => 11.0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Accounts' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'Accounts',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => 'filter',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => '',
                    ),
                    'jsonParams' => 
                    array (
                      0 => 'filter',
                    ),
                    'method' => 'filterRelated',
                    'shortHelp' => 'Lists related filtered records.',
                    'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                    'file' => 'modules/Accounts/clients/base/api/AccountsRelateApi.php',
                    'className' => 'AccountsRelateApi',
                    'score' => 12.0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'DRI_SubWorkflow_Templates' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              'dri_workflow_task_templates' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'GET',
                    'path' => 
                    array (
                      0 => 'DRI_SubWorkflow_Templates',
                      1 => '?',
                      2 => 'link',
                      3 => 'dri_workflow_task_templates',
                      4 => 'filter',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => '',
                    ),
                    'jsonParams' => 
                    array (
                      0 => 'filter',
                    ),
                    'method' => 'filterRelated',
                    'shortHelp' => 'Lists related filtered records.',
                    'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                    'file' => 'modules/DRI_SubWorkflow_Templates/clients/base/api/DRISubWorkflowTemplatesRelateApi.php',
                    'className' => 'DRISubWorkflowTemplatesRelateApi',
                    'score' => 13.0,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'POST' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'POST',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'createRelatedLink',
                    'shortHelp' => 'Relates an existing record to this module',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_post_help.html',
                    'file' => 'clients/base/api/RelateRecordApi.php',
                    'className' => 'RelateRecordApi',
                    'score' => 10.25,
                  ),
                  1 => 
                  array (
                    'reqType' => 'POST',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'createRelatedLink',
                    'shortHelp' => 'Relates an existing record to this module',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_post_help.html',
                    'file' => 'custom/clients/base/api/CustomRelateRecordApi.php',
                    'className' => 'CustomRelateRecordApi',
                    'score' => 10.75,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Users' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'POST',
                    'path' => 
                    array (
                      0 => 'Users',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'createRelatedLink',
                    'shortHelp' => 'Relates an existing record to this module',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_post_help.html',
                    'file' => 'modules/Users/clients/base/api/UsersRelateRecordApi.php',
                    'className' => 'UsersRelateRecordApi',
                    'score' => 11.0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Emails' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'POST',
                    'path' => 
                    array (
                      0 => 'Emails',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'createRelatedLink',
                    'shortHelp' => 'Relates an existing record to an email',
                    'longHelp' => 'modules/Emails/clients/base/api/help/emails_record_link_link_name_remote_id_post_help.html',
                    'exceptions' => 
                    array (
                      0 => 'SugarApiExceptionMissingParameter',
                      1 => 'SugarApiExceptionNotAuthorized',
                      2 => 'SugarApiExceptionNotFound',
                    ),
                    'file' => 'modules/Emails/clients/base/api/EmailsRelateRecordApi.php',
                    'className' => 'EmailsRelateRecordApi',
                    'score' => 11.0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Teams' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'POST',
                    'path' => 
                    array (
                      0 => 'Teams',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'createRelatedLink',
                    'shortHelp' => 'Relates an existing record to this module',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_post_help.html',
                    'file' => 'modules/Teams/clients/base/api/TeamsRelateRecordApi.php',
                    'className' => 'TeamsRelateRecordApi',
                    'score' => 11.0,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'PUT' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'PUT',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'updateRelatedLink',
                    'shortHelp' => 'Updates relationship specific information ',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_put_help.html',
                    'file' => 'clients/base/api/RelateRecordApi.php',
                    'className' => 'RelateRecordApi',
                    'score' => 10.25,
                  ),
                  1 => 
                  array (
                    'reqType' => 'PUT',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'updateRelatedLink',
                    'shortHelp' => 'Updates relationship specific information ',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_put_help.html',
                    'file' => 'custom/clients/base/api/CustomRelateRecordApi.php',
                    'className' => 'CustomRelateRecordApi',
                    'score' => 10.75,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'DELETE' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'DELETE',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'deleteRelatedLink',
                    'shortHelp' => 'Deletes a relationship between two records',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_delete_help.html',
                    'file' => 'clients/base/api/RelateRecordApi.php',
                    'className' => 'RelateRecordApi',
                    'score' => 10.25,
                  ),
                  1 => 
                  array (
                    'reqType' => 'DELETE',
                    'path' => 
                    array (
                      0 => '<module>',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'deleteRelatedLink',
                    'shortHelp' => 'Deletes a relationship between two records',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_delete_help.html',
                    'file' => 'custom/clients/base/api/CustomRelateRecordApi.php',
                    'className' => 'CustomRelateRecordApi',
                    'score' => 10.75,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Users' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'DELETE',
                    'path' => 
                    array (
                      0 => 'Users',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'deleteRelatedLink',
                    'shortHelp' => 'Deletes a relationship between two records',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_delete_help.html',
                    'file' => 'modules/Users/clients/base/api/UsersRelateRecordApi.php',
                    'className' => 'UsersRelateRecordApi',
                    'score' => 11.0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Emails' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'DELETE',
                    'path' => 
                    array (
                      0 => 'Emails',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'deleteRelatedLink',
                    'shortHelp' => 'Deletes a relationship between an email and another record',
                    'longHelp' => 'modules/Emails/clients/base/api/help/emails_record_link_link_name_remote_id_delete_help.html',
                    'exceptions' => 
                    array (
                      0 => 'SugarApiExceptionMissingParameter',
                      1 => 'SugarApiExceptionNotAuthorized',
                      2 => 'SugarApiExceptionNotFound',
                    ),
                    'file' => 'modules/Emails/clients/base/api/EmailsRelateRecordApi.php',
                    'className' => 'EmailsRelateRecordApi',
                    'score' => 11.0,
                  ),
                ),
              ),
            ),
          ),
        ),
        'Teams' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                '?' => 
                array (
                  0 => 
                  array (
                    'reqType' => 'DELETE',
                    'path' => 
                    array (
                      0 => 'Teams',
                      1 => '?',
                      2 => 'link',
                      3 => '?',
                      4 => '?',
                    ),
                    'pathVars' => 
                    array (
                      0 => 'module',
                      1 => 'record',
                      2 => '',
                      3 => 'link_name',
                      4 => 'remote_id',
                    ),
                    'method' => 'deleteRelatedLink',
                    'shortHelp' => 'Deletes a relationship between two records',
                    'longHelp' => 'include/api/help/module_record_link_link_name_remote_id_delete_help.html',
                    'file' => 'modules/Teams/clients/base/api/TeamsRelateRecordApi.php',
                    'className' => 'TeamsRelateRecordApi',
                    'score' => 11.0,
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  6 => 
  array (
    'base' => 
    array (
      'POST' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                'add_record_list' => 
                array (
                  '?' => 
                  array (
                    0 => 
                    array (
                      'reqType' => 'POST',
                      'path' => 
                      array (
                        0 => '<module>',
                        1 => '?',
                        2 => 'link',
                        3 => '?',
                        4 => 'add_record_list',
                        5 => '?',
                      ),
                      'pathVars' => 
                      array (
                        0 => 'module',
                        1 => 'record',
                        2 => '',
                        3 => 'link_name',
                        4 => '',
                        5 => 'remote_id',
                      ),
                      'method' => 'createRelatedLinksFromRecordList',
                      'shortHelp' => 'Relates existing records from a record list to this record.',
                      'longHelp' => 'include/api/help/module_record_links_from_recordlist_post_help.html',
                      'file' => 'clients/base/api/RelateRecordApi.php',
                      'className' => 'RelateRecordApi',
                      'score' => 12.0,
                    ),
                    1 => 
                    array (
                      'reqType' => 'POST',
                      'path' => 
                      array (
                        0 => '<module>',
                        1 => '?',
                        2 => 'link',
                        3 => '?',
                        4 => 'add_record_list',
                        5 => '?',
                      ),
                      'pathVars' => 
                      array (
                        0 => 'module',
                        1 => 'record',
                        2 => '',
                        3 => 'link_name',
                        4 => '',
                        5 => 'remote_id',
                      ),
                      'method' => 'createRelatedLinksFromRecordList',
                      'shortHelp' => 'Relates existing records from a record list to this record.',
                      'longHelp' => 'include/api/help/module_record_links_from_recordlist_post_help.html',
                      'file' => 'custom/clients/base/api/CustomRelateRecordApi.php',
                      'className' => 'CustomRelateRecordApi',
                      'score' => 12.5,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'Emails' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                'add_record_list' => 
                array (
                  '?' => 
                  array (
                    0 => 
                    array (
                      'reqType' => 'POST',
                      'path' => 
                      array (
                        0 => 'Emails',
                        1 => '?',
                        2 => 'link',
                        3 => '?',
                        4 => 'add_record_list',
                        5 => '?',
                      ),
                      'pathVars' => 
                      array (
                        0 => 'module',
                        1 => 'record',
                        2 => '',
                        3 => 'link_name',
                        4 => '',
                        5 => 'remote_id',
                      ),
                      'method' => 'createRelatedLinksFromRecordList',
                      'shortHelp' => 'Relates existing records from a record list to an email',
                      'longHelp' => 'modules/Emails/clients/base/api/help/emails_record_links_from_recordlist_post_help.html',
                      'exceptions' => 
                      array (
                        0 => 'SugarApiExceptionMissingParameter',
                        1 => 'SugarApiExceptionNotAuthorized',
                        2 => 'SugarApiExceptionNotFound',
                      ),
                      'file' => 'modules/Emails/clients/base/api/EmailsRelateRecordApi.php',
                      'className' => 'EmailsRelateRecordApi',
                      'score' => 12.75,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'GET' => 
      array (
        '<module>' => 
        array (
          '?' => 
          array (
            'link' => 
            array (
              '?' => 
              array (
                'filter' => 
                array (
                  'count' => 
                  array (
                    0 => 
                    array (
                      'reqType' => 'GET',
                      'path' => 
                      array (
                        0 => '<module>',
                        1 => '?',
                        2 => 'link',
                        3 => '?',
                        4 => 'filter',
                        5 => 'count',
                      ),
                      'pathVars' => 
                      array (
                        0 => 'module',
                        1 => 'record',
                        2 => '',
                        3 => 'link_name',
                        4 => '',
                        5 => '',
                      ),
                      'jsonParams' => 
                      array (
                        0 => 'filter',
                      ),
                      'method' => 'filterRelatedCount',
                      'shortHelp' => 'Lists related filtered records.',
                      'longHelp' => 'include/api/help/module_record_link_link_name_filter_get_help.html',
                      'file' => 'clients/base/api/RelateApi.php',
                      'className' => 'RelateApi',
                      'score' => 13.0,
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  1 => 
  array (
    'base' => 
    array (
      'GET' => 
      array (
        'me' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'me',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'retrieveCurrentUser',
            'shortHelp' => 'Returns current user',
            'longHelp' => 'include/api/help/me_get_help.html',
            'ignoreMetaHash' => true,
            'ignoreSystemStatusError' => true,
            'noEtag' => true,
            'file' => 'clients/base/api/CurrentUserApi.php',
            'className' => 'CurrentUserApi',
            'score' => 7.0,
          ),
        ),
        'Users' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Users',
            ),
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'pathVars' => 
            array (
              0 => 'module_list',
            ),
            'method' => 'filterList',
            'shortHelp' => 'Search User records',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionInvalidParameter',
              1 => 'SugarApiExceptionNotAuthorized',
              2 => 'SugarApiExceptionError',
            ),
            'file' => 'clients/base/api/PersonFilterApi.php',
            'className' => 'PersonFilterApi',
            'score' => 7.0,
          ),
        ),
        'Employees' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Employees',
            ),
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'pathVars' => 
            array (
              0 => 'module_list',
            ),
            'method' => 'filterList',
            'shortHelp' => 'Search Employee records',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionInvalidParameter',
              1 => 'SugarApiExceptionNotAuthorized',
              2 => 'SugarApiExceptionError',
            ),
            'file' => 'clients/base/api/PersonFilterApi.php',
            'className' => 'PersonFilterApi',
            'score' => 7.0,
          ),
        ),
        'css' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'css',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getCSSURLs',
            'shortHelp' => 'Get (or generate) the css files for a platform and a theme',
            'longHelp' => 'include/api/help/css_get_help.html',
            'noLoginRequired' => true,
            'file' => 'clients/base/api/ThemeApi.php',
            'className' => 'ThemeApi',
            'score' => 7.0,
          ),
        ),
        'theme' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'theme',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getCustomThemeVars',
            'shortHelp' => 'Get the customizable variables of a custom theme',
            'longHelp' => 'include/api/help/theme_get_help.html',
            'noLoginRequired' => true,
            'file' => 'clients/base/api/ThemeApi.php',
            'className' => 'ThemeApi',
            'score' => 7.0,
          ),
        ),
        'metadata' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'metadata',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getAllMetadata',
            'shortHelp' => 'This method will return all metadata for the system',
            'longHelp' => 'include/api/html/metadata_all_help.html',
            'noEtag' => true,
            'ignoreMetaHash' => true,
            'ignoreSystemStatusError' => true,
            'file' => 'clients/base/api/MetadataApi.php',
            'className' => 'MetadataApi',
            'score' => 7.0,
          ),
        ),
        'search' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'search',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'globalSearch',
            'jsonParams' => 
            array (
              0 => 'fields',
            ),
            'shortHelp' => 'Globally search records',
            'longHelp' => 'include/api/help/module_get_help.html',
            'file' => 'clients/base/api/UnifiedSearchApi.php',
            'className' => 'UnifiedSearchApi',
            'score' => 7.0,
          ),
        ),
        'locale' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'locale',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'localeOptions',
            'shortHelp' => 'Gets locale options so UI can populate the corresponding dropdowns',
            'longHelp' => 'include/api/help/locale_options_get_help.html',
            'ignoreMetaHash' => true,
            'keepSession' => true,
            'file' => 'clients/base/api/LocaleApi.php',
            'className' => 'LocaleApi',
            'score' => 7.0,
          ),
        ),
        'globalsearch' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'globalsearch',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'globalSearch',
            'shortHelp' => 'Global search',
            'longHelp' => 'include/api/help/globalsearch_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotAuthorized',
              1 => 'SugarApiExceptionSearchUnavailable',
              2 => 'SugarApiExceptionSearchRuntime',
            ),
            'file' => 'clients/base/api/GlobalSearchApi.php',
            'className' => 'GlobalSearchApi',
            'score' => 7.0,
          ),
        ),
        'connectors' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'connectors',
            ),
            'pathVars' => 
            array (
              0 => 'connectors',
            ),
            'method' => 'getConnectors',
            'shortHelp' => 'Gets connector information',
            'longHelp' => 'include/api/help/connectors_get_help.html',
            'file' => 'clients/base/api/ConnectorApi.php',
            'className' => 'ConnectorApi',
            'score' => 7.0,
          ),
        ),
        'help' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'help',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getHelp',
            'shortHelp' => 'Shows Help information',
            'longHelp' => 'include/api/help/help_get_help.html',
            'rawReply' => true,
            'noLoginRequired' => true,
            'file' => 'clients/base/api/HelpApi.php',
            'className' => 'HelpApi',
            'score' => 7.0,
          ),
        ),
        'recent' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'recent',
            ),
            'pathVars' => 
            array (
              0 => '',
              1 => '',
            ),
            'method' => 'getRecentlyViewed',
            'shortHelp' => 'This method retrieves recently viewed records for the user.',
            'longHelp' => 'include/api/help/me_recently_viewed_help.html',
            'file' => 'clients/base/api/RecentApi.php',
            'className' => 'RecentApi',
            'score' => 7.0,
          ),
        ),
        'rssfeed' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'rssfeed',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'getFeed',
            'shortHelp' => 'Consumes an RSS Feed and returns the content of the feed to the client',
            'longHelp' => 'include/api/help/rssfeed_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionInvalidParameter',
              1 => 'SugarApiExceptionConnectorResponse',
            ),
            'file' => 'clients/base/api/RSSFeedApi.php',
            'className' => 'RSSFeedApi',
            'score' => 7.0,
          ),
        ),
        'VCardDownload' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'VCardDownload',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'vCardSave',
            'rawReply' => true,
            'allowDownloadCookie' => true,
            'shortHelp' => 'An API to download a contact as a vCard.',
            'longHelp' => 'include/api/help/vcarddownload_get_help.html',
            'file' => 'clients/base/api/vCardApi.php',
            'className' => 'vCardApi',
            'score' => 7.0,
          ),
        ),
        'ping' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'ping',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'ping',
            'shortHelp' => 'An example API only responds with pong',
            'longHelp' => 'include/api/help/ping_get_help.html',
            'file' => 'clients/base/api/PingApi.php',
            'className' => 'PingApi',
            'score' => 7.0,
          ),
        ),
        '<module>' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => '<module>',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'file' => 'clients/base/api/FilterApi.php',
            'className' => 'FilterApi',
            'score' => 6.25,
          ),
        ),
        'mailchimp' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'mailchimp',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getUpdates',
            'shortHelp' => 'Recieve mailchimp updates in sugarcrm',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/MailChimpWebhookApi.php',
            'className' => 'MailChimpWebhookApi',
            'score' => 7.5,
          ),
        ),
        'sugar_version' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'sugar_version',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSugarVersion',
            'shortHelp' => 'This method returns sugar_version from config',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/rt_GSyncCustomApi.php',
            'className' => 'rt_GSyncCustomApi',
            'score' => 7.5,
          ),
        ),
        'extensionModuleList' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'extensionModuleList',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'ExtensionModuleList',
            'shortHelp' => '',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/ExtensionModuleListApi.php',
            'className' => 'ExtensionModuleListApi',
            'score' => 7.5,
          ),
        ),
        'smartsheetwebhook' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'smartsheetwebhook',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSmartSheetUpdates',
            'shortHelp' => 'Recieve smartsheet updates in sugarcrm',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'synccamrecord' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'synccamrecord',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'syncCamRecord',
            'shortHelp' => 'Sync cam record to shartsheet',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'savesmartsheetconfig' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'savesmartsheetconfig',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'saveSmartSheetConfig',
            'shortHelp' => 'save smartsheet config',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'getsmartsheetfieldmapping' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'getsmartsheetfieldmapping',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSmartSheetFieldMapping',
            'shortHelp' => 'get smartsheet field mapping',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'testsmartsheetapi' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'testsmartsheetapi',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'testSmartSheetApiConnection',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'savesmartsheetapikey' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'savesmartsheetapikey',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'saveSmartSheetApiKey',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'getfieldoptions' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'getfieldoptions',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getFieldOptions',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'customdownloadfile' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'customdownloadfile',
            ),
            'pathVars' => 
            array (
              0 => 'module',
              1 => '',
            ),
            'method' => 'downloadFile',
            'shortHelp' => 'This method Downloads a file',
            'longHelp' => '',
            'rawPostContents' => true,
            'file' => 'custom/clients/base/api/CustomPdfApi.php',
            'className' => 'CustomPdfApi',
            'score' => 7.5,
          ),
        ),
        'customOpportunityDownloadFile' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'customOpportunityDownloadFile',
            ),
            'pathVars' => 
            array (
              0 => 'module',
              1 => '',
            ),
            'method' => 'downloadFile',
            'shortHelp' => 'This method Downloads a file',
            'longHelp' => '',
            'rawPostContents' => true,
            'file' => 'custom/clients/base/api/CustomOpportunityPdfApi.php',
            'className' => 'CustomOpportunityPdfApi',
            'score' => 7.5,
          ),
        ),
        'Notifications' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Notifications',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'cacheEtag' => true,
            'file' => 'modules/Notifications/clients/base/api/NotificationsFilterApi.php',
            'className' => 'NotificationsFilterApi',
            'score' => 7.0,
          ),
        ),
        'pmse_Inbox' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'pmse_Inbox',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterListAllPA',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'shortHelp' => 'Returns a list of Processes by user using filters',
            'longHelp' => 'modules/pmse_Inbox/clients/base/api/help/process_filter_list_all_pa_help.html',
            'file' => 'modules/pmse_Inbox/clients/base/api/PMSEEngineFilterApi.php',
            'className' => 'PMSEEngineFilterApi',
            'score' => 7.0,
          ),
        ),
        'Currencies' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Currencies',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'currenciesGet',
            'jsonParams' => 
            array (
            ),
            'shortHelp' => 'Filter records from a single module',
            'longHelp' => 'modules/Currencies/clients/base/api/help/CurrenciesGet.html',
            'file' => 'modules/Currencies/clients/base/api/CurrenciesFilterApi.php',
            'className' => 'CurrenciesFilterApi',
            'score' => 7.0,
          ),
        ),
        'Activities' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Activities',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getHomeActivities',
            'shortHelp' => 'This method gets homepage activities for a user',
            'longHelp' => 'modules/ActivityStream/clients/base/api/help/homeActivities.html',
            'file' => 'modules/ActivityStream/clients/base/api/ActivitiesApi.php',
            'className' => 'ActivitiesApi',
            'score' => 7.0,
          ),
        ),
        'pmse_Emails_Templates' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'pmse_Emails_Templates',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'file' => 'modules/pmse_Emails_Templates/clients/base/api/PMSEEmailsTemplatesFilterApi.php',
            'className' => 'PMSEEmailsTemplatesFilterApi',
            'score' => 7.0,
          ),
        ),
        'mostactiveusers' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'mostactiveusers',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'getMostActiveUsers',
            'shortHelp' => 'Returns most active users',
            'longHelp' => 'modules/Home/clients/base/api/help/MostActiveUsersApi.html',
            'file' => 'modules/Home/clients/base/api/MostActiveUsersApi.php',
            'className' => 'MostActiveUsersApi',
            'score' => 7.0,
          ),
        ),
        'Emails' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Emails',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'modules/Emails/clients/base/api/help/emails_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'file' => 'modules/Emails/clients/base/api/EmailsFilterApi.php',
            'className' => 'EmailsFilterApi',
            'score' => 7.0,
          ),
        ),
        'ForecastManagerWorksheets' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'ForecastManagerWorksheets',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'ForecastManagerWorksheetsGet',
            'jsonParams' => 
            array (
            ),
            'shortHelp' => 'Filter records from a single module',
            'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastManagerWorksheetGet.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionError',
              1 => 'SugarApiExceptionInvalidParameter',
              2 => 'SugarApiExceptionNotAuthorized',
              3 => 'SugarApiExceptionNotFound',
            ),
            'file' => 'modules/ForecastManagerWorksheets/clients/base/api/ForecastManagerWorksheetsFilterApi.php',
            'className' => 'ForecastManagerWorksheetsFilterApi',
            'score' => 7.0,
          ),
        ),
        'pmse_Business_Rules' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'pmse_Business_Rules',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'file' => 'modules/pmse_Business_Rules/clients/base/api/PMSEBusinessRulesFilterApi.php',
            'className' => 'PMSEBusinessRulesFilterApi',
            'score' => 7.0,
          ),
        ),
        'KBContents' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'KBContents',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'file' => 'modules/KBContents/clients/base/api/KBContentsFilterApi.php',
            'className' => 'KBContentsFilterApi',
            'score' => 7.0,
          ),
        ),
        'Forecasts' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Forecasts',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'returnEmptySet',
            'shortHelp' => 'Forecast list endpoint returns an empty set',
            'longHelp' => 'include/api/help/module_record_favorite_put_help.html',
            'file' => 'modules/Forecasts/clients/base/api/ForecastsApi.php',
            'className' => 'ForecastsApi',
            'score' => 7.0,
          ),
        ),
        'TimePeriods' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'TimePeriods',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'file' => 'modules/TimePeriods/clients/base/api/TimePeriodsFilterApi.php',
            'className' => 'TimePeriodsFilterApi',
            'score' => 7.0,
          ),
        ),
        'Dashboards' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'minVersion' => '10',
            'maxVersion' => '10',
            'path' => 
            array (
              0 => 'Dashboards',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getDashboards',
            'shortHelp' => 'Get dashboards for home',
            'longHelp' => 'include/api/help/get_home_dashboards.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionInvalidParameter',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionNotAuthorized',
            ),
            'file' => 'modules/Dashboards/clients/base/api/DashboardListApi.php',
            'className' => 'DashboardListApi',
            'score' => 7.0,
          ),
        ),
        'ForecastWorksheets' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'ForecastWorksheets',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'forecastWorksheetsGet',
            'jsonParams' => 
            array (
            ),
            'shortHelp' => 'Filter records from a single module',
            'longHelp' => 'modules/Forecasts/clients/base/api/help/ForecastWorksheetGet.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionError',
              1 => 'SugarApiExceptionInvalidParameter',
              2 => 'SugarApiExceptionNotAuthorized',
              3 => 'SugarApiExceptionNotFound',
            ),
            'file' => 'modules/ForecastWorksheets/clients/base/api/ForecastWorksheetsFilterApi.php',
            'className' => 'ForecastWorksheetsFilterApi',
            'score' => 7.0,
          ),
        ),
        'Filters' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Filters',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'cacheEtag' => true,
            'file' => 'modules/Filters/clients/base/api/FiltersFilterApi.php',
            'className' => 'FiltersFilterApi',
            'score' => 7.0,
          ),
        ),
        'Reports' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'Reports',
            ),
            'pathVars' => 
            array (
              0 => 'module_list',
            ),
            'method' => 'filterList',
            'shortHelp' => 'Search Reports',
            'longHelp' => 'include/api/help/getListModule.html',
            'file' => 'modules/Reports/clients/base/api/ReportsSearchApi.php',
            'className' => 'ReportsSearchApi',
            'score' => 7.0,
          ),
        ),
        'pmse_Project' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'pmse_Project',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectFilterApi.php',
            'className' => 'PMSEProjectFilterApi',
            'score' => 7.0,
          ),
        ),
        'PdfManager' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'PdfManager',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'filterList',
            'jsonParams' => 
            array (
              0 => 'filter',
            ),
            'shortHelp' => 'List of all records in this module',
            'longHelp' => 'include/api/help/module_filter_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
              1 => 'SugarApiExceptionError',
              2 => 'SugarApiExceptionInvalidParameter',
              3 => 'SugarApiExceptionNotAuthorized',
            ),
            'cacheEtag' => true,
            'file' => 'modules/PdfManager/clients/base/api/PdfManagerFilterApi.php',
            'className' => 'PdfManagerFilterApi',
            'score' => 7.0,
          ),
        ),
        'customdownloadfileexcel' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'customdownloadfileexcel',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'downloadExcelFile',
            'shortHelp' => 'This method Downloads a file',
            'longHelp' => '',
            'rawPostContents' => true,
            'file' => 'custom/modules/Administration/clients/base/api/CustomExcelApi.php',
            'className' => 'CustomExcelApi',
            'score' => 7.5,
          ),
        ),
      ),
      'PUT' => 
      array (
        'me' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'path' => 
            array (
              0 => 'me',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'updateCurrentUser',
            'shortHelp' => 'Updates current user',
            'longHelp' => 'include/api/help/me_put_help.html',
            'ignoreMetaHash' => true,
            'file' => 'clients/base/api/CurrentUserApi.php',
            'className' => 'CurrentUserApi',
            'score' => 7.0,
          ),
        ),
        'smartsheetwebhook' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'smartsheetwebhook',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSmartSheetUpdates',
            'shortHelp' => 'Recieve smartsheet updates in sugarcrm',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'synccamrecord' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'synccamrecord',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'syncCamRecord',
            'shortHelp' => 'Sync cam record to shartsheet',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'savesmartsheetconfig' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'savesmartsheetconfig',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'saveSmartSheetConfig',
            'shortHelp' => 'save smartsheet config',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'getsmartsheetfieldmapping' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'getsmartsheetfieldmapping',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSmartSheetFieldMapping',
            'shortHelp' => 'get smartsheet field mapping',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'testsmartsheetapi' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'testsmartsheetapi',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'testSmartSheetApiConnection',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'savesmartsheetapikey' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'savesmartsheetapikey',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'saveSmartSheetApiKey',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'getfieldoptions' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'getfieldoptions',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getFieldOptions',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
      ),
      'POST' => 
      array (
        'theme' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'theme',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'updateCustomTheme',
            'shortHelp' => 'Update the customizable variables of a custom theme',
            'longHelp' => 'include/api/help/theme_post_help.html',
            'file' => 'clients/base/api/ThemeApi.php',
            'className' => 'ThemeApi',
            'score' => 7.0,
          ),
        ),
        'metadata' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'metadata',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getAllMetadata',
            'shortHelp' => 'This method will return all metadata for the system, filtered by the array of hashes sent to the server',
            'longHelp' => 'include/api/html/metadata_all_help.html',
            'noEtag' => true,
            'ignoreMetaHash' => true,
            'ignoreSystemStatusError' => true,
            'file' => 'clients/base/api/MetadataApi.php',
            'className' => 'MetadataApi',
            'score' => 7.0,
          ),
        ),
        'bulk' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'bulk',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'bulkCall',
            'shortHelp' => 'Run several API call in a sequence',
            'longHelp' => 'include/api/help/bulk_post_help.html',
            'file' => 'clients/base/api/BulkApi.php',
            'className' => 'BulkApi',
            'score' => 7.0,
          ),
        ),
        'globalsearch' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'globalsearch',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'globalSearch',
            'shortHelp' => 'Global search',
            'longHelp' => 'include/api/help/globalsearch_get_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotAuthorized',
              1 => 'SugarApiExceptionSearchUnavailable',
              2 => 'SugarApiExceptionSearchRuntime',
            ),
            'file' => 'clients/base/api/GlobalSearchApi.php',
            'className' => 'GlobalSearchApi',
            'score' => 7.0,
          ),
        ),
        '<module>' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => '<module>',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new record of the specified type',
            'longHelp' => 'include/api/help/module_post_help.html',
            'file' => 'clients/base/api/ModuleApi.php',
            'className' => 'ModuleApi',
            'score' => 6.25,
          ),
        ),
        'logger' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'logger',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'logMessage',
            'shortHelp' => 'Writes a message out to the log prefaced by a channel name',
            'longHelp' => 'include/api/help/logger_help.html',
            'file' => 'clients/base/api/LoggerApi.php',
            'className' => 'LoggerApi',
            'score' => 7.0,
          ),
        ),
        'mailchimp' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'mailchimp',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getUpdates',
            'shortHelp' => 'Recieve mailchimp updates in sugarcrm',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/MailChimpWebhookApi.php',
            'className' => 'MailChimpWebhookApi',
            'score' => 7.5,
          ),
        ),
        'mailchimpAdmin' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'mailchimpAdmin',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'mailchimpAdmin',
            'shortHelp' => 'Recieve mailchimp administration api',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/MailChimpWebhookApi.php',
            'className' => 'MailChimpWebhookApi',
            'score' => 7.5,
          ),
        ),
        'multipleupload' => 
        array (
          0 => 
          array (
            'noLoginRequired' => true,
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'multipleupload',
            ),
            'pathVars' => 
            array (
              0 => 'module',
              1 => '',
            ),
            'method' => 'customUploadFile',
            'shortHelp' => 'This method Uploads multiple files as temp notes',
            'rawPostContents' => true,
            'file' => 'custom/clients/base/api/MultipleAttachmentUpload.php',
            'className' => 'MultipleAttachmentUpload',
            'score' => 7.5,
          ),
        ),
        'smartsheetwebhook' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'smartsheetwebhook',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSmartSheetUpdates',
            'shortHelp' => 'Recieve smartsheet updates in sugarcrm',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'synccamrecord' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'synccamrecord',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'syncCamRecord',
            'shortHelp' => 'Sync cam record to shartsheet',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'savesmartsheetconfig' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'savesmartsheetconfig',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'saveSmartSheetConfig',
            'shortHelp' => 'save smartsheet config',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'getsmartsheetfieldmapping' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'getsmartsheetfieldmapping',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSmartSheetFieldMapping',
            'shortHelp' => 'get smartsheet field mapping',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'testsmartsheetapi' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'testsmartsheetapi',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'testSmartSheetApiConnection',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'savesmartsheetapikey' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'savesmartsheetapikey',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'saveSmartSheetApiKey',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'getfieldoptions' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'getfieldoptions',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getFieldOptions',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'Meetings' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Meetings',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a single event record or a series of event records of the specified type',
            'longHelp' => 'include/api/help/calendar_events_record_create_help.html',
            'file' => 'modules/Meetings/clients/base/api/MeetingsApi.php',
            'className' => 'MeetingsApi',
            'score' => 7.0,
          ),
        ),
        'Mail' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Mail',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'createMail',
            'shortHelp' => 'Create Mail Item',
            'longHelp' => 'modules/Emails/clients/base/api/help/mail_post_help.html',
            'file' => 'modules/Emails/clients/base/api/MailApi.php',
            'className' => 'MailApi',
            'score' => 7.0,
          ),
        ),
        'Emails' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Emails',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new Emails record',
            'longHelp' => 'modules/Emails/clients/base/api/help/emails_record_post_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionInvalidParameter',
              1 => 'SugarApiExceptionMissingParameter',
              2 => 'SugarApiExceptionNotAuthorized',
              3 => 'SugarApiExceptionNotFound',
              4 => 'SugarApiException',
              5 => 'SugarApiExceptionError',
            ),
            'file' => 'modules/Emails/clients/base/api/EmailsApi.php',
            'className' => 'EmailsApi',
            'score' => 7.0,
          ),
        ),
        'OutboundEmail' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'OutboundEmail',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new OutboundEmail record',
            'longHelp' => 'modules/OutboundEmail/clients/base/api/help/outbound_email_post_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionInvalidParameter',
              1 => 'SugarApiExceptionMissingParameter',
              2 => 'SugarApiExceptionNotAuthorized',
              3 => 'SugarApiExceptionNotFound',
              4 => 'SugarApiException',
            ),
            'file' => 'modules/OutboundEmail/clients/base/api/OutboundEmailApi.php',
            'className' => 'OutboundEmailApi',
            'score' => 7.0,
          ),
        ),
        'Forecasts' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Forecasts',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new record of the specified type',
            'longHelp' => 'include/api/help/module_new_help.html',
            'file' => 'modules/Forecasts/clients/base/api/ForecastsModuleApi.php',
            'className' => 'ForecastsModuleApi',
            'score' => 7.0,
          ),
        ),
        'Calls' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Calls',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a single event record or a series of event records of the specified type',
            'longHelp' => 'include/api/help/calendar_events_record_create_help.html',
            'file' => 'modules/Calls/clients/base/api/CallsApi.php',
            'className' => 'CallsApi',
            'score' => 7.0,
          ),
        ),
        'EmailAddresses' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'EmailAddresses',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new EmailAddresses record',
            'longHelp' => 'modules/EmailAddresses/clients/base/api/help/email_addresses_record_post_help.html',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionInvalidParameter',
              1 => 'SugarApiExceptionMissingParameter',
              2 => 'SugarApiExceptionNotAuthorized',
              3 => 'SugarApiExceptionNotFound',
            ),
            'file' => 'modules/EmailAddresses/clients/base/api/EmailAddressesApi.php',
            'className' => 'EmailAddressesApi',
            'score' => 7.0,
          ),
        ),
        'Dashboards' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'minVersion' => '10',
            'maxVersion' => '10',
            'path' => 
            array (
              0 => 'Dashboards',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'createDashboard',
            'shortHelp' => 'Create a new dashboard for home',
            'longHelp' => 'include/api/help/create_home_dashboard.html',
            'file' => 'modules/Dashboards/clients/base/api/DashboardApi.php',
            'className' => 'DashboardApi',
            'score' => 7.0,
          ),
        ),
        'Cases' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Cases',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new Case record with option to add Contact and Account relationships',
            'longHelp' => 'modules/Cases/api/help/CasesApi.html',
            'file' => 'modules/Cases/clients/base/api/CasesApi.php',
            'className' => 'CasesApi',
            'score' => 7.0,
          ),
        ),
        'pmse_Project' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'pmse_Project',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'file' => 'modules/pmse_Project/clients/base/api/PMSEProjectCRUDApi.php',
            'className' => 'PMSEProjectCRUDApi',
            'score' => 7.0,
          ),
        ),
        'Leads' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Leads',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new Lead record with option to add Target & Email relationships',
            'longHelp' => 'modules/Leads/clients/base/api/help/LeadsApi.html',
            'file' => 'modules/Leads/clients/base/api/LeadsApi.php',
            'className' => 'LeadsApi',
            'score' => 7.0,
          ),
        ),
        'Bugs' => 
        array (
          0 => 
          array (
            'reqType' => 'POST',
            'path' => 
            array (
              0 => 'Bugs',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'createRecord',
            'shortHelp' => 'This method creates a new Bug record with option to add Contact and Account relationships',
            'longHelp' => 'modules/Bugs/api/help/BugsApi.html',
            'file' => 'modules/Bugs/clients/base/api/BugsApi.php',
            'className' => 'BugsApi',
            'score' => 7.0,
          ),
        ),
      ),
      'PATCH' => 
      array (
        'smartsheetwebhook' => 
        array (
          0 => 
          array (
            'reqType' => 'PATCH',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'smartsheetwebhook',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSmartSheetUpdates',
            'shortHelp' => 'Recieve smartsheet updates in sugarcrm',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'synccamrecord' => 
        array (
          0 => 
          array (
            'reqType' => 'PATCH',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'synccamrecord',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'syncCamRecord',
            'shortHelp' => 'Sync cam record to shartsheet',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'savesmartsheetconfig' => 
        array (
          0 => 
          array (
            'reqType' => 'PATCH',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'savesmartsheetconfig',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'saveSmartSheetConfig',
            'shortHelp' => 'save smartsheet config',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'getsmartsheetfieldmapping' => 
        array (
          0 => 
          array (
            'reqType' => 'PATCH',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'getsmartsheetfieldmapping',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSmartSheetFieldMapping',
            'shortHelp' => 'get smartsheet field mapping',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'testsmartsheetapi' => 
        array (
          0 => 
          array (
            'reqType' => 'PATCH',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'testsmartsheetapi',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'testSmartSheetApiConnection',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'savesmartsheetapikey' => 
        array (
          0 => 
          array (
            'reqType' => 'PATCH',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'savesmartsheetapikey',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'saveSmartSheetApiKey',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'getfieldoptions' => 
        array (
          0 => 
          array (
            'reqType' => 'PATCH',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'getfieldoptions',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getFieldOptions',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
      ),
      'DELETE' => 
      array (
        'smartsheetwebhook' => 
        array (
          0 => 
          array (
            'reqType' => 'DELETE',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'smartsheetwebhook',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSmartSheetUpdates',
            'shortHelp' => 'Recieve smartsheet updates in sugarcrm',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'synccamrecord' => 
        array (
          0 => 
          array (
            'reqType' => 'DELETE',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'synccamrecord',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'syncCamRecord',
            'shortHelp' => 'Sync cam record to shartsheet',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'savesmartsheetconfig' => 
        array (
          0 => 
          array (
            'reqType' => 'DELETE',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'savesmartsheetconfig',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'saveSmartSheetConfig',
            'shortHelp' => 'save smartsheet config',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'getsmartsheetfieldmapping' => 
        array (
          0 => 
          array (
            'reqType' => 'DELETE',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'getsmartsheetfieldmapping',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getSmartSheetFieldMapping',
            'shortHelp' => 'get smartsheet field mapping',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'testsmartsheetapi' => 
        array (
          0 => 
          array (
            'reqType' => 'DELETE',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'testsmartsheetapi',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'testSmartSheetApiConnection',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'savesmartsheetapikey' => 
        array (
          0 => 
          array (
            'reqType' => 'DELETE',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'savesmartsheetapikey',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'saveSmartSheetApiKey',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
        'getfieldoptions' => 
        array (
          0 => 
          array (
            'reqType' => 'DELETE',
            'noLoginRequired' => true,
            'path' => 
            array (
              0 => 'getfieldoptions',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'getFieldOptions',
            'shortHelp' => 'test smartsheet api connection',
            'longHelp' => '',
            'file' => 'custom/clients/base/api/SmartSheetWebHookApi.php',
            'className' => 'SmartSheetWebHookApi',
            'score' => 7.5,
          ),
        ),
      ),
      '?' => 
      array (
        'KBDocuments' => 
        array (
          0 => 
          array (
            'reqType' => '?',
            'path' => 
            array (
              0 => 'KBDocuments',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'disableApi',
            'extraScore' => 1,
            'shortHelp' => 'Disable KBDocuments',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
            ),
            'file' => 'modules/KBContents/clients/base/api/KBContentsApi.php',
            'className' => 'KBContentsApi',
            'score' => 7.0,
          ),
        ),
        'KBArticles' => 
        array (
          0 => 
          array (
            'reqType' => '?',
            'path' => 
            array (
              0 => 'KBArticles',
            ),
            'pathVars' => 
            array (
              0 => 'module',
            ),
            'method' => 'disableApi',
            'extraScore' => 1,
            'shortHelp' => 'Disable KBArticles',
            'exceptions' => 
            array (
              0 => 'SugarApiExceptionNotFound',
            ),
            'file' => 'modules/KBContents/clients/base/api/KBContentsApi.php',
            'className' => 'KBContentsApi',
            'score' => 7.0,
          ),
        ),
      ),
    ),
    'mobile' => 
    array (
      'GET' => 
      array (
        'me' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'me',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'retrieveCurrentUser',
            'shortHelp' => 'Returns current user',
            'longHelp' => 'include/api/help/me_get_help.html',
            'ignoreMetaHash' => true,
            'ignoreSystemStatusError' => true,
            'noEtag' => true,
            'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
            'className' => 'CurrentUserMobileApi',
            'score' => 7.0,
          ),
        ),
      ),
      'PUT' => 
      array (
        'me' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'path' => 
            array (
              0 => 'me',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'updateCurrentUser',
            'shortHelp' => 'Updates current user',
            'longHelp' => 'include/api/help/me_put_help.html',
            'ignoreMetaHash' => true,
            'file' => 'clients/mobile/api/CurrentUserMobileApi.php',
            'className' => 'CurrentUserMobileApi',
            'score' => 7.0,
          ),
        ),
      ),
    ),
    'portal' => 
    array (
      'GET' => 
      array (
        'me' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'me',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'retrieveCurrentUser',
            'shortHelp' => 'Returns current user',
            'longHelp' => 'include/api/help/me_get_help.html',
            'ignoreMetaHash' => true,
            'ignoreSystemStatusError' => true,
            'noEtag' => true,
            'file' => 'clients/portal/api/CurrentUserPortalApi.php',
            'className' => 'CurrentUserPortalApi',
            'score' => 7.0,
          ),
        ),
        'search' => 
        array (
          0 => 
          array (
            'reqType' => 'GET',
            'path' => 
            array (
              0 => 'search',
            ),
            'pathVars' => 
            array (
              0 => '',
            ),
            'method' => 'globalSearch',
            'jsonParams' => 
            array (
              0 => 'fields',
            ),
            'shortHelp' => 'Globally search records',
            'longHelp' => 'include/api/help/module_get_help.html',
            'file' => 'clients/portal/api/UnifiedSearchPortalApi.php',
            'className' => 'UnifiedSearchPortalApi',
            'score' => 7.0,
          ),
        ),
      ),
      'PUT' => 
      array (
        'me' => 
        array (
          0 => 
          array (
            'reqType' => 'PUT',
            'path' => 
            array (
              0 => 'me',
            ),
            'pathVars' => 
            array (
            ),
            'method' => 'updateCurrentUser',
            'shortHelp' => 'Updates current user',
            'longHelp' => 'include/api/help/me_put_help.html',
            'ignoreMetaHash' => true,
            'file' => 'clients/portal/api/CurrentUserPortalApi.php',
            'className' => 'CurrentUserPortalApi',
            'score' => 7.0,
          ),
        ),
      ),
    ),
  ),
);
