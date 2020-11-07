<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\otp;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{

    public function process_login(Request $request)
    {
        $credentials = array(
            'mobile' => $request->mobile,
            'password'=>$request->password
            );

        $user = User::where('mobile',$request->mobile)->first();
        if ($user) {
                if (auth()->attempt($credentials)) {
                    return redirect('/');
                }else{
                    session()->flash('message', 'Invalid credentials');
                    return redirect()->back();
                }
        }
        else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function send_otp($mobile_number)
    {
        //$mobile_number = "01845318609";
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "http://13.250.7.83/exam/api/send_sms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n".$mobile_number."\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msg\"\r\n\r\ntest\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
                "postman-token: 24205d22-b04d-11ff-d75e-37564e566b5c"
            ),
            ));

            $response = curl_exec($curl);
            return $response;

    }

    public function sendingOtp(Request $Request)
    {

        $user = User::where('id',$Request->user)->first();
        $otp = otp::where('user_id',$Request->user)->where('otp',$Request->otp)->first();
        if ($otp) {
            $user->status = 1;
            $user->save();
            if ($user->user_role == 'entrepreneur') {
                return redirect()->route('login')->with('message','Registration successfull. wait for approve your account.');
            }else{
                return redirect()->route('login')->with('message','Registration successfull');
            }
        }
        else {
            return redirect()->back()->with('message','Incorrect otp! give correct otp.');
        }
    }

    public function process_otp($id)
    {
        $user = User::where('id',$id)->first();
        $otp_request = json_decode($this->send_otp($user->mobile));
        $otp = $otp_request->otp;
        if(otp::where('user_id',$user->id)->first())
        {
            otp::where('user_id',$user->id)->update(['otp'=>$otp]);
        }
        else
        {
            otp::create(['user_id'=>$user->id,"otp"=>$otp]);
        }
        return redirect('/otp/'.$user->id);
    }

    public function registration(Request $Request)
    {
        $Request->validate([
            'name' => 'required',
            'address' => 'required',
            'district' => 'required',
            'role' => 'required',
            'mobile' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'nid' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create(['name'=>$Request->name, 'email'=>$Request->email, 'mobile'=>$Request->mobile, 'address'=>$Request->address, 'district'=>$Request->district, 'nid'=>$Request->nid, 'role'=>$Request->role, 'status'=>0, 'password'=>Hash::make($Request->password)]);
        if ($user) {
           $this->process_otp($user->id);
           return redirect('/otp/'.$user->id);
        }

    }
}
