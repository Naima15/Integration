@extends('layouts.home')

@section('content')

<div class="bradcam_area breadcam_bg">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="bradcam_text">
                      <h3>ADD CIRCULAR</h3>
                  </div>
              </div>
          </div>
          
          <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                       
                        <h5 class="anu"><a href="/addcircular">ADD NEW CIRCULAR</a></h5>
                    </div>
                </div>
            </div>
          
      </div>
  </div>
  <!-- bradcam_area_end  -->

   <!--================Project Area =================-->
   
        
   
        
              <div class="admission_area">
        <div class="admission_inner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-12">
                        <div class="admission_form">
                            <h3>Give Circular Information Here!!</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" name="Circularpostname" placeholder="Circular Post Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="companyname" placeholder="Company Name" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <textarea cols="30" placeholder="Job Responsibilities" rows="20"></textarea>
                                        </div>
                                    </div>
                                    
                                     
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="workplace" placeholder="Workplace" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="educationalrequirement" placeholder="Educational Requirement" >
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="experiencerequirement" placeholder="Experience Requirement" >
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="additionalrequirement" placeholder="Additional Requirement" >
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="joblocation" placeholder="Job Location" >
                                        </div>
                                    </div>
                                       
                                       
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" Name="employmentstatus" placeholder="Employment Status" >
                                        </div>
                                    </div>
                                      
                                       <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" Name="salary" placeholder="Salary" >
                                        </div>
                                    </div>
                                     
                                       <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="number" name="vacancynumber" placeholder="Vacancy Number">
                                        </div>
                                    </div>  
                                       
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" Name="applicationdeadline" placeholder="Application Deadline" >
                                        </div>
                                    </div>
                                       
                                
                                       
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="compensation" placeholder="Compensation And Other Benefits" >
                                        </div>
                                    </div>
                                       
                                       
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="contactinformation" placeholder="Contact Information" >
                                        </div>
                                    </div>
                                       
                                       
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="link" placeholder="Link" >
                                        </div>
                                    </div>
                                    
                        
                                    <div class="col-md-12">
                                        <div class="apply_btn">
                                            <button class="boxed-btn3" type="submit">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection