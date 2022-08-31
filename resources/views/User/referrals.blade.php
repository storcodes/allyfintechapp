@extends('layouts.app')

@section('content')
    <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Referrals</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Referrals</a></li>
                                        <li class="breadcrumb-item active">Referral Table</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Referral Lists</h4>
                                    <p class="card-title-desc">here are the lists of various referrals</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">

                                            <thead>
                                                <tr>

                                                    <th>User Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Date/time</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($referrals as $r)
                                                <tr>
                                                    <td>{{$r->name}}</td>
                                                    <td>{{$r->phone}}</td>
                                                    <td>{{$r->created_at->format('D/M/Y h:ia')}}</td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Minia.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
@endsection

