<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\postsController;
use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facade as Debugbar;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/

// Route::get('/blog', [postsController::class, 'index']);

// Route::resource('blog', postsController::class);

Route::get('/', homeController::class);


//GET
Route::get('/blog', [postsController::class, 'index']);
Route::get('/article/{id?}', [postsController::class, 'show']);

//POST
Route::get('/blog/create', [postsController::class, 'create']);
Route::post('/blog', [postsController::class, 'store']);

//PUT AND PATCH
Route::get('blog/edit/{id}', [postsController::class, 'edit']);
Route::patch('/blog/{id}', [postsController::class, 'update']);

//delete
Route::delete('/blog/{id}', [postsController::class, 'destroy']);

//multiple http verbs 
Route::match(['get', 'post'], '/blog', [postsController::class, 'index']);
Route::any('/blog', [postsController::class, 'index']);

//Return view 
Route::view('/blog', 'blog.index', ['name' => 'Code with seun']);