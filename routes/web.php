<?php

use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;
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


Route::get('/add', [NavController::class, 'add']);
Route::get('/list', [NavController::class, 'list']);
Route::post('/list', [NavController::class, 'list']);


Route::post('/add', [ActionController::class, 'add']);
Route::post('/delete',[ActionController::class, 'delete']);
Route::get('/edit/{id}', [NavController::class, 'edit']);
Route::post('/update', [ActionController::class, 'updateOne']);