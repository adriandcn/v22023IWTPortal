
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>JupiterMobile App Flat Bootstrap Responsive Website | Home ::</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travel Hunt Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="{{asset('/Jupiter/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
<link href="{{asset('/Jupiter/css/style.css')}}" type="text/css" rel="stylesheet" media="all">  
<!-- //Custom Theme files -->
<!-- js -->
<script src="{{asset('/Jupiter/js/jquery-2.2.3.min.js')}}"></script> 
<!-- //js -->
<!-- web-fonts -->  
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
<!-- //web-fonts --> 
</head>
<body>
	<div class="main-row">
		<h1>J<span>u</span>p<span>i</span>t<span>e</span><span>r</span></h1>
		  
				<div class="main_frame second">
				<div class="main_frame">
					<iframe class="frame-border" src="{{asset('/main')}}" frameborder="0"></iframe>
				</div>
			</div>
	</div>
	<div class="copy-right">
		
	</div>
	<script src="{{asset('/Jupiter/js/jquery.nicescroll.min.js')}}"></script> 
	<script>
	  $(document).ready(function() {
	  
		var nice = $("html").niceScroll();  // The document page (body)
		
		$("#div1").html($("#div1").html()+' '+nice.version);
		
		$("#boxscroll").niceScroll(); // First scrollable DIV
		
	  });
	</script>
</body>
</html>