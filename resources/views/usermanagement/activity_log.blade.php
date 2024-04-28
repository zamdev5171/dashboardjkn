@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>LOG | USER ACCESS</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="userManagement">User Management</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('userManagement')}}">User Acess Log</a></li>
                </ol>
            </div>
        </div>

      {{-- message --}}
      {!! Toastr::message() !!}
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <div class="card-body">
                          <div class="table-responsive">
                              <table id="example">
                                 <thead>
                                    <tr>
                                     <th>ID</th>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Description</th>
                                     <th>Date Time</th>
                                 </tr>    
                               </thead>
                                 <tbody>
                                 @foreach ($activityLog as $key => $item)
                                 <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->date_time }}</td>
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
