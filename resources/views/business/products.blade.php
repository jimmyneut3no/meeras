@extends('layouts.app')

@section('title', 'Products - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Products"
    parentpage="Business"
    subtitle="Our Products"
    {{-- :background="asset('images/about-hero.jpg')" --}}
/>

<!-- Product Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head mb-2">
                    <h2 class="title">Product Portfolio</h2>
                    <p>Meeras Refinery produces a comprehensive range of high-quality petroleum products that meet and exceed international standards. Our state-of-the-art facilities and advanced X-Clean™ technology ensure superior product quality and environmental performance.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                        <img src="{{asset('/images/mycollection/png/015-oil-barrel.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte my-1">Production Capacity</h5>
                                <p>50,000 BPD</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                        <img src="{{asset('/images/mycollection/png/016-tank.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte my-1">Product Range</h5>
                                <p>10+ Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('images/product/portfolio.webp') }}" alt="Meeras Refinery Products">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Transportation Fuels -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Transportation Fuels</h2>
            <p>Clean, efficient, and reliable fuels for modern transportation</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/product/gasoline.webp') }}" alt="Gasoline">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Gasoline</h4>
                        <p>Premium quality gasoline with enhanced octane ratings and reduced emissions</p>
                        <ul class="list-angle-right">
                            <li>Regular (87 octane)</li>
                            <li>Premium (91 octane)</li>
                            <li>Super Premium (95 octane)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/product/diesel.webp') }}" alt="Diesel">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Diesel</h4>
                        <p>Ultra-low sulfur diesel fuel for modern engines</p>
                        <ul class="list-angle-right">
                            <li>Standard Diesel</li>
                            <li>Premium Diesel</li>
                            <li>Winter Grade</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/product/aviation.webp') }}" alt="Aviation Fuel">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Aviation Fuel</h4>
                        <p>High-performance jet fuel meeting international standards</p>
                        <ul class="list-angle-right">
                            <li>Jet A-1</li>
                            <li>Jet B</li>
                            <li>Avgas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Specialty Products -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Specialty Products</h2>
            <p>High-value products for industrial applications</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/product/lubricant.webp') }}" alt="Lubricants">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Lubricants</h4>
                        <p>Premium base oils and finished lubricants</p>
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
                        <p>Feedstocks for chemical manufacturing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/product/ashalt.webp') }}" alt="Asphalt">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Asphalt</h4>
                        <p>High-quality paving and roofing materials</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/product/special.webp') }}" alt="Specialty Fuels">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Specialty Fuels</h4>
                        <p>Custom fuel solutions for specific applications</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Quality -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Quality Assurance</h2>
                    <p>Our commitment to quality includes:</p>
                    <ul class="list-angle-right">
                        <li>Stringent quality control at every stage</li>
                        <li>Advanced testing laboratories</li>
                        <li>International certification standards</li>
                        <li>Continuous quality monitoring</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Environmental Standards</h2>
                    <p>All our products meet or exceed:</p>
                    <ul class="list-angle-right">
                        <li>International emission standards</li>
                        <li>Environmental regulations</li>
                        <li>Sustainability requirements</li>
                        <li>Clean fuel specifications</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 