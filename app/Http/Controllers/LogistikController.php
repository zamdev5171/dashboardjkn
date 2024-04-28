<?php

namespace App\Http\Controllers;

use App\Models\logistik;

use Illuminate\Http\Request;
use App\Models\hospital;
use App\Models\User;
use App\Models\jawatan;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use DB;

class LogistikController extends Controller
{
     // view list all 
     public function list()
     {
         $logistik = DB::table('logistiks')      
         -> orderBy('logistik', 'asc') 
         ->get();        //list
         return view('logistik.logistik_control',compact('logistik'));
     }
 
     
  
     //add 
     public function logistikAdd()
     { 
        
         $logistik = DB::table('logistiks')
         -> orderBy('logistik', 'asc') 
         ->get();
         return view('logistik.logistik_add',compact('logistik'));
 
     }
     //save
     public function logistikSave(Request $request)
     {
         $request->validate([
             
             'logistik' => 'required|string|max:255',
             'bilangan' => 'required|string',
             
         ]);
 
         $logistik = new logistik;
         $logistik ->logistik       = $request->logistik;
         $logistik ->bilangan       = $request->bilangan;
         $logistik ->save();
 
         Toastr::success('Data added successfully :)','Success');
         return redirect()->back();
        
  
     }
 
     // edit
     public function logistikEdit($id)
     {
         $logistik = DB::table('logistiks')->where('id',$id)
         -> orderBy('logistik', 'asc') 
         ->get();
         return view('logistik.logistik_edit',compact('logistik'));
       
     }
     // update to db
     public function logistikUpdate( Request $request)
     {
         $id                  = $request->id;
         $logistik            = $request->logistik;
         $bilangan            = $request->bilangan;
       
         $update = [
 
             'id'             => $id,
             'logistik'       => $logistik,
             'bilangan'       => $bilangan,
             
         ];
 
         logistik::where('id',$request->id)->update($update);
         Toastr::success('Data updated successfully :)','Success');
         return redirect()->route('all/logistik/list');
         
     }
 
     // delete
     public function logistikDelete($id)
     {
         $delete = logistik::find($id);
         $delete->delete();
         Toastr::success('Data deleted successfully :)','Success');
         return redirect()->route('all/logistik/list');
     }
}
