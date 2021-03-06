<?php

namespace App\Http\Controllers\Api\Order;

use App\Employee;
use App\Orders;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    function getAll(){
        $data=Orders::getAll();
        return response(['data'=>$data],200);
    }

    function getById($id){
        $data=Orders::getById($id);
        return response(['data'=>$data],200);
    }

    function addNewOrder(Request $request){
        try {

            $order= new Orders();

            $order->order_id=uniqid('or');
            $order->type=$request->type;
            $order->delivery_Person_id=$request->delivery_Person_id;
            $order->status=$request->status;
            $order->invoice_id=$request->invoice_id;
            $order->delivered=$request->delivered;
            $order->address=$request->address;


            $order->save();
            return response(['data'=>$order],200);

        }catch (Exception $e){
            return response(['data'=>$e],422);
        }


    }

    function assignDeliver(Request $request){
        try {

            $id=$request->order_id;
            $eid=$request->delivery_Person_id;
            $ename=$request->username;
            $data=array(
                "delivery_Person_id"=>$ename,
                "delivered"=>"Progress"

            );

            $data2=array(
                "assignDelivery"=>$id,
            );

            Employee::assignToDelevery($eid,$data2);
            Orders::updatData($id,$data);
            return response(['data'=>"succ"],200);

        }catch (Exception $e){
            return response(['data'=>$e],422);
        }


    }
}
