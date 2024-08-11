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

    $url = "https://ippanel.com/services.jspd";

    $rcpt_nm = [$user->phone];
    $param = array
    (
      'uname' => '1930575130',
      'pass' => 'abedi1993',
      'from' => '3000505',
      'message' => 'کد احراز هویت شما در نیکس فایل ' . $user->phone_token . ' میباشد',
//      'pattern_code' => '9hbvho4ymh134ma',
      'to' => json_encode($rcpt_nm),
      'op' => 'send'
    );


    $handler = curl_init($url);
    curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
    curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
    $response2 = curl_exec($handler);

    $response2 = json_decode($response2);
    return $response2;

    $res_code = $response2[0];
    $res_data = $response2[1];

    echo $res_data;

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

  public function logout()
  {
    Auth::logout();
    return redirect()->route('home');
  }
}


//
//namespace App\Http\Controllers;
//
//use Auth;
//use App\Models\User;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Log; // Import logging
//
//class OtpController extends Controller
//{
//  public function sendPhone(Request $request)
//  {
//    $phone = $request->phone;
//    $user = User::where('phone', $phone)->first();
//
//    if (!$user) {
//      $user = new User();
//      $user->phone = $phone;
//      $user->save();
//    }
//
//    $user->phone_token = rand(10000, 99999);
//    $user->save();
//
//    // Define the API URL
//    $url = "https://ippanel.com/services.jspd";
//
//    // Set the recipient phone number(s)
//    $rcpt_nm = [$user->phone];
//
//    // Prepare the parameters for the request
//    $param = [
//      'uname' => '1930575130', // your username
//      'pass' => 'abedi1993',  // your password
//      'from' => '300505', // sender's number
//      'message' => 'کد احراز هویت شما در نیکس فایل ' . $user->phone_token . ' میباشد',
//      'to' => json_encode($rcpt_nm),
//      'op' => 'send'
//    ];
//
//    // Initialize the cURL session
//    $handler = curl_init($url);
//    curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
//    curl_setopt($handler, CURLOPT_POSTFIELDS, http_build_query($param)); // Ensure parameters are correctly formatted
//    curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
//
//    // Execute the cURL session and get the response
//    $response2 = curl_exec($handler);
//
//    // Check for cURL errors
//    if ($response2 === false) {
//      $error = curl_error($handler);
//      Log::error('cURL Error: ' . $error);
//      curl_close($handler);
//
//      return response()->json([
//        'success' => false,
//        'message' => 'Failed to send OTP. cURL Error: ' . $error,
//      ], 500);
//    }
//
//    curl_close($handler);
//
//    // Decode the JSON response
//    $response2 = json_decode($response2, true);
//
//    // Log the raw response for debugging
//    Log::info('SMS API Response:', ['response' => $response2, 'parameters' => $param]);
//
//    // Check if the response indicates success
//    if ($response2 && isset($response2[0]) && $response2[0] === 0) {
//      return response()->json([
//        'success' => true,
//        'message' => 'OTP sent successfully.',
//        'message_id' => $response2[1] ?? null // Include message ID if available
//      ], 200);
//    }
//
//    // Handle the case where sending failed
//    return response()->json([
//      'success' => false,
//      'message' => 'Failed to send OTP. API Response: ' . json_encode($response2),
//    ], 500);
//  }
//
//  public function sendToken(Request $request)
//  {
//    $phone = $request->phone;
//    $token = $request->token;
//
//    $user = User::where('phone', $phone)->first();
//
//    if ($user && $user->phone_token == $token) {
//      $user->phone_token = null;
//      $user->save();
//
//      Auth::login($user);
//
//      return response()->json([
//        'success' => true,
//        'message' => 'Token verified successfully.',
//      ], 200);
//    }
//
//    return response()->json([
//      'success' => false,
//      'message' => 'Invalid token or phone number.',
//    ], 400);
//  }
//
//  public function logout()
//  {
//    Auth::logout();
//    return redirect()->route('home');
//  }
//}



