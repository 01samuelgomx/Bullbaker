<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('/login', [AlunoController::class, 'login']);

Route::middleware(['auth:sanctum', 'aluno'])->group(function () {

    Route::apiResource('aluno', AlunoController::class);

});
