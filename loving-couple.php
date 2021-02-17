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

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Fertility Testing & Diagnosis For Male & Female | Blood Fertility Test</title>
    <meta name="description" content="Crysta provides male & female fertility test & diagnostics.Crysta guides you for fertility tests & fulfilling your dream of a healthy baby.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.ico">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#003883">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://crysta.care/loving-couple" />
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
<header class="loving-page">
    <nav class="navbar navbar-expand-lg  main-nav" id="main-nav" style="fill: rgb(255, 255, 255);">
        <div class="container">
            <span><a href="https://crysta.care/"><img src="img/Crysta-logo.png" class="logo" alt="Crysta Logo"></a></span>


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

    <div class="hero-text hero-text-loving-couple">
        <h1>Fertility
        </h1>
        <h5> We at Crysta provide you with a one stop platform to determine the 
cause of infertility in both men and women through its personalized treatment plans 
for you.  </h5>
        <a class="know-btn" href="/contact-us">Contact Us</a>
    </div>
</header>
<!--------------------------------------------------------------
Why choose Crysta
---------------------------------------------------------------->
<section class="coun-first loving-coun-first">
    <div class="container">
        <div class="coun-first-text">
            <p>Trying for a baby without success? You are not alone. It is never too late to conceive, we at Crysta tell you how. Due to the fast paced life and unhealthy lifestyle, many couples face fertility issues. Fertility problems may be caused by either one or both the partners. If you have been trying for a baby for over a year without much success, Crysta can guide you step by step towards fulfilling your dream of taking a healthy baby home.</p>
        </div>
        
    </div>


</section>


<!--------------------------------------------------------------
The Need
---------------------------------------------------------------->
<section class="the-need loving-the-need">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="image-with-title">
                    <img src="/img/services/the-need-Loving-Couples.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-8 loving-the-need-box">
                <div class="main-title l-title">
                    <h1>Causes of Infertility</h1>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <h2>Male factors</h2>
                                </div>
                                <div class="flip-box-back">
                                    <ul class="flip-loving">
                                        <li ><span>Age</span></li>
                                        <li ><span>Genetic</span></li>
                                        <li ><span>Testicular Factors</span></li>
                                        <li ><span>Lifestyle Habits</span></li>
                                        <li ><span>Varicocele</span></li>
                                        <li ><span>Sperm Abnormalities</span></li>
                                        <li ><span>Contribution to erectile dysfunction</span></li>
                                        <li ><span>Exposure to radiation</span></li>
                                        <li ><span>Anatomic abnormalities</span></li>
                                        <li ><span>Hormonal Imbalances</span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <h2>Female factors </h2>
                                </div>
                                <div class="flip-box-back">
                                    <ul class="flip-loving">
                                        <li ><span>Hormonal disorders</span></li>
                                        <li ><span>Genetic Infections</span></li>
                                        <li ><span>Diabetes</span></li>
                                        <li ><span>Lifestyle Habit</span></li>
                                        <li ><span>Premature Ovarian Failure</span></li>
                                        <li ><span>Congenital Uterian Anomalies</span></li>
                                        <li ><span>Fallopian Tube Obstruction</span></li>
                                        <li ><span>Endometriosis</span></li>
                                        <li ><span>Polycystic Ovary Syndrome</span></li>
                                        <li ><span>Genetic</span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <h2>Genetic Factors </h2>
                                </div>
                                <div class="flip-box-back">
                                    <ul class="flip-loving">
                                        <li ><span><b>Male:</b></span></li>
                                        <li ><span>Chromosomal aneuploidies</span></li>
                                        <li ><span>Y-chromosome microdeletions</span></li>
                                        <li ><span>CFTR gene mutations</span></li>
                                        <li ><span><b>Female:</b></span></li>
                                        <li ><span>Chromosomal Anueploidies <br>(Turners Syndrome, Trisomy X)
</span></li>
                                        <li ><span>Balanced chromosomal translocations</span></li>
                                        <li ><span>Fragile X associated primary <br>ovarian insufficiency</span></li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <h2>Lifestyle factors</h2>
                                </div>
                                <div class="flip-box-back">
                                    <ul class="flip-loving">
                                        <li ><span>Smoking
                                        <li ><span>Alcohol
                                        <li ><span>Caffeine
                                        <li ><span>Drugs and medication
                                        <li ><span>Nutrition
                                        <li ><span>Stress
                                        <li ><span>Exposure to chemicals and <br> radiation</span></li>

                                    </ul>
                                </div>
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
Timeline
---------------------------------------------------------------->
<section class="c-timeline loving-couple-timeline">
    <img style="width: 100%;" src="/img/services/loving-couplestimeline.svg">
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
                            <div id="trigger"> <h3 class="timeline-title">Fertility Counselling </h3></div>
                            <div class="hidden"><span></span></div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span></span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <div id="trigger"><h3 class="timeline-title"> Fertility specialist consultations</h3></div>
                            <div class="hidden"><p></p></div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Testing</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <div id="trigger"><h3 class="timeline-title"></h3></div>
                            <div class="hidden"><p></p></div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Personalised <br>treatment plan </span>
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
    <img style="width: 100%;" src="/img/services/loving-couplestimeline-bottom.svg">
</section>
<!--------------------------------------------------------------
 V Test
---------------------------------------------------------------->
<section class="v-test loving-couple-v-test">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title">
                    <h1>Various Tests</h1>
                </div>
                <div class="row c-how__section-1 rev">
                    <div class="col-xs-12 col-sm-6">
                        <div class="c-how__section-container-1">
                            <div clsas="u-text-darkest">
                                <div class="c-step-title">
                                   Physical Evaluation and Tests
                                </div>
                                <p class="c-how__description-1 ">
                                  To determine any physical anomalies in the reproductive system
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="c-step-image">
                            <?xml version="1.0" encoding="utf-8"?>
                            <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 412.9 264.3" style="enable-background:new 0 0 412.9 264.3;" xml:space="preserve">
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
    .st71{fill:#E6E9ED;}
    .st72{fill:#69326B;}
    .st73{fill:#EACDC5;}
    .st74{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
    .st75{fill:#32327C;}
    .st76{fill:#211968;}
</style>
                                <g id="Layer_3" class="st0">
                                </g>
                                <g id="Layer_2">
                                    <g>
                                        <path class="st58" d="M371.6,95.8c-6.7-10.7-17.3-17.2-27.8-16.2c-6.2,0.6-10.7,3.7-12.4,5c-8.3,6.4-10,16.2-11.5,25.2
			c-1.5,9.2-4,24.6,4.9,39.5c3,5,9.4,15.8,20.7,17.7c14.9,2.5,29.7-12,35.1-25.8C389.6,118,372.4,96.7,371.6,95.8z"/>
                                        <path class="st58" d="M192.6,262.2c0.8,0.3,2.8,1.1,2.8,1.1s22.2,4.8,31.9-6.9c9.7-11.8,14.9-14.4,11.8-41.7s-11.2-29.2,11-60
			s22.1-26.3,32.1-41.8c10-15.5,12.1-29.9,16.7-40.3c0,0,3.4-10.1,9.1-13.2c6.7-3.7,23.4-11.5,55-9.8c31.6,1.6,31.1,26.7,31.5,32.7
			c0.4,5.9-7.1,9.7-7.1,9.7s-5.7-2.4-14-8.3c-8.3-5.9-19.2-5.9-23.2-5.5c-4,0.3-5.4,2.2-3.8,3.6c1.6,1.4,4.8,2.8,13.1,5.4
			c8.3,2.6,4,7.5-0.3,9.3c-4.3,1.8-7.4-1-11.7-0.9c-4.4,0,2.7,4.4,10.5,7.7c7.8,3.2,3,0.9,6.3,3c3.3,2.1-2.3,6.7-10.4,10.5
			s-4.6,3.4-3,4.6c1.7,1.2,11.1,0.4,14.2,0.7s3.2,5.9-0.5,9.5c-3.8,3.5-14.1,4.7-14.9,6.4c-0.8,1.7,3.3,2.2,7.9,2.4
			c4.6,0.1,9.4-0.4,12.3,1.6c2.9,2-3.1,8.3-12.2,15.7c-9.1,7.4-7.8,7.7-6.7,7.9c1.1,0.2,3.7,0.3,22-7.6
			c30.2-16.4,29.8-51.4,31.1-55.7s2.9-3.1,6.4-11.5c3.5-8.5,5.1-25.6-7.3-43.4c0,0-9.4-14.8-36.4-21s-49.6-3.7-57.7-1.9
			c-12.8,2.9-38.2,3.6-38.2,3.6C259.1,26.4,226,17,207.2,16.3c-18.9-0.7-51.9,1.3-62.5,1.3c-6.6,0-23-5.8-33.2-9.9
			S81.6-1.5,54.1,0.4S14.8,15.5,14.8,15.5c-15,15.7-16.1,32.8-14,41.7s4,8,4.5,12.4s-5.3,38.9,22,59.9c16.9,10.6,19.4,11,20.5,10.9
			c1.1,0,2.5-0.2-5.4-8.9s-12.7-15.9-9.6-17.4c3.2-1.5,7.9-0.3,12.4,0.3s8.7,0.7,8.2-1.1c-0.5-1.8-10.6-4.6-13.7-8.6
			c-3.2-4.1-2.1-9.7,1-9.4c3,0.2,12.3,2.5,14.1,1.5c1.8-0.9,5.2,0-2.2-5c-7.5-5-12.3-10.4-8.7-12c3.6-1.6-1.5,0,6.7-2
			c8.2-2,15.9-5.2,11.6-5.9c-4.3-0.7-7.8,1.5-11.7-0.9s-7.5-8,1.2-9.3c8.6-1.3,12-2.1,13.8-3.3s0.7-3.2-3.2-4.2s-14.7-2.7-23.8,1.8
			s-15.1,6-15.1,6s-6.8-4.9-5.5-10.7c1.3-5.8,4.8-30.7,36.3-27.3s47.3,13,52.8,18.3s6.6,10.5,7,13.5c2,19.2,17.3,59.2,22.3,68.1
			c4.9,8.8,18.2,34.1,21.9,48.3c3.8,14.2-4.1,21.7-9.1,39.1s-1.3,25.5-1.3,25.5s11.9,27,38.9,25.1L192.6,262.2z"/>
                                        <path class="st58" d="M38.3,68.6c8.3-9.5,19.8-14.3,30-11.7c6,1.6,10,5.3,11.5,6.9c7.2,7.6,7.4,17.6,7.4,26.6
			c0,9.4,0.1,24.9-11,38.2c-3.7,4.5-11.8,14.1-23.2,14.2c-15.1,0.2-27.5-16.5-30.6-31C17.1,87.8,37.4,69.4,38.3,68.6z"/>
                                        <path class="st59" d="M191.7,32.2c0,0-25.1,5.6-32.7,5.6c-7.5,0-16.6-2-18,0s-4.7,6.7,0,12.6s12.9,26,15.3,35
			c2.4,9.1,3.7,14.2,4.6,23.4s2.8,11.7,5.1,17.5c2.3,5.8,8.5,12.5,9.3,15.1c0.9,2.7,5.2,7.1,5.7,9.4c0.5,2.3,0.3,4.3,0.3,4.3
			l-31.1-25.8l-20.2-61.3l-12.9-24.8l-2-14.9c0,0,9.7-7.3,10.3-6.9s63.2,4.9,63.2,4.9l18.8,4L191.7,32.2z"/>
                                        <path class="st59" d="M151.8,72.2c0,0,8.9,18.7,12.1,28.1s3.9,15.1,4.9,19.9c1,4.8,4.6,12.1,6,14.3c1.4,2.2,8.4,11.1,10.2,15
			s4.4,9.7,4.4,9.7l-3.6-2.2l-20.6-21.1l-11.7-35.6l-12.4-28.1H151.8z"/>
                                        <g>
                                            <g>
                                                <g>
                                                    <path class="st60" d="M147.1,37.3c6.3,3.2,8.8,2.6,23,2c19.2-0.9,33.9-7.5,71.5,5.4c12.9,3.5,23.2,3.8,28.6,2.4
						c0,0,5.1-1.4,6.3,1.1c1.1,2.5,1.3,7.6-3.9,13.2c-5.1,5.6-10.6,11.5-13.1,14.2c-10.7,11.4-20.3,37.9-23.9,48.7
						c-3.7,10.8-18.5,26.7-27.9,32.4c-9.5,5.6-9.2,19-9.2,19s-6.1,85.7-5.9,86.5c0.2,0.8,2.8,1.1,2.8,1.1s22.2,4.8,31.9-6.9
						c9.7-11.8,14.9-14.4,11.8-41.7s-11.2-29.2,11-60s22.1-26.3,32.1-41.8c10-15.5,12.1-29.9,16.7-40.3c0,0,3.4-10.1,9.1-13.2
						c6.7-3.7,23.4-11.5,55-9.8c31.6,1.6,31.1,26.7,31.5,32.7c0.4,5.9-7.1,9.7-7.1,9.7s-5.7-2.4-14-8.3c-8.3-5.9-19.2-5.9-23.2-5.5
						c-4,0.3-5.4,2.2-3.8,3.6c1.6,1.4,4.8,2.8,13.1,5.4c8.3,2.6,4,7.5-0.3,9.3c-4.3,1.8-7.4-1-11.7-0.9c-4.4,0,2.7,4.4,10.5,7.7
						c7.8,3.2,3,0.9,6.3,3c3.3,2.1-2.3,6.7-10.4,10.5s-4.6,3.4-3,4.6c1.7,1.2,11.1,0.4,14.2,0.7s3.2,5.9-0.5,9.5
						c-3.8,3.5-14.1,4.7-14.9,6.4c-0.8,1.7,3.3,2.2,7.9,2.4c4.6,0.1,9.4-0.4,12.3,1.6c2.9,2-3.1,8.3-12.2,15.7
						c-9.1,7.4-7.8,7.7-6.7,7.9c1.1,0.2,3.7,0.3,22-7.6c30.2-16.4,29.8-51.4,31.1-55.7s2.9-3.1,6.4-11.5c3.5-8.5,5.1-25.6-7.3-43.4
						c0,0-9.4-14.8-36.4-21s-49.6-3.7-57.7-1.9c-12.8,2.9-38.2,3.6-38.2,3.6C259.1,26.4,226,17,207.2,16.3
						c-18.9-0.7-51.9,1.3-62.5,1.3c-6.6,0-23-5.8-33.2-9.9S81.6-1.5,54.1,0.4S14.8,15.5,14.8,15.5c-15,15.7-16.1,32.8-14,41.7
						s4,8,4.5,12.4s-5.3,38.9,22,59.9c16.9,10.6,19.4,11,20.5,10.9c1.1,0,2.5-0.2-5.4-8.9s-12.7-15.9-9.6-17.4
						c3.2-1.5,7.9-0.3,12.4,0.3s8.7,0.7,8.2-1.1c-0.5-1.8-10.6-4.6-13.7-8.6c-3.2-4.1-2.1-9.7,1-9.4c3,0.2,12.3,2.5,14.1,1.5
						c1.8-0.9,5.2,0-2.2-5c-7.5-5-12.3-10.4-8.7-12c3.6-1.6-1.5,0,6.7-2c8.2-2,15.9-5.2,11.6-5.9c-4.3-0.7-7.8,1.5-11.7-0.9
						s-7.5-8,1.2-9.3c8.6-1.3,12-2.1,13.8-3.3s0.7-3.2-3.2-4.2s-14.7-2.7-23.8,1.8s-15.1,6-15.1,6s-6.8-4.9-5.5-10.7
						c1.3-5.8,4.8-30.7,36.3-27.3s47.3,13,52.8,18.3s6.6,10.5,7,13.5c2,19.2,17.3,59.2,22.3,68.1c4.9,8.8,18.2,34.1,21.9,48.3
						c3.8,14.2-4.1,21.7-9.1,39.1s-1.3,25.5-1.3,25.5s11.9,27,38.9,25.1c0,0,6.2-70.8,7.1-78.7c0.9-7.9,3.6-20.3-6.9-30.1
						c-10.5-9.8-20.8-29.2-22.1-39.7s-15.9-48.5-29.9-66.5c0,0-5.3-5-2.2-9.8C135.8,32.5,143.8,36.5,147.1,37.3z"/>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
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
                                </g>
</svg>
                        </div>
                    </div>

                </div>
                <div class="row c-how__section-1">
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="c-step-image">
                            <?xml version="1.0" encoding="utf-8"?>
                            <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 365 335.9" style="enable-background:new 0 0 365 335.9;" xml:space="preserve">
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
    .st71{fill:#E6E9ED;}
    .st72{fill:#69326B;}
    .st73{fill:#EACDC5;}
    .st74{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
    .st75{fill:#32327C;}
    .st76{fill:#211968;}
</style>
                                <g id="Layer_3" class="st0">
                                </g>
                                <g id="Layer_2">
                                    <g>
                                        <path class="st7" d="M47.3,30.6l27.9-7.7c0.3-0.1,0.5-0.2,0.8-0.3l26.8-10.9c0.6-0.2,1.2-0.4,1.8-0.5l26.9-3.5
			c1.4-0.2,2.9,0.1,4.2,0.7L166,24.3c0.7,0.4,1.4,0.9,2,1.5l16.3,17.7c0.6,0.7,1.1,1.5,1.5,2.4l5.4,15.3c1.3,3.6-0.5,7.5-3.9,8.9
			L171.1,77c-1.1,0.4-2.2,0.6-3.4,0.5l-25.9-2.2c-0.6,0-1.1,0-1.7,0.1l-27.4,4.1l-28.2,3.1l-35.2,2.9c-0.6,0-1.2,0-1.8-0.1
			l-28.9-4.8c-3.1-0.5-5.5-3-5.9-6.1l-2.3-18.3c-0.4-2.9,1-5.7,3.6-7.1l31.6-17.8C46.2,31,46.7,30.8,47.3,30.6z"/>
                                        <path class="st5" d="M284,217.5l-30-10.7c-2.9-1.1-5-3.7-5.2-6.8l-1.8-23.2c-0.1-1.8,0.4-3.6,1.4-5.1l14.8-21.3
			c1.2-1.7,2.9-2.8,4.9-3.2l29.4-6c1.4-0.3,2.8-0.2,4.1,0.3l30,10c1.6,0.5,3,1.6,4,3l22.3,32.1c0.5,0.8,0.9,1.6,1.2,2.5l5.6,21.6
			c0.2,0.9,0.3,1.8,0.2,2.7l-1.9,21.6c-0.1,1.5-0.7,3-1.7,4.2l-9.8,12.4c-2.4,3-6.5,3.9-9.9,2.1l-14.9-7.8c-0.6-0.3-1.2-0.7-1.7-1.2
			l-16.7-15.7c-0.6-0.6-1.4-1.1-2.2-1.5l-21.7-9.6C284.4,217.6,284.2,217.5,284,217.5z"/>
                                        <path class="st10" d="M228.5,76.1l8.3,16.8c0.4,0.8,0.9,1.4,1.6,1.9l16.5,11.6c0.6,0.4,1.3,0.7,2,0.8l24.9,4.5
			c0.8,0.1,1.6,0.1,2.4-0.1l23.9-7.3c0.8-0.3,1.6-0.7,2.2-1.3l15.4-16.2c1.2-1.3,1.7-3.2,1.2-4.9l-8.3-28.4
			c-0.1-0.3-0.2-0.6-0.3-0.9l-11.7-22.9c-0.1-0.2-0.2-0.4-0.3-0.7l-1.6-8c-0.2-0.5-0.4-0.9-0.7-1.3L291.4,2.1
			c-1.2-1.7-3.4-2.5-5.5-1.9l-16,4.6c-1.2,0.3-2.2,1.1-2.9,2.2c0,0-13.5,25.5-13.7,28.1c-0.1,2.6-5.7,8.1-7.9,9.4
			c-3.1,1.9-10.9,9.7-10.9,9.7c-1.5,0.6-2.6,1.9-3,3.5l-3.5,15C227.8,73.8,228,75,228.5,76.1z"/>
                                        <path class="st7" d="M127.7,124.4l-20.4,20.4c-0.2,0.2-0.4,0.4-0.5,0.6l-9,14.4c-1.3,2.1-0.2,4.8,2.2,5.4l21.7,5.3
			c0.2,0,0.4,0.1,0.5,0.2l24.3,10.2c0.5,0.2,1,0.6,1.4,1.1l19.3,23.9c0.7,0.9,1.8,1.4,2.9,1.3l29.2-0.7c0.9,0,1.8-0.4,2.5-1.1
			l20.2-21.2c0.6-0.6,1-1.5,1-2.4l0.5-21.7c0-0.8-0.2-1.5-0.6-2.1l-12.4-18c-0.4-0.6-1.1-1.1-1.8-1.4l-33.1-11.2
			c-0.3-0.1-0.5-0.2-0.8-0.4L149,110.5c-1.3-0.8-3-0.7-4.2,0.2L128,124.2C127.9,124.3,127.8,124.3,127.7,124.4z"/>
                                        <path class="st7" d="M233.5,248.9l-28.8,7.1l-28.4,6.6c-0.3,0.1-0.6,0.1-0.9,0.1l-28.6,2.2c-0.5,0-1.1,0-1.6-0.1l-18.1-3.7
			c-2.1-0.4-4.3,0.3-5.7,2l-15.1,18c-1.8,2.2-1.8,5.4,0,7.6l11.7,13.8c0.4,0.4,0.8,0.8,1.2,1.1l22.2,14.8l21.8,14.4
			c0.8,0.5,1.7,0.9,2.7,1l23.8,2.3c1.2,0.1,2.4-0.1,3.5-0.8l19.4-11.1l21-10.8c0.9-0.4,1.8-0.7,2.8-0.7l35.1,0.3
			c2.8,0,5.3-2,5.8-4.8l4.6-23.9c0.2-0.8,0.1-1.6,0-2.4l-4.7-21.7c-0.1-0.6-0.3-1.1-0.6-1.6l-8.5-15c-1.3-2.4-4.2-3.5-6.8-2.8
			L233.5,248.9z"/>
                                        <path class="st10" d="M27.6,126.1l20.8,13.4c0.1,0,0.1,0.1,0.2,0.2L76,161.5c0.8,0.6,1.2,1.6,1,2.6l-2.4,14.7c0,0.2,0,0.4,0,0.6
			l1.5,26.4c0,0.6-0.2,1.3-0.6,1.8l-12.9,17c-0.4,0.5-0.9,0.8-1.5,1l-18.6,5.1c-1.4,0.4-2.8-0.4-3.3-1.8l-7.3-22.1
			c-0.3-0.8-0.9-1.5-1.8-1.7l-28.2-9c-1.2-0.4-1.9-1.5-1.9-2.7l0.9-35.5c0-0.6,0.2-1.1,0.6-1.6l22.5-29.6
			C24.8,125.6,26.4,125.3,27.6,126.1z"/>
                                        <g>
                                            <path class="st35" d="M98.3,46.2l0.7-0.2l2.4,9.5l5.9-1.5l0.2,0.7l-6.6,1.7L98.3,46.2z"/>
                                            <path class="st35" d="M115.9,41.8l2.6,10.2l-0.7,0.2l-1.2-4.8l-6.8,1.7l1.2,4.8l-0.7,0.2l-2.6-10.2l0.7-0.2l1.2,4.7l6.8-1.7
				l-1.2-4.7L115.9,41.8z"/>
                                        </g>
                                        <g>
                                            <path class="st35" d="M265.3,68.5l0.6,4.4l5.5-0.7l0.1,0.7l-5.5,0.7l0.6,4.6l-0.8,0.1l-1.4-10.4l7-0.9l0.1,0.7L265.3,68.5z"/>
                                            <path class="st35" d="M276.5,76.6c-0.7-0.2-1.3-0.4-1.8-0.8l0.3-0.6c0.4,0.3,1,0.6,1.6,0.7c0.7,0.2,1.3,0.2,2,0.1
				c1-0.1,1.7-0.4,2.2-0.9c0.5-0.4,0.6-1,0.6-1.6c-0.1-0.5-0.2-0.8-0.6-1.1c-0.3-0.2-0.7-0.4-1.1-0.5s-1-0.2-1.7-0.2
				c-0.8-0.1-1.4-0.2-1.9-0.3c-0.5-0.1-0.9-0.3-1.3-0.7s-0.6-0.8-0.7-1.4c-0.1-0.5,0-1,0.2-1.4c0.2-0.5,0.6-0.8,1.1-1.2
				c0.5-0.3,1.2-0.5,2-0.6c0.6-0.1,1.2-0.1,1.7,0c0.6,0.1,1.1,0.3,1.5,0.5l-0.2,0.6c-0.5-0.2-0.9-0.4-1.5-0.5s-1-0.1-1.5,0
				c-1,0.1-1.7,0.4-2.1,0.9c-0.4,0.5-0.6,1-0.5,1.6c0.1,0.5,0.2,0.8,0.6,1.1c0.3,0.2,0.7,0.4,1.1,0.5c0.4,0.1,1,0.2,1.7,0.3
				c0.8,0.1,1.4,0.2,1.9,0.3c0.5,0.1,0.9,0.3,1.3,0.7c0.4,0.3,0.6,0.8,0.7,1.4c0.1,0.5,0,1-0.2,1.4c-0.2,0.5-0.6,0.8-1.1,1.2
				c-0.5,0.3-1.2,0.5-2,0.7C278,76.8,277.3,76.8,276.5,76.6z"/>
                                            <path class="st35" d="M293,64.1l1.4,10.4l-0.8,0.1l-0.7-5l-7,0.9l0.7,5l-0.8,0.1l-1.4-10.4l0.8-0.1l0.6,4.8l7-0.9l-0.6-4.8
				L293,64.1z"/>
                                        </g>
                                        <g>
                                            <path class="st35" d="M159.6,157.6h-3.8v-0.7h8.3v0.7h-3.8v9.8h-0.8V157.6z"/>
                                            <path class="st35" d="M167.3,167.1c-0.7-0.3-1.2-0.6-1.6-1l0.3-0.6c0.4,0.4,0.9,0.7,1.5,1c0.6,0.2,1.3,0.4,2,0.4
				c1,0,1.8-0.2,2.3-0.6s0.8-0.9,0.8-1.5c0-0.5-0.1-0.8-0.4-1.1c-0.3-0.3-0.6-0.5-1-0.6s-0.9-0.3-1.6-0.5c-0.8-0.2-1.4-0.4-1.9-0.6
				c-0.5-0.2-0.9-0.5-1.2-0.8s-0.5-0.9-0.5-1.5c0-0.5,0.1-1,0.4-1.4c0.3-0.4,0.7-0.8,1.2-1c0.6-0.2,1.2-0.4,2.1-0.4
				c0.6,0,1.2,0.1,1.7,0.3c0.6,0.2,1,0.4,1.5,0.7l-0.3,0.6c-0.4-0.3-0.9-0.5-1.4-0.7c-0.5-0.2-1-0.2-1.5-0.2c-1,0-1.7,0.2-2.2,0.6
				c-0.5,0.4-0.8,0.9-0.8,1.5c0,0.5,0.1,0.8,0.4,1.1s0.6,0.5,1,0.6c0.4,0.1,0.9,0.3,1.6,0.5c0.8,0.2,1.4,0.4,1.8,0.6
				c0.5,0.2,0.9,0.5,1.2,0.8c0.3,0.4,0.5,0.9,0.5,1.5c0,0.5-0.1,1-0.4,1.4c-0.3,0.4-0.7,0.8-1.3,1c-0.6,0.3-1.3,0.4-2.1,0.4
				C168.8,167.5,168,167.4,167.3,167.1z"/>
                                            <path class="st35" d="M185.3,156.9v10.5h-0.8v-5h-7v5h-0.8v-10.5h0.8v4.8h7v-4.8H185.3z"/>
                                        </g>
                                        <g>
                                            <path class="st35" d="M171.8,287.7l0.7,0l-0.2,3.9c-0.5,0.4-1.1,0.7-1.7,0.9s-1.4,0.3-2.1,0.3c-1,0-2-0.3-2.8-0.8
				c-0.8-0.5-1.4-1.2-1.9-2s-0.6-1.8-0.6-2.8s0.3-1.9,0.8-2.7c0.5-0.8,1.2-1.4,2-1.8c0.9-0.4,1.8-0.6,2.9-0.6c0.8,0,1.5,0.2,2.1,0.5
				c0.6,0.3,1.2,0.7,1.6,1.1l-0.5,0.5c-0.4-0.5-0.9-0.8-1.4-1c-0.5-0.2-1.1-0.3-1.8-0.4c-0.9,0-1.7,0.1-2.5,0.5
				c-0.7,0.4-1.3,0.9-1.8,1.6c-0.4,0.7-0.7,1.5-0.7,2.3c0,0.9,0.1,1.7,0.5,2.4c0.4,0.7,0.9,1.3,1.6,1.7s1.5,0.7,2.4,0.7
				c1.2,0.1,2.2-0.2,3-0.8L171.8,287.7z"/>
                                            <path class="st35" d="M182.8,286.3c0.5,0.6,0.8,1.4,0.7,2.5l-0.2,4.6l-0.7,0l0.2-4.5c0-0.9-0.2-1.6-0.6-2c-0.4-0.5-1-0.7-1.8-0.8
				c-0.9,0-1.7,0.2-2.2,0.7c-0.6,0.5-0.9,1.3-0.9,2.2l-0.2,4.2l-0.7,0l0.3-7.8l0.7,0l-0.1,1.7c0.3-0.5,0.7-0.9,1.3-1.2
				c0.5-0.3,1.2-0.4,1.9-0.4C181.5,285.4,182.3,285.7,182.8,286.3z"/>
                                            <path class="st35" d="M194.9,293.9l-2.3-3.6c-0.4,0-0.7,0-1,0l-3-0.1l-0.2,3.4l-0.8,0l0.5-10.5l3.8,0.2c1.3,0.1,2.3,0.4,3.1,1.1
				c0.7,0.7,1.1,1.5,1,2.6c0,0.8-0.3,1.5-0.7,2.1c-0.4,0.5-1.1,0.9-1.9,1.1l2.5,3.8L194.9,293.9z M191.5,289.6c1.1,0,2-0.2,2.6-0.6
				c0.6-0.5,0.9-1.2,1-2.1c0-0.9-0.2-1.6-0.8-2.1c-0.6-0.5-1.4-0.8-2.5-0.9l-3-0.1l-0.3,5.7L191.5,289.6z"/>
                                            <path class="st35" d="M208.3,284l-0.5,10.5l-0.8,0l0.2-5l-7-0.3l-0.2,5l-0.8,0l0.5-10.5l0.8,0l-0.2,4.8l7,0.3l0.2-4.8L208.3,284z
				"/>
                                        </g>
                                        <g>
                                            <path class="st35" d="M299.8,187c0.9,0.2,1.7,0.8,2.2,1.8c0.5,1,0.5,1.9,0.1,2.8c-0.4,0.9-1.2,1.6-2.4,2.2l-2.7,1.3l1.5,3.1
				l-0.7,0.3l-4.6-9.4l3.4-1.7C297.8,186.9,298.8,186.7,299.8,187z M301.4,191.4c0.3-0.7,0.3-1.5-0.1-2.3s-1-1.3-1.7-1.5
				c-0.7-0.2-1.6,0-2.6,0.5l-2.7,1.3l2.5,5.1l2.7-1.3C300.4,192.7,301.1,192.1,301.4,191.4z"/>
                                            <path class="st35" d="M314.7,190.3l-3.8-2c-0.3,0.2-0.6,0.4-0.9,0.5l-2.7,1.3l1.5,3.1l-0.7,0.3l-4.6-9.4l3.4-1.7
				c1.2-0.6,2.3-0.8,3.2-0.5c0.9,0.2,1.7,0.8,2.2,1.8c0.4,0.7,0.5,1.5,0.4,2.2c-0.1,0.7-0.5,1.3-1.1,1.9l4,2.1L314.7,190.3z
				 M309.7,188.2c1-0.5,1.7-1.1,2-1.8c0.3-0.7,0.3-1.5-0.1-2.3c-0.4-0.8-1-1.3-1.7-1.5c-0.7-0.2-1.6,0-2.6,0.5l-2.7,1.3l2.5,5.1
				L309.7,188.2z"/>
                                            <path class="st35" d="M314,178.9l0.7-0.3l4.3,8.8l5.4-2.7l0.3,0.6l-6.1,3L314,178.9z"/>
                                        </g>
                                        <g>
                                            <path class="st35" d="M36.1,178.2l-0.2,0.6l-6.8-2.5l3.6-9.9l6.6,2.4l-0.2,0.6l-5.9-2.1l-1.4,3.9l5.3,1.9l-0.2,0.6l-5.3-1.9
				l-1.5,4L36.1,178.2z"/>
                                            <path class="st35" d="M45.1,181.5l-0.2,0.6l-6.8-2.5l0.2-0.5l5.7-2.6c0.7-0.3,1.3-0.7,1.6-1c0.3-0.3,0.6-0.7,0.7-1.1
				c0.2-0.6,0.2-1.2-0.1-1.7c-0.3-0.5-0.8-0.9-1.7-1.2c-0.6-0.2-1.2-0.3-1.7-0.3c-0.5,0-1,0.2-1.5,0.4L41,171
				c0.5-0.3,1.1-0.5,1.8-0.5s1.4,0.1,2.1,0.4c1,0.4,1.7,0.9,2.1,1.5s0.5,1.4,0.2,2.2c-0.2,0.5-0.5,1-0.9,1.3c-0.4,0.4-1,0.8-1.9,1.1
				l-5,2.3L45.1,181.5z"/>
                                        </g>
                                    </g>
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
                                </g>
</svg>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="c-how__section-container-1 right-side-text">
                            <div clsas="u-text-darkest">
                                <div class="c-step-title">
                                    Hormonal profiles
                                </div>
                                <p class="c-how__description-1">
                                    To evaluate levels of different hormones contributing to a successful pregnancy
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
                                    Genetic tests
                                </div>
                                <p class="c-how__description-1">
                                    Evaluation of your medical and family history by a genetic counsellor to assess for any underlying genetic conditions causing infertility
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="c-step-image">
                            <?xml version="1.0" encoding="utf-8"?>
                            <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 306.6 234.7" style="enable-background:new 0 0 306.6 234.7;" xml:space="preserve">
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
    .st71{fill:#E6E9ED;}
    .st72{fill:#69326B;}
    .st73{fill:#EACDC5;}
    .st74{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
    .st75{fill:#32327C;}
    .st76{fill:#211968;}
</style>
                                <g id="Layer_3" class="st0">
                                </g>
                                <g id="Layer_2">
                                    <g>
                                        <path class="st10" d="M282.2,155.4c-0.9,17.8-1.8,35.6-2.6,53.3c-4.2-0.3-8.3-1.5-12-3.8c-10.9-6.7-12.1-19-12.2-20.5
			c-0.7-8.9,2.8-19.8,12.5-25.5C272.3,156.2,277.3,155.1,282.2,155.4z"/>
                                        <path class="st10" d="M298.2,202.8c-5,4.3-11.9,6.4-18.7,5.9c0.9-17.8,1.8-35.6,2.6-53.3c5.1,0.2,9.9,1.9,13.8,4.8
			C308.8,169.6,310.6,192,298.2,202.8z"/>
                                        <path class="st36" d="M107.3,155.5c-0.4,18.3-0.8,36.7-1.2,55c-0.4,0-0.7,0-1,0C90,210.1,80.7,195.1,80,182.9
			c-0.1-1.5-0.6-16.2,11.2-23.9C96.9,155.4,102.8,154.9,107.3,155.5z"/>
                                        <path class="st10" d="M131.5,184.4c-0.9,12.9-11.5,25.8-25.4,26c0.4-18.3,0.8-36.7,1.2-55c4.4,0.5,7.6,1.9,8.2,2.1
			C126,162.3,132.3,173.5,131.5,184.4z"/>
                                        <path class="st36" d="M233.4,54.8c-1.7,0.1-3.5-0.1-5.3-0.4c-10.4-2-15.8-9.9-17.6-13c-0.3-0.6-8.2-14.4-0.4-28
			c0.6-1,7.7-12.9,21.2-13.5c0.3,0,0.6,0,0.9,0C232.6,18.3,233,36.6,233.4,54.8z"/>
                                        <path class="st10" d="M250.4,47.9c-0.9,0.8-7.5,6.7-17,7c-0.4-18.3-0.8-36.6-1.2-54.8c11.5-0.1,21.2,8.1,24.9,18
			C261,28.2,258.6,40.3,250.4,47.9z"/>
                                        <path class="st36" d="M68.2,1.3C67.8,19.2,67.4,37.1,67,55c-8.8,0-17.3-0.1-20.4-0.1c-6.5,0-5.6-4.8-5.6-4.8l-0.7-38
			c0,0-1-10.6,2.7-10.7C44.7,1.3,56.5,1.3,68.2,1.3z"/>
                                        <path class="st10" d="M96.1,11.5c-0.4,11.1-0.6,38.6-0.6,38.6s0.8,4.5-5.9,4.8C86.1,55,76.4,55,67,55c0.4-17.9,0.8-35.8,1.2-53.6
			c12.2,0,24.1,0.1,24.1,0.1S96.5,0.4,96.1,11.5z"/>
                                        <path class="st36" d="M27.6,155.4c-0.4,17.7-0.8,35.4-1.2,53.1c-8.4-0.1-16.7-0.1-19.5-0.1c-6,0.2-6.8-5.4-6.8-7.7v-37.3
			c0,0-1.3-8.3,4.9-8.2C8.1,155.3,17.9,155.4,27.6,155.4z"/>
                                        <path class="st36" d="M47.4,208.5c-1.6,0.2-11.3,0.1-21,0.1c0.4-17.7,0.8-35.4,1.2-53.1c9.5,0,18.8,0,21.7-0.1
			c5.8-0.3,4.9,4.6,4.9,11.4c0,6.8-0.3,28.7,0.1,35.7C54.5,209.2,50.4,208.1,47.4,208.5z"/>
                                        <path class="st36" d="M195.7,208.8c-9.5,0-19.2-0.1-21.6-0.1c-5.1-0.1-6.7-2.4-6.8-7.3c0-8.8-0.2-36.4,0-40.3
			c0.2-3.9,3.9-4.3,7.7-4.3c1.8,0,11,0.1,20.6,0.1C195.6,174.2,195.7,191.4,195.7,208.8z"/>
                                        <path class="st10" d="M216.9,208.6c-1.1,0.1-11,0.2-21.2,0.1c0-17.3-0.1-34.6-0.1-51.9c10.3,0.1,21,0.1,23.7-0.1
			c5.3-0.4,4.7,5.1,4.7,7.3s0,2.2,0,2.2s-0.5,33.4,0,38.3C224.5,209.4,218.9,208.4,216.9,208.6z"/>
                                        <g>
                                            <path class="st46" d="M10.4,233.7c0,0,1.5-4.9,2.3-7.6c0.8-2.7,1.4-4.6,2-5.9s1.5-5.3,2.6-5.4c1,0,2,5,2.1,5.9
				c0.1,0.9,1.6,8.3,1.8,9.4c0.2,1.1,0.5,2.9,0.3,3.6c-0.2,0.7-1.9,0.7-1.9-0.2c-0.1-0.9-0.9-5.9-1.2-8.6c-0.4-2.7-0.9-5.2-1.2-5
				c-0.3,0.2-1.9,4.4-2.1,5.5c-0.2,1.1-1.2,5.6-1.2,6.3s-0.6,1.8-0.7,2.1C13,234.2,10.9,235.7,10.4,233.7z"/>
                                            <path class="st46" d="M13.8,226.6c0,0,2.2-0.6,2.8-0.7c0.6-0.1,2.3-0.2,2.8-0.2c0.4,0,0.5,0.3,0.3,0.4c-0.1,0.1-2.8,0.6-3.1,0.7
				c-0.3,0.1-2.6,0.5-2.7,0.5C13.8,227.5,12.7,227.3,13.8,226.6z"/>
                                        </g>
                                        <path class="st46" d="M34.2,230.1c-0.2-1.1-1.7-8.5-1.8-9.4c-0.1-0.9-1.1-5.9-2.1-5.9c-1,0-2,4.1-2.6,5.4c-0.5,1.3-1.2,3.2-2,5.9
			s-2.3,7.6-2.3,7.6c0.5,2,2.5,0.4,2.7,0.1s0.7-1.4,0.7-2.1c0-0.5,0.5-2.7,0.8-4.5c0.7-0.1,1.8-0.3,2-0.4c0.2,0,1.1-0.2,1.9-0.4
			c0.4,2.7,1,6.3,1,7.1c0.1,0.9,1.7,0.8,1.9,0.2C34.7,233.1,34.4,231.2,34.2,230.1z M29.6,225.9c-0.3,0.1-1.1,0.3-1.8,0.4
			c0.1-0.4,0.1-0.7,0.2-0.9c0.2-1.1,1.8-5.3,2.1-5.5c0.3-0.2,0.9,2.3,1.2,5c0,0.3,0.1,0.5,0.1,0.8C30.8,225.8,30,225.9,29.6,225.9z"
                                        />
                                        <path class="st46" d="M66.5,74.3c-0.2-1.1-1.7-8.5-1.8-9.4C64.6,64,63.6,59,62.6,59c-1,0-2,4.1-2.6,5.4c-0.5,1.3-1.2,3.2-2,5.9
			s-2.3,7.6-2.3,7.6c0.5,2,2.5,0.4,2.7,0.1c0.1-0.3,0.7-1.4,0.7-2.1c0-0.5,0.5-2.7,0.8-4.5c0.7-0.1,1.8-0.3,2-0.4
			c0.2,0,1.1-0.2,1.9-0.4c0.4,2.7,1,6.3,1,7.1c0.1,0.9,1.7,0.8,1.9,0.2C67,77.2,66.7,75.3,66.5,74.3z M62,70.1
			c-0.3,0.1-1.1,0.3-1.8,0.4c0.1-0.4,0.1-0.7,0.2-0.9c0.2-1.1,1.8-5.3,2.1-5.5c0.3-0.2,0.9,2.3,1.2,5c0,0.3,0.1,0.5,0.1,0.8
			C63.1,70,62.3,70,62,70.1z"/>
                                        <path class="st46" d="M80.2,76.2c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.2-0.1-1.4-1.6c-0.1-0.8-0.2-1.9-0.2-2.8c0.1-0.7,0.1-1.4,0-2
			c0,0,0,0,0,0l0,0c-0.1-0.8-0.2-1.5-0.4-1.7C77,67,75.6,67,75.6,67s-2.4,0-3.9,1.7c-1.5,1.7-2.5,3.1-2.6,4.9
			c-0.1,1.8,0.3,3.6,1.8,3.9c1.5,0.3,2.4,0.2,4.7-1.3c0.3-0.2,0.6-0.4,0.8-0.7c0.3,0.9,0.9,1.4,1.7,1.7c0.9,0.4,1.9,0.2,2.3-0.2
			C80.7,76.7,80.2,76.2,80.2,76.2z M75.6,74c-0.8,1.4-2.5,1.9-3.6,2c-1,0.1-1.9-1.1-1.1-3.3c0.8-2.2,2.8-3.4,3.8-3.7
			c1-0.3,1.5,0.4,1.5,0.4C77,71.8,76.4,72.6,75.6,74z"/>
                                        <path class="st46" d="M234.8,75.8c-0.2-1.1-1.7-8.5-1.8-9.4c-0.1-0.9-1.1-5.9-2.1-5.9c-1,0-2,4.1-2.6,5.4c-0.5,1.3-1.2,3.2-2,5.9
			s-2.3,7.6-2.3,7.6c0.5,2,2.5,0.4,2.7,0.1c0.1-0.3,0.7-1.4,0.7-2.1c0-0.5,0.5-2.7,0.8-4.5c0.7-0.1,1.8-0.3,2-0.4
			c0.2,0,1.1-0.2,1.9-0.4c0.4,2.7,1,6.3,1,7.1c0.1,0.9,1.7,0.8,1.9,0.2C235.3,78.8,235,76.9,234.8,75.8z M230.2,71.6
			c-0.3,0.1-1.1,0.3-1.8,0.4c0.1-0.4,0.1-0.7,0.2-0.9c0.2-1.1,1.8-5.3,2.1-5.5c0.3-0.2,0.9,2.3,1.2,5c0,0.3,0.1,0.5,0.1,0.8
			C231.4,71.5,230.6,71.6,230.2,71.6z"/>
                                        <path class="st46" d="M248.5,77.7c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.2-0.1-1.4-1.6c-0.1-0.8-0.2-1.9-0.2-2.8c0.1-0.7,0.1-1.4,0-2
			c0,0,0,0,0,0l0,0c-0.1-0.8-0.2-1.5-0.4-1.7c-0.7-0.9-2.1-0.9-2.1-0.9s-2.4,0-3.9,1.7c-1.5,1.7-2.5,3.1-2.6,4.9
			c-0.1,1.8,0.3,3.6,1.8,3.9c1.5,0.3,2.4,0.2,4.7-1.3c0.3-0.2,0.6-0.4,0.8-0.7c0.3,0.9,0.9,1.4,1.7,1.7c0.9,0.4,1.9,0.2,2.3-0.2
			C249,78.2,248.5,77.7,248.5,77.7z M243.9,75.5c-0.8,1.4-2.5,1.9-3.6,2c-1,0.1-1.9-1.1-1.1-3.3c0.8-2.2,2.8-3.4,3.8-3.7
			c1-0.3,1.5,0.4,1.5,0.4C245.3,73.4,244.7,74.2,243.9,75.5z"/>
                                        <path class="st46" d="M104.2,230.1c-0.2-1.1-1.7-8.5-1.8-9.4c-0.1-0.9-1.1-5.9-2.1-5.9c-1,0-2,4.1-2.6,5.4c-0.5,1.3-1.2,3.2-2,5.9
			c-0.8,2.7-2.3,7.6-2.3,7.6c0.5,2,2.5,0.4,2.7,0.1s0.7-1.4,0.7-2.1c0-0.5,0.5-2.7,0.8-4.5c0.7-0.1,1.8-0.3,2-0.4
			c0.2,0,1.1-0.2,1.9-0.4c0.4,2.7,1,6.3,1,7.1c0.1,0.9,1.7,0.8,1.9,0.2C104.7,233.1,104.4,231.2,104.2,230.1z M99.6,225.9
			c-0.3,0.1-1.1,0.3-1.8,0.4c0.1-0.4,0.1-0.7,0.2-0.9c0.2-1.1,1.8-5.3,2.1-5.5c0.3-0.2,0.9,2.3,1.2,5c0,0.3,0.1,0.5,0.1,0.8
			C100.8,225.8,100,225.9,99.6,225.9z"/>
                                        <path class="st46" d="M117.9,232c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.2-0.1-1.4-1.6c-0.1-0.8-0.2-1.9-0.2-2.8c0.1-0.7,0.1-1.4,0-2
			c0,0,0,0,0,0l0,0c-0.1-0.8-0.2-1.5-0.4-1.7c-0.7-0.9-2.1-0.9-2.1-0.9s-2.4,0-3.9,1.7s-2.5,3.1-2.6,4.9c-0.1,1.8,0.3,3.6,1.8,3.9
			c1.5,0.3,2.4,0.2,4.7-1.3c0.3-0.2,0.6-0.4,0.8-0.7c0.3,0.9,0.9,1.4,1.7,1.7c0.9,0.4,1.9,0.2,2.3-0.2
			C118.3,232.6,117.9,232,117.9,232z M113.3,229.8c-0.8,1.4-2.5,1.9-3.6,2c-1,0.1-1.9-1.1-1.1-3.3c0.8-2.2,2.8-3.4,3.8-3.7
			c1-0.3,1.5,0.4,1.5,0.4C114.7,227.7,114.1,228.5,113.3,229.8z"/>
                                        <path class="st46" d="M210.4,232c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.2-0.1-1.4-1.6c-0.1-0.8-0.2-1.9-0.2-2.8c0.1-0.7,0.1-1.4,0-2
			c0,0,0,0,0,0l0,0c-0.1-0.8-0.2-1.5-0.4-1.7c-0.7-0.9-2.1-0.9-2.1-0.9s-2.4,0-3.9,1.7s-2.5,3.1-2.6,4.9c-0.1,1.8,0.3,3.6,1.8,3.9
			c1.5,0.3,2.4,0.2,4.7-1.3c0.3-0.2,0.6-0.4,0.8-0.7c0.3,0.9,0.9,1.4,1.7,1.7c0.9,0.4,1.9,0.2,2.3-0.2
			C210.8,232.6,210.4,232,210.4,232z M205.8,229.8c-0.8,1.4-2.5,1.9-3.6,2c-1,0.1-1.9-1.1-1.1-3.3c0.8-2.2,2.8-3.4,3.8-3.7
			c1-0.3,1.5,0.4,1.5,0.4C207.2,227.7,206.6,228.5,205.8,229.8z"/>
                                        <path class="st46" d="M197.1,230.1c-0.2-1.1-1.7-8.5-1.8-9.4c-0.1-0.9-1.1-5.9-2.1-5.9c-1,0-2,4.1-2.6,5.4c-0.5,1.3-1.2,3.2-2,5.9
			s-2.3,7.6-2.3,7.6c0.5,2,2.5,0.4,2.7,0.1c0.1-0.3,0.7-1.4,0.7-2.1c0-0.5,0.5-2.7,0.8-4.5c0.7-0.1,1.8-0.3,2-0.4
			c0.2,0,1.1-0.2,1.9-0.4c0.4,2.7,1,6.3,1,7.1c0.1,0.9,1.7,0.8,1.9,0.2C197.5,233.1,197.3,231.2,197.1,230.1z M192.5,225.9
			c-0.3,0.1-1.1,0.3-1.8,0.4c0.1-0.4,0.1-0.7,0.2-0.9c0.2-1.1,1.8-5.3,2.1-5.5c0.3-0.2,0.9,2.3,1.2,5c0,0.3,0.1,0.5,0.1,0.8
			C193.6,225.8,192.9,225.9,192.5,225.9z"/>
                                        <path class="st46" d="M283.4,232c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.2-0.1-1.4-1.6c-0.1-0.8-0.2-1.9-0.2-2.8c0.1-0.7,0.1-1.4,0-2
			c0,0,0,0,0,0l0,0c-0.1-0.8-0.2-1.5-0.4-1.7c-0.7-0.9-2.1-0.9-2.1-0.9s-2.4,0-3.9,1.7s-2.5,3.1-2.6,4.9c-0.1,1.8,0.3,3.6,1.8,3.9
			c1.5,0.3,2.4,0.2,4.7-1.3c0.3-0.2,0.6-0.4,0.8-0.7c0.3,0.9,0.9,1.4,1.7,1.7c0.9,0.4,1.9,0.2,2.3-0.2
			C283.9,232.6,283.4,232,283.4,232z M278.9,229.8c-0.8,1.4-2.5,1.9-3.6,2c-1,0.1-1.9-1.1-1.1-3.3c0.8-2.2,2.8-3.4,3.8-3.7
			c1-0.3,1.5,0.4,1.5,0.4C280.3,227.7,279.7,228.5,278.9,229.8z"/>
                                        <path class="st46" d="M297.1,232c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.2-0.1-1.4-1.6c-0.1-0.8-0.2-1.9-0.2-2.8c0.1-0.7,0.1-1.4,0-2
			c0,0,0,0,0,0l0,0c-0.1-0.8-0.2-1.5-0.4-1.7c-0.7-0.9-2.1-0.9-2.1-0.9s-2.4,0-3.9,1.7c-1.5,1.7-2.5,3.1-2.6,4.9
			c-0.1,1.8,0.3,3.6,1.8,3.9c1.5,0.3,2.4,0.2,4.7-1.3c0.3-0.2,0.6-0.4,0.8-0.7c0.3,0.9,0.9,1.4,1.7,1.7c0.9,0.4,1.9,0.2,2.3-0.2
			C297.5,232.6,297.1,232,297.1,232z M292.5,229.8c-0.8,1.4-2.5,1.9-3.6,2c-1,0.1-1.9-1.1-1.1-3.3c0.8-2.2,2.8-3.4,3.8-3.7
			c1-0.3,1.5,0.4,1.5,0.4C293.9,227.7,293.3,228.5,292.5,229.8z"/>
                                        <path class="st46" d="M200.7,27.1c0,0-38,1.5-49.7,1.7s-32.9,0-32.9,0l-18.6,0.1c0,0-0.4-0.3,0.4-0.7s61.2-0.6,66.9-1
			c5.7-0.4,33.7-1.2,35-1.2S202.6,27,200.7,27.1z"/>
                                        <g>
                                            <path class="st46" d="M30.3,130.2c0.1,9.3,0.2,19.3,0.2,20.1c0,1.3-1.1,0.7-1.2-1.1c0,0-0.2-8.6-0.4-18.9L30.3,130.2z"/>
                                            <path class="st46" d="M105.7,128.6c-0.1,9.7-0.3,20.9-0.3,21.7c-0.1,1.3-1.1,0.7-1.1-1.2c0,0,0-9.4,0.1-20.3L105.7,128.6z"/>
                                            <path class="st46" d="M194.2,127.5c0.1,10.1,0.3,23,0.3,23.9c0.1,1.3,1.1,0.7,1.1-1.2c0,0,0-10.9-0.1-22.8L194.2,127.5z"/>
                                            <path class="st46" d="M280.7,127.5c0.1,9.5,0.3,20.1,0.3,20.9c0.1,1.3,1.1,0.7,1.1-1.2c0,0,0-9.1-0.1-19.7L280.7,127.5z"/>
                                            <path class="st46" d="M34.1,130.6c-1.2,0-2.1,0-2.7,0c-2.1,0-2.3-0.2-2.4-0.3c0.1-0.1-0.1-0.6,5.1-0.7c0.4,0,45.2-0.9,70-1.5
				c12.2-0.3,27.2-0.4,41.8-0.5c15.2-0.1,29.5-0.2,39.4-0.5c5.8-0.2,14.6-0.3,27.1-0.3c13.4,0,28.5,0.1,39.4,0.2
				c6.9,0.1,12.3,0.1,15.4,0.1c8.9,0,15,0.1,14.9,0.5c-0.6,0.4-1.6,0.4-3.8,0.5c-0.2,0-1.1,0-3.7,0c-5.4,0-15.4-0.1-26-0.1
				c-10.7-0.1-21.7-0.1-27.6-0.1c-1.2,0-2.1,0-2.9,0c-2.9,0-10.4,0.2-19.8,0.3c-19.3,0.3-48.5,0.8-62.3,0.8c-0.7,0-3.3,0-3.9,0
				c-13.1,0-30.1,0.6-41.3,1c-4.8,0.2-8.6,0.3-10.9,0.3C72.8,130.4,44.2,130.6,34.1,130.6z"/>
                                        </g>
                                        <path class="st46" d="M151.2,28c0,1.2,0,2.1,0,2.9c0,2.9,0,10.4,0.1,19.8c0.1,19.3,0.2,48.6,0.1,62.4c0,0.7,0,3.3-0.1,3.9
			c0,3.5,0,7.3,0,11.2l-1.3,0c0-8.1,0-16.6,0.1-25c0.1-15.2,0.1-29.5-0.1-39.4c-0.1-5.8-0.1-14.6,0-27.1c0-2.8,0.1-5.6,0.1-8.5
			L151.2,28z"/>
                                    </g>
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
                                </g>
</svg>
                        </div>
                    </div>

                </div>
                <!--<div class="row c-how__section-1">
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="c-step-image"> <img src="/img/Assets2.png"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="c-how__section-container-1 right-side-text">
                            <div clsas="u-text-darkest">
                                <div class="c-step-title">
                                    We stand by you
                                </div>
                                <p class="c-how__description-1">
                                    We paint the vision of your family plans to life &amp; cater to your needs on your path to become a parent. We paint the vision of your family plans to life &amp; cater to your needs on your path to become a parent.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>

    </div>
</section>
<!--------------------------------------------------------------
 C-why crysta side-box
---------------------------------------------------------------->
<section class="why-choose l-choose">
    <div class="container">
        <div class="main-title">
            <h1>Why Choose Crysta</h1>
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

                        
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 143.9 165.2" style="enable-background:new 0 0 143.9 165.2;" xml:space="preserve">
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
                                    <path class="st64" d="M72,6.2c-0.6,0-1.2,0.1-1.7,0.3L10.2,31.4c-1.5,0.6-2.5,2-2.8,3.5c-1.2,8.1-3.2,29.6,4,53.7
			c9,29.7,28.6,53.2,58.3,69.8c0.7,0.4,1.4,0.6,2.2,0.6c0.8,0,1.5-0.2,2.2-0.6c29.8-16.6,49.4-40.1,58.3-69.8
			c7.3-24.1,5.2-45.6,4-53.7c-0.2-1.6-1.3-2.9-2.8-3.5L73.7,6.5C73.2,6.3,72.6,6.2,72,6.2z"/>
                                    <path class="st35" d="M72,19.3c-0.5,0-1,0.1-1.4,0.3L20.8,40.2c-1.2,0.5-2.1,1.6-2.3,2.9c-1,6.7-2.7,24.5,3.3,44.5
			c7.4,24.6,23.7,44,48.3,57.8c0.6,0.3,1.2,0.5,1.8,0.5c0.6,0,1.3-0.2,1.8-0.5c24.6-13.8,40.9-33.2,48.3-57.8
			c6-19.9,4.3-37.7,3.3-44.5c-0.2-1.3-1.1-2.4-2.3-2.9L73.4,19.6C72.9,19.4,72.5,19.3,72,19.3z"/>
                                    <rect x="63.5" y="57.4" class="st64" width="16.1" height="50"/>

                                    <rect x="63" y="57.4" transform="matrix(6.123234e-17 -1 1 6.123234e-17 -10.8965 154.0126)" class="st64" width="17.1" height="50"/>
                                    <g>
                                        <g>
                                            <g>
                                                <path class="st72" d="M72,165.2c-1.8,0-3.6-0.5-5.2-1.4c-16.9-9.4-30.8-21.2-41.5-34.9c-8.9-11.5-15.5-24.4-19.8-38.5
						C-2.1,65.2,0,42.6,1.3,34.1c0.6-3.7,3.1-6.9,6.5-8.4L67.9,0.8C69.2,0.3,70.6,0,72,0s2.8,0.3,4.1,0.8l60.1,24.9
						c3.5,1.4,6,4.6,6.5,8.4c1.3,8.5,3.4,31.1-4.2,56.4c-4.2,14.1-10.9,27-19.8,38.5c-10.6,13.8-24.6,25.5-41.5,34.9
						C75.6,164.7,73.8,165.2,72,165.2z M72,6.2c-0.6,0-1.2,0.1-1.7,0.3L10.2,31.4c-1.5,0.6-2.5,2-2.8,3.5c-1.2,8.1-3.2,29.6,4,53.7
						c9,29.7,28.6,53.2,58.3,69.8c0.7,0.4,1.4,0.6,2.2,0.6c0.8,0,1.5-0.2,2.2-0.6c29.8-16.6,49.4-40.1,58.3-69.8
						c7.3-24.1,5.2-45.6,4-53.7c-0.2-1.6-1.3-2.9-2.8-3.5L73.7,6.5C73.2,6.3,72.6,6.2,72,6.2z"/>
                                                <path class="st72" d="M72,148.6c-1.6,0-3.1-0.4-4.5-1.1C53.9,140,42.6,130.6,34,119.7c-7.2-9.1-12.5-19.4-16-30.7
						c-6.2-20.1-4.4-38.1-3.4-44.9c0.5-3.2,2.6-5.9,5.6-7.1l48.2-19.7c1.1-0.5,2.3-0.7,3.5-0.7c1.2,0,2.4,0.2,3.5,0.7L90,23.2
						c1.6,0.6,2.3,2.5,1.7,4c-0.5,1.2-1.6,1.9-2.9,1.9c-0.4,0-0.8-0.1-1.2-0.2L73.2,23c-0.4-0.2-0.8-0.2-1.2-0.2
						c-0.4,0-0.8,0.1-1.2,0.2L22.5,42.7c-1,0.4-1.7,1.3-1.8,2.3c-1,6.4-2.6,23.3,3.2,42.2c7.1,23.3,22.8,41.8,46.6,54.9
						c0.4,0.2,1,0.4,1.5,0.4c0.5,0,1-0.1,1.5-0.4c23.7-13.1,39.4-31.5,46.6-54.9c5.8-18.9,4.2-35.8,3.2-42.2c-0.2-1-0.9-1.9-1.8-2.3
						l-23.5-9.6c-1.6-0.6-2.3-2.5-1.7-4c0.5-1.2,1.6-1.9,2.9-1.9c0.4,0,0.8,0.1,1.2,0.2l23.5,9.6c3,1.2,5.1,3.9,5.6,7.1
						c1,6.8,2.7,24.8-3.4,44.9c-3.4,11.2-8.8,21.5-16,30.7c-8.6,11-19.9,20.3-33.5,27.8C75.1,148.2,73.5,148.6,72,148.6L72,148.6z"
                                                />
                                                <path class="st72" d="M67.2,112.4c-3.8,0-6.9-3.1-6.9-6.9V94.9c0-0.4-0.3-0.7-0.7-0.7c-1.7,0-3.1-1.4-3.1-3.1
						c0-1.7,1.4-3.1,3.1-3.1c3.8,0,6.9,3.1,6.9,6.9v10.6c0,0.4,0.3,0.7,0.7,0.7h9.6c0.4,0,0.7-0.3,0.7-0.7V94.9
						c0-3.8,3.1-6.9,6.9-6.9H95c0.4,0,0.7-0.3,0.7-0.7v-9.5c0-0.4-0.3-0.7-0.7-0.7H84.4c-3.8,0-6.9-3.1-6.9-6.9V59.7
						c0-0.4-0.3-0.7-0.7-0.7h-9.6c-0.4,0-0.7,0.3-0.7,0.7v10.6c0,3.8-3.1,6.9-6.9,6.9H48.9c-0.4,0-0.7,0.3-0.7,0.7v9.5
						c0,0.3,0.2,0.6,0.5,0.7c0,0,11.3,0,11.3,0c1.7,0.2,2.9,1.8,2.7,3.5c-0.2,1.5-1.5,2.7-3.1,2.7c-0.1,0-11.5,0-11.7,0
						c-3.4-0.4-6-3.4-6-6.8v-9.5c0-3.8,3.1-6.9,6.9-6.9h10.7c0.4,0,0.7-0.3,0.7-0.7V59.7c0-3.8,3.1-6.9,6.9-6.9h9.6
						c3.8,0,6.9,3.1,6.9,6.9v10.6c0,0.4,0.3,0.7,0.7,0.7H95c3.8,0,6.9,3.1,6.9,6.9v9.5c0,3.8-3.1,6.9-6.9,6.9H84.4
						c-0.4,0-0.7,0.3-0.7,0.7v10.6c0,3.8-3.1,6.9-6.9,6.9H67.2z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
</svg>


                    </div>
                    <h4>Data security & Privacy</h4>
                    <p style="margin-bottom: -0.5rem;">We respect your privacy and handle your data with utmost confidentiality</p>
                </li>

                <li>
                    <div>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

                        
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 113.8 184.5" style="enable-background:new 0 0 113.8 184.5;" xml:space="preserve">
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
                                        <path class="st72" d="M39.5,91.1c7.2-8.4,14-16.5,20.8-24.5c7.7-9.1,15.4-18.2,23.2-27.2c3.6-4.2,9.1-5.3,13.6-2.8
				c6,3.2,8.9,8.6,7.4,14c-0.5,1.8-1.6,3.5-2.8,5c-4.4,5.4-9,10.7-13.2,15.6c2.8,2.7,5.8,4.9,8,7.8c2.5,3.3,1.7,7.2,0.1,10.8
				c10.5,6.3,12.3,11.1,7.5,19.9c1.9,1.4,3.8,2.6,5.5,4.2c4.7,4.1,5.5,10.1,1.7,15.1c-12.6,16.8-28.2,30-47.3,39
				c-1.8,0.8-3.4,2.1-4.8,3.6c-3.3,3.6-6.3,7.4-9.5,11c-2.1,2.5-3.4,2.6-5.9,0.4C30,170.8,16,158.6,1.9,146.4
				c-2.5-2.1-2.5-3.3-0.4-5.9c3-3.6,6.2-7.2,9.2-10.9c0.6-0.8,1-2.1,0.9-3.1c-2.9-17-2.1-34-0.9-51.1c0.2-2.5,0.4-5,0.5-7.5
				c0.3-6.8,4.9-11.4,12.2-12c6-0.4,11.3,3.7,12.3,10c1.2,7.3,2.2,14.6,3.3,21.8C39,88.7,39.2,89.6,39.5,91.1z M46.6,177
				c3-3.5,5.7-6.9,8.7-10.1c1.6-1.7,3.6-3.3,5.7-4.3c18.3-8.4,33.1-21.1,45.3-36.9c2.1-2.8,1.9-5-0.4-7.2c-3.4-3.2-5.4-3.6-8.3-1.2
				c-1.6,1.3-3.1,1.8-4.6,0.3c-1.7-1.7-1-3.3,0.4-4.9c1.8-2.1,3.7-4.3,5.5-6.4c2.4-2.9,2.5-5.2,0.3-7.5c-3.3-3.4-5.6-3.8-8.8-1.3
				c-1.5,1.2-3,1.5-4.4,0.2c-1.6-1.5-1.2-3.1,0.1-4.6c1.6-1.9,3.6-3.7,4.8-5.8c0.8-1.5,1.3-4,0.6-5.3c-2.3-4.4-5.9-4.9-10.1-2.3
				c-1,0.6-3.2,0.6-3.8-0.1c-0.7-0.9-0.5-2.7-0.4-4.1c0-0.5,0.8-1.1,1.2-1.6c6.3-7.4,12.5-14.8,18.9-22.1c1.7-2,2.6-4.1,1-6.6
				c-3.2-4.8-7.1-5-10.8-0.6C71.6,62.9,56,81.2,40.4,99.4c-0.9,1-2.8,2-3.8,1.7c-1-0.3-2.1-2.1-2.3-3.4c-1.7-10.1-3.1-20.3-4.7-30.4
				c-0.5-3.5-2.9-5.2-6.3-5c-3.6,0.3-5.7,2.3-5.9,5.6c-0.5,8.1-1.1,16.2-1.4,24.4c-0.5,11.5-0.4,23.1,2.1,34.4
				c0.5,2.4,0.1,4-1.5,5.8c-3.1,3.4-6,7-9.1,10.6C20.6,154.5,33.5,165.7,46.6,177z"/>
                                        <path class="st72" d="M50.6,21.2c0,5.7,0,11.4,0,17.1c0,2.1-0.5,3.8-3,3.7c-2.2-0.1-2.8-1.7-2.8-3.6c0-11.6,0-23.2,0-34.8
				c0-2,0.7-3.5,2.9-3.6c2.2,0,2.9,1.5,2.9,3.5C50.6,9.4,50.6,15.3,50.6,21.2z"/>
                                        <path class="st72" d="M60.5,43.8c-2.8,0-4.2-2.2-3.2-4.1c0.4-0.7,1.1-1.4,1.7-2c7.8-7.8,15.6-15.6,23.4-23.4
				c0.4-0.4,0.8-1.1,1.3-1.2c1.3-0.1,3.1-0.5,3.8,0.1c0.7,0.7,0.7,2.7,0.2,3.7c-0.5,1.2-1.9,2.1-2.9,3.2
				c-7.2,7.3-14.5,14.5-21.8,21.7C62,42.8,61,43.4,60.5,43.8z"/>
                                        <path class="st72" d="M9.9,11.9c1.1,0.8,2,1.2,2.7,1.8c8.2,8.2,16.4,16.4,24.6,24.6c1.4,1.4,2.2,2.9,0.6,4.5
				c-1.6,1.7-3.3,1-4.8-0.5C24.9,34.2,16.6,26,8.5,17.7c-0.8-0.8-1.2-2.4-1-3.5C7.6,13.3,9,12.7,9.9,11.9z"/>
                                        <path class="st71" d="M46.6,177c-13-11.3-26-22.6-39.1-34c3.1-3.6,6-7.2,9.1-10.6c1.6-1.7,2-3.4,1.5-5.8
				c-2.5-11.3-2.6-22.9-2.1-34.4c0.3-8.1,0.9-16.3,1.4-24.4c0.2-3.3,2.3-5.3,5.9-5.6c3.5-0.3,5.8,1.5,6.3,5
				c1.6,10.1,3,20.3,4.7,30.4c0.2,1.3,1.3,3.1,2.3,3.4c1.1,0.3,3-0.7,3.8-1.7C56,81.2,71.6,62.9,87.1,44.6c3.7-4.4,7.6-4.2,10.8,0.6
				c1.6,2.4,0.7,4.6-1,6.6c-6.3,7.4-12.6,14.8-18.9,22.1c-0.4,0.5-1.2,1-1.2,1.6c-0.1,1.4-0.3,3.2,0.4,4.1c0.6,0.7,2.8,0.7,3.8,0.1
				c4.2-2.6,7.8-2.1,10.1,2.3c0.7,1.3,0.2,3.8-0.6,5.3c-1.2,2.2-3.1,3.9-4.8,5.8c-1.3,1.5-1.7,3.2-0.1,4.6c1.4,1.3,2.9,1,4.4-0.2
				c3.2-2.5,5.4-2.1,8.8,1.3c2.2,2.2,2.1,4.6-0.3,7.5c-1.8,2.2-3.6,4.3-5.5,6.4c-1.3,1.6-2,3.2-0.4,4.9c1.5,1.5,3.1,1,4.6-0.3
				c2.9-2.4,4.9-2,8.3,1.2c2.3,2.2,2.5,4.5,0.4,7.2c-12.2,15.9-27,28.5-45.3,36.9c-2.1,1-4,2.6-5.7,4.3
				C52.3,170.1,49.6,173.5,46.6,177z"/>
                                    </g>
                                </g>
                            </g>
</svg>


                    </div>
                    <h4>Ease of use</h4>
                    <p class="bottoml">Ease of booking appointments, ease of rescheduling them and on time reminders</p>
                </li>

                <li>
                    <div>

                        
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 128.3 183.3" style="enable-background:new 0 0 128.3 183.3;" xml:space="preserve">
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
                                        <path class="st64" d="M106.9,3.1H33.6c-3.4,0-6.1,2.7-6.1,6.1v67.2v55c0,3.4,2.7,6.1,6.1,6.1h70.3h3.1c3.4,0,6.1-2.7,6.1-6.1
				v-3.1c-5.1,0-9.2-4.1-9.2-9.2s4.1-9.2,9.2-9.2c-5.1,0-9.2-4.1-9.2-9.2s4.1-9.2,9.2-9.2c-5.1,0-9.2-4.1-9.2-9.2s4.1-9.2,9.2-9.2
				c-5.1,0-9.2-4.1-9.2-9.2S108,55,113,55v-0.4V9.2C113,5.8,110.3,3.1,106.9,3.1z"/>
                                        <path class="st71" d="M103.9,137.5l-36.7,40.6L9.2,158V58c10.1,0,18.3,8.2,18.3,18.3v55c0,3.4,2.7,6.1,6.1,6.1H103.9z"/>
                                        <g>
                                            <path class="st71" d="M116.1,91.7c5.1,0,9.2,4.1,9.2,9.2s-4.1,9.2-9.2,9.2H113c-5.1,0-9.2-4.1-9.2-9.2s4.1-9.2,9.2-9.2H116.1z"
                                            />
                                            <path class="st71" d="M116.1,110c5.1,0,9.2,4.1,9.2,9.2s-4.1,9.2-9.2,9.2H113c-5.1,0-9.2-4.1-9.2-9.2s4.1-9.2,9.2-9.2H116.1z"/>
                                            <path class="st71" d="M116.1,73.3c5.1,0,9.2,4.1,9.2,9.2s-4.1,9.2-9.2,9.2H113c-5.1,0-9.2-4.1-9.2-9.2s4.1-9.2,9.2-9.2H116.1z"
                                            />
                                        </g>
                                        <path class="st73" d="M70.3,116.1c3.4,0,6.1,2.7,6.1,6.1c0,3.4-2.7,6.1-6.1,6.1c-3.4,0-6.1-2.7-6.1-6.1
				C64.2,118.8,66.9,116.1,70.3,116.1z"/>
                                        <path class="st71" d="M116.1,55c5.1,0,9.2,4.1,9.2,9.2s-4.1,9.2-9.2,9.2H113c-5.1,0-9.2-4.1-9.2-9.2S108,55,113,55H116.1z"/>
                                        <path class="st73" d="M70.3,42.8c13.5,0,24.4,11,24.4,24.4c0,13.5-10.9,24.4-24.4,24.4S45.8,80.7,45.8,67.2
				C45.8,53.7,56.8,42.8,70.3,42.8z"/>
                                        <path class="st72" d="M70.3,94.7c-15.2,0-27.5-12.3-27.5-27.5s12.3-27.5,27.5-27.5s27.5,12.3,27.5,27.5S85.4,94.7,70.3,94.7z
				 M70.3,45.8c-11.8,0-21.4,9.6-21.4,21.4s9.6,21.4,21.4,21.4S91.7,79,91.7,67.2S82.1,45.8,70.3,45.8z"/>
                                        <path class="st72" d="M70.3,79.4c-1.7,0-3.1-1.4-3.1-3.1V58c0-1.7,1.4-3.1,3.1-3.1c1.7,0,3.1,1.4,3.1,3.1v18.3
				C73.3,78.1,72,79.4,70.3,79.4z"/>
                                        <path class="st72" d="M79.4,70.3H61.1c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1h18.3c1.7,0,3.1,1.4,3.1,3.1
				C82.5,68.9,81.1,70.3,79.4,70.3z"/>
                                        <path class="st72" d="M27.5,79.4c-1.7,0-3.1-1.4-3.1-3.1c0-8.4-6.9-15.3-15.3-15.3c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1
				c11.8,0,21.4,9.6,21.4,21.4C30.6,78.1,29.2,79.4,27.5,79.4z"/>
                                        <path class="st72" d="M9.2,161c-1.7,0-3.1-1.4-3.1-3.1V58c0-1.7,1.4-3.1,3.1-3.1s3.1,1.4,3.1,3.1v99.9
				C12.2,159.6,10.9,161,9.2,161z"/>
                                        <path class="st72" d="M106.9,140.5H33.6c-5.1,0-9.2-4.1-9.2-9.2V9.2c0-5.1,4.1-9.2,9.2-9.2h73.3c5.1,0,9.2,4.1,9.2,9.2
				c0,1.7-1.4,3.1-3.1,3.1c-1.7,0-3.1-1.4-3.1-3.1c0-1.7-1.4-3.1-3.1-3.1H33.6c-1.7,0-3.1,1.4-3.1,3.1v122.2c0,1.7,1.4,3.1,3.1,3.1
				h73.3c1.7,0,3.1-1.4,3.1-3.1c0-1.7,1.4-3.1,3.1-3.1c1.7,0,3.1,1.4,3.1,3.1C116.1,136.4,112,140.5,106.9,140.5z"/>
                                        <path class="st72" d="M113,57.7c-1.7,0-3.1-1.4-3.1-3.1V9.2c0-1.7,1.4-3.1,3.1-3.1c1.7,0,3.1,1.4,3.1,3.1v45.4
				C116.1,56.3,114.7,57.7,113,57.7z"/>
                                        <path class="st72" d="M113,113c-6.7,0-12.2-5.5-12.2-12.2c0-6.7,5.5-12.2,12.2-12.2c1.7,0,3.1,1.4,3.1,3.1s-1.4,3.1-3.1,3.1
				c-3.4,0-6.1,2.7-6.1,6.1c0,3.4,2.7,6.1,6.1,6.1c1.7,0,3.1,1.4,3.1,3.1C116.1,111.7,114.7,113,113,113z"/>
                                        <path class="st72" d="M113,131.4c-6.7,0-12.2-5.5-12.2-12.2c0-6.7,5.5-12.2,12.2-12.2c1.7,0,3.1,1.4,3.1,3.1s-1.4,3.1-3.1,3.1
				c-3.4,0-6.1,2.7-6.1,6.1c0,3.4,2.7,6.1,6.1,6.1c1.7,0,3.1,1.4,3.1,3.1C116.1,130,114.7,131.4,113,131.4z"/>
                                        <path class="st72" d="M116.1,113c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1c3.4,0,6.1-2.7,6.1-6.1s-2.7-6.1-6.1-6.1
				c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1c6.7,0,12.2,5.5,12.2,12.2S122.8,113,116.1,113z"/>
                                        <path class="st72" d="M116.1,131.4c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1c3.4,0,6.1-2.7,6.1-6.1c0-3.4-2.7-6.1-6.1-6.1
				c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1c6.7,0,12.2,5.5,12.2,12.2C128.3,125.9,122.8,131.4,116.1,131.4z"/>
                                        <path class="st72" d="M116.1,113H113c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h3.1c1.7,0,3.1,1.4,3.1,3.1S117.8,113,116.1,113z"/>
                                        <path class="st72" d="M116.1,131.4H113c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1h3.1c1.7,0,3.1,1.4,3.1,3.1
				C119.2,130,117.8,131.4,116.1,131.4z"/>
                                        <path class="st72" d="M113,94.7c-6.7,0-12.2-5.5-12.2-12.2c0-6.7,5.5-12.2,12.2-12.2c1.7,0,3.1,1.4,3.1,3.1
				c0,1.7-1.4,3.1-3.1,3.1c-3.4,0-6.1,2.7-6.1,6.1c0,3.4,2.7,6.1,6.1,6.1c1.7,0,3.1,1.4,3.1,3.1S114.7,94.7,113,94.7z"/>
                                        <path class="st72" d="M113,76.4c-6.7,0-12.2-5.5-12.2-12.2c0-6.7,5.5-12.2,12.2-12.2c1.7,0,3.1,1.4,3.1,3.1S114.7,58,113,58
				c-3.4,0-6.1,2.7-6.1,6.1c0,3.4,2.7,6.1,6.1,6.1c1.7,0,3.1,1.4,3.1,3.1C116.1,75,114.7,76.4,113,76.4z"/>
                                        <path class="st72" d="M116.1,94.7c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1c3.4,0,6.1-2.7,6.1-6.1c0-3.4-2.7-6.1-6.1-6.1
				c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1c6.7,0,12.2,5.5,12.2,12.2C128.3,89.2,122.8,94.7,116.1,94.7z"/>
                                        <path class="st72" d="M116.1,76.4c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1c3.4,0,6.1-2.7,6.1-6.1c0-3.4-2.7-6.1-6.1-6.1
				c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1c6.7,0,12.2,5.5,12.2,12.2C128.3,70.9,122.8,76.4,116.1,76.4z"/>
                                        <path class="st72" d="M116.1,76.4H113c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1h3.1c1.7,0,3.1,1.4,3.1,3.1
				C119.2,75,117.8,76.4,116.1,76.4z"/>
                                        <path class="st72" d="M116.1,58H113c-1.7,0-3.1-1.4-3.1-3.1s1.4-3.1,3.1-3.1h3.1c1.7,0,3.1,1.4,3.1,3.1S117.8,58,116.1,58z"/>
                                        <path class="st72" d="M116.1,94.7H113c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1h3.1c1.7,0,3.1,1.4,3.1,3.1
				C119.2,93.3,117.8,94.7,116.1,94.7z"/>
                                        <path class="st72" d="M67.2,181.2c-0.7,0-1.5-0.3-2-0.8c-1.3-1.1-1.4-3.1-0.2-4.3l36.7-40.6c1.1-1.3,3.1-1.4,4.3-0.2
				c1.3,1.1,1.4,3.1,0.2,4.3l-36.7,40.6C68.9,180.8,68,181.2,67.2,181.2L67.2,181.2z"/>
                                        <path class="st72" d="M73.3,183.3c-0.3,0-0.7-0.1-1-0.2L2.1,158.7c-1.6-0.6-2.4-2.3-1.9-3.9c0.6-1.6,2.3-2.4,3.9-1.9l70.3,24.4
				c1.6,0.6,2.4,2.3,1.9,3.9C75.8,182.5,74.6,183.3,73.3,183.3L73.3,183.3z"/>
                                        <path class="st72" d="M113,134.4c-1.7,0-3.1-1.4-3.1-3.1v-3.1c0-1.7,1.4-3.1,3.1-3.1c1.7,0,3.1,1.4,3.1,3.1v3.1
				C116.1,133.1,114.7,134.4,113,134.4z"/>
                                        <path class="st72" d="M70.3,131.4c-5.1,0-9.2-4.1-9.2-9.2c0-5.1,4.1-9.2,9.2-9.2s9.2,4.1,9.2,9.2
				C79.4,127.3,75.3,131.4,70.3,131.4z M70.3,119.2c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1s3.1-1.4,3.1-3.1
				C73.3,120.5,72,119.2,70.3,119.2z"/>
                                        <path class="st72" d="M61.2,18.3c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3-3.1h0c1.7,0,3.1,1.4,3.1,3.1
				C64.3,17,62.9,18.3,61.2,18.3z"/>
                                        <path class="st72" d="M79.4,18.3h-9.2c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1h9.2c1.7,0,3.1,1.4,3.1,3.1
				C82.5,17,81.1,18.3,79.4,18.3z"/>
                                    </g>
                                </g>
                            </g>
</svg>

                    </div>
                    <h4>One-stop platform</h4>
                    <p>A single platform catering to all your needs and requirements with end to end guidance </p>
                </li>

                <li>
                    <div>


                       
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 148 148.9" style="enable-background:new 0 0 148 148.9;" xml:space="preserve">
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
                                    <path class="st64" d="M69.9,142.8c19,0,33.1-4.8,44.8-13.6c1.4-1.1,2-2.1,1.6-3.9c-1.4-6-2.6-12-3.8-18.1c-0.3-1.4-0.7-2-2.4-1.7
			c-6.3,1-12.5,0.3-18.3-2.3c-12.8-5.5-20.7-17.7-20.6-31.4c0.1-13.7,8.3-25.7,21.1-31.1c1.8-0.8,4.6-0.4,5.2-2.3
			c0.5-1.7-0.6-3.9-0.9-5.9c-0.2-1.5-0.7-2.1-2.4-1.7c-8,1.8-16,3.4-24.1,5.1c-3.1,0.6-4.3-0.2-5-3.3c-1.7-8-3.4-16-5-24.1
			c-0.3-1.5-0.7-1.9-2.3-1.5c-16,3.5-32,6.8-48.1,10.3c-3.6,0.8-4.2,1.8-3.4,5.5c1.9,9.2,3.9,18.3,5.9,27.5
			c5.2,24.3,10.3,48.5,15.5,72.8c0.3,1.2,0.8,2.1,1.7,2.9C42.2,137.1,57,142.6,69.9,142.8z"/>
                                    <g>
                                        <path class="st72" d="M75,148.9c-36.5,0.3-67.2-25.3-73.6-61c-2.2-12.2-1.3-24.3,2.7-36c1-2.8,1.1-5.4,0.5-8.2
				C3.1,37,1.7,30.3,0.3,23.6C-1,17.1,1.8,12.9,8.1,11.5C25.7,7.7,43.2,4,60.8,0.2c0.8-0.2,1.7-0.5,2.5,0.2C65,2,67,1.8,69.2,1.7
				c28.4-1,51.2,9.9,66.6,33.8c14.7,22.7,16,47.1,4.5,71.5c-10.9,23.1-29.6,36.5-54.6,41.1C82,148.8,78.3,149,75,148.9z M69.9,142.8
				c19,0,33.1-4.8,44.8-13.6c1.4-1.1,2-2.1,1.6-3.9c-1.4-6-2.6-12-3.8-18.1c-0.3-1.4-0.7-2-2.4-1.7c-6.3,1-12.5,0.3-18.3-2.3
				c-12.8-5.5-20.7-17.7-20.6-31.4c0.1-13.7,8.3-25.7,21.1-31.1c1.8-0.8,4.6-0.4,5.2-2.3c0.5-1.7-0.6-3.9-0.9-5.9
				c-0.2-1.5-0.7-2.1-2.4-1.7c-8,1.8-16,3.4-24.1,5.1c-3.1,0.6-4.3-0.2-5-3.3c-1.7-8-3.4-16-5-24.1c-0.3-1.5-0.7-1.9-2.3-1.5
				c-16,3.5-32,6.8-48.1,10.3c-3.6,0.8-4.2,1.8-3.4,5.5c1.9,9.2,3.9,18.3,5.9,27.5c5.2,24.3,10.3,48.5,15.5,72.8
				c0.3,1.2,0.8,2.1,1.7,2.9C42.2,137.1,57,142.6,69.9,142.8z M77.1,72.2c0,15.3,12.4,27.7,27.7,27.7c15.3,0,27.8-12.6,27.8-28
				c0-15-12.7-27.6-27.7-27.6C89.5,44.3,77.1,56.7,77.1,72.2z M121.9,122.4c15.5-13.6,26.8-44.1,14.6-73.1
				c-6.6-15.7-17.6-27.3-32.8-34.9c-8.9-4.4-18.2-6.8-28.3-6.5c0.6,0.8,1.4,1.3,2.1,1.8c7.1,4.6,14.1,9.2,21.3,13.7
				c1.6,1,2.4,2.2,2.8,4c0.5,2.9,1.3,5.8,1.8,8.7c0.3,1.6,0.8,2.3,2.5,2.2c2.2,0,4.3,0.3,6.5,0.9c21.3,5.1,32.3,28.2,22.7,47.9
				c-3.3,6.7-8.4,11.8-15.1,15.2c-0.9,0.5-2.2,0.7-1.9,2.2C119.4,110.4,120.7,116.3,121.9,122.4z M8.2,60.8
				c-5.6,12.7,1.2,44.8,11.5,54.1C15.9,96.8,12.1,79,8.2,60.8z"/>
                                        <path class="st72" d="M111.5,75.1c-2.7,0-5.3,0-8,0c-1.2,0-1.8-0.2-1.8-1.6c0.1-7.2,0-14.3,0-21.5c0-2.1,1.2-3.5,3-3.5
				c1.8,0,3,1.2,3,3.4c0,4.9,0.1,9.8,0,14.7c-0.1,2.2,0.7,2.6,2.6,2.5c3-0.2,6.1-0.1,9.1,0c2.3,0,3.7,1.2,3.7,3c0,1.7-1.5,3-3.8,3
				C116.8,75.1,114.1,75.1,111.5,75.1z"/>
                                    </g>
                                    <path class="st72" d="M49.1,33.2l-28.2,6c-1.4,0.3-2.8-0.6-3.1-2l-0.2-0.9c-0.3-1.4,0.6-2.8,2-3.1l28.2-6c1.4-0.3,2.8,0.6,3.1,2
			l0.2,0.9C51.5,31.5,50.6,32.9,49.1,33.2z"/>
                                    <path class="st72" d="M52.4,48.5l-28.2,6c-1.4,0.3-2.8-0.6-3.1-2l-0.2-0.9c-0.3-1.4,0.6-2.8,2-3.1l28.2-6c1.4-0.3,2.8,0.6,3.1,2
			l0.2,0.9C54.7,46.8,53.8,48.2,52.4,48.5z"/>
                                    <path class="st72" d="M55.6,63.8l-28.2,6c-1.4,0.3-2.8-0.6-3.1-2l-0.2-0.9c-0.3-1.4,0.6-2.8,2-3.1l28.2-6c1.4-0.3,2.8,0.6,3.1,2
			l0.2,0.9C58,62.1,57.1,63.5,55.6,63.8z"/>
                                </g>
                            </g>
</svg>




                    </div>
                    <h4>Timely & accurate reports</h4>
                    <p>We provide timely sample pickup and delivery of your reports. </p>
                </li>

                <li>
                    <div>

                        
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 159.7 155.5" style="enable-background:new 0 0 159.7 155.5;" xml:space="preserve">
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
                                        <path class="st64" d="M93.2,28.8c-33.2,0-60.3,27-60.3,60.3s27,60.3,60.3,60.3h49.1l-10.5-13.9l2.1-1.9
				c12.4-11.4,19.6-27.6,19.6-44.5C153.5,55.8,126.5,28.8,93.2,28.8z"/>
                                        <path class="st72" d="M93.2,155.5c-19.6,0-37.9-8.4-50.8-23.6c-8.9-10.5-14.3-23.6-15.4-37.3c-1.6-19.8,5.4-38.7,19.2-52.6
				c12.6-12.6,29.2-19.5,47-19.5s34.4,6.9,47,19.5c12.6,12.6,19.5,29.2,19.5,47c0,9.5-2,18.7-5.8,27.2c-3.2,7.2-7.7,13.7-13.2,19.3
				l-0.5,0.5l11,14.5c1.5,2,0.1,4.9-2.4,4.9H93.2z M93.2,28.8c-33.6,0-60.9,27.7-60.3,61.4c0.6,33,28.3,59.1,61.3,59.1h46.2
				c0.8,0,1.2-0.9,0.8-1.5l-8.8-11.6c-0.3-0.4-0.3-1.1,0.1-1.4l1.4-1.2c12.4-11.4,19.6-27.6,19.6-44.5
				C153.5,55.8,126.5,28.8,93.2,28.8z"/>
                                        <path class="st72" d="M11.3,132.9c-2.6,0-4.1-3-2.5-5.1l10.8-14.3L19,113c-5.5-5.6-10-12.1-13.2-19.3C2,85.1,0,75.9,0,66.5
				c0-17.8,6.9-34.4,19.5-47C32,6.9,48.7,0,66.5,0s34.4,6.9,47,19.5c13.9,13.9,20.8,32.8,19.2,52.6c-1.1,13.7-6.5,26.8-15.4,37.3
				c-12.9,15.2-31.2,23.6-50.8,23.6H11.3z M19.1,126.7h46.4c33,0,60.6-26.1,61.3-59.1c0.6-33.8-26.6-61.4-60.3-61.4
				c-33.2,0-60.3,27-60.3,60.3c0,16.9,7.1,33.1,19.6,44.5l0.7,0.7c0.8,0.7,0.9,1.9,0.2,2.7l-8.3,11
				C17.9,125.9,18.4,126.7,19.1,126.7z"/>
                                        <path class="st35" d="M17.3,126.7h49.1c33.2,0,60.3-27,60.3-60.3S99.7,6.2,66.5,6.2c-33.2,0-60.3,27-60.3,60.3
				c0,16.9,7.1,33.1,19.6,44.5l2.1,1.9L17.3,126.7z"/>
                                    </g>
                                    <polygon class="st64" points="92.3,59.2 74.6,59.2 74.6,41.4 59,41.4 59,59.2 41.2,59.2 41.2,74.8 59,74.8 59,92.6 74.6,92.6
			74.6,74.8 92.3,74.8 		"/>
                                    <path class="st72" d="M61.7,96.2c-3.8,0-6.9-3.1-6.9-6.9V78.8c0-0.4-0.3-0.7-0.7-0.7c-1.7,0-3.1-1.4-3.1-3.1
			c0-1.7,1.4-3.1,3.1-3.1c3.8,0,6.9,3.1,6.9,6.9v10.6c0,0.4,0.3,0.7,0.7,0.7h9.6c0.4,0,0.7-0.3,0.7-0.7V78.8c0-3.8,3.1-6.9,6.9-6.9
			h10.7c0.4,0,0.7-0.3,0.7-0.7v-9.5c0-0.4-0.3-0.7-0.7-0.7H78.8c-3.8,0-6.9-3.1-6.9-6.9V43.6c0-0.4-0.3-0.7-0.7-0.7h-9.6
			c-0.4,0-0.7,0.3-0.7,0.7v10.6c0,3.8-3.1,6.9-6.9,6.9H43.4c-0.4,0-0.7,0.3-0.7,0.7v9.5c0,0.3,0.2,0.6,0.5,0.7c0,0,11.3,0,11.3,0
			c1.7,0.2,2.9,1.8,2.7,3.5C57,76.9,55.7,78,54.2,78c-0.1,0-11.5,0-11.7,0c-3.4-0.4-6-3.4-6-6.8v-9.5c0-3.8,3.1-6.9,6.9-6.9h10.7
			c0.4,0,0.7-0.3,0.7-0.7V43.6c0-3.8,3.1-6.9,6.9-6.9h9.6c3.8,0,6.9,3.1,6.9,6.9v10.6c0,0.4,0.3,0.7,0.7,0.7h10.7
			c3.8,0,6.9,3.1,6.9,6.9v9.5c0,3.8-3.1,6.9-6.9,6.9H78.8c-0.4,0-0.7,0.3-0.7,0.7v10.6c0,3.8-3.1,6.9-6.9,6.9H61.7z"/>
                                </g>
                            </g>
</svg>


                    </div>
                    <h4>Genetic counselling</h4>
                    <p>Being a part of Crysta has its own perks, we like to prove our care for you</p>
                </li>
            </ul>

        </div>
    </div>


</section>
<!--------------------------------------------------------------
 FAQ
---------------------------------------------------------------->
<section class="faq">
    <img style="width: 100%;margin-top: 0rem;" src="/img/services/faq.svg" class="bottom-swoop">
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
                                <p class="faqt"><span>1</span>What is infertility?</p>
                            </a>
                        </div>
                        <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                            <p>A couple maybe said to be having infertility related problems when they have been unable to conceive after 1 year of unprotected sexual intercourse. </p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <a class="card-title"><p class="faqt"><span>2</span>Is infertility caused by the male or the female partner? </p></a>
                        </div>
                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                            <p>Infertility could be caused by either the male or female partner. This can be identified after evaluation and testing by a doctor.</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <a class="card-title"><p class="faqt"><span>3</span>What are some of the risk factors for infertility?</p></a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body"><p>There are many risk factors such as lifestyle choices, genetics or environmental factors: 
							<br>a. Age<br> <br>
							b. Weight<br> <br>
							c. Alcohol consumption <br><br>
							d. Smoking <br><br>
							e. Sexually Transmitted Diseases (STDs) <br><br>
							f. Structural abnormalities in the reproductive system <br><br>
							g. Underlying genetic causes </p></div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            <a class="card-title"><p class="faqt"><span>4</span>I have one baby; can I be infertile now?</p></a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body"> <p>It is possible to have a fertility problem after conceiving and delivering one child. This is known as secondary infertility. 
</p></div>
                        </div>
                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
                        <a class="card-title"><p class="faqt"><span>5</span>Does my age affect my fertility?</p></a>
                    </div>
                    <div id="collapsefive" class="card-body collapse" data-parent="#accordion">
                        <p>Yes, age plays a major role in determining the fertility of both men and women. Nevertheless, correct treatment and guidance may improve your chance of conceiving.</p> 
                    </div>
					
					<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
                        <a class="card-title"><p class="faqt"><span>6</span>When should I seek medical help? </p></a>
                    </div>
                    <div id="collapsefive" class="card-body collapse" data-parent="#accordion">
                        <p>A couple should seek medical help when they are unable to conceive after 1 year of unprotected intercourse or have any known condition which may be interfering with conception. Also couples having a family history of infertility should consult a specialist for the same.   </p>
                    </div></div>
                    
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
                                    <input type="text" placeholder="Mobile" name="mobile" class="input">
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



</body>
</html>
