@extends('layouts.header')
@section('body')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumb">
				<ol class="breadcrumb">
				  <li><a href="{{url ('/')}}">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
            @if(empty(session('email')))
				<div class="register-req">
					<p>Please Login</p>
				</div><!--/register-req-->
            @else
			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form method="post" action="url('checkout/update')}}">
									<input type="text" placeholder="Email*" value="{{$data[0]->email}}" disabled>
									<input type="text" placeholder="First Name *" name="name" value="{{$data[0]->first_name}}" disabled>
									<input type="text" placeholder="Last Name *" name="lname" value="{{$data[0]->last_name}}" disabled>
									<input type="text" placeholder="Address 1 *" name="add">
									<input type="text" placeholder="Mobile Phone" name="mobile">
								</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="Zip / Postal Code *">
									<select>
										<option>-- Country --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ukraine</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									<select>
										<option>-- State / Province / Region --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ukraine</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
							<label><input type="checkbox"> Shipping to bill address</label><br>
							<br>
							<a class="btn btn-primary" href="{{url('checkout/update')}}">Continue</a>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						{{-- <th class="cart_menu" >
							BILL:
						</th> --}}
						{{-- <h1 class="cart_menu" >Bill</h1> --}}
					</thead>
					<tbody>
						<tr>
							
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>{{$bill}}</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>Rs.20</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>Rs.{{$final_bill}}</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->
@endif
	


@stop
{{-- </body>
</html> --}}