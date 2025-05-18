@extends('layouts.app')

@section('title', 'Our Culture - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-banner-content">
                    <h1>Our Culture</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Careers</li>
                        <li>Culture</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Culture Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Our Culture</h2>
                    <p>At Meeras Refinery, we foster a culture of innovation, collaboration, and excellence. Our diverse team of professionals is united by a shared commitment to making a positive impact on the world through sustainable energy solutions.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Diversity</h5>
                                <p>Inclusive Workplace</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Innovation</h5>
                                <p>Creative Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic156.jpg') }}" alt="Our Culture">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Values -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Our Core Values</h2>
            <p>The principles that guide our actions</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic157.jpg') }}" alt="Safety">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Safety First</h4>
                        <p>We prioritize the safety and well-being of our employees, communities, and environment in everything we do.</p>
                        <ul class="list-angle-right">
                            <li>Zero harm commitment</li>
                            <li>Safety training</li>
                            <li>Risk management</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic158.jpg') }}" alt="Excellence">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Excellence</h4>
                        <p>We strive for excellence in all aspects of our operations, from technical performance to customer service.</p>
                        <ul class="list-angle-right">
                            <li>Quality standards</li>
                            <li>Continuous improvement</li>
                            <li>Best practices</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic159.jpg') }}" alt="Sustainability">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Sustainability</h4>
                        <p>We are committed to sustainable practices and responsible resource management.</p>
                        <ul class="list-angle-right">
                            <li>Environmental care</li>
                            <li>Social responsibility</li>
                            <li>Future focus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Work Environment -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Work Environment</h2>
            <p>Where innovation meets collaboration</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic160.jpg') }}" alt="Modern Facilities">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Modern Facilities</h4>
                        <p>State-of-the-art offices and workspaces designed for productivity and collaboration.</p>
                        <ul class="list-angle-right">
                            <li>Open workspaces</li>
                            <li>Meeting rooms</li>
                            <li>Collaboration zones</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic161.jpg') }}" alt="Work-Life Balance">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Work-Life Balance</h4>
                        <p>We support our employees in maintaining a healthy balance between work and personal life.</p>
                        <ul class="list-angle-right">
                            <li>Flexible hours</li>
                            <li>Remote work options</li>
                            <li>Wellness programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Employee Experience -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Employee Experience</h2>
            <p>Hear from our team members</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic162.jpg') }}" alt="Employee Story 1">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Sarah Johnson</h4>
                        <p class="position">Process Engineer</p>
                        <p>"The collaborative environment and focus on innovation make every day exciting. I've grown both professionally and personally since joining the team."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic163.jpg') }}" alt="Employee Story 2">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Michael Chen</h4>
                        <p class="position">Digital Transformation Lead</p>
                        <p>"The company's commitment to sustainability and innovation creates an inspiring workplace. I'm proud to be part of a team that's making a real difference."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic164.jpg') }}" alt="Employee Story 3">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Maria Garcia</h4>
                        <p class="position">Sustainability Analyst</p>
                        <p>"The supportive culture and opportunities for growth have helped me develop my career. It's rewarding to work for a company that values both people and planet."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 