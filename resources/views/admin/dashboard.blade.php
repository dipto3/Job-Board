@extends('admin.layouts.master')
@section('admin.content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Dashboard 1</li>
                                </ol>
                            </div>
                            @if (Auth::user()->role == 'Admin')
                                <h4 class="page-title">Admin Dashboard</h4>
                            @elseif (Auth::user()->role == 'Company')
                                <h4 class="page-title">{{ Auth::user()->name }}'s Dashboard</h4>
                            @endif

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">

                    <table class="table table-dark table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle">ID</th>
                                <th class="align-middle">Name</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">Account Status</th>
                                <th class="align-middle">Approve Account </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="align-middle">{{ $user->id }}</td>
                                    <td class="align-middle">{{ $user->name }}</td>
                                    <td class="align-middle">{{ $user->email }}</td>
                                    <td class="align-middle">{{($user->companyInfo)->approval }}</td>
                                    <td>
                                        <form style="margin:0; padding:0; decoration:none; background:none" method="post"
                                            action="{{route('update.active.account', ['encryptedUserId' => encrypt(($user->companyInfo)->id)])}}">
                                            @csrf
                                            <button type="submit" style=""
                                                class="btn btn-{{ ($user->companyInfo)->approval == 'pending' ? 'danger' : 'primary' }}">
                                                {{ ($user->companyInfo)->approval == 'pending' ? 'Approve' : 'Approved' }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Revenue Comparison</h4>

                            <div class="text-center">
                                <h5 class="font-weight-normal text-muted">You have to pay</h5>
                                <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 25643
                                    <small>USD</small>
                                </h3>
                            </div>

                            <div class="chart-container" dir="ltr">
                                <div class="" style="height:280px" id="platform_type_dates_donut"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Visitors Overview</h4>

                            <div class="text-center">
                                <h5 class="font-weight-normal text-muted">You have to pay</h5>
                                <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 5623
                                    <small>USD</small>
                                </h3>
                            </div>

                            <div class="chart-container" dir="ltr">
                                <div class="" style="height:280px" id="user_type_bar"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Goal Completion</h4>

                            <div class="text-center">
                                <h5 class="font-weight-normal text-muted">You have to pay</h5>
                                <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 12548
                                    <small>USD</small>
                                </h3>
                            </div>

                            <div class="chart-container" dir="ltr">
                                <div class="chart has-fixed-height" style="height:280px" id="page_views_today">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="card-box">
                            <h4 class="header-title">Recent Candidates</h4>
                            <p class="sub-header">
                                Your awesome text goes here.
                            </p>

                            <div class="table-responsive">
                                <table class="table table-hover m-0 table-actions-bar">

                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="btn-group dropdown">
                                                    <button type="button"
                                                        class="btn btn-light btn-xs dropdown-toggle waves-effect waves-light"
                                                        data-toggle="dropdown" aria-expanded="false"> <i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Job Timing</th>
                                            <th>Salary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/images/users/avatar-2.jpg" alt="contact-img"
                                                    title="contact-img" class="rounded-circle avatar-sm" />
                                            </td>

                                            <td>
                                                <h5 class="m-0 font-weight-medium">Tomaslau</h5>
                                            </td>

                                            <td>
                                                <i class="mdi mdi-map-marker text-primary"></i> New York
                                            </td>

                                            <td>
                                                <i class="mdi mdi-clock-outline text-success"></i> Full Time
                                            </td>

                                            <td>
                                                <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                            </td>

                                            <td>
                                                <a href="#" class="table-action-btn"><i
                                                        class="mdi mdi-pencil"></i></a>
                                                <a href="#" class="table-action-btn"><i
                                                        class="mdi mdi-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="assets/images/users/avatar-3.jpg" alt="contact-img"
                                                    title="contact-img" class="rounded-circle avatar-sm" />
                                            </td>

                                            <td>
                                                <h5 class="m-0 font-weight-medium">Erwin E. Brown</h5>
                                            </td>

                                            <td>
                                                <i class="mdi mdi-map-marker text-primary"></i> California
                                            </td>

                                            <td>
                                                <i class="mdi mdi-clock-outline text-success"></i> Part Time
                                            </td>

                                            <td>
                                                <i class="mdi mdi-currency-usd text-warning"></i> 1365
                                            </td>

                                            <td>
                                                <a href="#" class="table-action-btn"><i
                                                        class="mdi mdi-pencil"></i></a>
                                                <a href="#" class="table-action-btn"><i
                                                        class="mdi mdi-close"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/users/avatar-4.jpg" alt="contact-img"
                                                    title="contact-img" class="rounded-circle avatar-sm" />
                                            </td>

                                            <td>
                                                <h5 class="m-0 font-weight-medium">Margeret V. Ligon</h5>
                                            </td>

                                            <td>
                                                <i class="mdi mdi-map-marker text-primary"></i> New York
                                            </td>

                                            <td>
                                                <i class="mdi mdi-clock-outline text-success"></i> Full Time
                                            </td>

                                            <td>
                                                <i class="mdi mdi-currency-usd text-warning"></i> 115248
                                            </td>

                                            <td>
                                                <a href="#" class="table-action-btn"><i
                                                        class="mdi mdi-pencil"></i></a>
                                                <a href="#" class="table-action-btn"><i
                                                        class="mdi mdi-close"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/users/avatar-5.jpg" alt="contact-img"
                                                    title="contact-img" class="rounded-circle avatar-sm" />
                                            </td>

                                            <td>
                                                <h5 class="m-0 font-weight-medium">Jose D. Delacruz</h5>
                                            </td>

                                            <td>
                                                <i class="mdi mdi-map-marker text-primary"></i> New York
                                            </td>

                                            <td>
                                                <i class="mdi mdi-clock-outline text-success"></i> Part Time
                                            </td>

                                            <td>
                                                <i class="mdi mdi-currency-usd text-warning"></i> 2451
                                            </td>

                                            <td>
                                                <a href="#" class="table-action-btn"><i
                                                        class="mdi mdi-pencil"></i></a>
                                                <a href="#" class="table-action-btn"><i
                                                        class="mdi mdi-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="assets/images/users/avatar-8.jpg" alt="contact-img"
                                                    title="contact-img" class="rounded-circle avatar-sm" />
                                            </td>

                                            <td>
                                                <h5 class="m-0 font-weight-medium">Luke J. Sain</h5>
                                            </td>

                                            <td>
                                                <i class="mdi mdi-map-marker text-primary"></i> Australia
                                            </td>

                                            <td>
                                                <i class="mdi mdi-clock-outline text-success"></i> Part Time
                                            </td>

                                            <td>
                                                <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                            </td>

                                            <td>
                                                <a href="#" class="table-action-btn"><i
                                                        class="mdi mdi-pencil"></i></a>
                                                <a href="#" class="table-action-btn"><i
                                                        class="mdi mdi-close"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Total Unique Visitors</h4>

                            <div class="widget-chart text-center" dir="ltr">

                                <div id="donut-chart" style="height: 280px;"></div>

                                <div class="row text-center mt-4">
                                    <div class="col-6">
                                        <h3 data-plugin="counterup">1,507</h3>
                                        <p class="text-muted mb-0">Visitors Male</p>
                                    </div>
                                    <div class="col-6">
                                        <h3 data-plugin="counterup">854</h3>
                                        <p class="text-muted mb-1">Visitors Female</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Number of Transactions</h4>

                            <div class="widget-chart text-center" dir="ltr">

                                <div id="pie-chart" style="height: 280px;"></div>

                                <div class="row text-center mt-4">
                                    <div class="col-6">
                                        <h3 data-plugin="counterup">2,854</h3>
                                        <p class="text-muted mb-0">Payment Done</p>
                                    </div>
                                    <div class="col-6">
                                        <h3 data-plugin="counterup">22</h3>
                                        <p class="text-muted mb-1">Payment Due</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!--- end row -->

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
