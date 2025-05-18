@extends('layouts.app')

@section('title', 'Employee Benefits - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-banner-content">
                    <h1>Employee Benefits</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Careers</li>
                        <li>Benefits</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Benefits Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Comprehensive Benefits</h2>
                    <p>At Meeras Refinery, we believe in taking care of our employees. Our comprehensive benefits package is designed to support your health, well-being, and financial security, both now and in the future.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Health & Wellness</h5>
                                <p>Comprehensive Coverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Financial Security</h5>
                                <p>Future Planning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic165.jpg') }}" alt="Employee Benefits">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Health & Wellness -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Health & Wellness</h2>
            <p>Taking care of your well-being</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic166.jpg') }}" alt="Medical Coverage">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Medical Coverage</h4>
                        <p>Comprehensive health insurance for you and your family.</p>
                        <ul class="list-angle-right">
                            <li>Medical insurance</li>
                            <li>Dental coverage</li>
                            <li>Vision care</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic167.jpg') }}" alt="Wellness Programs">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Wellness Programs</h4>
                        <p>Programs to support your physical and mental well-being.</p>
                        <ul class="list-angle-right">
                            <li>Fitness facilities</li>
                            <li>Mental health support</li>
                            <li>Wellness workshops</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic168.jpg') }}" alt="Work-Life Balance">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Work-Life Balance</h4>
                        <p>Support for maintaining a healthy work-life balance.</p>
                        <ul class="list-angle-right">
                            <li>Flexible hours</li>
                            <li>Remote work options</li>
                            <li>Paid time off</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Financial Benefits -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Financial Benefits</h2>
            <p>Securing your financial future</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic169.jpg') }}" alt="Retirement Plans">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Retirement Plans</h4>
                        <p>Comprehensive retirement planning options to secure your future.</p>
                        <ul class="list-angle-right">
                            <li>401(k) matching</li>
                            <li>Pension plans</li>
                            <li>Financial planning</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic170.jpg') }}" alt="Compensation">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Competitive Compensation</h4>
                        <p>Attractive salary packages and performance-based incentives.</p>
                        <ul class="list-angle-right">
                            <li>Competitive salaries</li>
                            <li>Performance bonuses</li>
                            <li>Stock options</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Benefits -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Additional Benefits</h2>
            <p>Extra perks that make a difference</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic171.jpg') }}" alt="Learning & Development">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Learning & Development</h4>
                        <p>Continuous learning opportunities to grow your career.</p>
                        <ul class="list-angle-right">
                            <li>Training programs</li>
                            <li>Professional development</li>
                            <li>Tuition assistance</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic172.jpg') }}" alt="Family Support">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Family Support</h4>
                        <p>Benefits to support you and your family.</p>
                        <ul class="list-angle-right">
                            <li>Parental leave</li>
                            <li>Childcare assistance</li>
                            <li>Family events</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic173.jpg') }}" alt="Workplace Perks">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Workplace Perks</h4>
                        <p>Additional benefits to enhance your work experience.</p>
                        <ul class="list-angle-right">
                            <li>On-site amenities</li>
                            <li>Employee discounts</li>
                            <li>Social events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 