<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    function index(){
        //insert new data to data base by query builder
        // DB::table('users')->insert(
        //     [
        //     'name' => 'Alesa',
        //     'email' => 'alexsabebe@gmail.com',
        //     'password' => '12345678'
        //     ]
        // );

        //get the data from the user table

        // $users = DB::table('users')->where('id',2)->first();
        // return $users;

        //update the  data

        // DB::table('users')->where('id',2)->update([
        //     'name'=> 'Tomas Abeba',
        // ]
        // );

        //Delete row data from data base

        // DB::table('users')->where('id',2)->delete();

        //
        $blogs = DB::table('blogs')->pluck('title')->toArray();
        dd($blogs);

        return view('welcome');
    }
}
