<?php

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

Route::post('/', 'MathHelp@firstBisector');
Route::get('/', 'MathHelp@firstBisector');
Route::post('/first', 'MathHelp@firstBisector');
Route::get('/first', 'MathHelp@firstBisector');
Route::post('/second', 'MathHelp@secondBisector');
Route::get('/second', 'MathHelp@secondBisector');
Route::post('/third', 'MathHelp@thirdBisector');
Route::get('/third', 'MathHelp@thirdBisector');