<?php /* Smarty version Smarty-3.1.19, created on 2017-10-12 22:45:56
         compiled from "/Applications/MAMP/htdocs/SSMShop/themes/ssm/overseas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47854330859dfe2946600a5-97762144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd33131545eef90b59acfdc2d77f85f13bec22388' => 
    array (
      0 => '/Applications/MAMP/htdocs/SSMShop/themes/ssm/overseas.tpl',
      1 => 1507844752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47854330859dfe2946600a5-97762144',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dfe29466c0b6_91437730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dfe29466c0b6_91437730')) {function content_59dfe29466c0b6_91437730($_smarty_tpl) {?><!--<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Art-of-making'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>-->
<div class="jumbotron">
    <div class="container">
        <h1>OVERSEAS VISITS</h1>
        <!--<figure><img class="img-responsive" src="../img/tailoring.jpg" alt="made to measure"></figure>-->

    </div>
</div>
<div class="container">
    <div class="row center">
        <h2>We make regular visits to Paris as well as other locations by arrangement. Your suit fittings can be carried out
            and new commissions taken.</h2>
    </div>
    <section class="row">
        <figure class="col-xs-12 col-sm-6">
            <img class="img-responsive image-center" src="../img/Notre_Dame.jpg" alt="Paris">
        </figure>
         <div class="col-xs-12 col-sm-6 ">
         <h2>Paris</h2>
         <hr>
        <p>Paris capital city makes up SUITSURMESUR’S largest client base and sees our team visit a total of 5 times a year.
            Paris has been SUITSURMESUR’S second home for the past decade. We recognised that many of our refined clients
            are from the other side of the continent and as such, decided to make easier on our French neighbours by creating
            a unique experience from within their own city, a handful of times per year.</p>
        <p>For appointments, please email marie.o@suitsurmesur.com</p>

        <p>Telephone +33 (0) 6 28 45 54 67</p>

        <p>Representative: Marie ORANGE</p>
        </div>
    </section>

    <section class="row">
        <div class="col-xs-12 col-sm-6 ">
            <p>We visit clients anywhere in the world if suit orders exceed five suits for the European Union (individual or
                group) and ten suits or more either (individual or group) outside of the European Union zone. This policy
                applies to one country respectively. Please refer to our terms & conditions for more detailed information

            </p>
            <p>We post details of trips on this page once they are confirmed.

            </p>
            <p>Alternatively, please contact us to arrange an overseas visit on:

            </p>
            <p>Telephone +44 (0) 203 907 6806

            </p>
            <p>Mobile +44 (0) 7538 526610

            </p>
            <p>E-mail: Jlo.dike@suitsurmesur.com

            </p>
           
        </div>
        <figure class="col-xs-12 col-sm-6">
            <img class="img-responsive" src="../img/modern-elegant-arches-mtm.jpg" alt="the leisure apparel">
        </figure>
    </section>
    <section class="row center">
        <button><a href="/appointments"><strong>GET IN TOUCH</strong></a></button>
    </section>


    <section class="row">
        <div class="col-xs-12 map">
            <p><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./0appointments-trans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('s'=>"base"), 0);?>
</p>
            <p><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./0appointments-trans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('s'=>"map-intro"), 0);?>
</p>
            <iframe width="100%" height="450" style="border: 0px; margin-left: auto; margin-right: auto;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJdd4hrwug2EcRmSrV3Vo6llI&key=AIzaSyDWcJNQMYLFVUrEH1cjBANsDsm3AzJWwI4"
                allowfullscreen></iframe>
        </div>
    </section>
</div><?php }} ?>
