<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomepageCategoryController extends Controller
{

    public function show_microwave()
    {
        $microwaveSubcategory = category::where('category_name', 'Kitchen')
            ->with(['subcategoriesid' => function ($query) {
                $query->where('subcategory_name', 'Microwaves')->with('products.productImages');
            }])
            ->first();

        return view('home.subcategory_page.Microwave', ['microwaveSubcategory' => $microwaveSubcategory]);
    }

    public function show_mobile()
    {
        $iphoneSubcategory = category::where('category_name', 'Mobile Phone')
            ->with(['subcategoriesid' => function ($query) {
                $query->where('subcategory_name', 'Iphone')->with('products.productImages');
            }])
            ->first();

        return view('home.subcategory_page.Iphone', ['iphoneSubcategory' => $iphoneSubcategory]);
    }
}
