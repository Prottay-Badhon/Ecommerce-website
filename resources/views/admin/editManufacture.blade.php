@extends('navbarAndSideBarLayout')
@section('content')
<h2 class="text-center bg-dark text-white py-2"><i>Edit Manufacture</i></h2>
<form action="{{ url('/updateManufacture'.$result->manufacture_id) }}" method="post">
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
<label for="exampleFormControlInput1">Manufacture Name</label>
<input type="text" name="manufactureName" class="form-control py-3" id="exampleFormControlInput1" value="{{ $result->manufacture_name}}">
</div>


<div class="form-group">
<label for="exampleFormControlTextarea1">Description</label>
<textarea class="form-control" name="manufactureDescription" id="exampleFormControlTextarea1" rows="4">{{ $result->manufacture_description}}</textarea>
</div>

<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="pbStatus" 	<?php echo ($result->publication_status == 1 ) ? 'checked' : NULL ; ?> >
<label class="form-check-label" for="defaultCheck1">
publication status
</label>
</div>
</div>

<button type="submit" name="button" class="btn btn-success btn-large px-5">Update</button>
<button type="submit" name="button" class="btn btn-danger btn-large px-5">Cancel</button>
</form>
@endsection
