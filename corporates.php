<?php
         if(isset($_POST["submit"])){
            $servername = "localhost:3306";
            $username = "qprgjmajdd";
            $password = "hbm2YFApCn";
            $dbname = "qprgjmajdd";
			
		/*	$servername = "localhost";
			 $username = "root";
            $password = "root";
            $dbname = "crysta";*/

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
    <title>Crysta For Corporates - Corporate Reproductive Healthare Services</title>
    <meta name="description" content="Crysta provides pregnancy care and family building benefits to for your Employee with pregnancy counselling by trained and experinced obstetrician/gynecologist.">
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
<header class="corporates-page">
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
                            <li class="subnavItem"><a href="/pregnancy-care">modern parents</a></li>
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
                            <li class="subnavItem-sidebar"><a href="/pregnancy-care">Modern Parents</a></li>
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
        <h1>Crysta<br>For Corporates
        </h1>
        <h5>Together with Crysta gift your employees the modern pregnancy benefits covering every path to parenthood</h5>
        <a class="know-btn" href="/contact-us">Contact Us</a>
    </div>
</header>
<!--------------------------------------------------------------
Why choose Crysta
---------------------------------------------------------------->
<section class="coun-first corporates-coun-first">
    <div class="container">
        <div class="coun-first-text">
            <p>Crysta works towards providing couples with fertility and family building benefits with end to end support and counselling by some of the best OBGYNs, pan India. We focus on results that include higher pregnancy success rates and outcomes with ease throughout the journey. With the Crysta benefit send the message of inclusivity and support to your diverse workforce looking to start a family. </p>
        </div>
    </div>


</section>

<!--------------------------------------------------------------
 V Test
---------------------------------------------------------------->
<section class="v-test corporates-v-test">
    <div class="container">
        <div class="row">
		
            <div class="col-md-12">
			<div class="main-title">
            <h1 style="padding-bottom: 1rem;">How Crysta makes a difference</h1>
			<p>Our holistic approach helps us integrate all of our unique and innovatory services into a complete package. We at Crysta make the reproductive healthcare tools an easier presentation to navigate for our employers and employees!</p>
        </div>
		
		
                <img style="width: 100%" src="/img/services/corpo.png" alt="Corporate Services - Crysta Care">
            </div>
        </div>

    </div>
</section>
<!--------------------------------------------------------------
 corporates why crysta
---------------------------------------------------------------->
<!--<section class="why-choose cop-choose">
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
                    <div class="col-sm-3"><img src="/img/services/Assets-For-Corporates.svg"></div>
                    <div class="col-sm-9">
                        <div class="c-t-dis">
                            <h4>Lorem ipsum</h4>
                            <p>Crysta care really is true to it's name, they didn't only instil the confidence in us in regards to their service, but also made us believe that they are our well-wishers; with prompt guidance and counselling.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row cor-t-box">
                    <div class="col-sm-3"><img src="/img/services/Assets-For-Corporates.svg"></div>
                    <div class="col-sm-9">
                        <div class="c-t-dis">
                            <h4>Lorem ipsum</h4>
                            <p>Crysta care really is true to it's name, they didn't only instil the confidence in us in regards to their service, but also made us believe that they are our well-wishers; with prompt guidance and counselling.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</div>
</section>-->
<!--------------------------------------------------------------
 FAQ
---------------------------------------------------------------->
<!--<section class="faq">
    <img src="/img/services/faq.svg" class="bottom-swoop-corporate">
    <div class="container">
        <div class="main-title">
            <h1>FAQ</h1>
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
                                <p class="faqt"><span>1</span>Lorem ipsum dolor sit amet, consectetur adipiscing?</p>
                            </a>
                        </div>
                        <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <a class="card-title"><p class="faqt"><span>2</span>Lorem ipsum dolor sit amet, consectetur adipiscing?</p></a>
                        </div>
                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <a class="card-title"><p class="faqt"><span>3</span>Lorem ipsum dolor sit amet, consectetur adipiscing?</p></a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            <a class="card-title"><p class="faqt"><span>4</span>Lorem ipsum dolor sit amet, consectetur adipiscing?</p></a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                        </div>
                    </div>
                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
                        <a class="card-title"><p class="faqt"><span>5</span>Lorem ipsum dolor sit amet, consectetur adipiscing?</p></a>
                    </div>
                    <div id="collapsefive" class="card-body collapse" data-parent="#accordion">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


</section>-->
<!--------------------------------------------------------------
Contact
---------------------------------------------------------------->
<section class="contact c-services" style="margin-top: -20rem;">
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
                    <form  name="emailForm" method="post" action="">
					 

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
                            <div class="col-sm-6">
                                <div class="inputBox ">
                                    <input type="text" placeholder="Organization" name="sex" class="input" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="inputBox">
                                    <input type="text" placeholder="Department" name="child"  class="input" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
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
