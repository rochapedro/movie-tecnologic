<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')->group(function () {
    // Estou removendo as rotas responsáveis por resetar a senha
    // Auth::routes(['reset' => false]);

    // Auth::routes();

    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    });

    Route::get('/sales', function () {
        return view('admin/sales');
    });

    Route::get('/drives', function () {
        return view('admin/drives');
    });

    Route::get('/products', function () {
        return view('admin/products');
    });

    Route::get('/categories', function () {
        return view('admin/categories');
    });
});

Route::get('/', function () {
    return view('public/home');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
