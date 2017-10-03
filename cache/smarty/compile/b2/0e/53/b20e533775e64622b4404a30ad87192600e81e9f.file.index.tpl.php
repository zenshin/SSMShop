<?php /* Smarty version Smarty-3.1.19, created on 2017-10-03 20:21:44
         compiled from "/Applications/MAMP/htdocs/SSMShop/themes/ssm/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160471240359d3e3488693a6-90245916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b20e533775e64622b4404a30ad87192600e81e9f' => 
    array (
      0 => '/Applications/MAMP/htdocs/SSMShop/themes/ssm/index.tpl',
      1 => 1501772909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160471240359d3e3488693a6-90245916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME' => 0,
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d3e3488acf44_76209831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d3e3488acf44_76209831')) {function content_59d3e3488acf44_76209831($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php }} ?>
