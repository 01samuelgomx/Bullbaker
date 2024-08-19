<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\sobreController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificacaoController;
use App\Http\Controllers\perfilController;
use App\Http\Controllers\ReceitasController;
use Illuminate\Support\Facades\Route;

//--------------------------------------------------------------------------
//  Web Routes
//--------------------------------------------------------------------------
    Route::get('/', [homeController::class, 'index'])->name('home');
    Route::get('/sobre',[sobreController::class, 'sobre'])->name('sobre');
    Route::get('/cursos', [ CursosController::class, 'pagina'])->name('cursos');
    Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
    Route::get('/menu', [MenuController::class, 'menu'])->name('menu');

//--------------------------------------------------------------------------
//  Login
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'autenticar'])->name('login');

//--------------------------------------------------------------------------
// Crud Aluno

Route::middleware('autenticacao:Administrativo')->group(function () {
    Route::get('/dashboard/administrativo/aluno/index', [AlunoController::class, 'index'])->name('index.aluno'); 
    Route::get('/dashboard/administrativo/aluno/create', [AlunoController::class, 'create'])->name('create.aluno'); // rota de Acesso ao formulario
    
    Route::get('/dashboard/administrativo/aluno/{id}', [AlunoController::class, 'show'])->name('show.aluno');
    Route::post('/dashboard/administrativo/aluno', [AlunoController::class, 'cadAluno'])->name('cad.aluno'); // Cadastro do aluno
    Route::get('/dashboard/administrativo/aluno/{id}/edit', [AlunoController::class, 'edit'])->name('edit.aluno');// rota de Acesso ao formulario
    Route::put('/dashboard/administrativo/aluno/{id}', [AlunoController::class, 'update'])->name('update.aluno'); // Atualização do aluno
    Route::delete('/dashboard/administrativo/aluno/{id}', [AlunoController::class, 'destroy'])->name('delete.aluno'); // Deletar os dados
});

//--------------------------------------------------------------------------
//  Crud Cursos

Route::middleware('autenticacao:Administrativo')->group(function () {
    Route::get('/dashboard/administrativo/cursos/index', [CursosController::class, 'index'])->name('index.curso');
    Route::get('/dashboard/administrativo/cursos/create', [CursosController::class, 'create'])->name('create.curso');

    Route::get('/dashboard/administrativo/cursos/{id}', [CursosController::class, 'show'])->name('show.curso');
    Route::post('/dashboard/administrativo/cursos', [CursosController::class, 'cadcurso'])->name('cad.curso'); // Cadastro do curso
    Route::get('/dashboard/administrativo/cursos/{id}/edit', [CursosController::class, 'edit'])->name('edit.curso');// rota de Acesso ao formulario de acordo com o id
    Route::put('/dashboard/administrativo/cursos/{id}', [CursosController::class, 'update'])->name('update.curso'); // Atualização do curso
    Route::delete('/dashboard/administrativo/cursos/{id}', [CursosController::class, 'destroy'])->name('delete.curso'); // Deletar os dados
});
//--------------------------------------------------------------------------
//  Crud Aulas

Route::middleware('autenticacao:Administrativo')->group(function () {
    Route::get('/dashboard/administrativo/aulas/index', [AulaController::class, 'index'])->name('index.aula'); 
    Route::get('/dashboard/administrativo/aulas/create', [AulaController::class, 'create'])->name('create.aula'); // rota de Acesso ao formulario
    
    Route::get('/dashboard/administrativo/aulas/{id}', [AulaController::class, 'show'])->name('show.aula');
    Route::post('/dashboard/administrativo/aulas', [AulaController::class, 'cadAula'])->name('cad.aula'); // Cadastro do aula
    Route::get('/dashboard/administrativo/aulas/{id}/edit', [AulaController::class, 'edit'])->name('edit.aula');// rota de Acesso ao formulario
    Route::put('/dashboard/administrativo/aulas/{id}', [AulaController::class, 'update'])->name('update.aula'); // Atualização do aula
    Route::delete('/dashboard/administrativo/aulas/{id}', [AulaController::class, 'destroy'])->name('delete.aula'); // Deletar os dados
});

//--------------------------------------------------------------------------
//  Croud Receitas

Route::middleware('autenticacao:Administrativo')->group(function () {
    Route::get('/dashboard/administrativo/receitas/index', [ReceitasController::class, 'index'])->name('index.receita'); 
    Route::get('/dashboard/administrativo/receitas/create', [ReceitasController::class, 'create'])->name('create.receita'); 
    
    Route::get('/dashboard/administrativo/receitas/{id}', [ReceitasController::class, 'show'])->name('show.receita');
    Route::post('/dashboard/administrativo/receitas', [ReceitasController::class, 'cadReceita'])->name('cad.receita'); 
    Route::get('/dashboard/administrativo/receitas/{id}/edit', [ReceitasController::class, 'edit'])->name('edit.receita');
    Route::put('/dashboard/administrativo/receitas/{id}', [ReceitasController::class, 'update'])->name('update.receita'); 
    Route::delete('/dashboard/administrativo/receitas/{id}', [ReceitasController::class, 'destroy'])->name('delete.receita'); 

});

//--------------------------------------------------------------------------
//  Croud Perfil

Route::middleware('autenticacao:Administrativo')->group(function () {
    Route::get('/dashboard/administrativo/info', [infoController::class, 'index'])->name('index'); 
    
    Route::get('/dashboard/administrativo/perfil/index', [AdministradorController::class, 'index'])->name('index.perfil'); 
    Route::post('/dashboard/administrativo/perfil', [NotificacaoController::class, 'cadNotificacao'])->name('cad.notificacao'); 
    Route::get('/dashboard/administrativo/perfil/{id}/edit', [NotificacaoController::class, 'edit'])->name('edit.notificacao');
    Route::put('/dashboard/administrativo/perfil/{id}', [NotificacaoController::class, 'update'])->name('update.notificacao'); 
    Route::delete('/dashboard/administrativo/perfil/{id}', [NotificacaoController::class, 'destroy'])->name('delete.notificacao'); // Deletar os dados

});

//--------------------------------------------------------------------------
//  SAIR ROUTES
Route::get('/sair', function(){
    session()->flush();
    return redirect('/');
})->name('sair');
