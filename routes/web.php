<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\NotificationSweetAlert;
use App\Http\Livewire\Select2;
use App\Http\Livewire\Users;

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
  
Route::get('notification-sweetalert', NotificationSweetAlert::class);
Route::get('select2', Select2::class);
Route::get('users', Users::class);