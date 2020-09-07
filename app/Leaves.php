<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Leaves extends Model
{
    public static function getAllLeaves(){
        return DB::table('leaves')->get();
    }

    public static function getLeavesByType($type){
        return DB::table('leaves')->where('type',$type)->get();
    }

    public static function getLeavesByEmpID($empId){
        return DB::table('leaves')->where('emp_id',$empId)->get();
    }
}
