@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
  
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h3>LOGISTIK</h3>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Logistik</a></li>
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
                                    <h4 class="text-center mb-4">Tambah Logistik Baru</h4>
                                     <form action="{{ route('add/logistik/save') }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                    
                                        <div class="form-group">
                                            <label class="form-label"> Logistik </label>
                                            <input type="text" class="form-control @error('logistik') is-invalid @enderror" value="{{ old('logistik') }}" name="logistik" id="logistik">
                                            @error('logistik')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                         <div class="form-group">
                                            <label class="form-label">Jumlah</label>
                                            <input type="number" class="form-control @error('bilangan') is-invalid @enderror" value="{{ old('bilangan') }}" name="bilangan" id="logistik">
                                            @error('bilangan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                         <div class="form-group">
                                            <label class="form-label">Bilangan di Hospital</label>
                                            <input type="number" class="form-control @error('hospital') is-invalid @enderror" value="{{ old('hospital') }}" name="hospital" id="logistik">
                                            @error('hospital')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                         <div class="form-group">
                                            <label class="form-label">Bilangan di JKN</label>
                                            <input type="number" class="form-control @error('jkn') is-invalid @enderror" value="{{ old('jkn') }}" name="jkn" id="logistik">
                                            @error('jkn')
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