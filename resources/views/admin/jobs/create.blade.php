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
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Text</label>
                                                <div class="col-md-10">
                                                    <input type="text" id="simpleinput" class="form-control"
                                                        value="Some text value...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-email">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" id="example-email" name="example-email"
                                                        class="form-control" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label"
                                                    for="example-placeholder">Placeholder</label>
                                                <div class="col-md-10">
                                                    <input type="text" id="example-placeholder" class="form-control"
                                                        placeholder="placeholder">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-textarea">Text
                                                    area</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-helping">Helping
                                                    text</label>
                                                <div class="col-md-10">
                                                    <input type="text" id="example-helping" class="form-control"
                                                        placeholder="Helping text">
                                                    <span class="help-block"><small>A block of help text that breaks onto a
                                                            new line and may extend beyond one line.</small></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Input Select</label>
                                                <div class="col-md-10">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    {{-- <h6>Multiple select</h6>
                                                    <select multiple class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select> --}}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-fileinput">Default file
                                                    input</label>
                                                <div class="col-md-10">
                                                    <input type="file" id="example-fileinput" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-date">Date</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" id="example-date" type="date"
                                                        name="date">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-month">Month</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" id="example-month" type="month"
                                                        name="month">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-time">Time</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" id="example-time" type="time"
                                                        name="time">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-number">Number</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" id="example-number" type="number"
                                                        name="number">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">URL</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="url" name="url">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Search</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="search" name="search">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Tel</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="tel" name="tel">
                                                </div>
                                            </div>



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
