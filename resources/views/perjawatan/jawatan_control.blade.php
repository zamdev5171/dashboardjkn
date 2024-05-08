@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
   
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="content-body">
        <!-- header row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h3>Perjawatan</h3>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Kakitangan</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">List</a></li>
                    </ol>
                </div>
            </div>
             <!-- end header -->
             <div class="row">
                 <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                             <h4 class="card-title">Kakitangan</h4>
                             <a href="{{ route('add/jawatan/new') }}" class="btn btn-dark"><i class="fa fa-plus">  Cipta </i></a>
                         </div>
                     <div class="card-body">
                         <div class="table-responsive">
                             <table id="example">
                                 <thead>
                                     <tr>
                                         <th>ID</th>
                                         <th>Jawatan</th>
                                          <th>Jumlah</th>
                                           <th>Hospital</th>
                                          <th>JKN/ KA</th>

                                         <th class="text-center">Kemaskini</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($jawatan as $key => $jawatan)
                                        <tr>
                                            <td class="id">{{ ++$key }}</td>
                                            <td class="jawatan">{{ $jawatan->jawatan }}</td>
                                            <td class="jawatan">{{ $jawatan->bilangan }}</td>
                                            <td class="jawatan">{{ $jawatan->hospital }}</td>
                                            <td class="jawatan">{{ $jawatan->jkn }}</td>
                                              <td class="text-center">
                                                 <a href="{{ url('jawatan/edit/'.$jawatan->id) }}">
                                                <span class="btn btn-sm btn-light"><i class="fa fa-pencil"></i></span>
                                                 </a>  
                                                <a href="{{ url('delete_jawatan/'.$jawatan->id) }}" onclick="return confirm('Are you sure want to delete it?')"><span class="btn btn-sm btn-light"><i class="fa fa-trash-o"></i></span></a>
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