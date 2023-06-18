<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class TableEmpleados extends Component
{
    public $search;
    
    public function render()
    {
        $users = new User();
        $users = User::where('name', 'like', '%' . $this->search .'%')
                       ->orWhere('role', 'like', '%' . $this->search .'%')->get();
        return view('livewire.table-empleados', ['users' => $users]);
    }
}
