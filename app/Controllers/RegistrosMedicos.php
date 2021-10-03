<?php

namespace App\Controllers;

class RegistrosMedicos extends BaseController
{
	public function index()
	{
		$viewData = ['title' => 'Registros Médicos'];

		if($this->request->getMethod() == 'post') {
			$data = $this->request->getPost();
		} else {
			$viewData['errors'] = [];
			$viewData['data'] = [];
		}

		return view('pages/registros-medicos', $viewData);
	}
}
