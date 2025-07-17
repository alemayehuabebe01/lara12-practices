<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploderController extends Controller
{
    public function index()
    {
      $files = File::all();
      return view('file-upload', ['files' => $files]);
    }

    public function store(Request $request){

        //  $file = Storage::disk('local')->put('/',$request->file('file'));
        $file = $request->file('file')->store('/','public');
  
        $fileStore = new File();
        $fileStore->file_path = $file;
        $fileStore->save();

        dd('stored');
    }

    public function download(){
        return Storage::disk('public')->download('ee93aBg00oS2N2Y57nK6SsuNCYyJCiVdrXq7OWzh.jpg');
    }
}
