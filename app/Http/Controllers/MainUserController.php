<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class MainUserController extends Controller
{
    //

    public function Logout(){

        Auth::logout();
        return Redirect()->route('login');
    }

    public function UserProfile(){
        $id= Auth::user()->id;
        $user = User::find($id);
        

        return view('student.profile.viewprofile',compact('user'));
    }

    public function UserProfileUpdate(){

        $id= Auth::user()->id;
        $updateprofile = User::find($id);

        return view('student.profile.updateprofile',compact('updateprofile'));
    }

    public function UserProfileSave(Request $request){

        $data=User::find(Auth::user()->id);
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
            @unlink(public_path('upload/user_profilephotos/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_profilephotos'),$filename);
            $data['profile_photo_path']=$filename;
        }
        $data->save();

        $notification = array(
            'message'=>'Your Profile Information has been successfully updated',
            'alert-type'=>'success'
        );
        return redirect()->route('user.profile')->with($notification); /* info message if the profile has been successfully updated */
    }

    /* Get password form */
    public function UserPasswordShow(){

        return view('student.password.password_edit');

    }


    /* Update Password Session */
    public function UserPasswordUpdate(Request $request){


        $validateData =$request->validate([

            'old_password'=>'required',
            'password'=>'required|confirmed',

        ]);


        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->old_password, $hashedPassword)){
            $user=User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::Logout(); /* function to call the logout session */
            return redirect()->route('login');
        }else{

            return redirect()->back();
        }

        //return view('student.password.password_edit');

    }




}
