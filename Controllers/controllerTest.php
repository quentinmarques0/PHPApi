<?php

class controllerTest extends Controller {

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

}
