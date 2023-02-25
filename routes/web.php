<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
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



//linkando a rota com o controller
Route::get('/user/{user}',[UserController::class, 'show'])->name('user.show');

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rotas para estudo

// Route::prefix('usuarios')->group(function() {
    
//     Route::get('', function () {
//         return 'usuário';
//     })->name('usuarios');

//     Route::get('/{id}', function () {
//         return 'Mostrar detalhes do usuário';
//     })->name('usuarios_show');

//     Route::get('/{id}/tag', function () {
//         return 'Tags do usuário';
//     })->name('usuariosTags');

// });

// Route::get('/a-empresa/{string?}', function ($string = null) {
//     return $string;
// });

// Route::get('/request', function (Request $request) {
//     //$r = $request->header();
//     $r = $request->whenHas('keyword', function($input){
//         dd('x', $input);
//     });

//     if($r) {
//         dd('Faça alguma coisa!');
//     }

//     dd($r);
//     return 'x';
// })->name('request');

