<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateParticipantes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
            'type' => 'INTEGER',
            'auto_increment' => true,
            ],
            'matricula' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            ],
            'nome' => [
            'type' => 'VARCHAR',
            'constraint' => 150,
            ],
            'email' => [
            'type' => 'VARCHAR',
            'constraint' => 150,
            'null' => true,
        ]
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('participantes');
    }

    public function down()
    {
        //
    }
}
