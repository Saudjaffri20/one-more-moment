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
                                    <div class="row mb-2 mb-md-3">
                                        <div class="col-12">
                                            <div class="back-title">
                                                <a href="feedbacks.php" class="backLink mr-2"><i class="fas fa-chevron-left"></i></a>
                                                <h1 class="page-title text-capitalize">Feedback Details</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 py-lg-5 px-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="px-lg-2">
                                                            <h3 class="sub-title">Reported By</h3>
                                                            <div class="py-1 py-lg-2 px-2 px-lg-3 my-1">
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
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Reporting Reason:</label>
                                                                    <p class="detail-value">ABC Reason</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="px-lg-2">
                                                            <h3 class="sub-title">Post Details</h3>
                                                            <div class="py-1 py-lg-2 px-2 px-lg-3 my-1">
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Posted By:</label>
                                                                    <p class="detail-value">Daniel Jacob</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Date Posted:</label>
                                                                    <p class="detail-value">mm/dd/yyyy</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-1">
                                                                    <label for="" class="detail-label">Link:</label>
                                                                    <p class="detail-value"><a href="#_" class="accent-color">www.xyz.com</a></p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label"></label>
                                                                    <div class="w-100">
                                                                        <a class="site-btn site-btn-2 px-5 mr-1 mb-1">Ignore</a>
                                                                        <a class="site-btn px-5 mr-1 mb-1" data-toggle="modal" data-target="#removeFeedback">Remove</a>
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php include('footer.php') ?>