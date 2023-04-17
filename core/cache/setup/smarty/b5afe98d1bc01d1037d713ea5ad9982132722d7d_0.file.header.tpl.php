<?php
/* Smarty version 4.3.0, created on 2023-03-08 21:52:20
  from '/home/zgqcw4omge04/public_html/setup/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640903947f2550_65781922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5afe98d1bc01d1037d713ea5ad9982132722d7d' => 
    array (
      0 => '/home/zgqcw4omge04/public_html/setup/templates/header.tpl',
      1 => 1678312265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640903947f2550_65781922 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['app_version']->value;?>
 &raquo; <?php echo $_smarty_tpl->tpl_vars['_lang']->value['install'];?>
</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">

    <link rel="shortcut icon" href="favicon.ico" />
    <link href="assets/css/installer.css" type="text/css" rel="stylesheet" />

    <?php if ($_smarty_tpl->tpl_vars['_lang']->value['additional_css'] != '') {?>
        <style type="text/css"> <?php echo $_smarty_tpl->tpl_vars['_lang']->value['additional_css'];?>
 </style>
    <?php }?>

    <?php echo '<script'; ?>
 src="assets/js/ext-core.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/modx.setup.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        window.onload = function () {
            var url_string = window.location.href;
            var url = new URL(url_string);
            var action = url.searchParams.get('action');

            switch (action) {
                case 'welcome':
                    setCurrent(0);
                    break;
                case 'options':
                    setCurrent(1);
                    break;
                case 'database':
                    setCurrent(2);
                    break;
                case 'contexts':
                    setCurrent(3);
                    break;
                case 'summary':
                    setCurrent(4);
                    break;
                case 'install':
                    setCurrent(5);
                    break;
                case 'complete':
                    setCurrent(6);
                    break;
                default:
                    setCurrent(0);
            }

            function setCurrent(index) {
                for (let i = 0; i < index; i++) {
                    document.querySelectorAll('.modx-installer-steps li')[i].classList.add('active');
                }
                document.querySelectorAll('.modx-installer-steps li')[index].classList.add('current');
            }
        }
    <?php echo '</script'; ?>
>

</head>

<body>
    <!-- start header -->
    <header>
        <div class="wrapper">
            <div class="wrapper_logo">
                <a href="https://modx.com/" title="MODX" class="logo" target="_blank">MODX</a>
            </div>
            <div class="wrapper_version">
                <?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['app_version']->value;?>

            </div>
            <div class="steps-outer">
                <ul class="modx-installer-steps">
                    <li><span class="icon"></span> <span class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['step_welcome'];?>
</span></li>
                    <li><span class="icon"></span> <span class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['step_options'];?>
</span></li>
                    <li><span class="icon"></span> <span class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['step_connect'];?>
</span></li>
                    <li><span class="icon"></span> <span class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['step_contexts'];?>
</span></li>
                    <li><span class="icon"></span> <span class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['step_test'];?>
</span></li>
                    <li><span class="icon"></span> <span class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['step_install'];?>
</span></li>
                    <li><span class="icon"></span> <span class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['step_complete'];?>
</span></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- end header -->

    <div id="content">
        <div class="content-inside">
            <div class="wrapper">
                <div class="content_header">
                    <div class="content_header_title">
                        <?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_installer'];?>

                    </div>
                </div>
<?php }
}
