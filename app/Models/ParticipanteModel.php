<?php

namespace App\Models;

use CodeIgniter\Model;

class ParticipanteModel extends Model
{
    protected $table = 'participantes';

    protected $allowedFields = [
        'matricula',
        'nome',
        'email'
    ];
}
