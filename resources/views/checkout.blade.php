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
			{{-- <div class="checkout-options">
				<h3>New User</h3>
				<p>Checkout options</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Register Account</label>
					</li>
					<li>
						<label><input type="checkbox"> Guest Checkout</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancel</a>
					</li>
				</ul>
			</div><!--/checkout-options--> --}}
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
								<form method="POST" action="{{url('checkout/update')}}">
									<input type="text" placeholder="Email*" value="{{$data[0]->email}}" disabled>
									<input type="text" placeholder="First Name *" value="{{$data[0]->first_name}}" disabled>
									<input type="text" placeholder="Last Name *" value="{{$data[0]->last_name}}" disabled>
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
										<option>Ucrane</option>
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
										<option>Ucrane</option>
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
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							 @if(!empty($data1))
							    	@foreach($data1 as $d)
								<tr>
								<td class="cart_total">
									<p class="cart_total_price"></p>
								</td>
								<td class="cart_description">
									<h4><a href="">{{$d->item_name}}</a></h4>
									<p>Web ID: {{$d->item_id}}</p>
								</td>
								<td class="cart_price">
									<p>Rs. {{$d->cost}}</p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
										{{-- <a class="cart_quantity_down" href=""> - </a> --}}
									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price">Rs. 67</p>
								</td>
								<td>
									{{-- <a class="cart_quantity_delete"  href="{{URL('cart/destroy/.$d->item_id')}}" align="center"><i class="fa fa-times"></i></a> --}}
									<button type="button" class="btn btn-fefault cart" id=" {{$d->item_id}}">
										<a href="{{url ('cart/destroy/'. $d->item_id) }}" style="color:#ffffff">Delete</a></li>
									</button>
								</td>
							  </tr>
						            @endforeach
							@else
							    <td class="cart_total">
									<p class="cart_total_price">Nothing to show</p>
								</td>
							@endif
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>$59</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>$2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$61</span></td>
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