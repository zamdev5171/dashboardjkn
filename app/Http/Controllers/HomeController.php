<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\fasiliti;
use App\Models\User;
use App\Models\jawatan;
use App\Models\alat;
use App\Models\logistik;
use App\Models\hospital;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $fasiliti = DB::table('fasilitis')->count();
        $users = DB::table('users')->count();
        $jawatan = DB::table('jawatans')->count();
        $logistik = DB::table('logistiks')->count();
        $hospital = DB::table('hospitals')->count();
        $activity_logs = DB::table('activity_logs')->count();
   

        $alat = DB::table('alats')->get();
        $jawatan = DB::table('jawatans')->get();
        $fasiliti = DB::table('fasilitis')->get();
        $hospital = DB::table('hospitals')->get();
        $logistik = DB::table('logistiks')->get();
        return view('dashboard.main_dashboard',compact('alat','hospital','fasiliti','users','jawatan','logistik','activity_logs'));

      }

      public function web()
      {
        
     
  
          $alat = DB::table('alats')->get();
          $jawatan = DB::table('jawatans')->get();
          $fasiliti = DB::table('fasilitis')->get();
          $hospital = DB::table('hospitals')->get();
          $logistik = DB::table('logistiks')->get();
          return view('dashboard.web_dashboard',compact('alat','hospital','fasiliti','jawatan','logistik'));
  
        }
    }
