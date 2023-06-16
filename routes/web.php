<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;


Route::get('/aula08', [EventController::class, 'aula08']);

//create
Route::get('/aula15', [EventController::class, 'aula15']);

//botão do formulário!
Route::post('/aulas',[EventController::class,'store']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/produtos', [EventController::class, 'produtos']);

Route::get('/contatos', [EventController::class, 'contatos']);

Route::get('/welcome', function () {



    return view('welcome',);
});





// esse é um jeito funcional para enviar parametros
// a interrogação torna um parâmetro não obrigatório
Route::get('/aulas/{id?}', function ($id = null) {
    $nome = "Gustavo";
    $idade = 20;
    $array = [
        1,
        2,
    ];

    return view('tela1',[
                            'id' => $id,
                            'nome' => $nome,
                            'idade' => $idade,
                            'array' => $array
                        ]);
});


