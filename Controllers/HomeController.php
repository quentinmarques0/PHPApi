<?php

class HomeController extends Controller {
    
    public function __construct(...$args)
    {
        Templates::using("simple");
        $this->Start();
    }
    public function Start(...$args)
    {
        parent::Start();
        $this->Update();
    }

    public function Update(...$args) {
        parent::Update();
    }

    public function getm(...$args)
    {
        return parent::GetModules("header");
    }

    public function getf(...$args)
    {
        $arg = $args[0] ?? null;
        return parent::GetFunctions($arg);
    }
    public function getItem($name, $price, $image, $sale = null)
    {
        $arr = [
            $name,
            $price,
            $image
        ];
        if($sale != null) array_push($arr, $sale);
        return $arr;
    }
    public function getLatestProducts()
    {
        $title = "Latest Products";
        $subtitle = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $items = [
            $this->getItem("Nike 1", "50€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
            $this->getItem("Nike 2", "150€", 'src="'.Templates::get_directory().'/img/product/p1.jpg"', "20€"),
            $this->getItem("Nike 3", "850€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
            $this->getItem("Nike 4", "55€", 'src="'.Templates::get_directory().'/img/product/p5.jpg"'),
            $this->getItem("Nike 5", "10€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
            $this->getItem("Nike 6", "530€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
            $this->getItem("Nike 7", "550€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
            $this->getItem("Nike 8", "650€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
        ];
        Templates::set_mod_args($title, $subtitle, $items);
    }

    public function getComingProducts()
    {
        $title = "Coming Products";
        $subtitle = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $items = [
            $this->getItem("Nike 1", "50€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
            $this->getItem("Nike 2", "150€", 'src="'.Templates::get_directory().'/img/product/p1.jpg"', "20€"),
            $this->getItem("Nike 3", "850€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
            $this->getItem("Nike 4", "55€", 'src="'.Templates::get_directory().'/img/product/p5.jpg"'),
            $this->getItem("Nike 5", "10€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
            $this->getItem("Nike 6", "530€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
            $this->getItem("Nike 7", "550€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
            $this->getItem("Nike 8", "650€", 'src="'.Templates::get_directory().'/img/product/p2.jpg"'),
        ];
        Templates::set_mod_args($title, $subtitle, $items);
    }
}

