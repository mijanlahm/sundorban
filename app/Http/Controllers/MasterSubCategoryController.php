<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class MasterSubCategoryController extends Controller
{
    public function store_subcategory(Request $request){
        $validated_data = $request->validate([
            'subcategory_name' => 'required|unique:sub_categories|max:100',
            'category_id' => 'required|exists:categories,id'
        ]);

        SubCategory::create($validated_data);
        
        return redirect()->route('manageSubCategory')->with('success', 'Subcategory Added successfully!');
    }

    public function show_subcategory($id){
        $subcategoryInfo = SubCategory::find($id);
        return view('admin.sub_category.edit_subcategory', compact('subcategoryInfo'));
    }

    public function update_subcategory(Request $request, $id){
        $subcategory = SubCategory::find($id);
        $validated_data = $request->validate([
            'subcategory_name' => 'required|unique:sub_categories|max:100'
        ]);

        $subcategory->update($validated_data);

        return redirect()->route('manageSubCategory')->with('success', 'Subcategory Updated successfully!');
    }

    public function delete_subcategory($id){
        SubCategory::findOrFail($id)->delete();
        return redirect()->route('manageSubCategory')->with('success', 'Subcategory Deleted successfully!');
    }
}
