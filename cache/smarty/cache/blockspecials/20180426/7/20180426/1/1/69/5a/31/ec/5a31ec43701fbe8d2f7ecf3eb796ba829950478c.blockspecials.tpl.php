<?php /*%%SmartyHeaderCode:10745874505ae26952c82778-33792120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a31ec43701fbe8d2f7ecf3eb796ba829950478c' => 
    array (
      0 => '/var/www/html/lkstore/themes/default-bootstrap/modules/blockspecials/blockspecials.tpl',
      1 => 1517264432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10745874505ae26952c82778-33792120',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae26952d05283_95499534',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae26952d05283_95499534')) {function content_5ae26952d05283_95499534($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://lkstore.localhost.com/index.php?controller=prices-drop" title="Promociones especiales">
            Promociones especiales
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://lkstore.localhost.com/index.php?id_product=7&amp;controller=product">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://lkstore.localhost.com/img/p/2/0/20-small_default.jpg" 
                    alt="" 
                    title="Vestido de gasa estampado" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://lkstore.localhost.com/index.php?id_product=7&amp;controller=product" title="Vestido de gasa estampado">
                            Vestido de gasa estampado
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Vestido sin mangas hasta la rodilla,...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    19,52 $                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    24,40 $                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://lkstore.localhost.com/index.php?controller=prices-drop" 
            title="Todas las promociones especiales">
                <span>Todas las promociones especiales<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
