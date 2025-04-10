<?php

namespace App\Livewire\Clientes;

use Livewire\Component;
use App\Models\Cliente;

class Edit extends Component
{
    public Cliente $cliente;
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;

    public function mount(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->cpf = $cliente->cpf;
        $this->email = $cliente->email;
    }

    public function atualizar()
    {
        $this->validate([
            'nome' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'cpf' => 'required|string|max:14',
            'email' => 'required|email|max:255|unique:clientes,email,'.$this->cliente->id,
        ]);

        $this->cliente->update([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
        ]);

        session()->flash('message', 'Cliente atualizado com sucesso!');
        return redirect()->route('clientes.index');
    }

    public function render()
    {
        return view('livewire.clientes.edit');
           
    }
}
