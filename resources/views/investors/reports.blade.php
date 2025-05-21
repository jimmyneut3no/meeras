@extends('layouts.app')

@section('title', 'Financial Reports - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Reports"
    parentpage="Investors"
    subtitle="Financial Reports"
    {{-- :background="asset('images/banner/work.webp')" --}}
/>
<!-- Reports Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Financial Reports</h2>
                    <p>Access our comprehensive financial reports, including annual reports, quarterly reports, and other important financial documents. Our reports provide detailed information about our financial performance, strategic initiatives, and future outlook.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/029-annual-report.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Annual Reports</h5>
                                <p>2018-2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/030-report.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Quarterly Reports</h5>
                                <p>2020-2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic116.jpg') }}" alt="Financial Reports">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Annual Reports -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Annual Reports</h2>
            <p>Comprehensive overview of our yearly performance</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic117.jpg') }}" alt="Annual Report 2023">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Annual Report 2023</h4>
                        <p>Our latest annual report featuring financial results, strategic initiatives, and future outlook.</p>
                        <a href="#" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic118.jpg') }}" alt="Annual Report 2022">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Annual Report 2022</h4>
                        <p>Comprehensive review of our performance and achievements in 2022.</p>
                        <a href="#" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic119.jpg') }}" alt="Annual Report 2021">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Annual Report 2021</h4>
                        <p>Detailed analysis of our operations and financial performance in 2021.</p>
                        <a href="#" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quarterly Reports -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Quarterly Reports</h2>
            <p>Latest quarterly financial results</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic120.jpg') }}" alt="Q4 2023">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Q4 2023</h4>
                        <p>Fourth quarter results and year-end review</p>
                        <a href="#" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic121.jpg') }}" alt="Q3 2023">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Q3 2023</h4>
                        <p>Third quarter financial results</p>
                        <a href="#" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic122.jpg') }}" alt="Q2 2023">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Q2 2023</h4>
                        <p>Second quarter performance review</p>
                        <a href="#" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic123.jpg') }}" alt="Q1 2023">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Q1 2023</h4>
                        <p>First quarter financial results</p>
                        <a href="#" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Reports -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Additional Reports</h2>
            <p>Other important financial documents</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic124.jpg') }}" alt="Sustainability Report">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Sustainability Report</h4>
                        <p>Our commitment to environmental, social, and governance practices</p>
                        <a href="#" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic125.jpg') }}" alt="Proxy Statement">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Proxy Statement</h4>
                        <p>Information for shareholders regarding annual meetings</p>
                        <a href="#" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic126.jpg') }}" alt="Form 10-K">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Form 10-K</h4>
                        <p>Annual report filed with the Securities and Exchange Commission</p>
                        <a href="#" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 