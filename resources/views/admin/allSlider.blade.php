@extends('navbarAndSideBarLayout')
@section('content')
<div class="table-responsive">
<table class="table table-hover">
<thead>
  <tr>
    <th>Slide Image</th>
    <th>Slide Image</th>
    <th>publication status</th>
    <th>Action</th>


  </tr>
</thead>
<tbody>
  @foreach($slider as $row)
  <tr>
    <td  class="pt-5">{{ $row->slider_id }}</td>
  <td><img src="{{ $row->slider_image }}" alt="" style="height:200px;width:250px"></td>
  <td class="pt-5">
    @if($row->publication_status==1)
    <span class="btn btn-success">Active</span>
    @else
    <span class="btn btn-danger">inactive</span>

    @endif
  </td>
  <td class="pt-5">
    @if($row->publication_status==1)
    <a class="btn btn-danger" href="{{ URL::to('/doUnactive'.$row->slider_id) }}">
      <i class="halflings-icon white thumbs-down"></i>
    </a>
    @else
    <a class="btn btn-success" href="{{ URL::to('/doActive'.$row->slider_id) }}">
      <i class="halflings-icon white thumbs-up"></i>
    </a>

    @endif
    <a class="btn btn-danger" href="{{ URL::to('/deleteSlider'.$row->slider_id) }}">
      <i class="halflings-icon white trash"></i>
    </a>
  </td>
  </tr>
  @endforeach
</tbody>
</table>


</div>
@endsection
