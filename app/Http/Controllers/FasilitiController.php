<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\User;
use App\Models\fasiliti;
use App\Models\jawatan;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use DB;

class FasilitiController extends Controller
{
     
    // view list all 
    public function list()
    {
        $fasiliti = DB::table('fasilitis')      
        -> orderBy('fasiliti', 'asc') 
        ->get();        //list
        return view('fasiliti.fasiliti_control',compact('fasiliti'));
    }

    
 
    //add 
    public function fasilitiAdd()
    { 
       
        $fasiliti = DB::table('fasilitis')
        -> orderBy('fasiliti', 'asc') 
        ->get();
        return view('fasiliti.fasiliti_add',compact('fasiliti'));

    }
    //save
    public function fasilitiSave(Request $request)
    {
        $request->validate([
            
            'fasiliti' => 'required|string|max:255|unique:fasilitis',
            'bilangan' => 'required|string', 
            
        ]);

        $fasiliti = new fasiliti;
        $fasiliti ->fasiliti       = $request->fasiliti;
        $fasiliti ->bilangan       = $request->bilangan;
        $fasiliti ->save();

        Toastr::success('Data added successfully :)','Success');
        return redirect()->back();
       
 
    }

    // edit
    public function fasilitiEdit($id)
    {
        $fasiliti = DB::table('fasilitis')->where('id',$id)
        -> orderBy('fasiliti', 'asc') 
        ->get();
        return view('fasiliti.fasiliti_edit',compact('fasiliti'));
      
    }
    // update to db
    public function fasilitiUpdate( Request $request)
    {
        $id              = $request->id;
        $fasiliti        = $request->fasiliti;
        $bilangan        = $request->bilangan;
      
        $update = [

            'id'              => $id,
            'fasiliti'        => $fasiliti,
            'bilangan'        => $bilangan,
            
        ];

        fasiliti::where('id',$request->id)->update($update);
        Toastr::success('Data updated successfully :)','Success');
        return redirect()->route('all/fasiliti/list');
        
    }

    // delete
    public function fasilitiDelete($id)
    {
        $delete = fasiliti::find($id);
        $delete->delete();
        Toastr::success('Data deleted successfully :)','Success');
        return redirect()->route('all/fasiliti/list');
    }
}
