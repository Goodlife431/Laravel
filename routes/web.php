<?php

use App\Http\Controllers\postsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//route chaining
// Route::prefix('/blog')->group( function () {
//     Route::get('/create', [postsController::class, 'create'])->name('blog.create');
//     Route::get('/', [postsController::class, 'index'])->name('blog.index');
//     Route::get('/{id}', [postsController::class, 'show'])->name('blog.show');
//     Route::post('/', [postsController::class, 'store'])->name('blog.store');
//     Route::get('/edit/{id}', [postsController::class, 'edit'])->name('blog.edit');
//     Route::patch('/{id}', [postsController::class, 'update'])->name('blog.update');
//     Route::delete('/{id}', [postsController::class, 'destroy'])->name('blog.destroy');
// });

Route::resource('blog', postsController::class);
