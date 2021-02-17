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
    <title>Prenatal Genetic Counselling | Pre & Post Test Genetic Counselling</title>
    <meta name="description" content="Crysta provides genetic counselling to review your family medical history. Our experienced genetic counselor gives you information & advice about genetic tests.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.ico">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#003883">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://crysta.care/genetic-counselling" />
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
<header class="counselling-page">
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

    <div class="hero-text">
        <h1>Genetic<br>Counselling
        </h1>
        <h5>Review your personal and family health history and gauge the risk of genetic diseases being passed on.</h5>
        <a class="know-btn" href="/contact-us">Contact Us</a>
    </div>
</header>
<!--------------------------------------------------------------
Why choose Crysta
---------------------------------------------------------------->
<section class="coun-first">
    <div class="container">
        <div class="coun-first-text">
            <p>There are many health conditions that are passed on from parents to their children over generations and are known as hereditary or genetic diseases. Crysta offers you genetic counselling sessions that assess the risk for such genetic conditions.</p>
        </div>
        <div class="coun-first-logos-item">
            <ul class="coun-first-box">
                <li>
                    <div>

                        <?xml version="1.0" encoding="utf-8"?>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 175 175" style="enable-background:new 0 0 175 175;" xml:space="preserve">
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
    .st58{display:inline;fill:#CACAEA;}
    .st59{display:inline;}
    .st60{fill:#CACAEA;}
    .st61{fill:#EAC1D9;}
    .st62{clip-path:url(#SVGID_6_);}
    .st63{clip-path:url(#SVGID_8_);}
    .st64{clip-path:url(#SVGID_10_);}
    .st65{clip-path:url(#SVGID_12_);}
    .st66{clip-path:url(#SVGID_14_);}
    .st67{clip-path:url(#SVGID_16_);}
    .st68{fill:#EACDC5;}
    .st69{fill:#E6E9ED;}
    .st70{fill:#69326B;}
    .st71{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
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
                                    <circle class="st47" cx="87.5" cy="87.5" r="87.5"/>
                                    <g>
                                        <path class="st35" d="M75.6,143.9l-11.4-17.2l-10.1,17.2H42.7l15.9-25.8L42.2,93.5h11.9l11.1,16.9l9.9-16.9h11.5l-15.8,25.4
				l16.6,25.1H75.6z"/>
                                    </g>
                                    <g>
                                        <path class="st35" d="M75.6,80.8L64.2,63.6L54.2,80.8H42.7l15.9-25.8L42.2,30.4h11.9l11.1,16.9l9.9-16.9h11.5L70.9,55.8
				l16.6,25.1H75.6z"/>
                                    </g>
                                    <g>
                                        <path class="st35" d="M125.3,80.8L114,63.6l-10.1,17.2H92.4l15.9-25.8L92,30.4h11.9l11.1,16.9l9.9-16.9h11.5l-15.8,25.4
				l16.6,25.1H125.3z"/>
                                    </g>
                                    <g>
                                        <path class="st35" d="M137.7,93.5l-17.1,32.8v17.6h-10.1v-17.6L93.3,93.5h11.6l10.7,22.1l10.7-22.1H137.7z"/>
                                    </g>
                                </g>
                            </g>
</svg>



                    </div>
                    <p >Infertility genetic counselling</p> 
                </li>

                <li>
                    <div>


                        <?xml version="1.0" encoding="utf-8"?>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 175 175" style="enable-background:new 0 0 175 175;" xml:space="preserve">
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
    .st58{display:inline;fill:#CACAEA;}
    .st59{display:inline;}
    .st60{fill:#CACAEA;}
    .st61{fill:#EAC1D9;}
    .st62{clip-path:url(#SVGID_6_);}
    .st63{clip-path:url(#SVGID_8_);}
    .st64{clip-path:url(#SVGID_10_);}
    .st65{clip-path:url(#SVGID_12_);}
    .st66{clip-path:url(#SVGID_14_);}
    .st67{clip-path:url(#SVGID_16_);}
    .st68{fill:#EACDC5;}
    .st69{fill:#E6E9ED;}
    .st70{fill:#69326B;}
    .st71{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
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
                                    <circle class="st10" cx="87.5" cy="87.5" r="87.5"/>
                                    <g>
                                        <defs>
                                            <circle id="SVGID_7_" cx="87.5" cy="87.5" r="87.5"/>
                                        </defs>
                                        <clipPath id="SVGID_2_">
                                            <use xlink:href="#SVGID_7_"  style="overflow:visible;"/>
                                        </clipPath>
                                        <g class="st55">
                                            <path class="st35" d="M74.5,25.3c-6.6,2.1-27.7,9.9-41.4,31.7c-3.7,6-13.4,21.9-10.8,43.1c2.1,17.6,11.5,29.2,14.6,32.9
					c8.7,10.5,19.5,15.9,23.9,18.2c1.1,0.6,4,0.8,6.5,3c4,3.4,5.1,8.7,5.3,12.6c-0.6,6.5-1.3,12.9-1.9,19.4
					c22.4,0.8,44.9,1.6,67.3,2.5c0.3-4.2,0.6-8.4,0.9-12.6c0.3-3.4,1-8.4,3.6-13.7c2.7-5.6,5.4-7.3,8.1-11.7
					c4.7-7.5,4.8-15.4,4.8-20.9c0.1-12.3-4.4-21.6-8.5-30.2c-4.4-9.2-5.7-8.4-8.5-15.6c-4.1-10.4-4.2-19.2-4.4-26.9
					c-0.1-6.8-0.2-16.2,3.3-27.3c2.9-9,5.3-10.4,7.9-17.7c2.6-7.1,4.6-17.9,1.4-33.1c-21.5-5.1-42.9-10.2-64.4-15.2
					c0,8.2-2.4,13.3-4.5,16.3c-4.9,7.2-10.7,6.9-19.1,15.9c-4.6,4.9-8.4,9-8,14.4c0.5,7.1,7.9,12.8,14.6,14.7
					C69.1,25.9,72.4,25.6,74.5,25.3z"/>
                                        </g>
                                    </g>
                                    <path class="st47" d="M109.3,94.7C109.3,84,100.7,71,90,71c-7.2,0-13.4,3.9-16.8,9.7C69.9,75,63.7,71,56.5,71
			c-10.7,0-19.3,8.6-19.3,19.3c0,25.9,20.9,44.4,36.1,44.4C87.9,134.8,109.3,114.1,109.3,94.7z"/>
                                </g>
                            </g>
</svg>



                    </div>
                    <p>Prenatal and pediatric counselling</p>
                </li>

                <li>
                    <div>

                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 175 175" style="enable-background:new 0 0 175 175;" xml:space="preserve">
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
    .st58{display:inline;fill:#CACAEA;}
    .st59{display:inline;}
    .st60{fill:#CACAEA;}
    .st61{fill:#EAC1D9;}
    .st62{clip-path:url(#SVGID_6_);}
    .st63{clip-path:url(#SVGID_8_);}
    .st64{clip-path:url(#SVGID_10_);}
    .st65{clip-path:url(#SVGID_12_);}
    .st66{clip-path:url(#SVGID_14_);}
    .st67{clip-path:url(#SVGID_16_);}
    .st68{fill:#EACDC5;}
    .st69{fill:#E6E9ED;}
    .st70{fill:#69326B;}
    .st71{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
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
                                    <circle class="st47" cx="87.5" cy="87.5" r="87.5"/>
                                    <g>
                                        <path class="st35" d="M101.2,150.6c-6.8,0-13.6,0-20.5,0c-2.8,0-3.7-0.8-4.2-3.6c-0.7-4.2-1.6-8.4-3.1-12.4
				c-1.4-3.9-3.5-5.3-7.6-5.6c-4.1-0.3-8,0.4-12.1,0.7c-1.7,0.1-3.3,0.2-5,0c-4.3-0.7-6.7-3.1-7.6-7.3c-0.7-3.3-0.7-6.7-1.2-10
				c-0.2-1.6-0.5-3.1-0.9-4.6c-0.8-2.8-2.4-5-4.8-6.6c-0.8-0.5-1.6-1.1-2.4-1.7c-2.1-1.7-2.4-4.2-0.9-6.3c1.5-2.1,3.4-3.9,5-5.9
				c3.2-4.3,4.3-9.1,3.9-14.4c-0.5-5.9-1.1-11.7,0.3-17.6c2.2-9.1,7.3-16.2,14.6-21.9c8.2-6.3,17.6-9.7,27.8-10.5
				c11.9-1,23.3,0.9,33.9,6.6c9.7,5.3,16.5,13.2,20.3,23.6c2.1,5.8,3.4,11.7,3.6,17.8c0.3,9-2.1,17.2-6.2,25.1
				c-2.3,4.4-5,8.6-8.1,12.5c-4.3,5.5-5.4,11.9-4.7,18.6c0.6,6.4,2.2,12.6,3.9,18.8c0.1,0.5,0.3,1,0.3,1.5c0.1,1.7-0.7,2.8-2.4,3.1
				c-0.5,0.1-1.1,0.1-1.7,0.1C114.8,150.6,108,150.6,101.2,150.6z M132.1,69.1c0-5.9-1.5-11.7-4.2-16.9c-2-3.9-5.1-6.8-8.3-9.5
				c-9-7.5-19.4-11.2-31-11.6c-4.2-0.1-8.3,0.3-12.4,1c-6.9,1.2-13.2,3.6-18.5,8.3c-5.4,4.8-7.9,11-8.9,18
				c-1.2,8.2,2.9,14.7,9.9,18.2c5.6,2.8,11.7,4,17.9,4c7.1,0,13.8,1.3,20.4,4.1c4,1.7,8.1,3.4,12.4,4.4c8,1.9,15.2-2.2,19.4-7.7
				C131.5,77.9,132.2,73.6,132.1,69.1z"/>
                                        <path class="st35" d="M126.4,67c0,9.6-5,15-12.4,15.8c-4.2,0.4-8.1-0.7-11.9-2.2c-4.4-1.7-8.6-3.7-13.2-4.9
				c-2.5-0.6-5.1-0.9-7.7-1C75.6,74.7,70,74.2,64.8,72c-3.9-1.7-7.1-4.1-8.5-8.3c-1-3.1-0.5-6.1,0.3-9.1c2-7.2,7-11.7,13.8-14
				c12.8-4.5,25.5-4.2,37.8,1.8c4.9,2.4,9.5,5.4,12.7,10C124.3,57.5,126.3,63.1,126.4,67z M88.7,45.7c-2.9,0-6.2,0.3-9.5,0.8
				C75.5,47.1,72,48,69,50.2c-3.1,2.3-4.7,5.3-4.4,9.2c0.3,3.8,3,5.7,6.3,7c3.5,1.4,7.2,1.8,10.9,1.8c3.4,0,6.7,0.6,9.9,1.6
				c2.6,0.9,5.1,1.8,7.7,2.6c2.8,0.9,5.6,1.6,8.5,1.6c4.8-0.1,8.8-2.8,9.5-6.9c0.9-5-0.6-9.4-4.6-12.7c-1.3-1.1-2.8-2-4.3-2.9
				C102.5,47.7,96.1,45.6,88.7,45.7z"/>
                                        <path class="st35" d="M86.2,51.4c8.1,0.3,15.3,3.1,21.9,7.7c0.9,0.6,1.4,1.6,1.8,2.7c0.8,2.8-0.6,4.8-3.5,5
				c-2.6,0.1-5.1-0.4-7.5-1.1c-6.8-2-13.7-3.3-20.8-3.8c-0.8,0-1.6-0.2-2.4-0.5c-1.6-0.5-2.7-1.3-3-3.1c-0.3-1.7,0.6-2.9,1.8-3.8
				c1.9-1.5,4.2-2.2,6.6-2.7C82.7,51.6,84.4,51.3,86.2,51.4z"/>
                                    </g>
                                </g>
                            </g>
</svg>

                    </div>
                    <p>Adult onset disorder counselling</p>
                </li>

            </ul>

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
                    <img src="/img/services/12121.png" alt="">
                    <div class=" main-title title-box">
                    <h1>The<br> Need</h1>
                    </div>
                </div>
                </div>
            </div>
        <div class="row c-step-box">
            <div class="col-sm-6">
                <div class="c-g-box">
                    <div class="c-box-content">
                        <p>Early detection of a Genetic disorder that's present in a family</p>
                    </div>
                </div>
                <div class="c-g-box c-second">
                    <div class="c-box-content">
                        <p>Risk assessment for recurrence of the genetic disorder in a family</p>
                    </div>
                </div>

            </div>

            <div class="col-sm-6 mobile-padding-box">
                <div class="c-g-box c-third">
                    <div class="c-box-content">
                        <p>Management and treatment options for the at risk individual</p>
                    </div>
                </div>
                <div class="c-g-box c-four">
                    <div class="c-box-content">
                        <p>Reduce genetic disorder burden in future generations</p>
                    </div>
                </div>
        </div>
        </div>
        </div>
    </div>

    <img style="width: 100%" src="/img/services/Genetic-counselling-footer.svg" class="bottom-swoop">
</section>
<!--------------------------------------------------------------
Timeline
---------------------------------------------------------------->
<section class="c-timeline">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
<div class="main-title">
                    <h1>Timeline</h1>
					<p>&nbsp;&nbsp;</p>
					<p>&nbsp;&nbsp;</p>
					
                </div>
                    <ul class="timeline timeline-centered">
                        <li class="timeline-item">
                            <div class="timeline-info">
                                <span></span>
                            </div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                               <div id="trigger"> <h3 class="timeline-title">Pre Test Counselling</h3></div>
                                <div class="hidden"><span> Detailed  Medical and Family history of the couple via pedigree analysis to advise appropriate genetic tests to rule out any genetic condition that may affect the baby. </span></div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-info">
                                <span></span>
                            </div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <div id="trigger"><h3 class="timeline-title">Test</h3></div>
                                <div class="hidden"><p></p></div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-info">
                                <span></span>
                            </div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <div id="trigger"><h3 class="timeline-title">Post Test Counselling</h3></div>
                                <div class="hidden"><p>Review of reports, interpretation and communicating the report results along with management, treatment and prevention options available. </p></div>
                            </div>
                        </li>

                    </ul>

            </div>
        </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--------------------------------------------------------------
 V Test
---------------------------------------------------------------->
<section class="v-test">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title">
                    <h1>Various Tests</h1>
					<p>&nbsp;</p>
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
                        <div class="c-step-image">
                            <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 183.9 313.9" style="enable-background:new 0 0 183.9 313.9;width: 150px;" xml:space="preserve">
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
    .st58{display:inline;fill:#CACAEA;}
    .st59{display:inline;}
    .st60{fill:#CACAEA;}
    .st61{fill:#EAC1D9;}
    .st62{clip-path:url(#SVGID_6_);}
    .st63{clip-path:url(#SVGID_8_);}
    .st64{clip-path:url(#SVGID_10_);}
    .st65{clip-path:url(#SVGID_12_);}
    .st66{clip-path:url(#SVGID_14_);}
    .st67{clip-path:url(#SVGID_16_);}
    .st68{fill:#EACDC5;}
    .st69{fill:#E6E9ED;}
    .st70{fill:#69326B;}
    .st71{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
</style>
                                <g id="Layer_3" class="st0">
                                </g>
                                <g id="Layer_2">
                                    <g>
                                        <g>
                                            <g>
                                                <path class="st5" d="M121.4,28.4c-2.5,4.7-6.6,11.9-12.7,19.7c-5.9,7.6-10.3,11.4-30.7,29.4c-15.2,13.4-23,20.3-29.7,27.3
					c-8.8,9.2-13.2,13.8-16.6,19.6c-2.9,5-12.1,21.8-7.9,42.9c2.7,13.5,10,22.4,15.6,29.3c3.5,4.4,11.5,11.5,27.2,25.6
					c9.6,8.5,9,7.9,14,12.4c14,12.8,21,19.2,27.3,27.1c7.2,9,13.7,17.3,17,29.9c2.4,9.1,2.2,17,1.7,22.2c-4.9-0.1-9.9-0.2-14.8-0.2
					c-0.2-3.9-0.7-9.5-2.6-15.9c-0.8-2.6-3.5-11.3-12.8-24.2c-8.5-11.7-16.8-19.1-28.4-29.2c-10.1-8.8-10.1-8-17.8-14.7
					c-16.6-14.6-30.1-26.4-37.7-45.6c-6.6-16.4-5.8-30.5-5.6-33.6c0.2-2.7,1.1-14.3,7.6-27.8C19.7,111.7,26,104.9,34.1,96
					c4.9-5.3,10.3-10.1,21.2-19.8c11-9.8,12.3-10.4,21.7-19.1c12.8-11.7,16.7-16.3,19.8-20.3c4.7-6.2,7.9-11.8,9.9-15.6
					c0,0,5.4-10.1,8.7-19.1L130,9.7C130,9.7,126.3,19.8,121.4,28.4z"/>
                                            </g>
                                            <g>
                                                <path class="st5" d="M26.9,21.2c2,3.9,5.2,9.5,9.9,15.6c3.1,4,7,8.6,19.8,20.3c9.5,8.7,10.7,9.3,21.7,19.1
					C89.2,85.9,94.6,90.7,99.5,96c8.2,8.8,14.5,15.6,19.7,26.6c6.4,13.5,7.4,25.2,7.6,27.8c0.2,3.2,1,17.2-5.6,33.6
					c-7.7,19.2-21.2,31-37.7,45.6c-7.6,6.7-7.7,5.9-17.8,14.7c-11.5,10.1-19.9,17.6-28.4,29.2c-9.4,12.9-12.1,21.6-12.8,24.2
					c-1.9,6.4-2.4,12-2.6,15.9c-4.9,0.1-9.9,0.2-14.8,0.2c-0.5-5.2-0.7-13.1,1.7-22.2c3.3-12.6,9.7-20.9,17-29.9
					c6.3-7.9,13.3-14.3,27.3-27.1c5-4.5,4.4-3.9,14-12.4c15.7-14.1,23.7-21.2,27.2-25.6c5.6-6.9,12.9-15.8,15.6-29.3
					c4.3-21.2-5-37.9-7.9-42.9c-3.4-5.8-7.8-10.4-16.6-19.6c-6.7-7-14.5-13.9-29.7-27.3C35.2,59.5,30.9,55.7,25,48.1
					c-6.1-7.8-10.2-14.9-12.7-19.7c0,0-7.1-11.7-12.3-25.1L17.6,0C17.6,0,24.2,16.3,26.9,21.2z"/>
                                            </g>
                                            <path class="st10" d="M34.5,114.9c-0.5-0.7-0.5-3.6,3.3-4.4l9,0.3c4-0.1,8-0.2,12-0.3c10.4,0,20.9,0,32,0c0,0,5.5-0.1,6.9,0.2
				c1.5,0.3,3.4,1.8,2.7,3.1c-1,1.9-6.9,1.7-6.9,1.7c-5.5,0.2-11,0-16.5,0.3c-4,0.2-8,0.3-11.9,0c-2.8-0.2-5.4-0.3-8.2,0
				c-5.6,0.6-11.3,0.3-16.9,0.4C38.2,116.1,35.2,116,34.5,114.9z"/>
                                            <path class="st10" d="M103.2,159.8c-19.4-0.8-38.8,0.1-58.2,0.1c-6.7-0.1-12.7,0.1-19.4,0c-1.7,0-3.8,0-5.3,0
				c-1.5,0-2.8-0.5-3.2-2.1c-0.5-2.2,1.5-3.2,5-3c1.6,0.1,2.2,0.3,3.6,0.3c6,0,12.1-0.1,18.1-0.1c21,0,42,0,63.1-0.1
				c1.5,0,3,0.1,4.5,0.1c0.6,0,1.2,0,1.7,0c1.5,0.1,3,0.3,3.3,2.1c0.3,1.5-1,2.4-2.4,2.7C111.2,160.4,105.9,159.9,103.2,159.8z"/>
                                            <path class="st10" d="M109.1,133c1.9,0.1,3.6,1.8,2.3,3.3c-0.6,0.7-1.6,1.1-2.6,1.2c-7.9,1.5-16.4,0.1-24.5,0.2
				c-1.8,0-3.5,0.1-5.3,0c-2.2-0.2-4.4-0.2-6.6,0c-2.8,0.2-5.6,0-8.5,0c-10.9,0-21.9,0.3-32.8,0.1c-1.4,0-5.7-0.1-5.7-0.1
				c-2.8-0.5-3.8-4,0.7-4.8c1.9-0.3,2.9,0.2,5.9,0c4.7-0.3,9.4-0.8,14.1-0.4c2.3,0.2,4.4,0.2,6.7,0.1c13.1-0.9,26.3,0.2,39.5,0
				c3.4,0,6.8,0.1,10.2,0.2C104.8,132.9,106.9,132.8,109.1,133z"/>
                                            <path class="st10" d="M100.5,43.5c0.5,0.7,0.5,3.6-3.3,4.4l-9-0.3c-4,0.1-8,0.2-12,0.3c-10.4,0-20.9,0-32,0c0,0-5.5,0.1-6.9-0.2
				c-1.5-0.3-3.4-1.8-2.7-3.1c1-1.9,6.9-1.7,6.9-1.7c5.5-0.2,11,0,16.5-0.3c4-0.2,8-0.3,11.9,0c2.8,0.2,5.4,0.3,8.2,0
				c5.6-0.6,11.3-0.3,16.9-0.4C96.8,42.3,99.8,42.3,100.5,43.5z"/>
                                            <path class="st10" d="M25.9,25.4c-1.9-0.1-3.6-1.8-2.3-3.3c0.6-0.7,1.6-1.1,2.6-1.2c7.9-1.5,16.4-0.1,24.5-0.2
				c1.8,0,3.5-0.1,5.3,0c2.2,0.2,4.4,0.2,6.6,0c2.8-0.2,5.6,0,8.5,0c10.9,0,21.9-0.3,32.8-0.1c1.4,0,5.7,0.1,5.7,0.1
				c2.8,0.5,3.8,4-0.7,4.8c-1.9,0.3-2.9-0.2-5.9,0c-4.7,0.3-9.4,0.8-14.1,0.4c-2.3-0.2-4.4-0.2-6.7-0.1c-13.1,0.9-26.3-0.2-39.5,0
				c-3.4,0-6.8-0.1-10.2-0.2C30.2,25.5,28.1,25.5,25.9,25.4z"/>
                                            <path class="st10" d="M104.6,182.6c-1.8-0.2-3.2-0.5-4.9-0.5c-22,0-39.1,0.1-61.1,0.1c-1.6,0-5.3-0.2-6.1,0
				c-1.3,0.4-5.1,0.4-6.3-0.1c-3.2-1.2-3.7-3.5-0.2-4.9c1.4-0.5,2.9,0,4.4,0c24.7,0.1,49.5,0.1,74.2,0.2c1,0,2.2-0.1,3.2,0.1
				c1.5,0.3,2.3,1.4,1.7,3C108.8,182.8,106.5,182.7,104.6,182.6z"/>
                                            <path class="st10" d="M88.4,204.5c-14.2-0.7-28.5-0.6-42.7-0.1c-1.4,0-2.8,0.1-4.2,0c-1.5-0.1-3-0.4-3.3-2.1
				c-0.4-1.7,0.8-2.9,2.3-3c11.9-1,35.2,0,52.9,0c1.6,0.4,2.7,1.2,2.4,3c-0.3,1.8-1.9,2-3.3,2.1C91,204.6,89.7,204.5,88.4,204.5z"/>
                                            <path class="st10" d="M28.9,282.4c1.8,0.2,3.2,0.5,4.9,0.5c22,0,39.1-0.1,61.1-0.1c1.6,0,5.3,0.2,6.1,0c1.3-0.4,5.1-0.4,6.3,0.1
				c3.2,1.2,3.7,3.5,0.2,4.9c-1.4,0.5-2.9,0-4.4,0c-24.7-0.1-49.5-0.1-74.2-0.2c-1,0-2.2,0.1-3.2-0.1c-1.5-0.3-2.3-1.4-1.7-3
				C24.7,282.2,27.1,282.2,28.9,282.4z"/>
                                            <path class="st10" d="M45.2,260.4c14.2,0.7,28.5,0.6,42.7,0.1c1.4,0,2.8-0.1,4.2,0c1.5,0.1,3,0.4,3.3,2.1c0.4,1.7-0.8,2.9-2.3,3
				c-11.9,1-35.2,0-52.9,0c-1.6-0.4-2.7-1.2-2.4-3c0.3-1.8,1.9-2,3.3-2.1C42.5,260.4,43.9,260.4,45.2,260.4z"/>
                                        </g>
                                        <circle class="st54" cx="132.5" cy="138.2" r="51.4"/>
                                        <g>
                                            <defs>
                                                <circle id="SVGID_3_" cx="132.5" cy="138.2" r="51.4"/>
                                            </defs>
                                            <clipPath id="SVGID_2_">
                                                <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                                            </clipPath>
                                            <g class="st55">
                                                <g>
                                                    <path class="st5" d="M161.9-118.9c-6.1,11.6-16.1,29-31.1,48.2c-14.5,18.5-25.2,27.9-75.3,72.1C18.2,34.3-0.8,51.1-17.3,68.3
						c-21.6,22.5-32.3,33.7-40.6,48c-4.4,7.5-14.5,25.9-19.4,50.8c-3,15.8-4,34.2,0.1,54.3c6.6,33,24.4,54.9,38.2,71.9
						c8.7,10.7,28.1,28.2,66.7,62.7c23.4,20.9,22,19.3,34.2,30.5c34.4,31.4,51.6,47.1,67,66.4c17.7,22.2,33.5,42.3,41.6,73.3
						c5.8,22.3,5.4,41.7,4.1,54.5c-12.1-0.2-24.2-0.4-36.3-0.6c-0.4-9.5-1.8-23.2-6.3-38.9c-1.9-6.5-8.5-27.8-31.5-59.3
						c-20.7-28.5-41.2-46.8-69.5-71.6c-24.6-21.7-24.8-19.6-43.6-36c-19.8-17.4-37.8-33.2-53.2-50.3c-16.2-18-29.6-37.3-39.3-61.4
						c-16.1-40.2-14.3-74.7-13.7-82.4c0.4-6.5,2.8-35.1,18.6-68.2C-87.4,85.1-72,68.5-52,46.8c12-13,25.3-24.9,51.8-48.5
						c26.9-24,30.1-25.6,53.2-46.8c31.3-28.6,41-39.9,48.5-49.7c11.6-15.1,19.4-28.8,24.4-38.3c0,0,13.1-24.7,21.2-46.9l35.8,18.7
						C182.9-164.7,173.9-139.9,161.9-118.9z"/>
                                                </g>
                                                <g>
                                                    <path class="st5" d="M-69.7-136.5c4.9,9.5,12.8,23.2,24.4,38.3c7.5,9.8,17.2,21.1,48.5,49.7C26.4-27.3,29.5-25.8,56.4-1.7
						C83,22,96.2,33.8,108.3,46.8c20.1,21.7,35.4,38.3,48.2,65.1c15.8,33.1,18.1,61.7,18.6,68.2c0.5,7.8,2.4,42.2-13.7,82.4
						c-9.6,24.1-23,43.4-39.3,61.4c-15.4,17.1-33.4,32.9-53.2,50.3c-18.7,16.5-18.9,14.3-43.6,36c-28.3,24.8-48.7,43.1-69.5,71.6
						c-22.9,31.5-29.6,52.9-31.5,59.3c-4.6,15.7-5.9,29.3-6.3,38.9c-12.1,0.2-24.2,0.4-36.3,0.6c-1.3-12.8-1.7-32.2,4.1-54.5
						c8-31,23.8-51.1,41.6-73.3c15.4-19.3,32.6-35,67-66.4c12.2-11.1,10.8-9.5,34.2-30.5c38.6-34.5,58-52,66.7-62.7
						c13.7-17,31.5-38.8,38.2-71.9c4-20.1,3.1-38.5,0.1-54.3c-4.8-25-15-43.3-19.4-50.8c-8.2-14.2-19-25.5-40.6-48
						C57.1,51.1,38.1,34.3,0.9,1.5C-49.3-42.8-60-52.1-74.5-70.6c-15-19.2-25-36.6-31.1-48.2c0,0-17.3-28.6-30.1-61.5l43-8.2
						C-92.6-188.5-76.4-148.6-69.7-136.5z"/>
                                                </g>
                                                <path class="st10" d="M-51.1,93.1c-1.1-1.8-1.2-8.8,8.1-10.9l22.1,0.7c9.8-0.1,19.5-0.5,29.3-0.7c25.6,0,51.2,0,78.3,0
					c0,0,13.5-0.3,16.8,0.4c3.8,0.8,8.3,4.4,6.6,7.6c-2.5,4.7-17,4.1-17,4.1c-13.5,0.4-27-0.1-40.5,0.7c-9.7,0.6-19.5,0.7-29.2-0.1
					c-6.8-0.5-13.3-0.7-20.1,0c-13.8,1.4-27.7,0.8-41.5,1.1C-42.1,96-49.4,95.9-51.1,93.1z"/>
                                                <path class="st10" d="M117.2,203.1c-47.5-1.8-95,0.1-142.5,0.2c-16.3-0.2-31.2,0.2-47.5-0.1c-4.2-0.1-9.2,0-12.9,0.1
					c-3.7,0.1-6.9-1.2-7.8-5.2c-1.1-5.5,3.8-7.8,12.2-7.3c4,0.2,5.4,0.7,8.7,0.6c14.8-0.1,29.5-0.2,44.3-0.3
					c51.5-0.1,103-0.1,154.6-0.2c3.7,0.1,7.3,0.2,11,0.3c1.4,0,2.8,0,4.2,0c3.6,0.3,7.2,0.8,8.2,5.1c0.8,3.7-2.4,5.9-5.9,6.7
					C137,204.7,123.8,203.4,117.2,203.1z"/>
                                                <path class="st10" d="M142.3,133.3c5.1,0.5,9.7,7.6,6.3,14c-1.7,3.1-4.4,4.5-7,5.3c-21.4,6.4-44.5,0.3-66.2,0.9
					c-4.8,0.1-9.6,0.6-14.4,0c-6-0.8-11.8-0.8-17.8,0c-7.6,1-15.2,0.2-22.9,0.1c-29.5-0.1-59.2,1.4-88.7,0.6
					c-3.9-0.1-15.5-0.5-15.5-0.5c-7.5-2.1-10.3-17.3,2-20.3c5.2-1.3,7.8,0.7,16-0.2c12.6-1.4,25.4-3.5,38-1.8
					c6.1,0.8,11.9,0.9,18,0.3c35.5-3.7,71.1,0.7,106.7,0.1c9.2-0.2,18.3,0.6,27.5,0.8C130.6,132.8,136.2,132.7,142.3,133.3z"/>
                                                <path class="st10" d="M120.8,258.9c-4.5-0.4-7.7-1.3-11.9-1.3c-53.9,0-95.9,0.2-149.8,0.4c-4,0-13.1-0.5-14.8,0
					c-3.2,1-12.4,1-15.5-0.1c-7.9-2.9-9.2-8.7-0.4-12.1c3.4-1.3,7.2,0,10.8-0.1c60.6,0.2,121.2,0.3,181.8,0.4c2.6,0,5.4-0.3,7.9,0.2
					c3.7,0.8,5.7,3.4,4.3,7.4C131.1,259.4,125.2,259.3,120.8,258.9z"/>
                                                <path class="st10" d="M80.9,312.7c-34.9-1.7-69.8-1.4-104.7-0.2c-3.5,0-6.9,0.1-10.4,0c-3.6-0.2-7.3-1.1-8.2-5.1
					c-1-4.3,2-7.1,5.7-7.5c29.1-2.6,86.4,0,129.5,0c3.8,1,6.6,3,5.8,7.4c-0.8,4.4-4.6,5-8.2,5.2C87.3,312.8,84.1,312.7,80.9,312.7z"
                                                />
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
                                 viewBox="0 0 214.1 270.2" style="enable-background:new 0 0 214.1 270.2;" xml:space="preserve">
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
    .st58{display:inline;fill:#CACAEA;}
    .st59{display:inline;}
    .st60{fill:#CACAEA;}
    .st61{fill:#EAC1D9;}
    .st62{clip-path:url(#SVGID_6_);}
    .st63{clip-path:url(#SVGID_8_);}
    .st64{clip-path:url(#SVGID_10_);}
    .st65{clip-path:url(#SVGID_12_);}
    .st66{clip-path:url(#SVGID_14_);}
    .st67{clip-path:url(#SVGID_16_);}
    .st68{fill:#EACDC5;}
    .st69{fill:#E6E9ED;}
    .st70{fill:#69326B;}
    .st71{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
</style>
                                <g id="Layer_3" class="st0">
                                </g>
                                <g id="Layer_2">
                                    <g>
                                        <path class="st37" d="M37.5,129.6c0,0-1.7-13.2-9.8-26.5S5.2,56.4,4.5,50.2s-1-9.1-3.3-17.7S-0.5,6.9,8.4,2.4s21.5-2.9,22,7.9
			c0.5,10.8-5,31.3-4.5,34.7c0.5,3.3,6.5,23.4,8.4,30.4c1.9,6.9,2.2,21,5.7,23.2c3.6,2.2,9.6,2.4,11.7-1.9s0.5-11.5,0.2-18.9
			c-0.2-7.4,1.2-23,0.8-26.8c-0.4-3.8-5.9-40.2,6.1-45.7S78.4,4.3,81,10s2.6,20.8,1.2,29.4c-1.4,8.6-3.6,20.1-2.6,27.3
			c1,7.2-8.4,40.4-11.7,50.2s-2.4,17,0,22.7c2.4,5.7,13.4,28.7,15.3,37.8c1.9,9.1,3.8,24.6,4.5,33.5c0.7,8.8,3.3,22,5.3,28.2
			c1.9,6.2,5,15.5,1.9,21c-3.1,5.5-12.4,13.6-22,8.4s-15.1-26.8-14.8-31.6c0.2-4.8,0-32.5-0.2-33.7c-0.2-1.2-1.2-13.9-2.9-19.4
			s-6.5-13.9-8.8-13.2c-2.4,0.7-6.5,6.9-8.6,11.5s-1.4,19.6-1.2,22.5c0.2,2.9,5.3,25.3,4.8,33.7c-0.5,8.4,1.4,21.3-5.5,25.8
			s-14.6,6.2-18.9,2.4S10,251,10,241.5s3.3-21.3,3.6-27.7c0.2-6.5,0.2-30.4,3.1-38.5c2.9-8.1,15.8-24.9,17.7-31.1
			C36.3,137.9,37,139.1,37.5,129.6z"/>
                                        <path class="st10" d="M128.1,60.2c-1.5-6.7-0.3-9.8-3.3-17.5c-1.7-4.4-3.3-6.4-5.7-12.9c-2.4-6.5-3.6-9.8-2.6-12.7
			c1.8-5.3,8.8-8.6,14.8-8.1c8.2,0.7,12.9,8.4,14.1,10.5c3.7,6.2,2.3,9.9,4.3,23.2c0.1,0.5,1.6,10.1,4.8,20.6
			C158.3,76,161.9,88,168,88.4c4.6,0.4,9.8-6,11-12c0.5-2.5,0.5-5.8-4.5-16.7c-6.1-13.2-8.4-13.3-10.5-20.3
			c-2-6.5-4.2-19.8,2.2-24.1c5.8-4,15.7,1.7,17,2.4c11.2,6.6,14.6,19.8,17.2,30.1c3.2,12.4,2.7,22.8,2.4,28.2
			c-0.4,7.3-1.5,13.6-2.6,19.8c-3,16.6-5.3,19.8-3.6,26.3c2,7.3,6.1,7,11.2,15.1c3.6,5.6,5.2,11.5,6,43.8c0.4,15.4,0.6,23.1,0.2,28
			c-1.8,27.7-8.9,40.5-11,44c-2.3,3.9-9.7,16.5-16.7,15.3c-2.2-0.4-3.6-1.9-5-3.6c-7.7-8.9-5.3-22.3-5-23.7
			c2-10.2,6.7-9.5,10.8-21.5c3-8.9,2.9-16.7,2.9-23.7c-0.1-9.6-1.6-8.3-2.4-22.7c-0.2-2.9-0.5-10.3-1.7-20.1
			c-0.7-6.2-1.2-8.7-3.1-11.5c-3.1-4.5-9.3-8.5-13.4-6.7c-0.7,0.3-3.1,1.6-4.8,10.5c-1.2,6.4-1,11.5-0.2,22
			c1.1,14,1.6,15.9,1.2,21.3c-0.4,5.5-1.4,7.1-3.1,15.1c-2.7,12.4-2.2,16.4-3.6,23.7c-2.9,15.7-12.2,36-19.6,35.4
			c-5.3-0.4-10.1-11.7-9.8-21.3c0.3-9.6,5.3-11.1,10.8-25.3c5.6-14.5,5.9-27.3,6-34c0.2-11.2-2-10.1-1.7-20.6
			c0.4-11.4,0.8-22.9,8.4-31.8c3-3.5,6.2-5.5,8.4-11c0.7-1.8,2.7-6.9,1.2-12.2c-1.5-5.4-6-8.2-9.3-10.8
			C143,88.3,131.3,74.5,128.1,60.2z"/>
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
                                    Thalassemia Carrier Screening
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
                                    This screening helps to identify if the couple is carrying the same recessive gene mutation. The carriers might be asymptomatic but together they have a 25% chance of passing on the mutation to their baby. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-xs-offset-0 col-sm-offset-1">
                        <div class="c-step-image">
                            <?xml version="1.0" encoding="utf-8"?>
                            <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 279.6 237.7" style="enable-background:new 0 0 279.6 237.7;" xml:space="preserve">
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
    .st58{display:inline;fill:#CACAEA;}
    .st59{display:inline;}
    .st60{fill:#CACAEA;}
    .st61{fill:#EAC1D9;}
    .st62{clip-path:url(#SVGID_6_);}
    .st63{clip-path:url(#SVGID_8_);}
    .st64{clip-path:url(#SVGID_10_);}
    .st65{clip-path:url(#SVGID_12_);}
    .st66{clip-path:url(#SVGID_14_);}
    .st67{clip-path:url(#SVGID_16_);}
    .st68{fill:#EACDC5;}
    .st69{fill:#E6E9ED;}
    .st70{fill:#69326B;}
    .st71{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
</style>
                                <g id="Layer_3" class="st0">
                                </g>
                                <g id="Layer_2">
                                    <g>
                                        <path class="st31" d="M65.8,213.3C57.9,208.4,3.2,173,0.2,112.5c-0.4-8.4-1.6-41.9,21.6-70.1C40.5,19.7,64.6,13,85.2,7.3
			c16-4.4,57-15.1,103.7,2.2c18.1,6.7,71,26.4,86.6,79.9c12.2,42.2-4.7,85.2-29.1,111.2C199.4,250.5,117,245.2,65.8,213.3z"/>
                                        <path class="st51" d="M140.5,60.8c-5.5-0.2-18.1-0.6-26.9,8c-11.4,11.1-8.2,29.4-7.5,33.3c3.3,18.4,16.9,28.8,20.9,31.8
			c5.5,4.2,28.4,20.1,52.7,10c2.4-1,22.3-9.6,25.4-26.9C209.9,90.6,172,61.9,140.5,60.8z"/>
                                        <path class="st51" d="M31.7,35.7c-7.2,8-10.8,11.9-14.4,17.9C15.4,56.7,5.9,72.7,4.1,96.1c-1.6,21.1,3.9,37,6.7,45
			c6.6,18.5,16.1,30.6,21.9,37.8c5.7,7.1,15.3,17.7,29.1,27.6c31.6,22.7,63.9,26.4,75.9,27.6c12.8,1.3,33,3.2,57.5-4.5
			c9-2.8,25.1-7.8,41-21.6c7.1-6.2,11.9-12.5,18-20.5c4.6-5.9,7.6-11.5,13.8-22.8c1.9-3.4,4.3-7.9,3-9.1c-1.1-1-4.5,0.9-4.9,1.1
			c-2.8,1.6-4.3,4-4.5,4.3c-24.3,32.6-25.1,31.3-43.4,45.3c-32,24.4-84.7,12.5-88.6,11.7c-40.1-8.8-63-34.9-71.9-45
			c-17.5-20-24.5-39.1-26.4-44.5c-3.7-10.6-11-32.1-5-55.2c2-7.5,4.1-15.9,10.4-24.4c10-13.5,10.7-14.4,10.7-14.4
			c4.7-6.2,7.2-9.4,6.2-10.7c-1.1-1.6-6.5,0.5-7.7,1C39.7,27.3,35.6,31.5,31.7,35.7z"/>
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
                                 viewBox="0 0 345.6 264.6" style="enable-background:new 0 0 345.6 264.6;" xml:space="preserve">
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
    .st58{display:inline;fill:#CACAEA;}
    .st59{display:inline;}
    .st60{fill:#CACAEA;}
    .st61{fill:#EAC1D9;}
    .st62{clip-path:url(#SVGID_6_);}
    .st63{clip-path:url(#SVGID_8_);}
    .st64{clip-path:url(#SVGID_10_);}
    .st65{clip-path:url(#SVGID_12_);}
    .st66{clip-path:url(#SVGID_14_);}
    .st67{clip-path:url(#SVGID_16_);}
    .st68{fill:#EACDC5;}
    .st69{fill:#E6E9ED;}
    .st70{fill:#69326B;}
    .st71{fill:none;stroke:#DBFE87;stroke-miterlimit:10;}
</style>
                                <g id="Layer_3" class="st0">
                                </g>
                                <g id="Layer_2">
                                    <g>
                                        <path class="st10" d="M318,175.1c-1,20-2,40.1-3,60.1c-4.7-0.3-9.4-1.7-13.5-4.3c-12.3-7.6-13.7-21.4-13.8-23.2
			c-0.8-10,3.2-22.3,14.1-28.7C306.9,176.1,312.6,174.9,318,175.1z"/>
                                        <path class="st10" d="M336.1,228.5c-5.6,4.9-13.4,7.2-21,6.7c1-20,2-40.1,3-60.1c5.7,0.3,11.2,2.2,15.5,5.4
			C348.1,191.1,350,216.4,336.1,228.5z"/>
                                        <path class="st36" d="M121,175.2c-0.5,20.7-0.9,41.3-1.4,62c-0.4,0-0.8,0-1.2,0c-17-0.4-27.5-17.3-28.3-31.1
			c-0.1-1.7-0.7-18.3,12.7-26.9C109.2,175.1,115.8,174.6,121,175.2z"/>
                                        <path class="st10" d="M148.2,207.9c-1,14.6-12.9,29-28.6,29.3c0.4-20.7,0.9-41.3,1.4-62c5,0.6,8.6,2.1,9.3,2.4
			C142,182.9,149.1,195.5,148.2,207.9z"/>
                                        <path class="st36" d="M263.1,61.8c-1.9,0.1-3.9-0.1-6-0.5c-11.7-2.2-17.9-11.1-19.9-14.6c-0.4-0.7-9.2-16.3-0.4-31.5
			c0.7-1.2,8.7-14.5,23.9-15.2c0.4,0,0.7,0,1.1,0C262.2,20.6,262.6,41.2,263.1,61.8z"/>
                                        <path class="st10" d="M282.3,54c-1,0.9-8.4,7.5-19.2,7.9c-0.5-20.6-0.9-41.2-1.4-61.8c12.9-0.1,23.9,9.1,28.1,20.3
			C294.2,31.8,291.5,45.5,282.3,54z"/>
                                        <path class="st36" d="M76.8,1.5c-0.5,20.2-0.9,40.3-1.4,60.5c-9.9,0-19.5-0.1-23-0.1c-7.3,0-6.3-5.4-6.3-5.4l-0.8-42.8
			c0,0-1.1-11.9,3-12.1C50.4,1.5,63.7,1.5,76.8,1.5z"/>
                                        <path class="st10" d="M108.3,13c-0.5,12.5-0.6,43.5-0.6,43.5s0.9,5.1-6.7,5.4C97.1,62,86.1,62,75.5,62c0.5-20.2,0.9-40.3,1.4-60.5
			c13.7,0,27.2,0.1,27.2,0.1S108.8,0.5,108.3,13z"/>
                                        <path class="st36" d="M31.1,175.2c-0.4,20-0.9,39.9-1.3,59.9c-9.5-0.1-18.9-0.2-22-0.1c-6.8,0.2-7.6-6.1-7.6-8.7v-42.1
			c0,0-1.5-9.3,5.5-9.2C9.2,175.1,20.2,175.2,31.1,175.2z"/>
                                        <path class="st36" d="M53.4,235c-1.8,0.2-12.8,0.1-23.7,0.1c0.4-20,0.9-39.9,1.3-59.9c10.7,0,21.2,0,24.4-0.1
			c6.6-0.3,5.5,5.2,5.5,12.8c0,7.6-0.3,32.4,0.1,40.2C61.5,235.8,56.8,234.6,53.4,235z"/>
                                        <path class="st36" d="M220.6,235.3c-10.7,0-21.6-0.1-24.4-0.1c-5.7-0.1-7.6-2.7-7.6-8.2c0-9.9-0.2-41,0-45.5
			c0.2-4.4,4.4-4.9,8.7-4.9c2,0,12.4,0.1,23.2,0.1C220.5,196.3,220.5,215.8,220.6,235.3z"/>
                                        <path class="st10" d="M244.4,235.1c-1.2,0.1-12.4,0.2-23.8,0.1c0-19.5-0.1-39-0.1-58.5c11.6,0.1,23.7,0.1,26.7-0.1
			c5.9-0.4,5.3,5.7,5.3,8.3c0,2.5,0,2.5,0,2.5s-0.6,37.6,0,43.2C253.1,236,246.7,234.9,244.4,235.1z"/>
                                        <g>
                                            <path class="st46" d="M11.8,263.4c0,0,1.7-5.5,2.6-8.5c0.9-3,1.6-5.2,2.2-6.7c0.6-1.5,1.7-6,2.9-6.1s2.3,5.7,2.4,6.7
				s1.8,9.4,2,10.5s0.6,3.3,0.3,4c-0.2,0.8-2.1,0.8-2.2-0.2c-0.1-1-1-6.7-1.4-9.7c-0.4-3-1-5.8-1.4-5.6s-2.1,5-2.3,6.2
				c-0.2,1.3-1.3,6.3-1.3,7.1c0,0.8-0.7,2-0.8,2.3C14.6,263.9,12.3,265.7,11.8,263.4z"/>
                                            <path class="st46" d="M15.6,255.4c0,0,2.5-0.7,3.2-0.8c0.7-0.1,2.6-0.2,3.1-0.2s0.5,0.4,0.4,0.5s-3.1,0.7-3.5,0.8
				c-0.4,0.1-2.9,0.6-3.1,0.6C15.5,256.4,14.3,256.2,15.6,255.4z"/>
                                        </g>
                                        <path class="st46" d="M38.6,259.4c-0.2-1.2-1.9-9.6-2-10.5c-0.2-1-1.3-6.7-2.4-6.7c-1.1,0-2.3,4.6-2.9,6.1
			c-0.6,1.5-1.3,3.6-2.2,6.7c-0.9,3-2.6,8.5-2.6,8.5c0.6,2.3,2.9,0.5,3,0.1c0.2-0.4,0.8-1.6,0.8-2.3c0-0.5,0.5-3.1,0.9-5.1
			c0.8-0.2,2-0.4,2.2-0.4c0.2-0.1,1.2-0.3,2.1-0.4c0.4,3.1,1.1,7.1,1.1,8c0.1,1,1.9,1,2.2,0.2C39.1,262.7,38.8,260.6,38.6,259.4z
			 M33.4,254.6c-0.4,0.1-1.3,0.3-2,0.5c0.1-0.4,0.1-0.7,0.2-1c0.2-1.3,2-6,2.3-6.2c0.4-0.2,1,2.6,1.4,5.6c0,0.3,0.1,0.6,0.1,0.9
			C34.7,254.5,33.8,254.6,33.4,254.6z"/>
                                        <path class="st46" d="M75,83.7c-0.2-1.2-1.9-9.6-2-10.5c-0.2-1-1.3-6.7-2.4-6.7c-1.1,0-2.3,4.6-2.9,6.1c-0.6,1.5-1.3,3.6-2.2,6.7
			c-0.9,3-2.6,8.5-2.6,8.5c0.6,2.3,2.9,0.5,3,0.1c0.2-0.4,0.8-1.6,0.8-2.3c0-0.5,0.5-3.1,0.9-5.1c0.8-0.2,2-0.4,2.2-0.4
			c0.2-0.1,1.2-0.3,2.1-0.4c0.4,3.1,1.1,7.1,1.1,8c0.1,1,1.9,1,2.2,0.2C75.5,87,75.2,84.9,75,83.7z M69.8,79c-0.4,0.1-1.3,0.3-2,0.5
			c0.1-0.4,0.1-0.7,0.2-1c0.2-1.3,2-6,2.3-6.2c0.4-0.2,1,2.6,1.4,5.6c0,0.3,0.1,0.6,0.1,0.9C71.1,78.9,70.2,78.9,69.8,79z"/>
                                        <path class="st46" d="M90.4,85.8c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.3-0.2-1.5-1.8C88,82.9,88,81.8,88,80.7c0.1-0.8,0.1-1.6,0.1-2.2
			c0,0,0,0,0,0l0,0c-0.1-0.9-0.3-1.6-0.5-1.9c-0.7-1-2.3-1-2.3-1s-2.7,0-4.4,1.9s-2.8,3.5-3,5.6c-0.2,2.1,0.3,4,2.1,4.4
			c1.7,0.4,2.8,0.3,5.3-1.4c0.3-0.2,0.6-0.5,0.9-0.8c0.3,1,1.1,1.6,1.9,2c1.1,0.5,2.2,0.2,2.6-0.2C90.9,86.4,90.4,85.8,90.4,85.8z
			 M85.2,83.4c-0.9,1.5-2.9,2.1-4,2.2c-1.2,0.1-2.1-1.2-1.2-3.7c0.9-2.4,3.2-3.8,4.3-4.2c1.1-0.4,1.7,0.5,1.7,0.5
			C86.8,80.9,86.2,81.8,85.2,83.4z"/>
                                        <path class="st46" d="M264.6,85.5c-0.2-1.2-1.9-9.6-2-10.5c-0.2-1-1.3-6.7-2.4-6.7c-1.1,0-2.3,4.6-2.9,6.1
			c-0.6,1.5-1.3,3.6-2.2,6.7c-0.9,3-2.6,8.5-2.6,8.5c0.6,2.3,2.9,0.5,3,0.1s0.8-1.6,0.8-2.3c0-0.5,0.5-3.1,0.9-5.1
			c0.8-0.2,2-0.4,2.2-0.4c0.2-0.1,1.2-0.3,2.1-0.4c0.4,3.1,1.1,7.1,1.1,8c0.1,1,1.9,1,2.2,0.2C265.2,88.8,264.9,86.7,264.6,85.5z
			 M259.5,80.7c-0.4,0.1-1.3,0.3-2,0.5c0.1-0.4,0.1-0.7,0.2-1c0.2-1.3,2-6,2.3-6.2c0.4-0.2,1,2.6,1.4,5.6c0,0.3,0.1,0.6,0.1,0.9
			C260.8,80.6,259.9,80.7,259.5,80.7z"/>
                                        <path class="st46" d="M280.1,87.6c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.3-0.2-1.5-1.8c-0.1-0.9-0.2-2.1-0.2-3.1
			c0.1-0.8,0.1-1.6,0.1-2.2c0,0,0,0,0,0l0,0c-0.1-0.9-0.3-1.6-0.5-1.9c-0.7-1-2.3-1-2.3-1s-2.7,0-4.4,1.9c-1.6,1.9-2.8,3.5-3,5.6
			c-0.2,2.1,0.3,4,2.1,4.4c1.7,0.4,2.8,0.3,5.3-1.4c0.3-0.2,0.6-0.5,0.9-0.8c0.3,1,1.1,1.6,1.9,2c1.1,0.5,2.2,0.2,2.6-0.2
			C280.6,88.2,280.1,87.6,280.1,87.6z M274.9,85.1c-0.9,1.5-2.9,2.1-4,2.2c-1.2,0.1-2.1-1.2-1.2-3.7c0.9-2.4,3.2-3.8,4.3-4.2
			c1.1-0.4,1.7,0.5,1.7,0.5C276.5,82.7,275.8,83.6,274.9,85.1z"/>
                                        <path class="st46" d="M117.4,259.4c-0.2-1.2-1.9-9.6-2-10.5c-0.2-1-1.3-6.7-2.4-6.7c-1.1,0-2.3,4.6-2.9,6.1
			c-0.6,1.5-1.3,3.6-2.2,6.7c-0.9,3-2.6,8.5-2.6,8.5c0.6,2.3,2.9,0.5,3,0.1c0.2-0.4,0.8-1.6,0.8-2.3c0-0.5,0.5-3.1,0.9-5.1
			c0.8-0.2,2-0.4,2.2-0.4c0.2-0.1,1.2-0.3,2.1-0.4c0.4,3.1,1.1,7.1,1.1,8c0.1,1,1.9,1,2.2,0.2C118,262.7,117.7,260.6,117.4,259.4z
			 M112.3,254.6c-0.4,0.1-1.3,0.3-2,0.5c0.1-0.4,0.1-0.7,0.2-1c0.2-1.3,2-6,2.3-6.2c0.4-0.2,1,2.6,1.4,5.6c0,0.3,0.1,0.6,0.1,0.9
			C113.6,254.5,112.7,254.6,112.3,254.6z"/>
                                        <path class="st46" d="M132.9,261.5c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.3-0.2-1.5-1.8c-0.1-0.9-0.2-2.1-0.2-3.1
			c0.1-0.8,0.1-1.6,0.1-2.2c0,0,0,0,0,0l0,0c-0.1-0.9-0.3-1.6-0.5-1.9c-0.7-1-2.3-1-2.3-1s-2.7,0-4.4,1.9s-2.8,3.5-3,5.6
			c-0.2,2.1,0.3,4,2.1,4.4c1.7,0.4,2.8,0.3,5.3-1.4c0.3-0.2,0.6-0.5,0.9-0.8c0.3,1,1.1,1.6,1.9,2c1.1,0.5,2.2,0.2,2.6-0.2
			C133.4,262.1,132.9,261.5,132.9,261.5z M127.7,259.1c-0.9,1.5-2.9,2.1-4,2.2c-1.2,0.1-2.1-1.2-1.2-3.7c0.9-2.4,3.2-3.8,4.3-4.2
			c1.1-0.4,1.7,0.5,1.7,0.5C129.3,256.6,128.6,257.5,127.7,259.1z"/>
                                        <path class="st46" d="M237.1,261.5c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.3-0.2-1.5-1.8c-0.1-0.9-0.2-2.1-0.2-3.1
			c0.1-0.8,0.1-1.6,0.1-2.2c0,0,0,0,0,0l0,0c-0.1-0.9-0.3-1.6-0.5-1.9c-0.7-1-2.3-1-2.3-1s-2.7,0-4.4,1.9c-1.6,1.9-2.8,3.5-3,5.6
			c-0.2,2.1,0.3,4,2.1,4.4c1.7,0.4,2.8,0.3,5.3-1.4c0.3-0.2,0.6-0.5,0.9-0.8c0.3,1,1.1,1.6,1.9,2c1.1,0.5,2.2,0.2,2.6-0.2
			C237.6,262.1,237.1,261.5,237.1,261.5z M231.9,259.1c-0.9,1.5-2.9,2.1-4,2.2c-1.2,0.1-2.1-1.2-1.2-3.7c0.9-2.4,3.2-3.8,4.3-4.2
			c1.1-0.4,1.7,0.5,1.7,0.5C233.5,256.6,232.8,257.5,231.9,259.1z"/>
                                        <path class="st46" d="M222.1,259.4c-0.2-1.2-1.9-9.6-2-10.5c-0.2-1-1.3-6.7-2.4-6.7c-1.1,0-2.3,4.6-2.9,6.1
			c-0.6,1.5-1.3,3.6-2.2,6.7c-0.9,3-2.6,8.5-2.6,8.5c0.6,2.3,2.9,0.5,3,0.1c0.2-0.4,0.8-1.6,0.8-2.3c0-0.5,0.5-3.1,0.9-5.1
			c0.8-0.2,2-0.4,2.2-0.4c0.2-0.1,1.2-0.3,2.1-0.4c0.4,3.1,1.1,7.1,1.1,8c0.1,1,1.9,1,2.2,0.2C222.6,262.7,222.3,260.6,222.1,259.4z
			 M216.9,254.6c-0.4,0.1-1.3,0.3-2,0.5c0.1-0.4,0.1-0.7,0.2-1c0.2-1.3,2-6,2.3-6.2c0.4-0.2,1,2.6,1.4,5.6c0,0.3,0.1,0.6,0.1,0.9
			C218.2,254.5,217.4,254.6,216.9,254.6z"/>
                                        <path class="st46" d="M319.5,261.5c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.3-0.2-1.5-1.8c-0.1-0.9-0.2-2.1-0.2-3.1
			c0.1-0.8,0.1-1.6,0.1-2.2c0,0,0,0,0,0l0,0c-0.1-0.9-0.3-1.6-0.5-1.9c-0.7-1-2.3-1-2.3-1s-2.7,0-4.4,1.9c-1.6,1.9-2.8,3.5-3,5.6
			c-0.2,2.1,0.3,4,2.1,4.4c1.7,0.4,2.8,0.3,5.3-1.4c0.3-0.2,0.6-0.5,0.9-0.8c0.3,1,1.1,1.6,1.9,2c1.1,0.5,2.2,0.2,2.6-0.2
			C320,262.1,319.5,261.5,319.5,261.5z M314.3,259.1c-0.9,1.5-2.9,2.1-4,2.2c-1.2,0.1-2.1-1.2-1.2-3.7c0.9-2.4,3.2-3.8,4.3-4.2
			c1.1-0.4,1.7,0.5,1.7,0.5C315.9,256.6,315.2,257.5,314.3,259.1z"/>
                                        <path class="st46" d="M334.8,261.5c0,0-0.4-0.1-0.7-0.2c-0.3-0.1-1.3-0.2-1.5-1.8c-0.1-0.9-0.2-2.1-0.2-3.1
			c0.1-0.8,0.1-1.6,0.1-2.2c0,0,0,0,0,0l0,0c-0.1-0.9-0.3-1.6-0.5-1.9c-0.7-1-2.3-1-2.3-1s-2.7,0-4.4,1.9c-1.6,1.9-2.8,3.5-3,5.6
			c-0.2,2.1,0.3,4,2.1,4.4c1.7,0.4,2.8,0.3,5.3-1.4c0.3-0.2,0.6-0.5,0.9-0.8c0.3,1,1.1,1.6,1.9,2c1.1,0.5,2.2,0.2,2.6-0.2
			C335.3,262.1,334.8,261.5,334.8,261.5z M329.6,259.1c-0.9,1.5-2.9,2.1-4,2.2c-1.2,0.1-2.1-1.2-1.2-3.7c0.9-2.4,3.2-3.8,4.3-4.2
			c1.1-0.4,1.7,0.5,1.7,0.5C331.2,256.6,330.6,257.5,329.6,259.1z"/>
                                        <path class="st46" d="M226.3,30.5c0,0-42.8,1.7-56,1.9c-13.2,0.2-37.1,0-37.1,0l-20.9,0.1c0,0-0.5-0.4,0.5-0.8
			c1-0.4,69-0.7,75.4-1.1c6.4-0.5,38-1.3,39.4-1.3C229,29.2,228.3,30.5,226.3,30.5z"/>
                                        <g>
                                            <path class="st46" d="M34.2,146.8c0.2,10.5,0.3,21.8,0.3,22.6c0,1.4-1.3,0.8-1.3-1.3c0,0-0.2-9.7-0.5-21.3L34.2,146.8z"/>
                                            <path class="st46" d="M119.2,145c-0.1,10.9-0.3,23.5-0.4,24.4c-0.1,1.4-1.3,0.7-1.3-1.3c0,0,0-10.6,0.1-22.9L119.2,145z"/>
                                            <path class="st46" d="M218.9,143.8c0.1,11.4,0.3,26,0.4,26.9c0.1,1.4,1.3,0.7,1.3-1.3c0,0,0-12.3-0.1-25.7L218.9,143.8z"/>
                                            <path class="st46" d="M316.4,143.7c0.1,10.7,0.3,22.6,0.3,23.5c0.1,1.4,1.3,0.7,1.3-1.3c0,0,0-10.2-0.1-22.2L316.4,143.7z"/>
                                            <path class="st46" d="M38.4,147.2c-1.4,0-2.4,0-3,0c-2.3,0-2.6-0.3-2.7-0.4c0.1-0.2-0.1-0.7,5.7-0.8c0.5,0,51-1,78.9-1.7
				c13.8-0.4,30.7-0.5,47.1-0.6c17.1-0.1,33.3-0.2,44.4-0.6c6.5-0.2,16.5-0.3,30.6-0.3c15.1,0,32.1,0.1,44.5,0.2
				c7.8,0.1,13.9,0.1,17.3,0.1c10,0,16.9,0.1,16.8,0.6c-0.7,0.4-1.8,0.4-4.3,0.6c-0.3,0-1.2,0-4.2,0c-6,0-17.4-0.1-29.3-0.2
				c-12-0.1-24.4-0.2-31.1-0.2c-1.3,0-2.4,0-3.3,0c-3.3,0-11.7,0.2-22.3,0.4c-21.8,0.4-54.7,0.9-70.3,0.9c-0.8,0-3.7,0-4.4,0
				c-14.7,0-33.9,0.7-46.5,1.1c-5.4,0.2-9.7,0.3-12.2,0.4C82,146.9,49.8,147.2,38.4,147.2z"/>
                                        </g>
                                        <path class="st46" d="M170.4,31.6c0,1.3,0,2.4,0,3.3c0,3.3,0,11.7,0.1,22.3c0.1,21.8,0.3,54.7,0.1,70.3c0,0.8-0.1,3.7-0.1,4.4
			c0,4-0.1,8.2,0,12.6l-1.5,0c0-9.1,0-18.8,0.1-28.2c0.1-17.1,0.2-33.3-0.1-44.4c-0.1-6.5-0.1-16.5,0-30.6c0-3.1,0.1-6.4,0.1-9.6
			L170.4,31.6z"/>
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
                                    NIPS
                                </div>
                                <p class="c-how__description-1">
                                    This is short for a non-invasive prenatal test screening, without the risk of miscarriage via DNA testing in mother's blood, the screening helps to check if the fetus has any chromosomal anomaly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <img class="vt-bottom" src="/img/services/vt-bottom.svg">
</section>
<!--------------------------------------------------------------
 C-why crysta side-box
---------------------------------------------------------------->
<section class="c-side-box-text">
    <div class="container">
        <div class="main-title">
            <h1>Why choose Crysta's Genetic Counselling?</h1>
        </div>
        <div class="row left-box">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="svg-box-gen">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 234.23 234.23"><defs><style>.cls-1{fill:#cacaea;}.cls-2{fill:#eac1d9;}.cls-3{fill:#eacdc5;}.cls-4{fill:#e6e9ed;}.cls-5{fill:#fff;}.cls-6{fill:#69326b;}</style></defs><title>ICONS</title><g id="Layer_1" data-name="Layer 1"><rect class="cls-1" width="234.23" height="234.23" rx="15.09"/><path class="cls-2" d="M145.39,49.14H82.64a5.24,5.24,0,0,0-5.23,5.23V159a5.24,5.24,0,0,0,5.23,5.23h62.75a5.25,5.25,0,0,0,5.23-5.23v-2.61a7.85,7.85,0,1,1,0-15.69,7.85,7.85,0,1,1,0-15.69,7.85,7.85,0,1,1,0-15.69,7.84,7.84,0,1,1,0-15.68V54.37A5.25,5.25,0,0,0,145.39,49.14Z"/><path class="cls-3" d="M142.77,164.18,111.4,199,61.72,181.7V96.2a15.67,15.67,0,0,1,15.69,15.69V159a5.24,5.24,0,0,0,5.23,5.23Z"style="fill: #eac1d9;"/><path class="cls-3" d="M153.23,125a7.85,7.85,0,1,1,0,15.69h-2.61a7.85,7.85,0,1,1,0-15.69Z"style="fill: #eac1d9;"/><path class="cls-3" d="M153.23,140.65a7.85,7.85,0,1,1,0,15.69h-2.61a7.85,7.85,0,1,1,0-15.69Z"style="fill: #eac1d9;"/><path class="cls-3" d="M153.23,109.27a7.85,7.85,0,1,1,0,15.69h-2.61a7.85,7.85,0,1,1,0-15.69Z"style="fill: #eac1d9;"/><path class="cls-4" d="M114,145.88a5.23,5.23,0,1,1-5.23,5.23A5.24,5.24,0,0,1,114,145.88Z"/><path class="cls-3" d="M153.23,93.59a7.84,7.84,0,1,1,0,15.68h-2.61a7.84,7.84,0,1,1,0-15.68Z"style="fill: #eac1d9;"/><path class="cls-5" d="M114,83.13A20.92,20.92,0,1,1,93.1,104.05,20.93,20.93,0,0,1,114,83.13Z"/><path class="cls-6" d="M114,127.59a23.53,23.53,0,1,1,23.53-23.53A23.56,23.56,0,0,1,114,127.59Zm0-41.83a18.3,18.3,0,1,0,18.31,18.3A18.32,18.32,0,0,0,114,85.76Z"/><path class="cls-6" d="M114,114.5a2.61,2.61,0,0,1-2.61-2.61V96.2a2.62,2.62,0,0,1,5.23,0v15.69A2.61,2.61,0,0,1,114,114.5Z"/><path class="cls-6" d="M121.86,106.66H106.17a2.62,2.62,0,0,1,0-5.23h15.69a2.62,2.62,0,0,1,0,5.23Z"/><path class="cls-6" d="M77.41,114.5a2.61,2.61,0,0,1-2.61-2.61A13.09,13.09,0,0,0,61.72,98.82a2.62,2.62,0,0,1,0-5.23A18.33,18.33,0,0,1,80,111.89,2.61,2.61,0,0,1,77.41,114.5Z"/><path class="cls-6" d="M61.72,184.3a2.61,2.61,0,0,1-2.61-2.62V96.2a2.62,2.62,0,0,1,5.23,0v85.48A2.62,2.62,0,0,1,61.72,184.3Z"/><path class="cls-6" d="M145.39,166.79H82.64A7.85,7.85,0,0,1,74.8,159V54.37a7.85,7.85,0,0,1,7.84-7.84h62.75a7.85,7.85,0,0,1,7.84,7.84,2.62,2.62,0,0,1-5.23,0,2.61,2.61,0,0,0-2.61-2.61H82.64A2.61,2.61,0,0,0,80,54.37V159a2.62,2.62,0,0,0,2.61,2.62h62.75A2.62,2.62,0,0,0,148,159a2.62,2.62,0,0,1,5.23,0A7.85,7.85,0,0,1,145.39,166.79Z"/><path class="cls-6" d="M150.62,95.88A2.62,2.62,0,0,1,148,93.26V54.37a2.62,2.62,0,0,1,5.23,0V93.26A2.61,2.61,0,0,1,150.62,95.88Z"/><path class="cls-6" d="M150.62,143.27a10.46,10.46,0,0,1,0-20.92,2.62,2.62,0,0,1,0,5.23,5.23,5.23,0,0,0,0,10.46,2.62,2.62,0,0,1,0,5.23Z"/><path class="cls-6" d="M150.62,159a10.46,10.46,0,0,1,0-20.92,2.62,2.62,0,0,1,0,5.23,5.23,5.23,0,0,0,0,10.46,2.62,2.62,0,0,1,0,5.23Z"/><path class="cls-6" d="M153.23,143.26a2.62,2.62,0,0,1,0-5.23,5.23,5.23,0,0,0,0-10.46,2.62,2.62,0,0,1,0-5.23,10.46,10.46,0,0,1,0,20.92Z"/><path class="cls-6" d="M153.23,159a2.62,2.62,0,0,1,0-5.23,5.23,5.23,0,1,0,0-10.46,2.62,2.62,0,0,1,0-5.23,10.46,10.46,0,0,1,0,20.92Z"/><path class="cls-6" d="M153.23,143.26h-2.61a2.62,2.62,0,1,1,0-5.23h2.61a2.62,2.62,0,1,1,0,5.23Z"/><path class="cls-6" d="M153.23,159h-2.61a2.62,2.62,0,1,1,0-5.23h2.61a2.62,2.62,0,1,1,0,5.23Z"/><path class="cls-6" d="M150.62,127.58a10.46,10.46,0,0,1,0-20.92,2.62,2.62,0,0,1,0,5.23,5.23,5.23,0,0,0,0,10.46,2.62,2.62,0,0,1,0,5.23Z"/><path class="cls-6" d="M150.62,111.89a10.46,10.46,0,0,1,0-20.92,2.62,2.62,0,0,1,0,5.23,5.23,5.23,0,0,0,0,10.46,2.62,2.62,0,0,1,0,5.23Z"/><path class="cls-6" d="M153.23,127.57a2.62,2.62,0,0,1,0-5.23,5.23,5.23,0,1,0,0-10.45,2.62,2.62,0,0,1,0-5.23,10.46,10.46,0,1,1,0,20.91Z"/><path class="cls-6" d="M153.23,111.89a2.62,2.62,0,0,1,0-5.23,5.23,5.23,0,1,0,0-10.46,2.62,2.62,0,0,1,0-5.23,10.46,10.46,0,1,1,0,20.92Z"/><path class="cls-6" d="M153.23,111.89h-2.61a2.62,2.62,0,1,1,0-5.23h2.61a2.62,2.62,0,1,1,0,5.23Z"/><path class="cls-6" d="M153.23,96.2h-2.61a2.62,2.62,0,1,1,0-5.23h2.61a2.62,2.62,0,1,1,0,5.23Z"/><path class="cls-6" d="M153.23,127.57h-2.61a2.62,2.62,0,1,1,0-5.23h2.61a2.62,2.62,0,1,1,0,5.23Z"/><path class="cls-6" d="M111.4,201.58a2.59,2.59,0,0,1-1.75-.67,2.62,2.62,0,0,1-.19-3.7l31.37-34.78a2.61,2.61,0,1,1,3.88,3.5l-31.37,34.79a2.62,2.62,0,0,1-1.94.86Z"/><path class="cls-6" d="M116.63,203.4a2.55,2.55,0,0,1-.86-.15L55.64,182.33a2.61,2.61,0,0,1,1.71-4.93l60.14,20.91a2.62,2.62,0,0,1-.86,5.09Z"/><path class="cls-6" d="M150.62,161.57A2.62,2.62,0,0,1,148,159v-2.61a2.62,2.62,0,1,1,5.23,0V159A2.61,2.61,0,0,1,150.62,161.57Z"/><path class="cls-6" d="M114,159a7.85,7.85,0,1,1,7.85-7.84A7.85,7.85,0,0,1,114,159Zm0-10.46a2.62,2.62,0,1,0,2.62,2.62A2.61,2.61,0,0,0,114,148.49Z"/><path class="cls-6" d="M106.25,62.21a2.62,2.62,0,0,1,0-5.23h0a2.62,2.62,0,0,1,0,5.23Z"/><path class="cls-6" d="M121.86,62.21H114A2.62,2.62,0,0,1,114,57h7.85a2.62,2.62,0,0,1,0,5.23Z"/></g></svg>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="c-info">
                        <h3 class="info-title">One stop platform</h3>
                        <p>Connecting Crysta parents to multidisciplinary healthcare specialists, routine testing through an  online E-module</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="svg-box-gen">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 234.23 234.23"><defs><style>.cls-1{fill:#cacaea;}.cls-2{fill:#eac1d9;}.cls-3{fill:#fff;}.cls-4{fill:#69326b;}</style></defs><title>ICONS</title><g id="Layer_1" data-name="Layer 1"><rect class="cls-1" width="234.23" height="234.23" rx="15.09"/><path class="cls-2" d="M100.92,45.79a12.17,12.17,0,0,0-10.19,5.48,17.37,17.37,0,0,1-10,7.29,12.13,12.13,0,0,0-9,12.31,17.31,17.31,0,0,1-3.83,11.79,12.15,12.15,0,0,0,0,15.22,17.32,17.32,0,0,1,3.83,11.79,12.15,12.15,0,0,0,9,12.32,17.33,17.33,0,0,1,10,7.28,12.19,12.19,0,0,0,10.19,5.48,12.32,12.32,0,0,0,4.29-.77,17.33,17.33,0,0,1,12.39,0,12.19,12.19,0,0,0,14.47-4.7,17.36,17.36,0,0,1,10-7.28A12.15,12.15,0,0,0,151,109.67a17.32,17.32,0,0,1,3.83-11.79,12.15,12.15,0,0,0,0-15.22A17.32,17.32,0,0,1,151,70.87a12.13,12.13,0,0,0-8.95-12.31,17.45,17.45,0,0,1-10-7.28,12.18,12.18,0,0,0-14.47-4.71,17.43,17.43,0,0,1-12.4,0A12.09,12.09,0,0,0,100.92,45.79Z"/><path class="cls-3" d="M99.68,115.59a9.07,9.07,0,0,1-5.38-1.78A9,9,0,0,1,91,103.57l1.54-4.75a3.86,3.86,0,0,0-1.42-4.36l-4-2.93A9.16,9.16,0,0,1,92.44,75h5a3.88,3.88,0,0,0,3.71-2.69l1.54-4.75a9.16,9.16,0,0,1,17.43,0l1.54,4.74a3.89,3.89,0,0,0,3.71,2.7h5a9.16,9.16,0,0,1,5.39,16.57l-4,2.94a3.88,3.88,0,0,0-1.42,4.35l1.55,4.75a9.17,9.17,0,0,1-5.89,11.55,9.4,9.4,0,0,1-2.83.44,9.09,9.09,0,0,1-5.39-1.75l-4-2.93a3.89,3.89,0,0,0-4.59,0l-4,2.93A9.07,9.07,0,0,1,99.68,115.59Zm11.71-10.73a9.09,9.09,0,0,1,5.39,1.75l4,2.94a3.9,3.9,0,0,0,6-4.36l-1.54-4.75A9.11,9.11,0,0,1,128.6,90.2l4-2.93a3.9,3.9,0,0,0-2.3-7h-5a9.14,9.14,0,0,1-8.72-6.33l-1.54-4.75a3.89,3.89,0,0,0-3.7-2.7,4.07,4.07,0,0,0-1.2.19,3.9,3.9,0,0,0-2.51,2.51l-1.54,4.74a9.12,9.12,0,0,1-8.7,6.34h-5a3.9,3.9,0,0,0-2.29,7l4,2.93a9.09,9.09,0,0,1,3.33,10.24L96,105.19a3.89,3.89,0,0,0,3.71,5.1,3.91,3.91,0,0,0,2.29-.74l4-2.94A9,9,0,0,1,111.39,104.86Z"/><path class="cls-4" d="M85.89,184.16a2.63,2.63,0,0,1-2.63-2.63V129l-.26-.18a12.21,12.21,0,0,0-3.68-1.7A17.43,17.43,0,0,1,66.49,109.4a12.11,12.11,0,0,0-2.67-8.21,17.42,17.42,0,0,1,0-21.84,12.09,12.09,0,0,0,2.67-8.21A17.43,17.43,0,0,1,79.32,53.47a12.06,12.06,0,0,0,7-5.08,17.5,17.5,0,0,1,20.77-6.75,12.06,12.06,0,0,0,8.64,0,17.52,17.52,0,0,1,20.76,6.76,12.09,12.09,0,0,0,7,5.07,17.42,17.42,0,0,1,12.84,17.67A12.11,12.11,0,0,0,159,79.35a17.42,17.42,0,0,1,0,21.84,12.11,12.11,0,0,0-2.67,8.21,17.42,17.42,0,0,1-12.84,17.67,12.15,12.15,0,0,0-3.67,1.7l-.26.18v52.58a2.67,2.67,0,0,1-.58,1.65,2.64,2.64,0,0,1-2.05,1h0a2.59,2.59,0,0,1-1.66-.59L111.4,164.3,87.55,183.57A2.65,2.65,0,0,1,85.89,184.16Zm25.51-25.88a2.6,2.6,0,0,1,1.65.59L134.28,176v-41.1l-1,.85A17.63,17.63,0,0,1,121.84,140a17.06,17.06,0,0,1-6.12-1.13,12.21,12.21,0,0,0-8.64,0,17.5,17.5,0,0,1-17.57-3.11l-1-.86V176l21.22-17.14A2.65,2.65,0,0,1,111.4,158.28ZM100.92,45.79a12.17,12.17,0,0,0-10.19,5.48,17.37,17.37,0,0,1-10,7.29,12.13,12.13,0,0,0-9,12.31,17.31,17.31,0,0,1-3.83,11.79,12.15,12.15,0,0,0,0,15.22,17.32,17.32,0,0,1,3.83,11.79,12.15,12.15,0,0,0,9,12.32,17.33,17.33,0,0,1,10,7.28,12.19,12.19,0,0,0,10.19,5.48,12.32,12.32,0,0,0,4.29-.77,17.33,17.33,0,0,1,12.39,0,12.19,12.19,0,0,0,14.47-4.7,17.36,17.36,0,0,1,10-7.28A12.15,12.15,0,0,0,151,109.67a17.32,17.32,0,0,1,3.83-11.79,12.15,12.15,0,0,0,0-15.22A17.32,17.32,0,0,1,151,70.87a12.13,12.13,0,0,0-8.95-12.31,17.45,17.45,0,0,1-10-7.28,12.18,12.18,0,0,0-14.47-4.71,17.43,17.43,0,0,1-12.4,0A12.09,12.09,0,0,0,100.92,45.79Z"/></g></svg>

                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="c-info">
                            <h3 class="info-title">Certified Genetic Counselors</h3>
                            <p>BGCI certified genetic counselors to help you understand the risk of genetic disorders in your family</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="svg-box-gen">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 234.23 234.23"><defs><style>.cls-1{fill:#cacaea;}.cls-2{fill:#69326b;}.cls-3{fill:#eacdc5;}</style></defs><title>ICONS</title><g id="Layer_1" data-name="Layer 1"><rect class="cls-1" width="234.23" height="234.23" rx="15.09"/><path class="cls-2" d="M103.5,116.18,119.8,97c6-7.1,12.06-14.22,18.14-21.3a8.48,8.48,0,0,1,10.67-2.18c4.66,2.53,7,6.73,5.75,11a11.39,11.39,0,0,1-2.19,3.91c-3.45,4.21-7,8.33-10.33,12.23,2.18,2.07,4.56,3.83,6.28,6.09,1.95,2.56,1.29,5.6.09,8.41,8.21,4.9,9.6,8.67,5.85,15.59,1.46,1.09,3,2.07,4.34,3.25,3.71,3.24,4.3,7.89,1.36,11.8a98.2,98.2,0,0,1-37,30.51,12.44,12.44,0,0,0-3.73,2.8c-2.56,2.79-4.92,5.76-7.4,8.63-1.66,1.92-2.66,2-4.58.33q-16.5-14.31-33-28.64c-1.92-1.67-2-2.61-.31-4.59,2.38-2.85,4.85-5.63,7.17-8.52a3.36,3.36,0,0,0,.68-2.39c-2.29-13.27-1.6-26.59-.73-39.92.12-2,.29-3.93.37-5.89.19-5.34,3.83-8.93,9.51-9.36a9.08,9.08,0,0,1,9.63,7.81c1,5.68,1.74,11.38,2.6,17.07C103.13,114.36,103.29,115.06,103.5,116.18ZM109,183.4c2.34-2.74,4.45-5.43,6.79-7.89a15.23,15.23,0,0,1,4.42-3.33c14.29-6.61,25.86-16.49,35.39-28.89,1.66-2.15,1.48-3.91-.33-5.64-2.65-2.53-4.22-2.81-6.51-1-1.22,1-2.41,1.42-3.62.23s-.77-2.59.28-3.81q2.16-2.48,4.29-5c1.88-2.24,1.95-4.08.25-5.82-2.62-2.7-4.36-3-6.87-1.05-1.18.91-2.34,1.2-3.46.14s-.92-2.44.09-3.63a29.1,29.1,0,0,0,3.72-4.56c.64-1.16,1-3.1.48-4.13-1.82-3.44-4.61-3.81-7.92-1.8-.75.45-2.52.45-3-.08s-.4-2.08-.33-3.16c0-.43.61-.83,1-1.23q7.37-8.67,14.74-17.31c1.36-1.58,2.05-3.24.78-5.15-2.5-3.75-5.56-3.91-8.48-.49q-18.26,21.45-36.55,42.87a3.77,3.77,0,0,1-3,1.3c-.82-.23-1.66-1.67-1.83-2.69-1.3-7.92-2.42-15.87-3.64-23.8a4.26,4.26,0,0,0-5-3.88C88,93.85,86.3,95.43,86.15,98c-.37,6.36-.83,12.71-1.08,19.06-.37,9-.35,18,1.63,26.93a4.56,4.56,0,0,1-1.16,4.52c-2.41,2.68-4.69,5.47-7.11,8.32Z"style="fill: #69326b;"/><path class="cls-2" d="M112.19,61.56c0,4.46,0,8.92,0,13.38,0,1.63-.43,3-2.33,2.89s-2.2-1.33-2.19-2.85V47.77c0-1.54.52-2.78,2.26-2.79s2.26,1.18,2.26,2.74C112.18,52.34,112.19,57,112.19,61.56Z"style="fill: #69326b;"/><path class="cls-2" d="M119.89,79.22c-2.23,0-3.3-1.71-2.5-3.2a7.1,7.1,0,0,1,1.32-1.54q9.14-9.15,18.29-18.29c.32-.32.62-.86,1-.91,1-.11,2.43-.41,3,.1s.53,2.09.16,2.93S139.6,60,138.8,60.78q-8.51,8.5-17,17A14.61,14.61,0,0,1,119.89,79.22Z"style="fill: #69326b;"/><path class="cls-2" d="M80.32,54.27a16.23,16.23,0,0,1,2.1,1.43c6.44,6.4,12.84,12.83,19.27,19.24,1.08,1.08,1.69,2.29.49,3.55s-2.57.78-3.73-.38C92,71.69,85.6,65.3,79.25,58.81A3.67,3.67,0,0,1,78.47,56C78.57,55.4,79.63,54.9,80.32,54.27Z"style="fill: #69326b;"/><path class="cls-3" d="M109,183.4l-30.6-26.58c2.42-2.85,4.7-5.64,7.11-8.32A4.56,4.56,0,0,0,86.7,144c-2-8.88-2-17.9-1.63-26.93.25-6.35.71-12.7,1.08-19.06.15-2.56,1.83-4.14,4.62-4.35a4.26,4.26,0,0,1,5,3.88c1.22,7.93,2.34,15.88,3.64,23.8.17,1,1,2.46,1.83,2.69a3.77,3.77,0,0,0,3-1.3q18.35-21.37,36.55-42.87c2.92-3.42,6-3.26,8.48.49,1.27,1.91.58,3.57-.78,5.15q-7.4,8.63-14.74,17.31c-.35.4-.94.8-1,1.23-.07,1.08-.25,2.49.33,3.16s2.21.53,3,.08c3.31-2,6.1-1.64,7.92,1.8.54,1,.16,3-.48,4.13a29.1,29.1,0,0,1-3.72,4.56c-1,1.19-1.32,2.47-.09,3.63s2.28.77,3.46-.14c2.51-1.94,4.25-1.65,6.87,1.05,1.7,1.74,1.63,3.58-.25,5.82q-2.13,2.53-4.29,5c-1,1.22-1.6,2.52-.28,3.81s2.4.76,3.62-.23c2.29-1.86,3.86-1.58,6.51,1,1.81,1.73,2,3.49.33,5.64-9.53,12.4-21.1,22.28-35.39,28.89a15.23,15.23,0,0,0-4.42,3.33C113.48,178,111.37,180.66,109,183.4Z"style="fill: #eac1d9;"/></g></svg>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="c-info">
                            <h3 class="info-title">Ease of Use</h3>
                            <p>Easy to use platform for online pre-test and post-test counselling sessions</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="svg-box-gen">

                            <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 234.23 234.23"><defs><style>.cls-1{fill:#cacaea;}.cls-2{fill:#eac1d9;}.cls-3{fill:#e6e9ed;}.cls-4{fill:#69326b;}</style></defs><title>ICONS</title><g id="Layer_1" data-name="Layer 1"><rect class="cls-1" width="234.23" height="234.23" rx="15.09"/><path class="cls-2" d="M164.13,183.86h-94a9.11,9.11,0,0,1-7.86-13.73l17.46-29.74s0,0,0,0a67.79,67.79,0,0,0,38.08-1.09,63.35,63.35,0,0,1,35.45-1l0,0L172,170.13a9.11,9.11,0,0,1-7.86,13.73Z"/><path class="cls-3" d="M130.42,167.71a8.41,8.41,0,1,1,8.4-8.41h0A8.42,8.42,0,0,1,130.42,167.71Z"/><path class="cls-3" d="M99.54,164.69a4.12,4.12,0,1,1,4.12-4.12h0A4.13,4.13,0,0,1,99.54,164.69Z"/><path class="cls-4" d="M95.74,45.81s0,0,0,0h.38A11,11,0,0,0,85,55.65,10.76,10.76,0,0,0,95.74,67.38h0s0,0,0,0v36.64h0L76.67,136.54,58.31,167.81a13.69,13.69,0,0,0,11.8,20.62h94a13.69,13.69,0,0,0,11.8-20.61h0l-19.19-32.67L138.5,104.05h0V67.4a0,0,0,0,1,0,0h-.09a11,11,0,0,0,11.08-9.8,10.77,10.77,0,0,0-10.72-11.74h-.27a0,0,0,0,1,0,0Zm38.18,21.56v37.52a2.28,2.28,0,0,0,.78,1.72l15.39,26.21a0,0,0,0,1,0,0,67.84,67.84,0,0,0-33.64,2.08,63.16,63.16,0,0,1-34.24,1.32,0,0,0,0,1,0,0l17.38-29.6a2.3,2.3,0,0,0,.77-1.72V67.37l0-2.46a2,2,0,0,0-1.93-2l-2.67-.11a6.2,6.2,0,1,1,0-12.4H138.5a6.37,6.37,0,0,1,6.48,6,6.2,6.2,0,0,1-6.19,6.37l-2.91.11a2,2,0,0,0-1.94,2Zm30.21,116.49h-94a9.11,9.11,0,0,1-7.86-13.73l17.46-29.74s0,0,0,0a67.79,67.79,0,0,0,38.08-1.09,63.35,63.35,0,0,1,35.45-1l0,0L172,170.13a9.11,9.11,0,0,1-7.86,13.73Z"/><path class="cls-4" d="M130.42,146.33a13,13,0,1,0,13,13h0A13,13,0,0,0,130.42,146.33Zm0,21.38a8.41,8.41,0,1,1,8.4-8.41h0A8.42,8.42,0,0,1,130.42,167.71Z"/><path class="cls-4" d="M99.54,151.88a8.69,8.69,0,1,0,8.69,8.69h0A8.71,8.71,0,0,0,99.54,151.88Zm0,12.81a4.12,4.12,0,1,1,4.12-4.12h0A4.13,4.13,0,0,1,99.54,164.69Z"/></g></svg>

                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="c-info">
                            <h3 class="info-title">In-house labs</h3>
                            <p>State of the art In-house accredited labs for genetic testing, ease of sample collection  with on-time online reports </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="svg-box-gen">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 234.23 234.23"><defs><style>.cls-1{fill:#cacaea;}.cls-2{fill:#eacdc5;}.cls-3{fill:#69326b;}</style></defs><title>ICONS</title><g id="Layer_1" data-name="Layer 1"><rect class="cls-1" width="234.23" height="234.23" rx="15.09"/><path class="cls-2" d="M133.18,149.7a1.94,1.94,0,0,1,1.38.57,2,2,0,0,1,.56,1.38,1.93,1.93,0,0,1-.57,1.37l-2.62,2.62a10.6,10.6,0,0,1-1.77,1.42l-1,.68,11.33,11.31L169,140.5l-11-10.95-2.7,2.7a1.95,1.95,0,0,1-2.75-2.76l6.64-6.63a5.34,5.34,0,0,0-7.55-7.54l-2.56,2.57a2,2,0,0,1-1.38.56,1.94,1.94,0,0,1-1.37-3.31l5.14-5.15a5.35,5.35,0,0,0,0-7.54,5.36,5.36,0,0,0-7.56,0l-3,3A1.95,1.95,0,0,1,137.7,104a2,2,0,0,1,.57-1.37l3-2.94,2.58-2.59a5.34,5.34,0,0,0-7.53-7.56l-3,3a1.94,1.94,0,0,1-2.75,0,1.94,1.94,0,0,1,0-2.75l5.55-5.53a5.35,5.35,0,0,0,0-7.55,5.29,5.29,0,0,0-3.77-1.55,6.13,6.13,0,0,0-.74,0l-.23,0a5.34,5.34,0,0,0-2.82,1.47l-9,9,.42.68a9.22,9.22,0,0,1-7.88,14h-1l-.07,1a9.19,9.19,0,0,1-9.22,9.28h-1l-.07,1A9.2,9.2,0,0,1,91.49,121h-1l-.07,1a9.23,9.23,0,0,1-14,7.94l-.67-.41L64.81,140.37,93.4,168.92,105,157.36c1.69-1.73,4.09-2.5,7.78-2.5,1.4,0,2.86.1,4.27.2s3,.2,4.39.2c2.51,0,5.67-.27,7.77-2.37l2.63-2.62A1.9,1.9,0,0,1,133.18,149.7Z"/><path class="cls-2" d="M78.23,113.77a5.32,5.32,0,0,0-3.78,9.09l3,3A5.34,5.34,0,0,0,85,118.28l-3-3A5.33,5.33,0,0,0,78.23,113.77Z"/><path class="cls-2" d="M83.36,98.31a5.34,5.34,0,0,0-3.78,9.1l8.13,8.12a5.37,5.37,0,0,0,7.55,0,5.35,5.35,0,0,0,0-7.54l-8.15-8.15A5.37,5.37,0,0,0,83.36,98.31Z"/><path class="cls-2" d="M91.08,85.44a5.33,5.33,0,0,0-3.78,9.1L98,105.24a5.34,5.34,0,0,0,7.56-7.55L94.86,87A5.3,5.3,0,0,0,91.08,85.44Z"/><path class="cls-2" d="M98.79,72.56A5.34,5.34,0,0,0,95,81.66l13.31,13.28a5.33,5.33,0,0,0,8.15-6.81l-.22-.32-.37-.09c-3.48-.84-7-4-8-5-1.39-1.33-4.73-4.85-5.63-8.63l-.09-.38-.33-.22A5.31,5.31,0,0,0,98.79,72.56Z"/><path class="cls-2" d="M105.92,72.78c.33,2,2.1,4.72,4.61,7.12a20,20,0,0,0,4.85,3.52l.64.31,9.51-9.51-14.66-2.78a18,18,0,0,0-3.11-.35,4.54,4.54,0,0,0-1.13.11l-.75.18,0,.78c0,.1,0,.23,0,.4l0,.18Z"/><path class="cls-3" d="M116.85,60.19a1.94,1.94,0,0,1-1.94-1.95V45.09a1.95,1.95,0,1,1,3.89,0V58.24A2,2,0,0,1,116.85,60.19Z"/><path class="cls-3" d="M83.85,191.09a8.83,8.83,0,0,1-6.25-2.57L71.09,182a2,2,0,0,1-.57-1.38,1.95,1.95,0,0,1,2-1.94,1.91,1.91,0,0,1,1.37.57l6.51,6.51a4.9,4.9,0,0,0,3.49,1.44,5,5,0,0,0,3.51-1.45l5.21-5.2a5,5,0,0,0,.2-6.77l-.13-.15-.19-.09a1.87,1.87,0,0,1-.94-1l-.07-.16L61.27,142.33l-.16-.08a1.79,1.79,0,0,1-.56-.38,3.15,3.15,0,0,1-.24-.3l-.13-.19-.2-.12a5,5,0,0,0-6,.74l-5.22,5.2a5,5,0,0,0,0,7l6.51,6.5a1.91,1.91,0,0,1,.57,1.37,1.94,1.94,0,0,1-.57,1.38,1.91,1.91,0,0,1-1.37.57,1.94,1.94,0,0,1-1.38-.57l-6.5-6.5a8.85,8.85,0,0,1,0-12.49l5.21-5.2a8.83,8.83,0,0,1,10-1.73l.64.3,11-11-1.19-1.18a9.23,9.23,0,0,1,3.54-15.25l1.26-.43-.75-1.09a9.22,9.22,0,0,1,5.71-14.23l1.07-.22-.31-1a9.54,9.54,0,0,1-.36-2.6,9.21,9.21,0,0,1,7.32-9l1.06-.22-.3-1a9.43,9.43,0,0,1-.37-2.59,9.2,9.2,0,0,1,9.22-9.21,9.3,9.3,0,0,1,3.18.56l.66.24.45-.53a4.25,4.25,0,0,1,.36-.37,6.22,6.22,0,0,1,4.39-1.38,20.85,20.85,0,0,1,3.76.42l19.6,3.71h.15a8.21,8.21,0,0,1,1,0,9.2,9.2,0,0,1,8.85,11.8l-.31,1,1.07.22a9.22,9.22,0,0,1,6.95,11.61l-.3,1,1.07.22a9.21,9.21,0,0,1,7.32,9,9.06,9.06,0,0,1-.37,2.59l-.3,1,1.07.22a9.06,9.06,0,0,1,4.62,2.5,9.21,9.21,0,0,1,0,13l-1.19,1.19,11.07,11,.66-.36a8.83,8.83,0,0,1,4.25-1.08A8.73,8.73,0,0,1,183,139l5.21,5.19a8.84,8.84,0,0,1,0,12.49l-31.62,31.58a8.85,8.85,0,0,1-12.49,0L138.93,183a8.85,8.85,0,0,1-1.5-10.48l.36-.66-13-13-.48.05a24.59,24.59,0,0,1-3,.16c-1.59,0-3.2-.12-4.62-.22s-2.75-.19-4-.19c-2.56,0-4.1.41-5,1.33L96.12,171.7l.42.67a8.87,8.87,0,0,1-1.24,10.94l-5.21,5.21A8.81,8.81,0,0,1,83.85,191.09Zm92.94-50.79a4.91,4.91,0,0,0-3.5,1.44l-31.62,31.57a4.95,4.95,0,0,0,0,7l5.22,5.21a5,5,0,0,0,7,0l31.62-31.57a5,5,0,0,0,0-7l-5.21-5.19A4.92,4.92,0,0,0,176.79,140.3Zm-43.61,9.4a1.94,1.94,0,0,1,1.38.57,2,2,0,0,1,.56,1.38,1.93,1.93,0,0,1-.57,1.37l-2.62,2.62a10.6,10.6,0,0,1-1.77,1.42l-1,.68,11.33,11.31L169,140.5l-11-10.95-2.7,2.7a1.95,1.95,0,0,1-2.75-2.76l6.64-6.63a5.34,5.34,0,0,0-7.55-7.54l-2.56,2.57a2,2,0,0,1-1.38.56,1.94,1.94,0,0,1-1.37-3.31l5.14-5.15a5.35,5.35,0,0,0,0-7.54,5.36,5.36,0,0,0-7.56,0l-3,3A1.95,1.95,0,0,1,137.7,104a2,2,0,0,1,.57-1.37l3-2.94,2.58-2.59a5.34,5.34,0,0,0-7.53-7.56l-3,3a1.94,1.94,0,0,1-2.75,0,1.94,1.94,0,0,1,0-2.75l5.55-5.53a5.35,5.35,0,0,0,0-7.55,5.29,5.29,0,0,0-3.77-1.55,6.13,6.13,0,0,0-.74,0l-.23,0a5.34,5.34,0,0,0-2.82,1.47l-9,9,.42.68a9.22,9.22,0,0,1-7.88,14h-1l-.07,1a9.19,9.19,0,0,1-9.22,9.28h-1l-.07,1A9.2,9.2,0,0,1,91.49,121h-1l-.07,1a9.23,9.23,0,0,1-14,7.94l-.67-.41L64.81,140.37,93.4,168.92,105,157.36c1.69-1.73,4.09-2.5,7.78-2.5,1.4,0,2.86.1,4.27.2s3,.2,4.39.2c2.51,0,5.67-.27,7.77-2.37l2.63-2.62A1.9,1.9,0,0,1,133.18,149.7ZM78.23,113.77a5.32,5.32,0,0,0-3.78,9.09l3,3A5.34,5.34,0,0,0,85,118.28l-3-3A5.33,5.33,0,0,0,78.23,113.77Zm5.13-15.46a5.34,5.34,0,0,0-3.78,9.1l8.13,8.12a5.37,5.37,0,0,0,7.55,0,5.35,5.35,0,0,0,0-7.54l-8.15-8.15A5.37,5.37,0,0,0,83.36,98.31Zm7.72-12.87a5.33,5.33,0,0,0-3.78,9.1L98,105.24a5.34,5.34,0,0,0,7.56-7.55L94.86,87A5.3,5.3,0,0,0,91.08,85.44Zm7.71-12.88A5.34,5.34,0,0,0,95,81.66l13.31,13.28a5.33,5.33,0,0,0,8.15-6.81l-.22-.32-.37-.09c-3.48-.84-7-4-8-5-1.39-1.33-4.73-4.85-5.63-8.63l-.09-.38-.33-.22A5.31,5.31,0,0,0,98.79,72.56Zm7.13.22c.33,2,2.1,4.72,4.61,7.12a20,20,0,0,0,4.85,3.52l.64.31,9.51-9.51-14.66-2.78a18,18,0,0,0-3.11-.35,4.54,4.54,0,0,0-1.13.11l-.75.18,0,.78c0,.1,0,.23,0,.4l0,.18Z"/><path class="cls-3" d="M79.77,58.56A1.91,1.91,0,0,1,78.4,58L67.65,47.27a1.94,1.94,0,0,1,0-2.75A1.9,1.9,0,0,1,69,44a1.94,1.94,0,0,1,1.38.57L81.14,55.24a1.94,1.94,0,0,1-1.37,3.32Z"/><path class="cls-3" d="M153.94,58.56a1.94,1.94,0,0,1-1.38-.57,2,2,0,0,1,0-2.75L163.3,44.52a1.94,1.94,0,0,1,1.38-.57,1.95,1.95,0,0,1,1.94,1.94,1.94,1.94,0,0,1-.57,1.38L155.31,58A1.91,1.91,0,0,1,153.94,58.56Z"/><path class="cls-3" d="M62.64,173a1.89,1.89,0,0,1-1.35-.55,2,2,0,0,1,0-2.76,2,2,0,0,1,1.39-.58,1.92,1.92,0,0,1,1.36.56,1.93,1.93,0,0,1,0,2.75A1.91,1.91,0,0,1,62.64,173Z"/><path class="cls-3" d="M142.48,144.3a1.93,1.93,0,0,1-1.74-1.06,2,2,0,0,1,.85-2.61,2,2,0,0,1,.89-.21,1.94,1.94,0,1,1,0,3.88Z"/></g></svg>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="c-info">
                            <h3 class="info-title">Convenient and trustworthy</h3>
                            <p>Sample collection and report delivery, as they maintain confidentiality while being transparent.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="svg-box-gen">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 234.23 234.23"><defs><style>.cls-1{fill:#cacaea;}.cls-2{fill:#eac1d9;}.cls-3{fill:#69326b;}</style></defs><title>ICONS</title><g id="Layer_1" data-name="Layer 1"><rect class="cls-1" width="234.23" height="234.23" rx="15.09"/><path class="cls-2" d="M154.23,84.23a3,3,0,0,0-2.24-.88H135.35a33.77,33.77,0,0,0-6.23-14H151.8a3,3,0,0,0,3.11-3.12V56.29a3,3,0,0,0-3.11-3.11h-81a3,3,0,0,0-3.12,3.11V69.24a3,3,0,0,0,.93,2.19,3,3,0,0,0,2.19.92H84.92q20.53,0,26.09,11H70.81a3,3,0,0,0-3.12,3.12V96.4a3,3,0,0,0,3.12,3.11h41.56a19,19,0,0,1-10,12.17q-7.83,4.18-20.68,4.19H70.81a3,3,0,0,0-2.19.92,3,3,0,0,0-.93,2.19v12.36a2.91,2.91,0,0,0,.88,2.15Q87.26,153.33,117,189.07a2.89,2.89,0,0,0,2.44,1.17h19a2.81,2.81,0,0,0,2.82-1.75,2.65,2.65,0,0,0-.39-3.31Q112.48,150.32,96.21,133q16.56-2,26.87-10.71a36.36,36.36,0,0,0,12.56-22.78H152a3,3,0,0,0,3.12-3.11V86.47A3,3,0,0,0,154.23,84.23Z"/><path class="cls-3" d="M138.46,192.3h-19a4.94,4.94,0,0,1-4.09-2c-19.65-23.57-35.93-42.24-48.33-55.41a5,5,0,0,1-1.43-3.56V119a5.22,5.22,0,0,1,5.18-5.18h10.9c8.18,0,14.81-1.32,19.71-3.94a17.21,17.21,0,0,0,8-8.29H70.81a5.06,5.06,0,0,1-5.18-5.17V86.47a5.06,5.06,0,0,1,5.18-5.18h36.31c-4.09-4.56-11.54-6.87-22.2-6.87H70.81a5.22,5.22,0,0,1-5.18-5.18V56.29a5.07,5.07,0,0,1,5.18-5.18h81A5.06,5.06,0,0,1,157,56.29v9.93a5,5,0,0,1-5.17,5.18H133a36.38,36.38,0,0,1,4,9.89h15a5.06,5.06,0,0,1,5.18,5.18V96.4a5.06,5.06,0,0,1-5.18,5.18H137.36a38.27,38.27,0,0,1-12.94,22.29c-6.32,5.36-14.39,8.92-24,10.6,10.59,11.51,24.73,28.1,42.09,49.4a4.69,4.69,0,0,1,.64,5.54A4.87,4.87,0,0,1,138.46,192.3ZM70.81,117.93a1.08,1.08,0,0,0-1,1v12.36A.86.86,0,0,0,70,132c12.49,13.27,28.83,32,48.6,55.72a.89.89,0,0,0,.85.42h19c.66,0,.79-.19.94-.52l.08-.17c.2-.36.23-.52-.14-.94-18.86-23.14-33.86-40.65-44.63-52.13l-2.8-3L96,131c10.57-1.24,19.24-4.69,25.78-10.23A34.61,34.61,0,0,0,133.6,99.19l.28-1.74H152a1,1,0,0,0,.78-.27,1,1,0,0,0,.27-.78V86.47a1,1,0,0,0-.27-.78h0a1,1,0,0,0-.78-.27H133.66l-.33-1.65a31.9,31.9,0,0,0-5.85-13.17l-2.56-3.33H151.8a.94.94,0,0,0,1-1V56.29a1,1,0,0,0-.28-.78,1,1,0,0,0-.77-.27h-81a1,1,0,0,0-.78.27,1,1,0,0,0-.27.78V69.24a1.1,1.1,0,0,0,1,1.05H84.92c14.47,0,23.87,4.08,27.93,12.13l1.51,3H70.81a.94.94,0,0,0-1,1V96.4a1,1,0,0,0,.27.77.94.94,0,0,0,.78.28h44.25l-.69,2.59a21.14,21.14,0,0,1-11,13.46c-5.51,2.94-12.79,4.43-21.66,4.43Z"/></g></svg>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="c-info">
                            <h3 class="info-title">Cost effective</h3>
                            <p>Personalised sessions and affordable genetic testing options</p>
                        </div>
                    </div>
                </div>
            </div>

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
			<br>
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
                                <p class="faqt"><span>1</span>What is Genetics?</p>
                            </a>
                        </div>
                        <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                            <p>Genetics is a specialized branch of science that deals with diseases that occur due to the mutations in your DNA can be transferred to the next generation.</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <a class="card-title"><p class="faqt"><span>2</span>What are genes? What are genetic disorders?</p></a>
                        </div>
                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                            <p>Genes are the basic units of hereditary that determine the characteristics of a person. These are transferred from our parents to us and forward to our children. Sometimes these genes may carry a harmful variation called mutation and may lead to a medical condition also known as a genetic disorder. </p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <a class="card-title"><p class="faqt"><span>3</span>What is Genetic Counselling?</p></a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body"><p>Genetic Counselling is the process of helping individuals understand and adapt to the medical, psychological and familial implications of genetic diseases that run in a family. A genetic counsellor helps identify a genetic disease in the family of an individual and enables them to make informed choices regarding the tests, management and prevention in the future generations. It covers four main aspects like diagnosis, risk estimation, preventive measures, management and support. </p></div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            <a class="card-title"><p class="faqt"><span>4</span>What does a genetic counselling session include?</p></a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body"> <p>Genetic counselling is divided into two parts. A pre-test and a post- test counselling. It starts with taking a detailed medical and family history of the individual leading to determine the etiology, inheritance pattern, recurrence risk and subsequently appropriate genetic testing is advised. Individuals are counselled regarding the test results and made aware of the complete scenario of the disease and its implications which allows them to make informed choices regarding treatment, management and prevention.  </p></div>
                        </div>
                    </div>
                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
                        <a class="card-title"><p class="faqt"><span>5</span>What is Down's syndrome?</p></a>
                    </div>
                    <div id="collapsefive" class="card-body collapse" data-parent="#accordion">
                        <p>Every person has 23 pairs of chromosomes i.e. a total of 46 chromosomes in the body. Sometimes there is seen an extra copy of chromosome 21 in certain individuals also called as a Trisomy 21 which leads to Down’s Syndrome. This disorder causes a distinct facial appearance, intellectual disability and developmental delays.  </p>
                    </div>
                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
                        <a class="card-title"><p class="faqt"><span>6</span>If my first child has it, will all my babies have Down syndrome?</p></a>
                    </div>
                    <div id="collapsesix" class="card-body collapse" data-parent="#accordion">
                        <p>It is not mandatory that if your first child has Down’s syndrome, all future babies may also have it. It is important to know if parents are harbouring a chromosomal anomaly which is causing the syndrome in the baby or if the parents are normal for any chromosomal problem and only the baby is affected. It is advised to contact a genetic counsellor or clinical geneticist who can help explain the risk of recurrence in future pregnancies and how to prevent it in the next pregnancy. </p>
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
        <h5>Genetic Counselling</h5>
        <p>Definition: Genetic Counselling is the process by which the knowledge about genetic conditions or illnesses is provided by a trained professional to an individual at risk of being affected by such a disorder. A Genetic Counsellor helps to identify and diagnose a genetic condition running in a family and estimate the risk of individuals who are prone to inheriting such disorders or passing it onto their children. A Genetic counsellor provides information regarding genetic diseases, their inheritance, management and possible treatment for the affected individual. They also provide emotional and psychological support in coping with the disease. Genetic Counselling also helps in preventing genetic diseases in being passed to the next generation.
        There are certain diseases which can be passed from parents to their children, which are called genetic diseases.
        There are many genetic disorders and they are usually caused due to a change in the DNA in our body called a mutation.
        The DNA contains the code for making a functional human being and any mutations may cause different types of problems in certain people.</p>
        </div>
        <div id="text" style="display: none;margin-top: 1rem;">
        <ul>
        <li>How do I identify a genetic disease in my family?</li>
            <li>Repeated pregnancy loss</li>
            <li>Death of a baby in the womb</li>
            <li>Death of an infant for unknown causes</li>
            <li>Previous child or family member with delay in crawling, sitting, standing, walking and talking</li>
            <li>Previous child or family member with mental abnormality and learning problems</li>
            <li>Previous child or family member with unexplained illness</li>
        </ul>

       <p> If there is any such history, it is important to consult a Genetic Counsellor for a counselling session.</p>
        <ul>
            <li> A Genetic Counselor will ask you about your personal, medical and family history. </li>
            <li> They will make a family tree diagram also called a pedigree chart to see if there are any genetic diseases in the family. </li>
            <li> They will suggest appropriate testing to discover the exact mutation in the DNA causing the genetic disease in the affected person. </li>
            <li> It will then be checked in both partners to see if they are carrying the same mutation and can pass it to the baby. </li>
            <li> Based on that, a Genetic Counselor will give a risk assessment of your baby getting that mutation and having that disease. </li>
        </ul>
        <h5>What if we carry the mutation?</h5>
        <ul>
            <li>If either and/or both partners are carrying the same mutation, based on the risk assessment we will know your baby’s risk of having the disease.</li>
            <li> The Genetic Counsellors will notify your Gynecologist who will conduct an invasive procedure either Chorionic villus sampling (CVS) or an Amniocentesis. Both these procedures are to get a small sample of the baby’s cells after which we check its DNA to see if it is carrying the mutation (called targeted testing) which will cause the said disease.</li>
            <li>If the baby has the mutation you will have the option of opting for an abortion before 5 months of pregnancy.
            </li>
        </ul>
        <h5>Genetic Tests/DNA Tests:</h5>
        <p>There are a number of Genetic Tests which are available for the diagnosis of a genetic condition. The tests recommended are very specific to the condition needed to be diagnosed. Genetic tests may help in detecting changes in the chromosomal level or the DNA level. Chromosomal tests are also known as cytogenetic tests and are used to identify changes in the chromosomes. These could be deletions, additions or translocations which could affect the genetic material and give rise to genetic diseases. Tests like karyotype, Fluorescence in-situ hybridization (FISH) are different types of cytogenetic tests.
        DNA tests look into changes seen directly at the DNA level. Mutations in the DNA could lead to genetic conditions. These mutations could be a change in a single point in the DNA, or be an addition or deletion. Such changes tend to affect the formation of a particular protein which in turn affects the functioning of a part of the human body thus leading to the disease. DNA tests include Sangers Sequencing, Next Generation Sequencing Tests like Exome Sequencing, Multiplex Ligation Dependant Probe Amplification (MLPA) etc.</p>
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
