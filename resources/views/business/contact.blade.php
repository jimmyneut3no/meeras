@extends('layouts.app')

@section('title', 'Contact Us - Meeras Refinery')

@section('content')
<!-- Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-banner-content">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Business</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Overview -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Get in Touch</h2>
                    <p>We welcome your inquiries about Meeras Refinery's operations in Kazakhstan. Our team in Atyrau is ready to assist you with any questions about our services, partnerships, or career opportunities. Contact us through any of the channels below, and we'll respond promptly.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-factory"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Head Office</h5>
                                <p>Atyrau, Kazakhstan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-eco-energy"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Regional Office</h5>
                                <p>Almaty, Kazakhstan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic196.jpg') }}" alt="Contact Us">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Information -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Contact Information</h2>
            <p>Our locations in Kazakhstan</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Head Office</h4>
                        <p>123 Energy Street<br>Atyrau, Kazakhstan<br>Phone: +7 (712) XXX-XXXX<br>Email: info@meeras.kz</p>
                        <a href="#" class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Regional Office</h4>
                        <p>456 Business Avenue<br>Almaty, Kazakhstan<br>Phone: +7 (727) XXX-XXXX<br>Email: almaty@meeras.kz</p>
                        <a href="#" class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Refinery Location</h4>
                        <p>789 Industrial Zone<br>Atyrau Region, Kazakhstan<br>Phone: +7 (712) XXX-XXXX<br>Email: refinery@meeras.kz</p>
                        <a href="#" class="btn btn-primary">Get Directions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Send Us a Message</h2>
            <p>We'd love to hear from you</p>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 m-b30">
                <form class="dlab-form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Select Department</option>
                                    <option>General Inquiries</option>
                                    <option>Business Development</option>
                                    <option>Media Relations</option>
                                    <option>Career Opportunities</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 m-b30">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-12 m-b30">
                <div class="dlab-box">
                    <div class="dlab-info">
                        <h4 class="dlab-title">Business Hours</h4>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 1:00 PM<br>Sunday: Closed</p>
                        <h4 class="dlab-title">Emergency Contact</h4>
                        <p>24/7 Emergency Hotline:<br>+7 (712) XXX-XXXX</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Our Location</h2>
            <p>Find us in Kazakhstan</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <!-- Replace with actual Google Maps embed code -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.5!2d51.9!3d47.1!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDA2JzAwLjAiTiA1McKwNTQnMDAuMCJF!5e0!3m2!1sen!2skz!4v1234567890" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 