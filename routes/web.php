<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
/*
 *
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Controller pour acceuil

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/showsite/{id}',[HomeController::class, 'showsite'])->name('site');
//Route::get('/showclasse/{id}',[HomeController::class, 'etudiants'])->name('etudiant');




Route::middleware([ 'auth','admin'])->prefix('admin')->group(function (){

//CONTROLLER POUR L'ADMINISTRATEUR
   Route::get('/',[AdminController::class, 'index'])->name('root');

// Route pour la cr&ation d'une université
    Route::get('create',[AdminController::class,'create'])->name('createsite');
    Route::post('store',[AdminController::class,'store'])->name('storesite');

//Route pour modifier une université
    Route::get('edit/{id}',[AdminController::class,'edit'])->name('editsite');
    Route::put('update/{id}',[AdminController::class,'update'])->name('updatesite');

// Route pour supprimer une université
    Route::delete('adminitrateurdestroy/{id}',[AdminController::class,'destroy'])->name('destroysite');

// Route pour afficher la liste des classes d'une université
    Route::get('site/{id}',[AdminController::class,'classeindex'])->name('classeliste');

// Route pour créer une classe
    Route::get('classecreate/{id}',[AdminController::class,'classecreate'])->name('createclasse');
    Route::post('classestore',[AdminController::class,'classestore'])->name('storeclasse');

// Route pour modifier une classe
    Route::get('classeedit/{id}',[AdminController::class,'classeedit'])->name('editclasse');
    Route::put('classeupdate/{id}',[AdminController::class,'classeupdate'])->name('updateclasse');

// Route pour supprimer une classe
    Route::delete('classedestroy/{id}',[AdminController::class,'classedestroy'])->name('destroyclasse');

// Route pour lister les étudiant d'une classe
    Route::get('etudiantsliste/{id}',[AdminController::class, 'etudiantindex'])->name('listeetudiant');

// Route pour ajouter un étudiant ou une étudiante
    Route::get('etudiantcreate/{id}',[AdminController::class, 'etudiantcreate'])->name('createetudiant');
    Route::post('etudiantstore',[AdminController::class, 'etudiantstore'])->name('storeetudiant');


// Route pour modifier un étudiant ou une étudiante
    Route::get('etudiantedit/{id}',[AdminController::class, 'etudiantedit'])->name('editetudiant');
    Route::put('etudiantupdate/{id}',[AdminController::class, 'etudiantupdate'])->name('updateetudiant');


// Route pour supprimer un étudiant ou une étudiante
    Route::delete('etudiantdestroy/{id}',[AdminController::class,'etudiantdestroy'])->name('destroyetudiant');

});









