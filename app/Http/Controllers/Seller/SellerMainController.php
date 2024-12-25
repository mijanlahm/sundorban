<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerMainController extends Controller
{
    public function index(){
        return view('Seller.Seller');
    }

    public function seller_order_history(){
        return view('Seller.Seller_order_history');
    }
}
