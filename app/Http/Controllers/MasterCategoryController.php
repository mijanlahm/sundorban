<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;

class MasterCategoryController extends Controller
{
    public function store_category(Request $request){
        $validated_data = $request->validate([
            'category_name' => 'required|unique:categories|max:100',
        ]);

        Category::create($validated_data);
        
        return redirect()->route('manageCategory')->with('success', 'Category Added successfully!');
    }

    public function show_category($id){
        $categoryInfo = Category::find($id);
        return view('admin.category.edit_category', compact('categoryInfo'));
    }


    public function update_category(Request $request, $id){
        $category = Category::find($id);
        $validated_data = $request->validate([
            'category_name' => 'required|unique:categories|max:100',
        ]);

        $category->update($validated_data);

        return redirect()->route('manageCategory')->with('success', 'Category Updated successfully!');
    }

    public function delete_category($id){
        Category::findOrFail($id)->delete();
        return redirect()->route('manageCategory')->with('success', 'Category Deleted successfully!');
    }
}
