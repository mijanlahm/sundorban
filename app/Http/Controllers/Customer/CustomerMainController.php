<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerMainController extends Controller
{
    public function index(){
        return view('customer.user_profile');
    }

    public function user_order_history(){
        return view('customer.user_order_history');
    }

    public function user_payment_setting(){
        return view('customer.user_payment_setting');
    }

    public function user_affiliate(){
        return view('customer.user_affiliate');
    }
}
