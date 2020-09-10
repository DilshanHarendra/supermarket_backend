<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    public static function getAll(){
        return DB::table('employees')->get();
    }
    public static function getById($id){
        return DB::table('employees')->where('user_id',$id)->get();
    }
    public static function assignToDelevery($id,$data){
        return DB::table('employees')->where('user_id',$id)->update($data);

    }
}
