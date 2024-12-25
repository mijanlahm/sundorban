@extends('Seller.layouts.layout')

@section('seller_page_title')
    Edit Store - Seller Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/category.css') }}">
@endsection

@section('Seller_layout')
    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h4 style="color: white;">Create New Store</h4>
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

                    <form action="{{ route('updateVendorStore', $storeInfo->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <!-- Category Name -->
                        <div class="mb-3">
                            <label for="store_name" class="form-label">Store Name</label>
                            <input type="text" class="form-control" id="store_name" name="store_name" value="{{ $storeInfo->store_name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ $storeInfo->slug }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="details" class="form-label">Details of the Store</label>
                            <textarea name="details" id="details" cols="30" rows="5" class="form-control">{{ $storeInfo->details }}</textarea>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-outline-secondary me-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Update Store</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection