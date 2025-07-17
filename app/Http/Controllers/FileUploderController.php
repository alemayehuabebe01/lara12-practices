<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploderController extends Controller
{
    public function index()
    {
      return view('file-upload');
    }
}
