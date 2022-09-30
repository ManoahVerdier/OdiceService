<?php

use App\Mail\AdhesionReceived;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

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
Route::post('/', function(Request $request){
    


    Mail::to("verdier.developpement@gmail.com")->send(new AdhesionReceived($request));
    //Mail::to("vmogenet@cyn-communication.fr")->send(new AdhesionReceived($request));
    return view('welcome');
});

