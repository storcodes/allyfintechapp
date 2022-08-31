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
                        <h4 class="mb-sm-0 font-size-18">Transfer To Alley Users</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Transfer</a></li>
                                <li class="breadcrumb-item active">Transfer form</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Transfer Process</h4>
                        </div>
                        <div class="card-body">
                            <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav">
                                    <li class="nav-item">
                                        <a href="#bank-detail" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bank Details">
                                                <i class="bx bxs-bank"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- wizard-nav -->

                                <div class="tab-content twitter-bs-wizard-tab-content">

                                    <!-- tab pane -->
                                    <div class="tab-pane" id="bank-detail">
                                        <div>
                                            <div class="text-center mb-4">
                                                <h5>Transfer Acccount Details</h5>
                                                <p class="card-title-desc">Fill all information below</p>
                                            </div>
                                            <form action="{{route('user.transfer_to_alley_users')}}" method="POST"> @csrf

                                                    @foreach ($errors->all() as $err)
                                                        <p class="text-danger alert alert-danger">{{$err}}</p>
                                                    @endforeach

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-namecard-input"
                                                                class="form-label">Name of Account</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-namecard-input"
                                                                placeholder="Enter the Name of the Recepient" name ="name">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Account
                                                                Type</label>
                                                            <select class="form-select" name="type" required>
                                                                <option selected value="savings">Savings</option>
                                                                <option value="fixed deposit">fixed Deposit</option>
                                                                <option value="current">Current</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="basicpill-cardno-input"
                                                                class="form-label"> Account Number</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-cardno-input"
                                                                required placeholder="Enter Recipient Account Number" name="number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="basicpill-cardno-input"
                                                                class="form-label"> Pin</label>
                                                            <input type="password" class="form-control"
                                                                id="basicpill-cardno-input"
                                                                required placeholder="Enter Recipient Account Number" name="pin">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="basicpill-card-verification-input"
                                                                class="form-label">Amount</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-card-verification-input"
                                                                required placeholder="Enter the amount you want to transfer" name="amount">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input" class="form-label">Description (optional)</label>
                                                            <textarea id="basicpill-address-input" class="form-control" name="description" rows="2"  placeholder="Enter a description for recipient"></textarea>
                                                        </div>
                                                    </div>
                                                </div


                                                <ul class="pager wizard twitter-bs-wizard-pager-link">

                                                    <li class="float-end"><button
                                                            class="btn btn-primary"
                                                           type="submit">TRANSFER</button>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->


            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <!-- Modal -->
    <div class="modal fade confirmModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bx bx-check-circle display-4 text-success"></i>
                        </div>
                        <h5>Confirm Save Changes</h5>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-light w-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary w-md" data-bs-dismiss="modal" onclick="nextTab()">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())

                    </script> © Minia.
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
