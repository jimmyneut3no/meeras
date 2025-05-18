@extends('layouts.app')

@section('title', 'Safety & Security - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Safety"
    parentpage="Sustainability"
    subtitle="Safety & Security"
    :background="asset('images/banner/breadcrumb-sus.webp')"
/>
<!-- Safety Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Our Safety Commitment</h2>
                    <p>At Meeras Refinery, safety is our top priority. We maintain the highest standards of health, safety, and security across all our operations. Our comprehensive safety management system ensures the well-being of our employees, contractors, and communities.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Safety Record</h5>
                                <p>Zero Lost Time Injuries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Certifications</h5>
                                <p>ISO 45001 Certified</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic83.jpg') }}" alt="Safety Commitment">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Safety Management -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Safety Management System</h2>
            <p>Our comprehensive approach to safety</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic84.jpg') }}" alt="Risk Assessment">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Risk Assessment</h4>
                        <p>Comprehensive risk identification and management processes to prevent incidents and ensure safe operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic85.jpg') }}" alt="Training">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Safety Training</h4>
                        <p>Regular training programs for employees and contractors on safety procedures and emergency response.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic86.jpg') }}" alt="Monitoring">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Safety Monitoring</h4>
                        <p>Continuous monitoring and auditing of safety performance and compliance with standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Health & Wellness -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Health & Wellness</h2>
            <p>Promoting employee health and well-being</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic87.jpg') }}" alt="Health Programs">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Health Programs</h4>
                        <p>Comprehensive health and wellness initiatives</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic88.jpg') }}" alt="Medical Support">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Medical Support</h4>
                        <p>On-site medical facilities and emergency care</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic89.jpg') }}" alt="Mental Health">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Mental Health</h4>
                        <p>Employee assistance and counseling services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic90.jpg') }}" alt="Wellness">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Wellness</h4>
                        <p>Work-life balance and stress management</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Emergency Response -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Emergency Response</h2>
            <p>Prepared for any situation</p>
        </div>
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Emergency Preparedness</h2>
                    <p>Our emergency response system includes:</p>
                    <ul class="list-angle-right">
                        <li>24/7 emergency response teams</li>
                        <li>Regular emergency drills</li>
                        <li>Advanced monitoring systems</li>
                        <li>Community emergency plans</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Security Measures</h2>
                    <p>We maintain robust security through:</p>
                    <ul class="list-angle-right">
                        <li>Access control systems</li>
                        <li>Surveillance monitoring</li>
                        <li>Security personnel</li>
                        <li>Regular security audits</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Safety Performance -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Safety Performance</h2>
            <p>Our commitment to continuous improvement</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic91.jpg') }}" alt="Incident Prevention">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Incident Prevention</h4>
                        <p>Proactive measures to prevent accidents</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic92.jpg') }}" alt="Safety Culture">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Safety Culture</h4>
                        <p>Building a strong safety-first mindset</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic93.jpg') }}" alt="Performance Metrics">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Performance Metrics</h4>
                        <p>Tracking and improving safety indicators</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 