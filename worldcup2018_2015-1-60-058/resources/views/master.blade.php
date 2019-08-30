<html>
<head>
<title> @yield('title') </title>
<!-- Material Design fonts -->
<link rel="icon" href="{{URL::asset('storage/images/world-cup.png')}}">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Bootstrap Material Design -->
<link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
<link rel="stylesheet" type="text/css" href="/css/ripples.min.css">
<link rel="stylesheet" type="text/css" href="/css/footer.css">
<style type="text/css">
	body{
		/*background-image:url({{url('storage/telstar.jpg')}})*/


	}
	@media (max-width: @screen-xs) {
    body{font-size: 10px;}
}

@media (max-width: @screen-sm) {
    body{font-size: 14px;}
}


h4{
    font-size: 1.4em;
}    
</style>
</head>
<body>
<!--<body style="background-image: url({{url('storage/telstar.jpg')}}); background-size: 100%;"> -->
@include('shared.navbar')

@yield('content')

@include('shared.footer')


<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>
<script>
$(document).ready(function() {
	// This command is used to initialize some elements and make them work properly
	$.material.init();
});

$('.carousel').carousel({
  			interval: 800
		});
</script>
</body>
</html>