<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix'=>'v1','namespace'=>'Api'],function (){
//path http://localhost:3000/api/v1

    Route::group(['prefix'=>'leaves','namespace'=>'Leaves'],function (){
        //path http://localhost:3000/api/v1/leaves/
        Route::get('/','LeavesController@getAll');
        Route::get('/type/{id}','LeavesController@getByType');
        Route::get('/empid/{id}','LeavesController@getByEmpId');
    });

    Route::group(['prefix'=>'supplier','namespace'=>'Supplier'],function (){
        //localhost:3000/api/v1/supplier
        Route::get('/','SuppliersController@getAll');
        Route::get('/{id}','SuppliersController@getSupplierById');
    });



});
