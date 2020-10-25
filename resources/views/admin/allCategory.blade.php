@extends('navbarAndSideBarLayout')
@section('directory')
					<a href="" class="">All Category</a>
@endsection

@section('content')
			<h1 class="text-center bg-dark text-white py-2"><i>All Category</i></h1>
			<!--/row-->
			<div class="table-responsive">
      <table class="table ">

          <thead>
            <tr>
              <th>Category-Name</th>
              <th>Description</th>
							<th> Status </th>
              <th> Availability </th>
              <th> Action </th>

            </tr>

          </thead>

          <tbody>
            @foreach($result as $row)
            <tr>
            <td>{{ $row->category_name }}</td>
            <td>{{ $row->description }}</td>
            <td>
							<input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="pbStatus" disabled	<?php echo ($row->publication_status == 1 ) ? 'checked' : NULL ; ?> >

           </td>
						 <td>
							 <?php
	                $status = $row->publication_status;
	                if($status ==1){
	                  echo "yes";
	                }
	                else echo "Not available";
	              ?>
						 </td>
            <td>

							<a href="{{ URL::to('/editCategory'.$row->id) }}" class=" btn btn-success btn-small">Edit</a>
							<a href="{{ URL::to('/deleteCategory'.$row->id) }}" class=" btn btn-danger  btn-small">Delete</a>

						</td>
          </tr>
            @endforeach
          </tbody>
      </table>
  </div>

	</div><!--/.fluid-container-->


@endsection
