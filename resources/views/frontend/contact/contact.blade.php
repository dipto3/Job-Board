@extends('frontend.layouts.master')
@section('frontend.content')
 <!-- Page Heading Section Start -->
 <div class="page-heading-section section bg-parallax" data-bg-image="{{ asset('frontend/assets/images/bg/bg-1.jpg') }}" data-overlay="50">
    <div class="container">
        <div class="page-heading-content text-center">
            <h3 class="title">Contact Us</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
        </div>
    </div>
</div>
<!-- Page Heading Section End -->

<!-- Contact Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row mb-n5">

            <!-- Contact Map Start -->
            <div class="col-12 mb-5">
                <!-- Google Map Area Start -->
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2224905.8379164026!2d-63.27089988050263!3d-2.8569688249815943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91e8605342744385%3A0x3d3c6dc1394a7fc7!2sAmazon%20Rainforest!5e0!3m2!1sen!2sbd!4v1635401091721!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!-- End of Google Map Area -->
            </div>
            <!-- Contact Map End -->

            <!-- Contact Information Start -->
            <div class="col-lg-5 col-12 mb-5">
                <div class="contact-information">
                    <h5 class="title mb-4">Contact Information</h5>
                    <ul>
                        <li><i class="fa fa-map-o"></i><span>House 09, Road 32, Mohammadpur,<br>Dhaka-1200, UK</span></li>
                        <li><i class="fa fa-phone-square"></i><span>+88 018 785 454 589</span></li>
                        <li><i class="fa fa-fax"></i><span>+88 123 785 132 543</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>keller@email.com</span></li>
                    </ul>
                    <div class="contact-social">
                        <a target="_blank" rel="noopener" href="https://www.facebook.com/" class="fa fa-facebook"></a>
                        <a target="_blank" rel="noopener" href="https://www.twitter.com/" class="fa fa-twitter"></a>
                        <a target="_blank" rel="noopener" href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                        <a target="_blank" rel="noopener" href="https://www.instagram.com/" class="fa fa-instagram"></a>
                    </div>
                </div>
            </div>
            <!-- Contact Information End -->

            <!-- Contact Form Start -->
            <div class="col-lg-7 col-12 mb-5">
                <div class="contact-form">
                    <h5 class="title mb-4">Get in Touch</h5>
                    <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php" method="post">
                        <div class="row mb-n3">
                            <div class="col-md-6 col-12 mb-3"><input type="text" name="con_name" placeholder="Your Name"></div>
                            <div class="col-md-6 col-12 mb-3"><input type="email" name="con_email" placeholder="Email Address"></div>
                            <div class="col-12 mb-3"><textarea name="con_message" placeholder="Your Message" rows="4"></textarea></div>
                            <div class="col-12 mb-3"><input class="btn btn-primary px-5" type="submit" value="Send Message"></div>
                        </div>
                    </form>
                    <div class="form-message mt-3"></div>
                </div>
            </div>
            <!-- Contact Form End -->

        </div>
    </div>
</div>
<!-- Contact Section End -->
@endsection
