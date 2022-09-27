@extends('student.studentdashboard')
@section('student')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    <!-- Default box -->
    <form method="post" action="{{route('vote.casting')}}" enctype="multipart/form-data">
      @csrf
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row">
         

           @foreach ($presidents as  $president )
            
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
               <strong><span>CONTESTING FOR:</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong><span style="color:Blue">{{$president->position}}</span></strong>
              </div>


              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{$president->name}}</b></h2>
                    <p class="text-muted text-sm"><strong>POST ID: </strong> <strong style="color:Blue">{{$president->post_ID}}</strong> </p>
                    <p class="text-muted text-sm"><strong>NOMINEE ID: </strong> <strong style="color:#ff7b00">{{$president->nominee_ID}}</strong> </p>
         
                  </div>
                  <div class="col-5 text-center">
                    
                    <img src="{{ (!empty($president->profile_photo_path))?  url('upload/nominee_photos/'.$president->profile_photo_path):url('upload/default.png')}}" 
                    class="profile-user-img img-fluid img-circle" style="width: 100px; height:90px">
                   
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="president" value="{{$president->id}}" >
                    <label class="form-check-label">Vote</label>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach 
          <!-- WE END FOR EACH HERE COS WE WANT THE DISPLAY TO BE IN ROWS --> <!--end for each here to see the view -->

          @foreach ($welfares as  $welfare )
            
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
               <strong><span>CONTESTING FOR:</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong><span style="color:Blue">{{$welfare->position}}</span></strong>
              </div>


              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{$welfare->name}}</b></h2>
                    <p class="text-muted text-sm"><strong>POST ID: </strong> <strong style="color:Blue">{{$welfare->post_ID}}</strong> </p>
                    <p class="text-muted text-sm"><strong>NOMINEE ID: </strong> <strong style="color:#ff7b00">{{$welfare->nominee_ID}}</strong> </p>
         
                  </div>
                  <div class="col-5 text-center">
                    <img src="{{ (!empty($welfare->profile_photo_path))?  url('upload/nominee_photos/'.$welfare->profile_photo_path):url('upload/default.png')}}" 
                    class="profile-user-img img-fluid img-circle" style="width: 100px; height:90px">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="welfare"  value="{{$welfare->id}}">
                    <label class="form-check-label">vote</label>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach



          @foreach ($secretaries as  $secretary )
            
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
               <strong><span>CONTESTING FOR:</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong><span style="color:Blue">{{$secretary->position}}</span></strong>
              </div>


              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{$secretary->name}}</b></h2>
                    <p class="text-muted text-sm"><strong>POST ID: </strong> <strong style="color:Blue">{{$secretary->post_ID}}</strong> </p>
                    <p class="text-muted text-sm"><strong>NOMINEE ID: </strong> <strong style="color:#ff7b00">{{$secretary->nominee_ID}}</strong> </p>
         
                  </div>
                  <div class="col-5 text-center">
                    <img src="{{ (!empty($secretary->profile_photo_path))?  url('upload/nominee_photos/'.$secretary->profile_photo_path):url('upload/default.png')}}" 
                    class="profile-user-img img-fluid img-circle" style="width: 100px; height:90px">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="secretary" value="{{$secretary->id}}">
                    <label class="form-check-label">vote</label>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach


         






        </div>
      </div>


         
        </div>
        <div class="col-8">
          <button type="reset" class="btn btn-danger"><strong>RESET-VOTES</strong></button>&nbsp;&nbsp;&nbsp; <button type="Submit" class="btn btn-primary"><strong>CAST-VOTES</strong></button>
        </div>
      </div>


      <hr>

     
      <hr>
     

      <!-- /.card-body -->
      <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
          <ul class="pagination justify-content-center m-0">
            {{$presidents->links()}}
          </form>
          </ul>
        </nav>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->




@endsection
