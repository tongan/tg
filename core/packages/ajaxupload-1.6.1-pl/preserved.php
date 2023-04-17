<?php return array (
  '818b2c965758dabe0600d938723c25c2' => 
  array (
    'criteria' => 
    array (
      'name' => 'ajaxupload',
    ),
    'object' => 
    array (
      'name' => 'ajaxupload',
      'path' => '{core_path}components/ajaxupload/',
      'assets_path' => '{assets_path}components/ajaxupload/',
    ),
  ),
  '1cf3817ffb469539181ba1f22fa0d817' => 
  array (
    'criteria' => 
    array (
      'key' => 'ajaxupload.cache_expires',
    ),
    'object' => 
    array (
      'key' => 'ajaxupload.cache_expires',
      'value' => '4',
      'xtype' => 'textfield',
      'namespace' => 'ajaxupload',
      'area' => 'site',
      'editedon' => NULL,
    ),
  ),
  'a6d7fdaddadd211ce0d6515f74c25819' => 
  array (
    'criteria' => 
    array (
      'key' => 'ajaxupload.debug',
    ),
    'object' => 
    array (
      'key' => 'ajaxupload.debug',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'ajaxupload',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  '339e744a71a93d4f5633d2454204e649' => 
  array (
    'criteria' => 
    array (
      'category' => 'AjaxUpload',
    ),
    'object' => 
    array (
      'id' => 3,
      'parent' => 0,
      'category' => 'AjaxUpload',
      'rank' => 0,
    ),
  ),
  '0cab9267af491462470d810e75f64471' => 
  array (
    'criteria' => 
    array (
      'name' => 'AjaxUpload',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'AjaxUpload',
      'description' => 'Show upload button for uploading multiple files with progress-bar',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * AjaxUpload
 *
 * @package ajaxupload
 * @subpackage snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 */
$ajaxuploadCorePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsPath = $modx->getOption(\'ajaxupload.assets_path\', null, $modx->getOption(\'assets_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsUrl = $modx->getOption(\'ajaxupload.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/ajaxupload/\');
$debug = $modx->getOption(\'debug\', $scriptProperties, $modx->getOption(\'ajaxupload.debug\', null, false), true);

if (!$modx->loadClass(\'AjaxUpload\', $ajaxuploadCorePath . \'model/ajaxupload/\', true, true)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load AjaxUpload class.\', \'\', \'AjaxUpload\');
    if ($debug) {
        return \'Could not load AjaxUpload class.\';
    } else {
        return \'\';
    }
}

$scriptProperties[\'core_path\'] = $ajaxuploadCorePath;
$scriptProperties[\'assets_path\'] = $ajaxuploadAssetsPath;
$scriptProperties[\'assets_url\'] = $ajaxuploadAssetsUrl;
$ajaxUpload = new AjaxUpload($modx, $scriptProperties);
if (!$ajaxUpload->initialize($scriptProperties)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not initialize AjaxUpload class.\', \'\', \'AjaxUpload\');
    if ($debug) {
        return \'Could not load initialize AjaxUpload class.\';
    } else {
        return \'\';
    }
}
return $ajaxUpload->output() . $ajaxUpload->debugOutput();',
      'locked' => 0,
      'properties' => 'a:10:{s:3:"uid";a:7:{s:4:"name";s:3:"uid";s:4:"desc";s:25:"ajaxupload.ajaxupload.uid";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:8:"language";a:7:{s:4:"name";s:8:"language";s:4:"desc";s:30:"ajaxupload.ajaxupload.language";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:17:"allowedExtensions";a:7:{s:4:"name";s:17:"allowedExtensions";s:4:"desc";s:39:"ajaxupload.ajaxupload.allowedExtensions";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"jpg,jpeg,png,gif";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:13:"maxFilesizeMb";a:7:{s:4:"name";s:13:"maxFilesizeMb";s:4:"desc";s:35:"ajaxupload.ajaxupload.maxFilesizeMb";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"8";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:8:"maxFiles";a:7:{s:4:"name";s:8:"maxFiles";s:4:"desc";s:30:"ajaxupload.ajaxupload.maxFiles";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"3";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:6:"thumbX";a:7:{s:4:"name";s:6:"thumbX";s:4:"desc";s:28:"ajaxupload.ajaxupload.thumbX";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"100";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:6:"thumbY";a:7:{s:4:"name";s:6:"thumbY";s:4:"desc";s:28:"ajaxupload.ajaxupload.thumbY";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"100";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:9:"addJquery";a:7:{s:4:"name";s:9:"addJquery";s:4:"desc";s:31:"ajaxupload.ajaxupload.addJquery";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:10:"addJscript";a:7:{s:4:"name";s:10:"addJscript";s:4:"desc";s:32:"ajaxupload.ajaxupload.addJscript";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:6:"addCss";a:7:{s:4:"name";s:6:"addCss";s:4:"desc";s:28:"ajaxupload.ajaxupload.addCss";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * AjaxUpload
 *
 * @package ajaxupload
 * @subpackage snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 */
$ajaxuploadCorePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsPath = $modx->getOption(\'ajaxupload.assets_path\', null, $modx->getOption(\'assets_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsUrl = $modx->getOption(\'ajaxupload.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/ajaxupload/\');
$debug = $modx->getOption(\'debug\', $scriptProperties, $modx->getOption(\'ajaxupload.debug\', null, false), true);

if (!$modx->loadClass(\'AjaxUpload\', $ajaxuploadCorePath . \'model/ajaxupload/\', true, true)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load AjaxUpload class.\', \'\', \'AjaxUpload\');
    if ($debug) {
        return \'Could not load AjaxUpload class.\';
    } else {
        return \'\';
    }
}

$scriptProperties[\'core_path\'] = $ajaxuploadCorePath;
$scriptProperties[\'assets_path\'] = $ajaxuploadAssetsPath;
$scriptProperties[\'assets_url\'] = $ajaxuploadAssetsUrl;
$ajaxUpload = new AjaxUpload($modx, $scriptProperties);
if (!$ajaxUpload->initialize($scriptProperties)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not initialize AjaxUpload class.\', \'\', \'AjaxUpload\');
    if ($debug) {
        return \'Could not load initialize AjaxUpload class.\';
    } else {
        return \'\';
    }
}
return $ajaxUpload->output() . $ajaxUpload->debugOutput();',
    ),
  ),
  'fbc86ed5de0f08ec088cac1b6c099288' => 
  array (
    'criteria' => 
    array (
      'name' => 'AjaxUpload2Formit',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'AjaxUpload2Formit',
      'description' => 'AjaxUpload Formit hook. Save the upload queue into Formit field.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * AjaxUpload2Formit
 *
 * @package ajaxupload
 * @subpackage hook
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var fiHooks $hook
 */
$ajaxuploadCorePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsPath = $modx->getOption(\'ajaxupload.assets_path\', null, $modx->getOption(\'assets_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsUrl = $modx->getOption(\'ajaxupload.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/ajaxupload/\');

$ajaxuploadFieldname = $modx->getOption(\'ajaxuploadFieldname\', $scriptProperties, \'\');
$ajaxuploadFieldformat = $modx->getOption(\'ajaxuploadFieldformat\', $scriptProperties, \'csv\');
$ajaxuploadTarget = $modx->getOption(\'ajaxuploadTarget\', $scriptProperties, \'\');
$scriptProperties[\'debug\'] = (bool)$modx->getOption(\'ajaxuploadDebug\', $scriptProperties, $modx->getOption(\'ajaxupload.debug\', null, false));
$scriptProperties[\'uid\'] = $modx->getOption(\'ajaxuploadUid\', $scriptProperties, \'\');
$scriptProperties[\'cacheExpires\'] = $modx->getOption(\'ajaxuploadCacheExpires\', $scriptProperties, $modx->getOption(\'ajaxupload.cache_expires\', null, \'4\'));
$scriptProperties[\'clearQueue\'] = (bool)$modx->getOption(\'ajaxuploadClearQueue\', $scriptProperties, false, true);
$scriptProperties[\'allowOverwrite\'] = (bool)$modx->getOption(\'ajaxuploadAllowOverwrite\', $scriptProperties, true, true);

$debug = $scriptProperties[\'debug\'];

if (!$modx->loadClass(\'AjaxUpload\', $ajaxuploadCorePath . \'model/ajaxupload/\', true, true)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load AjaxUpload class.\', \'\', \'AjaxUpload2Formit\');
    if ($debug) {
        return \'Could not load AjaxUpload class.\';
    } else {
        return \'\';
    }
}

$scriptProperties[\'core_path\'] = $ajaxuploadCorePath;
$scriptProperties[\'assets_path\'] = $ajaxuploadAssetsPath;
$scriptProperties[\'assets_url\'] = $ajaxuploadAssetsUrl;
$ajaxUpload = new AjaxUpload($modx, $scriptProperties);
if (!$ajaxUpload->initialize()) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not initialize AjaxUpload class.\', \'\', \'AjaxUpload2Formit\');
    if ($debug) {
        return \'Could not load initialize AjaxUpload class.\';
    } else {
        return \'\';
    }
}

$success = true;
switch (true) {
    case (empty($ajaxuploadFieldname)) :
        $hook->addError($scriptProperties[\'uid\'], \'Missing parameter ajaxuploadFieldname.\');
        $modx->log(modX::LOG_LEVEL_ERROR, \'Missing parameter ajaxuploadFieldname.\', \'\', \'AjaxUpload2Formit\');
        $success = false;
        break;
    case (empty($ajaxuploadTarget)) :
        $hook->addError($scriptProperties[\'uid\'], \'Missing parameter ajaxuploadTarget.\');
        $modx->log(modX::LOG_LEVEL_ERROR, \'Missing parameter ajaxuploadTarget.\', \'\', \'AjaxUpload2Formit\');
        $success = false;
        break;
    default :
        $errors = $ajaxUpload->saveUploads($ajaxuploadTarget, $scriptProperties[\'clearQueue\']);
        if ($errors) {
            $hook->addError($scriptProperties[\'uid\'], $errors);
            $success = false;
            break;
        }
        $ajaxUpload->deleteExisting();
        $ajaxuploadValue = $ajaxUpload->getValue($ajaxuploadFieldformat);
        $hook->setValue($ajaxuploadFieldname, $ajaxuploadValue);
        $success = true;
}
return $success;',
      'locked' => 0,
      'properties' => 'a:5:{s:13:"ajaxuploadUid";a:7:{s:4:"name";s:13:"ajaxuploadUid";s:4:"desc";s:42:"ajaxupload.ajaxupload2formit.ajaxuploadUid";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:19:"ajaxuploadFieldname";a:7:{s:4:"name";s:19:"ajaxuploadFieldname";s:4:"desc";s:48:"ajaxupload.ajaxupload2formit.ajaxuploadFieldname";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:16:"ajaxuploadTarget";a:7:{s:4:"name";s:16:"ajaxuploadTarget";s:4:"desc";s:45:"ajaxupload.ajaxupload2formit.ajaxuploadTarget";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:21:"ajaxuploadFieldformat";a:7:{s:4:"name";s:21:"ajaxuploadFieldformat";s:4:"desc";s:50:"ajaxupload.ajaxupload2formit.ajaxuploadFieldformat";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:32:"ajaxupload.formit2ajaxupload.csv";s:5:"value";s:3:"csv";}i:1;a:2:{s:4:"text";s:33:"ajaxupload.formit2ajaxupload.json";s:5:"value";s:4:"json";}}s:5:"value";s:3:"csv";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:20:"ajaxuploadClearQueue";a:7:{s:4:"name";s:20:"ajaxuploadClearQueue";s:4:"desc";s:49:"ajaxupload.ajaxupload2formit.ajaxuploadClearQueue";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * AjaxUpload2Formit
 *
 * @package ajaxupload
 * @subpackage hook
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var fiHooks $hook
 */
$ajaxuploadCorePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsPath = $modx->getOption(\'ajaxupload.assets_path\', null, $modx->getOption(\'assets_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsUrl = $modx->getOption(\'ajaxupload.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/ajaxupload/\');

$ajaxuploadFieldname = $modx->getOption(\'ajaxuploadFieldname\', $scriptProperties, \'\');
$ajaxuploadFieldformat = $modx->getOption(\'ajaxuploadFieldformat\', $scriptProperties, \'csv\');
$ajaxuploadTarget = $modx->getOption(\'ajaxuploadTarget\', $scriptProperties, \'\');
$scriptProperties[\'debug\'] = (bool)$modx->getOption(\'ajaxuploadDebug\', $scriptProperties, $modx->getOption(\'ajaxupload.debug\', null, false));
$scriptProperties[\'uid\'] = $modx->getOption(\'ajaxuploadUid\', $scriptProperties, \'\');
$scriptProperties[\'cacheExpires\'] = $modx->getOption(\'ajaxuploadCacheExpires\', $scriptProperties, $modx->getOption(\'ajaxupload.cache_expires\', null, \'4\'));
$scriptProperties[\'clearQueue\'] = (bool)$modx->getOption(\'ajaxuploadClearQueue\', $scriptProperties, false, true);
$scriptProperties[\'allowOverwrite\'] = (bool)$modx->getOption(\'ajaxuploadAllowOverwrite\', $scriptProperties, true, true);

$debug = $scriptProperties[\'debug\'];

if (!$modx->loadClass(\'AjaxUpload\', $ajaxuploadCorePath . \'model/ajaxupload/\', true, true)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load AjaxUpload class.\', \'\', \'AjaxUpload2Formit\');
    if ($debug) {
        return \'Could not load AjaxUpload class.\';
    } else {
        return \'\';
    }
}

$scriptProperties[\'core_path\'] = $ajaxuploadCorePath;
$scriptProperties[\'assets_path\'] = $ajaxuploadAssetsPath;
$scriptProperties[\'assets_url\'] = $ajaxuploadAssetsUrl;
$ajaxUpload = new AjaxUpload($modx, $scriptProperties);
if (!$ajaxUpload->initialize()) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not initialize AjaxUpload class.\', \'\', \'AjaxUpload2Formit\');
    if ($debug) {
        return \'Could not load initialize AjaxUpload class.\';
    } else {
        return \'\';
    }
}

$success = true;
switch (true) {
    case (empty($ajaxuploadFieldname)) :
        $hook->addError($scriptProperties[\'uid\'], \'Missing parameter ajaxuploadFieldname.\');
        $modx->log(modX::LOG_LEVEL_ERROR, \'Missing parameter ajaxuploadFieldname.\', \'\', \'AjaxUpload2Formit\');
        $success = false;
        break;
    case (empty($ajaxuploadTarget)) :
        $hook->addError($scriptProperties[\'uid\'], \'Missing parameter ajaxuploadTarget.\');
        $modx->log(modX::LOG_LEVEL_ERROR, \'Missing parameter ajaxuploadTarget.\', \'\', \'AjaxUpload2Formit\');
        $success = false;
        break;
    default :
        $errors = $ajaxUpload->saveUploads($ajaxuploadTarget, $scriptProperties[\'clearQueue\']);
        if ($errors) {
            $hook->addError($scriptProperties[\'uid\'], $errors);
            $success = false;
            break;
        }
        $ajaxUpload->deleteExisting();
        $ajaxuploadValue = $ajaxUpload->getValue($ajaxuploadFieldformat);
        $hook->setValue($ajaxuploadFieldname, $ajaxuploadValue);
        $success = true;
}
return $success;',
    ),
  ),
  '0194f57b65ed0dcfc6a08f8c8b609e9e' => 
  array (
    'criteria' => 
    array (
      'name' => 'Formit2AjaxUpload',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Formit2AjaxUpload',
      'description' => 'AjaxUpload Formit preHook. Prefill the upload queue from Formit field.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * Formit2AjaxUpload
 *
 * @package ajaxupload
 * @subpackage prehook
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var fiHooks $hook
 */
$ajaxuploadCorePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsPath = $modx->getOption(\'ajaxupload.assets_path\', null, $modx->getOption(\'assets_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsUrl = $modx->getOption(\'ajaxupload.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/ajaxupload/\');

$ajaxuploadFieldname = $modx->getOption(\'ajaxuploadFieldname\', $scriptProperties, \'\');
$ajaxuploadFieldformat = $modx->getOption(\'ajaxuploadFieldformat\', $scriptProperties, \'csv\');
$ajaxuploadTarget = $modx->getOption(\'ajaxuploadTarget\', $scriptProperties, \'\');
$scriptProperties[\'debug\'] = (bool)$modx->getOption(\'ajaxuploadDebug\', $scriptProperties, $modx->getOption(\'ajaxupload.debug\', null, false));
$scriptProperties[\'uid\'] = $modx->getOption(\'ajaxuploadUid\', $scriptProperties, \'\');
$scriptProperties[\'cacheExpires\'] = $modx->getOption(\'ajaxuploadCacheExpires\', $scriptProperties, $modx->getOption(\'ajaxupload.cache_expires\', null, \'4\'));

$debug = $scriptProperties[\'debug\'];

if (!$modx->loadClass(\'AjaxUpload\', $ajaxuploadCorePath . \'model/ajaxupload/\', true, true)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load AjaxUpload class.\', \'\', \'Formit2AjaxUpload\');
    if ($debug) {
        return \'Could not load AjaxUpload class.\';
    } else {
        return \'\';
    }
}

$uidConfig = isset($_SESSION[\'ajaxupload\'][$scriptProperties[\'uid\'] . \'config\']) ? $_SESSION[\'ajaxupload\'][$scriptProperties[\'uid\'] . \'config\'] : array();

$scriptProperties[\'core_path\'] = $ajaxuploadCorePath;
$scriptProperties[\'assets_path\'] = $ajaxuploadAssetsPath;
$scriptProperties[\'assets_url\'] = $ajaxuploadAssetsUrl;
$ajaxUpload = new AjaxUpload($modx, $scriptProperties);
if (!$ajaxUpload->initialize($uidConfig)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not initialize AjaxUpload class.\', \'\', \'Formit2AjaxUpload\');
    if ($debug) {
        return \'Could not load initialize AjaxUpload class.\';
    } else {
        return \'\';
    }
}

$success = true;
switch (true) {
    case (empty($ajaxuploadFieldname)) :
        $hook->addError($scriptProperties[\'uid\'], \'Missing parameter ajaxuploadFieldname.\');
        $modx->log(modX::LOG_LEVEL_ERROR, \'Missing parameter ajaxuploadFieldname.\', \'\', \'Formit2AjaxUpload\');
        $success = false;
        break;
    case (empty($ajaxuploadTarget)) :
        $hook->addError($scriptProperties[\'uid\'], \'Missing parameter ajaxuploadTarget.\');
        $modx->log(modX::LOG_LEVEL_ERROR, \'Missing parameter ajaxuploadTarget.\', \'\', \'Formit2AjaxUpload\');
        $success = false;
        break;
    default :
        if (!count($_POST)) {
            $ajaxuploadValue = $hook->getValue($ajaxuploadFieldname);
            if ($ajaxuploadValue) {
                switch ($ajaxuploadFieldformat) {
                    case \'json\' :
                        $ajaxuploadValue = json_decode($ajaxuploadValue, true);
                        break;
                    case \'csv\':
                    default :
                        $ajaxuploadValue = explode(\',\', $ajaxuploadValue);
                }
                $ajaxUpload->retrieveUploads($ajaxuploadValue);
            }
        }
        $success = true;
}
return $success;',
      'locked' => 0,
      'properties' => 'a:4:{s:13:"ajaxuploadUid";a:7:{s:4:"name";s:13:"ajaxuploadUid";s:4:"desc";s:42:"ajaxupload.formit2ajaxupload.ajaxuploadUid";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:19:"ajaxuploadFieldname";a:7:{s:4:"name";s:19:"ajaxuploadFieldname";s:4:"desc";s:48:"ajaxupload.formit2ajaxupload.ajaxuploadFieldname";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:16:"ajaxuploadTarget";a:7:{s:4:"name";s:16:"ajaxuploadTarget";s:4:"desc";s:45:"ajaxupload.formit2ajaxupload.ajaxuploadTarget";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:21:"ajaxuploadFieldformat";a:7:{s:4:"name";s:21:"ajaxuploadFieldformat";s:4:"desc";s:50:"ajaxupload.formit2ajaxupload.ajaxuploadFieldformat";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:32:"ajaxupload.ajaxupload2formit.csv";s:5:"value";s:3:"csv";}i:1;a:2:{s:4:"text";s:33:"ajaxupload.ajaxupload2formit.json";s:5:"value";s:4:"json";}}s:5:"value";s:3:"csv";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Formit2AjaxUpload
 *
 * @package ajaxupload
 * @subpackage prehook
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var fiHooks $hook
 */
$ajaxuploadCorePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsPath = $modx->getOption(\'ajaxupload.assets_path\', null, $modx->getOption(\'assets_path\') . \'components/ajaxupload/\');
$ajaxuploadAssetsUrl = $modx->getOption(\'ajaxupload.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/ajaxupload/\');

$ajaxuploadFieldname = $modx->getOption(\'ajaxuploadFieldname\', $scriptProperties, \'\');
$ajaxuploadFieldformat = $modx->getOption(\'ajaxuploadFieldformat\', $scriptProperties, \'csv\');
$ajaxuploadTarget = $modx->getOption(\'ajaxuploadTarget\', $scriptProperties, \'\');
$scriptProperties[\'debug\'] = (bool)$modx->getOption(\'ajaxuploadDebug\', $scriptProperties, $modx->getOption(\'ajaxupload.debug\', null, false));
$scriptProperties[\'uid\'] = $modx->getOption(\'ajaxuploadUid\', $scriptProperties, \'\');
$scriptProperties[\'cacheExpires\'] = $modx->getOption(\'ajaxuploadCacheExpires\', $scriptProperties, $modx->getOption(\'ajaxupload.cache_expires\', null, \'4\'));

$debug = $scriptProperties[\'debug\'];

if (!$modx->loadClass(\'AjaxUpload\', $ajaxuploadCorePath . \'model/ajaxupload/\', true, true)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load AjaxUpload class.\', \'\', \'Formit2AjaxUpload\');
    if ($debug) {
        return \'Could not load AjaxUpload class.\';
    } else {
        return \'\';
    }
}

$uidConfig = isset($_SESSION[\'ajaxupload\'][$scriptProperties[\'uid\'] . \'config\']) ? $_SESSION[\'ajaxupload\'][$scriptProperties[\'uid\'] . \'config\'] : array();

$scriptProperties[\'core_path\'] = $ajaxuploadCorePath;
$scriptProperties[\'assets_path\'] = $ajaxuploadAssetsPath;
$scriptProperties[\'assets_url\'] = $ajaxuploadAssetsUrl;
$ajaxUpload = new AjaxUpload($modx, $scriptProperties);
if (!$ajaxUpload->initialize($uidConfig)) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not initialize AjaxUpload class.\', \'\', \'Formit2AjaxUpload\');
    if ($debug) {
        return \'Could not load initialize AjaxUpload class.\';
    } else {
        return \'\';
    }
}

$success = true;
switch (true) {
    case (empty($ajaxuploadFieldname)) :
        $hook->addError($scriptProperties[\'uid\'], \'Missing parameter ajaxuploadFieldname.\');
        $modx->log(modX::LOG_LEVEL_ERROR, \'Missing parameter ajaxuploadFieldname.\', \'\', \'Formit2AjaxUpload\');
        $success = false;
        break;
    case (empty($ajaxuploadTarget)) :
        $hook->addError($scriptProperties[\'uid\'], \'Missing parameter ajaxuploadTarget.\');
        $modx->log(modX::LOG_LEVEL_ERROR, \'Missing parameter ajaxuploadTarget.\', \'\', \'Formit2AjaxUpload\');
        $success = false;
        break;
    default :
        if (!count($_POST)) {
            $ajaxuploadValue = $hook->getValue($ajaxuploadFieldname);
            if ($ajaxuploadValue) {
                switch ($ajaxuploadFieldformat) {
                    case \'json\' :
                        $ajaxuploadValue = json_decode($ajaxuploadValue, true);
                        break;
                    case \'csv\':
                    default :
                        $ajaxuploadValue = explode(\',\', $ajaxuploadValue);
                }
                $ajaxUpload->retrieveUploads($ajaxuploadValue);
            }
        }
        $success = true;
}
return $success;',
    ),
  ),
  '243d03e3f80c8772b51c9b7470cc0e67' => 
  array (
    'criteria' => 
    array (
      'name' => 'AjaxUploadAttachments',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'AjaxUploadAttachments',
      'description' => 'AjaxUpload Formit hook. Attach the uploaded files to the mail.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * AjaxUploadAttachments
 *
 * @package ajaxupload
 * @subpackage hook
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var fiHooks $hook
 */
$ajaxuploadFieldname = $modx->getOption(\'ajaxuploadFieldname\', $scriptProperties, \'\');
$ajaxuploadFieldformat = $modx->getOption(\'ajaxuploadFieldformat\', $scriptProperties, \'csv\');
$debug = (bool)$modx->getOption(\'ajaxuploadDebug\', $scriptProperties, $modx->getOption(\'ajaxupload.debug\', null, false));

$assetsPath = $modx->getOption(\'assets_path\');
$assetsUrl = $modx->getOption(\'assets_url\');
$assetsUrlLength = strlen($assetsUrl);

if ($ajaxuploadFieldname) {
    $attachments = $hook->getValue($ajaxuploadFieldname);
    if ($ajaxuploadFieldformat == \'json\') {
        $attachments = json_decode($attachments, true);
    } else {
        $attachments = (!empty($attachments)) ? explode(\',\', $attachments) : array();
    }

    $hook->modx->getService(\'mail\', \'mail.modPHPMailer\');

    foreach ($attachments as $attachment) {
        $attachment = substr($attachment, $assetsUrlLength);
        if (file_exists($assetsPath . $attachment) && is_file($assetsPath . $attachment)) {
            $hook->modx->mail->mailer->AddAttachment($assetsPath . $attachment);
        } elseif ($debug) {
            if (!is_file($assetsPath . $attachment)) {
                $modx->log(xPDO::LOG_LEVEL_ERROR, \'The attached file \' . $assetsPath . $attachment . \' is not a file!\', \'\', \'AjaxUploadAttachments\');
            } elseif (!file_exists($assetsPath . $attachment)) {
                $modx->log(xPDO::LOG_LEVEL_ERROR, \'The attached file \' . $assetsPath . $attachment . \' does not exist!\', \'\', \'AjaxUploadAttachments\');
            }
        }
    }
}
return true;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * AjaxUploadAttachments
 *
 * @package ajaxupload
 * @subpackage hook
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var fiHooks $hook
 */
$ajaxuploadFieldname = $modx->getOption(\'ajaxuploadFieldname\', $scriptProperties, \'\');
$ajaxuploadFieldformat = $modx->getOption(\'ajaxuploadFieldformat\', $scriptProperties, \'csv\');
$debug = (bool)$modx->getOption(\'ajaxuploadDebug\', $scriptProperties, $modx->getOption(\'ajaxupload.debug\', null, false));

$assetsPath = $modx->getOption(\'assets_path\');
$assetsUrl = $modx->getOption(\'assets_url\');
$assetsUrlLength = strlen($assetsUrl);

if ($ajaxuploadFieldname) {
    $attachments = $hook->getValue($ajaxuploadFieldname);
    if ($ajaxuploadFieldformat == \'json\') {
        $attachments = json_decode($attachments, true);
    } else {
        $attachments = (!empty($attachments)) ? explode(\',\', $attachments) : array();
    }

    $hook->modx->getService(\'mail\', \'mail.modPHPMailer\');

    foreach ($attachments as $attachment) {
        $attachment = substr($attachment, $assetsUrlLength);
        if (file_exists($assetsPath . $attachment) && is_file($assetsPath . $attachment)) {
            $hook->modx->mail->mailer->AddAttachment($assetsPath . $attachment);
        } elseif ($debug) {
            if (!is_file($assetsPath . $attachment)) {
                $modx->log(xPDO::LOG_LEVEL_ERROR, \'The attached file \' . $assetsPath . $attachment . \' is not a file!\', \'\', \'AjaxUploadAttachments\');
            } elseif (!file_exists($assetsPath . $attachment)) {
                $modx->log(xPDO::LOG_LEVEL_ERROR, \'The attached file \' . $assetsPath . $attachment . \' does not exist!\', \'\', \'AjaxUploadAttachments\');
            }
        }
    }
}
return true;',
    ),
  ),
);