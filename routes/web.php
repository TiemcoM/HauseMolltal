<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VueController;
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
    return view('pages/home');
})->name('home');
Route::get('/home', function () {
    return redirect('/');
});

Route::get('/locatie', function () {
    return view('pages/location');
})->name('location');

Route::get('/huis', function () {
    return view('pages/hause');
})->name('huis');

Route::get('/gallerij', function () {
    return view('pages/gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

Route::get('/admin', function (){
    return redirect('admin/pages');
})->name('admin');
Route::get('admin/{any}', [VueController::class, 'index'])->where('any', '.*');
