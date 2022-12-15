<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;

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
    return view('home');
})->name('home');

// Route::get('/single', function () {
//     $products = config('comics.title');
//     dd(compact('single'));
//     return view('products', compact('products'));
// })->name('products');

