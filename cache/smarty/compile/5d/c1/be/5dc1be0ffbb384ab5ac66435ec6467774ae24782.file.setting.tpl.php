<?php /* Smarty version Smarty-3.1.19, created on 2018-06-07 14:38:04
         compiled from "/var/www/html/lkstore/modules/placetopaypayment//views/templates/front/setting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14029206525b19899c2b5ea1-39959912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dc1be0ffbb384ab5ac66435ec6467774ae24782' => 
    array (
      0 => '/var/www/html/lkstore/modules/placetopaypayment//views/templates/front/setting.tpl',
      1 => 1520828272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14029206525b19899c2b5ea1-39959912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'version' => 0,
    'is_set_credentials' => 0,
    'url_notification' => 0,
    'schedule_task' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b19899c33f3d8_72402103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b19899c33f3d8_72402103')) {function content_5b19899c33f3d8_72402103($_smarty_tpl) {?><div class="panel">
    <div class="alert alert-info">
        <img src="https://www.placetopay.com/images/providers/placetopay.full.png"
             style="float:left; margin-right:15px;" alt="PlacetoPay" height="48">
        <p>
            <strong>
                <?php echo smartyTranslate(array('s'=>'This module allows you to accept payments by PlacetoPay.','mod'=>'placetopaypayment'),$_smarty_tpl);?>

            </strong>
        </p>
        <p>
            Vr: <?php echo $_smarty_tpl->tpl_vars['version']->value;?>

        </p>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['is_set_credentials']->value) {?>
        <div class="alert alert-warning">
            <p>
                <?php echo smartyTranslate(array('s'=>'You need to configure your PlacetoPay account before using this module.','mod'=>'placetopaypayment'),$_smarty_tpl);?>

            </p>
        </div>
    <?php }?>

    <div class="panel-body">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-lg-3">
                    <?php echo smartyTranslate(array('s'=>'URL Notification','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                </label>
                <div class="col-lg-9">
                    <span style="font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['url_notification']->value;?>
</span>
                    <p class="help-block">
                        <?php echo smartyTranslate(array('s'=>'Return URL where PlacetoPay will send status payment\'s  to Prestashop','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-3">
                    <?php echo smartyTranslate(array('s'=>'Path schudele task','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                </label>
                <div class="col-lg-9">
                    <span style="font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['schedule_task']->value;?>
</span>
                    <p class="help-block">
                        <?php echo smartyTranslate(array('s'=>'Set this task to validate payments with pending status in your site','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }} ?>
