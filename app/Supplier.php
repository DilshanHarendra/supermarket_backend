<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Supplier extends Model
{
    //
    public static function getAll(){
        return DB::table('suppliers')->get();
    }
    public static function getBySupplierId($sid){
        return DB::table('suppliers')->where('supplier_id',$sid)->get();
    }
}
