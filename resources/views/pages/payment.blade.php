@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>payment</title>
<style type="text/css">
		#handcash,#bkash,#rocket,#nexuspay{
			background-repeat: no-repeat;
  		background-size: 100px 120px;
			height: 110px;
			width:130px;
			background-position: center;
			border: none;
			color:transparent;
		}
		#handcash{
			background-image: url("{{ asset('frontend/images/handcash.jpg')}}");
		}

		#bkash{
			background-image: url("{{ asset('frontend/images/bkash.png')}}");
		}

		#rocket{
			background-image: url("{{ asset('frontend/images/rocket.jpg')}}");
		}

		#nexuspay{
			background-image: url("{{ asset('frontend/images/nexuspay.png')}}");
		}
</style>
</head>
<body>
	<section id="cart_items">
			<div class=" col-sm-12">
				<div class="breadcrumbs">
					<ol class="breadcrumb">
					  <li><a href="" class="">Home</a></li>
					  <li class="active">Shopping Cart</li>
					</ol>
				</div>
				<div class="table-responsive cart_info">
					<?php
	                     $contents=Cart::content();

					?>
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td class="image">Image</td>
								<td class="description">Name</td>
								<td class="price">Price</td>
								<td class="quantity">Quantity</td>
								<td class="total">Total</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
	            @foreach($contents as $row)
	            <tr>
	              <td class="cart_product">
	                <a href=""><img src="{{ $row->options->image}}" alt="" style="height:50px;width:50px"></a>
	              </td>
	              <td class="cart_description">
	                <h4><a href="">{{ $row->name }}</h4>
	                <p></p>
	              </td>
	              <td class="cart_price">
	                <p>{{ $row->price }}</p>
	              </td>
	              <td class="cart_quantity">
	                <div class="cart_quantity_button">
	                  <form action="{{ URL::to('/update-cart') }}" method="post">
	                    @csrf
	                  <input class="cart_quantity_input" type="text" name="quantity" value="{{ $row->qty }}" autocomplete="off" size="2">
	                  <input type="hidden" value="{{ $row->rowId }}" name="rowId">
	                  <input type="submit" class="btn btn-sm" value="Update">
	                  </form>
	                </div>
	              </td>
	              <td class="cart_total">
	                <p class="cart_total_price">{{ $row->total }}</p>
	              </td>
	              <td class="cart_delete">
	                <a class="cart_quantity_delete" href="{{ URL::to('/delete-cart'.$row->rowId) }}"><i class="fa fa-times"></i></a>
	              </td>
	            </tr>



	            @endforeach
						</tbody>
					</table>

					<div class="" style="padding-right:15px">
						<div class="total_area">
							<ul>
								<li>Cart Sub Total <span>{{ Cart::subtotal() }}</span></li>
								<li>Eco Tax <span>{{ Cart::tax() }}</span></li>
								<li>Shipping Cost <span>Free</span></li>
								<li>Total <span>{{ Cart::total() }}</span></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Payment method</li>
				</ol>
			</div>
			<div class="paymentCont col-sm-8">
						<div class="headingWrap">
							<?php $message = Session::get('handcashMessage'); ?>
							<?php $message2 = Session::get('notavailable'); ?>

							@if($message)
							<h1 class="text-success text-center">
								{{ $message }}
							</h1>
							<?php Session::put('handcashMessage',null); ?>
							@else
							<h2 class="text-danger text-center">{{ $message2 }}</h2>
							<?php Session::put('notavailable',null); ?>

							@endif
								<h3 class="headingTop text-center">Select Your Payment Method</h3>
								<p class="text-center">Created with bootsrap button and using radio button</p>
						</div>
						<div class="paymentWrap">
							<div class="row">
								<div class="col-lg-3">
							<form action="{{ URL::to('/insertPayment')}}" method="post">
								@csrf
								<input type="hidden" name="paymentType" value="handcash">
								<input type="submit" id="handcash" value="Handcash">
							</form>
							</div>
							<div class="col-lg-3">
							<form action="{{ URL::to('/insertPayment')}}" method="post">
								@csrf
								<input type="hidden" name="paymentType" value="bkash">
								<input type="submit" id="bkash" value="bkash">
							</form>
						 </div>
						 <div class="col-lg-3">
							<form action="{{ URL::to('/insertPayment')}}" method="post">
								@csrf
								<input type="hidden" name="paymentType" value="rocket">
								<input type="submit" id="rocket" value="rocket">
							</form>
						</div>
							<div class="col-lg-3">
							<form action="{{ URL::to('/insertPayment')}}" method="post">
								@csrf
								<input type="hidden" name="paymentType" value="nexuspay">
								<input type="submit" id="nexuspay" value="nexuspay">
							</form>
							</div>
						</div>
						</div>

					</div>
		</div>
	</section><!--/#do_action-->

	@endsection
	<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
