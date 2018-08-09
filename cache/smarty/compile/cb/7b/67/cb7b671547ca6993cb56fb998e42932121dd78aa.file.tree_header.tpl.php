<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 17:05:30
         compiled from "/var/www/html/lkstore/lkadmin/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10010198945b07372ad846e3-00031140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7b671547ca6993cb56fb998e42932121dd78aa' => 
    array (
      0 => '/var/www/html/lkstore/lkadmin/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1517264432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10010198945b07372ad846e3-00031140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07372ad8da16_06529073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07372ad8da16_06529073')) {function content_5b07372ad8da16_06529073($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
