<?php /* Smarty version Smarty-3.1.19, created on 2018-06-18 15:03:59
         compiled from "/var/www/html/lkstore/modules/payulatam/views/templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14456493675b28102fa57ca7-85490420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6563d1f9a54e2fd99d5252b96f65c4d8f3cb745a' => 
    array (
      0 => '/var/www/html/lkstore/modules/payulatam/views/templates/admin/admin.tpl',
      1 => 1529350366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14456493675b28102fa57ca7-85490420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'tracking' => 0,
    'img' => 0,
    'tab' => 0,
    'div' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28102fa8efd6_10775485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28102fa8efd6_10775485')) {function content_5b28102fa8efd6_10775485($_smarty_tpl) {?>

<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
normalize.css" rel="stylesheet" type="text/css">
<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
payu.css" rel="stylesheet" type="text/css">
<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tracking']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="tracking" class="md-tracking"/>
<div class="ctwrapper">
	<div class="header_payu clearfix">
		<div class="left-container">
			<div class="md-copy_payu">
				<span class="logo-py"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
logo.png" alt="logo"></span>
				<?php echo smartyTranslate(array('s'=>'Accept local payments','mod'=>'payulatam'),$_smarty_tpl);?>
 <span class="tx-blue-ligth"><?php echo smartyTranslate(array('s'=>'on your website','mod'=>'payulatam'),$_smarty_tpl);?>
</span>
			</div>
			<a href="https://secure.payulatam.com/online_account/create_account.zul" class="md-btn button_en button_payu"><?php echo smartyTranslate(array('s'=>'Open your PayU Account','mod'=>'payulatam'),$_smarty_tpl);?>
 </a>
		</div>
	</div>
	<div class="icons">
		<div class="md-icos_payu clearfix">
			<ul>
				<li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo smartyTranslate(array('s'=>'ico-credito.png','mod'=>'payulatam'),$_smarty_tpl);?>
" alt="ico1"></li>
				<li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo smartyTranslate(array('s'=>'ico-pago.png','mod'=>'payulatam'),$_smarty_tpl);?>
" alt="ico2"></li>
				<li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo smartyTranslate(array('s'=>'ico-trans.png','mod'=>'payulatam'),$_smarty_tpl);?>
" alt="ico3"></li>
			</ul>
		</div>
	</div>

	<div class="section_payu">
		<div class="container_payu clearfix">
			<div class="md-wrapper_payu clearfix">
				<div class="md-tl_payu md-col_payu">
					<h2>Pay<span class="tx-blue-ligth">U</span> <?php echo smartyTranslate(array('s'=>'solutions will help you to','mod'=>'payulatam'),$_smarty_tpl);?>
 <span class="tx-blue-ligth"><?php echo smartyTranslate(array('s'=>'increase your online sales','mod'=>'payulatam'),$_smarty_tpl);?>
</span></h2>
					<p><?php echo smartyTranslate(array('s'=>'PayU is the leading online payment service provider in Latin America with more than 20,000 clients. With more than 10 years of experience in the market, PayU has the most complete anti-fraud system in the region and offers the New Generation of Payment Solutions that allows its merchants to accept more than 70 payment options in Argentina, Brazil, Chile, Colombia, Mexico, Panama and Peru.','mod'=>'payulatam'),$_smarty_tpl);?>
</p>
				</div>
				<div class="payu_image">
					<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo smartyTranslate(array('s'=>'graphic_prestashop.png','mod'=>'payulatam'),$_smarty_tpl);?>
" width="408" height="231" alt=" ">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="container_payu clearfix">
			<div class="md-col_payu benefits">
				<h3><?php echo smartyTranslate(array('s'=>'Benefits','mod'=>'payulatam'),$_smarty_tpl);?>
</h3>
				<ul>
					<li><?php echo smartyTranslate(array('s'=>'Accept different payment options in one platform: cash payments, credit cards (local and international) and bank transfers.','mod'=>'payulatam'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'With just one integration, you can receive payments in 7 countries in Latin America in local currency.','mod'=>'payulatam'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'Take advantage of the multi-language and multi-currency platform.','mod'=>'payulatam'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'Utilize the PayU Checkout, which has been optimized to increase the number of completed transactions.','mod'=>'payulatam'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'Avoid large investments in infrastructure, technological developments, maintenance and management of the payment system.','mod'=>'payulatam'),$_smarty_tpl);?>
</li>
				</ul>
			</div>
			<div class="md-col_payu security">
				<h3><?php echo smartyTranslate(array('s'=>'Security and Recognition','mod'=>'payulatam'),$_smarty_tpl);?>
</h3>
				<ul>
					<li><b><?php echo smartyTranslate(array('s'=>'Anti-Fraud Control:','mod'=>'payulatam'),$_smarty_tpl);?>
</b> <?php echo smartyTranslate(array('s'=>'The PayU Anti-Fraud system automatically validates transactions and, when necessary, expert analysts manually verify transactions to minimize fraudulent transactions.','mod'=>'payulatam'),$_smarty_tpl);?>
</li>
					<li><b><?php echo smartyTranslate(array('s'=>'PCI DSS Certification:','mod'=>'payulatam'),$_smarty_tpl);?>
</b> <?php echo smartyTranslate(array('s'=>'With this certification, PayU adheres to its standards and ensures the cardholder will have the highest level of security, confidentiality and integrity.','mod'=>'payulatam'),$_smarty_tpl);?>
</li>
					<li><b><?php echo smartyTranslate(array('s'=>'Veracode Recognition:','mod'=>'payulatam'),$_smarty_tpl);?>
</b> <?php echo smartyTranslate(array('s'=>'PayU is the only Latin American company recognized for its high security standards in the development of its transactional platform and associated services.','mod'=>'payulatam'),$_smarty_tpl);?>
</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="container_payu clearfix md_wrapper_gray">
		<?php  $_smarty_tpl->tpl_vars['div'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['div']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['div']->key => $_smarty_tpl->tpl_vars['div']->value) {
$_smarty_tpl->tpl_vars['div']->_loop = true;
?>
			<div id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['div']->value['tab'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="<?php echo $_smarty_tpl->tpl_vars['div']->value['style'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['div']->value['content'];?>

			</div>
		<?php } ?>
		<div class="clear"></div>
	</div>
</div><?php }} ?>
