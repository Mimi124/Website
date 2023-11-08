<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => ' Logged Out Successfully',
            'alert-type' => 'info'
        );

        return redirect('/login')->with($notification);
        
    } //End Method

    public function LogoutPage(){
        return view ('layout.profile.profile_logout');
    }

    public function AdminProfile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('layout.profile.profile_view',compact('adminData'));
    }


    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->gender = $request->gender;

        if ($request->file('photo')) {
           $file = $request->file('photo');
           @unlink(public_path('upload/profile_images/'.$data->photo));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/profile_images'),$filename);
           $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }

    public function ChangePassword(){
        return view('layout.profile.change_password');
    }

    public function UpdatePassword(Request $request ){
        //validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        // Match The Old Password 
        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match!!',
                'alert-type' => 'error'
                 ); 
                return back()->with($notification);

        }
    
          // Update The New Password 

          User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

            $notification = array(
            'message' => 'Password Changed Successfully',
            'alert-type' => 'success'
             ); 
            return back()->with($notification);
    
    } //end method
    
}
