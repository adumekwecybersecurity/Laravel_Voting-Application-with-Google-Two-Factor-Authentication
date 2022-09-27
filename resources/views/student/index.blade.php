@extends('student.studentdashboard')
@section('student')


      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             
            
         
   
          </div><!-- /.col -->
          <div class="col-sm-6"> 
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active "><a href="#" ><strong>{{Auth::user()->email}}</a></strong></li>
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->


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

   
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
      <div class="card-header">
        <h1 class="card-title " style="color: blue"><strong><h2 class=" text-center"><strong>Daily Annoucements</strong></h2> </strong></h1>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
           

            <div class="input-group-append">
              
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              
              <th>Status of Information</th>
              <th>Date of Information</th>
              <th>Department of Information</th>
              <th>Information</th>
              <th>Due Date</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>134</td>
              <td>Jim Doe</td>
              <td>11-7-2014</td>
              
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
         
           
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
            <!-- /.card -->
            
            
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
           
              <!-- /.card-body -->
                </div>
            
             
                <!-- /.d-flex -->
                
                <!-- /.d-flex -->
              
                <!-- /.d-flex -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>

    <!-- /.content -->
    @endsection