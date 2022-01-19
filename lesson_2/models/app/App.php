<?php

namespace app\models\app;

class App
{
    public $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        echo "hello {$this->name}";
    }
}