@extends('student.studentdashboard')
@section('student')

<br>
   <div class="container">
     @foreach($presidents as $presidents)
     <div class="card mb-3 mt-3">
       <div class="card-body">
        <strong> {{$presidents->name}} </strong><br>
         <span style="color: blue"><strong>Contesting for:</strong></span><strong style="color: coral">&nbsp;&nbsp;{{$presidents->position}}</strong>
         <br>
         <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width:{{($presidents->recent_Vote/20)*100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="20"><strong>{{($presidents->recent_Vote/20)*100}}%</strong></div>
        </div>
       </div>
     </div>

     @endforeach


     @foreach($secretaries as $secretaries)
     <div class="card mb-3 mt-3">
       <div class="card-body">
        <strong> {{$secretaries->name}} </strong><br>
         <span style="color: blue"><strong>Contesting for:</strong></span>&nbsp;&nbsp;<strong style="color: blueviolet">{{$secretaries->position}}</strong>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width:{{($secretaries->recent_Vote/500)*100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="500">{{($secretaries->recent_Vote/500)*100}}%</div>
        </div>
       </div>
     </div>

     @endforeach
   </div>
    

        

    @endsection