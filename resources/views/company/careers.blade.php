@extends('layouts.app')

@section('title', 'Careers - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-banner-content">
                    <h1>Careers</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Company</li>
                        <li>Careers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Career Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Join Our Team</h2>
                    <p>At Meeras Refinery, we're always looking for talented individuals who share our passion for innovation, sustainability, and excellence. Join us in shaping the future of energy and make a meaningful impact in the industry.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-growth"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Growth Opportunities</h5>
                                <p>Continuous learning and career development</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-people"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Diverse Culture</h5>
                                <p>Inclusive and collaborative work environment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic46.jpg') }}" alt="Careers">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Current Openings -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Current Openings</h2>
            <p>Explore exciting career opportunities with us</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <span class="icon-cell"><i class="flaticon-engineering"></i></span>
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Process Engineer</h4>
                        <p>Join our engineering team to optimize refinery processes and implement innovative solutions.</p>
                        <a href="#" class="site-button">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <span class="icon-cell"><i class="flaticon-research"></i></span>
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">R&D Scientist</h4>
                        <p>Contribute to our research initiatives and help develop next-generation refining technologies.</p>
                        <a href="#" class="site-button">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <span class="icon-cell"><i class="flaticon-safety"></i></span>
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Safety Specialist</h4>
                        <p>Ensure the highest standards of safety across our operations and facilities.</p>
                        <a href="#" class="site-button">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <span class="icon-cell"><i class="flaticon-analytics"></i></span>
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Business Analyst</h4>
                        <p>Drive business growth through data analysis and strategic insights.</p>
                        <a href="#" class="site-button">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Benefits & Culture -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Benefits & Culture</h2>
            <p>Why join Meeras Refinery?</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic47.jpg') }}" alt="Benefits">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Competitive Benefits</h4>
                        <p>Health insurance, retirement plans, and comprehensive wellness programs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic48.jpg') }}" alt="Learning">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Learning & Development</h4>
                        <p>Professional development programs and continuous learning opportunities</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic49.jpg') }}" alt="Work-Life Balance">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Work-Life Balance</h4>
                        <p>Flexible work arrangements and paid time off policies</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic50.jpg') }}" alt="Community">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Community Impact</h4>
                        <p>Opportunities to contribute to meaningful social initiatives</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Application Process -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Application Process</h2>
                    <p>How to join our team:</p>
                    <ul class="list-angle-right">
                        <li>Submit your application online</li>
                        <li>Initial screening and assessment</li>
                        <li>Technical interview with the team</li>
                        <li>Final interview with leadership</li>
                        <li>Offer and onboarding</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Stay Connected</h2>
                    <p>Don't see the right opportunity? Join our talent network:</p>
                    <ul class="list-angle-right">
                        <li>Subscribe to job alerts</li>
                        <li>Follow us on LinkedIn</li>
                        <li>Attend our recruitment events</li>
                        <li>Connect with our recruiters</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 