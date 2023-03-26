<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
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
    return 'test';
});

Route::get('/profile', function () {
    return 'this is you profile';
});

Route::get('/tournaments', function () {
    return 'you check tournaments';
});

Route::get('/booking', [MyPlaceController::class, 'index']);

