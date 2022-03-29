<?php
$pg = 'dashboard';
$title = "Dashboard";
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
                    <div class="col-lg-6">
                      <h1 class="page-title text-capitalize">Dashboard</h1>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-xl-4 col-md-6 col-12 w-100 mt-1">
                      <div class="dashCard d-flex align-items-center justify-content-between p-2">
                        <div class="dashCard-total">
                          <h5 class="dashCard-text">Total Users</h5>
                          <h6 class="dashCard-totalNumber maven-pro">100</h6>
                        </div>
                        <div class="dashCard-image">
                          <img src="images/dashIcon1.png" alt="" class="img-fluid ml-1">
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 w-100 mt-1">
                      <div class="dashCard d-flex align-items-center justify-content-between p-2">
                        <div class="dashCard-total">
                          <h5 class="dashCard-text">Total Products</h5>
                          <h6 class="dashCard-totalNumber maven-pro">100</h6>
                        </div>
                        <div class="dashCard-image">
                          <img src="images/dashIcon2.png" alt="" class="img-fluid ml-1">
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 w-100 mt-1">
                      <div class="dashCard d-flex align-items-center justify-content-between p-2">
                        <div class="dashCard-total">
                          <h5 class="dashCard-text">No. of Orders</h5>
                          <h6 class="dashCard-totalNumber maven-pro">100</h6>
                        </div>
                        <div class="dashCard-image">
                          <img src="images/dashIcon3.png" alt="" class="img-fluid ml-1">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-xl-6">
                      <div class="dashCard mb-1 p-2">
                        <div class="d-md-flex align-items-baseline justify-content-between">
                          <h3 class="graph-title ">Users</h3>
                          <div class="form-field">
                            <select class="dashInput box-shadow" name="" id="" required="">
                              <option value="" selected hidden disabled>Select Year</option>
                              <option value="">2020</option>
                              <option value="">2019</option>
                              <option value="">2018</option>
                            </select>
                          </div>
                        </div>
                        <div class="graphBox">
                          <div class="graph">
                            <img src="images/graph.png" alt="" class="img-fluid w-100">
                          </div>
                          <div class="graphContent">
                            <h4 class="graphBottom">Months</h4>
                            <h4 class="graphLeft">Number</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="dashCard mb-1 p-2">
                        <div class="d-md-flex align-items-baseline justify-content-between">
                          <h3 class="graph-title ">Sales</h3>
                          <div class="form-field">
                            <select class="dashInput box-shadow" name="" id="" required="">
                              <option value="" selected hidden disabled>Select Year</option>
                              <option value="">2020</option>
                              <option value="">2019</option>
                              <option value="">2018</option>
                            </select>
                          </div>
                        </div>
                        <div class="graphBox">
                          <div class="graph">
                            <img src="images/graph.png" alt="" class="img-fluid w-100">
                          </div>
                          <div class="graphContent">
                            <h4 class="graphBottom">Months</h4>
                            <h4 class="graphLeft">Number</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <div class="dashCard py-3 px-3">
                        <div class="maain-tabble table-responsive dashboardTable">
                          <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                              <tr>
                                <th>S No.</th>
                                <th>Full Name</th>
                                <th>Date</th>
                                <th>Email</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>01</td>
                                <td>Mark Carson</td>
                                <td>03/02/2020</td>
                                <td>asd@email.com</td>
                                <td class="statusActive">Active</td>
                              </tr>
                              <tr>
                                <td>02</td>
                                <td>Mark Carson</td>
                                <td>03/02/2020</td>
                                <td>asd@email.com</td>
                                <td class="statusInactive">Inactive</td>
                              </tr>
                              <tr>
                                <td>03</td>
                                <td>Mark Carson</td>
                                <td>03/02/2020</td>
                                <td>asd@email.com</td>
                                <td class="statusActive">Active</td>
                              </tr>
                              <tr>
                                <td>04</td>
                                <td>Mark Carson</td>
                                <td>03/02/2020</td>
                                <td>asd@email.com</td>
                                <td class="statusInactive">Inactive</td>
                              </tr>
                              <tr>
                                <td>05</td>
                                <td>Mark Carson</td>
                                <td>03/02/2020</td>
                                <td>asd@email.com</td>
                                <td class="statusActive">Active</td>
                              </tr>
                              <tr>
                                <td>06</td>
                                <td>Mark Carson</td>
                                <td>03/02/2020</td>
                                <td>asd@email.com</td>
                                <td class="statusInactive">Inactive</td>
                              </tr>
                            </tbody>
                          </table>
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