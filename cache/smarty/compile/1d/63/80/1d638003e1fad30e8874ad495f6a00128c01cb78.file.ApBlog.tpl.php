<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:22:07
         compiled from "/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/ApBlog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4871838305b68adef5ff601-81183660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d638003e1fad30e8874ad495f6a00128c01cb78' => 
    array (
      0 => '/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/ApBlog.tpl',
      1 => 1527000190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4871838305b68adef5ff601-81183660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'products' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68adef6bea44_30547970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68adef6bea44_30547970')) {function content_5b68adef6bea44_30547970($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlog -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['isEnabled'])&&$_smarty_tpl->tpl_vars['formAtts']->value['isEnabled']==true) {?>
<div class="block latest-blogs exclusive appagebuilder" id="blog-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" >
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
	<h4 class="title_block">
		<?php echo rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']);?>

	</h4>
	<?php }?>
	<div class="block_content">	
			<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=='boostrap') {?>
					<?php echo $_smarty_tpl->getSubTemplate ('./BlogCarousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate ('./BlogOwlCarousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php }?>
			<?php } else { ?>
				<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No blog at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>	
			<?php }?>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div>
<?php }?><?php }} ?>
