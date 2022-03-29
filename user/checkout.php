<?php $title = "Checkout";
include 'header-after-signin.php'; ?>

<div class="checkout-page mt-3 mt-lg-5">
  <section class="shopping-cart">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="cart-page-title mb-2">Checkout</h2>
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
                <div class="form-field mb-4">
                  <label class="pl-3 mb-2" for="country">Country Or Region <span class="yellow">*</span></label>
                  <select id="country" class="mb-2">
                    <option value="">United States Of America</option>
                    <option value="">United States Of America</option>
                    <option value="">United States Of America</option>
                  </select>
                </div>
                <div class="form-field mb-4">
                  <label class="pl-3 mb-2" for="fullname">Full name <span class="yellow">*</span></label>
                  <input type="text" class="mb-2" id="fullname" placeholder="Enter full name">
                </div>
                <div class="form-field mb-4">
                  <label class="pl-3 mb-2" for="address">Street Address <span class="yellow">*</span></label>
                  <input type="text" class="mb-2" id="address" placeholder="Enter Your Street Address">
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="city">City Name <span class="yellow">*</span></label>
                      <input type="text" class="mb-2" id="city" placeholder="Enter City Name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="state">Select State or Province <span class="yellow">*</span></label>
                      <select id="state" class="mb-2">
                        <option value="">Select State / Province </option>
                        <option value="">Select State / Province </option>
                        <option value="">Select State / Province </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="zip">Zip Code <span class="yellow">*</span></label>
                      <input type="text" class="mb-2" id="zip" placeholder="Enter Zip Code">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="email">Email Address <span class="yellow">*</span></label>
                      <input type="text" class="mb-2" id="email" placeholder="Enter Your Email Address">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="email2">Confirm Email Address <span class="yellow">*</span></label>
                      <input type="text" class="mb-2" id="email2" placeholder="Confirm Email Address">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-xl-6">
                    <div class="form-field mb-5">
                      <label class="pl-3 mb-2" for="">Phone Number <span class="yellow">*</span></label>
                      <div class="language-dropdown">
                        <input type="tel" id="phone" name="phone" placeholder="+1">
                        <input type="number" name="phone" class="number ml-sm-2" placeholder="0000000000">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <a href="pay-with.php" class="gnrl-btn-inner">Next</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mt-5">
              <h3 class="checkout-inner-txt mb-3 mb-md-5 pl-4">Billing Address</h3>
              <div class="card">
                <div class="form-field mb-4">
                  <label class="pl-3 mb-2" for="country">Country Or Region <span class="yellow">*</span></label>
                  <select id="country" class="mb-2">
                    <option value="">United States Of America</option>
                    <option value="">United States Of America</option>
                    <option value="">United States Of America</option>
                  </select>
                </div>
                <div class="form-field mb-4">
                  <label class="pl-3 mb-2" for="fullname">Full name <span class="yellow">*</span></label>
                  <input type="text" class="mb-2" id="fullname" placeholder="Enter full name">
                </div>
                <div class="form-field mb-4">
                  <label class="pl-3 mb-2" for="address">Street Address <span class="yellow">*</span></label>
                  <input type="text" class="mb-2" id="address" placeholder="Enter Your Street Address">
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="city">City Name <span class="yellow">*</span></label>
                      <input type="text" class="mb-2" id="city" placeholder="Enter City Name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="state">Select State or Province <span class="yellow">*</span></label>
                      <select id="state" class="mb-2">
                        <option value="">Select State / Province </option>
                        <option value="">Select State / Province </option>
                        <option value="">Select State / Province </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="zip">Zip Code <span class="yellow">*</span></label>
                      <input type="text" class="mb-2" id="zip" placeholder="Enter Zip Code">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="email">Email Address <span class="yellow">*</span></label>
                      <input type="text" class="mb-2" id="email" placeholder="Enter Your Email Address">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <label class="pl-3 mb-2" for="email2">Confirm Email Address <span class="yellow">*</span></label>
                      <input type="text" class="mb-2" id="email2" placeholder="Confirm Email Address">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-xl-6">
                    <div class="form-field mb-5">
                      <label class="pl-3 mb-2" for="">Phone Number <span class="yellow">*</span></label>
                      <div class="language-dropdown">
                        <input type="tel" id="phone2" name="phone" placeholder="+1">
                        <input type="number" name="phone" class="number ml-sm-2" placeholder="0000000000">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field mb-4">
                      <div class="cart-radio-btn">
                        <input type="checkbox" id="item-slct" name="fav_language" value="HTML">
                        <label for="item-slct">Select All (4 Items)</label>
                      </div>
                    </div>
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
            <div class="col-12 mt-3">
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

<script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    nationalMode: false,
    utilsScript: "assets/js/utils.js",
  });
  var input2 = document.querySelector("#phone2");
  window.intlTelInput(input2, {
    nationalMode: false,
    utilsScript: "assets/js/utils.js",
  });
</script>