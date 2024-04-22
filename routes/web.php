<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContatusController;
use App\Http\Controllers\LanguageController;
/**
 * 
 */
use App\Http\Controllers\ImpactController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\OndeTemController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\BlogController;

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

//instutucional

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [AboutController::class, 'index']);
Route::get('/impacto', [ImpactController::class, 'index']);
Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/onde', [OndeTemController::class, 'index']);
Route::get('/time', [TimeController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);

Route::get('/faleconosco', [ContatusController::class, 'index']);
Route::get('/servicos', [AboutController::class, 'index']);

/**
 * 
 */

//idiomas

Route::middleware('web')->group(function () {
    Route::get('/change-language/{locale}', [LanguageController::class, 'changeLanguage'])->name('change.language');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::middleware(['admin'])->group(function(){
      
    });

});

