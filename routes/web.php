<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

Route::get('/', HomeController::class); // llama a invoke

Route::controller(CursoController::class)->group(function (){
    Route::get('cursos', 'index')->name('cursos.index');

    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos','store')->name('cursos.store');

    Route::get('cursos/{curso}','show')->name('cursos.show');

    Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');
    Route::put('cursos/{curso}','update')->name('cursos.update');

    Route::get('cursos/{curso}/delete','delete')->name('cursos.delete');
    Route::delete('cursos/{curso}','confirmDelete')->name('cursos.confirmDelete');

});



