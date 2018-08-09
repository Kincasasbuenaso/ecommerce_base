<?php /* Smarty version Smarty-3.1.19, created on 2018-06-22 19:26:26
         compiled from "/var/www/html/lkstore/lkadmin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11115283725b2d93b2a572b8-42473712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13394de733565c6a63ff4f728fc59a1be31133d7' => 
    array (
      0 => '/var/www/html/lkstore/lkadmin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1517264432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11115283725b2d93b2a572b8-42473712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2d93b2a5ea52_74750912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2d93b2a5ea52_74750912')) {function content_5b2d93b2a5ea52_74750912($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
