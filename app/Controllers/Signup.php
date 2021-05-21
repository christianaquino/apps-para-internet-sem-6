<?php

namespace App\Controllers;

class Signup extends BaseController
{
	public function index()
	{
		$viewData = ['title' => 'Registro'];

		if($this->request->getMethod() == 'post') {
			$data = $this->request->getPost();
			if(isset($data['password']) && $data['password'] !== "") {
				$decriptedPassword = $data['password'];
				//Encrypt password
				$data['password'] = sha1($data['password']);
			}

			//Get tipo_usuario suscriptor
		    $tipoUsuario = new \App\Models\TipoUsuarioModel();
			$data['tipo_usuario_id'] = $tipoUsuario->asObject()->where('tipo', 'suscriptor')->first()->id;

			$usuario = new \App\Models\UsuarioModel();
			if ($usuario->insert($data)) {
				$viewData['success'] = true;
			} else {
				$viewData['success'] = false;
				$viewData['errors'] = $usuario->errors();
				// Reset password value
				if (isset($decriptedPassword)) {
					$data['password'] = $decriptedPassword;
				}
				$viewData['data'] = $data;
			}
		} else {
			$viewData['errors'] = [];
			$viewData['data'] = [];
		}

		return view('pages/registro', $viewData);
	}
}
