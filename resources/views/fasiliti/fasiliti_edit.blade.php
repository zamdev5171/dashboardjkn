@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
    
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h3>Fasiliti</h3>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Fasiliti</a></li>
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
                                     <h4 class="text-center mb-4">Kemaskini Fasiliti</h4>
                                     </div>
                                     <div class="form-group">
                                       
                                            <form action="{{ route('fasiliti/update') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                            
                                         
                                            <input type="hidden" name="id" value="{{ $fasiliti[0]->id }}">
                                            <label class="form-label">Fasiliti</label>
                                            <input type="text" class="form-control @error('fasiliti') is-invalid @enderror" value="{{ $fasiliti[0]->fasiliti}}" name="fasiliti" id="fasiliti">
                                            @error('fasiliti')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                     
                                       
                                              <label class="form-label">Bilangan</label>
                                            <input type="hidden" name="id" value="{{ $fasiliti[0]->id }}">
                                            <input type="number" class="form-control @error('bilangan') is-invalid @enderror" value="{{ $fasiliti[0]->bilangan}}" name="bilangan" id="fasiliti">
                                            @error('fasiliti')
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