<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>แนะนำที่พัก</title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pridi">

<link rel="icon" href="favicon.ico" type="image/x-icon"> 


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand page-scroll" href="#page-top"><script src="countdown.js" type="text/javascript"></script>
<script type="application/javascript">

var myCountdownTest = new Countdown({
									// I'm cheating here... so I don't have to update this every year!
									// year : 2042, // <-- This is a better example of what to use.
								 	year: (new Date().getFullYear() + 1),
									month	: 3, 
									day		: 12,
									width	: 400, 
									height	: 80
									});



</script></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="../index.php" style="font-family: 'Pridi', serif;">กลับหน้าหลัก</a>
			</li>
			<li>
			
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

<!-- Section Intro Slider
================================================== -->
<section class="no-padding">
<div class="equal-heights w-middle">
<div class="col-md-4 bg-primary">
	<img src="img/1.jpg" alt="">
</div>
<div class="col-md-4">
	<img src="img/2.jpg" alt="">
</div>
<div class="col-md-4 bg-dark">
	<img src="img/3.jpg" alt="">
</div>
</div>

</section>
<div class="clearfix">
</div>
<!-- Section About
================================================== -->
<section id="about">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
			<h2 class="section-heading" style="font-family: 'Pridi', serif;">แนะนำที่พัก
</h2> <h4 style="font-family: 'Pridi', serif;"></h4>
			<hr>

			<a href="http://www.ietc.mju.ac.th/wtms_index.aspx"><img src="../img/accom.jpg"></a><br><br>
			<a href="https://www.facebook.com/pg/%E0%B8%AA%E0%B8%A1%E0%B8%B2%E0%B8%84%E0%B8%A1%E0%B8%A8%E0%B8%B4%E0%B8%A9%E0%B8%A2%E0%B9%8C%E0%B9%80%E0%B8%81%E0%B9%88%E0%B8%B2%E0%B9%81%E0%B8%A1%E0%B9%88%E0%B9%82%E0%B8%88%E0%B9%89-167508736691215/photos/?tab=album&album_id=172272816214807"><img src="../img/accom2.jpg"></a>
			
	</div>
</div>
</div>
</section>

<!-- Section after about
================================================== -->




<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
	<div class="col-md-12 text-center">
		<h1 class="bottombrand wow flipInX">Stat  @  Maejo  University</h1>
		<p>
			
		</p>
	</div>
</div>
</div>
</section>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
<script src="js/jquery-1.12.4.min.js"></script> 
  <script src="js/main.js"></script>
   <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>
</body>
</html>