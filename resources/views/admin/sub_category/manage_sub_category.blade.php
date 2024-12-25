@extends('admin.layouts.layout')

@section('admin_page_title')
    Manage Subcategory - Admin Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/all_category.css') }}">
@endsection

@section('admin_layout')
    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h4>Subcategory Management</h4>
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
                                <th style="color: white;">SubCategory Name</th>
                                <th style="color: white;">Category</th>
                                <th style="color: white;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($subcategories as $subcategory)
                                
                            
                            <tr>
                                <td>{{ $subcategory->id }}</td>
                                <td>{{ $subcategory->subcategory_name }}</td>
                                <td>{{ $subcategory->category->category_name }}</td>
                                <td>
                                    <button style="float: left; margin-right: 5px;" class="btn btn-success btn-sm" ><a  href="{{ route('showSubcategory', $subcategory->id ) }}" style="color:white; text-decoration:none;">Edit</a></button>
                                    
                                    <form action="{{ route('deleteSubcategory', $subcategory->id) }}" method="POST" style="float: left;">
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