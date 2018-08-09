<?php /* Smarty version Smarty-3.1.19, created on 2018-06-18 14:39:23
         compiled from "/var/www/html/lkstore/modules/placetopaypayment//views/templates/hook_1_6/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20124610265b280a6b121ba3-73305662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb441353f3dcba58b85174729edc02a477b6e17d' => 
    array (
      0 => '/var/www/html/lkstore/modules/placetopaypayment//views/templates/hook_1_6/payment.tpl',
      1 => 1520828272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20124610265b280a6b121ba3-73305662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_url' => 0,
    'allow_payment' => 0,
    'has_pending' => 0,
    'last_order' => 0,
    'store_phone' => 0,
    'store_email' => 0,
    'last_authorization' => 0,
    'cifin_message' => 0,
    'site_name' => 0,
    'company_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b280a6b1b08a0_63723372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b280a6b1b08a0_63723372')) {function content_5b280a6b1b08a0_63723372($_smarty_tpl) {?><style type="text/css">
    p.payment_module a.placetopay:after {
        display: block;
        content: "\f054";
        position: absolute;
        right: 15px;
        margin-top: -11px;
        top: 50%;
        font-family: "FontAwesome";
        font-size: 25px;
        height: 22px;
        width: 14px;
        color: #777;
    }

    p.payment_module a.placetopay {
        background-color: #fbfbfb;
    }

    p.payment_module a.placetopay:hover {
        background-color: #f6f6f6;
    }

    p.payment_module a.placetopay {
        text-align: justify;
        padding-right: 90px;
    }

    p.payment_module a.placetopay {
        padding: 33px 40px 34px 20px;
    }
	.main{
		padding: 15px;
	}
</style>
<p class="payment_module">
    <a class="placetopay" href="<?php echo $_smarty_tpl->tpl_vars['payment_url']->value;?>
">
        <img src="https://static.placetopay.com/admin/custom/application-logo.svg" width="170px"
             alt="<?php echo smartyTranslate(array('s'=>'Pay with PlacetoPay','mod'=>'placetopaypayment'),$_smarty_tpl);?>
"/>

        <b><?php echo smartyTranslate(array('s'=>'Pay with PlacetoPay','mod'=>'placetopaypayment'),$_smarty_tpl);?>
</b>

        <span>
		<?php echo smartyTranslate(array('s'=>'(credit cards and debits account)','mod'=>'placetopaypayment'),$_smarty_tpl);?>

		</span>

        <br/>

        <?php if ($_smarty_tpl->tpl_vars['allow_payment']->value) {?>
            <?php echo smartyTranslate(array('s'=>'PlacetoPay secure web site will be displayed when you select this payment method.','mod'=>'placetopaypayment'),$_smarty_tpl);?>

            <br/>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['has_pending']->value) {?>
            <span class="main" style="background-color: <?php if ($_smarty_tpl->tpl_vars['allow_payment']->value) {?>#fcf8e3<?php } else { ?>#f2dede<?php }?>; display: inline-block">
				<span style="color: <?php if ($_smarty_tpl->tpl_vars['allow_payment']->value) {?>black<?php } else { ?>red<?php }?>;">
					<b>&gt;&gt; <?php echo smartyTranslate(array('s'=>'Warning','mod'=>'placetopaypayment'),$_smarty_tpl);?>
</b>
				</span>
				<br/>
                <?php echo smartyTranslate(array('s'=>'At this time your order','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                <b># <?php echo $_smarty_tpl->tpl_vars['last_order']->value;?>
</b>
                <?php echo smartyTranslate(array('s'=>'presents a checkout transaction which is PENDING to receive confirmation from your bank, please wait a few minutes and check back later to see if your payment was successfully confirmed.','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                <br/>
			<br/>
                <?php echo smartyTranslate(array('s'=>'For more information on the current state of your operation can contact our customer service line in','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                <b><?php echo $_smarty_tpl->tpl_vars['store_phone']->value;?>
</b>
                <?php echo smartyTranslate(array('s'=>'or send a email to','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                <b><?php echo $_smarty_tpl->tpl_vars['store_email']->value;?>
</b>
                <?php echo smartyTranslate(array('s'=>'and ask for the status of the transaction:','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                <b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['last_authorization']->value)===null||$tmp==='' ? "N/D" : $tmp);?>
</b>
		</span>
            <br/>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['cifin_message']->value&&$_smarty_tpl->tpl_vars['allow_payment']->value) {?>
            <br/>
			<span class="main" style="background-color: #d9edf7; display: inline-block">
			<small>
                <?php echo smartyTranslate(array('s'=>'Anyone who make a purchase on the site','mod'=>'placetopaypayment'),$_smarty_tpl);?>

			</small>

			<b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['site_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b>

			<small>
				<?php echo smartyTranslate(array('s'=>', acting freely and voluntarily consent to','mod'=>'placetopaypayment'),$_smarty_tpl);?>

			</small>

			<b><?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
</b>

			<small>
				<?php echo smartyTranslate(array('s'=>', through the service provider','mod'=>'placetopaypayment'),$_smarty_tpl);?>

			</small>

			<b><?php echo smartyTranslate(array('s'=>'EGM Ingeniería Sin Fronteras S.A.S','mod'=>'placetopaypayment'),$_smarty_tpl);?>
</b>

			<small>
				<?php echo smartyTranslate(array('s'=>' and / or ','mod'=>'placetopaypayment'),$_smarty_tpl);?>

			</small>

			<b><?php echo smartyTranslate(array('s'=>'PlacetoPay','mod'=>'placetopaypayment'),$_smarty_tpl);?>
</b>

			<small>
				<?php echo smartyTranslate(array('s'=>'to consult and ask for ','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                <?php echo smartyTranslate(array('s'=>'information from credit performance, financial , commercial and service to ','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                <?php echo smartyTranslate(array('s'=>'third parties even in countries of a similar nature to the information center ','mod'=>'placetopaypayment'),$_smarty_tpl);?>

			</small>

			<b><?php echo smartyTranslate(array('s'=>'TRANSUNION S.A','mod'=>'placetopaypayment'),$_smarty_tpl);?>
</b>

			<small>
				<?php echo smartyTranslate(array('s'=>', generating a ','mod'=>'placetopaypayment'),$_smarty_tpl);?>

                <u><?php echo smartyTranslate(array('s'=>'consultation trace.','mod'=>'placetopaypayment'),$_smarty_tpl);?>
</u>
			</small>
		</span>
        <?php }?>
    </a>
</p><?php }} ?>
