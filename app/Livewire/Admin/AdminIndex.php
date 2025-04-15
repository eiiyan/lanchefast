<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Livewire\WithPagination;

class AdminIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];

    public function render()
    {
        $admins = Admin::where('nome', 'like', "%{$this->search}%")
            ->orWhere('cpf', 'like', "%{$this->search}%")
            ->orWhere('email', 'like', "%{$this->search}%")
            ->paginate($this->perPage);

        return view('livewire.admin.admin-index', compact('admins'));
    }

    public function delete($id)
    {
        Admin::findOrFail($id)->delete();
        session()->flash('message', 'Admin deletado com sucesso');
    }
}
