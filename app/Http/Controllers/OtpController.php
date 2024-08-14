<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;


class OtpController extends Controller
{
  private function sendPhone(Request $request)
  {
    $request->validate([
      'phone' => 'required|numeric|digits:11',
    ]);

    $phone = $request->phone;

    $user = User::where('phone', $phone)->first();

    if (!$user) {
      $user = new User();
      $user->phone = $phone;
      $user->save();
    }


    $user->phone_token = rand(10000, 99999);

    $user->save();

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://ippanel.com/api/select',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => json_encode([
        "op" => "pattern",
        "user" => "1930575130",
        "pass" => "abedi1993",
        "fromNum" => "3000505",
        "toNum" => $phone,
        "patternCode" => "9hbvho4ymh134ma",
        "inputData" => [
          [
            "code" => $user->phone_token,
          ]
        ]
      ]),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));

    $response = curl_exec($curl);
    $curl_error = curl_error($curl);
    curl_close($curl);

    if ($curl_error) {
      return response()->json(['error' => 'Failed to send OTP.'], 500);
    }

    $responseDecoded = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
      return response()->json(['error' => 'Invalid response from OTP service.'], 500);
    }

    \Log::info('OTP API Response: ' . $response);

    return response()->json(['message' => 'OTP sent successfully', 'data' => $responseDecoded], 200);
  }


  private function sendToken(Request $request)
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

