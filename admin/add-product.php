<?php
$pg = 'productManagement';
$title = "Add Product";
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
                                            <h1 class="page-title text-capitalize">Product Management</h1>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 px-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="back-title mb-2">
                                                            <a href="product-management.php" class="backLink mr-2"><i class="fas fa-chevron-left"></i></a>
                                                            <h2 class="page-title-2 text-capitalize">Add</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <form action="">
                                                            <div class="userDetails">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="detailBox my-2">
                                                                            <label for="b-image" class="detail-label d-block">Base Image</label>
                                                                            <div class="media-image">
                                                                                <div class="media-image-inner mt-1">
                                                                                    <img src="images/img-detail.png" alt="" class="uploadedImage uploadedImageSingle">
                                                                                    <button>
                                                                                        <i class="fas fa-plus-circle"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="detailBox my-2">
                                                                            <label for="b-image" class="detail-label d-block">Secondary Image</label>
                                                                            <div class="media-image d-flex flex-wrap flex-xl-nowrap">
                                                                                <div class="media-image-inner mt-1 mr-1">
                                                                                    <img src="images/img-detail.png" alt="" class="uploadedImage uploadedImageMultiple">
                                                                                    <button>
                                                                                        <i class="fas fa-plus-circle"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="media-image-inner mt-1 mr-1">
                                                                                    <img src="images/img-detail.png" alt="" class="uploadedImage uploadedImageMultiple">
                                                                                    <button>
                                                                                        <i class="fas fa-plus-circle"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="media-image-inner mt-1 mr-1">
                                                                                    <img src="images/img-detail.png" alt="" class="uploadedImage uploadedImageMultiple">
                                                                                    <button>
                                                                                        <i class="fas fa-plus-circle"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="media-image-inner mt-1 mr-1">
                                                                                    <img src="images/img-detail.png" alt="" class="uploadedImage uploadedImageMultiple">
                                                                                    <button>
                                                                                        <i class="fas fa-plus-circle"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="media-image-inner mt-1 mr-1">
                                                                                    <img src="images/img-detail.png" alt="" class="uploadedImage uploadedImageMultiple">
                                                                                    <button>
                                                                                        <i class="fas fa-plus-circle"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-10">
                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                            <label for="" class="detail-label">Category<span class="text-danger">*</span>:</label>
                                                                            <select name="" id="" form="" class="site-select-c site-input-c pl-2">
                                                                                <option value="select" selected hidden disabled>Select</option>
                                                                                <option value="a">Category A</option>
                                                                                <option value="b">Category B</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                            <label for="" class="detail-label">Sub Category<span class="text-danger">*</span>:</label>
                                                                            <select name="" id="" form="" class="site-select-c site-input-c pl-2">
                                                                                <option value="select" selected hidden disabled>Select</option>
                                                                                <option value="a">Category A</option>
                                                                                <option value="b">Category B</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                            <label for="" class="detail-label">Specifications<span class="text-danger">*</span>:</label>
                                                                            <textarea name="" id="" cols="30" rows="4" class="site-input-c p-2" placeholder="Enter Specification"></textarea>
                                                                        </div>
                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                            <label for="" class="detail-label">Product Title<span class="text-danger">*</span>:</label>
                                                                            <input type="text" name="" id="" class="site-input-c pl-2" placeholder="Enter Product Title Here">
                                                                        </div>
                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                            <label for="" class="detail-label">Product Price<span class="text-danger">*</span>:</label>
                                                                            <input type="number" name="" id="" class="site-input-c pl-2" placeholder="e.g 123">
                                                                        </div>
                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                            <label for="" class="detail-label">Stock Availability<span class="text-danger">*</span>:</label>
                                                                            <select name="" id="" form="" class="site-select-c site-input-c pl-2">
                                                                                <option value="select" selected hidden disabled>Select</option>
                                                                                <option value="a">In Stock</option>
                                                                                <option value="b">Out of Stock</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                            <label for="" class="detail-label">Status<span class="text-danger">*</span>:</label>
                                                                            <select name="" id="" form="" class="site-select-c site-input-c pl-2">
                                                                                <option value="select" selected hidden disabled>Select</option>
                                                                                <option value="a">Active</option>
                                                                                <option value="b">In Acive</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                            <label for="" class="detail-label">In-Stock<span class="text-danger">*</span>:</label>
                                                                            <input type="number" name="" id="" class="site-input-c pl-2" placeholder="Enter Quantity Available in Stock">
                                                                        </div>
                                                                        <div class="detailBox d-xl-flex align-items-baseline my-2">
                                                                            <label for="" class="detail-label">Variation<span class="text-danger">*</span>:</label>
                                                                            <div class="dashCard vDetail w-100 py-1 px-2">
                                                                                <div class="v-row">
                                                                                    <div class="d-xl-flex">
                                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2 mr-2 w-100">
                                                                                            <label for="" class="detail-label">Name<span class="text-danger">*</span>:</label>
                                                                                            <input type="text" name="" id="" class="site-input-c pl-2" placeholder="Enter Name">
                                                                                        </div>
                                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2 w-100">
                                                                                            <label for="" class="detail-label">Type<span class="text-danger">*</span>:</label>
                                                                                            <select name="" id="" form="" class="site-select-c site-input-c pl-2">
                                                                                                <option value="select" selected hidden disabled>Select</option>
                                                                                                <option value="a">Drop down</option>
                                                                                                <option value="b">Multiple Select</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                                        <label for="" class="detail-label">Value<span class="text-danger">*</span>:</label>
                                                                                        <div class="w-100">
                                                                                            <div class="position-relative my-1">
                                                                                                <input type="number" name="" id="" class="site-input-c pl-2" placeholder="Enter Value">
                                                                                                <a type="button" class="cloneField"><i class="fas fa-plus-circle"></i></a>
                                                                                            </div>
                                                                                            <div class="position-relative my-1">
                                                                                                <input type="number" name="" id="" class="site-input-c pl-2" placeholder="Enter Value">
                                                                                                <a type="button" class="removeField"><i class="fas fa-trash"></i></a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                                        <label for="" class="detail-label"></label>
                                                                                        <div class="w-100">
                                                                                            <a class="site-btn px-2 px-lg-4 mr-1 mb-1">Add New Row</a>
                                                                                            <a class="site-btn px-2 px-lg-4 mb-1">Add New Option</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="detailBox d-lg-flex align-items-baseline my-2">
                                                                            <label for="" class="detail-label"></label>
                                                                            <div class="w-100">
                                                                                <a class="site-btn px-5" data-toggle="modal" data-target="#addedProduct">Add</a>
                                                                            </div>
                                                                        </div>
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