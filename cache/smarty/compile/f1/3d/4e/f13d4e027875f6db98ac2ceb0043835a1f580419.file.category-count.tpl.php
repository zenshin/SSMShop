<?php /* Smarty version Smarty-3.1.19, created on 2017-10-03 22:33:18
         compiled from "/Applications/MAMP/htdocs/SSMShop/themes/ssm/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212477911959d4021eb41629-82362161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f13d4e027875f6db98ac2ceb0043835a1f580419' => 
    array (
      0 => '/Applications/MAMP/htdocs/SSMShop/themes/ssm/category-count.tpl',
      1 => 1501662939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212477911959d4021eb41629-82362161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d4021ebbb830_80672858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d4021ebbb830_80672858')) {function content_59d4021ebbb830_80672858($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
