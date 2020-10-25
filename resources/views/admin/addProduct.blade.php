@extends('navbarAndSideBarLayout')

@section('directory')
<a href="" class="">Add Products</a>
@endsection

@section('content')
<h2 class="text-center bg-dark text-white py-2"><i>Products</i></h2>
<form action="{{ route('saveProduct') }}" method="post" enctype="multipart/form-data">
  @csrf

    <?php
      $message = Session::get('message');
      $error = Session::get('error');

      if($message){ ?>
        <h2 class="alert-success py-3 text-center">
          <?php		echo $message;
           $message = Session::put('message',null);
           ?>
        </h2>
      <?php } ?>
      <?php  if($error){ ?>
          <h2 class="alert-danger py-3 text-center">
            <?php		echo $error;
             $message = Session::put('error',null);
             ?>
          </h2>

      <?php }  ?>


<div class="form-group">
<label for="exampleFormControlInput1">Product Name</label>
<input type="text" name="productName" class="form-control py-3" id="exampleFormControlInput1" placeholder="product Name">
</div>

<div class="form-group">
    <label for="exampleFormControlSelect1">Product Category</label>
    <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="categoryId">
      <?php   $category = DB::table('categories')->where('publication_status','1')->get(); ?>
      <?php  foreach ($category as $row) { ?>
          <option value="{{ $row->id }}">{{ $row->category_name }}</option>

        <?php } ?>
    </select>
  </div>

  <div class="form-group">
      <label for="exampleFormControlSelect1">Manufacture Name</label>
      <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="manufactureId">
        <?php   $category = DB::table('tbl_manufacture')->where('publication_status','1')->get(); ?>
        <?php  foreach ($category as $row) { ?>
            <option value="{{ $row->manufacture_id }}">{{ $row->manufacture_name }}</option>

          <?php } ?>
      </select>
    </div>



<div class="form-group">
<label for="exampleFormControlTextarea1">Product short Description</label>
<textarea class="form-control" name="shortDescription" id="exampleFormControlTextarea1" rows="4"></textarea>
</div>

<div class="form-group">
<label for="exampleFormControlTextarea1">Product long Description</label>
<textarea class="form-control" name="longDescription" id="exampleFormControlTextarea1" rows="6"></textarea>
</div>


<div class="form-group">
<label for="exampleFormControlInput1">Product price</label>
<input type="number" name="price" class="form-control py-3" id="exampleFormControlInput1" placeholder="price">
</div>


<div class="form-group">
<label for="exampleFormControlInput1">Image</label>
<input type="file" name="productImage" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>


<div class="form-group">
<label for="exampleFormControlInput1">Product Size</label>
<input type="text" name="productSize" class="form-control py-3" id="exampleFormControlInput1" placeholder="product size">
</div>


<div class="form-group">
<label for="exampleFormControlInput1">Product Color</label>
<input type="text" name="color" class="form-control py-3" id="exampleFormControlInput1" placeholder="product color">
</div>

<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="1" id="defaultCheck1"name="pbStatus">
<label class="form-check-label" for="defaultCheck1">
publication status
</label>
</div>
</div>

<button type="submit" name="button" class="btn btn-success btn-large px-5">Add Product</button>
<button type="submit" name="button" class="btn btn-danger btn-large px-5">Cancel</button>
</form>
@endsection
