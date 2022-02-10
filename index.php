<?php 
require_once "./Main/Router/Router.php";

$request = $_SERVER['REQUEST_URI'];
$router = new Router();
$router->RouterRedirect($request);

