<?php $title = "Wishlist";
include 'header-after-signin.php'; ?>

<div class="product-inner-pages mt-3 mt-lg-5">
  <section class="shopping-cart">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="cart-page-title mb-2">My Wishlist</h2>
          <div class="custm-txt-b mb-3"></div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          <h6 class="cart-custom-txt pl-4">Add All To Cart</h6>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive custom-table">
                <table>
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Unit Price </th>
                      <th></th>
                      <th></th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="cart-row">
                      <td>
                        <div class="abc-prdct">
                          <img src="assets/img/prdct-img-1.png" alt="">
                          <div class="txt">
                            <h4>ABC Product</h4>
                            <h5>Size: M</h5>
                          </div>
                        </div>
                      </td>
                      <td colspan="3">Cost: $123</td>
                      <td>
                        <div class="wishlist-action">
                          <img src="assets/img/wishlist.png" alt="">
                          <button class="dlt-btn">
                            <i class="far fa-trash-alt"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cart-row">
                      <td>
                        <div class="abc-prdct">
                          <img src="assets/img/prdct-img-2.png" alt="">
                          <div class="txt">
                            <h4>ABC Product</h4>
                            <h5>Size: M</h5>
                          </div>
                        </div>
                      </td>
                      <td colspan="3">Cost: $123</td>
                      <td>
                        <div class="wishlist-action">
                          <img src="assets/img/wishlist.png" alt="">
                          <button class="dlt-btn">
                            <i class="far fa-trash-alt"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cart-row">
                      <td>
                        <div class="abc-prdct">
                          <img src="assets/img/prdct-img-3.png" alt="">
                          <div class="txt">
                            <h4>ABC Product</h4>
                            <h5>Size: M</h5>
                          </div>
                        </div>
                      </td>
                      <td colspan="3">Cost: $123</td>
                      <td>
                        <div class="wishlist-action">
                          <img src="assets/img/wishlist.png" alt="">
                          <button class="dlt-btn">
                            <i class="far fa-trash-alt"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="cart-row">
                      <td>
                        <div class="abc-prdct">
                          <img src="assets/img/prdct-img-4.png" alt="">
                          <div class="txt">
                            <h4>ABC Product</h4>
                            <h5>Size: M</h5>
                          </div>
                        </div>
                      </td>
                      <td colspan="3">Cost: $123</td>
                      <td>
                        <div class="wishlist-action">
                          <img src="assets/img/wishlist.png" alt="">
                          <button class="dlt-btn">
                            <i class="far fa-trash-alt"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="row mt-4">
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