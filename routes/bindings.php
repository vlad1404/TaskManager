<?php

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::bind('task', function ($task) {
    if($task === 'submit') {
        return null;
    }
    return Task::find($task);
});

Route::bind('login', function ($user) {
    dd($user);
    if($user === 'logout') {
        return null;
    }
    return User::find($user);
});
