@extends('layouts.header')

{{--This is product -detail page--}}
@section('body')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							{{--  <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#bags1">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Bags
										</a>
									</h4>
								</div>
								<div id="bags1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
										<li><a href="{{url('shop/laptop_bags')}}">Laptopbags </a></li>
											<li><a href="">Leatherbag </a></li>
											<li><a href="">handbag </a></li>
											<li><a href="">Purse</a></li>
											{{--  <li><a href="">ASICS </a></li>  
										</ul>
									</div>
								</div>
							</div>
							
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mats">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mats
										</a>
									</h4>
								</div>
								<div id="mats" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Yoga Mats</a></li>
											<li><a href="">Door Mats</a></li>
											<li><a href="">Floor Mats</a></li>
											<li><a href="">Blankets</a></li>
											{{--  <li><a href="">Versace</a></li>  
										</ul>
									</div>
								</div>
							</div>    --}}
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{url('shop/bags')}}">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{url('shop/mats')}}">Mats</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{url('shop/toys')}}">Toys</a></h4>
								</div>
							</div>
						
						</div><!--/category-products-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product zoom" >
							<img src="{{asset('images/product-details/'.$details[0]->images)}}" alt="" />
								{{--  <h3>ZOOM</h3>  --}}
							</div>
							{{--  <div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    {{-- <div class="carousel-inner">
										<div class="item active">
												<a href=""><img src="{{asset('images/product_details/'.$details[0]->images)}}" alt=""></a>
												<a href=""><img src="{{asset('images/product_details/'.$details[0]->images)}}" alt=""></a>
												<a href=""><img src="{{asset('images/product_details/'.$details[0]->images)}}" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div> --}}

								  <!-- Controls -->
								  {{--  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>  --}} 

						</div>
				
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								{{--  <img src="images/product-details/new.jpg" class="newarrival" alt="" />  --}}
								<h2>{{$details[0]->item_name}}</h2>
								{{--  <p></p>  --}}
								<img src="images/product-details/{{$details[0]->images}}" alt="" />
								<span>
								<span>Rs. {{$details[0]->price}}</span>
									<label>Quantity:</label>
									<input type="number" value="1" />
									@if(!empty(session('email')))
									<button type="button" class="btn btn-fefault cart" id=" {{$details[0]->item_id}}">
											<a href="{{url ('/addToCart/'. $details[0]->item_id) }}" style="color:#ffffff"><i class="fa fa-shopping-cart" style="color:#ffffff"></i>Add to Cart</a></li>
									</button>
									@else
									<button type="button" class="btn btn-fefault cart" id=" {{$details[0]->item_id}}">
											<a href="{{url ('/cart') }}" style="color:#ffffff"><i class="fa fa-shopping-cart" style="color:#ffffff"></i>Add to Cart</a></li>
									</button>
                                     @endif
								</span>
								<p><b>Availability:</b>
								@if($details[0]->is_stock==0)
								Not in Stock
								@else
								In Stock
								@endif
								</p>
								<p><b>Category :</b>{{$details[0]->category}}</p>  
							</div>
						</div>	
					</div><!--/product-details-->
				     
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"  ><a  href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">NGO Profile</a></li>
								{{--  <li><a href="#tag" data-toggle="tab">Tag</a></li>  --}}
								<li class=""><a href="#reviews" data-toggle="tab">Reviews ({{count($review)}})</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" style="margin-left:5px" >
								<p>{{$details[0]->description}}</p>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<div class="col-sm-3">
								</div>	
							</div>
							<div class="tab-pane fade " id="reviews" >
								@if(!count($review)==0)
								@foreach($review as $review)
								<div class="col-sm-12">
									<ul>
									<li><a href=""><i class="fa fa-user"></i>{{$review->name}}</a></li>
										{{--  <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>  --}}
									<li><a href=""><i class="fa fa-calendar-o"></i>{{$review->date}}</a></li>
									</ul>
								<p>{{$review->review_name}}</p>
									<p><b>Write Your Review</b></p>
									@endforeach
									<form action="ProductDetails@review">
										<span>
											<input type="text" placeholder="Your Name"/>
											{{--  <input type="email" placeholder="Email Address"/>  --}}
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<input type="button" class="btn btn-default" value="Submit" href="/">
											{{-- <a class="btn btn-default" href="ProductDetails@review">Submit</a> --}}
										{{-- </button> --}}
									</form>
								</div>
								@else
								<p>Be the first one to Review </p><br>
								<p><b>Write Your Review</b></p>
									
									<form action="ProductDetails@review">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b >Rating: </b> <br>
										<fieldset class="rating">
										 <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
										<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
										<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
										<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
										<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
										</fieldset>
										<a type="button" class="btn btn-default pull-right" href="/">
										Submit
										</a>
									</form>
								@endif

							</div>
							
						</div>
					</div><!--/category-tab-->
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
					  
					  
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									@foreach($query1 as $q)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												
												<div class="productinfo text-center">
													<img src="../images/Products/{{$q->images}}" alt="" width="10px" style="padding:10%"/>
													<h2>Rs.{{$q->price}}</h2>
													<p>{{$q->item_name}}</p>
													<a  href="{{url('product-details', [$q->item_id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping"></i>See details</a>												</div>
											</div>
										</div>
									</div>
									@endforeach

								</div>
							</div>
							
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
@stop
{{-- </body>
</html> --}}