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
        $data=Leaves::getLeavesByType($type);
        return response()->json(['data'=>$data],200);
    }
    public function applayNewLeave(Request $request){
        try {
            $leave = new Leaves();
            $leave->leave_id=uniqid('Le');
            $leave->type=$request->type;
            $leave->details=$request->details;
            $leave->emp_id=$request->emp_id;
            $leave->save();
            return response(['data'=>$leave],200);
        }catch (Exception $e){
            return response(['data'=>$e],422);
        }

    }



}
