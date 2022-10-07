<?php

use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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



Route::get('/',[SubscriptionController::class, 'homepage']);
Route::post('/', [SubscriptionController::class, 'prepareStore']);
Route::get('/subscriptionComplete', [SubscriptionController::class, 'store']);
