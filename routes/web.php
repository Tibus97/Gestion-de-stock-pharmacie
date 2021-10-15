<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PharmacieController@home' )->Middleware(['auth'])->name('home');
Route::Post('/delete/{id}', 'App\Http\Controllers\PharmacieController@delete' )->name('delete');
Route::get('/contact', 'App\Http\Controllers\PharmacieController@contact' )->name('contact');
Route::get('/addmedoc', 'App\Http\Controllers\PharmacieController@addmedoc' )->name('addbtn');
Route::Post('/addmedoc', 'App\Http\Controllers\PharmacieController@medsave' )->name('addmedoc.post');
Route::get('/listepharmacien', 'App\Http\Controllers\PharmacieController@list' )->name('pharmaciens');
Route::get('/salebtn', 'App\Http\Controllers\PharmacieController@salemedoc' )->name('salebtn');
Route::get('/facture', 'App\Http\Controllers\PharmacieController@facturefn' )->name('facture.get');
Route::Post('/facture', 'App\Http\Controllers\PharmacieController@facture' )->name('facture');
Route::get('/updatedprofil', 'App\Http\Controllers\PharmacieController@update' )->name('updated');
Route::Post('/updatedsucces', 'App\Http\Controllers\PharmacieController@update' )->name('updatedsucces');
Route::get('/vente', 'App\Http\Controllers\PharmacieController@vente' )->name('salespage');
Route::get('/details/{id}', 'App\Http\Controllers\PharmacieController@details' )->name('detailpage');








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
