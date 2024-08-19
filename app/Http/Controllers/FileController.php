<?php

namespace App\Http\Controllers;

use App\Http\Resources\FileResource;
use Carbon\Carbon;
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
    return ['files' => FileResource::collection(\auth()->user()->files) , 'user' => \auth()->user()];
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

    // Validate the file upload request
    $request->validate([
      'images.*' => 'required|file|max:' . ((1000 * MEGABYTE) - $size),  // 1048576 KB = 1 GB
    ]);

//    dd($size /  MEGABYTE );
// Assuming the user's phone number is stored in the 'phone' column of the users table
    $phoneNumber = Auth::user()->phone;
    foreach ($request->file('images') as $file) {


      $originalFileName = time() . $file->getClientOriginalName();
// Create a new File object
      $file1 = new File();
      $file1->user_id = Auth::user()->id;
      $file1->filename = $originalFileName;
      $file1->size = $file->getSize();
      $file1->save();

// Get the original name of the uploaded file

// Define the path where the file should be stored
      $path = $phoneNumber . '/' . $originalFileName;

// Store the file in the defined path under the 'public' disk
//    Storage::disk('public')->put($path, file_get_contents($request->file));


      $file->storeAs('public/' . $phoneNumber, $originalFileName);
// Flash a success message (optional, you can customize this)
//      session()->flash('message', 'File uploaded successfully!');

    }
// Redirect the user back to the previous page
    return ['OK' => true, 'message' => 'file uploaded successfully' ];

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


  public function dl( File $file )
  {

//    if(auth()->id() != $file->user_id) {
//      return abort(403);
//    }
    $downloadLink = 'public/'.$file->user->phone . "/{$file->filename}";
    // Ensure that the file exists
    if (!Storage::exists($downloadLink)) {
       return abort(404); // or handle the error as you see fit
    }

    // Generate a temporary download URL for the given file
//    $temporaryUrl = Storage::url($n);

//    $temporaryLink = \Illuminate\Support\Facades\URL::temporarySignedRoute(
//      'file.download', // This should be the name of the route you define for actual file download
//      Carbon::now()->addMinutes(5), // Expiration time (5 mins)
//      ['file' => $file->id] // Pass the necessary parameters, e.g. the file ID
//    );

//    return response()->json([
//      'download_link' => $temporaryLink
//    ]);

    return Storage::download($downloadLink);

  }
}
