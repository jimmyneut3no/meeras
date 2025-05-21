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
                       <img src="{{asset('/images/mycollection/png/018-co2.png')}}" width="50px">   
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
                       <img src="{{asset('/images/mycollection/png/017-water-conservation.png')}}" width="50px">   
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
                    <img src="{{ asset('images/banner/hero-sustain.webp') }}" alt="Environmental Initiatives">
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
                       <img src="{{asset('/images/mycollection/png/002-renewable-energy.png')}}" width="50px">   
                    <div class="dlab-info">
                        <h4 class="dlab-title">Energy Efficiency</h4>
                        <p>Implementing advanced technologies and processes to optimize energy consumption and reduce emissions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                       <img src="{{asset('/images/mycollection/png/003-renewable-energy-1.png')}}" width="50px">   
                    <div class="dlab-info">
                        <h4 class="dlab-title">Renewable Energy</h4>
                        <p>Investing in solar and wind power projects to reduce reliance on fossil fuels.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                       <img src="{{asset('/images/mycollection/png/009-carbon-capture.png')}}" width="50px">   
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

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/banner/water-purify.webp') }}" alt="Water Conservation">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="section-head mb-1">
                    <h2 class="title mb-0">Water Management</h2>
                    <p class="p-0 mb-0">Protecting and conserving water resources</p>
                    <hr>
                </div>
                <div class="dlab-box">
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Water Conservation</h6>
                        <p style="margin-left:20px">Implementing water-saving technologies and practices</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Water Treatment</h6>
                        <p style="margin-left:20px">Advanced treatment systems for process water</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Water Recycling</h6>
                        <p style="margin-left:20px">Closed-loop systems for water reuse</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Water Monitoring</h6>
                        <p style="margin-left:20px">Real-time monitoring of water quality</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Waste Management -->
<div class="section-full bg-gray content-inner pt-0">
        <div class="row">
        <img src="{{asset('images/banner/waste-management.webp')}}">
    </div>
    <div class="container">
        <div class="section-head text-center my-2 mt-3">
            <h2 class="title">Waste Management</h2>
            <p class="p-0">Our approach to waste reduction and management</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Waste Reduction</h2>
                    <p class="p-0 m-0">Our waste management strategy focuses on:</p>
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
                    <p class="p-0 m-0">We maintain strict compliance with:</p>
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
        
        <div class="row">

            <div class="col-lg-6 col-md-6 m-b30">
        <div class="section-head mb-1">
            <h2 class="title mb-0">Biodiversity Conservation</h2>
            <p class="p-0 mb-0">Protecting and preserving local ecosystems</p>
            <hr>
        </div>
                <div class="dlab-box">
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Habitat Protection</h6>
                        <p style="margin-left:20px">Preserving natural habitats and ecosystems</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Species Conservation</h6>
                        <p style="margin-left:20px">Protecting endangered species and biodiversity</p>
                    </div>
                    <div class="dlab-info mb-2">
                        <h6 class="dlab-title mb-0 text-primary"><i class="la la-check-circle"></i> Environmental Monitoring</h6>
                        <p style="margin-left:20px">Regular assessment of environmental impact</p>
                    </div>
                </div>
            </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="{{ asset('images/banner/conservation.webp') }}" alt="Habitat Protection">
                        </div>
        </div>
    </div>
</div>
@endsection 