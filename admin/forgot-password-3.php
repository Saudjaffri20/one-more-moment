<?php
$title = "Login";
include('header.php');
?>
<section class="login-bg">
    <div class="container-fluid position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 left-sec px-0 d-none d-lg-block">
                <img src="images/login-left.png" alt="" class="img-fluid w-100">
            </div>
            <div class="col-lg-6">
                <div class="login-sec">
                    <div class="login-logo text-center mb-3">
                        <img src="images/login-logo.png" alt="" class="img-fluid">
                    </div>
                    <h3 class="loginHeading">Forgot Password</h3>
                    <form action="login.php">
                        <label for="" class="loginLabel">New Password<span class="danger font-weight-bold"> *</span>:</label>
                        <div class="form-field">
                            <input type="password" class="site-input right-icon confirm-input" placeholder="Enter New Password" name="" id="">
                            <i class="fa fa-eye-slash confirm-icon right-icon" aria-hidden="true"></i>
                        </div>
                        <label for="" class="loginLabel">Confirm Password<span class="danger font-weight-bold"> *</span>:</label>
                        <div class="form-field">
                            <input type="password" class="site-input right-icon confirm-input" placeholder="Confirm Password" name="" id="">
                            <i class="fa fa-eye-slash confirm-icon right-icon" aria-hidden="true"></i>
                        </div>
                        <div class="text-center mt-4">
                            <button class="site-btn" type="submit">Update</button>
                        </div>
                        <div class="text-center mt-1">
                            <a href="login.php" class="backToWebsite dark-text"><i class="fas fa-long-arrow-alt-left"></i> Back to Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php') ?>