<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funcionario::create([
            'nome' => 'Funcionário Exemplo',
            'cpf' => '12345678911',
            'email' => 'funcionario1@exemplo.com',
            'senha'=> bcrypt('senha123')
        ]);

        Funcionario::create([
            'nome' => 'Funcionário Exemplo',
            'cpf' => '12345678912',
            'email' => 'funcionario2@exemplo.com',
            'senha'=> bcrypt('senha123')
        ]);

        Funcionario::create([
            'nome' => 'Funcionário Exemplo',
            'cpf' => '12345678913',
            'email' => 'funcionario3@exemplo.com',
            'senha'=> bcrypt('senha123')
        ]);

        // Funcionario::factory()->count(15)->create();
    }
}
