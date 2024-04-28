
@section('menu')
  <!-- Sidebar start -->
  <div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first"></li>
            <li><a class="" href="{{ route('home') }}" aria-expanded="false">
                    <i class="la la-home"></i>
                    <span class="nav-text"> DASHBOARD </span>
                </a>
            </li>
            <li><a class="" href="{{ route('web') }}" aria-expanded="false">
                    <i class="la la-desktop"></i>
                    <span class="nav-text"> WEB DASHBOARD </span>
                </a>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        
                                @if (Auth::user()->role_name=='Admin')
                                <i class="la la-user"></i>
                                <span class="nav-text"> Administrator </span>
                                @endif

                                @if (Auth::user()->role_name=='Editor')
                                <i class="la la-edit"></i>
                                <span class="nav-text"> Editor </span> 
                                @endif
                         </a>
                 <ul aria-expanded="false">
                    <li><a href="{{ route('change/password') }}"><i class="la la-key"> Change Password</i></a>
                    </li>
                </ul>
            </li>

            @if (Auth::user()->role_name=='Admin')
            <li>
               <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">User Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('userManagement') }}">User Management</a></li>
                    <li><a href="{{ route('forget-password') }}">Reset Password</a></li>
                    <li><a href="{{ route('activity/log') }}">User Activity Log</a></li>
                    <li><a href="{{ route('activity/login/logout') }}">User Access Log</a></li>
                </ul>
            </li>

              @endif
             <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-medkit"></i>
                    <span class="nav-text"> Alat Perubatan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all/alat/list') }}">Kemaskini</a></li>
                   <li><a href="{{ route('add/alat/new') }}">Cipta</a></li>  
                </ul>
            </li>


            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-stethoscope"></i>
                    <span class="nav-text">Perjawatan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all/jawatan/list') }}">Kemaskini</a></li>
                   <li><a href="{{ route('add/jawatan/new') }}">Cipta</a></li>  
                </ul>
            </li>

             <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-hospital-o"></i>
                    <span class="nav-text">Fasiliti</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all/fasiliti/list') }}">Kemaskini</a></li>
                    <li><a href="{{ route('add/fasiliti/new') }}">Cipta</a></li> 
                </ul>
            </li>

             <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-ambulance"></i>
                    <span class="nav-text">Logistik</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all/logistik/list') }}">Kemaskini</a></li>
                    <li><a href="{{ route('add/logistik/new') }}">Cipta</a></li> 
                </ul>
            </li>


             <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-bed"></i>
                    <span class="nav-text">Fasiliti Hospital</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all/hospital/list') }}">Kemaskini</a></li>
                    <li><a href="{{ route('add/hospital/new') }}">Cipta</a></li> 
                </ul>
            </li>

           
          
           

          <li><a class="" href="{{ route('logout') }}" aria-expanded="false">
            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
            <span class="nav-text">Log out</span></a>
         </li>
       
        </ul>
    </div>
</div>
<!-- Sidebar end -->
@endsection

