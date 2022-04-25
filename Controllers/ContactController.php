<?php

class ContactController extends Controller {

    public function __construct(...$args) {
        Templates::using("karma");
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
