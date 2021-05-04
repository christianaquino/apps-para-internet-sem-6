<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function index()
	{
		$viewData = ['title' => 'Contacto'];

		if($this->request->getMethod() == 'post') {
			$data = $this->request->getPost();
			$contacto = new \App\Models\ContactoModel();
			$viewData['success'] = $contacto->insert($data);
		}

		return view('pages/contacto', $viewData);
	}
}
