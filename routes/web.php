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
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('login');

//--------------------------------------------------------------------------
//  Dashboard
//--------------------------------------------------------------------------

//--------------------------------------------------------------------------
//  Crud Aluno
Route::prefix('/dashboard/administrativo/aluno')->group(function () {
    Route::get('/index', [AlunoController::class, 'index'])->name('index'); 
    Route::get('/create', [AlunoController::class, 'create'])->name('create'); // rota de Acesso ao formulario
    Route::post('/cadAluno', [AlunoController::class, 'cadAluno'])->name('cadAluno'); //Cadastro do aluno
    Route::get('/{id}/edit', [AlunoController::class, 'edit'])->name('editAluno');// rota de Acesso ao formulario
    Route::post('/{id}/update', [AlunoController::class, 'update'])->name('update'); //Atualização dos dados
    Route::put('/desativar', [AlunoController::class, 'destroy'])->name('destroy'); // Deletar os dados
});

//--------------------------------------------------------------------------
//  Crud Cursos
Route::prefix('/dashboard/administrativo/cursos')->group(function () {
    Route::get('/index', [CursosController::class, 'index'])->name('index'); 
    Route::get('/create', [CursosController::class, 'create'])->name('create'); // rota de Acesso ao formulario
    Route::post('/cad', [CursosController::class, 'cad'])->name('cad'); //Cadastro do Cursos
    Route::get('/{id}/edit', [CursosController::class, 'edit'])->name('edit');// rota de Acesso ao formulario
    Route::post('/{id}/update', [CursosController::class, 'update'])->name('update'); //Atualização dos dados
    Route::put('/desativar', [CursosController::class, 'destroy'])->name('destroy'); // Deletar os dados
});

//--------------------------------------------------------------------------
//  Crud Aulas
Route::prefix('/dashboard/administrativo/aulas')->group(function () {
    Route::get('/index', [AulaController::class, 'index'])->name('index'); 
    Route::get('/create', [AulaController::class, 'create'])->name('create'); // rota de Acesso ao formulario
    Route::post('/cad', [AulaController::class, 'cad'])->name('cad'); //Cadastro do Aulas
    Route::get('/{id}/edit', [AulaController::class, 'edit'])->name('edit');// rota de Acesso ao formulario
    Route::post('/{id}/update', [AulaController::class, 'update'])->name('update'); //Atualização dos dados
    Route::put('/desativar', [AulaController::class, 'destroy'])->name('destroy'); // Deletar os dados
});

    // -----------------------
    // ATENÇÃO !!!!!!!
    // As rotas a seguir podem servir como exemplo ou refencia
    // caso algo possa vir a acontecer
    // Durante o desenvolvimento do croud das outras tabelas
    // O processo sera o mesmo dentro do codigo
    // Deêm prioridade ao funcionamento do aluno, pois as outras serão iguais
    // -----------------------

Route::get('/sair', function(){
    session()->flush();
    return redirect('/');
})->name('sair');
