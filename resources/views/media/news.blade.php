@extends('layouts.app')

@section('title', 'Latest News - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="News"
    parentpage="Media"
    subtitle="Latest News"
    {{-- :background="asset('images/about-hero.jpg')" --}}
/>
<!-- News Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Latest Updates</h2>
                    <p>Stay informed about the latest developments, achievements, and initiatives at Meeras Refinery in Kazakhstan. Our news section provides insights into our operations, sustainability efforts, and leadership in Central Asia's energy sector.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Industry News</h5>
                                <p>Central Asian Updates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Company Updates</h5>
                                <p>Latest Developments</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic174.jpg') }}" alt="Latest News">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Featured News -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Featured News</h2>
            <p>Latest headlines and stories</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic175.jpg') }}" alt="Sustainability Milestone">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Meeras Refinery Achieves Major Sustainability Milestone in Kazakhstan</h4>
                        <p class="date">January 15, 2024</p>
                        <p>Meeras Refinery has successfully reduced its carbon emissions by 25% ahead of schedule, marking a significant step towards Kazakhstan's 2030 sustainability goals.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic176.jpg') }}" alt="Technology Innovation">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">New Technology Innovation Center Opens in Almaty</h4>
                        <p class="date">December 20, 2023</p>
                        <p>Meeras Refinery has inaugurated its state-of-the-art Technology Innovation Center in Almaty, focusing on developing sustainable energy solutions for Central Asia.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest News -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Latest News</h2>
            <p>Recent updates and announcements</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic177.jpg') }}" alt="Community Initiative">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Community Development Initiative Launched in Atyrau</h4>
                        <p class="date">December 10, 2023</p>
                        <p>Meeras Refinery has launched a new community development program aimed at supporting local education and healthcare initiatives in the Atyrau region.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic178.jpg') }}" alt="Safety Award">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Safety Excellence Award Received in Kazakhstan</h4>
                        <p class="date">November 25, 2023</p>
                        <p>Meeras Refinery has been recognized for its outstanding safety performance with the prestigious Kazakhstan Industry Safety Excellence Award.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic179.jpg') }}" alt="Partnership">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Strategic Partnership with Kazakh Energy Ministry</h4>
                        <p class="date">November 15, 2023</p>
                        <p>Meeras Refinery has entered into a strategic partnership with the Ministry of Energy of Kazakhstan to enhance digital transformation initiatives.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News Categories -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">News Categories</h2>
            <p>Browse news by category</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Sustainability</h4>
                        <p>Updates on our environmental initiatives and Kazakhstan's sustainability goals.</p>
                        <a href="#" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Operations</h4>
                        <p>News about our operations, projects, and technological advancements in Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Community</h4>
                        <p>Stories about our community engagement and social responsibility in Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Industry</h4>
                        <p>Updates on Central Asian energy trends, market developments, and partnerships.</p>
                        <a href="#" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 