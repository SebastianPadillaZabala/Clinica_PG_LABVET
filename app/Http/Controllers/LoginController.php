<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Paciente;
use App\Models\Mascota;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $email = $request->input('email');
        $pass = $request->input('password');
        $credentials = array(
            'email' => $email,
            'password' => $pass
        );
        $auth = Auth::attempt($credentials);
        if ($auth) {
            $user = Auth::user();
            return view('layouts.home');
        } else {
            return back()->withErrors([
                'message' => 'El usuario o la contraseña son incorrectos'
            ]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->ci = $request->input('CI');
        $user->celular = $request->input('celular');
        $user->role = $_POST['select'];
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return view('layouts.empleadosTable');
    }

    public function editUserGet($id)
    {
        $user = User::find($id);
        return view('auth.editUser', ['id' => $id], ['id' => $id, 'user' => $user]);
    }

    public function editPacienteGet($id)
    {
        $paciente = Paciente::find($id);
        return view('auth.editPaciente', ['id' => $id, 'paciente' => $paciente]);
    }

    public function editUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->celular = $request->input('celular');
        $user->role = $_POST['select'];
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return view('layouts.empleadosTable');
    }

    public function editPaciente(Request $request, $id)
    {
        $paciente = Paciente::find($id);
        $paciente->namePac = $request->input('name');
        $paciente->ci = $request->input('CI');
        $paciente->celular = $request->input('celular');
        $paciente->direccion = $request->input('direccion');
        $paciente->fecha_nac = $request->input('fecha_nac');
        $paciente->save();
        return view('layouts.pacientesTable');
    }

    public function createPaciente(Request $request)
    {
        $paciente = new Paciente();
        $paciente->namePac = $request->input('name');
        $paciente->ci = $request->input('ci');
        $paciente->celular = $request->input('celular');
        $paciente->direccion = $request->input('direccion');
        $paciente->fecha_nac = $request->input('fecha_nac');
        $paciente->save();
        return view('layouts.pacientesTable');
    }

    public function createMascota(Request $request, $id_pac)
    {
        $mascota = new Mascota();
        $mascota->name = $request->input('name');
        $mascota->edad = $request->input('edad');
        $mascota->raza = $request->input('raza');
        $mascota->especie = $request->input('especie');
        $mascota->color = $request->input('color');
        $mascota->sexo = $_POST['select'];
        $mascota->id_paciente = $id_pac;
        $mascota->save();
        return view('layouts.mascotasTable', ['id_pac' => $id_pac]);
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
        $user = User::findOrFail($id);
        $user->delete();
        return view('layouts.empleadosTable');
    }
}
