<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:27:24
         compiled from "/var/www/html/lkstore/modules/appagebuilder/views/templates/hook/ApModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19999262485b68af2c82bea5-78989634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8ce9b1c990e6494e3b17e6c91441fbbaa01cac7' => 
    array (
      0 => '/var/www/html/lkstore/modules/appagebuilder/views/templates/hook/ApModule.tpl',
      1 => 1527000191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19999262485b68af2c82bea5-78989634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'apContent' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68af2c836009_27357716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68af2c836009_27357716')) {function content_5b68af2c836009_27357716($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

<?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
<?php }} ?>
