<?php /* Smarty version Smarty-3.1.19, created on 2018-06-22 19:20:10
         compiled from "/var/www/html/lkstore/modules/payulatam/views/templates/hook/payulatam_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20956479625b2d923ad98a10-09855208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1dedfb2067f92355aeebb0dfba7b900685a4bcd' => 
    array (
      0 => '/var/www/html/lkstore/modules/payulatam/views/templates/hook/payulatam_payment.tpl',
      1 => 1529350366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20956479625b2d923ad98a10-09855208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2d923adff8b6_27640943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2d923adff8b6_27640943')) {function content_5b2d923adff8b6_27640943($_smarty_tpl) {?>
<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
payu.css" rel="stylesheet" type="text/css">
<div class="row">
	<div class="col-xs-12 col-md-6">
		<p class="payment_module">
			<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
validation.php" class="link-redirect">                            
				<?php echo smartyTranslate(array('s'=>'Pay by PayU','mod'=>'payulatam'),$_smarty_tpl);?>

                                <img src="http://www.payulatam.com/logos/logo.php?l=121&c=56d9bb0300226" alt="PayU Latam" border="0" />
			</a>
		</p>
	</div>
</div><?php }} ?>
