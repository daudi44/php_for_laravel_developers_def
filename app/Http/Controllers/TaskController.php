<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // CRUD ->
    // RETRIEVE -> LIST (index) & SHOW (mostrar un item)
    // CREATE -> STORE POST / create (formulari)
    // UPDATE -> edit(formulari) & UPDATE -> POST del formulari edició
    // DELETE -> DESTROY
    // REST API

    public function index()
    {
        return view('tasks', [
            'tasks' => Task::all()
        ]);
    }
}
