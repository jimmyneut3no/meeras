@extends('layouts.app')

@section('title', 'About Us - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-banner-content">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Company</li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Company Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Our Story</h2>
                    <p>Founded in 1995, Meeras Refinery has grown from a small regional facility to one of the most advanced and efficient refineries in the industry. Our journey has been marked by continuous innovation, operational excellence, and a steadfast commitment to sustainability.</p>
                    <p>Today, we process over 500,000 barrels of crude oil per day, serving both domestic and international markets with our premium products. Our state-of-the-art facility combines cutting-edge technology with environmental responsibility to set new standards in the refining industry.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Processing Capacity</h5>
                                <p>500,000 barrels per day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Energy Efficiency</h5>
                                <p>30% more efficient than industry average</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic34.jpg') }}" alt="Meeras Refinery">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mission & Vision -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Mission & Vision</h2>
            <p>Guiding principles that drive our success</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <span class="icon-cell"><i class="flaticon-target"></i></span>
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Our Mission</h4>
                        <p>To be the leading provider of high-quality petroleum products while maintaining the highest standards of safety, environmental responsibility, and operational excellence. We are committed to delivering value to our stakeholders and contributing to sustainable development.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <span class="icon-cell"><i class="flaticon-vision"></i></span>
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Our Vision</h4>
                        <p>To be recognized globally as the most innovative and sustainable refining company, setting new standards in environmental stewardship, operational efficiency, and product quality while creating lasting value for our stakeholders and communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Values -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Our Core Values</h2>
            <p>The principles that guide our actions and decisions</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic35.jpg') }}" alt="Safety">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Safety First</h4>
                        <p>Uncompromising commitment to the safety of our people, facilities, and communities</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic36.jpg') }}" alt="Excellence">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Excellence</h4>
                        <p>Pursuit of operational excellence and continuous improvement in everything we do</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic37.jpg') }}" alt="Innovation">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Innovation</h4>
                        <p>Embracing new technologies and creative solutions to drive progress</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic38.jpg') }}" alt="Integrity">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Integrity</h4>
                        <p>Operating with honesty, transparency, and ethical business practices</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Global Presence -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Global Presence</h2>
                    <p>Our operations span across multiple continents, serving customers worldwide:</p>
                    <ul class="list-angle-right">
                        <li>North America: Headquarters and main refinery complex</li>
                        <li>Europe: Distribution centers and partnerships</li>
                        <li>Asia: Growing market presence and joint ventures</li>
                        <li>Middle East: Strategic partnerships and supply chain</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Industry Recognition</h2>
                    <p>Our commitment to excellence has been recognized through numerous awards:</p>
                    <ul class="list-angle-right">
                        <li>Safety Excellence Award 2023</li>
                        <li>Environmental Stewardship Recognition</li>
                        <li>Innovation in Technology Award</li>
                        <li>Best Employer in Energy Sector</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 