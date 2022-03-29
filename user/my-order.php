<?php $title = "My Order";
include 'header-after-signin.php'; ?>

<div class="product-inner-pages mt-3 mt-lg-5">
  <section class="order-tabs">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="cart-page-title mb-2">My Orders</h2>
          <div class="custm-txt-b"></div>
          <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pending-tabs" data-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="false">Pending</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="in-process-tabs" data-toggle="tab" href="#process" role="tab" aria-controls="process" aria-selected="false">In-Process</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="in-delivered-tabs" data-toggle="tab" href="#delivered" role="tab" aria-controls="delivered" aria-selected="false">In-Delivered</a>
            </li>
            <li class="order-dropdown">
              <select>
                <option value="">Last 5 Orders</option>
                <option value="">Last 4 Orders</option>
                <option value="">Last 3 Orders</option>
              </select>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-5" id="all" role="tabpanel" aria-labelledby="all-tabs">
              <div class="order-inner-detail border-color-change mb-3">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#001</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="green">Delivered</td>
                                <td colspan="">Delivered On: mm/dd/yyyy</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="order-inner-detail border-color-change mb-3">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#002</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="yellow">Pending</td>
                                <td class="opacity-0">
                                  <p>Delivered On: mm/dd/yyyy</p>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="yellow">In-Process</td>
                                <td class="opacity-0">
                                  <p>Delivered On: mm/dd/yyyy</p>
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
              <div class="order-inner-detail border-color-change">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#003</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="green">Delivered</td>
                                <td>Delivered On: mm/dd/yyyy</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <div class="pagination-bar text-right w-100">
                    <ul class="ml-auto">
                      <li><button>Previous</button></li>
                      <li class="active">01</li>
                      <li>02</li>
                      <li>03</li>
                      <li>04</li>
                      <li><button>Next</button></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade py-5" id="pending" role="tabpanel" aria-labelledby="pending-tabs">
              <div class="order-inner-detail border-color-change mb-3">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#001</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="yellow">Pending</td>
                                <td class="opacity-0">
                                  <p>Delivered On: mm/dd/yyyy</p>
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
              <div class="order-inner-detail border-color-change mb-3">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#002</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="yellow">Pending</td>
                                <td class="opacity-0">
                                  <p>Delivered On: mm/dd/yyyy</p>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="yellow">Pending</td>
                                <td class="opacity-0">
                                  <p>Delivered On: mm/dd/yyyy</p>
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
              <div class="order-inner-detail border-color-change">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#003</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="yellow">Pending</td>
                                <td class="opacity-0">
                                  <p>Delivered On: mm/dd/yyyy</p>
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
              <div class="row mt-3">
                <div class="col-12">
                  <div class="pagination-bar text-right w-100">
                    <ul class="ml-auto">
                      <li><button>Previous</button></li>
                      <li class="active">01</li>
                      <li>02</li>
                      <li>03</li>
                      <li>04</li>
                      <li><button>Next</button></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade py-5" id="process" role="tabpanel" aria-labelledby="in-process-tabs">
              <div class="order-inner-detail border-color-change mb-3">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#001</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="yellow">Pending</td>
                                <td class="opacity-0">
                                  <p>Delivered On: mm/dd/yyyy</p>
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
              <div class="order-inner-detail border-color-change mb-3">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#002</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="yellow">Pending</td>
                                <td class="opacity-0">
                                  <p>Delivered On: mm/dd/yyyy</p>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="yellow">Pending</td>
                                <td class="opacity-0">
                                  <p>Delivered On: mm/dd/yyyy</p>
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
              <div class="order-inner-detail border-color-change">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#003</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="yellow">Pending</td>
                                <td class="opacity-0">
                                  <p>Delivered On: mm/dd/yyyy</p>
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
              <div class="row mt-3">
                <div class="col-12">
                  <div class="pagination-bar text-right w-100">
                    <ul class="ml-auto">
                      <li><button>Previous</button></li>
                      <li class="active">01</li>
                      <li>02</li>
                      <li>03</li>
                      <li>04</li>
                      <li><button>Next</button></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade py-5" id="delivered" role="tabpanel" aria-labelledby="in-delivered-tabs">
              <div class="order-inner-detail border-color-change mb-3">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#001</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="green">Delivered</td>
                                <td>
                                  Delivered On: mm/dd/yyyy
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
              <div class="order-inner-detail border-color-change mb-3">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#002</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="green">Delivered</td>
                                <td>
                                  Delivered On: mm/dd/yyyy
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="green">Delivered</td>
                                <td>
                                  Delivered On: mm/dd/yyyy
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
              <div class="order-inner-detail border-color-change">
                <div class="row align-items-sm-end">
                  <div class="col-10 col-sm-6">
                    <h2 class="order-num">Order <span class="">#003</span></h2>
                    <h6 class="order-desp">Placed on: mm/dd/yyyy 00:00:00</h6>
                  </div>
                  <div class="col-2 col-sm-6 text-right">
                    <button class="setting-btn"><i class="fal fa-cog"></i></button>
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
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Status</th>
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
                                <td>$ 00.00</td>
                                <td>
                                  <div class="qty-btns">
                                    <button class="plus-btn"></button>
                                    <input type="number" value="01" class="incre-decre-val">
                                    <button class="minus-btn"></button>
                                  </div>
                                </td>
                                <td class="green">Delivered</td>
                                <td>
                                  Delivered On: mm/dd/yyyy
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
              <div class="row mt-3">
                <div class="col-12">
                  <div class="pagination-bar text-right w-100">
                    <ul class="ml-auto">
                      <li><button>Previous</button></li>
                      <li class="active">01</li>
                      <li>02</li>
                      <li>03</li>
                      <li>04</li>
                      <li><button>Next</button></li>
                    </ul>
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

<?php include 'footer.php'; ?>