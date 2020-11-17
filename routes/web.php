<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordsController;

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

Route::get('/', function ()
    {
        // echo 'Hello World !';
        return view('welcome');
    });


Route::get('/records', [RecordsController::class, 'index']);
Route::get('/add', [RecordsController::class, 'add']);
Route::post('/add', [
    'uses' => 'RecordsController@save',
    'as' => 'records.save'
]);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

