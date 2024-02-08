<header class="header">
    <div class="container">
        <div class="row justify-content-between align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="index.html"><img src="frontend/assets/images/logo/logo-light.png" alt="Site Logo"></a>
                </div>
            </div><!-- Header Logo End -->

            <!-- Offcanvas Toggle Start -->
            <div class="col-auto d-lg-none d-flex align-items-center">
                <button class="offcanvas-toggle">
                    <span></span>
                </button>
            </div>
            <!-- Offcanvas Toggle End -->

            <!-- Header Links Start -->
            <div class="header-links col-auto order-lg-3">
                <a href="#" data-bs-toggle="modal" data-bs-target="#loginSignupModal" data-bs-target-sub="#login">Login</a>
                <span>or</span>
                <a href="#" data-bs-toggle="modal" data-bs-target="#loginSignupModal" data-bs-target-sub="#signup">Sign up</a>
            </div><!-- Header Links End -->

            <!-- Header Menu Start -->
            <nav id="main-menu" class="main-menu col-lg-auto order-lg-2">
                <ul>
                    <li class="has-children"><a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home One</a></li>
                            <li><a href="index-2.html">Home Two</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="job-list.html">Jobs</a>
                        <ul class="sub-menu">
                            <li><a href="job-list.html">Job List</a></li>
                            <li><a href="job-single.html">Job Single</a></li>
                        </ul>
                    </li>
                    <li><a href="company-list.html">Company</a>
                        <ul class="sub-menu">
                            <li><a href="company-list.html">Company List</a></li>
                            <li><a href="company-single.html">Company Single</a></li>
                            <li><a href="create-job.html">Create Job</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="faq.html">FAQ'S</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </nav>
            <!-- Header Menu End -->

        </div>

    </div>
</header>


<!--Offcanvas Section Start-->
<div id="offcanvas" class="offcanvas-section">
    <button class="offcanvas-close" data-bs-target="#offcanvas">&times;</button>
    <div class="offcanvas-wrap">
        <div class="inner">

            <!-- Offcanvas user Start -->
            <div class="offcanvas-user">
                <a href="#" data-bs-toggle="modal" data-bs-target="#loginSignupModal" data-bs-target-sub="#login">Login</a>
                <span>or</span>
                <a href="#" data-bs-toggle="modal" data-bs-target="#loginSignupModal" data-bs-target-sub="#signup">Sign up</a>
            </div>
            <!-- Offcanvas user End -->

            <!-- Offcanvas Menu Start -->
            <div class="offcanvas-menu">
                <nav>
                    <ul>
                        <li class="has-children"><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="job-list.html">Jobs</a>
                            <ul class="sub-menu">
                                <li><a href="job-list.html">Job List</a></li>
                                <li><a href="job-single.html">Job Single</a></li>
                            </ul>
                        </li>
                        <li><a href="company-list.html">Company</a>
                            <ul class="sub-menu">
                                <li><a href="company-list.html">Company List</a></li>
                                <li><a href="company-single.html">Company Single</a></li>
                                <li><a href="create-job.html">Create Job</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="faq.html">FAQ'S</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Offcanvas Menu End -->

        </div>
    </div>
</div>
<!--Offcanvas Section End-->
<!--OffCanvas Overlay-->
<div class="offcanvas-overlay"></div>


<div class="loginSignupModal modal fade" id="loginSignupModal" tabindex="-1" role="dialog" aria-labelledby="loginSignupModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <ul class="loginSignupNav nav" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign up</a>
                    </li>
                </ul>

                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form>
                            <div class="row mb-n3">
                                <div class="col-12 mb-3"><input type="email" placeholder="Email"></div>
                                <div class="col-12 mb-3"><input type="password" placeholder="Password"></div>
                                <div class="col-12 mb-3">
                                    <div class="row justify-content-between mb-n2">
                                        <div class="col-auto mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember-me" id="remember-me" value="checkedValue" class="custom-control-input">
                                                <label class="custom-control-label" for="remember-me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-auto mb-2"><a href="#">Forgot Password?</a></div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Login"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-center">
                                    <p class="text-muted">Or Login With</p>
                                    <div class="login-reg-social">
                                        <a target="_blank" rel="noopener" href="https://www.facebook.com/" class="fa fa-facebook"></a>
                                        <a target="_blank" rel="noopener" href="https://www.twitter.com/" class="fa fa-twitter"></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a target="_blank" rel="noopener" href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <form>
                            <div class="row mb-n3">
                                <div class="col-12 mb-3"><input type="text" placeholder="Your Name"></div>
                                <div class="col-12 mb-3"><input type="email" placeholder="Your Email Address"></div>
                                <div class="col-12 mb-3"><input type="password" placeholder="Choose a Password"></div>
                                <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Sign Up"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col text-center">
                                    <p class="text-muted">Or Register With</p>
                                    <div class="login-reg-social">
                                        <a target="_blank" rel="noopener" href="https://www.facebook.com/" class="fa fa-facebook"></a>
                                        <a target="_blank" rel="noopener" href="https://www.twitter.com/" class="fa fa-twitter"></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a target="_blank" rel="noopener" href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Slider Section Start -->

<!-- Slider Section End -->