<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
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

Route::get('/', [NewsletterController::class, 'index']);
Route::post('/subscribe', [NewsletterController::class, 'subscribe']);
