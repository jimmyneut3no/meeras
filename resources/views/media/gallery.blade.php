@extends('layouts.app')

@section('title', 'Media Gallery - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Gallery"
    parentpage="Media"
    subtitle="Media Gallery"
    {{-- :background="asset('images/about-hero.jpg')" --}}
/>
<!-- Gallery Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Our Gallery</h2>
                    <p>Explore our collection of images and videos showcasing Meeras Refinery's facilities, operations, and achievements in Kazakhstan. From state-of-the-art infrastructure in Atyrau to community initiatives across the country, our gallery provides a visual journey through our commitment to excellence in Central Asia.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Photo Gallery</h5>
                                <p>Visual Stories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Video Gallery</h5>
                                <p>Moving Images</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic181.jpg') }}" alt="Media Gallery">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Photo Gallery -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Photo Gallery</h2>
            <p>Explore our collection of images</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic182.jpg') }}" alt="Facilities">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Atyrau Facilities</h4>
                        <p>State-of-the-art infrastructure and equipment in our main refinery</p>
                        <a href="#" class="btn btn-primary">View Gallery</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic183.jpg') }}" alt="Operations">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Kazakh Operations</h4>
                        <p>Our day-to-day operations and processes across Kazakhstan</p>
                        <a href="#" class="btn btn-primary">View Gallery</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic184.jpg') }}" alt="Community">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Kazakh Community</h4>
                        <p>Community engagement and social initiatives across Kazakhstan</p>
                        <a href="#" class="btn btn-primary">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video Gallery -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Video Gallery</h2>
            <p>Watch our latest videos</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic185.jpg') }}" alt="Company Overview">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Kazakh Operations Overview</h4>
                        <p>Learn about our history, values, and vision in Kazakhstan</p>
                        <a href="#" class="btn btn-primary">Watch Video</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic186.jpg') }}" alt="Sustainability">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Sustainability in Kazakhstan</h4>
                        <p>Our commitment to environmental responsibility in Central Asia</p>
                        <a href="#" class="btn btn-primary">Watch Video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Categories -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Gallery Categories</h2>
            <p>Browse our media by category</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Facilities</h4>
                        <p>Images and videos of our state-of-the-art facilities in Atyrau and across Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">View Gallery</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Operations</h4>
                        <p>Visual insights into our operational processes across Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">View Gallery</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Community</h4>
                        <p>Photos and videos of our community initiatives across Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">View Gallery</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Events</h4>
                        <p>Coverage of company events and celebrations in Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 