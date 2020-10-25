@extends('navbarAndSideBarLayout')
@section('content')
<!--/row-->
<div class="row">
  <div class="col-6 p-3">
    <div class="table-responsive ">
    <table class="table table-hover border" style="" >
        <thead>
          <tr>
            <th class="bg-light font-italic" colspan="2"><i class="fa fa-address-book-o btn btn-success" aria-hidden="true"></i>  Customer Details</th>
          </tr>
          <tr>
            <th>Customer name</th>
            <th> Mobile number </th>
          </tr>
        </thead>
        <tbody>
          @foreach( $result as $row)
          @endforeach
          <td class="">{{ $row->customer_name}}</td>
          <td class="">{{ $row->customer_phone}}</td>
        </tbody>
    </table>
    </div>
  </div>

  <div class="col-6  p-3">
    <div class="table-responsive ">
    <table class="table table-hover border" style="" >
        <thead>
          <tr>
            <th class="bg-light font-italic" colspan="4"><i class="fa fa-bars btn btn-danger" aria-hidden="true"></i> Shipping Details </th>


          </tr>
          <tr>
            <th>user name</th>
            <th>Address </th>
            <th>Mobile number </th>
            <th>Email</th>



          </tr>
        </thead>
        <tbody>
          @foreach( $result as $row)
          @endforeach

          <tr>
          <td class="">{{ $row->shipping_name}}</td>
          <td class="">{{ $row->shipping_address}}</td>
          <td class="">{{ $row->shipping_number}}</td>
          <td class="">{{ $row->shipping_email}}</td>

          </tr>
        </tbody>
    </table>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12  p-3">
    <div class="table-responsive ">
    <table class="table table-hover border" style="" >
        <thead>
          <tr>
            <th class="bg-light font-italic" colspan="4"><i class="fa fa-pencil-square-o btn btn-primary" aria-hidden="true"></i> Order Details </th>


          </tr>
          <tr>
            <th>product id </th>
            <th>product name</th>
            <th>product sales quantity</th>
            <th>Price</th>



          </tr>
        </thead>
        <tbody>
          @foreach( $result as $row)
          <tr>
          <td class="">{{ $row->product_id}}</td>
          <td class="">{{ $row->product_name}}</td>
          <td class="">{{ $row->product_sales_quantity}}</td>
          <td class="">{{$row->product_sales_quantity*$row->product_price}}<span> ৳</span></td>
          </tr>

          @endforeach
          <tr class="">
            <td colspan="1"><td>
            <td class="bg-danger text-light font-weight-bold">Total Cost</td>
            <td class="bg-danger text-light font-weight-bold">{{ $row->order_total }}<span> ৳</span></td>
          </tr>
        </tbody>
    </table>
    </div>
  </div>
</div>

@endsection
