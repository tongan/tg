<?php
/* Smarty version 4.3.0, created on 2023-03-08 21:52:32
  from '/home/zgqcw4omge04/public_html/manager/templates/default/dashboard/onlineusers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640903a0c76772_79713666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e2164a7f6c644d24e5677b7a5cadcb1d40276b' => 
    array (
      0 => '/home/zgqcw4omge04/public_html/manager/templates/default/dashboard/onlineusers.tpl',
      1 => 1678312273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640903a0c76772_79713666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zgqcw4omge04/public_html/core/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['onlineusers_message'];?>
</p>
<br/>
<div id="modx-grid-user-online">
    <?php if ($_smarty_tpl->tpl_vars['data']->value['total'] > 0) {?>
    <div class="table-wrapper">
        <table class="table">
            <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['_lang']->value['onlineusers_user'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_lang']->value['onlineusers_lasthit'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_lang']->value['onlineusers_action'];?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['results'], 'record');
$_smarty_tpl->tpl_vars['record']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
$_smarty_tpl->tpl_vars['record']->do_else = false;
?>
                <tr>
                    <td class="user-with-avatar">
                        <div class="user-avatar">
                            <?php if ($_smarty_tpl->tpl_vars['record']->value['photo']) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['record']->value['photo'];?>
">
                            <?php } else { ?>
                                <i class="icon icon-user icon-2x"></i>
                            <?php }?>
                        </div>
                        <div class="user-data">
                            <div class="user-name"><?php echo (($tmp = $_smarty_tpl->tpl_vars['record']->value['fullname'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['record']->value['username'] ?? null : $tmp);?>
</div>
                            <div class="user-group"><?php echo $_smarty_tpl->tpl_vars['record']->value['group'];?>
</div>
                        </div>
                    </td>
                    <td class="occurred">
                        <div class="occurred-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['record']->value['occurred'],'%B %d, %Y');?>
</div>
                        <div class="occurred-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['record']->value['occurred'],'%H:%M');?>
</div>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['record']->value['action'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <?php } else { ?>
        <div class="no-results"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['w_no_data'];?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['can_view_logs']->value) {?>
        <div class="widget-footer">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
?a=system/logs"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['w_view_all'];?>
 &rarr;</a>
        </div>
     <?php }?>
</div>
<?php }
}
