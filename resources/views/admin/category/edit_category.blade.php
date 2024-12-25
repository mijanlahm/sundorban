@extends('admin.layouts.layout')

@section('admin_page_title')
    Edit Category - Admin Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/category.css') }}">
@endsection

@section('admin_layout')
    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h4 style="color: white;">Edit Category</h4>
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

                    <form action="{{ route('updateCategory', $categoryInfo->id) }}" method="POST">

                        @csrf
                        @method('PUT')
                        <!-- Category Name -->
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" name="category_name" value="{{ $categoryInfo->category_name }}" required>
                        </div>
    
                        
                        <!-- Buttons -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection