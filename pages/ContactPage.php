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

            Templates::use_module("contact");
            //parent::Show();
        }
    }
?>
