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
                        <li>Careers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Careers Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Join Our Team</h2>
                    <p>At Meeras Refinery, we're building the future of energy through innovation, sustainability, and excellence. Join our diverse team of professionals and be part of a company that's shaping the industry while making a positive impact on the world.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Global Opportunities</h5>
                                <p>Work Across Borders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Growth & Development</h5>
                                <p>Continuous Learning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic138.jpg') }}" alt="Careers at Meeras">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Join Us -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Why Join Us</h2>
            <p>Discover the benefits of being part of our team</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic139.jpg') }}" alt="Innovation">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Innovation</h4>
                        <p>Work on cutting-edge technologies and solutions that are shaping the future of energy.</p>
                        <ul class="list-angle-right">
                            <li>Research & Development</li>
                            <li>Digital Transformation</li>
                            <li>Sustainable Solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic140.jpg') }}" alt="Growth">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Growth</h4>
                        <p>Continuous learning and development opportunities to advance your career.</p>
                        <ul class="list-angle-right">
                            <li>Training Programs</li>
                            <li>Leadership Development</li>
                            <li>Career Progression</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic141.jpg') }}" alt="Impact">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Impact</h4>
                        <p>Make a difference in the world through sustainable energy solutions.</p>
                        <ul class="list-angle-right">
                            <li>Environmental Stewardship</li>
                            <li>Community Development</li>
                            <li>Global Reach</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Career Paths -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Career Paths</h2>
            <p>Explore opportunities across our organization</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic142.jpg') }}" alt="Engineering">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Engineering</h4>
                        <p>Process, Mechanical, Electrical, and Chemical Engineering roles</p>
                        <a href="{{ route('careers.opportunities') }}" class="btn btn-primary">View Jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic143.jpg') }}" alt="Operations">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Operations</h4>
                        <p>Plant Operations, Maintenance, and Quality Control positions</p>
                        <a href="{{ route('careers.opportunities') }}" class="btn btn-primary">View Jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic144.jpg') }}" alt="Technology">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Technology</h4>
                        <p>IT, Digital Transformation, and Innovation roles</p>
                        <a href="{{ route('careers.opportunities') }}" class="btn btn-primary">View Jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic145.jpg') }}" alt="Business">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Business</h4>
                        <p>Finance, HR, Marketing, and Business Development positions</p>
                        <a href="{{ route('careers.opportunities') }}" class="btn btn-primary">View Jobs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Life at Meeras -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Life at Meeras</h2>
            <p>Experience our vibrant workplace culture</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic146.jpg') }}" alt="Work Environment">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Work Environment</h4>
                        <p>Modern facilities and collaborative spaces designed for productivity and innovation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic147.jpg') }}" alt="Team Activities">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Team Activities</h4>
                        <p>Regular team-building events, sports activities, and social gatherings</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic148.jpg') }}" alt="Community Impact">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Community Impact</h4>
                        <p>Volunteer opportunities and community engagement programs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 