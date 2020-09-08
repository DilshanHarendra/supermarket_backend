<?php

namespace App\Http\Controllers\Api\Customer;



use App\Customer;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    public function __construct()
    {

    }


    // get all data
    public function getAll(){
        $data=Customer::getAll();
        return response()->json(['data'=>$data],200);
    }

    public function getById($uid){
        $data=Customer::getById($uid);
        return response()->json(['data'=>$data],200);
    }

    function addNewExpense(Request $request){
        try {

            $customer= new Customer();

            $customer->user_id=uniqid('cid');
            $customer->username=$request->username;
            $customer->password=$request->password;
            $customer->gender=$request->gender;
            $customer->dob=$request->dob;
            $customer->email=$request->email;
            $customer->contact=$request->contact;
            $customer->profession=$request->profession;
            $customer->address=$request->address;

            $customer->save();
            return response(['data'=>$customer],200);

        }catch (Exception $e){
            return response(['data'=>$e],422);
        }


    }

}
