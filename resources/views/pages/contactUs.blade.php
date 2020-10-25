@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
</head>
<body>


	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">
	    		<div class="col-sm-12 col-12">
					<h2 class="title text-center">Contact <strong>Us</strong></h2>
          </div>
        </div>
          <div class="row">
          <div class="col-4">
              <div class="card" style="width: 18rem;">
              <img class="card-img-top" style="height:200px;width:230px" src="{{ asset('frontend/images/bd.jpg')}}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">Badhon </h5>
              <p class="card-text">
                CSE CU 5th_Semester.ID:18701038
                University of Chittagong !
              </p>
              <a href="https://www.facebook.com/prottay.badhon" class="btn btn-primary text-center">Contact</a>
              </div>
            </div>
          </div>
          </div>
				</div>

			</div>
    		<div class="row">
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p> CSE_CU Badhon</p>
							<p>Chittagong University</p>
							<p>Bangladesh</p>
							<p>Mobile: 01703512032</p>
							<p>Fax: </p>
							<p>Email: prottaybadhon54@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="http://www.google.com"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="http://www.youtube.com"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>
	    	</div>
    	</div>

    </body>
</html>

@endsection
