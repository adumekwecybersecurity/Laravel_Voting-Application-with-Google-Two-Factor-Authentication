@extends('staff.staffdashboard')
@section('staff')

<div>
    <br><br>
        <div class="row">
          <div class="col-md-8 offset-md-2">
              <form action="simple-results.html">
                  <div class="input-group">
                      <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                      <div class="input-group-append">
                          <button type="submit" class="btn btn-lg btn-default">
                              <i class="fa fa-search"></i>
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </div><br>
   
   
   
    <div class="row">
         <div class="col-12">
           <div class="card">
             <div class="card-header">
               <h3 class="card-title"><strong   class="btn btn-sm btn-alert"><h6><strong>
               <span style="color:rgba(2, 59, 24, 0.715)"><strong>STATISTICS OF ALL CANDIDATES TOTAL NUMBER OF VOTES</strong></span></strong></h6></strong></h3>
               
   
               
                               
                             </div>
                             
             
                 </div>
               </div>
             </div>
             <!-- /.card-header -->
             <div class="card-body table-responsive p-0">
               <table class="table table-hover text-nowrap">
                 <thead>
                   <tr>
                
                                    <th style="text-align: center">Student-ID</th>
                                    <th style="text-align: center">First-Name</th>
                                    <th style="text-align: center">Middle-Name</th>
                                    <th style="text-align: center">Surname</th>
                                    <th style="text-align: center">Contesting For</th>
                                    <th style="text-align: center">Profile-Photo</th>
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">Date of Birth</th>
                                    <th style="text-align: center">Gender</th>
                                    <th style="text-align: center">Department</th>
                                    <th style="text-align: center">Manifesto</th>
                                    <th style="text-align: center">Nominee-ID</th>
                                    <th style="text-align: center">Post-ID</th>
                                    <th style="text-align: center">Current No of Votes</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach ($presidents as $president =>$row)
                   <tr style="color: rgb(9, 0, 128)">
                   
                     <td style="text-align: center">{{$row->stud_ID}}</td>
                     <td style="text-align: center">{{$row->firstName}}</td>
                     <td style="text-align: center"><span class="tag tag-success">{{$row->midName}}</span></td>
                     <td>{{$row->surName}}</td>
                     <td>{{$row->position}}</td>
                     <td style="text-align: center">
                      <ul class="list-inline">
                      <li class="list-inline-item">
                      <img src="/upload/nominee_photos/{{$row->profile_photo_path}}" class="profile-user-img img-fluid img-circle" style="width: 100px; height:90px">
                      
                      </li>
                      </ul>
                     </td>
                   
                     <td style="text-align: center">{{$row->email}}</td>
                     <td style="text-align: center">{{$row->DOB}}</td>
                     <td style="text-align: center">{{$row->gender}}</td>
                     <td style="text-align: center">{{$row->Dept}}</td>
                     <td style="text-align: center">{{$row->post_Memo}}</td>
                     <td style="text-align: center">{{$row->nominee_ID}}</td>
                     <td style="text-align: center">{{$row->post_ID}}</td>
                     <td style="text-align: center">{{$row->recent_Vote}}</td>
                     
                    
                    
                    

                  
                     
                   </tr>
                   @endforeach


                   @foreach ($secretaries as $secretary =>$row)
                   <tr style="color: rgb(9, 0, 128)">
                   
                   
                     <td style="text-align: center">{{$row->stud_ID}}</td>
                     <td style="text-align: center">{{$row->firstName}}</td>
                     <td style="text-align: center"><span class="tag tag-success">{{$row->midName}}</span></td>
                     <td>{{$row->surName}}</td>
                     <td>{{$row->position}}</td>
                     <td style="text-align: center">
                      <ul class="list-inline">
                      <li class="list-inline-item">
                      <img src="/upload/nominee_photos/{{$row->profile_photo_path}}" class="profile-user-img img-fluid img-circle" style="width: 100px; height:90px">
                      </li>
                      </ul>
                     </td>
                   
                     <td style="text-align: center">{{$row->email}}</td>
                     <td style="text-align: center">{{$row->DOB}}</td>
                     <td style="text-align: center">{{$row->gender}}</td>
                     <td style="text-align: center">{{$row->Dept}}</td>
                     <td style="text-align: center">{{$row->post_Memo}}</td>
                     <td style="text-align: center">{{$row->nominee_ID}}</td>
                     <td style="text-align: center">{{$row->post_ID}}</td>
                     <td style="text-align: center">{{$row->recent_Vote}}</td>
                     
                    
                    
                    

                  
                     
                   </tr>
                   @endforeach
                  


                  
                  
                </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
               
                 </div>
   


@endsection