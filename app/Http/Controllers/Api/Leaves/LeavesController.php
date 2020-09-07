<?php

namespace App\Http\Controllers\Api\Leaves;
use App\Leaves;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class LeavesController extends Controller
{
    //
    public function __construct()
    {

    }
    public function index(){
        return response()->json(['status'=>'ok'],200);
    }

    // get all data
    public function getAll(){
        $data=Leaves::getAllLeaves();
        return response()->json(['data'=>$data],200);
    }

    // get by empID
    public function getByEmpId($eid){
         $data=Leaves::getLeavesByEmpID($eid);
         return response()->json(['data'=>$data],200);
    }

    // get by empID
    public function getByType($type){
        $data=Leaves::getLeavesByType('t1');
        return response()->json(['data'=>$data],200);
    }



}
