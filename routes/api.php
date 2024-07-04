<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\AlunoController;
// use App\Http\Controllers\Api\CursosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth:sanctum', 'aluno'])->group(function () {
    // Página Home
    Route::get('/home/{idAluno}', [AlunoController::class, 'home']);
    // Página Perfil
    Route::get('/perfil/{idAluno}', [AlunoController::class, 'perfil']);
    
    // ------------------------
    // Cursos
    // Route::get('/index', [CursosController::class, 'index']);

});
