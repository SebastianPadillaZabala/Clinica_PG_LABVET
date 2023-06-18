<?php

namespace App\Http\Livewire;

use App\Models\HistorialP;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class TableHistorialP extends Component
{
    public $search;

    public $id_pac;

    public function mount($id_pac){
 
      $this->id_pac = $id_pac;
 
    }

    public function render()
    {
        $historialP = new HistorialP();
        $historialP = HistorialP::where('name', 'like', '%' . $this->search .'%')
                                ->Where('id_paciente', 'like', '%' . $this->id_pac .'%')->get();
        $name = DB::table('pacientes')->where('id_pac', '=', $this->id_pac)->value('namePac');
        return view('livewire.table-historial-p', ['analisis' => $historialP], ['id'=> $this->id_pac,'name' => $name]);
    }
}
