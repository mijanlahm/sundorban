<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HomePageSetting;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $percentage = HomePageSetting::first();

        // Check if $percentage is null to avoid errors
        if ($percentage) {
            $discount_percentage = intval($percentage->discounted_percent);
        } else {
            $discount_percentage = 0; // Default value or logic when no data exists
        }

        $homepagesetting = HomePageSetting::first(); // You may reuse $percentage here

        return view('home.index', compact('homepagesetting', 'discount_percentage'));
    }

}