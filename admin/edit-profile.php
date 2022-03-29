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
                                                                <div class="editCam">
                                                                    <label for="uploadProfileImage"><i class="fas fa-camera accent-color"></i></label>
                                                                    <input type="file" name="" id="uploadProfileImage" class="d-none">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-xl-9 mt-2 mt-lg-5 pt-lg-5">
                                                        <div class="userDetails">
                                                            <div class="detailBox d-lg-flex">
                                                                <label for="" class="detail-label">First Name<span class="text-danger">*</span>:</label>
                                                                <input type="text" name="" id="" class="site-input-c pl-2 max-w600" value="Mark" placeholder="Enter First Name">
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-2">
                                                                <label for="" class="detail-label">Last Name<span class="text-danger">*</span>:</label>
                                                                <input type="text" name="" id="" class="site-input-c pl-2 max-w600" value="Carson" placeholder="Enter Last Name">
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-2">
                                                                <label for="" class="detail-label">Email Address:</label>
                                                                <p class="detail-value">testing@test.com</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-2">
                                                                <label for="" class="detail-label"></label>
                                                                <div class="w-100">
                                                                    <a class="site-btn px-4 mr-1 mb-1" data-toggle="modal" data-target="#updatedProfile">Update</a>
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