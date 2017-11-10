<?php /* Smarty version Smarty-3.1.19, created on 2017-10-29 13:14:46
         compiled from "/Applications/MAMP/htdocs/SSMShop/themes/ssm/modules/blockpaymentlogo/blockpaymentlogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82375964859f5d446442314-09966527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017058c66b20e3fe845f85e000b9f71816bd01e4' => 
    array (
      0 => '/Applications/MAMP/htdocs/SSMShop/themes/ssm/modules/blockpaymentlogo/blockpaymentlogo.tpl',
      1 => 1503672004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82375964859f5d446442314-09966527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_payement_logo' => 0,
    'link' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f5d446461fa9_69353428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f5d446461fa9_69353428')) {function content_59f5d446461fa9_69353428($_smarty_tpl) {?>

<!-- Block payment logo module -->
<div id="paiement_logo_block_left" class="paiement_logo_block">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['cms_payement_logo']->value), ENT_QUOTES, 'UTF-8', true);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo_paiement_amex.png" alt="american express" width="53" height="41" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo_paiement_visa.png" alt="visa" width="53" height="41" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo_paiement_mastercard.png" alt="mastercard" width="52" height="41" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo_paiement_paypal.png" alt="paypal" width="81" height="41" />
	</a>
</div>
<!-- /Block payment logo module --><?php }} ?>
