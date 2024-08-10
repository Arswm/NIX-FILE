<?php

namespace App\Http\Controllers;

use App\Models\Sentence;
use Illuminate\Http\Request;

class SentenceController extends Controller
{
  public function showHome()
  {
    // دریافت یک جمله تصادفی از پایگاه داده
    $sentence = Sentence::inRandomOrder()->first();

    // ارسال جمله به نمای home
    return view('home', compact('sentence'));
  }
}
