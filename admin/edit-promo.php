<?php
$pg = 'promoCodes';
$title = "Edit Promo Code";
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
                                            <h1 class="page-title text-capitalize">Promo Codes</h1>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 px-3">
                                                <div class="row">
                                                    <div class="col-lg-9 col-xl-7 offset-lg-1">
                                                        <form action="">
                                                            <div class="userDetails">
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg">Title<span class="text-danger">*</span>:</label>
                                                                    <input type="text" name="" id="" class="site-input-c pl-2" value="ABC Promo" placeholder="Enter Title">
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg">Starting Date<span class="text-danger">*</span>:</label>
                                                                    <input type="date" name="" id="" value="2021-04-12" class="site-input-c maxw-250">
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg">Ending Date<span class="text-danger">*</span>:</label>
                                                                    <input type="date" name="" id="" value="2021-04-12" class="site-input-c maxw-250">
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg">Promo Code<span class="text-danger">*</span>:</label>
                                                                    <input type="text" name="" id="" class="site-input-c pl-2" value="ABs-221" placeholder="Enter Promo Code">
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg">Type<span class="text-danger">*</span>:</label>
                                                                    <select name="" id="" form="" class="site-select-c site-input-c pl-2 amountType">
                                                                        <option value="select" selected hidden disabled>Select</option>
                                                                        <option value="percentage">Percentage</option>
                                                                        <option value="fixedAmount">Fixed Amount</option>
                                                                    </select>
                                                                </div>
                                                                <div class="percentageInput">
                                                                    <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                        <label for="" class="detail-label detail-label-lg">Percentage<span class="text-danger">*</span>:</label>
                                                                        <input type="number" name="" id="" class="site-input-c pl-2" value="10%" placeholder="Enter Percentage">
                                                                    </div>
                                                                </div>
                                                                <div class="amountInput">
                                                                    <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                        <label for="" class="detail-label detail-label-lg">Amount<span class="text-danger">*</span>:</label>
                                                                        <input type="text" name="" id="" class="site-input-c pl-2" value="123" placeholder="Enter Amount">
                                                                    </div>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg">Status<span class="text-danger">*</span>:</label>
                                                                    <select name="" id="" form="" class="site-select-c site-input-c pl-2">
                                                                        <option value="select" selected hidden disabled>Select</option>
                                                                        <option value="active">Active</option>
                                                                        <option value="inactive">In Active</option>
                                                                    </select>
                                                                </div>

                                                                <div class="usageLimit mt-3">
                                                                    <h2 class="sub-title">Usage Limit</h2>
                                                                    <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                        <label for="" class="detail-label detail-label-lg">Usage Limit Per Coupon<span class="text-danger">*</span>:</label>
                                                                        <input type="number" name="" id="" class="site-input-c pl-2" value="141" placeholder="Enter Usage Limit Per Coupon">
                                                                    </div>
                                                                    <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                        <label for="" class="detail-label detail-label-lg">Usage Limit Per Customer<span class="text-danger">*</span>:</label>
                                                                        <input type="number" name="" id="" class="site-input-c pl-2" value="123" placeholder="Enter Usage Limit Per Customer">
                                                                    </div>
                                                                    <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                        <label for="" class="detail-label detail-label-lg"></label>
                                                                        <button type="submit" class="site-btn px-5">Update</button>
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
