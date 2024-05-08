@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
    
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Update User</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">User</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit/ Update</a></li>
                    </ol>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Details</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data[0]->id }}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Full Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control"
                                                        placeholder="Name" id="first-name-icon" name="fullName" value="{{ $data[0]->name }}">
                                                </div>
                                            </div>
                                        </div>
    
                                       
    
                                        <div class="col-md-4">
                                            <label>Email Address</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" class="form-control" placeholder="Email" id="first-name-icon" name="email" value="{{ $data[0]->email }}">
                                                </div>
                                            </div>
                                        </div>
                                      
    
                                        <div class="col-md-4">
                                            <label>Role Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="role_name" id="role_name">
                                                        <option value="{{ $data[0]->role_name }}" {{ ( $data[0]->role_name == $data[0]->role_name) ? 'selected' : ''}}> 
                                                            {{ $data[0]->role_name }}
                                                        </option>
                                                        @foreach ($role_name as $key => $value)
                                                        <option value="{{ $value->role_name }}"> {{ $value->role_name }}</option>
                                                        @endforeach  
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
    
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn"> <i style="font-size:19px;" class="fa fa-save"></i></button>
                                                <a  href="{{ route('userManagement') }}" class="btn me-1 mb-1"><i style="font-size:19px;" class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection