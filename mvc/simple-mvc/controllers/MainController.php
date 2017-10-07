<?php

class MainController
{
	public function homepage()
	{
		return view('main/homepage');
	}

	public function contact()
	{
		return view('main/contact');
	}

	public function about()
	{
		return view('main/about');
	}
}