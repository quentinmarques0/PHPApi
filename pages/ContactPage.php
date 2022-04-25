<?php
/*

*/



    class ContactPage extends Page {
        public function __construct(...$args){}

        public function Start()
        {
          API::setController("ContactController");
          $this->Show();
        }

        public function Show()
        {

            Templates::use_module("contact");
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
