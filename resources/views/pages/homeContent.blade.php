@extends('layout')
@section('slider')
<div class="container">
	<div class="row">
		<?php $all_published_slider = DB::table('tbl_slider')
		->where('publication_status',1)->get(); ?>
		 <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
								@foreach( $all_published_slider as $v_slider )
										<li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
								@endforeach
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
								@foreach( $all_published_slider as $v_slider )
										<div class="item {{ $loop->first ? ' active' : '' }}" >
												<img src="{{ $v_slider->slider_image }}" class="px-auto" style="width:50%; height:500px;">
										</div>
								@endforeach
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
						</a>
				</div>

		 </div>
 </div>
@endsection
@section('content')
<h2 class="title text-center">Features Items</h2>

		@yield('features_items')
      <!--Category tab-->
			<?php $getBrand = DB::table('tbl_manufacture')->join('tbl_products','tbl_manufacture.manufacture_id','tbl_products.manufacture_id')->limit(4)->get(); ?>
      <div class="category-tab"><!--category-tab-->
				<div class="row">
						<div class="col-sm-12">

							<ul class="nav nav-tabs">
								<?php $manufacture = DB::table('tbl_manufacture')->
								limit(4)->get();  ?>
								@foreach($manufacture as $row)

								<li class="">
									<a href="{{URL::to('/productByManufacture'.$row->manufacture_id) }}">{{ $row->manufacture_name}}</a>
								</li>
								@endforeach

							</ul>
						</div>
					</div>

						<div class="tab-content">
							<div class="row">
							@foreach($getBrand as $row)
							<div class="tab-pane fade active in" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{URL::to($row->product_image)}}" alt="" style="height:230px;width:200px" />
												<h2>{{ $row->product_price}}<span>৳</span></h2>
												<p>{{ $row->product_name }}</p>
										<a href="{{ URL::to('/productDetails'.$row->product_id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>

							</div>
							@endforeach
						</div>

						</div>
					</div><!--/category-tab-->


					<div class="row">
          <div class="col-sm-12">
						<?php $manufacture = DB::table('tbl_manufacture')->
						limit(50)->latest()->get();  ?>
          							<ul class="nav nav-tabs">
													@foreach( $manufacture as $row)
          								<li class=""><a href="{{URL::to('/productByManufacture'.$row->manufacture_id) }}">{{ $row->manufacture_name}}</a></li>
													@endforeach

          							</ul>
          			</div>
						</div>
												<?php
												$latestProduct =DB::table('tbl_products')->limit(6)->latest()->get(); ?>

          						<div class="tab-content">
												<div class="col-sm-12"><h3 class="text-center text-success"><i><b><i class="fa fa-bell-o"></i> Latest Products</b></i></h3><hr></div>
          							<div class="tab-pane fade active in" id="" >
													<div class="row">
													@foreach($latestProduct as $row)
													<div class="col-sm-3">
          									<div class="product-image-wrapper">
          										<div class="single-products">
          											<div class="productinfo text-center">

          												<img src="{{URL::to($row->product_image)}}"  style="height: 230px;width: 200px;"/>
          												<h2>{{ $row->product_price }}<span>৳</span></h2>
          												<p>{{ $row->product_name  }}</p>
          										<a href="{{ URL::to('/productDetails'.$row->product_id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          											</div>

          										</div>
          									</div>
          								</div>
													@endforeach
          							</div>
											</div>

          						</div>


            @section('category')
          <div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/recommend2.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/recommend2.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>

											</div>
										</div>
									</div>
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
          @endsection

@endsection
