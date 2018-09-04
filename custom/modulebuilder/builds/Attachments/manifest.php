<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.9.1.0',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'ENT',
    1 => 'ULT',
  ),
  'readme' => '',
  'key' => 'mv',
  'author' => 'Bhea',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Attachments',
  'published_date' => '2017-09-19 16:33:35',
  'type' => 'module',
  'version' => 1505838816,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Attachments',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'mv_Attachments',
      'class' => 'mv_Attachments',
      'path' => 'modules/mv_Attachments/mv_Attachments.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/mv_Attachments',
      'to' => 'modules/mv_Attachments',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sq_AL.lang.php',
      'to_module' => 'application',
      'language' => 'sq_AL',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/zh_CN.lang.php',
      'to_module' => 'application',
      'language' => 'zh_CN',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/nb_NO.lang.php',
      'to_module' => 'application',
      'language' => 'nb_NO',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pt_PT.lang.php',
      'to_module' => 'application',
      'language' => 'pt_PT',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sk_SK.lang.php',
      'to_module' => 'application',
      'language' => 'sk_SK',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/uk_UA.lang.php',
      'to_module' => 'application',
      'language' => 'uk_UA',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/he_IL.lang.php',
      'to_module' => 'application',
      'language' => 'he_IL',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_LA.lang.php',
      'to_module' => 'application',
      'language' => 'es_LA',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ar_SA.lang.php',
      'to_module' => 'application',
      'language' => 'ar_SA',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
      'to_module' => 'application',
      'language' => 'fr_FR',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/zh_TW.lang.php',
      'to_module' => 'application',
      'language' => 'zh_TW',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/hr_HR.lang.php',
      'to_module' => 'application',
      'language' => 'hr_HR',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sv_SE.lang.php',
      'to_module' => 'application',
      'language' => 'sv_SE',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ja_JP.lang.php',
      'to_module' => 'application',
      'language' => 'ja_JP',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sr_RS.lang.php',
      'to_module' => 'application',
      'language' => 'sr_RS',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pt_BR.lang.php',
      'to_module' => 'application',
      'language' => 'pt_BR',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/tr_TR.lang.php',
      'to_module' => 'application',
      'language' => 'tr_TR',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/lv_LV.lang.php',
      'to_module' => 'application',
      'language' => 'lv_LV',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/it_it.lang.php',
      'to_module' => 'application',
      'language' => 'it_it',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pl_PL.lang.php',
      'to_module' => 'application',
      'language' => 'pl_PL',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/de_DE.lang.php',
      'to_module' => 'application',
      'language' => 'de_DE',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ca_ES.lang.php',
      'to_module' => 'application',
      'language' => 'ca_ES',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/el_EL.lang.php',
      'to_module' => 'application',
      'language' => 'el_EL',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ro_RO.lang.php',
      'to_module' => 'application',
      'language' => 'ro_RO',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/da_DK.lang.php',
      'to_module' => 'application',
      'language' => 'da_DK',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ko_KR.lang.php',
      'to_module' => 'application',
      'language' => 'ko_KR',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/cs_CZ.lang.php',
      'to_module' => 'application',
      'language' => 'cs_CZ',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/hu_HU.lang.php',
      'to_module' => 'application',
      'language' => 'hu_HU',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_UK.lang.php',
      'to_module' => 'application',
      'language' => 'en_UK',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/et_EE.lang.php',
      'to_module' => 'application',
      'language' => 'et_EE',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ru_RU.lang.php',
      'to_module' => 'application',
      'language' => 'ru_RU',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/fi_FI.lang.php',
      'to_module' => 'application',
      'language' => 'fi_FI',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/lt_LT.lang.php',
      'to_module' => 'application',
      'language' => 'lt_LT',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/th_TH.lang.php',
      'to_module' => 'application',
      'language' => 'th_TH',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_ES.lang.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/bg_BG.lang.php',
      'to_module' => 'application',
      'language' => 'bg_BG',
    ),
    37 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/nl_NL.lang.php',
      'to_module' => 'application',
      'language' => 'nl_NL',
    ),
  ),
  'image_dir' => '<basepath>/icons',
);