@extends('layouts.app')

@section('title', 'Sustainability - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Home"
    parentpage="Sustainability"
    subtitle="Sustainability"
    :background="asset('images/banner/breadcrumb-sus.webp')"
/>
<!-- Sustainability Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Our Commitment</h2>
                    <p>At Meeras Refinery, sustainability is not just a goal—it's a fundamental part of our business strategy. We are committed to operating responsibly, minimizing our environmental impact, and creating lasting value for our stakeholders while contributing to a sustainable future.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Carbon Reduction</h5>
                                <p>30% by 2030</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Water Conservation</h5>
                                <p>40% Reduction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic64.jpg') }}" alt="Sustainability Commitment">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sustainability Pillars -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Our Sustainability Pillars</h2>
            <p>Building a sustainable future through responsible operations</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic65.jpg') }}" alt="Environmental Stewardship">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Environmental Stewardship</h4>
                        <p>Protecting and preserving our natural resources through:</p>
                        <ul class="list-angle-right">
                            <li>Climate action initiatives</li>
                            <li>Water conservation</li>
                            <li>Waste management</li>
                            <li>Biodiversity protection</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic66.jpg') }}" alt="Social Responsibility">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Social Responsibility</h4>
                        <p>Creating positive impact in our communities through:</p>
                        <ul class="list-angle-right">
                            <li>Education programs</li>
                            <li>Healthcare initiatives</li>
                            <li>Skill development</li>
                            <li>Community engagement</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic67.jpg') }}" alt="Economic Value">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Economic Value</h4>
                        <p>Driving sustainable growth through:</p>
                        <ul class="list-angle-right">
                            <li>Innovation and technology</li>
                            <li>Operational excellence</li>
                            <li>Stakeholder value creation</li>
                            <li>Sustainable supply chain</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sustainability Goals -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Our Sustainability Goals</h2>
            <p>Ambitious targets for a sustainable future</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic68.jpg') }}" alt="Climate Action">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Climate Action</h4>
                        <p>Achieve carbon neutrality by 2030</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic69.jpg') }}" alt="Water Management">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Water Management</h4>
                        <p>Zero water discharge by 2025</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic70.jpg') }}" alt="Waste Management">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Waste Management</h4>
                        <p>Zero waste to landfill by 2025</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic71.jpg') }}" alt="Community Impact">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Community Impact</h4>
                        <p>Benefit 1 million lives by 2030</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sustainability Reporting -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Sustainability Reporting</h2>
                    <p>We believe in transparency and accountability. Our sustainability reports provide detailed information about our performance, goals, and initiatives.</p>
                    <ul class="list-angle-right">
                        <li>Annual Sustainability Report</li>
                        <li>Environmental Impact Assessment</li>
                        <li>Social Impact Reports</li>
                        <li>Carbon Disclosure Project (CDP) Reports</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Certifications & Standards</h2>
                    <p>Our commitment to sustainability is validated through various certifications and standards:</p>
                    <ul class="list-angle-right">
                        <li>ISO 14001: Environmental Management</li>
                        <li>ISO 50001: Energy Management</li>
                        <li>ISO 26000: Social Responsibility</li>
                        <li>Global Reporting Initiative (GRI) Standards</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 