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
                        <li>Businesses</li>
                        <li>Investors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Investor Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Investor Relations</h2>
                    <p>At Meeras Refinery, we are committed to creating long-term value for our shareholders through sustainable growth, operational excellence, and responsible business practices. Our strong financial performance and strategic initiatives position us for continued success in the energy sector.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-growth"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Growth Strategy</h5>
                                <p>Sustainable value creation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-transparency"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Transparency</h5>
                                <p>Clear communication and reporting</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic17.jpg') }}" alt="Investor Relations">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Financial Highlights -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Financial Highlights</h2>
            <p>Key financial metrics and performance indicators</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <span class="icon-cell"><i class="flaticon-revenue"></i></span>
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Revenue</h4>
                        <p>Strong revenue growth driven by operational excellence and market leadership.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <span class="icon-cell"><i class="flaticon-profit"></i></span>
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Profitability</h4>
                        <p>Consistent profit margins through efficient operations and cost management.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper style-2">
                    <div class="icon-bx">
                        <span class="icon-cell"><i class="flaticon-investment"></i></span>
                    </div>
                    <div class="icon-content">
                        <h4 class="dlab-tilte">Investment Returns</h4>
                        <p>Attractive returns for shareholders through dividends and capital appreciation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Investor Resources -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Investor Resources</h2>
            <p>Comprehensive information for investors</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic18.jpg') }}" alt="Financial Reports">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Financial Reports</h4>
                        <p>Annual reports, quarterly statements, and financial presentations</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic19.jpg') }}" alt="Corporate Governance">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Corporate Governance</h4>
                        <p>Board structure, policies, and governance framework</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic20.jpg') }}" alt="Shareholder Information">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Shareholder Information</h4>
                        <p>Dividend history, stock information, and shareholder services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic21.jpg') }}" alt="Investor Presentations">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Presentations</h4>
                        <p>Investor presentations and conference materials</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Information -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Investor Relations Contact</h2>
                    <p>For investor-related queries and information:</p>
                    <ul class="list-angle-right">
                        <li>Email: investors@meerasrefinery.com</li>
                        <li>Phone: +1 (555) 123-4567</li>
                        <li>Address: 123 Energy Street, Business District</li>
                        <li>Office Hours: Monday - Friday, 9:00 AM - 5:00 PM</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Stay Connected</h2>
                    <p>Keep up to date with our latest investor news and announcements:</p>
                    <ul class="list-angle-right">
                        <li>Subscribe to our investor newsletter</li>
                        <li>Follow us on social media</li>
                        <li>Register for investor alerts</li>
                        <li>Attend our investor events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 