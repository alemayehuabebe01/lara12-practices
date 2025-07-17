<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploderController extends Controller
{
    public function index()
    {
      $files = File::all();
      return view('file-upload', ['files' => $files]);
    }

    public function store(Request $request){

        //  $file = Storage::disk('local')->put('/',$request->file('file'));
        $file = $request->file('file');
        $customeName = 'wishu_'.Str::uuid();
        $ext = $file->getClientOriginalExtension(); // get the file extension
        $fileName  = $customeName . '.' . $ext;
        
        $path = $file->storeAs('/',$fileName,'dir_public');
        $fileStore = new File();
        $fileStore->file_path = '/uploads/'.$path;
        $fileStore->save();

        dd('stored');
    }

    public function download(){
        $filePath = storage_path('app/public/ee93aBg00oS2N2Y57nK6SsuNCYyJCiVdrXq7OWzh.jpg');
        return response()->download($filePath);
    }
}
