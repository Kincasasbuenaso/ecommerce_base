<?php /* Smarty version Smarty-3.1.19, created on 2018-06-18 15:03:59
         compiled from "/var/www/html/lkstore/modules/payulatam/views/templates/admin/help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10265139755b28102f998c91-41081852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a096cc0f6f3697298772a728b6b4c4c10845eaa' => 
    array (
      0 => '/var/www/html/lkstore/modules/payulatam/views/templates/admin/help.tpl',
      1 => 1529350366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10265139755b28102f998c91-41081852',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28102f9ead33_33751797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28102f9ead33_33751797')) {function content_5b28102f9ead33_33751797($_smarty_tpl) {?>
<h3><?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'payulatam'),$_smarty_tpl);?>
</h3>
<p><?php echo smartyTranslate(array('s'=>'Once you have created your PayU account:','mod'=>'payulatam'),$_smarty_tpl);?>
</p>
<ol>
	<li><span class="steps"><?php echo smartyTranslate(array('s'=>'Enter the','mod'=>'payulatam'),$_smarty_tpl);?>
 <a href="https://secure.payulatam.com/" target="new"><?php echo smartyTranslate(array('s'=>'Administrative Module','mod'=>'payulatam'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'and click on the "Configuration" tab','mod'=>'payulatam'),$_smarty_tpl);?>
</span></li>
	<li><span class="steps"><?php echo smartyTranslate(array('s'=>'You will find the API Key and Merchant idea in the section "Technical Information"','mod'=>'payulatam'),$_smarty_tpl);?>
</span></li>
	<li><span class="steps"><?php echo smartyTranslate(array('s'=>'Then, go the "Settings and Credentials" in the Prestashop - PayU Module.','mod'=>'payulatam'),$_smarty_tpl);?>
</span></li>
	<li><span class="steps"><?php echo smartyTranslate(array('s'=>'Fill in the necessary information in the page and then save it.','mod'=>'payulatam'),$_smarty_tpl);?>
</span></li>
</ol>	
<div class="advice_payu">
	<h4><?php echo smartyTranslate(array('s'=>'Remember that:','mod'=>'payulatam'),$_smarty_tpl);?>
</h4>
	<p>
		<?php echo smartyTranslate(array('s'=>'You should disable the','mod'=>'payulatam'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'"Test Mode"','mod'=>'payulatam'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'in the PayU platform to process transactions. This is found in the section of "Configuration" and "Account configuration".','mod'=>'payulatam'),$_smarty_tpl);?>

	</p>
</div>
<?php }} ?>
