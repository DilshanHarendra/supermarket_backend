<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orders extends Model
{
    public static function getAll(){
        return DB::table('orders')->get();
    }
    public static function getById($id){
        return DB::table('orders')->where('order_id',$id)->get();
    }
    public static function updatData($id,$data){
        DB::table('orders')->where('order_id',$id)->update($data);
        return DB::table('orders')->where('order_id',$id)->get();

    }
}
