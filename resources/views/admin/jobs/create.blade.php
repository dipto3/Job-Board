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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                                    <li class="breadcrumb-item active">Basic Inputs</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Create Job</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <form class="form-horizontal" action="{{ route('job.store') }}" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Title</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="title" id="simpleinput"
                                                        class="form-control" placeholder="Job title">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label"
                                                    for="example-placeholder">Tags</label>
                                                <div class="col-md-10">
                                                    <input type="text" data-role="tagsinput" name="tags[]"
                                                        id="example-placeholder" class="form-control"
                                                        placeholder="Job tags">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label"
                                                    for="example-placeholder">Location</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="location" id="example-placeholder"
                                                        class="form-control" placeholder="Location">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-number">salary</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" id="example-number" type="number"
                                                        name="salary" placeholder="10000-20000 BDT.">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label"
                                                    for="example-number">Experience</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" id="example-number" type="number"
                                                        name="experience" placeholder="1-2 years">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Employment Type</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="employment_type">
                                                        <option>Select</option>
                                                        <option value="fulltime">Full-Time</option>
                                                        <option value="parttime">Part-Time</option>
                                                        <option value="freelance">Freelance</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Gender</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="gender">
                                                        <option>Select</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="any">Any</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-date">Published
                                                    on</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" id="example-date" type="date"
                                                        name="published">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-date">Deadline</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" id="example-date" type="date"
                                                        name="deadline">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Application Link</label>
                                                <div class="col-md-10">
                                                    <input placeholder="URL" class="form-control" type="url"
                                                        name="link">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="status">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>

                                                    </select>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label"
                                                    for="example-textarea">Description</label>
                                                <div class="col-md-10  ">
                                                    <textarea class="form-control summernote" name="description" rows="5" id="example-textarea"></textarea>
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
