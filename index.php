<?php

session_start();

error_reporting(E_ALL);
ini_set("Display Errors", 1);

include_once "models/pageData.class.php";

$pageData = new pageData();

$pageData->title = "Welcome to My Sample PHP App";
$pageData->addjScripts('http://code.jquery.com/jquery-1.10.2.js');
$pageData->addjScripts('http://code.jquery.com/ui/1.11.2/jquery-ui.js');
$pageData->addCss('http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css');
$pageData->addCss('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css');

$pageData->content = include_once "controllers/helloworld.php";
 
$page = include_once "views/page.php";

echo $page;
