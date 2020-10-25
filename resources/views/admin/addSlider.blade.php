@extends('navbarAndSideBarLayout')

@section('directory')
<a href="" class="">Add slider</a>
@endsection

@section('content')
<h2 class="text-center bg-dark text-white py-2"><i>Add slider</i></h2>
<form action="{{ route('saveSlider') }}" method="post" enctype="multipart/form-data">
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
<label for="exampleFormControlInput1">Slider Image</label>
<input type="file" name="sliderImage" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="1" id="defaultCheck1"name="pbStatus">
<label class="form-check-label" for="defaultCheck1">
publication status
</label>
</div>
</div>

<button type="submit" name="button" class="btn btn-success btn-large px-5">Add slider</button>
<button type="submit" name="button" class="btn btn-danger btn-large px-5">Cancel</button>
</form>
@endsection
