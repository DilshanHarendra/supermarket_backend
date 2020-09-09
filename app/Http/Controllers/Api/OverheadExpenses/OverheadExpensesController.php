<?php

namespace App\Http\Controllers\Api\OverheadExpenses;


use App\OverheadExpenses;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class OverheadExpensesController extends Controller
{
    function __construct()
    {

    }
    function getAll(){
        $data=OverheadExpenses::getAll();
        return response(['data'=>$data],200);
    }
    function getByType($type){
        $data=OverheadExpenses::getByType($type);
        return response(['data'=>$data],200);
    }
    function getByDate($date){
        $data=OverheadExpenses::getByDate($date);
        return response(['data'=>$data],200);
    }

    function addNewExpense(Request $request){
        try {

            $oExpense= new OverheadExpenses();

            $oExpense->oh_id=uniqid('oE');
            $oExpense->expense=$request->expense;
            $oExpense->amount=(float)$request->amount;
            $oExpense->paymentMode=$request->paymentMode;
            $oExpense->payDate=$request->payDate;

            $oExpense->save();
            return response(['data'=>$oExpense],200);

        }catch (Exception $e){
            return response(['data'=>$e],422);
        }


    }
}
