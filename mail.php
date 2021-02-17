<?php

// ----------------------------------------- 
ob_start();
session_start(); 

$con = mysql_connect("localhost","qprgjmajdd","hbm2YFApCn") or die('Could not connect: ' . mysql_error());



mysql_select_db("qprgjmajdd", $con);




if(mysql_query("INSERT INTO omaxe_r2(username,user_email,mobile,subject,message,about,appointdate,sex,child,status,date) VALUES ('".$_POST['username']."', '".$_POST['user_email']."','".$_POST['mobile']."','".$_POST['subject']."','".$_POST['message']."','".$_POST['about']."','".$_POST['appointdate']."','".$_POST['sex']."','".$_POST['child']."','1','".date('F jS, Y')."')")) {
	

	
header("location:thanks.php");

} else {

echo "There was an error adding your email to our list. Please try again.";

}

mysql_close($con);



$name = $_POST['username'];
$email = $_POST['user_email'];
$message = $_POST['mobile'];
$location = $_POST['message'];
$formcontent="From: $name \n \n Email: $email \n Phone Number: $message \n Location: $location";
$recipient = "crystasocial@gmail.com";
$subject = "Crysta Leads";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>


<!DOCTYPE html>
<!-- Keno - Flexible and Responsive HTML5 Landing Page Template design by DSA79 (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

	<head>
	
		<!-- Basic -->
		<meta charset="utf-8">
		<title>Cryasta </title>
		<meta name="author" content="DSA79">
		<meta name="keywords" content="">
		<meta name="description" content="">		
		
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
			
		<!-- Libs CSS -->
		<link href="css/bootstrap.css" rel="stylesheet"> 
		<link href="css/font-awesome.min.css" rel="stylesheet">	
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">	
		
		<!-- On Scroll Animations -->
		<link href="css/animate.css" rel="stylesheet">

		<!-- Template CSS -->
		<link href="css/style.css" rel="stylesheet">  

		<!-- Responsive CSS -->
		<link href="css/responsive.css" rel="stylesheet"> 
								
		<!-- Favicons -->	
		<link rel="shortcut icon" href="img/icons/favicon.ico">
		<link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
			
		<!-- Google Fonts -->	
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<!-- Google Code for Website Conversion Conversion Page -->

		
	</head>
	
	
	<body>
	

	
	<section id="about">
				<div class="container">	

					<div class="row">
						<div class="col-sm-12">
                        
                        <a href="https://crysta.care/"><img src="img/thanks.jpg" width="1600" height="800" class="img-responsive"></a> </div></div></div></section>
		
		<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>	
		<script src="js/modernizr.custom.js" type="text/javascript"></script>
		<script src="js/jquery.easing.js" type="text/javascript"></script>
		<script src="js/retina.js" type="text/javascript"></script>	
		<script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
		<script defer src="js/jquery.validate.min.js" type="text/javascript"></script>	
		<script defer src="js/jquery.flexslider.js" type="text/javascript"></script>	
		<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script src="js/owl.carousel.js" type="text/javascript"></script>	
		<script src="js/waypoints.min.js" type="text/javascript"></script>			
		<script src="js/custom.js" type="text/javascript"></script>

		
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->

		
	</body>
	
</html>