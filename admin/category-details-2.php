<?php
$pg = 'categoryManagement';
$title = "Category Datails";
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
                                                <a href="category-management.php" class="backLink mr-2"><i class="fas fa-chevron-left"></i></a>
                                                <h1 class="page-title text-capitalize">Category Details</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="dashCard py-4 px-3">
                                                <div class="row">
                                                    <div class="col-xl-9 offset-lg-1 order-1 order-xl-0">
                                                        <form action="">
                                                            <div class="userDetails">
                                                                <div class="detailBox d-lg-flex">
                                                                    <label for="" class="detail-label">First Name:</label>
                                                                    <p class="detail-value">Abc Category</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex my-1">
                                                                    <label for="" class="detail-label">No of Products:</label>
                                                                    <p class="detail-value">000</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex my-1">
                                                                    <label for="" class="detail-label">Date:</label>
                                                                    <p class="detail-value">mm/dd/yyyy</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex my-1">
                                                                    <label for="" class="detail-label">Sub-Categories:</label>
                                                                    <p class="detail-value">XYZ, DEF, ZYA</p>
                                                                </div>
                                                                <div class="detailBox d-lg-flex my-1">
                                                                    <label for="" class="detail-label flex-shrink-0c">Image:</label>
                                                                    <div class="w-100">
                                                                        <img src="images/clothes-shop.png" alt="" class="img-fluid detail-media">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-xl-2 text-right order-0 order-xl-1">
                                                        <p class="statusTag">Status: <span>In-Active</span></p>
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