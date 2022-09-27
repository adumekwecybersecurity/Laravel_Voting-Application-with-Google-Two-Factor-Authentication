<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Auth;
use DB;



class AnnouncementController extends Controller
{


    public function Informationadd(){


        if(Auth::guard('staff')->check()){
      
            return view('staff.infoaddform');
            
    
          }else{
    
            return view('studentuserview.errorpage'); 
          }
        
    }


    public function Informationstore(Request $request){

        $validateData = $request->validate([

            'status_ID' => ['required', 'string', 'max:255', ],
            'due_DATE' => ['required', 'string', 'max:255', ],
            'Dept' => ['required', 'string', 'max:255', ],
            'Information' => ['required', 'string',],
             

        ]);

        $data = new Announcement();
        $data->status_ID =$request->status_ID;
        $data->due_DATE =$request->due_DATE;
        $data->Dept =$request->Dept;
        $data->Information =$request->Information;
        $data->save();
        $notification = array(
            'message'=>'Information/Annoucement has been registered successfully.',
            'alert-type'=>'success'
        );
        $data->save();
        
        return redirect()->route('staff.dashboard')->with($notification);
    }

    /* Admin/Staff view of announcement. from database code has errors need to check to retrieve announcement from database. */

  //public function addminfo(){

   // $announcements=Announcement::all();
   // return view('staff.dashboard',compact('announcements'));


 // }


}
