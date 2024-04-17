<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContatusController;
use App\Http\Controllers\LanguageController;


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
Route::get('/servicos', [AboutController::class, 'index']);
Route::get('/faleconosco', [ContatusController::class, 'index']);


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

