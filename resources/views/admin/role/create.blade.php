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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Role</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Roles</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Create</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Create Role</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-4">
                                    <div>
                                        <form class="form-horizontal" action="{{ route('role.store') }}" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="name" id="simpleinput"
                                                        class="form-control" placeholder="Role name">
                                                </div>
                                            </div>


                                            <button style="float: right;color:white;" type="submit"
                                                class="btn btn-success waves-effect waves-light">Submit</button>
                                        </form>

                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->

        </div> <!-- end content -->

    </div>
@endsection
