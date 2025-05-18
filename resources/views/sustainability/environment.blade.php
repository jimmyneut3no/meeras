@extends('layouts.app')

@section('title', 'Environmental Initiatives - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Environment"
    parentpage="Sustainability"
    subtitle="Environmental Initiatives"
    :background="asset('images/banner/breadcrumb-sus.webp')"
/>
<!-- Environmental Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Environmental Stewardship</h2>
                    <p>At Meeras Refinery, we are committed to minimizing our environmental footprint while maximizing operational efficiency. Our comprehensive environmental management system ensures that we meet and exceed regulatory requirements while continuously improving our environmental performance.</p>
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
                    <img src="{{ asset('template/images/our-work/oilgas/pic72.jpg') }}" alt="Environmental Initiatives">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Climate Action -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Climate Action</h2>
            <p>Our commitment to reducing greenhouse gas emissions</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic73.jpg') }}" alt="Energy Efficiency">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Energy Efficiency</h4>
                        <p>Implementing advanced technologies and processes to optimize energy consumption and reduce emissions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic74.jpg') }}" alt="Renewable Energy">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Renewable Energy</h4>
                        <p>Investing in solar and wind power projects to reduce reliance on fossil fuels.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic75.jpg') }}" alt="Carbon Capture">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Carbon Capture</h4>
                        <p>Developing and implementing carbon capture and storage technologies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Water Management -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Water Management</h2>
            <p>Protecting and conserving water resources</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic76.jpg') }}" alt="Water Conservation">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Water Conservation</h4>
                        <p>Implementing water-saving technologies and practices</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic77.jpg') }}" alt="Water Treatment">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Water Treatment</h4>
                        <p>Advanced treatment systems for process water</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic78.jpg') }}" alt="Recycling">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Water Recycling</h4>
                        <p>Closed-loop systems for water reuse</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic79.jpg') }}" alt="Monitoring">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Water Monitoring</h4>
                        <p>Real-time monitoring of water quality</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Waste Management -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Waste Management</h2>
            <p>Our approach to waste reduction and management</p>
        </div>
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Waste Reduction</h2>
                    <p>Our waste management strategy focuses on:</p>
                    <ul class="list-angle-right">
                        <li>Source reduction and prevention</li>
                        <li>Recycling and reuse</li>
                        <li>Safe disposal methods</li>
                        <li>Continuous improvement</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Environmental Compliance</h2>
                    <p>We maintain strict compliance with:</p>
                    <ul class="list-angle-right">
                        <li>Environmental regulations</li>
                        <li>Waste management standards</li>
                        <li>Hazardous waste protocols</li>
                        <li>International best practices</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Biodiversity -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Biodiversity Conservation</h2>
            <p>Protecting and preserving local ecosystems</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic80.jpg') }}" alt="Habitat Protection">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Habitat Protection</h4>
                        <p>Preserving natural habitats and ecosystems</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic81.jpg') }}" alt="Species Conservation">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Species Conservation</h4>
                        <p>Protecting endangered species and biodiversity</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic82.jpg') }}" alt="Environmental Monitoring">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Environmental Monitoring</h4>
                        <p>Regular assessment of environmental impact</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 