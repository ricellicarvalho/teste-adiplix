<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PeopleController;
use App\Http\Controllers\Api\V1\TaskController;

/*Route::prefix('V1')->group(function() {
    Route::get('/peoples', [PeopleController::class, 'index']);
    Route::get('/peoples/{people}', [PeopleController::class, 'show']);
});*/

Route::prefix('V1')->group(function () {
    // Rotas relacionadas a Pessoas
    Route::apiResource('peoples', PeopleController::class);

    // Rotas relacionadas a Tarefas
    Route::apiResource('tasks', TaskController::class);
});

// Rota que utilizo pra teste
Route::get('/teste', function () {
    return response()->json(['message' => 'API funcionando!']);
});