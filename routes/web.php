<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\blogcontroller;

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

//funcion para la vista de las publicaciones.
Route::get('/', [blogcontroller::class, 'welcome_index'])->name('Welcome.index');
