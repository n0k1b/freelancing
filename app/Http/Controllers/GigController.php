<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gig;

class GigController extends Controller
{
    //
    public function gig_post(Request $request)
    {
       gig::create(['user_id'=>1,"category_id"=>$request->gig_category,"title"=>$request->gig_title,"description"=>$request->gig_description,"image"=>"test","min_price"=>$request->base_price_min,"max_price"=>$request->base_price_max,'minimum_duration'=>$request->duration]);

    }
}
