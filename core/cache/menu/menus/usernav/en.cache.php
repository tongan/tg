<?php  return array (
  0 => 
  array (
    'text' => 'User',
    'parent' => 'usernav',
    'action' => '',
    'description' => '',
    'icon' => '<span id="user-avatar">{$userImage}</span> <span id="user-username">{$username}</span>',
    'menuindex' => 5,
    'params' => '',
    'handler' => '',
    'permissions' => 'menu_user',
    'namespace' => 'core',
    'id' => 'user',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'Edit Account',
        'parent' => 'user',
        'action' => 'security/profile',
        'description' => 'Edit account email, password or info',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'change_profile',
        'namespace' => 'core',
        'id' => 'profile',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => '{$username}',
        'parent' => 'user',
        'action' => 'security/profile',
        'description' => 'Edit account email, password or info',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'change_profile',
        'namespace' => 'core',
        'id' => '{$username}',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      2 => 
      array (
        'text' => 'Messages',
        'parent' => 'user',
        'action' => 'security/message',
        'description' => 'View and send messages',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'messages',
        'namespace' => 'core',
        'id' => 'messages',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      3 => 
      array (
        'text' => 'Toggle language',
        'parent' => 'user',
        'action' => '',
        'description' => 'Select the appropriate manager language',
        'icon' => '',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'language',
        'namespace' => 'core',
        'id' => 'language',
        'children' => 
        array (
          'ar' => 
          array (
            'id' => 'ar',
            'text' => 'Arabic',
            'description' => 'Arabic <b>AR</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("ar"); return false;',
            'permissions' => '',
          ),
          'be' => 
          array (
            'id' => 'be',
            'text' => 'Беларуская',
            'description' => 'Belarusian <b>BE</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("be"); return false;',
            'permissions' => '',
          ),
          'bg' => 
          array (
            'id' => 'bg',
            'text' => 'Bulgarian',
            'description' => 'Bulgarian <b>BG</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("bg"); return false;',
            'permissions' => '',
          ),
          'cs' => 
          array (
            'id' => 'cs',
            'text' => 'Čeština',
            'description' => 'Czech <b>CS</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("cs"); return false;',
            'permissions' => '',
          ),
          'da' => 
          array (
            'id' => 'da',
            'text' => 'Danish',
            'description' => 'Danish <b>DA</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("da"); return false;',
            'permissions' => '',
          ),
          'de' => 
          array (
            'id' => 'de',
            'text' => 'Deutsch',
            'description' => 'German <b>DE</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("de"); return false;',
            'permissions' => '',
          ),
          'el' => 
          array (
            'id' => 'el',
            'text' => 'Greek',
            'description' => 'Greek <b>EL</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("el"); return false;',
            'permissions' => '',
          ),
          'en' => 
          array (
            'id' => 'en',
            'text' => 'English',
            'description' => 'English <b>EN</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("en"); return false;',
            'permissions' => '',
          ),
          'es' => 
          array (
            'id' => 'es',
            'text' => 'Spanish',
            'description' => 'Spanish <b>ES</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("es"); return false;',
            'permissions' => '',
          ),
          'et' => 
          array (
            'id' => 'et',
            'text' => 'Estonian',
            'description' => 'Estonian <b>ET</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("et"); return false;',
            'permissions' => '',
          ),
          'fa' => 
          array (
            'id' => 'fa',
            'text' => 'Persian',
            'description' => 'Persian <b>FA</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("fa"); return false;',
            'permissions' => '',
          ),
          'fi' => 
          array (
            'id' => 'fi',
            'text' => 'Finnish',
            'description' => 'Finnish <b>FI</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("fi"); return false;',
            'permissions' => '',
          ),
          'fr' => 
          array (
            'id' => 'fr',
            'text' => 'Français',
            'description' => 'French <b>FR</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("fr"); return false;',
            'permissions' => '',
          ),
          'he' => 
          array (
            'id' => 'he',
            'text' => 'Hebrew',
            'description' => 'Hebrew <b>HE</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("he"); return false;',
            'permissions' => '',
          ),
          'hi' => 
          array (
            'id' => 'hi',
            'text' => 'हिंदी',
            'description' => 'Hindi <b>HI</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("hi"); return false;',
            'permissions' => '',
          ),
          'hu' => 
          array (
            'id' => 'hu',
            'text' => 'magyar',
            'description' => 'Hungarian <b>HU</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("hu"); return false;',
            'permissions' => '',
          ),
          'id' => 
          array (
            'id' => 'id',
            'text' => 'Indonesian',
            'description' => 'Indonesian <b>ID</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("id"); return false;',
            'permissions' => '',
          ),
          'it' => 
          array (
            'id' => 'it',
            'text' => 'Italiano',
            'description' => 'Italian <b>IT</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("it"); return false;',
            'permissions' => '',
          ),
          'ja' => 
          array (
            'id' => 'ja',
            'text' => 'Japanese',
            'description' => 'Japanese <b>JA</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("ja"); return false;',
            'permissions' => '',
          ),
          'nl' => 
          array (
            'id' => 'nl',
            'text' => 'Nederlands',
            'description' => 'Dutch <b>NL</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("nl"); return false;',
            'permissions' => '',
          ),
          'pl' => 
          array (
            'id' => 'pl',
            'text' => 'Polish',
            'description' => 'Polish <b>PL</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("pl"); return false;',
            'permissions' => '',
          ),
          'pt' => 
          array (
            'id' => 'pt',
            'text' => 'Portuguese',
            'description' => 'Portuguese <b>PT</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("pt"); return false;',
            'permissions' => '',
          ),
          'ro' => 
          array (
            'id' => 'ro',
            'text' => 'Romanian',
            'description' => 'Romanian <b>RO</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("ro"); return false;',
            'permissions' => '',
          ),
          'ru' => 
          array (
            'id' => 'ru',
            'text' => 'Русский',
            'description' => 'Russian <b>RU</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("ru"); return false;',
            'permissions' => '',
          ),
          'sv' => 
          array (
            'id' => 'sv',
            'text' => 'Svenska',
            'description' => 'Swedish <b>SV</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("sv"); return false;',
            'permissions' => '',
          ),
          'th' => 
          array (
            'id' => 'th',
            'text' => 'Thai',
            'description' => 'Thai <b>TH</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("th"); return false;',
            'permissions' => '',
          ),
          'tr' => 
          array (
            'id' => 'tr',
            'text' => 'Turkish',
            'description' => 'Turkish <b>TR</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("tr"); return false;',
            'permissions' => '',
          ),
          'uk' => 
          array (
            'id' => 'uk',
            'text' => 'Українська',
            'description' => 'Ukrainian <b>UK</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("uk"); return false;',
            'permissions' => '',
          ),
          'yo' => 
          array (
            'id' => 'yo',
            'text' => 'Yoruba',
            'description' => 'Yoruba <b>YO</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("yo"); return false;',
            'permissions' => '',
          ),
          'zh' => 
          array (
            'id' => 'zh',
            'text' => '简体中文',
            'description' => 'Chinese simplified <b>ZH</b>',
            'parent' => 'language',
            'handler' => 'MODx.switchLanguage("zh"); return false;',
            'permissions' => '',
          ),
        ),
        'controller' => '',
      ),
      4 => 
      array (
        'text' => 'Logout',
        'parent' => 'user',
        'action' => 'security/logout',
        'description' => 'Log out of the Manager',
        'icon' => '',
        'menuindex' => 3,
        'params' => '',
        'handler' => 'MODx.logout(); return false;',
        'permissions' => 'logout',
        'namespace' => 'core',
        'id' => 'logout',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
  1 => 
  array (
    'text' => 'Admin',
    'parent' => 'usernav',
    'action' => '',
    'description' => '',
    'icon' => '<i class="icon-gear icon icon-large"></i>',
    'menuindex' => 6,
    'params' => '',
    'handler' => '',
    'permissions' => 'settings',
    'namespace' => 'core',
    'id' => 'admin',
    'children' => 
    array (
      0 => 
      array (
        'text' => 'System Settings',
        'parent' => 'admin',
        'action' => 'system/settings',
        'description' => 'Configure all system settings',
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
        'permissions' => 'settings',
        'namespace' => 'core',
        'id' => 'system_settings',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      1 => 
      array (
        'text' => 'Form Customization',
        'parent' => 'admin',
        'action' => 'security/forms',
        'description' => 'Create bespoke MODX Manager interfaces',
        'icon' => '',
        'menuindex' => 1,
        'params' => '',
        'handler' => '',
        'permissions' => 'customize_forms',
        'namespace' => 'core',
        'id' => 'form_customization',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      2 => 
      array (
        'text' => 'Dashboards',
        'parent' => 'admin',
        'action' => 'system/dashboards',
        'description' => 'Manage custom login Dashboards',
        'icon' => '',
        'menuindex' => 2,
        'params' => '',
        'handler' => '',
        'permissions' => 'dashboards',
        'namespace' => 'core',
        'id' => 'dashboards',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      3 => 
      array (
        'text' => 'Contexts',
        'parent' => 'admin',
        'action' => 'context',
        'description' => 'Manage Contexts and their settings',
        'icon' => '',
        'menuindex' => 3,
        'params' => '',
        'handler' => '',
        'permissions' => 'view_context',
        'namespace' => 'core',
        'id' => 'contexts',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      4 => 
      array (
        'text' => 'Menus',
        'parent' => 'admin',
        'action' => 'system/action',
        'description' => 'Manage the main Manager menu',
        'icon' => '',
        'menuindex' => 4,
        'params' => '',
        'handler' => '',
        'permissions' => 'actions',
        'namespace' => 'core',
        'id' => 'edit_menu',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      5 => 
      array (
        'text' => 'Access Control Lists',
        'parent' => 'admin',
        'action' => 'security/permission',
        'description' => 'Manage Permissions through Groups, Roles and Access Policies',
        'icon' => '',
        'menuindex' => 5,
        'params' => '',
        'handler' => '',
        'permissions' => 'access_permissions',
        'namespace' => 'core',
        'id' => 'acls',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      6 => 
      array (
        'text' => 'Property Sets',
        'parent' => 'admin',
        'action' => 'element/propertyset',
        'description' => 'Manage Element property sets',
        'icon' => '',
        'menuindex' => 6,
        'params' => '',
        'handler' => '',
        'permissions' => 'property_sets',
        'namespace' => 'core',
        'id' => 'propertysets',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      7 => 
      array (
        'text' => 'Lexicons',
        'parent' => 'admin',
        'action' => 'workspaces/lexicon',
        'description' => 'Edit Manager language strings',
        'icon' => '',
        'menuindex' => 7,
        'params' => '',
        'handler' => '',
        'permissions' => 'lexicons',
        'namespace' => 'core',
        'id' => 'lexicon_management',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
      8 => 
      array (
        'text' => 'Namespaces',
        'parent' => 'admin',
        'action' => 'workspaces/namespace',
        'description' => 'Distinguish between Add-on settings',
        'icon' => '',
        'menuindex' => 8,
        'params' => '',
        'handler' => '',
        'permissions' => 'namespaces',
        'namespace' => 'core',
        'id' => 'namespaces',
        'children' => 
        array (
        ),
        'controller' => '',
      ),
    ),
    'controller' => '',
  ),
  2 => 
  array (
    'text' => 'About',
    'parent' => 'usernav',
    'action' => 'help',
    'description' => '',
    'icon' => '<i class="icon-question-circle icon icon-large"></i>',
    'menuindex' => 8,
    'params' => '',
    'handler' => '',
    'permissions' => 'help',
    'namespace' => 'core',
    'id' => 'about',
    'children' => 
    array (
    ),
    'controller' => '',
  ),
);