@extends('frontend.layouts.master')
@section('frontend.content')
    <div class="page-heading-section section bg-parallax" data-bg-image="assets/images/bg/bg-1.jpg" data-overlay="50">
        <div class="container">
            <div class="page-heading-content text-center">
                <h3 class="title">{{ $job->title }}</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="job-list.html">Jobs</a></li>
                    <li class="breadcrumb-item active">Full Stack Backend Developer</li>
                </ol>
            </div>
        </div>
    </div>

       <!-- Recent Jobs Start -->
       <div class="section section-padding">
        <div class="container">
            <div class="row mb-n5">

                <!-- Job List Details Start -->
                <div class="col-lg-8 col-12 mb-5 pe-lg-5">
                    <div class="job-list-details">
                        <div class="job-details-head row mx-0">
                            <div class="company-logo col-auto">
                                <a href="company-single.html"><img src="assets/images/companies/company-1.png" alt="Company Logo"></a>
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">{{ $job->salary }} </span>
                                <span class="badge bg-success">{{ $job->employment_type }}</span>
                            </div>
                            <div class="content col">
                                <h5 class="title">{{ $job->title }}</h5>
                                <ul class="meta">
                                    <li><strong class="text-primary"><a href="#">{{ $job->user->name }}</a></strong></li>
                                    <li><i class="fa fa-map-marker"></i> {{ $job->location }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-details-body">
                            <h6 class="mb-3">Job Description</h6>
                          <p>{!! $job->description !!}</p>
                        </div>
                    </div>
                </div>
                <!-- Job List Details End -->

                <!-- Job Sidebar Wrap Start -->
                <div class="col-lg-4 col-12 mb-5">
                    <div class="sidebar-wrap">
                        <!-- Sidebar (Apply Buttons) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <div class="row m-n2">
                                    {{-- <div class="col-xl-auto col-lg-12 col-sm-auto col-12 p-2">
                                        <a href="#" class="d-block btn btn-outline-secondary"><i class="fa fa-heart-o me-1"></i> Save Job</a>
                                    </div> --}}
                                    <div class="col-xl-auto col-lg-12 col-sm-auto col-12 p-2">
                                        <a href="#" class="d-block btn btn-primary">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar (Apply Buttons) End -->

                        <!-- Sidebar (Job Overview) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Job Overview</h6>
                                <ul class="job-overview list-unstyled">
                                    <li><strong>Published on:</strong> {{ \Carbon\Carbon::parse($job->published)->format('d F, Y (l)') }}</li>
                                    
                                    <li><strong>Employment Status:</strong> {{ $job->employment_type }}</li>
                                    <li><strong>Experience:</strong> {{ $job->experience }}</li>
                                    <li><strong>Job Location:</strong> {{ $job->location }}</li>
                                    <li><strong>Salary:</strong>{{ $job->salary }}</li>
                                    <li><strong>Gender:</strong>{{ $job->gender }}</li>
                                    <li><strong>Application Deadline:</strong> {{ \Carbon\Carbon::parse($job->deadline)->format('d F, Y (l)') }}</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar (Job Overview) End -->

                       
                    </div>
                </div>
                <!-- Job Sidebar Wrap End -->

            </div>
        </div>
    </div>
    <!-- Recent Jobs End -->
@endsection
