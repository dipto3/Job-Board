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
                                                <input class="form-control" type="text" name="name" id="name"
                                                    placeholder="john" value="{{ old('name') }}">
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="emailaddress">Email</label>
                                                <input class="form-control" type="email" name="email"
                                                    id="emailaddress" placeholder="john@deo.com"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="emailaddress">Phone Number</label>
                                                <input class="form-control" type="text" name="contract_number"
                                                    id="contract_number" placeholder="+880"
                                                    value="{{ old('contract_number') }}">
                                                @error('contract_number')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="emailaddress">Website/LinkDin page </label>
                                                <input class="form-control" type="text" name="webpage" id="webpage"
                                                    placeholder="www.johndeo.com" value="{{ old('webpage') }}">
                                                @error('webpage')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <a href="page-recoverpw.html"
                                                    class="text-muted float-right"><small>Forgot your
                                                        password?</small></a>
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" name="password"
                                                    id="password" placeholder="Enter your password"
                                                    value="{{ old('password') }}">
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
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
