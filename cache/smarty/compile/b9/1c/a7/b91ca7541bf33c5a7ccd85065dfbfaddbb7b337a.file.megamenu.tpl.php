<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:27:24
         compiled from "/var/www/html/lkstore/themes/leo_monica/modules/leobootstrapmenu/views/templates/hook/megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5630505715b68af2c6ec2e3-44685407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b91ca7541bf33c5a7ccd85065dfbfaddbb7b337a' => 
    array (
      0 => '/var/www/html/lkstore/themes/leo_monica/modules/leobootstrapmenu/views/templates/hook/megamenu.tpl',
      1 => 1527000190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5630505715b68af2c6ec2e3-44685407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'boostrapmenu' => 0,
    'current_link' => 0,
    'show_cavas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68af2c7072a6_88090059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68af2c7072a6_88090059')) {function content_5b68af2c7072a6_88090059($_smarty_tpl) {?>
<div id="leo-megamenu" class="clearfix">
<nav id="cavas_menu" class="sf-contener leo-megamenu">
    <div role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle btn-outline-inverse" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Toggle navigation','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</span>
                <span class="fa fa-bars"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="leo-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
            <?php echo $_smarty_tpl->tpl_vars['boostrapmenu']->value;?>

        </div>
    </div>
</nav>
</div>

<script type="text/javascript">
// <![CDATA[
	var current_link = "<?php echo $_smarty_tpl->tpl_vars['current_link']->value;?>
";
	//alert(request);
    var currentURL = window.location;
    currentURL = String(currentURL);
    currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
    current_link = current_link.replace("https://","").replace("http://","").replace("www.","");
    isHomeMenu = 0;
    if($("body").attr("id")=="index") isHomeMenu = 1;
    $(".megamenu > li > a").each(function() {
        menuURL = $(this).attr("href").replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
		if( (currentURL == menuURL) || (currentURL.replace(current_link,"") == menuURL) || isHomeMenu){
			$(this).parent().addClass("active");
            return false;
		}
    });
// ]]>
</script>
<?php if ($_smarty_tpl->tpl_vars['show_cavas']->value&&$_smarty_tpl->tpl_vars['show_cavas']->value==1) {?>
<script type="text/javascript">
    (function($) {
        $.fn.OffCavasmenu = function(opts) {
            // default configuration
            var config = $.extend({}, {
                opt1: null,
                text_warning_select: "<?php echo smartyTranslate(array('s'=>'Please select One to remove?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
",
                text_confirm_remove: "<?php echo smartyTranslate(array('s'=>'Are you sure to remove footer row?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
",
                JSON: null
            }, opts);
            // main function
            // initialize every element
            this.each(function() {
                var $btn = $('#cavas_menu .navbar-toggle');
                var $nav = null;
                if (!$btn.length)
                    return;
                var $nav = $('<section id="off-canvas-nav" class="leo-megamenu"><nav class="offcanvas-mainnav"><div id="off-canvas-button"><span class="off-canvas-nav"></span><?php echo smartyTranslate(array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</div></nav></section>');
                var $menucontent = $($btn.data('target')).find('.megamenu').clone();
                $("body").append($nav);
                $("#off-canvas-nav .offcanvas-mainnav").append($menucontent);
                $("#off-canvas-nav .offcanvas-mainnav").css('min-height',$(window).height()+30+"px");
                $("html").addClass ("off-canvas");
                $("#off-canvas-button").click( function(){
                        $btn.click();	
                } );
                $btn.toggle(function() {
                    $("body").removeClass("off-canvas-inactive").addClass("off-canvas-active");
                }, function() {
                    $("body").removeClass("off-canvas-active").addClass("off-canvas-inactive");
                });
            });
            return this;
        }
    })(jQuery);
    $(document).ready(function() {
        jQuery("#cavas_menu").OffCavasmenu();
        $('#cavas_menu .navbar-toggle').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 0);
			if ($('html').hasClass('fp-enabled')) {
				if ($('body').hasClass('off-canvas-active'))
				{									
					$.fn.fullpage.pau();					
				}
				else
				{						
					$.fn.fullpage.con();					
				};
			};
            return false;
        });
    });
    $(document.body).on('click', '[data-toggle="dropdown"]' ,function(){
        if(!$(this).parent().hasClass('open') && this.href && this.href != '#'){
            window.location.href = this.href;
        }
    });
</script>
<?php } else { ?>
<script type="text/javascript">
        $(document).ready(function() {
            if($(window).width() <= 767){
                $('#cavas_menu').addClass("off-canvas-type");
            }
            $(document.body).on('click', '[data-toggle="dropdown"]' ,function(){
                if(!$(this).parent().hasClass('open') && this.href && this.href != '#' && !$('#cavas_menu').hasClass('off-canvas-type')){
                    window.location.href = this.href;
                }
            });
        });
        
        $(window).resize(function() {
            if( $(window).width() <= 767 ){
                 $('#cavas_menu').addClass("off-canvas-type");  
            }
            else {
                $('#cavas_menu').removeClass("off-canvas-type");
            }
        });
</script>
<?php }?><?php }} ?>
