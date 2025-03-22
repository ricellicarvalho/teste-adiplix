<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PeopleController;
use App\Http\Controllers\Api\V1\TaskController;
use App\Http\Controllers\Api\V1\PeopleTaskController;

Route::prefix('V1')->group(function () {
    // Rotas relacionadas a Pessoas
    Route::apiResource('peoples', PeopleController::class);

    // Rotas relacionadas a Tarefas
    Route::apiResource('tasks', TaskController::class);

    // Rotas de relacionamento entre Pessoas e Tarefas
    Route::get('peoples/{person}/tasks', [PeopleTaskController::class, 'listTasksOfPerson']);
    Route::post('peoples/{person}/tasks', [PeopleTaskController::class, 'assignTasksToPerson']);
    //Route::put('peoples/{person}/tasks', [PeopleTaskController::class, 'updateTasks']);
    Route::delete('peoples/{person}/tasks', [PeopleTaskController::class, 'removeTasksFromPerson']);

    Route::get('tasks/{task}/peoples', [PeopleTaskController::class, 'listPeopleAssignedToTask']);
});

// Rota de teste
Route::get('/teste', function () {
    return response()->json(['message' => 'API funcionando!']);
});
