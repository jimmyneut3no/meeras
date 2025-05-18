@extends('layouts.app')

@section('title', 'Press Releases - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Press"
    parentpage="Media"
    subtitle="Press Releases"
    {{-- :background="asset('images/about-hero.jpg')" --}}
/>
<!-- Press Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Press Center</h2>
                    <p>Access our latest press releases, media resources, and company announcements. Stay informed about Meeras Refinery's developments, achievements, and strategic initiatives in Kazakhstan and Central Asia.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Press Releases</h5>
                                <p>Latest Announcements</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Media Resources</h5>
                                <p>Company Information</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic180.jpg') }}" alt="Press Center">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest Press Releases -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Latest Press Releases</h2>
            <p>Recent announcements and updates</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Meeras Refinery Announces Q4 2023 Financial Results in Kazakhstan</h4>
                        <p class="date">January 20, 2024</p>
                        <p>Meeras Refinery reports strong financial performance for Q4 2023, with revenue growth of 15% and improved operational efficiency in the Kazakh market.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">New Sustainability Initiative Launched in Atyrau</h4>
                        <p class="date">January 10, 2024</p>
                        <p>Meeras Refinery unveils comprehensive sustainability program aimed at achieving carbon neutrality by 2030 in alignment with Kazakhstan's green energy goals.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Press Releases Archive -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Press Releases Archive</h2>
            <p>Browse our press release history</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Strategic Partnership with Kazakh Energy Ministry</h4>
                        <p class="date">December 15, 2023</p>
                        <p>Meeras Refinery enters into strategic partnership with the Ministry of Energy of Kazakhstan to enhance digital transformation initiatives.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">New R&D Center Opening in Almaty</h4>
                        <p class="date">November 30, 2023</p>
                        <p>Meeras Refinery inaugurates new state-of-the-art research and development center in Almaty, strengthening Kazakhstan's position in energy innovation.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Kazakh Industry Award Recognition</h4>
                        <p class="date">November 15, 2023</p>
                        <p>Meeras Refinery receives prestigious Kazakhstan Industry Award for innovation and sustainability leadership in Central Asia.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Media Resources -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Media Resources</h2>
            <p>Access our media kit and resources</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Company Profile</h4>
                        <p>Download our company profile and fact sheet about our operations in Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Logo & Branding</h4>
                        <p>Access our logo and branding guidelines for Kazakhstan market.</p>
                        <a href="#" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Media Kit</h4>
                        <p>Download our comprehensive media kit for Kazakhstan press.</p>
                        <a href="#" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Contact Media</h4>
                        <p>Get in touch with our media relations team in Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 