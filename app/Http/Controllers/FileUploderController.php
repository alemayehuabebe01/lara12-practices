<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File as handleFile;

class FileUploderController extends Controller
{
    public function index()
    {
    //   $file = File::find(5);
    //   handleFile::delete(public_path($file->file_path));
    //   $file->delete();

      $files = File::all();
      return view('file-upload', ['files' => $files]);
    }

    public function store(Request $request){

        //  $file = Storage::disk('local')->put('/',$request->file('file'));

        $request->validate([
            'file' => ['required','image']
        ]);

        $file = $request->file('file');
        $customeName = 'wishu_'.Str::uuid();
        $ext = $file->getClientOriginalExtension(); // get the file extension
        $fileName  = $customeName . '.' . $ext;

        $path = $file->storeAs('/',$fileName,'dir_public');
        $fileStore = new File();
        $fileStore->file_path = '/uploads/'.$path;
        $fileStore->save();

        return redirect()->route('home');

    }

    public function download(){
        $filePath = storage_path('app/public/ee93aBg00oS2N2Y57nK6SsuNCYyJCiVdrXq7OWzh.jpg');
        return response()->download($filePath);
    }
}
