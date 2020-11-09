<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gig;
use App\Models\gig_category;
use App\Models\User;
use App\Models\hire_information;
use App\Models\rating;
use Auth;

class GigController extends Controller
{
    //

    public function payment_confirmation(Request $request)
    {
       $gig_id =$request->gig_id;
       hire_information::where('gig_id',$gig_id)->update(['payment_status'=>1,'complete_status'=>1]);
       return redirect()->route('manage_hire')->with('success','Your payment confirm');
    }

    public function submit_review(Request $request)
    {
        $rating = $request->rating;
        $comment = $request->comment;
        $client_id = auth()->user()->id;
        $entrepreneur_id = $request->freelancer_id;
        $gig_id = $request->job_id;
        rating::create(['gig_id'=>$gig_id,'reviewer_id'=>$client_id,'rating'=>$rating,'review'=>$comment]);
        hire_information::where('gig_id',$gig_id)->update(['complete_status'=>1]);

        //file_put_contents("test.txt",$rating." ".$comment." ".$client_id." ".$entrepreneur_id." ".$gig_id);
        
    }

    public function manage_hire()
    {
     $user_id = auth()->user()->id;;
     $hire_info = hire_information::where('hire_from',$user_id)->get();
     foreach($hire_info as $gig)
     {
     
         $gig['gig_title']=gig::where('user_id',$gig->hire_to)->first()->title;
         $gig['hire_to_mobile_number']= User::where('id',$gig->hire_to)->first()->mobile;
         $gig['hire_to_name']= User::where('id',$gig->hire_to)->first()->name;

     }
   
      return view('manage_hire',['hire_infos'=>$hire_info]);
    }
    Public function manage_gig()
    {
       $entrepreneur_id =  auth()->user()->id;;
       $gigs = gig::where('user_id',$entrepreneur_id)->get();
       return view('manage_gig',['gigs'=>$gigs]);
    }

    Public function manage_work()
    {
       $entrepreneur_id = auth()->user()->id;;
       $hire_info = hire_information::where('hire_to',$entrepreneur_id)->get();
       foreach($hire_info as $gig)
       {
       
           $gig['gig_title']=gig::where('user_id',$gig->hire_to)->first()->title;
           $gig['hire_from_mobile_number']= User::where('id',$gig->hire_from)->first()->mobile;
           $gig['hire_from_name']= User::where('id',$gig->hire_from)->first()->name;
  
       }
       return view('manage_work',['hire_infos'=>$hire_info]);
    }

    public function see_notification_entrepreneur()
    {
        $entrepreneur_id =  auth()->user()->id;;//Auth
        $gig_information = hire_information::where('hire_to',$entrepreneur_id)->where('accept_status',0)->where('complete_status',0)->get();
        foreach($gig_information as $gig)
        {
        
            $gig['gig_title']=gig::where('user_id',$gig->hire_to)->first()->title;
            $gig['hire_from_mobile_number']= User::where('id',$gig->hire_from)->first()->mobile;
            $gig['hire_from_name']= User::where('id',$gig->hire_from)->first()->name;

        }
        return view('notification',['gigs'=>$gig_information]);
    }
    public function gig_post(Request $request)
    { 
        $image = time().'.'.request()->file->getClientOriginalExtension();
       request()->file->move(base_path('Gig Image'), $image);
       file_put_contents('test.txt',$request->gig_title);
       gig::create(['user_id'=> auth()->user()->id,"category_id"=>$request->gig_category,"title"=>$request->gig_title,"description"=>$request->gig_description,"image"=>$image,"min_price"=>$request->base_price_min,"max_price"=>$request->base_price_max,'minimum_duration'=>$request->duration,'city'=>$request->city]);

    }
    public function view_gig(Request $request)
    {
        $category_id = $request->gig_category;
        $location = $request->location;
        $location = explode(',',$location);
        $location = $location[0];
        $gig_list = gig::where('category_id',$category_id)->where('city',$location)->get();
      foreach($gig_list as $gig)
      {
          $user_id = $gig->user_id;
          $user_name = User::where('id',$user_id)->first()->name;
          $gig['name'] = $user_name;
      }
      return view("freelancer",['gig_lists'=>$gig_list]);
       
    }
    public function payment_gateway(Request $request)
    {
        $gig_id = $request->gig_id;
       
        return view ('payment gateway.index',['gig_id'=>$gig_id]);

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
        $hire_from =  auth()->user()->id;//Auth
        $hire_to = $request->hire_to;
        $gig_id = $request->gig_id;
        $proposed_hired_day = $request->proposed_duration;
        $proposed_hired_budget = $request->proposed_rate;
        $proposed_message = $request->bid_message;
        //file_put_contents("test.txt",$hire_from." ".$hire_to." ".$gig_id." ".$proposed_hired_day." ".$proposed_hired_budget." ".$proposed_message);
        hire_information::create(['hire_from'=>$hire_from,"hire_to"=>$hire_to,"gig_id"=>$gig_id,'proposed_hired_day'=>$proposed_hired_day,'proposed_hired_budget'=>$proposed_hired_budget,'proposed_message'=>$proposed_message,'accept_status'=>0]);
        
        
        
    }

    
    public function get_gig_details(Request $request)
    {
    
     //Auth user_id;
      $gig_id = $request->gig_id;
      $gig_details = gig::where('id',$gig_id)->first();
      $user_id = $gig_details->user_id;
      $user_name = User::where('id',$user_id)->first()->name;
      $gig_details['name'] = $user_name;
      $review = rating::where('gig_id',$gig_id)->first();
      $review['name']= User::where('id',$review->reviewer_id)->first()->name;
      $overall_ratings = rating::where('entrepreneur_id',$user_id)->get();
      $overall_rating = ceil(rating::where('entrepreneur_id',$user_id)->get()->sum('rating')/sizeof($overall_ratings));

      if(Auth::check())
   
      {
        $hire_from =  auth()->user()->id;


      if(hire_information::where('hire_from',$hire_from)->where('gig_id',$gig_id)->where('complete_status',0)->first())
      {
          $gig_details['previously_bid']=1;
      }
      else
      {
        $gig_details['previously_bid']=0;
      }
    }
    else
    {
        $gig_details['previously_bid']=2;
    }
      return view('gig_details',['gig'=>$gig_details,'review'=>$review,'overall_rating'=>$overall_rating]);
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
