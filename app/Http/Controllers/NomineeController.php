<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Models\Nominee;
use App\Models\User;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use DB;


class NomineeController extends Controller
{

  
     /* return view to student who has voted. */

    public function Hasvote(){

      return view('student.hasvoted');
    }


    
     /* Return form to register nominees or candidates to the database, if the stateful guard checks the respective views be returned.*/

     public function Nomineeform(){

        
      if(Auth::guard('staff')->check()){
      
        return view('staff.nominee.add_nominee');

      }else{

       return view('studentuserview.errorpage'); /* fix code later to run error 404 page. code is perfect and no errors */
      }


     }


     
     /* Admin to register nominees or candidates for election. */

     public function Nomineeinsert(Request $request){

        $validateData = $request->validate([

            'stud_ID' => ['required', 'string', 'max:255', 'unique:nominees' ],
            'firstName' => ['required', 'string', 'max:255', ],
            'midName' => ['required', 'string', 'max:255', ],
            'surName' => ['required', 'string', 'max:255', ],
            'DOB' => ['required', 'string', 'max:255', ],
            'gender' => ['required', 'string', 'max:255', ],
            'Address1' => ['required', 'string', 'max:255', ],
            'Address2' => ['string', 'max:255', ],
            'Dept' => ['required', 'string', 'max:255', ],
		        'phone' => ['required', 'string', 'max:255', 'unique:nominees' ],  
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nominees'],
            'Address2' => ['string', 'max:255', ],
            'Dept' => ['required', 'string', 'max:255', ],
		        'phone' => ['required', 'string', 'max:255', 'unique:nominees' ],  
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nominees'],
            'nominee_ID' => ['required', 'string', 'max:255', ],
            'position' => ['required', 'string', 'max:255', ],
            'post_ID' => ['required', 'string', 'max:255', ],
            'post_Memo' => ['required', 'string', 'max:255', ],
        

            //'password' => $this->passwordRules(),

        ]);

        $data = new Nominee();
        $data->stud_ID =$request->stud_ID;
        $data->firstName =$request->firstName;
        $data->midName =$request->midName;
        $data->surName =$request->surName;
        $data->DOB =$request->DOB;
        $data->gender =$request->gender;
        $data->Address1 =$request->Address1;
        $data->Address2 =$request->Address2;
        $data->Dept =$request->Dept;
        $data->phone =$request->phone;
        $data->email =$request->email;
        $data->nominee_ID =$request->nominee_ID;
        $data->position =$request->position;
        $data->post_ID =$request->post_ID;
        $data->post_Memo =$request->post_Memo;
        $data->recent_Vote =$request->recent_Vote="0";
        $data->save();

        if($request->file('profile_photo_path')){
            $file=$request->file('profile_photo_path');
            @unlink(public_path('upload/nominee_photos/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/nominee_photos'),$filename);
            $data['profile_photo_path']=$filename;
        }
        $data->save();

        $notification = array(
            'message'=>'A New Nominee has been inserted to contest for the election.',
            'alert-type'=>'info'
        );
        return redirect()->back()->with($notification);
    }


    
     /* showing all candidates to the admin/staff of that is logged in.  */

    public function Nomineeall(){

        
        $nominee=Nominee::paginate(5);
           
        if(Auth::guard('staff')->check()){
      
        return view('staff.nominee.view_nominee',compact('nominee'));
        

      }else{

        return view('studentuserview.errorpage'); /* fix code later to run error 404 page. code is perfect and no errors */
      }

     }


     
     /* Generating voting form for the student who hasn't voted yet, to vote. */

     public function Voting(){

       $presidents= empty (Nominee::where('position','president'))?[]:Nominee::where('position','president')->paginate();
       $welfares= empty (Nominee::where('position','welfare'))?[]:Nominee::where('position','welfare')->paginate();
       $secretaries= empty (Nominee::where('position','secretary'))?[]:Nominee::where('position','secretary')->paginate();


       if (!Auth::user()->voted){

          
       
        return view('studentuserview.votingpage')
        ->withPresidents($presidents)
        ->withWelfares($welfares)
        ->withSecretaries($secretaries);
        }

      if(Auth::user()->voted){

        
        return view('student.hasvoted');

      }
      
      
      else{

          return view('errorvoting');
      }

     }
 
     
     /* submitting student votes that was cast to the database for nominees table. */

     public function castvote(Request $request){

      $president=$request->input('president');
      $welfare=$request->input('welfare');
      $secretary=$request->input('secretary');

      DB::table('nominees')->where('id',$president)->update([
        'recent_Vote'=>DB::raw("recent_Vote+1")
      ]);

      DB::table('nominees')->where('id',$welfare)->update([
        'recent_Vote'=>DB::raw("recent_Vote+1")
      ]);

      DB::table('nominees')->where('id',$secretary)->update([
        'recent_Vote'=>DB::raw("recent_Vote+1")
      ]);


      DB::table('users')->where('id',Auth::user()->id)->update([
        'voted'=>1
      ]);


      return view('student.hasvoted');


      

     }


     /* student view of election statistics. */

     public function showstats(){

      $presidents= empty (Nominee::where('position','president'))?[]:Nominee::where('position','president')->get();
       $welfares= empty (Nominee::where('position','welfare'))?[]:Nominee::where('position','welfare')->get();
       $secretaries= empty (Nominee::where('position','secretary'))?[]:Nominee::where('position','secretary')->get();
       return view('student.votestats_student')
        ->withPresidents($presidents)
        ->withWelfares($welfares)
        ->withSecretaries($secretaries);
        return view('student.votestats_student')->withNominees($nominees);
     

      
     }


     /* staff view of election statistics. */
     public function staffshowstats(){

      $presidents= empty (Nominee::where('position','president'))?[]:Nominee::where('position','president')->get();
       $welfares= empty (Nominee::where('position','welfare'))?[]:Nominee::where('position','welfare')->get();
       $secretaries= empty (Nominee::where('position','secretary'))?[]:Nominee::where('position','secretary')->get();

       if(Auth::guard('staff')->check()){
       return view('staff.votestats_staff')
        ->withPresidents($presidents)
        ->withWelfares($welfares)
        ->withSecretaries($secretaries);
         return view('staff.votestats_staff')->withNominees($nominees);

      
     }    else{

     return view('studentuserview.errorpage'); 
   }

  }


  public function destroy($id){

    if(Auth::guard('staff')->check()){

    $data = Nominee::findOrFail($id);
    $data->delete();



    $notification = array(
      'message'=>'The Nominee/Candidate records have successfully been deleted from the Database. Thank you.',
      'alert-type'=>'success'
  );
  return redirect()->route('staff.dashboard')->with($notification);

}

     

    }
  }
