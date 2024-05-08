@extends('layouts.master')
@extends('sidebar.dashboard')
@section('content')
    <!-- Content body start -->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <section class="row">
                <div class="col-xl-4 col-xxl-4 col-sm-6">
                    <div class="widget-stat card bg-white">
                        <div class="card-body">
                            <div class="media">
                               <img style= "width:60px; height:60px" src="{{ URL::to('assets/icons/user.svg') }}">
                
                                <div class="media-body text-black">
                                    <p class="mb-1"> User </p>
                                    <h3 class="text-grey" style="text-align:center"> {{ $users->count() }}</h3>
                                    <div class="progress mb-2 bg-blue">
                                        <div class="progress-bar progress-animated bg-dark" style="width: 80%"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-4 col-sm-6">
                    <div class="widget-stat card bg-white">
                        <div class="card-body">
                            <div class="media">
                               <img style= "width:55px; height:55px" src="{{ URL::to('assets/icons/login.svg') }}">
                
                                <div class="media-body text-black">
                                    <p class="mb-1"> User Activity</p>
                                    <h3 class="text-grey" style="text-align:center"">{{ $user_activity_logs->count() }}</h3>
                                    <div class="progress mb-2 bg-blue">
                                        <div class="progress-bar progress-animated bg-dark" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-xl-4 col-xxl-4 col-sm-6">
                    <div class="widget-stat card bg-white">
                        <div class="card-body">
                            <div class="media">
                               <img style= "width:55px; height:55px" src="{{ URL::to('assets/icons/xtvt.svg') }}">
                
                                <div class="media-body text-black">
                                    <p class="mb-1"> User Access </p>
                                    <h3 class="text-grey" style="text-align:center">  {{  $activity_logs->count() }}</h3>
                                    <div class="progress mb-2 bg-blue">
                                        <div class="progress-bar progress-animated bg-dark" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              
            </section> 

            <div class="row">
                <div class="col-sm-12 col-xl-5 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title"> <img style= "width:50px; height:50px" src="{{ URL::to('assets/icons/HR.svg') }}">PERJAWATAN- KAKITANGAN</h4> </div>
                        <div class="card-body">
                            <div class=" table-sm table-responsive">
                                <table class=" table hover table-striped table-light">
                                    <thead>
                                        <tr>
                                            <th>KAKITANGAN</th >
                                            <th style="text-align:center"> JUMLAH </th>
                                            <th style="text-align:center"> HOSPITAL </th>
                                             <th style="text-align:center">JKN/KA </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jawatan as $jawatan)
                                        <tr>
                                            <td>{{$jawatan->jawatan}}</td>
                                            <td style=" text-align:center">{{$jawatan->bilangan}}</td> 
                                            <td style=" text-align:center">{{$jawatan->hospital}}</td> 
                                            <td style=" text-align:center">{{$jawatan->jkn}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                   <div class="col-sm-12 col-xl-4 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title"> <img style= "width:50px; height:55px" src="{{ URL::to('assets/icons/fasiliti.svg') }}"> KEMUDAHAN UTAMA </h4> </div>
                        <div class="card-body">
                            <div class="table-sm table-responsive">
                                <table class="table hover table-striped table-light">
                                    <thead>
                                        <tr>
                                            <th> FASILITI </th >
                                            <th style="text-align:center"> BILANGAN </th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fasiliti as $fasiliti)
                                        <tr>
                                            <td >{{$fasiliti->fasiliti}}</td>
                                            <td style=" text-align:center" >{{$fasiliti->bilangan}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                  </div>

                   <div class="col-sm-12 col-xl-3 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">  <img style= "width:55px; height:55px" src="{{ URL::to('assets/icons/phone.svg') }}"> NO TELEFON PENTING</h4> </div>
                        <div class="card-body">
                            <div class="table-sm table-responsive">
                                <table class="table hover table-striped table-light">
                                    <thead>
                                        <tr>
                                            <th> Agensi </th >
                                            <th> No Telefon</th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($phone as $phone)
                                        <tr>
                                            <td>{{$phone->agensi}}</td>
                                            <td>{{$phone->no_phone}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                  </div>
            </div>


             <div class="row">
               <div class="col-sm-12 col-xl-4 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title"> <img style= "width:50px; height:50px" src="{{ URL::to('assets/icons/hospital.svg') }}"> KEDUDUKAN PENGGUNAAN KATIL</h4> </div>
                        <div class="card-body">
                            <div class="table-sm table-responsive">
                                <table class="table hover table-striped table-light">
                                    <thead>
                                        <tr style="text-align:center">
                                            <th> KATIL</th >
                                            <th> JUMLAH </th>
                                            <th> ISI </th>
                                            <th> KOSONG </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hospital as $hospital)
                                        <tr>
                                            <td>{{$hospital->katil}}</td>
                                              <td style="text-align:center">{{$hospital->jumlah}}</td> 
                                            <td style="text-align:center" >{{$hospital->isi}}</td> 
                                            <td style="text-align:center" >{{$hospital->kosong}}</td> 
                                          
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                  </div>

                   <div class="col-sm-12 col-xl-4 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">  <img style= "width:50px; height:50px" src="{{ URL::to('assets/icons/logistik.svg') }}"> LOGISTIK</h4> </div>
                        <div class="card-body">
                            <div class="table-sm table-responsive">
                                <table class="table hover table-striped table-light">
                                    <thead>
                                        <tr>
                                            <th> LOGISTIK </th >
                                            <th style="text-align:center"> JUMLAH </th >
                                            <th style="text-align:center"> HOSPITAL </th >
                                            <th style="text-align:center"> JKN </th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($logistik as $logistik)
                                        <tr>
                                            <td>{{$logistik->logistik}}</td>
                                            <td style="text-align:center" >{{$logistik->bilangan}}</td> 
                                            <td style="text-align:center" >{{$logistik->hospital}}</td> 
                                            <td style="text-align:center" >{{$logistik->jkn}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-xl-4 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                              <h4 class="card-title">  <img style= "width:50px; height:50px" src="{{ URL::to('assets/icons/alat.svg') }}"> KEMUDAHAN HOSPITAL </h4> </div>
                        <div class="card-body">
                            <div class="table-sm table-responsive">
                                <table class="table hover table-striped table-light">
                                    <thead>
                                        <tr>
                                            <th> KEMUDAHAN </th >
                                            <th style="text-align:center"> JUMLAH </th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($alat as $alat)
                                        <tr>
                                            <td >{{$alat->alat}}</td>
                                            <td style="text-align:center">{{$alat->bilangan}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>  
            </div>
        
               <div class="row">
                
        
               </div>
     </div>        
    </div>       
   </div>
        @yield('menu')
        @yield('content') 
    </div>
@endsection