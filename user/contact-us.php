<?php $title = "Contact Us";
include 'header-after-signin2.php'; ?>


<div class="product-inner-pages my-sm-5 py-sm-5">
    <section class="contact-us-section">
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <div class="contact-map" id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14479.807006291214!2d67.05838564999999!3d24.865497413026308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1640696499396!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-md-4 contact-left">
                    <h2 class="mb-2">Contact Us For More Info</h2>
                    <div class="custm-txt-b mb-5"></div>
                    <div class="detail mb-4">
                        <h6 class="mb-2">Mail</h6>
                        <a class="links-c" href="mailto:mail@companyname.com">mail@companyname.com</a>
                    </div>
                    <div class="detail mb-4">
                        <h6 class="mb-2">Address</h6>
                        <a class="links-c" href="tel:8005596580">800 559 6580</a>
                    </div>
                    <div class="detail mb-4">
                        <h6 class="mb-2">Address</h6>
                        <a class="links-c" id="#map">8901 Marmora Road, Glasgow, D04 89GR</a>
                    </div>
                    <div class="social-icon">
                        <h6 class="mb-3">Social</h6>
                        <a href="#_" class="mr-4 d-inline-block">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#_" class="mr-4 d-inline-block">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#_" class="d-inline-block">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 contact-right">
                    <h3 class="mb-5">What Do You Want to Ask? </h3>
                    <form action="">
                        <div class="form-field mb-4">
                            <label for="">Full Name <span>*</span>:</label>
                            <input type="text" placeholder="Enter Full Name">
                        </div>
                        <div class="form-field mb-4">
                            <label for="">Email Address <span>*</span>:</label>
                            <input type="text" placeholder="Enter Email Address">
                        </div>
                        <div class="form-field mb-5">
                            <label for="">Description <span>*</span>:</label>
                            <textarea name="" id="" rows="5" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="form-field mb-4">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include 'footer.php'; ?>