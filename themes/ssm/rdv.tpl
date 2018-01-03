{capture name=path}{l s='Appointments'}{/capture}
<h1 id="guide">
    {l s='head title'}
</h1>


<div class="row cont">
        <div class="text col-xs-12 col-sm-6">
            <h2>{l s='guide title'}</h2>
            <hr />
            <p>{l s='guide subtitle'}</p>
            <p>{l s='guide subsubtitle'}<p>
        </div>
        <div class="col-xs-12 col-sm-6"><img src="../img/tailors-suitcase.jpg" alt="Showroom" class="img-responsive"/>
        </div>
</div>
<div  id="request" class="row cont">
</div>
<div>
    <h2>{l s='request title'}</h2>
    <hr />
    <h4>{l s="form-only"}</h4>

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
        <h3 class="page-subheading col-xs-12 col-md-8 col-md-offset-2">{l s="form-intro"}</h3>
            <div class="clearfix row">
                <div class="col-sm-4 col-sm-offset-2">
                    <p class="form-group">
                        <label for="firstname">{l s='First Name'} *</label> {if isset($customerThread.email)}
                        <input class="form-control grey" type="text" id="firstname" name="from" value="{$customerThread.firstname|escape:'html':'UTF-8'}"
                            readonly="readonly" /> {else}
                        <input class="form-control grey validate" type="text" id="firstname" name="from" data-validate="isName" value="{$firstname|escape:'html':'UTF-8'}"
                        /> {/if}
                    </p>
                    <p class="form-group">
                        <label for="lastname">{l s='Last Name'} *</label> {if isset($customerThread.email)}
                        <input class="form-control grey" type="text" id="lastname" name="from" value="{$customerThread.lastname|escape:'html':'UTF-8'}"
                            readonly="readonly" /> {else}
                        <input class="form-control grey validate" type="text" id="lastname" name="from" data-validate="isName" value="{$lastname|escape:'html':'UTF-8'}"
                        /> {/if}
                    </p>
                     <p class="form-group">
                        <label for="country">{l s='Country'} *</label> {if isset($customerThread.email)}
                        <input class="form-control grey" type="text" id="country" name="from" value="{$customerThread.country|escape:'html':'UTF-8'}"
                            readonly="readonly" /> {else}
                        <input class="form-control grey validate" type="text" id="country" name="from" data-validate="isName" value="{$country|escape:'html':'UTF-8'}"
                        /> {/if}
                    </p>
                    <p class="form-group">
                     <label for="interest">{l s='Interest'} *</label>
                        <select class="form-control" name="interest">
							<option value="0">{l s='-- Choose --'}</option>
								<option value="1">{l s='Suiting'}</option>
                                <option value="2">{l s='Shirting'}</option>
                                <option value="3">{l s='Trousers'}</option>
                                <option value="4">{l s='Jackets'}</option>
                                <option value="5">{l s='Waistcoats'}</option>
                                <option value="6">{l s='Accessories'}</option>
                                <option value="7">{l s='All of the above'}</option>
						</select>   
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <p class="form-group">
                        <label for="email">{l s='Email address'} *</label> {if isset($customerThread.email)}
                        <input class="form-control grey" type="text" id="email" name="from" value="{$customerThread.email|escape:'html':'UTF-8'}"
                            readonly="readonly" /> {else}
                        <input class="form-control grey validate" type="text" id="email" name="from" data-validate="isEmail" value="{$email|escape:'html':'UTF-8'}"
                        /> {/if}
                    </p>
                    <p class="form-group">
                        <label for="telephone">{l s='Telephone'} *</label> {if isset($customerThread.email)}
                        <input class="form-control grey" type="text" id="telephone" name="from" value="{$customerThread.telephone|escape:'html':'UTF-8'}"
                            readonly="readonly" /> {else}
                        <input class="form-control grey validate" type="text" id="telephone" name="from" data-validate="isTelephone" value="{$telephone|escape:'html':'UTF-8'}"
                        /> {/if}
                    </p>
                      <p class="form-group">
                        <label for="city">{l s='City'} *</label> {if isset($customerThread.email)}
                        <input class="form-control grey" type="text" id="city" name="from" value="{$customerThread.city|escape:'html':'UTF-8'}"
                            readonly="readonly" /> {else}
                        <input class="form-control grey validate" type="text" id="city" name="from" data-validate="isName" value="{$city|escape:'html':'UTF-8'}"
                        /> {/if}
                    </p>
                    <p class="form-group">
                     <label for="time">{l s='Time'} *</label>
                        <select class="form-control" name="interest">
							<option value="0">{l s='-- Choose your appointment time--'}</option>
								<option value="1">{l s='09:00 - 10:00'}</option>
                                <option value="2">{l s='10:00 - 11:00'}</option>
                                <option value="3">{l s='11:00 - 12:00'}</option>
                                <option value="4">{l s='12:00 - 13:00'}</option>
                                <option value="5">{l s='13:00 - 14:00'}</option>
                                <option value="6">{l s='14:00 - 15:00'}</option>
                                <option value="6">{l s='15:00 - 16:00'}</option>
                                <option value="6">{l s='16:00 - 17:00'}</option>
                                <option value="6">{l s='17:00 - 18:00'}</option>
                                <option value="6">{l s='18:00 - 19:00'}</option>
						</select>   
                    </p>
                </div>
    	    </div>
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label for="message">{l s='Message'}</label>
                    <textarea class="form-control" id="message" name="message">{if isset($message)}{$message|escape:'html':'UTF-8'|stripslashes}{/if}</textarea>
                </div>
            </div>
            <div class="submit col-xs-12">
            <button type="submit" name="submitMessage" id="submitMessage" class="button btn btn-default button-medium"><span>{l s='Send'}<i class="icon-chevron-right right"></i></span></button>
        </div>
    </fieldset>
    
</form>
{/if} {addJsDefL name='contact_fileDefaultHtml'}{l s='No file selected' js=1}{/addJsDefL} {addJsDefL name='contact_fileButtonHtml'}{l
s='Choose File' js=1}{/addJsDefL}
</div>
<div class="row center">
    <p>{l s='form look'}</p>
    <p>{l s='form cheers'}</p>
    <div class="line">   
        <p><span class="dike">Monsieur Dike</span></p>
    </div>
    <p>{l s='founder'}</p>
</div>


	

<div class="row cont">
    <h2>{l s='showroom title'}</h2>
            <hr />
    <p>{l s="base"}</p>
    <p>{l s="map-intro"}</p>
    <div class="map-rdv row">
        <div id="map"  class="col-xs-12 col-sm-7 pull-right">
        </div>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1JOGZk5DSnpIYeWpNoZm0WYz9yggIBAw&callback=initMap">
        </script>
        <div id="card" class="col-xs-12 col-sm-5 pull-left">
            <div class="info row">
                <div class="col-xs-12">
                    <h2>Milton Keynes</h2>
                    <h3>Suitsurmesur</h3>
                    <p></p>
                </div>
                <div class="col-xs-12">
                    <figure>
                        <img src="../img/elegant-garments.jpg" alt="showroom">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>    