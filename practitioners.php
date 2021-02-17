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
    <title>Practitioners - Online Patient Care with Crysta E-Module for Practitioners</title>
    <meta name="description" content="Crysta for Gynecologists - Crysta provides e-module for gynecologists to manage patient online. Join our team of specialist gynecologist & get all reproductive health related services.">
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
<header class="gynaecologists-page">
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

    <div class="hero-text hero-text-gynaecologists">
        <h1>For<br>Practitioners</h1>
        <h5>Join our team of specialists to provide best online patient care through the first of its kind E-module</h5>
        <a class="know-btn" href="/contact-us">Contact Us</a>
    </div>
</header>
<!--------------------------------------------------------------
Gynaecologists first fold
---------------------------------------------------------------->
<section class="coun-first gynaec-coun-first">
    <div class="container">
        <div class="row rev">
            <div class="col-sm-4 g-about-img">
                <img src="/img/services/For-Gynaec-about.png" alt="">
            </div>
            <div class="col-sm-8">
                <div class="main-title g-title-content">
                    <h1>Crysta Practitioners</h1>
                        <p>Crysta welcomes  all practitioners to collaborate with us as we provide you with all reproductive health related services. From patient appointments to report delivery, we manage it all.</p>

                </div>
            </div>
        </div>

    </div>


</section>
<!--------------------------------------------------------------
Gynaecologists circles
---------------------------------------------------------------->

<!--------------------------------------------------------------
Gynaecologists services
---------------------------------------------------------------->
<section class="solutions-offered g-services-offered">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-title">
                    <h1>Services Offered</h1>
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
    .st75{clip-path:url(#SVGID_14_);}
    .st76{clip-path:url(#SVGID_16_);}
    .st77{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:square;stroke-linejoin:bevel;stroke-miterlimit:10;}
    .st78{clip-path:url(#SVGID_18_);}
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
                                            <circle class="st47" cx="91.2" cy="91.2" r="91.2"/>
                                            <g>
                                                <defs>
                                                    <circle id="SVGID_17_" cx="91.2" cy="91.2" r="91.2"/>
                                                </defs>
                                                <clipPath id="SVGID_2_">
                                                    <use xlink:href="#SVGID_17_"  style="overflow:visible;"/>
                                                </clipPath>
                                                <g class="st55">
                                                    <path class="st35" d="M121.9,40.7c0,0,4.2,3.6,6.2,16.6s2.8,32.3,2.1,35.9c-0.8,3.6-1.9,6.6-7.4,7.9s-15.5-0.9-16.5,0.9
					c-0.9,1.9,2.4,18.2,2.4,18.2s-8.9,0.8-11.9,0.8c-4.5,0-18-1.2-18-1.2l-21.3,2.3l19-76.4c0,0,28.9-15.1,36.7-11
					S121.9,40.7,121.9,40.7z"/>
                                                    <path class="st10" d="M182.9,236.3c0,0-9.6-66.3-30.5-89.5s-36.3-27-41.6-27.7c-5.3-0.8-59-10.3-82,23.5S-2,204.3-2,204.3
					l1.8,110h184.6L182.9,236.3z"/>
                                                    <path class="st35" d="M108.3,117.2c0,0,22.1,83.6,18.7,150.6L78.6,117.2H108.3z"/>
                                                    <path class="st10" d="M100.9,27.6c0,0-39-6.1-49.2,39.7s-7.1,67.1-7.1,67.1l46.6,4.6c0,0-5.2-37.9-2-53.6
					c1.5-4.6-0.8-7.4-1.5-11s-0.5-9.9,5.6-11.3c3.7-0.8,5.6,3.1,5.6,3.1s6.2-17.5,19.7-28.4C118.6,38,118.9,29.3,100.9,27.6z"/>
                                                </g>
                                            </g>
                                            <g>
                                                <path class="st35" d="M34.2,55.9c1.3,0,2.3-1,2.3-2.3v-6.8h6.8c1.3,0,2.3-1,2.3-2.3c0-1.3-1-2.3-2.3-2.3h-9.1
				c-1.3,0-2.3,1-2.3,2.3v9.1C31.9,54.8,32.9,55.9,34.2,55.9z"/>
                                                <path class="st35" d="M45.6,138c0-1.3-1-2.3-2.3-2.3h-6.8v-6.8c0-1.3-1-2.3-2.3-2.3s-2.3,1-2.3,2.3v9.1c0,1.3,1,2.3,2.3,2.3h9.1
				C44.6,140.3,45.6,139.3,45.6,138z"/>
                                                <path class="st35" d="M148.3,126.6c-1.3,0-2.3,1-2.3,2.3v6.8h-6.8c-1.3,0-2.3,1-2.3,2.3s1,2.3,2.3,2.3h9.1c1.3,0,2.3-1,2.3-2.3
				v-9.1C150.5,127.6,149.5,126.6,148.3,126.6z"/>
                                                <path class="st35" d="M139.1,46.7h6.8v6.8c0,1.3,1,2.3,2.3,2.3c1.3,0,2.3-1,2.3-2.3v-9.1c0-1.3-1-2.3-2.3-2.3h-9.1
				c-1.3,0-2.3,1-2.3,2.3C136.9,45.7,137.9,46.7,139.1,46.7z"/>
                                            </g>
                                        </g>
                                    </g>
</svg>


                            </div>
                            <h4>Digital consultation  via E- module</h4>
                            <p class="box-one-gyns">Crysta telehealth consultations for all your patients with appointment tracking</p>
                        </li>

                        <li>
                            <div>


                                <?xml version="1.0" encoding="utf-8"?>
                                <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 198.8 182.4" style="enable-background:new 0 0 198.8 182.4;" xml:space="preserve">
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
                                            <circle class="st72" cx="101.9" cy="91.2" r="91.2"/>
                                            <path class="st47" d="M45.6,100.3c0.1,1.4,0.8,2.7,1.9,3.5c31.7,25.8,77.2,25.8,108.9,0c1.1-0.9,1.7-2.2,1.9-3.5
			c0.1-1.4-0.3-2.8-1.3-3.9L126.1,61c-1.8-2-4.8-2.4-6.9-0.8c-4.9,4-10.9,6.4-17.2,6.7c-6.3-0.3-12.4-2.6-17.2-6.7
			c-2.2-1.6-5.2-1.3-6.9,0.8L46.9,96.4C46,97.5,45.5,98.9,45.6,100.3L45.6,100.3z"/>
                                            <polyline class="st77" points="1.5,114.7 59,114.7 67.8,91.2 76.8,134.9 89.5,102.4 94.1,123.3 197.3,123.3 		"/>
                                        </g>
                                    </g>
</svg>

                            </div>
                            <h4>Routine diagnosting testing for fertility and pregnancy</h4>
                            <p class="box-two-gyns">Customised affordable test packages to manage fertility and pregnancy care</p>
                        </li>

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
    .st75{clip-path:url(#SVGID_14_);}
    .st76{clip-path:url(#SVGID_16_);}
    .st77{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:square;stroke-linejoin:bevel;stroke-miterlimit:10;}
    .st78{clip-path:url(#SVGID_18_);}
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
                                            <path class="st47" d="M0,91.2C0,40.8,40.8,0,91.2,0s91.2,40.8,91.2,91.2"/>
                                            <g>
                                                <g>
                                                    <path class="st35" d="M65.2,65.7c1.2,1.2,1.9,3.1,1.9,5.6V81h-4.9v-8.9c0-1.3-0.3-2.3-0.8-3c-0.6-0.7-1.3-1-2.4-1
					c-1.2,0-2.1,0.4-2.7,1.1c-0.7,0.7-1,1.8-1,3.3V81h-4.9v-8.9c0-2.7-1.1-4-3.2-4c-1.1,0-2,0.4-2.7,1.1c-0.7,0.7-1,1.8-1,3.3V81
					h-4.9V64.1h4.7v1.9c0.6-0.7,1.4-1.3,2.3-1.6c0.9-0.4,1.9-0.6,3-0.6c1.2,0,2.3,0.2,3.2,0.7c1,0.5,1.7,1.2,2.3,2.1
					c0.7-0.9,1.6-1.6,2.6-2c1.1-0.5,2.2-0.7,3.5-0.7C62.3,63.9,64,64.5,65.2,65.7z"/>
                                                </g>
                                                <g>
                                                    <path class="st35" d="M99.5,80.2c-0.5,0.4-1.1,0.6-1.8,0.8c-0.7,0.2-1.4,0.3-2.2,0.3c-2,0-3.6-0.5-4.7-1.5s-1.6-2.5-1.6-4.5
					v-6.9h-2.6v-3.8h2.6v-4.1h4.9v4.1h4.2v3.8h-4.2v6.9c0,0.7,0.2,1.3,0.5,1.6c0.4,0.4,0.9,0.6,1.6,0.6c0.8,0,1.4-0.2,2-0.6
					L99.5,80.2z"/>
                                                </g>
                                                <g>
                                                    <path class="st35" d="M148.1,64.1L141.9,81h-4.7l-3.8-10.5L129.5,81h-4.7l-6.1-16.9h4.6l4,11.4l4.1-11.4h4.1l4,11.4l4.1-11.4
					H148.1z"/>
                                                </g>
                                                <circle class="st35" cx="50.7" cy="114.3" r="7.8"/>
                                                <circle class="st35" cx="93.7" cy="114.3" r="7.8"/>
                                                <circle class="st35" cx="136.6" cy="114.3" r="7.8"/>
                                            </g>
                                        </g>
                                    </g>
</svg>

                            </div>
                            <h4>Personalised customer management</h4>
                            <p class="bottomg">Management of appointments and tests with regular reminders and automated report updation for hassle-free patient care</p>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

    </div>



</section>
<!--------------------------------------------------------------
 G Choose
---------------------------------------------------------------->
<section class="why-choose cop-choose g-chooses">
    <div class="container">
        <div class="main-title">
            <h1>Why Crysta?</h1>
        </div>
        <div class="why-choose-text">
            <p>From delivering the best in class services with our reputed OBGYNs pan India.
            </p>
        </div>
        <div class="corporates-why-crysta slider">
            <div>
                <div class="row t-box cor-t-box">
                    <div class="col-sm-3"><img src="/img/services/p3.svg" alt="Advance Reproductive Healthcare Platform"></div>
                    <div class="col-sm-9">
                        <div class="c-t-dis">
                            <h4>Innovative and Unique</h4>
                            <p>One-step futuristic reproductive health platform with advanced technology providing telehealth services for your patients anywhere pan India</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row cor-t-box">
                    <div class="col-sm-3"><img src="/img/services/p4.svg" alt="Customized Test Packages"></div>
                    <div class="col-sm-9">
                        <div class="c-t-dis">
                            <h4>Customised test packages</h4>
                            <p>Fertility and pregnancy test packages customised for your patient needs including advanced testing options</p>
                        </div>
                    </div>
                </div>
            </div>
			
			<div>
                <div class="row cor-t-box">
                    <div class="col-sm-3"><img src="/img/services/p6.svg" alt="Genetic Counselling Sessions"></div>
                    <div class="col-sm-9">
                        <div class="c-t-dis">
                            <h4>Genetic counselling sessions</h4>
                            <p>For all your patients to estimate risk and prevent occurrence of any genetic conditions that may be present in the family</p>
                        </div>
                    </div>
                </div>
            </div>
			<div>
                <div class="row cor-t-box">
                    <div class="col-sm-3"><img src="/img/services/p5.svg" alt="Flexiable Time Slot for Patients"></div>
                    <div class="col-sm-9">
                        <div class="c-t-dis">
                            <h4>Flexible time slots</h4>
                            <p>Appointment time slots made available to patients as per your schedule</p>
                        </div>
                    </div>
                </div>
            </div>
			<div>
                <div class="row cor-t-box">
                    <div class="col-sm-3"><img src="/img/services/p1.svg" alt="Virtual Presence"></div>
                    <div class="col-sm-9">
                        <div class="c-t-dis">
                            <h4>Robust Virtual Presence</h4>
                            <p>Through Crysta you can expand virtually and cater to larger clinetele PAN India</p>
                        </div>
                    </div>
                </div>
            </div>
			<div>
                <div class="row cor-t-box">
                    <div class="col-sm-3"><img src="/img/services/p2.svg" alt="Crysta Clinic"></div>
                    <div class="col-sm-9">
                        <div class="c-t-dis">
                            <h4>Crysta Clinic</h4>
                            <p>A complete collaboration of your clinic or institute with Crysta providing the backend technology</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div></section>
<!--------------------------------------------------------------
 FAQ
---------------------------------------------------------------->
<section class="faq">
    <img src="/img/services/faq-g.svg" class="bottom-swoop-corporate">
    <div class="container">
        <div class="main-title">
            <h1>FAQs</h1>
        </div>
        <div class="row">
            <div class="col-sm-4 faq-img">
                <img src="img/FAQ.jpg" alt="FAQ">
            </div>
            <div class="col-sm-8">
                <div id="accordion" class="accordion">
                    <div class="card mb-0">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                            <a class="card-title">
                                <p class="faqt"><span>1</span>What can I do on Crysta?</p>
                            </a>
                        </div>
                        <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                            <p>Crysta being a digital platform allows you to consult through video appointments. It also manages all routine fertility and pregnancy testing, appointment tracking and report delivery for your patients.</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <a class="card-title"><p class="faqt"><span>2</span>How can I become a Crysta Gynaecologist?</p></a>
                        </div>
                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                            <p>You can sign up through our online registration and our Crysta executive will call you for all the necessary formalities</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <a class="card-title"><p class="faqt"><span>3</span>How do I register my clinic with Crysta?</p></a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body"><p>You can submit a query below or contact us at care@redcliffels.com and our Crysta executive will get in touch of you to discuss the benefits and other formalities required for registration.</p></div>
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
                                    <input type="email" placeholder="Email" name="user_email" class="input" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="inputBox">
                                    <input type="tel" placeholder="Mobile" name="mobile" class="input" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="inputBox ">
                                    <input type="text" placeholder="Affiliation" name="child" class="input" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="inputBox">
                                    <input type="text" placeholder="City" name="appointdate"  class="input" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="inputBox">
                                    <textarea name="message" placeholder="Message" id="" class="input"></textarea>
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
    $(".corporates-why-crysta").slick({
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

