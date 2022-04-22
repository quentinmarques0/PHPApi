<?php
    require("API/core.php");

    using("API");
    require("scripts/items.php");

    function get_banner()
{
    return array(
        Banner::get("Nike <br>Collection!"),
        Banner::get("Nike Old <br>Collection!"),
        Banner::get("Nike New <br>Collection!")
    );
}
function get_related_products()
    {
        return array(
            Items::get('Nike 1'),
            Items::get('Nike 2'),
            Items::get('Nike 3'),
            Items::get('Nike 4'),
            Items::get('Nike 5')
        );
    }

    API::setController("controllerTest");
    
    API::setInitialRoute("home", "HomePage");
    //$t = new cTest();
    //var_dump($t->getm());

    Routes::CheckRoute();


?>