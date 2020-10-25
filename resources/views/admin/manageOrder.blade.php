@extends('navbarAndSideBarLayout')
@section('content')
<h1 class="text-center bg-dark text-white py-2"><i>All Product</i></h1>
<!--/row-->
<div class="table-responsive">
<table class="table table-hover" style="" >

    <thead>
      <tr>
        <th>Order Id</th>
        <th>Customer name</th>
        <th> Order Total </th>
        <th> Order Status </th>
        <th> Action </th>


      </tr>

    </thead>

    <tbody>
      @foreach($result as $row)
      <tr>
      <td>{{ $row->order_id }}</td>
      <td>{{ $row->customer_name }}</td>
      <td>{{ $row->order_total }}</td>
      <td>{{ $row->order_status }}</td>
     <td class="pt-5">
       <a class="btn btn-danger" href="{{ URL::to('/inactiveProduct'.$row->order_id) }}">
         <i class="halflings-icon white thumbs-down"></i>
       </a>
       <a class="btn btn-success" href="{{ URL::to('/activeProduct'.$row->order_id) }}">
         <i class="halflings-icon white thumbs-up"></i>
       </a>
       <a class="btn btn-danger" href="{{ URL::to('/deleteProduct'.$row->order_id) }}">
         <i class="halflings-icon white trash"></i>
       </a>

       <a class="btn btn-warning" href="{{ URL::to('/viewOrder'.$row->order_id) }}">
         <i class="fa fa-eye"></i>
       </a>
     </td>

    </tr>
      @endforeach
    </tbody>
</table>
</div>

@endsection
