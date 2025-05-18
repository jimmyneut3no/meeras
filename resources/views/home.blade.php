@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="dz-industry2-zone position-relative">
    <div class="swiper mySwiper">  
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="silder-img overlay-black-middle">
                    <img src="{{ asset('images/main-slider/slider-1.webp') }}" data-swiper-parallax="30%" alt="Meeras Refinery">
                </div>
                <div class="silder-content">
                    <h1 class="title fw-semibold">Sustainable Energy Solutions for Tomorrow</h1>
                    <p class="m-b30">Leading the way in advanced refining technologies with our proprietary X-Clean™ process, delivering cleaner fuels and sustainable energy solutions</p>
                    <div class="dz-btns d-flex align-items-center"> 
                        <a href="{{ route('company.about') }}" class="site-button primary border-1">Our Technology</a>
                        <a href="{{ route('sustainability.index') }}" class="site-button outline white">Sustainability</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="silder-img overlay-black-middle">
                    <img src="{{ asset('images/main-slider/pic1.webp') }}" data-swiper-parallax="30%" alt="Meeras Operations">
                </div>
                <div class="silder-content">
                    <h1 class="title fw-semibold">Advanced Refining Operations</h1>
                    <p class="m-b30">State-of-the-art facilities processing over 500,000 barrels per day with cutting-edge technology and environmental responsibility</p>
                    <div class="dz-btns d-flex align-items-center"> 
                        <a href="{{ route('business.operations') }}" class="site-button primary border-1">Our Operations</a>
                        <a href="{{ route('careers.index') }}" class="site-button outline white">Join Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
		<!-- contact area -->
        <div class="content-block">
			<!-- Content Section -->
			<div class="section-full">
				<div class="row spno about-industry">
					<div class="col-lg-8 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="dlab-post-media dlab-img-effect zoom"> 
							<img src="images/banner/innovation.webp" alt="" class="img-cover">
						</div>
					</div>
					<div class="col-lg-4 bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="service-box style2">
							<div>
								<h2 class="title"><span>Driven by</span> <br>Innovation.</h2>
                        <p>SInce established, Meeras Refinery has grown into a leader in crude oil processing and renewable fuel production. Our vision is built on purpose — delivering energy that fuels progress while protecting the planet.</p>
                        <a href="{{ route('company.about') }}" class="site-button outline outline-2 btnhover11">ABOUT US</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="dlab-post-media dlab-img-effect zoom"> 
							<img src="images/our-work/oilgas/pic2.jpg" alt="" class="img-cover">
						</div>
					</div>
					<div class="col-lg-4 bg-secondry text-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
						<div class="service-box style2">
							<div>
								<h2 class="title"><span>Operational </span> <br>Excellence.</h2>
								<p>Our operations are built on precision, reliability, and innovation, delivering unmatched quality and output with environmental integrity.</p>
								<a href="{{route('business.operations')}}" class="site-button outline white outline-2 btnhover11">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="dlab-post-media dlab-img-effect zoom"> 
							<img src="images/our-work/oilgas/pic3.jpg" alt="" class="img-cover">
						</div>
					</div>
					<div class="col-lg-4 bg-primary text-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="service-box style2">
							<div>
								<h2 class="title"><span>Investor</span> <br>Confidence.</h2>
								<p>Meeras Refinery is committed to delivering consistent value to shareholders. Our growth is fueled by innovation, efficiency, and responsible governance.</p>
								<a href="{{route('investors.index')}}" class="site-button outline white outline-2 btnhover11">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="dlab-post-media dlab-img-effect zoom"> 
							<img src="images/our-work/oilgas/pic4.jpg" alt="" class="img-cover">
						</div>
					</div>
					<div class="col-lg-4 bg-primary text-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
						<div class="service-box style2">
							<div>
								<h2 class="title"><span>Advanced</span> <br>Refining.</h2>
                        <p>Utilizing our proprietary X-Clean™ technology for superior fuel quality and reduced environmental impact.</p>
                        <a href="{{ route('business.technology') }}" class="site-button outline white outline-2 btnhover11">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="service-box style2">
					<div>
                        <h2 class="title"><span>Sustainable</span> <br>Energy.</h2>
                        <p>Committed to reducing carbon footprint through innovative refining processes and renewable energy integration.</p>
                        <a href="{{ route('sustainability.index') }}" class="site-button outline outline-2 btnhover11">OUR COMMITMENT</a>
                    </div>
						</div>
					</div>
					<div class="col-lg-8 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="dlab-post-media dlab-img-effect zoom"> 
							<img src="images/banner/sustainability.webp" alt="" class="img-cover">
						</div>
					</div>
				</div>
			</div>
			<!-- Content Section End -->
		</div>
		<!-- contact area END -->

@endsection 