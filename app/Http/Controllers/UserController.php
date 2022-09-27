<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /* Admin to view all students registered to the database, who are to vote. */

    public function Studentview(){

        $data=User::paginate(3);

        if(Auth::guard('staff')->check()){
      
            return view('studentuserview.userview',compact('data'));
            
    
          }else{
    
            return view('studentuserview.errorpage'); 
          }
        
    }


    /* Admin to add or register individual students to the database form function.  */

    public function Studentadd(){

        if(Auth::guard('staff')->check()){
      
            return view('studentuserview.useraddform');
            
    
          }else{
    
            return view('studentuserview.errorpage'); /* fix code later to run error 404 page. code is perfect and no errors */
          }


        
    }

    /* Admin to register students to the database, to vote. */

    public function Studenstore(Request $request){

        $validateData = $request->validate([

            'stud_ID' => ['required', 'string', 'max:255', 'unique:users' ],
            'firstName' => ['required', 'string', 'max:255', ],
            'midName' => ['required', 'string', 'max:255', ],
            'surName' => ['required', 'string', 'max:255', ],
            'userName' => ['string', 'max:255', 'unique:users' ],
            'DOB' => ['required', 'string', 'max:255', ],
            'gender' => ['required', 'string', 'max:255', ],
            'Address1' => ['required', 'string', 'max:255', ],
            'Address2' => ['string', 'max:255', ],
            'Dept' => ['required', 'string', 'max:255', ],
		        'phone' => ['required', 'string', 'max:255', 'unique:users' ],  
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        

            //'password' => $this->passwordRules(),

        ]);

        $data = new User();
        $data->stud_ID =$request->stud_ID;
        $data->firstName =$request->firstName;
        $data->midName =$request->midName;
        $data->surName =$request->surName;
        $data->userName =$request->userName;
        $data->DOB =$request->DOB;
        $data->gender =$request->gender;
        $data->Address1 =$request->Address1;
        $data->Address2 =$request->Address2;
        $data->Dept =$request->Dept;
        $data->phone =$request->phone;
        $data->email =$request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        $notification = array(
            'message'=>'A New Student has successfully been registered',
            'alert-type'=>'success'
        );
        
        return redirect()->route('view.students')->with($notification);
    }

    /* Admin to delete individual student from the database function */

    public function destroy($id){

      if(Auth::guard('staff')->check()){

      $data = User::findorFail($id);
      $data->delete();



      $notification = array(
        'message'=>'The student has been successfully deleted from the database. Thank you.',
        'alert-type'=>'success'
    );
    return redirect()->route('staff.dashboard')->with($notification);

  }
      
     
    }


    public function Edit($id){

      if(Auth::guard('staff')->check()){


        $data = User::findOrFail($id);

        return view('/edit', compact('data'));



      }


    }
   
      }
    
    
