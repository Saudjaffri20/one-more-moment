<?php $title = "Forgot Password";
include 'header2.php'; ?>


<div class="">
    <section class="sign-in-section py-5">
        <div class="container fade-in-column">
            <div class="row align-items-center">
                <div class="col-md-6 d-none d-lg-block">
                    <img src="assets/img/sign-up-img.png" class="w-100 img-fluid" alt="">
                </div>
                <div class="col-lg-6 pl-lg-5 ">
                    <div class="row align-items-center mb-4">
                        <div class="col-sm-12">
                            <h2 class="sign-top-head">Forgot Password</h2>
                            <div class="custm-txt-b mb-3"></div>
                        </div>
                    </div>
                    <form action="">
                        <div class="form-field mb-5">
                            <label for="email" class="custom-label ml-3 mb-3">Email <span class="red">*</span>:</label>
                            <input type="text" class="custom-input pl-3" id="email" placeholder="Enter Email Address">
                        </div>
                        <div class="form-field mb-2">
                            <a href="verification-code.php" class="login-btn-main">Continue</a>
                        </div>
                        <div class="form-field text-center">
                            <a href="#_" class="back-login-btn"><i class="fas fa-long-arrow-alt-left"></i>Back to Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include 'footer.php'; ?>