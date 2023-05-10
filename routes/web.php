<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::post('/login', [LoginController::class, 'login']);

Route::get('/final', function () {
    return view('final');
})->name('final');
Route::get('/register', function () {
    return view('register');
});
Route::post('/register/store', [LoginController::class, 'store']
);