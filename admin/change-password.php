<?php
$pg = '';
$title = "Change Password";
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
                                                <a href="dashboard.php" class="backLink mr-2"><i class="fas fa-chevron-left"></i></a>
                                                <h1 class="page-title text-capitalize">Change Password</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 py-lg-5 px-3">
                                                <div class="row">
                                                    <div class="col-lg-10 col-xl-8 offset-lg-1">
                                                        <form action="">
                                                            <div class="userDetails">
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg">Existing Password<span class="text-danger">*</span>:</label>
                                                                    <div class="position-relative w-100">
                                                                        <input type="password" class="site-input-c right-icon pl-2" placeholder="Enter Existing Password" name="" id="">
                                                                        <i class="fa fa-eye-slash confirm-icon right-icon" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg">New Password<span class="text-danger">*</span>:</label>
                                                                    <div class="position-relative w-100">
                                                                        <input type="password" class="site-input-c right-icon pl-2" placeholder="Enter New Password" name="" id="">
                                                                        <i class="fa fa-eye-slash confirm-icon right-icon" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg">Confirm Password<span class="text-danger">*</span>:</label>
                                                                    <div class="position-relative w-100">
                                                                        <input type="password" class="site-input-c right-icon pl-2" placeholder="Confirm Password" name="" id="">
                                                                        <i class="fa fa-eye-slash confirm-icon right-icon" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label detail-label-lg"></label>
                                                                    <div class="w-100">
                                                                        <a class="site-btn px-5" data-toggle="modal" data-target="#changedPassword">Update</a>
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