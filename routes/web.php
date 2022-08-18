<?php

use App\Http\Controllers\BoletinController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [GeneralController::class, 'principal']);

Route::get('/principal/{boletine:id}', [GeneralController::class, 'showBoletine']);

Route::get('/conocenos', function () {
    return view('nosotros.nosotros');
});
Route::get('/conocenos/mensaje', function () {
    return view('nosotros.mensaje');
});
Route::get('/conocenos/mision', function () {
    return view('nosotros.mision');
});
Route::get('/conocenos/vision', function () {
    return view('nosotros.vision');
});
Route::get('/conocenos/valores', function () {
    return view('nosotros.valores');
});
Route::get('/conocenos/calidad', function () {
    return view('nosotros.calidad');
});
Route::get('/conocenos/organigrama', function () {
    return view('nosotros.organigrama');
});
Route::get('/conocenos/directorio', function () {
    return view('nosotros.directorio');
});
Route::get('/conocenos/avisos', function () {
    return view('nosotros.avisos');
});
Route::get('/conocenos/normateca', function () {
    return view('nosotros.normateca');
});
// ============================== OFERTA EDUCATIVA ===========================
Route::get('/oferta', function () {
    return view('oferta.presencial');
});
Route::get('/oferta/presencial', function () {
    return view('oferta.presencial');
});
Route::get('/oferta/distancia', function () {
    return view('oferta.distancia');
});
// carreras presenciales
Route::get('/oferta/arquitectura', function () {
    return view('oferta.presencial.arquitectura');
});
Route::get('/oferta/cp', function () {
    return view('oferta.presencial.cp');
});
Route::get('/oferta/admon', function () {
    return view('oferta.presencial.admon');
});
Route::get('/oferta/isc', function () {
    return view('oferta.presencial.isc');
});
Route::get('/oferta/electromecanica', function () {
    return view('oferta.presencial.electromecanica');
});
Route::get('/oferta/ige', function () {
    return view('oferta.presencial.ige');
});

// ======================== ESTUDIANTES =========================
Route::get('/estudiantes', function () {
    return view('estudiantes.reinscripcion');
});
Route::get('/estudiantes/reinscripcion', function () {
    return view('estudiantes.reinscripcion');
});
Route::get('/estudiantes/act_complementarias', function () {
    return view('estudiantes.complementarias');
});
Route::get('/estudiantes/servicio_social', function () {
    return view('estudiantes.servicio_social');
});
Route::get('/estudiantes/titulacion', function () {
    return view('estudiantes.titulacion');
});
Route::get('/estudiantes/egresados', function () {
    return view('estudiantes.egresados');
});
Route::get('/estudiantes/bolsa', function () {
    return view('estudiantes.bolsa');
});
Route::get('/estudiantes/buzon', function () {
    return view('estudiantes.buzon');
});
Route::get('/estudiantes/lineamientos', function () {
    return view('estudiantes.lineamientos');
});
Route::get('/estudiantes/reglamentos', function () {
    return view('estudiantes.reglamentos');
});
Route::get('/estudiantes/biblioteca_digital', function () {
    return view('estudiantes.biblioteca_digital');
});
Route::get('/estudiantes/act_extraescolares', function () {
    return view('estudiantes.extraescolares');
});
Route::get('/estudiantes/cisco', function () {
    return view('estudiantes.cisco');
});
Route::get('/estudiantes/encuestas', function () {
    return view('estudiantes.encuestas');
});
Route::get('/estudiantes/residencias', function () {
    return view('estudiantes.residencias');
});

// =================== ASPIRANTES ===================
Route::get('/becas', function () {
    return view('becas.resultados');
});
Route::get('/becas/resultados', function () {
    return view('becas.resultados');
});

// ================ ASPIRANTES ==============
Route::get('/aspirantes', function () {
    return view('aspirantes.fichas');
});
Route::get('/aspirantes/fichas', function () {
    return view('aspirantes.fichas');
});
Route::get('/aspirantes/formatos', function () {
    return view('aspirantes.formatos');
});
/**
 * Recordar realizar boletines
 */
Route::get('/usuarios/login', function () {
    return view('usuarios.login');
});
// Cerrar sesión
Route::get('/usuarios/logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('/usuarios/login', [LoginController::class, 'login'])->name('login');
Route::get('/usuarios/agregar', [UserController::class, 'agregarVista'])->middleware(RoleMiddleware::class);;
Route::post('/usuarios/agregar', [UserController::class, 'agregar'])->name('user.add')->middleware(RoleMiddleware::class);
Route::get('/usuarios/mostrar', [UserController::class, 'mostrar'])->name('usersShow')->middleware(RoleMiddleware::class);
Route::post('/usuarios/editar', [UserController::class, 'editar'])->middleware(RoleMiddleware::class);
Route::get('/usuarios/panel', [PanelController::class, 'showPanel'])->name('panel');
Route::get('/usuarios/{user:id}', [UserController::class, 'editarView'])->name('editUser')->middleware(RoleMiddleware::class);
Route::get('/usuarios/eliminar/{user:id}', [UserController::class, 'eliminar'])->middleware(RoleMiddleware::class);

//===================== BOLETINES ==================
Route::get('/boletines/agregar', [BoletinController::class, 'create']);
Route::post('/boletines/agregar', [BoletinController::class, 'createBoletine'])->name('boletine');
Route::get('/boletines/mostrar', [BoletinController::class, 'show'])->name('mostrar.boletin');
Route::post('/boletines/editar', [BoletinController::class, 'editar']);
Route::get('/boletines/propiedades/{boletine:id}', [BoletinController::class, 'properties'])->name('boletine.propertie');
Route::get('/boletines/{boletine:id}', [BoletinController::class, 'editarView'])->name('boletine.editar');
Route::get('/boletines/eliminar/{boletine:id}', [BoletinController::class, 'eliminar']);

//===================== SLIDERS ==================
Route::get('/sliders/agregar', [SliderController::class, 'create']);
Route::post('/sliders/agregar', [SliderController::class, 'createSlider']);
Route::get('/sliders/mostrar', [SliderController::class, 'show'])->name('mostrar.slider');
Route::post('/sliders/editar', [SliderController::class, 'editar']);
Route::get('/sliders/propiedades/{slider:id}', [SliderController::class, 'properties'])->name('slider.propertie');
Route::get('/sliders/{slider:id}', [SliderController::class, 'editarView'])->name('slider.editar');
Route::get('/sliders/eliminar/{slider:id}', [SliderController::class, 'eliminar']);


