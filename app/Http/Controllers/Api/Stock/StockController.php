<?php

namespace App\Http\Controllers\Api\Stock;


use App\Stock;
use Illuminate\Routing\Controller;
class StockController extends Controller
{
    function getAll(){
        $data=Stock::getAll();
        return response(['data'=>$data],200);
    }

    public function addNewStock(Request $request){
        try {
            $stock = new Stock();
            $stock->pro_id=uniqid('pro');
            $stock->proName=$request->proName;
            $stock->proDetails=$request->proPrice;
            $stock->img=$request->img;
            $stock->save();
            return response(['data'=>$stock],200);
        }catch (Exception $e){
            return response(['data'=>$e],422);
        }

    }


}
