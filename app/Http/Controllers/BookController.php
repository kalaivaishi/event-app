<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookform_model;

class BookController extends Controller
{
    public function fill_form()
    {
        return view('fill_form');
    }

    public function success()
    {
        return view('success');
    }

     public function book_seat(Request $request)
    {
        $book_seat = Bookform_model::create([
        'seats_selected'=>$request->seats,
        'total_member'=>$request->member,
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'id_proof'=>$request->proof,
        'organization_name' => $request->company,
        'message' => $request->message,
        'status'=>"Booked"
        
    ]);
        $book_detail=Bookform_model::orderBy('id','desc')->first();;
        //$id=Bookform_model::latest('id')->first();
        //echo $id;
        //$id=dd($book_seat->id);
        //$book_detail=Bookform_model::find($id);
        //echo $book_detail;
        //$book_detail= Bookform_model::get($data);



        //'password' => bcrypt($request->password)
        // $obj = new Bookform_model;

        // $obj->seats_selected = $request->seats;
        // $obj->total_member = $request->member;
        // $obj->name = $request->name;
        // $obj->email = $request->email;
        // $obj->phone = $request->phone;
        // $obj->id_proof = $request->proof;
        // $obj->organization_name = $request->company;
        // $obj->message = $request->message;
        // $obj->status="Booked";

        // $obj->save();

        return view("fillform_pay",compact('book_detail'));
    }
}
