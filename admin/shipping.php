<?php
$pg = 'shipping';
$title = "Shipping";
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
                                            <h1 class="page-title text-capitalize">Shipping</h1>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 py-lg-5 px-3">
                                                <div class="row">
                                                    <div class="col-lg-8 col-xl-7 offset-lg-1">
                                                        <form action="">
                                                            <div class="userDetails">
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg">Shipping Fees:</label>
                                                                    <p class="detail-value shippingFeesValue">$<span>000</span></p>
                                                                    <input type="number" name="" idip1"" class="site-input-c pl-2 shipping-input" placeholder="Enter Shipping Fees">
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg"></label>
                                                                    <div class="w-100">
                                                                        <button type="button" class="site-btn px-5 shippingFeesEdit" value="edit">Edit</button>
                                                                        <!-- <button type="button" class="site-btn px-5 shippingFeesUpdate">Update</button> -->
                                                                    </div>
                                                                </div>
                                                            </div>
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
            </section>
        </div>
    </div>
</div>

<?php include('footer.php') ?>


<script>


</script>