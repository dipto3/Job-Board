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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Job</a></li>
                                <li class="breadcrumb-item active">Jobs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Job List</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card-box table-responsive">

                        <table id="datatable" class="table table-bordered  dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Account Status</th>
                                    <th>Approve Account</th>
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
                </div>
            </div>

        </div>
    </div>
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
