@extends('layout.backend_layout.master')
@section('page_title', 'Dashboard - The Ministry of Sanitation and Water Resource')
@section('content')

    
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
            
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex align-items-center mb-3">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control border-0" id="dash-daterange">
                                <span class="input-group-text bg-blue border-blue text-white">
                                    <i class="mdi mdi-calendar-range"></i>
                                </span>
                            </div>
                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-2">
                                <i class="mdi mdi-autorenew"></i>
                            </a>
                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-1">
                                <i class="mdi mdi-filter-variant"></i>
                            </a>
                        </form>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 


            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card" id="tooltip-container">
                        <div class="card-body">
                            <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                            <h4 class="mt-0 font-16">Income Status</h4>
                            <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">31,570</span></h2>
                            <p class="text-muted mb-0">Total income: $22506 <span class="float-end"><i class="fa fa-caret-up text-success me-1"></i>10.25%</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card" id="tooltip-container1">
                        <div class="card-body">
                            <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                            <h4 class="mt-0 font-16">Sales Status</h4>
                            <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">683</span></h2>
                            <p class="text-muted mb-0">Total sales: 2398 <span class="float-end"><i class="fa fa-caret-down text-danger me-1"></i>7.85%</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card" id="tooltip-container2">
                        <div class="card-body">
                            <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                            <h4 class="mt-0 font-16">Recent Users</h4>
                            <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">3.2</span>M</h2>
                            <p class="text-muted mb-0">Total users: 121 M <span class="float-end"><i class="fa fa-caret-up text-success me-1"></i>3.64%</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card" id="tooltip-container3">
                        <div class="card-body">
                            <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                            <h4 class="mt-0 font-16">Total Revenue</h4>
                            <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">68,541</span></h2>
                            <p class="text-muted mb-0">Total revenue: $1.2 M <span class="float-end"><i class="fa fa-caret-up text-success me-1"></i>17.48%</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

         

            <div class="row">
              
                <!-- CHAT -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <h4 class="header-title mb-3">Chat</h4>

                            <div class="chat-conversation">
                                <div data-simplebar style="height: 370px;">
                                    <ul class="conversation-list">
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-5.jpg" alt="male">
                                                <i>10:00</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Geneva</i>
                                                    <p>
                                                        Hello!
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-1.jpg" alt="Female">
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Dominic</i>
                                                    <p>
                                                        Hi, How are you? What about our next meeting?
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-5.jpg" alt="male">
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Geneva</i>
                                                    <p>
                                                        Yeah everything is fine
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-1.jpg" alt="male">
                                                <i>10:02</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>Dominic</i>
                                                    <p>
                                                        Wow that's great
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                            <div class="invalid-feedback">
                                                Please enter your messsage
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-danger chat-send waves-effect waves-light w-100">Send</button>
                                        </div>
                                    </div>
                                </form>

                            </div> <!-- end .chat-conversation-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->
            
        </div> <!-- container -->

    </div> <!-- content -->

@endsection