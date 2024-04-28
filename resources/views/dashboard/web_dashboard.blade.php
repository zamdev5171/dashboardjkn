@extends('layouts.dashboard')

@section('content')
    <!-- Content body start -->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
           <!-- ======= Hero Section ======= -->
             <section id="hero" class="d-flex align-items-center">
                <div class="container text-center position-relative">
                  <h1>DASHBOARD CPRC</h1>
                  <h2>Jabatan Kesihatan W.P. Labuan</h2>
                  <h3><i class="fa fa-phone"></i>  087 596000</h3>
                  <a href="https://jknlabuan.moh.gov.my/"> <h4>https://jknlabuan.moh.gov.my/</h4></a>
                </div>
              </section><!-- End Hero -->

            <div class="row">
                <div class="col-sm-12 col-xl-6 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title" style="font-size:18px"> <img style= "width:70px; height:70px" src="{{ URL::to('assets/icons/HR.svg') }}">PERJAWATAN</h4> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                  <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black">
                                    <thead>
                                        <tr>
                                            <th colspan="2" >Jawatan</th >
                                            <th style="text-align:center"> Bilangan  </th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jawatan as $jawatan)
                                        <tr style="font-weight:600; font-size:16px">
                                            <td colspan="2" >{{$jawatan->jawatan}}</td>
                                            <td style="text-align:center">{{$jawatan->bilangan}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                   <div class="col-sm-12 col-xl-6 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title" style="font-size:18px"> <img style= "width:50px; height:55px" src="{{ URL::to('assets/icons/fasiliti.svg') }}"> FASILITI</h4> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                  <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black">
                                    <thead>
                                        <tr>
                                            <th colspan="2" > Fasiliti </th >
                                            <th style="text-align:center"> Bilangan </th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fasiliti as $fasiliti)
                                        <tr>
                                            <td colspan="2"  style="font-weight:600">{{$fasiliti->fasiliti}}</td>
                                            <td style="font-weight:600; color:dark-grey; text-align:center" >{{$fasiliti->bilangan}}</td> 
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
               <div class="col-sm-12 col-xl-6 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title" style="font-size:18px"> <img style= "width:60px; height:60px" src="{{ URL::to('assets/icons/hospital.svg') }}"> KATIL- HOSPITAL </h4> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                   <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black"">
                                    <thead>
                                        <tr style="text-align:center">
                                            <th> Lokasi </th >
                                            <th> Bilangan  </th>
                                            <th> Isi </th>
                                            <th> Kosong </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hospital as $hospital)
                                        <tr>
                                            <td style="font-weight:600">{{$hospital->lokasi}}</td>
                                            <td style="font-weight:600; color:dark-grey; text-align:center" >{{$hospital->bilangan}}</td> 
                                            <td style="font-weight:600; color:dark-grey; text-align:center" >{{$hospital->isi}}</td> 
                                            <td style="font-weight:600; color:dark-grey; text-align:center" >{{$hospital->kosong}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                  </div>

                   <div class="col-sm-12 col-xl-6 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title" style="font-size:18px">  <img style= "width:60px; height:60px" src="{{ URL::to('assets/icons/logistik.svg') }}"> LOGISTIK</h4> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                   <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black">
                                    <thead>
                                        <tr>
                                            <th colspan="2" > Logistik </th >
                                            <th style="text-align:center"> Bilangan </th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($logistik as $logistik)
                                        <tr>
                                            <td colspan="2"  style="font-weight:600">{{$logistik->logistik}}</td>
                                            <td style="font-weight:600; color:dark-grey; text-align:center" >{{$logistik->bilangan}}</td> 
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
                <div class="col-sm-12 col-xl-6 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                             <h4 class="card-title" style="font-size:18px"> <img style= "width:60px; height:60px;" src="{{ URL::to('assets/icons/alat.svg') }}"> ALAT PERUBATAN </h4> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black">
                                    <thead>
                                        <tr>
                                            <th colspan="2" >Peralatan</th >
                                            <th style="text-align:center"> Bilangan  </th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($alat as $alat)
                                        <tr >
                                            <td colspan="2" >{{$alat->alat}}</td>
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
          
            


     </div>        
    </div>       
   </div>
        @yield('menu')
        @yield('content') 
    </div>
@endsection