@extends('student.studentdashboard')
@section('student')


<br>
<div class="bg-grey py-7 px-3 mt-0">
    <h1 class="mt-3 text-center">
        
      <strong>Congratulations On Voting</strong>
    </h1>

    <h4 class="mt-3 text-center">
        
      <strong style="color:chocolate">{{Auth::user()->name}}</strong>
    </h4>
    <h5 class="mt-3 text-center">
        
      <strong style="color:blue">{{Auth::user()->email}}</strong>
    </h5>
    <h4 class="mt-3 text-center">
      <small style="color:purple"><strong>Kindly note that your election votes have been succesfully recorded, and results would be annouced as soon as possible.!!</strong> </small>
    </h4>
  </div>

  <div class="mt-4">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
  
    
    
  
    <a href="{{route('user.logout')}}"><div class="btn btn-danger align-center btn-lg btn-flat">
     
      student.resultsview
         
        <strong> Click here to Logout. </strong>
    </div></a>&nbsp;&nbsp;&nbsp;&nbsp;

    
    <a href="{{route('student.resultsview')}}"><div class="btn btn-primary align-center btn-lg btn-flat">
     
        
         
      <strong> Click here to view Results. </strong>
  </div></a>&nbsp;&nbsp;&nbsp;&nbsp;

   
  <a href="{{route('votestats.student')}}"><div class="btn btn-success align-center btn-lg btn-flat">
     
        
         
    <strong> Current Election Statistics. </strong>
</div></a></div>





    
    @endsection