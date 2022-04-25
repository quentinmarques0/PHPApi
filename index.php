<?php
    require("API/core.php");

    using("API");
    require("scripts/items.php");

    //API::setController("HomeController");

    Routes::register("contact", "ContactPage");
    API::setInitialRoute("home", "HomePage");
    //$t = new cTest();
    //var_dump($t->getm());

    Routes::CheckRoute();


?>
