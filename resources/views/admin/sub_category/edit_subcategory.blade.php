@extends('admin.layouts.layout')

@section('admin_page_title')
    Edit Subcategory - Admin Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/category.css') }}">
@endsection

@section('admin_layout')
    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h4 style="color: white;">Edit Subcategory</h4>
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

                    <form action="{{ route('updateSubcategory', $subcategoryInfo->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <!-- Category Name -->
                        <div class="mb-3">
                            <label for="subcategoryName" class="form-label">Subcategory Name</label>
                            <input type="text" class="form-control" id="subcategoryName" name="subcategory_name" value="{{ $subcategoryInfo->subcategory_name }}" required>
                        </div>
                        
            
                        
                        <!-- Buttons -->
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary">Update Subcategory</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection