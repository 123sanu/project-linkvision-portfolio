<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106891719-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments)
		};
		gtag('js', new Date());
		gtag('config', 'UA-106891719-1');
	</script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="linkvisionsoftwaresolution">
	<meta name="description" content="We LinkVision Software Solution committed to provide quality services." />
	<meta name="keywords" content="Web App Development, Mobile App development, iPhone App development, Custom Software Development, Website Design and Development, Dedicated Developer, Dedicated Team of Web Developers">
	
	<link rel="icon" type="image/png" sizes="32x32" href="{{URL::to('public/home/resources/img/favicon-32x32.png')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/home/vendors/css/normalize.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/home/vendors/css/grid.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/home/vendors/css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/home/vendors/css/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/home/vendors/css/ionicons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/home/vendors/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/home/resources/css/styles.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<title>LinkVision Software Solution | Quality &amp; Service</title>
</head>

<body>
	<!-- Section:01 | Header -->
	<header id="home">
		<nav class="sticky">
			<div class="row">
				<a href="#home">
					<img src="{{URL::to('public/home/resources/img/Logo-White.png')}}" alt="LinkVision Logo" class="logo">
				</a>
				<a href="#home">
					<img src="{{URL::to('public/home/resources/img/Logo-Black.png')}}" alt="LinkVision Logo" class="logo-black">
				</a>
				<ul class="main-nav">
					<li>
						<a href="#home">Home</a>
					</li>
					<li>
						<a href="#services">Services</a>
					</li>
					<li>
						<a href="#works">Works</a>
					</li>
					<li>
						<a href="#contactus">Contact&nbsp;Us</a>
					</li>
					<li class="main-nav-divider">|</li>
					<li class="main-nav-phone">
						<a href="tel:+880251040193">
							<img src="{{URL::to('public/home/resources/img/phone.png')}}" alt="phone logo">0251040193</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="hero-text-box">
			<h1>LinkVision</h1>
			<div id="typed-strings">
				<span>A technology partner you can bank on</span>
				<span>We build digital products that users love</span>
				<span>We Make Ideas Come Alive</span>
				<span>We Are Group of Skilled Developers</span>
				<span>Powered by People, Ideas and Technology</span>
				<span>We Are Professionals</span>
				<span>We Make Ideas Come Alive</span>
				<span>Build the right thing</span>
			</div>
			<span id="typed"></span>
		</div>
		<div class="icon-scroll"></div>
	</header>
	
	
	
	
	
	
	
	
	

	<!-- Section:02 | Services -->
	<section class="section-services js--section-services" id="services">	
		<div class="row">           	
             @yield('service')	
        </div> 
	</section>
	
	
	
	
	

	<!-- Section:03 | Our Technologies -->
	<section class="section-our-technologies" >
		<div class="row">
			<h2>Technology</h2>
			<h5>We understand and are proficient in the tools necessary to build modern applications. Our teams design robust and scalable
				solutions by choosing the right technology stack to build your app.</h5>
			<!-- Start: showing icons using slick -->
			<div class="our-tech-icons center">				
				@yield('technology')				
			</div>
			<!-- End: showing icons using slick -->
		</div>
	</section>

	<!-- Section: 04 | Portfolio -->
	<section class=section-portfolio id="works">
		<div class="row">
			<h2>Powered by Excellence</h2>
			<h5>Wide range of successful projects</h5>
		</div>
		<div class="row">
			<div class="portfolio-container">
				<!------ Pavilion ------>
				
				
				
				@yield('project')

				<!------ Medical eLearning ------>
				

				<!------ School Management System ------>
				

				
				

			</div>
		</div>
	</section>
	
	
	

	<!-- Section:04 | Developments Process -->
	<section class="section-development-process" id="section-4">
		<div class="row">
			<h2>Development&nbsp;Process</h2>
			<h5>Each application is designed by a senior architect who ensures your application is sleek, secure &amp; scalable.</h5>
			<!-- Start: Tab Contents -->
			<div class="tab-container">
				<ul class="tabs">
					<li>
						<a id="tab-item-1">UI / UX</a>
					</li>
					<li>
						<a id="tab-item-2">Architecture</a>
					</li>
					<li>
						<a id="tab-item-3">API Layer</a>
					</li>
					<li>
						<a id="tab-item-4">Back End</a>
					</li>
					<li>
						<a id="tab-item-5">External APIs</a>
					</li>
					<li>
						<a id="tab-item-6">Unit Testing</a>
					</li>
					<li>
						<a id="tab-item-7">Deployment &amp; Hosting</a>
					</li>
				</ul>
			</div>
			<!-- Start: Tab Container -->
			<div class="content-container">
				@yield('process')
			</div>
		</div>
	</section>

	
	
	
	
	
	<!-- Section:06 | Customer Review -->
	<section class="section-customer-review" id="section-6">
		<div class="row">
			<h2>Our Clients</h2>			
			<div class="section-content">			
			@yield('client')
			</div>
		</div>
	</section>


	<!-- Section:07 | Our Team -->
	<section class="section-our-tem" id="team">
		<div class="row">
			<h2>Meet&nbsp;The&nbsp;Team</h2>
		</div>
		<div class="row">
			@yield('team')
		</div>
	</section>

	<!-- Section:08 | Contact -->
	<section class="section-contact js--animation-contact" id="contactus">
		<div class="row">
			<div class="phone-info">
				<a href="tel:+8801971992650">
					<img src="{{URL::to('public/home/resources/img/phone-white.png')}}" alt="phone icon">+88 01971 992 650</a>
			</div>
			<div class="email">
				<a href="mailto:info@linkvisionsoft.com">info@linkvisionsoft.com</a>
			</div>
			<address>
				Flat: G1, House: 123, Road: 01, Avenue: 03
				<br> Mirpur DOHS, Dhaka, Bangladesh
			</address>
		</div>
	</section>

	<!-- Secton:09 | Map -->
	<section class="section-map" id="section-9">
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1824.7840725364254!2d90.367069!3d23.833951!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5bb8819e06f749c9!2sLinkVision+Software+Solution!5e0!3m2!1sen!2sus!4v1501318075714"
		 allowfullscreen></iframe>
	</section>

	<!-- Section:10 | Footer -->
	<footer>
		<div class="row">
			<div class="col span-1-of-2">
				<ul class="copyright">
				    <li>Using Framework
						<a href="">Laravel 5.5</a>
					</li>
					<li>Design &amp; Developed by
						<a href="#team">Md. Kamrul Hasan (Web Developer)</a>
					</li>
					<li>Copyright &copy; {{date('Y')}} by
						<a href="#home">LinkVision Software Solution</a>
					</li>
				</ul>
			</div>
			<div class="col span-1-of-2">
				<ul class="social-links">
					<li>
						<a href="#">
							<!--<i class="ion-social-facebook"></i>-->
							<img class="icon" src="{{URL::to('public/ico/s1.png')}}">
						</a>
					</li>
					<li>
						<a href="#">
							<!--<i class="ion-social-twitter"></i>-->
							<img class="icon" src="{{URL::to('public/ico/s2.png')}}">
						</a>
					</li>
					<li>
						<a href="#">
							<!--<i class="ion-social-google"></i>-->
							<img class="icon" src="{{URL::to('public/ico/s3.png')}}">
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="made-with">
				<p>Made with
					<i class="ion-coffee"></i> at LinkVision Software Solution</p>
				<p>Made with
					<i class="ion-heart"></i> by LinkVision Team</p>
				<p>Proudly made in
					<i class="ion-android-pin"></i> Dhaka</p>
			</div>
		</div>
	</footer>
	<!-- Section: Scripts -->
	<script src="{{URL::to('public/home/vendors/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{URL::to('public/home/vendors/js/typed.js')}}"></script>
	<script src="{{URL::to('public/home/vendors/js/slick.min.js')}}"></script>
	<script src="{{URL::to('public/home/vendors/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{URL::to('public/home/resources/js/script.js')}}"></script>
</body>

</html>