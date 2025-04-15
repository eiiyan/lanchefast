<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminEdit extends Component
{
    public Admin $admin;
    public $nome;
    public $cpf;
    public $email;
    public $senha;

    public function mount(Admin $admin)
    {
        $this->admin = $admin;
        $this->nome = $admin->nome;
        $this->cpf = $admin->cpf;
        $this->email = $admin->email;
        $this->senha = '';
    }

    public function atualizar()
    {
        $this->validate([
            'nome' => 'required|string|max:80',
            'cpf' => 'required|string|max:11|unique:admins,cpf,' . $this->admin->id,
            'email' => 'required|email|max:80|unique:admins,email,' . $this->admin->id,
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

        $this->admin->update($data);

        session()->flash('message', 'Admin atualizado com sucesso!');
        return redirect()->route('admins.index');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit');
    }
}
