<?php

//function __autoload($class)
//{
//    require __DIR__."/".str_replace('\\','/',$class).'.php';
//}
use App\Models\User;
require __DIR__.'/autoload.php';

$user=new User();
$user->name='Peter';
$user->email='p@petrov.ru';
$user->insert();