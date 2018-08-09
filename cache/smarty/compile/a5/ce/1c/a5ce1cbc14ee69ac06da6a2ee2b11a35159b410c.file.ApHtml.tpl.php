<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:27:24
         compiled from "/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/btn_search/ApHtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5241159785b68af2c853dd7-19430721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5ce1cbc14ee69ac06da6a2ee2b11a35159b410c' => 
    array (
      0 => '/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/btn_search/ApHtml.tpl',
      1 => 1527000190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5241159785b68af2c853dd7-19430721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'apContent' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68af2c8727e3_35282138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68af2c8727e3_35282138')) {function content_5b68af2c8727e3_35282138($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
<div<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])&&$_smarty_tpl->tpl_vars['formAtts']->value['id']) {?> id="<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['id'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) {?> 
    class="<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['class'];?>
 block btn_search"<?php }?>>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value;?>

    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <h4 class="title_block"><?php echo rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']);?>
</h4>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html'])) {?>
        <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['content_html'];?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

    <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value;?>

</div><?php }} ?>
