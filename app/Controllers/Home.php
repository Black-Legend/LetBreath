<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function view_raikiri()
	{
		return view('blog_raikiri');
	}

	
	public function view_nappy()
	{
		return view('blog_nappy-geek');
	}

	public function view_breath()
	{
		return view('blog_breath');
	}





}
