<?php

$page = "home";
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

require("../config/index.php");

$dsn = "mysql:host=". DB_HOSTNAME .";dbname=". DB_DATABASE;
$db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);