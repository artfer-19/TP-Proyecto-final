<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;

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

/**
 * Rutas para los productos.
 */
Route::get('/home', [PublicacionController::class, 'index'])->name('home.index');


route::group(['middleware' => ['auth', 'verified']], function () {
    //ponemos las rutas que queremos que esten auteticadas
    Route::get('/publicaciones', [PublicacionController::class, 'index'])->name('publicaciones.index');
    Route::get('/publicaciones/crear', [PublicacionController::class, 'create'])->name('publicaciones.create');
    Route::post('/publicaciones/crear', [PublicacionController::class, 'store'])->name('publicaciones.store');

    Route::get('/publicaciones/{id}/ver', [PublicacionController::class, 'show'])->name('publicaciones.show')->whereNumber('id');

    Route::get('/productos/{id}/editar', [ProductoController::class, 'edit'])->name('productos.edit')->whereNumber('id');
    Route::put('/productos/{id}/editar', [ProductoController::class, 'update'])->name('productos.update')->whereNumber('id');
    Route::delete('/productos/{id}/eliminar', [ProductoController::class, 'destroy'])->name('productos.destroy')->whereNumber('id');
});

require __DIR__.'/auth.php';
