<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gig;
use App\Models\gig_category;

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
      $gig = array();
      for($i=0;$i<sizeof($gig_list);$i++)
      {
        array_push($gig,['title'=>$gig_list[$i]->title,'description'=>$gig_list[$i]->description]);
      }
    
    return view("freelancer",['gig_lists'=>$gig_list]);
     //return redirect()->route('show_gig');
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
