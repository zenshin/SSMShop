{capture name=path}{l s='Appointments'}{/capture}
<h1 id="guide">
    {include file="$tpl_dir./0appointments-trans.tpl" s="appointments"}
</h1>


<div class="row">
        <div class="text col-xs-12 col-sm-6">
            <h2>APPOINTMENT GUIDE</h2>
            <hr />
            <p>SUITSURMESUR appointments are scheduled to be a relaxing moment for every client – whether you have come to us to make a new corporate suit, sports jacket or special event clothing. We ensure during the process that our clients have the finest experience when creating their custom clothing. Our appointments are none committal both at home in the UK & during overseas trips. Therefore, no need to feel you have committed to order when scheduling an appointment with our team.</p><p> We understand that the world of Made to Measure can be a little challenging to some, but here at SUITSURMESUR, our team will always do their utmost best to make everyone comfortable both home & abroad. Getting to know our clients is important to us, so we create an environment open for discussion with our clients about the trade and look to consolidate a healthy, friendly working relationship with each client. At SUITSURMESUR, this is a streamlined, time-conscious service that doesn’t cut back on time and an essential element in our Made to Measure process.
            </p>
        </div>
        <div class="col-xs-12 col-sm-6"><img src="http://dev2.suitsurmesur.com/img/tailors-suitcase.jpg" alt="Showroom" class="img-responsive"/>
        </div>
</div>
<div  id="request" class="row">
    <p class="pcenter">
    Do not hesitate to contact us here should you require further information in relation to this guide and we shall endeavour to help in any way we can.
    <p>
</div>
<div>   
    <h2>APPOINTMENT REQUEST</h2>
    <hr />
    <h4>{include file="$tpl_dir./0appointments-trans.tpl" s="form-only"}</h4>

{if isset($confirmation)}
<p class="alert alert-success">{l s='Your message has been successfully sent to our team.'}</p>
<ul class="footer_links clearfix">
    <li>
        <a class="btn btn-default button button-small" href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}">
				<span>
					<i class="icon-chevron-left"></i>{l s='Home'}
				</span>
			</a>
    </li>
</ul>
{elseif isset($alreadySent)}
<p class="alert alert-warning">{l s='Your message has already been sent.'}</p>
<ul class="footer_links clearfix">
    <li>
        <a class="btn btn-default button button-small" href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}">
				<span>
					<i class="icon-chevron-left"></i>{l s='Home'}
				</span>
			</a>
    </li>
</ul>
{else} {include file="$tpl_dir./errors.tpl"}
<form action="{$request_uri}" method="post" class="contact-form-box" enctype="multipart/form-data">
    <fieldset>
        <h3 class="page-subheading col-xs-12 col-md-8 col-md-offset-2">{include file="$tpl_dir./0appointments-trans.tpl" s="form-intro"}</h3>
            <div class="clearfix row">
                <div class="col-sm-4 col-sm-offset-2">
                    <p class="form-group">
                        <label for="firstname">{l s='Firstname'}</label> {if isset($customerThread.email)}
                        <input class="form-control grey" type="text" id="firstname" name="from" value="{$customerThread.firstname|escape:'html':'UTF-8'}"
                            readonly="readonly" /> {else}
                        <input class="form-control grey validate" type="text" id="firstname" name="from" data-validate="isName" value="{$firstname|escape:'html':'UTF-8'}"
                        /> {/if}
                    </p>
                    <p class="form-group">
                        <label for="lastname">{l s='Lastname'}</label> {if isset($customerThread.email)}
                        <input class="form-control grey" type="text" id="lastname" name="from" value="{$customerThread.lastname|escape:'html':'UTF-8'}"
                            readonly="readonly" /> {else}
                        <input class="form-control grey validate" type="text" id="lastname" name="from" data-validate="isName" value="{$lastname|escape:'html':'UTF-8'}"
                        /> {/if}
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <p class="form-group">
                        <label for="email">{l s='Email address'}</label> {if isset($customerThread.email)}
                        <input class="form-control grey" type="text" id="email" name="from" value="{$customerThread.email|escape:'html':'UTF-8'}"
                            readonly="readonly" /> {else}
                        <input class="form-control grey validate" type="text" id="email" name="from" data-validate="isEmail" value="{$email|escape:'html':'UTF-8'}"
                        /> {/if}
                    </p>
                    <p class="form-group">
                        <label for="telephone">{l s='Telephone'}</label> {if isset($customerThread.email)}
                        <input class="form-control grey" type="text" id="telephone" name="from" value="{$customerThread.telephone|escape:'html':'UTF-8'}"
                            readonly="readonly" /> {else}
                        <input class="form-control grey validate" type="text" id="telephone" name="from" data-validate="isTelephone" value="{$telephone|escape:'html':'UTF-8'}"
                        /> {/if}
                    </p>
                </div>
    	    </div>
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label for="message">{l s='Message'}</label>
                    <textarea class="form-control" id="message" name="message">{if isset($message)}{$message|escape:'html':'UTF-8'|stripslashes}{/if}</textarea>
                </div>
            </div>
    </fieldset>
    <div class="submit">
            <button type="submit" name="submitMessage" id="submitMessage" class="button btn btn-default button-medium"><span>{l s='Send'}<i class="icon-chevron-right right"></i></span></button>
        </div>
</form>
{/if} {addJsDefL name='contact_fileDefaultHtml'}{l s='No file selected' js=1}{/addJsDefL} {addJsDefL name='contact_fileButtonHtml'}{l
s='Choose File' js=1}{/addJsDefL}
</div>
<div class="row center">
    <p>I look forward to working with you to create a unique piece that mirrors your identity.</p>
    <p>Cheers</p>
    <div class="line">   
        <p><span class="dike">Monsieur Dike</span></p>
    </div>
    <p>Founder & Creative Director</p>
</div>


	

<div class="row">
<h2>SHOWROOM & TRUNK SHOWS</h2>
            <hr />
<p>{include file="$tpl_dir./0appointments-trans.tpl" s="base"}</p>
<p>{include file="$tpl_dir./0appointments-trans.tpl" s="map-intro"}</p>
<div id="map"></div>
    <!--<div class="col-xs-12 map">
        
        <iframe width="100%" height="450" style="border: 0px; margin-left: auto; margin-right: auto;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJdd4hrwug2EcRmSrV3Vo6llI&key=AIzaSyDWcJNQMYLFVUrEH1cjBANsDsm3AzJWwI4"
            allowfullscreen></iframe>
    </div> -->
</div>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1JOGZk5DSnpIYeWpNoZm0WYz9yggIBAw&callback=initMap">
</script>