@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
  
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h3>No Telefon - Kecemasan</h3>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">No Telefon</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Cipta</a></li>
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
                                    <h4 class="text-center mb-4">Tambah No Telefon</h4>
                                     <form action="{{ route('add/phone/save') }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                    
                                        <div class="form-group">
                                            <label class="form-label">Agensi</label>
                                            <input type="text" class="form-control @error('agensi') is-invalid @enderror" value="{{ old('agensi') }}" name="agensi" id="phone">
                                            @error('agensi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                     
                                         <div class="form-group">
                                            <label class="form-label">No Phone</label>
                                            <input type="text" class="form-control @error('no_phone') is-invalid @enderror" value="{{ old('no_phone') }}" name="no_phone" id="phone">
                                            @error('no_phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                         
                            
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm float-right"> <i style="font-size:20px;" class="fa fa-save"></i></button>
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
        
@endsection