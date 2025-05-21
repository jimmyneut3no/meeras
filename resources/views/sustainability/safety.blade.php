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
                <div class="section-head mb-0">
                    <h2 class="title">Our Safety Commitment</h2>
                    <p>At Meeras Refinery, safety is our top priority. We maintain the highest standards of health, safety, and security across all our operations. Our comprehensive safety management system ensures the well-being of our employees, contractors, and communities.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/020-security.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte mb-0">Safety Record</h5>
                                <p>Zero Lost Time Injuries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/019-certificate.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte mb-0">Certifications</h5>
                                <p>ISO 45001 Certified</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('images/banner/risk.webp') }}" alt="Safety Commitment">
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
                       <img src="{{asset('/images/mycollection/png/010-risk-management.png')}}" width="50px">   
                    <div class="dlab-info">
                        <h4 class="dlab-title">Risk Assessment</h4>
                        <p>Comprehensive risk identification and management processes to prevent incidents and ensure safe operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                       <img src="{{asset('/images/mycollection/png/001-training.png')}}" width="50px">   
                    <div class="dlab-info">
                        <h4 class="dlab-title">Safety Training</h4>
                        <p>Regular training programs for employees and contractors on safety procedures and emergency response.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                       <img src="{{asset('/images/mycollection/png/025-security-1.png')}}" width="50px">   
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
        
        <div class="row">
            
            <div class="col-lg-6 col-md-6">
                <div class="section-head mb-1">
                            <h2 class="title mb-0">Health & Wellness</h2>
                    <p class="p-0 mb-0">Promoting employee health and well-being</p>
                    <hr class="my-2">
                </div>
                <div class="dlab-box">
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Health Programs</h6>
                        <p style="margin-left:20px">Comprehensive health and wellness initiatives</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Medical Support</h6>
                        <p style="margin-left:20px">On-site medical facilities and emergency care</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Mental Health</h6>
                        <p style="margin-left:20px">Employee assistance and counseling services</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Wellness</h6>
                        <p style="margin-left:20px">Work-life balance and stress management</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('images/banner/health.webp') }}" alt="Health Programs">
            </div>
        </div>
    </div>
</div>

<!-- Emergency Response -->
<div class="section-full bg-gray content-inner py-0">
                <div class="row">
                        <img src="{{ asset('images/banner/responses.webp') }}" alt="Incident Prevention">
                    </div>
    <div class="container">
        <div class="section-head text-center mb-2">
            <h2 class="title mt-2">Emergency Response</h2>
            <p class="mt-0 pt-0">Prepared for any situation</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head p-0">
                    <h2 class="title">Emergency Preparedness</h2>
                    <p class="mb-1">Our emergency response system includes:</p>
                    <ul class="list-angle-right">
                        <li>24/7 emergency response teams</li>
                        <li>Regular emergency drills</li>
                        <li>Advanced monitoring systems</li>
                        <li>Community emergency plans</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head p-0">
                    <h2 class="title">Security Measures</h2>
                    <p class="mb-1">We maintain robust security through:</p>
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

        <div class="row">
            <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('images/banner/lectures.webp') }}" alt="Incident Prevention">
                    </div>
            <div class="col-lg-6 col-md-6 m-b30">
              <div class="section-head mb-1">
                            <h2 class="title mb-0">Safety Performance</h2>
            <p class="p-0 mb-0">Our commitment to continuous improvement</p>
            <hr>
        </div>
                <div class="dlab-box">
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Incident Prevention</h6>
                        <p style="margin-left:20px">Proactive measures to prevent accidents</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Safety Culture</h6>
                        <p style="margin-left:20px">Building a strong safety-first mindset</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Performance Metrics</h6>
                       <p style="margin-left:20px">Tracking and improving safety indicators</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 