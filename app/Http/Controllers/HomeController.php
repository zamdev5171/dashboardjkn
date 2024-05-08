<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\fasiliti;
use App\Models\User;
use App\Models\jawatan;
use App\Models\alat;
use App\Models\phone;
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
        $user_activity_logs = DB::table('user_activity_logs')->count();
   
        $users = DB::table('users')->get();
        $activity_logs = DB::table('activity_logs')->get();
        $user_activity_logs = DB::table('user_activity_logs')->get();
        $alat = DB::table('alats')->get();
        $jawatan = DB::table('jawatans')->get();
        $fasiliti = DB::table('fasilitis')->get();
        $hospital = DB::table('hospitals')->get();
        $logistik = DB::table('logistiks')->get();
        $phone = DB::table('phones')->get();
        return view('dashboard.main_dashboard',compact('phone','alat','hospital','fasiliti','users','jawatan','logistik','activity_logs','user_activity_logs'));

      }

      public function web()
      {
  
          $alat = DB::table('alats')->get();
          $jawatan = DB::table('jawatans')->get();
          $fasiliti = DB::table('fasilitis')->get();
          $hospital = DB::table('hospitals')->get();
          $logistik = DB::table('logistiks')->get();
          $phone = DB::table('phones')->get();
          return view('dashboard.web_dashboard',compact('phone','alat','hospital','fasiliti','jawatan','logistik'));
  
        }

       
      }