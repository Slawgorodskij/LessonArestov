<?php

use app\models\app\App;
use app\engine\Autoload;
use app\models\Users;


include_once '../engine/Autoload.php';


spl_autoload_register([new Autoload(), 'loadClass']);


$user1 = new Users('', '', 'vladimir@vladimir.ru',
    '', '', '123', '', '');

var_dump($user1);


$hello = new App('Федор');
$hello->hello();
