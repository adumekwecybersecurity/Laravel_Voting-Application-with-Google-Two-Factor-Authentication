@extends('staff.staffdashboard')
@section('staff')


  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('staff.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('staff.dashboard')}}"></i>&nbsp;&nbsp;Logged in As: <strong>( {{Auth::guard('staff')->user()->name}} )</a></li>
            <!-- fix code back here later -->
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

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

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
            <div class="info-box-content">
              <span class="info-box-text" style="color: rgba(12, 219, 122, 0.861)">Component-01</span>
              <span class="info-box-number"></a>
               <small> Kindly Click 'component-01' to add.</small>
            </div>
            <!-- /.info-box-content -->
          </div>

          
          






          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-rss"></i></span>

            <div class="info-box-content">
              <a href="{{route('infoaddform')}}"><span class="info-box-text" style="color: rgb(35, 169, 241)">Add Announcement</span></a>
              <span class="info-box-number"></a>
               <small> Kindly Click 'announcemet' to add.</small>
              </span>
            </div>
            
             
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-envelope"></i></span>

            <div class="info-box-content">
              <a href="{{route('staff.resultaddform')}}"><span class="info-box-text" style="color: rgba(231, 137, 24, 0.943)">Add Election Results</span></a>
              <span class="info-box-number"></a>
               <small> Kindly Click 'Add-Results.'</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <a href="{{route('staff.resultsview')}}"><span class="info-box-text" style="color: rgba(243, 42, 109, 0.845)">View Election Results</span></a>
              <span class="info-box-number"></a>
               <small> Kindly Click 'View-Results.'</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

<br><br>
      <div class="card">
        <div class="card-header">
          <h1 class="card-title " style="color: #262d26ac"><strong><h2 class=" text-center"><strong>Daily Annoucements</strong></h2> </strong></h1>
  
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
             
  
              <div class="input-group-append">
                
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px; color: #0a679cc9">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Status of Information</th>
                <th>Date of Information</th>
                <th>Department of Information</th>
                <th>Information</th>
                <th>Due Date</th>
              </tr>
            </thead>
            <tbody>
           
              <tr style="color: #131414c9">
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
              </tr>
              
             
            </tbody>
          </table>
        </div>
                
             

      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          
                <!-- /.info-box-content -->
              </div>
    
              
              
    
    
    
    
    
    
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
           
            <!-- /.col -->
    
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
    
           
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>

      <!-- /.row -->
      <!-- /.card -->
         
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->
               
                                        
                        
            <!-- /.card -->


      
              <!--/.card -->
       
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
    <!-- /.content -->
    @endsection