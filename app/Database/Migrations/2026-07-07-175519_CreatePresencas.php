<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePresencas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INTEGER',
                'auto_increment' => true
                ],
            'participante_id' => [
            'type' => 'INTEGER'
            ],
            'data_presenca' => [
                'type' => 'DATE'
                ],
                'hora_entrada' => [
                    'type' => 'DATETIME',
                    'null' => true
                    ],
                    'hora_saida' => [
                        'type' => 'DATETIME',
                        'null' => true
                        ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('presencas');
}
    public function down()
    {
        //
    }
}
