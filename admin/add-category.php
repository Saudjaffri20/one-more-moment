<?php
$pg = 'categoryManagement';
$title = "Add New Category";
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
                                                <a href="category-management.php" class="backLink mr-2"><i class="fas fa-chevron-left"></i></a>
                                                <h1 class="page-title text-capitalize">Add New Category</h1>
                                            </div>
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
                                                                    <label for="f-name" class="detail-label">Category Name<span class="text-danger">*</span>:</label>
                                                                    <input type="text" name="" id="f-name" class="site-input-c pl-2" placeholder="Enter First Name">
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="f-name" class="detail-label">Sub-Categories<span class="text-danger">*</span>:</label>
                                                                    <div class="dlt-input-p w-100">
                                                                        <div class="dlt-input w-100 position-relative d-inline-block">
                                                                            <input type="text" name="" id="f-name" class="site-input-c pl-2" placeholder="XYZ">
                                                                            <button class="dlt-btn">
                                                                                <i class="fas fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                        <button class="clone-btn mr-2 mt-2">
                                                                            <i class="fas fa-plus-circle"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label">Status<span class="text-danger">*</span>:</label>
                                                                    <select name="" id="" form="" class="site-select-c site-input-c pl-2">
                                                                        <option value="select" selected hidden disabled>Select</option>
                                                                        <option value="active">Active</option>
                                                                        <option value="inactive">Inactive</option>
                                                                    </select>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label">Image<span class="text-danger">*</span>:</label>
                                                                    <div class="detail-image-input d-lg-flex align-items-end">
                                                                        <div class="media-image">
                                                                            <div class="media-image-inner">
                                                                                <img src="images/img-detail.png" alt="" class="uploadedImage uploadedImageSingle">
                                                                                <button>
                                                                                    <i class="fas fa-plus-circle"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="detail-action-btns d-flex mt-1">
                                                                            <button type="button" class="dlt-btn ml-2">
                                                                                <i class="fas fa-trash"></i>
                                                                            </button>
                                                                            <div class="upload-btn ml-1 position-relative">
                                                                                <label for="upload-c-img">
                                                                                    <i class="fas fa-upload"></i>
                                                                                </label>
                                                                                <input type="file" id="upload-c-img" accept="images/*" class="d-none">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                    <label for="" class="detail-label"></label>
                                                                    <a class="site-btn px-5" data-toggle="modal" data-target="#addedCategory">Add</a>
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