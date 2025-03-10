<?php 
if(isset($_POST['submit'])){
    $to = "info@live-it-training.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$phone = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " " . $phone . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From: " . $from;
    $headers2 = "From: " . $to;
    $result1 = mail($to,$subject,$message,$headers);
    $result2 = mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	if($result1 && $result2){
		echo "<script>alert('Mail Sent. Thank you " . $first_name . ", we will contact you shortly.');</script>";
	}
    }
?>
<!DOCTYPE html>
<html>

<head>
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<title>Live It - Training for Life | Contact</title>
	<meta name="Title"
		content="Live It Training for Life transcends exercise. You will lose body fat, get stronger and more athletic, and you will learn skills to meet yourself and life at a deeper level. ">
	<meta name="Description"
		content="Live It Training coaches have helped Olympic Athletes, celebrities, Fortune 500 founders and thousands of people just like you become better versions of themselves. Live It Training takes the best components of physical culture, exercise physiology, behavioral science and mindfulness to create a program that has helped thousands of people lead healthier, happier and richer lives. Wherever you are starting from…We will meet you there. Let’s do this.">
	<meta Name="keywords"
		Content="exercise,training,online exercise training,online gym,online yoga,online pilates,lose body fat,lose weight,gain strength,athletic,physical,exercise physiology,behavioral science,mindfulness,Olympic Athletes, Rod Connolly,Live It Lean,Live It Strong,Live It Loose,HIIT,Multi-joint,compound exercises,cardiovascular">
	<meta name="author" content="Donohue Consulting, Inc.">
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<!-- Color Switcher Mockup -->
	<link href="css/color-switcher-design.css" rel="stylesheet">

	<!-- Color Themes -->
	<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

	<link
		href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
		rel="stylesheet">

	<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./images/favicon.ico" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Main Header-->
		<header class="main-header header-style-three">
			<!-- Header Top -->
			<div class="header-top">
				<div class="outer-container">
					<div class="clearfix">
						<!-- Top Left -->
						<div class="top-left pull-left">
							<div class="text"></div>
						</div>

					</div>
				</div>
			</div>
			<!-- Header Upper -->
			<div class="header-upper">
				<div class="outer-container clearfix">
					<div class="pull-left logo-box clearfix">
						<div class="logo"><a href="index.html"><img
									src="images/logo/LiveItTrainingforLifeLogoFinalsWhiteBack_5120x2226.png"
									width="230px" alt="Live It Training" title="Live It Training"></a>
							<div class="outer-box pull-right position-relative">
								<div class="mobile-nav-toggler nav-btn navSidebar-button d-md-none"><span
										class="icon flaticon-menu"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-outer clearfix">
						<!--Mobile Navigation Toggler-->
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<!-- Toggle Button -->
								<button class="navbar-toggler" type="button" data-toggle="collapse"
									data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
									aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class=""><a href="index.html">Home</a>

									</li>
									<li class="dropdown"><a href="about.html">About</a>
										<ul>
											<li><a href="about.html">About Us</a></li>
											<li>
												<a href="index.html#testimonials"
													class="d-none d-md-block">Testimonials</a>
												<a href="index.html#testimonial-responsive"
													class="d-md-none">Testimonials</a>
											</li>
										</ul>
									</li>
									<li class="dropdown"><a href="index.html#programs">Programs</a>
										<ul>
											<li><a href="concierge.html">Live It Concierge Wellnesss</a></li>
											<li><a href="membership.html">Womens Group Program</a></li>
										</ul>
									</li>


									<li class="menu-btn"><a href="contact.php">Contact Us Now</a>
									</li>


								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<!--End Header Upper-->
			<!-- Sticky Header  -->
			<div class="sticky-header px-4">
				<div class="outer-container">
					<div class="pull-left logo-box">
						<div class="clearfix">
							<a href="index.html"><img
									src="images/logo/LiveItTrainingforLifeLogoFinalsWhiteBack_5120x2226.png"
									width="230px" alt="Live It Training" title="Live It Training"></a>
						</div>
					</div>
					<div class="outer-box pull-right position-relative">
						<div class="mobile-nav-toggler nav-btn navSidebar-button d-md-none"><span
								class="icon flaticon-menu"></span>
						</div>
					</div>
					<div class="nav-outer clearfix">
						<!--Mobile Navigation Toggler-->
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
						</nav>
					</div>
				</div>
			</div>
			<!-- End Sticky Menu -->
			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-multiply"></span></div>
				<nav class="menu-box">
					<div class="nav-logo"><a href="index.html"><img
								src="images/logo/LiveItTrainingforLifeLogoFinalsWhiteBack_512x293.png" width="175"
								alt="Live It Training" title="Live It Training"></a></div>
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
					</div>
				</nav>
			</div><!-- End Mobile Menu -->
		</header>
		<!-- End Main Header -->

		<!--Page Title-->
		<div class="card bg-dark text-white custom-page-title">
			<img class="card-img" src="./images/contact/0602_Live-It-Training_Contact_900x600.png" style="opacity: 0.6;"
				alt="Card image">
			<div class="card-img-overlay">
				<div class="auto-container">
					<div class="position-absolute" style="bottom: 30px">
						<h2 class="font-weight-bold">Contact Us</h2>
						<div id="slidertextsmallprint ">Come Alive With Us</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <section class="page-title2selfinquiry"
			style="background-image:url(./images/contact/0602_Live-It-Training_Contact_900x600.png)">
			<div class="auto-container">
				<div class="clearfix">
					<div class="pull-left">
						<h2>Contact Us</h2>
						<div id="slidertextsmallprint">Come Alive With Us</div>
					</div>
					<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Contact Us</li>
					</ul>
				</div>
				</div>
			</div>
		</section> -->
		<!--End Page Title-->



		<!-- Contact Form Section -->
		<section class="contact-form-section">
			<div class="auto-container">
				<form class="mb-5" id="userinfo" method="post" action="">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputFirstName4">First Name</label>
							<input type="text" class="form-control" id="inputFirstName4" placeholder="FirstName" name="first_name">
						</div>
						<div class="form-group col-md-6">
							<label for="inputLastName4">Last Name</label>
							<input type="text" class="form-control" id="inputLastName4" placeholder="LastName" name="last_name">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4">Email</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
						</div>
						<div class="form-group col-md-6">
							<label for="inputphone4">Phone</label>
							<input type="text" class="form-control" id="inputphone4" placeholder="phone" name="phone">
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Message</label><textarea class="form-control"
							id="exampleFormControlTextarea1" rows="3" name="message"></textarea>

					</div>
					<input type="submit" name="submit" value="Submit" class="btn btn-warning btn-block">Submit</button>
				</form>

				<div class="row clearfix">
					<div class="coach-column col-lg-6 col-md-6 col-sm-12">
						<p class="head">Connect with Us</p>
						<h4>We Love Hearing from You</h4>
						<br><br>
						<p class="texthead">Coach?</p>
						<p class="text">If you're interested in being a coach for Live It Training, please check out our
							<a href="careers/index.html">careers application.</a>
						</p>
						<br>
						<p class="texthead">Device or Software Setup Question?</p>
						<p class="text">If you have questions about device setup or are having any video or device
							issues, please <a href="mailto:info@donohueconsulting.com">select here to email us.</a></p>
						<br>
						<p class="texthead">Other Question?</p>
						<p class="text">For all other inquiries, please visit our FAQs on either our <a
								href="concierge.html#faq">Concierge Wellness Program</a> page or our <a
								href="concierge.html#faq">Women's Group Program</a> page for answers to frequently asked
							questions. If you still need assistance, please <a href="contact.php">select here to send
								us an email.</a>



							<!--  or fill in the contact form below. --> </p>

					</div>

					<!-- Title Column -->
					<div class="title-column col-lg-6 col-md-6 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<img src="images/contact/0582_Live-It-Training_Contact_600x600.png">
						</div>
					</div>



				</div>
			</div>
		</section>
		<!-- End Contact Form Section -->







		<!-- Main Footer -->
		<footer class="main-footer" style="background-image:url(./images/footer/1125_LiveItTraining_1920x650.jpg)">
			<div class="auto-container">
				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">

						<!-- Big Column -->
						<!--Footer Column-->
						<div class="footer-column col-lg-3 col-md-3 col-sm-12">
							<div class="footer-widget logo-widget">
								<div class="logo centered">
									<a href="index.html"><img src="./images/shop/YBell/0395_LiveItTraining_291x350.jpg"
											alt="YBell Weights at Live It Training" /></a>
								</div>
								<div class="text centered">
									<br>
									<div class="btns-box">
										<div class="btn-one-outer"><a href="mailto:info@live-it-training.com"
												class="theme-btn btn-style-one"><span class="txt">Email for More
													Info</span></a></div>
									</div>
								</div>

							</div>
						</div>


						<!-- Footer column holding 3 colums -->
						<div class="col-lg-9 col-md-9 col-sm-12 padlt60">
							<div class="row">

								<!-- Footer Column -->
								<div class="footer-column col-lg-3 col-md-3 col-sm-12">
									<div class="footer-widget links-widget">
										<h4>Learn</h4>
										<ul class="list-link">
											<li><a href="concierge.html">Live It Concierge Wellness</a></li>
											<li><a href="membership.html">Womens Group Program</a></li>

											<li>
												<a href="index.html#testimonials" class="d-none d-md-block">Reviews</a>
												<a href="index.html#testimonial-responsive"
													class="d-md-none">Reviews</a>
											</li>


										</ul>
									</div>
								</div>
								<!-- Footer Column -->
								<div class="footer-column col-lg-3 col-md-3 col-sm-12">
									<div class="footer-widget links-widget">
										<h4>About</h4>
										<ul class="list-link">
											<li><a href="about.html">About Us</a></li>

											<li><a href="careers/index.html">Careers</a></li>

										</ul>
									</div>
								</div>
								<!-- Footer Column -->
								<div class="footer-column col-lg-3 col-md-3 col-sm-12">
									<div class="footer-widget links-widget">
										<h4>Support</h4>
										<ul class="list-link">
											<li><a href="contact.php">Contact</a></li>

										</ul>
									</div>

								</div>
							</div>
							<div class="row clearfix social_links_centered">

								<!-- Footer Column -->
								<div class="footer-column col-lg-3 col-md-3 col-sm-12">
									<div class="footer-widget links-widget">
										&nbsp;
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-3 col-md-3 col-sm-12">
									<div class="footer-widget logo-widget">
										<div class="social-links">
											<span>Follow Us</span>
											<a href="https://www.facebook.com/liveittrainingforlife/"
												class="fa fa-facebook"></a>
											<a href="https://twitter.com/LiveItTraining1" class="fa fa-twitter"></a>
											<a href="https://www.instagram.com/live_it_training/"
												class="fa fa-instagram"></a>
											<a href="https://www.youtube.com/channel/UCthyA0qQaFc6_Lh4y57YVng"
												class="fa fa-youtube"></a>
										</div>
									</div>
								</div>
								<!-- Footer Column -->
								<div class="footer-column col-lg-3 col-md-3 col-sm-12">
									<div class="footer-widget links-widget">
										&nbsp;
									</div>
								</div>
							</div>
						</div>




					</div>
				</div>

				<!-- Footer Bottom -->
				<div class="footer-bottom">
					<div class="copyright footerlink"> <a href="privacy/Privacy_Policy.pdf">Privacy Policy</a>
						&nbsp;&nbsp;&nbsp; <a href="privacy/Terms_of_Service.pdf">Terms of Service</a>
						&nbsp;&nbsp;&nbsp; <a href="privacy/Membership_Terms.pdf">Membership Terms</a>
						&nbsp;&nbsp;&nbsp; <a href="privacy/Privacy_Policy.pdf">Your CA Privacy Rights</a>
						&nbsp;&nbsp;&nbsp; &copy; Copyright 2025 Live It LLC. All Rights Reserved. &nbsp;&nbsp;&nbsp;
						Website by <a href="http://www.donohueconsulting.com">Donohue Consulting, Inc.</a></div>
				</div>

			</div>
		</footer>

	</div>
	<!--End pagewrapper-->



	<!-- Search Popup -->
	<!-- Search Popup -->
	<!-- <div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div> -->
	<!-- End Header Search -->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/tilt.jquery.min.js"></script>
	<script src="js/jquery.paroller.min.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/mixitup.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/nav-tool.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/script.js"></script>
	<script src="js/color-settings.js"></script>
	<!--Google Map APi Key-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o"></script>
	<script src="js/map-script.js"></script>
	<!--End Google Map APi-->
	<!-- <script>
		const form = document.querySelector("#userinfo");

		async function sendData() {
			alert("Thank you for your submission. We will be in touch soon.");
		}

		// Take over form submission
		form.addEventListener("submit", (event) => {
			event.preventDefault();
			sendData();
		});
	</script> -->
</body>

</html>