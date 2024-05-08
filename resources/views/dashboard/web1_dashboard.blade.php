@extends('layouts.dashboard')

@section('content')
<!DOCTYPE html >
<html lang="en"  >

    <!-- Content body start -->
<body >
<div class="cointainer">
<!-- ======= Hero Section ======= -->
             <section id="web" class="d-flex align-items-center">
                <div class="container text-center position-relative">
                  <h1>DASHBOARD CPRC</h1>
                  <h2>Jabatan Kesihatan W.P. Labuan</h2>
                  <h3><i class="fa fa-phone"></i>  087 596 000</h3>
                  <a href="https://jknlabuan.moh.gov.my/"> <h4>https://jknlabuan.moh.gov.my/</h4></a>
                </div>
               </section><!-- End Hero -->
            <div class="row">
                <div class="col-sm-12 col-md-4 d-flex" >
                    <div class="card card-table flex-fill" >
                        <div class="card-header">
                            <h4 class="card-title" style="font-size:18px"> <img style= "width:50px; height:50px" src="{{ URL::to('assets/icons/HR.svg') }}">PERJAWATAN/KAKITANGAN</h4> </div>
                        <div class="card-body">
                            <div class="table-responsive" > 
                                  <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black">
                                    <thead>
                                        <tr>
                                            <th>JAWATAN</th >
                                            <th style="text-align:center"> JUMLAH </th >
                                            <th style="text-align:center"> HOSPITAL </th >
                                            <th style="text-align:center"> JKN/KA </th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jawatan as $jawatan)
                                        <tr style="font-weight:600; font-size:16px">
                                            <td>{{$jawatan->jawatan}}</td>
                                            <td style="text-align:center">{{$jawatan->bilangan}}</td> 
                                            <td style="text-align:center">{{$jawatan->hospital}}</td> 
                                            <td style="text-align:center">{{$jawatan->jkn}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                 <div class="col-xl-4 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title" style="font-size:18px"> <img style= "width:45px; height:50px" src="{{ URL::to('assets/icons/fasiliti.svg') }}"> KEMUDAHAN UTAMA/FASILITI</h4> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                  <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black">
                                    <thead>
                                        <tr>
                                            <th> KEMUDAHAN UTAMA </th >
                                            <th style="text-align:center"> JUMLAH </th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fasiliti as $fasiliti)
                                        <tr>
                                            <td style="font-weight:600">{{$fasiliti->fasiliti}}</td>
                                            <td style="font-weight:600; text-align:center" >{{$fasiliti->bilangan}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                  </div>

               <div class="col-xl-4 d-flex">

                 <div class="card card-table flex-fill">
                        <div class="card-header">
                             <h4 class="card-title" style="font-size:18px"> <img style= "width:50px; height:50px;" src="{{ URL::to('assets/icons/alat.svg') }}"> KEMUDAHAN HOSPITAL </h4> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black">
                                    <thead>
                                        <tr>
                                            <th>KEMUDAHAN</th >
                                            <th style="text-align:center"> BILANGAN  </th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($alat as $alat)
                                        <tr >
                                            <td>{{$alat->alat}}</td>
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

              
                <div class=row>


                   <div class="col-12 col-xl-4 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title" style="font-size:18px"> <img style= "width:50px; height:50px" src="{{ URL::to('assets/icons/hospital.svg') }}"> KEDUDUKAN PENGGUNAAN KATIL SEMASA HOSPITAL </h4> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                   <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black"">
                                    <thead>
                                        <tr style="text-align:center">
                                            <th> KATIL </th >
                                            <th> ISI </th>
                                            <th> KOSONG </th>
                                            <th> BOR </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hospital as $hospital)
                                        <tr>
                                            <td style="font-weight:600">{{$hospital->katil}}</td>
                                            <td style="font-weight:600; text-align:center" >{{$hospital->isi}}</td> 
                                            <td style="font-weight:600; text-align:center" >{{$hospital->kosong}}</td> 
                                            <td style="font-weight:600; text-align:center" >{{$hospital->bor}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                  </div>


                  
        
              <div class="col-xl-4 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title" style="font-size:18px">  <img style= "width:50px; height:50px" src="{{ URL::to('assets/icons/logistik.svg') }}"> LOGISTIK</h4> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                   <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black">
                                    <thead>
                                        <tr>
                                            <th> LOGISTIK  </th >
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
    

              <div class="col-xl-4 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">  <img style= "width:55px; height:55px" src="{{ URL::to('assets/icons/phone.svg') }}"> NO TELEFON PENTING</h4> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                 <table class="table hover table-striped table-light" style="font-weight:600; font-size:18px; color:black">
                                    <thead>
                                        <tr>
                                            <th> AGENSI </th >
                                            <th style="text-align:center"> NO TELEFON</th >
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($phone as $phone)
                                        <tr>
                                            <td>{{$phone->agensi}}</td>
                                            <td style="font-weight:600; text-align:center" >{{$phone->no_phone}}</td> 
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
         
        <!-- row -->
  </div>
 </body>   

</html>
   
 
 