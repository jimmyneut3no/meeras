@extends('layouts.app')

@section('title', 'Contact - Meeras Refinery')

@section('content')
<x-breadcrumb
    title="Contact"
    parentpage="Business"
    subtitle="Contact Us"
    :background="asset('images/banner/b-contact.webp')"
/>
<!-- Office Locations -->
<div class="container">
<div class="row">
    <div class="col-lg-8">
    <div class="content-inner">
        
                <div class="section-head text-center">
                    <h2 class="title">Get in Touch</h2>
                    <p>We value your feedback and are here to help. Whether you have a question about our products, services, or operations, our team is ready to assist you. Choose the most convenient way to reach us below.</p>
                </div>
            <div class="row">
                					<div class="col-lg-4 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
							<div class="icon-content">
								<h5 class="dlab-tilte text-primary"> <i class="ti-location-pin"></i> Office Address</h5>
								<p>Baqtygerey Qulmanov St 107, Atyrau, Kazakhstan</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
							<div class="icon-content">
								<h5 class="dlab-tilte text-primary"><i class="ti-email"></i> Email</h5>
								<p><a href="mailto:someone@example.com">info@meerasrefinery.kz</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
							<div class="icon-content">
								<h5 class="dlab-tilte text-primary"><i class="ti-mobile"></i> Phone</h5>
								<p><a href="tel:+4733378901">+00 1234 5678 90 </a></p>
							</div>
						</div>
					</div>

            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
    <!-- Business Hours -->
    <div class="section-full content-inner">
            <div class="row">
                <div class="col-lg-12 m-b30"  style="border-left: 1px solid rgb(220, 217, 217);">
                    <div class="section-head text-primary">
                        <h2 class="title"> <i class="ti-clock"></i> Business Hours</h2>
                        <p>Our offices are open during the following hours:</p>
                        <ul class="list-angle-right">
                            <li>Monday - Friday: 9:00 AM - 5:00 PM</li>
                            <li>Saturday: 9:00 AM - 1:00 PM</li>
                            <li>Sunday: Closed</li>
                            <li>Holidays: Closed</li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
    </div>
</div>
</div>
<!-- Contact Form -->
<div class="section-full bg-gray content-inner">
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
        <div class="section-head text-center">
            <h2 class="title">Send Us a Message</h2>
            <p>Fill out the form below and we'll get back to you as soon as possible</p>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="dlab-form">
                    <div class="container">
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
                    </div>
                </form>
            </div>
        </div>
        </div>
            <!-- right part start -->
                    <div class="col-lg-6 m-b30 d-flex">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16521.692061673573!2d51.90010141891137!3d47.10532954820193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41a3e98f3b69d0ad%3A0xf0e24c1330f6b699!2sBaqtygerey%20Qulmanov%20St%20107%2C%20Atyrau%2C%20Kazakhstan!5e0!3m2!1sen!2sng!4v1747638731935!5m2!1sen!2sng" style="border:0; width:100%;  min-height:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- right part END -->
        </div>
    </div>
</div>



@endsection 