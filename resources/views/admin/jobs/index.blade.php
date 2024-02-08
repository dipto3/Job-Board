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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Datatable</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Datatable</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                    <div class="col-12">
                       
                        <div class="card-box table-responsive">
                            <a  href="{{ route('job.create') }}" style="float: right;color:white;" type="button" class="btn btn-info waves-effect waves-light">Add New<i class="mdi mdi-plus"></i></a>
                                <h4 class="header-title">Default Example</h4>
                            <p class="sub-header">
                                DataTables has most 
                            </p>

                            <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    
                                    <td>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i style="font-size: 20px;" class="far fa-eye"></i>
                                            </div>
                                            <div class="col-md-2">
                                                <i style="font-size: 20px;" class="fas fa-trash"></i> 
                                            </div>
                                            <div class="col-md-2">
                                                <i style="font-size: 20px;" class="fas fa-edit"></i>
                                            </div>
                                            {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
                                                <i class="fas fa-edit"></i>
                                            </div> --}}
                                    </div>
                                        
                                    </td>
                                </tr>
                               
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
