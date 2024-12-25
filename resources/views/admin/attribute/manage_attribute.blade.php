@extends('admin.layouts.layout')

@section('admin_page_title')
    Manage Default Attribute - Admin Panel
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/all_category.css') }}">
@endsection

@section('admin_layout')
    <div class="row">
        <div class="col-12">
            
            <div class="card">
                <div class="card-header">
                    <h4>Default Attribute Management</h4>
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
                                <th style="color: white;">Category Name</th>
                                <th style="color: white;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($allAttributes as $allAttribute)
                                
                            
                            <tr>
                                <td>{{ $allAttribute->id }}</td>
                                <td>{{ $allAttribute->attribute_value }}</td>
                                <td>
                                    <button style="float: left; margin-right: 5px;" class="btn btn-success btn-sm" ><a  href="{{ route('showDefaultAttribute', $allAttribute->id ) }}" style="color:white; text-decoration:none;">Edit</a></button>
                                    
                                    <form action="{{ route('deleteDefaultAttribute', $allAttribute->id) }}" method="POST" style="float: left;">
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