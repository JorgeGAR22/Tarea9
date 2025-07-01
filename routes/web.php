<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

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

// Rutas de autenticación generadas por Laravel UI
Auth::routes();

// =========================================================
// RUTAS PÚBLICAS (Para usuarios NO autenticados)
// =========================================================

Route::get('/', [HomeController::class, 'index'])->name('home_public');
Route::post('/search-order', [HomeController::class, 'searchOrder'])->name('public.search');


// =========================================================
// RUTAS PROTEGIDAS (Para usuarios AUTENTICADOS)
// =========================================================

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Rutas para la gestión de USUARIOS
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('/{user}', [UserController::class, 'update'])->name('update');
        Route::put('/{user}/toggle-active', [UserController::class, 'toggleActive'])->name('toggleActive');
    });

    // Rutas para la gestión de ÓRDENES
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
        Route::get('/create', [OrderController::class, 'create'])->name('create');
        Route::post('/', [OrderController::class, 'store'])->name('store');
        Route::get('/{order}', [OrderController::class, 'show'])->name('show');
        Route::get('/{order}/edit', [OrderController::class, 'edit'])->name('edit');
        Route::put('/{order}', [OrderController::class, 'update'])->name('update');
        Route::delete('/{order}', [OrderController::class, 'destroy'])->name('destroy');

        // Rutas para órdenes archivadas y restaurar
        Route::get('/archived', [OrderController::class, 'archived'])->name('archived');
        Route::put('/{id}/restore', [OrderController::class, 'restore'])->name('restore');
    });

    // =========================================================
    // RUTAS PARA EL CONTENIDO DE LA ACTIVIDAD 11
    // =========================================================
    Route::get('/home-actividad11', function () {
        return view('actividad11.home');
    })->name('home-actividad11');

    Route::get('/photos-actividad11', function () {
        return view('actividad11.photos');
    })->name('photos-actividad11');

    Route::get('/contact-actividad11', function () {
        return view('actividad11.contact');
    })->name('contact-actividad11');
});

// La ruta '/home' es a donde Laravel UI redirige por defecto después del login.
// Hacemos que también apunte al método 'dashboard' de HomeController.
Route::redirect('/home', '/dashboard');
