@extends('admin.layouts.layout')

@section('admin_page_title')
    Edit Default Attribute - Admin Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/category.css') }}">
@endsection

@section('admin_layout')
    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h4 style="color: white;">Edit Default Attribute</h4>
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

                    <form action="{{ route('updateDefaultAttribute', $Attribute_info->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <!-- Category Name -->
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Default Attribute Name</label>
                            <input type="text" class="form-control" id="attribute_value" name="attribute_value" value="{{ $Attribute_info->attribute_value }}" required>
                        </div>
    
                        
                        <!-- Buttons -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Update Default Attribute</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection