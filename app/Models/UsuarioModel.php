<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $allowedFields = [
        'tipo_usuario_id', 'nombre', 'apellido', 'email', 'password'
    ];
}