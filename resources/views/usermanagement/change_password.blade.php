@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
  
<div class="content-body">
  <!-- row -->
    <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h3>Change Password</h3>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">User</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Change Password</a></li>
                    </ol>
                </div>
            </div>
  
       <div class="authentication h-100">
        <div class="container h-100">
         <div class="row justify-content-center h-100 align-items-center">
          <div class="col-md-6">
            <div class="authentication-content">
             <div class="row no-gutters">
              <div class="col-xl-12">
                <div class="auth-form">
                      {{-- message --}}
                  {!! Toastr::message() !!}

                  <h4 class="text-center mb-4">Change Password</h4>
                    <form method="POST" action="{{ route('change/password/db') }}" class="md-float-material">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-lg @error('current_password') is-invalid @enderror" 
                            name="current_password" value="{{ old('current_password') }}" placeholder="Enter Current Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-lg @error('new_password') is-invalid @enderror" 
                            name="new_password" placeholder="Enter New Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-lg" name="new_confirm_password" placeholder="Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Save</button>
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
</div>
@endsection