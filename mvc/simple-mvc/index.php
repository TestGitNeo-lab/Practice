<?php

$routes = [
	'/' => 'MainController@homepage',
	'/contacts' => 'MainController@contact',
	'/about' => 'MainController@about'
];

$action = 'MainController@contact';






function view($view)
{
	echo file_get_contents('views/'.$view.'.php');
}

function currentRoute() // khi nao no cung tra ve '/contacts'
{
    return '/contscs'; //  /simple-mvc/index.php  ham(tu muon thay, tu can thay, doan text dua vao de thay the)
}

function callAction('$action')
{
	$t = explode('@', $action);//$t= [0=>'MainController', 1 =>'homepage'];
	include 'controllers/'.$t[0].'.php';// them file controllers/MainController.php
	//include 'controllers/MainController.php';
// class MainController
// {
// 	public function homepage()
// 	{
// 		return view('main/homepage');
// 	}

// 	public function contact()
// 	{
// 		return view('main/contact');
// 	}

// 	public function about()
// 	{
// 		return view('main/about');
// 	}
// }

	$controller = new $t[0](); //=  $controller = new MainController();
	$controller->{$t[1]}();
}
