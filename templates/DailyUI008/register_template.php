<?php

Templates::init('DailyUI 008');

Modules::register('css',                                "modules/css.php");
Modules::register('404',                                "modules/404.php");

//Scenes Items
Modules::register('scene_01',                                "modules/scenes/01.php");
Modules::register('scene_02',                                "modules/scenes/02.php");
Modules::register('scene_03',                                "modules/scenes/03.php");
Modules::register('text',                                "modules/text.php");

Modules::register('js',                                 "modules/js.php");

Functions::register('log',                       function($args){
    echo "<script>console.log(\"$args[0]\");</script>";
});

return Templates::done();