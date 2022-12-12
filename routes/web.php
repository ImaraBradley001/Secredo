<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Journal;
use App\Http\Controllers\JournalContoller;
use App\Http\Controllers\UserController;



//Get the home page
Route::get('/', [JournalContoller::class, "index"]);

//Show all notes 
Route::get('/journal/show', [JournalContoller::class, "show"])->middleware('auth');

//Create a single note
Route::get('/journal/create', [JournalContoller::class, "create"])->middleware('auth');

//Store a single note
Route::post("/journal/store", [JournalContoller::class, "store"])->middleware('auth');


//Get edit view
Route::get('/journal/{journal}/edit', [JournalContoller::class, "edit"])->middleware('auth');

//Edit submit to update
Route::put('/journal/{journal}', [JournalContoller::class, "update"])->middleware('auth');

//Delete Note
Route::delete('/journal/{journal}', [JournalContoller::class, "destroy"])->middleware('auth');

//User registration/create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Log User out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
