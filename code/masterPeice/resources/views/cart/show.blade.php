@extends('../mainSite/index2')
@section('content')
   		<!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Cart</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Cart</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div><!-- .breadcrumbs-inner end -->
		</div>
		<!-- Breadcrumbs End -->

        <!-- Cart Page Start Here -->
        <div class="shipping-area sec-spacer mb-5">
			<div class="container">
				<div class="tab-content">
                    @if($cart)
				    <div class="tab-pane active" id="checkout">
                        <div >
				            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div >
                                    <table class="table" style="border: 1px solid #e4e0e0 !important;">
										<thead>
											<tr > 
												<th >#</th>
												<th>course image</th>
												<th>course name</th>
												<th>course price</th>
												<th>corse discount</th>
												<th>remove course</th>
											</tr>
											
										  </thead>
										  @foreach( $cart->items as $course)
										  <tbody class="m-t-5" >

										<tr >
											<td>
											1
											</td>
											<td><img src="images/{{$course['course_img']}}" style="width: 80px !important; height: 95px !important;" alt=""/></td>
											<td>
												<div class="des-pro">
													<p>{{$course['course_name']}}</p>
												</div>
											</td>
											<td><span class="prize" style="color: #ff3115 !important; ;">${{$course['course_price']}}</span></td>  
											<td><strong>{{$course['course_discount']}} %</strong></td>
											<td>
												<form action="{{ route('courses.remove', $course['course_id'] )}}" method="post">
														@csrf
														@method('delete')
														
														<button type="submit" class='btn btn-danger next-step' style="border-radius: 0% !important; background-color: #ff3115 !important; border: 1px solid #ff3115;"  >Remove</i></button>
														

												</form>
											</td>
											
										</tbody>
										</tr>
									
                                        @endforeach
									</table>							   
								</div><!-- .product-list end -->
							</div>
						</div>
                        <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="order-list">
                                    
                                </div><!-- .order-list end -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="checkout-price order-list">
                                    <h3>Your Order</h3>
                                    <table>
                                        <tr>
                                            <td><b>Product</b></td>
                                            <td><b>Total</b></td>
                                        </tr>
                                        <tr class="row-bold">
                                            <td>Total Quantities</td>
                                            <td>{{$cart->totalQty}}</td>
                                        </tr>
                                        <tr class="row-bold">
                                            <td>Total Amount</td>
                                            <td>${{$cart->totalPrice}}</td>
                                            
                                        </tr>
                                    </table>
                                    <div class="next-step">
                                        <a href="{{ route('cart.checkout', $cart->totalPrice)}}">Proceeed to Checkout</a>
                                    </div>
                                </div><!-- .checkout-price end -->
                            </div>  
                        </div>
					</div>  
                    @else
                        <p>There are no items in the cart</p>

                    @endif                               
				</div>
			</div>
		</div>
        <!-- Cart Page End Here  -->


@endsection

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

