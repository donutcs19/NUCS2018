<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>สมการการประมาณค่านัยทั่วไปสำหรับการวิเคราะห์ข้อมูลเชิงกลุ่ม</title>
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
			<h2 class="section-heading" style="font-family: 'Pridi', serif;">สมการการประมาณค่านัยทั่วไปสำหรับการวิเคราะห์ข้อมูลเชิงกลุ่ม
(Generalized Estimating Equation with Count Data)
</h2> <h4 style="font-family: 'Pridi', serif;">วิทยากร :  อาจารย์ทวีศักดิ์ จันทร์งาม</h4>
			<hr>

			<h4 style="font-family: 'Pridi', serif;">
				สมการการประมาณค่านัยทั่วไป (Generalized Estimating Equation: GEE) (Liang & Zeger, 1986) <br> เป็นวิธีการทางสถิติที่ใช้ในการวิเคราะห์ข้อมูลที่มีการติดตามระยะยาว (Longitudinal  data) และมีการวัดซ้ำค่าสังเกตของตัวแปรตามที่สนใจ<br>ที่เกิดขึ้นภายใต้หน่วยศึกษาเดียวกัน (cluster/subject) ที่มักพบว่าค่าสังเกตดังกล่าวมีความสัมพันธ์กันเอง (Correlated data) <br>โดยได้ขยายวิธีการดังกล่าวมาจากตัวแบบเชิงเส้นนัยทั่วไป (Generalized Linear Model: GLM) ด้วยการนำรูปแบบความสัมพันธ์<br>ของค่าสังเกตที่สนใจ (Working Correlation Structure) ไปพิจารณาในการวิเคราะห์สมการหรือตัวแบบ อีกทั้งยังมีข้อดีกว่า GLM คือค่าสังเกตหรือตัวแปรตามไม่จำเป็นต้องมีการแจกแจงในวงศ์เลขชี้กำลัง (exponential family) 
			</h4><br>
			<h4 style="font-family: 'Pridi', serif;">
				ซึ่งทำให้สามารถนำไปวิเคราะห์ข้อมูลที่ไม่ใช่ค่าต่อเนื่องได้ โดยเฉพาะข้อมูลเชิงกลุ่ม (count data)ที่มีการเก็บรวบรวมไว้ในด้านต่าง ๆ <br>ไม่ว่าจะเป็นทางการเกษตร การแพทย์ การสาธารณสุข หรือแม้แต่ในด้านธุรกิจ   เช่น  การศึกษาติดตามระยะยาวจำนวนการเกิดอุบัติเหตุบนทางหลวง   การศึกษาติดตามระยะยาวจำนวนการเรียกค่าสินไหมทดแทนการประกันภัย เป็นต้นวิธีการนี้สามารถใช้โปรแกรมสำเร็จรูปต่าง ๆ <br>อาทิ SPSS, R, SAS, และ STATA ในการวิเคราะห์ข้อมูลได้  โดยการอบรมเชิงวิชาการในครั้งนี้ ผู้เข้าอบรมจะได้รับความรู้เกี่ยวกับหลักการ <br> ขั้นตอนในการวิเคราะห์ข้อมูลเชิงกลุ่มด้วยสมการการประมาณค่านัยทั่วไปและการอ่านผลลัพธ์จากการใช้โปรแกรมสำเร็จรูป<br>ในการวิเคราะห์ข้อมูลด้วยวิธีการดังกล่าว 
			</h4>
			
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