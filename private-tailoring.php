<?php

  /*  Create a custom page in PrestaShop without CMS - Custom Page File
   *  Read the detailed tutorial at https://iftakharhasan.wordpress.com/prestashop-create-a-custom-page-without-cms
   */

  include(dirname(__FILE__).'/config/config.inc.php');
  Tools::displayFileAsDeprecated();
 
  include(dirname(__FILE__).'/header.php');
 
  $smarty->display(_PS_THEME_DIR_.'private-tailoring.tpl');
 
  include(dirname(__FILE__).'/footer.php');
