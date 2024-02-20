@extends('admin.layouts.master')
@section('admin.content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row row justify-content-center">
                    <div class="col-lg-9 center-page">
                        <div class="text-center">
                            <h3 class="mb-3 mt-2">Choose Your Premium Package</h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has <br /> been the industry's standard dummy text ever since the
                                1500s.
                            </p>
                        </div>

                        <div class="row mt-4 pt-3">
                            <!--Pricing Column-->
                            <article class="pricing-column col-md-4" style="margin:auto;">
                                <div class="inner-box card-box">
                                    <div class="ribbon-pricing bg-danger rounded font-13 text-white"><b>POPULAR</b></div>
                                    <div class="plan-header text-white text-center bg-primary p-3 rounded">
                                        <h3 class="plan-title text-white text-uppercase font-16">Premium Package</h3>
                                        <h2 class="plan-price text-white">&#2547;29</h2>
                                        <div class="plan-duration">Unlimited</div>
                                    </div>
                                    <ul class="plan-stats list-unstyled text-center">
                                        <li><b>Unlimited</b> Job Post</li>

                                        <li><b>Email</b> Support</li>
                                        <li class="mb-0"><b>24x7</b> Support</li>
                                    </ul>

                                    <div class="text-center mb-2">
                                        <a href="{{ route('checkout') }}"
                                            class="btn btn-success width-lg btn-md width-md btn-bordred btn-rounded waves-effect waves-light">Buy</a>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->

        </div> <!-- end content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2017 - 2019 &copy; Adminox theme by <a href="#">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
