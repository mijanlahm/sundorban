<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DefaultAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    public function create_product_attribute(){
        return view('admin.attribute.create_attribute');
    }

    public function manage_product_attribute(){
        $allAttributes = DefaultAttribute::all();
        return view('admin.attribute.manage_attribute', compact('allAttributes'));
    }

    public function store_default_attribute(Request $request){
        $validated_data = $request->validate([
            'attribute_value' => 'required|unique:default_attributes|max:100',
        ]);

        DefaultAttribute::create($validated_data);
        
        return redirect()->route('manageProductAttribute')->with('success', 'Default Attribute Added successfully!');
    }

    public function show_default_attribute($id){
        $Attribute_info = DefaultAttribute::find($id);
        return view('admin.attribute.edit_default_attribute', compact('Attribute_info'));
    }

    public function update_default_attribute(Request $request, $id){
        $allAtrribute = DefaultAttribute::find($id);
        $validated_data = $request->validate([
            'attribute_value' => 'required|unique:default_attributes|max:100',
        ]);

        $allAtrribute->update($validated_data);

        return redirect()->route('manageProductAttribute')->with('success', 'Default Attribute Updated successfully!');
    }

    public function delete_default_attribute($id){
        DefaultAttribute::findOrFail($id)->delete();
        return redirect()->route('manageProductAttribute')->with('success', 'Default Attribute Deleted successfully!');
    }
}
