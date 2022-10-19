<?php
require('config/index.php');
require(DIR_MODEL . '/database.php');
require(DIR_CONTROLLER . "BedController.php");

$method = empty($_GET['params']) ? 'index' : $_GET['params'];
$page = new BedController();
$page->$method();