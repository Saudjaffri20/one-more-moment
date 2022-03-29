<?php $title = "Promo Code";
include 'header.php'; ?>

<div class="product-inner-pages mt-3 mt-lg-5">
  <section class="shopping-cart">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="cart-page-title mb-2">Shopping Cart <span class="span-text">(3 items)</span></h2>
          <div class="custm-txt-b mb-3"></div>
          <p class="shopping-info-txt"><i class="fas fa-info-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo </p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-lg-9">
          <div class="row align-items-center">
            <div class="col-sm-6">
              <div class="cart-radio-btn">
                <input type="checkbox" id="item-slct" name="fav_language" value="HTML">
                <label for="item-slct">Select All (4 Items)</label>
              </div>
            </div>
            <div class="col-sm-6 text-sm-right mt-3 mt-sm-0">
              <button type="button" class="cart-dlt-btn">
                <i class="far fa-trash-alt"></i>
                Remove
              </button>
              <a href="#_" class="contine-btn">
                Continue Shopping
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive custom-table">
                <table>
                  <thead>
                    <tr>
                      <th>S No.</th>
                      <th>Item</th>
                      <th>Qty</th>
                      <th>Color</th>
                      <th>Size</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="cart-row">
                      <td>01</td>
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
                          <button class="plus-btn">-</button>
                          <input type="number" value="01" class="incre-decre-val">
                          <button class="minus-btn">+</button>
                        </div>
                      </td>
                      <td>Red</td>
                      <td>M</td>
                      <td>$ 00.00</td>
                      <td>
                        <button class="dlt-btn">
                          <i class="far fa-trash-alt"></i>
                        </button>
                      </td>
                    </tr>
                    <tr class="cart-row">
                      <td>02</td>
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
                          <button class="plus-btn">-</button>
                          <input type="number" value="02" class="incre-decre-val">
                          <button class="minus-btn">+</button>
                        </div>
                      </td>
                      <td>Red</td>
                      <td>M</td>
                      <td>$ 00.00</td>
                      <td>
                        <button class="dlt-btn">
                          <i class="far fa-trash-alt"></i>
                        </button>
                      </td>
                    </tr>
                    <tr class="cart-row">
                      <td>03</td>
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
                          <button class="plus-btn">-</button>
                          <input type="number" value="03" class="incre-decre-val">
                          <button class="minus-btn">+</button>
                        </div>
                      </td>
                      <td>Red</td>
                      <td>M</td>
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
        <div class="col-lg-3 pt-5">
          <div class="summary-detail">
            <h2 class="mb-3 pl-2">Summary</h2>
            <div class="content">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <h6>Sub Total </h6>
                <h5 class="black-txt">$30</h5>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h6>Sub Total </h6>
                <h5 class="black-txt">$30</h5>
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
            <div class="d-flex align-items-center justify-content-between mt-3 px-2">
              <h3>Sub Total </h3>
              <h3>$30.6</h3>
            </div>
            <button class="checkout-btn mt-5" onclick="window.location.href='checkout.php'">Proceed To Checkout</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include 'footer.php'; ?>

<script>
  // var plusBtn = Array.from(document.querySelectorAll('.plus-btn'));
  // var plusValue = Array.from(document.querySelectorAll('.incre-decre-val'));

  // plusBtn.forEach(element => {
  //   element.addEventListener('click', (event) => {
  //     console.log(event.target)
  //   });
  // });



  var dltBtn = Array.from(document.querySelectorAll('.dlt-btn'));

  // dltBtn.forEach(dlt => {
  //   dlt.addEventListener('click', () => {
  //     var cartRow = document.querySelectorAll('.cart-row');
  //     console.log(cartRow);
  //     cartRow.style.display = "none";
  //   })
  // });

  var qtyBox = document.querySelectorAll('.qty-btns .plus-btn');
  var qtyBox2 = document.querySelectorAll('.qty-btns .minus-btn');
  // console.log(qtyBox);

  Array.from(qtyBox2).forEach(btnplus => {
    btnplus.addEventListener('click', (abc) => {
      var parent = document.querySelectorAll('.qty-btns');
      btnplus.parentNode.children[1].value++;
    })
  });

  Array.from(qtyBox).forEach(btnMinus => {
    btnMinus.addEventListener('click', (abc) => {
      var parent = document.querySelectorAll('.qty-btns');
      if (btnMinus.parentNode.children[1].value > 0) {
        btnMinus.parentNode.children[1].value--;
      }
    })
  });


  // plusValue.forEach(element => {
  //   element.addEventListener('click', () => {
  //     console.log(element.value);
  //   })
  // });


  // Array.from(allCheckboxes).forEach(box => {
  //       box.addEventListener('change', (event) => {
  //           let target = event.target;
  //           let parent = target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
  //           let parentChildNodes = parent.childNodes;

  //           // console.log(parentChildNodes)

  //           Array.from(parentChildNodes).forEach(child => {
  //               if (typeof child.classList !== 'undefined' && child.classList.contains(
  //                       'count-parent')) {
  //                   let span = (child.childNodes[1].childNodes[1].childNodes[0]);
  //                   let countVal = parseInt(span.innerText);
  //                   target.checked ? countVal++ : countVal--
  //                   span.innerText = countVal
  //                   console.log(countVal)
  //               }
  //           })

  //       })
  //   })
</script>