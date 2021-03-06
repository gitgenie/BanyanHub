<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		//header("Location: index.html");
		exit;
	}
	
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BanyanHub</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A hub for learning" />
	<meta name="keywords" content="BanyanHub, origami, kindergarten, wings, coachhing, craft, moral, learning, kids" />
	<meta name="author" content="smithaDesignStudio.com" />

		<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
<!--		Font Awesome Icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- 
	Default Theme Style 
	You can change the style.css (default color purple) to one of these styles
	
	1. pink.css
	2. blue.css
	3. turquoise.css
	4. orange.css
	5. lightblue.css
	6. brown.css
	7. green.css

	-->
	<link rel="stylesheet" href="css/style.css">

	<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
	<link rel="stylesheet" id="theme-switch" href="css/style.css">
	<!-- End demo purposes only -->


	<style>
	/* For demo purpose only */
	
	/* For Demo Purposes Only ( You can delete this anytime :-) */
	#colour-variations {
		padding: 10px;
		-webkit-transition: 0.5s;
	  	-o-transition: 0.5s;
	  	transition: 0.5s;
		width: 140px;
		position: fixed;
		left: 0;
		top: 100px;
		z-index: 999999;
		background: #fff;
		/*border-radius: 4px;*/
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	#colour-variations.sleep {
		margin-left: -140px;
	}
	#colour-variations h3 {
		text-align: center;;
		font-size: 11px;
		letter-spacing: 2px;
		text-transform: uppercase;
		color: #777;
		margin: 0 0 10px 0;
		padding: 0;;
	}
	#colour-variations ul,
	#colour-variations ul li {
		padding: 0;
		margin: 0;
	}
	#colour-variations li {
		list-style: none;
		display: block;
		margin-bottom: 5px!important;
		float: left;
		width: 100%;
	}
	#colour-variations li a {
		width: 100%;
		position: relative;
		display: block;
		overflow: hidden;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		-ms-border-radius: 4px;
		border-radius: 4px;
		-webkit-transition: 0.4s;
		-o-transition: 0.4s;
		transition: 0.4s;
	}
	#colour-variations li a:hover {
	  	opacity: .9;
	}
	#colour-variations li a > span {
		width: 33.33%;
		height: 20px;
		float: left;
		display: -moz-inline-stack;
		display: inline-block;
		zoom: 1;
		*display: inline;
	}
	

	.option-toggle {
		position: absolute;
		right: 0;
		top: 0;
		margin-top: 5px;
		margin-right: -30px;
		width: 30px;
		height: 30px;
		background: #f64662;
		text-align: center;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		color: #fff;
		cursor: pointer;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	.option-toggle i {
		top: 2px;
		position: relative;
	}
	.option-toggle:hover, .option-toggle:focus, .option-toggle:active {
		color:  #fff;
		text-decoration: none;
		outline: none;
	}
	</style>
	<!-- End demo purposes only -->


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
					   <a href="index.html"><img class="img-responsive" src="images/logo.png" style="height:57px;width:80px;display:inline-block;position:absolute;float: left;"></a> 
		      
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
		            <li><a href="#" data-nav-section="work"><span>Wings</span></a></li>
		            <li><a href="#" data-nav-section="testimonials"><span>Testimonials</span></a></li>
		            <li><a href="#" data-nav-section="services"><span>About Us</span></a></li>
		            <li><a href="#" data-nav-section="contact"><span>Contact</span></a></li>
		          </ul>
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="to-animate">A hub for learning.</h1>
							<h2 class="to-animate">Making learning and educating easier and accessible.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>

	<section id="fh5co-intro">
		<div class="container">
			<div class="row row-bottom-padded-lg">
				<div class="fh5co-block to-animate" style="background-image: url(images/img_7.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
<!--						<i class="fh5co-intro-icon icon-bulb"></i>-->
						<h2>Wings</h2>
						<p> A moral value and activity based learning program designed for the age group of 3 to 7 years.</p>
						<p><a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary">Launch the program</a></p>
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(images/img_8.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
<!--						<i class="fh5co-intro-icon icon-wrench"></i>-->
						<h2>SSLC</h2>
						<p>An easy guide to 10th standard mathematics and science making learning fun, interesting, quick and easy.</p>
				 		<p><a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary">Launch the program</a></p>
						</div>
				</div>
				
			</div>
			
			
			<div class="row watch-video text-center to-animate">
				<span>Watch the video</span>

				<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo btn-video"><i class="icon-play2"></i></a>
			</div>
		</div>
	</section>

	<section id="fh5co-work" data-section="work">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Wings</h2>
					<h3>Wings is a Moral Value and Activity based Learning program designed for the age group of 3 to 7 years.</h3> 
							
				</div>
						<div class="row row-bottom-padded-sm">
				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/1-jumps-plays.png" class="fh5co-project-item image-popup to-animate">
						<img src="images/1-jumps-plays.png" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>Story Telling</h2>
							<span>A story with a moral lesson</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/rhyme.png" class="fh5co-project-item image-popup to-animate">
						<img src="images/rhyme.png" alt="rhyme" class="img-responsive">
						<div class="fh5co-text">
						<h2>Rhyme</h2>
							<span>Fun with the music</span>
						</div>
					</a>
					
				</div>

				<div class="clearfix visible-sm-block"></div>

				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/origami.jpg" class="fh5co-project-item image-popup to-animate">
						<img src="images/origami.jpg" alt="origami" class="img-responsive">
						<div class="fh5co-text">
						<h2>Origami</h2>
							<span>A craft session</span>
						</div>
					</a>
				</div>
			</div>
				<div class="col-md-12 section-heading text-center">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							
						</p>Designed by Banyanhub.com, it is modeled to drive moral values through exciting short stories and rhymes based on animal characters which drives the fascination of these young minds and keeps them interested.</p>
							
					<p>These values are further cemented into these young minds through activities such as Origami, which allows these kids to learn and exercise values such as obedience, patience and discipline, along with the added benefit of developing and improving their motor skills.</p>
					<p>Also topical/subject oriented learning content is also available on the website, which adds to the overall learning experience and also to the development of these young minds.</p>
					<button id="origami" class="btn btn-primary">But, Why Origami?</button> </br></br>
					<div id="origamiSec"  class="row text-center">
						<h3><strong>Here  is why.</strong></h3>
					  <p>
						Origami promotes hands-on learning. It improves a range of skills. This art form engages students and sneakily enhances their skills — including improved spatial perception and logical and sequential thinking. Below is a list of the benefits of Origami.</p>
					  <ol>
						<li>It teaches the math concepts of counting, and measuring and also introduces them to geometry as they playfully fold the paper into different shapes and sizes allowing them to grasp basic concepts of comparison, symmetry and dimensions (length,
						  width and height).</li>
						<li>Concept of Fractions: The act of folding the paper in half and in half again and so on can be used to demonstrate the concept of Fractions. It illustrates the concepts of one-half, one-third, or one-fourth by folding paper to achieve the required shape.</li>
						<li>Motor Skills: It gives them an opportunity to build and improve their motor skills and also their hand-eye coordination.</li>
						<li>Practicing Origami improves their spatial visualization skills as they diligently fold and manipulate a 2-dimensional paper transforming it into a 3-dimensional figure of an animal or bird.</li>
						<li> It promotes sequential learning where the kid learns to pay attention, learns to listen and follow the instructions provided to achieve the intended result accurately.</li>
						<li>Moral Values: Helps the growing mind to understand the importance of sharing, helping each other and to cooperate and collaborate with each other when in a social environment. Also allows them to exercise and practice competitiveness, attention to
						  detail, patience, obedience and discipline.</li>
						<li>Learning made FUN: A fun way to impart knowledge about otherwise boring concepts of maths, and about dogs, cats, also other animals and birds, and even values that will improve their learning ability and also instill in them a growing will to learn
						  and explore. Origami is a method of active research. These findings allow recommending origami training for the development of motor, intellectual and creative abilities of children. The training of origami causes intensive interaction of
						  brain hemispheres and effectively develops motor, intellectual and creative abilities of children.</li>
						<li>
						  <p>
							With no limit to its complexity or difficulty, origami proves to be the perfect developmental activity.</p>
						  <p>
							Origami builds self-confidence. Mistakes are forgivable as paper can be unfolded and refolded. Completing a project creates a sense of accomplishment and satisfaction. Furthermore, with the finished product at hand, there’s a sense of instant gratification.
							There’s no wait for glue, paint or clay to dry. A child can instantly enjoy the fruits of his/her labors.</p>
						  <p>
							Origami also allows the young minds to exercise the patience and attention to detail. Therefore paper folding is the perfect activity to start children on their way to successful adulthood.
						  </p></li>
						  </ol>
             <!-- thumbnails end-->
  				</div>
					<p>Click the button below to try the pilot program.</p>
					<p><button class="btn btn-primary">Pilot Program</button></p>
					</div>
				</div>
		</div>
		</div>
	</div>
	</section>

	<section id="fh5co-testimonials" data-section="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Testimonials</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>What our clients say.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
							<p>&ldquo;dbf jheg jhgfhj jh rjh jhr fjreh jrh j hjreghr jr jh jh gjhfehfkqw kfw hjhgtrjghrh fkehjerh jgrhjer gh jhr fjehr ghjrhke keh jerhgjrhgrgertgjher geejhr ghr&rdquo;</p>
						</blockquote>
						<div class="author to-animate">
							<figure><img src="images/person1.jpg" alt="Person"></figure>
							<p>
							Client1 <a href="http://freehtml5.co/" target="_blank">Org1.co</a> <span class="subtext">Position</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
							<p>&ldquo;dbf jheg jhgfhj jh rjh jhr fjreh jrh j hjreghr jr jh jh gjhfehfkqw kfw hjhgtrjghrh fkehjerh jgrhjer gh jhr fjehr ghjrhke keh jerhgjrhgrgertgjher geejhr ghrj&rdquo;</p>
						</blockquote>
						<div class="author to-animate">
							<figure><img src="images/person2.jpg" alt="Person"></figure>
							<p>
							Client2 <a href="http://freehtml5.co/" target="_blank">Org 2 </a> <span class="subtext">Position </span>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
							<p>&ldquo;dbf jheg jhgfhj jh rjh jhr fjreh jrh j hjreghr jr jh jh gjhfehfkqw kfw hjhgtrjghrh fkehjerh jgrhjer gh jhr fjehr ghjrhke keh jerhgjrhgrgertgjher geejhr ghr &rdquo;</p>
						</blockquote>
						<div class="author to-animate">
							<figure><img src="images/person3.jpg" alt="Person"></figure>
							<p>
							Client3 <a href="http://freehtml5.co/" target="_blank">org3.co</a> <span class="subtext">Position</span>
							</p>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>


	<section id="fh5co-services" data-section="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class=" left-border to-animate">About us</h2>
					<div class="row">
							<div class="col-md-12 subtext to-animate row text-center">
          <p><strong>A hub for learning</strong></p>
								<img class="img-responsive" style="margin: 15px 50px 0px 0px;
float: left;"src="images/logo.png" id="banyan_logo" alt="banyanhub" width="280" height="230">
          
          <p style="text-align: justify;">Banyanhub.com is an online education portal which provides content that serves as an aiding tool for both learning and teaching, catering to both students and teachers, aimed at making the process of learning and educating easier and accessible.Banyanhub.com serves as a support platform offering content that serves as teaching aid, assisting the teachers/instructors executing the WINGS-a Value and Activity based learning program, which is a kindergarten program running
            at playschools and kindergartens across India.</p>
          <p style="text-align: justify;">
            Our constant endeavour is to make Banyanhub.com a one-stop-shop online platform catering to all the needs of a student and teacher as we aim to promote Explorative-Learning where the learner has access to loads of information and knowledge at the tip
            of his/her fingers without being restricted to the binds or pages of a book and this being enabled by customised self-paced learning.</p>
          <p>
            Our aim is to enhance and optimize the process of learning by making it more effective, resourceful, and satisfied.
          </p>
      </div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	
	
	<section id="fh5co-counters" style="background-image: url(images/counter.jpg);" data-stellar-background-ratio="0.5">
		<div class="fh5co-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center to-animate">
					<h2>Fun Facts</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate"  style="font-size:40px;color:#52d3aa">
						<i class="fa fa-graduation-cap to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50">30</span>
						<span class="fh5co-counter-label">Sessions</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fa fa-paper-plane to-animate-2" style="font-size:40px;color:#52d3aa"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="49" data-speed="5000" data-refresh-interval="50">49</span>
						<span class="fh5co-counter-label">Origamis</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fa fa-university to-animate-2" style="font-size:40px;color:#52d3aa"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="12" data-speed="5000" data-refresh-interval="50">12</span>
						<span class="fh5co-counter-label">Institutions</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-people to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="129" data-speed="5000" data-refresh-interval="50">129</span>
						<span class="fh5co-counter-label">Happy Children</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-contact" data-section="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Get In Touch</h2>
					
				</div>
			</div>
			<div  class="row row-bottom-padded-md">
				<div class="col-md-6 to-animate">
					<h3>Contact Info</h3>
					<ul class="fh5co-contact-info">
						<li class="fh5co-contact-address ">
							<i class="icon-home"></i>
							Bengaluru, India
						</li>
						<li><i class="icon-phone"></i> (123) 465-6789</li>
						<li><i class="icon-envelope"></i>steve.naveen@banyanhub.com</li>
					</ul>
				</div>

				<div class="col-md-6 to-animate">
					<h3>Contact Form</h3>
					<div class="form-group ">
						<label for="name" class="sr-only">Name</label>
						<input id="name" class="form-control" placeholder="Name" type="text">
					</div>
					<div class="form-group ">
						<label for="email" class="sr-only">Email</label>
						<input id="email" class="form-control" placeholder="Email" type="email">
					</div>
					<div class="form-group ">
						<label for="phone" class="sr-only">Phone</label>
						<input id="phone" class="form-control" placeholder="Phone" type="text">
					</div>
					<div class="form-group ">
						<label for="message" class="sr-only">Message</label>
						<textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
					</div>
					<div class="form-group ">
						<input class="btn btn-primary btn-lg" value="Send Message" type="submit">
					</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!----------------------CONTACT Ends---------------------------------->
  <section id="terms">
    <!--thumbnails start-->
    <div class="container-fluid text-justify bg-grey">
      <div class="row">
                      <h1 class="art-postheader">Terms of Use</h1>
                    <div class="art-postcontent clearfix">
                      <p><strong>User Agreement</strong></p>
                      <p>These Terms of Use govern your use of the websites, content and other services offered through&nbsp;<a href="http://www.banyanhub.com/"><em>http://www.banyanhub.com</em></a>&nbsp;(&ldquo;Site&rdquo;) You (the user) agree to access
                        &ldquo;the site&rdquo;, subject to the terms and conditions of use as set out here.</p>
                      <p><em>Banyanhub.com</em>&nbsp;may add to or change or update these Terms of Use, from time to time entirely at its own discretion. You are responsible for checking these Terms of Use periodically to remain in compliance with these
                        terms. Your use of a Site after any amendment to the Terms of Use shall constitute your acceptance of these terms and you also agree to be bound by any such changes/revisions.</p>
                      <p><strong>Changes</strong></p>
                      <p><em>Banyanhub.com</em>&nbsp;reserves the right to suspend / cancel, or discontinue any or all content, products or service at any time without notice , make modifications and alterations in any or all of the content, products and
                        services contained on the site without prior notice.</p>
                      <p><strong>Charges</strong></p>
                      <p><em>Banyanhub.com</em>&nbsp;reserves the right to charge subscription and / or membership fees from a user, by giving reasonable prior notice, in respect of any product, service or any other aspect of this Site.</p>
                      <p><strong>Copyright and Trademarks</strong></p>
                      <p>Unless otherwise stated, copyright and all intellectual property rights in all material presented on the site (including but not limited to text, audio, video or graphical images), trademarks and logos appearing on this site are
                        the property of&nbsp;<em>Banyanhub.com</em>, its parent, affiliates and associates and are protected under applicable Indian laws. You agree not to use any framing techniques to enclose any trademark or logo or other proprietary
                        information of&nbsp;<em>Banyanhub.com</em>; or remove, conceal or obliterate any copyright or other proprietary notice or any credit-line or date-line on other mark or source identifier included on the Site / Service, including
                        without limitation, the size, color, location or style of all proprietary marks. Any infringement shall be vigorously defended and pursued to the fullest extent permitted by law.</p>
                      <p><strong>Limited Permission to Copy</strong></p>
                      <p><em>Banyanhub.com</em>&nbsp;grants you permission to only access and make personal use of the Site and You agree not to, directly or indirectly download or modify / alter / change / amend / vary / transform / revise / translate /
                        copy / publish / distribute or otherwise disseminate any content on&nbsp;<em>Banyanhub.com</em>&rsquo;s Site / Service, or any portion of it; or delete or fail to display any promotional taglines included in the Site / Service
                        either directly or indirectly, except with the express consent of&nbsp;<em>Banyanhub.com</em>. However, you may print or download extracts from these pages for your personal / individual, non-commercial use only. You must not retain
                        any copies of these pages saved to disk or to any other storage medium except for the purposes of using the same for subsequent viewing purposes or to print extracts for personal / individual use.</p>
                      <p><em>Banyanhub.com</em>&nbsp;forbids you from any attempts to resell or put to commercial use any part of the Site; any collection and use of any product listings, descriptions, or prices; any derivative use of the Site or its contents;
                        any downloading or copying of account information for the benefit of any other merchant; any renting, leasing, or otherwise transferring rights to the Site / Service; displaying the name, logo, trademark or other identifier of
                        another person in such a manner as to give the viewer the impression that such other person is a publisher or distributor of the Service on the Site, or any data gathering or extraction tools; or any use of meta tags. You may not
                        (whether directly or through the use of any software program) create a database in electronic or structured manual form by regularly or systematically downloading and storing all or any part of the pages from this site.</p>
                      <p>No part of the Site may be reproduced or transmitted to or stored in any other web site, nor may any of its pages or part thereof be disseminated in any electronic or non-electronic form, nor included in any public or private electronic
                        retrieval system or service without prior written permission. Requests to republish&nbsp;<em>Banyanhub.com&rsquo;</em>s material for distribution should be addressed to&nbsp;<em>admin</em>@<em>banyanhub.com.</em></p>
                    </div>
                 </div>
      </div>
      <!-- thumbnails end-->
  </section>
	
	<footer id="footer" role="contentinfo">
		<a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
		<div class="container">
			<div class="">
				<div class="col-md-12 text-center">
					<p>Banyanhub.com&copy; All Rights Reserved.| &nbsp;<a id="termSection" href="#terms">Terms</a> <br>Created by <a href="http://smithadesignstudio.com/" target="_blank">Smitha.co</a> </p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	
	
	<!-- For demo purposes Only ( You may delete this anytime :-) -->
<!--
	<div id="colour-variations">
		<a class="option-toggle"><i class="icon-gear"></i></a>
		<h3>Preset Colors</h3>
		<ul>
			<li>
				<a href="javascript: void(0);" data-theme="style">
					<span style="background: #3f95ea;"></span>
					<span style="background: #52d3aa;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style2">
					<span style="background: #329998;"></span>
					<span style="background: #6cc99c;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style3">
					<span style="background: #9f466e;"></span>
					<span style="background: #c24d67;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style4">
					<span style="background: #21825C;"></span>
					<span style="background: #A4D792;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			
		</ul>
	</div>
	 End demo purposes only 
-->

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script type="text/javascript" src="js/index.js"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="js/jquery.style.switcher.js"></script>
	<script>
		$(function(){
			$('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
		          	expires: 30,
		          	isManagingLoad: true
		      	}
			});	
			$('.option-toggle').click(function() {
				$('#colour-variations').toggleClass('sleep');
			});
		});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
<div class="modal fade" id="login" role="dialog">
          <div class="modal-dialog">
            <!--Login Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <form id="form" >
                  <div class="row">
                  <div class="col-lg-12 col-md-12 col-offset-md-6 form-group">
                  	<?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-danger">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
                    <input type="email" id="loginEmail" name="email" required="true" placeholder="username" class="form-control" >
                     <span class="text-danger"><?php echo $emailError; ?></span>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-12  form-group">
                    <input type="password" id="loginPassword" name="password" required="true" class="col-lg-12 col-md-12  form-control" placeholder="password" id="pwd">
                     <span class="text-danger"><?php echo $passError; ?></span>
                     </div>
                  </div>
                  
<!--                  New user? <a href="" data-toggle="modal" data-target="#register">Register</a>-->
                  <br>
                  <a>Forgot Password?</a>
                  <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                  </div>
                  <button type="submit" id="loginButton" class="btn btn-default" >Log in</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- register Modal -->
        <div class="modal fade" id="register" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <form action="register.php" method="post">
                  <div class="form-group">
                    <input type="text" placeholder="Name" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <input type="number" required="true" placeholder="Class/Standard" class="form-control" name ="class" id="class">
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="School Name" required="true" class="form-control" name="schoolName" id="school">
                  </div>
                  <div class="form-group">
                    <input type="email" placeholder="Email" required="true" class="form-control" name="email" id="email">
                  </div>
                  <div class="form-group">
                    <input type="password" required="true" class="form-control" name="password" placeholder="password" id="password">
                  </div>
                  <div class="form-group">
                    <input type="password" required="true" class="form-control" name="passwordCnf" placeholder="Confirm password" id="confirmPassword">
                  </div>
                  <button type="submit" class="btn btn-default" >Complete registration</button>
                </form>
            </div>
          </div>
        
      </div>
    </div>
		   <!----------loginpage--->
	</body>
</html>

<?php ob_end_flush(); ?>