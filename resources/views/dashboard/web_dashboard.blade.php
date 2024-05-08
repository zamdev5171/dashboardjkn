@extends('layouts.dashboard')
@section('content')
       <section id="web" class="d-flex align-items-center">
                <div class="container text-center position-relative">
                  <h1>DASHBOARD CPRC</h1>
                  <h2>Jabatan Kesihatan W.P. Labuan</h2>
                </div>
     </section><!-- End Hero -->
        <!-- row -->
        <div class="container-fluid">

        <section class="row">

            <div class="col-xl-3 col-xxl-3 col-sm-6" >
            <div class="widget-stat card bg-white">

            <div class="card card-table flex-fill">
                     <div class="card-header">
                       <h4 class="card-title" style="font-weight:600">  <img style= "width:60px; height:60px" src="{{ URL::to('assets/icons/phone.svg') }}"> NO TELEFON PENTING</h4> 
                     </div>
             <div class="card-body">
             <div class=" table-sm table-responsive ">
                                 <table class=" table hover table-striped table-light">
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
                                            <td style="text-align:center" >{{$phone->no_phone}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> 
                    </div> 
             
            
             
               <div class="card card-table flex-fill">
                  <div class="card-header">
                     <h4 class="card-title" style="font-weight:600"> <img style= "width:50px; height:50px" src="{{ URL::to('assets/icons/fasiliti.svg') }}"> KEMUDAHAN UTAMA </h4> 
                  </div>
                 <div class="card-body">
                 <div class="table-sm table-responsive">
                                <table class=" table hover table-striped table-light">
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
             </div>
                       
         
            <div class="col-xl-4 col-xxl-4 col-sm-6">
                <div class="widget-stat card bg-white">

                 <div class="card card-table flex-fill">
                        <div class="card-header">
                              <h4 class="card-title" style="font-weight:600">  <img style= "width:50px; height:55px" src="{{ URL::to('assets/icons/alat.svg') }}"> KEMUDAHAN HOSPITAL </h4> </div>
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
                                            <td>{{$alat->alat}}</td>
                                            <td style="text-align:center">{{$alat->bilangan}}</td> 
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                     </div>
                 </div>  

               
                     <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title" style="font-weight:600"> <img style= "width:50px; height:50px" src="{{ URL::to('assets/icons/hospital.svg') }}"> KEDUDUKAN PENGGUNAAN KATIL </h4> 
                         </div>
                        <div class="card-body">
                         <div class="table-sm table-responsive"> 
                                <table class="table hover table-striped table-light ">
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
                            
                               <div> <p style="text-align:right; font-style:italic">Kemaskini Pada: {{Carbon\Carbon::parse($hospital->updated_at)->format('d/m/y H:i:s') }}</p></div>
                          </div>
                        </div>
                    
                 </div>
               </div>

             <div class="col-xl-5 col-xxl-5 col-sm-6">
             <div class="widget-stat card bg-white">

              <div class="card card-table flex-fill">
                         <div class="card-header">
                            <h4 class="card-title" style="font-weight:600">  <img style= "width:50px; height:50px" src="{{ URL::to('assets/icons/logistik.svg') }}"> LOGISTIK</h4> </div>
                    <div class="card-body">
                     <div class=" table-sm table-responsive">
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
                    

        
                    <div class="card card-table flex-fill">
                          <div class="card-header">
                            <h4 class="card-title" style="font-weight:600"> <img style= "width:60px; height:60px" src="{{ URL::to('assets/icons/HR.svg') }}">PERJAWATAN- KAKITANGAN</h4> 
                         </div>
                    <div class="card-body">
                    <div class="table-sm table-responsive">

                                <table class="table hover table-striped table-light">
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

                               <div> <p style="text-align:right; font-style:italic">Kemaskini Pada: {{Carbon\Carbon::parse($jawatan->updated_at)->format('d/m/y') }}</p></div>
                       </div>
                    </div>
                 
             </div>
           </div>    
                        

 </section>

 </div>             
 
@endsection
    