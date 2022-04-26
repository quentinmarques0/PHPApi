<?php
    class ContactPage extends Page {
        public function __construct(...$args){}

        public function Start()
        {
          API::setController("ContactController");
          $this->Show();
        }

        public function Show()
        {

            //Templates::use_module("contact");
            parent::HTML();
            parent::buildHead(function(){
                Templates::use_module("contact-meta");
                parent::title("Karma Shop");
                Templates::use_module("contact-css");
            });

            parent::buildBody(function(){
                Templates::use_module("header");
                Templates::use_module("contact-banner");
                Templates::use_module("contact-area");
                Templates::use_module("contact-result");

                //Templates::use_module("banner", API::getController()->getBannerProducts());   //$template_module_args

                //Templates::use_module("features" );
                //Templates::use_module("category");
                //Templates::use_module("products-area");
                //Templates::use_module("deal-area");
                //Templates::use_module("brand-area");
                //Templates::use_module("related-products", API::getController()->getRelatedProducts());   //$template_module_args

                Templates::use_module("footer");
                Templates::use_module("scripts");
            });
            parent::HTML();
            //parent::Show();
        }
    }
?>
