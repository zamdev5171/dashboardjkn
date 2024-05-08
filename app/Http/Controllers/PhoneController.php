<?php

namespace App\Http\Controllers;

use App\Models\phone;
use App\Models\alat;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\jawatan;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use DB;

class PhoneController extends Controller
{
      // view list all 
      public function list()
      {
          $phone = DB::table('phones')      
          -> orderBy('agensi', 'asc') 
          ->get();        //list
          return view('phone.phone_control',compact('phone'));
      }
  
      
   
      //add 
      public function phoneAdd()
      { 
         
          $phone = DB::table('phones')
          -> orderBy('agensi', 'asc') 
          ->get();
          return view('phone.phone_add',compact('phone'));
  
      }
      //save
      public function phoneSave(Request $request)
      {
          $request->validate([
              
              'agensi' => 'required|string|max:255|unique:phones',
              'no_phone' => 'required|string',
              
          ]);
  
          $phone = new phone;
          $phone ->agensi        = $request->agensi;
          $phone ->no_phone      = $request->no_phone;
          $phone ->save();
  
          Toastr::success('Data added successfully :)','Success');
          return redirect()->back();
         
      }
  
      // edit
      public function phoneEdit($id)
      {
          $phone = DB::table('phones')->where('id',$id)
          -> orderBy('agensi', 'asc') 
          ->get();
          return view('phone.phone_edit',compact('phone'));
        
      }
      // update to db
      public function phoneUpdate( Request $request)
      {
          $id              = $request->id;
          $agensi          = $request->agensi;
          $no_phone        = $request->no_phone;
        
          $update = [
  
              'id'                => $id,
              'agensi'            => $agensi,
              'no_phone'          => $no_phone,
              
          ];
  
          phone::where('id',$request->id)->update($update);
          Toastr::success('Data updated successfully :)','Success');
          return redirect()->route('all/phone/list');
          
      }
  
      // delete
      public function phoneDelete($id)
      {
          $delete = phone::find($id);
          $delete->delete();
          Toastr::success('Data deleted successfully :)','Success');
          return redirect()->route('all/phone/list');
      }
    }
