<?php $title = "Order Detail";
include 'header-after-signin.php'; ?>



<div class="product-inner-pages py-5">
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="cart-page-title mb-2">Order Details</h2>
          <div class="custm-txt-b"></div>
          <div class="process-tabs">
            <ul>
              <li class="active">
                <span></span>
                Pending
              </li>
              <li class="active">
                <span></span>
                In-Process
              </li>
              <li class="active">
                <span></span>
                delivered
              </li>
            </ul>
          </div>
          <div class="order-inner-detail mb-3">
            <div class="row align-items-sm-end">
              <div class="col-sm-8">
                <h2 class="order-num">Order <span class="">#001</span></h2>
                <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
              </div>
              <div class="col-sm-4 mt-3 mt-sm-0 text-sm-right">
                <h6 class="total-value">Total: <span>$ 000</span></h6>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive custom-table">
                      <table>
                        <thead>
                          <tr>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Status</th>
                            <th>Cost</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="cart-row">
                            <td>
                              <div class="abc-prdct">
                                <img src="assets/img/prdct-img-1.png" alt="">
                                <div class="txt">
                                  <h4>ABC Product</h4>
                                  <h5>By: ABC Shop</h5>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="qty-btns">
                                <button class="plus-btn"></button>
                                <input type="number" value="01" class="incre-decre-val">
                                <button class="minus-btn"></button>
                              </div>
                            </td>
                            <td class="green">Delivered</td>
                            <td>$ 00.00</td>
                            <td><button class="review-btn" data-target="#rating-review" data-toggle="modal">Write A Review</button></td>
                            <td>
                              <div class="dropdown ">
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="far fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu report" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#report-product">Report</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="cart-row">
                            <td>
                              <div class="abc-prdct">
                                <img src="assets/img/prdct-img-1.png" alt="">
                                <div class="txt">
                                  <h4>ABC Product</h4>
                                  <h5>By: ABC Shop</h5>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="qty-btns">
                                <button class="plus-btn"></button>
                                <input type="number" value="01" class="incre-decre-val">
                                <button class="minus-btn"></button>
                              </div>
                            </td>
                            <td class="green">Delivered</td>
                            <td>$ 00.00</td>
                            <td><button class="review-btn" data-target="#rating-review" data-toggle="modal">Write A Review</button></td>
                            <td>
                              <div class="dropdown ">
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="far fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu report" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#report-product">Report</a>
                                </div>
                              </div>
                            </td>
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
        <div class="col-md-6 col-lg-4">
          <div class="shipping-address">
            <h5>Shipping Address: </h5>
            <div class="shipping-billing-details">
              <div class="row py-4 px-3">
                <div class="col-sm-6">
                  <div class="row">
                    <div class="col-12 mb-2">
                      <p>United States</p>
                    </div>
                    <div class="col-12 mb-2">
                      <p>Mark Carson</p>
                    </div>
                    <div class="col-12 mb-2">
                      <p>ABC Road</p>
                    </div>
                    <div class="col-12 mb-2">
                      <p>ABC City</p>
                    </div>
                    <div class="col-12 mb-2">
                      <p>ABC Region</p>
                    </div>

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="row">
                    <div class="col-12 mb-2">
                      <p>Abc@Xyz.Com</p>
                    </div>
                    <div class="col-12 mb-2">
                      <p>000-00-0000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mt-4 mt-md-0">
          <div class="shipping-address">
            <h5>Billing Address: </h5>
            <div class="shipping-billing-details">
              <div class="row py-4 px-3">
                <div class="col-sm-6">
                  <div class="row">
                    <div class="col-12 mb-2">
                      <p>United States</p>
                    </div>
                    <div class="col-12 mb-2">
                      <p>Mark Carson</p>
                    </div>
                    <div class="col-12 mb-2">
                      <p>ABC Road</p>
                    </div>
                    <div class="col-12 mb-2">
                      <p>ABC City</p>
                    </div>
                    <div class="col-12 mb-2">
                      <p>ABC Region</p>
                    </div>

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="row">
                    <div class="col-12 mb-2">
                      <p>Abc@Xyz.Com</p>
                    </div>
                    <div class="col-12 mb-2">
                      <p>000-00-0000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
          <div class="shipping-address">
            <h5>Total Summary</h5>
            <div class="shipping-billing-details py-4">
              <div class="row align-items-center px-3">
                <div class="col-sm-6 mb-2">
                  <p class="t-t">Sub-Total</p>
                </div>
                <div class="col-sm-6 mb-2 text-sm-right">
                  <h6>$ 000</h6>
                </div>
              </div>
              <div class="row align-items-center px-3">
                <div class="col-sm-6 mb-2">
                  <p class="t-t">Discount</p>
                </div>
                <div class="col-sm-6 mb-2 text-sm-right">
                  <h6>$ 000</h6>
                </div>
              </div>
              <div class="row align-items-center px-3">
                <div class="col-sm-6 mb-2">
                  <p class="t-t">Shipping Fees</p>
                </div>
                <div class="col-sm-6 mb-2 text-sm-right">
                  <h6>$ 000</h6>
                </div>
              </div>
            </div>
            <div class="row align-items-center shipping-total mt-3 px-3">
              <div class="col-sm-6 mb-2">
                <h6>Shipping Fees</h6>
              </div>
              <div class="col-sm-6 mb-2 text-sm-right">
                <h6>$ 000</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<!-- Modal -->
<div class="modal fade" id="report-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-5">
        <img src="assets/img/warning.png" class="warning-img" alt="">
        <h3 class="mt-3 mb-4">Are You Sure You Want To<br>Report ABC Product?</h3>
        <div class="modal-btn">
          <a href="#_" class="brown-btn" data-dismiss="modal" aria-label="Close">No</a>
          <a href="#_" class="yellow-btn" data-dismiss="modal" data-toggle="modal" data-target="#report-reason">Yes</a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="report-reason" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-3 px-4">
        <h3 class="mt-3 mb-2 text-left">Reason For Reporting</h3>
        <hr>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="reason1" name="fav_language" value="HTML">
          <label for="reason1">Reason 01</label>
        </div>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="reason2" name="fav_language" value="HTML">
          <label for="reason2">Reason 02</label>
        </div>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="reason3" name="fav_language" value="HTML">
          <label for="reason3">Reason 03</label>
        </div>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="reason4" name="fav_language" value="HTML">
          <label for="reason4">Reason 04</label>
        </div>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="reason5" name="fav_language" value="HTML">
          <label for="reason5">Reason 05</label>
        </div>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="other" name="fav_language" value="HTML">
          <label for="other">Other</label>
        </div>
        <div class="report-reason-txtarea">
          <textarea rows="07" placeholder="Enter reporting reason"></textarea>
        </div>
        <div class="modal-btn mt-3">
          <a href="#_" class="yellow-btn" data-dismiss="modal" aria-label="Close">Submit</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="rating-review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body pt-3 pb-4 px-4">
        <h3 class="mt-3 mb-2 text-left">Rating & Review</h3>
        <hr>
        <div class="row rating-review-detail mb-3">
          <div class="col-sm-4">
            <h5>Order Id:</h5>
          </div>
          <div class="col-sm-8">
            <p>001</p>
          </div>
        </div>
        <div class="row rating-review-detail mb-4">
          <div class="col-sm-4">
            <h5>Product Name:</h5>
          </div>
          <div class="col-sm-8">
            <p>ABC Product</p>
          </div>
        </div>
        <div class="row rating-review-detail mb-4">
          <div class="col-sm-5">
            <h5>Rating:</h5>
          </div>
          <div class="col-md-12">
            <div class="rate">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text">5 stars</label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text">4 stars</label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text">3 stars</label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text">2 stars</label>
              <input type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text">1 star</label>
            </div>
          </div>
        </div>
        <div class="row rating-review-detail mb-3">
          <div class="col-sm-5">
            <h5>Review:</h5>
          </div>
          <div class="col-md-12 mt-3">
            <div class="report-reason-txtarea">
              <textarea rows="07"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-btn mt-3">
          <a href="order-detail-delivered-after-review.php" class="yellow-btn">Submit</a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>