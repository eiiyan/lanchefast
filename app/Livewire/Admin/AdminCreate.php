<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminCreate extends Component
{
    public $nome;
    public $cpf;
    public $email;
    public $senha;

    protected $rules = [
        'nome' => 'required|min:5|max:80',
        'cpf' => 'required|unique:admins,cpf|max:11',
        'email' => 'required|unique:admins,email|min:5|max:80',
        'senha' => 'required|min:5|max:255'
    ];

    protected $messages = [
        'nome.required' => 'nome é obrigatório',
        'nome.min' => 'nome requer no mínimo 5 caracteres',
        'nome.max' => 'nome requer no máximo 80 caracteres',
        'cpf.required' => 'cpf é obrigatório',
        'cpf.max' => 'cpf requer no máximo 11 caracteres',
        'cpf.unique' => 'cpf é único',
        'email.required' => 'email é obrigatório',
        'email.min' => 'email requer no mínimo 5 caracteres',
        'email.max' => 'email requer no máximo 80 caracteres',
        'email.unique' => 'email é único',
        'senha.required' => 'senha é obrigatória',
        'senha.min' => 'senha requer no mínimo 5 caracteres',
        'senha.max' => 'senha requer no máximo 255 caracteres',
    ];

    public function salvar()
    {
        $this->validate();

        Admin::create([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => Hash::make($this->senha)
        ]);

        session()->flash('success', 'Cadastro realizado com sucesso!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.admin-create');
    }
}
