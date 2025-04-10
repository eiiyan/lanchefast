<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Cliente Exemplo',
            'endereco' => 'Rua Exemplo 123',
            'telefone' => '11999999999',
            'cpf' => '12345678910',
            'email' => 'cliente1@exemplo.com',
            'senha' => bcrypt('senha123')

        ]);
        Cliente::create([
            'nome' => 'Cliente Exemplo',
            'endereco' => 'Rua Exemplo 123',
            'telefone' => '11999999999',
            'cpf' => '12345678911',
            'email' => 'cliente2@exemplo.com',
            'senha' => bcrypt('senha123')
        ]);

        Cliente::create([
            'nome' => 'Cliente Exemplo',
            'endereco' => 'Rua Exemplo 123',
            'telefone' => '11999999999',
            'cpf' => '12345678912',
            'email' => 'cliente3@exemplo.com',
            'senha' => bcrypt('senha123')
        ]);
    }
}
