<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(
//     ['as' => 'api.', 'middleware'=>['cors']],
//     function() {
//         Route::resource('latihan', 'API\LatihanController');
//     });

Route::group(['middleware' => 'cors'], function(){
	Route::get('product','ApiController@product');
});
Route::group(['middleware' => 'cors'], function(){
	Route::get('kategori','ApiController@kategori');
});
Route::group(['middleware' => 'cors'], function(){
	Route::get('custom','ApiController@custom');
});

