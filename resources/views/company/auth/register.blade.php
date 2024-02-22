<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Dashboard') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    @include('admin.partials.assets.css')
</head>

<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mb-0">

                        <div class="card-body p-4">

                            <div class="account-box">
                                <div class="account-logo-box">
                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="assets/images/logo-dark.png" alt="" height="30">
                                        </a>
                                    </div>
                                    <h5 class="text-uppercase mb-1 mt-4">Sign Up</h5>
                                    <p class="mb-0">Sign Up as a Company representative</p>
                                </div>

                                <div class="account-content mt-4">
                                    <form class="form-horizontal" action="{{ route('company.register') }}"
                                        method="post">
                                        @csrf

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="emailaddress">Company Name</label>
                                                <input class="form-control" type="name" name="name" id="name"
                                                    required="" placeholder="john">
                                            </div>
                                            <div class="col-12">
                                                <label for="emailaddress">Compnay Email address</label>
                                                <input class="form-control" type="email" name="email"
                                                    id="emailaddress" required="" placeholder="john@deo.com">
                                            </div>
                                            <div class="col-12">
                                                <label for="emailaddress">Compnay Contract Number</label>
                                                <input class="form-control" type="number" name="contract_number"
                                                    id="contract_number" required="" placeholder="+880">
                                            </div>
                                            <div class="col-12">
                                                <label for="emailaddress">Website/LinkDin page </label>
                                                <input class="form-control" type="name" name="webpage" id="webpage"
                                                    required="" placeholder="www.johndeo.com">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <a href="page-recoverpw.html"
                                                    class="text-muted float-right"><small>Forgot your
                                                        password?</small></a>
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" name="password"
                                                    required="" id="password" placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" checked="">
                                                    <label for="remember">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                            <p><strong>Already have an account?</strong><a
                                                    href="{{ route('company.login.page') }}">
                                                    Login</a></p>
                                        </div>

                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button
                                                    class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                                    type="submit">Sign In</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    @include('admin.partials.assets.js')
</body>

</html>
