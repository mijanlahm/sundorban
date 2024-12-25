@extends('admin.layouts.layout')

@section('admin_page_title')
    Create Subcategory - Admin Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/category.css') }}">
@endsection

@section('admin_layout')
    <div class="row justify-content-center">
        <div class="col-8">
            
            <div class="card">
                <div class="card-header">
                    <h4 style="color: white;">Create Subcategory</h4>
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

                    <form action="{{ route('storeSubcategory') }}" method="POST">

                        @csrf

                        <!-- Category Name -->
                        <div class="mb-3">
                            <label for="subcategoryName" class="form-label">Subcategory Name</label>
                            <input type="text" class="form-control" id="subcategoryName" name="subcategory_name" placeholder="Enter subcategory name" required>
                        </div>
                        
                        <!-- Select Category Name -->
                        <label for="category_id" class="form-label">Select Category</label>
                        <Select name="category_id" id="category_id" class="form-control">
                                <option value="">select category name</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </Select>
                        
                        <!-- Buttons -->
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary">Add Subcategory</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection