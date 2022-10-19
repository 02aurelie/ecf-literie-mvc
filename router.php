<?php
require('config/index.php');
require(DIR_MODEL . '/database.php');
require(DIR_CONTROLLER . "BedController.php");

$params = $_GET['params'] ?? '';
$params = explode("/", $params);
$method = empty($params[0]) ? 'index' : $params[0];
$page = new BedController();
$page->$method();