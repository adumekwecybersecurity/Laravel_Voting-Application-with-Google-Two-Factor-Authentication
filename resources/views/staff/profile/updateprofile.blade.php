@extends('staff.staffdashboard')
@section('staff')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5><strong>Staff:&nbsp;&nbsp;</strong><a href=""><strong>Update-Profile Section</strong></a></h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><strong>Logged in as:</strong>&nbsp;&nbsp;<a href="#" ><strong>( {{$updatestaffdata->email}} )</strong></a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  

  
    <!-- Main content -->
    
        <div class="row">
          <div class="col-md-3">
            <form  method="post" action="{{route('staff.profile.store')}}" enctype="multipart/form-data">
              @csrf
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img src="{{ (!empty($updatestaffdata->profile_photo_path))?  url('upload/staff_profilephotos/'.$updatestaffdata->profile_photo_path):url('upload/default.png')}}"
                  class="profile-user-img img-fluid img-circle" style="width: 120px; height:120px">
                    <!-- Still got little issues on displaying profile image, check back later -->
                  <!-- Still got little issues on displaying profile image, check back later -->
                </div>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">

                
             










                <strong><i class="fas fa-book mr-1"></i>STAFF-IDENTIFICATION NO:</strong>
                <p class="text-muted"><br>
                  <input class="form-control select2"  name="Dept" disabled="disabled" value="{{$updatestaffdata->staff_ID}}" style="width: 100%;" />
                </p>
                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address 1:</strong>
                <p class="text-muted"><br>
                  <input class="form-control select2"   name="Address1" value="{{$updatestaffdata->Address1}}" style="width: 100%;" /></p>
                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address 2:</strong>
                <p class="text-muted"><br>
                  <input class="form-control select2"   name="Address2" value="{{$updatestaffdata->Address2}}" style="width: 100%;" /></p>
                <hr>

                <strong><i class="fas fa-user"></i>&nbsp;&nbsp;Gender</strong>
                <p class="text-muted">
                  <span class="tag tag-danger"><br>
                    <input class="form-control select2" name="gender" value="{{$updatestaffdata->gender}}" style="width: 100%;" /></span>
                </p>
               <hr>


               <p class="text-muted">
                <span class="tag tag-danger"><input type="file" name="profile_photo_path" class="btn btn-warning col cancel"  id="photo"/><strong>&nbsp;&nbsp;&nbsp;upload-picture</strong></span>
              </p>
              <hr>


                
                <p class="text-muted">
                  
                  <span class="tag tag-danger"><a href="{{route('staff.profile.store')}}"><button type="submit" class="btn btn-block btn-success"><strong>Update-Data</strong></button></a></span>
                </p>
                <hr>

                <p class="text-muted">
                  
                  <span class="tag tag-danger"><button type="reset" class="btn btn-block btn-danger"><strong>Reset</strong></button></a></span>
                </p>
                <hr>







                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="{{route('staff.profile')}}" data-toggle="tab">Welcome: &nbsp;{{$updatestaffdata->name}}</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->


                    <div class="post">
                      <div class="user-block">
                        
                          <a href=""><strong>Surname:</strong></a>
                          </a>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        <input class="form-control select2"  name="surName" value="{{$updatestaffdata->surName}}"  style="width: 50%;" />
                      </p>



                      <span class="username">
                        <a href=""><strong>Middle-name:</strong></a>
                        </a>
                      </span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                      <input class="form-control select2"  name="midName" value="{{$updatestaffdata->midName}}"  style="width: 50%;" />
                    </p>


                    <span class="username">
                      <a href=""><strong>First-Name:</strong></a>
                      </a>
                    </span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    <input class="form-control select2"  name="firstName" value="{{$updatestaffdata->firstName}}"  style="width: 50%;" />
                  </p>
                      <hr>
                    </div>


                    <div class="post">
                      <div class="user-block">
                        <strong>Phone-Number</strong>  
                      </div>
                      <!-- /.user-block -->
                      <p>
                        <input class="form-control select2"  name="phone" value="{{$updatestaffdata->phone}}" disabled="disabled" style="width: 50%;" />
                      </p>
                    </div>

                        
                        

                     
                  

                    <div class="post">
                        <div class="user-block">
                          <strong>
                           Date of Birth
                          </strong>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          <input class="form-control select2" name="DOB" value="{{$updatestaffdata->DOB}}" style="width: 50%;" />
                        </p>
                      </div>
                    <!-- /.post -->


                    <div class="post">
                      <div class="user-block">
                        <strong>
                         Username:
                        </strong>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        <input class="form-control select2" name="userName" value="{{$updatestaffdata->userName}}" style="width: 50%;" />
                      </p>
                    </div>










                    <!-- Post -->
                    <div class="post">
                        <div class="user-block">
                          <strong>
                            Account Created at:
                            
                          </strong>
                        </div>
                      <!-- /.user-block -->
                      <p>
                        <input class="form-control select2" disabled="disabled" value="{{$updatestaffdata->created_at}}" style="width: 50%;" />
                      </p>

                  </div>

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                         Email-Contact
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>
                        <div class="timeline-item">
                          <h3 class="timeline-header"> <input class="form-control select2" name="email" disabled="disabled" value="{{$updatestaffdata->email}}" style="width: 50%;" /></h3>
                        </form>
                        </div> 
                    </div>
                 </div> 
                </div> 
            </div>
        </div><!-- /.container-fluid -->
        </section>
     
        <!-- /.content -->


             <!-- Script to upload and display photo before saving. Do not forget to add jquery CDN, at the top.  -->

        <script type="text/javascript">
        $(document).ready(function(){

          $('#photo').change(function(e){

            var reader = new FileReader();
            reader.onload = function(e){
              $('#showphoto').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
          });

        });
        </script>
    @endsection

                         
              