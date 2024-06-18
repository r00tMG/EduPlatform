<?php

use App\Http\Controllers\Enseignant\CoursController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class,'accueil'])->name('etudiant.cours.accueil');
Route::get('/etudiant/cours', [\App\Http\Controllers\HomeController::class,'index'])->name('etudiant.cours.index');

# Détails du cours
Route::get('cours/{cour}',[\App\Http\Controllers\HomeController::class,'show'])->name('cours.show');

# Formulaire d'inscription dans le show.blade.php
Route::post('inscrire/{cours}/cours',[\App\Http\Controllers\HomeController::class,'inscrire'])->name('cours.inscrire');

Route::get('login',[\App\Http\Controllers\AuthController::class,'login'])
    ->middleware('guest')
    ->name('login');

Route::post('login',[\App\Http\Controllers\AuthController::class,'doLogin']);


Route::delete('logout',[\App\Http\Controllers\AuthController::class,'logout'])
    ->middleware('auth')
    ->name('logout');


Route::prefix('enseignant/')->middleware('auth')->name('enseignant.')->group(function (){
    Route::resource('cours',CoursController::class);

});
