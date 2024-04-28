@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')

    
<div class="content-body">
        <!-- row -->
    <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h3>SDMS Administrator</h3>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="userManagement">User Management</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('userManagement')}}">Administrator</a></li>
                    </ol>
                </div>
            </div>
            
              <!-- Staff Filter -->

          <form action="{{ route('user/search/list') }}" method="POST">
            @csrf
            <div class="row filter-row ">
                <div class="col-sm-6 col-md-4 "> 
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating" id="name" name="name" placeholder=" Name">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4"> 
                    <div class="form-group">
                        <select class="form-control" name="role_name" id="role_name">
                            <option selected disabled>--- Select Role ---</option>
                            @foreach ($role_name as $role_type)
                            <option value="{{ $role_type->role_name}}">{{ $role_type->role_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2"> 
                    <button type="sumit" class="btn btn-success btn-block"><i class="fa fa-search-plus"></i> Search</button>
                </div>
            </div>
         </form>
     
            {{-- message --}}
            {!! Toastr::message() !!}
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Administrator List</h4>
                            <a href="{{ route('user/add/new') }}" class="btn btn-dark"><i class="fa fa-plus">  New</i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Name</th>
                                            <th> Email</th>
                                            <th> Role </th>
                                            <th class="text-center">Modify</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td class="id">{{ ++$key }}</td>
                                                <td class="name">{{ $item->name }}</td>
                                               
                                                <td class="email">{{ $item->email }}</td>
                                                @if($item->role_name =='Admin')
                                                <td class="role_name"><span  class="badge bg-success">{{ $item->role_name }}</span></td>
                                                @endif
                                                @if($item->role_name =='Editor')
                                                <td class="role_name"><span  class="badge bg-info">{{ $item->role_name }}</span></td>
                                                @endif
                                             
                                                <td class="text-center">
                                                    <a href="{{ url('user/edit/'.$item->id) }}">
                                                        <span class="btn btn-sm btn-light"><i class="fa fa-pencil"></i></span>
                                                    </a>  
                                                    <a href="{{ url('delete_user/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><span class="btn btn-sm btn-light"><i class="fa fa-trash"></i></span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
 @endsection
                               
               
            
           
