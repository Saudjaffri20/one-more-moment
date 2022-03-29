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
              <li>
                <span></span>
                In-Process
              </li>
              <li>
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
                            <td class="yellow">Pending</td>
                            <td>$ 00.00</td>
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
                            <td class="yellow">Pending</td>
                            <td>$ 00.00</td>
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


<?php include 'footer.php'; ?>