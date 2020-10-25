@extends('pages.homeContent')
@section('features_items')
<div class="row">
	<div class="col-12">
		@foreach($brand as $row)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{ $row->product_image }}" alt="" style="height:200px; width:150px" />
											<h2>{{ $row->product_price}}<span>৳</span></h2>
											<p>{{ $row->product_name}}</p>
											<a href="{{ URL::to('/add-to-cart'.$row->product_id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{ $row->product_price}}<span>৳</span></h2>
												<p>{{ $row->product_name}}</p>
												<a href="{{ URL::to('/productDetails'.$row->product_id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
                    <li class=""><a href="#"><i class="fa fa-plus-square"></i>{{ $row->manufacture_name}}<span class=""> Brand<span></a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="{{URL::to('productDetails'.$row->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
					</div>
</div>
@endsection
