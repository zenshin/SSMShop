<?php

class TermsController extends FrontController
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
        $this->addCSS(_THEME_CSS_DIR_.'terms.css');
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
        
        $this->setTemplate(_PS_THEME_DIR_ . 'terms.tpl');
    }
}
