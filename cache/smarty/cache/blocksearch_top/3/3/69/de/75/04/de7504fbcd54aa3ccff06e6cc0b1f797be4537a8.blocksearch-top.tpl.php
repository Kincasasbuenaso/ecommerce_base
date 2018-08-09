<?php /*%%SmartyHeaderCode:3692225075ae2688b008f27-37563573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de7504fbcd54aa3ccff06e6cc0b1f797be4537a8' => 
    array (
      0 => '/var/www/html/lkstore/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1517264432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3692225075ae2688b008f27-37563573',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5af9b06a665332_67704720',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af9b06a665332_67704720')) {function content_5af9b06a665332_67704720($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//lkstore.localhost.com/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
