<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploderController extends Controller
{
    public function index()
    {
      return view('file-upload');
    }

    public function store(Request $request){

        //  $file = Storage::disk('local')->put('/',$request->file('file'));
        $file = $request->file('file')->store('/','local');
 
         dd($file);

    }
}
