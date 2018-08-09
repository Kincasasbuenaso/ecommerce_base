<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:27:24
         compiled from "/var/www/html/lkstore/modules/leobootstrapmenu/views/widgets/widget_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20433801085b68af2c67fcf6-46529343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa909bd6c4fa90742ad4b64ffffb8564ca6637c2' => 
    array (
      0 => '/var/www/html/lkstore/modules/leobootstrapmenu/views/widgets/widget_links.tpl',
      1 => 1527000191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20433801085b68af2c67fcf6-46529343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'widget_heading' => 0,
    'id' => 0,
    'ac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68af2c6926e7_59549674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68af2c6926e7_59549674')) {function content_5b68af2c6926e7_59549674($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['links']->value)) {?>
<div class="widget-links">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">	
		<div id="tabs<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel-group">
			<ul class="nav-links">
				<?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ac']->key;
?>  
					<li ><a href="<?php echo $_smarty_tpl->tpl_vars['ac']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['ac']->value['text'];?>
</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<?php }?>


<?php }} ?>
