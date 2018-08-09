<?php /*%%SmartyHeaderCode:17394283405ae2695300dbd7-31353176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0f4d4c801d708cf6b339d55a1c797817e257e9b' => 
    array (
      0 => '/var/www/html/lkstore/themes/default-bootstrap/modules/blockstore/blockstore.tpl',
      1 => 1517264432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17394283405ae2695300dbd7-31353176',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae269530ac4e7_72126742',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae269530ac4e7_72126742')) {function content_5ae269530ac4e7_72126742($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://lkstore.localhost.com/index.php?controller=stores" title="Nuestras tiendas">
			Nuestras tiendas
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://lkstore.localhost.com/index.php?controller=stores" title="Nuestras tiendas">
				<img class="img-responsive" src="http://lkstore.localhost.com/modules/blockstore/store.jpg" alt="Nuestras tiendas" />
			</a>
		</p>
				<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://lkstore.localhost.com/index.php?controller=stores" 
			title="Nuestras tiendas">
				<span>Descubra nuestras tiendas<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
