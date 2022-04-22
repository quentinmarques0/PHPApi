<?php

Templates::init('Simple');

Modules::register('404-error-styles',                   "modules/css.php");
Modules::register('404-error-metas',                    "modules/meta.php");

Modules::register('404-error-section',                  "modules/section.php");

Functions::register('log',                       function($args){
    echo "<script>console.log(\"$args[0]\");</script>";
});

return Templates::done();