<?php return array (
  'd9e4c7537bd6b1878b94fcf3772bcdba' => 
  array (
    'criteria' => 
    array (
      'name' => 'classextender',
    ),
    'object' => 
    array (
      'name' => 'classextender',
      'path' => '{core_path}components/classextender/',
      'assets_path' => '{assets_path}components/classextender/',
    ),
  ),
  'd342675a05232a2c49b0ef1ab79a934e' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'Extend modUser',
    ),
    'object' => 
    array (
      'id' => 3,
      'type' => 'document',
      'pagetitle' => 'Extend modUser',
      'longtitle' => '',
      'description' => '',
      'alias' => 'extend-moduser',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 5,
      'isfolder' => 0,
      'introtext' => '',
      'content' => '[[!ClassExtender?
    &package=`extendeduser`
    &schemaTpl=`MyExtUserSchema`
    &class=`extUser`
    &parentObject=`modUser`
    &tablePrefix=`ext_`
    &tableName=`user_data`
    &dirPermission=`0755`
]]
',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 0,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1622468728,
      'editedby' => 1,
      'editedon' => 0,
      'deleted' => 1,
      'deletedon' => 1634341759,
      'deletedby' => 1,
      'publishedon' => 0,
      'publishedby' => 0,
      'menutitle' => '',
      'donthit' => 0,
      'privateweb' => 0,
      'privatemgr' => 0,
      'content_dispo' => 0,
      'hidemenu' => 0,
      'class_key' => 'MODX\\Revolution\\modDocument',
      'context_key' => 'web',
      'content_type' => 1,
      'uri' => 'extend-moduser.html',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  'ce1c210fad4a06c5b7a0c3d05f3915f9' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'Extend modResource',
    ),
    'object' => 
    array (
      'id' => 4,
      'type' => 'document',
      'pagetitle' => 'Extend modResource',
      'longtitle' => '',
      'description' => '',
      'alias' => 'extend-modresource',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 5,
      'isfolder' => 0,
      'introtext' => '',
      'content' => '[[!ClassExtender?
    &package=`extendedresource`
    &schemaTpl=`MyExtResourceSchema`
    &class=`extResource`
    &parentObject=`modResource`
    &tablePrefix=`ext_`
    &tableName=`resource_data`
    &dirPermission=`0755`
]]

',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 1,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1622468728,
      'editedby' => 1,
      'editedon' => 0,
      'deleted' => 1,
      'deletedon' => 1634341759,
      'deletedby' => 1,
      'publishedon' => 0,
      'publishedby' => 0,
      'menutitle' => '',
      'donthit' => 0,
      'privateweb' => 0,
      'privatemgr' => 0,
      'content_dispo' => 0,
      'hidemenu' => 0,
      'class_key' => 'MODX\\Revolution\\modDocument',
      'context_key' => 'web',
      'content_type' => 1,
      'uri' => 'extend-modresource.html',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  'dd2f76af48dc320038d7948db4fff4ad' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'ClassExtender',
    ),
    'object' => 
    array (
      'id' => 5,
      'type' => 'document',
      'pagetitle' => 'ClassExtender',
      'longtitle' => '',
      'description' => '',
      'alias' => 'class-extender',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 0,
      'isfolder' => 1,
      'introtext' => NULL,
      'content' => '
<p>Container for ClassExtender resources</p>
',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 67,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1622468728,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 1,
      'deletedon' => 1634341759,
      'deletedby' => 1,
      'publishedon' => 0,
      'publishedby' => 0,
      'menutitle' => '',
      'donthit' => 0,
      'privateweb' => 0,
      'privatemgr' => 0,
      'content_dispo' => 0,
      'hidemenu' => 0,
      'class_key' => 'MODX\\Revolution\\modDocument',
      'context_key' => 'web',
      'content_type' => 1,
      'uri' => 'class-extender/',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  'a51d2bd7c5e2162d8c5c4b7e5c47f074' => 
  array (
    'criteria' => 
    array (
      'name' => 'GetExtUsers',
    ),
    'object' => 
    array (
      'id' => 13,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'GetExtUsers',
      'description' => 'Show user information',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '/**
 * GetExtUsers snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 01-05-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Show user information
 *
 * Variables
 * ---------
 *
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

/* The extendeduser package should be pre-loaded
   due to being registered in the extension_packages
   System Setting */

$modx->lexicon->load(\'classextender:default\');


/* @var $scriptProperties array */
$scriptProperties = isset($scriptProperties)
    ? $scriptProperties
    : array();
$sp = $scriptProperties;

$userClass = $modx->getOption(\'userDataClass\', $sp, \'userData\');

$where = $modx->getOption(\'where\', $sp, array());
$where = !empty($where)
    ? $modx->fromJSON($where)
    : array();

$outerTpl = $modx->getOption(\'extUserOuterTpl\', $sp, \'extUserOuterTpl\');
$innerTpl = $modx->getOption(\'extUserInnerTpl\', $sp, \'extUserInnerTpl\');
$rowTpl = $modx->getOption(\'extUserRowTpl\', $sp, \'extUserRowTpl\');
$sortBy = $modx->getOption(\'sortby\', $sp, \'username\');
$sortDir = $modx->getOption(\'sortdir\', $sp, \'ASC\');
$limit = $modx->getOption(\'limit\', $sp, \'null\', true);
$offset = $modx->getOption(\'offset\', $sp, \'null\', true);

$offset = ($offset === null) ? 0 : (int) $offset;

$c = $modx->newQuery($userClass);
$c->sortby($sortBy, $sortDir);
$c->where($where);
if ($limit !== null) {
    $c->limit($limit, $offset);
}

$users = $modx->getCollectionGraph($userClass, \'{"Profile":{},"User":{}}\', $c);

$count = count($users);

if (!$count) {
    return $modx->lexicon(\'ce.no_users_found\');

}

/* @var $user modUser */
$i = 0;
$outer = $modx->getChunk($outerTpl);

$output = \'\';
$innerOutput = \'\';
foreach ($users as $user) {
    $fields = $user->toArray();
    unset($fields[\'password\'], $fields[\'cachepwd\'], $fields[\'salt\'], $fields[\'hash_class\']);
    if ($user->Profile) {
        $fields = array_merge($user->Profile->toArray(), $fields);
    }
    if ($user->User) {
        $fields = array_merge($user->User->toArray(), $fields);
    }
    $inner = $modx->getChunk($innerTpl, $fields);
    $row = $modx->getChunk($rowTpl, $fields);
    $innerOutput .= str_replace(\'[[+extUserRow]]\', $row, $inner);
    $i++;
}

$output = str_replace(\'[[+extUserInner]]\', $innerOutput, $outer);

return $output;',
      'locked' => 0,
      'properties' => 'a:7:{s:15:"extUserInnerTpl";a:7:{s:4:"name";s:15:"extUserInnerTpl";s:4:"desc";s:12:"ce.inner_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:15:"extUserInnerTpl";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:15:"extUserOuterTpl";a:7:{s:4:"name";s:15:"extUserOuterTpl";s:4:"desc";s:12:"ce.outer_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:15:"extUserOuterTpl";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:13:"extUserRowTpl";a:7:{s:4:"name";s:13:"extUserRowTpl";s:4:"desc";s:10:"ce.row_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:13:"extUserRowTpl";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:28:"ce.get_ext_users_sortby_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"username";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:29:"ce.get_ext_users_sortdir_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"ASC";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:13:"userDataClass";a:7:{s:4:"name";s:13:"userDataClass";s:4:"desc";s:29:"ce.class_for_user_data_object";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"userData";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:22:"ce.get_ext_users_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * GetExtUsers snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 01-05-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Show user information
 *
 * Variables
 * ---------
 *
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

/* The extendeduser package should be pre-loaded
   due to being registered in the extension_packages
   System Setting */

$modx->lexicon->load(\'classextender:default\');


/* @var $scriptProperties array */
$scriptProperties = isset($scriptProperties)
    ? $scriptProperties
    : array();
$sp = $scriptProperties;

$userClass = $modx->getOption(\'userDataClass\', $sp, \'userData\');

$where = $modx->getOption(\'where\', $sp, array());
$where = !empty($where)
    ? $modx->fromJSON($where)
    : array();

$outerTpl = $modx->getOption(\'extUserOuterTpl\', $sp, \'extUserOuterTpl\');
$innerTpl = $modx->getOption(\'extUserInnerTpl\', $sp, \'extUserInnerTpl\');
$rowTpl = $modx->getOption(\'extUserRowTpl\', $sp, \'extUserRowTpl\');
$sortBy = $modx->getOption(\'sortby\', $sp, \'username\');
$sortDir = $modx->getOption(\'sortdir\', $sp, \'ASC\');
$limit = $modx->getOption(\'limit\', $sp, \'null\', true);
$offset = $modx->getOption(\'offset\', $sp, \'null\', true);

$offset = ($offset === null) ? 0 : (int) $offset;

$c = $modx->newQuery($userClass);
$c->sortby($sortBy, $sortDir);
$c->where($where);
if ($limit !== null) {
    $c->limit($limit, $offset);
}

$users = $modx->getCollectionGraph($userClass, \'{"Profile":{},"User":{}}\', $c);

$count = count($users);

if (!$count) {
    return $modx->lexicon(\'ce.no_users_found\');

}

/* @var $user modUser */
$i = 0;
$outer = $modx->getChunk($outerTpl);

$output = \'\';
$innerOutput = \'\';
foreach ($users as $user) {
    $fields = $user->toArray();
    unset($fields[\'password\'], $fields[\'cachepwd\'], $fields[\'salt\'], $fields[\'hash_class\']);
    if ($user->Profile) {
        $fields = array_merge($user->Profile->toArray(), $fields);
    }
    if ($user->User) {
        $fields = array_merge($user->User->toArray(), $fields);
    }
    $inner = $modx->getChunk($innerTpl, $fields);
    $row = $modx->getChunk($rowTpl, $fields);
    $innerOutput .= str_replace(\'[[+extUserRow]]\', $row, $inner);
    $i++;
}

$output = str_replace(\'[[+extUserInner]]\', $innerOutput, $outer);

return $output;',
    ),
  ),
  '64a58c9747acfb92c82b7bf31db7ec34' => 
  array (
    'criteria' => 
    array (
      'name' => 'GetExtResources',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'GetExtResources',
      'description' => 'Show resource information',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '/**
 * GetExtResources snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 04-13-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Show resource information
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

/* The extendedresource package should be pre-loaded
   due to being registered in the extension_packages
   System Setting */


$modx->lexicon->load(\'classextender:default\');

/* @var $scriptProperties array */
$scriptProperties = isset($scriptProperties)
    ? $scriptProperties
    : array();
$sp = $scriptProperties;

$resourceClass = $modx->getOption(\'resourceDataClass\', $sp, \'resourceData\');

$where = $modx->getOption(\'where\', $sp, array());
$where = !empty($where)
    ? $modx->fromJSON($where)
    : array();

$sortBy = $modx->getOption(\'sortby\', $sp, \'pagetitle\');
$sortDir = $modx->getOption(\'sortdir\', $sp, \'ASC\');

$outerTpl = $modx->getOption(\'extResourceOuterTpl\', $sp, \'extResourceOuterTpl\');
$innerTpl = $modx->getOption(\'extResourceInnerTpl\', $sp, \'extResourceInnerTpl\');
$rowTpl = $modx->getOption(\'extResourceRowTpl\', $sp, \'extResourceRowTpl\');


$c = $modx->newQuery($resourceClass);
$c->sortby($sortBy, $sortDir);

if (! empty($where)) {
    $c->where($where);
}


$resources = $modx->getCollectionGraph($resourceClass, \'{"Resource":{}}\', $c);

$count = count($resources);

if (!$count) {
    return $modx->lexicon(\'ce.no_resources_found\');

}

/* @var $resource modResource */
$i = 0;
$outer = $modx->getChunk($outerTpl);

$output = \'\';
$innerOutput = \'\';
foreach ($resources as $resource) {
    $fields = $resource->toArray();

    if ($resource->Resource) {
        $fields = array_merge($resource->Resource->toArray(), $fields);
    }
    $inner = $modx->getChunk($innerTpl, $fields);
    $row = $modx->getChunk($rowTpl, $fields);
    $innerOutput .= str_replace(\'[[+extResourceRow]]\', $row, $inner);
    $i++;
}

$output = str_replace(\'[[+extResourceInner]]\', $innerOutput, $outer);

return $output;',
      'locked' => 0,
      'properties' => 'a:7:{s:19:"extResourceInnerTpl";a:7:{s:4:"name";s:19:"extResourceInnerTpl";s:4:"desc";s:35:"ce.get_ext_resources_inner_tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:19:"ExtResourceInnerTpl";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:19:"extResourceOuterTpl";a:7:{s:4:"name";s:19:"extResourceOuterTpl";s:4:"desc";s:35:"ce.get_ext_resources_outer_tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:19:"ExtResourceOuterTpl";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:17:"extResourceRowTpl";a:7:{s:4:"name";s:17:"extResourceRowTpl";s:4:"desc";s:33:"ce.get_ext_resources_row_tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:17:"ExtResourceRowTpl";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:17:"resourceDataClass";a:7:{s:4:"name";s:17:"resourceDataClass";s:4:"desc";s:22:"cd.resource_class_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:12:"resourceData";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:32:"ce.get_ext_resources_sortby_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"pagetitle";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:33:"ce.get_ext_resources_sortdir_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"ASC";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:31:"ce.get_ext_resources_where_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * GetExtResources snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 04-13-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Show resource information
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

/* The extendedresource package should be pre-loaded
   due to being registered in the extension_packages
   System Setting */


$modx->lexicon->load(\'classextender:default\');

/* @var $scriptProperties array */
$scriptProperties = isset($scriptProperties)
    ? $scriptProperties
    : array();
$sp = $scriptProperties;

$resourceClass = $modx->getOption(\'resourceDataClass\', $sp, \'resourceData\');

$where = $modx->getOption(\'where\', $sp, array());
$where = !empty($where)
    ? $modx->fromJSON($where)
    : array();

$sortBy = $modx->getOption(\'sortby\', $sp, \'pagetitle\');
$sortDir = $modx->getOption(\'sortdir\', $sp, \'ASC\');

$outerTpl = $modx->getOption(\'extResourceOuterTpl\', $sp, \'extResourceOuterTpl\');
$innerTpl = $modx->getOption(\'extResourceInnerTpl\', $sp, \'extResourceInnerTpl\');
$rowTpl = $modx->getOption(\'extResourceRowTpl\', $sp, \'extResourceRowTpl\');


$c = $modx->newQuery($resourceClass);
$c->sortby($sortBy, $sortDir);

if (! empty($where)) {
    $c->where($where);
}


$resources = $modx->getCollectionGraph($resourceClass, \'{"Resource":{}}\', $c);

$count = count($resources);

if (!$count) {
    return $modx->lexicon(\'ce.no_resources_found\');

}

/* @var $resource modResource */
$i = 0;
$outer = $modx->getChunk($outerTpl);

$output = \'\';
$innerOutput = \'\';
foreach ($resources as $resource) {
    $fields = $resource->toArray();

    if ($resource->Resource) {
        $fields = array_merge($resource->Resource->toArray(), $fields);
    }
    $inner = $modx->getChunk($innerTpl, $fields);
    $row = $modx->getChunk($rowTpl, $fields);
    $innerOutput .= str_replace(\'[[+extResourceRow]]\', $row, $inner);
    $i++;
}

$output = str_replace(\'[[+extResourceInner]]\', $innerOutput, $outer);

return $output;',
    ),
  ),
  '66b4b10c4084ed894ee4b7fa30c9760d' => 
  array (
    'criteria' => 
    array (
      'name' => 'SetUserPlaceholders',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'SetUserPlaceholders',
      'description' => 'Set placeholders for extra user fields',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '/**
 * SetUserPlaceholders snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 04-13-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Set placeholders for extra user fields
 *
 * Variables
 * ---------
 *
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$modx->lexicon->load(\'classextender:default\');

$sp = $scriptProperties;
$userId = $modx->getOption(\'userId\', $sp, NULL);
$prefix = $modx->getOption(\'prefix\', $sp, \'\');
$dataClass = $modx->getOption(\'userDataClass\', $sp, \'userData\');

$c = $modx->newQuery($dataClass);


if (!empty($userId)) {
    $c->where(array(\'userdata_id\' => $userId));
} else {
    $c->where(array(\'userdata_id\' => $modx->user->get(\'id\')));
}

$data = $modx->getObjectGraph($dataClass, \'{"Profile":{},"User":{}}\', $c);

if (!$data) {
    return $modx->lexicon(\'ce.user_not_found\');
}

if ($data) {
    $modx->toPlaceholders($data, $prefix);
}
if ($data->Profile) {
    $modx->toPlaceholders($data->Profile, $prefix);
}

if ($data->User) {
    $modx->toPlaceholders($data->User, $prefix);
}

return \'\';',
      'locked' => 0,
      'properties' => 'a:3:{s:6:"prefix";a:7:{s:4:"name";s:6:"prefix";s:4:"desc";s:19:"ce.user_prefix_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:13:"userDataClass";a:7:{s:4:"name";s:13:"userDataClass";s:4:"desc";s:29:"ce.class_for_user_data_object";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"userData";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:6:"userId";a:7:{s:4:"name";s:6:"userId";s:4:"desc";s:15:"ce.user_id_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * SetUserPlaceholders snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 04-13-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Set placeholders for extra user fields
 *
 * Variables
 * ---------
 *
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$modx->lexicon->load(\'classextender:default\');

$sp = $scriptProperties;
$userId = $modx->getOption(\'userId\', $sp, NULL);
$prefix = $modx->getOption(\'prefix\', $sp, \'\');
$dataClass = $modx->getOption(\'userDataClass\', $sp, \'userData\');

$c = $modx->newQuery($dataClass);


if (!empty($userId)) {
    $c->where(array(\'userdata_id\' => $userId));
} else {
    $c->where(array(\'userdata_id\' => $modx->user->get(\'id\')));
}

$data = $modx->getObjectGraph($dataClass, \'{"Profile":{},"User":{}}\', $c);

if (!$data) {
    return $modx->lexicon(\'ce.user_not_found\');
}

if ($data) {
    $modx->toPlaceholders($data, $prefix);
}
if ($data->Profile) {
    $modx->toPlaceholders($data->Profile, $prefix);
}

if ($data->User) {
    $modx->toPlaceholders($data->User, $prefix);
}

return \'\';',
    ),
  ),
  '67917e1fd2dca67d23a5094c558f6ef7' => 
  array (
    'criteria' => 
    array (
      'name' => 'SetResourcePlaceholders',
    ),
    'object' => 
    array (
      'id' => 16,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'SetResourcePlaceholders',
      'description' => 'Set placeholders for extra resource fields',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '/**
 * SetResourcePlaceholders snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 04-13-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Set placeholders for extra resource fields
 *
 * Variables
 * ---------
 *
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$modx->lexicon->load(\'classextender:default\');

$sp = $scriptProperties;
$resourceId = $modx->getOption(\'resourceId\', $sp, NULL);
$prefix = $modx->getOption(\'prefix\', $sp, \'\');

if ($resourceId != NULL) {
    $resource = $modx->getObject(\'modResource\', $resourceId);
    if (!$resource) {
        return $modx->lexicon(\'ce.resource_not_found\');
    }
} else {
    $resource = $modx->resource;
}

$data = $modx->getObject(\'resourceData\',
    array(\'resourcedata_id\' => $resource->get(\'id\')));

if ($data) {
    $modx->toPlaceholders($data, $prefix);
}

$modx->toPlaceholders($resource->toArray(), $prefix);

return \'\';',
      'locked' => 0,
      'properties' => 'a:2:{s:10:"resourceId";a:7:{s:4:"name";s:10:"resourceId";s:4:"desc";s:19:"ce.resource_id_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:6:"prefix";a:7:{s:4:"name";s:6:"prefix";s:4:"desc";s:23:"ce.resource_prefix_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * SetResourcePlaceholders snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 04-13-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Set placeholders for extra resource fields
 *
 * Variables
 * ---------
 *
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$modx->lexicon->load(\'classextender:default\');

$sp = $scriptProperties;
$resourceId = $modx->getOption(\'resourceId\', $sp, NULL);
$prefix = $modx->getOption(\'prefix\', $sp, \'\');

if ($resourceId != NULL) {
    $resource = $modx->getObject(\'modResource\', $resourceId);
    if (!$resource) {
        return $modx->lexicon(\'ce.resource_not_found\');
    }
} else {
    $resource = $modx->resource;
}

$data = $modx->getObject(\'resourceData\',
    array(\'resourcedata_id\' => $resource->get(\'id\')));

if ($data) {
    $modx->toPlaceholders($data, $prefix);
}

$modx->toPlaceholders($resource->toArray(), $prefix);

return \'\';',
    ),
  ),
  'a2c60b4b4ec936f7d9d4412e799101e6' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtUserUpdateProfile',
    ),
    'object' => 
    array (
      'id' => 17,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtUserUpdateProfile',
      'description' => 'Set placeholders for and update extended user data',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '/**
 * ExtUserUpdateProfile snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 03-23-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Set placeholders for and update extended user data
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$modx->lexicon->load(\'login:updateprofile\');

$submission = isset($_POST[\'login-updprof-btn\']) && ($_POST[\'login-updprof-btn\'] == $modx->lexicon(\'login.update_profile\'));

$data = null;
$user = null;
$fields = array();

/* @var $data userData */

if (isset($modx->user) && ($modx->user instanceof modUser)) {
    
    $user =& $modx->user;
    $data = $modx->getObject(\'userData\',
        array(\'userdata_id\' => $user->get(\'id\')), false);
    if ($data) {
        $fields = $data->toArray();
    } else {
        $data = $modx->newObject(\'userData\');
        if ($data) {
            $data->set(\'userdata_id\', $user->get(\'id\'));
            $fields = $data->toArray();
            
        }
    }
}

if (! is_array($fields) || empty($fields)) {
    return \'\';
}

/* Convert any nulls to \'\' */
if (!empty($fields)) {
    foreach($fields as $key => $value) {
        if (empty($value) && ($value !== \'0\')) {
            $fields[$key] = \'\';
        }
    }
    $modx->setPlaceholders($fields);
}

if ($submission) {
    $modx->request->sanitizeRequest();
    $dirty = false;
    foreach ($fields as $key => $value) {
        if (isset($_POST[$key])) {
            if ($value !== $_POST[$key]) {
                $data->set($key, $_POST[$key]);
                $dirty = true;
            }
        }
    }

    if ($dirty) {
        $data->save();
    }
}

return \'\';',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ExtUserUpdateProfile snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 03-23-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Set placeholders for and update extended user data
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$modx->lexicon->load(\'login:updateprofile\');

$submission = isset($_POST[\'login-updprof-btn\']) && ($_POST[\'login-updprof-btn\'] == $modx->lexicon(\'login.update_profile\'));

$data = null;
$user = null;
$fields = array();

/* @var $data userData */

if (isset($modx->user) && ($modx->user instanceof modUser)) {
    
    $user =& $modx->user;
    $data = $modx->getObject(\'userData\',
        array(\'userdata_id\' => $user->get(\'id\')), false);
    if ($data) {
        $fields = $data->toArray();
    } else {
        $data = $modx->newObject(\'userData\');
        if ($data) {
            $data->set(\'userdata_id\', $user->get(\'id\'));
            $fields = $data->toArray();
            
        }
    }
}

if (! is_array($fields) || empty($fields)) {
    return \'\';
}

/* Convert any nulls to \'\' */
if (!empty($fields)) {
    foreach($fields as $key => $value) {
        if (empty($value) && ($value !== \'0\')) {
            $fields[$key] = \'\';
        }
    }
    $modx->setPlaceholders($fields);
}

if ($submission) {
    $modx->request->sanitizeRequest();
    $dirty = false;
    foreach ($fields as $key => $value) {
        if (isset($_POST[$key])) {
            if ($value !== $_POST[$key]) {
                $data->set($key, $_POST[$key]);
                $dirty = true;
            }
        }
    }

    if ($dirty) {
        $data->save();
    }
}

return \'\';',
    ),
  ),
  'cad63de3376805c7278f6bb46192a05f' => 
  array (
    'criteria' => 
    array (
      'name' => 'UserSearchForm',
    ),
    'object' => 
    array (
      'id' => 18,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'UserSearchForm',
      'description' => 'Show users selected by category',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '/**
 * UserSearchForm snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 01-05-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Show user information based on search
 *
 * Variables
 * ---------
 *
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

/* Properties
 *
 * @property &extFormTpl textfield -- Tpl chunk to use for user
 * search form; Default: ExtUserSearchFormTpl.
 */


$formTpl = $modx->getOption(\'extFormTpl\', $scriptProperties, \'ExtUserSearchFormTpl\');


$output = $modx->getChunk($formTpl);

$pFirstName = $modx->getOption(\'user_search_first_name\', $_POST, \'\');
$pLastName = $modx->getOption(\'user_search_last_name\', $_POST, \'\');

$modx->setPlaceholder(\'user_search_first_name\', $pFirstName);
$modx->setPlaceholder(\'user_search_last_name\', $pLastName);



$fields = array();

if (isset($_POST[\'submit-var\']) && $_POST[\'submit-var\'] == \'etaoinshrdlu\') {

    $fields[\'where\'] = \'{"firstName:=":"\' . $pFirstName . \'","OR:lastName:=":"\' . $pLastName . \'"}\';

    $results = $modx->runSnippet(\'GetExtUsers\', $fields);

}

if (! empty ($results) ){
    $modx->SetPlaceholder(\'user_search.results_heading\',
        $modx->lexicon(\'ce_user_search_results_heading\'));
    $modx->setPlaceholder(\'user_search.results\', $results);
}
return $output;',
      'locked' => 0,
      'properties' => 'a:1:{s:10:"extFormTpl";a:7:{s:4:"name";s:10:"extFormTpl";s:4:"desc";s:20:"ce.ext_form_tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"ExtUserSearchFormTpl";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * UserSearchForm snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 01-05-2014
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Show user information based on search
 *
 * Variables
 * ---------
 *
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

/* Properties
 *
 * @property &extFormTpl textfield -- Tpl chunk to use for user
 * search form; Default: ExtUserSearchFormTpl.
 */


$formTpl = $modx->getOption(\'extFormTpl\', $scriptProperties, \'ExtUserSearchFormTpl\');


$output = $modx->getChunk($formTpl);

$pFirstName = $modx->getOption(\'user_search_first_name\', $_POST, \'\');
$pLastName = $modx->getOption(\'user_search_last_name\', $_POST, \'\');

$modx->setPlaceholder(\'user_search_first_name\', $pFirstName);
$modx->setPlaceholder(\'user_search_last_name\', $pLastName);



$fields = array();

if (isset($_POST[\'submit-var\']) && $_POST[\'submit-var\'] == \'etaoinshrdlu\') {

    $fields[\'where\'] = \'{"firstName:=":"\' . $pFirstName . \'","OR:lastName:=":"\' . $pLastName . \'"}\';

    $results = $modx->runSnippet(\'GetExtUsers\', $fields);

}

if (! empty ($results) ){
    $modx->SetPlaceholder(\'user_search.results_heading\',
        $modx->lexicon(\'ce_user_search_results_heading\'));
    $modx->setPlaceholder(\'user_search.results\', $results);
}
return $output;',
    ),
  ),
  '1c77240cc561298a1caac080e753466f' => 
  array (
    'criteria' => 
    array (
      'name' => 'ClassExtender',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ClassExtender',
      'description' => 'Extend a MODX class',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '/**
 * ClassExtender snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 11-10-2013
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Extend a MODX class
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(__FILE__))) . \'/_build/build.config.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[ClassExtender] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {
        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
}

if (!$modx->user->hasSessionContext(\'mgr\')) {
    die (\'Unauthorized Access\');
}

require_once $modx->getOption(\'ce.core_path\', NULL, $modx->getOption(\'core_path\') . \'components/classextender/\') . \'model/classextender/classextender.class.php\';
// include \'classextender.class.php\';

$modx->lexicon->load(\'classextender:default\');
$props =& $scriptProperties;
$ce = new ClassExtender($modx, $props);
if (! $ce instanceof ClassExtender) {
    die ($this->modx->lexicon(\'ce.no_class_extender\'));

}
$ce->init();
$output .= $ce->displayForm();

if ($ce->hasError()) {
    $modx->setPlaceholder(\'ce_results\', $ce->getOutput());
    return \'[[+ce_results]]\';
}

if (isset($_POST[\'submitVar\']) && $_POST[\'submitVar\'] == \'submitVar\') {
    $ce->process();
    $cm = $modx->getCacheManager();
    $cm->refresh();
}

$modx->setPlaceholder(\'ce_results\', $ce->getOutput());

return $output;',
      'locked' => 0,
      'properties' => 'a:1:{s:11:"tablePrefix";a:7:{s:4:"name";s:11:"tablePrefix";s:4:"desc";s:20:"ce.table_prefix_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:4:"ext_";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ClassExtender snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 11-10-2013
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Extend a MODX class
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

if (!defined(\'MODX_CORE_PATH\')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . \'/_build/build.config.php\';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(__FILE__))) . \'/_build/build.config.php\';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined(\'MODX_CORE_PATH\')) {
        session_write_close();
        die(\'[ClassExtender] Could not find build.config.php\');
    }
    require_once MODX_CORE_PATH . \'model/modx/modx.class.php\';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize(\'mgr\');
    $modx->getService(\'error\', \'error.modError\', \'\', \'\');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? \'ECHO\'
        : \'HTML\');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == \'cli\') {
        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people\'s plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption(\'site_start\');
        $homeResource = $modx->getObject(\'modResource\', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\\nNo Resource\\n";
        }
    }
}

if (!$modx->user->hasSessionContext(\'mgr\')) {
    die (\'Unauthorized Access\');
}

require_once $modx->getOption(\'ce.core_path\', NULL, $modx->getOption(\'core_path\') . \'components/classextender/\') . \'model/classextender/classextender.class.php\';
// include \'classextender.class.php\';

$modx->lexicon->load(\'classextender:default\');
$props =& $scriptProperties;
$ce = new ClassExtender($modx, $props);
if (! $ce instanceof ClassExtender) {
    die ($this->modx->lexicon(\'ce.no_class_extender\'));

}
$ce->init();
$output .= $ce->displayForm();

if ($ce->hasError()) {
    $modx->setPlaceholder(\'ce_results\', $ce->getOutput());
    return \'[[+ce_results]]\';
}

if (isset($_POST[\'submitVar\']) && $_POST[\'submitVar\'] == \'submitVar\') {
    $ce->process();
    $cm = $modx->getCacheManager();
    $cm->refresh();
}

$modx->setPlaceholder(\'ce_results\', $ce->getOutput());

return $output;',
    ),
  ),
  'd7fee65885785675974e726696b2b79f' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtUserRegisterPosthook',
    ),
    'object' => 
    array (
      'id' => 20,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtUserRegisterPosthook',
      'description' => 'Update extended user data on registration',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '/**
 * ExtUserRegisterPosthook snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 05-04-2015
 *
 * Thanks to MODX Forum contributor Karl Forsyth for his contributions to this code.
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Update extended user data on registration
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

/** Usage:
 * Add the custom user fields to the register form and modify the Register tag:


[[!Register?
    &submitVar=`loginRegisterBtn`
    ...
    &useExtended=`0`
    &postHooks=`ExtUserRegister`
]] */


$submission = isset($_POST[\'loginRegisterBtn\']) && ($_POST[\'loginRegisterBtn\'] == \'Register\');

$data = NULL;
$newUser = NULL;
$userName = NULL;
$userID = NULL;
$fields = array();

/* @var $data userData */

if (isset($modx->user) && ($modx->user instanceof modUser)) {
    $usernameField = $modx->getOption(\'usernameField\', $scriptProperties, \'username\', true);

    $userName = $hook->getValue($usernameField);

   /* Get new user ID via username */
    $newUser = $modx->getObject("modUser", array(\'username\' => $userName));
    $userId = $newUser->get(\'id\');


    $data = $modx->getObject(\'userData\',
        array(\'userdata_id\' => $userId), false);
    if ($data) {
        $fields = $data->toArray();
    } else {
        $data = $modx->newObject(\'userData\');
        if ($data) {
            $data->set(\'userdata_id\', $userId);
            $fields = $data->toArray();
        }
    }
}

if (!is_array($fields) || empty($fields)) {
    $hook->addError(\'username\', \'[ExtUserRegisterPosthook] Error getting user data\');
    return false;
}

/* Convert any nulls to \'\' */
if (!empty($fields)) {
    foreach ($fields as $key => $value) {
        if (empty($value) && ($value !== \'0\')) {
            $fields[$key] = \'\';
        }
    }
    $modx->setPlaceholders($fields);
}

if ($submission) {
    $modx->request->sanitizeRequest();
    $dirty = false;

    foreach ($fields as $key => $value) {
        if (isset($_POST[$key])) {
            if ($value !== $_POST[$key]) {
                $data->set($key, $_POST[$key]);
                $dirty = true;
            }
        }
    }

    if ($dirty) {
        if ($data->save()) {
            // $msg = \'[ExtUserRegisterPosthook] Saved successfully\';
            // $modx->log(modX::LOG_LEVEL_ERROR, $msg);
        } else {
            $msg = \'[ExtUserRegisterPosthook] Save failed\';
            $hook->addError(\'username\', $msg);
            return false;
        }
    }
}

return true;',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ExtUserRegisterPosthook snippet for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 05-04-2015
 *
 * Thanks to MODX Forum contributor Karl Forsyth for his contributions to this code.
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Update extended user data on registration
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

/** Usage:
 * Add the custom user fields to the register form and modify the Register tag:


[[!Register?
    &submitVar=`loginRegisterBtn`
    ...
    &useExtended=`0`
    &postHooks=`ExtUserRegister`
]] */


$submission = isset($_POST[\'loginRegisterBtn\']) && ($_POST[\'loginRegisterBtn\'] == \'Register\');

$data = NULL;
$newUser = NULL;
$userName = NULL;
$userID = NULL;
$fields = array();

/* @var $data userData */

if (isset($modx->user) && ($modx->user instanceof modUser)) {
    $usernameField = $modx->getOption(\'usernameField\', $scriptProperties, \'username\', true);

    $userName = $hook->getValue($usernameField);

   /* Get new user ID via username */
    $newUser = $modx->getObject("modUser", array(\'username\' => $userName));
    $userId = $newUser->get(\'id\');


    $data = $modx->getObject(\'userData\',
        array(\'userdata_id\' => $userId), false);
    if ($data) {
        $fields = $data->toArray();
    } else {
        $data = $modx->newObject(\'userData\');
        if ($data) {
            $data->set(\'userdata_id\', $userId);
            $fields = $data->toArray();
        }
    }
}

if (!is_array($fields) || empty($fields)) {
    $hook->addError(\'username\', \'[ExtUserRegisterPosthook] Error getting user data\');
    return false;
}

/* Convert any nulls to \'\' */
if (!empty($fields)) {
    foreach ($fields as $key => $value) {
        if (empty($value) && ($value !== \'0\')) {
            $fields[$key] = \'\';
        }
    }
    $modx->setPlaceholders($fields);
}

if ($submission) {
    $modx->request->sanitizeRequest();
    $dirty = false;

    foreach ($fields as $key => $value) {
        if (isset($_POST[$key])) {
            if ($value !== $_POST[$key]) {
                $data->set($key, $_POST[$key]);
                $dirty = true;
            }
        }
    }

    if ($dirty) {
        if ($data->save()) {
            // $msg = \'[ExtUserRegisterPosthook] Saved successfully\';
            // $modx->log(modX::LOG_LEVEL_ERROR, $msg);
        } else {
            $msg = \'[ExtUserRegisterPosthook] Save failed\';
            $hook->addError(\'username\', $msg);
            return false;
        }
    }
}

return true;',
    ),
  ),
  'bc44e0152e31a517cc84b8ac3cc001ca' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtraResourceFields',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtraResourceFields',
      'description' => 'Add and process extra fields in Create/Edit Resource form',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * ExtraResourceFields plugin for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 12-10-2013
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Add and process extra fields in Create/Edit Resource form
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$fields = array();
$data = null;

/** @var $data xPDOObject */
/** @var $resource modResource */
if ($resource && $resource instanceof modResource) {
    $data = $modx->getObject(\'resourceData\',
        array(\'resourcedata_id\' => $resource->get(\'id\')));
}

if (! $data) {
    $data = $modx->newObject(\'resourceData\');
}
if ($data) {
    $fields = $data->toArray();
} else {
    return \'\';
}

switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        /* if you want to add custom scripts, css, etc, register them here */
        break;
    case \'OnDocFormRender\':
        if ($data) {
            /* Set fields with values from DB (if any) */
            foreach ($fields as $key => $value) {
                /* Make sure there are no null values */
                if ($value === null ) {
                    $fields[$key] = \'\';
                }
            }
        }

        /* now do the HTML */

        $extraFields = $modx->getChunk(\'MyExtraResourceFields\', $fields);

        /* Add our custom fields to the Create/Edit Resource form */
        $modx->event->output($extraFields);
        break;
    case \'OnDocFormSave\':

        if (!$data) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[ExtraResourceFields] No Data object\');
            return;
        }
        if (!$resource) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[ExtraResourceFields] No Resource object\');
            return;
        }
        $data->set(\'resourcedata_id\', $resource->get(\'id\'));
        $fields = array_keys($fields);
        $postKeys = array_keys($_POST);
        $dirty = false;
        foreach($fields as $field) {
            if ($field === \'id\') {
                continue;
            }
            if (in_array($field, $postKeys)) {
                if ($_POST[$field] != $data->get($field)) {
                    if (empty($_POST[$field])) {
                        $_POST[$field] = \'\';
                    }
                    $data->set($field, $_POST[$field]);
                    $dirty = true;
                }
            }
        }

        if ($dirty) {
            $data->save();
        }

        break;

    case \'OnEmptyTrash\':
        /** @var $resources array() */
        foreach($resources as $resource) {
            $data = $modx->getObject(\'resourceData\', array(\'resourcedata_id\' => $resource->get(\'id\')));
            if ($data) {
                $data->remove();
            }
        }

        break;
}
return;',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 1,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ExtraResourceFields plugin for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 12-10-2013
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Add and process extra fields in Create/Edit Resource form
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$fields = array();
$data = null;

/** @var $data xPDOObject */
/** @var $resource modResource */
if ($resource && $resource instanceof modResource) {
    $data = $modx->getObject(\'resourceData\',
        array(\'resourcedata_id\' => $resource->get(\'id\')));
}

if (! $data) {
    $data = $modx->newObject(\'resourceData\');
}
if ($data) {
    $fields = $data->toArray();
} else {
    return \'\';
}

switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        /* if you want to add custom scripts, css, etc, register them here */
        break;
    case \'OnDocFormRender\':
        if ($data) {
            /* Set fields with values from DB (if any) */
            foreach ($fields as $key => $value) {
                /* Make sure there are no null values */
                if ($value === null ) {
                    $fields[$key] = \'\';
                }
            }
        }

        /* now do the HTML */

        $extraFields = $modx->getChunk(\'MyExtraResourceFields\', $fields);

        /* Add our custom fields to the Create/Edit Resource form */
        $modx->event->output($extraFields);
        break;
    case \'OnDocFormSave\':

        if (!$data) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[ExtraResourceFields] No Data object\');
            return;
        }
        if (!$resource) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[ExtraResourceFields] No Resource object\');
            return;
        }
        $data->set(\'resourcedata_id\', $resource->get(\'id\'));
        $fields = array_keys($fields);
        $postKeys = array_keys($_POST);
        $dirty = false;
        foreach($fields as $field) {
            if ($field === \'id\') {
                continue;
            }
            if (in_array($field, $postKeys)) {
                if ($_POST[$field] != $data->get($field)) {
                    if (empty($_POST[$field])) {
                        $_POST[$field] = \'\';
                    }
                    $data->set($field, $_POST[$field]);
                    $dirty = true;
                }
            }
        }

        if ($dirty) {
            $data->save();
        }

        break;

    case \'OnEmptyTrash\':
        /** @var $resources array() */
        foreach($resources as $resource) {
            $data = $modx->getObject(\'resourceData\', array(\'resourcedata_id\' => $resource->get(\'id\')));
            if ($data) {
                $data->remove();
            }
        }

        break;
}
return;',
    ),
  ),
  '73647050f40c931cab58eb077ea31a0b' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtraUserFields',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtraUserFields',
      'description' => 'Add and process extra fields in Create/Edit User form',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * ExtraUserFields plugin for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 12-10-2013
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Add and process extra fields in Create/Edit User form
 *
 * Variables
 * ---------
 *
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 *
 * Events: OnUserFormPrerender, OnUserFormRender, OnUserFormSave
 *
 **/

/* Define extra fields */
$fields = array();

/* Make sure we have an extUser object to work with */
if (isset($user) && ($user instanceof  modUser)) {
    $data = $modx->getObject(\'userData\', array(\'userdata_id\' => $user->get(\'id\')));
}
/* @var $data userData */

/* Create related object if it doesn\'t exist */
if (!$data) {
    $data = $modx->newObject(\'userData\');
}

if ($data) {
    $fields = $data->toArray();
}

switch ($modx->event->name) {
    case \'OnUserFormPrerender\':
        /* if you want to add custom scripts, css, etc, register them here */
        break;
    case \'OnUserFormRender\':

        if ($data) {
            /* Set fields with values from DB (if any) */
            foreach ($fields as $key => $value) {
                $dbValue = $data->get($key);
                /* Make sure there are no null values */
                $dbValue = $dbValue === null? \'\' : $dbValue;
                $fields[$key] = $dbValue;
            }
        }

        /* Now do the HTML */
        $extraFields = $modx->getChunk(\'MyExtraUserFields\', $fields);

        /* Add our custom fields to the Create/Edit User form */
        $modx->event->output($extraFields);
        break;


    case \'OnUserFormSave\':
        /* do processing logic here. */
        /* @var $user extUser */
        if (!$data) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[ExtraUserFields] No Data object\');
            return;
        }
        if (!$user) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[ExtraUserFields] No User object\');
            return;
        }
        $data->set(\'userdata_id\', $user->get(\'id\'));
        $fields = array_keys($fields);
        $postKeys = array_keys($_POST);
        $dirty = false;

        foreach($fields as $field) {
            if ($field === \'id\') {
                continue;
            }
            if (in_array($field, $postKeys)) {
                /* Convert NULL to \'\', but preserve \'0\' */
                if (empty($_POST[$field]) && ($_POST[$field] !== \'0\')) {
                    $_POST[$field] = \'\';
                }
                /* If $_POST values don\'t match DB value,
                   update field and set dirty flag */
                if ($_POST[$field] !== $data->get($field)) {
                    $data->set($field, $_POST[$field]);
                    $dirty = true;
                }
            }
        }

        /* Set registration date to today - delete if not needed */
        $rDate = $data->get(\'registrationDate\');
        if (empty($rDate)) {
            $dirty = true;
            $data->set(\'registrationDate\', strtotime(date(\'Y-m-d\')));
        }
        /* End of registration date section */

        /* Save the data, if necessary */
        if ($dirty) {
            $data->save();
        }

        break;
    case \'OnUserRemove\':
        $extData = $modx->getObject(\'userData\', array(\'userdata_id\' => $user->get(\'id\')));
        if ($extData) {
            $extData->remove();
        }
        break;
}
return \'\';',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 1,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ExtraUserFields plugin for ClassExtender extra
 *
 * Copyright 2012-2019 Bob Ray <https://bobsguides.com>
 * Created on 12-10-2013
 *
 * ClassExtender is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClassExtender is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClassExtender; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package classextender
 */

/**
 * Description
 * -----------
 * Add and process extra fields in Create/Edit User form
 *
 * Variables
 * ---------
 *
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 *
 * Events: OnUserFormPrerender, OnUserFormRender, OnUserFormSave
 *
 **/

/* Define extra fields */
$fields = array();

/* Make sure we have an extUser object to work with */
if (isset($user) && ($user instanceof  modUser)) {
    $data = $modx->getObject(\'userData\', array(\'userdata_id\' => $user->get(\'id\')));
}
/* @var $data userData */

/* Create related object if it doesn\'t exist */
if (!$data) {
    $data = $modx->newObject(\'userData\');
}

if ($data) {
    $fields = $data->toArray();
}

switch ($modx->event->name) {
    case \'OnUserFormPrerender\':
        /* if you want to add custom scripts, css, etc, register them here */
        break;
    case \'OnUserFormRender\':

        if ($data) {
            /* Set fields with values from DB (if any) */
            foreach ($fields as $key => $value) {
                $dbValue = $data->get($key);
                /* Make sure there are no null values */
                $dbValue = $dbValue === null? \'\' : $dbValue;
                $fields[$key] = $dbValue;
            }
        }

        /* Now do the HTML */
        $extraFields = $modx->getChunk(\'MyExtraUserFields\', $fields);

        /* Add our custom fields to the Create/Edit User form */
        $modx->event->output($extraFields);
        break;


    case \'OnUserFormSave\':
        /* do processing logic here. */
        /* @var $user extUser */
        if (!$data) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[ExtraUserFields] No Data object\');
            return;
        }
        if (!$user) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[ExtraUserFields] No User object\');
            return;
        }
        $data->set(\'userdata_id\', $user->get(\'id\'));
        $fields = array_keys($fields);
        $postKeys = array_keys($_POST);
        $dirty = false;

        foreach($fields as $field) {
            if ($field === \'id\') {
                continue;
            }
            if (in_array($field, $postKeys)) {
                /* Convert NULL to \'\', but preserve \'0\' */
                if (empty($_POST[$field]) && ($_POST[$field] !== \'0\')) {
                    $_POST[$field] = \'\';
                }
                /* If $_POST values don\'t match DB value,
                   update field and set dirty flag */
                if ($_POST[$field] !== $data->get($field)) {
                    $data->set($field, $_POST[$field]);
                    $dirty = true;
                }
            }
        }

        /* Set registration date to today - delete if not needed */
        $rDate = $data->get(\'registrationDate\');
        if (empty($rDate)) {
            $dirty = true;
            $data->set(\'registrationDate\', strtotime(date(\'Y-m-d\')));
        }
        /* End of registration date section */

        /* Save the data, if necessary */
        if ($dirty) {
            $data->save();
        }

        break;
    case \'OnUserRemove\':
        $extData = $modx->getObject(\'userData\', array(\'userdata_id\' => $user->get(\'id\')));
        if ($extData) {
            $extData->remove();
        }
        break;
}
return \'\';',
    ),
  ),
);