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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
						<li><a href="{{ route('allManufacture') }}"><i class="icon-eye-open"></i><span class="hidden-tablet">All Manufacture</span></a></li>
						<li><a href="{{ route('addManufacture') }}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Add Manufacture</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Products</span><span class="label label-important">New</span></a>
							<ul>
								<li><a class="submenu" href="{{ route('allProduct') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">All products</span></a></li>
								<li><a class="submenu" href="{{ route('addProduct') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">Add products</span></a></li>
							</ul>
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> slider</span></a>
							<ul>
								<li><a class="submenu" href="{{ route('allSlider') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">All slider</span></a></li>
								<li><a class="submenu" href="{{ route('addSlider') }}"><i class="icon-file-alt"></i><span class="hidden-tablet">Add slider</span></a></li>
							</ul>
						</li>


						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Shop name</span></a></li>
						<li><a href="{{ URL::to('/manageOrder') }}"><i class="icon-list-alt "></i><span class=""> Manage Order</span></a></li>
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
					<a href="{{ route('showDashboard') }}">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<a href="{{ route('showDashboard') }}">Dashboard</a>
					<i class="icon-angle-right"></i>
					@yield('directory')
				</li>
			</ul>
			<!--/row-->
			@yield('content')
	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->



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
