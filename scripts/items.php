<?php

class Items {
    public static function get($name)
    {
        return Items::get_test($name, "100€", "50€", Templates::use_asset("img/r7.jpg"), "#");
    }

    public static function get_test($name, $price, $sale, $img, $page)
    {
        return array(
            'name' => $name,
            'price' => $price,
            'sale' => $sale,
            'img' => $img,
            'link'=> "$page"
        );
    }
}

class Banner {
    public static function get($name)
    {
        return Banner::get_test($name, "Description of $name", "#", Templates::use_asset("img/banner/banner-img.png"));
    }

    public static function get_test($title, $desc, $page, $img)
    {
        return array(
            'title' => $title,
            'desc' => $desc,
            'page' => $page,
            'img' => $img
        );
    }
}

?>