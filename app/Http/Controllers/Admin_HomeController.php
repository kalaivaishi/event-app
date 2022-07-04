<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookform_model;
use App\Models\VIP_table_model;
use App\Models\Platinum_table_model;
use App\Models\Gold_table_model;


class Admin_HomeController extends Controller
{
    public function login()
    {
        return view("admin_login");
    }

     public function dashboard()
    {
        return view("admin_dashboard");
    }

    public function all_bookings()
    {
        $booking = Bookform_model::get();


        return view("all_bookings",compact("booking"));
    }

    public function pending_bookings()
    {
        return view("pending_bookings");
    }

    public function all_tables()
    {
        $vip = VIP_table_model::get();
        $platinum = Platinum_table_model::get();
        $gold = Gold_table_model::get();

        return view("all_tables",compact('vip','platinum','gold'));
    }

     public function contributors()
    {
        return view("contributors");
    }
}
