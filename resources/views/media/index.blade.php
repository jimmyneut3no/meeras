@extends('layouts.app')

@section('title', 'Media - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<x-breadcrumb
    title="Home"
    parentpage="Media"
    subtitle="Media Center"
    {{-- :background="asset('images/about-hero.jpg')" --}}
/>
<!-- Media Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Media Center</h2>
                    <p>Welcome to Meeras Refinery's Media Center. Here you'll find the latest news, press releases, and media resources about our company, operations, and industry developments. We are committed to transparent communication and keeping our stakeholders informed about our activities and achievements.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-news"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Latest News</h5>
                                <p>Stay updated with our recent developments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-press"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Press Releases</h5>
                                <p>Official announcements and statements</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic22.jpg') }}" alt="Media Center">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest News -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Latest News</h2>
            <p>Recent developments and announcements</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-blog style-1">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic23.jpg') }}" alt="News 1">
                    </div>
                    <div class="dlab-info">
                        <div class="dlab-meta">
                            <ul>
                                <li class="post-date">March 15, 2024</li>
                                <li class="post-category">Company News</li>
                            </ul>
                        </div>
                        <h4 class="dlab-title"><a href="#">Meeras Refinery Announces New Sustainability Initiative</a></h4>
                        <p>Launching comprehensive environmental protection program...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-blog style-1">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic24.jpg') }}" alt="News 2">
                    </div>
                    <div class="dlab-info">
                        <div class="dlab-meta">
                            <ul>
                                <li class="post-date">March 10, 2024</li>
                                <li class="post-category">Technology</li>
                            </ul>
                        </div>
                        <h4 class="dlab-title"><a href="#">X-Clean™ Technology Achieves New Milestone</a></h4>
                        <p>Breakthrough in emission reduction technology...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-blog style-1">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic25.jpg') }}" alt="News 3">
                    </div>
                    <div class="dlab-info">
                        <div class="dlab-meta">
                            <ul>
                                <li class="post-date">March 5, 2024</li>
                                <li class="post-category">Community</li>
                            </ul>
                        </div>
                        <h4 class="dlab-title"><a href="#">Community Development Program Launched</a></h4>
                        <p>New initiatives to support local communities...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Media Resources -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Media Resources</h2>
            <p>Comprehensive resources for media professionals</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic26.jpg') }}" alt="Press Kit">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Press Kit</h4>
                        <p>Company information, fact sheets, and media assets</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic27.jpg') }}" alt="Photo Gallery">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Photo Gallery</h4>
                        <p>High-resolution images of our facilities and operations</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic28.jpg') }}" alt="Video Library">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Video Library</h4>
                        <p>Corporate videos and media coverage</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic29.jpg') }}" alt="Media Contacts">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Media Contacts</h4>
                        <p>Contact information for media inquiries</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Media Contact -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Media Contact</h2>
                    <p>For media inquiries and interview requests:</p>
                    <ul class="list-angle-right">
                        <li>Email: media@meerasrefinery.com</li>
                        <li>Phone: +1 (555) 987-6543</li>
                        <li>Address: 123 Energy Street, Business District</li>
                        <li>Office Hours: Monday - Friday, 9:00 AM - 5:00 PM</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Media Guidelines</h2>
                    <p>Important information for media professionals:</p>
                    <ul class="list-angle-right">
                        <li>Photo and video usage guidelines</li>
                        <li>Interview request procedures</li>
                        <li>Facility visit protocols</li>
                        <li>Media accreditation process</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 