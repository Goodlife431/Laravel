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

// Route::get('/', homeController::class);
//where function for intergers and strings 
//regex expression for numbers 
//Route::get('/blog/{id?}', [postsController::class, 'show'])->where('id', '[0-9]+' );
//regex expression for alphets 
//Route::get('/blog/{name}', [postsController::class, 'show'])->where('name', '[A-Za-z]+');
//where function for numbers
//Route::get('/blog/{id?}', [postsController::class, 'show'])->whereNumber('id');
//where function for alphabelts 
//Route::get('/blog/{name}', [postsController::class, 'show'])->whereAlpha('name');

//GET
// Route::get('/blog/create', [postsController::class, 'create'])->name('blog.create');
// Route::get('/blog', [postsController::class, 'index'])->name('blog.index');
// Route::get('/blog/{id}', [postsController::class, 'show'])->name('blog.show');

// //POST
// Route::post('/blog', [postsController::class, 'store'])->name('blog.store');

// //PUT AND PATCH
// Route::get('blog/edit/{id}', [postsController::class, 'edit'])->name('blog.edit');
// Route::patch('/blog/{id}', [postsController::class, 'update'])->name('blog.update');

// //delete
// Route::delete('/blog/{id}', [postsController::class, 'destroy'])->name('blog.destroy');

//multiple http verbs 
// Route::match(['get', 'post'], '/blog', [postsController::class, 'index']);
// Route::any('/blog', [postsController::class, 'index']);

//Return view 
// Route::view('/blog', 'blog.index', ['name' => 'Code with seun']);




//route chaining
Route::prefix('/blog')->group( function () {
    Route::get('/create', [postsController::class, 'create'])->name('blog.create');
    Route::get('/', [postsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [postsController::class, 'show'])->name('blog.show');
    Route::post('/', [postsController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [postsController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [postsController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [postsController::class, 'destroy'])->name('blog.destroy');
});