<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Models\Results;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use DB;

class ResultsController extends Controller
{

 public function Resultadd(){

    if(Auth::guard('staff')->check()){
      
        return view('staff.resultaddform');

      }else{

       return view('studentuserview.errorpage'); /* fix code later to run error 404 page. code is perfect and no errors */
      }


 }


    public function Resultinsert(Request $request){

        $validateData = $request->validate([

            'stud_ID' => ['required', 'string', 'max:255', 'unique:nominees' ],
            'firstName' => ['required', 'string', 'max:255', ],
            'midName' => ['required', 'string', 'max:255', ],
            'surName' => ['required', 'string', 'max:255', ],
            'DOB' => ['required', 'string', 'max:255', ],
            'Dept' => ['required', 'string', 'max:255', ],
            'Total_Votes' => ['required', 'string', 'max:255', ],
            'nominee_ID' => ['required', 'string', 'max:255', ],
            'position' => ['required', 'string', 'max:255', ],
            'post_ID' => ['required', 'string', 'max:255', ],
		    
          
            
            
          
        

            //'password' => $this->passwordRules(),

        ]);

        $data = new Results();
        $data->stud_ID =$request->stud_ID;
        $data->firstName =$request->firstName;
        $data->midName =$request->midName;
        $data->surName =$request->surName;
        $data->DOB =$request->DOB; 
        $data->Dept =$request->Dept;
        $data->nominee_ID =$request->nominee_ID;
        $data->position =$request->position;
        $data->post_ID =$request->post_ID;
        $data->Total_Votes =$request->Total_Votes="0";
        $data->save();

        if($request->file('profile_photo_path')){
            $file=$request->file('profile_photo_path');
            @unlink(public_path('upload/results_photos/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/results_photos'),$filename);
            $data['profile_photo_path']=$filename;
        }
        $data->save();

        $notification = array(
            'message'=>'The Winner has been inserted to In the results table of the election.',
            'alert-type'=>'info'
        );
        return redirect()->back()->with($notification);
    }



    public function Resultsall(){

        
        $results=Results::paginate(5);
           
        if(Auth::guard('staff')->check()){
      
        return view('staff.resultsview',compact('results'));
        

      }else{

        return view('studentuserview.errorpage'); /* fix code later to run error 404 page. code is perfect and no errors */
      }
    }



    public function Resultstudview(){

        
        $results=Results::paginate(5);
           
     
      
        return view('student.resultsview',compact('results'));
        
    }

}