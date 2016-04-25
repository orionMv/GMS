<!DOCTYPE HTML>
<html>
<head>
<title> GMS :: @yield('pageTitle')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="/assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="/assets/css/font-awesome.css" rel="stylesheet">
<script src="/assets/js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="/assets/js/jquery.metisMenu.js"></script>
<script src="/assets/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="/assets/css/custom.css" rel="stylesheet">
<script src="/assets/js/custom.js"></script>
<script src="/assets/js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});



		});
		</script>


<!-- Page Specific Styles -->
@yield('pageStyles')

</head>
<body>
<div id="wrapper">


<!-- Navigation Bar -->

  @include('app.nav')

<!-- END Navigation Bar -->

        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

  		<!--banner-->

        @yield('breadcrumbs')

		<!--//banner-->


    @yield('page')

		<!---->
<div class="copy">
            <p> &copy; 2016 &lt;/unshuffle&gt;. All Rights Reserved | Design &amp; Developed by <a href="http://www.unshuffle.xyz"> &lt;/unsuffle&gt; </a> </p>
	    </div>
		</div>
		<div class="clearfix"> </div>
       </div>
     </div>


<!--scrolling js-->
	<script src="/assets/js/jquery.nicescroll.js"></script>
	<script src="/assets/js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="/assets/js/bootstrap.min.js"> </script>

  @yield('pageScripts')

</body>
</html>
