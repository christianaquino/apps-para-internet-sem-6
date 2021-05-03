<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function index()
	{
		if($this->request->getMethod() == 'post') {
			$data = $this->request->getPost();
			$contacto = new \App\Models\ContactoModel();
			$contacto->insert($data);
		}

		return view('pages/contacto', ['title' => 'Contacto']);
	}
}
