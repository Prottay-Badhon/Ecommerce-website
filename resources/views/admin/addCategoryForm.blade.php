<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{URL::to('img/favicon.ico')}}">
	<!-- end: Favicon -->




</head>

<body>
		<!-- start: Header -->

	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{ route('showDashboard') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a href="{{ route('allCategory') }}"><i class="icon-envelope"></i><span class="hidden-tablet"> All category</span></a></li>
						<li><a href="{{ route('addCategory') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add category</span></a></li>
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet">All Brand</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Add Brand</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Products</span><span class="label label-important">New</span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet">All products</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet">Add products</span></a></li>
							</ul>
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Slider</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Social link</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Shop name</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Delivery Man</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<a href="{{ route('showDashboard') }}">Dashboard</a>
					<i class="icon-angle-right"></i>
					<a href="" class="">Add Category</a>

				</li>
			</ul>

			<h1 class="text-center bg-dark text-white py-2"><i>Category Add Form</i></h1>
			<!--/row-->
			@yield('content')
			<form action="{{ route('uploadCategory') }}" method="post">
				@csrf

					<?php
						$message = Session::get('message');
						if($message){ ?>
							<h2 class="alert-success py-3 text-center">
								<?php		echo $message;
							   $message = Session::put('message',null);
								 ?>
							</h2>

						<?php }  ?>


  <div class="form-group">
    <label for="exampleFormControlInput1">Category Name</label>
    <input type="text" name="catName" class="form-control py-3" id="exampleFormControlInput1" placeholder="Category Name">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>

	<div class="form-group">
		<div class="form-check">
	  <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1"name="pbStatus">
	  <label class="form-check-label" for="defaultCheck1">
	    publication status
	  </label>
  </div>
  </div>

	<button type="submit" name="button" class="btn btn-success btn-large px-5">ADD</button>
	<button type="submit" name="button" class="btn btn-danger btn-large px-5">Cancel</button>
</form>


	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>

		<script src="{{asset('backend/js/modernizr.js')}}"></script>

		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>

		<script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('backend/js/excanvas.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.noty.js')}}"></script>

		<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>

		<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>

		<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>

		<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>

		<script src="{{asset('backend/js/counter.js')}}"></script>

		<script src="{{asset('backend/js/retina.js')}}"></script>

		<script src="{{asset('backend/js/custom.js')}}"></script>
	<!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
