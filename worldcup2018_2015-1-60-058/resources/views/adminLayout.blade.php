<!DOCTYPE html>
<html lang="en">


<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('adminSheets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('adminSheets/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('adminSheets/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('adminSheets/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

	<!-- BOOSTRAP CDN -->


	<!-- end: CSS -->
	
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Worl Cup 2018</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Łukasz Holeczek
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="/admin"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						

						<li>
							<a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet">Stadium</span><span class="label label-important"> 2 </span></a> 
							<ul>
								<li><a class="submenu" href="/admin stadium"><i class="icon-file-alt"></i><span class="hidden-tablet">ADD STADIUM</span></a></li>
								<li><a class="submenu" href="/admin stadium display"><i class="icon-file-alt"></i><span class="hidden-tablet"> Display Stadium</span></a></li>
							</ul>	
						</li>



						<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet">Team</span><span class="label label-important"> 2 </span></a> 
							<ul>
								<li><a class="submenu" href="/admin_team"><i class="icon-file-alt"></i><span class="hidden-tablet">ADD Team</span></a></li>
								<li><a class="submenu" href="/admin_team_display"><i class="icon-file-alt"></i><span class="hidden-tablet"> Display Teams</span></a></li>
							</ul>	
						</li>

						<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet">Players</span><span class="label label-important"> 2 </span></a> 
							<ul>
								<li><a class="submenu" href="/admin_player"><i class="icon-file-alt"></i><span class="hidden-tablet">ADD Player</span></a></li>
								<li><a class="submenu" href="/admin_player_display"><i class="icon-file-alt"></i><span class="hidden-tablet"> Display Players</span></a></li>
							</ul>	
						</li>
						
						<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet">Matches</span><span class="label label-important"> 2 </span></a> 
							<ul>
								<li><a class="submenu" href="/admin_match"><i class="icon-file-alt"></i><span class="hidden-tablet">ADD match</span></a></li>
								<li><a class="submenu" href="/admin_match_display"><i class="icon-file-alt"></i><span class="hidden-tablet"> Display Matches</span></a></li>
							</ul>	
						</li>
						
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
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
				<li><a href="#">Dashboard</a></li>
			</ul>

				@yield('content')

			
<!-- CONTENT WILL BE HERE 
			<div class="row-fluid">
			</div>
			
			
			
		-->	
				
				
				
				
			
			
			
			
			
       

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
			<span style="text-align:left;float:left;">&copy; 2018 <a href="#" alt="Bootstrap Themes">Copy Right</a></span>
			<span class="hidden-phone" style="text-align:right;float:right;">Powered by: <a href="#" alt="Bootstrap Admin Templates">2015-1-60-058</a></span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{asset('adminSheets/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('adminSheets/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/modernizr.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.cookie.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/fullcalendar.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('adminSheets/js/excanvas.js')}}"></script>
	<script src="{{asset('adminSheets/js/jquery.flot.js')}}"></script>
	<script src="{{asset('adminSheets/s/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('adminSheets/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('adminSheets/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('adminSheets/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/counter.js')}}"></script>
	
		<script src="{{asset('adminSheets/js/retina.js')}}"></script>

		<script src="{{asset('adminSheets/js/custom.js')}}"></script>
		<script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>
	<script type="text/javascript">
		$(document).on("click","#delete",function(c){//#delete is the id 
			c.preventDefault();
			var link =$(this).attr("href");
			bootbox.confirm("Do you want to delete ?",function(confirm){

				if(confirm){
					window.location.href=link;
				};
			});

		});
	</script>

</html>
