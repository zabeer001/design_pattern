<?php 
require_once('Singleton.php');

//http://localhost/design_pattern/singleton/test.php

$singleton = Singleton::getInstance();
$singleton_obj = Singleton::getInstance();
$singleton2 = clone $singleton;

var_dump($singleton===$singleton_obj);
var_dump($singleton===$singleton2);