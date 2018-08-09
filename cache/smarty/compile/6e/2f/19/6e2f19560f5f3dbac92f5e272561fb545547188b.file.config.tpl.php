<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:27:25
         compiled from "/var/www/html/lkstore/modules/appagebuilder/views/templates/hook/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8856432755b68af2dedbb26-64911565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e2f19560f5f3dbac92f5e272561fb545547188b' => 
    array (
      0 => '/var/www/html/lkstore/modules/appagebuilder/views/templates/hook/config.tpl',
      1 => 1527000191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8856432755b68af2dedbb26-64911565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ap_cf' => 0,
    'ap_cfdata' => 0,
    'cfdata' => 0,
    'ap_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68af2df09da0_45235573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68af2df09da0_45235573')) {function content_5b68af2df09da0_45235573($_smarty_tpl) {?>
<div class="group-input group-<?php echo $_smarty_tpl->tpl_vars['ap_cf']->value;?>
 clearfix">
		<label class="col-sm-12 control-label">
				<i class="fa fa-tags"></i>
				<?php if ($_smarty_tpl->tpl_vars['ap_cf']->value=='profile') {?>
						<?php echo smartyTranslate(array('s'=>'Home version','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value=='header') {?>
						<?php echo smartyTranslate(array('s'=>'Header version','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value=='footer') {?>
						<?php echo smartyTranslate(array('s'=>'Footer version','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value=='product') {?>
						<?php echo smartyTranslate(array('s'=>'Product version','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value=='content') {?>
						<?php echo smartyTranslate(array('s'=>'Content Home','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['ap_cf']->value=='product_builder') {?>
						<?php echo smartyTranslate(array('s'=>'Product Builder','mod'=>'appagebuilder'),$_smarty_tpl);?>

				<?php }?>
		</label>
		<div class="col-sm-12">
				<?php  $_smarty_tpl->tpl_vars['cfdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cfdata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ap_cfdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cfdata']->key => $_smarty_tpl->tpl_vars['cfdata']->value) {
$_smarty_tpl->tpl_vars['cfdata']->_loop = true;
?>
						<a class="apconfig apconfig-<?php echo $_smarty_tpl->tpl_vars['ap_cf']->value;?>
<?php if ($_smarty_tpl->tpl_vars['cfdata']->value['active']) {?> active<?php }?>" data-type="<?php echo $_smarty_tpl->tpl_vars['ap_type']->value;?>
" data-id='<?php echo $_smarty_tpl->tpl_vars['cfdata']->value['id'];?>
' href="index.php?<?php echo $_smarty_tpl->tpl_vars['ap_type']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['cfdata']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cfdata']->value['name'];?>
</a>
				<?php } ?>
		</div>
</div><?php }} ?>
