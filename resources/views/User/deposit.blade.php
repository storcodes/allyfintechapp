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
                        <h4 class="mb-sm-0 font-size-18">Desposit To Your Alley Account</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Transfer</a></li>
                                <li class="breadcrumb-item active">Deposit form</li>
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
                            <h4 class="card-title mb-0">Deposit Process</h4>
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
                                                <h5>Deposit Acccount Details</h5>
                                            </div>
                                            <form action="{{route('user.deposit_money')}}" method="POST"> @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-namecard-input"
                                                                class="form-label">Name on Account</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-namecard-input"
                                                                placeholder="Enter the Name of the Recepient" value="{{Auth::user()->account->name}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Account
                                                                Type</label>
                                                               
                                                                <input type="text" class="form-control"
                                                                    id="basicpill-cardno-input"
                                                                    placeholder="Enter Recipient Account Number" value="{{Auth::user()->account->type}}" name="type">
                                                               
                                                               
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-cardno-input"
                                                                class="form-label"> Account Number</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-cardno-input"
                                                                placeholder="Enter Recipient Account Number" value="{{Auth::user()->account->number}}" name="number">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-card-verification-input"
                                                                class="form-label">Amount</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-card-verification-input"
                                                                placeholder="Enter the amount you want to transfer" name="amount">


                                                                <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                                                <input type="hidden" name="orderID" value="345">
                                                                <input type="hidden" name="currency" value="NGN">
                                                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                                                
                                                                
                                                    
                                                    


                                                        </div>
                                                    </div>
                                                </div>
                                               

                                                <ul class="pager wizard twitter-bs-wizard-pager-link">

                                                    <li class="float-end"><button 
                                                            class="btn btn-primary" 
                                                           type="submit">Deposit</button>
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
