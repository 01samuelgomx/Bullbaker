<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\sobreController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//--------------------------------------------------------------------------
//  Web Routes
//--------------------------------------------------------------------------
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/sobre',[sobreController::class, 'sobre'])->name('sobre');
Route::get('/cursos', [ CursosController::class, 'cursos'])->name('cursos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');

//--------------------------------------------------------------------------
//  Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('login');


//--------------------------------------------------------------------------
// Crud Aluno

Route::middleware('autenticacao:aluno')->group(function () {
    Route::get('/dashboard/administrativo/aluno/index', [AlunoController::class, 'index'])->name('index.aluno'); 

    Route::get('/dashboard/administrativo/aluno/create', [AlunoController::class, 'create'])->name('create.aluno'); // rota de Acesso ao formulario
    Route::post('/dashboard/administrativo/aluno', [AlunoController::class, 'cadAluno'])->name('cad.aluno'); // Cadastro do aluno
    Route::get('/dashboard/administrativo/aluno/{id}/edit', [AlunoController::class, 'edit'])->name('edit.aluno');// rota de Acesso ao formulario
    Route::put('/dashboard/administrativo/aluno/{id}', [AlunoController::class, 'update'])->name('update.aluno'); // Atualização do aluno
    Route::delete('/dashboard/administrativo/aluno/{id}', [AlunoController::class, 'destroy'])->name('delete.aluno'); // Deletar os dados
});

//--------------------------------------------------------------------------
//  Crud Cursos

Route::middleware('autenticacao:aluno')->group(function () {
    Route::get('/dashboard/administrativo/cursos/index', [CursosController::class, 'index'])->name('index.curso'); 

    Route::get('/dashboard/administrativo/cursos/create', [CursosController::class, 'create'])->name('create.curso'); // rota de Acesso ao formulario
    Route::post('/dashboard/administrativo/cursos', [CursosController::class, 'cadcurso'])->name('cad.curso'); // Cadastro do curso
    Route::get('/dashboard/administrativo/cursos/{id}/edit', [CursosController::class, 'edit'])->name('edit.curso');// rota de Acesso ao formulario
    Route::put('/dashboard/administrativo/cursos/{id}', [CursosController::class, 'update'])->name('update.curso'); // Atualização do curso
    Route::delete('/dashboard/administrativo/cursos/{id}', [CursosController::class, 'destroy'])->name('delete.curso'); // Deletar os dados
});

//--------------------------------------------------------------------------
//  Crud Aulas

// Route::prefix('/dashboard/administrativo/aulas')->group(function () {
//     Route::get('/index', [AulaController::class, 'index'])->name('index'); 
//     Route::get('/create', [AulaController::class, 'create'])->name('create'); // rota de Acesso ao formulario
//     Route::post('/cad', [AulaController::class, 'cad'])->name('cad'); //Cadastro do Aulas
//     Route::get('/{id}/edit', [AulaController::class, 'edit'])->name('edit');// rota de Acesso ao formulario
//     Route::post('/{id}/update', [AulaController::class, 'update'])->name('update'); //Atualização dos dados
//     Route::put('/desativar', [AulaController::class, 'destroy'])->name('destroy'); // Deletar os dados
// });

//--------------------------------------------------------------------------
//  SAIR ROUTES
Route::get('/sair', function(){
    session()->flush();
    return redirect('/');
})->name('sair');
