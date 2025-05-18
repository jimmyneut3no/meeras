@extends('layouts.app')

@section('title', 'Operations - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Operations"
    parentpage="Business"
    subtitle="Our Operations"
    {{-- :background="asset('images/about-hero.jpg')" --}}
/>

<!-- Operations Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head mb-2">
                    <h2 class="title">Refining Excellence</h2>
                    <p>Our state-of-the-art refinery complex is one of the most advanced in the industry, capable of processing various crude oil grades into high-quality petroleum products. With a capacity of 500,000 barrels per day, we serve both domestic and international markets with our premium products.</p>
                </div>
                                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory" style="font-size: 50px; color:#0149A6 "></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Processing Capacity</h5>
                                <p>Estimated 50,000 barrels per day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="la la-leaf" style="font-size: 50px;color:green"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Energy Efficiency</h5>
                                <p>30% more efficient than industry average</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('images/banner/operation.webp') }}" alt="Meeras Refinery Operations">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Refining Process -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Our Refining Process</h2>
            <p>Utilizing advanced technologies and our proprietary X-Clean™ process to deliver superior quality products</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2 text-center">
                    <div class="icon-bx mb-2">
                       <img src="{{asset('/images/mycollection/png/001-refinery.png')}}" width="80px">   
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Crude Distillation</h4>
                        <p>Initial separation of crude oil into various fractions using our advanced distillation units.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2 text-center">
                    <div class="icon-bx mb-2">
                       <img src="{{asset('/images/mycollection/png/003-plant.png')}}" width="80px">   
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Catalytic Cracking</h4>
                        <p>Converting heavy fractions into lighter, more valuable products using our proprietary catalysts.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2 text-center">
                    <div class="icon-bx mb-2">
                       <img src="{{asset('/images/mycollection/png/004-chemical.png')}}" width="80px">   
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">X-Clean™ Treatment</h4>
                        <p>Our proprietary process for superior fuel quality and reduced environmental impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Portfolio -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Product Portfolio</h2>
            <p>High-quality products meeting international standards</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/product/transportation.webp') }}" alt="Transportation Fuels">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Transportation Fuels</h4>
                        <p>Premium gasoline and diesel meeting Euro VI standards</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/product/aviation.webp') }}" alt="Aviation Fuels">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Aviation Fuels</h4>
                        <p>Jet A-1 and aviation gasoline for commercial and military use</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/product/ashalt.webp') }}" alt="Specialty Products">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Specialty Products</h4>
                        <p>High-value products for industrial and commercial applications</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/product/petrochemicals.webp') }}" alt="Petrochemicals">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Petrochemicals</h4>
                        <p>Feedstock for various petrochemical manufacturing processes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Safety & Environment -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Safety First</h2>
                    <p>Our operations are guided by the highest safety standards and environmental regulations. We maintain a comprehensive safety management system that includes:</p>
                    <ul class="list-angle-right">
                        <li>24/7 monitoring and control systems</li>
                        <li>Regular safety audits and inspections</li>
                        <li>Comprehensive emergency response plans</li>
                        <li>Continuous employee training programs</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Environmental Stewardship</h2>
                    <p>We are committed to minimizing our environmental footprint through:</p>
                    <ul class="list-angle-right">
                        <li>Advanced emission control systems</li>
                        <li>Water conservation and treatment</li>
                        <li>Waste reduction and recycling programs</li>
                        <li>Regular environmental impact assessments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 