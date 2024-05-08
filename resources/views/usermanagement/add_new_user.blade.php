
@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
  
    
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h3>Add New User</h3>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">User</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Create User</a></li>
                    </ol>
                </div>
            </div>
              {{-- message --}}
              {!! Toastr::message() !!}
            <div class="authincation h-100">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-md-6">
                            <div class="authincation-content">
                                <div class="row no-gutters">
                                    <div class="col-xl-12">
                                        <div class="auth-form">
                                            <h4 class="text-center mb-4">Add new administrator</h4>
                                            <form method="POST" action="{{ route('user/add/save') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label><strong>Username</strong></label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Your Name">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                              
                                               
                        
                                                <div class="form-group">
                                                    <label><strong>Email</strong></label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label><strong>Role Name</strong></label>
                                                    <select class="form-control" name="role_name" id="role_name">
                                                        <option selected disabled>--- Select ---</option>
                                                        @foreach ($role_name as $role_type)
                                                        <option value="{{ $role_type->role_name}}">{{ $role_type->role_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label><strong>Password</strong></label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label><strong>Confirm Password</strong></label>
                                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                                </div>
                                                <div class="text-center mt-4">
                                                    <button type="submit" class="btn btn-lg float-right"> <i style="font-size:20px;" class="fa fa-save"></i></button>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection