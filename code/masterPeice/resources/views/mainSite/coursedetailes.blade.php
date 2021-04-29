@extends('../mainSite/index2')
@section('content')

        <!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Business Management</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Business Management</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
        
		<!-- Courses Details Start -->
        <div class="rs-courses-details pt-100 pb-70">
            <div class="container">
                @if( session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
        @elseif(session()->has('fail'))
        <div class="alert alert-danger">{{ session()->get('fail') }}</div>
    @endif
                <div class="row mb-30">
                    <div class="col-lg-8 col-md-12">
                	    <div class="detail-img">
                	        <img src="/images/{{$course['course_img']}}" style="width: 730px !important;height: 350px !important;"  alt="Courses Images" />
                	        <div class="course-seats" style="bottom: 10px !important; right:10px !important; width: 60px !important;height: 60px !important; font-size: 20px !important;">
                	        	{{$course['course_price']}}$
                	        </div>
                	    </div>
                	    <div class="course-content">
                	    	
                	    	<div class="course-instructor">
                	    		<div class="row">
                	    			<div class="col-md-6 mobile-mb-20">
                	    				<h3 class="instructor-title">COURSE <span class="primary-color">INSTRUCTOR</span></h3>
                	    				<div class="instructor-inner">
                	    					<div class="instructor-img">
                	    						<img src="/main/images/teachers/2.jpg" alt="Teachers Images" />
                	    					</div>
                	    					<div class="instructor-body">
                	    						<h3 class="name">Garade Pickey Moon</h3>
                	    						<span class="designation">English Professor</span>
                	    						
                	    					</div>
                	    				</div>
                	    				<div class="short-desc">
                	    					<p>There are many variations of passages of Lorem Ipsum available</p>
                	    				</div>
                	    			</div>
                	    			<div class="col-md-6">
                                        <div class="row info-list">
                                            <div class="col-md-4">
                                                <ul>
                                                    
                                                    
                                                </ul>
                	    					</div>
                	    					<div class="col-md-8">
                                                <h3 class="instructor-title">BASIC <span class="primary-color">INFORMATION</span></h3>
                                                <ul>
                	    							<li>
                	    								<span>Price :</span> $6589
                	    							</li>
                	    							<li>
                	    								<span>Lessons :</span> 12
                	    							</li>
                	    							
                	    							<li>
                	    								<span>Level :</span> Basic
                	    							</li>
                	    						</ul>
                	    					</div>
                	    				</div>
                                        <div class="apply-btn col-md-8">
                                            <a href="{{ route('cart.add',$course)}}">Buy This Course</a>
                                        </div>
                	    			</div>
                	    		</div>
                	    	</div>
                	    </div>
                	    <div class="course-desc">
                	    	<h3 class="desc-title">Course Description</h3>
                	    	<div class="desc-text">
                	    		<p>
                                    {{$course['course_desc']}}
                	    		</p>
                	    		
                	    	</div>
                            <div class="course-syllabus">
                                <h3 class="desc-title">Course Syllabus</h3>
                                <div id="accordion" class="rs-accordion-style1">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong>Lessons 1 </strong>
                                                <!-- <span>Computer Science And Engineering</span> -->
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>Lessons 2 </strong>
                                            <!-- <span>Business Management</span> -->
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header mb-0" id="headingThree">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>Lessons 3 </strong>
                                                <!-- <span>Civil Engineering</span> -->
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          

                	    </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-area">
                            
                            <div class="cate-box">
                                <h3 class="title">Courses Categories</h3>
                                <ul>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Analysis & Features <span>(05)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Video Reviews <span>(07)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Engineering Tech <span>(09)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#"> Righteous Indignation <span>(08)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">General Education <span>(04)</span></a>
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="container pt-100">    
                <!-- Testimonial Start -->
                <div class="related-courses rs-courses-3">
                	<div class="sec-title-2 mb-50">
                	    <h2>RELATED COURSES</h2>      
                		<p>Considering primary motivation for the generation of narratives is a useful concept</p>
                	</div>
                	<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1500" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-ipad-device="2" data-ipad-device-nav="true" data-md-device="3" data-md-device-nav="true">
                        <div class="course-item">
                            <div class="course-img">
                                <img src="images/courses/10.jpg" alt="" />
                                <span class="course-value">$450</span>
                                <div class="course-toolbar">
                            		<h4 class="course-category"><a href="#">Science</a></h4>
                                	<div class="course-date">
                                		<i class="fa fa-calendar"></i> 28-06-2017
                                	</div>
                                	<div class="course-duration">
                                		<i class="fa fa-clock-o"></i> 4 year
                                	</div>
                                </div>
                            </div>
                            <div class="course-body">
                            	<div class="course-desc">
                            		<h4 class="course-title"><a href="courses-details.html">Computer Engineering</a></h4>
                            		<p>
                            			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                            			Nullam augue augue.
                            		</p>
                            	</div>
                            </div>
                            <div class="course-footer">
                            	<div class="course-seats">
                            		<i class="fa fa-users"></i> 70 SEATS
                            	</div>
                            	<div class="course-button">
                            		<a href="#">APPLY NOW</a>
                            	</div>
                            </div>
                        </div>						
                        <div class="course-item">
                            <div class="course-img">
                                <img src="images/courses/11.jpg" alt="" />
                                <span class="course-value">$450</span>
                                <div class="course-toolbar">
                            		<h4 class="course-category"><a href="#">Business</a></h4>
                                	<div class="course-date">
                                		<i class="fa fa-calendar"></i> 28-06-2017
                                	</div>
                                	<div class="course-duration">
                                		<i class="fa fa-clock-o"></i> 4 year
                                	</div>
                                </div>
                            </div>
                            <div class="course-body">
                            	<div class="course-desc">
                            		<h3 class="course-title"><a href="#">Business Management</a></h3>
                            		<p>
                            			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                            			Nullam augue augue.
                            		</p>
                            	</div>
                            </div>
                            <div class="course-footer">
                            	<div class="course-seats">
                            		<i class="fa fa-users"></i> 70 SEATS
                            	</div>
                            	<div class="course-button">
                            		<a href="#">APPLY NOW</a>
                            	</div>
                            </div>
                        </div>						
                        <div class="course-item">
                            <div class="course-img">
                                <img src="images/courses/13.jpg" alt="" />
                                <span class="course-value">$450</span>
                                <div class="course-toolbar">
                            		<h4 class="course-category"><a href="#">Diploma</a></h4>
                                	<div class="course-date">
                                		<i class="fa fa-calendar"></i> 28-06-2017
                                	</div>
                                	<div class="course-duration">
                                		<i class="fa fa-clock-o"></i> 4 year
                                	</div>
                                </div>
                            </div>
                            <div class="course-body">
                            	<div class="course-desc">
                            		<h3 class="course-title"><a href="#">Diploma Electrical</a></h3>
                            		<p>
                            			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
                            			Nullam augue augue.
                            		</p>
                            	</div>
                            </div>
                            <div class="course-footer">
                            	<div class="course-seats">
                            		<i class="fa fa-users"></i> 70 SEATS
                            	</div>
                            	<div class="course-button">
                            		<a href="#">APPLY NOW</a>
                            	</div>
                            </div>
                        </div>					
                	</div>               	
                </div>
            </div>
        </div>
        <!-- Courses Details End -->
        @endsection
        