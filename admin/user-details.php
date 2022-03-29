<?php
$pg = 'userManagement';
$title = "User Details";
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
                                            <div class="back-title">
                                                <a href="user-management.php" class="backLink mr-2"><i class="fas fa-chevron-left"></i></a>
                                                <h1 class="page-title text-capitalize">User Details</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 px-3">
                                                <div class="row">
                                                    <div class="col-sm-8 order-1 order-sm-0">
                                                        <div class="d-xl-flex">
                                                            <div class="userImage mr-sm-5">
                                                                <div class="userImageInner">
                                                                    <img src="images/company-img.png" alt="" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="userDetails w-75">
                                                                <div class="detailBox d-lg-flex my-2">
                                                                    <label for="" class="detail-label">Full Name:</label>
                                                                    <p class="detail-value">Mark Carson</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex my-2">
                                                                    <label for="" class="detail-label">Email Address:</label>
                                                                    <p class="detail-value">abc@xyz.com</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex my-2">
                                                                    <label for="" class="detail-label">Date Registered:</label>
                                                                    <p class="detail-value">mm/dd/yyyy</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 text-right  order-0 order-sm-1">
                                                        <p class="statusTag">Status: <span>Active</span></p>
                                                        <a href="#_" class="mediaLink">View Media</a>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-12">
                                                        <h2 class="sub-title">Recent Orders:</h2>
                                                        <div class="maain-tabble table-responsive">
                                                            <table class="table table-striped table-bordered zero-configuration">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S No.</th>
                                                                        <th>Order ID</th>
                                                                        <th>Order Date</th>
                                                                        <th>Title</th>
                                                                        <th>Amount Paid</th>
                                                                        <th>Order Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>01</td>
                                                                        <td>001</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>Abc Product</td>
                                                                        <td>$123</td>
                                                                        <td class="statusPending">Pending</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>02</td>
                                                                        <td>002</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>Abc Product</td>
                                                                        <td>$123</td>
                                                                        <td class="statusPending">In-process</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>03</td>
                                                                        <td>003</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>Abc Product</td>
                                                                        <td>$123</td>
                                                                        <td class="statusPending">Pending</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>04</td>
                                                                        <td>004</td>
                                                                        <td>mm/dd/yyyy</td>
                                                                        <td>Abc Product</td>
                                                                        <td>$123</td>
                                                                        <td class="statusPending">Delivered</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
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