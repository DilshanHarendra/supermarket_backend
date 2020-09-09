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

        Route::post('/','LeavesController@applayNewLeave');
        /*
         * sample
         * {
           "type":"type",
            "details":"for attend wedding",
            "emp_id":"001",
            }
         *
         * */

    });

    Route::group(['prefix'=>'supplier','namespace'=>'Supplier'],function (){
        //localhost:3000/api/v1/supplier
        Route::get('/','SuppliersController@getAll');
        Route::get('/{id}','SuppliersController@getSupplierById');

        Route::post('/','SuppliersController@addNewSupplier');
        /*
         *sample
         {
            supplier_name:"Sname",
    		contact:"070000",
    		email:"abc@gmail.com",
    		join_date:"2020-06-08",
           }
         * */
    });

    Route::group(['prefix'=>'expense','namespace'=>'OverheadExpenses'],function (){
        //localhost:3000/api/v1/expense
        Route::get('/','OverheadExpensesController@getAll');
        Route::post('/','OverheadExpensesController@addNewExpense');
        /*
         *sample
         {
            expense:"Rent",
    		amount:10000,
    		paymentMode:"cash",
    		payDate:"2020-06-08",
           }
         * */
    });

    Route::group(['prefix'=>'offers','namespace'=>'Offers'],function (){
        //localhost:3000/api/v1/offers
        Route::get('/','OfferDetailsController@getAll');
        Route::post('/','OfferDetailsController@addNewOffer');
        /*
         *sample
         {
            start_date:"2020-06-08",
    		end_date:"2020-06-08",
            details::"details",
    		batch_id:"cash",
    		brand_id:"cash",
            img:'image'
           }
         * */
    });

    Route::group(['prefix'=>'customer','namespace'=>'Customer'],function (){
        //localhost:3000/api/v1/customer
        Route::get('/','CustomersController@getAll');
        Route::get('/{id}','CustomersController@getById');
        Route::post('/','CustomersController@addNewExpense');
        /*
         *sample
         {

            username:"username";
            password:"pass";
            gender:"male";
            dob:"2020-06-08",
            email:"abc@gmail.com";
            contact:"0123456";
            profession:"prof";
            address:"address";
           }
         * */
    });

    Route::group(['prefix'=>'stock','namespace'=>'Stock'],function (){
        //localhost:3000/api/v1/stock
        Route::get('/','StockController@getAll');
        Route::post('/','StockController@addNewStock');
        /*
         *sample
         {

            proName:"proname",
            proPrice:1000,
            proDetails:"details",
            img:"path"
           }
         * */
    });

    Route::group(['prefix'=>'employee','namespace'=>'Employees'],function (){
        //localhost:3000/api/v1/employee
        Route::get('/','EmployeeController@getAll');
        Route::get('/{id}','EmployeeController@getById');
        Route::post('/','EmployeeController@addNewEmployee');
        /*
         *sample
         {  username:"username";
            password:"pass";
            gender:"male";
            dob:"2020-06-08",
            nic:"123456";
            job_role:"role 1";
            address:"address";
           }
         * */
    });

    Route::group(['prefix'=>'orders','namespace'=>'Order'],function (){
        //localhost:3000/api/v1/orders
        Route::get('/','OrdersController@getAll');
        Route::get('/{id}','OrdersController@getById');
        Route::post('/','OrdersController@addNewOrder');
        Route::put('/','OrdersController@assignDeliver');
        /*
         *sample
         {
            "type":"cashon",
            "delivery_Person_id":,
            "status":"",
            "invoice_id":"in001",
            "delivered":"NO",
            "address":"add",
           }
         * */
    });




});
