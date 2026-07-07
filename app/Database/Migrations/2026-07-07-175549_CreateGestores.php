<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGestores extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INTEGER',
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'login' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'perfil' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => 'OPERADOR',
            ],
            'ativo' => [
                'type' => 'CHAR',
                'constraint' => 1,
                'default' => 'S',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('login');
        $this->forge->addUniqueKey('email');

        $this->forge->createTable('gestores');
    }

    public function down()
    {
        $this->forge->dropTable('gestores');
    }
}
