@extends('navbarAndSideBarLayout')
@section('content')
<h1 class="text-center bg-dark text-white py-2"><i>All Product</i></h1>
<!--/row-->
<div class="table-responsive">
<table class="table table-hover" style="" >

    <thead>
      <tr>
        <th>Product Id</th>
        <th>Product name</th>
        <th> Category id </th>
        <th> Category Name </th>

        <th> Manufacture id </th>
        <th> Manufacture Name </th>

        <th> Product short Description </th>
        <th> Product long Description </th>
        <th> Product price </th>
        <th> Product image </th>
        <th> Product color </th>
        <th> Product size </th>
        <th> Status </th>
        <th> Action </th>


      </tr>

    </thead>

    <tbody>
      @foreach($result as $row)
      <tr>
      <td>{{ $row->product_id }}</td>
      <td>{{ $row->product_name }}</td>
      <td>{{ $row->category_id }}</td>
      <td>{{ $row->category_name }}</td>
      <td>{{ $row->manufacture_id }}</td>
      <td>{{ $row->manufacture_name }}</td>
      <td>{{ $row->product_short_description }}</td>
      <td>{{ $row->product_long_description }}</td>
      <td>{{ $row->product_price }}</td>
      <td><img src="{{ $row->product_image }}" alt="" class="img-fluid" style="height:80px;width:80px"></td>
      <td>{{ $row->product_color }}</td>
      <td>{{ $row->product_size }}</td>

     <td class="pt-5">
       @if($row->publication_status==1)
       <span class="btn btn-success">Active</span>
       @else
       <span class="btn btn-danger">inactive</span>
       @endif
     </td>

     <td class="pt-5">
       @if($row->publication_status==1)
       <a class="btn btn-danger" href="{{ URL::to('/inactiveProduct'.$row->product_id) }}">
         <i class="halflings-icon white thumbs-down"></i>
       </a>
       @else
       <a class="btn btn-success" href="{{ URL::to('/activeProduct'.$row->product_id) }}">
         <i class="halflings-icon white thumbs-up"></i>
       </a>

       @endif
       <a class="btn btn-danger" href="{{ URL::to('/deleteProduct'.$row->product_id) }}">
         <i class="halflings-icon white trash"></i>
       </a>
     </td>

    </tr>
      @endforeach
    </tbody>
</table>
</div>

@endsection
