<?php return array (
  '95385018ff4bc42b18d037a1b100707b' => 
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
  '34c2ec834284f9954d7f11938730a344' => 
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
      'content' => '<!-- Uses ClassExtender snippet and class.
     Parses Schema and Creates table
-->

<!--
* Gets MyExtUserSchema from chunk,
* writes it to extendeduser.mysql.schema.xml,
* and uses that for parseSchema()
-->

[[!ClassExtender?
    &package=`extendeduser`
    &schemaTpl=`MyExtUserSchema`
    &tablePrefix=`ext_`
    &dirPermission=`0755`
    &cssFile =`[[++assets_url]]components/classextender/css/classextender.css`
]]
',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 0,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 0,
      'editedby' => 1,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
  '93e6b0b8bd8498294dc224ac95d2257c' => 
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
      'content' => '<!-- Uses ClassExtender snippet and class.
     Parses Schema and Creates table
-->


<!--
* Gets MyExtResourceSchema from chunk,
* writes it to extendedresource.mysql.schema.xml,
* and uses that for parseSchema()
-->

[[!ClassExtender?
    &package=`extendedresource`
    &schemaTpl=`MyExtResourceSchema`
    &tablePrefix=`ext_`
    &dirPermission=`0755`
    &cssFile =`[[++assets_url]]components/classextender/css/classextender.css`
]]
',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 1,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 0,
      'editedby' => 1,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
  'bd9318b37dc1516641a66cc73d6d3fb6' => 
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
      'createdon' => 0,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
  '7f3162299f30960dd7774ffdc7f63a12' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'Examples',
    ),
    'object' => 
    array (
      'id' => 42,
      'type' => 'document',
      'pagetitle' => 'Examples',
      'longtitle' => '',
      'description' => '',
      'alias' => 'examples',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 5,
      'isfolder' => 1,
      'introtext' => NULL,
      'content' => '<h3>Examples</h3>

<p>These resources under the ClassExtender/Examples folder are not polished examples, they are unstyled, and will need to be modified to meet your needs. If you don\'t already have versions of them duplicate them before making any changes and edit the duplicates.</p>

<p>That said, they should get you started on your own versions. They can also serve as tests if you run ExtendModUser or ExtendModResource and leave the settings at their defaults.</p>

<div class="box">
  <p>Important: note that they won\'t work unless you perform that following steps:</p>

  <ul>
    <li>Run ExtendModResource and/or ExtendModUser</li>
    <li>Make sure that the appropriate ClassExtender plugin(s) are enabled</li>
    <li>Edit users and/or resources in the Manager</li>
    <li>Add data to the extra fields and save them</li>
  </ul>

    <p>The steps above populate the custom tables. Until that happens, these examples won\'t find anything to display</p>
</div>',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 2,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1678312474,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
      'uri' => 'examples/',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  '6b225a7eb6238ef42a0c19d0e8fce5eb' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'ClassExtender Register PostHook',
    ),
    'object' => 
    array (
      'id' => 43,
      'type' => 'document',
      'pagetitle' => 'ClassExtender Register PostHook',
      'longtitle' => '',
      'description' => '',
      'alias' => 'classextender-register-posthook',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 42,
      'isfolder' => 0,
      'introtext' => NULL,
      'content' => '<h3>RegisterPostHook</h3>

<!-- Set the &redirectTo property to the ID of
     your "Thanks for Registering" page -->

<h3>[[+error.message]]</h3>

[[!Register?
    &submitVar=`login-register-btn`
    &activation=`0`
    &successMsg=`Thanks for registering`
    &useExtended=`0`
    &postHooks=`ExtUserRegisterPostHook`
    &redirectTo=`99999`
    &errTpl=`<span class="error" style="color:#c80000;">[[+error]]</span>`
]]

[[$ExtUserRegisterFormTpl]]

',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 0,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1678312474,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
      'uri' => 'classextender-register-posthook.html',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  '1c4055578192bde781a4ed8feab7ad3f' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'ClassExtender Update Profile',
    ),
    'object' => 
    array (
      'id' => 44,
      'type' => 'document',
      'pagetitle' => 'ClassExtender Update Profile',
      'longtitle' => '',
      'description' => '',
      'alias' => 'class-extender-update-profile',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 42,
      'isfolder' => 0,
      'introtext' => NULL,
      'content' => '<!-- Important: User must be logged in to the front end!
     Login extra must be installed -->

[[!RequireLogin?
    &loggedInChunk=`ExtUpdateProfileLoggedIn`
    &notLoggedInChunk=`ExtUpdateProfileNotLoggedIn`
    &notLoggedInMsg = `Please Log in`
    &cssFile =`[[++assets_url]]components/classextender/css/classextender.css`
]]',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 1,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1678312474,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
      'uri' => 'class-extender-update-profile.html',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  '2ef59e514e6bffa5a85e896549362f17' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'ClassExtender GetExtUsers',
    ),
    'object' => 
    array (
      'id' => 45,
      'type' => 'document',
      'pagetitle' => 'ClassExtender GetExtUsers',
      'longtitle' => '',
      'description' => '',
      'alias' => 'class-extender-getextusers',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 42,
      'isfolder' => 0,
      'introtext' => NULL,
      'content' => '<!--
Uses Chunks:
    extUserInnerTpl
    extUserInnerTpl
    extUserRowTpl
-->

<h3>GetExtUsers</h3>

<div class="get_ext_users">
[[!GetExtUsers?
    &extUserOuterTpl=`extUserOuterTpl`
    &extUserInnerTpl=`extUserInnerTpl`
    &extUserRowTpl=`extUserRowTpl`
    &sortby=`username`
    &sortdir=`ASC`
    &limit=`0`
    &offset=`0`
    &where=`{active:1}`
    &cssFile =`[[++assets_url]]components/classextender/css/classextender.css`
]]
</div>',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 2,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1678312474,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
      'uri' => 'class-extender-getextusers.html',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  'ffd6d77ba5e7c00d7bd0cb950bcd5598' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'ClassExtender GetExtResources',
    ),
    'object' => 
    array (
      'id' => 46,
      'type' => 'document',
      'pagetitle' => 'ClassExtender GetExtResources',
      'longtitle' => '',
      'description' => '',
      'alias' => 'class-extender-getextresources',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 42,
      'isfolder' => 0,
      'introtext' => NULL,
      'content' => '<!--
Will only find resources that have been
saved with the extra fields.

Uses Chunks:
    extResourceInnerTpl
    extResourceInnerTpl
    extResourceRowTpl
-->

<h3>GetExtResources</h3>

<div id="get_ext_resources" class="get_ext_resources">
[[!GetExtResources?
    &extResourceOuterTpl=`extResourceOuterTpl`
    &extResourceInnerTpl=`extResourceInnerTpl`
    &extResourceRowTpl=`extResourceRowTpl`
    &sortby=`pagetitle`
    &sortdir=`ASC`
    &limit=`0`
    &offset=`0`
    &where=`{published:1,deleted:0}`
    &cssFile =`[[++assets_url]]components/classextender/css/classextender.css`
]]
</div>',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 3,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1678312474,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
      'uri' => 'class-extender-getextresources.html',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  '1e5ec962bd7a1508ee0fe8ada4d31abe' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'ClassExtender Set Resource Placeholders',
    ),
    'object' => 
    array (
      'id' => 47,
      'type' => 'document',
      'pagetitle' => 'ClassExtender Set Resource Placeholders',
      'longtitle' => '',
      'description' => '',
      'alias' => 'class-extender-set-resource-placeholders',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 42,
      'isfolder' => 0,
      'introtext' => NULL,
      'content' => '<!-- Will only show extra fields data on pages where the extended fields are set!
     Set them by editing this page to test. -->

[[!SetResourcePlaceholders?
    &cssFile =`[[++assets_url]]components/classextender/css/classextender.css`
]]


<div class="set_resource_placeholders">
    <h3>Fields</h3>
    <ul>
        <li>Pagetitle: [[+pagetitle]]</li>
        <li>alias: [[+alias]]</li>
        <li>Name: [[+name]]</li>
        <li>Color: [[+color]]</li>
        <li>Breed: [[+breed]]</li>
        <li>Age: [[+age]]</li>
    </ul>
</div>

',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 4,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1678312474,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
      'uri' => 'class-extender-set-resource-placeholders.html',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  '33ac0b19176a1a9b43b013e6100e9b5d' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'ClassExtender Set User Placeholders',
    ),
    'object' => 
    array (
      'id' => 48,
      'type' => 'document',
      'pagetitle' => 'ClassExtender Set User Placeholders',
      'longtitle' => '',
      'description' => '',
      'alias' => 'class-extender-set-user-placeholders',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 42,
      'isfolder' => 0,
      'introtext' => NULL,
      'content' => '
<div class="set_user_placeholders">
    <h3>Set User Placeholders</h3>

    [[!SetUserPlaceholders?
        &cssFile =`[[++assets_url]]components/classextender/css/classextender.css`
    ]]

    <ul>
        <li>username: [[+username]]</li>
        <li>username: [[+email]]</li>
        <li>First: [[+firstName]]</li>
        <li>Last: [[+lastName]]</li>
        <li>Title: [[+title]]</li>
        <li>Company: [[+company]]</li>
    </ul>
</div>
',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 5,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1678312474,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
      'uri' => 'class-extender-set-user-placeholders.html',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  '9e39bb1e2152f3827ff8dc2c37a0b500' => 
  array (
    'criteria' => 
    array (
      'pagetitle' => 'ClassExtender User Search Form',
    ),
    'object' => 
    array (
      'id' => 49,
      'type' => 'document',
      'pagetitle' => 'ClassExtender User Search Form',
      'longtitle' => '',
      'description' => '',
      'alias' => 'class-extender-user-search-form',
      'link_attributes' => '',
      'published' => 0,
      'pub_date' => 0,
      'unpub_date' => 0,
      'parent' => 42,
      'isfolder' => 0,
      'introtext' => NULL,
      'content' => '<!-- Requires ExtUserSearchFormTpl
Calls GetExtUsers snippetTo be found, users must have values for the custom fields,and records in the userData table -->

[[!UserSearchForm?
    &formTpl=`ExtUserSearchFormTpl`
    &cssFile =`[[++assets_url]]components/classextender/css/classextender.css`
]]',
      'richtext' => 0,
      'template' => 1,
      'menuindex' => 6,
      'searchable' => 1,
      'cacheable' => 1,
      'createdby' => 1,
      'createdon' => 1678312474,
      'editedby' => 0,
      'editedon' => 0,
      'deleted' => 0,
      'deletedon' => 0,
      'deletedby' => 0,
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
      'uri' => 'class-extender-user-search-form.html',
      'uri_override' => 0,
      'hide_children_in_tree' => 0,
      'show_in_tree' => 1,
      'properties' => NULL,
      'alias_visible' => 1,
    ),
  ),
  'c2ca4d7e785fe682ffbbf53a38fa057f' => 
  array (
    'criteria' => 
    array (
      'key' => 'ce_autoload_directories',
    ),
    'object' => 
    array (
      'key' => 'ce_autoload_directories',
      'value' => 'extendeduser,extendedresource',
      'xtype' => 'textfield',
      'namespace' => 'classextender',
      'area' => 'classextender',
      'editedon' => NULL,
    ),
  ),
  '88f2600d7c3dcaf9c328b08757168c7f' => 
  array (
    'criteria' => 
    array (
      'category' => 'ClassExtender',
    ),
    'object' => 
    array (
      'id' => 24,
      'parent' => 0,
      'category' => 'ClassExtender',
      'rank' => 0,
    ),
  ),
  'ddcf4ef3fcab769b31ce0d62d38ab795' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtUserSchema',
    ),
    'object' => 
    array (
      'id' => 104,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtUserSchema',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<?xml version="1.0" encoding="UTF-8"?>
<model package="extendeduser" baseClass="xPDOObject" platform="mysql" defaultEngine="MyISAM" tablePrefix="ext_" version="1.0.0">


    <object class="userData" table="user_data" extends="xPDOSimpleObject">
        <field key="userdata_id" dbtype="int" precision="11" phptype="integer" null="false" attributes="unsigned"/>
        <field key="firstName" dbtype="varchar" precision="50" phptype="string" null="true"/>
        <field key="lastName" dbtype="varchar" precision="50" phptype="string" null="true"/>
        <field key="title" dbtype="varchar" precision="100" phptype="string" null="true"/>
        <field key="company" dbtype="varchar" precision="100" phptype="string" null="true"/>
        <field key="registrationDate" dbtype="datetime" phptype="datetime"/>

        <index alias="userdata_id" name="userdata_id" primary="false" unique="true" type="BTREE">
            <column key="userdata_id" length="" collation="A" null="false"/>
        </index>
        <aggregate alias="User" class="modUser" local="userdata_id" foreign="id" cardinality="one" owner="foreign"/>
        <aggregate alias="Profile" class="modUserProfile" local="userdata_id" foreign="internalKey" cardinality="one" owner="foreign"/>
    </object>
</model>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?xml version="1.0" encoding="UTF-8"?>
<model package="extendeduser" baseClass="xPDOObject" platform="mysql" defaultEngine="MyISAM" tablePrefix="ext_" version="1.0.0">


    <object class="userData" table="user_data" extends="xPDOSimpleObject">
        <field key="userdata_id" dbtype="int" precision="11" phptype="integer" null="false" attributes="unsigned"/>
        <field key="firstName" dbtype="varchar" precision="50" phptype="string" null="true"/>
        <field key="lastName" dbtype="varchar" precision="50" phptype="string" null="true"/>
        <field key="title" dbtype="varchar" precision="100" phptype="string" null="true"/>
        <field key="company" dbtype="varchar" precision="100" phptype="string" null="true"/>
        <field key="registrationDate" dbtype="datetime" phptype="datetime"/>

        <index alias="userdata_id" name="userdata_id" primary="false" unique="true" type="BTREE">
            <column key="userdata_id" length="" collation="A" null="false"/>
        </index>
        <aggregate alias="User" class="modUser" local="userdata_id" foreign="id" cardinality="one" owner="foreign"/>
        <aggregate alias="Profile" class="modUserProfile" local="userdata_id" foreign="internalKey" cardinality="one" owner="foreign"/>
    </object>
</model>',
    ),
  ),
  'cf76d3d8b745c516fb1bace211a031bd' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtResourceSchema',
    ),
    'object' => 
    array (
      'id' => 106,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtResourceSchema',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<?xml version="1.0" encoding="UTF-8"?>
<model package="extendedresource" baseClass="xPDOObject" platform="mysql" defaultEngine="MyISAM" tablePrefix="ext_"
       version="1.0.0">

    <object class="resourceData" table="resource_data" extends="xPDOSimpleObject">
        <field key="resourcedata_id" dbtype="int" precision="11" phptype="integer" null="false" attributes="unsigned"/>
        <field key="name" dbtype="varchar" precision="50" phptype="string" null="true"/>
        <field key="color" dbtype="varchar" precision="50" phptype="string" null="true"/>
        <field key="breed" dbtype="varchar" precision="50" phptype="string" null="true"/>
        <field key="age" dbtype="int" precision="10" phptype="integer" null="false" default="0"/>

        <index alias="resourcedata_id" name="resourcedata_id" primary="false" unique="true" type="BTREE">
            <column key="resourcedata_id" length="" collation="A" null="false"/>
        </index>
        <aggregate alias="Resource" class="modResource" local="resourcedata_id" foreign="id" cardinality="one"
                   owner="foreign"/>
    </object>
</model>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<?xml version="1.0" encoding="UTF-8"?>
<model package="extendedresource" baseClass="xPDOObject" platform="mysql" defaultEngine="MyISAM" tablePrefix="ext_"
       version="1.0.0">

    <object class="resourceData" table="resource_data" extends="xPDOSimpleObject">
        <field key="resourcedata_id" dbtype="int" precision="11" phptype="integer" null="false" attributes="unsigned"/>
        <field key="name" dbtype="varchar" precision="50" phptype="string" null="true"/>
        <field key="color" dbtype="varchar" precision="50" phptype="string" null="true"/>
        <field key="breed" dbtype="varchar" precision="50" phptype="string" null="true"/>
        <field key="age" dbtype="int" precision="10" phptype="integer" null="false" default="0"/>

        <index alias="resourcedata_id" name="resourcedata_id" primary="false" unique="true" type="BTREE">
            <column key="resourcedata_id" length="" collation="A" null="false"/>
        </index>
        <aggregate alias="Resource" class="modResource" local="resourcedata_id" foreign="id" cardinality="one"
                   owner="foreign"/>
    </object>
</model>',
    ),
  ),
  'de832bb9ed726a1d301242054c7f343d' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtUserRegisterFormTpl',
    ),
    'object' => 
    array (
      'id' => 108,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtUserRegisterFormTpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<div class="register">

<style>
input {
    width:14em;
    padding-left:10px;
    margin-bottom:15px;
}

fieldset {
    padding-top: 0;
    margin-top:0;
    margin-bottom: 30px;
    border-radius: 10px;
    background-color:#efefef;
}
legend {
    padding: 3px 10px;
    background-color: white;
    border-radius: 10px;
    border: 1px solid black;
}
</style>

<fieldset>
  <legend> Register </legend>
  <form class="form" action="[[~[[*id]]]]" method="post">
    <input type="hidden" name="nospam:blank" value=""/>
    <br>
    <label for="username">[[%register.username? &namespace=`login` &topic=`register`]] <span class="error">[[+error.username]]</span> </label>
    <input type="text" name="username:required:minLength=6" id="username" value="[[+username]]"/>
    <br>
    <label for="password">[[%register.password]] <span class="error">[[+error.password]]</span> </label>
    <input type="password" name="password:required:minLength=6" id="password" value="[[+password]]"/>
    <br>
    <label for="password_confirm">[[%register.password_confirm]] <span class="error">[[+error.password_confirm]]</span> </label>
    <input type="password" name="password_confirm:password_confirm=`password`" id="password_confirm" value="[[+password_confirm]]"/>
    <br>
    <label for="fullname">[[%register.fullname]] <span class="error">[[+error.fullname]]</span> </label>
    <input type="text" name="fullname:required" id="fullname" value="[[+fullname]]"/>
    <br>
    <label for="email">[[%register.email]] <span class="error">[[+error.email]]</span> </label>
    <input type="text" name="email:email" id="email" value="[[+email]]"/>
    <br>
    <label for="firstName">First Name: </label>
    <input type="text" name="firstName" id="firstName" value="[[+firstName]]"/>
    <br>
    <label for="lastName">Last Name: </label>
    <input type="text" name="lastName" id="lastName" value="[[+lastName]]"/>
    <br>
    <label for="title">Title: </label>
    <input type="text" name="title" id="title" value="[[+title]]"/>

    <br>
    <label for="company">Company: </label>
    <input type="text" name="company" id="company" value="[[+company]]"/>

    <br class="clear"/>
    <br class="clear"/>


    <div class="form-buttons">
      <input type="submit" name="login-register-btn" id="login-register-btn" value="Register"/>
    </div>
  </form>
</fieldset>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<div class="register">

<style>
input {
    width:14em;
    padding-left:10px;
    margin-bottom:15px;
}

fieldset {
    padding-top: 0;
    margin-top:0;
    margin-bottom: 30px;
    border-radius: 10px;
    background-color:#efefef;
}
legend {
    padding: 3px 10px;
    background-color: white;
    border-radius: 10px;
    border: 1px solid black;
}
</style>

<fieldset>
  <legend> Register </legend>
  <form class="form" action="[[~[[*id]]]]" method="post">
    <input type="hidden" name="nospam:blank" value=""/>
    <br>
    <label for="username">[[%register.username? &namespace=`login` &topic=`register`]] <span class="error">[[+error.username]]</span> </label>
    <input type="text" name="username:required:minLength=6" id="username" value="[[+username]]"/>
    <br>
    <label for="password">[[%register.password]] <span class="error">[[+error.password]]</span> </label>
    <input type="password" name="password:required:minLength=6" id="password" value="[[+password]]"/>
    <br>
    <label for="password_confirm">[[%register.password_confirm]] <span class="error">[[+error.password_confirm]]</span> </label>
    <input type="password" name="password_confirm:password_confirm=`password`" id="password_confirm" value="[[+password_confirm]]"/>
    <br>
    <label for="fullname">[[%register.fullname]] <span class="error">[[+error.fullname]]</span> </label>
    <input type="text" name="fullname:required" id="fullname" value="[[+fullname]]"/>
    <br>
    <label for="email">[[%register.email]] <span class="error">[[+error.email]]</span> </label>
    <input type="text" name="email:email" id="email" value="[[+email]]"/>
    <br>
    <label for="firstName">First Name: </label>
    <input type="text" name="firstName" id="firstName" value="[[+firstName]]"/>
    <br>
    <label for="lastName">Last Name: </label>
    <input type="text" name="lastName" id="lastName" value="[[+lastName]]"/>
    <br>
    <label for="title">Title: </label>
    <input type="text" name="title" id="title" value="[[+title]]"/>

    <br>
    <label for="company">Company: </label>
    <input type="text" name="company" id="company" value="[[+company]]"/>

    <br class="clear"/>
    <br class="clear"/>


    <div class="form-buttons">
      <input type="submit" name="login-register-btn" id="login-register-btn" value="Register"/>
    </div>
  </form>
</fieldset>
</div>',
    ),
  ),
  'a4f9d6dcff5d6be8ee00c56141d18dd7' => 
  array (
    'criteria' => 
    array (
      'name' => 'ClassExtenderForm',
    ),
    'object' => 
    array (
      'id' => 109,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ClassExtenderForm',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<!-- lexicon->load(\'classextender:form\'); -->

<div id="class_extender">
<form id="class_extender_form" action="[[~[[*id]]]]" method="post">

<h3>[[*pagetitle]]</h3>

   <div id="ce_results">
       [[+ce_results]]
   </div>

    <input type="hidden" name="submitVar" id="submitVar" value="submitVar"/>

    <label for="ce_package_name">[[%ce_package_name_caption? &namespace=`classextender` &topic=`form`]]<br/>
        <input type="text" size="50" id="ce_package_name"
                name="ce_package_name" value="[[+ce_package_name]]"/>
    </label>

    <br/><label for="ce_table_prefix">[[%ce_table_prefix_caption? &namespace=`classextender` &topic=`form`]]<br/>
        <input type="text" size="50" id="ce_table_prefix"
                name="ce_table_prefix" value="[[+ce_table_prefix]]"/>
    </label>

    <br/><label for="ce_schema_tpl_name">[[%ce_schema_tpl_name_caption? &namespace=`classextender` &topic=`form`]]<br/>
    <input type="text" size="50" id="ce_schema_tpl_name"
            name="ce_schema_tpl_name" value="[[+ce_schema_tpl_name]]"/>
    </label>

    <br>
    <br>
    <br>

    <input id="ce_button" name="ce_submit" type="submit" value="Submit"/>

</form>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<!-- lexicon->load(\'classextender:form\'); -->

<div id="class_extender">
<form id="class_extender_form" action="[[~[[*id]]]]" method="post">

<h3>[[*pagetitle]]</h3>

   <div id="ce_results">
       [[+ce_results]]
   </div>

    <input type="hidden" name="submitVar" id="submitVar" value="submitVar"/>

    <label for="ce_package_name">[[%ce_package_name_caption? &namespace=`classextender` &topic=`form`]]<br/>
        <input type="text" size="50" id="ce_package_name"
                name="ce_package_name" value="[[+ce_package_name]]"/>
    </label>

    <br/><label for="ce_table_prefix">[[%ce_table_prefix_caption? &namespace=`classextender` &topic=`form`]]<br/>
        <input type="text" size="50" id="ce_table_prefix"
                name="ce_table_prefix" value="[[+ce_table_prefix]]"/>
    </label>

    <br/><label for="ce_schema_tpl_name">[[%ce_schema_tpl_name_caption? &namespace=`classextender` &topic=`form`]]<br/>
    <input type="text" size="50" id="ce_schema_tpl_name"
            name="ce_schema_tpl_name" value="[[+ce_schema_tpl_name]]"/>
    </label>

    <br>
    <br>
    <br>

    <input id="ce_button" name="ce_submit" type="submit" value="Submit"/>

</form>
</div>',
    ),
  ),
  '4ad4f558a42da161038bfe3d97ad663c' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtraUserFields',
    ),
    'object' => 
    array (
      'id' => 110,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtraUserFields',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">First Name</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="firstName" value="[[+firstName]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-user\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Last Name</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="lastName" value="[[+lastName]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-user\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Title</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="title" value="[[+title]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-user\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Company</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="company" value="[[+company]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-user\').markDirty();"/>
    </div>
</div>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">First Name</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="firstName" value="[[+firstName]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-user\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Last Name</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="lastName" value="[[+lastName]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-user\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Title</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="title" value="[[+title]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-user\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Company</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="company" value="[[+company]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-user\').markDirty();"/>
    </div>
</div>
',
    ),
  ),
  '6c7c61b407f8320a234b3fa8862e964a' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtraResourceFields',
    ),
    'object' => 
    array (
      'id' => 112,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtraResourceFields',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Name</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="name" value="[[+name]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-resource\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Color</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="color" value="[[+color]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-resource\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Breed</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="breed" value="[[+breed]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-resource\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Age</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="age" value="[[+age]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-resource\').markDirty();"/>
    </div>
</div>

',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Name</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="name" value="[[+name]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-resource\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Color</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="color" value="[[+color]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-resource\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Breed</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="breed" value="[[+breed]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-resource\').markDirty();"/>
    </div>
</div>

<div class="x-form-item x-tab-item">
    <label class="x-form-item-label" style="width:auto; font-weight:bold; float:none; font-size:12px">Age</label>

    <div class="x-form-item x-tab-item">
        <input type="text" name="age" value="[[+age]]" class="x-form-text x-form-field"
                onClick="Ext.getCmp(\'modx-panel-resource\').markDirty();"/>
    </div>
</div>

',
    ),
  ),
  'a4412e9e81fbbe816193a61ed617b858' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtUserOuterTpl',
    ),
    'object' => 
    array (
      'id' => 114,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtUserOuterTpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<h3>Users</h3>

<div class = "ext-users">
    <ul class="ext-user-outer">
        [[+extUserInner]]
    </ul>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<h3>Users</h3>

<div class = "ext-users">
    <ul class="ext-user-outer">
        [[+extUserInner]]
    </ul>
</div>',
    ),
  ),
  '0019e78c56c93456f41b15674a578f49' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtUserInnerTpl',
    ),
    'object' => 
    array (
      'id' => 115,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtUserInnerTpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<li class="ext-user-inner">
    <span class="ext-user-name">[[+lastName]], [[+firstName]]</span>
    [[+extUserRow]]
</li>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<li class="ext-user-inner">
    <span class="ext-user-name">[[+lastName]], [[+firstName]]</span>
    [[+extUserRow]]
</li>',
    ),
  ),
  '64c0ef96e9ef31d96d3b2f1ab083b907' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtUserRowTpl',
    ),
    'object' => 
    array (
      'id' => 116,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtUserRowTpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<ul class="ext-user-row">

    <li class="ext-user-field">
        Username: [[+username]]
    </li>
    <li class="ext-user-field">
        email: [[+email]]
    </li>
    <li class="ext-user-field">
        First Name: [[+firstName]]
    </li>
    <li class="ext-user-field">
        Last Name: [[+lastName]]
    </li>
    <li class="ext-user-field">
        Title: [[+title]]
    </li>
    <li class="ext-user-field">
        Company: [[+company]]
    </li>

    <li class="ext-user-field">
        Active: [[+active]]
    </li>

</ul>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<ul class="ext-user-row">

    <li class="ext-user-field">
        Username: [[+username]]
    </li>
    <li class="ext-user-field">
        email: [[+email]]
    </li>
    <li class="ext-user-field">
        First Name: [[+firstName]]
    </li>
    <li class="ext-user-field">
        Last Name: [[+lastName]]
    </li>
    <li class="ext-user-field">
        Title: [[+title]]
    </li>
    <li class="ext-user-field">
        Company: [[+company]]
    </li>

    <li class="ext-user-field">
        Active: [[+active]]
    </li>

</ul>',
    ),
  ),
  '1cd0f78863d700ca533a827e08bf8e9a' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtResourceOuterTpl',
    ),
    'object' => 
    array (
      'id' => 117,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtResourceOuterTpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<h3>Resources</h3>

<div class="ext-resources">
    <ul class="ext-resource-outer">
        [[+extResourceInner]]
    </ul>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<h3>Resources</h3>

<div class="ext-resources">
    <ul class="ext-resource-outer">
        [[+extResourceInner]]
    </ul>
</div>',
    ),
  ),
  'b464b417c22b2c6532b1237eb05e75f9' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtResourceInnerTpl',
    ),
    'object' => 
    array (
      'id' => 118,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtResourceInnerTpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<li class="ext-resource-inner">
    <span class="ext-resource-name">[[+pagetitle]]</span>
    [[+extResourceRow]]
</li>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<li class="ext-resource-inner">
    <span class="ext-resource-name">[[+pagetitle]]</span>
    [[+extResourceRow]]
</li>',
    ),
  ),
  '5606b6f17ef081105426a2a39c052da7' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtResourceRowTpl',
    ),
    'object' => 
    array (
      'id' => 119,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtResourceRowTpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<ul class="ext-resource-row">

    <li class="ext-resource-field">
        Name: [[+name]]
    </li>
    <li class="ext-resource-field">
        Color: [[+color]]
    </li>
    <li class="ext-resource-field">
        Breed: [[+breed]]
    </li>
    <li class="ext-resource-field">
        Age: [[+age]]
    </li>

</ul>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<ul class="ext-resource-row">

    <li class="ext-resource-field">
        Name: [[+name]]
    </li>
    <li class="ext-resource-field">
        Color: [[+color]]
    </li>
    <li class="ext-resource-field">
        Breed: [[+breed]]
    </li>
    <li class="ext-resource-field">
        Age: [[+age]]
    </li>

</ul>',
    ),
  ),
  'c28a1d434ca42e173cde4c4cfc959b67' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtUserSearchFormTpl',
    ),
    'object' => 
    array (
      'id' => 120,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtUserSearchFormTpl',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<h3>User Search</h3>

<p>Enter a user first and/or last name to search for, then click on Submit</p>

<form class="ext-user-search-form" id="ext-user-search-form" method="post">
    <input type="hidden" name="submit-var" value="etaoinshrdlu"/>

    <label for="user_search_first_name">[[%user_search_first_name_caption? &namespace=`classextender` &topic=`default`]]<br/>
        <input type="text" size="50" id="user_search_first_name"
                name="user_search_first_name" value="[[+user_search_first_name]]"/><br/>
    </label>

    <label for="user_search_last_name">[[%user_search_last_name_caption? &namespace=`classextender` &topic=`default`]]<br/>
        <input type="text" size="50" id="user_search_last_name"
                name="user_search_last_name" value="[[+user_search_last_name]]"/><br/>
    </label>
    <br/>
    <input type="submit" value="Submit">

</form>

<h3>[[+user_search.results_heading]]</h3>

[[+user_search.results]]

',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<h3>User Search</h3>

<p>Enter a user first and/or last name to search for, then click on Submit</p>

<form class="ext-user-search-form" id="ext-user-search-form" method="post">
    <input type="hidden" name="submit-var" value="etaoinshrdlu"/>

    <label for="user_search_first_name">[[%user_search_first_name_caption? &namespace=`classextender` &topic=`default`]]<br/>
        <input type="text" size="50" id="user_search_first_name"
                name="user_search_first_name" value="[[+user_search_first_name]]"/><br/>
    </label>

    <label for="user_search_last_name">[[%user_search_last_name_caption? &namespace=`classextender` &topic=`default`]]<br/>
        <input type="text" size="50" id="user_search_last_name"
                name="user_search_last_name" value="[[+user_search_last_name]]"/><br/>
    </label>
    <br/>
    <input type="submit" value="Submit">

</form>

<h3>[[+user_search.results_heading]]</h3>

[[+user_search.results]]

',
    ),
  ),
  'd83748963c435de6158a7fd72cc685d7' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtUpdateProfileLoggedIn',
    ),
    'object' => 
    array (
      'id' => 121,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtUpdateProfileLoggedIn',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '<!-- You  may want to redirect to another page -->

[[!ExtUserUpdateProfile]]
[[!UpdateProfile?
    &useExtended=`0`
    &redirectTo=`[[*id]]`
]]

<div class="ce_update-profile">

    <fieldset class="ce_fieldset">
    <legend class="ce_legend"> Update Profile </legend>
    <div class="updprof-error">[[+error.message]]</div>
    [[+login.update_success:is=`1`:then=`[[%login.profile_updated? &namespace=`login` &topic=`updateprofile`]]`]]

    <form class="form" action="[[~[[*id]]]]" method="post">
        <input type="hidden" name="nospam" value="" />
<br>
        <label for="fullname">[[!%login.fullname? &namespace=`login` &topic=`updateprofile`]]
            <span class="error">[[+error.fullname]]</span>
        </label>
        <input type="text" name="fullname" id="fullname" value="[[+fullname]]" />
<br>
        <label for="email">[[!%login.email]]
            <span class="error">[[+error.email]]</span>
        </label>
        <input type="text" name="email" id="email" value="[[+email]]" />
<br>
        <label for="phone">[[!%login.phone]]
            <span class="error">[[+error.phone]]</span>
        </label>
        <input type="text" name="phone" id="phone" value="[[+phone]]" />
<br>
        <label for="mobilephone">[[!%login.mobilephone]]
            <span class="error">[[+error.mobilephone]]</span>
        </label>
        <input type="text" name="mobilephone" id="mobilephone" value="[[+mobilephone]]" />
<br>
        <label for="fax">[[!%login.fax]]
            <span class="error">[[+error.fax]]</span>
        </label>
        <input type="text" name="fax" id="fax" value="[[+fax]]" />
<br>
        <label for="address">[[!%login.address]]
            <span class="error">[[+error.address]]</span>
        </label>
        <input type="text" name="address" id="address" value="[[+address]]" />
<br>
        <label for="country">[[!%login.country]]
            <span class="error">[[+error.country]]</span>
        </label>
        <input type="text" name="country" id="country" value="[[+country]]" />
<br>
        <label for="city">[[!%login.city]]
            <span class="error">[[+error.city]]</span>
        </label>
        <input type="text" name="city" id="city" value="[[+city]]" />
<br>
        <label for="state">[[!%login.state]]
            <span class="error">[[+error.state]]</span>
        </label>
        <input type="text" name="state" id="state" value="[[+state]]" />
<br>
        <label for="zip">[[!%login.zip]]
            <span class="error">[[+error.zip]]</span>
        </label>
        <input type="text" name="zip" id="zip" value="[[+zip]]" />
<br>
        <label for="website">[[!%login.website]]
            <span class="error">[[+error.website]]</span>
        </label>
        <input type="text" name="website" id="website" value="[[+website]]" />
<br>
        <label for="firstName">First Name
        </label>
        <input type="text" name="firstName" id="firstName" value="[[+firstName]]" />
<br>
        <label for="lastName">Last Name
        </label>
        <input type="text" name="lastName" id="lastName" value="[[+lastName]]" />
<br>
        <label for="title">Title
        </label>
        <input type="text" name="title" id="title" value="[[+title]]" />
<br>
        <label for="company">Company
        </label>
        <input type="text" name="company" id="company" value="[[+company]]" />
<br>
<br>

        <input id="ce_form_button" type="submit" name="login-updprof-btn" value="[[!%login.update_profile]]" />

    </form>

</fieldset>
</div>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '<!-- You  may want to redirect to another page -->

[[!ExtUserUpdateProfile]]
[[!UpdateProfile?
    &useExtended=`0`
    &redirectTo=`[[*id]]`
]]

<div class="ce_update-profile">

    <fieldset class="ce_fieldset">
    <legend class="ce_legend"> Update Profile </legend>
    <div class="updprof-error">[[+error.message]]</div>
    [[+login.update_success:is=`1`:then=`[[%login.profile_updated? &namespace=`login` &topic=`updateprofile`]]`]]

    <form class="form" action="[[~[[*id]]]]" method="post">
        <input type="hidden" name="nospam" value="" />
<br>
        <label for="fullname">[[!%login.fullname? &namespace=`login` &topic=`updateprofile`]]
            <span class="error">[[+error.fullname]]</span>
        </label>
        <input type="text" name="fullname" id="fullname" value="[[+fullname]]" />
<br>
        <label for="email">[[!%login.email]]
            <span class="error">[[+error.email]]</span>
        </label>
        <input type="text" name="email" id="email" value="[[+email]]" />
<br>
        <label for="phone">[[!%login.phone]]
            <span class="error">[[+error.phone]]</span>
        </label>
        <input type="text" name="phone" id="phone" value="[[+phone]]" />
<br>
        <label for="mobilephone">[[!%login.mobilephone]]
            <span class="error">[[+error.mobilephone]]</span>
        </label>
        <input type="text" name="mobilephone" id="mobilephone" value="[[+mobilephone]]" />
<br>
        <label for="fax">[[!%login.fax]]
            <span class="error">[[+error.fax]]</span>
        </label>
        <input type="text" name="fax" id="fax" value="[[+fax]]" />
<br>
        <label for="address">[[!%login.address]]
            <span class="error">[[+error.address]]</span>
        </label>
        <input type="text" name="address" id="address" value="[[+address]]" />
<br>
        <label for="country">[[!%login.country]]
            <span class="error">[[+error.country]]</span>
        </label>
        <input type="text" name="country" id="country" value="[[+country]]" />
<br>
        <label for="city">[[!%login.city]]
            <span class="error">[[+error.city]]</span>
        </label>
        <input type="text" name="city" id="city" value="[[+city]]" />
<br>
        <label for="state">[[!%login.state]]
            <span class="error">[[+error.state]]</span>
        </label>
        <input type="text" name="state" id="state" value="[[+state]]" />
<br>
        <label for="zip">[[!%login.zip]]
            <span class="error">[[+error.zip]]</span>
        </label>
        <input type="text" name="zip" id="zip" value="[[+zip]]" />
<br>
        <label for="website">[[!%login.website]]
            <span class="error">[[+error.website]]</span>
        </label>
        <input type="text" name="website" id="website" value="[[+website]]" />
<br>
        <label for="firstName">First Name
        </label>
        <input type="text" name="firstName" id="firstName" value="[[+firstName]]" />
<br>
        <label for="lastName">Last Name
        </label>
        <input type="text" name="lastName" id="lastName" value="[[+lastName]]" />
<br>
        <label for="title">Title
        </label>
        <input type="text" name="title" id="title" value="[[+title]]" />
<br>
        <label for="company">Company
        </label>
        <input type="text" name="company" id="company" value="[[+company]]" />
<br>
<br>

        <input id="ce_form_button" type="submit" name="login-updprof-btn" value="[[!%login.update_profile]]" />

    </form>

</fieldset>
</div>
',
    ),
  ),
  '8316b832d44bdcda78417fe236804187' => 
  array (
    'criteria' => 
    array (
      'name' => 'ExtUpdateProfileNotLoggedIn',
    ),
    'object' => 
    array (
      'id' => 122,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ExtUpdateProfileNotLoggedIn',
      'description' => 'Chunk',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '[[!Login]]',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => '',
      'content' => '[[!Login]]',
    ),
  ),
  '3008d6718bf9177a7ce755d59bc25ab1' => 
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
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '/**
 * GetExtUsers snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
 *
 * @package classextender
 **/

/* The extendeduser package should be pre-loaded
   due to being registered in the extension_packages
   System Setting */

$modx->lexicon->load(\'classextender:default\');

require_once(MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\');

//  $modx->addPackage(\'extendeduser\', MODX_CORE_PATH . \'components/classextender/model/\', \'ext_\');

/* @var $scriptProperties array */
$scriptProperties = isset($scriptProperties)
    ? $scriptProperties
    : array();
$sp = $scriptProperties;

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

$cePrefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendeduser\\\\\'
    : \'\';

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

$offset = ($offset === null) ? 0 : (int)$offset;

$c = $modx->newQuery($cePrefix . $userClass);
$c->sortby($sortBy, $sortDir);
$c->where($where);
if ($limit !== null) {
    $c->limit($limit, $offset);
}


$users = $modx->getCollectionGraph($cePrefix . $userClass, \'{"Profile":{},"User":{}}\', $c);

$count = count($users);

if (!$count) {
    return \'<p class="ce_error">\' . $modx->lexicon(\'ce.no_users_found\') . \'</p>\';

}

/* @var $user modUser */
$i = 0;
$outer = $modx->getChunk($outerTpl);

$output = \'\';
$innerOutput = \'\';
foreach ($users as $user) {
    $fields = $user->toArray();

    if ($user->Profile) {
        $fields = array_merge($user->Profile->toArray(), $fields);
    }
    if ($user->User) {
        $fields = array_merge($user->User->toArray(), $fields);
    }

    unset($fields[\'password\'], $fields[\'cachepwd\'], $fields[\'salt\'], $fields[\'hash_class\']);

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
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
 *
 * @package classextender
 **/

/* The extendeduser package should be pre-loaded
   due to being registered in the extension_packages
   System Setting */

$modx->lexicon->load(\'classextender:default\');

require_once(MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\');

//  $modx->addPackage(\'extendeduser\', MODX_CORE_PATH . \'components/classextender/model/\', \'ext_\');

/* @var $scriptProperties array */
$scriptProperties = isset($scriptProperties)
    ? $scriptProperties
    : array();
$sp = $scriptProperties;

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

$cePrefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendeduser\\\\\'
    : \'\';

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

$offset = ($offset === null) ? 0 : (int)$offset;

$c = $modx->newQuery($cePrefix . $userClass);
$c->sortby($sortBy, $sortDir);
$c->where($where);
if ($limit !== null) {
    $c->limit($limit, $offset);
}


$users = $modx->getCollectionGraph($cePrefix . $userClass, \'{"Profile":{},"User":{}}\', $c);

$count = count($users);

if (!$count) {
    return \'<p class="ce_error">\' . $modx->lexicon(\'ce.no_users_found\') . \'</p>\';

}

/* @var $user modUser */
$i = 0;
$outer = $modx->getChunk($outerTpl);

$output = \'\';
$innerOutput = \'\';
foreach ($users as $user) {
    $fields = $user->toArray();

    if ($user->Profile) {
        $fields = array_merge($user->Profile->toArray(), $fields);
    }
    if ($user->User) {
        $fields = array_merge($user->User->toArray(), $fields);
    }

    unset($fields[\'password\'], $fields[\'cachepwd\'], $fields[\'salt\'], $fields[\'hash_class\']);

    $inner = $modx->getChunk($innerTpl, $fields);
    $row = $modx->getChunk($rowTpl, $fields);


    $innerOutput .= str_replace(\'[[+extUserRow]]\', $row, $inner);
    $i++;
}

$output = str_replace(\'[[+extUserInner]]\', $innerOutput, $outer);

return $output;',
    ),
  ),
  'a095e469b66cc54fb434135b80198f8a' => 
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
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '/**
 * GetExtResources snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
 *
 * @package classextender
 **/

/* The extendedresource package should be preloaded
   due to being registered in the extension_packages
   System Setting */

require_once MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\';


$cePrefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendedresource\\\\\'
    : \'\';


$modx->lexicon->load(\'classextender:default\');

/* @var $scriptProperties array */
$scriptProperties = isset($scriptProperties)
    ? $scriptProperties
    : array();
$sp = $scriptProperties;

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

$resourceClass = $modx->getOption(\'resourceDataClass\', $sp, \'resourceData\');

if (strpos($resourceClass, \'\\\\\') === false) {
    $resourceClass = $cePrefix . $resourceClass;
}


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

if (!empty($where)) {
    $c->where($where);
}


$resources = $modx->getCollectionGraph($resourceClass, \'{"Resource":{}}\', $c);

$count = count($resources);

if (!$count) {
    return \'<p class="ce_error">\' . $modx->lexicon(\'ce.no_resources_found\') . \'</p>\';

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
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
 *
 * @package classextender
 **/

/* The extendedresource package should be preloaded
   due to being registered in the extension_packages
   System Setting */

require_once MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\';


$cePrefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendedresource\\\\\'
    : \'\';


$modx->lexicon->load(\'classextender:default\');

/* @var $scriptProperties array */
$scriptProperties = isset($scriptProperties)
    ? $scriptProperties
    : array();
$sp = $scriptProperties;

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

$resourceClass = $modx->getOption(\'resourceDataClass\', $sp, \'resourceData\');

if (strpos($resourceClass, \'\\\\\') === false) {
    $resourceClass = $cePrefix . $resourceClass;
}


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

if (!empty($where)) {
    $c->where($where);
}


$resources = $modx->getCollectionGraph($resourceClass, \'{"Resource":{}}\', $c);

$count = count($resources);

if (!$count) {
    return \'<p class="ce_error">\' . $modx->lexicon(\'ce.no_resources_found\') . \'</p>\';

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
  '22ce8bc1d81270f4b0789b8bb12c712b' => 
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
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '/**
 * SetUserPlaceholders snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
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

require_once(MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\');

$sp = $scriptProperties;

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

$userId = $modx->getOption(\'userId\', $sp, NULL);
$prefix = $modx->getOption(\'prefix\', $sp, \'\');
$dataClass = $modx->getOption(\'userDataClass\', $sp, \'userData\');

$cePrefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendeduser\\\\\'
    : \'\';

$c = $modx->newQuery($cePrefix . $dataClass);


if (!empty($userId)) {
    $c->where(array(\'userdata_id\' => $userId));
} else {
    $c->where(array(\'userdata_id\' => $modx->user->get(\'id\')));
}

$data = $modx->getObjectGraph($cePrefix . $dataClass, \'{"Profile":{},"User":{}}\', $c);

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
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
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

require_once(MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\');

$sp = $scriptProperties;

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

$userId = $modx->getOption(\'userId\', $sp, NULL);
$prefix = $modx->getOption(\'prefix\', $sp, \'\');
$dataClass = $modx->getOption(\'userDataClass\', $sp, \'userData\');

$cePrefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendeduser\\\\\'
    : \'\';

$c = $modx->newQuery($cePrefix . $dataClass);


if (!empty($userId)) {
    $c->where(array(\'userdata_id\' => $userId));
} else {
    $c->where(array(\'userdata_id\' => $modx->user->get(\'id\')));
}

$data = $modx->getObjectGraph($cePrefix . $dataClass, \'{"Profile":{},"User":{}}\', $c);

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
  'bd0816097a4bad1a35337a2603f21a62' => 
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
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '/**
 * SetResourcePlaceholders snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
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

$cePrefix = \'\';
$modxPrefix = \'\';

require_once MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\';

$isModx3 = $modx->getVersionData()[\'version\'] >= 3;

if ($isModx3) {
    $cePrefix = \'extendedresource\\\\\';
    $modxPrefix = \'MODX\\Revolution\\\\\';
}

$sp = $scriptProperties;

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

$resourceId = $modx->getOption(\'resourceId\', $sp, NULL, true);
$placeholderPrefix = $modx->getOption(\'prefix\', $sp, \'\', true);

if ($resourceId != NULL) {
    $resource = $modx->getObject($modxPrefix . \'modResource\', $resourceId);
    if (!$resource) {
        return $modx->lexicon(\'ce.resource_not_found\');
    }
} else {
    $resource = $modx->resource;
}

$data = $modx->getObject($cePrefix . \'resourceData\',
    array(\'resourcedata_id\' => $resource->get(\'id\')));

if ($data) {
    $modx->toPlaceholders($data, $placeholderPrefix);
} else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'No extra fields set for resource \' . $resource->get(\'id\'));
}

$modx->toPlaceholders($resource->toArray(), $placeholderPrefix);

return \'\';',
      'locked' => 0,
      'properties' => 'a:2:{s:10:"resourceId";a:7:{s:4:"name";s:10:"resourceId";s:4:"desc";s:19:"ce.resource_id_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}s:6:"prefix";a:7:{s:4:"name";s:6:"prefix";s:4:"desc";s:23:"ce.resource_prefix_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:24:"classextender:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * SetResourcePlaceholders snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
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

$cePrefix = \'\';
$modxPrefix = \'\';

require_once MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\';

$isModx3 = $modx->getVersionData()[\'version\'] >= 3;

if ($isModx3) {
    $cePrefix = \'extendedresource\\\\\';
    $modxPrefix = \'MODX\\Revolution\\\\\';
}

$sp = $scriptProperties;

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

$resourceId = $modx->getOption(\'resourceId\', $sp, NULL, true);
$placeholderPrefix = $modx->getOption(\'prefix\', $sp, \'\', true);

if ($resourceId != NULL) {
    $resource = $modx->getObject($modxPrefix . \'modResource\', $resourceId);
    if (!$resource) {
        return $modx->lexicon(\'ce.resource_not_found\');
    }
} else {
    $resource = $modx->resource;
}

$data = $modx->getObject($cePrefix . \'resourceData\',
    array(\'resourcedata_id\' => $resource->get(\'id\')));

if ($data) {
    $modx->toPlaceholders($data, $placeholderPrefix);
} else {
    $modx->log(modX::LOG_LEVEL_ERROR, \'No extra fields set for resource \' . $resource->get(\'id\'));
}

$modx->toPlaceholders($resource->toArray(), $placeholderPrefix);

return \'\';',
    ),
  ),
  'b5fd4d1608c6bf32071bafea07da8c5e' => 
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
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '/**
 * ExtUserUpdateProfile snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$modx->lexicon->load(\'login:updateprofile\');
$modx->lexicon->load(\'classextender:default\');

if (! $modx->user->hasSessionContext($modx->context->get(\'key\'))) {
    return "<h3>" . $modx->lexicon(\'ce_login_required\') . "</h3>";
}
$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

require_once(MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\');

$cePrefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendeduser\\\\\'
    : \'\';

$submission = isset($_POST[\'login-updprof-btn\']) && ($_POST[\'login-updprof-btn\'] == $modx->lexicon(\'login.update_profile\'));

$data = null;
$user = null;
$fields = array();

/* @var $data userData */

if (isset($modx->user)) {

    $user =& $modx->user;
    $data = $modx->getObject($cePrefix . \'userData\',
        array(\'userdata_id\' => $user->get(\'id\')), false);
    if ($data) {
        $fields = $data->toArray();
    } else {
        $data = $modx->newObject($cePrefix . \'userData\');
        if ($data) {
            $data->set(\'userdata_id\', $user->get(\'id\'));
            $fields = $data->toArray();

        }
    }
}

if (!is_array($fields) || empty($fields)) {
    return \'\';
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
        if (!$data->save()) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'could not save userData object\');
        }
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
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$modx->lexicon->load(\'login:updateprofile\');
$modx->lexicon->load(\'classextender:default\');

if (! $modx->user->hasSessionContext($modx->context->get(\'key\'))) {
    return "<h3>" . $modx->lexicon(\'ce_login_required\') . "</h3>";
}
$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

require_once(MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\');

$cePrefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendeduser\\\\\'
    : \'\';

$submission = isset($_POST[\'login-updprof-btn\']) && ($_POST[\'login-updprof-btn\'] == $modx->lexicon(\'login.update_profile\'));

$data = null;
$user = null;
$fields = array();

/* @var $data userData */

if (isset($modx->user)) {

    $user =& $modx->user;
    $data = $modx->getObject($cePrefix . \'userData\',
        array(\'userdata_id\' => $user->get(\'id\')), false);
    if ($data) {
        $fields = $data->toArray();
    } else {
        $data = $modx->newObject($cePrefix . \'userData\');
        if ($data) {
            $data->set(\'userdata_id\', $user->get(\'id\'));
            $fields = $data->toArray();

        }
    }
}

if (!is_array($fields) || empty($fields)) {
    return \'\';
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
        if (!$data->save()) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'could not save userData object\');
        }
    }
}

return \'\';',
    ),
  ),
  'b80ffc3130baa202e98bb0a201463fe5' => 
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
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '/**
 * UserSearchForm snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
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

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

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

if (!empty ($results)) {
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
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
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

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

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

if (!empty ($results)) {
    $modx->SetPlaceholder(\'user_search.results_heading\',
        $modx->lexicon(\'ce_user_search_results_heading\'));
    $modx->setPlaceholder(\'user_search.results\', $results);
}
return $output;',
    ),
  ),
  '01998bd0f4a5d87fc313afb31d327863' => 
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
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '/**
 * ClassExtender snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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

        if ($homeResource) {
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
if (!$ce) {
    die ($this->modx->lexicon(\'ce.no_class_extender\'));
}
$output = \'\';
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
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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

        if ($homeResource) {
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
if (!$ce) {
    die ($this->modx->lexicon(\'ce.no_class_extender\'));
}
$output = \'\';
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
  '05f665446c95d8f5d9d8e097b72afba1' => 
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
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '/**
 * ExtUserRegisterPosthook snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
 * */

/*

[[!Register?
    &submitVar=`login-register-btn`
    ...
    &useExtended=`0`
    &postHooks=`ExtUserRegister`
]]

*/

require_once MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\';

$isModx3 = $modx->getVersionData()[\'version\'] >= 3
    ? true
    : false;


$cePrefix = \'\';
$modxPrefix = \'\';

if ($isModx3) {
    $cePrefix = \'extendeduser\\\\\';
    $modxPrefix = \'MODX\\Revolution\\\\\';
}

$submission = isset($_POST[\'login-register-btn\']) && ($_POST[\'login-register-btn\'] == \'Register\');

$data = NULL;
$newUser = NULL;
$userName = NULL;
$userID = NULL;
$fields = array();

/* @var $data userData */

if (isset($modx->user)) {
    $usernameField = $modx->getOption(\'usernameField\', $scriptProperties, \'username\', true);

    /** @var $hook LoginHooks */
    $userName = $hook->getValue($usernameField);

    /* Get new user ID via username (created by Register snippet) */
    $newUser = $modx->getObject($modxPrefix . "modUser", array(\'username\' => $userName));

    if (!$newUser) {
        $modx->log(modX::LOG_LEVEL_ERROR, "Could not get user object, username: {$userName}");
        return false;
    }

    $userId = $newUser->get(\'id\');


    $data = $modx->getObject($cePrefix . \'userData\',
        array(\'userdata_id\' => $userId), false);
    if ($data) {
        $fields = $data->toArray();
    } else {
        $data = $modx->newObject($cePrefix . \'userData\');
        if ($data) {
            $data->set(\'userdata_id\', $userId);
            $fields = $data->toArray();
        }
    }
}

if (!is_array($fields) || empty($fields)) {
    /** @var $hook LoginHooks */
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
    // $modx->log(modX::LOG_LEVEL_ERROR, \'[ClassExtender] \' . \'Form Submitted\');
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
    /* Set registration date to today -- delete if not needed */
    if (isset($fields[\'registrationDate\'])) {
        $rDate = $data->get(\'registrationDate\');
        if (empty($rDate)) {
            $dirty = true;
            $data->set(\'registrationDate\', strtotime(date(\'Y-m-d\')));
        }
    }
    /* End of registration date section */

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
$_POST = array();
return true;',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ExtUserRegisterPosthook snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * See the example resource under the ClassExtender folder
 * */

/*

[[!Register?
    &submitVar=`login-register-btn`
    ...
    &useExtended=`0`
    &postHooks=`ExtUserRegister`
]]

*/

require_once MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\';

$isModx3 = $modx->getVersionData()[\'version\'] >= 3
    ? true
    : false;


$cePrefix = \'\';
$modxPrefix = \'\';

if ($isModx3) {
    $cePrefix = \'extendeduser\\\\\';
    $modxPrefix = \'MODX\\Revolution\\\\\';
}

$submission = isset($_POST[\'login-register-btn\']) && ($_POST[\'login-register-btn\'] == \'Register\');

$data = NULL;
$newUser = NULL;
$userName = NULL;
$userID = NULL;
$fields = array();

/* @var $data userData */

if (isset($modx->user)) {
    $usernameField = $modx->getOption(\'usernameField\', $scriptProperties, \'username\', true);

    /** @var $hook LoginHooks */
    $userName = $hook->getValue($usernameField);

    /* Get new user ID via username (created by Register snippet) */
    $newUser = $modx->getObject($modxPrefix . "modUser", array(\'username\' => $userName));

    if (!$newUser) {
        $modx->log(modX::LOG_LEVEL_ERROR, "Could not get user object, username: {$userName}");
        return false;
    }

    $userId = $newUser->get(\'id\');


    $data = $modx->getObject($cePrefix . \'userData\',
        array(\'userdata_id\' => $userId), false);
    if ($data) {
        $fields = $data->toArray();
    } else {
        $data = $modx->newObject($cePrefix . \'userData\');
        if ($data) {
            $data->set(\'userdata_id\', $userId);
            $fields = $data->toArray();
        }
    }
}

if (!is_array($fields) || empty($fields)) {
    /** @var $hook LoginHooks */
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
    // $modx->log(modX::LOG_LEVEL_ERROR, \'[ClassExtender] \' . \'Form Submitted\');
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
    /* Set registration date to today -- delete if not needed */
    if (isset($fields[\'registrationDate\'])) {
        $rDate = $data->get(\'registrationDate\');
        if (empty($rDate)) {
            $dirty = true;
            $data->set(\'registrationDate\', strtotime(date(\'Y-m-d\')));
        }
    }
    /* End of registration date section */

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
$_POST = array();
return true;',
    ),
  ),
  '0d35c86eb6d72420c6ccafcc19d8a287' => 
  array (
    'criteria' => 
    array (
      'name' => 'RequireLogin',
    ),
    'object' => 
    array (
      'id' => 28,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'RequireLogin',
      'description' => 'Show Login form to not-logged-in users',
      'editor_type' => 0,
      'category' => 24,
      'cache_type' => 0,
      'snippet' => '/**
 * RequireLogin snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
 * Created on 09-17-2022
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
 * Show Login form to not-logged-in users
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$msg=\'\';

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

if ($modx->user->hasSessionContext($modx->context->get(\'key\'))) {
    $chunk = $modx->getOption(\'loggedInChunk\', $scriptProperties, \'\');
} else {
    $modx->lexicon->load(\'classextender:default\');
    $msg = \'<h3>\' . $modx->getOption(\'notLoggedInMsg\', $scriptProperties, $modx->lexicon(\'ce_login_required\')) . \'</h3>\';
    $chunk =  $modx->getOption(\'notLoggedInChunk\', $scriptProperties, \'\');
}

$finalChunk = !empty($chunk) ? $modx->getChunk($chunk) : \'\';
return $msg . $finalChunk;',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * RequireLogin snippet for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
 * Created on 09-17-2022
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
 * Show Login form to not-logged-in users
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package classextender
 **/

$msg=\'\';

$cssFile = $modx->getOption(\'cssFile\', $scriptProperties,
    \'\', true);

if (!empty($cssFile)) {
    $modx->regClientCSS($cssFile);
}

if ($modx->user->hasSessionContext($modx->context->get(\'key\'))) {
    $chunk = $modx->getOption(\'loggedInChunk\', $scriptProperties, \'\');
} else {
    $modx->lexicon->load(\'classextender:default\');
    $msg = \'<h3>\' . $modx->getOption(\'notLoggedInMsg\', $scriptProperties, $modx->lexicon(\'ce_login_required\')) . \'</h3>\';
    $chunk =  $modx->getOption(\'notLoggedInChunk\', $scriptProperties, \'\');
}

$finalChunk = !empty($chunk) ? $modx->getChunk($chunk) : \'\';
return $msg . $finalChunk;',
    ),
  ),
  '8d4ddef20b6263b3b212ac5adb7a58fb' => 
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
      'category' => 24,
      'cache_type' => 0,
      'plugincode' => '/**
 * ExtraResourceFields plugin for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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

require_once(MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\');


$cePrefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendedresource\\\\\'
    : \'\';

$fields = array();
$data = null;

/** @var $data xPDOObject */
/** @var $resource modResource */
if ($resource) {
    $data = $modx->getObject($cePrefix . \'resourceData\',
        array(\'resourcedata_id\' => $resource->get(\'id\')));
}

if (!$data) {
    $data = $modx->newObject($cePrefix . \'resourceData\');
}
if ($data) {
    $fields = $data->toArray();
} else {
    return \'\';
}

// $modx->log(modX::LOG_LEVEL_ERROR, \'Event: \' . $modx->event->name);

switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        /* if you want to add custom scripts, css, etc, register them here */
        break;
    case \'OnDocFormRender\':
        // $modx->log(modX::LOG_LEVEL_ERROR, \'In OnDocFormRender\');
        if ($data) {
            /* Set fields with values from DB (if any) */
            foreach ($fields as $key => $value) {
                /* Make sure there are no null values */
                if ($value === null) {
                    $fields[$key] = \'\';
                }
            }
        }

        /* now do the HTML */

        $extraFields = $modx->getChunk(\'MyExtraResourceFields\', $fields);

        /* Add our custom fields to the Create/Edit Resource form */
        // $modx->log(modX::LOG_LEVEL_ERROR, print_r($extraFields, true));
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
        foreach ($fields as $field) {
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
            if (!$data->save()) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'Could not save resourceData object\');
            }
        }

        break;

    case \'OnEmptyTrash\':
        /** @var $resources array() */
        foreach ($resources as $resource) {
            $data = $modx->getObject($cePrefix . \'resourceData\', array(\'resourcedata_id\' => $resource->get(\'id\')));
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
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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

require_once(MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\');


$cePrefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendedresource\\\\\'
    : \'\';

$fields = array();
$data = null;

/** @var $data xPDOObject */
/** @var $resource modResource */
if ($resource) {
    $data = $modx->getObject($cePrefix . \'resourceData\',
        array(\'resourcedata_id\' => $resource->get(\'id\')));
}

if (!$data) {
    $data = $modx->newObject($cePrefix . \'resourceData\');
}
if ($data) {
    $fields = $data->toArray();
} else {
    return \'\';
}

// $modx->log(modX::LOG_LEVEL_ERROR, \'Event: \' . $modx->event->name);

switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        /* if you want to add custom scripts, css, etc, register them here */
        break;
    case \'OnDocFormRender\':
        // $modx->log(modX::LOG_LEVEL_ERROR, \'In OnDocFormRender\');
        if ($data) {
            /* Set fields with values from DB (if any) */
            foreach ($fields as $key => $value) {
                /* Make sure there are no null values */
                if ($value === null) {
                    $fields[$key] = \'\';
                }
            }
        }

        /* now do the HTML */

        $extraFields = $modx->getChunk(\'MyExtraResourceFields\', $fields);

        /* Add our custom fields to the Create/Edit Resource form */
        // $modx->log(modX::LOG_LEVEL_ERROR, print_r($extraFields, true));
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
        foreach ($fields as $field) {
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
            if (!$data->save()) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'Could not save resourceData object\');
            }
        }

        break;

    case \'OnEmptyTrash\':
        /** @var $resources array() */
        foreach ($resources as $resource) {
            $data = $modx->getObject($cePrefix . \'resourceData\', array(\'resourcedata_id\' => $resource->get(\'id\')));
            if ($data) {
                $data->remove();
            }
        }

        break;
}
return;',
    ),
  ),
  '25485841b3b45b9dbdd284f0d91a4131' => 
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
      'category' => 24,
      'cache_type' => 0,
      'plugincode' => '/**
 * ExtraUserFields plugin for ClassExtender extra
 *
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * @var $user modUser
 * @package classextender
 *
 * Events: OnUserFormPrerender, OnUserFormRender, OnUserFormSave
 *
 **/

require_once MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\';


// $packageName = \'extendeduser\';
// $modelPath = MODX_CORE_PATH . \'components/classextender/model/\';
// $tablePrefix = \'ext_\';

/* $success = $modx->addPackage($packageName,
            $modelPath, $tablePrefix);

        if (!$success) {
            $modx->log(modX::LOG_LEVEL_ERROR, $this->modx->lexicon("ce.addpackage_failed"));
        }
*/

/* Define extra fields */
$fields = array();

$prefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendeduser\\\\\'
    : \'\';

// $table = $modx->getTableName($prefix . \'userData\');
// $modx->log(modX::LOG_LEVEL_ERROR, \'Table: \' . $table);

/* Make sure we have an extUser object to work with */
if (isset($user)) {
    $data = $modx->getObject($prefix . \'userData\', array(\'userdata_id\' => $user->get(\'id\')));
}
/* @var $data userData */

/* Create related object if it doesn\'t exist */
if (!$data) {
    $data = $modx->newObject($prefix . \'userData\');
}

if ($data) {
    $fields = $data->toArray();
}

switch ($modx->event->name) {
    case \'OnUserFormPrerender\':
        /* if you want to add custom scripts, css, etc., register them here */
        break;
    case \'OnUserFormRender\':

        if ($data) {
            /* Set fields with values from DB (if any) */
            foreach ($fields as $key => $value) {
                $dbValue = $data->get($key);
                /* Make sure there are no null values */
                $dbValue = $dbValue === null ? \'\' : $dbValue;
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

        foreach ($fields as $field) {
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

        /* Set registration date to today -- delete if not needed */
        if (in_array(\'registrationDate\', $fields)) {
            $rDate = $data->get(\'registrationDate\');
            if (empty($rDate)) {
                $dirty = true;
                $data->set(\'registrationDate\', strtotime(date(\'Y-m-d\')));
            }
        }
        /* End of registration date section */

        /* Save the data, if necessary */
        if ($dirty) {

            if (!$data->save()) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'Could not save user\');
            }
        }

        break;
    case \'OnUserRemove\':
        $extData = $modx->getObject($prefix . \'userData\', array(\'userdata_id\' => $user->get(\'id\')));
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
 * Copyright 2012-2022 Bob Ray <https://bobsguides.com>
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
 * @var $user modUser
 * @package classextender
 *
 * Events: OnUserFormPrerender, OnUserFormRender, OnUserFormSave
 *
 **/

require_once MODX_CORE_PATH . \'components/classextender/model/ce_autoload.php\';


// $packageName = \'extendeduser\';
// $modelPath = MODX_CORE_PATH . \'components/classextender/model/\';
// $tablePrefix = \'ext_\';

/* $success = $modx->addPackage($packageName,
            $modelPath, $tablePrefix);

        if (!$success) {
            $modx->log(modX::LOG_LEVEL_ERROR, $this->modx->lexicon("ce.addpackage_failed"));
        }
*/

/* Define extra fields */
$fields = array();

$prefix = $modx->getVersionData()[\'version\'] >= 3
    ? \'extendeduser\\\\\'
    : \'\';

// $table = $modx->getTableName($prefix . \'userData\');
// $modx->log(modX::LOG_LEVEL_ERROR, \'Table: \' . $table);

/* Make sure we have an extUser object to work with */
if (isset($user)) {
    $data = $modx->getObject($prefix . \'userData\', array(\'userdata_id\' => $user->get(\'id\')));
}
/* @var $data userData */

/* Create related object if it doesn\'t exist */
if (!$data) {
    $data = $modx->newObject($prefix . \'userData\');
}

if ($data) {
    $fields = $data->toArray();
}

switch ($modx->event->name) {
    case \'OnUserFormPrerender\':
        /* if you want to add custom scripts, css, etc., register them here */
        break;
    case \'OnUserFormRender\':

        if ($data) {
            /* Set fields with values from DB (if any) */
            foreach ($fields as $key => $value) {
                $dbValue = $data->get($key);
                /* Make sure there are no null values */
                $dbValue = $dbValue === null ? \'\' : $dbValue;
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

        foreach ($fields as $field) {
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

        /* Set registration date to today -- delete if not needed */
        if (in_array(\'registrationDate\', $fields)) {
            $rDate = $data->get(\'registrationDate\');
            if (empty($rDate)) {
                $dirty = true;
                $data->set(\'registrationDate\', strtotime(date(\'Y-m-d\')));
            }
        }
        /* End of registration date section */

        /* Save the data, if necessary */
        if ($dirty) {

            if (!$data->save()) {
                $modx->log(modX::LOG_LEVEL_ERROR, \'Could not save user\');
            }
        }

        break;
    case \'OnUserRemove\':
        $extData = $modx->getObject($prefix . \'userData\', array(\'userdata_id\' => $user->get(\'id\')));
        if ($extData) {
            $extData->remove();
        }
        break;
}
return \'\';',
    ),
  ),
);