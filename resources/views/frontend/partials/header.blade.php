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
            @if (Route::has('login'))
                @auth
                    <div class="header-links col-auto order-lg-3">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">Logout</a>

                    </div><!-- Header Links End -->
                @else
                    <div class="header-links col-auto order-lg-3">
                        <a href="{{ route('login') }}">Login</a>
                        <span>or</span>
                        <a href="{{ route('register') }}">Sign up</a>
                    </div><!-- Header Links End -->
                @endauth
            @endif
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

<!--Offcanvas Section End-->
<!--OffCanvas Overlay-->
<div class="offcanvas-overlay"></div>




<!-- Slider Section Start -->

<!-- Slider Section End -->
