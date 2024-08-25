<?php
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
use App\Http\Controllers\CadastroController;

<<<<<<< HEAD
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/sendForm', [CadastroController::class,'sendForm'])->name("form_send");
=======
Route::get('/', [CadastroController::class, 'index'])->name('index');

// Exibir pesquisa de um membro
Route::post('/membros/{id}', [CadastroController::class, 'show'])->name('show');

//  Salvar um registro
Route::post('/membros', [CadastroController::class, 'store'])->name('store');

// Deletar um registro
Route::delete('/membros/{id}', [CadastroController::class, 'destroy'])->name('destroy');

// Editar

// Exibir form de alteração
Route::get('/membros/edit/{id}', [CadastroController::class, 'edit'])->name('edit');

// Realizar alteração de um membro
Route::put('/membros/edit/{id}', [CadastroController::class, 'update'])->name('update');
>>>>>>> b4076238898d6617edb366f5947eee10a234ba97
