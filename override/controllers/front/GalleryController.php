<?php

class GalleryController extends FrontController
{
    /**
     *  Initialize controller
     * @see FrontController::init()
     */
    public function init()
    {
        parent::init();
    }

    public $ssl = true;

    public function setMedia()
    {
        parent::setMedia();
        $this->addCSS(_THEME_CSS_DIR_.'gallery.css');
        $this->addCSS(_THEME_CSS_DIR_.'flickity.css');
        $this->addJS(_THEME_JS_DIR_.'flickity.pkgd.min.js');
        $this->addJS(_THEME_JS_DIR_.'gallery.js');
    }

    /**
    * Assign template vars related to page content
    * @see FrontController::initContent()
    */
    public function initContent()
    {
        parent::initContent();

        $this->display_column_left = false;
        $this->display_column_right = false;
        
        $this->setTemplate(_PS_THEME_DIR_ . 'gallery.tpl');
    }
}
