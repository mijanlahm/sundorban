@extends('admin.layouts.layout')

@section('admin_page_title')
    Create Default Attribute - Admin Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/category.css') }}">
@endsection

@section('admin_layout')
    <div class="row justify-content-center">
        <div class="col-8">
            
            <div class="card">
                <div class="card-header">
                    <h4 style="color: white;">Create Default Attribute</h4>
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

                    <form action="{{ route('storeDefaultAttribute') }}" method="POST">

                        @csrf

                        <!-- Category Name -->
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Attribute Name</label>
                            <input type="text" class="form-control" id="attribute_value" name="attribute_value" placeholder="XL" required>
                        </div>
    
                        
                        <!-- Buttons -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Add Attribute</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection