<script type="text/javascript">
/* Blockusreinfo */
	
$(document).ready( function(){
	if( $(window).width() < 991 ){
			 $(".header_user_info").addClass('popup-over');
			 $(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over');
			 $(".header_user_info .links").removeClass('popup-content');
		}
	$(window).resize(function() {
		if( $(window).width() < 991 ){
			 $(".header_user_info").addClass('popup-over');
			 $(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over');
			 $(".header_user_info .links").removeClass('popup-content');
		}
	});
});
</script>
<!-- Block user information module NAV  -->
<div class="header_user_info pull-right e-translate-top">
	<div data-toggle="dropdown" class="popup-title"><a href="#"><i class="fa fa-cog"></i><span>{l s='Top links' mod='blockuserinfo'} </span><i class="fa fa-angle-down"></i></a></div>	
		<ul class="links">
		{if $is_logged}
			<li><a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
				<i class="fa fa-unlock-alt"></i>{l s='Sign out' mod='blockuserinfo'}
			</a></li>
		{else}
			<li>
				<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Login to your customer account' mod='blockuserinfo'}">
					<i class="fa fa-unlock-alt"></i>{l s='Sign in' mod='blockuserinfo'}
				</a>
			</li>
		{/if}

		<li>
			<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='My account' mod='blockuserinfo'}"><i class="fa fa-user"></i>{l s='My Account' mod='blockuserinfo'}</a>
		</li>

		<li>
			<a class="ap-btn-wishlist" id="wishlist-total" href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|addslashes}" title="{l s='My wishlists' mod='blockuserinfo'}">
			
				<i class="fa fa-heart"></i>{l s='Wish List' mod='blockuserinfo'}<span class="ap-total-wishlist ap-total"></span>
			</a>
		</li>
		<li>
			<a class="ap-btn-compare" href="{$link->getPageLink('products-comparison')|escape:'html':'UTF-8'}" title="{l s='Compare' mod='blockuserinfo'}" rel="nofollow">
				
				<i class="fa fa-compress"></i>{l s='Compare' mod='blockuserinfo'}<span class="ap-total-compare ap-total"></span>
			</a>
		</li>

		{if $is_logged}
			<li>
				<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow">
					<i class="fa fa-user"></i>
					<span>{l s='Hello' mod='blockuserinfo'}, {$cookie->customer_firstname} {$cookie->customer_lastname}</span>
				</a>
			</li>
		{/if}
		
		</ul>
	
</div>	