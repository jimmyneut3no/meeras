@extends('layouts.app')

@section('title', 'Investor Presentations - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Presentations"
    parentpage="Investors"
    subtitle="Investor Presentations"
    {{-- :background="asset('images/banner/work.webp')" --}}
/>
<!-- Presentations Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Investor Presentations</h2>
                    <p>Access our latest investor presentations, earnings calls, and webcasts. Stay informed about our strategic initiatives, financial performance, and future outlook through our comprehensive investor communications.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/024-seo.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Earnings Calls</h5>
                                <p>Quarterly Updates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/032-webcast.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Webcasts</h5>
                                <p>Live & Archived</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic127.jpg') }}" alt="Investor Presentations">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest Presentations -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Latest Presentations</h2>
            <p>Recent investor events and presentations</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic128.jpg') }}" alt="Q4 2023 Earnings">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Q4 2023 Earnings Call</h4>
                        <p>Date: January 15, 2024</p>
                        <ul class="list-angle-right">
                            <li>Presentation Slides</li>
                            <li>Earnings Release</li>
                            <li>Webcast Recording</li>
                        </ul>
                        <a href="#" class="btn btn-primary">View Materials</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic129.jpg') }}" alt="Investor Day">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Investor Day 2023</h4>
                        <p>Date: September 20, 2023</p>
                        <ul class="list-angle-right">
                            <li>Strategy Presentation</li>
                            <li>Business Updates</li>
                            <li>Q&A Session</li>
                        </ul>
                        <a href="#" class="btn btn-primary">View Materials</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic130.jpg') }}" alt="Industry Conference">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Industry Conference</h4>
                        <p>Date: November 10, 2023</p>
                        <ul class="list-angle-right">
                            <li>Conference Presentation</li>
                            <li>Industry Outlook</li>
                            <li>Company Overview</li>
                        </ul>
                        <a href="#" class="btn btn-primary">View Materials</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Upcoming Events -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Upcoming Events</h2>
            <p>Mark your calendar for these important investor events</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic131.jpg') }}" alt="Q1 2024 Earnings">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Q1 2024 Earnings Call</h4>
                        <p>Date: April 15, 2024<br>
                        Time: 9:00 AM EST<br>
                        Format: Webcast</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic132.jpg') }}" alt="Annual Meeting">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Annual Shareholders Meeting</h4>
                        <p>Date: May 20, 2024<br>
                        Time: 10:00 AM EST<br>
                        Location: Virtual & In-Person</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic133.jpg') }}" alt="Strategy Day">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Strategy Day</h4>
                        <p>Date: June 15, 2024<br>
                        Time: 9:00 AM EST<br>
                        Format: Webcast</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic134.jpg') }}" alt="Industry Conference">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Energy Conference</h4>
                        <p>Date: July 10, 2024<br>
                        Time: 2:00 PM EST<br>
                        Location: New York</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Archived Presentations -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Archived Presentations</h2>
            <p>Access our historical investor presentations and webcasts</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic135.jpg') }}" alt="2023 Presentations">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">2023 Presentations</h4>
                        <p>Complete archive of 2023 investor events</p>
                        <a href="#" class="btn btn-primary">View Archive</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic136.jpg') }}" alt="2022 Presentations">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">2022 Presentations</h4>
                        <p>Complete archive of 2022 investor events</p>
                        <a href="#" class="btn btn-primary">View Archive</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic137.jpg') }}" alt="2021 Presentations">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">2021 Presentations</h4>
                        <p>Complete archive of 2021 investor events</p>
                        <a href="#" class="btn btn-primary">View Archive</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 