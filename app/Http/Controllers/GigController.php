<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gig;
use App\Models\gig_category;
use App\Models\User;
use App\Models\hire_information;

class GigController extends Controller
{
    //
    public function gig_post(Request $request)
    { 
        $image = time().'.'.request()->file->getClientOriginalExtension();
       request()->file->move(base_path('Gig Image'), $image);
       file_put_contents('test.txt',$request->gig_title);
       gig::create(['user_id'=>1,"category_id"=>$request->gig_category,"title"=>$request->gig_title,"description"=>$request->gig_description,"image"=>$image,"min_price"=>$request->base_price_min,"max_price"=>$request->base_price_max,'minimum_duration'=>$request->duration,'city'=>$request->city]);

    }
    public function view_all_gig()
    {
     $gig_list = gig::get();
      foreach($gig_list as $gig)
      {
          $user_id = $gig->user_id;
          $user_name = User::where('id',$user_id)->first()->name;
          $gig['name'] = $user_name;
      }
    
    
    return view("freelancer",['gig_lists'=>$gig_list]);
     //return redirect()->route('show_gig');
    }

    public function hire_entrepreneur(Request $request)
    {
        $hire_from = 4;//Auth
        $hire_to = $request->hire_to;
        $gig_id = $request->gig_id;
        $proposed_hired_day = $request->proposed_duration;
        $proposed_hired_budget = $request->proposed_rate;
        $proposed_message = $request->bid_message;
        file_put_contents("test.txt",$hire_from." ".$hire_to." ".$gig_id." ".$proposed_hired_day." ".$proposed_hired_budget." ".$proposed_message);
        hire_information::create(['hire_from'=>$hire_from,"hire_to"=>$hire_to,"gig_id"=>$gig_id,'proposed_hired_day'=>$proposed_hired_day,'proposed_hired_budget'=>$proposed_hired_budget,'proposed_message'=>$proposed_message,'accept_status'=>0]);
        
        
        
    }


    public function get_gig_details(Request $request)
    {
     $hire_from = 4;//Auth user_id;
      $gig_id = $request->gig_id;
      $gig_details = gig::where('id',$gig_id)->first();
      $user_id = $gig_details->user_id;
      $user_name = User::where('id',$user_id)->first()->name;
      $gig_details['name'] = $user_name;
      if(hire_information::where('hire_from',$hire_from)->where('gig_id',$gig_id)->where('complete_status',0)->first())
      {
          $gig_details['previously_bid']=1;
      }
      else
      {
        $gig_details['previously_bid']=0;
      }
      return view('gig_details',['gig'=>$gig_details]);
      //file_put_contents('test.txt',$gig_id);
      
    }

    public function get_category()
    {
        $category = gig_category::get();
        $data = "";
        for($i=0;$i<sizeof($category);$i++)
        {
            $data.='<option value ='.$category[$i]->id.'>'.$category[$i]->name.'</option>';
        }
        return $data;
    }
}
