@extends('layouts.app')

@section('title', 'Investors - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-banner-content">
                    <h1>Investors</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Business</li>
                        <li>Investors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Investors Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Investor Relations</h2>
                    <p>Welcome to Meeras Refinery's investor relations page. As a leading energy company in Kazakhstan, we are committed to creating long-term value for our shareholders while contributing to the country's economic development. Our strategic location in Atyrau, Kazakhstan's energy hub, positions us for sustainable growth in Central Asia's energy sector.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Financial Reports</h5>
                                <p>Kazakh Market</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Market Updates</h5>
                                <p>Central Asia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic193.jpg') }}" alt="Investors">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Financial Performance -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Financial Performance</h2>
            <p>Our financial results in the Kazakh market</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Q4 2023 Results</h4>
                        <p>Strong performance in the Kazakh market with 15% revenue growth and improved operational efficiency.</p>
                        <a href="#" class="btn btn-primary">View Report</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Annual Report 2023</h4>
                        <p>Comprehensive overview of our operations and financial performance in Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">View Report</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Investor Presentation</h4>
                        <p>Latest investor presentation highlighting our growth strategy in Central Asia.</p>
                        <a href="#" class="btn btn-primary">View Presentation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Market Information -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Market Information</h2>
            <p>Updates on the Central Asian energy market</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic194.jpg') }}" alt="Market Analysis">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Kazakh Market Analysis</h4>
                        <p>Comprehensive analysis of Kazakhstan's energy sector and market opportunities.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic195.jpg') }}" alt="Growth Strategy">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Growth Strategy</h4>
                        <p>Our strategic initiatives for expansion in the Central Asian energy market.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Investor Resources -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Investor Resources</h2>
            <p>Access our investor information</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Stock Information</h4>
                        <p>Real-time stock information and trading data for our shares in Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Corporate Governance</h4>
                        <p>Information about our corporate governance structure in Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Investor Calendar</h4>
                        <p>Upcoming events and important dates for investors in Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">View Calendar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Contact IR</h4>
                        <p>Get in touch with our investor relations team in Kazakhstan.</p>
                        <a href="#" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 