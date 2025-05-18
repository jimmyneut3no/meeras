@extends('layouts.app')

@section('title', 'Leadership - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<x-breadcrumb
    title="Leadership"
    parentpage="Company"
    subtitle="Our Leadership"
    {{-- :background="asset('images/about-hero.jpg')" --}}
/>
<!-- Executive Team -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Executive Team</h2>
            <p>Meet the leaders driving our success</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-team style-1">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-team/pic2.jpg') }}" alt="CEO">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">John Smith</h4>
                        <span class="dlab-position">Chief Executive Officer</span>
                        <p>With over 25 years of experience in the energy sector, John leads our company's strategic vision and growth initiatives.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-team style-1">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-team/pic2.jpg') }}" alt="COO">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Sarah Johnson</h4>
                        <span class="dlab-position">Chief Operating Officer</span>
                        <p>Sarah oversees our day-to-day operations, ensuring efficiency and excellence across all facilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-team style-1">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-team/pic2.jpg') }}" alt="CTO">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Michael Chen</h4>
                        <span class="dlab-position">Chief Technology Officer</span>
                        <p>Michael leads our innovation initiatives and oversees the development of our proprietary X-Clean™ technology.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Board of Directors -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Board of Directors</h2>
            <p>Guiding our strategic direction</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-team style-1">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-team/pic2.jpg') }}" alt="Chairman">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Robert Williams</h4>
                        <span class="dlab-position">Chairman</span>
                        <p>Former energy industry executive with extensive experience in corporate governance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-team style-1">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-team/pic2.jpg') }}" alt="Director">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Elizabeth Brown</h4>
                        <span class="dlab-position">Independent Director</span>
                        <p>Expert in environmental sustainability and corporate social responsibility.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-team style-1">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-team/pic2.jpg') }}" alt="Director">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">David Wilson</h4>
                        <span class="dlab-position">Independent Director</span>
                        <p>Financial expert with extensive experience in energy sector investments.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-team style-1">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-team/pic2.jpg') }}" alt="Director">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Maria Garcia</h4>
                        <span class="dlab-position">Independent Director</span>
                        <p>Technology and innovation expert with a focus on sustainable energy solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Leadership Values -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Leadership Values</h2>
            <p>The principles that guide our leadership team</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <span class="icon-cell"><i class="flaticon-idea" style="font-size: 50px;color:black;"></i></span>
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Strategic Vision</h4>
                        <p>Setting clear direction and goals for sustainable growth and innovation.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/036-honesty.png')}}" width="70px">   
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Integrity</h4>
                        <p>Leading with honesty, transparency, and ethical business practices.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/037-team.png')}}" width="70px">   
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">People Development</h4>
                        <p>Nurturing talent and fostering a culture of continuous learning.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 