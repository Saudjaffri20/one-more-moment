<?php $title = "Pay With";
include 'header-after-signin.php'; ?>

<div class="checkout-page mt-3 mt-lg-5">
  <section class="shopping-cart">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="cart-page-title mb-2">Pay With</h2>
          <div class="custm-txt-b mb-3"></div>
          <p class="shopping-info-txt"><i class="fas fa-info-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo </p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-lg-9">
          <div class="row checkout-main">
            <div class="col-12">
              <h3 class="checkout-inner-txt mb-3 mb-md-5 pl-4">Ship To</h3>
              <div class="card">
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3 order-2 order-md-0">
                    <label for="" class="title pl-md-4 mb-2 mb-md-0">Full name:</label>
                  </div>
                  <div class="col-md-4 col-lg-3 order-1 order-md-1">
                    <p class="desp">Mark Carson</p>
                  </div>
                  <div class="col-md-4 col-lg-6 text-right order-0 order-md-2">
                    <a href="#_" class="change-link pr-4">Change</a>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3">
                    <label for="" class="title pl-md-4 mb-2 mb-md-0">Street Address:</label>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p class="desp">ABC Road</p>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3">
                    <label for="" class="title pl-md-4 mb-2 mb-md-0">Country:</label>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p class="desp">United States</p>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3">
                    <label for="" class="title pl-md-4 mb-2 mb-md-0">Email Address:</label>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p class="desp">abc@xyz.com</p>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3">
                    <label for="" class="title pl-md-4 mb-2 mb-md-0">Phone Number:</label>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p class="desp">(000-00-0000)</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mt-5">
              <h3 class="checkout-inner-txt mb-3 mb-md-5 pl-4">Billing Address</h3>
              <div class="card">
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3 order-2 order-md-0">
                    <label for="" class="title pl-md-4 mb-2 mb-md-0">Full name:</label>
                  </div>
                  <div class="col-md-4 col-lg-3 order-1 order-md-1">
                    <p class="desp">Mark Carson</p>
                  </div>
                  <div class="col-md-4 col-lg-6 text-right order-0 order-md-2">
                    <a href="#_" class="change-link pr-4">Change</a>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3">
                    <label for="" class="title pl-md-4 mb-2 mb-md-0">Street Address:</label>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p class="desp">ABC Road</p>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3">
                    <label for="" class="title pl-md-4 mb-2 mb-md-0">Country:</label>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p class="desp">United States</p>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3">
                    <label for="" class="title pl-md-4 mb-2 mb-md-0">Email Address:</label>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p class="desp">abc@xyz.com</p>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-4 col-lg-3">
                    <label for="" class="title pl-md-4 mb-2 mb-md-0">Phone Number:</label>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p class="desp">(000-00-0000)</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mt-5">
              <div class="card no-before br-25">
                <h5 class="checkout-inner-txt2 pl-2">Pay With</h5>
                <hr>
                <div class="form-field mb-4">
                  <div class="payment-radio-btn">
                    <input type="radio" id="payment-slct" name="fav_language" value="HTML">
                    <label for="payment-slct"><i class="fas fa-credit-card"></i>Add a debit or credit card</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mt-5">
              <h3 class="checkout-inner-txt mb-3 mb-md-5 pl-4">Card Details</h3>
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="city">Card Number <span class="yellow">*</span></label>
                      <input type="number" class="mb-2" id="city" placeholder="Enter Card Number">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="state">Card Holder Name <span class="yellow">*</span></label>
                      <input type="number" class="mb-2" id="state" placeholder="Enter Card Holder Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="email">Expiration Date <span class="yellow">*</span></label>
                      <input type="text" class="mb-2" id="email" placeholder="Enter Expiration Date">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="email2">CVV <span class="yellow">*</span></label>
                      <input type="text" class="mb-2" id="email2" placeholder="Confirm CVV">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <a href="checkout-detail.php" class="gnrl-btn-inner mr-3">Done</a>
                      <a href="#_" class="gnrl-btn-inner-brown">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mt-5">
              <div class="card review-item no-before br-25">
                <h5 class="checkout-inner-txt2 pl-2">Review Item</h5>
                <div class="table-responsive custom-table">
                  <table>
                    <thead>
                      <tr>
                        <th colspan="6">Item</th>
                        <th>qty</th>
                        <th>price</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="6">
                          <div class="abc-prdct">
                            <img src="assets/img/prdct-img-1.png" alt="">
                            <div class="txt">
                              <h4>After The End</h4>
                              <h5>By: Clare Mackintosh</h5>
                            </div>
                          </div>
                        </td>
                        <td>02</td>
                        <td>$ 00.00</td>
                        <td>
                          <button class="dlt-btn">
                            <i class="far fa-trash-alt"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 pt-5">
          <div class="summary-detail">
            <h2 class="mb-3 pl-2">Summary</h2>
            <div class="content">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <h6>Sub Total (4 items) </h6>
                <h5 class="black-txt">$ 000</h5>
              </div>
              <div class="d-flex align-items-center justify-content-between mb-2">
                <h6>shipping Fee </h6>
                <h5 class="black-txt">$ 000</h5>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h6>discount </h6>
                <h5 class="red-txt">-$ 000</h5>
              </div>
            </div>
            <h3 class="my-3 pl-2">Promo Code:</h3>
            <div class="promo-code-field">
              <input type="text" placeholder="Please Enter Promocode...">
              <button type="button">Apply</button>
            </div>
            <div class="promo-code-content text-right mt-2">
              <span>ABC_PROMO <button><i class="fal fa-times"></i></button> </span>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 pt-3 px-2 border-dashed-custom">
              <h3>Total </h3>
              <h3>$30.6</h3>
            </div>
            <button class="checkout-btn-grey mt-4" onclick="window.location.href='#_'">
              <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="16.364" height="20" viewBox="0 0 16.364 20">
                <path id="Icon_material-security" data-name="Icon material-security" d="M12.682,1.5,4.5,5.136v5.455A11.313,11.313,0,0,0,12.682,21.5a11.313,11.313,0,0,0,8.182-10.909V5.136Zm0,9.991h6.364a9.732,9.732,0,0,1-6.364,8.127V11.5H6.318V6.318l6.364-2.827Z" transform="translate(-4.5 -1.5)" fill="#322f2b" />
              </svg>
              Confirm & Pay</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include 'footer.php'; ?>