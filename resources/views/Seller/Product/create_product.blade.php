@extends('Seller.layouts.layout')

@section('seller_page_title')
    Add Product - Seller Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/category.css') }}">
@endsection

@section('Seller_layout')
    
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card" style="max-width: 1200px;">
            <div class="card-header text-white" style="background-color: #04aa6d;">
                <h5 style="color: white;">Add Product</h5>
            </div>
            <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                
                    <form action="{{ route('vendorProductPublish') }}" method="POST" enctype="multipart/form-data">
                        
                        @csrf

                        <div class="row">
                            <!-- Column 1 -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="product_name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="images" class="form-label">Upload your product Images</label>
                                    <input type="file" class="form-control" name="images[]" multiple>
                                </div>

                                <livewire:category-subcategory/>

                                <div class="mb-3">
                                    <label for="store_id">Select your store for this product</label>
                                    <select name="store_id" id="store_id" class="form-control">
                                        @foreach ($stores as $store)
                                            <option value="{{ $store->id }}">{{ $store->store_name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="regular_price" class="form-label">Regular Price</label>
                                    <input type="number" class="form-control" id="regular_price" name="regular_price" step="0.01">
                                </div>
                                
                                
                            </div>
    
                            <!-- Column 2 -->
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="sku" class="form-label">SKU</label>
                                    <input type="text" class="form-control" id="sku" name="sku">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="discounted_price" class="form-label">Discounted Price (if any)</label>
                                    <input type="number" class="form-control" id="discounted_price" name="discounted_price" step="0.01">
                                </div>

                                <div class="mb-3">
                                    <label for="tax_rate" class="form-label">Tax Rate (%)</label>
                                    <input type="number" class="form-control" id="tax_rate" name="tax_rate" step="0.01">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="stock_quantity" class="form-label">Stock Quantity</label>
                                    <input type="number" class="form-control" id="stock_quantity" name="stock_quantity">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea class="form-control" id="meta_description" name="meta_description" rows="2"></textarea>
                                </div>

                                
                                
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3">Add Product</button>
                        </div>
                    </form>

                    

            </div>
        </div>
    </div>
</div>
    
@endsection