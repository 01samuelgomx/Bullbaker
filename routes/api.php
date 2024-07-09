<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\AlunoController;
use App\Http\Controllers\Api\CursosController;
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
    // ------------------------
    // Alunos
    Route::get('/perfil/{idAluno}', [AlunoController::class, 'perfil']);
    Route::post('/update/{idAluno}', [AlunoController::class, 'update']);
    
    // ------------------------
    // Cursos
    Route::get('/listarCursos', [CursosController::class, 'listarCursos']);
    Route::get('/saibaMais/{idCurso}', [CursosController::class, 'saibaMais']);
    Route::get('/aula/{idCurso}', [CursosController::class, 'aula']);




});
