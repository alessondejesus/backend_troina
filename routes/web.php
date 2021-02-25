<?php

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

Route::group([
    'middleware'=> [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function(){
    Route::get('/', function () {
        return view('admin.app.dashboard');
    });

    Route::get('/table', function () {
        return view('admin.app.table');
    });
});


Route::get('/', function () {
    return view('welcome');
});
