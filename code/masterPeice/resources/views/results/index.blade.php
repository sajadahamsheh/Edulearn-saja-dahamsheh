@extends('../mainSite/index2')

@section('content')
    
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">profile</h1>
                        <ul>
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li>profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Team Single Start -->
    <div class="rs-team-single pt-100">
        <div class="container">
            <div class="row team">
            
                <div class="col-lg-6 col-md-12">
                    <div class="team-photo mobile-mb-40" style="margin-top: 50px !important;">
               
                    <h3 class="team-name">{{ auth::user()->name}}' profile </h3>
                   
                    <p class="team-contact">
                        <i class="fa fa-mobile"></i> (+088) 2957 439 <i class="ml-15 fa fa-envelope-o"></i> ({{ auth::user()->email}})
                    </p>
                       
                    </div>
                </div>
            
                <div class="col-lg-6 col-md-12">
                
                    <div class="panel panel-default">
    
                        <div class="panel-body">
                            <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }}">
                                <thead>
                                    <tr>
                                        
                                        <th>Result</th>
                                        <th> Test Details</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if (count($results) > 0)
                                        @foreach ($results as $result)
                                       
                                        @if( Auth::id() ==$result['user_id'])
                                            <tr>
                                                
                                                
                                                <td>{{ $result->result }}/10</td>
                                                <td>
                                                    <a href="{{ route('results.show',[$result->id]) }}" class="btn btn-xs btn-primary">more details</a>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6">you did not take any exam yet</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Single End -->

    <!-- Team Start -->
    <div id="rs-team-2" class="rs-team-2 pt-70 pb-70">
        <div class="container">
            <div class="sec-title-2 mb-50">
                <h2>REALATED TEACHERS</h2>      
                <p>Fusce sem dolor, interdum in fficitur at, faucibus nec lorem.</p>
            </div>
            <div class="row">
                @foreach ($saja as $order)
                @foreach ($order as $orders)
              
                
              
                 
                    @foreach ($courses as $course) 
                    @if(($orders['course_id'])==$course['id'])
                 

                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <a href="#"><img style="width: 270px;height: 270px;"  src="images/{{$course['course_img']}}" alt="" /></a>
                                <div class="social-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="team-body">
                                <h3 class="name">{{$orders['order_details']}}</h3>
                                <span class="designation"><a href="">Enrol now</a></span>
                            </div>
                        </div>						
                    </div>
                    @endif
                    @endforeach
                    
                    @endforeach
                    @endforeach
                    
                
              
                
            </div>
        </div>
    </div>
    <!-- Team End -->
@stop

<!-- /////////////////////////////////////////// -->



    