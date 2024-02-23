  <!-- Job List Wrap Start -->
  <div>
      <div class="job-list-wrap">

          @foreach ($activeJobs as $job)
              <!-- Job List Start -->
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
              <!-- Job List Start -->
          @endforeach


      </div>
      <!-- Job List Wrap Start -->

      <div class="text-center mt-4 mt-lg-5">
          <button wire:click="loadMore" class="btn btn-primary">View All Jobs</button>
      </div>
  </div>
