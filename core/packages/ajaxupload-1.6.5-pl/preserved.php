<?php return array (
  'b5ce3d15f3cf02d6832106b4370354b8' => 
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
  '7327d4c4face3fea16faa6c314767e07' => 
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
  'd6383633d8cd3c012c84bf4bb6e7d787' => 
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
  '0b54044626293683b2eeba665f192e4b' => 
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
  '512bb7b3dac2115b6654cf8f85c45218' => 
  array (
    'criteria' => 
    array (
      'name' => 'tplAjaxuploadImage',
    ),
    'object' => 
    array (
      'id' => 101,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'tplAjaxuploadImage',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<div class="file-wrap" data-fileid="[[+fileid]]">
    <img alt="[[+original]]" class="thumb" src="[[+thumb]]" style="[[+style]]" title="[[+original]]">
    <span class="title">[[+originalName]]</span>
    <a class="delete-button" title="[[%ajaxupload.deleteButton]]"></a>
</div>
',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div class="file-wrap" data-fileid="[[+fileid]]">
    <img alt="[[+original]]" class="thumb" src="[[+thumb]]" style="[[+style]]" title="[[+original]]">
    <span class="title">[[+originalName]]</span>
    <a class="delete-button" title="[[%ajaxupload.deleteButton]]"></a>
</div>
',
    ),
  ),
  'e9edd79a2beb4d198c706bc2d2e70486' => 
  array (
    'criteria' => 
    array (
      'name' => 'tplAjaxuploadScript',
    ),
    'object' => 
    array (
      'id' => 102,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'tplAjaxuploadScript',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<script type="text/javascript">
    $(document).ready(function () {
        $(\'#file-uploader-[[+uid]]\').ajaxUpload({
            uploadAction: \'[[+connectorUrl]]\',
            uid: \'[[+uid]]\',
            dragText: \'[[%ajaxupload.dropArea]]\',
            uploadButtonText: \'[[%ajaxupload.uploadButton]]\',
            cancelButtonText: \'[[%ajaxupload.cancel]]\',
            failUploadText: \'[[%ajaxupload.failed]]\',
            deleteText: \'[[%ajaxupload.deleteButton]]\',
            clearText: \'[[%ajaxupload.clearButton]]\',
            hideShowDropArea: true,
            thumbX: \'[[+thumbX]]px\',
            thumbY: \'[[+thumbY]]px\',
            allowedExtensions: [[+allowedExtensionsString]],
            sizeLimit: [[+sizeLimit]],
            maxFiles: [[+maxFiles]],
            maxConnections: [[+maxConnections]],
            messages: {
                typeError: "[[%ajaxupload.typeError]]",
                sizeError: "[[%ajaxupload.sizeError]]",
                minSizeError: "[[%ajaxupload.minSizeError]]",
                emptyError: "[[%ajaxupload.emptyError]]",
                onLeave: "[[%ajaxupload.onLeave]]"
            }
        });
    });
</script>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<script type="text/javascript">
    $(document).ready(function () {
        $(\'#file-uploader-[[+uid]]\').ajaxUpload({
            uploadAction: \'[[+connectorUrl]]\',
            uid: \'[[+uid]]\',
            dragText: \'[[%ajaxupload.dropArea]]\',
            uploadButtonText: \'[[%ajaxupload.uploadButton]]\',
            cancelButtonText: \'[[%ajaxupload.cancel]]\',
            failUploadText: \'[[%ajaxupload.failed]]\',
            deleteText: \'[[%ajaxupload.deleteButton]]\',
            clearText: \'[[%ajaxupload.clearButton]]\',
            hideShowDropArea: true,
            thumbX: \'[[+thumbX]]px\',
            thumbY: \'[[+thumbY]]px\',
            allowedExtensions: [[+allowedExtensionsString]],
            sizeLimit: [[+sizeLimit]],
            maxFiles: [[+maxFiles]],
            maxConnections: [[+maxConnections]],
            messages: {
                typeError: "[[%ajaxupload.typeError]]",
                sizeError: "[[%ajaxupload.sizeError]]",
                minSizeError: "[[%ajaxupload.minSizeError]]",
                emptyError: "[[%ajaxupload.emptyError]]",
                onLeave: "[[%ajaxupload.onLeave]]"
            }
        });
    });
</script>',
    ),
  ),
  '2548c912b1c36bb69724471e7fadc8a2' => 
  array (
    'criteria' => 
    array (
      'name' => 'tplAjaxuploadUploadSection',
    ),
    'object' => 
    array (
      'id' => 103,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'tplAjaxuploadUploadSection',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<div id="file-uploader-[[+uid]]">
    <div class="file-uploader-items">
        [[+items]]
    </div>
    <div class="file-uploader-buttons">
        <noscript>
            <input name="[[+uid]]" type="file">
        </noscript>
    </div>
    [[!+fi.error.[[+uid]]]]
</div>
',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div id="file-uploader-[[+uid]]">
    <div class="file-uploader-items">
        [[+items]]
    </div>
    <div class="file-uploader-buttons">
        <noscript>
            <input name="[[+uid]]" type="file">
        </noscript>
    </div>
    [[!+fi.error.[[+uid]]]]
</div>
',
    ),
  ),
  '1fdd40615c34deec0280863bab692300' => 
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
 * AjaxUpload Snippet
 *
 * @package ajaxupload
 * @subpackage snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

use TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadSnippet;

$corePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
/** @var AjaxUpload $ajaxupload */
$ajaxupload = $modx->getService(\'ajaxupload\', \'AjaxUpload\', $corePath . \'model/ajaxupload/\', [
    \'core_path\' => $corePath
]);

$snippet = new AjaxUploadSnippet($modx, $scriptProperties);
if ($snippet instanceof TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadSnippet) {
    return $snippet->execute();
}
return \'TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadSnippet class not found\';',
      'locked' => 0,
      'properties' => 'a:10:{s:3:"uid";a:7:{s:4:"name";s:3:"uid";s:4:"desc";s:25:"ajaxupload.ajaxupload.uid";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:8:"language";a:7:{s:4:"name";s:8:"language";s:4:"desc";s:30:"ajaxupload.ajaxupload.language";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:17:"allowedExtensions";a:7:{s:4:"name";s:17:"allowedExtensions";s:4:"desc";s:39:"ajaxupload.ajaxupload.allowedExtensions";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"jpg,jpeg,png,gif";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:13:"maxFilesizeMb";a:7:{s:4:"name";s:13:"maxFilesizeMb";s:4:"desc";s:35:"ajaxupload.ajaxupload.maxFilesizeMb";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"8";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:8:"maxFiles";a:7:{s:4:"name";s:8:"maxFiles";s:4:"desc";s:30:"ajaxupload.ajaxupload.maxFiles";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"3";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:6:"thumbX";a:7:{s:4:"name";s:6:"thumbX";s:4:"desc";s:28:"ajaxupload.ajaxupload.thumbX";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"100";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:6:"thumbY";a:7:{s:4:"name";s:6:"thumbY";s:4:"desc";s:28:"ajaxupload.ajaxupload.thumbY";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"100";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:9:"addJquery";a:7:{s:4:"name";s:9:"addJquery";s:4:"desc";s:31:"ajaxupload.ajaxupload.addJquery";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:10:"addJscript";a:7:{s:4:"name";s:10:"addJscript";s:4:"desc";s:32:"ajaxupload.ajaxupload.addJscript";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:6:"addCss";a:7:{s:4:"name";s:6:"addCss";s:4:"desc";s:28:"ajaxupload.ajaxupload.addCss";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * AjaxUpload Snippet
 *
 * @package ajaxupload
 * @subpackage snippet
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

use TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadSnippet;

$corePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
/** @var AjaxUpload $ajaxupload */
$ajaxupload = $modx->getService(\'ajaxupload\', \'AjaxUpload\', $corePath . \'model/ajaxupload/\', [
    \'core_path\' => $corePath
]);

$snippet = new AjaxUploadSnippet($modx, $scriptProperties);
if ($snippet instanceof TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadSnippet) {
    return $snippet->execute();
}
return \'TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadSnippet class not found\';',
    ),
  ),
  'de57b6f0896f693d8fff1103d5d07f97' => 
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

use TreehillStudio\\AjaxUpload\\Snippets\\AjaxUpload2FormitHook;

$corePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
/** @var AjaxUpload $ajaxupload */
$ajaxupload = $modx->getService(\'ajaxupload\', \'AjaxUpload\', $corePath . \'model/ajaxupload/\', [
    \'core_path\' => $corePath
]);

$snippet = new AjaxUpload2FormitHook($modx, $hook, $scriptProperties);
if ($snippet instanceof TreehillStudio\\AjaxUpload\\Snippets\\AjaxUpload2FormitHook) {
    return $snippet->execute();
}
return \'TreehillStudio\\AjaxUpload\\Snippets\\AjaxUpload2FormitHook class not found\';',
      'locked' => 0,
      'properties' => 'a:6:{s:13:"ajaxuploadUid";a:7:{s:4:"name";s:13:"ajaxuploadUid";s:4:"desc";s:42:"ajaxupload.ajaxupload2formit.ajaxuploadUid";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:19:"ajaxuploadFieldname";a:7:{s:4:"name";s:19:"ajaxuploadFieldname";s:4:"desc";s:48:"ajaxupload.ajaxupload2formit.ajaxuploadFieldname";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:16:"ajaxuploadTarget";a:7:{s:4:"name";s:16:"ajaxuploadTarget";s:4:"desc";s:45:"ajaxupload.ajaxupload2formit.ajaxuploadTarget";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:21:"ajaxuploadFieldformat";a:7:{s:4:"name";s:21:"ajaxuploadFieldformat";s:4:"desc";s:50:"ajaxupload.ajaxupload2formit.ajaxuploadFieldformat";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:32:"ajaxupload.formit2ajaxupload.csv";s:5:"value";s:3:"csv";}i:1;a:2:{s:4:"text";s:33:"ajaxupload.formit2ajaxupload.json";s:5:"value";s:4:"json";}}s:5:"value";s:3:"csv";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:20:"ajaxuploadClearQueue";a:7:{s:4:"name";s:20:"ajaxuploadClearQueue";s:4:"desc";s:49:"ajaxupload.ajaxupload2formit.ajaxuploadClearQueue";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}s:24:"ajaxuploadAllowOverwrite";a:7:{s:4:"name";s:24:"ajaxuploadAllowOverwrite";s:4:"desc";s:53:"ajaxupload.ajaxupload2formit.ajaxuploadAllowOverwrite";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}}',
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

use TreehillStudio\\AjaxUpload\\Snippets\\AjaxUpload2FormitHook;

$corePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
/** @var AjaxUpload $ajaxupload */
$ajaxupload = $modx->getService(\'ajaxupload\', \'AjaxUpload\', $corePath . \'model/ajaxupload/\', [
    \'core_path\' => $corePath
]);

$snippet = new AjaxUpload2FormitHook($modx, $hook, $scriptProperties);
if ($snippet instanceof TreehillStudio\\AjaxUpload\\Snippets\\AjaxUpload2FormitHook) {
    return $snippet->execute();
}
return \'TreehillStudio\\AjaxUpload\\Snippets\\AjaxUpload2FormitHook class not found\';',
    ),
  ),
  '4a5c966cb2df74a569ac4c8b2c26bc7a' => 
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

use TreehillStudio\\AjaxUpload\\Snippets\\Formit2AjaxUploadHook;

$corePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
/** @var AjaxUpload $ajaxupload */
$ajaxupload = $modx->getService(\'ajaxupload\', \'AjaxUpload\', $corePath . \'model/ajaxupload/\', [
    \'core_path\' => $corePath
]);

$snippet = new Formit2AjaxUploadHook($modx, $hook, $scriptProperties);
if ($snippet instanceof TreehillStudio\\AjaxUpload\\Snippets\\Formit2AjaxUploadHook) {
    return $snippet->execute();
}
return \'TreehillStudio\\AjaxUpload\\Snippets\\Formit2AjaxUploadHook class not found\';',
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

use TreehillStudio\\AjaxUpload\\Snippets\\Formit2AjaxUploadHook;

$corePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
/** @var AjaxUpload $ajaxupload */
$ajaxupload = $modx->getService(\'ajaxupload\', \'AjaxUpload\', $corePath . \'model/ajaxupload/\', [
    \'core_path\' => $corePath
]);

$snippet = new Formit2AjaxUploadHook($modx, $hook, $scriptProperties);
if ($snippet instanceof TreehillStudio\\AjaxUpload\\Snippets\\Formit2AjaxUploadHook) {
    return $snippet->execute();
}
return \'TreehillStudio\\AjaxUpload\\Snippets\\Formit2AjaxUploadHook class not found\';',
    ),
  ),
  '56c505497136f440dd10200661eccc9b' => 
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

use TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadAttachmentsHook;

$corePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
/** @var AjaxUpload $ajaxupload */
$ajaxupload = $modx->getService(\'ajaxupload\', \'AjaxUpload\', $corePath . \'model/ajaxupload/\', [
    \'core_path\' => $corePath
]);

$snippet = new AjaxUploadAttachmentsHook($modx, $hook, $scriptProperties);
if ($snippet instanceof TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadAttachmentsHook) {
    return $snippet->execute();
}
return \'TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadAttachmentsHook class not found\';',
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

use TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadAttachmentsHook;

$corePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
/** @var AjaxUpload $ajaxupload */
$ajaxupload = $modx->getService(\'ajaxupload\', \'AjaxUpload\', $corePath . \'model/ajaxupload/\', [
    \'core_path\' => $corePath
]);

$snippet = new AjaxUploadAttachmentsHook($modx, $hook, $scriptProperties);
if ($snippet instanceof TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadAttachmentsHook) {
    return $snippet->execute();
}
return \'TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadAttachmentsHook class not found\';',
    ),
  ),
  '7dae29561bc6a334d9c8ed8e7c95f11f' => 
  array (
    'criteria' => 
    array (
      'name' => 'AjaxUploadRequired',
    ),
    'object' => 
    array (
      'id' => 27,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'AjaxUploadRequired',
      'description' => 'AjaxUpload Formit hook. Add an error message, when no file is uploaded.',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/**
 * AjaxUploadRequiredHook
 *
 * @package ajaxupload
 * @subpackage hook
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var fiHooks $hook
 */

use TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadRequiredHook;

$corePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
/** @var AjaxUpload $ajaxupload */
$ajaxupload = $modx->getService(\'ajaxupload\', \'AjaxUpload\', $corePath . \'model/ajaxupload/\', [
    \'core_path\' => $corePath
]);

$snippet = new AjaxUploadRequiredHook($modx, $hook, $scriptProperties);
if ($snippet instanceof TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadRequiredHook) {
    return $snippet->execute();
}
return \'TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadRequiredHook class not found\';',
      'locked' => 0,
      'properties' => 'a:1:{s:25:"ajaxuploadRequiredMessage";a:7:{s:4:"name";s:25:"ajaxuploadRequiredMessage";s:4:"desc";s:55:"ajaxupload.ajaxuploadrequired.ajaxuploadRequiredMessage";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:21:"ajaxupload:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * AjaxUploadRequiredHook
 *
 * @package ajaxupload
 * @subpackage hook
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var fiHooks $hook
 */

use TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadRequiredHook;

$corePath = $modx->getOption(\'ajaxupload.core_path\', null, $modx->getOption(\'core_path\') . \'components/ajaxupload/\');
/** @var AjaxUpload $ajaxupload */
$ajaxupload = $modx->getService(\'ajaxupload\', \'AjaxUpload\', $corePath . \'model/ajaxupload/\', [
    \'core_path\' => $corePath
]);

$snippet = new AjaxUploadRequiredHook($modx, $hook, $scriptProperties);
if ($snippet instanceof TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadRequiredHook) {
    return $snippet->execute();
}
return \'TreehillStudio\\AjaxUpload\\Snippets\\AjaxUploadRequiredHook class not found\';',
    ),
  ),
);