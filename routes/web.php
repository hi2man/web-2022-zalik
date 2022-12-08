<?php

use App\Http\Controllers\PersonController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('show_person/{person}', [PersonController::class, 'show_person'])->name('persons.show');
Route::post('create_person', [PersonController::class, 'store_person'])->name('persons.store');
Route::put('update_person/{person}', [PersonController::class, 'update_person'])->name('persons.update');
