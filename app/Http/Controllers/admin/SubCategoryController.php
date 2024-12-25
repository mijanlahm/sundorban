<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function create_subcategory(){
        $categories = Category::all();
        return view('admin.sub_category.create_sub_category', compact('categories'));
    }

    public function manage_subcategory(){
        $subcategories = SubCategory::all();
        return view('admin.sub_category.manage_sub_category', compact('subcategories'));
    }
}
