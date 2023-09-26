<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\PacientesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'admin'])->group(function (){
    
    Route::get('/registerU', function () {
        return view('auth.register');
    })->name('registerU');

    Route::get('/empleados', function () {
        return view('layouts.empleadosTable');
    })->name('empleados');
});

//LOGIN, REGISTER AND DATA FOR TABLE
Route::get('/home', function () {
    return view('layouts.home');
})->name('home');

Route::get('/pacientes', function () {
    return view('layouts.pacientesTable');
})->name('pacientes');

Route::post('/login',[LoginController::class, 'index'])
->name('loginPost');

Route::post('/register',[LoginController::class, 'create'])
->name('registerPost');

Route::delete('/userDestroy/{id}', [LoginController::class, 'destroy'])
->name('user.destroy');

//MASCOTAS AND ANALISIS
Route::get('/mascotas/{id}',[MascotasController::class, 'index'])
->name('mascotas');

Route::get('/mascotasAnalisis/{id}',[MascotasController::class, 'analisis'])
->name('mascotasAnalisis');

Route::post('/registerM/{id_pac}',[LoginController::class, 'createMascota'])
->name('registerM');

Route::get('/hematica/{id}',[MascotasController::class, 'hematicaGet'])
->name('hematica');

Route::get('/mocoCopro/{id}',[MascotasController::class, 'mocoCoproGet'])
->name('moco_copro');

Route::get('/hormonas/{id}',[MascotasController::class, 'hormonasGet'])
->name('hormonas');

Route::get('/citologia_celular/{id}',[MascotasController::class, 'citologia_celularGet'])
->name('citologia_celular');

Route::get('/microbiologia/{id}',[MascotasController::class, 'microbiologiaGet'])
->name('microbiologia');

Route::get('/inmunologia/{id}',[MascotasController::class, 'inmunologiaGet'])
->name('inmunologia');

Route::get('/frotis_sanguineo/{id}',[MascotasController::class, 'frotis_sanguineoGet'])
->name('frotis_sanguineo');

Route::get('/coproparasitologico_sereado/{id}',[MascotasController::class, 'sereadoGet'])
->name('coproparasitologico_sereado');

Route::get('/quimica_sanquinea_can/{id}',[MascotasController::class, 'qmcCanGet'])
->name('quimica_sanquinea_can');

Route::get('/quimica_sanquinea_fel/{id}',[MascotasController::class, 'qmcFelGet'])
->name('quimica_sanquinea_fel');

Route::get('/raspado_cutaneo/{id}',[MascotasController::class, 'raspado_cutaneoGet'])
->name('raspado_cutaneo');

Route::get('/microbiologia_copro/{id}',[MascotasController::class, 'microbiologiaCoproGet'])
->name('microbiologia_copro');

Route::get('/examen_orina/{id}',[MascotasController::class, 'orinaGet'])
->name('examen_orina');

Route::post('/AnalisisMascotas/{id_masc}',[MascotasController::class, 'saveAnalisisPost'])
->name('saveAnalisisM');

Route::post('/destroyM/{id}',[MascotasController::class, 'destroy'])
->name('destroyAnalisis');

//PERSONAS PACIENTES
Route::get('/pacientes/{id}',[PacientesController::class, 'index'])
->name('pacientesH');

Route::post('/registerP',[LoginController::class, 'createPaciente'])
->name('registerP');

//EDITAR
Route::get('/editarEmpleado/{id}',[LoginController::class, 'editUserGet'])
->name('editar_Empleado');

Route::put('/editarEmpleado/{id}',[LoginController::class, 'editUser'])
->name('editar_Empleado');

Route::get('/editarPaciente/{id}',[LoginController::class, 'editPacienteGet'])
->name('editar_Paciente');

Route::put('/editarPaciente/{id}',[LoginController::class, 'editPaciente'])
->name('editar_Paciente');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
