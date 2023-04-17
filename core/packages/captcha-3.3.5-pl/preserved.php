<?php return array (
  '7ec1390c4a3947ef129ba0da0072b521' => 
  array (
    'criteria' => 
    array (
      'name' => 'captcha',
    ),
    'object' => 
    array (
      'name' => 'captcha',
      'path' => '{core_path}components/captcha/',
      'assets_path' => '',
    ),
  ),
  '9406f45db7abc20f5d02b4995b7545d0' => 
  array (
    'criteria' => 
    array (
      'name' => 'Captcha',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Captcha',
      'description' => '<b>3.3.4captcha-pl</b> CAPTCHA Plugin',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
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
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
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
    ),
  ),
  '434ace3e495c928f8c29abbe34507ba3' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnBeforeManagerLogin',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnBeforeManagerLogin',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '5176ce7253c430e35dbe6efa3e69fe98' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnManagerLoginFormRender',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnManagerLoginFormRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '02be5ee165afa12b9df22ae573de59e3' => 
  array (
    'criteria' => 
    array (
      'key' => 'captcha.words',
    ),
    'object' => 
    array (
      'key' => 'captcha.words',
      'value' => 'Ack,Arps,Alag,Atex,Bek,Bux,Chux,Caxt,Depp,Dex,Ext,Enya,Fet,Fets,Tek,Text,Gurk,Gex,Het,Heft,Unet,Ibex,Jax,Jerp,Jenk,Lak,Lest,Lev,Mars,Mamp,Nex,Nelp,Paxt,Pex,Reks,Rux,Snix,Sept,Turp,Thix,Elps,Vux,Veks,Wect,Wex,Yap,Yef,Yeff,Zub,Zeks',
      'xtype' => 'textarea',
      'namespace' => 'captcha',
      'area' => 'captcha',
      'editedon' => NULL,
    ),
  ),
  '7e53784b2f35b91463df135251a77ad1' => 
  array (
    'criteria' => 
    array (
      'key' => 'captcha.enabled',
    ),
    'object' => 
    array (
      'key' => 'captcha.enabled',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'captcha',
      'area' => 'captcha',
      'editedon' => NULL,
    ),
  ),
  '7ccf19f46da69d6977f57c98eb863e0c' => 
  array (
    'criteria' => 
    array (
      'key' => 'captcha.use_mathstring',
    ),
    'object' => 
    array (
      'key' => 'captcha.use_mathstring',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'captcha',
      'area' => 'captcha',
      'editedon' => NULL,
    ),
  ),
  '40b666fdb1051ddcbdb251fd6ec8afeb' => 
  array (
    'criteria' => 
    array (
      'key' => 'captcha.height',
    ),
    'object' => 
    array (
      'key' => 'captcha.height',
      'value' => '80',
      'xtype' => 'textfield',
      'namespace' => 'captcha',
      'area' => 'captcha',
      'editedon' => NULL,
    ),
  ),
  'd60bcaf8a4c20997159731bc6dd307bf' => 
  array (
    'criteria' => 
    array (
      'key' => 'captcha.width',
    ),
    'object' => 
    array (
      'key' => 'captcha.width',
      'value' => '200',
      'xtype' => 'textfield',
      'namespace' => 'captcha',
      'area' => 'captcha',
      'editedon' => NULL,
    ),
  ),
);