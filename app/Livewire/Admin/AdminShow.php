<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Admin;

class AdminShow extends Component
{
    public Admin $admin;

    public function mount(Admin $admin)
    {
        $this->admin = $admin;
    }

    public function render()
    {
        return view('livewire.admin.admin-show');
    }
}
