{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2015 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApCategoryImage -->
{function name=menu level=0}
<ul class="level{$level|intval}">
{foreach $data as $category}
	{if isset($category.children) && is_array($category.children)}
	<li class="cate_{$category.id_category|intval}" >
		<a href="{$link->getCategoryLink($category.id_category, $category.link_rewrite)|escape:'html':'UTF-8'}">
			<span class="cate_content">
				<span class="cover-img">
					{if isset($category.image)}
					<img src='{$category["image"]|escape:'html':'UTF-8'}' alt='{$category["name"]|escape:'html':'UTF-8'}' 
						 {if $formAtts.showicons == 0 || ($level gt 0 && $formAtts.showicons == 2)} style="display:none"{/if}/>
					{/if}
				</span>
				<span class="cat_name">{$category.name|escape:'html':'UTF-8'}</span>
			</span>
		</a>
		<div class="cate-meta">
	 		<div class="nbproducts">
				<span id="leo-cat-{$category.id_category}" style="display:none" class="leo-qty badge"></span>
				<span style="display:none" class="label-qty">{l s='items' mod='appagebuilder'}</span>
			</div>

			{menu data=$category.children level=$level+1} 	
		</div>
	</li>
	{else}
	<li class="cate_{$category.id_category|intval}">
		<a href="{$link->getCategoryLink($category.id_category, $category.link_rewrite)|escape:'html':'UTF-8'}">
			<span class="cate_content">
				<span class="cover-img">
					{if isset($category.image)}
					<img src='{$category["image"]|escape:'html':'UTF-8'}' alt='{$category["name"]|escape:'html':'UTF-8'}' 
						 {if $formAtts.showicons == 0 || ($level gt 0 && $formAtts.showicons == 2)} style="display:none"{/if}/>
					{/if}
				</span>
				<label>{$category.name|escape:'html':'UTF-8'}</label>
			</span>
			<div class="nbproducts">
					<span id="leo-cat-{$category.id_category}" class="leo-qty badge" data-str="{l s=' item(s)' mod='appagebuilder'}"></span>
			</div>
		</a>
	</li>
	{/if}
{/foreach}
</ul>
{/function}
<div class="block-table">
	{if isset($categories)}
	<div class="widget-category_image block block-table-cell">
		{($apLiveEdit)?$apLiveEdit:''}{* HTML form , no escape necessary *}
		{if isset($formAtts.title) && !empty($formAtts.title)}
		<h4 class="title_block">
			{$formAtts.title|rtrim}
		</h4>
		{/if}
		<div class="block_content">
			{foreach from = $categories key=key item =cate}
				{menu data=$cate}
			{/foreach}
			<div id="view_all_wapper_{$random|escape:'html':'UTF-8'}" style="display:none">
				<span class ="view_all"><a href="javascript:void(0)">{l s='View all' mod='appagebuilder'}</a></span>
			</div> 
		</div>
		{($apLiveEditEnd)?$apLiveEditEnd:''}{* HTML form , no escape necessary *}
	</div>
	{/if}
</div>
<script type="text/javascript">
{literal} 
	jQuery(document).ready(function() {
		var limit = {/literal}{$formAtts.limit|intval}{literal};
		var level = {/literal}{$formAtts.cate_depth|intval}{literal};
		$("ul.level0").each(function(){
			var element = $(this).find("ul.level" + level + " >li").length;
			var count = 0;
			$(this).find("ul.level" + level + " >li").each(function(){
			count = count + 1;
			if(count > limit){
				$(this).remove();
			}

			});

			if(element > limit){
				view = $(".view_all","#view_all_wapper_{/literal}{$random|escape:'html':'UTF-8'}"){literal}.clone(1);
				view.appendTo($(this).find("ul.level" + level));
				var href = $(this).find('a:first').attr('href');
				$("a",view).attr("href", href);
			}
		})
	});
{/literal}
</script>