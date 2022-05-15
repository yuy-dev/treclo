<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinglePageController;

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

Route::get('/{any}', [SinglePageController::class, 'index'])->where('any', '.*');

// Route::get('/', function () {
//     return view('welcome');
// });
