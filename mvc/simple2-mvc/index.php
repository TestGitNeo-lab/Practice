<?php
$routes = return [
					'/' => 'mainControllers@homepage'
		];
$action = show();

public function show($view)
{
	echo file_get_contents('/views' .$view. '.php');
}

public function currentRoutes()
{
	return str_replace('/simple2-mvc', 'index', $_SERVER['REQUEST_URI']);
}

public function action($action)
{
	include 'controllers/mainControllers.php';
	$controllers = new mainControllers;
	$controllers->homepage();
}