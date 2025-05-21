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
                <div class="section-head mb-0">
                    <h2 class="title">Our Community Commitment</h2>
                    <p>At Meeras Refinery, we believe in creating lasting positive impact in the communities where we operate. Through our comprehensive social responsibility programs, we work to improve lives, support local development, and build strong, sustainable communities.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/023-community.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte mb-0">Communities Served</h5>
                                <p>50+ Locations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/021-investment.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte mb-0">Investment</h5>
                                <p>$10M Annually</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('images/banner/community.webp') }}" alt="Community Engagement">
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
                       <img src="{{asset('/images/mycollection/png/001-scholarship.png')}}" width="50px">   
                    <div class="dlab-info">
                        <h4 class="dlab-title">Scholarships</h4>
                        <p>Providing educational opportunities through merit-based scholarships and financial aid programs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                       <img src="{{asset('/images/mycollection/png/002-school.png')}}" width="50px">   
                    <div class="dlab-info">
                        <h4 class="dlab-title">School Development</h4>
                        <p>Supporting infrastructure development and educational resources in local schools.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                       <img src="{{asset('/images/mycollection/png/003-logical-thinking.png')}}" width="50px">   
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
        <div class="row">
            <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('images/banner/healthCare.webp') }}" alt="Medical Camps">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="section-head mb-0">
                    <h2 class="title">Healthcare Programs</h2>
                    <p class="p-0 m-0">Improving community health and well-being</p>
                    <hr class="my-2">
                </div>
                <div class="dlab-box">
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Medical Camps</h6>
                        <p style="margin-left:20px; padding-top:0;">Regular health check-ups and medical services</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Health Centers</h6>
                        <p style="margin-left:20px; padding-top:0;">Supporting local healthcare facilities</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Health Awareness</h6>
                        <p style="margin-left:20px; padding-top:0;">Public health education programs</p>
                    </div>
                   <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Emergency Care</h6>
                        <p style="margin-left:20px; padding-top:0;">Support for emergency medical services</p>
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
            <div class="col-lg-4 m-b30">
                            <div class="section-head">
                    <h2 class="title">Community Engagement</h2>
                    <p>Building strong relationships with our communities:</p>
                    <div class="dlab-box">
                       <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i>  Stakeholder Engagement</h6>
                            <p style="margin-left:20px; padding-top:0;">Regular dialogue and consultation with community leaders and stakeholders</p>
                        </div>
                        <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i>  Volunteer Programs</h6>
                            <p style="margin-left:20px; padding-top:0;">Employee volunteer initiatives and community service projects</p>
                        </div>
                        <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i>  Cultural Programs</h6>
                            <p style="margin-left:20px; padding-top:0;">Supporting local culture and heritage preservation</p>
                        </div>
                </div>
                </div>
                        </div>
            <div class="col-lg-4 m-b30">
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
            <div class="col-lg-4 m-b30">
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
@endsection 