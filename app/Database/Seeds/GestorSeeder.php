<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GestorSeeder extends Seeder
{
    public function run()
    {
        
$this->db->table('gestores')->insert([
            'nome'       => 'Marcelo Marques',
            'email'      => 'marcelo.lima@inova100.com.br',
            'login'      => 'admin',
            'senha'      => password_hash('admin123', PASSWORD_DEFAULT),
            'perfil'     => 'ADMIN',
            'ativo'      => 'S',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
