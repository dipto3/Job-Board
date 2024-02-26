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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Package</a></li>
                                    <li class="breadcrumb-item active">Jobs</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Package List</h4>

                        </div>

                    </div>

                </div>

                <!-- end page title -->

                <div class="row">

                    <div class="col-12">
                        @if (Auth::user()->role === 'Company' && Auth::user()->companyInfo->package->name === 'Free')
                            <p class="col " style="float: left;color:rgb(201, 15, 15); text-align:center;"> <strong>You
                                    are
                                    using Free
                                    package, <a href="{{ route('package') }}" style="color:rgb(201, 15, 15);"><u>Please
                                            Buy Premium Package</u></a></strong>
                            </p>
                        @endif

                        <div class="card-box table-responsive">

                            <a href="{{ route('package.create') }}" type="button" style="float: right;"
                                class="col-md-2 btn btn-info  waves-effect waves-light">Add New<i
                                    class="mdi mdi-plus"></i></a>



                            <table id="datatable" class="table table-bordered  dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Package Name</th>
                                        <th>Limit</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($packages as $key => $package)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $package->name }}</td>
                                            <td>{{ $package->limit }}</td>
                                            <td>{{ $package->price }}</td>
                                            <td>
                                                <label class="switch">
                                                    <input class="switch_change" name="status" id="{{ $package->id }}"
                                                        value="{{ $package->status }}" data-onstyle="info" type="checkbox"
                                                        @php if ($package->status == 1) echo "checked"; @endphp>
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="button-list col-md-3 ml-1">
                                                        <a href="">
                                                            <button type="button"
                                                                class="btn btn-icon waves-effect btn-secondary btn-sm"><i
                                                                    style="font-size: 14px;" class="fas fa-edit"></i>
                                                            </button></a>

                                                    </div>
                                                    <div class="button-list col-md-2 ml-1">
                                                        <form action="" method="post">
                                                            @csrf
                                                            {{-- @method('delete') --}}

                                                            <button type="submit"
                                                                class="btn btn-icon waves-effect btn-secondary show-alert-delete-box btn-sm"
                                                                data-toggle="tooltip" title='Delete'><i
                                                                    style="font-size: 14px; " class="fas fa-trash"></i>
                                                            </button>

                                                        </form>

                                                        {{-- </div> --}}
                                                        {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                                                    <i class="fas fa-edit"></i>
                                                </div> --}}
                                                    </div>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
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
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.show-alert-delete-box', function(event) {
                var form = $(this).closest("form");

                event.preventDefault();
                swal({
                    title: "Are you sure you want to delete this record?",
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    type: "warning",
                    buttons: ["Cancel", "Yes!"],
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#example").DataTable()
        });
        $('.switch_change').on('change', function(e) {
            e.preventDefault();
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).attr('id');

            $.ajax({

                url: '{{ route('job.status') }}',
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    status: status,
                    id: id
                },

                success: function(data) {

                    toastr.success(data.message);
                }
            });
        });
    </script>
@endpush
