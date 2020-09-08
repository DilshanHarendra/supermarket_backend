<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    public static function getAll(){
        return DB::table('customers')->get();
    }
    public static function getById($uid){
        return DB::table('customers')->where('user_id',$uid)->get();
    }
}
