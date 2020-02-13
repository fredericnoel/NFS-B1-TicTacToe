<?php

session_start();
date_default_timezone_set('Europe/Paris');
require_once './functions/classAutoLoader.php';
spl_autoload_register('classAutoLoader');

$choucroute = new Deck();
var_dump($choucroute);