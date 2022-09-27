<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\MainStaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NomineeController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\CalenderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});





/* we create stafflogin function in our StaffController */

Route::group(['prefix'=>'staff','middleware'=>['staff:staff']], function(){
    Route::get('/login',[StaffController::class,'stafflogin']); 
   Route::post('/login',[StaffController::class,'store']);
});

/**  Guard Routes for staff/Admin Dashboard */

Route::middleware(['auth:sanctum,staff', 'verified'])->get('/staff/dashboard', function () { 

      if(Auth::guard('staff')->check()){
        return view('staff.staff');

      }else{

       return view('student.index'); /* fix code later to run error 404 page. code is perfect and no errors */
      }
    
})->name('staff.dashboard');

/** Guard Routes for student/Users Dashboard */

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () { 
    return view('student.index');
})->name('dashboard');


Route::get('/staff/logout',[StaffController::class,'destroy'])->name('staff.logout');



/* Routes for all users/students to access the  dashboard functionalities. */

Route::get('/user/logout',[MainUserController::class,'Logout'])->name('user.logout');
Route::get('/user/profile',[MainUserController::class,'UserProfile'])->name('user.profile');


/* Routes for user profile information update */
Route::get('/user/profile/update',[MainUserController::class,'UserProfileUpdate'])->name('profile.update');
Route::post('/user/profile/update',[MainUserController::class,'UserProfileSave'])->name('profile.store');


/* Routes for user update Password */
Route::get('/user/password/view',[MainUserController::class,'UserPasswordShow'])->name('userpassword.show');
Route::post('/user/password/view',[MainUserController::class,'UserPasswordUpdate'])->name('userpassword.store'); 
/* giving errors check later. */



/* Debug-Later for admin google authentication error logout redirect.  */

/* For users and students it works fine.  */

/* TWO FACTOR AUTHENTICATION FOR STUDENTS */
Route::middleware(['auth', 'verified'])->get('/twofactor/two-factor-auth', function () {
    return view('/twofactor/two-factor-auth');
 })->name('two-factor-auth'); 
 
 


/* Routes for all staff/admin to access the voting system. Dashboard functionalities. */


/* Routes for staff update Profile information. */
Route::get('/staff/profile',[MainStaffController::class,'StaffProfile'])->name('staff.profile');
Route::get('/staff/profile/update',[MainStaffController::class,'StaffProfileUpdate'])->name('staff.profile.update');
Route::post('/staff/profile/update',[MainStaffController::class,'StaffProfileSave'])->name('staff.profile.store');


/* Routes for staff update Password */
Route::get('/staff/password/view',[MainStaffController::class,'StaffPasswordShow'])->name('staffpassword.show');
Route::post('/staff/password/view',[MainStaffController::class,'StaffPasswordUpdate'])->name('staffpassword.store');



/* Staff view student  debug code*/


Route::delete('/delete/{id}',[UserController::class,'destroy']);
//Route::edit('/edit/{id}/view',[UserController::class,'Edit'])->name('view.editstudent');



 Route::get('/studentuserview/userview/view',[UserController::class,'Studentview'])->name('view.students');
 Route::get('/studentuserview/useraddform/view',[UserController::class,'Studentadd'])->name('add.students');
 Route::post('/studentuserview/useraddform/view',[UserController::class,'Studenstore'])->name('add.studentdata');


/* for Nominee */

 Route::get('/staff/nominee/view',[NomineeController::class,'Nomineeform'])->name('add.candidate');
 Route::post('/staff/nominee/view',[NomineeController::class,'Nomineeinsert'])->name('insert.candidate');
 Route::delete('/delete/{id}',[NomineeController::class,'destroy']);
 Route::get('/staff/nominee/view_nominee/view',[NomineeController::class,'Nomineeall'])->name('view.candidate');
 Route::get('/staff/votestats_staff/view',[NomineeController::class,'staffshowstats'])->name('votestats.view');






 Route::get('/studentuserview/votingpage/view',[NomineeController::class,'Voting'])->name('view.votingpage');
 Route::post('/studentuserview/votingpage/view',[NomineeController::class,'castvote'])->name('vote.casting');



 Route::get('/student/hasvoted/view',[NomineeController::class,'Hasvote']);
 Route::get('/student/votestats_student/view',[NomineeController::class,'showstats'])->name('votestats.student');

 Route::get('/studentuserview/errorpage/view',[MainStaffController::class,'Errorpage']);
 Route::get('/view',[MainStaffController::class,'Notauthorizedpage']);

 /* Controllers for announcement and information from the desk of the admin/staff.  */

 Route::get('/staff/infoaddform/view',[AnnouncementController::class,'Informationadd'])->name('infoaddform');
 Route::post('/staff/infoaddform/view',[AnnouncementController::class,'Informationstore'])->name('info.submit.announcement');


/* Post Election Results by staff */
 Route::get('/staff/resultaddform/view',[ResultsController::class,'Resultadd'])->name('staff.resultaddform');
 Route::post('/staff/resultaddform/view',[ResultsController::class,'Resultinsert'])->name('staff.resultpost');

 Route::get('/staff/resultsview/view',[ResultsController::class,'Resultsall'])->name('staff.resultsview');
 Route::get('/student/resultsview/view',[ResultsController::class,'Resultstudview'])->name('student.resultsview');





 /* Still working on the calendar code for todo-list however haven't finished yet. */
Route::controller(CalenderController::class)->group(function(){
Route::get('fullcalender', 'index');
Route::post('fullcalenderAjax', 'ajax');


 /* code to view announcement added to the databases has errors needs to be tweaked Later. */

 //Route::get('/staff/staff/view',[AnnouncementController::class,'addminfo']);



});



 
//