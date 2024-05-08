@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
  
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h3>Kedudukan Penggunaan Katil- Hospital</h3>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Penggunaan Katil Hospital</a></li>
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
                                    <h4 class="text-center mb-4">Tambah Kedudukan Penggunaan Katil </h4>
                                     <form action="{{ route('add/hospital/save') }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                    
                                        <div class="form-group">
                                            <label class="form-label">Katil</label>
                                            <input type="text" class="form-control @error('katil') is-invalid @enderror" value="{{ old('katil') }}" name="katil" id="hospital">
                                            @error('katil')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                      
                                         <div class="form-group">
                                            <label class="form-label">Isi</label>
                                            <input type="number" class="form-control @error('isi') is-invalid @enderror" value="{{ old('isi') }}" name="isi" id="hospital">
                                            @error('isi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                          <div class="form-group">
                                            <label class="form-label">Kosong</label>
                                            <input type="number" class="form-control @error('kosong') is-invalid @enderror" value="{{ old('kosong') }}" name="kosong" id="hospital">
                                            @error('kosong')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                           <div class="form-group">
                                            <label class="form-label">Jumlah</label>
                                            <input type="number" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}" name="jumlah" id="hospital">
                                            @error('bor')
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