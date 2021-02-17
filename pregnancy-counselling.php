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
    <title>Pregnancy Care - Planning a Pregnancy | Baby Conceiving | Planning a Baby</title>
    <meta name="description" content="Plan a Pregnancy - Crysta provides pregnancy care and best experts advice on planning a baby. Crysta guides you in planning a pregnancy, consultations, screening & tests.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.ico">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#003883">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://crysta.care/modern-parents" />
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
<header class="pregnancy-page">
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

    <div class="hero-text hero-text-pregnancy">
        <h1>Pregnancy<br>Counselling
        </h1>
        <h5>A healthy baby comes from a healthy you.  A session with our specialist will help the couple make necessary lifestyle changes and prepare for a pregnancy. </h5>
        <a class="know-btn" href="/contact-us">Contact Us</a>
    </div>
</header>
<!--------------------------------------------------------------
Why choose Crysta
---------------------------------------------------------------->
<section class="coun-first">
    <div class="container">
        <div class="coun-first-text">
            <p>Pregnancy is the most exciting 9 months in a couple's life, whether you are planning or are expecting a baby, the journey ahead is bumpy yet a beautiful one. We at Crysta want to guide you to ensure your baby's well being.

            </p>
        </div>
       
    </div>


</section>


<!--------------------------------------------------------------
The Need
---------------------------------------------------------------->
<section class="the-need">
    <img style="width: 100%" src="/img/services/Genetic-counselling-top.svg" class="bottom-swoop">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="image-with-title">
                    <img src="/img/services/the-need.jpg" alt="">
                    <div class=" main-title title-box" style="top: 50%;left: 32%;">
                        <h1>Crysta Counselling<br> and who needs it:</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row c-step-box">
            <div class="col-sm-6">
                <div class="c-g-box">
                    <div class="c-box-content">
                        <p>For couples planning for a baby, we ensure that you are physically and psychologically fit for the road ahead</p>
                    </div>
                </div>
                <div class="c-g-box c-second">
                    <div class="c-box-content">
                        <p> To help you manage your pregnancy at every milestone, even adressing the stress associated to being a first time parent </p>
                    </div>
                </div>

            </div>

            <div class="col-sm-6 mobile-padding-box">
                <div class="c-g-box c-third">
                    <div class="c-box-content">
                        <p>To guide you about the mandatory screenings and tests whether you are expecting or planning for a baby, we guide you on the steps you must take for your baby's health</p>
                    </div>
                </div>
                <div class="c-g-box c-four">
                    <div class="c-box-content">
                        <p>To support by providing counselling sessions with every test, helping you understand your path to parenthood</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center" class="col-sm-12">
        <a href="/contact-us" class="btn-insta"> Crysta Counsellor <i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>
    </div>

    <img style="width: 100%" src="/img/services/Genetic-counselling-footer.svg" class="bottom-swoop">
</section>
<!--------------------------------------------------------------
Timeline
---------------------------------------------------------------->
<!--<section class="c-timeline">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <ul class="timeline timeline-centered">
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Pre Test</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <div id="trigger"> <h3 class="timeline-title">Entire Data Report</h3></div>
                            <div class="hidden"><span>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                        eu pede mollis pretium. Pellentesque ut neque.</span></div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Pre Test</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <div id="trigger"><h3 class="timeline-title">Going Back 3 Generations</h3></div>
                            <div class="hidden"><p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                    eu pede mollis pretium. Pellentesque ut neque. </p></div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Post Test</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <div id="trigger"><h3 class="timeline-title">Pedigree Chart</h3></div>
                            <div class="hidden"><p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                    eu pede mollis pretium. Pellentesque ut neque. </p></div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Post Test</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <div id="trigger"><h3 class="timeline-title">Counselling </h3></div>
                            <div class="hidden"><p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                    eu pede mollis pretium. Pellentesque ut neque. </p></div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Post Test</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <div id="trigger"><h3 class="timeline-title">Gauge the risk for your baby's health</h3></div>
                            <div class="hidden"><p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                    eu pede mollis pretium. Pellentesque ut neque. </p></div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>-->
<!--------------------------------------------------------------
 V Test
---------------------------------------------------------------->
<!--<section class="v-test">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title">
                    <h1>Various Test</h1>
                </div>
                <div class="row c-how__section-1 rev">
                    <div class="col-xs-12 col-sm-6">
                        <div class="c-how__section-container-1">
                            <div clsas="u-text-darkest">
                                <div class="c-step-title">
                                    Karyotype
                                </div>
                                <p class="c-how__description-1 ">
                                    This is a blood test that examines the 23 pairs of chromosomes for extra or missing or abnormal copies of them in the baby.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="c-step-image"> <img src="/img/Assets1.png"></div>
                    </div>

                </div>
                <div class="row c-how__section-1">
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="c-step-image"> <img src="/img/Assets2.png"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="c-how__section-container-1 right-side-text">
                            <div clsas="u-text-darkest">
                                <div class="c-step-title">
                                    Thalassemia Screening
                                </div>
                                <p class="c-how__description-1">
                                    The hemoglobin HPLC test quantifies the different types of hemoglobin in the blood of the parent, to identify if their baby carries a risk of having thalassemia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row c-how__section-1 rev">
                    <div class="col-xs-12 col-sm-6">
                        <div class="c-how__section-container-1">
                            <div clsas="u-text-darkest">
                                <div class="c-step-title">
                                    Couple Carrier Screening
                                </div>
                                <p class="c-how__description-1">
                                    This screening helps to identify if the couple is carrying the same recessive gene. Meaning, the carriers might be healthy but together they may pass on the genetic condition to their offspring.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="c-step-image">  <img src="/img/Assets1.png"></div>
                    </div>

                </div>
                <div class="row c-how__section-1">
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="c-step-image"> <img src="/img/Assets2.png"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="c-how__section-container-1 right-side-text">
                            <div clsas="u-text-darkest">
                                <div class="c-step-title">
                                    NIPS
                                </div>
                                <p class="c-how__description-1">
                                    This is short for a non-invasive prenatal test screening, without the risk of miscarriage via DNA testing in mothers blood, the screening helps to check if the fetus has any chromosomal anomaly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <img class="vt-bottom" src="/img/services/vt-bottom.svg">
</section>-->
<!--------------------------------------------------------------
 C-why crysta side-box
---------------------------------------------------------------->
<section class="c-side-box-text">
    <div class="container">
        <div class="main-title">
            <h1>Why Crysta?</h1>
        </div>
        <div class="row left-box">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="svg-box-gen">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 234.2 234.2" style="enable-background:new 0 0 234.2 234.2;" xml:space="preserve">
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
                                        <path class="st63" d="M219.1,234.2h-204c-8.3,0-15.1-6.8-15.1-15.1v-204C0,6.8,6.8,0,15.1,0h204c8.3,0,15.1,6.8,15.1,15.1v204
			C234.2,227.5,227.5,234.2,219.1,234.2z"/>
                                        <g>
                                            <path class="st64" d="M145.4,49.1H82.6c-2.9,0-5.2,2.4-5.2,5.2v57.5V159c0,2.9,2.4,5.2,5.2,5.2h60.1h2.6c2.9,0,5.2-2.4,5.2-5.2
				v-2.6c-4.3,0-7.8-3.5-7.8-7.8s3.5-7.8,7.8-7.8c-4.3,0-7.8-3.5-7.8-7.8s3.5-7.8,7.8-7.8c-4.3,0-7.8-3.5-7.8-7.8s3.5-7.8,7.8-7.8
				c-4.3,0-7.8-3.5-7.8-7.8s3.5-7.8,7.8-7.8v-0.3V54.4C150.6,51.5,148.3,49.1,145.4,49.1z"/>
                                            <path class="st71" d="M142.8,164.2L111.4,199l-49.7-17.3V96.2c8.7,0,15.7,7,15.7,15.7V159c0,2.9,2.4,5.2,5.2,5.2H142.8z"/>
                                            <g>
                                                <path class="st71" d="M153.2,125c4.3,0,7.8,3.5,7.8,7.8s-3.5,7.8-7.8,7.8h-2.6c-4.3,0-7.8-3.5-7.8-7.8s3.5-7.8,7.8-7.8H153.2z"
                                                />
                                                <path class="st71" d="M153.2,140.6c4.3,0,7.8,3.5,7.8,7.8s-3.5,7.8-7.8,7.8h-2.6c-4.3,0-7.8-3.5-7.8-7.8s3.5-7.8,7.8-7.8H153.2z
					"/>
                                                <path class="st71" d="M153.2,109.3c4.3,0,7.8,3.5,7.8,7.8s-3.5,7.8-7.8,7.8h-2.6c-4.3,0-7.8-3.5-7.8-7.8s3.5-7.8,7.8-7.8H153.2z
					"/>
                                            </g>
                                            <path class="st73" d="M114,145.9c2.9,0,5.2,2.4,5.2,5.2s-2.4,5.2-5.2,5.2c-2.9,0-5.2-2.4-5.2-5.2S111.1,145.9,114,145.9z"/>
                                            <path class="st71" d="M153.2,93.6c4.3,0,7.8,3.5,7.8,7.8s-3.5,7.8-7.8,7.8h-2.6c-4.3,0-7.8-3.5-7.8-7.8s3.5-7.8,7.8-7.8H153.2z"
                                            />
                                            <path class="st35" d="M114,83.1c11.6,0,20.9,9.4,20.9,20.9c0,11.6-9.4,20.9-20.9,20.9s-20.9-9.4-20.9-20.9
				C93.1,92.5,102.5,83.1,114,83.1z"/>
                                            <path class="st72" d="M114,127.6c-13,0-23.5-10.6-23.5-23.5S101,80.5,114,80.5s23.5,10.6,23.5,23.5S127,127.6,114,127.6z
				 M114,85.8c-10.1,0-18.3,8.2-18.3,18.3s8.2,18.3,18.3,18.3s18.3-8.2,18.3-18.3S124.1,85.8,114,85.8z"/>
                                            <path class="st72" d="M114,114.5c-1.4,0-2.6-1.2-2.6-2.6V96.2c0-1.4,1.2-2.6,2.6-2.6c1.4,0,2.6,1.2,2.6,2.6v15.7
				C116.6,113.3,115.5,114.5,114,114.5z"/>
                                            <path class="st72" d="M121.9,106.7h-15.7c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6h15.7c1.4,0,2.6,1.2,2.6,2.6
				S123.3,106.7,121.9,106.7z"/>
                                            <path class="st72" d="M77.4,114.5c-1.4,0-2.6-1.2-2.6-2.6c0-7.2-5.9-13.1-13.1-13.1c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6
				c10.1,0,18.3,8.2,18.3,18.3C80,113.3,78.9,114.5,77.4,114.5z"/>
                                            <path class="st72" d="M61.7,184.3c-1.4,0-2.6-1.2-2.6-2.6V96.2c0-1.4,1.2-2.6,2.6-2.6c1.4,0,2.6,1.2,2.6,2.6v85.5
				C64.3,183.1,63.2,184.3,61.7,184.3z"/>
                                            <path class="st72" d="M145.4,166.8H82.6c-4.3,0-7.8-3.5-7.8-7.8V54.4c0-4.3,3.5-7.8,7.8-7.8h62.7c4.3,0,7.8,3.5,7.8,7.8
				c0,1.4-1.2,2.6-2.6,2.6s-2.6-1.2-2.6-2.6c0-1.4-1.2-2.6-2.6-2.6H82.6c-1.4,0-2.6,1.2-2.6,2.6V159c0,1.4,1.2,2.6,2.6,2.6h62.7
				c1.4,0,2.6-1.2,2.6-2.6c0-1.4,1.2-2.6,2.6-2.6s2.6,1.2,2.6,2.6C153.2,163.3,149.7,166.8,145.4,166.8z"/>
                                            <path class="st72" d="M150.6,95.9c-1.4,0-2.6-1.2-2.6-2.6V54.4c0-1.4,1.2-2.6,2.6-2.6s2.6,1.2,2.6,2.6v38.9
				C153.2,94.7,152.1,95.9,150.6,95.9z"/>
                                            <path class="st72" d="M150.6,143.3c-5.8,0-10.5-4.7-10.5-10.5c0-5.8,4.7-10.5,10.5-10.5c1.4,0,2.6,1.2,2.6,2.6
				c0,1.4-1.2,2.6-2.6,2.6c-2.9,0-5.2,2.3-5.2,5.2c0,2.9,2.3,5.2,5.2,5.2c1.4,0,2.6,1.2,2.6,2.6S152.1,143.3,150.6,143.3z"/>
                                            <path class="st72" d="M150.6,159c-5.8,0-10.5-4.7-10.5-10.5s4.7-10.5,10.5-10.5c1.4,0,2.6,1.2,2.6,2.6s-1.2,2.6-2.6,2.6
				c-2.9,0-5.2,2.3-5.2,5.2s2.3,5.2,5.2,5.2c1.4,0,2.6,1.2,2.6,2.6S152.1,159,150.6,159z"/>
                                            <path class="st72" d="M153.2,143.3c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6c2.9,0,5.2-2.3,5.2-5.2c0-2.9-2.3-5.2-5.2-5.2
				c-1.4,0-2.6-1.2-2.6-2.6c0-1.4,1.2-2.6,2.6-2.6c5.8,0,10.5,4.7,10.5,10.5C163.7,138.6,159,143.3,153.2,143.3z"/>
                                            <path class="st72" d="M153.2,159c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6c2.9,0,5.2-2.3,5.2-5.2s-2.3-5.2-5.2-5.2
				c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6c5.8,0,10.5,4.7,10.5,10.5S159,159,153.2,159z"/>
                                            <path class="st72" d="M153.2,143.3h-2.6c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6h2.6c1.4,0,2.6,1.2,2.6,2.6
				S154.7,143.3,153.2,143.3z"/>
                                            <path class="st72" d="M153.2,159h-2.6c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6h2.6c1.4,0,2.6,1.2,2.6,2.6S154.7,159,153.2,159z"
                                            />
                                            <path class="st72" d="M150.6,127.6c-5.8,0-10.5-4.7-10.5-10.5c0-5.8,4.7-10.5,10.5-10.5c1.4,0,2.6,1.2,2.6,2.6
				c0,1.4-1.2,2.6-2.6,2.6c-2.9,0-5.2,2.3-5.2,5.2c0,2.9,2.3,5.2,5.2,5.2c1.4,0,2.6,1.2,2.6,2.6
				C153.2,126.4,152.1,127.6,150.6,127.6z"/>
                                            <path class="st72" d="M150.6,111.9c-5.8,0-10.5-4.7-10.5-10.5S144.8,91,150.6,91c1.4,0,2.6,1.2,2.6,2.6s-1.2,2.6-2.6,2.6
				c-2.9,0-5.2,2.3-5.2,5.2s2.3,5.2,5.2,5.2c1.4,0,2.6,1.2,2.6,2.6S152.1,111.9,150.6,111.9z"/>
                                            <path class="st72" d="M153.2,127.6c-1.4,0-2.6-1.2-2.6-2.6c0-1.4,1.2-2.6,2.6-2.6c2.9,0,5.2-2.3,5.2-5.2c0-2.9-2.3-5.2-5.2-5.2
				c-1.4,0-2.6-1.2-2.6-2.6c0-1.4,1.2-2.6,2.6-2.6c5.8,0,10.5,4.7,10.5,10.5C163.7,122.9,159,127.6,153.2,127.6z"/>
                                            <path class="st72" d="M153.2,111.9c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6c2.9,0,5.2-2.3,5.2-5.2s-2.3-5.2-5.2-5.2
				c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6c5.8,0,10.5,4.7,10.5,10.5S159,111.9,153.2,111.9z"/>
                                            <path class="st72" d="M153.2,111.9h-2.6c-1.4,0-2.6-1.2-2.6-2.6c0-1.4,1.2-2.6,2.6-2.6h2.6c1.4,0,2.6,1.2,2.6,2.6
				C155.8,110.7,154.7,111.9,153.2,111.9z"/>
                                            <path class="st72" d="M153.2,96.2h-2.6c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6h2.6c1.4,0,2.6,1.2,2.6,2.6S154.7,96.2,153.2,96.2
				z"/>
                                            <path class="st72" d="M153.2,127.6h-2.6c-1.4,0-2.6-1.2-2.6-2.6c0-1.4,1.2-2.6,2.6-2.6h2.6c1.4,0,2.6,1.2,2.6,2.6
				C155.8,126.4,154.7,127.6,153.2,127.6z"/>
                                            <path class="st72" d="M111.4,201.6c-0.6,0-1.3-0.2-1.8-0.7c-1.1-1-1.2-2.6-0.2-3.7l31.4-34.8c1-1.1,2.6-1.2,3.7-0.2
				c1.1,1,1.2,2.6,0.2,3.7l-31.4,34.8C112.8,201.3,112.1,201.6,111.4,201.6L111.4,201.6z"/>
                                            <path class="st72" d="M116.6,203.4c-0.3,0-0.6,0-0.9-0.1l-60.1-20.9c-1.4-0.5-2.1-2-1.6-3.3c0.5-1.4,2-2.1,3.3-1.6l60.1,20.9
				c1.4,0.5,2.1,2,1.6,3.3C118.7,202.7,117.7,203.4,116.6,203.4L116.6,203.4z"/>
                                            <path class="st72" d="M150.6,161.6c-1.4,0-2.6-1.2-2.6-2.6v-2.6c0-1.4,1.2-2.6,2.6-2.6s2.6,1.2,2.6,2.6v2.6
				C153.2,160.4,152.1,161.6,150.6,161.6z"/>
                                            <path class="st72" d="M114,159c-4.3,0-7.8-3.5-7.8-7.8s3.5-7.8,7.8-7.8s7.8,3.5,7.8,7.8S118.3,159,114,159z M114,148.5
				c-1.4,0-2.6,1.2-2.6,2.6s1.2,2.6,2.6,2.6s2.6-1.2,2.6-2.6S115.5,148.5,114,148.5z"/>
                                            <path class="st72" d="M106.2,62.2c-1.4,0-2.6-1.2-2.6-2.6c0-1.4,1.2-2.6,2.6-2.6h0c1.4,0,2.6,1.2,2.6,2.6
				C108.9,61,107.7,62.2,106.2,62.2z"/>
                                            <path class="st72" d="M121.9,62.2H114c-1.4,0-2.6-1.2-2.6-2.6c0-1.4,1.2-2.6,2.6-2.6h7.8c1.4,0,2.6,1.2,2.6,2.6
				C124.5,61,123.3,62.2,121.9,62.2z"/>
                                        </g>
                                    </g>
                                </g>
</svg>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="c-info">
                            <h3 class="info-title">One-stop platform</h3>
                            <p>Connecting Crysta parents to multidisciplinary healthcare specialists, routine testing through an online E-module</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="svg-box-gen">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 234.2 234.2" style="enable-background:new 0 0 234.2 234.2;" xml:space="preserve">
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
                                        <g>
                                            <path class="st63" d="M219.1,234.2h-204c-8.3,0-15.1-6.8-15.1-15.1v-204C0,6.8,6.8,0,15.1,0h204c8.3,0,15.1,6.8,15.1,15.1v204
				C234.2,227.5,227.5,234.2,219.1,234.2z"/>
                                        </g>
                                        <path class="st64" d="M100.9,45.8c-4.1,0-7.9,2-10.2,5.5c-2.3,3.6-5.9,6.2-10,7.3c-5.5,1.5-9.2,6.6-8.9,12.3
			c0.2,4.3-1.1,8.5-3.8,11.8c-3.6,4.5-3.6,10.7,0,15.2c2.7,3.3,4,7.5,3.8,11.8c-0.3,5.7,3.4,10.8,8.9,12.3c4.1,1.1,7.7,3.7,10,7.3
			c2.3,3.4,6.1,5.5,10.2,5.5c1.5,0,2.9-0.3,4.3-0.8c2-0.8,4.1-1.1,6.2-1.1s4.2,0.4,6.2,1.1c1.4,0.5,2.8,0.8,4.3,0.8
			c4.1,0,7.9-2,10.2-5.5c2.3-3.6,5.9-6.2,10-7.3c5.5-1.5,9.2-6.6,8.9-12.3c-0.2-4.3,1.1-8.5,3.8-11.8c3.6-4.5,3.6-10.7,0-15.2
			c-2.7-3.3-4-7.5-3.8-11.8c0.3-5.7-3.4-10.8-8.9-12.3c-4.1-1.1-7.7-3.7-10-7.3c-2.3-3.4-6.1-5.5-10.2-5.5c-1.5,0-2.9,0.3-4.3,0.8
			c-2,0.8-4.1,1.1-6.2,1.1c-2.1,0-4.2-0.4-6.2-1.1C103.8,46.1,102.4,45.8,100.9,45.8z"/>
                                        <g>
                                            <path class="st35" d="M99.7,115.6c-2,0-3.8-0.6-5.4-1.8c-3.3-2.3-4.6-6.4-3.3-10.2l1.5-4.8c0.5-1.6,0-3.4-1.4-4.4l-4-2.9
				c-2-1.4-3.3-3.6-3.7-6s0.2-4.8,1.6-6.8c1.7-2.4,4.5-3.8,7.4-3.8h5c1.7,0,3.2-1.1,3.7-2.7l1.5-4.7c1.2-3.8,4.7-6.3,8.7-6.3
				c1,0,1.9,0.2,2.8,0.5c2.8,0.9,5,3.1,5.9,5.9l1.5,4.7c0.5,1.6,2,2.7,3.7,2.7h5c2.4,0,4.7,1,6.5,2.7s2.7,4,2.7,6.5
				c0,2.9-1.4,5.7-3.8,7.4l-4,2.9c-1.4,1-1.9,2.7-1.4,4.4l1.5,4.7c0.8,2.3,0.6,4.8-0.6,7s-3,3.8-5.3,4.6c-0.9,0.3-1.9,0.4-2.8,0.4
				c-1.9,0-3.8-0.6-5.4-1.8l-4-2.9c-0.7-0.5-1.5-0.7-2.3-0.7s-1.6,0.3-2.3,0.7l-4,2.9C103.5,115,101.6,115.6,99.7,115.6z
				 M111.4,104.9c1.9,0,3.8,0.6,5.4,1.8l4,2.9c0.7,0.5,1.5,0.7,2.3,0.7c1.2,0,2.4-0.6,3.2-1.6s0.9-2.3,0.6-3.5l-1.5-4.7
				c-1.2-3.8,0.1-7.9,3.3-10.2l4-2.9c1.7-1.3,2.1-3.7,0.9-5.4c-0.7-1-1.9-1.6-3.2-1.6h-5c-4,0-7.5-2.5-8.7-6.3l-1.5-4.7
				c-0.5-1.6-2-2.7-3.7-2.7c-0.4,0-0.8,0.1-1.2,0.2c-1.2,0.4-2.1,1.3-2.5,2.5l-1.5,4.7c-1.2,3.8-4.7,6.3-8.7,6.3h-5
				c-2.1,0-3.9,1.7-3.9,3.9c0,1.2,0.6,2.4,1.6,3.2l4,2.9c3.2,2.3,4.6,6.5,3.3,10.2l-1.5,4.7c-0.3,1-0.2,2,0.2,3
				c0.5,0.9,1.3,1.6,2.3,1.9c0.4,0.1,0.8,0.2,1.2,0.2c0.8,0,1.6-0.3,2.3-0.7l4-2.9C107.6,105.5,109.4,104.9,111.4,104.9z"/>
                                            <path class="st72" d="M85.9,184.2c-0.7,0-1.4-0.3-1.9-0.8c-0.5-0.5-0.8-1.2-0.8-1.9v-52.6l-0.3-0.2c-1.1-0.8-2.4-1.3-3.7-1.7
				c-7.9-2.2-13.2-9.5-12.8-17.7c0.1-3-0.8-5.9-2.7-8.2c-5.1-6.4-5.1-15.4,0-21.8c1.9-2.3,2.8-5.2,2.7-8.2
				c-0.4-8.2,4.9-15.5,12.8-17.7c2.9-0.8,5.4-2.6,7-5.1c3.2-4.9,8.7-7.9,14.6-7.9c2.1,0,4.2,0.4,6.2,1.1c1.4,0.5,2.8,0.8,4.3,0.8
				c1.5,0,2.9-0.3,4.3-0.8c2-0.7,4-1.1,6.1-1.1c5.9,0,11.4,2.9,14.6,7.9c1.6,2.5,4.1,4.3,7,5.1c7.9,2.2,13.2,9.4,12.8,17.7
				c-0.1,3,0.8,5.9,2.7,8.2c5.1,6.4,5.1,15.4,0,21.8c-1.9,2.3-2.8,5.2-2.7,8.2c0.4,8.2-4.9,15.5-12.8,17.7c-1.3,0.4-2.5,0.9-3.7,1.7
				l-0.3,0.2v52.6c0,0.6-0.2,1.2-0.6,1.7c-0.5,0.6-1.3,1-2.1,1c0,0,0,0,0,0c-0.6,0-1.2-0.2-1.7-0.6l-23.9-19.3l-23.8,19.3
				C87.1,184,86.5,184.2,85.9,184.2z M111.4,158.3c0.6,0,1.2,0.2,1.7,0.6l21.2,17.2v-41.1l-1,0.9c-3.2,2.7-7.2,4.2-11.4,4.3
				c-2.1,0-4.2-0.4-6.1-1.1c-1.4-0.5-2.8-0.8-4.3-0.8s-2.9,0.3-4.3,0.8c-2,0.7-4,1.1-6.1,1.1c-4.2,0-8.2-1.5-11.4-4.2l-1-0.9V176
				l21.2-17.1C110.2,158.5,110.8,158.3,111.4,158.3z M100.9,45.8c-4.1,0-7.9,2-10.2,5.5c-2.3,3.6-5.9,6.2-10,7.3
				c-5.5,1.5-9.2,6.6-8.9,12.3c0.2,4.3-1.1,8.5-3.8,11.8c-3.6,4.5-3.6,10.7,0,15.2c2.7,3.3,4,7.5,3.8,11.8
				c-0.3,5.7,3.4,10.8,8.9,12.3c4.1,1.1,7.7,3.7,10,7.3c2.3,3.4,6.1,5.5,10.2,5.5c1.5,0,2.9-0.3,4.3-0.8c2-0.8,4.1-1.1,6.2-1.1
				s4.2,0.4,6.2,1.1c1.4,0.5,2.8,0.8,4.3,0.8c4.1,0,7.9-2,10.2-5.5c2.3-3.6,5.9-6.2,10-7.3c5.5-1.5,9.2-6.6,8.9-12.3
				c-0.2-4.3,1.1-8.5,3.8-11.8c3.6-4.5,3.6-10.7,0-15.2c-2.7-3.3-4-7.5-3.8-11.8c0.3-5.7-3.4-10.8-8.9-12.3c-4.1-1.1-7.7-3.7-10-7.3
				c-2.3-3.4-6.1-5.5-10.2-5.5c-1.5,0-2.9,0.3-4.3,0.8c-2,0.8-4.1,1.1-6.2,1.1c-2.1,0-4.2-0.4-6.2-1.1
				C103.8,46.1,102.4,45.8,100.9,45.8z"/>
                                        </g>
                                    </g>
                                </g>
</svg>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="c-info">
                            <h3 class="info-title">Certified Counselors</h3>
                            <p>To help couples plan ahead for a stress-free pregnancy</p>
                        </div>
                    </div>
                </div>
                

            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="svg-box-gen">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 234.2 234.2" style="enable-background:new 0 0 234.2 234.2;" xml:space="preserve">
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
                                        <path class="st63" d="M219.1,234.2h-204c-8.3,0-15.1-6.8-15.1-15.1v-204C0,6.8,6.8,0,15.1,0h204c8.3,0,15.1,6.8,15.1,15.1v204
			C234.2,227.5,227.5,234.2,219.1,234.2z"/>
                                        <g>
                                            <path class="st72" d="M103.5,116.2c5.6-6.6,11-12.9,16.3-19.1c6-7.1,12.1-14.2,18.1-21.3c2.8-3.3,7.1-4.1,10.7-2.2
				c4.7,2.5,7,6.7,5.8,11c-0.4,1.4-1.3,2.8-2.2,3.9c-3.5,4.2-7,8.3-10.3,12.2c2.2,2.1,4.6,3.8,6.3,6.1c2,2.6,1.3,5.6,0.1,8.4
				c8.2,4.9,9.6,8.7,5.9,15.6c1.5,1.1,3,2.1,4.3,3.2c3.7,3.2,4.3,7.9,1.4,11.8c-9.9,13.1-22,23.5-37,30.5c-1.4,0.7-2.7,1.7-3.7,2.8
				c-2.6,2.8-4.9,5.8-7.4,8.6c-1.7,1.9-2.7,2-4.6,0.3c-11-9.5-22-19.1-33-28.6c-1.9-1.7-2-2.6-0.3-4.6c2.4-2.8,4.9-5.6,7.2-8.5
				c0.5-0.6,0.8-1.6,0.7-2.4c-2.3-13.3-1.6-26.6-0.7-39.9c0.1-2,0.3-3.9,0.4-5.9c0.2-5.3,3.8-8.9,9.5-9.4c4.7-0.4,8.8,2.9,9.6,7.8
				c1,5.7,1.7,11.4,2.6,17.1C103.1,114.4,103.3,115.1,103.5,116.2z M109,183.4c2.3-2.7,4.4-5.4,6.8-7.9c1.3-1.3,2.8-2.6,4.4-3.3
				c14.3-6.6,25.9-16.5,35.4-28.9c1.7-2.2,1.5-3.9-0.3-5.6c-2.7-2.5-4.2-2.8-6.5-1c-1.2,1-2.4,1.4-3.6,0.2c-1.3-1.3-0.8-2.6,0.3-3.8
				c1.4-1.7,2.9-3.3,4.3-5c1.9-2.2,2-4.1,0.3-5.8c-2.6-2.7-4.4-3-6.9-1c-1.2,0.9-2.3,1.2-3.5,0.1c-1.2-1.2-0.9-2.4,0.1-3.6
				c1.3-1.5,2.8-2.9,3.7-4.6c0.6-1.2,1-3.1,0.5-4.1c-1.8-3.4-4.6-3.8-7.9-1.8c-0.8,0.5-2.5,0.5-3-0.1c-0.6-0.7-0.4-2.1-0.3-3.2
				c0-0.4,0.6-0.8,1-1.2c4.9-5.8,9.8-11.6,14.7-17.3c1.4-1.6,2-3.2,0.8-5.1c-2.5-3.8-5.6-3.9-8.5-0.5
				c-12.2,14.3-24.3,28.6-36.6,42.9c-0.7,0.8-2.2,1.5-3,1.3c-0.8-0.2-1.7-1.7-1.8-2.7c-1.3-7.9-2.4-15.9-3.6-23.8
				c-0.4-2.7-2.3-4.1-5-3.9c-2.8,0.2-4.5,1.8-4.6,4.4c-0.4,6.4-0.8,12.7-1.1,19.1c-0.4,9-0.3,18.1,1.6,26.9c0.4,1.9,0.1,3.2-1.2,4.5
				c-2.4,2.7-4.7,5.5-7.1,8.3C88.7,165.8,98.8,174.5,109,183.4z"/>
                                            <path class="st72" d="M112.2,61.6c0,4.5,0,8.9,0,13.4c0,1.6-0.4,3-2.3,2.9c-1.7-0.1-2.2-1.3-2.2-2.9c0-9.1,0-18.1,0-27.2
				c0-1.5,0.5-2.8,2.3-2.8c1.7,0,2.3,1.2,2.3,2.7C112.2,52.3,112.2,56.9,112.2,61.6z"/>
                                            <path class="st72" d="M119.9,79.2c-2.2,0-3.3-1.7-2.5-3.2c0.3-0.6,0.8-1.1,1.3-1.5c6.1-6.1,12.2-12.2,18.3-18.3
				c0.3-0.3,0.6-0.9,1-0.9c1-0.1,2.4-0.4,3,0.1c0.5,0.5,0.5,2.1,0.2,2.9c-0.4,1-1.5,1.7-2.3,2.5c-5.7,5.7-11.3,11.3-17,17
				C121.1,78.4,120.3,78.9,119.9,79.2z"/>
                                            <path class="st72" d="M80.3,54.3c0.9,0.6,1.6,0.9,2.1,1.4c6.4,6.4,12.8,12.8,19.3,19.2c1.1,1.1,1.7,2.3,0.5,3.6
				c-1.3,1.4-2.6,0.8-3.7-0.4C92,71.7,85.6,65.3,79.3,58.8c-0.6-0.6-0.9-1.9-0.8-2.8C78.6,55.4,79.6,54.9,80.3,54.3z"/>
                                            <path class="st71" d="M109,183.4c-10.2-8.9-20.3-17.6-30.6-26.6c2.4-2.8,4.7-5.6,7.1-8.3c1.2-1.4,1.6-2.7,1.2-4.5
				c-2-8.9-2-17.9-1.6-26.9c0.3-6.4,0.7-12.7,1.1-19.1c0.1-2.6,1.8-4.1,4.6-4.4c2.7-0.2,4.5,1.2,5,3.9c1.2,7.9,2.3,15.9,3.6,23.8
				c0.2,1,1,2.5,1.8,2.7c0.8,0.2,2.3-0.5,3-1.3c12.2-14.2,24.4-28.6,36.6-42.9c2.9-3.4,6-3.3,8.5,0.5c1.3,1.9,0.6,3.6-0.8,5.1
				c-4.9,5.8-9.8,11.5-14.7,17.3c-0.3,0.4-0.9,0.8-1,1.2c-0.1,1.1-0.2,2.5,0.3,3.2c0.4,0.5,2.2,0.5,3,0.1c3.3-2,6.1-1.6,7.9,1.8
				c0.5,1,0.2,3-0.5,4.1c-0.9,1.7-2.5,3.1-3.7,4.6c-1,1.2-1.3,2.5-0.1,3.6c1.1,1.1,2.3,0.8,3.5-0.1c2.5-1.9,4.3-1.6,6.9,1
				c1.7,1.7,1.6,3.6-0.3,5.8c-1.4,1.7-2.8,3.4-4.3,5c-1.1,1.2-1.6,2.5-0.3,3.8c1.2,1.2,2.4,0.8,3.6-0.2c2.3-1.9,3.9-1.6,6.5,1
				c1.8,1.7,2,3.5,0.3,5.6c-9.5,12.4-21.1,22.3-35.4,28.9c-1.6,0.8-3.2,2-4.4,3.3C113.5,178,111.4,180.7,109,183.4z"/>
                                        </g>
                                    </g>
                                </g>
</svg>

                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="c-info">
                            <h3 class="info-title">Ease of Use</h3>
                            <p class="pbottom">Easy to use platform for online counselling sessions</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="svg-box-gen">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 234.2 234.2" style="enable-background:new 0 0 234.2 234.2;" xml:space="preserve">
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
                                        <g>
                                            <path class="st63" d="M219.1,234.2h-204c-8.3,0-15.1-6.8-15.1-15.1v-204C0,6.8,6.8,0,15.1,0h204c8.3,0,15.1,6.8,15.1,15.1v204
				C234.2,227.5,227.5,234.2,219.1,234.2z"/>
                                        </g>
                                        <g>
                                            <path class="st64" d="M117.1,55.1c-0.5,0-1,0.1-1.4,0.3L66.9,75.6c-1.2,0.5-2.1,1.6-2.2,2.9c-1,6.6-2.6,24,3.3,43.6
				c7.3,24.1,23.2,43.1,47.3,56.6c0.5,0.3,1.2,0.5,1.8,0.5c0.6,0,1.2-0.2,1.8-0.5c24.1-13.5,40.1-32.5,47.3-56.6
				c5.9-19.5,4.3-37,3.3-43.6c-0.2-1.3-1-2.4-2.2-2.9l-48.8-20.2C118.1,55.2,117.6,55.1,117.1,55.1z"/>
                                            <path class="st35" d="M117.1,65.8c-0.4,0-0.8,0.1-1.2,0.2L75.6,82.7c-1,0.4-1.7,1.3-1.9,2.4c-0.8,5.5-2.2,19.9,2.7,36.1
				c6,20,19.2,35.7,39.2,46.9c0.4,0.3,1,0.4,1.5,0.4c0.5,0,1-0.1,1.5-0.4c20-11.2,33.2-27,39.2-46.9c4.9-16.2,3.5-30.6,2.7-36.1
				c-0.2-1.1-0.9-2-1.9-2.4L118.3,66C117.9,65.8,117.5,65.8,117.1,65.8z"/>
                                            <rect x="110.2" y="96.7" class="st64" width="13.1" height="40.6"/>

                                            <rect x="109.8" y="96.7" transform="matrix(6.123234e-17 -1 1 6.123234e-17 -0.2246 233.7878)" class="st64" width="13.9" height="40.6"/>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path class="st72" d="M117.1,184.1c-1.5,0-3-0.4-4.2-1.1c-13.7-7.7-25-17.2-33.7-28.4c-7.2-9.3-12.6-19.8-16-31.2
							C57,103,58.7,84.7,59.7,77.7c0.4-3,2.5-5.6,5.3-6.8l48.8-20.2c1.1-0.4,2.2-0.7,3.3-0.7c1.1,0,2.3,0.2,3.3,0.7l48.8,20.2
							c2.8,1.2,4.8,3.8,5.3,6.8c1,6.9,2.8,25.2-3.4,45.8c-3.4,11.4-8.8,21.9-16,31.2c-8.6,11.2-20,20.7-33.7,28.4
							C120.1,183.8,118.6,184.1,117.1,184.1z M117.1,55.1c-0.5,0-1,0.1-1.4,0.3L66.9,75.6c-1.2,0.5-2.1,1.6-2.2,2.9
							c-1,6.6-2.6,24,3.3,43.6c7.3,24.1,23.2,43.1,47.3,56.6c0.5,0.3,1.2,0.5,1.8,0.5c0.6,0,1.2-0.2,1.8-0.5
							c24.1-13.5,40.1-32.5,47.3-56.6c5.9-19.5,4.3-37,3.3-43.6c-0.2-1.3-1-2.4-2.2-2.9l-48.8-20.2
							C118.1,55.2,117.6,55.1,117.1,55.1z"/>
                                                        <path class="st72" d="M117.1,170.7c-1.3,0-2.5-0.3-3.6-0.9c-11.1-6.1-20.2-13.7-27.2-22.6c-5.8-7.4-10.2-15.8-13-24.9
							c-5-16.3-3.6-30.9-2.8-36.5c0.4-2.6,2.1-4.8,4.6-5.8l39.2-16c0.9-0.4,1.9-0.6,2.9-0.6c1,0,1.9,0.2,2.9,0.6l11.8,4.8
							c1.3,0.5,1.9,2,1.4,3.3c-0.4,1-1.3,1.6-2.3,1.6c-0.3,0-0.6-0.1-0.9-0.2l-11.8-4.8c-0.3-0.1-0.6-0.2-1-0.2
							c-0.3,0-0.7,0.1-1,0.2L77,84.7c-0.8,0.3-1.4,1-1.5,1.9c-0.8,5.2-2.1,18.9,2.6,34.2c5.8,18.9,18.5,33.9,37.8,44.5
							c0.4,0.2,0.8,0.3,1.2,0.3c0.4,0,0.8-0.1,1.2-0.3c19.3-10.6,32-25.6,37.8-44.5c4.7-15.4,3.4-29.1,2.6-34.2
							c-0.1-0.8-0.7-1.5-1.5-1.9L138.2,77c-1.3-0.5-1.9-2-1.4-3.3c0.4-1,1.3-1.6,2.3-1.6c0.3,0,0.6,0.1,0.9,0.2l19.1,7.8
							c2.4,1,4.2,3.2,4.6,5.8c0.8,5.5,2.2,20.1-2.8,36.5c-2.8,9.1-7.1,17.5-13,24.9c-7,8.9-16.1,16.5-27.2,22.6
							C119.7,170.4,118.4,170.7,117.1,170.7L117.1,170.7z"/>
                                                        <path class="st72" d="M113.2,141.3c-3.1,0-5.6-2.5-5.6-5.6v-8.6c0-0.3-0.3-0.6-0.6-0.6c-1.4,0-2.5-1.1-2.5-2.5
							c0-1.4,1.1-2.5,2.5-2.5c3.1,0,5.6,2.5,5.6,5.6v8.6c0,0.3,0.3,0.6,0.6,0.6h7.8c0.3,0,0.6-0.2,0.6-0.6v-8.6
							c0-3.1,2.5-5.6,5.6-5.6h8.7c0.3,0,0.6-0.2,0.6-0.6v-7.7c0-0.3-0.3-0.6-0.6-0.6h-8.7c-3.1,0-5.6-2.5-5.6-5.6v-8.6
							c0-0.3-0.3-0.6-0.6-0.6h-7.8c-0.3,0-0.6,0.2-0.6,0.6v8.6c0,3.1-2.5,5.6-5.6,5.6h-8.7c-0.3,0-0.6,0.2-0.6,0.6v7.7
							c0,0.3,0.2,0.5,0.4,0.5c0,0,9.2,0,9.2,0c1.4,0.2,2.3,1.4,2.2,2.8c-0.2,1.2-1.2,2.2-2.5,2.2c-0.1,0-9.4,0-9.5,0
							c-2.8-0.4-4.9-2.7-4.9-5.5v-7.7c0-3.1,2.5-5.6,5.6-5.6h8.7c0.3,0,0.6-0.2,0.6-0.6v-8.6c0-3.1,2.5-5.6,5.6-5.6h7.8
							c3.1,0,5.6,2.5,5.6,5.6v8.6c0,0.3,0.3,0.6,0.6,0.6h8.7c3.1,0,5.6,2.5,5.6,5.6v7.7c0,3.1-2.5,5.6-5.6,5.6h-8.7
							c-0.3,0-0.6,0.2-0.6,0.6v8.6c0,3.1-2.5,5.6-5.6,5.6H113.2z"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
</svg>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="c-info">
                            <h3 class="info-title">Confidentiality and data privacy</h3>
                            <p>Personalised sessions and consultations with assured patient privacy</p>
                        </div>
                    </div>
                </div>
                

            </div>

        </div>
        <div style="text-align: center" class="col-sm-12">
            <a href="/contact-us" class="btn-insta"> Crysta Counsellor <i class="fa fa-phone" aria-hidden="true"></i></a>
        </div>
    </div>


</section>
<!--------------------------------------------------------------
 FAQ
---------------------------------------------------------------->
<section class="faq">
    <img style="width: 100%;margin-top: -5rem;" src="/img/services/faq.svg" class="bottom-swoop">
    <div class="container">
        <div class="main-title">
            <h1>FAQs</h1>
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
                            <p>The peak of fertility is between early 20s to mid-30s and so this period would be an appropriate 
time to consider pregnancy. </p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <a class="card-title"><p class="faqt"><span>2</span>We have been trying to have a baby for more than a year but haven’t been able to conceive, what should we do? </p></a>
                        </div>
                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                            <p>There are many factors that contribute to infertility. A proper evaluation of both the partners is 
the first step towards diagnosing the cause which can then be treated accordingly.</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <a class="card-title"><p class="faqt"><span>3</span>I have had many miscarriages, what should I do?</p></a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body"><p>There could be many reasons for miscarriages, some being genetic in nature. Consulting a 
doctor and subsequently a genetic counsellor will help you determine the cause for the same. </p></div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            <a class="card-title"><p class="faqt"><span>4</span>Both my partner and I are healthy, can my baby still have a genetic disorder? </p></a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body"> <p>Yes, there are chances that healthy parents are asymptomatic carriers of a medical condition 
and may have a 25% chance of passing it on to their children. It is also possible that healthy 
non-carrier couples may have a baby with a medical condition due to genetic or environmental 
factors. The root cause can be determined through a genetic counsellor.</p></div>
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
<section class="seo">
    <div class="container">
        <div class="box-collection">
       <h5> Pregnancy Counselling:</h5>
        <p>Pregnancy is an exciting time in the life of a couple. Whether you are planning or are expecting a baby, the journey ahead is bumpy yet a beautiful one. As future parents, we want to do everything just right to ensure our baby is born safe and healthy. Whether it is eating right, keeping fit or making those small little changes in our lifestyle, we can move the earth for our little bundle of joy.</p>
        </div>
        <div id="text" style="display: none;">
        <p>Pregnancy counselling is not only for couples who have begun their journey into parenthood, but also for the couples who are planning for their little one. Even though we hope for the best, we should always be prepared for the eventualities. Keeping this in mind, Crysta offers you a complete guide starting from counselling, consultations and health packages that will take care of you and your baby at every milestone in your pregnancy.</p>
        <h5>  Is Pregnancy Counselling only for pregnant couples?</h5>
        <p>Pregnancy counselling can benefit both couples who are pregnant and those who are planning a pregnancy. As would-be parents, every couple intends to take the right measures to ensure that their future baby is healthy. A session with a specialist will help the couple make necessary lifestyle changes and prepare for a pregnancy. “Healthy baby comes from a healthy you”.</p>
            <h5> Pregnancy Counselling for couples planning for a baby</h5>
        <p>As future parents, couples often want to know if they are physically and psychologically prepared to have a baby. There are many changes and adjustments which are required when planning for a baby, which includes lifestyle, physical, emotional and financial changes. At Crysta, we offer pregnancy counselling for couples who are one-step closer to taking a healthy baby home. A counselling session with our experts help couples make informed choices about adopting a healthier lifestyle, pre-pregnancy clinical evaluation, testing & addressing anxieties and emotional problems associated to being first-time parents.</p>
                <h5> Pregnancy Counselling for Expecting parents</h5>
        <p>The journey that begins with a positive pregnancy test, brings along with it a plethora of questions regarding the well-being of your growing baby. Every parent wants to ensure they are doing everything right, eating right, taking all the correct medications for their baby to be born healthy. A Crysta pregnancy counselling session with our healthcare specialist help couples understand their pregnancy journey, the various antenatal screenings that need to be done to ensure their baby is healthy. It also helps couples prepare psychologically to welcome their bundle of joy and address any emotional stress associated to pregnancy. All the routine pregnancy tests accompanied by advanced tests such as genetic tests and counselling sessions is what Crysta brings to you.</p>
       <h5> How can I book a Crysta Pregnancy Counselling session?</h5>
        <p>You can book a Pregnancy Counselling session through the “Book Now” option on the Crysta website from the available time slots.</p>
                    <h5> Pregnancy Counselling and care</h5>
        <p>Pregnancy Counselling is the first step in Pregnancy Care at Crysta. Couples are encouraged to take a Pregnancy Counselling session while planning for a baby. The Counsellors help the couple prepare for the upcoming pregnancy with different tests and screenings to ensure both partners are healthy. Such couples are also counselled regarding possible genetic conditions that may be passed onto their future baby. They provide screening options to identify any such conditions and options to prevent it from being passed onto the baby.</p>
       <p> Pregnancy Counselling is important at every stage of pregnancy. Crysta believes that all couples should be well informed about their pregnancy, testing and screening. As the pregnancy progresses, there are a number of changes and many associated questions. We at Crysta are here to answer all your queries and ensure you have a hassle-free pregnancy. Whether you want to know more about your antenatal screening tests, the report results or general queries about pregnancy, Crysta Pregnancy Counsellors are here to help you at every step till you take home a healthy baby.</p>
                        <h5> Pregnancy Counselling for High-Risk Pregnancy:</h5>
        <p>Pregnancy is a difficult time and certain mothers tend to have a troubled and risky pregnancy. Crysta Pregnancy Counselling can help such mothers understand and deal with the complications of their pregnancy. Every mom-to-be wants to ensure that their baby is healthy and that they are doing their best for them. We at Crysta are always there to answer your queries and help you make your pregnancy a smooth journey till you hold your baby in your arms.</p>
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
