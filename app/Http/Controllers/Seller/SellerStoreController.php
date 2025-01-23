<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SellerStoreController extends Controller
{
    public function vendor_store_create(){
        return view('Seller.store.create_store');
    }

    public function vendor_store_manage(){
        $user_id = Auth::user()->id;
        $stores = Store::where ('user_id', $user_id)->get();
        return view('Seller.store.manage_store', compact('stores'));
    }

    public function vendor_store_publish(Request $request){
        $request->validate([
            'store_name' => 'required|unique:stores|max:100',
            'slug' => 'required|unique:stores',
            'details' => 'required',
        ]);

        Store::create([
            'store_name' => $request->store_name,
            'slug' => $request->slug,
            'details' => $request->details,
            'user_id' =>Auth::user()->id,

        ]);
        
        return redirect()->route('vendorStoreManage')->with('success', 'store Added successfully!');
    }

    public function show_vendor_store($id){
        $storeInfo = Store::find($id);
        return view('seller.store.edit_store', compact('storeInfo'));
    }

    public function update_vendor_store(Request $request, $id){
        $store = Store::find($id);
        $request->validate([
            'store_name' => ['required', 'string', 'max:100', Rule::unique('stores', 'store_name')->ignore($store->id)],
            'slug' => ['required','string', Rule::unique('stores', 'slug')->ignore($store->id),],
            'details' => 'required',
        ]);
        

        $store->update([
            'store_name' => $request->store_name,
            'slug' => $request->slug,
            'details' => $request->details,
            'user_id' =>Auth::user()->id,
        ]);

        return redirect()->route('vendorStoreManage')->with('success', 'Store Updated successfully!');
    }

    public function delete_vendor_store($id){
        Store::findOrFail($id)->delete();
        return redirect()->route('vendorStoreManage')->with('success', 'Store Deleted successfully!');
    }

}
