<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function index()
	{
		return view('pages/contacto', ['title' => 'Contacto']);
	}
}
