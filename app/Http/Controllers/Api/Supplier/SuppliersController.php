<?php

namespace App\Http\Controllers\Api\Supplier;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SuppliersController extends Controller
{
    //
    function getAll(){
        $data=Supplier::getAll();
        return response(['data'=>$data],200);
    }

    function getSupplierById($sid){
        $data=Supplier::getBySupplierId($sid);
        return response(['data'=>$data],200);
    }
}
