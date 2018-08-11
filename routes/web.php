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


Route::get('/', ['as' => '/', 'uses' => 'Sitio@home']);
Route::get('contactanos', ['as' => 'contactanos', 'uses' => 'Sitio@contactanos']);
Route::get('{ubicacion?}/tours-aventuras', ['as' => '{ubicacion?}/tours-aventuras', 'uses' => 'Sitio@ubicacion'])->where('ubicacion', "[A-Za-z]+");
Route::get('cancun/{tour?}/informacion', ['as' => 'infoTour', 'uses' => 'Sitio@infoTour']);
Route::get('{categorie?}/categoria', ['as' => 'categories', 'uses' => 'Sitio@categoria']);
// Carrito
Route::post('ingresar-carrito', ['as' => 'ingresar-carrito' , 'uses' => 'Shopping_Cart@insertCart']);
Route::get('carrito', ['as' => 'carrito' , 'uses' => 'Shopping_Cart@contentCart']);
Route::get('{rowid?}/eliminar-tour', ['as' => '{rowid?}/eliminar-tour', 'uses' => 'Shopping_Cart@deleteCart']);
Route::get('datos-del-cliente', ['as' => 'datos-del-cliente', 'uses' => 'Shopping_Cart@clientData']);
Route::get('confirmacion', ['as' => 'confirmacion' , 'uses' => 'Shopping_Cart@confirmation']);
Route::post('save-date-client', ['as' => 'save-date-client' , 'uses' => 'Shopping_Cart@saveDateClient']);
Route::get('compra-exitosa', ['as' => 'compra-exitosa', 'uses' => 'Sitio@compraExitosa']);
Route::get('cupon', ['as' => 'cupon', 'uses' => 'Shopping_Cart@cupon']);


Route::get('payment', array('as' => 'payment','uses' => 'PaypalController@postPayment',));
Route::get('payment/status', array('as' => 'payment.status','uses' => 'PaypalController@getPaymentStatus',));

