<?php /*%%SmartyHeaderCode:5044430515ae2688dbb2ee5-34755874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cdd4e38af0d20795939955bf7690ca7cec91489' => 
    array (
      0 => '/var/www/html/lkstore/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1517264432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5044430515ae2688dbb2ee5-34755874',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae2688dd730e3_45961986',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae2688dd730e3_45961986')) {function content_5ae2688dd730e3_45961986($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://lkstore.localhost.com/index.php?controller=my-account" title="Administrar mi cuenta de cliente" rel="nofollow">Mi cuenta</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://lkstore.localhost.com/index.php?controller=history" title="Mis pedidos" rel="nofollow">Mis pedidos</a></li>
						<li><a href="http://lkstore.localhost.com/index.php?controller=order-slip" title="Mis facturas por abono" rel="nofollow">Mis facturas por abono</a></li>
			<li><a href="http://lkstore.localhost.com/index.php?controller=addresses" title="Mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://lkstore.localhost.com/index.php?controller=identity" title="Administrar mis datos personales" rel="nofollow">Mis datos personales</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
