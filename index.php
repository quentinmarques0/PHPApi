<?php
    require("API/core.php");
    using("API");

    require("scripts/items.php");


    Routes::register("contact", "ContactPage");// registering a route for contact page
    API::setInitialRoute("home", "HomePage");

    Routes::CheckRoute(); //Redirect to the correct page... or Error page !
?>
