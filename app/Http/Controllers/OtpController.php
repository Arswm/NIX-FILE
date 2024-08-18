<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;


class OtpController extends Controller
{
  public function sendPhone(Request $request)
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



// Create a new Guzzle client instance
    $client = new Client();

    try {
      $response = $client->post(config("app.sms.url"), [
        'json' => [
          "op" => "pattern",
          "user" => config("app.sms.username"),
          "pass" => config("app.sms.password"),
          "fromNum" => config("app.sms.number"),
          "toNum" => $phone,
          "patternCode" => config("app.sms.pattern"),
          "inputData" => [
            [
              "code" => $user->phone_token,
            ]
          ]
        ],
        'headers' => [
          'Content-Type' => 'application/json',
        ],
        'timeout' => 0,
      ]);

      // Get the response body as a string
      $body = $response->getBody()->getContents();
      // Optionally, decode the JSON response
      $data = json_decode($body, true);

    } catch (RequestException $e) {
      // You can handle exceptions here
      $error = $e->getMessage();
      // You might want to log the error or handle it according to your requirement.
    }


//    $curl = curl_init();
//
//    curl_setopt_array($curl, array(
//      CURLOPT_URL => 'https://ippanel.com/api/select',
//      CURLOPT_RETURNTRANSFER => true,
//      CURLOPT_ENCODING => '',
//      CURLOPT_MAXREDIRS => 10,
//      CURLOPT_TIMEOUT => 0,
//      CURLOPT_FOLLOWLOCATION => true,
//      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//      CURLOPT_CUSTOMREQUEST => 'POST',
//      CURLOPT_POSTFIELDS => json_encode([
//        "op" => "pattern",
//        "user" => "1930575130",
//        "pass" => "abedi1993",
//        "fromNum" => "3000505",
//        "toNum" => $phone,
//        "patternCode" => "9hbvho4ymh134ma",
//        "inputData" => [
//          [
//            "code" => $user->phone_token,
//          ]
//        ]
//      ]),
//      CURLOPT_HTTPHEADER => array(
//        'Content-Type: application/json'
//      ),
//    ));
//
//    $response = curl_exec($curl);
//    $curl_error = curl_error($curl);
//    curl_close($curl);

//    if ($curl_error) {
//      return response()->json(['error' => 'Failed to send OTP.'], 500);
//    }
//
//    $responseDecoded = json_decode($response, true);
//    if (json_last_error() !== JSON_ERROR_NONE) {
//      return response()->json(['error' => 'Invalid response from OTP service.'], 500);
//    }
//
//    \Log::info('OTP API Response: ' . $response);

    return response()->json(['message' => 'OTP sent successfully', 'data' => ''], 200);
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

