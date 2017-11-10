<?php /* Smarty version Smarty-3.1.19, created on 2017-10-29 13:14:38
         compiled from "/Applications/MAMP/htdocs/SSMShop/themes/ssm/rdv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48645481959f5d43e4f7237-05234517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1d117fc15aacb80af36382f9e9d4420cf15e20b' => 
    array (
      0 => '/Applications/MAMP/htdocs/SSMShop/themes/ssm/rdv.tpl',
      1 => 1509218063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48645481959f5d43e4f7237-05234517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmation' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'alreadySent' => 0,
    'request_uri' => 0,
    'customerThread' => 0,
    'firstname' => 0,
    'lastname' => 0,
    'email' => 0,
    'telephone' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f5d43e620ea6_73053166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f5d43e620ea6_73053166')) {function content_59f5d43e620ea6_73053166($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Appointments'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h1 class="page-heading bottom-indent">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./0appointments-trans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('s'=>"appointments"), 0);?>

</h1>
<h2><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./0appointments-trans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('s'=>"form-only"), 0);?>
</h2>

<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
<p class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Your message has been successfully sent to our team.'),$_smarty_tpl);?>
</p>
<ul class="footer_links clearfix">
    <li>
        <a class="btn btn-default button button-small" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>">
				<span>
					<i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

				</span>
			</a>
    </li>
</ul>
<?php } elseif (isset($_smarty_tpl->tpl_vars['alreadySent']->value)) {?>
<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Your message has already been sent.'),$_smarty_tpl);?>
</p>
<ul class="footer_links clearfix">
    <li>
        <a class="btn btn-default button button-small" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>">
				<span>
					<i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

				</span>
			</a>
    </li>
</ul>
<?php } else { ?> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post" class="contact-form-box" enctype="multipart/form-data">
    <fieldset>
        <h3 class="page-subheading col-xs-12 col-md-8 col-md-offset-2"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./0appointments-trans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('s'=>"form-intro"), 0);?>
</h3>
        <div class="clearfix">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <p class="form-group">
                    <label for="firstname"><?php echo smartyTranslate(array('s'=>'Firstname'),$_smarty_tpl);?>
</label> <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['email'])) {?>
                    <input class="form-control grey" type="text" id="firstname" name="from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerThread']->value['firstname'], ENT_QUOTES, 'UTF-8', true);?>
"
                        readonly="readonly" /> <?php } else { ?>
                    <input class="form-control grey validate" type="text" id="firstname" name="from" data-validate="isName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['firstname']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                    /> <?php }?>
                </p>
                <p class="form-group">
                    <label for="lastname"><?php echo smartyTranslate(array('s'=>'Lastname'),$_smarty_tpl);?>
</label> <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['email'])) {?>
                    <input class="form-control grey" type="text" id="lastname" name="from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerThread']->value['lastname'], ENT_QUOTES, 'UTF-8', true);?>
"
                        readonly="readonly" /> <?php } else { ?>
                    <input class="form-control grey validate" type="text" id="lastname" name="from" data-validate="isName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastname']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                    /> <?php }?>
                </p>
                <p class="form-group">
                    <label for="email"><?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
</label> <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['email'])) {?>
                    <input class="form-control grey" type="text" id="email" name="from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerThread']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
"
                        readonly="readonly" /> <?php } else { ?>
                    <input class="form-control grey validate" type="text" id="email" name="from" data-validate="isEmail" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                    /> <?php }?>
                </p>
                <p class="form-group">
                    <label for="telephone"><?php echo smartyTranslate(array('s'=>'Telephone'),$_smarty_tpl);?>
</label> <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['email'])) {?>
                    <input class="form-control grey" type="text" id="telephone" name="from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerThread']->value['telephone'], ENT_QUOTES, 'UTF-8', true);?>
"
                        readonly="readonly" /> <?php } else { ?>
                    <input class="form-control grey validate" type="text" id="telephone" name="from" data-validate="isTelephone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telephone']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                    /> <?php }?>
                </p>

    	</div>
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="form-group">
                <label for="message"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</label>
                <textarea class="form-control" id="message" name="message"><?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?><?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true));?>
<?php }?></textarea>
            </div>
        </div>
        </div>
        <div class="submit">
            <button type="submit" name="submitMessage" id="submitMessage" class="button btn btn-default button-medium"><span><?php echo smartyTranslate(array('s'=>'Send'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></button>
        </div>
    </fieldset>
</form>
<?php }?> <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'contact_fileDefaultHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileDefaultHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No file selected','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileDefaultHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'contact_fileButtonHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileButtonHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Choose File','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileButtonHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>








<div class="row">
    <div class="col-xs-12 map">
        <p><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./0appointments-trans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('s'=>"base"), 0);?>
</p>
        <p><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./0appointments-trans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('s'=>"map-intro"), 0);?>
</p>
        <iframe width="100%" height="450" style="border: 0px; margin-left: auto; margin-right: auto;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJdd4hrwug2EcRmSrV3Vo6llI&key=AIzaSyDWcJNQMYLFVUrEH1cjBANsDsm3AzJWwI4"
            allowfullscreen></iframe>
    </div>
</div>


<?php }} ?>
