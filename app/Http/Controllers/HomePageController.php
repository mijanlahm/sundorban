<?php

namespace App\Http\Controllers;

use App\Models\HomePageSetting;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $percentage = HomePageSetting::first();
        $discount_percentage =  intval($percentage->discounted_percent);
        
        $homepagesetting = HomePageSetting::first();
        return view('home.index', compact('homepagesetting', 'discount_percentage'));
    }
}