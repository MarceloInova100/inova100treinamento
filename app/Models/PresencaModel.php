<?php

namespace App\Models;

use CodeIgniter\Model;

class PresencaModel extends Model
{
    protected $table = 'presencas';

    protected $allowedFields = [
        'participante_id',
        'data_presenca',
        'hora_entrada',
        'hora_saida'
    ];
}
