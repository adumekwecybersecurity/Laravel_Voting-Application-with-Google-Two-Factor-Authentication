<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class MainStaffController extends Controller
{

    //

    public function Logout(){

        Auth::logout();
        return Redirect()->route('/staff/login');
    }



    public function StaffProfile(){

        if(Auth::guard('staff')->check()){

        $id=Auth::guard('staff')->user()->id;
        $staffdata = Staff::find($id);

        
        return view('staff.profile.viewprofile', compact('staffdata'));
    }else{

        return view('studentuserview.errorpage');
    }
}

    public function StaffProfileUpdate(){

        if(Auth::guard('staff')->check()){

        $id=Auth::guard('staff')->user()->id;
        $updatestaffdata = Staff::find($id);

        return view('staff.profile.updateprofile', compact('updatestaffdata'));
    }else{

        return view('studentuserview.errorpage');
    }
}


    public function StaffProfileSave(Request $request){

        $id=Auth::guard('staff')->user()->id;
        $data=Staff::find($id);
        $data->surName=$request->surName;
        $data->firstName=$request->firstName;
        $data->midName=$request->midName;
        $data->userName=$request->userName;
        $data->Address1=$request->Address1;
        $data->Address2=$request->Address2;
        $data->gender=$request->gender;
        $data->DOB=$request->DOB;
        //$data->password=$request->password; /* correct later when doing password update */
        
        if($request->file('profile_photo_path')){
            $file=$request->file('profile_photo_path');
            @unlink(public_path('upload/staff_profilephotos/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/staff_profilephotos'),$filename);
            $data['profile_photo_path']=$filename;
        }
        $data->save();

        $notification = array(
            'message'=>'Your Profile Information has been successfully updated',
            'alert-type'=>'info'
        );
        return redirect()->route('staff.profile')->with($notification);

    }

    public function StaffPasswordShow(){

        if(Auth::guard('staff')->check()){

        $id=Auth::guard('staff')->user()->id;
        $staffdata = Staff::find($id);  

        return view('staff.password.password_change', compact('staffdata'));

    }else{

        return view('studentuserview.errorpage');
    }
    }

    public function StaffPasswordUpdate(Request $request){

        $validateData =$request->validate([

            'old_password'=>'required',
            'password'=>'required|confirmed',

        ]);

        $id=Auth::guard('staff')->user()->id;
        $hashedPassword = Staff::find($id)->password;
        if(Hash::check($request->old_password, $hashedPassword)){
            $staff=Staff::find($id);
            $staff->password = Hash::make($request->password);
            $staff->save();
            Auth::Logout(); /* function to call the logout session */
            return redirect()->route('staff.logout');
        }else{

            return redirect()->back();
        }



    } 

    public function Errorpage(){

        return view('studentuserview.errorpage');
    }


    public function Notauthorizedpage(){

        return view('errorvoting');
    }


}
