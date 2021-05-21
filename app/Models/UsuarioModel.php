<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $allowedFields = [
        'tipo_usuario_id', 'nombre', 'apellido', 'email', 'password'
    ];
    protected $validationRules    = [
        'nombre' => 'required',
        'apellido' => 'required',
        'email'        => 'required|valid_email|is_unique[usuario.email]',
        'password' => 'required'
    ];
    
    protected $validationMessages = [
        'nombre' => [
            'required' => 'El campo nombre es obligatorio.',
        ],
        'apellido' => [
            'required' => 'El campo apellido es obligatorio.',
        ],
        'email'        => [
            'is_unique' => 'Esta dirección de email ya se encuentra en uso. Por favor utilice otra.',
            'required' => 'El campo email es obligatorio.',
            'valid_email' => 'Debe ingresar un email con formato válido.'
        ],
        'password' => [
            'required' => 'El campo password es obligatorio.',
        ],
    ];
}