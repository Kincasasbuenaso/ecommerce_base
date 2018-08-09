<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:22:07
         compiled from "/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/ApManuFacturersCarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16569656305b68adef17ff07-48746596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e76c77f13d244717bc578a9e13fb1e3eb223b576' => 
    array (
      0 => '/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/ApManuFacturersCarousel.tpl',
      1 => 1527000190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16569656305b68adef17ff07-48746596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'formAtts' => 0,
    'manufacturers' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68adef2316e6_25819516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68adef2316e6_25819516')) {function content_5b68adef2316e6_25819516($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApManuFacturersCarousel -->
<div class="block manufacturers_block exclusive appagebuilder">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php if (!empty($_smarty_tpl->tpl_vars['manufacturers']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=="boostrap") {?>
				<?php echo $_smarty_tpl->getSubTemplate ('./manufacturers_carousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('./manufacturers_owl_carousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		<?php } else { ?>
			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No manufacturer at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div><?php }} ?>
