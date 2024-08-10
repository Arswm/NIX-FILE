<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;


class OtpController extends Controller
{
  public function sendPhone(Request $request)
  {
    $phone = $request->phone;
    $user = User::where('phone', $phone)->first();
    if (!$user) {
      $user = new User();
      $user->phone = $request->phone;
      $user->save();
    }
    $user->phone_token = rand(10000, 99999);
    $user->save();

//    $url = "https://ippanel.com/services.jspd";
//
//    $rcpt_nm = [$user->phone];
//    $param = array
//    (
//      'uname'=>'',
//      'pass'=>'',
//      'from'=>'',
//      'message'=>' کد احراز هویت شما در نیکس فایل' . $user->phone_token . ' میباشد',
//      'to'=>json_encode($rcpt_nm),
//      'op'=>'send'
//    );
//
//    $handler = curl_init($url);
//    curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
//    curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
//    curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
//    $response2 = curl_exec($handler);
//
//    $response2 = json_decode($response2);
//    return $response2;
//    $res_code = $response2[0];
//    $res_data = $response2[1];
//
//    echo $res_data;
    return response()->json([
      'success' => true,
      'message' => 'OTP sent successfully.',
    ], 200);
  }

  public function sendToken(Request $request)
  {
    $phone = $request->phone;
    $token = $request->token;

    $user = User::where('phone', $phone)->first();

    if ($user && $user->phone_token == $token) {
      $user->phone_token = null;
      $user->save();

      Auth::login($user);

      return response()->json([
        'success' => true,
        'message' => 'Token verified successfully.',
      ], 200);
    }

    return response()->json([
      'success' => false,
      'message' => 'Invalid token or phone number.',
    ], 400);
  }

  public function logout(){
    Auth::logout();
    return redirect()->route('home');
  }
}

