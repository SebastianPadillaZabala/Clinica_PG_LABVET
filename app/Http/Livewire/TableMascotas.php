<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mascota;

class TableMascotas extends Component
{
    public $search;

    public $id_pac;

    public function mount($id_pac){
 
      $this->id_pac = $id_pac;
 
    }

    public function render()
    {
        $mascotas = new Mascota();
        $mascotas = Mascota::where('name', 'like', '%' . $this->search .'%')
                           ->Where('id_paciente', 'like', '%' . $this->id_pac .'%')->get();
        return view('livewire.table-mascotas', ['mascotas' => $mascotas]);
    }
}
