<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassageirosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//ROTAS DE INCLUSÃO
Route::get('/passageiros/incluir', function () {
    return view('passageiros.incluir');
})->name('passageiros.novo');
Route::post('/passageiros/incluir', [PassageirosController::class, 'incluir'])->name('passageiros.incluir');

//ROTA DE LISTAGEM
Route::get('/passageiros/listar', [PassageirosController::class, 'listar'])->name('passageiros.listar');

//ROTA PARA REMOÇÃO
Route::get('/passageiros/remover/{id}', [PassageirosController::class, 'deletar'])->name('passageiros.remover');

