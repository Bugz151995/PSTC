<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		helper('url');

		echo view('templates/header');
		echo view('templates/topnavbar');
		echo view('home');
		echo view('templates/footer');
	}
}
