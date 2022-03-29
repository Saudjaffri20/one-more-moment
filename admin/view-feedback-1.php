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
                                                    <div class="col-lg-11 col-xl-9 offset-lg-1">
                                                        <div class="userDetails">
                                                            <div class="detailBox d-lg-flex">
                                                                <label for="" class="detail-label detail-label-lg">Full Name:</label>
                                                                <p class="detail-value">Mark Carson</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Type:</label>
                                                                <p class="detail-value">Contact Us Form</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Email Address:</label>
                                                                <p class="detail-value">testing@test.com</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Date Submitted:</label>
                                                                <p class="detail-value">mm/dd/yyyy</p>
                                                            </div>
                                                            <div class="detailBox d-lg-flex my-1">
                                                                <label for="" class="detail-label detail-label-lg">Description:</label>
                                                                <p class="detail-value">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
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