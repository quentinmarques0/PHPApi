<?php

Templates::init('Karma');

Modules::register('home-css',                   "modules/home/css.php");
Modules::register('home-meta',                  "modules/home/meta.php");
Modules::register('home-scripts',               "modules/home/scripts.php");
Modules::register('home-banner',                "modules/home/banner_area.php");
Modules::register('home-related-products',      "modules/home/related_products.php");
Modules::register('footer',                     "modules/footer.php");
Modules::register('header',                     "modules/header.php");

Functions::register('log',                       function($args){
    echo "<script>console.log(\"$args[0]\");</script>";
});
Functions::register('mail',                      function($args){
    if(count($args) < 4) return;
    $to = $args[0]; // replace this mail with yours
    $firstname = $_POST["fname"] ?? $args[1];
    $email= $_POST["email"] ?? $args[2];
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $message ='<table style="width:100%">
            <tbody><tr>
                    <td>'.$firstname.'</td>
            </tr>
            <tr><td>Email: '.$email.'</td></tr>
    </tbody></table>';//$args[3]
    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }
});

return Templates::done();