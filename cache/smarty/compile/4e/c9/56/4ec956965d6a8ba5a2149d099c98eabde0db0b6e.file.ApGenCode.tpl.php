<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:27:24
         compiled from "/var/www/html/lkstore/modules/appagebuilder/views/templates/hook/ApGenCode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14178434635b68af2c71bba0-32885117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ec956965d6a8ba5a2149d099c98eabde0db0b6e' => 
    array (
      0 => '/var/www/html/lkstore/modules/appagebuilder/views/templates/hook/ApGenCode.tpl',
      1 => 1527000191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14178434635b68af2c71bba0-32885117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68af2c72fc22_69890038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68af2c72fc22_69890038')) {function content_5b68af2c72fc22_69890038($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) {?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['error_message'];?>

<?php }?>
<?php }} ?>
