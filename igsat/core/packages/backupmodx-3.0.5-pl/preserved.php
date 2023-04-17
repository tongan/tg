<?php return array (
  '5068dbeea78ba6da454e88d88c40c066' => 
  array (
    'criteria' => 
    array (
      'name' => 'backupmodx',
    ),
    'object' => 
    array (
      'name' => 'backupmodx',
      'path' => '{core_path}components/backupmodx/',
      'assets_path' => '{assets_path}components/backupmodx/',
    ),
  ),
  'b70bdf2fd10c784629f0a711d980d1f7' => 
  array (
    'criteria' => 
    array (
      'name' => 'backupmodx.widget',
    ),
    'object' => 
    array (
      'id' => 6,
      'name' => 'backupmodx.widget',
      'description' => 'backupmodx.widget_desc',
      'type' => 'file',
      'content' => '[[++core_path]]components/backupmodx/elements/widgets/backupmodx.widget.php',
      'namespace' => 'backupmodx',
      'lexicon' => 'backupmodx:default',
      'size' => 'half',
      'name_trans' => 'BackupMODX',
      'description_trans' => 'Backup dashboard widget',
    ),
  ),
  '1ebef636bed64fedc741b4504882f7bc' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.debug',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.debug',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'backupmodx',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  'dca9f5bed66c16696fad0105e4139d42' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.timelimit',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.timelimit',
      'value' => '120',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  '25f49fb662b6fcbeb2b06b781eb1a124' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.excludeFolders',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.excludeFolders',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  '966fd27c429f0668cfed7b581ab55fd3' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.excludeFiles',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.excludeFiles',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  '8f8ec3a010092d59e26d6b1333a3bb93' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.targetPath',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.targetPath',
      'value' => '{core_path}backup/',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  'a4eb50d8501ce942f4668b04a57c3ae1' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronKey',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronKey',
      'value' => '3e36b103dc7a',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'cron',
      'editedon' => '2021-05-31 10:44:14',
    ),
  ),
  '1fc82480276720404434136fe7b134da' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronFiles',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronFiles',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'backupmodx',
      'area' => 'cron',
      'editedon' => NULL,
    ),
  ),
  '4ecca64655645389715076abda459992' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronDatabase',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronDatabase',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'backupmodx',
      'area' => 'cron',
      'editedon' => NULL,
    ),
  ),
  'a16ff8316bf7b11eeff3a40c027fd724' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronNote',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronNote',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'cron',
      'editedon' => NULL,
    ),
  ),
  '96ac477e8126f88fe5059a3ddce99e30' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronEnable',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronEnable',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'backupmodx',
      'area' => 'cron',
      'editedon' => NULL,
    ),
  ),
  '5146b2f7c1a5c913779c58636a59385d' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronMaxDatabase',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronMaxDatabase',
      'value' => '10',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'cron',
      'editedon' => NULL,
    ),
  ),
  'caeb6e9ff5fab37a5e3655d77888f8ca' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.cronMaxFiles',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.cronMaxFiles',
      'value' => '5',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'cron',
      'editedon' => NULL,
    ),
  ),
  'c22a721eb5ef84fa71194fd2f8785722' => 
  array (
    'criteria' => 
    array (
      'key' => 'backupmodx.groups',
    ),
    'object' => 
    array (
      'key' => 'backupmodx.groups',
      'value' => 'Administrator',
      'xtype' => 'textfield',
      'namespace' => 'backupmodx',
      'area' => 'system',
      'editedon' => NULL,
    ),
  ),
  '9ab8bc3e6d84f706da2bb60f4fb5d634' => 
  array (
    'criteria' => 
    array (
      'category' => 'BackupMODX',
    ),
    'object' => 
    array (
      'id' => 4,
      'parent' => 0,
      'category' => 'BackupMODX',
      'rank' => 0,
    ),
  ),
);