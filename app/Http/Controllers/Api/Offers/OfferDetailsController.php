<?php

namespace App\Http\Controllers\Api\Offers;




use App\OfferDetails;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;



class OfferDetailsController extends Controller
{
    function __construct()
    {

    }

    function getAll(){
        $data=OfferDetails::all();
        return response(['data'=>$data],200);
    }

    function addNewOffer(Request $request){
        try {

            $offerDetails= new OfferDetails();

            $offerDetails->offer_id=uniqid('of');
            $offerDetails->start_date=$request->start_date;
            $offerDetails->end_date=$request->end_date;
            $offerDetails->details=$request->details;
            $offerDetails->batch_id=$request->batch_id;
            $offerDetails->brand_id=$request->brand_id;

            $offerDetails->save();
            return response(['data'=>$offerDetails],200);

        }catch (Exception $e){
            return response(['data'=>$e],422);
        }


    }


}
