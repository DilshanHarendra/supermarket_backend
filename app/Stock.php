<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Stock extends Model
{
    public static function getAll(){
        return DB::table('stocks')->get();
    }

}
