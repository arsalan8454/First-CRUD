<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(UserController::class)->group(function () {

    Route::get('/', 'showUsers')->name('home');

    Route::get('/user/{id}', 'singleUser')->name('view.user');

    Route::post('/add', 'addUser')->name('addUser');

    Route::get('/updatepage/{id}', 'updatePage')->name('update.page');
    Route::post('/update/{id}', 'updateUser')->name('updateuser');

    Route::get('/delete/{id}', 'deleteUser')->name('delete.user');
});

Route::view('/newuser', 'adduser');
