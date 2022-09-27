@extends('student.studentdashboard')
@section('student')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Password-Update Section</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
   

    <!-- Main content -->
    <form method="post" action="{{route('userpassword.store')}}" >
        @csrf
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
          
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><strong>Are this your Credentials..?</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                <strong><i class="fas fa-user"></i> Username:</strong>
                <p class="text-muted">{{Auth::user()->userName}}</p>
                <hr>




               

                <strong><i class="fas fa-user"></i> Surname:</strong>
                <p class="text-muted">{{Auth::user()->surName}}</p>
                <hr>

                <strong><i class="fas fa-user"></i> Middle-Name:</strong>
                <p class="text-muted">{{Auth::user()->midName}}</p>
                <hr>

                <strong><i class="fas fa-user"></i>&nbsp;&nbsp;First-Name:</strong>
                <p class="text-muted">
                  <span class="tag tag-danger">{{Auth::user()->firstName}}</span>
                </p>
               

                <p class="text-muted">
                  
                    <span class="tag tag-danger"><a href="{{route('userpassword.store')}}"><button type="submit" class="btn btn-block btn-success"><strong>Update-Password</strong></button></a></span>
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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"><strong>KEEP YOUR PASSWORD IN A SAFE PLACE</strong></a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <a href="#">Current-Password:</a>
                          </a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        <input class="form-control select2" id="current_password" type="password" name="old_password" style="width: 50%;" />
                      </p>
                    </div>

                    <div class="post">
                        <div class="user-block">
                          <span class="username">
                            <a href="#">New-Password:</a>
                            </a>
                          </span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                            <input class="form-control select2" id="password" type="password" name="password" style="width: 50%;" />
                          </p>
                      </div>
                    <!-- /.post -->

                    <!-- Post -->


                    <div class="post">
                        <div class="user-block">
                          <span class="username">
                            <a href="#">Confirm-Password:</a>
                            </a>
                          </span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                            <input class="form-control select2" id="password_confirmation" type="password" name="password_confirmation" style="width: 50%;" />
                          </p>
                      </div>







                   
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      
                    </div>
                 </div> 
                </div> 
            </div>
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </form>
    @endsection

                         
              