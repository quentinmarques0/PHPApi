<?php

Templates::init('Karma');

Modules::register('home-css',                   "modules/home/css.php");
Modules::register('home-meta',                  "modules/home/meta.php");
Modules::register('home-scripts',               "modules/home/scripts.php");

//Banner widget
Modules::register('banner',                     "modules/banner/area.php");
Modules::register('banner-items',               "modules/banner/items.php");
Modules::register('banner-see-more',            "modules/banner/seemore.php");
Modules::register('banner-content',             "modules/banner/content.php");
Modules::register('banner-image',               "modules/banner/image.php");

Modules::register('home-related-products',      "modules/home/related_products.php");
Modules::register('home-relprod-titlesubtitle', "modules/home/related_products/title_subtitle.php");
Modules::register('home-relprod-products',      "modules/home/related_products/products.php");
Modules::register('home-relprod-bigimage',      "modules/home/related_products/big_image.php");

Modules::register('features',                   "modules/features.php");
Modules::register('features-section1',          "modules/features/section1.php");
Modules::register('features-section2',          "modules/features/section2.php");
Modules::register('features-section3',          "modules/features/section3.php");
Modules::register('features-section4',          "modules/features/section4.php");

Modules::register('category',                   "modules/category.php");
Modules::register('category-01',                "modules/category/01.php");
Modules::register('category-02',                "modules/category/02.php");
Modules::register('category-03',                "modules/category/03.php");
Modules::register('category-04',                "modules/category/04.php");
Modules::register('category-05',                "modules/category/05.php");

Modules::register('products-area',              "modules/products/area.php");
Modules::register('products-area-widget',       "modules/products/area/widget.php");
Modules::register('products-area-bottom',       "modules/products/area/bottom.php");

Modules::register('deal-area',                  "modules/deal/area.php");

Modules::register('brand-area',                  "modules/brand/area.php");

Modules::register('footer',                     "modules/footer.php");
Modules::register('header',                     "modules/header.php");
Modules::register('header-blog-home',           "modules/header/menu/blog.php");
Modules::register('header-menu-contact',        "modules/header/menu/contact.php");
Modules::register('header-menu-display',        "modules/header/menu/display.php");
Modules::register('header-menu-home',           "modules/header/menu/home.php");
Modules::register('header-menu-pages',          "modules/header/menu/pages.php");
Modules::register('header-menu-shop',           "modules/header/menu/shop.php");
Modules::register('header-mobile-display',      "modules/header/mobile/display.php");
Modules::register('header-search-input',        "modules/header/search/input.php");

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