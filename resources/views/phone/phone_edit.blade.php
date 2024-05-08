@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
    
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h3>NO Telefon- Kecemasan</h3>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">No. Telefon</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Kemaskini</a></li>
                </ol>
            </div>
        </div>
            
        {!! Toastr::message() !!}
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-6">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="auth-form">
                                    <div>
                                     <h4 class="text-center mb-4">Kemaskini No Telefon</h4>
                                     </div>
                                     <div class="form-group">
                                       
                                            <form action="{{ route('phone/update') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                            
                                         
                                            <input type="hidden" name="id" value="{{ $phone[0]->id }}">
                                            <label class="form-label">Agensi</label>
                                            <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ $phone[0]->agensi}}" name="agensi" id="phone">
                                            @error('agensi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                     
                                       
                                            <label class="form-label">No Telefon</label>
                                            <input type="hidden" name="id" value="{{ $phone[0]->id }}">
                                            <input type="text" class="form-control @error('no_phone') is-invalid @enderror" value="{{ $phone[0]->no_phone}}" name="no_phone" id="phone">
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
@endsection