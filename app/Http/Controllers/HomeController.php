<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermodel;
use App\Models\Customermodel;



class HomeController extends Controller
{
    public function login()
    {
        return view("index");
    }

    public function index()
    {
        return view("customer");
    }

    public function customer(Request $request)
    {
                $obj = new Customermodel;

        $obj->customer_name=$request->customer_name;
        $obj->email=$request->email;

        $obj->save();
    }

    public function signin()
    {
        return view("signin");
    }

    public function create(Request $request)
    {
        // $validate=$request->validate([
        //     'name'=>['required'],
        //     'username'=>['required'],
        //     'password'=>['required'],
        //     'email'=>['required'],
        //     'age'=>['required'],
        //     'phone'=>['required'],
        // ]);

        $obj = new Usermodel;

        $obj->name=$request->name;
        $obj->last_name=$request->lname;
        $obj->email=$request->email;
        $obj->password=$request->password;
        $obj->dob=$request->dob;
        $obj->phone_number=$request->phone;
        $obj->save();
        

        return view("index");
    }

    // public function process_login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {

    //         return view("book_page");
    //         // return redirect()->intended('book_page')
    //         //             ->withSuccess('Signed in');
    //     }
   
    //     return redirect("login")->withSuccess('Login details are not valid');
    
    // }

    public function process_login(Request $request)
    {
        return view("book_page");
    }

}
