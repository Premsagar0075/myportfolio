<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];

$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn, 'db2');
$q = "insert into viewers (firstname,lastname,email) values ('$fname','$lname','$email')";
mysqli_query($conn,$q);
mysqli_close($conn);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Portfolio</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

       

               
			
			
			
			
			
			
			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>MY JOURNEY</h2>
							<p>From the very beginning to till now.</p>
						</div>
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/lkg1.jpg" class="img-responsive" alt="B.S.F KG school meru camp hazaribagh my first school from where my journey starts.">
								<figcaption class="mask">
									<h3>LKG</h3>
									<p>B.S.F KG school meru camp hazaribagh my first school from where my journey starts. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="LKG" data-fancybox-group="works" href="img/portfolio/lkg1.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/lkg2.jpg" class="img-responsive" alt="My first classmates. ">
								<figcaption class="mask">
									<h3>LKG GROUP PHOTO</h3>
									<p>My first classmates. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="LKG GROUP PHOTO" href="img/portfolio/lkg2.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/family.jpg" class="img-responsive" alt="With my father and mother. ">
								<figcaption class="mask">
									<h3>FAMILY</h3>
									<p>With my father and mother. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="FAMILY" data-fancybox-group="works" href="img/portfolio/family.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/poem3.jpg" class="img-responsive" alt="Got Ist prize in poem recitation in class 3rd.">
								<figcaption class="mask">
									<h3>POEM RECITATION</h3>
									<p>Got Ist prize in poem recitation in class 3rd. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="POEM RECITATION" data-fancybox-group="works" href="img/portfolio/poem3.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/writting5.jpg" class="img-responsive" alt="Got IInd prize in english calligraphy in class 5th. ">
								<figcaption class="mask">
									<h3>ENGLISH CALLIGRAPHY</h3>
									<p>Got IInd prize in english calligraphy in class 5th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="ENGLISH CALLIGRAPHY" data-fancybox-group="works" href="img/portfolio/writting5.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/drawing5.jpg" class="img-responsive" alt="Got IInd prize in drawing and painting competition in class 5th. ">
								<figcaption class="mask">
									<h3>DRAWING AND PAINTING</h3>
									<p>Got IInd prize in drawing and painting competition in class 5th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="DRAWING AND PAINTING" data-fancybox-group="works" href="img/portfolio/drawing5.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</section>
			<!-- end portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">
					
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/scout5.jpg" class="img-responsive" alt="Participated in Bharat Scouts and Guides in class 5th at K.V hazaribagh on 8.11.2008.">
								<figcaption class="mask">
									<h3>SCOUTS AND GUIDES</h3>
									<p>Participated in Bharat Scouts and Guides in class 5th at K.V hazaribagh on 8.11.2008. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="SCOUTS AND GUIDES" data-fancybox-group="works" href="img/portfolio/scout5.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/kabbadi5.jpg" class="img-responsive" alt="Participated in mini sports meet at K.V no. Bokaro steel city. ">
								<figcaption class="mask">
									<h3>KABBADI</h3>
									<p>Participated in mini sports meet at K.V no. Bokaro steel city. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="KABBADI" href="img/portfolio/kabbadi5.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/writting6.jpg" class="img-responsive" alt="Got Ist prize in english calligraphy in class 6th. ">
								<figcaption class="mask">
									<h3>ENGLISH CALLIGRAPHY</h3>
									<p>Got Ist prize in english calligraphy in class 6th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="ENGLISH CALLIGRAPHY" data-fancybox-group="works" href="img/portfolio/writting6.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/quiz7.jpg" class="img-responsive" alt="Got IInd prize in quiz competition in class 7th.">
								<figcaption class="mask">
									<h3>QUIZ COMPETITION</h3>
									<p>Got IInd prize in quiz competition in class 7th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="QUIZ COMPETITION" data-fancybox-group="works" href="img/portfolio/quiz7.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/science.jpg" class="img-fluid img-thumbnail" alt="Participated in regional science exhibition at K.V Cuttack in class 7th. ">
								<figcaption class="mask">
									<h3>SCIENCE EXHIBITION</h3>
									<p>Participated in regional science exhibition at K.V Cuttack in class 7th.</p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="SCIENCE EXHIBITION" data-fancybox-group="works" href="img/portfolio/science.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/athlete8.jpg" class="img-responsive" alt="Participated in regional sports meet at K.V no.1 Bokaro.">
								<figcaption class="mask">
									<h3>ATHLETICS</h3>
									<p>Participated in regional sports meet at K.V no.1 Bokaro. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="ATHLETICS" data-fancybox-group="works" href="img/portfolio/athlete8.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</section>
			
			
			<section id="portfolio">
				<div class="container">
					<div class="row">
					
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/teri.jpg" class="img-responsive" alt="Participated in teri quiz competition in class 8rth.">
								<figcaption class="mask">
									<h3>TERI QUIZ</h3>
									<p>Participated in teri quiz competition in class 8rth. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="TERI QUIZ" data-fancybox-group="works" href="img/portfolio/teri.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/athlete9.jpg" class="img-responsive" alt="Participated in regional sports competition at 39 gtc Varanasi in class 9th. ">
								<figcaption class="mask">
									<h3>ATHLETICS</h3>
									<p>Participated in regional sports competition at 39 gtc Varanasi in class 9th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="ATHLETICS" href="img/portfolio/athlete9.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/explaner9.jpg" class="img-responsive" alt="Participated in social science exhibition as a explainer at K.V Mau in class 9th. ">
								<figcaption class="mask">
									<h3>SOCIAL SCIENCE EXHIBITION</h3>
									<p>Participated in social science exhibition as a explainer at K.V Mau in class 9th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="SOCIAL SCIENCE EXHIBITION" data-fancybox-group="works" href="img/portfolio/explaner9.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/essay9.jpg" class="img-responsive" alt="Got Ist prize in essay writting competition in class 9th.">
								<figcaption class="mask">
									<h3>ESSAY COMPETITION</h3>
									<p>Got Ist prize in essay writting competition in class 9th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="ESSAY COMPETITION" data-fancybox-group="works" href="img/portfolio/essay9.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/ncsc10.jpg" class="img-fluid img-thumbnail" alt="Participated in nationaal children science congress at K.V 39 gtc Varanasi in class 10th ">
								<figcaption class="mask">
									<h3>NCSC</h3>
									<p>Participated in nationaal children science congress at K.V 39 gtc Varanasi in class 10th </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="NCSC" data-fancybox-group="works" href="img/portfolio/ncsc10.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/athlete10.jpg" class="img-responsive" alt="Participated in school sports competition in class 10th. ">
								<figcaption class="mask">
									<h3>ATHLETICS</h3>
									<p>Participated in school sports competition in class 10th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="ATHLETICS" data-fancybox-group="works" href="img/portfolio/athlete10.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</section>
			
			
			
			<section id="portfolio">
				<div class="container">
					<div class="row">
					
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/athlete101.jpg" class="img-responsive" alt="Participated in school sports competition in class 10th.">
								<figcaption class="mask">
									<h3>ATHLETICS</h3>
									<p>Participated in school sports competition in class 10th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="ATHLETICS" data-fancybox-group="works" href="img/portfolio/athlete101.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/chaitnya10.jpg" class="img-responsive" alt="Participated in school sports competition in class 10th. ">
								<figcaption class="mask">
									<h3>MERIT CERTIFICATE</h3>
									<p>Got merit certificate from Chaitnya in Young Scientist Talent Test in class 10th. </p>
								</figcaption>
								<ul class="external"> 
									<li><a class="fancybox" title="MERIT CERTIFICATE" href="img/portfolio/chaitnya10.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/kahani10.jpg" class="img-responsive" alt="Got IIIrd prize in hindi story telling competition in class 10th ">
								<figcaption class="mask">
									<h3>HINDI STORY TELLING</h3>
									<p>Got IIIrd prize in hindi story telling competition in class 10th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="HINDI STORY TELLING" data-fancybox-group="works" href="img/portfolio/kahani10.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/result10.jpg" class="img-responsive" alt="Got 10 CGPA in class 10th from K.V siwan.">
								<figcaption class="mask">
									<h3>RESULT 10TH</h3>
									<p>Got 10 CGPA in class 10th from K.V siwan. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="RESULT 10TH" data-fancybox-group="works" href="img/portfolio/result10.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/merit10.jpg" class="img-fluid img-thumbnail" alt="Got merite certficate from CBSE on getting 10CGPA in class 10th.  ">
								<figcaption class="mask">
									<h3>MERIT CERTIFICATE FROM CBSE</h3>
									<p>Got merite certficate from CBSE on getting 10CGPA in class 10th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="MERIT CERTIFICATE FROM CBSE" data-fancybox-group="works" href="img/portfolio/merit10.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/debate10.jpg" class="img-responsive" alt="Participated in debate competition in social science exhibition at K.V Mau in class 10th. ">
								<figcaption class="mask">
									<h3>DEBATE COMPETITION</h3>
									<p>Participated in debate competition in social science exhibition at K.V Mau in class 10th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="DEBATE COMPETITION" data-fancybox-group="works" href="img/portfolio/debate10.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</section>
			
			
				<section id="portfolio">
				<div class="container">
					<div class="row">
					
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/dav11.jpg" class="img-responsive" alt="Group photo of class 11th in DAV centenary public school siwan.">
								<figcaption class="mask">
									<h3>DAV CLASS 11</h3>
									<p>Group photo of class 11th in DAV centenary public school siwan. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="DAV CLASS 11" data-fancybox-group="works" href="img/portfolio/dav11.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/athlete12.jpg" class="img-responsive" alt="Participated in DAV national sports in class 12th.">
								<figcaption class="mask">
									<h3>ATHLETICS</h3>
									<p>Participated in DAV national sports in class 12th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="ATHLETICS" href="img/portfolio/athlete12.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/tit12.jpg" class="img-responsive" alt="Got Ist prize in test organised by TIT foundation in class 12th. ">
								<figcaption class="mask">
									<h3>TIT CERTIFICATE</h3>
									<p>Got Ist prize in test organised by TIT foundation in class 12th. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="TIT CERTIFICATE" data-fancybox-group="works" href="img/portfolio/tit12.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/result12.jpg" class="img-responsive" alt="Got 85.4% marks in class 12th from DAV siwan.">
								<figcaption class="mask">
									<h3>RESULT 12</h3>
									<p>Got 85.4% marks in class 12th from DAV siwan. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="RESULT 12" data-fancybox-group="works" href="img/portfolio/result12.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/dav12.jpg" class="img-fluid img-thumbnail" alt="Group photo of class 12th in DAV siwan.">
								<figcaption class="mask">
									<h3>DAV GROUP PHOTO</h3>
									<p>Group photo of class 12th in DAV siwan. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="DAV GROUP PHOTO" data-fancybox-group="works" href="img/portfolio/dav12.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/webD1.jpg" class="img-responsive" alt="Participated in work shop of web designing in Ist year.">
								<figcaption class="mask">
									<h3>WEB DESIGNING</h3>
									<p>Participated in work shop of web designing in Ist year. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="WEB DESIGNING" data-fancybox-group="works" href="img/portfolio/webD1.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</section>
			
			
				<section id="portfolio">
				<div class="container">
					<div class="row">
					
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/webD2.jpg" class="img-responsive" alt="Participated in work shop of web designing in 2nd year.">
								<figcaption class="mask">
									<h3>WEB DESIGNING</h3>
									<p>Participated in work shop of web designing in 2nd year. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="WEB DESIGNING" data-fancybox-group="works" href="img/portfolio/webD2.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/ssb.jpg" class="img-responsive" alt="Selected for ssb interview for TES-39. ">
								<figcaption class="mask">
									<h3>SSB INTERVIEW</h3>
									<p>Selected for ssb interview for TES-39. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="SSB INTERVIEW" href="img/portfolio/ssb.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/sem1.jpg" class="img-responsive" alt="Got 8.54 CGPA in sem 1.">
								<figcaption class="mask">
									<h3>RESULT SEM 1</h3>
									<p>Got 8.54 CGPA in sem 1. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="RESULT SEM 1" data-fancybox-group="works" href="img/portfolio/sem1.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/HTML.jpg" class="img-responsive" alt="Completed HTML course on Sololearn.">
								<figcaption class="mask">
									<h3>HTML CERTIFICATE</h3>
									<p>Completed HTML course on Sololearn. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="HTML CERTIFICATE" data-fancybox-group="works" href="img/portfolio/HTML.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/CSS.jpg" class="img-responsive" alt="Completed CSS course on Sololearn. ">
								<figcaption class="mask">
									<h3>CSS CERTIFICATE</h3>
									<p>Completed CSS course on Sololearn. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="CSS CERTIFICATE" data-fancybox-group="works" href="img/portfolio/CSS.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/Javascript.jpg" class="img-responsive" alt="Completed JavaScript course on Sololearn.">
								<figcaption class="mask">
									<h3>JAVASCRIPT CERTIFICATE</h3>
									<p>Completed JavaScript course on Sololearn. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="JAVASCRIPT CERTIFICATE" data-fancybox-group="works" href="img/portfolio/Javascript.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/PHP.jpg" class="img-responsive" alt="Completed PHP course on Sololearn.">
								<figcaption class="mask">
									<h3>PHP CERTIFICATE</h3>
									<p>Completed PHP course on Sololearn. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="PHP CERTIFICATE" data-fancybox-group="works" href="img/portfolio/PHP.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/SQL.jpg" class="img-responsive" alt="Completed SQL course on Sololearn.">
								<figcaption class="mask">
									<h3>SQL CERTIFICATE</h3>
									<p>Completed SQL course on Sololearn. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="SQL CERTIFICATE" data-fancybox-group="works" href="img/portfolio/SQL.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/python.jpg" class="img-responsive" alt="Completed python3 course on Sololearn. ">
								<figcaption class="mask">
									<h3>PYTHON3 CERTIFICATE</h3>
									<p>Completed python3 course on Sololearn. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="PYTHON3 CERTIFICATE" data-fancybox-group="works" href="img/portfolio/webD1.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
			
						</ul>
						
					</div>
				</div>
				
					<div class="sec-title text-center wow animated fadeInDown">
					<h2>Back to home <a href="index.html">click here</a></h3>
			        </div>
			</section>
			
		

			
			
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>