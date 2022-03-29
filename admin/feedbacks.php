<?php
$pg = 'feedbacks';
$title = "Feedbacks";
include('header.php');
include('sidebar.php');
?>

<div class="app-content content dashboard">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card py-2 px-1">
                            <div class="card-content collapse show">
                                <div class="card-dashboard">
                                    <div class="row mb-2 mb-md-3">
                                        <div class="col-12">
                                            <h1 class="page-title text-capitalize">Feedbacks</h1>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 px-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="dataTables_length text-left">
                                                            <div class="user-listing-top">
                                                                <div class="d-lg-flex align-items-end justify-content-between">
                                                                    <div class="userInput mb-2">
                                                                        <label class="dashLabel d-inline-block mb-1 mb-xl-0">Show</label>
                                                                        <select class="d-inline-block dashInput sm-dropdown mx-1">
                                                                            <option value="10">10</option>
                                                                            <option value="25">25</option>
                                                                            <option value="50">50</option>
                                                                            <option value="100">100</option>
                                                                        </select>
                                                                        <label class="dashLabel d-inline-block mb-1 mb-xl-0">Entries</label>
                                                                    </div>
                                                                    <div class="userInput mb-2">
                                                                        <label class="dashLabel d-inline-block mb-1 mb-xl-0">Filter By:</label>
                                                                        <select class="d-inline-block dashInput">
                                                                            <option value="" disabled="" hidden="" selected="">Select Status</option>
                                                                            <option value="1">Reported Delivery</option>
                                                                            <option value="2">Reported Post</option>
                                                                            <option value="3">Contact Us Form</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="d-lg-flex align-items-end flex-wrap justify-content-between">
                                                                    <div class="userInput mb-2">
                                                                        <div class="d-md-flex align-items-center">
                                                                            <label for="" class="dashLabel mb-1 mb-xl-0">Sort By:</label>
                                                                            <div class="d-sm-flex">
                                                                                <div class="mb-0 mb-xl-0 mr-sm-1">
                                                                                    <label class="dashLabel dashDateLabel d-block ml-2">From</label>
                                                                                    <input class="dashInput p-1" type="date">
                                                                                </div>
                                                                                <div class="mb-0 mb-xl-0">
                                                                                    <label class="dashLabel dashDateLabel d-block ml-2">To</label>
                                                                                    <input class="dashInput p-1" type="date">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="userInput mb-2">
                                                                        <div class="form-field mb-1">
                                                                            <div class="d-xl-flex align-items-center justify-content-end">
                                                                                <div class="dataTables_filter">
                                                                                    <label class="dashLabel d-inline-block mb-1 mb-xl-0">Search</label>
                                                                                    <div class="dashSearchWrap">
                                                                                        <form action="">
                                                                                            <input type="search" id="search-inp" class="dashInput search-input" placeholder="Search">
                                                                                            <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="maain-tabble table-responsive">
                                                            <table class="table table-striped table-bordered zero-configuration">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S No.</th>
                                                                        <th>Full Name</th>
                                                                        <th>Date Submitted</th>
                                                                        <th>Type</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>01</td>
                                                                        <td>Mark Carson</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>Reported Post</td>
                                                                        <td>
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                                <div class="dropdown-menu text-left" x-placement="bottom-start">
                                                                                    <a class="dropdown-item" href="view-feedback-3.php">
                                                                                        <i class="far fa-eye"></i>View</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>02</td>
                                                                        <td>Mark Carson</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>Reported Delivery</td>
                                                                        <td>
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                                <div class="dropdown-menu text-left" x-placement="bottom-start">
                                                                                    <a class="dropdown-item" href="view-feedback-2.php">
                                                                                        <i class="far fa-eye"></i>View</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>03</td>
                                                                        <td>Mark Carson</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>Reported Post</td>
                                                                        <td>
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                                <div class="dropdown-menu text-left" x-placement="bottom-start">
                                                                                    <a class="dropdown-item" href="view-feedback-3.php">
                                                                                        <i class="far fa-eye"></i>View</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>04</td>
                                                                        <td>Mark Carson</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>Reported Delivery</td>
                                                                        <td>
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                                <div class="dropdown-menu text-left" x-placement="bottom-start">
                                                                                    <a class="dropdown-item" href="view-feedback-2.php">
                                                                                        <i class="far fa-eye"></i>View</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>05</td>
                                                                        <td>Mark Carson</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>Reported Post</td>
                                                                        <td>
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                                <div class="dropdown-menu text-left" x-placement="bottom-start">
                                                                                    <a class="dropdown-item" href="view-feedback-3.php">
                                                                                        <i class="far fa-eye"></i>View</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>05</td>
                                                                        <td>Mark Carson</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>Contact Us</td>
                                                                        <td>
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                                <div class="dropdown-menu text-left" x-placement="bottom-start">
                                                                                    <a class="dropdown-item" href="view-feedback-1.php">
                                                                                        <i class="far fa-eye"></i>View</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mt-2">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="showing-result" id="DataTables_Table_0_info">
                                                            Showing 1 to 20 of 52 entries
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                            <ul class="pagination justify-content-end">
                                                                <li class="paginate_button page-item previous disabled">
                                                                    <a href="#" class="page-link">Previous</a>
                                                                </li>
                                                                <li class="paginate_button page-item active">
                                                                    <a href="#" class="page-link">01</a>
                                                                </li>
                                                                <li class="paginate_button page-item">
                                                                    <a href="#" class="page-link">02</a>
                                                                </li>
                                                                <li class="paginate_button page-item">
                                                                    <a href="#" class="page-link">03</a>
                                                                </li>
                                                                <li class="paginate_button page-item next disabled" i="">
                                                                    <a href="#" class="page-link">Next</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php include('footer.php') ?>