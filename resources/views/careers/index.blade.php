@extends('layouts.app')

@section('title', 'Careers - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Opportunities"
    parentpage="Careers"
    subtitle="Career & Opportunities"
    :background="asset('images/banner/work.webp')"
/>
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
                       <img src="{{asset('/images/mycollection/png/039-global-access.png')}}" width="50px">   
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
                       <img src="{{asset('/images/mycollection/png/021-investment.png')}}" width="50px">   
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
                    <img src="{{ asset('images/career/hero.webp') }}" alt="Careers at Meeras">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Join Us -->
<div class="section-full bg-gray content-inner pt-0">
    <div class="row mt-0 pt-0">
                        <img style="width:100%" src="{{ asset('images/career/banner.webp') }}" alt="Join Us">
            </div>
    <div class="container">
        <div class="section-head text-center mb-1">
            <h2 class="title mt-2">Why Join Us</h2>
            <p class="mt-0 pt-0">Discover the benefits of being part of our team</p>
            <hr>
        </div>
        <div class="row">
            
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
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
                        <img src="{{ asset('images/our-work/oilgas/pic142.jpg') }}" alt="Engineering">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Engineering</h4>
                        <p>Process, Mechanical, Electrical, and Chemical Engineering roles</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-work/oilgas/pic143.jpg') }}" alt="Operations">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Operations</h4>
                        <p>Plant Operations, Maintenance, and Quality Control positions</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-work/oilgas/pic144.jpg') }}" alt="Technology">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Technology</h4>
                        <p>IT, Digital Transformation, and Innovation roles</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-work/oilgas/pic145.jpg') }}" alt="Business">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Business</h4>
                        <p>Finance, HR, Marketing, and Business Development positions</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Life at Meeras -->
<div class="section-full bg-gray content-inner">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                        <img src="{{ asset('images/career/hero.webp') }}" alt="Team Activities">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                        <div class="section-head mb-1">
                            <h2 class="title mb-0">Life at Meeras</h2>
                            <p class="p-0 mb-0">Experience our vibrant workplace culture</p>
                            <hr>
                        </div>
                <div class="dlab-box">
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i>  Work Environment</h6>
                        <p style="margin-left:20px">Modern facilities and collaborative spaces designed for productivity and innovation</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Team Activities</h6>
                        <p style="margin-left:20px">Regular team-building events, sports activities, and social gatherings</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Community Impact</h6>
                        <p style="margin-left:20px">Volunteer opportunities and community engagement programs</p>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
@endsection 