@extends('layouts.app')

@section('title', 'Technology - Meeras Refinery')

@section('content')

<x-breadcrumb
    title="Technology"
    parentpage="Business"
    subtitle="Our Technology"
    {{-- :background="asset('images/about-hero.jpg')" --}}
/>

<!-- X-Clean Technology -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('images/services/x-clean.webp') }}" alt="X-Clean Technology">
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head mb-2">
                    <h2 class="title">X-Clean™ Technology</h2>
                    <p>Our proprietary X-Clean™ process represents a breakthrough in refining technology, delivering superior fuel quality while significantly reducing environmental impact. This innovative approach combines advanced catalytic processes with state-of-the-art monitoring systems to achieve unprecedented levels of efficiency and cleanliness.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                        <img src="{{asset('/images/mycollection/png/006-chemical-1.png')}}" width="50px">   
                                             </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Enhanced Quality</h5>
                                <p>Superior fuel properties and performance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                        <img src="{{asset('/images/mycollection/png/005-eco-friendly.png')}}" width="50px">                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Eco-Friendly</h5>
                                <p>30% reduction in emissions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Technology Benefits -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Key Benefits</h2>
            <p>How X-Clean™ technology transforms refining operations</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <img src="{{asset('/images/mycollection/png/008-vehicle.png')}}" width="70px">
                        {{-- <span class="icon-cell"><i class="flaticon-oil"></i></span> --}}
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Superior Fuel Quality</h4>
                        <p>Enhanced octane ratings and improved combustion efficiency for better engine performance and reduced maintenance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <img src="{{asset('/images/mycollection/png/011-environmental-impact.png')}}" width="70px">
                        {{-- <span class="icon-cell"><i class="flaticon-eco-energy"></i></span> --}}
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Environmental Impact</h4>
                        <p>Significant reduction in harmful emissions and improved air quality through advanced treatment processes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <img src="{{asset('/images/mycollection/png/010-operation.png')}}" width="70px">
                        {{-- <span class="icon-cell"><i class="flaticon-factory"></i></span> --}}
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Operational Efficiency</h4>
                        <p>Reduced energy consumption and improved process efficiency leading to lower operational costs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Innovation Center -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Innovation Center</h2>
                    <p>Our dedicated research and development facility is at the forefront of refining technology innovation. Here, our team of expert engineers and scientists work continuously to:</p>
                    <ul class="list-angle-right">
                        <li>Develop new refining processes</li>
                        <li>Improve existing technologies</li>
                        <li>Test and validate new concepts</li>
                        <li>Collaborate with industry partners</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('images/services/lab.webp') }}" alt="Innovation Center">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Technology Partners -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Technology Partners</h2>
            <p>Collaborating with industry leaders to drive innovation</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/services/lab.webp') }}" alt="Research Partners">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Research Partners</h4>
                        <p>Leading universities and research institutions</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-work/oilgas/pic9.jpg') }}" alt="Technology Providers">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Technology Providers</h4>
                        <p>Global leaders in refining technology</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-work/oilgas/pic10.jpg') }}" alt="Industry Partners">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Industry Partners</h4>
                        <p>Strategic collaborations for innovation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-work/oilgas/pic11.jpg') }}" alt="Startup Ecosystem">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Startup Ecosystem</h4>
                        <p>Partnering with innovative startups</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 