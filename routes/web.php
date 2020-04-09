<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@dashboard')->name('admin');
Route::get('/admin/listproduk', 'AdminController@listproduk');
Route::post('/admin/listproduk/upload', 'AdminController@uploadAction');
Route::post('/admin/listproduk/update', 'AdminController@updateAction');
Route::get('/admin/listproduk/{id}/delete', 'AdminController@deleteAction');

Route::get('/admin/laporan', 'AdminController@laporan');
Route::get('/admin/laporan/preview', 'AdminController@previewPdf');
Route::get('/admin/laporan/print', 'AdminController@printPdf');
Route::get('/admin/logout', 'AdminController@logout');
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('checkout', 'PesanController@checkout');
Route::delete('checkout/{id}', 'PesanController@delete');
Route::get('konfirmasi-checkout', 'PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('/reporting', 'ReportingController@index');
Route::get('/reporting/preview', 'ReportingController@previewPdf');
Route::get('/reporting/print', 'ReportingController@printPdf');

