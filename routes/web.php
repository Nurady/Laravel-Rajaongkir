<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/ongkir', 'CheckOngkirController@index');
// Route::post('/ongkir', 'CheckOngkirController@check_ongkir');
// Route::get('/cities/{province_id}', 'CheckOngkirController@getCities');

Route::get('/ongkir', [CheckOngkirController::class, 'index']);
Route::post('/ongkir', [CheckOngkirController::class, 'check_ongkir']);
Route::get('/cities/{province_id}', [CheckOngkirController::class, 'getCities']);