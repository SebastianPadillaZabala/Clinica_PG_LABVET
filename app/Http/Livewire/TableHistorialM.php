<?php

namespace App\Http\Livewire;

use App\Models\HistorialM;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class TableHistorialM extends Component
{
    public $search;

    public $id_masc;

    public function mount($id_masc){
 
      $this->id_masc = $id_masc;
 
    }

    public function render()
    {
        $historialM = new HistorialM();
        $historialM = HistorialM::where('name', 'like', '%' . $this->search .'%')
                                ->Where('id_mascota', 'like', '%' . $this->id_masc .'%')->get();
        $name = DB::table('mascotas')->where('id_masc', '=', $this->id_masc)->value('name');
        return view('livewire.table-historial-m', ['analisis' => $historialM], ['id'=> $this->id_masc,'name' => $name]);
    }
}
