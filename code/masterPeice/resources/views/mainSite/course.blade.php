@extends('../mainSite/index2')
@section('content')
		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR COURSES</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Our Courses</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Courses Start -->
        <div id="rs-courses-3" class="rs-courses-3 sec-spacer">
			<div class="container">
				<div class="abt-title">
				    <h2>OUR COURSES</h2>
				</div>
                <div class="gridFilter">
                    <button class="active" data-filter="*">ALL</button>
					@foreach ($cats as $cat )
                    <button data-filter=".{{$cat['id']}}">{{$cat->cat_name}}</button>
                    @endforeach
                </div>
				<div class="row grid">
					@foreach($courses as $course)
					<div class="col-lg-4 col-md-6 grid-item {{$course['cat_id']}}">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img style="height: 270px ; width: 370px;" src="images/{{$course['course_img']}}" alt="" />
		                        <span class="course-value">{{$course['course_price']}} $</span>
		                        <div class="course-toolbar">
								@foreach ($cats as $cat)
									@if($course->cat_id == $cat->id)
		                    		<h4 class="course-category"><a href="#">{{$course['course_name']}}</a></h4>
									@endif	
								@endforeach
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h4 class="course-title"><a href="courses-details.html"><small>Course details | </small></a></h4>
		                    		<p>
		                    			{{$course['course_desc']}}
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> teacher name
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="{{'singelcourse/'. $course->id}}" >MORE DETAILS</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
					@endforeach
			    </div>
			    <nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a></li>
						<li class="page-item"><a class="page-link active" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link dotted" href="#">...</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">6</a></li>
						<li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
					</ul>
			    </nav>
			</div>
        </div>
        <!-- Courses End -->
				
        <!-- Partner Start -->
        <!-- <div id="rs-partner" class="rs-partner pt-70 pb-170 sec-color">
            <div class="container">
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <a href="#"><img src="main/images/partner/1.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="main/images/partner/2.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="main/images/partner/3.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="main/images/partner/4.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="main/images/partner/5.png" alt="Partner Image"></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Partner End -->
       
@endsection