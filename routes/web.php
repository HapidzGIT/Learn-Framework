<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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



Route::get('/{page?}', function ($page = 'Dashboard') {
    return Inertia::render($page);
})->where('page', '.*');


// Route::get('/', function () {
//     return view('welcome');
// });
