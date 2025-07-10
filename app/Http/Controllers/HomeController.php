<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
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
        // $blogs = DB::table('blogs')->pluck('title')->toArray();
        // dd($blogs);

        // $products = DB::table('products')->get()->count();

        // dd($products);

        // create data in db with equint orm

        // $user = new User();

        // $user->name = 'alexs';
        // $user->email = 'tomas@gmail.com';
        // $user->password = '123456';

        // $user->save();

        //retrive data from db by eloquent ORM

        // $users = User::find(1);

        // foreach ($users as $user){
        //     echo $user->name . '---' . $user->email;
        //     echo "<br>";
        // }
        // dd($users);

        // Update data thruth eloquent ORM

        // $user = User::where('id',1)->first();

        // $user->email = 'helo@gmil.com';

        // $user->save();

        //how delete the data fromdb using eloquent ORM

        // $users = User::findOrFail(3);
        // $users->delete();

        // User::create([
        //     'name'=> 'test user',
        //     'email' => 'alx@gmail.com',
        //     'password' => '12345',
        // ]);

        // User::insert([
        //     [
        //         'name' => 'test user 2',
        //         'email' => 'testuser@gmail.com',
        //         'password' => '12345'
        //     ],
        //     [
        //         'name' => 'test user 3',
        //         'email' => 'testuser3@gmail.com',
        //         'password' => '12345'
        //     ]
        // ]);

        // $product = Product::where('id','>', 1)->first();


        // $product = Product::whereIn('id',[1,2,3,4,5])->get();
        // dd($product);

        //soft delete

        //Product::find(2)->delete();
        dd(Product::find(2));

        return view('welcome');
    }
}
