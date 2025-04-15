<?php

namespace App\Livewire\Funcionario;

use Livewire\Component;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Hash;

class FuncionarioEdit extends Component
{
    public Funcionario $funcionario;
    public $nome;
    public $cpf;
    public $email;
    public $senha;

    public function mount(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
        $this->nome = $funcionario->nome;
        $this->cpf = $funcionario->cpf;
        $this->email = $funcionario->email;
        $this->senha = '';
    }

    public function atualizar()
    {
        $this->validate([
            'nome' => 'required|string|max:80',
            'cpf' => 'required|string|max:11|unique:funcionarios,cpf,' . $this->funcionario->id,
            'email' => 'required|email|max:80|unique:funcionarios,email,' . $this->funcionario->id,
            'senha' => 'nullable|min:5|max:255',
        ]);

        $data = [
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
        ];

        if (!empty($this->senha)) {
            $data['senha'] = Hash::make($this->senha);
        }

        $this->funcionario->update($data);

        session()->flash('message', 'Funcionário atualizado com sucesso!');
        return redirect()->route('funcionarios.index');
    }

    public function render()
    {
        return view('livewire.funcionario.funcionario-edit');
    }
}
