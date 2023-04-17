<?php  return array (
  'config' => 
  array (
    'allow_tags_in_post' => '1',
    'modRequest.class' => 'MODX\\Revolution\\modManagerRequest',
  ),
  'aliasMap' => 
  array (
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'OnBeforeManagerLogin' => 
    array (
      3 => '3',
    ),
    'OnChunkFormPrerender' => 
    array (
      1 => '1',
      13 => '13',
      8 => '8',
    ),
    'OnChunkFormSave' => 
    array (
      13 => '13',
    ),
    'OnDocFormPrerender' => 
    array (
      6 => '6',
      2 => '2',
      8 => '8',
      13 => '13',
      1 => '1',
    ),
    'OnDocFormSave' => 
    array (
      2 => '2',
      13 => '13',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnFileEditFormPrerender' => 
    array (
      1 => '1',
      8 => '8',
    ),
    'OnLoadWebDocument' => 
    array (
      2 => '2',
    ),
    'OnManagerAuthentication' => 
    array (
      2 => '2',
    ),
    'OnManagerLoginFormRender' => 
    array (
      3 => '3',
    ),
    'OnManagerPageAfterRender' => 
    array (
      2 => '2',
    ),
    'OnManagerPageBeforeRender' => 
    array (
      2 => '2',
      1 => '1',
      7 => '7',
    ),
    'OnManagerPageInit' => 
    array (
      2 => '2',
    ),
    'OnMODXInit' => 
    array (
      2 => '2',
    ),
    'OnPluginFormPrerender' => 
    array (
      1 => '1',
      8 => '8',
    ),
    'OnRichTextEditorRegister' => 
    array (
      8 => '8',
      1 => '1',
    ),
    'OnSnipFormPrerender' => 
    array (
      1 => '1',
      8 => '8',
      13 => '13',
    ),
    'OnSnipFormSave' => 
    array (
      13 => '13',
    ),
    'OnTempFormPrerender' => 
    array (
      1 => '1',
      13 => '13',
      2 => '2',
      8 => '8',
    ),
    'OnTempFormSave' => 
    array (
      13 => '13',
    ),
    'OnTemplateVarBeforeRemove' => 
    array (
      6 => '6',
    ),
    'OnTemplateVarSave' => 
    array (
      6 => '6',
    ),
    'OnTVFormPrerender' => 
    array (
      13 => '13',
    ),
    'OnTVFormSave' => 
    array (
      13 => '13',
    ),
    'OnTVInputPropertiesList' => 
    array (
      6 => '6',
      7 => '7',
    ),
    'OnTVInputRenderList' => 
    array (
      1 => '1',
      6 => '6',
      7 => '7',
    ),
    'OnTVOutputRenderList' => 
    array (
      6 => '6',
      7 => '7',
    ),
    'OnTVOutputRenderPropertiesList' => 
    array (
      6 => '6',
      7 => '7',
    ),
    'OnWebPagePrerender' => 
    array (
      11 => '11',
      12 => '12',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$corePath = $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\');
$ace = $modx->getService(\'ace\', \'Ace\', $corePath.\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Define default mime for html elements(templates, chunks and html resources)
$html_elements_mime=$modx->getOption(\'ace.html_elements_mime\',null,false);
if(!$html_elements_mime){
    // this may deprecated in future because components may set ace.html_elements_mime option now
    switch (true) {
        case $modx->getOption(\'twiggy_class\'):
            $html_elements_mime = \'text/x-twig\';
            break;
        case $modx->getOption(\'pdotools_fenom_parser\'):
            $html_elements_mime = \'text/x-smarty\';
            break;
        default:
            $html_elements_mime = \'text/html\';
    }
}

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;
        $mimeType = $html_elements_mime;
        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->name, PATHINFO_EXTENSION);
            if(!$extension||!isset($extensionMap[$extension])){
                $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            }
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = $html_elements_mime;
        }
        $modxTags = true;
        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : (\'@FILE:\'.pathinfo($scriptProperties[\'file\'], PATHINFO_BASENAME));
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        if($mimeType == \'text/html\')$mimeType = $html_elements_mime;

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath . \'elements/tv/input/\');
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if (!empty($field)) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'AdminTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/** @var array $scriptProperties */
$path = $modx->getOption(\'admintools_core_path\', null, $modx->getOption(\'core_path\') . \'components/admintools/\') . \'services/\';
/** @var AdminTools $AdminTools */
$AdminTools = $modx->getService(\'admintools\', \'AdminTools\', $path);
$elementType = null;
if ($AdminTools instanceof AdminTools) {
    switch ($modx->event->name) {
        case \'OnManagerPageBeforeRender\':
            if ($modx->user->id) {
                $AdminTools->initialize();
            }
            break;
        case \'OnManagerPageAfterRender\':
            if ($AdminTools->isLocked()) {
                $controller->content = $modx->getChunk(\'tpl.lockScreen\', [
                        \'username\' => $modx->user->username,
                        \'photo\' => $modx->user->getPhoto(),
                        \'title\' => $modx->getOption(\'site_name\'),
                        \'lang\' => $modx->getOption(\'manager_language\'),
                        \'form_action\' => $AdminTools->getOption(\'connectorUrl\'),
                        \'auth\' => $modx->user->getUserToken(\'mgr\'),
                        \'assets_url\' => MODX_ASSETS_URL,
                        \'input_placeholder\' => $AdminTools->getInputPlaceholder(),
                    ]
                );
            }
            break;
        case \'OnDocFormSave\':
            if ($modx->getOption(\'admintools_clear_only_resource_cache\', null, false) && $modx->event->params[\'mode\'] === modSystemEvent::MODE_UPD) {
                if ($resource->get(\'syncsite\')) {
                    $AdminTools->clearResourceCache($resource);
                }
                if (!empty($_POST[\'createCache\'])) {
                    $AdminTools->createResourceCache($resource->uri);
                }
            }
            break;
        case \'OnManagerPageInit\':
            if (!$modx->user->isAuthenticated(\'mgr\') && $modx->getOption(\'admintools_email_authorization\', null, false)) {
                $id = (int) $modx->getOption(\'admintools_loginform_resource\');
                if (!empty($id) && $modx->getCount(\'modResource\', [\'id\' => $id, \'published\' => 1, \'deleted\' => 0])) {
                    $url = $modx->makeUrl($id, \'\', \'\', \'full\');
                    $modx->setOption(\'manager_login_url_alternate\', $url);
                }
            }
            break;
        case \'OnManagerAuthentication\':
            if ($modx->getOption(\'admintools_user_can_login\', null, false)) {
                $modx->setOption(\'admintools_user_can_login\', false);
                $modx->event->output(true);
            }
            break;
        case \'OnLoadWebDocument\':
            if ((!$modx->user->active || $modx->user->Profile->blocked) && $modx->user->isAuthenticated($modx->context->get(\'key\'))) {
                $modx->runProcessor(\'security/logout\');
            }
            if ($modx->getOption(\'admintools_alternative_permissions\', null, false) && !$AdminTools->hasPermissions()){
                $modx->sendUnauthorizedPage();
            }
            break;
        case \'OnTempFormPrerender\':
            if ($modx->getOption(\'admintools_template_resource_relationship\', null, true)) {
                $modx->controller->addLastJavascript($AdminTools->getOption(\'jsUrl\') . \'mgr/templates.js\');
            }
            break;
        case \'OnDocFormPrerender\':
            $_html = [];
            $output = \'\';
            if ($modx->getOption(\'admintools_template_resource_relationship\', null, true)) {
                $_html[\'tpl_res_relationship\'] = \'
            var tmpl = Ext.getCmp("modx-resource-template");
            if (tmpl.getValue()) tmpl.label.update(_("resource_template") + "&nbsp;&nbsp;<a href=\\"?a=element/template/update&id=" + tmpl.getValue() + "\\"><i class=\\"icon icon-external-link\\"></i></a>");\';
            }
            if ($modx->getOption(\'admintools_clear_only_resource_cache\', null, true) && $modx->event->params[\'mode\'] != modSystemEvent::MODE_NEW) {
                $_html[\'create_resource_cache\'] = \'
            var cb = Ext.create({
                xtype: "xcheckbox",
                boxLabel: _("admintools_create_resource_cache"),
                description: _("admintools_create_resource_cache_help"),
                hideLabel: true,
                name: "createCache",
                id: "createCache",
                checked: \'. (int)$modx->getOption(\'admintools_create_resource_cache\', null, false) .\'
            });
            if (Ext.getCmp("modx-page-settings-right-box-right")) {
                Ext.getCmp("modx-page-settings-right-box-right").insert(2,cb);
                Ext.getCmp("modx-page-settings-right-box-left").add(Ext.getCmp("modx-resource-uri-override"));
                Ext.getCmp("modx-panel-resource").on("success", function(o){
                    if (o.result.object.createCache != 0) {
                        cb.setValue(true);
                    }
                });
            }\';
            }
            if (!empty($_html)) {
            $output .= \'
    Ext.onReady(function() {
        setTimeout(function(){\' . implode("\\n", $_html) . \'
        }, 200);
    });\';
            }
            if ($modx->getOption(\'admintools_alternative_permissions\', null, true) && $modx->hasPermission(\'access_permissions\')) {
                $modx->controller->addLastJavascript($AdminTools->getOption(\'jsUrl\') . \'mgr/permissions.js\');
                $output .= \'
    Ext.ComponentMgr.onAvailable("modx-resource-tabs", function() {
		this.on("beforerender", function() {
			this.add({
				title: _("admintools_permissions"),
				border: false,
				items: [{
					layout: "anchor",
					border: false,
					items: [{
						html: _("admintools_permissions_desc"),
						border: false,
						bodyCssClass: "panel-desc"
					}, {
						xtype: "admintools-grid-permissions",
						anchor: "100%",
						cls: "main-wrapper",
						resource: \' . $id . \'
					}]
				}]
			});
		});
	});
\';
            }
            if (!empty($output)) {
                $modx->controller->addHtml(\'<script>\' . $output . \'</script>\');
            }
            break;
        case \'OnMODXInit\':
            if (($modx->context->get(\'key\') !== \'mgr\')
                && $modx->getOption(\'admintools_only_current_context_user\', null, false)
                && $modx->user->isAuthenticated(\'mgr\')
                && !$modx->user->isAuthenticated($modx->context->get(\'key\')))
            {
               $modx->user = $modx->newObject(\'modUser\');
                $modx->user->fromArray([\'id\' => 0, \'username\' => $modx->getOption(\'default_username\', \'\', \'(anonymous)\', true)], \'\', true);
            }
            break;
    }
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/admintools/elements/plugins/plugin.admintools.php',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Captcha',
      'description' => 'CAPTCHA Plugin',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Captcha plugin
 *
 * Copyright 2011-2019 Bob Ray
 *
 * @author Bob Ray
 * @editor Shaun McCormick <shaun@collabpad.com>
 * @created 09/23/2008
 * 1/17/11
 *
 * Captcha is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Captcha is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Captcha; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package captcha
 */

/**
 * MODX Captcha plugin
 *
 * Description: Captcha plugin for MODX login verification
 * Events: OnBeforeManagerLogin, OnManagerLoginFormRender
 *
 * @package captcha
 *
 * @property
 */
/* @var $modx modX */
switch ($modx->event->name) {
    case \'OnBeforeManagerLogin\': /* register only for backend */
        $rt = true;
        $modx->lexicon->load(\'captcha:default\');
        if ($modx->getOption(\'captcha.enabled\', null, false)) {
            if (!isset ($_SESSION[\'veriword\'])) {
                $rt = \'$_SESSION Variable not set\';
            } else {
                if ($_SESSION[\'veriword\'] != $_POST[\'captcha_code\']) {
                    /*$rt = "Debug: No Match: SESSION:".$_SESSION[\'veriword\']." captcha_code:".$_POST[\'captcha_code\']; */
                    if ($modx->getOption(\'captcha.use_mathstring\', null, true)) {
                        $rt = $modx->lexicon(\'login_mathstring_error\');
                    } else {
                        $rt = $modx->lexicon(\'login_captcha_error\');
                    }
                }
            }
        }

        $modx->event->_output = $rt;
        break;

    case \'OnManagerLoginFormRender\': /* register only for backend */
        $rt = \'\';

        if ($modx->getOption(\'captcha.enabled\', null, false)) {
            $modx->lexicon->load(\'captcha:default\');
            if ($modx->getOption(\'captcha.use_mathstring\', null, true)) {
                $alt = $modx->lexicon(\'login_mathstring_message\');
            } else {
                $alt = $modx->lexicon(\'login_captcha_message\');
            }

            $captcha_image = \'<a href="\' . $_SERVER[\'PHP_SELF\'] . \'" class="loginCaptcha"><img src="\' .
                $modx->getOption(\'site_url\') . \'assets/components/captcha/captcha.php?rand=\' . rand() .
                \'" alt="\' . $alt . \'" /></a>\';

            if ($modx->getOption(\'captcha_use_mathstring\', null, true)) {
                $captcha_prompt = \'<p>\' . $modx->lexicon("login_mathstring_message") . \'</p>\';
                $captcha_input = \'<br /><br /><label>\' . $modx->lexicon("captcha_mathstring_code") .
                    \': <input type="text" name="captcha_code" value="" /></label>\';
            } else {
                $captcha_prompt = \'<p>\' . $modx->lexicon("login_captcha_message") . \'</p>\';
                $captcha_input = \'<br /><br /><label>\' . $modx->lexicon("captcha_code") .
                    \': <input type="text" name="captcha_code" value="" /></label>\';
            }

            $rt = \'<hr />\' . $captcha_prompt . $captcha_image . $captcha_input;
        }

        $modx->event->_output = $rt;
        break;
}

return \'\';',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    6 => 
    array (
      'id' => '6',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'ClicheThumbnail',
      'description' => 'Resource Thumbnail Manager via Cliche 3rd party component',
      'editor_type' => '0',
      'category' => '8',
      'cache_type' => '0',
      'plugincode' => '/**
 * Handles plugin events for Cliche\'s Custom Thumbnail TV
 * 
 * @package cliche
 */
$cliche = $modx->getService(\'cliche\',\'Cliche\',$modx->getOption(\'cliche.core_path\',null,$modx->getOption(\'core_path\').\'components/cliche/\').\'model/cliche/\',$scriptProperties);
if (!($cliche instanceof Cliche)) return \'\';

$corePath = $cliche->config[\'core_path\'];
switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/properties/\');
        break;
    case \'OnDocFormPrerender\':    
        $modx->controller->addCss($cliche->config[\'css_url\'].\'index.css\');
        $modx->controller->addCss($cliche->config[\'css_url\'].\'clichethumbnail.css\');
        
         /* assign cliche lang to JS */
        $modx->controller->addLexiconTopic(\'cliche:mgr\');
        $modx->controller->addLexiconTopic(\'cliche:clichethumbnail\');
        
        $modx->controller->addHtml(\'<script type="text/javascript">
Ext.onReady(function() {
    MODx.ClicheConnectorUrl = "\'.$cliche->config[\'connector_url\'].\'";
    MODx.ClicheAssetsUrl = "\'.$cliche->config[\'assets_url\'].\'";
    MODx.ClicheAssetsPath = "\'.$cliche->config[\'assets_path\'].\'";
    Ext.ux.Lightbox.register("a.lightbox");
});
</script>\');
        /* Lightbox */
        $mgrUrl = $modx->getOption(\'manager_url\',null,MODX_MANAGER_URL);        
        $modx->controller->addJavascript($mgrUrl . \'assets/modext/util/lightbox.js\');
            
        /* App base definitions + libs */
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/libs/jquery.1.4.min.js\');
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/libs/jquery.Jcrop.min.js\');
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/libs/plupload.js\');
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/libs/plupload.html5.js\');
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/libs/plupload.html4.js\');
        
        /* Core base class */
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/core/album.js\');
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/core/upload.js\');
            
        /* TV panel classes */
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/thumbnail/tv/panel.js\');
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/thumbnail/tv/window.js\');
        
        /* Window cards */
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/thumbnail/tv/cards/main.js\');
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/thumbnail/tv/cards/album.js\');
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/thumbnail/tv/cards/upload.js\');
        $modx->controller->addJavascript($cliche->config[\'assets_url\'].\'mgr/thumbnail/tv/cards/cropper.js\');
        break;
    case \'OnTemplateVarSave\':
        $type = $templateVar->get(\'type\');
        if($type == \'clichethumbnail\'){
            $name = $templateVar->get(\'name\');
            $id = $templateVar->get(\'id\');
            $properties = $templateVar->getProperties();
            
            /* Get the existing album */            
            if($mode == \'upd\' && isset($properties[\'clichealbum\'])){                    
                $album = $modx->getObject(\'ClicheAlbums\', $properties[\'clichealbum\']);                        
            }     
            /* Prevents album duplication */
            if($mode == \'upd\' && !$album){                                    
                $album = $modx->getObject(\'ClicheAlbums\', array(\'description\'=> \'Cliche Thumbnail TV - #\' . $id));    
                if($album){
                    $properties[\'clichealbum\'] = $album->get(\'id\');
                    $templateVar->setProperties(array(\'clichealbum\' => $properties[\'clichealbum\']), true);
                    $templateVar->save();
                }
            }         
            
            /* Else create a new Cliche album */
            if(!$album){
                $album = $modx->newObject(\'ClicheAlbums\');
                $album->set(\'type\', \'clichethumbnail\');
                $album->set(\'description\', \'Cliche Thumbnail TV - #\' . $id);
            }
            
            /* We have an album */
            if($album){                    
                $album->set(\'name\', $name);
                $album->save();                
                if(!isset($properties[\'clichealbum\'])){
                    $aid = $album->get(\'id\');
                    $templateVar->setProperties(array(\'clichealbum\' => $aid), true);
                    $templateVar->save();
                }                
            }
            
            unset($album);
        }
        break;
    case \'OnTemplateVarBeforeRemove\':
        $type = $templateVar->get(\'type\');
        if($type == \'clichethumbnail\'){
            $name = $templateVar->get(\'name\');
            $properties = $templateVar->getProperties();
            if(isset($properties[\'clichealbum\'])){
                $album = $modx->getObject(\'ClicheAlbums\', $properties[\'clichealbum\']);    
                if($album){
                    $album->fromArray(array(
                        \'name\' => $name,
                        \'type\' => \'default\',
                        \'description\' => \'This was a ClicheThumbnail dedicated album whose TV has been removed\',
                    ));
                    $album->save();
                }
            }
        }
        break;
    default:break;
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    7 => 
    array (
      'id' => '7',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'ClicheAlbumSelect',
      'description' => 'TV select of album connected to Resource',
      'editor_type' => '0',
      'category' => '8',
      'cache_type' => '0',
      'plugincode' => '$cliche = $modx->getService(\'cliche\',\'Cliche\',$modx->getOption(\'cliche.core_path\',null,$modx->getOption(\'core_path\').\'components/cliche/\').\'model/cliche/\',$scriptProperties);
if (!($cliche instanceof Cliche)) return \'\';

$corePath = $modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/cliche/elements/\';
switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'tv/output/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'tv/inputoptions/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'tv/properties/\');
        break;
    case \'OnManagerPageBeforeRender\':
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    8 => 
    array (
      'id' => '8',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'CodeMirror',
      'description' => 'CodeMirror 2.2.1-pl plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package codemirror
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'CodeMirror\');
    return;
}

$eventArray = array(
    \'element\'=>array(
		\'OnSnipFormPrerender\',
		\'OnTempFormPrerender\',
		\'OnChunkFormPrerender\',
		\'OnPluginFormPrerender\',
		/*\'OnTVFormPrerender\'*/
		\'OnFileEditFormPrerender\',
		\'OnFileEditFormPrerender\',
		),
	\'other\'=>array(
		\'OnDocFormPrerender\',
		\'OnRichTextEditorInit\',
		\'OnRichTextBrowserInit\'
	)
);
if ((in_array($modx->event->name,$eventArray[\'element\']) && $modx->getOption(\'which_element_editor\',null,\'CodeMirror\') != \'CodeMirror\') || (in_array($modx->event->name,$eventArray[\'other\']) && $modx->getOption(\'which_editor\',null,\'CodeMirror\') != \'CodeMirror\')) return;

if (!$modx->getOption(\'use_editor\',null,true)) return;
if (!$modx->getOption(\'codemirror.enable\',null,true)) return;

/** @var CodeMirror $codeMirror */
$codeMirror = $modx->getService(\'codemirror\',\'CodeMirror\',$modx->getOption(\'codemirror.core_path\',null,$modx->getOption(\'core_path\').\'components/codemirror/\').\'model/codemirror/\');
if (!($codeMirror instanceof CodeMirror)) return \'\';

$options = array(
    \'modx_path\' => $codeMirror->config[\'assetsUrl\'],
    \'theme\' => $modx->getOption(\'theme\',$scriptProperties,\'default\'),

    \'indentUnit\' => (int)$modx->getOption(\'indentUnit\',$scriptProperties,$modx->getOption(\'indent_unit\',$scriptProperties,2)),
    \'smartIndent\' => (boolean)$modx->getOption(\'smartIndent\',$scriptProperties,false),
    \'tabSize\' => (int)$modx->getOption(\'tabSize\',$scriptProperties,4),
    \'indentWithTabs\' => (boolean)$modx->getOption(\'indentWithTabs\',$scriptProperties,true),
    \'electricChars\' => (boolean)$modx->getOption(\'electricChars\',$scriptProperties,true),
    \'autoClearEmptyLines\' => (boolean)$modx->getOption(\'electricChars\',$scriptProperties,false),

    \'lineWrapping\' => (boolean)$modx->getOption(\'lineWrapping\',$scriptProperties,true),
    \'lineNumbers\' => (boolean)$modx->getOption(\'lineNumbers\',$scriptProperties,$modx->getOption(\'line_numbers\',$scriptProperties,true)),
    \'firstLineNumber\' => (int)$modx->getOption(\'firstLineNumber\',$scriptProperties,1),
    \'highlightLine\' => (boolean)$modx->getOption(\'highlightLine\',$scriptProperties,true),
    \'matchBrackets\' => (boolean)$modx->getOption(\'matchBrackets\',$scriptProperties,true),
    \'showSearchForm\' => (boolean)$modx->getOption(\'showSearchForm\',$scriptProperties,true),
    \'undoDepth\' => $modx->getOption(\'undoDepth\',$scriptProperties,40),
);

$load = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $options[\'modx_loader\'] = \'onSnippet\';
        $options[\'mode\'] = \'php\';
        $load = true;
        break;
    case \'OnTempFormPrerender\':
        $options[\'modx_loader\'] = \'onTemplate\';
        $options[\'mode\'] = \'htmlmixed\';
        $load = true;
        break;
    case \'OnChunkFormPrerender\':
        $options[\'modx_loader\'] = \'onChunk\';
        $options[\'mode\'] = \'htmlmixed\';
        $load = true;
        break;
    case \'OnPluginFormPrerender\':
        $options[\'modx_loader\'] = \'onPlugin\';
        $options[\'mode\'] = \'php\';
        $load = true;
        break;
    /* disabling TVs for now, since it causes problems with newlines
    case \'OnTVFormPrerender\':
        $options[\'modx_loader\'] = \'onTV\';
        $options[\'height\'] = \'250px\';
        $load = true;
        break;*/
    case \'OnFileEditFormPrerender\':
        $options[\'modx_loader\'] = \'onFile\';
        $options[\'mode\'] = \'php\';
        $load = true;
        break;
    case \'OnDocFormPrerender\':
    	$options[\'modx_loader\'] = \'onResource\';
        $options[\'mode\'] = \'htmlmixed\';
        $load = true;
    	break;
    /* debated whether or not to use */
    case \'OnRichTextEditorInit\':
        break;
    case \'OnRichTextBrowserInit\':
        break;
}

if ($load) {
    $options[\'searchTpl\'] = $codeMirror->getChunk(\'codemirror.search\');

    $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">MODx.codem = \'.$modx->toJSON($options).\';</script>\');
    $modx->regClientCSS($codeMirror->config[\'assetsUrl\'].\'css/codemirror-compressed.css\');
    $modx->regClientCSS($codeMirror->config[\'assetsUrl\'].\'css/cm.css\');
    if ($options[\'theme\'] != \'default\') {
        $modx->regClientCSS($codeMirror->config[\'assetsUrl\'].\'cm/theme/\'.$options[\'theme\'].\'.css\');
    }
    $modx->regClientStartupScript($codeMirror->config[\'assetsUrl\'].\'js/codemirror-compressed.js\');
    $modx->regClientStartupScript($codeMirror->config[\'assetsUrl\'].\'js/cm.js\');
}

return;',
      'locked' => '0',
      'properties' => 'a:14:{s:5:"theme";a:7:{s:4:"name";s:5:"theme";s:4:"desc";s:18:"prop_cm.theme_desc";s:4:"type";s:4:"list";s:7:"options";a:14:{i:0;a:2:{s:4:"text";s:7:"default";s:5:"value";s:7:"default";}i:1;a:2:{s:4:"text";s:8:"ambiance";s:5:"value";s:8:"ambiance";}i:2;a:2:{s:4:"text";s:10:"blackboard";s:5:"value";s:10:"blackboard";}i:3;a:2:{s:4:"text";s:6:"cobalt";s:5:"value";s:6:"cobalt";}i:4;a:2:{s:4:"text";s:7:"eclipse";s:5:"value";s:7:"eclipse";}i:5;a:2:{s:4:"text";s:7:"elegant";s:5:"value";s:7:"elegant";}i:6;a:2:{s:4:"text";s:11:"erlang-dark";s:5:"value";s:11:"erlang-dark";}i:7;a:2:{s:4:"text";s:11:"lesser-dark";s:5:"value";s:11:"lesser-dark";}i:8;a:2:{s:4:"text";s:7:"monokai";s:5:"value";s:7:"monokai";}i:9;a:2:{s:4:"text";s:4:"neat";s:5:"value";s:4:"near";}i:10;a:2:{s:4:"text";s:5:"night";s:5:"value";s:5:"night";}i:11;a:2:{s:4:"text";s:8:"rubyblue";s:5:"value";s:8:"rubyblue";}i:12;a:2:{s:4:"text";s:11:"vibrant-ink";s:5:"value";s:11:"vibrant-ink";}i:13;a:2:{s:4:"text";s:7:"xq-dark";s:5:"value";s:7:"xq-dark";}}s:5:"value";s:7:"default";s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:10:"indentUnit";a:7:{s:4:"name";s:10:"indentUnit";s:4:"desc";s:23:"prop_cm.indentUnit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:2;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:11:"smartIndent";a:7:{s:4:"name";s:11:"smartIndent";s:4:"desc";s:24:"prop_cm.smartIndent_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:7:"tabSize";a:7:{s:4:"name";s:7:"tabSize";s:4:"desc";s:20:"prop_cm.tabSize_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:4;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:14:"indentWithTabs";a:7:{s:4:"name";s:14:"indentWithTabs";s:4:"desc";s:27:"prop_cm.indentWithTabs_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:13:"electricChars";a:7:{s:4:"name";s:13:"electricChars";s:4:"desc";s:26:"prop_cm.electricChars_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:19:"autoClearEmptyLines";a:7:{s:4:"name";s:19:"autoClearEmptyLines";s:4:"desc";s:32:"prop_cm.autoClearEmptyLines_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:12:"lineWrapping";a:7:{s:4:"name";s:12:"lineWrapping";s:4:"desc";s:25:"prop_cm.lineWrapping_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:11:"lineNumbers";a:7:{s:4:"name";s:11:"lineNumbers";s:4:"desc";s:24:"prop_cm.lineNumbers_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:15:"firstLineNumber";a:7:{s:4:"name";s:15:"firstLineNumber";s:4:"desc";s:28:"prop_cm.firstLineNumber_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:1;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:13:"highlightLine";a:7:{s:4:"name";s:13:"highlightLine";s:4:"desc";s:26:"prop_cm.highlightLine_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:13:"matchBrackets";a:7:{s:4:"name";s:13:"matchBrackets";s:4:"desc";s:26:"prop_cm.matchBrackets_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:14:"showSearchForm";a:7:{s:4:"name";s:14:"showSearchForm";s:4:"desc";s:27:"prop_cm.showSearchForm_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}s:9:"undoDepth";a:7:{s:4:"name";s:9:"undoDepth";s:4:"desc";s:22:"prop_cm.undoDepth_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:40;s:7:"lexicon";s:21:"codemirror:properties";s:4:"area";s:0:"";}}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    11 => 
    array (
      'id' => '11',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'DirectResize',
      'description' => 'Плагин ресайза изображений на сайте',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Handles removal of threads if a Resource is deleted.
 * 
 * @package directresize
 */
$modx->lexicon->load(\'directresize:default\');
$path = $modx->getOption(\'directresize.path\',null,true);
$prefix = $modx->getOption(\'directresize.prefix\',null,true);
$r = $modx->getOption(\'directresize.size_rule\',null,true);
$q_jpg = $modx->getOption(\'directresize.q_jpg\',null,true);
$q_png = $modx->getOption(\'directresize.q_png\',null,true);
$path_base = $modx->getOption(\'directresize.path_base\',null,true);
$lightbox = $modx->getOption(\'directresize.lightbox\',null,true);
$lightbox_w = $modx->getOption(\'directresize.lightbox_w\',null,true);
$lightbox_h = $modx->getOption(\'directresize.lightbox_h\',null,true);


if (substr($prefix,-1) != "_") $prefix .= "_";

include "core/components/directresize/elements/plugins/plugin.directresize.php";

$e = &$modx->event;
switch ($e->name) {
    case "OnWebPagePrerender":
        $o = $modx->documentOutput;
        
        $reg = "/<img[^>]*>/";  
        preg_match_all($reg, $o, $imgs, PREG_PATTERN_ORDER);
        for($n=0;$n<count($imgs[0]);$n++) {
            //-----------------------
            $path_img = eregi_replace("^.+src=(\'|\\")","",$imgs[0][$n]);                                            
            $path_img = eregi_replace("(\'|\\").*$","",$path_img);                                                                           
            //-----------------------
            if (substr($path_img,0,strlen($path_base)) == $path_base) {                                                                     
                $img = strtolower($imgs[0][$n]);
                $verif_balise = sizeof(explode("width",$img)) + sizeof(explode("height",$img)) - 2;
                if ($verif_balise > 0) {
                    #################################
                    preg_match("/height *(:|=) *[\\"\']* *\\d+ *[\\"\']*/",$img,$array);                                      
                    sizeof(explode(":",$array[0])) > 1 ? $style = true : $style = false;
                    $heigth = ereg_replace("[^0123456789]","",$array[0]);
                    //-------------------
                    preg_match("/width *(:|=) *[\\"\']* *\\d+ *[\\"\']*/",$img,$array);
                    $width = ereg_replace("[^0123456789]","",$array[0]);
                    //-------------------
                    if ($style) {
                        $imgf = eregi_replace("(height|HEIGHT|Height) *: *[0123456789]* *(px)* *","",$imgs[0][$n]);
                        $imgf = eregi_replace("(width|WIDTH|Width) *: *[0123456789]* *(px)* *","",$imgf);
                    } else {
                        $imgf = eregi_replace("(height|HEIGHT|Height) *= *[\\"\']* *[0123456789]* *(px)* *[\\"\']*","",$imgs[0][$n]);
                        $imgf = eregi_replace("(width|WIDTH|Width) *= *[\\"\']* *[0123456789]* *(px)* *[\\"\']*","",$imgf);
                    }
                    //-------------------
                    preg_match("/^.+(src|Src|SRC)=(\'|\\")/",$imgf,$path_g);
                    $imgf = eregi_replace("^.+src=(\'|\\")","",$imgf);
                    preg_match("/(\'|\\").*$/",$imgf,$path_d);
                    //-------------------
                    $pathRedim = directResize($path_img,$path,$prefix,$width,$heigth,$r,$q_jpg,$q_png);
                    //-------------------
                    $nouvo_lien = $path_g[0].$pathRedim.$path_d[0];
                    
                    ###############################
                    preg_match("/highslide/",strtolower($imgs[0][$n]),$verif_light);
                    if (($lightbox == 1 && $verif_light[0] == "highslide") || ($lightbox == 2 && substr($path_img,0,strlen($path_base)) == $path_base)) {
                        
                        $size       = getimagesize($path_img);
                        $img_src_w  = $size[0];
                        $img_src_h  = $size[1];
                        $alt        = "";
                        $title  = "";
                        preg_match("/(alt|Alt|ALT) *= *[\\"|\'][^\\"\']*[\\"\']/",$imgs[0][$n],$array);
                        if ($array[0] <> "") {
                            $alt = eregi_replace("alt *= *[\\"|\']","",$array[0]);
                            $alt = eregi_replace("[\\"\']*","",$alt);
                            $alt = trim($alt);
                        }
                        preg_match("/(title|Title|TITLE) *= *[\\"|\'][^\\"\']*[\\"\']/",$imgs[0][$n],$array);
                        if ($array[0] <> "") {
                            $title = eregi_replace("title *= *[\\"|\']","",$array[0]);
                            $title = eregi_replace("[\\"\']*","",$title);
                            $title = trim($title);
                        }
                        if ($alt <> "" || $title <> "") {
                            $legende = " title=\\"$alt";
                            if ($alt <> "" && $title <> "") $legende .= "<br />";
                            if ($title <> "") $legende .= "<span style=\'font-weight:normal; font-size: 9px\'>$title</span>";
                            $legende .= "\\" ";
                        } else {
                            $legende = "";
                        }
                        
                        if ($img_src_w > $width || $img_src_h > $height) {
                            if ($img_src_w > $lightbox_w || $img_src_h > $lightbox_h) {                                     
                                $pathRedim = directResize($path_img,$path,$prefix,$lightbox_w,$lightbox_h,3,$q_jpg,$q_png);
                                $nouvo_lien = "<a class=\\"highslide\\" onclick=\\"return hs.expand(this)\\" ".$legende." href=\'".$pathRedim."\' >".$nouvo_lien."</a>";
                            } else {
                                $nouvo_lien = "<a class=\\"highslide\\" onclick=\\"return hs.expand(this)\\" ".$legende." href=\'".$path_img."\' >".$nouvo_lien."</a>";
                            }
                        }
                    }
                    
                    ####################################
                    $o = str_replace($imgs[0][$n],$nouvo_lien,$o);
                }
            }
        }
        $head = \'<script type="text/javascript" src="assets/components/directresize/js/highslide.packed.js"></script><script type="text/javascript">
hs.graphicsDir = \\\'assets/components/directresize/js/graphics/\\\';
                  hs.lang.creditsText = \\\'\\\';</script>\';
        
        
        $o = preg_replace(\'~(</head>)~i\', $head . \'\\1\', $o);
        $modx->documentOutput = $o;
        break;
    default :
        return;
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    12 => 
    array (
      'id' => '12',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'CookieConsent',
      'description' => 'Append cookie consent disclaimer to body tag if consent has not been set.',
      'editor_type' => '0',
      'category' => '21',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name)
{
  case \'OnWebPagePrerender\':

    $c = $modx->getOption(\'cookieName\', $scriptProperties, \'CookieConsent\');

    if (!isset($_COOKIE[ $c ]))
    {
      //cookie disclaimer has NOT been acknowledged as read

      if ($modx->getOption(\'site_dev\') == 1)
      {
          $p = $modx->getOption(\'cookieconsent.core_path\');
        } else {
          $p = $modx->getOption(\'core_path\').\'components/cookieconsent/\';
      }
      
      $cc = $modx->getService(  \'cookieconsent\',
                                \'CookieConsent\',
                                $p.\'model/cookieconsent/\'
                              );
                                
      if (!($cc instanceof CookieConsent)) return \'\';

      $cc->appendDisclaimer($scriptProperties);
      
      unset($cc, $c);
    }
    
    break;
}',
      'locked' => '0',
      'properties' => 'a:9:{s:10:"cookieDays";a:7:{s:4:"name";s:10:"cookieDays";s:4:"desc";s:34:"prop_cookieconsent.cookieDays_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"365";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:10:"cookieName";a:7:{s:4:"name";s:10:"cookieName";s:4:"desc";s:34:"prop_cookieconsent.cookieName_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"CookieConsent";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:14:"idCookiePolicy";a:7:{s:4:"name";s:14:"idCookiePolicy";s:4:"desc";s:38:"prop_cookieconsent.idCookiePolicy_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:27:"prop_cookieconsent.tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"cookieConsent";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:5:"class";a:7:{s:4:"name";s:5:"class";s:4:"desc";s:29:"prop_cookieconsent.class_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"cookieconsent";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:10:"includeCSS";a:7:{s:4:"name";s:10:"includeCSS";s:4:"desc";s:34:"prop_cookieconsent.includeCSS_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"1";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:9:"includeJS";a:7:{s:4:"name";s:9:"includeJS";s:4:"desc";s:33:"prop_cookieconsent.includeJS_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"1";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:7:"pathCSS";a:7:{s:4:"name";s:7:"pathCSS";s:4:"desc";s:31:"prop_cookieconsent.pathCSS_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:64:"{assets_path}/components/cookieconsent/css/cookieconsent-min.css";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:6:"pathJS";a:7:{s:4:"name";s:6:"pathJS";s:4:"desc";s:30:"prop_cookieconsent.pathJS_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:61:"{assets_path}/components/cookieconsent/js/mabCookieSet-min.js";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    13 => 
    array (
      'id' => '13',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'modDevTools',
      'description' => 'Rapid site development helper for MODx Revolution',
      'editor_type' => '0',
      'category' => '23',
      'cache_type' => '0',
      'plugincode' => '/**
 * modDevTools Plugin
 *
 * @package moddevtools
 * @subpackage plugin
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

$className = \'TreehillStudio\\ModDevTools\\Plugins\\Events\\\\\' . $modx->event->name;

$corePath = $modx->getOption(\'moddevtools.core_path\', null, $modx->getOption(\'core_path\') . \'components/moddevtools/\');
/** @var modDevTools $moddevtools */
$moddevtools = $modx->getService(\'moddevtools\', \'modDevTools\', $corePath . \'model/moddevtools/\', [
    \'core_path\' => $corePath
]);

if ($moddevtools) {
    if (class_exists($className)) {
        $handler = new $className($modx, $scriptProperties);
        if (get_class($handler) == $className) {
            $handler->run();
        } else {
            $modx->log(xPDO::LOG_LEVEL_ERROR, $className. \' could not be initialized!\', \'\', \'modDevTools Plugin\');
        }
    } else {
        $modx->log(xPDO::LOG_LEVEL_ERROR, $className. \' was not found!\', \'\', \'modDevTools Plugin\');
    }
}

return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'MODX\\Revolution\\modAccessContext' => 
    array (
      'mgr' => 
      array (
        0 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_static_resource' => true,
            'delete_symlink' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'delete_weblink' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_static_resource' => true,
            'edit_symlink' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'edit_weblink' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'events' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_unpack' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'language' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'mgr_log_view' => true,
            'mgr_log_erase' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_trash' => true,
            'menu_user' => true,
            'menus' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'set_sudo' => true,
            'settings' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'sources' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
      ),
    ),
  ),
);