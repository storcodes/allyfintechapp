<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Fintech App') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Links Of CSS File -->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="/assets/css/flaticon.css">
		<link rel="stylesheet" href="/assets/css/remixicon.css">
		<link rel="stylesheet" href="/assets/css/meanmenu.min.css">
		<link rel="stylesheet" href="/assets/css/animate.min.css">
		<link rel="stylesheet" href="/assets/css/odometer.min.css">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="/assets/css/responsive.css">

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="/assets/images/favicon.png">


    </head>
    <body>
        <!-- Start Preloader Area -->
		{{-- <div class="preloader" id="loader-style">
			<div class="preloader-wrap">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div> --}}
		<!-- End Preloader Area -->

		<!-- Start Heading Area -->
		<div class="header-area">
			<div class="top-header-area">
				<div class="container-fluid">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-4 col-md-6">
							<ul class="header-left-content">
								<li>
									<span>Call:</span>
									<a href="tel:+1-541-754-3010">
										+234 91-342-1234
									</a>
								</li>

							</ul>
						</div>
						<div class="col-lg-4 col-md-6">
							<ul class="header-middle-content">
								<li>
									<p>We are the best at loan offers . <a href="features.html">Find your offer</a></p>
								</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6">
							<ul class="header-right-content">
								<li>
									<a href="contact-us.html">Support</a>
								</li>
								<li>
									<a href="faq.html">Help</a>
								</li>
								<li class="language">
									<select class="form-select" aria-label="Default select example">
										<option selected>Language</option>
										<option value="1">English</option>
										<option value="2">العربيّة</option>
										<option value="3">Deutsch</option>
									</select>
									<i class="ri-global-line"></i>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Heading Area -->

		<!-- Start Navbar Area -->
		<div class="navbar-area">
			<div class="mobile-responsive-nav">
				<div class="container">
					<div class="mobile-responsive-menu">
						<div class="logo">
							<a href="index.html">
								<h3>ALLY</h3>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="desktop-nav">
				<div class="container-fluid">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="index.html">
							 <h3>ALLY</h3>
						</a>

						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav ms-auto">
								<li class="nav-item">
									<a href="#" class="nav-link active">
										Home
									</a>


								</li>

								<li class="nav-item">

										<a href="about-us.html" class="nav-link">About Us</a>



								</li>

								<li class="nav-item">
									<a href="money-transfer.html" class="nav-link">Money Transfer</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link ">
										Features
									</a>


								</li>

								<li class="nav-item">
									<a href="#" class="nav-link ">
										Loan
									</a>

								</li>

								<li class="nav-item">
									<a href="contact-us.html" class="nav-link">Contact Us</a>
								</li>
							</ul>

							<div class="others-options">
								<ul>
									<li>
										<a href="{{route('login')}}" class="default-btn login">
											Login
										</a>
									</li>
									<li>
										<a href="{{route('register')}}" class="default-btn">
											Register
										</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>

			<div class="others-option-for-responsive">
				<div class="container">
					<div class="dot-menu">
						<div class="inner">
							<div class="circle circle-one"></div>
							<div class="circle circle-two"></div>
							<div class="circle circle-three"></div>
						</div>
					</div>

					<div class="container">
						<div class="option-inner">
							<div class="others-options justify-content-center d-flex align-items-center">
								<ul>
									<li>
										<a href="{{route('login')}}" class="default-btn login">
											Login
										</a>
									</li>
									<li>
										<a href="{{route('register')}}" class="default-btn">
											Register
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Navbar Area -->
        <div>  @yield('content')</div>


		<!-- Start Footer Area -->
		<div class="footer-area pt-100 pb-70 bg-color-0f0e0e">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-widget">
							<div class="footer-logo">
								<a href="index.html">
									<img src="/assets/images/white-logo.png" alt="Image">
								</a>
							</div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit odit ex laboriosam veritatis. Dolor sit optio maxime</p>

							<ul class="social-link">
								<li>
									<span>Follow Us:</span>
								</li>
								<li>
									<a href="https://facebook.com/" target="_blank">
										<i class="flaticon-facebook"></i>
									</a>
								</li>
								<li>
									<a href="https://instagram.com/" target="_blank">
										<i class="flaticon-instagram"></i>
									</a>
								</li>
								<li>
									<a href="https://twitter.com/" target="_blank">
										<i class="flaticon-twitter"></i>
									</a>
								</li>
								<li>
									<a href="https://linkedin.com/" target="_blank">
										<i class="flaticon-linkedin"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-widget ml-30">
							<h3>Quick Link</h3>

							<ul class="use-full-link">
								<li>
									<a href="about-us.html">About Us</a>
								</li>
								<li>
									<a href="features.html">Features</a>
								</li>
								<li>
									<a href="feature-details.html">Feature Details</a>
								</li>
								<li>
									<a href="money-transfer.html">Money Transfer</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-widget ml-30">
							<h3>Help Center</h3>

							<ul class="use-full-link">
								<li>
									<a href="contact-us.html">Contact Us</a>
								</li>
								<li>
									<a href="faq.html">Get Help</a>
								</li>
								<li>
									<a href="privacy-policy.html">Privacy Policy</a>
								</li>
								<li>
									<a href="terms-conditions.html">Terms & Conditions</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-widget">
							<h3>Contact Info</h3>

							<ul class="address-link">
								<li>
									<i class="flaticon-phone-call"></i>
									<span>Call Us:</span>
									<a href="tel:+(323)-750-1234">+(323) 750-1234</a>
								</li>
								<li>
									<i class="flaticon-email"></i>
									<span>Address:</span>
									+7011 Vermont Ave, Los Angeles, CA 90044
								</li>
								<li>
									<i class="flaticon-phone-call"></i>
									<span>Mail Us:</span>
									<a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#4d25282121220d2f24393f632e2220"><span class="__cf_email__" data-cfemail="cfa7aaa3a3a08fada6bbbde1aca0a2">[email&#160;protected]</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Area -->

		<!-- Start CopyRight Area -->
		<div class="copy-right-area bg-color-1e1d1d">
			<div class="container">
				<div class="copy-right-content">
					<p>© <span id="year"></span> BITR Theme, All rights reserved by <a href="https://envytheme.com/" target="blank">EnvyTheme</a></p>
				</div>
			</div>
		</div>
		<!-- End CopyRight Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
		<script src="/assets/js/meanmenu.min.js"></script>
		<script src="/assets/js/owl.carousel.min.js"></script>
		<script src="/assets/js/wow.js"></script>
		<script src="/assets/js/appear.min.js"></script>
		<script src="/assets/js/odometer.min.js"></script>
		<script src="/assets/js/form-validator.min.js"></script>
		<script src="/assets/js/contact-form-script.js"></script>
		<script src="/assets/js/custom.js"></script>
    </body>
</html>
