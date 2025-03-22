<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\People;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeopleTaskController extends Controller
{
    /**
     * Atribuir tarefas a uma pessoa.
     */
    public function assignTasksToPerson(Request $request, People $person)
    {
        $request->validate([
            'task_ids' => 'required|array',
            'task_ids.*' => 'exists:tasks,id',
        ]);

        $person->tasks()->attach($request->task_ids);
        
        return response()->json(['message' => 'Tarefas atribuídas com sucesso à pessoa.']);
    }

    /**
     * Remover tarefas de uma pessoa.
     */
    public function removeTasksFromPerson(Request $request, People $person)
    {
        $request->validate([
            'task_ids' => 'required|array',
            'task_ids.*' => 'exists:tasks,id',
        ]);

        $person->tasks()->detach($request->task_ids);
        
        return response()->json(['message' => 'Tarefas removidas com sucesso.']);
    }

    /**
     * Listar todas as tarefas de uma pessoa.
     */
    public function listTasksOfPerson(People $person)
    {
        $tasks = $person->tasks;
        
        return response()->json($tasks);
    }

    /**
     * Listar todas as pessoas atribuídas a uma tarefa.
     */
    public function listPeopleAssignedToTask(Task $task)
    {
        $people = $task->people;
        
        return response()->json($people);
    }
}
