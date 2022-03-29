<?php $title = "Sign In";
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
                        <div class="col-sm-4">
                            <h2 class="sign-top-head">Sign In</h2>
                            <div class="custm-txt-b mb-3"></div>
                        </div>
                        <div class="col-sm-8 text-right d-flex justify-content-end">
                            <a href="sign-up.php" class="btn-signup mr-2">Sign Up</a>
                            <a href="sign-in.php" class="btn-signin">Sign In</a>
                        </div>
                    </div>
                    <form action="">
                        <div class="form-field mb-4">
                            <label for="email" class="custom-label ml-3 mb-3">Email <span class="red">*</span>:</label>
                            <input type="text" class="custom-input pl-3" id="email" placeholder="Enter Email Address">
                        </div>
                        <div class="form-field mb-2">
                            <label for="pass" class="custom-label ml-3 mb-3">Password <span class="red">*</span>:</label>
                            <div class="pswd-main">
                                <input type="password" class="custom-input pl-3 pswd-1" id="pass" placeholder="Enter Password">
                                <i class="fa fa-eye-slash pswd-i-1" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="form-field mb-5 text-right">
                            <a href="forgot-password.php" class="psw-lnk">Forgot Password?</a>
                        </div>
                        <div class="form-field">
                            <a href="homepage-after-signin.php" class="login-btn-main">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include 'footer.php'; ?>