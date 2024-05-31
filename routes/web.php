<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GamesController;

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
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('admin.layouts.dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/password', function () {
    return view('change_password');
});


Route::resources([
    'games' => GamesController::class,
]);

