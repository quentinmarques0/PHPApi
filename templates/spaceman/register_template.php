<?php

Templates::init('Spaceman');

Modules::register('css',                                "modules/css.php");
Modules::register('404',                                "modules/404.php");

Modules::register('svg',                                "modules/svg.php");
Modules::register('js',                                 "modules/js.php");

Functions::register('log',                       function($args){
    echo "<script>console.log(\"$args[0]\");</script>";
});

return Templates::done();