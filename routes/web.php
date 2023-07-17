<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HipotesesController;
use App\Http\Controllers\ImpactoController;
use App\Http\Controllers\TecnologiaController;
use App\Http\Controllers\EmpatiaController;
use App\Http\Controllers\PropuestaController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\PitchController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\IntegranteController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'inicio')->name('inicio');
Route::view('/nosotros', 'nosotros')->name('nosotros');

Route::get('/proyectos/inicial', [ProjectController::class, 'allProjects'])->name('proyectos.inicial');
Route::get('/proyectos/incubacion', [ProjectController::class, 'allProjects'])->name('proyectos.incubacion');
Route::get('/proyectos/finalizado', [ProjectController::class, 'allProjects'])->name('proyectos.finalizado');
Route::get('/proyecto/{project}/', [ProjectController::class, 'show'])->name('proyectovista');
Route::get('/proyecto/{project}/contactar-autor', [ContactoController::class, 'show'])->name('contactarautor.show');
Route::put('/proyectos/{project}/', [ProjectController::class, 'updateStatus'])->name('proyecto.update');
Route::get('/proyecto/{project}/hipoteses/', [HipotesesController::class, 'show'])->name('hipotesespublico.show');
Route::get('/proyecto/{project}/impacto/', [ImpactoController::class, 'show'])->name('impactopublico.show');
Route::get('/proyecto/{project}/tecnologias/', [TecnologiaController::class, 'show'])->name('tecnologiaspublico.show');
Route::get('/proyecto/{project}/mapa-de-empatia/', [EmpatiaController::class, 'show'])->name('empatiapublico.show');
Route::get('/proyecto/{project}/propuesta-de-valor/', [PropuestaController::class, 'show'])->name('propuestapublico.show');
Route::get('/proyecto/{project}/modelo-de-negocio/', [NegocioController::class, 'show'])->name('negociopublico.show');
Route::get('/proyecto/{project}/pitch/', [PitchController::class, 'show'])->name('pitchpublico.show');

Route::view('/contacto', 'contacto')->name('contacto');

Route::view('/registro', 'auth.registro')->name('registro')->middleware('guest');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro')->middleware('guest');

Route::view('/login', 'auth.login')->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->name('login')->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/restaurar-contraseña', [PasswordController::class, 'email'])->name('email')->middleware('guest');
Route::post('enlace', [PasswordController::class, 'enlace'])->name('enlace')->middleware('guest');
Route::get('clave/{token}', [PasswordController::class, 'clave'])->name('clave')->middleware('guest');
Route::post('cambiar', [PasswordController::class, 'cambiar'])->name('cambiar')->middleware('guest');

Route::group(['middleware' => ['auth']], function () {

    Route::view('/perfil', 'perfil')->name('perfil');
    Route::put('/perfil', [PerfilController::class, 'update']);

    Route::get('/mis-proyectos', [ProjectController::class, 'index'])->name('misproyectos');
    Route::get('/registrar-proyecto', [ProjectController::class, 'create'])->name('proyecto');
    Route::post('/registrar-proyecto', [ProjectController::class, 'store'])->name('proyecto');
    Route::get('/mis-proyectos/{project}/actualizarproyecto/', [ProjectController::class, 'edit'])->name('actualizarproyecto');
    Route::put('/mis-proyectos/{project}/actualizarproyecto/', [ProjectController::class, 'update'])->name('actualizarproyecto.update');
    Route::delete('/mis-proyectos/{project}/actualizarproyecto/{integrante}', [ProjectController::class, 'eliminarIntegrante'])->name('eliminarintegrante');

    Route::get('/mis-proyectos/{project}/hipotesis/', [HipotesesController::class, 'create'])->name('hipoteses.create');
    Route::post('/mis-proyectos/{project}/hipotesis/', [HipotesesController::class, 'store'])->name('hipoteses.store');
    Route::get('/mis-proyectos/{project}/hipotesis/{hipotesis}/editar', [HipotesesController::class, 'edit'])->name('hipoteses.edit');
    Route::put('/mis-proyectos/{project}/hipotesis/{hipoteses}', [HipotesesController::class, 'update'])->name('hipoteses.update');

    Route::get('/mis-proyectos/{project}/impacto/', [ImpactoController::class, 'create'])->name('impacto.create');
    Route::post('/mis-proyectos/{project}/impacto/', [ImpactoController::class, 'store'])->name('impacto.store');
    Route::get('/mis-proyectos/{project}/impacto/{impacto}/editar', [ImpactoController::class, 'edit'])->name('impacto.edit');
    Route::put('/mis-proyectos/{project}/impacto/{impacto}', [ImpactoController::class, 'update'])->name('impacto.update');

    Route::get('/mis-proyectos/{project}/tecnologias/', [TecnologiaController::class, 'create'])->name('tecnologias.create');
    Route::post('/mis-proyectos/{project}/tecnologias/', [TecnologiaController::class, 'store'])->name('tecnologias.store');
    Route::get('/mis-proyectos/{project}/tecnologias/{tecnologia}/editar', [TecnologiaController::class, 'edit'])->name('tecnologias.edit');
    Route::put('/mis-proyectos/{project}/tecnologias/{tecnologia}', [TecnologiaController::class, 'update'])->name('tecnologias.update');

    Route::get('/mis-proyectos/{project}/mapa-de-empatia/', [EmpatiaController::class, 'create'])->name('empatia.create');
    Route::post('/mis-proyectos/{project}/mapa-de-empatia/', [EmpatiaController::class, 'store'])->name('empatia.store');
    Route::get('/mis-proyectos/{project}/mapa-de-empatia/{empatia}/editar', [EmpatiaController::class, 'edit'])->name('empatia.edit');
    Route::put('/mis-proyectos/{project}/mapa-de-empatia/{empatia}', [EmpatiaController::class, 'update'])->name('empatia.update');

    Route::get('/mis-proyectos/{project}/propuesta-de-valor/', [PropuestaController::class, 'create'])->name('propuesta.create');
    Route::post('/mis-proyectos/{project}/propuesta-de-valor/', [PropuestaController::class, 'store'])->name('propuesta.store');
    Route::get('/mis-proyectos/{project}/propuesta-de-valor/{propuesta}/editar', [PropuestaController::class, 'edit'])->name('propuesta.edit');
    Route::put('/mis-proyectos/{project}/propuesta-de-valor/{propuesta}', [PropuestaController::class, 'update'])->name('propuesta.update');

    Route::get('/mis-proyectos/{project}/modelo-de-negocio/', [NegocioController::class, 'create'])->name('negocio.create');
    Route::post('/mis-proyectos/{project}/modelo-de-negocio/', [NegocioController::class, 'store'])->name('negocio.store');
    Route::get('/mis-proyectos/{project}/modelo-de-negocio/{negocio}/editar', [NegocioController::class, 'edit'])->name('negocio.edit');
    Route::put('/mis-proyectos/{project}/modelo-de-negocio/{negocio}', [NegocioController::class, 'update'])->name('negocio.update');

    Route::get('/mis-proyectos/{project}/pitch/', [PitchController::class, 'create'])->name('pitch.create');
    Route::post('/mis-proyectos/{project}/pitch/', [PitchController::class, 'store'])->name('pitch.store');
    Route::get('/mis-proyectos/{project}/pitch/{pitch}/editar', [PitchController::class, 'edit'])->name('pitch.edit');
    Route::put('/mis-proyectos/{project}/pitch/{pitch}', [PitchController::class, 'update'])->name('pitch.update');
});
