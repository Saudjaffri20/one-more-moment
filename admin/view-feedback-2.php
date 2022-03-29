<?php
$pg = 'feedbacks';
$title = "View Feedback";
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
                                    <div class="row align-items-end mb-2 mb-md-3">
                                        <div class="col-12">
                                            <div class="back-title">
                                                <a href="feedbacks.php" class="backLink mr-2"><i class="fas fa-chevron-left"></i></a>
                                                <h1 class="page-title text-capitalize">Feedback Details</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 px-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="px-lg-2">
                                                            <h3 class="sub-title">Reported By</h3>
                                                            <div class="dashCard py-2 px-3 my-2 my-md-3">
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Full Name:</label>
                                                                    <p class="detail-value">Mark Carson</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Type:</label>
                                                                    <p class="detail-value">Product Reported</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Email Address:</label>
                                                                    <p class="detail-value">testing@test.com</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Date Reported:</label>
                                                                    <p class="detail-value">mm/dd/yyyy</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-lg-2">
                                                            <h3 class="sub-title">Order Information</h3>
                                                            <div class="dashCard py-2 px-3 my-2 my-md-3">
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Order ID:</label>
                                                                    <p class="detail-value">141241</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Order Date:</label>
                                                                    <p class="detail-value">mm/dd/yyyy</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Order Status:</label>
                                                                    <p class="detail-value">Delivered</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-lg-2">
                                                            <h3 class="sub-title">Account Information</h3>
                                                            <div class="dashCard py-2 px-3 my-2 my-md-3">
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Full Name:</label>
                                                                    <p class="detail-value">Daniel Jacob</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Email Address:</label>
                                                                    <p class="detail-value">test@webkul.com</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="page-title-2 text-capitalize mb-2 mb-md-3 px-lg-2">Address</h2>
                                                        <hr class="m-0">
                                                    </div>
                                                    <div class="col-12 pt-2 pt-md-3">
                                                        <div class="px-lg-2">
                                                            <h3 class="sub-title">Shipping Address</h3>
                                                            <div class="dashCard d-md-flex py-2 px-3 my-2 my-md-3">
                                                                <div class="w-100">
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">County/Region</label>
                                                                        <p class="detail-value noWhiteSpace">United States</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Full Name:</label>
                                                                        <p class="detail-value noWhiteSpace">Mark</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Street Address:</label>
                                                                        <p class="detail-value noWhiteSpace">Abc Road</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">City:</label>
                                                                        <p class="detail-value noWhiteSpace">Abc</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">State/Province/Region:</label>
                                                                        <p class="detail-value noWhiteSpace">Abc</p>
                                                                    </div>
                                                                </div>
                                                                <div class="w-100">
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Email Address:</label>
                                                                        <p class="detail-value noWhiteSpace">abc@xyz.com</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Country Code:</label>
                                                                        <p class="detail-value noWhiteSpace">000-000-0000</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Phone Number:</label>
                                                                        <p class="detail-value noWhiteSpace">12345678</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Zip Code:</label>
                                                                        <p class="detail-value noWhiteSpace">00000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-lg-2">
                                                            <h3 class="sub-title">Billing Address</h3>
                                                            <div class="dashCard d-md-flex py-2 px-3 my-2 my-md-3">
                                                                <div class="w-100">
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">County/Region</label>
                                                                        <p class="detail-value noWhiteSpace">United States</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Full Name:</label>
                                                                        <p class="detail-value noWhiteSpace">Mark</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Street Address:</label>
                                                                        <p class="detail-value noWhiteSpace">Abc Road</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">City:</label>
                                                                        <p class="detail-value noWhiteSpace">Abc</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">State/Province/Region:</label>
                                                                        <p class="detail-value noWhiteSpace">Abc</p>
                                                                    </div>
                                                                </div>
                                                                <div class="w-100">
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Email Address:</label>
                                                                        <p class="detail-value noWhiteSpace">abc@xyz.com</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Country Code:</label>
                                                                        <p class="detail-value noWhiteSpace">000-000-0000</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Phone Number:</label>
                                                                        <p class="detail-value noWhiteSpace">12345678</p>
                                                                    </div>
                                                                    <div class="detailBox d-xl-flex align-items-baseline my-1">
                                                                        <label for="" class="detail-label noWhiteSpace">Zip Code:</label>
                                                                        <p class="detail-value noWhiteSpace">00000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="page-title-2 text-capitalize mb-2 mb-md-3 px-lg-2">Payment and Shipping</h2>
                                                        <hr class="m-0">
                                                    </div>
                                                    <div class="col-12 pt-2 pt-md-3">
                                                        <div class="px-lg-2">
                                                            <h3 class="sub-title">Payment Information</h3>
                                                            <div class="dashCard py-2 px-3 my-2 my-md-3">
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Payment Method:</label>
                                                                    <p class="detail-value">Credit Card</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Currency:</label>
                                                                    <p class="detail-value">USD</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-lg-2">
                                                            <h3 class="sub-title">Shipping Information</h3>
                                                            <div class="dashCard py-2 px-3 my-2 my-md-3">
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Shipping Method:</label>
                                                                    <p class="detail-value">Flat Rate- Flat Rate</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Shipping Price:</label>
                                                                    <p class="detail-value">$10.00</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="px-lg-2">
                                                            <div class="orderTable maain-tabble table-responsive">
                                                                <table class="table table-striped table-bordered zero-configuration">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>S No.</th>
                                                                            <th>Product Name</th>
                                                                            <th>Category</th>
                                                                            <th>Price</th>
                                                                            <th>Order Status</th>
                                                                            <th>Sub Total</th>
                                                                            <th>Grand Total</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>000</td>
                                                                            <td>ABC Book</td>
                                                                            <td>ABC</td>
                                                                            <td>$000</td>
                                                                            <td>Pending</td>
                                                                            <td>$0.00</td>
                                                                            <td>$0.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>000</td>
                                                                            <td>ABC Book</td>
                                                                            <td>ABC</td>
                                                                            <td>$000</td>
                                                                            <td>Pending</td>
                                                                            <td>$0.00</td>
                                                                            <td>$0.00</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="total-table py-5 px-1 ml-auto mt-2">
                                                                <table class="w-100 px-1">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="font-weight-light">Sub Total</td>
                                                                            <td>$200.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="font-weight-light">Shipping</td>
                                                                            <td>$200.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="font-weight-light">Discount</td>
                                                                            <td>$000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="font-weight-light">Grand Total</td>
                                                                            <td>$100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="font-weight-light">Total Paid</td>
                                                                            <td>$100</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row py-2 py-md-3">
                                                    <div class="col-12">
                                                        <h2 class="page-title-2 text-capitalize mb-2 mb-md-3 px-lg-2">Product Image</h2>
                                                        <hr class="m-0">
                                                    </div>
                                                    <div class="col-12 pt-2 pt-md-3">
                                                        <div class="px-lg-2">
                                                            <img src="images/clothes-shop.png" alt="" class="img-fluid detail-media">
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