@extends('layouts.app')

@section('title', 'History - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="History"
    parentpage="Company"
    subtitle="Our History"
    {{-- :background="asset('images/about-hero.jpg')" --}}
/>

<!-- History Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Our Journey</h2>
                    <p>From our humble beginnings to becoming a global leader in refining technology, Meeras Refinery has consistently pushed the boundaries of innovation and excellence. Our history is marked by significant milestones that have shaped not only our company but also the industry as a whole.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/038-no-results.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Founded</h5>
                                <p>1995</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                       <img src="{{asset('/images/mycollection/png/039-global-access.png')}}" width="50px">   
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Global Presence</h5>
                                <p>4 Continents</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('images/about/history.webp') }}" alt="Meeras Refinery History">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Timeline -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Key Milestones</h2>
            <p>Our journey through the years</p>
        </div>
        <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <img src="{{asset('images/about/history-2.webp')}}">
        </div>
        <div class="col-md-8">
        
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-badge">
                    <span>1995</span>
                    <hr class="p-0 m-0">
                </div>
                <div class="timeline-content">
                    <h4 class="dlab-title mb-0">Company Founded</h4>
                    <p>Meeras Refinery established with initial processing capacity of 50,000 barrels per day.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-badge">
                    <span>2000</span>
                    <hr class="p-0 m-0">
                </div>
                <div class="timeline-content">
                    <h4 class="dlab-title mb-0">First Expansion</h4>
                    <p>Doubled processing capacity and established first international partnerships.</p>
                </div>
                
            </div>
            <div class="timeline-item">
                <div class="timeline-badge">
                    <span>2005</span>
                    <hr class="p-0 m-0">
                </div>
                <div class="timeline-content">
                    <h4 class="dlab-title mb-0">X-Clean™ Technology</h4>
                    <p>Launched proprietary X-Clean™ process, revolutionizing fuel quality standards.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-badge">
                    <span>2010</span>
                    <hr class="p-0 m-0">
                </div>
                <div class="timeline-content">
                    <h4 class="dlab-title mb-0">Global Expansion</h4>
                    <p>Established operations in Europe and Asia, becoming a truly global company.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-badge">
                    <span>2015</span>
                    <hr class="p-0 m-0">
                </div>
                <div class="timeline-content">
                    <h4 class="dlab-title mb-0">Sustainability Leadership</h4>
                    <p>Achieved industry-leading environmental performance and sustainability goals.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-badge">
                    <span>2020</span>
                    <hr class="p-0 m-0">
                </div>
                <div class="timeline-content">
                    <h4 class="dlab-title mb-0">Digital Transformation</h4>
                    <p>Implemented advanced digital technologies and Industry 4.0 initiatives.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-badge">
                    <span>2023</span>
                    <hr class="p-0 m-0">
                </div>
                <div class="timeline-content">
                    <h4 class="dlab-title mb-0">Current Era</h4>
                    <p>Processing 500,000 barrels daily with cutting-edge technology and sustainable practices.</p>
                </div>
            </div>
        </div>
        </div>
    </div>

    </div>
</div>

<!-- Achievements -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Notable Achievements</h2>
            <p>Milestones that define our success</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-work/oilgas/pic52.jpg') }}" alt="Technology">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Technology Innovation</h4>
                        <p>Multiple patents for refining processes and environmental technologies</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-work/oilgas/pic53.jpg') }}" alt="Safety">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Safety Excellence</h4>
                        <p>Industry-leading safety record and multiple safety awards</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-work/oilgas/pic54.jpg') }}" alt="Sustainability">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Environmental Leadership</h4>
                        <p>Recognition for environmental stewardship and sustainability initiatives</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('images/our-work/oilgas/pic55.jpg') }}" alt="Community">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Community Impact</h4>
                        <p>Significant contributions to local communities and social development</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Future Vision -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Looking Forward</h2>
                    <p>Our vision for the future includes:</p>
                    <ul class="list-angle-right">
                        <li>Expanding processing capacity to 750,000 barrels per day</li>
                        <li>Developing next-generation clean fuel technologies</li>
                        <li>Achieving carbon neutrality by 2030</li>
                        <li>Strengthening global market presence</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Our Legacy</h2>
                    <p>Building on our rich history, we continue to:</p>
                    <ul class="list-angle-right">
                        <li>Maintain the highest standards of operational excellence</li>
                        <li>Drive innovation in refining technology</li>
                        <li>Lead in environmental sustainability</li>
                        <li>Create value for all stakeholders</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 