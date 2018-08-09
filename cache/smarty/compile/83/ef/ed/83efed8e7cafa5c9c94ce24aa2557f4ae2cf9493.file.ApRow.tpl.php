<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:27:24
         compiled from "/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/ApRow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1841151025b68af2cba85b8-80102455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83efed8e7cafa5c9c94ce24aa2557f4ae2cf9493' => 
    array (
      0 => '/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/ApRow.tpl',
      1 => 1527000190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1841151025b68af2cba85b8-80102455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68af2cc28496_98728208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68af2cc28496_98728208')) {function content_5b68af2cc28496_98728208($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['container'])&&$_smarty_tpl->tpl_vars['formAtts']->value['container']) {?>
<div class="wrapper" <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_config'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_config']=="fullwidth"&&isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_data']) {?>style="background:<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_data'];?>
"<?php }?>
     <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['parallax'])&&$_smarty_tpl->tpl_vars['formAtts']->value['parallax']) {?><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['parallax'];?>
<?php }?>>
	 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_config'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_config']=="fullwidth") {?>
        <?php $_smarty_tpl->createLocalArrayVariable('formAtts', null, 0);
$_smarty_tpl->tpl_vars['formAtts']->value['bg_data'] = '';?>
        <?php $_smarty_tpl->createLocalArrayVariable('formAtts', null, 0);
$_smarty_tpl->tpl_vars['formAtts']->value['parallax'] = '';?>
    <?php }?>
<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['container'], ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>
    <div<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])&&$_smarty_tpl->tpl_vars['formAtts']->value['id']) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
        class="<?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : htmlspecialchars('', ENT_QUOTES, 'UTF-8', true);?>
<?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])&&$_smarty_tpl->tpl_vars['formAtts']->value['animation']!='none' ? ' has-animation' : '';?>
 <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_class'];?>
"
	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])&&$_smarty_tpl->tpl_vars['formAtts']->value['animation']!='none') {?> data-animation="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['animation'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay']!='') {?> data-animation-delay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'], ENT_QUOTES, 'UTF-8', true);?>
" <?php }?><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_data']) {?>data-bg="<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_data'];?>
"<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['parallax'])&&$_smarty_tpl->tpl_vars['formAtts']->value['parallax']) {?><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['parallax'];?>
<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['css_style'])&&$_smarty_tpl->tpl_vars['formAtts']->value['css_style']) {?><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['css_style'];?>
<?php }?>
        >
        <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_video'];?>

        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>
</h4>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html'])) {?>
            <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['content_html'];?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

        <?php }?>
    </div>
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['container'])&&$_smarty_tpl->tpl_vars['formAtts']->value['container']) {?>
</div>
</div>
<?php }?><?php }} ?>
