<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

define('MEGABYTE', 1024 * 1024);
class FileController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //

  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $size = \auth()->user()->files()->sum('size');
//    dd($size /  MEGABYTE );

    // Validate the file upload request
    $request->validate([
      'file' => 'required|file|max:'.((120 * MEGABYTE) - $size),  // 1048576 KB = 1 GB
    ]);

// Assuming the user's phone number is stored in the 'phone' column of the users table
    $phoneNumber = Auth::user()->phone;

    $originalFileName = time() . $request->file->getClientOriginalName();
// Create a new File object
    $file = new File();
    $file->user_id = Auth::user()->id;
    $file->filename = $originalFileName;
    $file->size = $request->file->getSize();
    $file->save();

// Get the original name of the uploaded file

// Define the path where the file should be stored
    $path = $phoneNumber . '/' . $originalFileName;

// Store the file in the defined path under the 'public' disk
//    Storage::disk('public')->put($path, file_get_contents($request->file));


    $request->file->storeAs('public/' . $phoneNumber , $originalFileName);
// Flash a success message (optional, you can customize this)
    session()->flash('message', 'File uploaded successfully!');

// Redirect the user back to the previous page
    return ['size' => (($size + $file->size) / MEGABYTE ) ];

  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
