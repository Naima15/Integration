@extends('layouts.home')

@section('content')

<!-- bradcam_area_start  -->
  <div class="bradcam_area breadcam_bg">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="bradcam_text">
                      <h3>MY PROFILE</h3>
                  </div>
              </div>
          </div>


          <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                       
                        <h5 class="anu"><a href="{{ URL::to('/userdashboard') }}">Personal Dashboard</a></h5>
                    </div>
                </div>
            </div>

      </div>
  </div>
  <!-- bradcam_area_end  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 posts-list">
               
               
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="{{asset('frontend/img/comment/anu.jpg')}}" alt="">
                     <div class="media-body">
                        <a href="/profile">
                           <h4>Hasnur Jahan</h4>
                        </a>
                        <p></p>
                     </div>
                  </div>
               </div>
             

            </div>
            <div class="col-lg-12">
               <div class="blog_right_sidebar">
               
              
                  <aside class="single_sidebar_widget post_category_widget">
                     
                     <ul class="list cat-list">
                        <li>
                           
                           <h4 class="widget_title">Your Name</h4>
                              <p>Hasnur Jahan</p>
                           
                        </li>
                         <li>
                           
                           <h4 class="widget_title">Your ID</h4>
                              <p>181-35-2297</p>
                           
                        </li>
                         <li>
                           
                           <h4 class="widget_title">Your Ocupation</h4>
                              <p>Student</p>
                           
                        </li>
                         <li>
                           
                           <h4 class="widget_title">University Name</h4>
                              <p>Daffodl International University</p>
                           
                        </li>
                        <li>
                           
                           <h4 class="widget_title">Department name</h4>
                              <p>Software Engineering</p>
                           
                        </li>
                         <li>
                           
                           <h4 class="widget_title">Your email ID</h4>
                              <p>hasnur35-2297@gmail.com</p>
                        </li>
                     </ul>
                  </aside>
               </div>
            </div>
         </div>
      </div>

       <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="/updateprofile" class="boxed-btn4">Update Profile</a>
                    </div>
                </div>
       </div>
       
       
   </section>
   
      
     
   @endsection