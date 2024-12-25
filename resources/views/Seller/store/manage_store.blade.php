@extends('Seller.layouts.layout')

@section('seller_page_title')
    Manage Store - Seller Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/all_category.css') }}">
@endsection

@section('Seller_layout')
    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h4>Store Management</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    
                    
                    <table class="table table-bordered table-striped table-responsive table-green">
                        <thead>
                            <tr>
                                <th style="color: white;">#</th>
                                <th style="color: white;">Store Name</th>
                                <th style="color: white;">Slug</th>
                                <th style="color: white;">Description</th>
                                <th style="color: white;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($stores as $store)
                                
                            
                            <tr>
                                <td>{{ $store->id }}</td>
                                <td>{{ $store->store_name }}</td>
                                <td>{{ $store->slug }}</td>
                                <td>{{ $store->details }}</td>
                                <td>
                                    <button style="float: left; margin-right: 5px;" class="btn btn-success btn-sm" ><a  href="{{ route('showVendorStoreEdit', $store->id ) }}" style="color:white; text-decoration:none;">Edit</a></button>
                                    
                                    <form action="{{ route('deleteVendorStore', $store->id) }}" method="POST" style="float: left;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-sm" style="color:white; text-decoration:none;" value="Delete">
                                    </form>

                                </td>
                            </tr>

                            @endforeach

                            
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection