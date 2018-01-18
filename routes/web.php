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
Route::get('/', 'DivulgaController@index');
Route::post('enviar','DivulgaController@enviar');
// Route::get('/', function () {
// 	return view('divulga');
//     // return redirect('admin');
// });
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
