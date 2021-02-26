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
    'as' => 'admin.'
], function(){
    Route::get('/', App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard');

    Route::get('/users', App\Http\Livewire\Admin\User\Index::class)->name('users.index');
});

Route::get('/', function () {
    return view('welcome');
});
