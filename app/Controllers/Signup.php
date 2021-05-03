<?php

namespace App\Controllers;

class Signup extends BaseController
{
	public function index()
	{
		return view('pages/registro', ['title' => 'Registro']);
	}
}
