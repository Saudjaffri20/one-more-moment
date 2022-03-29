<?php
$pg = 'promoCodes';
$title = "View Promo Code";
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
                                            <h1 class="page-title text-capitalize">Promo Codes</h1>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 px-3">
                                                <div class="row">
                                                    <div class="col-lg-9 col-xl-7 offset-lg-1">
                                                        <div class="userDetails">
                                                            <div class="detailBox d-lg-flex">
                                                                <label for="" class="detail-label detail-label-lg">Title:</label>
                                                                <p class="detail-value">XYZ</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Starting Date:</label>
                                                                <p class="detail-value">mm/dd/yyyy</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Ending Date:</label>
                                                                <p class="detail-value">mm/dd/yyyy</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex">
                                                                <label for="" class="detail-label detail-label-lg">Subject:</label>
                                                                <p class="detail-value">ABC Promo Code</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Date Created:</label>
                                                                <p class="detail-value">mm/dd/yyyy</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Type:</label>
                                                                <p class="detail-value">Amount</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Amount:</label>
                                                                <p class="detail-value">10</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1 usageLimit">
                                                                <label for="" class="detail-label detail-label-lg">Usage Limit Per Coupon:</label>
                                                                <p class="detail-value">1</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1 usageLimit">
                                                                <label for="" class="detail-label detail-label-lg">Usage Limit Per Customer:</label>
                                                                <p class="detail-value">1</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Status:</label>
                                                                <p class="detail-value">Active</p>
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