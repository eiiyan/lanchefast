<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    protected $rules = [
        'nome' => 'required|min:5|max:80',
        'endereco' => 'required|min:5|max:80',
        'telefone' => 'required|max:80',
        'cpf'=> 'required|unique:clientes,cpf|max:11',
        'email'=>'required|unique:clientes,email|min:5|max:80',
        'senha'=>'required|min:5|max:255'
    ];

    protected $messages = [
        'nome.required' => 'nome é obrigatório',
        'nome.min'=>'nome requer no mínimo 5 caracteres',
        'nome.max'=>'nome requer no máximo 80 caracteres',
        'endereco.required' => 'endereço é obrigatório',
        'endereco.min'=>'endereço requer no mínimo 5 caracteres',
        'endereco.max'=>'endereço requer no máximo 80 caracteres',
        'telefone.required' => 'telefone é obrigatório',
        'telefone.min'=>'telefone requer no mínimo 5 caracteres',
        'telefone.max'=>'telefone requer no máximo 11 caracteres',
        'cpf.required' => 'cpf é obrigatório',
        'cpf.max'=>'cpf requer no máximo 80 caracteres',
        'cpf.unique' => 'cpf é único',
        'email.required'=>'email é obrigatório',
        'email.min'=>'email requer no mínimo 5 caracteres',
        'email.max'=>'email requer no máximo 80 caracteres',
        'email.unique'=>'email é único',
        'senha.required'=>'senha é obrigatória',
        'senha.min'=>'senha requer no mínimo 5 caracteres',
        'senha.max'=>'senha requer no máximo 80 caracteres',
        
    ];

    public function salvar()
    {
       $this->validate();

        Cliente::create([
            'nome' => $this->nome,
            'endereco'=>$this->endereco,
            'telefone' => $this->telefone,
            'cpf'=> $this->cpf,
            'email'=> $this->email,
            'senha'=> Hash::make($this->senha)
        ]);

        session()->flash('success', 'Cadastro realizado com sucesso!');

      //  $this->reset();
    }


    public function render()
    {
        return view('livewire.clientes.create');
    }
}