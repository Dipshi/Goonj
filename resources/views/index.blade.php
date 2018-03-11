@extends('layouts.header')
@section('body') 
{{--  @section('slider')  --}}

	<div id="content slider">
		<div id="banner" >
		<div class="container slider-carousel">
			<div class="col-md-12">
				<div id="main-slider"  style="background-color: rgba(244, 244, 244, 0.885);" >
					
					<div class="item carousel-inner ">
							<div class="col-sm-6">
									<h1><span>Artifacts</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									{{-- <button type="button" class="btn btn-click" style="background-color:darkcyan">Get it now</button> --}}
								</div>
								<div class="col-sm-6">
									<img src="{{URL::to('images/home/flower.jpg') }}" class="girl img-responsive" alt="" />
									{{--  <img src="images/home/pricing.png"  class="pricing" alt="" />  --}}
								</div>
					</div>
					<div class="item carousel-inner" style="background-color: rgba(244, 244, 244, 0.885);" >
							<div class="col-sm-6">
									<h1><span>Toys</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									{{-- <button type="button" class="btn btn-click" style="background-color:darkcyan">Get it now</button> --}}
								</div>
								<div class="col-sm-6">
									<img src="{{URL::to('images/home/toy.jpg') }}"  class="girl img-responsive" alt="" />
									{{--  <img src="images/home/pricing.png"  class="pricing" alt="" />  --}}
								</div>					</div>
					<div class="item carousel-inner">
							<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									{{-- <button type="button" class="btn btn-click" style="background-color:darkcyan">Get it now</button> --}}
								</div>
								<div class="col-sm-6">
									<img src="{{URL::to('images/home/flower.jpg') }}"  class="girl img-responsive" alt="" />
									{{--  <img src="images/home/pricing.png"  class="pricing" alt="" />  --}}
								</div>	
					</div>
					<div class="item carousel-inner">
							<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									{{-- <button type="button" class="btn btn-click">Get it now</button> --}}
								</div>
								<div class="col-sm-6">
									<img src="{{URL::to('images/home/socks.jpg') }}"  class="girl img-responsive" alt="" />
									{{--  <img src="images/home/pricing.png"  class="pricing" alt="" />  --}}
								</div>
					</div>
				</div>
				<!-- /#main-slider -->
			</div>
		</div>
		</div>
	</div>
</div>
<div id="advantages">

		<div class="container">
			<div class="same-height-row">
				<div class="col-sm-4">
					<div class="box same-height clickable">
						<div class="icon"><i class="fa fa-heart"></i>
						</div>

						<h3><a href="#">We love our customers</a></h3>
						<p>We are known to provide best possible service ever</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="box same-height clickable">
						<div class="icon"><i class="fa fa-tags"></i>
						</div>

						<h3><a href="#">Best prices</a></h3>
						<p>You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="box same-height clickable">
						<div class="icon"><i class="fa fa-thumbs-up"></i>
						</div>

						<h3><a href="#">100% satisfaction guaranteed</a></h3>
						<p>Free returns on everything for 3 months.</p>
					</div>
				</div>
			</div>
			<!-- /.row -->

		</div>
		<!-- /.container -->

	</div>
</div>
		<section>
		<div class="container">
			<div class="row">
			
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach ($item as $item)
						<div class="col-sm-3" >
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
										<img style="height:200px" src="images/Products/{{$item->images}}" alt="" />
											<h2>RS. {{$item->price}}</h2>
										<p>{{$item->item_name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$item->price}}</h2>
												<p>{{$item->item_name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
							
							</div>
						</div>
						@endforeach
						
				</div>
			</div>
		</div>
	</section>
	
		<footer id="footer"><!--Footer-->  
		@yield('footer')
		</footer>
	@stop

	