<?php

namespace App\Http\Controllers;

use App\Models\alat;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\jawatan;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use DB;

class AlatController extends Controller
{
      // view list all 
      public function list()
      {
          $alat = DB::table('alats')      
          -> orderBy('alat', 'asc') 
          ->get();        //list
          return view('alat.alat_control',compact('alat'));
      }
  
      
   
      //add 
      public function alatAdd()
      { 
         
          $alat = DB::table('alats')
          -> orderBy('alat', 'asc') 
          ->get();
          return view('alat.alat_add',compact('alat'));
  
      }
      //save
      public function alatSave(Request $request)
      {
          $request->validate([
              
              'alat' => 'required|string|max:255',
              'bilangan' => 'required|string',
              
          ]);
  
          $alat = new alat;
          $alat ->alat           = $request->alat;
          $alat ->bilangan       = $request->bilangan;
          $alat ->save();
  
          Toastr::success('Data added successfully :)','Success');
          return redirect()->back();
         
   
      }
  
      // edit
      public function alatEdit($id)
      {
          $alat = DB::table('alats')->where('id',$id)
          -> orderBy('alat', 'asc') 
          ->get();
          return view('alat.alat_edit',compact('alat'));
        
      }
      // update to db
      public function alatUpdate( Request $request)
      {
          $id              = $request->id;
          $alat            = $request->alat;
          $bilangan        = $request->bilangan;
        
          $update = [
  
              'id'                => $id,
              'alat'              => $alat,
              'bilangan'          => $bilangan,
              
          ];
  
          alat::where('id',$request->id)->update($update);
          Toastr::success('Data updated successfully :)','Success');
          return redirect()->route('all/alat/list');
          
      }
  
      // delete
      public function alatDelete($id)
      {
          $delete = alat::find($id);
          $delete->delete();
          Toastr::success('Data deleted successfully :)','Success');
          return redirect()->route('all/alat/list');
      }
    }
