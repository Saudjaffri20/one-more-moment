<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One More Moment | <?php echo ((isset($title)) ? $title : ''); ?></title>
    <link rel="icon" href="assets/img/logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="assets/css/intlTelInput.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <section class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 col-md-4 text-center text-sm-left">
                    <p class="site-title">One More Moment</p>
                </div>
                <div class="col-sm-6 col-md-4 text-center text-sm-right text-md-center mt-2 mt-sm-0">
                    <p class="site-title">Free shipping on orders over $99</p>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center justify-content-center justify-content-md-end mt-2 mt-md-0">
                    <div class="dropdown show notificationdropdown dropleft">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="counter">2</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <h2>Notifications</h2>
                            <hr>
                            <div class="scroll-div" data-scrollbar>
                                <a class="dropdown-item mb-4" href="#">
                                    <ul>
                                        <li>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. </p>
                                            <h6>May 25, 2021 <span>10:30 PM</span></h6>
                                        </li>
                                    </ul>
                                </a>
                                <a class="dropdown-item mb-4" href="#">
                                    <ul>
                                        <li>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. </p>
                                            <h6>May 25, 2021 <span>10:30 PM</span></h6>
                                        </li>
                                    </ul>
                                </a>
                                <a class="dropdown-item mb-4" href="#">
                                    <ul>
                                        <li>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. </p>
                                            <h6>May 25, 2021 <span>10:30 PM</span></h6>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            <a href="#_" class="text-center view-all mt-2">
                                view all
                            </a>
                        </div>
                    </div>
                    <div class="dropdown show userdropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/user-drop-down.png" alt=""> Sammy Aiden
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <ul>
                                <li>
                                    <a class="dropdown-item" href="wishlist.php"><i class="far fa-heart"></i> My Wishlist</a>
                                    <a class="dropdown-item" href="my-order.php"><i class="fal fa-cube"></i> My Orders</a>
                                    <a class="dropdown-item" href="my-profile.php"><i class="fal fa-user"></i> My Profile</a>
                                    <a class="dropdown-item" href="sign-in.php"><i class="fal fa-sign-out"></i> Sign Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-search-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-4 col-md-3 col-lg-2 text-center text-md-left order-1">
                    <a href="index.php" class="d-inline-block">
                        <img src="assets/img/logo.png" alt="OMM logo">
                    </a>
                </div>
                <div class="col-sm-12 col-md-7 order-3 order-md-2  mt-2 mt-md-0">
                    <div class="search-bar">
                        <input type="search" placeholder="Search for products">
                        <div class="search-dropdown">
                            <select>
                                <option value="">All Categories</option>
                                <option value="">All Categories2</option>
                                <option value="">All Categories3</option>
                            </select>
                            <button>
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-2 col-lg-3 order-2 order-md-3">
                    <div class="wish-list-bar">
                        <a href="#_"><span class="icon"><i class="far fa-heart"></i><span class="counter">0</span></span> <span class="text">Favorites</span></a>
                        <a href="wishlist.php"><span class="icon"><i class="fas fa-cart-arrow-down"></i><span class="counter">0</span></span>
                            <span class="text">$0.00</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-menu-bar header-before-signin">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-md-12">
                    <div class="d-flex align-items-center">
                        <button class="category-btn">
                            <span>ALL CATEGORIES</span>
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="site-menu-bar">
                            <i class="fas fa-bars d-block d-lg-none" id="toggle-icon"></i>
                            <ul class="toggle-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li class="shop-link"><a href="shop.php" class="shop-link-txt">Shop</a>
                                    <div class="shopdropdown">
                                        <div class="row pb-2">
                                            <div class="col-sm-6 col-md-4 mb-4">
                                                <h4 class="shop-title mb-2">Collectibles & Art</h4>
                                                <a href="#_" class="shop-item">Collectibles</a>
                                                <a href="#_" class="shop-item">Antiques</a>
                                                <a href="#_" class="shop-item">Sports Memoribilia</a>
                                                <a href="#_" class="shop-item">Arts</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4">
                                                <h4 class="shop-title mb-2">Collectibles & Art</h4>
                                                <a href="#_" class="shop-item">Collectibles</a>
                                                <a href="#_" class="shop-item">Antiques</a>
                                                <a href="#_" class="shop-item">Sports Memoribilia</a>
                                                <a href="#_" class="shop-item">Arts</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4">
                                                <h4 class="shop-title mb-2">Collectibles & Art</h4>
                                                <a href="#_" class="shop-item">Collectibles</a>
                                                <a href="#_" class="shop-item">Antiques</a>
                                                <a href="#_" class="shop-item">Sports Memoribilia</a>
                                                <a href="#_" class="shop-item">Arts</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4">
                                                <h4 class="shop-title mb-2">Electronics</h4>
                                                <a href="#_" class="shop-item">Computers</a>
                                                <a href="#_" class="shop-item">Tablets</a>
                                                <a href="#_" class="shop-item">T.V</a>
                                                <a href="#_" class="shop-item">Cell Phones</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4">
                                                <h4 class="shop-title mb-2">Electronics</h4>
                                                <a href="#_" class="shop-item">Computers</a>
                                                <a href="#_" class="shop-item">Tablets</a>
                                                <a href="#_" class="shop-item">T.V</a>
                                                <a href="#_" class="shop-item">Cell Phones</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4">
                                                <h4 class="shop-title mb-2">Electronics</h4>
                                                <a href="#_" class="shop-item">Computers</a>
                                                <a href="#_" class="shop-item">Tablets</a>
                                                <a href="#_" class="shop-item">T.V</a>
                                                <a href="#_" class="shop-item">Cell Phones</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4">
                                                <h4 class="shop-title mb-2">Electronics</h4>
                                                <a href="#_" class="shop-item">Computers</a>
                                                <a href="#_" class="shop-item">Tablets</a>
                                                <a href="#_" class="shop-item">T.V</a>
                                                <a href="#_" class="shop-item">Cell Phones</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4">
                                                <h4 class="shop-title mb-2">Electronics</h4>
                                                <a href="#_" class="shop-item">Computers</a>
                                                <a href="#_" class="shop-item">Tablets</a>
                                                <a href="#_" class="shop-item">T.V</a>
                                                <a href="#_" class="shop-item">Cell Phones</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4">
                                                <h4 class="shop-title mb-2">Electronics</h4>
                                                <a href="#_" class="shop-item">Computers</a>
                                                <a href="#_" class="shop-item">Tablets</a>
                                                <a href="#_" class="shop-item">T.V</a>
                                                <a href="#_" class="shop-item">Cell Phones</a>
                                            </div>
                                        </div>
                                        <div class="row border-1">
                                            <div class="col-12 text-right">
                                                <a href="categories.php" class="catgry-btn">See All Categories</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#_">Community</a></li>
                                <li><a href="#_">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>