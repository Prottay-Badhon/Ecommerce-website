@extends('pages.homeContent')
@section('features_items')
<div class="container" style="margin-bottom:20px; background:#f8feff;;padding:50px">
<div class="row text-center">
  <div class="col-4 col-md-4">
    <img src="{{ $product->product_image }}" alt="" class="img-fluid" style="height:300px;width:350px">
  </div>
  <div class="col-md-4 col-4">
    <table class="table">
      <tr>
        <td>Name :</td>
        <td>{{ $product->product_name}}</td>
      </tr>
      <tr>
        <td>Price :</td>
        <td style="font-size:20px;color:orange;font-weight:bold">{{ $product->product_price}}<span> ৳<span></td>
      </tr>
      <tr>
        <td>Available Size :</td>
        <td>{{ $product->product_size}}</td>
      </tr>
    </table>

    <h3 class="" style="background: #2094894f;
    color: #08074e;padding:10px;">Configaration <span><i class="fa fa-cogs"></i></span></h3>
      <p class="" style="padding:5px;font-family:">{{ $product->product_long_description }}</p>

    <form action="{{ URL::to('/add-to-cart'.$product->product_id)}}" method="post">
      @csrf
      <div class="form-group">
        <label for="">Quantity</label>
        <input type="number" class="form-control" name="quantity" min="1" max="10">
      </div>

      <div class="form-group">
        <label for="">Choose Size</label>
        <input type="text" class="form-control" name="size" placeholder="Enter size">
      </div>
      <input type="hidden" class="" name="productId" value="{{ $product->product_id}}">
      <div class="form-group">
        <a href="" class="btn btn-info" ><i class="fa fa-plus-square"></i> Add wishlist <span><i class="fa fa-heart" style="font-size:20px; color:red" aria-hidden="true"></i></span></a>

        <button class="btn btn-warning" type="submit">Add to cart<span><i class="fa fa-cart-plus" style="font-size:20px" aria-hidden="true"></i><span></button>
      </div>
    </form>

    <hr>






  </div>
</div>
</div>
@endsection
