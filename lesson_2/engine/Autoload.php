<?php
namespace app\engine;
class Autoload
{

    public function loadClass($className)
    {
        $className = preg_replace('/app/', '..', $className, 1);
        $className = str_replace('\\', '/', $className);
        include_once "{$className}.php";
    }


}