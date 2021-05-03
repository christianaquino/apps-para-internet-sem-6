<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactoModel extends Model
{
    protected $table = 'contacto';
    protected $allowedFields = [
        'nombre', 'email', 'mensaje'
    ];
    //protected $returnType    = 'App\Entities\Contacto';
}