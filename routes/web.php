<?php

// Web Routes

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AulasController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\sobreController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
// Dashboard Routes
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
    Route::get('/index', [AulasController::class, 'index'])->name('index'); 
    Route::get('/create', [AulasController::class, 'create'])->name('create'); // rota de Acesso ao formulario
    Route::post('/cad', [AulasController::class, 'cad'])->name('cad'); //Cadastro do Aulas
    Route::get('/{id}/edit', [AulasController::class, 'edit'])->name('edit');// rota de Acesso ao formulario
    Route::post('/{id}/update', [AulasController::class, 'update'])->name('update'); //Atualização dos dados
    Route::put('/desativar', [AulasController::class, 'destroy'])->name('destroy'); // Deletar os dados
});

    // -----------------------
    // ATENÇÃO !!!!!!!
    // As rotas a seguir podem servir como exemplo ou refencia
    // caso algo possa vir a acontecer
    // Durante o desenvolvimento do croud das outras tabelas
    // O processo sera o mesmo dentro do codigo
    // Deêm prioridade ao funcionamento do aluno, pois as outras serão iguais
    // -----------------------

    // Route::get('/dashboard/administrativo/create', [AdminController::class, 'createAdmin'])->name('dashboard.administrativo.create');
    // Route::post('/dashboard/administrativo/cadAdmin', [AdminController::class,'cadAdmin'])->name('cadAdmin');
    // Route::post('/dashboard/administrativo', [AdminController::class, 'cadAdmin'])->name('dashboard.administrativo.cad');
    // Route::get('/dashboard/administrativo/{id}/edit', [AdminController::class, 'editAdmin'])->name('dashboard.administrativo.edit');
    // Route::post('/dashboard/administrativo/{id}/updateAdmin', [AdminController::class, 'updateAdmin'])->name('update');
    // Route::put('/dashboard/administrativo/{id}/desativar', [AdminController::class, 'desativarAdmin'])->name('desativar');
    // });


Route::get('/sair', function(){
    session()->flush();
    return redirect('/');
})->name('sair');
