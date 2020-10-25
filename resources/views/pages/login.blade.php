@extends('layout')
@section('content')

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="{{ URL::to('/login')}}" method="post">
							@csrf
							@if( $error = Session::get('errorMessage'))
							<h2 class="text-danger">{{ $error }}</h2>
							<?php  Session::put('errorMessage',null); ?>
							@endif
							<input type="email" placeholder="email" name="customerEmail"/>
							<input type="password" placeholder="password" name="customerPassword" />
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
					<a href="{{ URL::to('/notRegisteredYet')}}" class="">not registered yet?</a>
				</div>

				<div class="col-sm-4">
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

				<div class=""></div>
			</div>
		</div>
	</section><!--/form-->
@endsection
