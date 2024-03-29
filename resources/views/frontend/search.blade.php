<!-- Page Heading Section Start -->
<!-- Page Heading Section End -->

<div class="section section-padding ">
    <div class="container">
        {{-- <div class="section-title">
            <h2 class="title">Search Results</h2>
        </div> --}}

        @if (count($jobs) > 0)
            <ul>
                @foreach ($jobs as $job)
                    <a href="{{ route('job.description', $job->uuid) }}" class="job-list row">
                        <div class="company-logo col-auto">
                            <img src="frontend/assets/images/companies/company-1.png" alt="Company Logo">
                        </div>
                        <div class="salary-type col-auto order-sm-3">
                            <span class="salary-range">{{ $job->salary }}</span>
                            <span class="badge bg-success">{{ $job->employment_type }}</span>
                        </div>
                        <div class="content col">
                            <h6 class="title">{{ $job->title }}</h6>
                            <ul class="meta">
                                <li><strong class="text-primary">{{ $job->user->name }}</strong></li>
                                <li><i class="fa fa-map-marker"></i> {{ $job->location }}</li>
                                {{-- <li><i class="fa fa-map-marker"></i> {{ $job->user->companyInfo->contract_number }}</li> --}}
                            </ul>
                        </div>
                    </a>
                    <!-- Display other job details as needed -->
                @endforeach
            </ul>
        @else
            <strong>
                <h3 style="color: red;">No jobs found.</h3>
            </strong>
    </div>

    @endif
</div>
</div>
