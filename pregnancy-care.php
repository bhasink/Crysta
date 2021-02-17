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
    <title>Pregnancy Care - Plannning a Pregnancy | Baby Conceiving | Planning a Baby</title>
    <meta name="description" content="Plan a Pregnancy - Crysta provides pregnancy care and best experts advice on planning a baby. Crysta guides you in planning a preganncy, consultations, screening & tests">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<header class="modern-page">
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
                            <li class="subnavItem"><a href="/gynaecologists">Gynaecologists</a></li>
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
                        <a class="nav-link" href="https://blog.crysta.care/">Blog</a>                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">Contact us</a>                    </li>
                    <li class="nav-item">
                        <a class="nav-link book-btn" href="https://book.crysta.care/">Book Now</a>
                    </li>
                </ul>
            </div>
<!--			<a class="redcliff-sponse"  target="_blank" href="https://www.redcliffels.com/"><img src="img/logos/rediclifff logo (1).png"></a>-->
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
                            <li class="subnavItem-sidebar"><a href="/gynaecologists">Gynaecologists</a></li>
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

    <div class="hero-text hero-text-modern-parents">
        <h1>Pregnancy
        </h1>
        <h5>We ease out the not-so-simple process of conception and pregnancy with our expert guidance through our fertility counselling sessions.</h5>
        <a class="know-btn" href="/contact-us">Contact Us</a>
    </div>
</header>
<!--------------------------------------------------------------
Why choose Crysta
---------------------------------------------------------------->
<section class="coun-first modern-first">
    <div class="container">
        <div class="coun-first-text">
            <p>Begin your pregnancy journey with us. From planning your pregnancy till you take a healthy baby home, Crysta is here to make your 9 months a smooth journey. As your companion we manage all your Gynaecologist appointments, counselling, routine diagnostic testing and antenatal screening tests so that you fall in love with your pregnancy.</p>
        </div>

    </div>
</section>
<section class="coun-first modern-main-tabs">
    <div class="container-fluid">
        <div class="main-title">
            <h1>Crysta for Pregnancy</h1>
        </div>
        <div class="modern-tabs" >
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-pregnant-tab" data-toggle="tab" href="#nav-pregnant" role="tab" aria-controls="nav-pregnant" aria-selected="true">Pregnant</a>
                    <a class="nav-item nav-link" id="nav-planning-tab" data-toggle="tab" href="#nav-planning" role="tab" aria-controls="nav-planning" aria-selected="false">Planning a pregnancy</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-pregnant" role="tabpanel" aria-labelledby="nav-pregnant-tab">
                    <div class="container">
                    <div class="row t-box-tab-one">
                        <div class="col-sm-5"><img src="/img/services/u.jpg" alt="Crysta Care for Pregnancy"></div>
                        <div class="col-sm-7 tab-content-box">
                            <div class="tab-heading">
                                <div class="tab-main-heading"><h1>Pregnant</h1></div>
                                <p>And the journey begins!<br>
                                    As you prepare to welcome your bundle of joy, it is important to ensure that you and your baby is healthy. By opting for our customized pregnancy packages and 
consultations, Crysta takes care of all the rest while you focus on eating healthy and 
keeping fit.
                            </div>
                        </div>
                    </div></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="timeline timeline-centered">
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span></span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"> <h3 class="timeline-title">   Counselling and Gynaecologist Consultations</h3></div>
                                            <div class="hidden"><span></span></div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span></span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"><h3 class="timeline-title">Routine antenatal testings</h3></div>
                                            <div class="hidden"><p></p></div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>Report review and<br> Management </span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"><h3 class="timeline-title"></h3></div>
                                            <div class="hidden"><p></p></div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>Post Delivery- <br>New Born Screening
</span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"><h3 class="timeline-title"></h3></div>
                                            <div class="hidden"><p></p></div>
                                        </div>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-planning" role="tabpanel" aria-labelledby="nav-planning-tab">
                    <div class="container">
                        <div class="row t-box-tab-one">
                            <div class="col-sm-5"><img src="/img/services/lc1.jpg" alt="Crysta Care to Plan Pregnancy"></div>
                            <div class="col-sm-7 tab-content-box">
                                <div class="tab-heading">
                                    <div class="tab-main-heading"><h1>Planning a pregnancy</h1></div>
                                    <p>Starting a family is an exciting time and the journey ahead is sure to be bumpy. We at Crysta, help couples make informed choices about adopting a healthier lifestyle, pre-pregnancy clinical evaluation and testing and addressing general anxieties that accompany first-time parents to be.</p>
                                </div>
                            </div>
                        </div></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">

                                <ul class="timeline timeline-centered">
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span></span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"> <h3 class="timeline-title">Counselling and Gynaecologist Consultation</h3></div>
                                            <div class="hidden"><span></span></div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span></span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"><h3 class="timeline-title">Pre-pregnancy routine testing</h3></div>
                                            <div class="hidden"><p></p></div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>Report review and<br> Management </span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"><h3 class="timeline-title"></h3></div>
                                            <div class="hidden"><p></p></div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span>Conception</span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"><h3 class="timeline-title"></h3></div>
                                            <div class="hidden"><p></p></div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span></span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"> <h3 class="timeline-title">Gynaecologist consultations </h3></div>
                                            <div class="hidden"><span></span></div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span></span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"><h3 class="timeline-title"> Routine antenatal testings</h3></div>
                                            <div class="hidden"><p></p></div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span> Report review and <br>Management </span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"><h3 class="timeline-title"></h3></div>
                                            <div class="hidden"><p></p></div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-info">
                                            <span> Post Delivery-<br> New Born Screening</span>
                                        </div>
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                            <div id="trigger"><h3 class="timeline-title"></h3></div>
                                            <div class="hidden"><p></p></div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <img style="width: 100%;" src="/img/services/tabs-bottom.svg" class="bottom-swoop">
</section>



<!--------------------------------------------------------------
The Need
---------------------------------------------------------------->
<div class="second-bg">
<section class="solutions-offered">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-title">
                    <h1>Solutions Offered </h1>
                </div>
                <div class="coun-first-logos-item">
                    <ul class="coun-first-box">
                        <li>
                            <div>

                                <?xml version="1.0" encoding="utf-8"?>
                                <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 182.4 182.4" style="enable-background:new 0 0 182.4 182.4;" xml:space="preserve">
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
                                            <circle class="st72" cx="91.2" cy="91.2" r="91.2"/>
                                            <g>
                                                <path class="st28" d="M62.7,63.9c1.2,1.2,1.9,3.1,1.9,5.6v9.7h-4.9v-8.9c0-1.3-0.3-2.3-0.8-3c-0.6-0.7-1.3-1-2.4-1
				c-1.2,0-2.1,0.4-2.7,1.1c-0.7,0.7-1,1.8-1,3.3v8.5h-4.9v-8.9c0-2.7-1.1-4-3.2-4c-1.1,0-2,0.4-2.7,1.1c-0.7,0.7-1,1.8-1,3.3v8.5
				H36V62.3h4.7v1.9c0.6-0.7,1.4-1.3,2.3-1.6c0.9-0.4,1.9-0.6,3-0.6c1.2,0,2.3,0.2,3.2,0.7c1,0.5,1.7,1.2,2.3,2.1
				c0.7-0.9,1.6-1.6,2.6-2c1.1-0.5,2.2-0.7,3.5-0.7C59.7,62,61.4,62.6,62.7,63.9z"/>
                                            </g>
                                            <g>
                                                <path class="st28" d="M97,78.3c-0.5,0.4-1.1,0.6-1.8,0.8c-0.7,0.2-1.4,0.3-2.2,0.3c-2,0-3.6-0.5-4.7-1.5s-1.6-2.5-1.6-4.5v-6.9
				h-2.6v-3.8h2.6v-4.1h4.9v4.1h4.2v3.8h-4.2v6.9c0,0.7,0.2,1.3,0.5,1.6c0.4,0.4,0.9,0.6,1.6,0.6c0.8,0,1.4-0.2,2-0.6L97,78.3z"/>
                                            </g>
                                            <g>
                                                <path class="st28" d="M145.5,62.3l-6.1,16.9h-4.7l-3.8-10.5L127,79.2h-4.7l-6.1-16.9h4.6l4,11.4l4.1-11.4h4.1l4,11.4l4.1-11.4
				H145.5z"/>
                                            </g>
                                            <line class="st73" x1="12.1" y1="91.3" x2="165.3" y2="91.3"/>
                                            <circle class="st28" cx="48.2" cy="112.4" r="7.8"/>
                                            <circle class="st28" cx="91.1" cy="112.4" r="7.8"/>
                                            <circle class="st28" cx="134" cy="112.4" r="7.8"/>
                                        </g>
                                    </g>
</svg>



                            </div>
                            <h4>Clinical consultations</h4>
                            <p>Regular Gynaecologist consultations with appointment tracking to build your personalised pregnancy calendar</p>
                        </li>

                        <li>
                            <div>

                                <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

                                <?xml version="1.0" encoding="utf-8"?>
                                <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 182.4 182.4" style="enable-background:new 0 0 182.4 182.4;" xml:space="preserve">
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
                                            <circle class="st72" cx="91.2" cy="91.2" r="91.2"/>
                                            <g>
                                                <path class="st28" d="M37,57.6c1.2,0,2.2-1,2.2-2.2V49h6.5c1.2,0,2.2-1,2.2-2.2s-1-2.2-2.2-2.2H37c-1.2,0-2.2,1-2.2,2.2v8.7
				C34.9,56.7,35.8,57.6,37,57.6z"/>
                                                <path class="st28" d="M47.9,135.7c0-1.2-1-2.2-2.2-2.2h-6.5V127c0-1.2-1-2.2-2.2-2.2s-2.2,1-2.2,2.2v8.7c0,1.2,1,2.2,2.2,2.2h8.7
				C46.9,137.8,47.9,136.9,47.9,135.7z"/>
                                                <path class="st28" d="M145.4,124.8c-1.2,0-2.2,1-2.2,2.2v6.5h-6.5c-1.2,0-2.2,1-2.2,2.2s1,2.2,2.2,2.2h8.7c1.2,0,2.2-1,2.2-2.2
				V127C147.6,125.8,146.6,124.8,145.4,124.8z"/>
                                                <path class="st28" d="M136.8,49h6.5v6.5c0,1.2,1,2.2,2.2,2.2c1.2,0,2.2-1,2.2-2.2v-8.7c0-1.2-1-2.2-2.2-2.2h-8.7
				c-1.2,0-2.2,1-2.2,2.2S135.6,49,136.8,49z"/>
                                                <path class="st28" d="M43.5,98.9c0.1,1.2,0.7,2.3,1.6,3c26.8,21.9,65.4,21.9,92.2,0c0.9-0.7,1.5-1.8,1.6-3
				c0.1-1.2-0.3-2.4-1.1-3.3l-26.2-30c-1.5-1.7-4-2-5.9-0.7c-4.1,3.4-9.2,5.4-14.6,5.6c-5.3-0.2-10.5-2.2-14.6-5.7
				c-1.8-1.3-4.4-1.1-5.9,0.7l-26.2,30C43.8,96.5,43.4,97.7,43.5,98.9L43.5,98.9z M74,68.4c11.5,8.7,22.8,8.6,34.4,0l26.2,30l0,0.1
				c-12.3,10-27.6,15.4-43.4,15.4c-15.8,0-31.1-5.5-43.3-15.5L74,68.4z"/>
                                            </g>
                                        </g>
                                    </g>
</svg>

                            </div>
                            <h4>Routine antenatal testing</h4>
                            <p class="padding-con-m">Mandatory screenings to ensure the healthy growth of your baby</p>
                        </li>

                        <li>
                            <div>

                                <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

                                <?xml version="1.0" encoding="utf-8"?>
                                <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 182.4 182.4" style="enable-background:new 0 0 182.4 182.4;" xml:space="preserve">
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
                                            <circle class="st72" cx="91.2" cy="91.2" r="91.2"/>
                                            <g>
                                                <g>
                                                    <path class="st5" d="M111.4,45.2c-0.9,1.7-2.3,4.2-4.5,7c-2.1,2.7-3.7,4.1-11,10.5c-5.4,4.8-8.2,7.3-10.6,9.8
					c-3.2,3.3-4.7,4.9-5.9,7c-1,1.8-4.3,7.8-2.8,15.4c1,4.8,3.6,8,5.6,10.5c1.3,1.6,4.1,4.1,9.7,9.2c3.4,3.1,3.2,2.8,5,4.5
					c5,4.6,7.5,6.9,9.8,9.7c2.6,3.2,4.9,6.2,6.1,10.7c0.8,3.3,0.8,6.1,0.6,8c-1.8,0-3.5-0.1-5.3-0.1c-0.1-1.4-0.3-3.4-0.9-5.7
					c-0.3-0.9-1.2-4.1-4.6-8.7c-3-4.2-6-6.8-10.2-10.5c-3.6-3.2-3.6-2.9-6.4-5.3c-5.9-5.2-10.8-9.5-13.5-16.3
					c-2.4-5.9-2.1-10.9-2-12c0.1-0.9,0.4-5.1,2.7-10c1.9-3.9,4.1-6.3,7-9.5c1.8-1.9,3.7-3.6,7.6-7.1c3.9-3.5,4.4-3.7,7.8-6.8
					c4.6-4.2,6-5.8,7.1-7.3c1.7-2.2,2.8-4.2,3.6-5.6c0,0,1.9-3.6,3.1-6.9l5.2,2.7C114.5,38.5,113.2,42.1,111.4,45.2z"/>
                                                </g>
                                                <g>
                                                    <path class="st28" d="M77.6,42.6c0.7,1.4,1.9,3.4,3.6,5.6c1.1,1.4,2.5,3.1,7.1,7.3c3.4,3.1,3.8,3.3,7.8,6.8
					c3.9,3.5,5.8,5.2,7.6,7.1c2.9,3.2,5.2,5.6,7,9.5c2.3,4.8,2.6,9,2.7,10c0.1,1.1,0.3,6.2-2,12c-2.8,6.9-7.6,11.1-13.5,16.3
					c-2.7,2.4-2.8,2.1-6.4,5.3c-4.1,3.6-7.1,6.3-10.2,10.5c-3.3,4.6-4.3,7.7-4.6,8.7c-0.7,2.3-0.9,4.3-0.9,5.7
					c-1.8,0-3.5,0.1-5.3,0.1c-0.2-1.9-0.2-4.7,0.6-8c1.2-4.5,3.5-7.5,6.1-10.7c2.3-2.8,4.8-5.1,9.8-9.7c1.8-1.6,1.6-1.4,5-4.5
					c5.6-5,8.5-7.6,9.7-9.2c2-2.5,4.6-5.7,5.6-10.5c1.5-7.6-1.8-13.6-2.8-15.4c-1.2-2.1-2.8-3.7-5.9-7c-2.4-2.5-5.2-5-10.6-9.8
					c-7.3-6.5-8.9-7.8-11-10.5c-2.2-2.8-3.7-5.4-4.5-7c0,0-2.5-4.2-4.4-9l6.3-1.2C74.2,35,76.6,40.8,77.6,42.6z"/>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
</svg>


                            </div>
                            <h4>Advanced testing and counselling</h4>
                            <p>Review your personal and family health history to gauge the risk and prevent genetic diseases being passed on to your baby.</p>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

    </div>



</section>
<!--------------------------------------------------------------
key-usps
---------------------------------------------------------------->
<section class="why-choose key-usps">
    <div class="container">
        <div class="main-title">
            <h1>What makes our services special</h1>
        </div>
        <div class="why-choose-text">
            <p>From delivering the best in class services with our reputed OBGYNs pan India,<br> Crysta is one of it's kind digital platform that provides fertility solutions.
            </p>
        </div>
        <div class="why-choose-logos-item">
            <ul class="why-choose-box">
                <li>
                    <div>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 130.3 186.2" style="enable-background:new 0 0 130.3 186.2;" xml:space="preserve">
<style type="text/css">
    .st0{clip-path:url(#SVGID_2_);}
    .st1{clip-path:url(#SVGID_4_);}
    .st2{clip-path:url(#SVGID_14_);}
    .st3{clip-path:url(#SVGID_18_);}
    .st4{clip-path:url(#SVGID_22_);}
    .st5{clip-path:url(#SVGID_24_);}
    .st6{fill:#EAC1D9;}
      .st7{fill: #eac1d9;}
    .st8{fill:#E6E9ED;}
    .st9{fill:#69326B;}
</style>
                            <g>
                                <path class="st6" d="M108.6,3.1H34.1c-3.4,0-6.2,2.8-6.2,6.2v68.3v55.9c0,3.4,2.8,6.2,6.2,6.2h71.4h3.1c3.4,0,6.2-2.8,6.2-6.2v-3.1
		c-5.2,0-9.3-4.2-9.3-9.3c0-5.2,4.2-9.3,9.3-9.3c-5.2,0-9.3-4.2-9.3-9.3c0-5.2,4.2-9.3,9.3-9.3c-5.2,0-9.3-4.2-9.3-9.3
		c0-5.2,4.2-9.3,9.3-9.3c-5.2,0-9.3-4.2-9.3-9.3c0-5.2,4.2-9.3,9.3-9.3v-0.4V9.3C114.8,5.9,112,3.1,108.6,3.1z"></path>
                                <path class="st7" d="M105.5,139.6l-37.2,41.3l-59-20.5V59c10.3,0,18.6,8.3,18.6,18.6v55.9c0,3.4,2.8,6.2,6.2,6.2H105.5z"></path>
                                <g>
                                    <path class="st7" d="M117.9,93.1c5.2,0,9.3,4.2,9.3,9.3c0,5.2-4.2,9.3-9.3,9.3h-3.1c-5.2,0-9.3-4.2-9.3-9.3c0-5.2,4.2-9.3,9.3-9.3
			H117.9z"></path>
                                    <path class="st7" d="M117.9,111.7c5.2,0,9.3,4.2,9.3,9.3c0,5.2-4.2,9.3-9.3,9.3h-3.1c-5.2,0-9.3-4.2-9.3-9.3
			c0-5.2,4.2-9.3,9.3-9.3H117.9z"></path>
                                    <path class="st7" d="M117.9,74.5c5.2,0,9.3,4.2,9.3,9.3c0,5.2-4.2,9.3-9.3,9.3h-3.1c-5.2,0-9.3-4.2-9.3-9.3c0-5.2,4.2-9.3,9.3-9.3
			H117.9z"></path>
                                </g>
                                <path class="st8" d="M71.4,117.9c3.4,0,6.2,2.8,6.2,6.2c0,3.4-2.8,6.2-6.2,6.2c-3.4,0-6.2-2.8-6.2-6.2
		C65.2,120.7,68,117.9,71.4,117.9z"></path>
                                <path class="st7" d="M117.9,55.9c5.2,0,9.3,4.2,9.3,9.3c0,5.2-4.2,9.3-9.3,9.3h-3.1c-5.2,0-9.3-4.2-9.3-9.3c0-5.2,4.2-9.3,9.3-9.3
		H117.9z"></path>
                                <path class="st8" d="M71.4,43.4c13.7,0,24.8,11.1,24.8,24.8c0,13.7-11.1,24.8-24.8,24.8S46.5,82,46.5,68.3
		C46.5,54.6,57.7,43.4,71.4,43.4z"></path>
                                <path class="st9" d="M71.4,96.2c-15.4,0-27.9-12.5-27.9-27.9S56,40.4,71.4,40.4s27.9,12.5,27.9,27.9S86.8,96.2,71.4,96.2z
		 M71.4,46.6c-12,0-21.7,9.7-21.7,21.7S59.4,90,71.4,90s21.7-9.7,21.7-21.7S83.3,46.6,71.4,46.6z"></path>
                                <path class="st9" d="M71.4,80.7c-1.7,0-3.1-1.4-3.1-3.1V59c0-1.7,1.4-3.1,3.1-3.1s3.1,1.4,3.1,3.1v18.6
		C74.5,79.3,73.1,80.7,71.4,80.7z"></path>
                                <path class="st9" d="M80.7,71.4H62.1c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h18.6c1.7,0,3.1,1.4,3.1,3.1S82.4,71.4,80.7,71.4z"></path>
                                <path class="st9" d="M27.9,80.7c-1.7,0-3.1-1.4-3.1-3.1c0-8.6-7-15.5-15.5-15.5c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1
		c12,0,21.7,9.7,21.7,21.7C31,79.3,29.6,80.7,27.9,80.7z"></path>
                                <path class="st9" d="M9.3,163.5c-1.7,0-3.1-1.4-3.1-3.1V59c0-1.7,1.4-3.1,3.1-3.1s3.1,1.4,3.1,3.1v101.5
		C12.4,162.1,11,163.5,9.3,163.5z"></path>
                                <path class="st9" d="M108.6,142.7H34.1c-5.1,0-9.3-4.2-9.3-9.3V9.3C24.8,4.2,29,0,34.1,0h74.5c5.1,0,9.3,4.2,9.3,9.3
		c0,1.7-1.4,3.1-3.1,3.1c-1.7,0-3.1-1.4-3.1-3.1c0-1.7-1.4-3.1-3.1-3.1H34.1c-1.7,0-3.1,1.4-3.1,3.1v124.1c0,1.7,1.4,3.1,3.1,3.1
		h74.5c1.7,0,3.1-1.4,3.1-3.1c0-1.7,1.4-3.1,3.1-3.1c1.7,0,3.1,1.4,3.1,3.1C117.9,138.6,113.7,142.7,108.6,142.7z"></path>
                                <path class="st9" d="M114.8,58.6c-1.7,0-3.1-1.4-3.1-3.1V9.3c0-1.7,1.4-3.1,3.1-3.1c1.7,0,3.1,1.4,3.1,3.1v46.2
		C117.9,57.2,116.5,58.6,114.8,58.6z"></path>
                                <path class="st9" d="M114.8,114.8c-6.8,0-12.4-5.6-12.4-12.4c0-6.8,5.6-12.4,12.4-12.4c1.7,0,3.1,1.4,3.1,3.1s-1.4,3.1-3.1,3.1
		c-3.4,0-6.2,2.8-6.2,6.2c0,3.4,2.8,6.2,6.2,6.2c1.7,0,3.1,1.4,3.1,3.1S116.5,114.8,114.8,114.8z"></path>
                                <path class="st9" d="M114.8,133.4c-6.8,0-12.4-5.6-12.4-12.4c0-6.8,5.6-12.4,12.4-12.4c1.7,0,3.1,1.4,3.1,3.1s-1.4,3.1-3.1,3.1
		c-3.4,0-6.2,2.8-6.2,6.2c0,3.4,2.8,6.2,6.2,6.2c1.7,0,3.1,1.4,3.1,3.1C117.9,132,116.5,133.4,114.8,133.4z"></path>
                                <path class="st9" d="M117.9,114.8c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1c3.4,0,6.2-2.8,6.2-6.2c0-3.4-2.8-6.2-6.2-6.2
		c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1c6.8,0,12.4,5.6,12.4,12.4C130.3,109.2,124.8,114.8,117.9,114.8z"></path>
                                <path class="st9" d="M117.9,133.4c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1c3.4,0,6.2-2.8,6.2-6.2c0-3.4-2.8-6.2-6.2-6.2
		c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1c6.8,0,12.4,5.6,12.4,12.4C130.3,127.9,124.8,133.4,117.9,133.4z"></path>
                                <path class="st9" d="M117.9,114.8h-3.1c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h3.1c1.7,0,3.1,1.4,3.1,3.1S119.6,114.8,117.9,114.8
		z"></path>
                                <path class="st9" d="M117.9,133.4h-3.1c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1h3.1c1.7,0,3.1,1.4,3.1,3.1
		C121,132,119.6,133.4,117.9,133.4z"></path>
                                <path class="st9" d="M114.8,96.2c-6.8,0-12.4-5.6-12.4-12.4c0-6.8,5.6-12.4,12.4-12.4c1.7,0,3.1,1.4,3.1,3.1s-1.4,3.1-3.1,3.1
		c-3.4,0-6.2,2.8-6.2,6.2c0,3.4,2.8,6.2,6.2,6.2c1.7,0,3.1,1.4,3.1,3.1S116.5,96.2,114.8,96.2z"></path>
                                <path class="st9" d="M114.8,77.6c-6.8,0-12.4-5.6-12.4-12.4c0-6.8,5.6-12.4,12.4-12.4c1.7,0,3.1,1.4,3.1,3.1s-1.4,3.1-3.1,3.1
		c-3.4,0-6.2,2.8-6.2,6.2c0,3.4,2.8,6.2,6.2,6.2c1.7,0,3.1,1.4,3.1,3.1S116.5,77.6,114.8,77.6z"></path>
                                <path class="st9" d="M117.9,96.2c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1c3.4,0,6.2-2.8,6.2-6.2c0-3.4-2.8-6.2-6.2-6.2
		c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1c6.8,0,12.4,5.6,12.4,12.4C130.3,90.6,124.8,96.2,117.9,96.2z"></path>
                                <path class="st9" d="M117.9,77.6c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1c3.4,0,6.2-2.8,6.2-6.2c0-3.4-2.8-6.2-6.2-6.2
		c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1c6.8,0,12.4,5.6,12.4,12.4C130.3,72,124.8,77.6,117.9,77.6z"></path>
                                <path class="st9" d="M117.9,77.6h-3.1c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h3.1c1.7,0,3.1,1.4,3.1,3.1S119.6,77.6,117.9,77.6z"></path>
                                <path class="st9" d="M117.9,59h-3.1c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h3.1c1.7,0,3.1,1.4,3.1,3.1S119.6,59,117.9,59z"></path>
                                <path class="st9" d="M117.9,96.2h-3.1c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h3.1c1.7,0,3.1,1.4,3.1,3.1S119.6,96.2,117.9,96.2z"></path>
                                <path class="st9" d="M68.3,184c-0.7,0-1.5-0.3-2.1-0.8c-1.3-1.1-1.4-3.1-0.2-4.4l37.2-41.3c1.1-1.3,3.1-1.4,4.4-0.2
		c1.3,1.1,1.4,3.1,0.2,4.4L70.6,183C70,183.7,69.1,184,68.3,184L68.3,184z"></path>
                                <path class="st9" d="M74.5,186.2c-0.3,0-0.7-0.1-1-0.2L2.1,161.2c-1.6-0.6-2.5-2.3-1.9-3.9c0.6-1.6,2.3-2.5,3.9-1.9l71.4,24.8
		c1.6,0.6,2.5,2.3,1.9,3.9C77,185.4,75.8,186.2,74.5,186.2L74.5,186.2z"></path>
                                <path class="st9" d="M114.8,136.5c-1.7,0-3.1-1.4-3.1-3.1v-3.1c0-1.7,1.4-3.1,3.1-3.1c1.7,0,3.1,1.4,3.1,3.1v3.1
		C117.9,135.1,116.5,136.5,114.8,136.5z"></path>
                                <path class="st9" d="M71.4,133.4c-5.1,0-9.3-4.2-9.3-9.3s4.2-9.3,9.3-9.3s9.3,4.2,9.3,9.3S76.5,133.4,71.4,133.4z M71.4,121
		c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1c1.7,0,3.1-1.4,3.1-3.1C74.5,122.4,73.1,121,71.4,121z"></path>
                                <path class="st9" d="M62.2,18.6c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h0c1.7,0,3.1,1.4,3.1,3.1S63.9,18.6,62.2,18.6z"></path>
                                <path class="st9" d="M80.7,18.6h-9.3c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h9.3c1.7,0,3.1,1.4,3.1,3.1S82.4,18.6,80.7,18.6z"></path>
                            </g>
</svg>

                    </div>
                    <h4>Single Platform</h4>
                    <p>Provides access to all digital consultations , relevant testing and on time reports. </p>
                </li>

                <li>
                    <div>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 133.3 183.5" style="enable-background:new 0 0 133.3 183.5;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:inline;fill:none;stroke:#000000;stroke-miterlimit:10;}
    .st2{clip-path:url(#SVGID_2_);fill:#F9F7F9;}
    .st3{clip-path:url(#SVGID_4_);fill:#FFFFFF;}
    .st4{clip-path:url(#SVGID_4_);fill:#893F87;}
    .st5{clip-path:url(#SVGID_4_);fill:#F9F7F9;}
    .st6{clip-path:url(#SVGID_6_);fill:#FFFFFF;}
    .st7{clip-path:url(#SVGID_6_);fill:#893F87;}
    .st8{clip-path:url(#SVGID_6_);fill:#F9F7F9;}
    .st9{fill:none;stroke:#924A8F;stroke-miterlimit:10;}
    .st10{clip-path:url(#SVGID_8_);fill:#F9F7F9;}
    .st11{fill:#EAC1D9;}
    .st12{clip-path:url(#SVGID_10_);fill:#F2F0F2;}
    .st13{clip-path:url(#SVGID_12_);fill:#F2F0F2;}
    .st14{clip-path:url(#SVGID_12_);fill:#F4E1EB;}
    .st15{clip-path:url(#SVGID_12_);fill:#893F87;}
    .st16{fill:#F2F0F2;}
    .st17{clip-path:url(#SVGID_14_);fill:#FFFFFF;}
    .st18{fill:#FFFFFF;}
    .st19{clip-path:url(#SVGID_16_);fill:#F2F0F2;}
    .st20{clip-path:url(#SVGID_18_);}
    .st21{clip-path:url(#SVGID_20_);}
    .st22{clip-path:url(#SVGID_22_);fill:#F2F0F2;}
    .st23{clip-path:url(#SVGID_22_);fill:#F4E1EB;}
    .st24{clip-path:url(#SVGID_22_);fill:#893F87;}
    .st25{fill:#eac1d9;}
    .st26{fill:#E6E9ED;}
    .st27{fill:#69326B;}
    .st28{fill:none;stroke:#924A8F;stroke-width:2;stroke-miterlimit:10;}
    .st29{clip-path:url(#SVGID_24_);}
    .st30{fill:#7C3C7C;}
    .st31{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;}
    .st32{clip-path:url(#SVGID_28_);fill:#FFFFFF;}
    .st33{clip-path:url(#SVGID_28_);fill:#893F87;}
    .st34{clip-path:url(#SVGID_28_);fill:#F9F7F9;}
    .st35{fill:none;stroke:#777777;stroke-width:2;stroke-miterlimit:10;}
    .st36{clip-path:url(#SVGID_30_);}
    .st37{clip-path:url(#SVGID_32_);}
    .st38{clip-path:url(#SVGID_34_);}
    .st39{clip-path:url(#SVGID_36_);}
    .st40{fill:#282828;}
    .st41{fill-rule:evenodd;clip-rule:evenodd;fill:#282828;}
    .st42{fill:#282828;stroke:#777777;stroke-width:2;stroke-miterlimit:10;}
    .st43{clip-path:url(#SVGID_38_);fill:#FFFFFF;}
    .st44{fill:none;stroke:#666666;stroke-width:2;stroke-miterlimit:10;}
    .st45{clip-path:url(#SVGID_50_);fill:#F9F7F9;}
    .st46{clip-path:url(#SVGID_52_);fill:#F2F0F2;}
    .st47{clip-path:url(#SVGID_54_);}
    .st48{clip-path:url(#SVGID_56_);}
    .st49{clip-path:url(#SVGID_58_);fill:#F2F0F2;}
    .st50{clip-path:url(#SVGID_58_);fill:#F4E1EB;}
    .st51{clip-path:url(#SVGID_58_);fill:#893F87;}
    .st52{clip-path:url(#SVGID_60_);}
    .st53{clip-path:url(#SVGID_64_);fill:#FFFFFF;}
    .st54{clip-path:url(#SVGID_64_);fill:#893F87;}
    .st55{clip-path:url(#SVGID_64_);fill:#F9F7F9;}
    .st56{clip-path:url(#SVGID_66_);}
    .st57{clip-path:url(#SVGID_68_);}
    .st58{clip-path:url(#SVGID_70_);}
    .st59{clip-path:url(#SVGID_72_);}
    .st60{clip-path:url(#SVGID_74_);fill:#FFFFFF;}
    .st61{clip-path:url(#SVGID_86_);fill:#F9F7F9;}
    .st62{clip-path:url(#SVGID_88_);fill:#F2F0F2;}
    .st63{clip-path:url(#SVGID_90_);}
    .st64{clip-path:url(#SVGID_92_);}
    .st65{clip-path:url(#SVGID_94_);fill:#F2F0F2;}
    .st66{clip-path:url(#SVGID_94_);fill:#F4E1EB;}
    .st67{clip-path:url(#SVGID_94_);fill:#893F87;}
    .st68{clip-path:url(#SVGID_96_);}
    .st69{clip-path:url(#SVGID_100_);fill:#F2F0F2;}
    .st70{clip-path:url(#SVGID_100_);fill:#F4E1EB;}
    .st71{clip-path:url(#SVGID_100_);fill:#893F87;}
    .st72{clip-path:url(#SVGID_110_);fill:#FFFFFF;}
    .st73{clip-path:url(#SVGID_110_);fill:#893F87;}
    .st74{clip-path:url(#SVGID_110_);fill:#F9F7F9;}
    .st75{clip-path:url(#SVGID_112_);}
    .st76{clip-path:url(#SVGID_114_);}
    .st77{clip-path:url(#SVGID_116_);}
    .st78{clip-path:url(#SVGID_118_);}
    .st79{clip-path:url(#SVGID_120_);fill:#FFFFFF;}
    .st80{fill:none;stroke:#7C3C7C;stroke-width:3;stroke-miterlimit:10;}
    .st81{clip-path:url(#SVGID_132_);}
    .st82{clip-path:url(#SVGID_134_);fill:#F9F7F9;}
    .st83{clip-path:url(#SVGID_136_);fill:#EAC1D9;}
    .st84{clip-path:url(#SVGID_136_);fill:#FFFFFF;}
    .st85{clip-path:url(#SVGID_136_);}
    .st86{fill:none;}
    .st87{clip-path:url(#SVGID_136_);fill:none;}
    .st88{clip-path:url(#SVGID_138_);fill:#F2F0F2;}
    .st89{clip-path:url(#SVGID_140_);fill:#893F87;}
    .st90{clip-path:url(#SVGID_142_);fill:#F2F0F2;}
    .st91{clip-path:url(#SVGID_144_);}
    .st92{fill:#893F87;}
    .st93{fill:#CACAEA;}
</style>
                            <g id="guides" class="st0">
                            </g>
                            <g id="Layer_2">
                                <g>
                                    <defs>
                                        <rect id="SVGID_87_" x="-2121.1" y="703.9" width="1924.9" height="1744.7"/>
                                    </defs>
                                    <clipPath id="SVGID_2_">
                                        <use xlink:href="#SVGID_87_"  style="overflow:visible;"/>
                                    </clipPath>
                                    <path style="clip-path:url(#SVGID_2_);fill:#F2F0F2;" d="M-31.8-552.9C14.1-441.5,69.8-270.9,84.6-56.7
			c5.7,82.3,14,295.4-49,514.6c-120.9,420.9-447.1,663.8-600.4,778c-772.8,575.7-1851.8,333.2-2015.5,294.1
			c-9,281.9-18,563.9-27,845.8c868.7-8.3,1737.4-16.6,2606.1-24.9C137.2,1611.1,275.5,871.3,413.8,131.4
			C265.3-96.7,116.7-324.8-31.8-552.9z"/>
                                    <path style="clip-path:url(#SVGID_2_);fill:#F2F0F2;" d="M-31.8-714.3c45.9,111.4,101.6,282,116.4,496.2
			c5.7,82.3,14,295.4-49,514.6c-120.9,420.9-447.1,663.8-600.4,778c-772.8,575.7-1851.8,333.2-2015.5,294.1
			c-9,281.9-18,563.9-27,845.8c868.7-8.3,1737.4-16.6,2606.1-24.9C137.2,1449.7,275.5,709.9,413.8-30
			C265.3-258.1,116.7-486.2-31.8-714.3z"/>
                                </g>
                                <g>
                                    <rect x="43.3" y="4.5" class="st11" width="85.6" height="173.8"/>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path class="st27" d="M118.4,65.5c-0.7-0.7-1.6-1.1-2.5-1.1c-0.9,0-1.9,0.4-2.5,1.1c-0.7,0.7-1.1,1.6-1.1,2.5
							c0,0.9,0.4,1.9,1.1,2.5c0.7,0.7,1.6,1.1,2.5,1.1c1,0,1.9-0.4,2.5-1.1c0.7-0.7,1.1-1.6,1.1-2.5C119.4,67,119.1,66.1,118.4,65.5
							z"/>
                                                    <path class="st27" d="M115.8,71.2c-0.8,0-1.7-0.3-2.3-0.9c-0.6-0.6-0.9-1.4-0.9-2.3s0.3-1.7,0.9-2.3c0.6-0.6,1.4-0.9,2.3-0.9
							s1.7,0.3,2.3,0.9c0.6,0.6,0.9,1.4,0.9,2.3s-0.3,1.7-0.9,2.3C117.5,70.9,116.7,71.2,115.8,71.2z"/>
                                                </g>
                                            </g>
                                            <path class="st25" d="M89.6,177.1H21.4c-2.7,0-5.4-1-7.5-2.8l-7.6-6.6v-52.5l15.1-15.1l3,11.8c0.4,1.4,1.6,2.4,3.1,2.4l70.8,0
					c3,0,5.4,2.4,5.4,5.4c0,3-2.4,5.4-5.4,5.4H62.1c-1.8,0-3.2,1.4-3.2,3.2s1.4,3.2,3.2,3.2h47.5c3,0,5.4,2.4,5.4,5.4
					c0,3-2.4,5.4-5.4,5.4H62.1c-1.8,0-3.2,1.4-3.2,3.2s1.4,3.2,3.2,3.2h39.8c3,0,5.4,2.4,5.4,5.4c0,3-2.4,5.4-5.4,5.4H62.1
					c-1.8,0-3.2,1.4-3.2,3.2s1.4,3.2,3.2,3.2h27.5c3,0,5.4,2.4,5.4,5.4C95.1,174.7,92.6,177.1,89.6,177.1z"/>
                                            <path class="st27" d="M132.3,0.9c-0.6-0.6-1.4-0.9-2.3-0.9L41.5,0c-1.8,0-3.2,1.4-3.2,3.2v10.6L3.9,23c-0.8,0.2-1.5,0.8-1.9,1.5
					s-0.5,1.6-0.3,2.4l17.7,66.2l-13,13v-2.8c0-1.2-1-2.2-2.2-2.2H2.2c-1.2,0-2.2,1-2.2,2.2v78c0,1.2,1,2.2,2.2,2.2h1.9
					c1.2,0,2.2-1,2.2-2.2v-5.1l3.3,2.9c3.2,2.8,7.4,4.4,11.7,4.4h108.7c1.8,0,3.2-1.4,3.2-3.2V3.2C133.3,2.3,132.9,1.5,132.3,0.9z
					 M8.6,28.4l29.7-8v14.2l-2.7,0.7c-0.8,0.2-1.5,0.8-1.9,1.5c-0.4,0.7-0.5,1.6-0.3,2.4c1.4,5.4-1.8,10.9-7.1,12.4
					c-0.8,0.2-1.5,0.8-1.9,1.5c-0.4,0.7-0.5,1.6-0.3,2.4L38.1,108h-8.1l-3.8-14.9c-0.1-0.4-0.3-0.8-0.5-1.1l0-0.1L8.6,28.4z
					 M38.3,49.4v31.8l-0.8,0.1l-6.6-24.6l0.3-0.1c2.6-1.4,4.8-3.4,6.4-5.9L38.3,49.4z M89.6,177.1H21.4c-2.7,0-5.4-1-7.5-2.8
					l-7.6-6.6v-52.5l15.1-15.1l3,11.8c0.4,1.4,1.6,2.4,3.1,2.4l70.8,0c3,0,5.4,2.4,5.4,5.4c0,3-2.4,5.4-5.4,5.4H62.1
					c-1.8,0-3.2,1.4-3.2,3.2s1.4,3.2,3.2,3.2h47.5c3,0,5.4,2.4,5.4,5.4c0,3-2.4,5.4-5.4,5.4H62.1c-1.8,0-3.2,1.4-3.2,3.2
					s1.4,3.2,3.2,3.2h39.8c3,0,5.4,2.4,5.4,5.4c0,3-2.4,5.4-5.4,5.4H62.1c-1.8,0-3.2,1.4-3.2,3.2s1.4,3.2,3.2,3.2h27.5
					c3,0,5.4,2.4,5.4,5.4C95.1,174.7,92.6,177.1,89.6,177.1z M126.9,177.1h-26.7l0.3-0.6c0.7-1.5,1.1-3.2,1.1-4.9s-0.4-3.3-1.1-4.9
					l-0.3-0.6h1.8c6.5,0,11.8-5.3,11.8-11.8c0-1.9-0.4-3.6-1.3-5.3l-0.2-0.4l0.5-0.1c5.1-1.4,8.7-6.1,8.7-11.4c0-2.6-0.8-5-2.3-7.1
					l-0.1-0.1V84.2c0-1.8-1.4-3.2-3.2-3.2s-3.2,1.4-3.2,3.2v41.5l-0.5-0.1c-0.8-0.2-1.7-0.3-2.5-0.3h-0.7l0.3-0.6
					c0.7-1.5,1.1-3.2,1.1-4.9c0-6.5-5.3-11.8-11.8-11.8h-5.8l-0.2-0.8c6.2-2.7,10.2-8.7,10.2-15.5c0-9.3-7.5-16.8-16.8-16.8
					S69,82.5,69,91.8c0,6.7,4,12.8,10.2,15.5L79,108H58.9V38.8l0.3-0.1c6.3-1.4,11.2-6.3,12.6-12.6l0.1-0.3h27.7l0.1,0.3
					c1.4,6.3,6.3,11.2,12.6,12.6l0.3,0.1v11.5c0,1.8,1.4,3.2,3.2,3.2s3.2-1.4,3.2-3.2V35.9c0-1.8-1.4-3.2-3.2-3.2
					c-5.6,0-10.1-4.5-10.1-10.1c0-1.8-1.4-3.2-3.2-3.2H69c-1.8,0-3.2,1.4-3.2,3.2c0,5.6-4.5,10.1-10.1,10.1c-1.8,0-3.2,1.4-3.2,3.2
					V108h-7.8V6.4l82.1,0V177.1z M85.8,102.2c-5.7,0-10.4-4.7-10.4-10.4S80,81.3,85.8,81.3c5.8,0,10.4,4.7,10.4,10.4
					S91.5,102.2,85.8,102.2z"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
</svg>

                    </div>
                    <h4>Cost-Effective</h4>
                    <p class="box-align">Our packages can be customized as per your needs and requirements, upon clinician’s referral. </p>
                </li>

                <li>
                    <div>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 79.2 171.7" style="enable-background:new 0 0 79.2 171.7;width: 55px;" xml:space="preserve">
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
    .st10{fill:#914A8F;}
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
    .st28{fill:#DBFE87;}
    .st29{fill:#A9C642;}
    .st30{fill:#6675AA;}
    .st31{fill:#FB3640;}
    .st32{fill:#FF6700;}
    .st33{fill:#1B264F;}
    .st34{fill:#3D315B;}
    .st35{fill:#FFFFFF;}
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
    .st69{clip-path:url(#SVGID_14_);}
    .st70{clip-path:url(#SVGID_16_);}
    .st71{fill:#EACDC5;}
    .st72{fill:#69326B;}
    .st73{fill:#E6E9ED;}
    .st74{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
    .st75{fill:#32327C;}
    .st76{fill:#211968;}
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
                                    <path class="st64" d="M11.4,45.8h3.8c9.7,0,13.6,1.4,18.1,2.9c5.2,1.8,11.2,3.9,26.7,4l7.9,0v23.9l0,54.2v7.1
			c0,15.5-12.7,28.2-28.2,28.2h0h0h0c-15.6,0-28.2-12.7-28.2-28.2v-7.1L11.4,45.8z"/>
                                    <path id="XMLID_1_" class="st72" d="M55.2,101.7c0-7.8-4.2-15-11.6-20.1c2.3-1.9,4.2-4.1,5.6-6.4c2.3-3.6,3.5-7.7,3.5-11.7h-4.5
			c0,1.8-0.3,3.6-0.9,5.3H31.9c-0.6-1.7-0.9-3.5-0.9-5.3h-4.5c0,4,1.2,8.1,3.5,11.7c1.5,2.3,3.4,4.5,5.6,6.4
			c-7.4,5-11.7,12.3-11.6,20.1c0,7.8,4.2,14.9,11.6,19.9c-2.2,1.9-4.1,4-5.6,6.3c-2.3,3.6-3.5,7.7-3.5,11.8h4.5
			c0-1.8,0.3-3.5,0.8-5.2h15.5c0.5,1.7,0.8,3.4,0.8,5.2h4.5c0-4.1-1.2-8.1-3.5-11.8c-1.5-2.3-3.4-4.4-5.6-6.3
			C50.9,116.6,55.1,109.5,55.2,101.7L55.2,101.7z M28.7,103.9h21.8c-0.2,1.7-0.7,3.4-1.4,4.9h-19C29.4,107.2,28.9,105.6,28.7,103.9
			L28.7,103.9z M50.5,99.4H28.7c0.2-1.7,0.7-3.4,1.4-4.9h19C49.8,96.1,50.3,97.7,50.5,99.4z M45.1,73.4c-1.4,2.1-3.2,4-5.5,5.7
			c-2.3-1.7-4.1-3.6-5.5-5.7H45.1z M39.4,84.6l0.3-0.2l0.3,0.2c2.5,1.6,4.7,3.4,6.4,5.4H33C34.7,88,36.8,86.2,39.4,84.6L39.4,84.6z
			 M34,130.1c1.4-2.2,3.3-4.1,5.6-5.9c2.3,1.7,4.2,3.7,5.6,5.9H34z M39.7,118.8c0,0-0.1,0-0.1,0.1c0,0-0.1,0-0.1-0.1
			c-2.6-1.6-4.8-3.4-6.5-5.5h13.3C44.5,115.3,42.3,117.2,39.7,118.8z"/>
                                    <path class="st72" d="M39.6,171.7C21.1,171.7,6,156.6,6,138.1V20.7c0,0,0,0,0,0c-3.3-0.1-5.9-2.7-5.9-6V6.1C0,2.7,2.7,0,6.1,0
			h67.1c3.3,0,6.1,2.7,6.1,6.1v8.5c0,3.3-2.6,6-5.9,6c0,0,0,0,0,0v53.8l0,63.5C73.3,156.6,58.2,171.7,39.6,171.7z M11.8,138.1
			c0,15.3,12.5,27.8,27.8,27.8s27.8-12.5,27.8-27.8l0-84.8c0,0,0,0,0,0l-7.4,0c-15.6-0.1-21.6-2.2-26.8-4c-4.5-1.6-8.4-2.9-18-2.9
			h-3.3c0,0,0,0,0,0V138.1z M15.2,40.4c10.6,0,15.2,1.6,19.9,3.3c5.1,1.8,10.3,3.6,24.9,3.7l7.4,0c0,0,0,0,0,0V20.7c0,0,0,0,0,0
			l-3.4,0c-1.5,0-3-1.1-3.1-2.7c-0.2-1.7,1.2-3.2,2.9-3.2h9.4c0.1,0,0.2-0.1,0.2-0.2V6.1c0-0.1-0.1-0.2-0.2-0.2H6.1
			c-0.1,0-0.2,0.1-0.2,0.2v8.5c0,0.1,0.1,0.2,0.2,0.2l10.7,0c1.5,0,3,1.1,3.1,2.7c0.2,1.7-1.2,3.2-2.9,3.2h-5.1c0,0,0,0,0,0v19.7
			c0,0,0,0,0,0H15.2z"/>
                                </g>
                            </g>
</svg>

                    </div>
                    <h4>Genetic Evaluation</h4>
                    <p>We look into your family's health history to gauge the risk of any future complications and tackle them beforehand!</p>
                </li>

                <li>
                    <div>


                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 156.6 128.5" style="enable-background:new 0 0 156.6 128.5;width: 90px;" xml:space="preserve">
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
    .st10{fill:#914A8F;}
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
    .st69{clip-path:url(#SVGID_14_);}
    .st70{clip-path:url(#SVGID_16_);}
    .st71{fill:#EACDC5;}
    .st72{fill:#69326B;}
    .st73{fill:#E6E9ED;}
    .st74{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
    .st75{fill:#32327C;}
    .st76{fill:#211968;}
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
                                    <path class="st64" d="M50.1,104.4c11.1,11.7,26.2,18.2,42.3,18.2c32.2,0,58.3-26.2,58.3-58.3c0-32.1-26.1-58.3-58.2-58.3h-0.2
			c-12.3,0-24.1,3.8-34.1,11l-0.8,0.6H23.1c-3.6,0-6.6,3-6.6,6.6s3,6.6,6.6,6.6h21.3l-2.6,4.4c-3,5.1-5.1,10.7-6.4,16.5l-0.5,2.3
			H12.5c-3.6,0-6.6,3-6.6,6.6c0,1.8,0.7,3.4,1.9,4.7c1.2,1.2,2.9,1.9,4.7,1.9h21.6l0.3,2.7c0.5,5.7,1.9,11.2,4,16.5l1.7,4.1H28.8
			c-3.6,0-6.6,3-6.6,6.6c0,3.6,3,6.6,6.6,6.6h20.4L50.1,104.4z"/>
                                    <circle class="st35" cx="92.4" cy="64.2" r="39.3"/>
                                    <g>
                                        <path class="st72" d="M92.4,109.4c-24.9,0-45.2-20.3-45.2-45.2s20.3-45.2,45.2-45.2s45.2,20.3,45.2,45.2S117.3,109.4,92.4,109.4z
				 M92.4,25c-21.7,0-39.3,17.6-39.3,39.3s17.6,39.3,39.3,39.3s39.3-17.6,39.3-39.3S114,25,92.4,25z"/>
                                        <path class="st72" d="M92.4,128.5c-9,0-17.6-1.8-25.8-5.4c-7.2-3.2-13.8-7.6-19.4-13.2l-0.5-0.5H28.8c-6.9,0-12.5-5.6-12.5-12.5
				c0-6.9,5.6-12.5,12.5-12.5h2.5l-0.6-2.2c-0.7-2.5-1.3-5.1-1.7-7.8L28.7,73H12.5C5.6,73,0,67.4,0,60.5C0,53.6,5.6,48,12.5,48h17.7
				l0.4-1.3c0.7-2.6,1.7-5.2,2.7-7.8l1-2.4H23.1c-6.9,0-12.5-5.6-12.5-12.5s5.6-12.5,12.5-12.5h32.5l0.4-0.3C66.8,3.9,79.3,0,92.4,0
				h0.2c17.2,0,33.3,6.7,45.3,18.8C150,31,156.6,47.1,156.6,64.2C156.6,99.7,127.8,128.5,92.4,128.5z M50.1,104.4
				c11.1,11.7,26.2,18.2,42.3,18.2c32.2,0,58.3-26.2,58.3-58.3c0-32.1-26.1-58.3-58.2-58.3h-0.2c-12.3,0-24.1,3.8-34.1,11l-0.8,0.6
				H23.1c-3.6,0-6.6,3-6.6,6.6s3,6.6,6.6,6.6h21.3l-2.6,4.4c-3,5.1-5.1,10.7-6.4,16.5l-0.5,2.3H12.5c-3.6,0-6.6,3-6.6,6.6
				c0,1.8,0.7,3.4,1.9,4.7c1.2,1.2,2.9,1.9,4.7,1.9h21.6l0.3,2.7c0.5,5.7,1.9,11.2,4,16.5l1.7,4.1H28.8c-3.6,0-6.6,3-6.6,6.6
				c0,3.6,3,6.6,6.6,6.6h20.4L50.1,104.4z"/>
                                        <polygon class="st72" points="89.4,67.2 89.4,39.4 95.3,39.4 95.3,61.3 108.5,61.3 108.5,67.2 			"/>
                                    </g>
                                </g>
                            </g>
</svg>



                    </div>
                    <h4>Appointment Tracking</h4>
                    <p style="margin-bottom: -1rem;">For your convenience we make sure to remind you of all the mandatory tests and counselling sessions.</p>
                </li>

                <li>
                    <div>
                        <svg version="1.1" id="Layer_1 c-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 131 212.3" style="enable-background:new 0 0 131 212.3;" xml:space="preserve">
<style type="text/css">
    .st0{clip-path:url(#SVGID_2_);}
    .st1{clip-path:url(#SVGID_4_);}
    .st2{clip-path:url(#SVGID_14_);}
    .st3{clip-path:url(#SVGID_18_);}
    .st4{clip-path:url(#SVGID_22_);}
    .st5{clip-path:url(#SVGID_24_);}
    .st6{fill:#EAC1D9;}
      .st7{fill: #eac1d9;}
    .st8{fill:#E6E9ED;}
    .st9{fill:#893F87;}
</style>
                            <g>
                                <path class="st9" d="M45.5,104.8c8.3-9.7,16.1-18.9,24-28.2c8.9-10.4,17.7-20.9,26.7-31.3c4.2-4.9,10.4-6.1,15.7-3.2
		c6.9,3.7,10.2,9.9,8.5,16.1c-0.6,2.1-1.8,4.1-3.2,5.7c-5.1,6.2-10.3,12.3-15.2,18c3.2,3,6.7,5.6,9.2,9c2.9,3.8,1.9,8.2,0.1,12.4
		c12.1,7.2,14.1,12.8,8.6,22.9c2.1,1.6,4.4,3,6.4,4.8c5.5,4.8,6.3,11.6,2,17.4c-14.5,19.3-32.4,34.5-54.4,44.9c-2,1-4,2.5-5.5,4.1
		c-3.8,4.1-7.2,8.5-10.9,12.7c-2.4,2.8-3.9,2.9-6.7,0.5c-16.2-14-32.4-28.1-48.5-42.1c-2.8-2.5-2.9-3.8-0.5-6.8
		c3.5-4.2,7.1-8.3,10.6-12.5c0.7-0.9,1.2-2.4,1-3.5c-3.4-19.5-2.4-39.1-1.1-58.7c0.2-2.9,0.4-5.8,0.5-8.7c0.3-7.8,5.6-13.1,14-13.8
		c6.9-0.5,13,4.3,14.2,11.5c1.4,8.3,2.5,16.7,3.8,25.1C44.9,102.1,45.1,103.1,45.5,104.8z M53.6,203.7c3.4-4,6.5-8,10-11.6
		c1.9-1.9,4.1-3.8,6.5-4.9c21-9.7,38.1-24.3,52.1-42.5c2.4-3.2,2.2-5.7-0.5-8.3c-3.9-3.7-6.2-4.1-9.6-1.4c-1.8,1.5-3.5,2.1-5.3,0.3
		c-1.9-1.9-1.1-3.8,0.4-5.6c2.1-2.4,4.2-4.9,6.3-7.4c2.8-3.3,2.9-6,0.4-8.6c-3.8-4-6.4-4.4-10.1-1.5c-1.7,1.3-3.5,1.8-5.1,0.2
		c-1.8-1.7-1.4-3.6,0.1-5.3c1.9-2.2,4.1-4.2,5.5-6.7c0.9-1.7,1.5-4.6,0.7-6.1c-2.7-5.1-6.8-5.6-11.6-2.7c-1.1,0.7-3.7,0.7-4.4-0.1
		c-0.8-1-0.6-3.1-0.5-4.7c0-0.6,0.9-1.2,1.4-1.8c7.2-8.5,14.4-17,21.7-25.5c2-2.3,3-4.8,1.1-7.6c-3.7-5.5-8.2-5.8-12.5-0.7
		c-17.9,21-35.8,42.1-53.8,63.1c-1,1.1-3.2,2.3-4.4,1.9c-1.2-0.3-2.4-2.5-2.7-4c-1.9-11.7-3.6-23.4-5.4-35c-0.6-4-3.3-6-7.3-5.7
		c-4.1,0.3-6.6,2.6-6.8,6.4c-0.5,9.3-1.2,18.7-1.6,28c-0.5,13.3-0.5,26.6,2.4,39.6c0.6,2.7,0.1,4.6-1.7,6.6
		c-3.5,3.9-6.9,8.1-10.5,12.2C23.7,177.7,38.6,190.6,53.6,203.7z"></path>
                                <path class="st9" d="M58.2,24.4c0,6.6,0,13.1,0,19.7c0,2.4-0.6,4.3-3.4,4.3c-2.6-0.1-3.2-2-3.2-4.2c0-13.3,0-26.7,0-40
		c0-2.3,0.8-4.1,3.3-4.1c2.6,0,3.3,1.7,3.3,4C58.2,10.8,58.2,17.6,58.2,24.4z"></path>
                                <path class="st9" d="M69.6,50.4c-3.3,0-4.9-2.5-3.7-4.7c0.5-0.9,1.2-1.6,1.9-2.3c9-9,17.9-17.9,26.9-26.9c0.5-0.5,0.9-1.3,1.4-1.3
		c1.5-0.2,3.6-0.6,4.3,0.1c0.8,0.8,0.8,3.1,0.2,4.3c-0.6,1.4-2.2,2.4-3.4,3.6c-8.3,8.3-16.7,16.7-25,25
		C71.4,49.2,70.2,49.9,69.6,50.4z"></path>
                                <path class="st9" d="M11.4,13.7c1.3,0.9,2.3,1.4,3.1,2.1c9.5,9.4,18.9,18.9,28.3,28.3c1.6,1.6,2.5,3.4,0.7,5.2
		c-1.9,2-3.8,1.1-5.5-0.6c-9.4-9.5-18.9-18.9-28.2-28.4c-0.9-0.9-1.3-2.8-1.1-4.1C8.8,15.3,10.3,14.6,11.4,13.7z"></path>
                                <path class="st7" d="M53.6,203.7c-15-13-29.9-26-45-39.1c3.6-4.2,6.9-8.3,10.5-12.2c1.8-2,2.3-3.9,1.7-6.6
		c-2.9-13.1-2.9-26.3-2.4-39.6c0.4-9.4,1.1-18.7,1.6-28c0.2-3.8,2.7-6.1,6.8-6.4c4-0.3,6.7,1.7,7.3,5.7c1.8,11.7,3.4,23.4,5.4,35
		c0.2,1.5,1.5,3.6,2.7,4c1.2,0.3,3.4-0.8,4.4-1.9c18-21,35.9-42,53.8-63.1c4.3-5,8.8-4.8,12.5,0.7c1.9,2.8,0.9,5.2-1.1,7.6
		c-7.3,8.5-14.5,17-21.7,25.5c-0.5,0.6-1.4,1.2-1.4,1.8c-0.1,1.6-0.4,3.7,0.5,4.7c0.7,0.8,3.2,0.8,4.4,0.1c4.9-3,9-2.4,11.6,2.7
		c0.8,1.5,0.2,4.4-0.7,6.1c-1.4,2.5-3.6,4.5-5.5,6.7c-1.5,1.8-1.9,3.6-0.1,5.3c1.6,1.6,3.4,1.1,5.1-0.2c3.7-2.9,6.3-2.4,10.1,1.5
		c2.5,2.6,2.4,5.3-0.4,8.6c-2.1,2.5-4.2,4.9-6.3,7.4c-1.6,1.8-2.4,3.7-0.4,5.6c1.8,1.7,3.5,1.1,5.3-0.3c3.4-2.7,5.7-2.3,9.6,1.4
		c2.7,2.5,2.9,5.1,0.5,8.3c-14,18.2-31.1,32.8-52.1,42.5c-2.4,1.1-4.7,3-6.5,4.9C60.1,195.7,57,199.6,53.6,203.7z"></path>
                            </g>
</svg>


                    </div>
                    <h4>Convenient</h4>
                    <p>Timely sample collection and report delivery, while we maintain confidentiality and transparency!</p>
                </li>
            </ul>

        </div>
    </div>


</section>
</div>
<!--------------------------------------------------------------
 FAQ
---------------------------------------------------------------->
<section class="faq">
    <img style="width: 100%;" src="/img/services/faq.svg" class="bottom-swoop">
    <div class="container">
        <div class="main-title">
            <h1>FAQs</h1>
			<p>&nbsp;&nbsp;</p>
        </div>
        <div class="row">
            <div class="col-sm-4 faq-img">
                <img src="img/FAQ.jpg" alt="">
            </div>
            <div class="col-sm-8">
                <div id="accordion" class="accordion">
                    <div class="card mb-0">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                            <a class="card-title">
                                <p class="faqt"><span>1</span>What is the ideal age to get pregnant? </p>
                            </a>
                        </div>
                        <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                            <p> The peak of fertility is between early 20s to mid-30s and so this period would be an appropriate time to consider pregnancy. </p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <a class="card-title"><p class="faqt"><span>2</span>We have been trying to have a baby for more than a year but haven’t been able to conceive, what should we do? </p></a>
                        </div>
                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                            <p>There are many factors that contribute to infertility. A proper evaluation of both the partners is the first step towards diagnosing the cause which can then be treated accordingly.</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <a class="card-title"><p class="faqt"><span>3</span>I have had many miscarriages, what should I do? </p></a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body"><p>There could be many reasons for miscarriages, some being genetic in nature. Consulting a doctor and subsequently a genetic counsellor will help you determine the cause for the same.</p></div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            <a class="card-title"><p class="faqt"><span>4</span>Both my partner and I are healthy, can my baby still have a genetic disorder? </p></a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body"> <p>Yes, there are chances that healthy parents are asymptomatic carriers of a medical condition and may have a 25% chance of passing it on to their children. It is also possible that healthy non-carrier couples may have a baby with a medical condition due to genetic or environmental factors. The root cause can be determined with the help of a genetic counsellor.  </p></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</section>
<!--------------------------------------------------------------
Contact
---------------------------------------------------------------->
<section class="contact c-services">
    <div class="container contact-box">
        <div class="main-title">
            <h1>Contact Us</h1>
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
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        cssEase: 'linear'
    });
</script>



</body>
</html>
