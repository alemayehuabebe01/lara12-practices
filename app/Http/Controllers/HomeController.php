<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    function index(){
        DB::table('users')->insert(
            [
            'name' => 'Alesa',
            'email' => 'alexsabebe@gmail.com',
            'password' => '12345678'
            ]
        );
        return view('welcome');
    }
}
