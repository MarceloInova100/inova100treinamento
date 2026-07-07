<?php

namespace App\Models;

use CodeIgniter\Model;

class GestorModel extends Model
{
    protected $table            = 'gestores';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';

    protected $allowedFields = [
        'nome',
        'email',
        'login',
        'senha',
        'perfil',
        'ativo'
    ];

    protected $useTimestamps = true;

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nome'   => 'required|min_length[3]',
        'email'  => 'required|valid_email',
        'login'  => 'required|min_length[4]',
        'senha'  => 'required|min_length[6]',
        'perfil' => 'required'
    ];

    protected $validationMessages = [
        'nome' => [
            'required' => 'Informe o nome do gestor.'
        ],
        'email' => [
            'required'    => 'Informe o e-mail.',
            'valid_email' => 'E-mail inválido.'
        ]
    ];
}
