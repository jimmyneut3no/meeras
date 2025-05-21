<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Meeras Refinery, Oil Refinery, Sustainable Energy, X-Clean Technology">
    <meta name="author" content="Meeras Refinery">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Meeras Refinery - Leading sustainable energy solutions with advanced refining technologies">
    <meta property="og:title" content="Meeras Refinery - Sustainable Energy Solutions">
    <meta property="og:description" content="Leading the way in advanced refining technologies with our proprietary X-Clean™ process">
    <meta name="format-detection" content="telephone=no">
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    
    <!-- PAGE TITLE -->
    <title>@yield('title', 'Meeras Refinery - Sustainable Energy Solutions')</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/skin/skin-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templete.css') }}">
    
    <!-- REVOLUTION SLIDER CSS -->
    @if (request()->routeIs('home'))
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/revolution.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/swiper/swiper-bundle.min.css') }}">
    @endif
</head>
<body id="bg">
<div class="page-wraper">
    {{-- <div id="loading-area"></div> --}}
    <!-- Header -->
    <header class="site-header mo-left header">
        <!-- Main Header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix dz-header">
                <div class="container-fluid clearfix">
                    <!-- Website Logo -->
                    <div class="logo-header mostion logo-dark">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.svg') }}" alt="Meeras Refinery">
                        </a>
                    </div>
                    
                    <!-- Nav Toggle Button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                                        <!-- extra nav -->
                                        <div class="extra-nav border-0">
                                            <div class="extra-cell d-flex align-items-center gap-5 gap-xl-3 d-none d-lg-flex">
                                                <a href="#" style=" width:40px;"><img style="border-radius:5px;" src="{{asset('images/Flag_of_Kazakhstan.webp')}}"></a> 
                                                <a class="button dz-bannerbtn bg-primary" href="{{route('contact')}}">Reach Out</a> 
                                            </div>
                                        </div>
                                        <!-- Quik search -->
                                        <div class="dlab-quik-search">
                                            <form action="#">
                                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                                <span id="quik-search-remove"><i class="ti-close"></i></span>
                                            </form>
                                        </div>
                    <!-- Main Nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-around" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">    
                            <li class="{{ request()->routeIs('company.*') ? 'active' : '' }}">
                                <a href="{{ route('company.about') }}">Company</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('company.about') }}">About Us</a></li>
                                    <li><a href="{{ route('company.leadership') }}">Leadership</a></li>
                                    <li><a href="{{ route('company.history') }}">History</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('business.*') ? 'active' : '' }}">
                                <a href="{{ route('business.operations') }}">Businesses</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('business.operations') }}">Refining Operations</a></li>
                                    <li><a href="{{ route('business.technology') }}">Latest Technology</a></li>
                                    <li><a href="{{ route('business.products') }}">Our Products</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('sustainability.*') ? 'active' : '' }}">
                                <a href="{{ route('sustainability.index') }}">Sustainability</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('sustainability.environment') }}">Environment</a></li>
                                    <li><a href="{{ route('sustainability.safety') }}">Safety</a></li>
                                    <li><a href="{{ route('sustainability.community') }}">Community</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('investors.*') ? 'active' : '' }}">
                                <a href="{{ route('investors.index') }}">Investors</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('investors.financials') }}">Financials</a></li>
                                    <li><a href="{{ route('investors.reports') }}">Reports</a></li>
                                    <li><a href="{{ route('investors.presentations') }}">Presentations</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('media.*') ? 'active' : '' }}">
                                <a href="{{ route('media.news') }}">Media</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('media.news') }}">News</a></li>
                                    <li><a href="{{ route('media.press') }}">Press Releases</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('careers.*') ? 'active' : '' }}">
                                <a href="{{ route('careers.index') }}">Careers</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('careers.opportunities') }}">Opportunities</a></li>
                                    <li><a href="{{ route('careers.culture') }}">Culture</a></li>
                                </ul>
                            </li>
                        </ul>
                        
                        <!-- Social Icons -->
                        <div class="dlab-social-icon">
                            <ul>
                                <li><a class="site-button facebook circle-sm outline fab fa-facebook-f" href="javascript:void(0);"></a></li>
                                <li><a class="site-button twitter circle-sm outline fab fa-twitter" href="javascript:void(0);"></a></li>
                                <li><a class="site-button linkedin circle-sm outline fab fa-linkedin-in" href="javascript:void(0);"></a></li>
                                <li><a class="site-button instagram circle-sm outline fab fa-instagram" href="javascript:void(0);"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header End -->
    </header>
    <!-- Header End -->
    
    <!-- Content -->
    <div class="page-content bg-white">
        @yield('content')
    </div>
    <!-- Content End -->
    
    <!-- Footer -->
    <footer class="site-footer style2">
                <!-- Footer Top -->
		<div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="widget widget_about">
							<div class="footer-logo logo-dark">
								<a href="{{ route('home') }}"><img src="{{ asset('images/logo.svg') }}" alt="Meeras Refinery"></a>
							</div>
							<p>Meeras Refinery is a leading energy company in Kazakhstan, committed to sustainable development and excellence in oil refining. Our state-of-the-art facility in Atyrau serves as a key player in Central Asia's energy sector.</p>
							<div class="widget widget_getintuch">
								<ul>
									<li><i class="ti-location-pin"></i>Baqtygerey Qulmanov St 107, Atyrau, Kazakhstan</li>
									<li><i class="ti-mobile"></i> <a href="tel:+7712XXXXXXX">+7 (712) XXX-XXXX</a>(24/7 Support Line)</li>
									<li><i class="ti-email"></i> <a href="mailto:info@meerasrefinery.kz">info@meerasrefinery.kz</a></li>
								</ul>
							</div>
							<ul class="list-inline m-a0">
								<li><a href="https://facebook.com/meerasrefinery" class="site-button-link facebook button-md"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://linkedin.com/company/meeras-refinery" class="site-button-link linkedin button-md"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="https://instagram.com/meerasrefinery" class="site-button-link instagram button-md"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://twitter.com/meerasrefinery" class="site-button-link twitter button-md"><i class="fab fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget">
                            <h4 class="footer-title">Quick Links</h4>
                            <ul class="list-2">
                                <li><a href="{{ route('company.about') }}">About Us</a></li>
                                <li><a href="{{ route('sustainability.index') }}">Sustainability</a></li>
                                <li><a href="{{ route('business.operations') }}">Operations</a></li>
                                <li><a href="{{ route('investors.index') }}">Investors</a></li>
                                <li><a href="{{ route('careers.index') }}">Careers</a></li>
                                <li><a href="{{ route('media.news') }}">News & Media</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>							
                        </div>
						<div class="widget">
                            <h4 class="footer-title mb-2">Newsletter</h4>
							<p>Subscribe to our newsletter for the latest updates on our operations and industry news in Kazakhstan.</p>
							<div class="subscribe-form m-b20 m-t30">
								<form class="dzSubscribe" action="{{ route('contact') }}" method="post">
									@csrf
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="email" required="required" class="form-control radius-no" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-no">SUBSCRIBE</button>
										</span> 
									</div>
								</form>
							</div>
						</div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget recent-posts-entry">
                            <h4 class="footer-title">Latest News</h4>
							<div class="widget-post-bx">
								<div class="widget-post clearfix">
									<div class="dlab-post-media"> 
										<img src="{{ asset('images/blog/recent-blog/pic1.jpg') }}" width="200" height="143" alt="Latest News"> 
									</div>
									<div class="dlab-post-info">
										<div class="dlab-post-meta">
											<ul>
												<li class="post-date"> <strong>15 May</strong> </li>
												<li class="post-author"> By <a href="#">Meeras Team</a> </li>
											</ul>
										</div>
										<div class="dlab-post-header">
											<h6 class="post-title"><a href="#">Meeras Refinery Expands Operations in Atyrau</a></h6>
										</div>
									</div>
								</div>
								<div class="widget-post clearfix">
									<div class="dlab-post-media"> 
										<img src="{{ asset('images/blog/recent-blog/pic2.webp') }}" width="200" height="160" alt="Latest News"> 
									</div>
									<div class="dlab-post-info">
										<div class="dlab-post-meta">
											<ul>
												<li class="post-date"> <strong>10 Mar</strong> </li>
												<li class="post-author"> By <a href="#">Meeras Team</a> </li>
											</ul>
										</div>
										<div class="dlab-post-header">
											<h6 class="post-title"><a href="#">New Sustainability Initiatives Launched</a></h6>
										</div>
									</div>
								</div>
								<div class="widget-post clearfix">
									<div class="dlab-post-media"> 
										<img src="{{ asset('images/blog/recent-blog/pic3.jpg') }}" width="200" height="160" alt="Latest News"> 
									</div>
									<div class="dlab-post-info">
										<div class="dlab-post-meta">
											<ul>
												<li class="post-date"> <strong>05 Jan</strong> </li>
												<li class="post-author"> By <a href="#">Meeras Team</a> </li>
											</ul>
										</div>
										<div class="dlab-post-header">
											<h6 class="post-title"><a href="#">Q4 2023 Financial Results Announced</a></h6>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Footer Top End -->
    </footer>
    <!-- Footer End -->
</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('plugins/wow/wow.js') }}"></script><!-- WOW JS -->

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('plugins/lightgallery/js/lightgallery-all.min.js') }}"></script><!-- Lightgallery -->
<script src="{{ asset('plugins/scroll/scrollbar.min.js') }}"></script><!-- scroll -->
<script src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('js/dz.carousel.min.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('plugins/countdown/jquery.countdown.js') }}"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="{{ asset('plugins/swiper/swiper-bundle.min.js') }}"></script><!-- Swiper JS -->
<script src="{{ asset('js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('plugins/rangeslider/rangeslider.js') }}"></script><!-- Rangeslider -->
<script src="{{ asset('js/jquery.lazy.min.js') }}"></script>
@if (request()->routeIs('home'))
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('js/rev.slider.js') }}"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_4();	
	$('.lazy').Lazy();
});	/*ready*/
</script>

<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper(".mySwiper", {
		pagination: {
			el: ".swiper-pagination",
		},
	});
</script>
@endif
</body>
</html>