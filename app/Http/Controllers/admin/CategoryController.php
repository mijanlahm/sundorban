<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create_category(){
        return view('admin.category.create_category');
    }

    public function manage_category(){
        $categories = Category::all();
        return view('admin.category.manage_category', compact('categories'));
    }
}
