<?php
class Pages {
    public static function open($page)
    {

    }

    public static function set_title($title) { echo "<title>$title</title>"; }

    public static function get_related_products()
    {
        return array(
            Items::get('Nike 1'),
            Items::get('Nike 2'),
            Items::get('Nike 3'),
            Items::get('Nike 4'),
            Items::get('Nike 5')
        );
    }

    public static function get_banner()
    {
        return array(
            Banner::get("Nike <br>Collection!"),
            Banner::get("Nike Old <br>Collection!"),
            Banner::get("Nike New <br>Collection!")
        );
    }
}