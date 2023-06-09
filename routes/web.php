<?php

use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BovinosController;
use App\Http\Controllers\RebanhosController;
use App\Http\Controllers\PesagensController;
use App\Http\Controllers\AlimentosController;
use App\Http\Controllers\MedicamentosController;
use App\Http\Controllers\VacinasController;
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

// ROTAS DO BACKOFFICE
Route::group(['prefix' => 'backoffice'], function(){
    Route::get('', [BackOfficeController::class, 'index'])->name('backoffice.index')->middleware('auth:admin');
    Route::get('/login', [LoginController::class, 'loginBackOffice'])->name('backoffice.login');
    Route::post('/login', [LoginController::class, 'authBackOffice'])->name('backoffice.login');

    Route::group(['prefix' => 'companies', 'middleware' => 'auth:admin'], function () {
        Route::get('', [CompanyController::class, 'index'])->name('backoffice.company.index');
        Route::post('/new', [CompanyController::class, 'newCompany'])->name('backoffice.company.new');
        Route::view('/new', 'backoffice.companies.new')->name('backoffice.company.new');
    });

    Route::group(['prefix' => 'users', 'middleware' => 'auth:admin'], function () {
        Route::get('', [UserAdminController::class, 'index'])->name('backoffice.user.index');
        Route::post('/new', [UserAdminController::class, 'newUser'])->name('backoffice.user.new');
        Route::view('/new', 'backoffice.users.new')->name('backoffice.user.new');
        Route::get('excluir/{id}', [UserAdminController::class, 'deleteUser'])->name('backoffice.user.delete');
    });

    Route::get('/logout', [LoginController::class, 'logoutBackOffice'])->name('backoffice.logout');
});

// ROTAS DO SITE
Route::get('/login', [LoginController::class, 'loginSite'])->name('site.login');
Route::post('/login', [LoginController::class, 'authSite'])->name('site.login');
Route::get('/logout', [LoginController::class, 'logoutSite'])->name('site.logout');

Route::group(['prefix' => 'ajax'], function(){
     Route::get('/getBovinosByGender', [BovinosController::class, 'getBovinosByGender'])->name('site.ajaxMetrics');
     Route::post('/getBovinoById', [BovinosController::class, 'getBovinoById'])->name('site.bovinos.id');
     Route::post('/getBovinosByFlock', [BovinosController::class, 'getBovinosByFlock'])->name('site.bovinos.rebanho');
});


Route::group(['prefix' => 'bovinos', 'middleware' => "auth"], function (){
    Route::get('/', [BovinosController::class, 'index'])->name('site.bovinos.index');
    Route::get('/adicionar', [BovinosController::class, 'novoBovino'])->name('site.bovinos.adicionar');
    Route::post('/adicionar', [BovinosController::class, 'cadastarBovino'])->name('site.bovinos.adicionar');
    Route::post('/editar', [BovinosController::class, 'editarBovino'])->name('site.bovinos.editar');
    Route::get('/excluir/{id}', [BovinosController::class, 'excluirBovino'])->name('site.bovinos.excluir');
});

Route::group(['prefix' => 'rebanhos', 'middleware' => "auth"], function () {
    Route::get('', [RebanhosController::class, 'index'])->name('site.rebanhos.index');
    Route::post('', [RebanhosController::class, 'novoRebanho'])->name('site.rebanhos.novo');
    Route::get('/excluir/{id}', [RebanhosController::class, 'excluirRebanhos'])->name('site.rebanhos.excluir');

});

Route::group(['prefix' => 'pesagens', 'middleware' => "auth"], function() {
    Route::get('', [PesagensController::class, 'index'])->name('site.pesagens.index');
    Route::post('/novo', [PesagensController::class, 'novaPesagem'])->name('site.pesagens.novo');
});

Route::group(['prefix' => 'alimentos', 'middleware' => "auth"], function() {
    Route::get('', [AlimentosController::class, 'index'])->name('site.alimentos.index');
    Route::post('/newAlimento', [AlimentosController::class, 'addAlimento'])->name('site.alimentos.novo');
    Route::get('/excluir/{id}', [AlimentosController::class, 'excluirAlimento'])->name('site.alimentos.excluir');

});

Route::group(['prefix' => 'medicamentos', 'middleware' => "auth"], function() {
    Route::get('', [MedicamentosController::class, 'index'])->name('site.medicamentos.index');
    Route::post('/newMedicamento', [MedicamentosController::class, 'addMedicamento'])->name('site.medicamentos.novo');
    Route::get('/excluir/{id}', [MedicamentosController::class, 'excluirMedicamento'])->name('site.medicamentos.excluir');
});

Route::group(['prefix' => 'vacinas', 'middleware' => "auth"], function(){
    Route::get('', [VacinasController::class, 'index'])->name('site.vacinas.index');
    Route::post('novo', [VacinasController::class, 'novaVacina'])->name('site.vacinas.novo');
    Route::get('/excluir/{id}', [VacinasController::class, 'excluirVacina'])->name('site.vacinas.excluir');
});

Route::group(['prefix' => 'eventos', 'middleware' => 'auth'], function(){

    Route::group(['prefix' => 'alimentacao', 'middleware' => 'auth'], function(){
        Route::get('', [EventosController::class,'listEventosAlimentacao'])->name('site.eventosAlimentacao.index');
        Route::post('/novo', [EventosController::class,'novoEventoAlimentacao'])->name('site.eventosAlimentacao.novo');
    });

    Route::group(['prefix' => 'medicacao', 'middleware' => 'auth'], function (){
       Route::get('', [EventosController::class, 'listEventosMedicacao'])->name('site.eventosMedicacao.index');
       Route::post('novo', [EventosController::class, 'novoEventoMedicacao'])->name('site.eventosMedicacao.novo');
    });

    Route::group(['prefix' => 'vacinacao', 'middleware' => 'auth'], function (){
       Route::get('', [EventosController::class, 'listEventosVacinacao'])->name('site.eventosVacinacao.index');
       Route::post('novo', [EventosController::class, 'novoEventoVacinacao'])->name('site.eventosVacinacao.novo');
    });
});

Route::group(['prefix' => 'usuarios', 'middleware' => "auth"], function(){
    Route::get('', [UserController::class, 'index'])->name('site.usuarios.index');
    Route::post('novo', [UserController::class, 'novoUsuario'])->name('site.usuarios.novo');
    Route::view('/novo', 'site.users.new')->name('site.usuarios.novo');
    Route::get('/excluir/{id}', [UserController::class, 'excluirUsuario'])->name('site.usuario.excluir');
});

Route::get('/', [HomeController::class, 'index'])->name('site.index')->middleware('auth');


Route::get('/404', function(){
    abort('404');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
