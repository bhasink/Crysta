<?php
         if(isset($_POST["submit"])){
            $servername = "localhost:3306";
            $username = "qprgjmajdd";
            $password = "hbm2YFApCn";
            $dbname = "qprgjmajdd";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO omaxe_r2(username,user_email,mobile,subject,message,about,appointdate,sex,child,status,date)VALUES ('".$_POST['username']."', '".$_POST['user_email']."','".$_POST['mobile']."','".$_POST['subject']."','".$_POST['message']."','".$_POST['about']."','".$_POST['appointdate']."','".$_POST['sex']."','".$_POST['child']."','1','".date('F jS, Y')."')";

            if (mysqli_query($conn, $sql)) {
               header("location:thanks.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Crysta -  Reproductive Healthcare | Crysta Pregnancy Care & Fertility Platform</title>
    <meta name="description" content=" Crysta is one stop pregnancy care and fertility platform with diagnostic tests. Crysta provides test and screening, clinical and reproductive consultations and infertility services.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://crysta.care/" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.ico">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#003883">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="canonical" href="https://crysta.care/pregnancy-care" >

    <script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "WebSite",
  "name": "Crysta",
  "url": "https://crysta.care/"
}
 </script>
    <script type='application/ld+json'>
{
"@context": "http://www.schema.org",
"@type": "Organization",
"name": "Crysta Carre",
"url": "https://crysta.care/",
"logo": "https://crysta.care/img/Crysta-logo.png",
"description": "Buy organic newborn baby care products online in India at Vkaire. shop for VKaire luxury organic cotton blankets, mattresses, pillows, capes, muffs & more with Free Shipping & Easy Returns.",
"contactPoint": {
"@type": "ContactPoint",
"telephone": "18001213327",
"contactType": "Customer Service",
"availableLanguage": "en"
},
"address": {
"@type": "PostalAddress",
"streetAddress": "Redcliffe Life Science Pvt. Ltd. H-55, Sector-63, Electronic City",
"addressLocality": "Noida",
"addressRegion": "Uttar Pradesh",
"addressCountry": "India"
},
"sameAs": [
"https://www.facebook.com/crystacare/",
"https://twitter.com/CrystaCare",
"https://www.instagram.com/crystacare/",
"https://www.youtube.com/channel/UCqDhliFEVw2dnE923hUBM0g"
 ]
},
}
</script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHCQW42');</script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Ads: 621579905 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-621579905"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-621579905');
    </script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHCQW42"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--------------------------------------------------------------
Navigation section
---------------------------------------------------------------->
<header class="home-page-bg">
    <nav class="navbar navbar-expand-lg  main-nav" id="main-nav" style="fill: rgb(255, 255, 255);">
        <div class="container">
            <span><a href="https://crysta.care/"><img src="img/Crysta-logo.png" width="100px" class="logo" alt=""></a></span>


            <div class="mobile-m"><span style="font-size:30px;cursor:pointer;color:#965294;" onClick="openNav()">&#9776; </span></div>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item ">
                        <a class="nav-link active" href="/about">About<span class="sr-only">(current)</span></a>                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Crysta for you</a>
                        <ul class="sub-menu-main">
                            <li class="subnavItem"><a href="/practitioners">Practitioners</a></li>
                            <li class="subnavItem"><a href="/pregnancy-care">Pregnancy</a></li>
                            <li class="subnavItem"><a href="/loving-couple">Fertility</a></li>
							<li class="subnavItem"><a href="/corporates">Corporates</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Counselling</a>
                        <ul class="sub-menu-main">
                            <li class="subnavItem"><a href="/fertility-counselling">Fertility Counselling</a></li>
                            <li class="subnavItem"><a href="/pregnancy-counselling">Pregnancy Counselling</a></li>
                            <li class="subnavItem"><a href="/genetic-counselling">Genetic Counselling</a></li>
                        </ul>
                    </li>

                   <li class="nav-item">
                      <a class="nav-link" href="/tests">Tests</a>
					</li>
                    
					<li class="nav-item">
                        <a class="nav-link " href="https://blog.crysta.care/">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link book-btn" href="https://book.crysta.care/">Book Now</a>
                    </li>
					
				
                </ul>
				
            </div> 
<!--			 <a class="redcliff-sponse"  target="_blank" href="https://www.redcliffels.com/"><img src="img/logos/rediclifff logo (1).png"></a>-->
        </div>


    </nav>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>

        <div class="container">
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link active" href="/about">About<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Crysta for you</a>
                            <ul class="sub-menu-main-sidebar">
                                <li class="subnavItem-sidebar"><a href="/practitioners">Practitioners</a></li>
                                <li class="subnavItem-sidebar"><a href="/pregnancy-care">Pregnancy</a></li>
                                <li class="subnavItem-sidebar"><a href="/loving-couple">Fertility</a></li>
                                <li class="subnavItem-sidebar"><a  href="/corporates">Corporates</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" >Counselling</a>
                                <ul class="sub-menu-main-sidebar">
                                    <li class="subnavItem-sidebar"><a href="/fertility-counselling">Fertility Counselling</a></li>
                                    <li class="subnavItem-sidebar"><a href="/pregnancy-counselling">Pregnancy Counselling</a></li>
                                    <li class="subnavItem-sidebar"><a href="/genetic-counselling">Genetic Counselling</a></li>
                                </ul>
                        </li>

					<li class="nav-item">
                      <a class="nav-link" href="/tests">Tests</a>
					</li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://blog.crysta.care/">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact-us">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://book.crysta.care/">Book Now</a>
                        </li>
                    </ul>
                </div>

            </div>
         </div>
    <div class="hero-text">
        <h2>Baby on<br>
            your mind?
        </h2>
<h5 class="home-sub">Welcome to our one-stop fertility and pregnancy platform for counselling and diagnostic tests.</h5>
        <a class="know-btn" href="/pregnancy-care">Know More</a>
    </div>
</header>
<!--------------------------------------------------------------
Video section
---------------------------------------------------------------->
<section class="page-index-video">
    <div class="container">
        <div class="row">
            <div class="col-md-12 video-box">
                <div class="title-video">
                    Crysta care, takes pride in being <br>convenient and accessible.
               </div>
               <div class="get-to-know-video">
                   <!-- embed responsive viemo video muted and autoplay -->
                   <div style="padding:56.25% 0 0 0;position:relative;">
                       <iframe src="https://player.vimeo.com/video/427386776?muted=1&autoplay=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                   </div>
<!--                   <div>-->
<!--                       <iframe width="100%" height="450" src="https://www.youtube.com/embed/jqP5WwzhcU4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                   </div>-->
               </div>
           </div>
        </div>
    </div>

</section>
<!--------------------------------------------------------------
For You section
---------------------------------------------------------------->
<section class="c-for-u">
    <div class="container">
        <div class="main-title">
            <h2>Know us a little better</h2>
        </div>
<!--------------------------------------------------------------
For desktop
---------------------------------------------------------------->
        <div class="row c-for-u-box desktop">
            <div class="col-md-5">
                <div class="c-for-image fsi morden-parents" id="morden-parents"></div>
            </div>
            <div class="col-md-7 flex-column-reverse flex-lg-row mobile-rev">
                <div class="row">
                    <div class="col-4">
                        <div class="sub-box">
                            <a  class="change-img" href="#" id="loving-couple">
                                <img src="img/sub1.jpg" alt="">
                                <div style="height: 310px; display: none;" id="lc"></div>
                                <span class="c-sub-text"><h5>Fertility</h5></span>
                            </a></div>

                    </div>
                    <div class="col-4">
                        <div class="sub-box"><a class="change-img" href="#" id="gynecologist">
                                <img src="img/sub2.jpg" alt="">
                                <div style="height: 310px;  display: none;" id="gy"></div>
                                <span class="c-sub-text"><h5>Gynaecologist</h5></span>
                            </a></div>

                    </div>
                    <div class="col-4">
                        <div class="sub-box"><a class="change-img" href="#" id="corporates">
                                <img src="img/sub3.jpg" alt="">
                                <div style="height: 310px;  display: none;" id="corp"></div>
                                <span class="c-sub-text"><h5>Corporates</h5></span>
                            </a></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-main-heading"><h1 class="bill-info" id="text-box">Pregnancy</h1></div>
                        <div class="c-main-sub-heading"><p id="dis-box">As we walk with you on your journey to parenthood we promise to ensure timely held clinical consultations, screenings and tests. With end to end consultation and attention to details, we plan your path to take a healthy baby home. </p></div>
                        <div style="text-align:left;">
                            <a href="/pregnancy-care" class="btn-insta btbt">Know More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--------------------------------------------------------------
For Mobile
---------------------------------------------------------------->
        <div class="row c-for-u-box mobile">
            <div class="col-md-5 mobile-pad">
                <a href="/pregnancy-care"><div class="c-for-image morden-parents"></div></a>
            </div>
            <div class="col-md-7 flex-column-reverse flex-lg-row mobile-rev">

                <div class="row">
                    <div class="col-md-12">
                        <div class="c-main-heading"><h1 class="bill-info">Pregnancy</h1></div>
                        <div class="c-main-sub-heading"><p>As we walk with you on your journey to parenthood we promise to ensure timely held clinical consultations, screenings and tests. With end to end consultation and attention to details, we plan your path to take a healthy baby home. </p></div>
                        <div class="mobile-btn">
                            <a href="/pregnancy-care" class="btn-insta">Know More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row c-for-u-box mobile">
            <div class="col-md-5 mobile-pad">
                <a href="/loving-couple"><div class="c-for-image loving-couple"></div></a>
            </div>
            <div class="col-md-7 flex-column-reverse flex-lg-row mobile-rev">

                <div class="row">
                    <div class="col-md-12">
                        <div class="c-main-heading"><h1 class="bill-info">Fertility</h1></div>
                        <div class="c-main-sub-heading"><p>1 out of 4 couples experience a troubled route for conceiving. We at Crysta make your journey a lot more smoother with our end to end guidance and best infertility services at our platform.</p></div>
                        <div class="mobile-btn">
                            <a href="/loving-couple" class="btn-insta">Know More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row c-for-u-box mobile">
            <div class="col-md-5 mobile-pad">
                <a href="/gynaecologists"><div class="c-for-image gynecologist"></div></a>
            </div>
            <div class="col-md-7 flex-column-reverse flex-lg-row mobile-rev">

                <div class="row">
                    <div class="col-md-12">
                        <div class="c-main-heading"><h1 class="bill-info">Gynaecologist</h1></div>
                        <div class="c-main-sub-heading"><p>Reputed gynaecologists and multidisciplinary health specialists on panel, which caters to all reproduction related consultations. Be a part of our society and deliver happiness with us at Crysta!</p></div>
                        <div class="mobile-btn">
                            <a href="/gynaecologists" class="btn-insta">Know More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row c-for-u-box mobile">
            <div class="col-md-5 mobile-pad">
               <a href="/corporates"> <div class="c-for-image corporates"></div></a>
            </div>
            <div class="col-md-7 flex-column-reverse flex-lg-row mobile-rev">

                <div class="row">
                    <div class="col-md-12">
                        <div class="c-main-heading"><h1 class="bill-info">Corporates</h1></div>
                        <div class="c-main-sub-heading"><p>Crysta provides comprehensive fertility and pregnancy benefits for your employees, sending the message of inclusivity and support to your diverse workforce looking to start a family.</p></div>
                        <div class="mobile-btn">
                            <a href="/corporates" class="btn-insta">Know More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</section>
<selection>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="margin-top: 2rem;" class="main-title">
                    <h2>Categories of Pregnancy</h2>
                    <div class="why-choose-logos-item">
                        <ul class="why-choose-box home-categories">
                            <li class="border-r">
                                <div>

                                    <img src="img/Natural-Pregnancy.svg" alt="">



                                </div>
                                <h4>Natural Pregnancy</h4>
                                <ul class="sub-itemss box-f-1"><li>Hormonal test</li>
                                    <li>USGs</li>
                                    <li>Ovulation Cycle Track</li>
                                    <li>Follicular Monitoring Test</li>
                                    <li>Sperm Health</li>
                                    <li>Marker Test</li>
                                    <li>NIPS</li>
                                    <li>KT/FISH</li>
                                    <li>NBS</li>
                                </ul>
                            </li>

                            <li class="border-r">
                                <div>


                                    <img class="dp" src="img/Delayed-Pregnancy.svg" alt="">


                                </div>
                                <h4 class="home-box-one">Delayed Pregnancy</h4>
                                <ul class="sub-itemss"><li>Hormonal Test</li>
                                    <li>USGs</li>
                                    <li>Ovulation Cycle Track</li>
                                    <li>Follicular Monitoring Test</li>
                                    <li>Couple Karyotyping</li>
                                    <li>Sperm Health</li>
                                    <li>Y-Chr Microdeletion</li>
                                    <li>Endometrial Health</li>
                                    <li>Pelvic Floor Inflammation Test</li>
                                    <li>Marker Test</li>
                                    <li>NIPS</li>
                                    <li>KT/FISH</li>
                                    <li>NBS</li>
                                </ul>
                            </li>

                            <li class="border-r">
                                <div>


                                    <img class="dp1" src="img/Assisted-Pregnancy.svg" alt="">

                                </div>
                                <h4 class="home-box-two">Assisted Pregnancy</h4>
                                <ul class="sub-itemss box-f-1"><li>Hormonal Test</li>
                                    <li>USGs</li>
                                    <li>Couple Karyotyping</li>
                                    <li>Sperm Health</li>
                                    <li>Y-Chr Microdeletion</li>
                                    <li>ERA/ Endometritis</li>
                                    <li>PGS/PGD</li>
                                    <li>Marker Test</li>
                                    <li>NIPS</li>
                                    <li>NBS</li></ul>
                            </li>

                            <li>
                                <div>


                                    <img src="img/Super-Assisted-Pregnancy.svg" alt="">


                                </div>
                                <h4>Super Assisted Pregnancy</h4>
                                <ul class="sub-itemss box-f-2"><li>Hormonal Test</li>
                                    <li>USGs</li>
                                    <li>Couple Carrier Screening</li>
                                    <li>Sperm Health</li>
                                    <li>Y-Chr Microdeletion</li>
                                    <li>Chromosomal Microarray</li>
                                    <li>Mendelian Disorders</li>
                                    <li>Multigene Panel</li>
                                    <li>Whole Exome/ Genome</li>
                                    <li>Marker Test</li>
                                    <li>NIPS</li>
                                    <li>NBS</li></ul>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</selection>
<!--------------------------------------------------------------
For You section
---------------------------------------------------------------->
<section class="page-index-for-you">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title">
                  <h2>Crysta timeline for you to</h2>
                    <p class="captag"><b>#TakeAHealthyBabyHome</b></p>
                    <p class="cap">From planning to conceiving here is how we chalk out your path, step by step.</p>
                </div>
                <div class="row page-index-how__section-1 rev">
                    <div class="col-xs-12 col-sm-6">
                        <div class="page-index-how__section-container-1">
                            <div class="u-text-darkest">
                                <div class="step-number">1</div>
                                <div class="step-title">
                                    From the first time you dream of having a baby
                                </div>
                                <p class="page-index-how__description-1 box-m">
                                    We help you realize this dream of becoming parents from planning till pregnancy by taking care of all fertility and pregnancy related obstacles.<p class="step-sub-text box-m">Crysta Offering: Pre-conception Consultation | Counselling Sessions | Fertility Testing</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                       <div class="step-image"> <img src="/img/step1.png" alt="The First Step"></div>
                    </div>

                </div>
                <div class="row   page-index-how__section-1">
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="step-image"> <img src="/img/step2.png" alt="Good News"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="page-index-how__section-container-1">
                            <div class="u-text-darkest">
                                <div class="step-number ">2</div>
                                <div class="step-title">
                                    From the first “Good news!”
                                </div>
                                <p class="page-index-how__description-1 box-m1">
                                    While you take the first step to the next, we deliver personalized guidance and give you a glimpse of the future journey ahead of you.<p class="step-sub-text box-m1">Crysta Offering: Pregnancy Counselling | Gynaecologist Consultation | Genetic Counselling | Pregnancy Testing</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row page-index-how__section-1 rev">
                    <div class="col-xs-12 col-sm-6">
                        <div class="page-index-how__section-container-1">
                            <div class="u-text-darkest">
                                <div class="step-number ">3</div>
                                <div class="step-title">
                                    While you enjoy bonding with your baby!!
                                </div>
                                <p class="page-index-how__description-1 box-m2">
                                    Crysta takes care of all your appointments and routine tests through our flexible and unique pregnancy/fertility packages.<p class="step-sub-text box-m2">Crysta Offering: Gynaecology Sessions | Pregnancy Test Packages</p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="step-image">  <img src="/img/step3.png" alt="Pregnancy Test Packages"></div>
                    </div>

                </div>
                <div class="row page-index-how__section-1">
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="step-image"> <img class="last-step" src="/img/step4.png" alt="New Born Screening Packages"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="page-index-how__section-container-1">
                            <div class="u-text-darkest">
                                <div class="step-number ">4</div>
                                <div class="step-title">
                                    Till you take your healthy baby home!
                                </div>
                                <p class="page-index-how__description-1 box-m3">
                                    Crysta ensures the well being of your baby even beyond delivery by offering special New Born Screening packages.<p class="step-sub-text box-m3">Crysta Offering: Gynaecologist Consultation | Pregnancy Test Packages | New Born Screening</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="text-align: center" class="col-sm-12">
                    <a href="/pregnancy-care" class="btn-insta">Get Started</a>
                </div>
        </div>
    </div>

</section>
<!--------------------------------------------------------------
Why choose Crysta
---------------------------------------------------------------->
<section class="why-choose">
    <div class="container">
        <div class="main-title">
            <h2>What to expect with Crysta</h2>
        </div>
        <div class="why-choose-text home-wc">
            <p>From doing the 1000s of diagnostics tests daily, in-house counselling to scientific<br> innovations in fertility and reproductive health, Crysta is one of it's kind
            </p>
        </div>
        <div class="why-choose-logos-item">
            <ul class="why-choose-box home-why-choose">
                <li>
                    <div>


                        <?xml version="1.0" encoding="utf-8"?>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 181.9 181.9" style="enable-background:new 0 0 181.9 181.9;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:inline;fill:#FF7B9C;}
    .st2{display:inline;fill:#F27095;}
    .st3{display:inline;fill:none;stroke:#893F87;stroke-miterlimit:10;}
    .st4{fill:#F8F3F7;}
    .st5{fill:#01A7E5;}
    .st6{fill:#0597E0;}
    .st7{fill:#E84989;}
    .st8{fill:#BF3A7C;}
    .st9{fill:none;stroke:#893F87;stroke-miterlimit:10;}
    .st10{fill:#352787;}
    .st11{fill:#251F63;}
    .st12{fill:#B5D65C;}
    .st13{fill:#DD3A3A;}
    .st14{fill:#E55A90;}
    .st15{fill:#FF7B9C;}
    .st16{fill:#F27095;}
    .st17{fill:#893F87;}
    .st18{fill:#753675;}
    .st19{fill:none;stroke:#FF7B9C;stroke-width:0.5;stroke-miterlimit:10;}
    .st20{fill:none;stroke:#753675;stroke-miterlimit:10;}
    .st21{fill:#324175;}
    .st22{fill:#EF6F9A;}
    .st23{fill:#485696;}
    .st24{fill:#E84855;}
    .st25{fill:#86CB92;}
    .st26{fill:#64AF6B;}
    .st27{fill:#4AA34E;}
    .st28{fill:#DBFE87;}
    .st29{fill:#A9C642;}
    .st30{fill:#6675AA;}
    .st31{fill:#FB3640;}
    .st32{fill:#FF6700;}
    .st33{fill:#1B264F;}
    .st34{fill:#3D315B;}
    .st35{fill:#FFFFFF;}
    .st36{fill:#43A848;}
    .st37{fill:#EA6E6E;}
    .st38{fill:#F45656;}
    .st39{fill:#BC1D1D;}
    .st40{fill:#243C7F;}
    .st41{fill:none;stroke:#000000;stroke-width:0.5;stroke-miterlimit:10;}
    .st42{fill:#FFC5D6;}
    .st43{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    .st44{fill:#524DB5;}
    .st45{fill:#385CBB;}
    .st46{fill:#253E99;}
    .st47{fill:#E85B9C;}
    .st48{fill:#C93F84;}
    .st49{fill:#86D385;}
    .st50{fill:none;stroke:#253E99;stroke-width:0.25;stroke-miterlimit:10;}
    .st51{fill:#C62020;}
    .st52{fill:none;}
    .st53{fill:#1D498D;}
    .st54{fill:#E35096;}
    .st55{clip-path:url(#SVGID_2_);}
    .st56{clip-path:url(#SVGID_4_);}
    .st57{fill:none;stroke:#485696;stroke-miterlimit:10;}
    .st58{fill:#F899BB;}
    .st59{fill:#F77FB0;}
    .st60{fill:#EB5E93;}
    .st61{display:inline;fill:#CACAEA;}
    .st62{display:inline;}
    .st63{fill:#CACAEA;}
    .st64{fill:#EAC1D9;}
    .st65{clip-path:url(#SVGID_6_);}
    .st66{clip-path:url(#SVGID_8_);}
    .st67{clip-path:url(#SVGID_10_);}
    .st68{clip-path:url(#SVGID_12_);}
    .st69{fill:#EACDC5;}
    .st70{fill:#69326B;}
    .st71{fill:#E6E9ED;}
    .st72{fill:#32327C;}
    .st73{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
    .st74{fill:#211968;}
    .st75{clip-path:url(#SVGID_14_);}
    .st76{clip-path:url(#SVGID_16_);}
    .st77{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:square;stroke-linejoin:bevel;stroke-miterlimit:10;}
    .st78{clip-path:url(#SVGID_18_);}
    .st79{fill:none;stroke:#7C3C7C;stroke-width:6;stroke-miterlimit:10;}
    .st80{fill:#7C3C7C;}
    .st81{fill:none;stroke:#7C3C7C;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .st82{clip-path:url(#SVGID_20_);}
    .st83{clip-path:url(#SVGID_22_);}
    .st84{clip-path:url(#SVGID_24_);}
    .st85{clip-path:url(#SVGID_26_);}
    .st86{fill:none;stroke:#DBFE87;stroke-width:4;stroke-miterlimit:10;}
    .st87{fill:none;stroke:#DBFE87;stroke-width:3.8275;stroke-miterlimit:10;}
    .st88{clip-path:url(#SVGID_28_);}
    .st89{fill:none;stroke:#352787;stroke-width:4;stroke-miterlimit:10;}
    .st90{clip-path:url(#SVGID_30_);}
</style>
                            <g id="Layer_3" class="st0">
                            </g>
                            <g id="Layer_2">
                            </g>
                            <g id="Layer_7">
                            </g>
                            <g id="Layer_6">
                            </g>
                            <g id="Layer_5">
                            </g>
                            <g id="Layer_4" class="st0">
                            </g>
                            <g id="Layer_1">
                                <g>
                                    <circle class="st10" cx="91" cy="91" r="91"/>
                                    <g>
                                        <path class="st87" d="M137,77.4v29.2c0,6.5-5.3,11.8-11.8,11.8s-11.8-5.3-11.8-11.8V62.9c0-6.5-5.3-11.8-11.8-11.8
				S90,56.4,90,62.9v56.2c0,6.5-5.3,11.8-11.8,11.8c-6.5,0-11.8-5.3-11.8-11.8V88.2c0-6.5-5.3-11.8-11.8-11.8s-11.8,5.3-11.8,11.8
				v15.6"/>
                                        <circle class="st5" cx="42.9" cy="103.8" r="8.7"/>
                                        <circle class="st5" cx="137" cy="77.4" r="8.7"/>
                                    </g>
                                </g>
                            </g>
</svg>


                    </div>
                   <h4>Personalised Pregnancy/Fertility Journey</h4>
<!--                    <p class="box-usp-one">With deeper relationships with you, we navigate this complete journey together, offer test relevant to you at each stage and counselling when you want us to hear but also say</p>-->
                </li>

             
                <li>
                    <div>


                        <?xml version="1.0" encoding="utf-8"?>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 181.9 181.9" style="enable-background:new 0 0 181.9 181.9;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:inline;fill:#FF7B9C;}
    .st2{display:inline;fill:#F27095;}
    .st3{display:inline;fill:none;stroke:#893F87;stroke-miterlimit:10;}
    .st4{fill:#F8F3F7;}
    .st5{fill:#01A7E5;}
    .st6{fill:#0597E0;}
    .st7{fill:#E84989;}
    .st8{fill:#BF3A7C;}
    .st9{fill:none;stroke:#893F87;stroke-miterlimit:10;}
    .st10{fill:#352787;}
    .st11{fill:#251F63;}
    .st12{fill:#B5D65C;}
    .st13{fill:#DD3A3A;}
    .st14{fill:#E55A90;}
    .st15{fill:#FF7B9C;}
    .st16{fill:#F27095;}
    .st17{fill:#893F87;}
    .st18{fill:#753675;}
    .st19{fill:none;stroke:#FF7B9C;stroke-width:0.5;stroke-miterlimit:10;}
    .st20{fill:none;stroke:#753675;stroke-miterlimit:10;}
    .st21{fill:#324175;}
    .st22{fill:#EF6F9A;}
    .st23{fill:#485696;}
    .st24{fill:#E84855;}
    .st25{fill:#86CB92;}
    .st26{fill:#64AF6B;}
    .st27{fill:#4AA34E;}
    .st28{fill:#DBFE87;}
    .st29{fill:#A9C642;}
    .st30{fill:#6675AA;}
    .st31{fill:#FB3640;}
    .st32{fill:#FF6700;}
    .st33{fill:#1B264F;}
    .st34{fill:#3D315B;}
    .st35{fill:#FFFFFF;}
    .st36{fill:#43A848;}
    .st37{fill:#EA6E6E;}
    .st38{fill:#F45656;}
    .st39{fill:#BC1D1D;}
    .st40{fill:#243C7F;}
    .st41{fill:none;stroke:#000000;stroke-width:0.5;stroke-miterlimit:10;}
    .st42{fill:#FFC5D6;}
    .st43{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    .st44{fill:#524DB5;}
    .st45{fill:#385CBB;}
    .st46{fill:#253E99;}
    .st47{fill:#E85B9C;}
    .st48{fill:#C93F84;}
    .st49{fill:#86D385;}
    .st50{fill:none;stroke:#253E99;stroke-width:0.25;stroke-miterlimit:10;}
    .st51{fill:#C62020;}
    .st52{fill:none;}
    .st53{fill:#1D498D;}
    .st54{fill:#E35096;}
    .st55{clip-path:url(#SVGID_2_);}
    .st56{clip-path:url(#SVGID_4_);}
    .st57{fill:none;stroke:#485696;stroke-miterlimit:10;}
    .st58{fill:#F899BB;}
    .st59{fill:#F77FB0;}
    .st60{fill:#EB5E93;}
    .st61{display:inline;fill:#CACAEA;}
    .st62{display:inline;}
    .st63{fill:#CACAEA;}
    .st64{fill:#EAC1D9;}
    .st65{clip-path:url(#SVGID_6_);}
    .st66{clip-path:url(#SVGID_8_);}
    .st67{clip-path:url(#SVGID_10_);}
    .st68{clip-path:url(#SVGID_12_);}
    .st69{fill:#EACDC5;}
    .st70{fill:#69326B;}
    .st71{fill:#E6E9ED;}
    .st72{fill:#32327C;}
    .st73{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
    .st74{fill:#211968;}
    .st75{clip-path:url(#SVGID_14_);}
    .st76{clip-path:url(#SVGID_16_);}
    .st77{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:square;stroke-linejoin:bevel;stroke-miterlimit:10;}
    .st78{clip-path:url(#SVGID_18_);}
    .st79{fill:none;stroke:#7C3C7C;stroke-width:6;stroke-miterlimit:10;}
    .st80{fill:#7C3C7C;}
    .st81{fill:none;stroke:#7C3C7C;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .st82{clip-path:url(#SVGID_20_);}
    .st83{clip-path:url(#SVGID_22_);}
    .st84{clip-path:url(#SVGID_24_);}
    .st85{clip-path:url(#SVGID_26_);}
    .st86{fill:none;stroke:#DBFE87;stroke-width:4;stroke-miterlimit:10;}
    .st87{fill:none;stroke:#DBFE87;stroke-width:3.8275;stroke-miterlimit:10;}
    .st88{clip-path:url(#SVGID_28_);}
    .st89{fill:none;stroke:#352787;stroke-width:4;stroke-miterlimit:10;}
    .st90{clip-path:url(#SVGID_30_);}
</style>
                            <g id="Layer_3" class="st0">
                            </g>
                            <g id="Layer_2">
                            </g>
                            <g id="Layer_7">
                            </g>
                            <g id="Layer_6">
                            </g>
                            <g id="Layer_5">
                            </g>
                            <g id="Layer_4" class="st0">
                            </g>
                            <g id="Layer_1">
                                <g>
                                    <circle class="st10" cx="91" cy="91" r="91"/>
                                    <g>
                                        <path class="st28" d="M60.2,139.3c-0.4,0-0.9-0.1-1.2-0.4c-0.6-0.5-1-1.3-0.8-2.1l2.7-13.7H57c-8.3,0-15-6.8-15-15V66
				c0-8.3,6.8-15,15-15h68c8.3,0,15,6.8,15,15v42.1c0,8.3-6.8,15-15,15H91.5l-30.3,15.9C60.9,139.2,60.5,139.3,60.2,139.3z M57,55.1
				c-6,0-10.9,4.9-10.9,10.9v42.1c0,6,4.9,10.9,10.9,10.9h6.5c0.6,0,1.2,0.3,1.6,0.8c0.4,0.5,0.6,1.1,0.4,1.7l-2.4,11.9L90,119.2
				c0.3-0.2,0.6-0.2,1-0.2h34c6,0,10.9-4.9,10.9-10.9V66c0-6-4.9-10.9-10.9-10.9H57z"/>
                                        <polygon class="st28" points="81.6,69.5 106.1,86.4 81.6,103.4 			"/>
                                    </g>
                                </g>
                            </g>
</svg>

                    </div>
                    <h4 class="home-box-two">On-Demand Video Consultations</h4>
<!--                    <p class="custom-padding1 box-usp-three">Affordable and flexible packages that you may customise too</p>-->
                </li>

                <li>
                    <div>


                        <?xml version="1.0" encoding="utf-8"?>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 181.9 181.9" style="enable-background:new 0 0 181.9 181.9;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:inline;fill:#FF7B9C;}
    .st2{display:inline;fill:#F27095;}
    .st3{display:inline;fill:none;stroke:#893F87;stroke-miterlimit:10;}
    .st4{fill:#F8F3F7;}
    .st5{fill:#01A7E5;}
    .st6{fill:#0597E0;}
    .st7{fill:#E84989;}
    .st8{fill:#BF3A7C;}
    .st9{fill:none;stroke:#893F87;stroke-miterlimit:10;}
    .st10{fill:#352787;}
    .st11{fill:#251F63;}
    .st12{fill:#B5D65C;}
    .st13{fill:#DD3A3A;}
    .st14{fill:#E55A90;}
    .st15{fill:#FF7B9C;}
    .st16{fill:#F27095;}
    .st17{fill:#893F87;}
    .st18{fill:#753675;}
    .st19{fill:none;stroke:#FF7B9C;stroke-width:0.5;stroke-miterlimit:10;}
    .st20{fill:none;stroke:#753675;stroke-miterlimit:10;}
    .st21{fill:#324175;}
    .st22{fill:#EF6F9A;}
    .st23{fill:#485696;}
    .st24{fill:#E84855;}
    .st25{fill:#86CB92;}
    .st26{fill:#64AF6B;}
    .st27{fill:#4AA34E;}
    .st28{fill:#DBFE87;}
    .st29{fill:#A9C642;}
    .st30{fill:#6675AA;}
    .st31{fill:#FB3640;}
    .st32{fill:#FF6700;}
    .st33{fill:#1B264F;}
    .st34{fill:#3D315B;}
    .st35{fill:#FFFFFF;}
    .st36{fill:#43A848;}
    .st37{fill:#EA6E6E;}
    .st38{fill:#F45656;}
    .st39{fill:#BC1D1D;}
    .st40{fill:#243C7F;}
    .st41{fill:none;stroke:#000000;stroke-width:0.5;stroke-miterlimit:10;}
    .st42{fill:#FFC5D6;}
    .st43{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    .st44{fill:#524DB5;}
    .st45{fill:#385CBB;}
    .st46{fill:#253E99;}
    .st47{fill:#E85B9C;}
    .st48{fill:#C93F84;}
    .st49{fill:#86D385;}
    .st50{fill:none;stroke:#253E99;stroke-width:0.25;stroke-miterlimit:10;}
    .st51{fill:#C62020;}
    .st52{fill:none;}
    .st53{fill:#1D498D;}
    .st54{fill:#E35096;}
    .st55{clip-path:url(#SVGID_2_);}
    .st56{clip-path:url(#SVGID_4_);}
    .st57{fill:none;stroke:#485696;stroke-miterlimit:10;}
    .st58{fill:#F899BB;}
    .st59{fill:#F77FB0;}
    .st60{fill:#EB5E93;}
    .st61{display:inline;fill:#CACAEA;}
    .st62{display:inline;}
    .st63{fill:#CACAEA;}
    .st64{fill:#EAC1D9;}
    .st65{clip-path:url(#SVGID_6_);}
    .st66{clip-path:url(#SVGID_8_);}
    .st67{clip-path:url(#SVGID_10_);}
    .st68{clip-path:url(#SVGID_12_);}
    .st69{fill:#EACDC5;}
    .st70{fill:#69326B;}
    .st71{fill:#E6E9ED;}
    .st72{fill:#32327C;}
    .st73{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
    .st74{fill:#211968;}
    .st75{clip-path:url(#SVGID_14_);}
    .st76{clip-path:url(#SVGID_16_);}
    .st77{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:square;stroke-linejoin:bevel;stroke-miterlimit:10;}
    .st78{clip-path:url(#SVGID_18_);}
    .st79{fill:none;stroke:#7C3C7C;stroke-width:6;stroke-miterlimit:10;}
    .st80{fill:#7C3C7C;}
    .st81{fill:none;stroke:#7C3C7C;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .st82{clip-path:url(#SVGID_20_);}
    .st83{clip-path:url(#SVGID_22_);}
    .st84{clip-path:url(#SVGID_24_);}
    .st85{clip-path:url(#SVGID_26_);}
    .st86{fill:none;stroke:#DBFE87;stroke-width:4;stroke-miterlimit:10;}
    .st87{fill:none;stroke:#DBFE87;stroke-width:3.8275;stroke-miterlimit:10;}
    .st88{clip-path:url(#SVGID_28_);}
    .st89{fill:none;stroke:#352787;stroke-width:4;stroke-miterlimit:10;}
    .st90{clip-path:url(#SVGID_30_);}
</style>
                            <g id="Layer_3" class="st0">
                            </g>
                            <g id="Layer_2">
                            </g>
                            <g id="Layer_7">
                            </g>
                            <g id="Layer_6">
                            </g>
                            <g id="Layer_5">
                            </g>
                            <g id="Layer_4" class="st0">
                            </g>
                            <g id="Layer_1">
                                <g>
                                    <circle class="st10" cx="91" cy="91" r="91"/>
                                    <g>
                                        <defs>
                                            <circle id="SVGID_29_" cx="91" cy="91" r="91"/>
                                        </defs>
                                        <clipPath id="SVGID_2_">
                                            <use xlink:href="#SVGID_29_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <g class="st55">
                                            <g>
                                                <polygon class="st28" points="105.4,45.5 145.5,71.9 138,83.2 108.1,85 100,55.2 					"/>
                                                <g>
                                                    <path class="st10" d="M106.9,68.4l-3.4-20.5L48.6,57c-5.2,0.9-8.8,5.8-7.9,11.1L61.9,196l99.4-16.5l-17.4-105l-23.1,3.8
							C114.2,79.4,107.9,74.9,106.9,68.4z"/>
                                                </g>
                                            </g>
                                            <path class="st87" d="M106.9,68.4l-3.4-20.5L48.6,57c-5.2,0.9-8.8,5.8-7.9,11.1L61.9,196l99.4-16.5l-17.4-105l-23.1,3.8
					C114.2,79.4,107.9,74.9,106.9,68.4z"/>
                                            <line class="st89" x1="70.4" y1="111.4" x2="123.7" y2="102.4"/>
                                            <line class="st89" x1="73.4" y1="129.1" x2="126.7" y2="120.1"/>
                                            <line class="st89" x1="76.3" y1="146.8" x2="129.6" y2="137.8"/>
                                        </g>
                                    </g>
                                    <line class="st87" x1="70.4" y1="111.4" x2="123.7" y2="102.4"/>
                                    <line class="st87" x1="73.4" y1="129.1" x2="126.7" y2="120.1"/>
                                    <line class="st87" x1="76.3" y1="146.8" x2="129.6" y2="137.8"/>
                                </g>
                            </g>
</svg>

                    </div>
                    <h4> Book Testing/Screening Appointments</h4>
<!--                    <p class="box-usp-four">Pipeline of new innovative products and services in fertility and reproductive health like none others</p>-->
                </li>

                <li>
                    <div>


                        <?xml version="1.0" encoding="utf-8"?>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 181.9 181.9" style="enable-background:new 0 0 181.9 181.9;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:inline;fill:#FF7B9C;}
    .st2{display:inline;fill:#F27095;}
    .st3{display:inline;fill:none;stroke:#893F87;stroke-miterlimit:10;}
    .st4{fill:#F8F3F7;}
    .st5{fill:#01A7E5;}
    .st6{fill:#0597E0;}
    .st7{fill:#E84989;}
    .st8{fill:#BF3A7C;}
    .st9{fill:none;stroke:#893F87;stroke-miterlimit:10;}
    .st10{fill:#69326B;}
    .st11{fill:#251F63;}
    .st12{fill:#B5D65C;}
    .st13{fill:#DD3A3A;}
    .st14{fill:#E55A90;}
    .st15{fill:#FF7B9C;}
    .st16{fill:#F27095;}
    .st17{fill:#893F87;}
    .st18{fill:#753675;}
    .st19{fill:none;stroke:#FF7B9C;stroke-width:0.5;stroke-miterlimit:10;}
    .st20{fill:none;stroke:#753675;stroke-miterlimit:10;}
    .st21{fill:#324175;}
    .st22{fill:#EF6F9A;}
    .st23{fill:#485696;}
    .st24{fill:#E84855;}
    .st25{fill:#86CB92;}
    .st26{fill:#64AF6B;}
    .st27{fill:#4AA34E;}
    .st28{fill:#DBFE87;}
    .st29{fill:#A9C642;}
    .st30{fill:#6675AA;}
    .st31{fill:#FB3640;}
    .st32{fill:#FF6700;}
    .st33{fill:#1B264F;}
    .st34{fill:#3D315B;}
    .st35{fill:#FFFFFF;}
    .st36{fill:#43A848;}
    .st37{fill:#EA6E6E;}
    .st38{fill:#F45656;}
    .st39{fill:#BC1D1D;}
    .st40{fill:#243C7F;}
    .st41{fill:none;stroke:#000000;stroke-width:0.5;stroke-miterlimit:10;}
    .st42{fill:#FFC5D6;}
    .st43{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    .st44{fill:#524DB5;}
    .st45{fill:#385CBB;}
    .st46{fill:#253E99;}
    .st47{fill:#E85B9C;}
    .st48{fill:#C93F84;}
    .st49{fill:#86D385;}
    .st50{fill:none;stroke:#253E99;stroke-width:0.25;stroke-miterlimit:10;}
    .st51{fill:#C62020;}
    .st52{fill:none;}
    .st53{fill:#1D498D;}
    .st54{fill:#E35096;}
    .st55{clip-path:url(#SVGID_2_);}
    .st56{clip-path:url(#SVGID_4_);}
    .st57{fill:none;stroke:#485696;stroke-miterlimit:10;}
    .st58{fill:#F899BB;}
    .st59{fill:#F77FB0;}
    .st60{fill:#EB5E93;}
    .st61{display:inline;fill:#CACAEA;}
    .st62{display:inline;}
    .st63{fill:#CACAEA;}
    .st64{fill:#EAC1D9;}
    .st65{clip-path:url(#SVGID_6_);}
    .st66{clip-path:url(#SVGID_8_);}
    .st67{clip-path:url(#SVGID_10_);}
    .st68{clip-path:url(#SVGID_12_);}
    .st69{fill:#EACDC5;}
    .st70{fill:#69326B;}
    .st71{fill:#E6E9ED;}
    .st72{fill:#32327C;}
    .st73{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
    .st74{fill:#211968;}
    .st75{clip-path:url(#SVGID_14_);}
    .st76{clip-path:url(#SVGID_16_);}
    .st77{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:square;stroke-linejoin:bevel;stroke-miterlimit:10;}
    .st78{clip-path:url(#SVGID_18_);}
    .st79{fill:none;stroke:#7C3C7C;stroke-width:6;stroke-miterlimit:10;}
    .st80{fill:#7C3C7C;}
    .st81{fill:none;stroke:#7C3C7C;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .st82{clip-path:url(#SVGID_20_);}
    .st83{clip-path:url(#SVGID_22_);}
    .st84{clip-path:url(#SVGID_24_);}
    .st85{clip-path:url(#SVGID_26_);}
    .st86{fill:none;stroke:#DBFE87;stroke-width:4;stroke-miterlimit:10;}
    .st87{fill:none;stroke:#DBFE87;stroke-width:3.8275;stroke-miterlimit:10;}
    .st88{clip-path:url(#SVGID_28_);}
    .st89{fill:none;stroke:#352787;stroke-width:4;stroke-miterlimit:10;}
    .st90{clip-path:url(#SVGID_30_);}
</style>
                            <g id="Layer_3" class="st0">
                            </g>
                            <g id="Layer_2">
                            </g>
                            <g id="Layer_7">
                            </g>
                            <g id="Layer_6">
                            </g>
                            <g id="Layer_5">
                            </g>
                            <g id="Layer_4" class="st0">
                            </g>
                            <g id="Layer_1">
                                <g>
                                    <circle class="st10" cx="91" cy="91" r="91"/>
                                    <g>
                                        <path class="st86" d="M131.5,60.5h-81c-5.4,0-9.7,4.3-9.7,9.7v40.9c0,5.4,4.3,9.7,9.7,9.7h81c5.4,0,9.7-4.3,9.7-9.7V70.2
				C141.2,64.8,136.8,60.5,131.5,60.5z"/>
                                        <line class="st86" x1="59.9" y1="60.5" x2="59.9" y2="121.5"/>
                                        <line class="st86" x1="141.2" y1="100.4" x2="40.8" y2="100.4"/>
                                    </g>
                                </g>
                            </g>
</svg>

                    </div>
                    <h4 class="home-box-three">Pamper with Hampers</h4>
<!--                    <p>A unique platform, functioning as an 'E-Fertility Module', Crysta provides you with all the reproductive healthcare services as you sit at home!</p>-->
                </li>
            </ul>

        </div>
        <div style="text-align: center" class="col-sm-12">
            <a href="/pdf/Crysta-Brochure.pdf"  class="btn-insta">See Packages</a>
        </div>
    </div>


</section>
<!--------------------------------------------------------------
Hear It From Them
---------------------------------------------------------------->

<section class="h-them">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div class="main-title">
                    <h2>Hear it<br> from them</h2>
                </div>
                <div class="testimonial slider">
                    <div>
                        <div class="row t-box">
                        <div class="col-sm-3"><img src="/img/testimonial/t1.jpg" alt="Client Testimonials"></div>
                        <div class="col-sm-9">
                           <div class="t-dis">
                               <h4>Tanya Rana</h4>
                               <p>Crysta care really is true to it's name, they didn't only instil the confidence in us in regards to their service, but also made us believe that they are our well-wishers; with prompt guidance and counselling.</p>
                           </div>
                        </div>
                    </div>
                    </div>
                    <div>
                        <div class="row t-box">
                            <div class="col-sm-3"><img src="/img/testimonial/t1.jpg" alt="Client Testimonials"></div>
                            <div class="col-sm-9">
                                <div class="t-dis">
                                    <h4>Tanya Rana</h4>
                                    <p>Crysta care really is true to it's name, they didn't only instil the confidence in us in regards to their service, but also made us believe that they are our well-wishers; with prompt guidance and counselling.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


</section>
<!--------------------------------------------------------------
Good hands
---------------------------------------------------------------->
<section class="good-hands">
    <div class="container-fluid good-hands-box">
        <div class="row">

                <div class="col-sm-12">
                    <div class="main-title">
                        <h2>We are specialist</h2> 
                    </div>
                    <div class="team-top-text">
                        <p>From delivering the best in class services with our reputed OBGYNs pan India,<br> Crysta is one of it's kind digital platform that provides fertility solutions.
                        </p>
                    </div>
                    <div class="good-hand-team slider">
                        <div>
                            <div class="team-img"><img src="img/team/RITU.jpg" alt=""></div>
                        <div class="team-info"><h5>Dr. Ritu Nair</h5>
                            <p>Chief Medical Geneticist, Craft Hospital</p>
                        </div>
                        </div>
                        <div>
                            <div class="team-img"><img src="img/team/SARA.jpg" alt=""></div>
                            <div class="team-info"><h5>Dr. Sarah Bailur</h5>
                                <p>Consultant Paediatrician and Clinical Geneticist, Redcliffe Life Sciences</p>
                            </div>
                        </div>
                        <div>
                            <div class="team-img"><img src="img/team/dr-teena.jpg" alt=""></div>
                            <div class="team-info"><h5>Dr. Deepika Kalo</h5>
                                <p>Scientist, Redcliffe Life Sciences</p>
                            </div>
                        </div> 
						
						
						
						<div>
                            <div class="team-img"><img src="img/team/Dr.-Sarabpreet-Singh.jpg" alt=""></div>
                            <div class="team-info"><h5>Dr. Sarabpreet Singh </h5>
                                <p>Crysta Consultant (Male Infertility)</p>
                            </div>
                        </div>
						
						<div>
                            <div class="team-img"><img src="img/team/Dr.-Aakriti-Gupta-1.jpeg" alt=""></div>
                            <div class="team-info"><h5>Dr. Aakriti Gupta</h5>
                                <p>Crysta Consultant (Gynaecology and Infertility)</p>
                            </div>
                        </div>
						
						<div>
                            <div class="team-img"><img src="img/team/Dr.-Suman-Mahela.jpg" alt=""></div>
                            <div class="team-info"><h5>Dr. Suman Mahela</h5>
                                <p>Crysta Consultant (Obstetrics and Gynaecology)</p>
                            </div>
                        </div>
<!--                        <div>-->
<!--                            <div class="team-img"><img src="img/team/dr-teena.jpg" alt=""></div>-->
<!--                            <div class="team-info"><h5>Dr. Deepika Kalo</h5>-->
<!--                                <p>Scientist, Redcliffe Life Sciences</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <div class="team-img"><img src="img/team/dr-teena.jpg" alt=""></div>-->
<!--                            <div class="team-info"><h5>Dr. Deepika Kalo</h5>-->
<!--                                <p>Scientist, Redcliffe Life Sciences</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <div class="team-img"><img src="img/team/dr-teena.jpg" alt=""></div>-->
<!--                            <div class="team-info"><h5>Dr. Deepika Kalo</h5>-->
<!--                                <p>Scientist, Redcliffe Life Sciences</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <div class="team-img"><img src="img/team/dr-teena.jpg" alt=""></div>-->
<!--                            <div class="team-info"><h5>Dr. Deepika Kalo</h5>-->
<!--                                <p>Scientist, Redcliffe Life Sciences</p>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            <div class="container">
                <div class="row">

                <div class="col-sm-6">
                    <div class="g-box">
                        <div class="good-hands-content">
                            <h4>Reputed OBGYNs</h4>
                        </div>
                        <div>
                            <p>We provide you with expert guidance and solutions, the best in class facility for your needs.<br><br></p>
                        </div>
                    </div>
                    <div class="g-box">
                        <div class="good-hands-content good-hands-content-one">
                            <h4> State of Art Laboratories</h4>
                        </div>
                        <div>
                            <p>We respect your privacy and all your data is safe with us, from samples to reports you get personalised attention, care and guidance.</p>
                        </div>
                    </div>
                </div>
                    <div class="col-sm-6">
                        <div class="g-box">
                            <div class="good-hands-content good-hands-content-two">
                                <h4>Answers to your queries</h4>
                            </div>
                            <div>
                                <p>As we maintain transparency in our process, we pledge to answer all your concerns with our solutions and expert guidance.</p>
                            </div>
                        </div>
                        <div class="g-box">
                            <div class="good-hands-content good-hands-content-three">
                                <h4>End to end counselling</h4>
                            </div>
                            <div>
                                <p>From reminding about your periodic appointments to booking them for you, till the end of this beautiful journey; we'll stand by you!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <img src="/img/shapeone-bottom.svg" class="bottom-swoop">
</section>

<!--------------------------------------------------------------
Everyone Talking
---------------------------------------------------------------->
<section class="e-talking">
    <div class="container">
        <div class="main-title">
            <h2>Everyone's talking</h2>
        </div>
        <div class="logos-item">
            <ul class="logo-box">
                <li>
                    <img src="/img/logos/logo1.png" alt="">
                </li>
                <li>
                    <img src="/img/logos/logo2.png" alt="">
                </li>
                <li>
                    <img src="/img/logos/logo3s.png" alt="">
                </li>
                <li>
                    <img src="/img/logos/logo4s.png" alt="">
                </li>

            </ul>
            <ul class="logo-box second-box">
                <li>
                    <img src="/img/logos/logo5s.png" alt="">
                </li>
                <li>
                    <img src="/img/logos/logo6s.png" alt="">
                </li>
                <li>
                    <img src="/img/logos/logo7s.png" alt="">
                </li>

            </ul>
            <ul class="logo-box third-box">
                <li>
                    <img src="/img/logos/logo8s.png" alt="">
                </li>
            </ul>
        </div>
        <div class="instagram-feed">
            <div class="feed-title">
                <h2><a target="_blank" href="https://www.instagram.com/crystacare/">@crystacare</a></h2>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12">



                    <div class="good-hand-teamm slider">

                        <?php

                        function fetchData($url){
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
                            $result = curl_exec($ch);
                            curl_close($ch);
                            return $result;
                        }

                        $result = fetchData("https://graph.instagram.com/me/media?fields=id,media_type,permalink,media_url,username,timestamp&access_token=IGQVJWU3p3SEpKVFV4bkczdy0zWHNaX19Ic1F2X1hsZAXBzVWJfNHlhTVZAiLVpJbk05VUcyXy1TM244aVVYRjZAaMnJieEx4RkYzb1NTbjR2eXNtVHZAlWGs4eHF6bElmQ3FfN1lENlUxWFdDeldZATnp0UgZDZD");
                        $result = json_decode($result);


                        foreach ($result->data as $post) {

//                            var_dump($post);
//
//                            die();

                            if ($post->media_type == "IMAGE") {
                                ?>


                                <div>
                                    <div class="team-img"><a target="_blank" href="<?php echo $post->permalink; ?>">
                                            <img style="    width: 100%;"
                                                 src="<?php echo $post->media_url; ?>" alt="">
                                        </a></div>

                                </div>

                                <?php

                            }

                        }

                        ?>



                    </div>

<!--                    <ul class="feed-images">-->
<!--                        <li>-->
<!--                            <img src="/img/insta/insta1.jpg" alt="">-->
<!--                        </li>-->
<!---->
<!--                        <li>-->
<!--                            <img src="/img/insta/insta2.jpg" alt="">-->
<!--                        </li>-->
<!---->
<!--                        <li>-->
<!--                            <img src="/img/insta/insta3.jpg" alt="">-->
<!--                        </li>-->
<!---->
<!--                        <li>-->
<!--                            <img src="/img/insta/insta4.jpg" alt="">-->
<!--                        </li>-->
<!---->
<!--                    </ul>-->
				
                </div>
                <div style="text-align: center" class="col-sm-12">
                    <a target="_blank" href="https://www.instagram.com/crystacare/" class="btn-insta">Follow Us</a>
                </div>
            </div>




    </div>


</section>
<!--------------------------------------------------------------
Contact
---------------------------------------------------------------->
<section class="contact">
    <div class="container contact-box">
        <div class="main-title">
            <h2>Contact Us</h2>
        </div>

        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="formBox">
                    <form  name="emailForm" method="post" action="" >
					 

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="inputBox ">
                                    <input type="text" placeholder="First Name" name="username" class="input" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="inputBox">
                                    <input type="text" placeholder="Last Name" name="about"  class="input" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="inputBox">
                                    <input type="text" placeholder="Email" name="user_email" class="input" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="inputBox">
                                    <input type="text" placeholder="Mobile" name="mobile" class="input" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="inputBox">
                                    <select name="subject" id="" class="input select-topic" required>
                                        <option value="">Select Your Query</option>
                                        <option value="Pregnancy">Pregnancy</option>
                                        <option value="Fertility problem">Fertility problem</option>
                                        <option value="Doctor consultation">Doctor consultation</option>
                                        <option value="Counselling">Counselling</option>
                                        <option value="Testing">Testing</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="inputBox">
                                    <textarea name="message" placeholder="Message" id="" class="input" required></textarea>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div style="text-align: center" class="col-sm-12">
                                <input type="submit" class="btn-submit" value="Submit" id="submit" name="submit">
								 
								
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="con-thnx" style="display: none;">
            Form has been submitted! We will contact back to you later.
        </div>

    </div>


</section>
<section class="seo">
    <div class="container">
        <div class="box-collection">
       <h5>Crysta </h5>
        <p>Crysta is a complete reproductive health platform which simplifies, navigates and provides fertility and pregnancy related diagnostic tests and services. Crysta caters not only to the physical health of their clients but also provides counselling services (Fertility/ Pregnancy/Genetic) for their psychological needs. Crysta has its own PCPNDT approved state of the art lab where along with routine tests, advance genetic testing such as Non-Invasive Pre-natal Screening (NIPS), Next Generation Sequencing based testing and embryo screening are done with leading scientific teams based in both Delhi NCR and London. Through Crysta's ovulation tracker and pregnancy calendar, we manage all your appointments and records so that you never miss a date</p>
        </div>
        <div id="text" style="display: none;">
        <h5>What does Crysta provide?</h5>
            <p>Being a progressive platform, Crysta provides online consultations with renowned doctors regarding <a href="https://crysta.care/loving-couple">fertility</a> and <a href="https://crysta.care/pregnancy-care">pregnancy</a> related queries.</p>

            <ul> <li>Crysta caters to <a href="https://book.crysta.care/collections/fertility">diagnostic tests for fertility</a>, pre-pregnancy and pregnancy in exclusive and affordable packages.</li>
                <li>Target focused approach towards both male and female reproductive health issues with personalized treatment plans</li>
                <li>Helps track patient appointments and tests, automated report update with easy and secure access to the data.</li>
                <li>Counselling services for couples seeking consultation regarding fertility or </li>
            </ul>


            <h5>How does Crysta work?</h5>
            <p>Crysta is a digital platform which enables users to book online consultations with our panel of specialists. It also provides a range of diagnostic tests for fertility and pregnancy which can be booked through the <a href="https://book.crysta.care/collections/fertility">online portal</a> on the Crysta website. Individual clinician and client IDs are generated upon registration which allows easy access to the services provided.</p>
       <ul> <li>Simple user login</li>
           <li>On demand specialist consultations</li>
           <li>Appointment tracking and personal Electronic Health Records (EHR) for easy accessibility</li>
           <li>Fertility and Pregnancy Trackers</li>
           <li>Data privacy maintained</li>
       </ul>

                <h5>What is Crystacare?</h5>
            <p>Crysta is a complete reproductive health platform which provides <a href="https://crysta.care/fertility-counselling">fertility</a> and <a href="https://crysta.care/pregnancy-counselling">pregnancy</a> related services. Crystacare provides fertility and pregnancy counselling services for couples who are planning and are on the journey to parenthood. Through its all round screening, testing and counselling services, Crysta provides the same care you provide to your baby. Crysta cares and is here to guide you at every step through fertility problems or through a pregnancy till you take a healthy baby home.</p>
                    <h5>Crysta Pregnancy</h5>
            <p>Crysta provides the best in pregnancy with timely specialist consultations, routine and advanced <a href="https://book.crysta.care/collections/pregnancy">pregnancy testing</a> and screening and counselling services. At Crysta we guide would-be parents through their pregnancy with regular screening, report evaluation and counselling services at every step of the way. A Crysta Pregnancy ensures your pregnancy is a smooth journey till you take a healthy baby home.</p>
                        <h5> Crysta Fertility Platform</h5>
            <p>Crysta provides the best in fertility with on-demandspecialist consultations, routine and advanced <a href="https://book.crysta.care/collections/fertility">fertility testing</a>, screening and counselling services. At Crysta we guide all couples who are facing fertility problems and are unable to achieve a pregnancy. At Crysta we believe that with counselling services and personalized fertility testing options, every couple can embark on the journey to parenthood. The Crysta Fertility platform is a complete reproductive health platform which provides couples the correct, guidance and personalized treatment options to manage fertility problems and achieve a successful pregnancy till they take a healthy baby home.</p>
            <h5>Crysta Fertility Centre </h5>
            <p>Crysta is India’s trusted digital fertility centre. Crysta, with its online digital fertility clinic provides expert fertility care for all couples who are having trouble conceiving. From specialist consultations, counselling services to routine and advanced testing, Crysta provides the best in fertility care. As fertility issues on the rise, Crysta works towards empowering couples planning a pregnancy to focus on their reproductive health. It provides scientifically designed fertility solutions by the leading medical specialists and scientists for couples facing fertility related problems. Together with Crysta, take your fertility decisions into your own hands and take a step closer to your journey to parenthood.</p>
            <h5>Crysta Digital Fertility Platform</h5>
            <p>CrystaDigital <a href="https://crysta.care/loving-couple">Fertility</a> Platform provides end-to-end fertility care to couples facing troubles in achieving a pregnancy. It provides the best in fertility with on-demand specialist consultations, routine and advanced fertility testing for screening and counselling services. As a trusted Digital Fertility Platform, Crysta believes in empowering couples in taking informed decisions regarding their own reproductive health. Crysta through this platform provides Fertility Solutions, scientifically designed by leading medical specialists and scientists for couples facing fertility related problems. Together with Crysta, take your fertility decisions into your own hands and take a step closer to your journey to parenthood.</p>
            </div>
        <div class="btn-container collectionread-btn"><button id="toggle">Read More</button></div>
    </div>


</section>
<!--------------------------------------------------------------
Footer
---------------------------------------------------------------->
<footer>
    <div class="footer-container">
        <div class="container-fluid">

            <div class="row ">
                <!--<div class="col-md-4">
                    <h3>join our mailing list</h3>
                    <form class="email-footer">

                        <div class="row">
                            <div class="col-sm-10">
                                <div class="inputBox">
                                    <input type="text" placeholder="Email Address" name="" class="input">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>-->

                <!--                    <div class="col-md-3">-->
                <!--                        <ul class="footer-links">-->
                <!--                        -->
                <!---->
                <!--                        </ul>-->
                <!--                    </div>-->
    <div class="col-md-2">
	<p>&nbsp;</p>
	</div>
                <div class="col-md-5">
                    <ul class="footer-links">
                        <li><a href="/about">About</a></li>
                        <li><a href="https://blog.crysta.care/">Blog</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                        <li><a href="/pdf/Crysta-Brochure.pdf" download>Download Brochure</a></li>
                    </ul>
                </div>


                <div class="col-md-5">
                    <h3>Social</h3>
                    <ul class="social-icon">
                        <li>
                            <a target="_blank" href="https://www.facebook.com/crystacare/" rel="nofollow">
                                <svg width="10px" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 264 512"><path d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path></svg>

                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="https://twitter.com/CrystaCare" rel="nofollow">
                                <svg width="20px" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="https://www.youtube.com/channel/UCqDhliFEVw2dnE923hUBM0g" rel="nofollow">
                                <svg width="20px" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="https://www.instagram.com/crystacare/" rel="nofollow">
                                <svg width="20px" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--row ends here-->
            </div>

            <!--container ends here-->

        </div>
    </div>

    <div class="copyright">
        <div class="col-md-12">
            <p>
                <a href="#">Copyright ©Crysta 2020. All Rights Reserved.</a>
            </p>
            <p style="font-size: 0.9rem;line-height: 17px;">Disclaimer: As per "Pre-Natal Diagnostic Techniques (Regulation and prevention of Misuse) Act, 1994" the lab strictly does not determine the sex of the fetus.</p>
        </div>
    </div>


    <!--row ends here-->
</footer>
 <!-- For Vimeo analytics tracking -->
    <script src="https://player.vimeo.com/api/player.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/slick.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript">
    $(".testimonial").slick({
        dots: false,
        infinite: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        cssEase: 'linear'
    });
</script>


<script type="text/javascript">

        $('.good-hand-team').slick({
        // centerMode: true,
        // centerPadding: '60px',
		arrows: true,
        slidesToShow: 4,  
        responsive: [
            {
                breakpoint: 768, 
                settings: {
                    arrows: true,
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });


        $('.good-hand-teamm').slick({
            centerMode: true,
            centerPadding: '60px',
            arrows: true,
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        // centerMode: true,
                        // centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
</script>
<script type="text/javascript">//<![CDATA[


    // Globals
    var link = {
        'pregnancy-care': "/pregnancy-care",
        'loving-couple': "/loving-couple",
        'gynecologist': "/gynaecologists",
        'corporates': "/corporates",
    };


    var text = {
        'morden-parents': "Pregnancy",
        'loving-couple': "Fertility",
        'gynecologist': "Gynaecologist",
        'corporates': "Corporates",
    };


    // Globals
    var dis = {
        'morden-parents': "As we walk with you on your journey to parenthood we promise to ensure timely held clinical consultations, screenings and tests. With end to end consultation and attention to details, we plan your path to take a healthy baby home.",
        'loving-couple': "1 out of 4 couples experience a troubled route for conceiving. We at Crysta make your journey a lot more smoother with our end to end guidance and best infertility services at our platform.",
        'gynecologist': "Reputed gynaecologists and multidisciplinary health specialists on panel, which caters to all reproduction related consultations. Be a part of our society and deliver happiness with us at Crysta!",
        'corporates': "Crysta provides comprehensive fertility and pregnancy benefits for your employees, sending the message of inclusivity and support to your diverse workforce looking to start a family.",
    };
    // You dont need to re-set this variable each time a click is done
    // So we take it out of the click function
    var fs = $(".fsi");
    var tb = $("#text-box");
    var db = $("#dis-box");

    $(document).ready(function() {
        $(".change-img").click(function (e) {
            e.preventDefault();

            var newClass = $(this).attr("id");
            var oldClass = fs.attr("class");

            var newClass1 = $(".fsi").attr("class");

            var fsi_id = $(".fsi").attr("id");

            $('#'+newClass+" img").remove();

            $(this).children('div').removeClass()
                .addClass(newClass1).css( 'display','block');
            $(this).attr( 'id',fsi_id);

            fs.fadeOut().removeClass().addClass('fsi')
                .addClass(newClass).attr( 'id',newClass).fadeIn("slow");


            $(this).children('span').children('h5').text(text[fsi_id]).fadeIn('slow');

            $('.btbt').attr("href",link[newClass]).fadeIn('slow');

            //
            // Change the text
            tb.fadeOut(function() {
                tb.text(text[newClass]).fadeIn('slow');
            });
            // Change the text
            db.fadeOut(function() {
                db.text(dis[newClass]).fadeIn('slow');
            });
        });
    });


    //]]></script>

<script type="text/javascript" async
        src="//l.getsitecontrol.com/p7jz6qm4.js">
</script>
<script>$(document).ready(function () {
        $("#toggle").click(function () {
            var elem = $("#toggle").text();
            if (elem == "Read More") {
                //Stuff to do when btn is in the read more state
                $("#toggle").text("Read Less");
                $("#text").slideDown();
            } else {
                //Stuff to do when btn is in the read less state
                $("#toggle").text("Read More");
                $("#text").slideUp();
            }
        });
    });</script>
<script>
    $('#toggle').click(function(e){
        e.preventDefault();
        var desiredHeight = $(window).height() - 100;
        $('body, html').animate({
            scrollTop: $('.collectionread-btn').offset().top - desiredHeight
        }, 1000);
    });
</script>
</body>
</html>