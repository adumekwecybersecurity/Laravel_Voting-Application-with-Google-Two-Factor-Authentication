@extends('staff.staffdashboard')
@section('staff')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                </div>
               

              <form method="post" action="{{route('info.submit.announcement')}}">
                @csrf
      
                  <div class="card card-info" >
                    <div class="card-header" >
                      <h3 class="card-title" ><strong style="text-align: center">Enter Announcement Here.</strong></h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                      
                        <div class="col-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-info-circle"></i></span><input type="text" class="form-control" placeholder="Enter info status e.g 'urgent' " name="status_ID" required>
                          </div>
                          
                        </div>

                         <div class="col-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            <input type="date" class="form-control" placeholder="Date of Birth" name="due_DATE" required>
                          </div></div>

                       

                          



                          <div class="col-5">
                          
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-school"></i></span>
                              <select class="custom-select rounded-0" id="select" name="Dept" required>
                                <option value="" selected="" disabled="">Select Department</option>
                                <option value="Election-Committee">Staff and Administration Department</option> 
                                <option value="Public Relation Committee">Department of Public Relation.</option> 
                                <option value="Computer Science">Foundation in Computer Science</option> 
                                <option value="Information Technology">Foundation in Information Technology</option> 
                                <option value="Accounting">Foundation in Accounting</option> 
                                <option value="Business Administration">Foundation in Business Administration</option> 
                                <option value="JAKIM-UNITEN Tahfiz Al-Quran Certification">JAKIM-UNITEN Tahfiz Al-Quran Certification in Engineering / Computer Science / Accounting</option>
                                <option value="Mechanical Engineering">Diploma in Mechanical Engineering</option> 
                                <option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option> 
                                <option value="Diploma in Computer Science">Diploma in Computer Science</option> 
                                <option value="Diploma of Accountancy">Diploma of Accountancy</option> 
                                <option value="Diploma in Business Studies">Diploma in Business Studies</option> 
                                <option value="Diploma in Corporate Management with Tahfiz">Diploma in Corporate Management with Tahfiz</option> 
                                <option value="Bachelor of Electrical and Electronics Engineering">Bachelor of Electrical and Electronics Engineering (Hons)</option> 
                                <option value="Bachelor of Electrical Power Engineering">Bachelor of Electrical Power Engineering (Hons)</option> 
                                <option value="Bachelor of Mechanical Engineering">Bachelor of Mechanical Engineering (Hons)</option> 
                                <option value="Bachelor of Civil Engineering">Bachelor of Civil Engineering (Hons)</option> 
                                <option value="Bachelor of Computer Science (Systems and Networking)">Bachelor of Computer Science (Systems and Networking) (Hons)</option> 
                                <option value="Bachelor of Computer Science (Software Engineering) (Hons)">Bachelor of Computer Science (Software Engineering) (Hons)</option> 
                                <option value="Bachelor of Computer Science (Cyber Security) (Hons)">Bachelor of Computer Science (Cyber Security) (Hons)</option> 
                                <option value="Bachelor of Information Technology (Information Systems) (Hons)">Bachelor of Information Technology (Information Systems) (Hons)</option> 
                                <option value="Bachelor of Information Technology (Visual Media) (Hons)">Bachelor of Information Technology (Visual Media) (Hons)</option> 
                                <option value="Bachelor of Information Technology (Graphics & M/media) (Hons)">Bachelor of Information Technology (Graphics & M/media) (Hons)</option> 
                                <option value="Bachelor of Economics (Energy) (Hons)">Bachelor of Economics (Energy) (Hons)</option> 
                                <option value="Bachelor of Business Economics (Hons)">Bachelor of Business Economics (Hons)</option> 
                                <option value="Bachelor of Accounting (Hons)">Bachelor of Accounting (Hons)</option> 
                                <option value="Bachelor of Finance (Hons)">Bachelor of Finance (Hons)</option> 
                                <option value="Bachelor of International Business (Hons)">Bachelor of International Business (Hons)</option> 
                                <option value="Bachelor of Business Administration (Hons) in Marketing">Bachelor of Business Administration (Hons) in Marketing</option> 
                                <option value="Bachelor of Business Administration (Hons) in Human Resource Managemen">Bachelor of Business Administration (Hons) in Human Resource Management</option> 
                                <option value="Bachelor of Business Administration (Hons) in Entrepreneurship & Venture Management">Bachelor of Business Administration (Hons) in Entrepreneurship & Venture Management</option> 
                                <option value="Master of Electrical Engineering">Master of Electrical Engineering</option> 
                                <option value="Master of Mechanical Engineering">Master of Mechanical Engineering</option> 
                                <option value="Master of Civil Engineering">Master of Civil Engineering</option> 
                                <option value="Master of Industrial Science">Master of Industrial Science</option> 
                                <option value="Master of Information Technology">Master of Information Technology</option> 
                                <option value="Master of Science in Accounting">Master of Science in Accounting</option> 
                                <option value="Master of Science in Finance">Master of Science in Finance</option> 
                                <option value="Master of Science in Management">Master of Science in Management</option> 
                                <option value="Master of Electrical Engineering">Master of Electrical Engineering</option> 
                                <option value="Master of Information Technology">Master of Information Technology</option> 
                                <option value="Master of Business Administration">Master of Business Administration</option> 
                                <option value="Master of Engineering Management">Master of Engineering Management</option> 
                                <option value="Master of Structural Engineering">Master of Structural Engineering</option> 
                                <option value="Master of Energy Management">Master of Energy Management</option> 
                                <option value="PhD in Engineering">PhD in Engineering</option> 
                                <option value="PhD in Industrial Science">PhD in Industrial Science</option> 
                                <option value="PhD in Information and Communication Technology">PhD in Information and Communication Technology</option> 
                                <option value="PhD in Business Management">PhD in Business Management</option> 

                          </select>
                          </div> </div>

                         


                          <div class="col-sm-6">
                            <br>
                            <div class="input-group-prepend">
                              <textarea class="form-control" rows="4" placeholder="Enter Nominee Mandate (e.g I will ensure the safety of Uniten-Students.)" style="resize:none" name="Information"></textarea>
                          </div></div>
                        </div>



                          <br>
                          <div class="col-5">
                            <button type="reset" class="btn btn-danger"><strong>Cancel-Reset</strong></button>&nbsp;&nbsp;&nbsp; <button type="Submit" class="btn btn-primary"><strong>Add-Information</strong></button>
                          </div> </div>
                            
                          

                          
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                 
                  
                        
                        </div>
                      
                    </div>
                    <!-- /.card-body -->
                  </div>
                  
                        </div>
      
                        
                        <div class="form-group">
                        </div>
                      
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!--/.col (right) -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </form>
  </section>
  @endsection


                                       