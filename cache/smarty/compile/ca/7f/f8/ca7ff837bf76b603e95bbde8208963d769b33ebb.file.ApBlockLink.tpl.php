<?php /* Smarty version Smarty-3.1.19, created on 2018-08-06 15:27:24
         compiled from "/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/footer_links/ApBlockLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14852287195b68af2cdde532-46875265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7ff837bf76b603e95bbde8208963d769b33ebb' => 
    array (
      0 => '/var/www/html/lkstore/themes/leo_monica/modules/appagebuilder/views/templates/hook/footer_links/ApBlockLink.tpl',
      1 => 1527000190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14852287195b68af2cdde532-46875265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'formAtts' => 0,
    'item' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b68af2cdf3678_26243292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68af2cdf3678_26243292')) {function content_5b68af2cdf3678_26243292($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockLink -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value;?>



<div id="blockLink-<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['form_id'];?>
" class="ApBlockLink">
    <div class="block footer-block">
        <h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['name'];?>
</h4>
        <ul class="toggle-footer list-group bullet">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formAtts']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['title']&&$_smarty_tpl->tpl_vars['item']->value['link']) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            <?php }?>
        <?php } ?>
        </ul>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value;?>
<?php }} ?>
