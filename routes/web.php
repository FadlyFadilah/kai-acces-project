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

Route::livewire('/', 'dashboard')->name('dashboard');

Route::livewire('/train', 'train.index')->name('train.index');
Route::livewire('/train/create', 'train.create')->name('train.create');
Route::livewire('/train/edit/{id}', 'train.edit')->name('train.edit');

Route::livewire('/statsiun', 'statsiun.index')->name('statsiun.index');
Route::livewire('/statsiun/create', 'statsiun.create')->name('statsiun.create');
Route::livewire('/statsiun/edit/{id}', 'statsiun.edit')->name('statsiun.edit');

Route::livewire('/jadwal', 'jadwal.index')->name('jadwal.index');
Route::livewire('/jadwal/create', 'jadwal.create')->name('jadwal.create');
Route::livewire('/jadwal/edit/{id}', 'jadwal.edit')->name('jadwal.edit');

Route::livewire('/makanan', 'makanan.index')->name('makanan.index');
Route::livewire('/makanan/create', 'makanan.create')->name('makanan.create');
Route::livewire('/makanan/edit/{id}', 'makanan.edit')->name('makanan.edit');

Route::livewire('/user', 'user.index')->name('user.index');
Route::livewire('/user/create', 'user.create')->name('user.create');
Route::livewire('/user/edit/{id}', 'user.edit')->name('user.edit');