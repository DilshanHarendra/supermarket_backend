<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OverheadExpenses extends Model
{
    public static function getAll(){
        return DB::table('overhead_expenses')->get();
    }
    public static function getByType($type){
        return DB::table('overhead_expenses')->where('type',$type)->get();
    }
    public static function getByDate($data){
        return DB::table('overhead_expenses')->where('payDate',$data)->get();
    }
}
