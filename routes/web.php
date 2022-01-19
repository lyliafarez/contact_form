<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

/*on the browser to redirect to the contact form:http://127.0.0.1:8001/contactform*/

Route::get('/contactform',[ContactController::class,'index']);
Route::post('/contactform',[ContactController::class,'store'])->name('contact.store');
