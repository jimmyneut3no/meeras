@extends('layouts.app')

@section('title', 'Career Opportunities - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<x-breadcrumb
    title="Opportunities"
    parentpage="Careers"
    subtitle="Career Opportunities"
    :background="asset('images/banner/work.webp')"
/>
<!-- Job Search -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Find Your Opportunity</h2>
                    <p>Explore our current job openings and find the perfect role that matches your skills and aspirations. We offer diverse opportunities across various departments and locations.</p>
                </div>
                <div class="job-search-box">
                    <form>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Job Title or Keywords">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>All Departments</option>
                                        <option>Engineering</option>
                                        <option>Operations</option>
                                        <option>Technology</option>
                                        <option>Business</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block">Search Jobs</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic149.jpg') }}" alt="Career Opportunities">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Current Openings -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Current Openings</h2>
            <p>Explore our latest job opportunities</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Senior Process Engineer</h4>
                        <p class="location"><i class="fa fa-map-marker"></i> Houston, TX</p>
                        <p>Lead process optimization and improvement initiatives in our refinery operations.</p>
                        <ul class="list-angle-right">
                            <li>10+ years experience</li>
                            <li>Chemical Engineering degree</li>
                            <li>Process optimization expertise</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Digital Transformation Manager</h4>
                        <p class="location"><i class="fa fa-map-marker"></i> Dubai, UAE</p>
                        <p>Drive digital initiatives and lead technology transformation projects.</p>
                        <ul class="list-angle-right">
                            <li>8+ years experience</li>
                            <li>IT/Technology background</li>
                            <li>Project management skills</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Maintenance Supervisor</h4>
                        <p class="location"><i class="fa fa-map-marker"></i> Singapore</p>
                        <p>Oversee maintenance operations and ensure equipment reliability.</p>
                        <ul class="list-angle-right">
                            <li>5+ years experience</li>
                            <li>Mechanical Engineering degree</li>
                            <li>Maintenance management skills</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Sustainability Analyst</h4>
                        <p class="location"><i class="fa fa-map-marker"></i> London, UK</p>
                        <p>Develop and implement sustainability initiatives and track environmental metrics.</p>
                        <ul class="list-angle-right">
                            <li>3+ years experience</li>
                            <li>Environmental Science degree</li>
                            <li>Data analysis skills</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Application Process -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Application Process</h2>
            <p>How to join our team</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic150.jpg') }}" alt="Apply">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">1. Apply</h4>
                        <p>Submit your application through our career portal</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic151.jpg') }}" alt="Review">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">2. Review</h4>
                        <p>Our team reviews your application and qualifications</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic152.jpg') }}" alt="Interview">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">3. Interview</h4>
                        <p>Meet with our team and discuss your experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic153.jpg') }}" alt="Join">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">4. Join</h4>
                        <p>Welcome to the Meeras Refinery team!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Programs -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Development Programs</h2>
            <p>Start your career with us</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic154.jpg') }}" alt="Graduate Program">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Graduate Program</h4>
                        <p>A 2-year rotational program for recent graduates to develop leadership skills and gain exposure to different areas of our business.</p>
                        <ul class="list-angle-right">
                            <li>Rotational assignments</li>
                            <li>Mentorship program</li>
                            <li>Leadership training</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic155.jpg') }}" alt="Internship Program">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Internship Program</h4>
                        <p>Summer and semester-long internships for students to gain hands-on experience in the energy industry.</p>
                        <ul class="list-angle-right">
                            <li>Real project experience</li>
                            <li>Professional development</li>
                            <li>Networking opportunities</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 