<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConfigurationsController;
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
    Auth::routes(['reset' => false]);

    // Auth::routes();

    Route::resource('/models', ModelsController::class);
    Route::resource('/sales', SalesController::class);
    Route::resource('/configurations', ConfigurationsController::class);

});

Route::resource('/', HomeController::class);
Route::get('/warranty', [HomeController::class, 'warranty'])->name('warranty');
Route::post('/warranty', [HomeController::class, 'findWarranty'])->name('findWarranty');
