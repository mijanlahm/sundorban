@extends('admin.layouts.layout')

@section('admin_page_title')
    Setting - Admin Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/category.css') }}">
@endsection

@section('admin_layout')
    <div class="row justify-content-center">
        <div class="col-8">
            
            <div class="card">
                <div class="card-header">
                    <h4 style="color: white;">Home Page Setting</h4>
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

                    <form action="" method="POST">

                        @csrf

                        <!-- Category Name -->
                        <div class="mb-3">
                            <label for="discounted_product_id" class="form-label">Select Discounted Product</label>
                            <select name="discounted_product_id" id="discounted_product_id" class="form-control">
                                <option value="">Select product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>

                            <label for="discounted_percent" class="form-label">Discounted Percent</label>
                            <input type="number" name="discounted_percent" id="discounted_percent" class="form-control" >

                            <label for="discount_heading" class="form-label">Discount Heading</label>
                            <input type="text" name="discount_heading" id="discount_heading" class="form-control" >
                            
                            <label for="discount_sub_heading" class="form-label">Discount Sub Heading</label>
                            <input type="text" name="discount_sub_heading" id="discount_sub_heading" class="form-control" >

                            <label for="featured_product_1_id" class="form-label">Select featured Product 1</label>
                            <select name="featured_product_1_id" id="featured_product_1_id" class="form-control">
                                <option value="">Select product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>

                            <label for="featured_product_2_id" class="form-label">Select featured Product 2</label>
                            <select name="featured_product_2_id" id="featured_product_2_id" class="form-control">
                                <option value="">Select product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>

                        </div>

                        
                        <!-- Buttons -->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-outline-secondary me-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Update Homepage Setting</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection