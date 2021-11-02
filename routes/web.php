<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $task1 = new stdClass();
    $task1->id=1;
    $task1->title="Tasca 1";
    $task1->description="Sortir de LATAM";
    $task1->completed=1;

    $task2 = new stdClass();
    $task2->id=2;
    $task2->title="Tasca 2";
    $task2->description="Invadir Pakistan";
    $task2->completed=1;

    $task3 = new stdClass();
    $task3->id=3;
    $task3->title="Tasca 3";
    $task3->description="Escapar de classe de fol";
    $task3->completed=1;

    $tasks = [
        $task1,
        $task2,
        $task3
    ];

    return view('tasks', [
        'tasks' => $tasks
    ]);
});

Route::get('/tasks', function () {
    $task1 = new stdClass();
    $task1->id=1;
    $task1->title="Tasca 1";
    $task1->description="Sortir de LATAM";
    $task1->completed=1;

    $task2 = new stdClass();
    $task2->id=2;
    $task2->title="Tasca 2";
    $task2->description="Invadir Pakistan";
    $task2->completed=1;

    $task3 = new stdClass();
    $task3->id=3;
    $task3->title="Tasca 3";
    $task3->description="Escapar de classe de fol";
    $task3->completed=1;

    $tasks = [
        $task1,
        $task2,
        $task3
    ];

    return view('tasks', [
        'tasks' => $tasks
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users', function () {
    return view('users', [
        'users' => []
    ]);
});
