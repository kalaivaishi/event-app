<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\Admin_HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[HomeController::class,'login']);
Route::get('signin',[HomeController::class,'signin']);
Route::get('index',[HomeController::class,'index']);
Route::post('customer',[HomeController::class,'customer']);


Route::post('create',[HomeController::class,'create']);
Route::post('process_login',[HomeController::class,'process_login']);
Route::get('process_login',[HomeController::class,'process_login']);

Route::get('fill_form',[BookController::class,'fill_form']);
Route::get('success',[BookController::class,'success']);
Route::post('book_seat',[BookController::class,'book_seat']);


Route::get('razorpay-payment/{email}', [RazorpayController::class, 'index']);
Route::post('razorpay-payment', [RazorpayController::class, 'store'])->name('razorpay.payment.store');


/*admin login routes

*/

Route::get('admin_login',[Admin_HomeController::class,'login']);
Route::get('admin_dashboard',[Admin_HomeController::class,'dashboard']);
Route::get('all_bookings',[Admin_HomeController::class,'all_bookings']);
Route::get('pending_bookings',[Admin_HomeController::class,'pending_bookings']);
Route::get('all_tables',[Admin_HomeController::class,'all_tables']);
Route::get('contributors',[Admin_HomeController::class,'contributors']);



