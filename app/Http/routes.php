<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'IndexController@index');

Route::get('article/{id}','IndexController@show')->name('articleShow');

Route::get('page/add','IndexController@add');
Route::post('page/add', 'IndexController@store')->name('productStore');

//DELETE
Route::delete('page/delete/{product}', function (\App\Product $product) {

    //$product_tmp = \App\Product::where('id', $product)->first();
    //dd($product);
    $product->delete();
    return redirect('/');

})->name('productDelete');