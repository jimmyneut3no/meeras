@extends('layouts.app')

@section('title', 'Contact - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Contact"
    parentpage="Business"
    subtitle="Contact Us"
    {{-- :background="asset('images/about-hero.jpg')" --}}
/>
<!-- Contact Information -->
<div class="content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Get in Touch</h2>
                    <p>We value your feedback and are here to help. Whether you have a question about our products, services, or operations, our team is ready to assist you. Choose the most convenient way to reach us below.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-phone-call"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Phone</h5>
                                <p>+1 (555) 123-4567</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1">
                            <div class="icon-bx">
                                <span class="icon-cell"><i class="flaticon-email"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Email</h5>
                                <p>info@meerasrefinery.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="dlab-media">
                    <img src="{{ asset('template/images/our-work/oilgas/pic30.jpg') }}" alt="Contact Us">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Send Us a Message</h2>
            <p>Fill out the form below and we'll get back to you as soon as possible</p>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto">
                <form class="dlab-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select name="subject" class="form-control">
                                    <option value="">Select Subject</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Business Proposal">Business Proposal</option>
                                    <option value="Technical Support">Technical Support</option>
                                    <option value="Media Inquiry">Media Inquiry</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="site-button">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Office Locations -->
<div class="content-inner">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">Our Offices</h2>
            <p>Visit us at any of our locations</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic31.jpg') }}" alt="Head Office">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Head Office</h4>
                        <p>123 Energy Street<br>Business District<br>City, State 12345<br>United States</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic32.jpg') }}" alt="Refinery Complex">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Refinery Complex</h4>
                        <p>456 Industrial Park<br>Refinery Road<br>City, State 12345<br>United States</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                <div class="dlab-box">
                    <div class="dlab-media">
                        <img src="{{ asset('template/images/our-work/oilgas/pic33.jpg') }}" alt="Research Center">
                    </div>
                    <div class="dlab-info">
                        <h4 class="dlab-title">Research Center</h4>
                        <p>789 Innovation Drive<br>Science Park<br>City, State 12345<br>United States</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Business Hours -->
<div class="section-full bg-gray content-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Business Hours</h2>
                    <p>Our offices are open during the following hours:</p>
                    <ul class="list-angle-right">
                        <li>Monday - Friday: 9:00 AM - 5:00 PM</li>
                        <li>Saturday: 9:00 AM - 1:00 PM</li>
                        <li>Sunday: Closed</li>
                        <li>Holidays: Closed</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-b30">
                <div class="section-head">
                    <h2 class="title">Emergency Contact</h2>
                    <p>For emergency situations, please contact:</p>
                    <ul class="list-angle-right">
                        <li>Emergency Hotline: +1 (555) 999-8888</li>
                        <li>Security: +1 (555) 777-6666</li>
                        <li>Safety Department: +1 (555) 444-3333</li>
                        <li>24/7 Operations: +1 (555) 222-1111</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 