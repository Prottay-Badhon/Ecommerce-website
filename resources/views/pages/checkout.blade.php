
@extends('layout')
@section('content')
	<section id="cart_items">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->


			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->
      <div class="">
       Shipping Details
      </div>
			<div class="shopper-informations">
						<div class="row">
					<div class="col-12 col-sm-12 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form action="{{ URL::to('/insertShipping')}}" method="post">
									@csrf
									<input type="email" placeholder="Email*" name="shippingEmail">
									<input type="text" placeholder="Name *" name="shippingName">
									<input type="text" placeholder="Address*" name="shippingAddress">
									<input type="number" placeholder="Mobile number" name="shippingNumber">
                  <input type="text" placeholder="City" name="shippingCity">
                  <input type="submit" value="Done" class="btn btn-warning" style="color:red;font-weight:bold">

								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
			</div>
				</section> <!--/#cart_items-->

@endsection
