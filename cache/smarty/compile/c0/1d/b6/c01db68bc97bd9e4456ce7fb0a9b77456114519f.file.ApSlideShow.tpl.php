<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:22:09
         compiled from "/var/www/html/lkstore/modules/appagebuilder/views/templates/hook/ApSlideShow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16417066195b68adf11ad976-09809060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01db68bc97bd9e4456ce7fb0a9b77456114519f' => 
    array (
      0 => '/var/www/html/lkstore/modules/appagebuilder/views/templates/hook/ApSlideShow.tpl',
      1 => 1527000191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16417066195b68adf11ad976-09809060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'content_slider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68adf1215240_85273711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68adf1215240_85273711')) {function content_5b68adf1215240_85273711($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['isEnabled'])&&$_smarty_tpl->tpl_vars['formAtts']->value['isEnabled']==true) {?>
<div id="slideshow-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="ApSlideShow">
	<?php if (isset($_smarty_tpl->tpl_vars['content_slider']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_slider']->value;?>

	<?php }?>
</div>
<?php }?><?php }} ?>
