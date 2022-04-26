<?php
    class HomePage extends Page {
        public function __construct(...$args){}

        public function Start()
        {
          API::setController("HomeController");
          $this->Show();
        }

        public function Show()
        {

            parent::HTML();
            parent::buildHead(function(){
                Templates::use_module("home-meta");
                parent::title("Karma Shop");
                Templates::use_module("home-css");
            });

            parent::buildBody(function(){
                Templates::use_module("header" );
                Templates::use_module("banner", API::getController()->getBannerProducts());   //$template_module_args

                Templates::use_module("features" );
                Templates::use_module("category");
                Templates::use_module("products-area");
                Templates::use_module("deal-area");
                Templates::use_module("brand-area");
                Templates::use_module("related-products", API::getController()->getRelatedProducts());   //$template_module_args

                Templates::use_module("footer");
                Templates::use_module("scripts");
            });
            parent::HTML();
            //parent::Show();
        }
    }
?>
