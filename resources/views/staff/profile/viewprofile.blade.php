@extends('staff.staffdashboard')
@section('staff')

<form>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><strong>Logged in as:</strong>&nbsp;&nbsp;<a href="#" ><strong>( {{$staffdata->email}} )</strong></a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
   

    <!-- Main content -->
    
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
        <img src="{{ (!empty($staffdata->profile_photo_path))?  url('upload/staff_profilephotos/'.$staffdata->profile_photo_path):url('upload/default.png')}}"
                  class="profile-user-img img-fluid img-circle" style="width: 120px; height:120px">

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


                <strong><i class="fas fa-user"></i> Username:</strong>
                <p class="text-muted">{{$staffdata->userName}}</p>
                <hr>




                <strong><i class="fas fa-book mr-1"></i>STAFF-IDENTIFICATION NO:</strong>
                <p class="text-muted">
                  {{$staffdata->staff_ID}}
                </p>
                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address 1:</strong>
                <p class="text-muted">{{$staffdata->Address1}}</p>
                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address 2:</strong>
                <p class="text-muted">{{$staffdata->Address2}}</p>
                <hr>

                <strong><i class="fas fa-user"></i>&nbsp;&nbsp;Gender</strong>
                <p class="text-muted">
                  <span class="tag tag-danger">{{$staffdata->gender}}</span>
                </p>
                <hr>

                
                <p class="text-muted">
                  <span class="tag tag-danger"><a href="{{route('staffpassword.show')}}"><button type="button" class="btn btn-primary btn-block"><strong>Change-Password</strong></button></a></span>
                </p>
                <hr>
                
                

                
                <p class="text-muted">
                  <span class="tag tag-danger"><a href="{{route('staff.profile.update')}}"><button type="button" class="btn btn-block btn-success">Edit-Profile</button></a></span>
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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Welcome: &nbsp;{{$staffdata->name}}</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <a href="#">Phone-Number:</a>
                          </a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;{{$staffdata->phone}}
                      </p>
                    </div>

                    <div class="post">
                        <div class="user-block">
                          <span class="username">
                            <a href="#">Date of Birth:</a>
                            </a>
                          </span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;{{$staffdata->DOB}}
                        </p>
                      </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                        <div class="user-block">
                          <span class="username">
                            <a href="#">Account Created at:</a>
                            </a>
                          </span>
                        </div>
                      <!-- /.user-block -->
                      <p>
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;{{$staffdata->created_at}}
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
                          <h3 class="timeline-header"><a href="#">{{$staffdata->email}}</a></h3>
                        </div> 
                    </div>
                 </div> 
                </div> 
            </div>
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </form>
    @endsection

                         
              