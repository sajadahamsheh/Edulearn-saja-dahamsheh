@extends('../mainSite/index2')

@section('style')
<style>
            .redbtn{
                background-color: #ff3115 !important;
                color: white !important;
                border-radius:0 !important ;
                border: none !important;
                padding: 10px 15px !important  ;
                
            }
            .redbtn:hover{
                background-color: #e41f05 !important;
                color: rgba(255, 255, 255, 0.7) !important;
                box-shadow: 0 10px 20px rgb(255 255 255 / 4%) !important;

            }
</style>
@endsection
@section('content')
		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR tests</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Our tests</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Courses Start -->
         <div id="rs-learning-objectives" class="rs-learning-objectives pt-100 pb-70 mb-5">
            <div class="container">
                <div class="sec-title mb-50">
                    <h2>TESTS TOPICS</h2>
                    <p>I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                </div>
                    <div class="row">
                       @foreach ($topics as $topic)
                        <div class="col-lg-4 col-md-6">
                            <div class="courses-item">
                                <i class="glyph-icon flaticon-book"></i>
                                <h4 class="courses-title"><a href="#">{{$topic['title']}}</a></h4>
                                <p>At vero eos et accusamus et iusto odiodignissimos laborumducimus qui blanditiis voluptatum dolor sit</p>
                                <a class='redbtn'  href="tests/{{$topic['id']}}">Take the exam now</a>
                            </div>
                        </div>
						@endforeach
                      
                    </div>
                </div>
         </div>
        <!-- Courses End -->
				
      
       
@endsection