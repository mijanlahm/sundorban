@extends('Seller.layouts.layout')

@section('seller_page_title')
    Manage Product - Seller Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/all_category.css') }}">
@endsection

@section('Seller_layout')
    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h4>Product Management</h4>
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
                                <th style="color: white;">Product Name</th>
                                <th style="color: white;">Subcategory</th>
                                <th style="color: white;">Category</th>
                                <th style="color: white;">Quantity</th>
                                <th style="color: white;">Price</th>
                                <th style="color: white;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($allProducts as $Product)
                                
                            @php 
                                $product_category_name = App\Models\Category::where('id', $Product->category_id)->value('category_name');
                                $product_subcategory_name = App\Models\SubCategory::where('id', $Product->subcategory_id)->value('subcategory_name');
                            @endphp

                            <tr>
                                <td>{{ $Product->id }}</td>
                                <td>{{ $Product->product_name }}</td>
                                <td>{{ $product_subcategory_name }}</td>
                                <td>{{ $product_category_name }}</td>
                                <td>{{ $Product->stock_quantity }}</td>
                                <td>{{ $Product->regular_price }}</td>
                                <td>
                                    <button style="float: left; margin-right: 5px;" class="btn btn-success btn-sm" ><a  href="{{ route('showVendorProductEdit', $Product->id ) }}" style="color:white; text-decoration:none;">Edit</a></button>
                                    
                                    <form action="{{ route('deleteVendorProduct', $Product->id) }}" method="POST" style="float: left;">
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