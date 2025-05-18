@extends('layouts.app')

@section('title', 'Financial Information - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-banner-content">
                    <h1>Financial Information</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Investors</li>
                        <li>Financials</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Financial Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Financial Performance</h2>
                    <p>Meeras Refinery maintains a strong financial position with consistent growth and profitability. Our financial strategy focuses on sustainable value creation, operational excellence, and prudent capital management.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Revenue</h5>
                                <p>$5.2B (2023)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">EBITDA</h5>
                                <p>$1.8B (2023)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic108.jpg') }}" alt="Financial Performance">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Key Financial Metrics -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Key Financial Metrics</h2>
            <p>Our financial performance indicators</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic109.jpg') }}" alt="Revenue Growth">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Revenue Growth</h4>
                        <p>Consistent year-over-year growth in revenue through operational excellence and market expansion.</p>
                        <ul class="list-angle-right">
                            <li>2023: $5.2B</li>
                            <li>2022: $4.8B</li>
                            <li>2021: $4.3B</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic110.jpg') }}" alt="Profitability">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Profitability</h4>
                        <p>Strong profit margins and efficient cost management.</p>
                        <ul class="list-angle-right">
                            <li>EBITDA Margin: 34.6%</li>
                            <li>Net Profit Margin: 22.3%</li>
                            <li>ROE: 18.5%</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic111.jpg') }}" alt="Cash Flow">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Cash Flow</h4>
                        <p>Strong operating cash flow generation and efficient capital allocation.</p>
                        <ul class="list-angle-right">
                            <li>Operating Cash Flow: $1.5B</li>
                            <li>Free Cash Flow: $1.2B</li>
                            <li>Capital Expenditure: $300M</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Financial Strategy -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Financial Strategy</h2>
            <p>Our approach to value creation</p>
        </div>
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Capital Allocation</h2>
                    <p>Our capital allocation priorities:</p>
                    <ul class="list-angle-right">
                        <li>Maintenance and growth investments</li>
                        <li>Debt reduction and optimization</li>
                        <li>Dividend payments</li>
                        <li>Strategic acquisitions</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Risk Management</h2>
                    <p>Our risk management framework includes:</p>
                    <ul class="list-angle-right">
                        <li>Market risk hedging</li>
                        <li>Currency risk management</li>
                        <li>Interest rate management</li>
                        <li>Commodity price protection</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Financial Calendar -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Financial Calendar</h2>
            <p>Important dates for investors</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic112.jpg') }}" alt="Quarterly Results">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Quarterly Results</h4>
                        <p>Q1: March 15, 2024<br>
                        Q2: June 15, 2024<br>
                        Q3: September 15, 2024<br>
                        Q4: December 15, 2024</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic113.jpg') }}" alt="Annual Meeting">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Annual Meeting</h4>
                        <p>Date: May 20, 2024<br>
                        Location: Virtual & In-Person<br>
                        Registration: April 15, 2024</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic114.jpg') }}" alt="Dividend Payments">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Dividend Payments</h4>
                        <p>Q1: March 31, 2024<br>
                        Q2: June 30, 2024<br>
                        Q3: September 30, 2024<br>
                        Q4: December 31, 2024</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic115.jpg') }}" alt="Analyst Events">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Analyst Events</h4>
                        <p>Strategy Day: February 15, 2024<br>
                        Investor Day: September 20, 2024<br>
                        Industry Conferences: Various Dates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 