@extends('layouts.home')

@section('content')

<div class="bradcam_area breadcam_bg">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="bradcam_text">
                      <h3>UPDATE PROFILE</h3>
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
                            <h3>UPDATE YOUR PROFILE HERE!!</h3>
                            <form action="#">
                                <div class="row">
                                   
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" name="Firstname" placeholder="First Name" >
                                        </div>
                                    </div>
                                       
                                       
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" name="lastname" placeholder="Last Name" >
                                        </div>
                                    </div>
                                    
                                    
                                   
                                     
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="tourid" placeholder="Your ID" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="yourocupation" placeholder="Your Ocupation" >
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="departmentname" placeholder="Department name" >
                                        </div>
                                    </div>
                                       
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" Name="emailid" placeholder="Your email ID" >
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