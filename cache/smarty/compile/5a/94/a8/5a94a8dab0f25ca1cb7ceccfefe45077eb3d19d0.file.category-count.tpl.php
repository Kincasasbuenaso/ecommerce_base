<?php /* Smarty version Smarty-3.1.19, created on 2018-06-22 19:17:39
         compiled from "/var/www/html/lkstore/themes/leo_monica/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:989572175b2d91a38ab2e5-15432432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a94a8dab0f25ca1cb7ceccfefe45077eb3d19d0' => 
    array (
      0 => '/var/www/html/lkstore/themes/leo_monica/category-count.tpl',
      1 => 1527000191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '989572175b2d91a38ab2e5-15432432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2d91a391b766_06384395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2d91a391b766_06384395')) {function content_5b2d91a391b766_06384395($_smarty_tpl) {?>
<small class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></small>
<?php }} ?>
