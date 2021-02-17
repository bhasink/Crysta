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
<header class="home-page-bg hometest">
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
                      <a class="nav-link" href="/testhome">Tests</a>
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
        <h2>Crysta<br>
Genetic Tests         
        </h2>
<h5 class="home-sub">Certain changes in your DNA may be harmful for your baby. Genetic testing is recommended to identify if a pregnancy is affected by a genetic disorder.</h5>
        <a class="know-btn" href="/pregnancy-care">Know More</a>
    </div>
</header>
<!--------------------------------------------------------------
Video section
---------------------------------------------------------------->
<section class="page-index-video explaore-cases">
	<div class="bglayers-oneslice">
    <div class="container">
        <div class="row">
            <div class="col-md-12 video-box explore">
                <div class="title-video">
                    Genetic testing helps you to identify changes in your DNA that may be a </br>cause of genetic condition. The results of a genetic test<br> can confirm or rule out a suspected genetic condition or help determine</br> a person's chance of developing or passing on a genetic disorder.
               </div>
              
           </div>
		   
		   
        </div>
    </div>
	
	<div class="explore-testranges">
	<div class="pink-bga title-video" id="expandoption">
		Explore the range of genetic tests below
	</div>
	
		<div class="container">
		<div class="lightbga-pn com-lists" id="areasplace">
		<ol>
			<div class="row">
				<div class="col-lg-4">
					<li><a href="#point1">Non-Invasive Prenatal Screening (NIPS)</a></li>
					<li><a href="#point2">Karyotype</a></li>
					<li><a href="#point3">Thalassemia Screening</a></li>
					<li><a href="#point4">Y-chromosome Microdeletion</a></li>
				</div>
				
				<div class="col-lg-4">
					<li><a href="#point5">Exome Sequencing</a></li>
					<li><a href="#point6">Preimplantation Genetic Screening (PGS)</a> </li>
					<li><a href="#point7">Preimplantation Genetic Diagnosis (PGD)</a></li>
					<li><a href="#point8">Carrier Screening</a></li>
				</div>
				
				<div class="col-lg-4">
					<li><a href="#point9"> Multiplex Ligation dependant Probe Amplification (MLPA) </a></li>
					<li><a href="#point10">Sanger Sequencing </a></li>
					<li><a href="#point11">Fluorescence <span style="font-style:italic;">in-situ</span> Hybridisation (FISH)</a></li>
					<li><a href="#point12">Chromosomal Microarray Analysis</a></li>

				</div>
			</div>
			</ol>
			</div>
		</div> 
		
		<div class="genetic-areasdis">
			<div class="container">
			   <div class="c-main-heading text-center"><h1 class="bill-info" id="text-box">Genetic Tests</h1></div>
			   
			   <div class="image-right conts" id="point1">
					<div class="row">
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>1</p>
									</div>
									
									<div class="texts-pl">
										<h4>NIPS</h4>
										<div class="article">
										<p>The NIPS is a non-invasive blood test which helps in identifying chromosomal anomalies such as Down, Edward and Patau Syndrome in the growing foetus. This test extracts the free-floating foetal DNA from the mother’s blood which is assessed to check for the presence of such chromosomal aneuploidies. The foetal DNA is then sequenced using advanced Next Generation Sequencing (NGS) technology to check for these chromosomal disorders. NIPS is a highly sensitive test with 99% accuracy. However, NIPS is a screening test and therefore requires confirmatory invasive testing such as chorionic villus sampling (CVS) or Amniocentesis, in case of a positive screen. </p>
										</div>
										
										 
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/1baby.png">
							</div>
						</div>
						
					</div>
			   </div>
			   
			   
			   
			   
			   
			</div>
		</div>
		
		
	</div>
	</div>

</section> 

<section class="layer-nexts">
<div class="container">
 <div class="image-right conts" id="point2">
					<div class="row">
						
						
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>2</p>
									</div>
									
									<div class="texts-pl">
										<h4>Karyotype</h4>
										<div class="article">
										<p>A karyotype test looks at the size, shape, and number of chromosomes in an individual. Chromosomes contain an individual’s genes, which are parts of DNA passed down from their parents. They determine the traits you have, such as height and eye color. People usually have 46 chromosomes, divided into 23 pairs, in each cell. One of each pair of chromosomes comes from the mother, and the other pair comes from the father. If an individual has more or fewer number of chromosomes than 46, or if there is anything unusual about the size or shape of the chromosomes, it could be indicative of a genetic disease. A karyotype test is often used to help find certain genetic defects that could be present in a couple and could be passed onto their future children. It is also a useful test to determine the cause of repeated miscarriages, infertility and individuals having developmental delay and intellectual disability. </p>
										</div>
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/2.png">
							</div>
						</div>
						
					</div>
			   </div>
			   
			   <div class="image-right conts" id="point3">
					<div class="row">
						<div class="col-md-6">
								<div class="content-place">
									<div class="number-pl">
										<p>3</p>
									</div>
									
									<div class="texts-pl">
										<h4>Thalassemia Screening</h4>
										<div class="article">
										<p>Thalassemia is an inherited blood disorder that affects the body’s ability to produce functional hemoglobin in the red blood cells leading to anemia and low levels of oxygen in the bloodstream and requires repeated blood transfusions in the affected individual. It is an autosomal recessive disease which means both copies of the <span style="font-style:italic;">HBB</span> gene show a mutation in an individual. Thalassemia Screening in pregnancy is done to identify couples who are <span style="font-style:italic;">HBB</span> mutation carriers and show a 25% risk of having a child with Thalassemia in each pregnancy. The test screens both partners simultaneously to look for mutations making them carriers of the defective gene. If both partners are found to be carriers, further genetic testing is prescribed which is required for prenatal diagnosis of Thalassemia in the foetus.</p>
										</div>
										
									
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/3.png">
							</div>
						</div>
						
					</div>
			   </div>
			   
			   <div class="image-right conts" id="point4">
					<div class="row">
						
						
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>4</p>
									</div>
									
									<div class="texts-pl">
										<h4>Y-chromosome <br>Microdeletion</h4>
										<div class="article">
										<p>The Y chromosome is responsible for male characteristics. Many times there are changes in the chromosome such as deletions or rearrangements. Y chromosome microdeletions are seen in males with severe infertility.  Male factor infertility could be in the form of azoospermia, severe to moderate oligospermia, or abnormal sperm morphology and motility in men with a normal physical evaluation. The Y chromosome microdeletions are usually seen in the <span style="font-style:italic;">AZF</span> gene and commonly are in the regions <span style="font-style:italic;">AZFa</span>, <span style="font-style:italic;">AZFb</span> and <span style="font-style:italic;">AZFc</span> in such individuals, chances of natural pregnancy are very low and may need to undergo an assisted reproductive technique (ART) guided pregnancy. </p>
										</div>
										
									 
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/4.png">
							</div>
						</div>
						
					</div>
			   </div>
			   
			   
			   <div class="image-right conts" id="point5">
					<div class="row">
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>5</p>
									</div>
									
									<div class="texts-pl">
										<h4>Exome Sequencing</h4>
										<div class="article">
										<p>Every individual is comprised of DNA which has specific genes which encode the structural and functional components of every person. This DNA is passed down from the mother and the father to their offspring. Sometimes there are changes in certain genes, called mutations which may give rise to genetic conditions infertility in either of the partner thus making it difficult to conceive. In such cases the exome sequencing test is recommended wherein advanced Next Generation Sequencing sequences all the protein coding genes of the human body and detects any mutation in the genes responsible for causing a particular genetic condition. This test is helpful in detecting genetic conditions such as: </p>
										<ol> 
											<li>In individuals affected with such a condition </li>
											<li>In families with a diagnosed/ undiagnosed condition </li>
											<li>Couples facing recurrent pregnancy loss</li>
											<li>Couples with infertility </li>
										</ol>
										<p>This is a very accurate test and depending upon the result- positive or negative for a gene mutation further testing and guidance regarding pregnancy is given to the couple. </p>
										</div>
										
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/5.png">
							</div>
						</div>
						
					</div>
			   </div>
			   
			   
			   <div class="image-right conts" id="point6">
					<div class="row">
						
						
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>6</p>
									</div>
									
									<div class="texts-pl">
										<h4>Preimplantation Genetic<br> Screening (PGS)</h4>
										<div class="article">
										<p>Preimplantation Genetic Screening (PGS) is a genetic screening procedure which helps identify chromosomal aneuploidies in the embryos created during an IVF procedure. This test is important especially when there are first trimester miscarriages during normal pregnancy due to chromosomal aneuploidies. An embryo biopsy is taken wherein a single cell is retrieved from the embryo after 5-6 days of development. The genetic material is amplified and then tested to check for chromosomal aneuploidies. The embryo which does not have any chromosomal aneuploidy is taken ahead and transferred. This test is recommended for: </p>
										<ol>
											<li>Advanced maternal age (35 years or older)</li>
											<li>Recurrent miscarriages</li>
											<li>Couples facing recurrent pregnancy loss</li>
											<li>Previous failed IVF attempts </li>
										</ol>
										
										</div>
										
										
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/6.png">
							</div>
						</div>
						
					</div>
			   </div>
			   
			   
			   <div class="image-right conts" id="point7">
					<div class="row">
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>7</p>
									</div>
									
									<div class="texts-pl">
										<h4>Preimplantation <br>Genetic Diagnosis (PGD)</h4>
										<div class="article">
										<p>Preimplantation Genetic Diagnosis or PGD is a technique that enables couples with a particular inherited condition in their family to avoid passing it on to their children. If there is a known genetic condition in the family, it is important to diagnose and do the gene mutation analysis for the same. Once the mutation in the gene is identified, the couple can proceed for an IVF cycle. A biopsy is taken from the embryo after 5-6 days of development and the DNA is amplified. The mutation identified to be causing the genetic disorder is then checked in the embryo sample. The embryo which is negative for the gene mutation is then a mutation free healthy embryo is transferred.</p>
										</div>
										
										
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/7.png">
							</div>
						</div>
						
					</div>
			   </div>
			   
			   
			    <div class="image-right conts" id="point8">
					<div class="row">
						
						
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>8</p>
									</div>
									
									<div class="texts-pl">
										<h4>Carrier Screening</h4>
										<div class="article">
										<p>This is a genetic test that is done for the couples to identify if they are at any risk of passing certain autosomal recessive genetic disease to their children. An autosomal recessive inherited disorder is transmitted when parents are asymptomatic carriers of a gene mutation which causes the disorder. ir children. This test screens both partners simultaneously for common autosomal recessive disorders to check if they are carriers for gene mutations. If both partners carry a mutation in the same gene, there is a 25% risk of having an affected child. It is very likely that most people can be carriers of a disease without knowing it. </p>
										<p>The Carrier Screening test is recommended for: </p>
										<ul>
											<li>A family history of certain disorders </li>
											<li>Personal history of any condition.</li>
											<li>Couples belonging to specific ethnic (large groups of people who have certain racial, cultural, religious) groups in common where some genetic disorders are commonly seen. </li>
										</ul>
										<p>Couples can get this test done at any time, be it – before pregnancy or during pregnancy. However, undergoing this test before planning a pregnancy can help the couple make informed decisions.</p>
										
										</div>
										
										
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/8.png">
							</div>
						</div>
						
					</div>
			   </div>
			   
			   
			    <div class="image-right conts" id="point9">
					<div class="row">
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>9</p>
									</div>
									
									<div class="texts-pl">
									
										<h4>Multiplex Ligation-dependent<br> Probe Amplification (MLPA)</h4>
										<div class="article">
										<p>Multiplex Ligation-dependent Probe Amplification (MLPA) is a specialized genomic test which helps to detect certain specific mutations in a particular gene. Many of the genetic disorders are caused due to deletions and duplication of genes in the DNA as in the case of Duchenne Muscular Dystrophy (DMD). MLPA helps in detecting large deletions and duplications within a gene in a cost-effective and robust manner. In addition, it has the ability to detect small rearrangements and copy number variations (CNV). Diseases that are diagnosed using MLPA includeDuchenne Muscular Dystrophy (DMD)/ Becker Muscular Dystrophy (BMD), Gliomas, Limb girdle muscular dystrophy among others.</p>
										
										</div>
										
										
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/9.png">
							</div>
						</div>
						
					</div>
			   </div>
			   
			   <div class="image-right conts" id="point10">
					<div class="row">
						
						
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>10</p>
									</div>
									
									<div class="texts-pl">
										<h4>Sanger Sequencing</h4>
										<div class="article">
										<p>Sanger Sequencing is the gold standard for DNA based mutation testing. Every individual is comprised of DNA and the DNA is composed of different genes which encode every structure and function for a human being. Small changes in the sequence of the DNA at single points (point mutations), additions or deletion of small portions (indel mutations) for certain crucial genes may lead to genetic disorders. The Sanger sequencing reads every base pair for an exonic sequence of a gene and detects such mutations. This test is usually used to confirm gene mutations detected through exome sequencing with high sensitivity and specificity. </p>
										</div>
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/10.png">
							</div>
						</div>
						
					</div>
			   </div>
			   
			   <div class="image-right conts" id="point11">
					<div class="row">
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>11</p>
									</div>
									
									<div class="texts-pl">
										<h4>FISH</h4>
										<div class="article">
										<p>FISH (Fluorescence <span style="font-style:italic;">in-situ</span> Hybridisation) Fluorescence <span style="font-style:italic;">in-situ</span> hybridization (FISH), is a cytogenetic and a molecular technique that makes use of fluorescent probes, which binds to only those parts of a nucleic acid sequence that are complementary with each other. It is able to detect and localize the presence or absence of specific DNA sequences on chromosomes. FISH has increased sensitivity and resolution as compared to a karyotype test. It is recommended for:</p>
										<ol>
											<li>Cases where the child's developmental disability is not understood, the cause of it can potentially be determined using FISH</li>
											<li>Diseases that are diagnosed using FISH include <span class="texthover">Prader-Willi syndrome</span>, <span class="texthover">Angelman syndrome</span>, 22q13 deletion syndrome,chronic myelogenous leukemia, acute lymphoblastic leukemia, Cri-du-chat, <span class="texthover">Velocardiofacial syndrome</span>, and Down syndrome. </li>
											<li>FISH on sperm cells is indicated for men with an abnormal somatic or meiotic karyotype as well as those with <span class="texthover">oligozoospermia</span>, since approximately 50% of oligozoospermic men have an increased rate of sperm chromosome abnormalities. </li>
											<li>The analysis of chromosomes 21, X, and Y is enough to identify oligozoospermic individuals at risk.</li>
											<li>In medicine, FISH can be used to form a diagnosis, to evaluate prognosis, or to evaluate remission of a disease, such as cancer</li>
											
										</ol>
										</div>
										
										
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/11.png">
							</div>
						</div> 
						
					</div>
			   </div>
			   
			   <div class="image-right conts" id="point12">
					<div class="row">
						<div class="col-md-6">
							<div class="content-place">
									<div class="number-pl">
										<p>12</p>
									</div>
									
									<div class="texts-pl">
										<h4>Chromosomal Microarray Analysis (CMA)</h4>
										<div class="article">
										<p>CMA is a high resolution genetic test that can analyse multiple regions of DNA at once. It has the capacity to screen for deletions, duplications, loss of heterozygosity and aneuploidy detection for all chromosomes. It is useful in diagnosing many neurological conditions and analyse POC samples.</p>
										<ul><li> CMA is the first-line genetic test prescribed for conditions such as:</li></ul>
										<ol>
											<li>Cases where the child's developmental disability is not understood, the cause of it can potentially be determined using FISH</li>
											<li>Developmental disabilitiesand Down syndrome.</li>
											<li>Autism spectrum disorders.</li>
											<li>Multiple congenital anomalies.</li>
											<li>Mental retardation.</li>
											
										</ol>
										
										<ul><li> Disorders Detected:</li></ul>
										<ol>
											<li>Angelman syndrome</li>
											<li>Wolf-Hirschhorn syndromeWilliams syndrome</li>
											<li>DiGeorge syndrome</li>
											<li>Prader-Willi syndrome</li>
										</ol>
										
										<ul><li>Advantages:</li></ul>
										
										<ol>
											<li>Higher resolution.</li>
											<li>Nearly double diagnostic yield.</li>
											<li>Detection of maternal cell contamination.</li>
											<li>Detection of uniparental disomy.</li>
										</ol>
										
										</div>
										
										
										
									</div>
									
								</div>
						</div>
						
						<div class="col-md-6">
							<div class="leftdotted-bg">
								<img src="./img/homepic/tests-new-page-v2 (1).png">
							</div>
						</div> 
						
					</div>
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
 <script src='https://rawgit.com/jedfoster/Readmore.js/master/readmore.js'></script>
<script src="js/slick.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>


 <script>
      $('.article').readmore({
  speed: 75, //Açılma Hızı
  collapsedHeight: 100, // 100px sonra yazının kesileceğini belirtir.
  moreLink: '<a class="nav-link book-btn readmore ac" href="#">Know More</a></div>', // açma linki yazısı
  lessLink: '<a class="nav-link book-btn readmore kapat" href="#">Show Less</a>', // kapatma linki yazısı
});
    </script>
	
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

<script>
	$(document).ready(function(){
  $("#expandoption").click(function(){
    $("#areasplace").slideToggle("slow");
  });
});
</script>

</body>
</html>