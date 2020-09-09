<?php

namespace App\Http\Controllers\Api\Stock;


use App\Stock;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

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
            $stock->proPrice=(float)$request->proPrice;
            $stock->proDetails=$request->proDetails;
            $file=$request->file('img');
            $path='img/product';
            $stock->img=$path;
            $stock->save();
            $file->move($path,$file->getClientOriginalName());

           // file_put_contents($path, $file->getPath());
            return response(['data'=>$stock],200);
        }catch (Exception $e){
            return response(['data'=>$e],422);
        }

    }


}
