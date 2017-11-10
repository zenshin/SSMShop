{* * 2007-2016 PrestaShop * * NOTICE OF LICENSE * * This source file is subject to the Academic Free License (AFL 3.0) *
that is bundled with this package in the file LICENSE.txt. * It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php * If you did not receive a copy of the license and are unable to * obtain it
through the world-wide-web, please send an email * to license@prestashop.com so we can send you a copy immediately. * * DISCLAIMER
* * Do not edit or add to this file if you wish to upgrade PrestaShop to newer * versions in the future. If you wish to customize
PrestaShop for your * needs please refer to http://www.prestashop.com for more information. * * @author PrestaShop SA
<contact@prestashop.com>
    * @copyright 2007-2016 PrestaShop SA * @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
    * International Registered Trademark & Property of PrestaShop SA *} {if isset($products) && $products} {include file="$tpl_dir./product-list.tpl"
    class='homefeatured tab-pane' id='homefeatured'} {else}
    <ul id="homefeatured" class="homefeatured tab-pane">
        <li class="alert alert-info">{l s='No featured products at this time.' mod='homefeatured'}</li>
    </ul>
    {/if}
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
                <img class="img-responsive" src="../img/finishing.jpg" alt="">
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
       
    </section>