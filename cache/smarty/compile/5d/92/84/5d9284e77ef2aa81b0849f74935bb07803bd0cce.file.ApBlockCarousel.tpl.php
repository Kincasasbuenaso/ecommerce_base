<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:22:06
         compiled from "/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/testimonials-h3/ApBlockCarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14993018075b68adeef34331-22709849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d9284e77ef2aa81b0849f74935bb07803bd0cce' => 
    array (
      0 => '/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/testimonials-h3/ApBlockCarousel.tpl',
      1 => 1527000190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14993018075b68adeef34331-22709849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'formAtts' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68adef007204_95587434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68adef007204_95587434')) {function content_5b68adef007204_95587434($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockCarousel -->
<div class="block block_carousel exclusive appagebuilder">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value;?>

	<div class="block_content">
		<?php if (!empty($_smarty_tpl->tpl_vars['formAtts']->value['slides'])) {?>
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=='boostrap') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('./ApBlockCarouselItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('./ApBlockOwlCarouselItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		<?php } else { ?>
			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No slide at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value;?>

</div><?php }} ?>
