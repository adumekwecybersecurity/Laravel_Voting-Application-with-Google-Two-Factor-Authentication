@extends('student.studentdashboard')
@section('student')

    <!-- Default box -->

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






    <br><br>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><a href="#" class="btn btn-sm btn-primary"><h6><strong>
            LIST OF NOMINEE/CANDIDATES THAT WON:</strong></h6></a></h3>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
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
                  <th>Department</th>
                  <th>TOTAL VOTES</th>
                  <th>Post-ID</th>
                  <th>Nominee-ID</th>
                  <th>Position</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($results as $results => $row)
                <tr>
                  <td>{{$results+1}}</td>
                  <td>{{$row->stud_ID}}</td>
                  <td>{{$row->firstName}}</td>
                  <td><span class="tag tag-success">{{$row->midName}}</span></td>
                  <td>{{$row->surName}}</td>
                  <td>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <img src="/upload/results_photos/{{$row->profile_photo_path}}" class="profile-user-img img-fluid img-circle" style="width: 100px; height:90px">
           
                      </li>
                  </ul>
                  </td>
                  <td>{{$row->Dept}}</td>
                  <td>{{$row->Total_Votes}}</td>
                  <td>{{$row->DOB}}</td>
                  <td>{{$row->position}}</td>
                  <td>{{$row->post_ID}}</td>
                  <td>{{$row->nominee_ID}}</td>
                  <td class="project-actions text-right">
                    <!--<a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>-->
                   
                </td>
                  
                </tr>
                @endforeach
               
               
              </tbody>
            </table>
          </div> 
        </div>
      </div> 
    </div>
    
      

    @endsection