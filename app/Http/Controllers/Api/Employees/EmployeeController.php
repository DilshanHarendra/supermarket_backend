<?php

namespace App\Http\Controllers\Api\Employees;





use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmployeeController extends Controller
{
    public function getAll(){
        $data=Employee::getAll();
        return response()->json(['data'=>$data],200);
    }

    public function getById($eid){
        $data=Employee::getById($eid);
        return response()->json(['data'=>$data],200);
    }

    function addNewEmployee(Request $request){
        try {

            $employee= new Employee();

            $employee->user_id=uniqid('eid');
            $employee->username=$request->username;
            $employee->password=$request->password;
            $employee->gender=$request->gender;
            $employee->dob=$request->dob;
            $employee->job_role=$request->job_role;
            $employee->nic=$request->nic;
            $employee->address=$request->address;

            $employee->save();
            return response(['data'=>$employee],200);

        }catch (Exception $e){
            return response(['data'=>$e],422);
        }


    }
}
