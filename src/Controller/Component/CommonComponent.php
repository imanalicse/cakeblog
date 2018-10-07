<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class CommonComponent extends Component
{
    public $config;

    public $components = ['Custom'];

    public function initialize(array $config)
    {
        $this->config = $config;
    }

    public function test(){

        echo $this->Custom->foo();
        var_dump($this->config);
        return "hello world!!.";
    }
}