<?php

define('ROOT_PATH', dirname(__FILE__));

require_once 'controller/UserController.php';

$controller = new UserController();

$controller->handleRequest();

?>
