<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OfferDetails extends Model
{
    public static function getAll(){
            return DB::table('offer_details')->get();
       }
}
