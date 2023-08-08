<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Illuminate\Support\Facades\URL::defaults(['locale' => app('locale-for-client')]);

// redirect the home page route to a specific locale
Route::get('/', function () {
    return redirect(app('locale-for-client').'/blog');
});
