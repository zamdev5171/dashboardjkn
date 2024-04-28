<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Models\User;
use App\Models\Form;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;
use Session;
use Auth;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Http\Controllers\Controller;


class UserManagementController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_name=='Admin')
        {
            $data = DB::table('users')
            -> orderBy('name', 'asc') 
            ->get();
            $role_name = DB::table('role_type_users')->get();
            return view('usermanagement.user_control',compact('data','role_name'));
        }
        else
        {
            return redirect()->route('home');
        }
        
    }

     // user search
     public function userSearch(Request $request)
     { 
        $data = DB::table('users')->get();
        $role_name = DB::table('role_type_users')->get();
     
 
         // search by name
         if($request->name)
         {
             $data = DB::table('users')
                         ->select('users.*')
                         ->where('name','LIKE','%'.$request->name.'%')
                         -> orderBy('name', 'asc') 
                         ->get();
         }
 
         // search by role
         if($request->role_name)
         {
             $data = DB::table('users')
                         ->select('users.*')
                         ->where('users.role_name','LIKE','%'.$request->role_name.'%')
                         -> orderBy('name', 'asc') 
                         ->get();
            
         }
 
         // search by name & role
         if($request->name && $request->role_name)
         {
             $data = DB::table('users')
                         ->select('users.*')
                         ->where('name','LIKE','%'.$request->name.'%')
                         ->where('users.role_name','LIKE','%'.$request->role_name.'%')
                         -> orderBy('name', 'asc') 
                         ->get();
         }
        
         return view('usermanagement.user_control',compact('data','role_name'));
     }
  
    // use activity log
    public function activityLog()
    {
        $activityLog = DB::table('user_activity_logs')->get();
        return view('usermanagement.user_activity_log',compact('activityLog'));
    }
    // activity log
    public function activityLogInLogOut()
    {
        $activityLog = DB::table('activity_logs')->get();
        return view('usermanagement.activity_log',compact('activityLog'));
    }

    // profile user
    public function profile()
    {
        return view('usermanagement.profile_user');
    }
   
    
    // add new user
    public function addNewUser()
    {
        $data = DB::table('users')->get();
        $role_name = DB::table('role_type_users')->get();
        return view('usermanagement.add_new_user',compact('data','role_name'));
        
    }
     // save new user
     public function addNewUserSave(Request $request)
     {

        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'role_name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'password_confirmation' => 'required',
        ]);

       
        $user = new User;
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->role_name    = $request->role_name;
        $user->password     = Hash::make($request->password);
        $user->save();

        Toastr::success('Add New Data','Success');
        return redirect()->route('userManagement');
      
        DB::rollback();
        Toastr::error('ERROR- Add new data failed');
        return redirect()->back();
    }
    
       // user edit
       public function userEdit($id)
       {
           $data = DB::table('users')->where('id',$id)->get();
           $role_name = DB::table('role_type_users')->get();
           return view('usermanagement.edit_users',compact('data','role_name'));
       }
    // update
    public function update(Request $request)
    {

        $id           = $request->id;
        $fullName     = $request->fullName;
        $email        = $request->email;
        $role_name    = $request->role_name;

        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        
      
        
        $update = [

            'id'           => $id,
            'name'         => $fullName,
            'email'        => $email,
            'role_name'    => $role_name,
        ];

        $activityLog = [

            'user_name'    => $fullName,
            'email'        => $email,
            'role_name'    => $role_name,
            'modify_user'  => 'Update',
            'date_time'    => $todayDate,
        ];

        DB::table('user_activity_logs')->insert($activityLog);
        User::where('id',$request->id)->update($update);
        Toastr::success('User updated successfully','Success');
        return redirect()->route('userManagement');
    }
    // delete
    public function delete($id)
    {
        $user = Auth::User();
        Session::put('user', $user);
        $user=Session::get('user');

        $fullName     = $user->name;
        $email        = $user->email;
        $role_name    = $user->role_name;

        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();

        $activityLog = [

            'user_name'    => $fullName,
            'email'        => $email,
            'role_name'    => $role_name,
            'modify_user'  => 'Delete',
            'date_time'    => $todayDate,
        ];

        DB::table('user_activity_logs')->insert($activityLog);

        $delete = User::find($id);
        $delete->delete();
        Toastr::success('SUCCESS- User deleted successfully');
        return redirect()->route('userManagement');
    }

    // view change password
    public function changePasswordView()
    {
        return view('usermanagement.change_password');
    }
    
    // change password in db
    public function changePasswordDB(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'new_confirm_password' => ['same:new_password'],
       
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Toastr::success('Your password has been changed! ','Success');
        return redirect()->route('home');
    }
}









