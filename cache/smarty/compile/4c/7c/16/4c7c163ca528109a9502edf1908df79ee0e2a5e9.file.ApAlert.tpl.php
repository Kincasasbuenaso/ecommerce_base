<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 17:05:31
         compiled from "/var/www/html/lkstore/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApAlert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7584886115b07372b5a53b9-09178257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c7c163ca528109a9502edf1908df79ee0e2a5e9' => 
    array (
      0 => '/var/www/html/lkstore/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApAlert.tpl',
      1 => 1527000191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7584886115b07372b5a53b9-09178257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apInfo' => 0,
    'formAtts' => 0,
    'moduleDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07372b616e41_13729468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07372b616e41_13729468')) {function content_5b07372b616e41_13729468($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApAlert -->
<div <?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>id="default_widget"<?php }?> class="widget-row clearfix<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'])) {?> widget-icon<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)&&isset($_smarty_tpl->tpl_vars['formAtts']->value['form_id'])&&$_smarty_tpl->tpl_vars['formAtts']->value['form_id']) {?>
	<a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
"></a>
	<?php }?>
    <div class="widget-controll-top pull-right">
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Drag to sort Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action waction-drag label-tooltip"><i class="icon-move"></i> </a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Disable or Enable Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-status<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?> label-tooltip"><i class="icon-ok"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Edit Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-edit label-tooltip" <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><i class="icon-pencil"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Duplicate Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-delete label-tooltip"><i class="icon-trash"></i></a>
    </div>
    <div class="widget-content">
        <img class="w-img" width="16" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['moduleDir']->value, ENT_QUOTES, 'UTF-8', true);?>
appagebuilder/logo.gif" title="<?php echo smartyTranslate(array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
"/>
        <i class="icon w-icon<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)&&isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'])) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"></i>
        <a href="javascript:void(0);" title="" class="widget-title"><?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?><?php echo htmlspecialchars(rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
 - <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></a>
    </div>
</div><?php }} ?>
