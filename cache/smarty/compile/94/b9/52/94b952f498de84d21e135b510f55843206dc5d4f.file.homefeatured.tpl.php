<?php /* Smarty version Smarty-3.1.19, created on 2017-10-03 20:21:43
         compiled from "/Applications/MAMP/htdocs/SSMShop/themes/ssm/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6082194059d3e347ca8a08-65073256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94b952f498de84d21e135b510f55843206dc5d4f' => 
    array (
      0 => '/Applications/MAMP/htdocs/SSMShop/themes/ssm/modules/homefeatured/homefeatured.tpl',
      1 => 1501662939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6082194059d3e347ca8a08-65073256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d3e347cced61_22638848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d3e347cced61_22638848')) {function content_59d3e347cced61_22638848($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
