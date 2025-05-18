@extends('layouts.app')

@section('title', 'Sustainability - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-banner-content">
                    <h1>Sustainability</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Business</li>
                        <li>Sustainability</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sustainability Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Our Commitment to Sustainability</h2>
                    <p>At Meeras Refinery in Kazakhstan, we are committed to sustainable development and environmental stewardship. Our sustainability initiatives align with Kazakhstan's national goals for environmental protection and green energy transition, focusing on reducing our environmental footprint while contributing to the country's economic growth.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Environmental Protection</h5>
                                <p>Kazakh Standards</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Green Energy</h5>
                                <p>Renewable Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic187.jpg') }}" alt="Sustainability">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Environmental Initiatives -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Environmental Initiatives</h2>
            <p>Our commitment to environmental protection in Kazakhstan</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic188.jpg') }}" alt="Emissions Reduction">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Emissions Reduction</h4>
                        <p>Implementing advanced technologies to reduce emissions in compliance with Kazakh environmental standards.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic189.jpg') }}" alt="Water Conservation">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Water Conservation</h4>
                        <p>Efficient water management systems to protect Kazakhstan's precious water resources.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic190.jpg') }}" alt="Waste Management">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Waste Management</h4>
                        <p>Comprehensive waste management programs aligned with Kazakh environmental regulations.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Green Energy -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Green Energy Solutions</h2>
            <p>Advancing renewable energy in Kazakhstan</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic191.jpg') }}" alt="Solar Power">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Solar Power Projects</h4>
                        <p>Harnessing Kazakhstan's abundant solar resources for sustainable energy production.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic192.jpg') }}" alt="Wind Energy">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Wind Energy Initiatives</h4>
                        <p>Developing wind power projects to support Kazakhstan's renewable energy goals.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sustainability Goals -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Our Sustainability Goals</h2>
            <p>Aligned with Kazakhstan's environmental objectives</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Carbon Neutrality</h4>
                        <p>Working towards carbon neutrality by 2030 in line with Kazakhstan's climate goals.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Renewable Energy</h4>
                        <p>Increasing renewable energy usage to support Kazakhstan's green energy transition.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Water Conservation</h4>
                        <p>Implementing water conservation measures to protect Kazakhstan's water resources.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Community Impact</h4>
                        <p>Supporting local communities and environmental initiatives across Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 