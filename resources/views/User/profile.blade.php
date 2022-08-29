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
                        <h4 class="mb-sm-0 font-size-18">Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm order-2 order-sm-1">
                                    <div class="d-flex align-items-start mt-3 mt-sm-0">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xl me-3">
                                                <img src="/admin_assets/images/users/avatar-2.jpg" alt=""
                                                    class="img-fluid rounded-circle d-block">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div>
                                                <h5 class="font-size-16 mb-1">{{Auth::user()->name}}</h5>
                                                <p class="text-muted font-size-13">&nbsp;</p>

                                                <div
                                                    class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                                    {{-- <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>&nbsp;</div> --}}
                                                    <div><i
                                                            class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{Auth::user()->email}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview"
                                        role="tab">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab">Account</a>
                                </li>

                            </ul>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="overview" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">About</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Name :</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        <p class="mb-2">{{Auth::user()->name}}</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="py-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Phone :</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <div class="text-muted">
                                                        <p>{{Auth::user()->phone}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Edit profile</h5>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- ============================================================== -->
                                    <!-- Start right Content here -->
                                    <!-- ============================================================== -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                           
                                               
                                                
                                                    <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                                        <ul class="twitter-bs-wizard-nav">
                                                            <li class="nav-item">
                                                                <a href="#seller-details" class="nav-link"
                                                                    data-toggle="tab">
                                                                    <div class="step-icon" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Seller Details">
                                                                        <i class="bx bx-list-ul"></i>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#company-document" class="nav-link"
                                                                    data-toggle="tab">
                                                                    <div class="step-icon" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        title="Company Document">
                                                                        <i class="bx bx-book-bookmark"></i>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="nav-item">
                                                                <a href="#bank-detail" class="nav-link"
                                                                    data-toggle="tab">
                                                                    <div class="step-icon" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Bank Details">
                                                                        <i class="bx bxs-bank"></i>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!-- wizard-nav -->

                                                        <div class="tab-content twitter-bs-wizard-tab-content">
                                                            <div class="tab-pane" id="seller-details">
                                                                <div class="text-center mb-4">
                                                                    <h5>Edit Your Details</h5>
                                                                    <p class="card-title-desc">Fill all information below</p>
                                                                </div>
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="basicpill-firstname-input"
                                                                                    class="form-label">
                                                                                    Username</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="basicpill-firstname-input"
                                                                                   value="{{Auth::user()->name}}" name="name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="basicpill-lastname-input"
                                                                                    class="form-label">Phone</label>
                                                                                <input type="tel" class="form-control"
                                                                                    id="basicpill-lastname-input"
                                                                                    value="{{Auth::user()->phone}}" name="phone" >
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="basicpill-phoneno-input"
                                                                                    class="form-label">Phone</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="basicpill-phoneno-input"
                                                                                    placeholder="Enter your Phone No.">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="basicpill-email-input"
                                                                                    class="form-label">Email</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="basicpill-email-input"
                                                                                    placeholder="Enter your email">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="basicpill-address-input"
                                                                                    class="form-label">Address</label>
                                                                                <textarea id="basicpill-address-input"
                                                                                    class="form-control" rows="2"
                                                                                    placeholder="Enter your Address"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                    <li class="next"><a href="javascript: void(0);"
                                                                            class="btn btn-primary"
                                                                            onclick="nextTab()">Next <i
                                                                                class="bx bx-chevron-right ms-1"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- tab pane -->
                                                            <div class="tab-pane" id="company-document">
                                                                <div>
                                                                    <div class="text-center mb-4">
                                                                        <h5>Company Document</h5>
                                                                        <p class="card-title-desc">Fill all information
                                                                            below</p>
                                                                    </div>
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label for="basicpill-pancard-input"
                                                                                        class="form-label">PAN
                                                                                        Card</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="basicpill-pancard-input"
                                                                                        placeholder="Enter your PAN No.">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label for="basicpill-vatno-input"
                                                                                        class="form-label">VAT/TIN
                                                                                        No.</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="basicpill-vatno-input"
                                                                                        placeholder="Enter your VAT/TIN No.">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label for="basicpill-cstno-input"
                                                                                        class="form-label">GST
                                                                                        No.</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="basicpill-cstno-input"
                                                                                        placeholder="Enter your GST No.">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        for="basicpill-servicetax-input"
                                                                                        class="form-label">Service Tax
                                                                                        No.</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="basicpill-servicetax-input"
                                                                                        placeholder="Enter your Service Tex No.">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        for="basicpill-companyuin-input"
                                                                                        class="form-label">Company
                                                                                        UIN</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="basicpill-companyuin-input"
                                                                                        placeholder="Enter your Company UIN.">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        for="basicpill-declaration-input"
                                                                                        class="form-label">Declaration</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="basicpill-declaration-input"
                                                                                        placeholder="Enter your Declaration">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    <ul
                                                                        class="pager wizard twitter-bs-wizard-pager-link">
                                                                        <li class="previous"><a
                                                                                href="javascript: void(0);"
                                                                                class="btn btn-primary"
                                                                                onclick="nextTab()"><i
                                                                                    class="bx bx-chevron-left me-1"></i>
                                                                                Previous</a></li>
                                                                        <li class="next"><a href="javascript: void(0);"
                                                                                class="btn btn-primary"
                                                                                onclick="nextTab()">Next <i
                                                                                    class="bx bx-chevron-right ms-1"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- tab pane -->
                                                            <div class="tab-pane" id="bank-detail">
                                                                <div>
                                                                    <div class="text-center mb-4">
                                                                        <h5>Bank Details</h5>
                                                                        <p class="card-title-desc">Fill all information
                                                                            below</p>
                                                                    </div>
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        for="basicpill-namecard-input"
                                                                                        class="form-label">Name on
                                                                                        Card</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="basicpill-namecard-input"
                                                                                        placeholder="Enter your Name on Card">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">Credit
                                                                                        Card Type</label>
                                                                                    <select class="form-select">
                                                                                        <option selected>Select Card
                                                                                            Type</option>
                                                                                        <option value="AE">American
                                                                                            Express</option>
                                                                                        <option value="VI">Visa</option>
                                                                                        <option value="MC">MasterCard
                                                                                        </option>
                                                                                        <option value="DI">Discover
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label for="basicpill-cardno-input"
                                                                                        class="form-label">Credit Card
                                                                                        Number</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="basicpill-cardno-input"
                                                                                        placeholder="Enter your Credit Card Number">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        for="basicpill-card-verification-input"
                                                                                        class="form-label">Card
                                                                                        Verification Number</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="basicpill-card-verification-input"
                                                                                        placeholder="Enter your Card Verification Number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        for="basicpill-expiration-input"
                                                                                        class="form-label">Expiration
                                                                                        Date</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="basicpill-expiration-input"
                                                                                        placeholder="Enter your Expiration Date">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    <ul
                                                                        class="pager wizard twitter-bs-wizard-pager-link">
                                                                        <li class="previous"><a
                                                                                href="javascript: void(0);"
                                                                                class="btn btn-primary"
                                                                                onclick="nextTab()"><i
                                                                                    class="bx bx-chevron-left me-1"></i>
                                                                                Previous</a></li>
                                                                        <li class="float-end"><a
                                                                                href="javascript: void(0);"
                                                                                class="btn btn-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target=".confirmModal">Save
                                                                                Changes</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- tab pane -->
                                                        </div>
                                                        <!-- end tab content -->
                                                    </div>
                                               
                                                <!-- end card body -->
                                            
                                            <!-- end card -->
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end main content-->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="about" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">About</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="pb-3">
                                            <h5 class="font-size-15">Referral Code :</h5>
                                            <div class="text-muted">
                                                <p class="mb-2">{{Auth::user()->referral_code}}</p>



                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <h5 class="font-size-15">Account No :</h5>
                                            <div class="text-muted">
                                                <p>{{Auth::user()->account->number}}</p>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end col -->


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
