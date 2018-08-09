<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:27:55
         compiled from "/var/www/html/lkstore/lkadmin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11817251805b68af4b0a8a38-06776276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73251465a8dd809a8e20933ac52be5844f34db3a' => 
    array (
      0 => '/var/www/html/lkstore/lkadmin/themes/default/template/content.tpl',
      1 => 1517264432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11817251805b68af4b0a8a38-06776276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68af4b120523_25359563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68af4b120523_25359563')) {function content_5b68af4b120523_25359563($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
