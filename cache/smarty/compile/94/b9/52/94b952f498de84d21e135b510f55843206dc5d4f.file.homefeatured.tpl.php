<?php /* Smarty version Smarty-3.1.19, created on 2017-10-19 19:39:36
         compiled from "/Applications/MAMP/htdocs/SSMShop/themes/ssm/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116214638359e8f1687e92d7-16799370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94b952f498de84d21e135b510f55843206dc5d4f' => 
    array (
      0 => '/Applications/MAMP/htdocs/SSMShop/themes/ssm/modules/homefeatured/homefeatured.tpl',
      1 => 1508359632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116214638359e8f1687e92d7-16799370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e8f168864488_87944191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e8f168864488_87944191')) {function content_59e8f168864488_87944191($_smarty_tpl) {?> <?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>
 <?php } else { ?>
    <ul id="homefeatured" class="homefeatured tab-pane">
        <li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
    </ul>
    <?php }?>
    <section class="process">
        <div class="process-header">
            <h3>LEARN MORE ABOUT OUR PROCESS</h3>
            <p>Our order process right to delivery is simple. We strive to bring the pinnacle of luxury custom made suits to
                your doorstep.</p>
        </div>
        <div class="carousel main-carousel">
            <figure class="carousel-cell">
                <img class="img-responsive" src="../img/dress-alteration-and-tailors.jpg" alt="">
                <figcaption>
                    <h3>CUSTOM MEASURMENT </h3>
                    <p>Our custom service is our offer to visit you anywhere for exclusive measurement and creation of your
                        suit. We get you measured and work in close harness with you to choose the right fabric, cut and
                        design appropriate to your personal needs.</p>
                </figcaption>
            </figure>
            <figure class="carousel-cell">
                <img class="img-responsive" src="../img/tailor-cutting-fine-cloth.jpg" alt="">
                <figcaption>
                    <h3>CUTTING & SEWING </h3>
                    <p>Our renowned tailors take the utmost care to understand the needs of our clients, having a minutious
                        eye for details, working with precision to strict deadlines to produce a veritable work of art.</p>
            </figure>
            <figure class="carousel-cell">
                <img class="img-responsive" src="../img/suit-with-tailor-stitches.jpg" alt="">
                <figcaption>
                    <h3>FINISHING</h3>
                    <p>Extra care is taken to ascertain that all our suit jackets are hand finished in certain areas and that
                        customer’s personsalised requirements are complied with. </p>
                </figcaption>
            </figure>
            <figure class="carousel-cell">
                <img class="img-responsive" src="../img/made-to-measure-suit.jpg" alt="">
                <figcaption>
                    <h3>INSPECTION</h3>
                    <p>Our quality control team assures that all our garments go through a high-level rigorous procedure to
                        ensure compliance with the UK Savile Row Made To Measure suiting standard.</p>
                </figcaption>
            </figure>
            <figure class="carousel-cell">
                <img class="img-responsive" src="../img/suit-delivery-to-your-door.jpg" alt="">
                <figcaption>
                    <h3>PERSONALISED DELIVERY</h3>
                    <p>Your exquisitely custom made clothing item is now ready for collection and can be personally delivered
                        to your door step at your convenience within a time frame of 5-6 weeks from the original order.</p>
                </figcaption>
            </figure>
        </div>
                    
<div class="progress-bar"></div>

        <div class="carousel carousel-nav">
                <div class="carousel-cell">
                    <div class="carindex">
                        CUSTOM MEASURMENT
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="carindex">
                        CUTTING & SEWING
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="carindex">
                        FINISHING
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="carindex">
                        INSPECTION
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="carindex">
                        PERSONALISED DELIVERY
                    </div>
                </div>
            </div>
       
    </section><?php }} ?>
