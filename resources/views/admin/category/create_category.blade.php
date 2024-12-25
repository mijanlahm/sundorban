@extends('admin.layouts.layout')

@section('admin_page_title')
    Create Category - Admin Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/category.css') }}">
@endsection

@section('admin_layout')
    <div class="row justify-content-center">
        <div class="col-8">
            
            <div class="card">
                <div class="card-header">
                    <h4 style="color: white;">Create Category</h4>
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

                    <form action="{{ route('storeCategory') }}" method="POST">

                        @csrf

                        <!-- Category Name -->
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="Enter category name" required>
                        </div>
    
                        
                        <!-- Buttons -->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-outline-secondary me-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection