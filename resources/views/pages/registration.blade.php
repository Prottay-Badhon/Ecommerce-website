@extends('layout')
@section('content')
<div class="signup-form"><!--sign up form-->
  <h2>New User Signup!</h2>
  <form action="{{ URL::to('/customerRegistration') }}" method="post">
    @csrf
    <input type="text" placeholder="Name" name="customerName"/>
    <input type="number" placeholder="phone" name="customerPhone"/>

    <input type="email" placeholder="Email Address" name="customerEmail"/>
    <input type="password" placeholder="Password" name="customerPassword"/>
    <button type="submit" class="btn btn-default">Signup</button>
  </form>
</div><!--/sign up form-->
</div>
@endsection
