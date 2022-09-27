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
            <h3 class="card-title"><a href="{{route('add.students')}}" class="btn btn-sm btn-success"><h6><strong>
            Click Here To: &nbsp;<span style="color:yellow"><strong>ADD NEW STUDENTS</strong></span></strong></h6></a></h3>
            

            
                            
                          </div>
                          
          
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                <th>ID</th>
                                 <th>Student-ID</th>
                                 <th>First-Name</th>
                                 <th>Middle-Name</th>
                                 <th>Surname</th>
                                 <th>Profile-Photo</th>
                                 <th>Email</th>
                                 <th>Username</th>
                                 <th>Date of Birth</th>
                                 <th>Gender</th>
                                 <th>Address-1</th>
                                 <th>Address-2</th>
                                 <th>Department</th>
                                 <th>Phone</th>
                                 <th>Date of Registration</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key =>$row)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$row->stud_ID}}</td>
                  <td>{{$row->firstName}}</td>
                  <td><span class="tag tag-success">{{$row->midName}}</span></td>
                  <td>{{$row->surName}}</td>
                  <td>
                   <ul class="list-inline">
                   <li class="list-inline-item">
                    <img src="{{ (!empty($row->profile_photo_path))?  url('upload/user_profilephotos/'.$row->profile_photo_path):url('upload/default.png')}}"
                    class="profile-user-img img-fluid img-circle" style="width: 100px; height:90px">

                   </li>
                   </ul>
                  </td>
                
                  <td>{{$row->email}}</td>
                  <td>{{$row->userName}}</td>
                  <td>{{$row->DOB}}</td>
                  <td>{{$row->gender}}</td>
                  <td>{{$row->Address1}}</td>
                  <td>{{$row->Address2}}</td>
                  <td>{{$row->Dept}}</td>
                  <td>{{$row->phone}}</td>
                  <td>{{$row->created_at}}</td>
                  <td class="project-actions text-right">

                    <!--  If future to build the edit and specific user function just uncomment the code down there. -->
                   <!-- <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>-->
                   <!-- <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>-->
                    <form action="/delete/{{$row->id}}" method="POST">
                      @csrf
                      @method('delete')
                      <br>
                    <button class="btn btn-danger btn-sm" onclick="return Confirm('Are you sure you want to delete this user??');" type="submit">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </button>
                  
                  </form>
                </td>
                  
                </tr>
                @endforeach
               
               
             </tbody>
             </table>
             </div>
             <!-- /.card-body -->
             </div>
             <div class="card-footer">
             <nav aria-label="Contacts Page Navigation">
             <ul class="pagination justify-content-center m-0">
             {{$data->links()}}
             </ul>
              </nav>
              </div>

               @endsection





