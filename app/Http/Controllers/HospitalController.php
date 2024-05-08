<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospital;
use App\Models\User;
use App\Models\jawatan;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use DB;

class HospitalController extends Controller
{
     
    // view list all 
    public function list()
    {
        $hospital = DB::table('hospitals')      
    
        ->get();        //list
        return view('hospital.hospital_control',compact('hospital'));
    }

    //add 
    public function hospitalAdd()
    { 
       
        $hospital = DB::table('hospitals')
        -> orderBy('katil', 'asc') 
        ->get();
        return view('hospital.hospital_add',compact('hospital'));
    }


    //save
    public function hospitalSave(Request $request)
    {
        $request->validate([
            
            'katil'  => 'required|string|max:255|unique:hospitals',
            'isi'    => 'required|string',
            'kosong' => 'required|string',
            'jumlah'    => 'required|string',
            
            
        ]);

        $hospital = new hospital;
        $hospital ->katil        = $request->katil;
        $hospital ->isi          = $request->isi;
        $hospital ->kosong       = $request->kosong;
        $hospital ->jumlah         = $request->jumlah;
     
        $hospital ->save();

        Toastr::success('Data added successfully :)','Success');
        return redirect()->back();
       
 
    }

    // edit
    public function hospitalEdit($id)
    {
        $hospital = DB::table('hospitals')->where('id',$id)
       
        ->get();
        return view('hospital.hospital_edit',compact('hospital'));
      
    }
    // update to db
    public function hospitalUpdate( Request $request)
    {
        $id              = $request->id;
        $katil           = $request->katil;
        $isi             = $request->isi;
        $kosong          = $request->kosong;
        $jumlah             = $request->jumlah;
       
      
        $update = [

            'id'              => $id,
            'katil'           => $katil,
            'isi'             => $isi,
            'kosong'          => $kosong,
            'jumlah'             => $jumlah,
           
            
        ];

        hospital::where('id',$request->id)->update($update);
        Toastr::success('Data updated successfully :)','Success');
        return redirect()->route('all/hospital/list');
        
    }

    // delete
    public function hospitalDelete($id)
    {
        $delete = hospital::find($id);
        $delete->delete();
        Toastr::success('Data deleted successfully :)','Success');
        return redirect()->route('all/hospital/list');
    }
}
