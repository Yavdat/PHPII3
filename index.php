<?php

require __DIR__.'/autoload.php';

$view = new \App\View();
$view->users=\App\Models\User::findAll();

$view->title="My site";


$view->display(__DIR__.'/App/templates/index.php');