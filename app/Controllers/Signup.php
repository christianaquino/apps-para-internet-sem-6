<?php

namespace App\Controllers;

class Signup extends BaseController
{
	public function index()
	{
		$viewData = ['title' => 'Registro'];

		if($this->request->getMethod() == 'post') {
			$data = $this->request->getPost();

			//Encrypt password
			$data['password'] = sha1($data['password']);

			//Get tipo_usuario suscriptor
		    $tipoUsuario = new \App\Models\TipoUsuarioModel();
			$data['tipo_usuario_id'] = $tipoUsuario->asObject()->where('tipo', 'suscriptor')->first()->id;

			$usuario = new \App\Models\UsuarioModel();
			$viewData['success'] = $usuario->insert($data);
		}

		return view('pages/registro', $viewData);
	}
}
