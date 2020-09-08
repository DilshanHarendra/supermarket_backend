<?php

namespace App\Http\Controllers\Api\Supplier;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SuppliersController extends Controller
{
    //
    function __construct()
    {

    }

    function getAll(){
        $data=Supplier::getAll();
        return response(['data'=>$data],200);
    }

    function getSupplierById($sid){
        $data=Supplier::getBySupplierId($sid);
        return response(['data'=>$data],200);
    }
    function addNewSupplier(Request $request){
        try {

            $supplier= new Supplier();

            $supplier->supplier_id=uniqid('sp');
            $supplier->supplier_name=$request->supplier_name;
            $supplier->contact=$request->contact;
            $supplier->email=$request->email;
            $supplier->join_date=$request->join_date;

          $supplier->save();
          return response(['data'=>$supplier],200);

        }catch (Exception $e){
           return response(['data'=>$e],422);
            }



    }
}
