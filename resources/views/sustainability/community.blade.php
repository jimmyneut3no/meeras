@extends('layouts.app')

@section('title', 'Community Engagement - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Community"
    parentpage="Sustainability"
    subtitle="Community Engagement"
    :background="asset('images/banner/breadcrumb-sus.webp')"
/>
<!-- Community Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Our Community Commitment</h2>
                    <p>At Meeras Refinery, we believe in creating lasting positive impact in the communities where we operate. Through our comprehensive social responsibility programs, we work to improve lives, support local development, and build strong, sustainable communities.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Communities Served</h5>
                                <p>50+ Locations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Investment</h5>
                                <p>$10M Annually</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic94.jpg') }}" alt="Community Engagement">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Education Initiatives -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Education Initiatives</h2>
            <p>Empowering through knowledge</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic95.jpg') }}" alt="Scholarships">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Scholarships</h4>
                        <p>Providing educational opportunities through merit-based scholarships and financial aid programs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic96.jpg') }}" alt="School Development">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">School Development</h4>
                        <p>Supporting infrastructure development and educational resources in local schools.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic97.jpg') }}" alt="Skill Development">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Skill Development</h4>
                        <p>Vocational training and technical education programs for youth and adults.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Healthcare Programs -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Healthcare Programs</h2>
            <p>Improving community health and well-being</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic98.jpg') }}" alt="Medical Camps">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Medical Camps</h4>
                        <p>Regular health check-ups and medical services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic99.jpg') }}" alt="Health Centers">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Health Centers</h4>
                        <p>Supporting local healthcare facilities</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic100.jpg') }}" alt="Awareness">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Health Awareness</h4>
                        <p>Public health education programs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic101.jpg') }}" alt="Emergency Care">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Emergency Care</h4>
                        <p>Support for emergency medical services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Livelihood Programs -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Livelihood Programs</h2>
            <p>Creating sustainable economic opportunities</p>
        </div>
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Economic Development</h2>
                    <p>Our livelihood initiatives include:</p>
                    <ul class="list-angle-right">
                        <li>Small business development</li>
                        <li>Agricultural support</li>
                        <li>Skill-based training</li>
                        <li>Entrepreneurship programs</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Local Employment</h2>
                    <p>We prioritize local hiring and support through:</p>
                    <ul class="list-angle-right">
                        <li>Local recruitment</li>
                        <li>Contractor development</li>
                        <li>Supplier diversity</li>
                        <li>Capacity building</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Infrastructure Development -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Infrastructure Development</h2>
            <p>Building better communities</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic102.jpg') }}" alt="Roads">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Roads & Transportation</h4>
                        <p>Improving local infrastructure</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic103.jpg') }}" alt="Water">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Water & Sanitation</h4>
                        <p>Providing clean water access</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic104.jpg') }}" alt="Energy">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Energy Access</h4>
                        <p>Supporting rural electrification</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Community Engagement -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Community Engagement</h2>
            <p>Building strong relationships with our communities</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic105.jpg') }}" alt="Stakeholder Engagement">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Stakeholder Engagement</h4>
                        <p>Regular dialogue and consultation with community leaders and stakeholders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic106.jpg') }}" alt="Volunteer Programs">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Volunteer Programs</h4>
                        <p>Employee volunteer initiatives and community service projects</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic107.jpg') }}" alt="Cultural Programs">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Cultural Programs</h4>
                        <p>Supporting local culture and heritage preservation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 