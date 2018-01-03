{capture name=path}{l s='Reviews'}{/capture}
<div class="row">
     <h1>{l s='REVIEWS'}</h1>
        
              <div class="col-xs-12 col-sm-6 col-sm-offset-2 card left">
                <h2>Fantastic experience</h2>
                <hr>
                <p>"Lorem ipsum dolor sit amet consectetur adipiscing elit elementum sagittis, class nec in urna nostra est purus proin inceptos auctor, hendrerit suspendisse eros dis etiam commodo tincidunt nullam. Porttitor orci pharetra luctus bibendum auctor elementum vivamus ante penatibus, quam dis habitasse fusce imperdiet maecenas eleifend feugiat. Nostra enim suspendisse donec ut ligula id, auctor hac conubia parturient vehicula tempor, sed in pellentesque nulla cras. Erat ultricies odio mattis fames pellentesque potenti iaculis, laoreet aenean at morbi feugiat quis purus tellus, molestie ornare et dis lobortis tristique. Iaculis venenatis ligula sed vivamus accumsan nisi habitant cubilia ac, nulla odio mollis mus eleifend senectus varius elementum, dignissim diam lectus aptent quam sociosqu tristique at. Donec augue in rhoncus class tristique accumsan facilisis id leo, nisl malesuada volutpat sagittis potenti ligula commodo suscipit senectus, urna integer nunc pellentesque dis nulla sed vitae. Lacus tempus convallis torquent venenatis urna mus ante purus erat, tellus vestibulum imperdiet est gravida curae fusce."</p>
                <p>John D. London</p>
              </div>
              <div class="col-xs-12 col-sm-6 col-sm-offset-6 card right">
                <h2>Fantastic experience</h2>
                 <hr>
                <p>"Lorem ipsum dolor sit amet consectetur adipiscing elit elementum sagittis, class nec in urna nostra est purus proin inceptos auctor, hendrerit suspendisse eros dis etiam commodo tincidunt nullam. Porttitor orci pharetra luctus bibendum auctor elementum vivamus ante penatibus, quam dis habitasse fusce imperdiet maecenas eleifend feugiat. Nostra enim suspendisse donec ut ligula id, auctor hac conubia parturient vehicula tempor, sed in pellentesque nulla cras. Erat ultricies odio mattis fames pellentesque potenti iaculis, laoreet aenean at morbi feugiat quis purus tellus, molestie ornare et dis lobortis tristique. Iaculis venenatis ligula sed vivamus accumsan nisi habitant cubilia ac, nulla odio mollis mus eleifend senectus varius elementum, dignissim diam lectus aptent quam sociosqu tristique at. Donec augue in rhoncus class tristique accumsan facilisis id leo, nisl malesuada volutpat sagittis potenti ligula commodo suscipit senectus, urna integer nunc pellentesque dis nulla sed vitae. Lacus tempus convallis torquent venenatis urna mus ante purus erat, tellus vestibulum imperdiet est gravida curae fusce."</p>
                <p>Emmanuel M. Paris</p>
              </div>
        </div>        
<div class="row post">

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
                          <label for="name">{l s='Name'}</label> {if isset($customerThread.email)}
                          <input class="form-control grey" type="text" id="firstname" name="from" value="{$customerThread.name|escape:'html':'UTF-8'}"
                              readonly="readonly" /> {else}
                          <input class="form-control grey validate" type="text" id="name" name="from" data-validate="isName" value="{$name|escape:'html':'UTF-8'}"
                          /> {/if}
                      </p>
                      <p class="form-group">
                          <label for="city">{l s='City'}</label> {if isset($customerThread.email)}
                          <input class="form-control grey" type="text" id="city" name="from" value="{$customerThread.city|escape:'html':'UTF-8'}"
                              readonly="readonly" /> {else}
                          <input class="form-control grey validate" type="text" id="city" name="from" data-validate="isName" value="{$city|escape:'html':'UTF-8'}"
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