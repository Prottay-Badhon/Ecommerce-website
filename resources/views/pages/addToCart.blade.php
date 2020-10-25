@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css')}}" rel="stylesheet">
  	<link href="{{ asset('frontend/css/main.css')}}" rel="stylesheet">
  	<link href="{{ asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="{{ asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<section id="cart_items">
      <div class="row">
        <div class="col-12">
			<div class="breadcrumbs" style="margin-left:10px">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
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
							<td></td>
						</tr>
					</thead>
					<tbody>
            @foreach($contents as $row)
						<tr style="">
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
			</div>
    </div>
    </div>

				<div class="">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{ Cart::subtotal() }}</span></li>
							<li>Eco Tax <span>{{ Cart::tax() }}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{ Cart::total() }}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="{{ URL::to('/checkoutLogin')}}">Check Out</a>
					</div>
				</div>
      </div>
		</section> <!--/#cart_items-->

<script src="{{ asset('frontend/js/jquery.js')}}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{ asset('frontend/js/price-range.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{ asset('frontend/js/main.js')}}"></script>
</body>
</html>
@endsection
