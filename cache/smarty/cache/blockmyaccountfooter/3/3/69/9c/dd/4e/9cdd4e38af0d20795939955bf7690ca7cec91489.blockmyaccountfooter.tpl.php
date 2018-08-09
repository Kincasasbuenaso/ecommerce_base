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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5af9b06b7346b3_01355902',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af9b06b7346b3_01355902')) {function content_5af9b06b7346b3_01355902($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://lkstore.localhost.com/index.php?controller=my-account" title="Administrar mi cuenta de cliente" rel="nofollow">Mi cuenta</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://lkstore.localhost.com/index.php?controller=history" title="Mis pedidos" rel="nofollow">Mis pedidos</a></li>
						<li><a href="http://lkstore.localhost.com/index.php?controller=order-slip" title="Mis facturas por abono" rel="nofollow">Mis facturas por abono</a></li>
			<li><a href="http://lkstore.localhost.com/index.php?controller=addresses" title="Mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://lkstore.localhost.com/index.php?controller=identity" title="Administrar mis datos personales" rel="nofollow">Mis datos personales</a></li>
						
            <li><a href="http://lkstore.localhost.com/index.php?mylogout" title="Cerrar sesión" rel="nofollow">Cerrar sesión</a></li>		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
