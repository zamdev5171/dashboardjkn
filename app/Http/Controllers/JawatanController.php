<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\User;
use App\Models\jawatan;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use DB;

class JawatanController extends Controller
{
     
    // view list all 
    public function list()
    {
        $jawatan = DB::table('jawatans')      
        -> orderBy('jawatan', 'asc') 
        ->get();        //list
        return view('perjawatan.jawatan_control',compact('jawatan'));
    }

    
 
    //add 
    public function jawatanAdd()
    { 
       
        $jawatan = DB::table('jawatans')
        -> orderBy('jawatan', 'asc') 
        ->get();
        return view('perjawatan.jawatan_add',compact('jawatan'));

    }
    //save
    public function jawatanSave(Request $request)
    {
        $request->validate([
            
            'jawatan' => 'required|string|max:255',
            'bilangan' => 'required|string',
            
        ]);

        $jawatan = new jawatan;
        $jawatan ->jawatan       = $request->jawatan;
        $jawatan ->bilangan       = $request->bilangan;
        $jawatan ->save();

        Toastr::success('Data added successfully :)','Success');
        return redirect()->back();
       
 
    }

    // edit
    public function jawatanEdit($id)
    {
        $jawatan = DB::table('jawatans')->where('id',$id)
        -> orderBy('jawatan', 'asc') 
        ->get();
        return view('perjawatan.jawatan_edit',compact('jawatan'));
      
    }
    // update to db
    public function jawatanUpdate( Request $request)
    {
        $id                  = $request->id;
        $jawatan         = $request->jawatan;
        $bilangan        = $request->bilangan;
      
        $update = [

            'id'                => $id,
            'jawatan'        => $jawatan,
            'bilangan'        => $bilangan,
            
        ];

        jawatan::where('id',$request->id)->update($update);
        Toastr::success('Data updated successfully :)','Success');
        return redirect()->route('all/jawatan/list');
        
    }

    // delete
    public function jawatanDelete($id)
    {
        $delete = jawatan::find($id);
        $delete->delete();
        Toastr::success('Data deleted successfully :)','Success');
        return redirect()->route('all/jawatan/list');
    }
}
