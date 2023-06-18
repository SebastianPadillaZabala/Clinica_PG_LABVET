<?php

namespace App\Http\Controllers;

use App\Models\HistorialM;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('layouts.mascotasTable', ['id_pac' => $id]);
    }

    public function analisis($id)
    {
        return view('layouts.historialMascota', ['id_masc' => $id]);
    }

    public function hematicaGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.biometria_hematica',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function mocoCoproGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.moco_copro',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function hormonasGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.hormonas',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function citologia_celularGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.citologia_celular',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function microbiologiaGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.microbiologia',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function inmunologiaGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.inmunologia',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    
    public function frotis_sanguineoGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.frotis_sanguineo',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function sereadoGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.coproparasitologico_sereado',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function qmcCanGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.quimica_sanguinea_can',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function qmcFelGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.quimica_sanguinea_fel',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function raspado_cutaneoGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.raspado_cutaneo',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function microbiologiaCoproGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.microbiologia_copro',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function orinaGet($id){
        $mascota = Mascota::find($id);
        $propietario = DB::table('pacientes')
        ->join('mascotas', 'pacientes.id_pac', '=', 'mascotas.id_paciente')
        ->select('pacientes.namePac')
        ->where('mascotas.id_masc', '=', $id)->get();
        return view('analisis.examen_orina',['mascota' => $mascota], ['id' => $id, 'propietario' => $propietario]);
    }

    public function saveAnalisisPost(Request $request, $id)
    {
        $analisis = new HistorialM();
        $analisis->name = $request->input('name');
        $analisis->fecha = $request->input('fecha');
        $analisis->id_mascota = $id;
        $file = $request->file('file');
        if (Storage::putFileAs('/public/'.'mascostas/' . $id . '/', $file, time() . '_' . $file->getClientOriginalName())) {
            $analisis->url = time() . '_' . $file->getClientOriginalName();
            $analisis->save();
            return redirect()->route('mascotasAnalisis', ['id' => $id]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
