<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/trans',[AdminController::class,'trans']);
Route::post('/add_transport',[AdminController::class,'add_transport']);
Route::get('/view_trans',[HomeController::class,'view_trans']);
Route::get('/service',[HomeController::class,'service']);
Route::get('/view',[AdminController::class,'view']);
Route::get('/deleted/{id}',[AdminController::class,'deleted']);
Route::get('/update/{id}',[AdminController::class,'update']);
Route::post('/edit_trans/{id}',[AdminController::class,'edit_trans']);
Route::post('/estimate',[HomeController::class,'estimate']);
Route::get('/my_est',[HomeController::class,'my_est']);
Route::get('/get_myest',[HomeController::class,'get_myest']);
Route::get('/delete/{id}',[HomeController::class,'delete']);
Route::get('/all_est',[AdminController::class,'all_est']);
Route::get('/get_all_est',[AdminController::class,'get_all_est']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/opinion',[HomeController::class,'opinion']);
Route::post('/send_opinion',[HomeController::class,'send_opinion']);






















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
