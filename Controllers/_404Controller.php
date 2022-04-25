<?php

class _404Controller extends Controller {

    public function __construct(...$args) {
        Templates::using("DailyUI008");
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
