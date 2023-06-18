<?php

namespace App\Http\Livewire;

use App\Models\Paciente;
use Livewire\Component;

class TablePacientes extends Component
{
    public $search;
    
    public function render()
    {
        $pacientes = new Paciente();
        $pacientes = Paciente::where('ci', 'like', '%' . $this->search .'%')->get();
        return view('livewire.table-pacientes', ['pacientes' => $pacientes]);
    }
}
