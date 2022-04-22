<?php
/*

*/    



    class HomePage extends Page {
        public function __construct(...$args)
        {
            parent::__construct("karma");
        }

        public function Show()
        {

            parent::HTML();
            parent::buildHead(function(){
                Templates::use_module("home-meta");
                parent::title("Test");
                Templates::use_module("home-css");
            });

            parent::buildBody(function(){
                Templates::use_module("header" );
                Templates::use_module("home-banner", Templates::args(get_banner()));   //$template_module_args        
                Templates::use_module("home-related-products", Templates::args(get_related_products()));   //$template_module_args        
    
                Templates::use_function("log", Templates::args("arrh!"));

                Templates::use_module("footer");           
                Templates::use_module("home-scripts");
            });
            parent::HTML();
            //parent::Show();
        }
    }









/*
            Templates::use_module("home-meta");
            Pages::set_title("Accueil");
            Templates::use_module("home-css");

            Templates::use_module("header" );

    

            Templates::use_module("home-banner", use_args(Pages::get_banner()));   //$template_module_args        
            Templates::use_module("home-related-products", use_args(Pages::get_related_products()));   //$template_module_args        

            Templates::use_module("footer");           
            Templates::use_module("home-scripts");


*/


?>