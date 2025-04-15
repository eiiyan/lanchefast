<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'nome' => 'Exemplo Admin',
            'cpf' => '547547046',
            'email' => 'admin1@exemplo.com',
            'senha' => Hash::make('senha123'),
        ]);

        Admin::create([
            'nome' => 'Exemplo Admin ',
            'cpf' => '435749492',
            'email' => 'admin2@exemplo.com',
            'senha' => Hash::make('senha123'),
        ]);

        Admin::create([
            'nome' => 'Exemplo Admin',
            'cpf' => '123849353',
            'email' => 'admin3@exemplo.com',
            'senha' => Hash::make('senha123'),
        ]);
    }
}
