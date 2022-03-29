<?php
$pg = '';
$title = "My Profile";
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
                                            <h1 class="page-title text-capitalize">My Profile</h1>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 py-lg-5 px-3">
                                                <div class="row">
                                                    <div class="col-lg-4 col-xl-3">
                                                        <div class="userImage mr-sm-5">
                                                            <div class="userImageInner mx-auto">
                                                                <img src="images/company-img.png" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-xl-9 mt-lg-5 pt-lg-5">
                                                        <div class="userDetails">
                                                            <div class="detailBox d-lg-flex">
                                                                <label for="" class="detail-label detail-label-lg">First Name:</label>
                                                                <p class="detail-value">Mark</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Last Name:</label>
                                                                <p class="detail-value">Carson</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Email Address:</label>
                                                                <p class="detail-value">testing@test.com</p>
                                                            </div>
                                                            <div class="detailBox my-1">
                                                                <div class="w-100">
                                                                    <a class="site-btn px-5 mr-1 mb-1" href="edit-profile.php">Edit</a>
                                                                    <a class="site-btn px-5 mr-1 mb-1" href="change-password.php">Change Password</a>
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