<?php $title = "My Profile";
include 'header-after-signin2.php'; ?>

<div class="home-page-as my-5 py-5">
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="user-cover-photo">
            <img src="assets/img/cover-photo.png" class="w-100" alt="coverphoto">
            <button class="camera-btn">
              <i class="fas fa-camera"></i>
              <input type="file">
            </button>
          </div>
          <div class="user-prfle-img-w">
            <img src="assets/img/person-id-img.png" alt="Profile Picture">
            <button class="camera-btn">
              <i class="fas fa-camera"></i>
              <input type="file">
            </button>
            <h4 class="user-profile-name">Mark Carson</h4>
          </div>
        </div>
        <div class="col-12 pb-0">
          <div class="qr-code">
            <img src="assets/img/qr-code.png" alt="qr code" class="w-100" data-target="#qr-code-link" data-toggle="modal">
          </div>
        </div>
      </div>
      <div class="custom-tabbing-warpper pt-4">
        <hr>
        <div class="container">
          <div class="tab-group">
            <div class="tab-heading">
              <a data-title="home" id="home-action" class="tab-title active" href="javascript:void(0);"><span>Home</span></a>
              <a data-title="about" class="tab-title" href="javascript:void(0);"><span>About Us</span></a>
              <a data-title="contact" class="tab-title" href="javascript:void(0);"><span>Friends</span></a>
            </div>
            <div class="tab-body">
              <div id="home" class="tab-content tab-content-action show">
                <div class="row">
                  <div class="col-12 text-right add-frnd-top">
                    <button type="button" class="add-frnd-btn"><i class="fas fa-user-plus mr-2"></i>Add Friend</button>
                  </div>

                  <div class="col-lg-9 mt-5">

                    <!-- top bar for image upload  -->
                    <div class="top-upload-user">

                      <!-- image video upload -->

                      <div class="phto-vid-upld">
                        <input type="file">
                        <h5 class="vid-upld-title">
                          <i class="fas fa-camera"></i>
                          Photo/Video
                        </h5>
                      </div>

                      <!-- image video upload -->

                      <!-- textarea for upload  -->

                      <div class="wht-mnd-area">
                        <img src="assets/img/person-id-img.png" alt="">
                        <textarea placeholder="What's on your mind?" data-target="#write-post" data-toggle="modal"></textarea>
                      </div>

                      <!-- textarea for upload -->

                      <!-- post image video -->

                      <div class="post-btn-p">
                        <div class="d-flex align-items-center">
                          <button class="picture-video mr-sm-3">
                            <input type="file">
                            <i class="far fa-camera"></i>
                            Pictures
                          </button>
                          <button class="picture-video">
                            <input type="file">
                            <i class="fal fa-video"></i>
                            Video
                          </button>
                        </div>
                        <button type="button" class="post-btn" data-toggle="modal" data-target="#create-post">
                          Upload
                        </button>
                      </div>

                      <!-- post image video -->

                    </div>
                    <!-- top bar for image upload  -->

                    <!-- user friend post main -->

                    <div class="user-post-main mt-4">
                      <div class="pt-2 pt-sm-3 px-2 px-sm-3 d-flex justify-content-between">
                        <!-- profile picture and id name  -->

                        <div class="prfle-pic-dtl">
                          <div class="prfle-pic">
                            <figure>
                              <img src="assets/img/user-profile-img.png" alt="profile picture">
                            </figure>
                          </div>
                          <div class="user-prfle-title">
                            <h4 class="mt-1"><a href="#_">User Name</a></h4>
                            <p class="mt-1">April 13 at <time>4:31am</time> <i class="far fa-globe-africa ml-3"></i></p>
                          </div>
                        </div>

                        <!-- profile picture and id name  -->

                        <!-- report dropdown -->

                        <div class="dropdown dropleft">
                          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-ellipsis-v"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" data-target="#report-post" data-toggle="modal" href="#">Delete</a>
                          </div>
                        </div>

                        <!-- report dropdown -->

                      </div>
                      <p class="about-post px-2 px-sm-3 mt-4 mb-3">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                      <div class="img-post px-2 px-sm-3">
                        <figure>
                          <img src="assets/img/post-img1.png" alt="Clothes Images" class="img-fluid w-100">
                        </figure>
                      </div>
                      <div class="like-cmnt-share d-flex align-items-center justify-content-between justify-content-md-start b-t-y pt-3 m-2 m-sm-3">
                        <button class="mr-md-5"><i class="fas fa-thumbs-up"></i>Like</button>
                        <button class="mr-md-5"><i class="fas fa-comment-alt"></i>Comment</button>
                        <button><i class="fas fa-share"></i>Share</button>
                      </div>
                      <div class="comment-like-section p-2 p-sm-3">
                        <div class="like-cmnt-share-counter d-flex justify-content-between mb-3">
                          <button data-target="#post-like" data-toggle="modal"><i class="fas fa-thumbs-up mr-2"></i><span>5</span></button>
                          <div class="d-flex align-items-center">
                            <button class="mr-2 mr-sm-4"><span class="mr-2">20</span>Comments</button>
                            <button data-target="#post-share" data-toggle="modal"><span class="mr-2">00</span>shares</button>
                          </div>
                        </div>
                        <div class="comment-box-parent d-flex align-items-center w-100 mb-2">
                          <figure>
                            <img src="assets/img/user-profile-img.png" alt="">
                          </figure>
                          <textarea class="ml-2 ml-sm-3" placeholder="Write a comment…"></textarea>
                        </div>
                        <div class="user-comment-box-detail d-flex align-items-sm-center">
                          <figure>
                            <img src="assets/img/p-c-f.png" alt="">
                          </figure>
                          <div class="user-content mx-2 mx-sm-3 py-2 px-3 py-sm-3">
                            <h6 class="mb-1">Mark Anderson</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                          </div>
                          <div class="delete-dropdown pt-3 pt-sm-0">
                            <!-- Delete dropdown -->

                            <div class="dropdown dropleft">
                              <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-ellipsis-v"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Delete</a>
                              </div>
                            </div>

                            <!-- Delete dropdown -->
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- user friend post main -->


                    <!-- user friend video post main -->

                    <div class="user-post-main mt-4">
                      <div class="pt-2 pt-sm-3 px-2 px-sm-3 d-flex justify-content-between">

                        <!-- profile picture and id name  -->
                        <div class="prfle-pic-dtl">
                          <div class="prfle-pic">
                            <figure>
                              <img src="assets/img/user-profile-img.png" alt="profile picture">
                            </figure>
                          </div>
                          <div class="user-prfle-title">
                            <h4 class="mt-1"><a href="#_">User Name</a></h4>
                            <p class="mt-1">April 13 at <time>4:31am</time> <i class="far fa-globe-africa ml-3"></i></p>
                          </div>
                        </div>
                        <!-- profile picture and id name  -->

                        <!-- report dropdown -->
                        <div class="dropdown dropleft">
                          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-ellipsis-v"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" data-target="#report-post" data-toggle="modal" href="#">Edit Post Remove</a>
                          </div>
                        </div>
                        <!-- report dropdown -->

                      </div>
                      <p class="about-post px-2 px-sm-3 mt-4 mb-3">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                      <div class="img-post position-relative video-post px-2 px-sm-3">
                        <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                        <video poster="assets/img/post-video1.png" preload="auto">
                          <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                        </video>
                      </div>
                      <div class="like-cmnt-share d-flex align-items-center justify-content-between justify-content-md-start b-t-y pt-3 m-2 m-sm-3">
                        <button class="mr-md-5"><i class="fas fa-thumbs-up"></i>Like</button>
                        <button class="mr-md-5"><i class="fas fa-comment-alt"></i>Comment</button>
                        <button><i class="fas fa-share"></i>Share</button>
                      </div>
                      <div class="comment-like-section p-2 p-sm-3">
                        <div class="like-cmnt-share-counter d-flex justify-content-between mb-3">
                          <button data-target="#post-like" data-toggle="modal"><i class="fas fa-thumbs-up mr-2"></i><span>5</span></button>
                          <div class="d-flex align-items-center">
                            <button class="mr-2 mr-sm-4"><span class="mr-2">20</span>Comments</button>
                            <button data-target="#post-share" data-toggle="modal"><span class="mr-2">00</span>shares</button>
                          </div>
                        </div>
                        <div class="comment-box-parent d-flex align-items-center w-100 mb-2">
                          <figure>
                            <img src="assets/img/user-profile-img.png" alt="">
                          </figure>
                          <textarea class="ml-2 ml-sm-3" placeholder="Write a comment…"></textarea>
                        </div>
                        <div class="user-comment-box-detail d-flex align-items-sm-center">
                          <figure>
                            <img src="assets/img/p-c-f.png" alt="">
                          </figure>
                          <div class="user-content mx-2 mx-sm-3 py-2 px-3 py-sm-3">
                            <h6 class="mb-1">Mark Anderson</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                          </div>
                          <div class="delete-dropdown pt-3 pt-sm-0">
                            <!-- Delete dropdown -->

                            <div class="dropdown dropleft">
                              <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-ellipsis-v"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Delete</a>
                              </div>
                            </div>

                            <!-- Delete dropdown -->
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- user friend video post main -->

                    <!-- user friend text post main -->

                    <div class="user-post-main mt-4">
                      <div class="pt-2 pt-sm-3 px-2 px-sm-3 d-flex justify-content-between">

                        <!-- profile picture and id name  -->
                        <div class="prfle-pic-dtl">
                          <div class="prfle-pic">
                            <figure>
                              <img src="assets/img/user-profile-img.png" alt="profile picture">
                            </figure>
                          </div>
                          <div class="user-prfle-title">
                            <h4 class="mt-1"><a href="#_">User Name</a></h4>
                            <p class="mt-1">April 13 at <time>4:31am</time> <i class="far fa-globe-africa ml-3"></i></p>
                          </div>
                        </div>
                        <!-- profile picture and id name  -->

                        <!-- report dropdown -->
                        <div class="dropdown dropleft">
                          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-ellipsis-v"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" data-target="#report-post" data-toggle="modal" href="#">Remove</a>
                          </div>
                        </div>
                        <!-- report dropdown -->

                      </div>

                      <p class="about-post px-2 px-sm-3 mt-4 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>

                      <div class="like-cmnt-share d-flex align-items-center justify-content-between justify-content-md-start b-t-y pt-3 m-2 m-sm-3">
                        <button class="mr-md-5"><i class="fas fa-thumbs-up"></i>Like</button>
                        <button class="mr-md-5"><i class="fas fa-comment-alt"></i>Comment</button>
                        <button><i class="fas fa-share"></i>Share</button>
                      </div>
                      <div class="comment-like-section p-2 p-sm-3">
                        <div class="like-cmnt-share-counter d-flex justify-content-between mb-3">
                          <button data-target="#post-like" data-toggle="modal"><i class="fas fa-thumbs-up mr-2"></i><span>5</span></button>
                          <div class="d-flex align-items-center">
                            <button class="mr-2 mr-sm-4"><span class="mr-2">20</span>Comments</button>
                            <button data-target="#post-share" data-toggle="modal"><span class="mr-2">00</span>shares</button>
                          </div>
                        </div>
                        <div class="comment-box-parent d-flex align-items-center w-100 mb-2">
                          <figure>
                            <img src="assets/img/user-profile-img.png" alt="">
                          </figure>
                          <textarea class="ml-2 ml-sm-3" placeholder="Write a comment…"></textarea>
                        </div>
                        <div class="user-comment-box-detail d-flex align-items-sm-center">
                          <figure>
                            <img src="assets/img/p-c-f.png" alt="">
                          </figure>
                          <div class="user-content mx-2 mx-sm-3 py-2 px-3 py-sm-3">
                            <h6 class="mb-1">Mark Anderson</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                          </div>
                          <div class="delete-dropdown pt-3 pt-sm-0">
                            <!-- Delete dropdown -->

                            <div class="dropdown dropleft">
                              <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-ellipsis-v"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Delete</a>
                              </div>
                            </div>

                            <!-- Delete dropdown -->
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- user friend text post main -->


                    <!-- user friend multi images -->

                    <div class="user-post-main mt-4">
                      <div class="pt-2 pt-sm-3 px-2 px-sm-3 d-flex justify-content-between">
                        <!-- profile picture and id name  -->

                        <div class="prfle-pic-dtl">
                          <div class="prfle-pic">
                            <figure>
                              <img src="assets/img/user-profile-img.png" alt="profile picture">
                            </figure>
                          </div>
                          <div class="user-prfle-title">
                            <h4 class="mt-1"><a href="#_">User Name</a></h4>
                            <p class="mt-1">April 13 at <time>4:31am</time> <i class="far fa-globe-africa ml-3"></i></p>
                          </div>
                        </div>

                        <!-- profile picture and id name  -->

                        <!-- report dropdown -->

                        <div class="dropdown dropleft">
                          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-ellipsis-v"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" data-target="#report-post" data-toggle="modal" href="#">Report</a>
                          </div>
                        </div>

                        <!-- report dropdown -->

                      </div>
                      <p class="about-post px-2 px-sm-3 mt-4 mb-3">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                      <div class="multi-images px-2 px-sm-3" data-toggle="modal" data-target="#multi-images">
                        <div class="row no-gutters">
                          <div class="col-7 pr-1">
                            <figure>
                              <img src="assets/img/post-img1.png" alt="Clothes Images" class="img-fluid w-100 left-img">
                            </figure>
                          </div>
                          <div class="col-5 pl-1">
                            <div class="multi-img-inner">
                              <figure>
                                <img src="assets/img/post-img1.png" alt="Clothes Images" class="img-fluid w-100 right-img">
                              </figure>
                            </div>
                            <div class="multi-img-inner">
                              <figure>
                                <img src="assets/img/post-img1.png" alt="Clothes Images" class="img-fluid w-100 right-img">
                              </figure>
                              <div class="overlay"></div>
                              <h2 class="quantity">02+</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="like-cmnt-share d-flex align-items-center justify-content-between justify-content-md-start b-t-y pt-3 m-2 m-sm-3">
                        <button class="mr-md-5"><i class="fas fa-thumbs-up"></i>Like</button>
                        <button class="mr-md-5"><i class="fas fa-comment-alt"></i>Comment</button>
                        <button><i class="fas fa-share"></i>Share</button>
                      </div>
                      <div class="comment-like-section p-2 p-sm-3">
                        <div class="like-cmnt-share-counter d-flex justify-content-between mb-3">
                          <button data-target="#post-like" data-toggle="modal"><i class="fas fa-thumbs-up mr-2"></i><span>5</span></button>
                          <div class="d-flex align-items-center">
                            <button class="mr-2 mr-sm-4"><span class="mr-2">20</span>Comments</button>
                            <button data-target="#post-share" data-toggle="modal"><span class="mr-2">00</span>shares</button>
                          </div>
                        </div>
                        <div class="comment-box-parent d-flex align-items-center w-100 mb-2">
                          <figure>
                            <img src="assets/img/user-profile-img.png" alt="">
                          </figure>
                          <textarea class="ml-2 ml-sm-3" placeholder="Write a comment…"></textarea>
                        </div>
                      </div>
                    </div>

                    <!-- user friend multi images -->

                    <!-- user friend multi video -->

                    <div class="user-post-main mt-4">
                      <div class="pt-2 pt-sm-3 px-2 px-sm-3 d-flex justify-content-between">
                        <!-- profile picture and id name  -->

                        <div class="prfle-pic-dtl">
                          <div class="prfle-pic">
                            <figure>
                              <img src="assets/img/user-profile-img.png" alt="profile picture">
                            </figure>
                          </div>
                          <div class="user-prfle-title">
                            <h4 class="mt-1"><a href="#_">User Name</a></h4>
                            <p class="mt-1">April 13 at <time>4:31am</time> <i class="far fa-globe-africa ml-3"></i></p>
                          </div>
                        </div>

                        <!-- profile picture and id name  -->

                        <!-- report dropdown -->

                        <div class="dropdown dropleft">
                          <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-ellipsis-v"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" data-target="#report-post" data-toggle="modal" href="#">Report</a>
                          </div>
                        </div>

                        <!-- report dropdown -->

                      </div>
                      <p class="about-post px-2 px-sm-3 mt-4 mb-3">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
                      <div class="multi-images px-2 px-sm-3">
                        <div class="row no-gutters">
                          <div class="col-7 pr-1">
                            <div class="img-post position-relative video-post left-video">
                              <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                              <video poster="assets/img/post-video1.png" preload="auto">
                                <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                              </video>
                            </div>
                          </div>
                          <div class="col-5 pl-1">
                            <div class="img-post position-relative video-post right-video">
                              <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                              <video poster="assets/img/post-video1.png" preload="auto">
                                <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                              </video>
                            </div>
                            <div class="img-post position-relative video-post right-video " data-toggle="modal" data-target="#multi-video">
                              <video poster="assets/img/post-video1.png" preload="auto">
                                <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                              </video>
                              <div class="overlay"></div>
                              <h2 class="quantity">02+</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="like-cmnt-share d-flex align-items-center justify-content-between justify-content-md-start b-t-y pt-3 m-2 m-sm-3">
                        <button class="mr-md-5"><i class="fas fa-thumbs-up"></i>Like</button>
                        <button class="mr-md-5"><i class="fas fa-comment-alt"></i>Comment</button>
                        <button><i class="fas fa-share"></i>Share</button>
                      </div>
                      <div class="comment-like-section p-2 p-sm-3">
                        <div class="like-cmnt-share-counter d-flex justify-content-between mb-3">
                          <button data-target="#post-like" data-toggle="modal"><i class="fas fa-thumbs-up mr-2"></i><span>5</span></button>
                          <div class="d-flex align-items-center">
                            <button class="mr-2 mr-sm-4"><span class="mr-2">20</span>Comments</button>
                            <button data-target="#post-share" data-toggle="modal"><span class="mr-2">00</span>shares</button>
                          </div>
                        </div>
                        <div class="comment-box-parent d-flex align-items-center w-100 mb-2">
                          <figure>
                            <img src="assets/img/user-profile-img.png" alt="">
                          </figure>
                          <textarea class="ml-2 ml-sm-3" placeholder="Write a comment…"></textarea>
                        </div>
                      </div>
                    </div>

                    <!-- user friend multi video -->

                  </div>
                </div>
              </div>
              <div id="about" class="tab-content">
                <div class="row mt-5">
                  <div class="col-12">
                    <div class="about-detail-main">
                      <form action="">
                        <div class="about-detail">
                          <div class="row align-items-center mb-4">
                            <div class="col-md-6 col-lg-4">
                              <label for="" class="about-txt">
                                Full Name:
                              </label>
                            </div>
                            <div class="col-md-6 col-lg-5">
                              <div class="pass-field position-relative">
                                <input type="password" class="pass-about" placeholder="Mark Carson" disabled>
                                <i class="fas fa-eye-slash"></i>
                              </div>
                            </div>
                          </div>
                          <div class="row align-items-center mb-4">
                            <div class="col-md-6 col-lg-4">
                              <label for="" class="about-txt">
                                Email Address:
                              </label>
                            </div>
                            <div class="col-md-6 col-lg-5">
                              <div class="pass-field position-relative">
                                <input type="password" class="pass-about" placeholder="abc@xyz.com" disabled>
                                <i class="fas fa-eye-slash"></i>
                              </div>
                            </div>
                          </div>
                          <div class="row align-items-center mb-4 show-hide-field">
                            <div class="col-md-6 col-lg-4">
                              <label for="" class="about-txt">
                                Confirm Password <span>*</span>:
                              </label>
                            </div>
                            <div class="col-md-6 col-lg-5">
                              <div class="pass-field position-relative">
                                <input type="password" class="pass-about" placeholder="Confirm Password" disabled>
                                <i class="fas fa-eye-slash"></i>
                              </div>
                            </div>
                          </div>
                          <div class="row about-btn mt-5">
                            <div class="col-md-6 col-lg-4 edit-profile-btn mb-4 mb-md-0">
                              <button type="button" id="edit-btn">Edit Profile</button>
                            </div>
                            <div class="col-md-6 col-lg-4 chnge-pass-btn">
                              <button type="button" id="change-pass">Change Password</button>
                            </div>
                            <!-- <div class="col-md-4 updte-btn">
                              <button type="button" id="update" data-target="#update-pass-m" data-toggle="modal">Update</button>
                            </div>
                            <div class="col-md-4 save-changes-btn">
                              <button type="button" id="save-changes" data-target="#save-changes" data-toggle="modal">Save Changes</button>
                            </div> -->
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div id="contact" class="tab-content">
                <div class="row mt-5">
                  <div class="col-12">
                    <div class="top-fields d-md-flex w-100 justify-content-end align-items-center mb-5">
                      <div class="input-bar mb-3 mb-md-0">
                        <input type="search" name="" id="" placeholder="Search">
                      </div>
                      <a href="#_" class="ml-1 ml-md-3">Friend Requests</a>
                      <a href="#_" class="ml-3 ml-md-3">Sent Requests</a>
                    </div>
                  </div>
                  <div class="col-lg-11 mx-auto">
                    <div class="row">
                      <div class="col-md-6 mb-3 d-flex">
                        <div class="profile-friend-detail w-100 user-post-main">
                          <div class="media-image">
                            <img src="assets/img/profile-tab-img.png" alt="">
                          </div>
                          <div class="content flex-grow-1">
                            <h6 class="mt-2">
                              <a href="javascript:void(0)" class="view-profile-tab">
                                Mark Boucher 
                              </a>
                            </h6>
                          </div>
                          <div class="dropdown dropleft d-flex align-items-center">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="far fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" data-target="#unfriend-people" data-toggle="modal" href="#">Un Friend</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 d-flex">
                        <div class="profile-friend-detail w-100 user-post-main">
                          <div class="media-image">
                            <img src="assets/img/profile-tab-img.png" alt="">
                          </div>
                          <div class="content flex-grow-1">
                            <h6 class="mt-2">
                              <a href="javascript:void(0)" class="view-profile-tab">
                                Daniel Jacob
                              </a>
                            </h6>
                          </div>
                          <div class="dropdown dropleft d-flex align-items-center">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="far fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" data-target="#unfriend-people" data-toggle="modal" href="#">Un Friend</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 d-flex">
                        <div class="profile-friend-detail w-100 user-post-main">
                          <div class="media-image">
                            <img src="assets/img/profile-tab-img.png" alt="">
                          </div>
                          <div class="content flex-grow-1">
                            <h6 class="mt-2">
                              <a href="javascript:void(0)" class="view-profile-tab">
                                Mark Carson
                              </a>
                            </h6>
                          </div>
                          <div class="dropdown dropleft d-flex align-items-center">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="far fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" data-target="#unfriend-people" data-toggle="modal" href="#">Un Friend</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 d-flex">
                        <div class="profile-friend-detail w-100 user-post-main">
                          <div class="media-image">
                            <img src="assets/img/profile-tab-img.png" alt="">
                          </div>
                          <div class="content flex-grow-1">
                            <h6 class="mt-2">
                              <a href="javascript:void(0)" class="view-profile-tab">
                                Matt Henry
                              </a>
                            </h6>
                          </div>
                          <div class="dropdown dropleft d-flex align-items-center">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="far fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" data-target="#unfriend-people" data-toggle="modal" href="#">Un Friend</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 d-flex">
                        <div class="profile-friend-detail w-100 user-post-main">
                          <div class="media-image">
                            <img src="assets/img/profile-tab-img.png" alt="">
                          </div>
                          <div class="content flex-grow-1">
                            <h6 class="mt-2">
                              <a href="javascript:void(0)" class="view-profile-tab">
                                Steve Jacob
                              </a>
                            </h6>
                          </div>
                          <div class="dropdown dropleft d-flex align-items-center">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="far fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" data-target="#unfriend-people" data-toggle="modal" href="#">Un Friend</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 d-flex">
                        <div class="profile-friend-detail w-100 user-post-main">
                          <div class="media-image">
                            <img src="assets/img/profile-tab-img.png" alt="">
                          </div>
                          <div class="content flex-grow-1">
                            <h6 class="mt-2">
                              <a href="javascript:void(0)" class="view-profile-tab">
                                Bill Gate
                              </a>
                            </h6>
                            <button type="button" class="add-btn d-flex align-items-center justify-content-center ml-auto mt-4" id="add-btn">Add Friend</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-5">
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

    </div>
  </section>
</div>





<!-- Modal -->



<!-- multi image modal -->

<div class="modal fade" id="multi-images" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl  modal-dialog-centered" role="document">
    <div class="modal-content no-before">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body p-2 p-sm-4 text-left">
        <div class="row">
          <div class="col-lg-7 col-xl-8">
            <div class="multi-image-slide">
              <div class="owl-carousel owl-theme">
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
                <div class="item">
                  <img src="assets/img/post-img1.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4 d-none d-sm-block">
            <div class="user-post-main mt-4">
              <div class="pt-2 pt-sm-3 px-2 px-sm-3 d-flex justify-content-between">

                <!-- profile picture and id name  -->
                <div class="prfle-pic-dtl">
                  <div class="prfle-pic">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="profile picture">
                    </figure>
                  </div>
                  <div class="user-prfle-title">
                    <h4 class="mt-2">Sammy Aiden</h4>
                    <p class="mt-1"><time>mm/dd/yy</time> <i class="far fa-globe-africa ml-2"></i></p>
                  </div>
                </div>
                <!-- profile picture and id name  -->

                <!-- report dropdown -->
                <div class="dropdown dropleft pt-3">
                  <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-v"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" data-target="#report-post" data-toggle="modal" href="#">Report</a>
                  </div>
                </div>
                <!-- report dropdown -->

              </div>

              <p class="about-post px-2 px-sm-3 mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>

              <div class="like-cmnt-share-counter d-flex justify-content-between mb-3 px-2">
                <button data-target="#post-like" data-toggle="modal"><i class="fas fa-thumbs-up mr-2"></i><span>5</span></button>
                <div class="d-flex align-items-center">
                  <button class="mr-2"><span class="mr-1">20</span>Comments</button>
                  <button><span class="mr-1">00</span>shares</button>
                </div>
              </div>
              <div class="like-cmnt-share d-flex align-items-center justify-content-between b-t-y b-b-y py-2 m-2 m-sm-3">
                <button class=""><i class="fas fa-thumbs-up"></i>Like</button>
                <button class=""><i class="fas fa-comment-alt"></i>Comment</button>
                <button><i class="fas fa-share"></i>Share</button>
              </div>
              <div class="user-comment-box-detail d-flex">
                <figure>
                  <img src="assets/img/p-c-f.png" alt="">
                </figure>
                <div class="user-content mx-2 mx-sm-3 p-2">
                  <h6 class="mb-1">Mark Anderson</h6>
                  <p>It is a long established fact that a reader will be distracted by the readable content</p>
                </div>
                <div class="delete-dropdown pt-3 pt-sm-0">
                  <!-- Delete dropdown -->

                  <div class="dropdown dropleft">
                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="far fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>

                  <!-- Delete dropdown -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- multi video modal -->

<div class="modal fade" id="multi-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl  modal-dialog-centered" role="document">
    <div class="modal-content no-before">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body p-2 p-sm-4 text-left">
        <div class="row">
          <div class="col-lg-7 col-xl-8">
            <div class="multi-image-slide">
              <div class="owl-carousel owl-theme">
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="item">
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4 d-none d-sm-block">
            <div class="user-post-main mt-4">
              <div class="pt-2 pt-sm-3 px-2 px-sm-3 d-flex justify-content-between">

                <!-- profile picture and id name  -->
                <div class="prfle-pic-dtl">
                  <div class="prfle-pic">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="profile picture">
                    </figure>
                  </div>
                  <div class="user-prfle-title">
                    <h4 class="mt-2">Sammy Aiden</h4>
                    <p class="mt-1"><time>mm/dd/yy</time> <i class="far fa-globe-africa ml-2"></i></p>
                  </div>
                </div>
                <!-- profile picture and id name  -->

                <!-- report dropdown -->
                <div class="dropdown dropleft pt-3">
                  <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-v"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" data-target="#report-post" data-toggle="modal" href="#">Report</a>
                  </div>
                </div>
                <!-- report dropdown -->

              </div>

              <p class="about-post px-2 px-sm-3 mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>

              <div class="like-cmnt-share-counter d-flex justify-content-between mb-3 px-2">
                <button data-target="#post-like" data-toggle="modal"><i class="fas fa-thumbs-up mr-2"></i><span>5</span></button>
                <div class="d-flex align-items-center">
                  <button class="mr-2"><span class="mr-1">20</span>Comments</button>
                  <button><span class="mr-1">00</span>shares</button>
                </div>
              </div>
              <div class="like-cmnt-share d-flex align-items-center justify-content-between b-t-y b-b-y py-2 m-2 m-sm-3">
                <button class=""><i class="fas fa-thumbs-up"></i>Like</button>
                <button class=""><i class="fas fa-comment-alt"></i>Comment</button>
                <button><i class="fas fa-share"></i>Share</button>
              </div>
              <div class="user-comment-box-detail d-flex">
                <figure>
                  <img src="assets/img/p-c-f.png" alt="">
                </figure>
                <div class="user-content mx-2 mx-sm-3 p-2">
                  <h6 class="mb-1">Mark Anderson</h6>
                  <p>It is a long established fact that a reader will be distracted by the readable content</p>
                </div>
                <div class="delete-dropdown pt-3 pt-sm-0">
                  <!-- Delete dropdown -->

                  <div class="dropdown dropleft">
                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="far fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>

                  <!-- Delete dropdown -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- write post modal -->

<div class="modal fade" id="write-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body p-2 p-sm-4 text-left">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="pl-4 mb-2 pb-3 text-left b-b-y">Write Post</h3>
            <div class="user-post-main bg-0 p-0">
              <div class="p-0 px-2 px-sm-3 d-flex justify-content-between">
                <!-- profile picture and id name  -->

                <div class="prfle-pic-dtl">
                  <div class="prfle-pic">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="profile picture">
                    </figure>
                  </div>
                  <div class="user-prfle-title">
                    <h4 class="mt-1"><a href="#_">User Name</a></h4>
                    <p class="mt-1">April 13 at <time>4:31am</time> <i class="far fa-globe-africa ml-3"></i></p>
                  </div>
                </div>

                <!-- profile picture and id name  -->

                <!-- report dropdown -->

                <div class="dropdown dropleft">
                  <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-v"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" data-target="#report-post" data-toggle="modal" href="#">Report</a>
                  </div>
                </div>

                <!-- report dropdown -->

              </div>
              <p class="about-post px-2 px-sm-3 mt-4 mb-3">Lorem ipsum dolor sit amet, duo esse augue torquatos te, ius an nisl deterruisset. Etiam dolore usu ut. </p>
              <div class="px-2 px-sm-3">
                <div class="row">
                  <div class="col-12">
                    <div class="post-image-main position-relative">
                      <button class="cross-remove-btn"><i class="fas fa-times-circle"></i></button>
                      <figure>
                        <img src="assets/img/post-img1.png" alt="Clothes Images" class="img-fluid w-100 left-img">
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
              <div class="user-comment-box-detail d-sm-flex b-t-y pt-3 mt-3">
                <div class="d-flex flex-grow-1">
                  <figure>
                    <img src="assets/img/p-c-f.png" alt="">
                  </figure>
                  <div class="user-content mx-2 mx-sm-3 p-3 box-shadow b-30">
                    <h6 class="mb-1">Mark Anderson</h6>
                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                  </div>
                </div>
                <div class="text-right mt-3 mt-sm-0">
                  <button type="button" class="post-btn" data-dismiss="modal">
                    Post
                  </button>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-start mt-2 mt-sm-4 pt-1">
                <h4 class="add-post-text mr-2 mr-sm-3">Add To Your Post</h4>
                <button class="picture-video mr-2 mr-sm-3">
                  <input type="file">
                  <i class="far fa-camera"></i>
                  Pictures
                </button>
                <button class="picture-video">
                  <input type="file">
                  <i class="fal fa-video"></i>
                  Video
                </button>
              </div>
              <div class="d-flex justify-content-end mt-2">
                <button class="qr-code-button">
                  <u>Share QR</u>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- remove post modal -->

<div class="modal fade" id="remove-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-4">
        <img src="assets/img/warning.png" class="warning-img" alt="">
        <h3 class="mt-3 mb-4">Are You Sure You Want To <br>Remove This Post?</h3>
        <div class="modal-btn pb-2">
          <a href="#_" class="brown-btn" data-dismiss="modal">Yes</a>
          <a href="#_" class="yellow-btn" data-dismiss="modal">No</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- report post modal -->

<div class="modal fade" id="report-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-4">
        <img src="assets/img/warning.png" class="warning-img" alt="">
        <h3 class="mt-3 mb-4">Are You Sure You Want To <br>Report This Post?</h3>
        <div class="modal-btn pb-2">
          <a href="#_" class="brown-btn" data-dismiss="modal" data-toggle="modal" data-target="#report-reason">Yes</a>
          <a href="#_" class="yellow-btn" data-dismiss="modal">No</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- report reason -->

<div class="modal fade" id="report-reason" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-3 px-4">
        <h3 class="mt-3 mb-2 text-left">Reason For Reporting</h3>
        <hr>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="reason1" name="fav_language" value="HTML">
          <label for="reason1">Reason 01</label>
        </div>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="reason2" name="fav_language" value="HTML">
          <label for="reason2">Reason 02</label>
        </div>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="reason3" name="fav_language" value="HTML">
          <label for="reason3">Reason 03</label>
        </div>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="reason4" name="fav_language" value="HTML">
          <label for="reason4">Reason 04</label>
        </div>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="reason5" name="fav_language" value="HTML">
          <label for="reason5">Reason 05</label>
        </div>
        <div class="payment-radio-btn mb-3 text-left">
          <input type="radio" id="other" name="fav_language" value="HTML">
          <label for="other">Other</label>
        </div>
        <div class="report-reason-txtarea">
          <textarea rows="07" placeholder="Enter reporting reason"></textarea>
        </div>
        <div class="modal-btn mt-3 pb-3">
          <a href="#_" class="yellow-btn" data-dismiss="modal" aria-label="Close">Submit</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- post like -->

<div class="modal fade" id="post-like" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-3 px-2 px-sm-4">
        <ul class="nav nav-tabs mt-0" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pending-tabs" data-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="false"><i class="far fa-thumbs-up"></i> <span>5</span></a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active b-t-y pb-0 pt-4 pb-sm-4" id="all" role="tabpanel" aria-labelledby="all-tabs">
            <div class="row align-items-center mb-3">
              <div class="col-7">
                <div class="d-flex align-items-center user-profile-like">
                  <div class="user-image-like mr-2 mr-sm-4">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="">
                    </figure>
                    <i class="fas fa-thumbs-up"></i>
                  </div>
                  <h5>Mark Carson</h5>
                </div>
              </div>
              <div class="col-5 text-right">
                <button class="post-btn px-lg-5 px-sm-4 px-2">
                  Add Friend
                </button>
              </div>
            </div>
            <div class="row align-items-center mb-3">
              <div class="col-7">
                <div class="d-flex align-items-center user-profile-like">
                  <div class="user-image-like mr-2 mr-sm-4">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="">
                    </figure>
                    <i class="fas fa-thumbs-up"></i>
                  </div>
                  <h5>Mark Carson</h5>
                </div>
              </div>
              <div class="col-5 text-right">
                <button class="post-btn px-lg-5 px-sm-4 px-2">
                  Add Friend
                </button>
              </div>
            </div>
            <div class="row align-items-center mb-3">
              <div class="col-7">
                <div class="d-flex align-items-center user-profile-like">
                  <div class="user-image-like mr-2 mr-sm-4">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="">
                    </figure>
                    <i class="fas fa-thumbs-up"></i>
                  </div>
                  <h5>Mark Carson</h5>
                </div>
              </div>
              <div class="col-5 text-right">
                <button class="post-btn px-lg-5 px-sm-4 px-2">
                  Message
                </button>
              </div>
            </div>
            <div class="row align-items-center mb-3">
              <div class="col-7">
                <div class="d-flex align-items-center user-profile-like">
                  <div class="user-image-like mr-2 mr-sm-4">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="">
                    </figure>
                    <i class="fas fa-thumbs-up"></i>
                  </div>
                  <h5>Mark Carson</h5>
                </div>
              </div>
              <div class="col-5 text-right">
                <button class="post-btn px-lg-5 px-sm-4 px-2">
                  Message
                </button>
              </div>
            </div>
          </div>
          <div class="tab-pane fade b-t-y pb-0 pt-4 pb-sm-4" id="pending" role="tabpanel" aria-labelledby="pending-tabs">
            <div class="row align-items-center mb-3">
              <div class="col-7">
                <div class="d-flex align-items-center user-profile-like">
                  <div class="user-image-like mr-2 mr-sm-4">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="">
                    </figure>
                    <i class="fas fa-thumbs-up"></i>
                  </div>
                  <h5>Mark Carson</h5>
                </div>
              </div>
              <div class="col-5 text-right">
                <button class="post-btn px-lg-5 px-sm-4 px-2">
                  Add Friend
                </button>
              </div>
            </div>
            <div class="row align-items-center mb-3">
              <div class="col-7">
                <div class="d-flex align-items-center user-profile-like">
                  <div class="user-image-like mr-2 mr-sm-4">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="">
                    </figure>
                    <i class="fas fa-thumbs-up"></i>
                  </div>
                  <h5>Mark Carson</h5>
                </div>
              </div>
              <div class="col-5 text-right">
                <button class="post-btn px-lg-5 px-sm-4 px-2">
                  Add Friend
                </button>
              </div>
            </div>
            <div class="row align-items-center mb-3">
              <div class="col-7">
                <div class="d-flex align-items-center user-profile-like">
                  <div class="user-image-like mr-2 mr-sm-4">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="">
                    </figure>
                    <i class="fas fa-thumbs-up"></i>
                  </div>
                  <h5>Mark Carson</h5>
                </div>
              </div>
              <div class="col-5 text-right">
                <button class="post-btn px-lg-5 px-sm-4 px-2">
                  Message
                </button>
              </div>
            </div>
            <div class="row align-items-center mb-3">
              <div class="col-7">
                <div class="d-flex align-items-center user-profile-like">
                  <div class="user-image-like mr-2 mr-sm-4">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="">
                    </figure>
                    <i class="fas fa-thumbs-up"></i>
                  </div>
                  <h5>Mark Carson</h5>
                </div>
              </div>
              <div class="col-5 text-right">
                <button class="post-btn px-lg-5 px-sm-4 px-2">
                  Message
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- post share -->

<div class="modal fade" id="post-share" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-4 px-2 px-sm-4">
        <h3 class="b-b-y text-left pb-3 mb-4 pl-3">People Who Shared This</h3>
        <div class="row align-items-center mb-3 px-2 px-sm-4">
          <div class="col-7">
            <div class="d-flex align-items-center user-profile-like">
              <div class="user-image-like mr-2 mr-sm-4">
                <figure>
                  <img src="assets/img/user-profile-img.png" alt="">
                </figure>
              </div>
              <h5>Mark Carson</h5>
            </div>
          </div>
          <div class="col-5 text-right">
            <p class="share-time"><time>01 secs ago</time></p>
          </div>
        </div>
        <div class="row align-items-center mb-3 px-2 px-sm-4">
          <div class="col-7">
            <div class="d-flex align-items-center user-profile-like">
              <div class="user-image-like mr-2 mr-sm-4">
                <figure>
                  <img src="assets/img/user-profile-img.png" alt="">
                </figure>
              </div>
              <h5>Mark Carson</h5>
            </div>
          </div>
          <div class="col-5 text-right">
            <p class="share-time"><time>01 secs ago</time></p>
          </div>
        </div>
        <div class="row align-items-center mb-3 px-2 px-sm-4">
          <div class="col-7">
            <div class="d-flex align-items-center user-profile-like">
              <div class="user-image-like mr-2 mr-sm-4">
                <figure>
                  <img src="assets/img/user-profile-img.png" alt="">
                </figure>
              </div>
              <h5>Mark Carson</h5>
            </div>
          </div>
          <div class="col-5 text-right">
            <p class="share-time"><time>01 secs ago</time></p>
          </div>
        </div>
        <div class="row align-items-center mb-3 px-2 px-sm-4">
          <div class="col-7">
            <div class="d-flex align-items-center user-profile-like">
              <div class="user-image-like mr-2 mr-sm-4">
                <figure>
                  <img src="assets/img/user-profile-img.png" alt="">
                </figure>
              </div>
              <h5>Mark Carson</h5>
            </div>
          </div>
          <div class="col-5 text-right">
            <p class="share-time"><time>01 secs ago</time></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- create post modal -->

<div class="modal fade" id="create-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body p-2 p-sm-4 text-left">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="pl-4 mb-2 pb-3 text-left b-b-y">Create Post</h3>
            <div class="user-post-main bg-0 p-0">
              <div class="p-0 px-2 px-sm-3 d-flex">
                <!-- profile picture and id name  -->

                <div class="prfle-pic-dtl">
                  <div class="prfle-pic">
                    <figure>
                      <img src="assets/img/user-profile-img.png" alt="profile picture">
                    </figure>
                  </div>
                  <div class="user-prfle-title">
                    <h4 class="mt-1">Sammy Aiden</h4>
                    <button type="button" class="mt-1 audience-btn" data-target="#post-audience" data-toggle="modal" data-dismiss="modal">
                      <i class="far fa-globe-africa mr-1"></i>Public<i class="far fa-chevron-down ml-1"></i>
                    </button>
                  </div>
                </div>

                <!-- profile picture and id name  -->

              </div>
              <div class="post-content-textarea">
                <textarea placeholder="What's on your mind, Sammy?"></textarea>
              </div>
              <hr>
              <div class="user-comment-box-detail d-sm-flex mt-3 px-sm-3">
                <div class="d-flex flex-grow-1 align-items-center add-post-parent">
                  <h4 class="add-post-text mr-2 mr-lg-3">Add To Your Post</h4>
                  <button class="picture-video mr-2 mr-lg-3">
                    <input type="file">
                    <i class="far fa-camera"></i>
                    Pictures
                  </button>
                  <button class="picture-video">
                    <input type="file">
                    <i class="fal fa-video"></i>
                    Video
                  </button>
                </div>
                <div class="text-right mt-3 mt-sm-0">
                  <button type="button" class="post-btn" data-dismiss="modal" data-toggle="modal" data-target="#create-post2">
                    Post
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- post audience modal -->

<div class="modal fade" id="post-audience" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-3 px-4">
        <h3 class="mt-3 mb-2 text-left d-flex post-audience-btn">
          <button type="button" class="mr-2" data-dismiss="modal" data-target="#create-post" data-toggle="modal">
            <i class="fas fa-chevron-left"></i>
          </button> Post Audience
        </h3>
        <form action="" class="b-t-y pt-3">
          <div class="post-audience-slct mb-3">
            <input type="radio" id="public" name="audience_select" value="public">
            <i class="fas fa-globe-europe"></i>
            <label for="public">
              <h4>Public</h4>
              <p>Anyone on One More Moment</p>
            </label>
          </div>
          <div class="post-audience-slct mb-3">
            <input type="radio" id="friends" name="audience_select" value="friends">
            <i class="fas fa-users"></i>
            <label for="friends">
              <h4>Friends</h4>
              <p>Your friends on One More Moment</p>
            </label>
          </div>
          <div class="post-audience-slct mb-3">
            <input type="radio" id="onlyMe" name="audience_select" value="onlyMe">
            <i class="fas fa-lock"></i>
            <label for="onlyMe">
              <h4>Only Me</h4>
            </label>
          </div>
        </form>
        <hr>
        <div class="text-right my-2 mt-sm-0">
          <button type="button" class="post-btn" data-dismiss="modal" data-target="#create-post" data-toggle="modal">
            Submit
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- create post modal -->

<div class="modal fade" id="create-post2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body p-2 p-sm-4 text-left">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="pl-4 mb-2 pb-3 text-left b-b-y">Create Post</h3>
            <div class="user-post-main bg-0 p-0">
              <div class="user-post-scroll" data-scrollbar>
                <div class="p-0 px-2 px-sm-3 d-flex">
                  <!-- profile picture and id name  -->

                  <div class="prfle-pic-dtl">
                    <div class="prfle-pic">
                      <figure>
                        <img src="assets/img/user-profile-img.png" alt="profile picture">
                      </figure>
                    </div>
                    <div class="user-prfle-title">
                      <h4 class="mt-1">Sammy Aiden</h4>
                      <button type="button" class="mt-1 audience-btn" data-target="#post-audience" data-toggle="modal" data-dismiss="modal">
                        <i class="far fa-globe-africa mr-1"></i>Public<i class="far fa-chevron-down ml-1"></i>
                      </button>
                    </div>
                  </div>

                  <!-- profile picture and id name  -->

                </div>
                <p class="about-post px-4 mb-3 mt-2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                  laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin
                  sodales pulvinar sic tempor.
                </p>
                <div class="post-image-main position-relative">
                  <a href="#_" class="edit-all-btn" data-toggle="modal" data-target="#edit-post" data-dismiss="modal"><i class="fas fa-edit"></i>Edit All</a>
                  <button class="cross-remove-btn"><i class="fas fa-times-circle"></i></button>
                  <figure>
                    <img src="assets/img/post-img1.png" alt="Clothes Images" class="img-fluid w-100">
                  </figure>
                </div>
                <div class="row no-gutters">
                  <div class="col-sm-6 pr-1">
                    <div class="post-image-main position-relative">
                      <button class="cross-remove-btn"><i class="fas fa-times-circle"></i></button>
                      <figure>
                        <img src="assets/img/post-img1.png" alt="Clothes Images" class="img-fluid w-100">
                      </figure>
                    </div>
                  </div>
                  <div class="col-sm-6 pl-1 mb-1 mb-sm-0">
                    <div class="img-post post-video-main position-relative video-post ">
                      <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                      <video poster="assets/img/post-video1.png" preload="auto">
                        <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                      </video>
                    </div>
                  </div>
                </div>
                <div class="row no-gutters">
                  <div class="col-sm-4 pr-1">
                    <div class="post-image-main position-relative">
                      <button class="cross-remove-btn"><i class="fas fa-times-circle"></i></button>
                      <figure>
                        <img src="assets/img/post-img1.png" alt="Clothes Images" class="img-fluid w-100">
                      </figure>
                    </div>
                  </div>
                  <div class="col-sm-4 pl-1 mb-1 mb-sm-0">
                    <div class="img-post post-video-main position-relative video-post ">
                      <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                      <video poster="assets/img/post-video1.png" preload="auto">
                        <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                      </video>
                    </div>
                  </div>
                  <div class="col-sm-4 pl-1">
                    <div class="img-post post-video-main position-relative video-post ">
                      <!-- <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button> -->
                      <video poster="assets/img/post-video1.png" preload="auto">
                        <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                      </video>
                      <div class="overlay"></div>
                      <h2 class="quantity">02+</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="user-comment-box-detail d-sm-flex mt-3">
                <div class="d-flex flex-grow-1 align-items-center">
                  <h4 class="add-post-text mr-2 mr-sm-3">Add To Your Post</h4>
                  <button class="picture-video mr-2 mr-sm-3">
                    <input type="file">
                    <i class="far fa-camera"></i>
                    Pictures
                  </button>
                  <button class="picture-video">
                    <input type="file">
                    <i class="fal fa-video"></i>
                    Video
                  </button>
                </div>
                <div class="text-right mt-3 mt-sm-0">
                  <button type="button" class="post-btn" data-dismiss="modal">
                    Post
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit post modal -->

<div class="modal fade" id="edit-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body p-2 p-sm-4 text-left">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="pl-4 mb-2 pb-3 text-left b-b-y">Create Post</h3>
            <div class="user-post-main bg-0 p-0">
              <div class="user-post-scroll" data-scrollbar>
                <div class="p-0 px-2 px-sm-3 d-flex">
                  <!-- profile picture and id name  -->

                  <div class="prfle-pic-dtl">
                    <div class="prfle-pic">
                      <figure>
                        <img src="assets/img/user-profile-img.png" alt="profile picture">
                      </figure>
                    </div>
                    <div class="user-prfle-title">
                      <h4 class="mt-1">Sammy Aiden</h4>
                      <button type="button" class="mt-1 audience-btn" data-target="#post-audience" data-toggle="modal" data-dismiss="modal">
                        <i class="far fa-globe-africa mr-1"></i>Public<i class="far fa-chevron-down ml-1"></i>
                      </button>
                    </div>
                  </div>

                  <!-- profile picture and id name  -->

                </div>
                <p class="about-post px-4 mb-3 mt-2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                  laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin
                  sodales pulvinar sic tempor.
                </p>
                <div class="post-image-main position-relative">
                  <button class="cross-remove-btn"><i class="fas fa-times-circle"></i></button>
                  <figure>
                    <img src="assets/img/post-img1.png" alt="Clothes Images" class="img-fluid w-100">
                  </figure>
                </div>
                <div class="post-image-main post-video-main position-relative video-post ">
                  <button class="cross-remove-btn"><i class="fas fa-times-circle"></i></button>
                  <button type="button" class="video-btn-border" onclick="playVid($(this))"><i class="fa fa-play" aria-hidden="true"></i></button>
                  <video poster="assets/img/post-video1.png" preload="auto">
                    <source src="assets/img/mov_bbb.mp4" type="video/mp4">
                  </video>
                </div>
                <div class="post-image-main position-relative mt-1">
                  <button class="cross-remove-btn"><i class="fas fa-times-circle"></i></button>
                  <figure>
                    <img src="assets/img/post-img1.png" alt="Clothes Images" class="img-fluid w-100">
                  </figure>
                </div>
              </div>
              <div class="user-comment-box-detail d-sm-flex mt-3">
                <div class="d-flex flex-grow-1 align-items-center">
                  <h4 class="add-post-text mr-2 mr-sm-3">Add To Your Post</h4>
                  <button class="picture-video mr-2 mr-sm-3">
                    <input type="file">
                    <i class="far fa-camera"></i>
                    Pictures
                  </button>
                  <button class="picture-video">
                    <input type="file">
                    <i class="fal fa-video"></i>
                    Video
                  </button>
                </div>
                <div class="text-right mt-3 mt-sm-0">
                  <button type="button" class="post-btn" data-dismiss="modal">
                    Done
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- qr link modal -->

<div class="modal fade" id="qr-code-link" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body px-2 px-sm-3 px-xl-5 py-3 py-sm-4 py-md-5 text-left">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="pl-4 mb-2 pb-3 text-left b-b-y">Referral Link</h3>
            <div class="qr-code mx-auto my-5">
              <img src="assets/img/qr-code.png" alt="qr code" class="w-100">
            </div>
            <p class="qr-link-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean </p>
            <div class="qr-link-area">
              <input type="text" placeholder="www.xyz.com">
            </div>
            <a href="#_" class="qr-share-link mt-3 mr-3"><i class="fas fa-share"></i>Share</a>
            <div class="qrcode-other-options mt-3">
              <div class="img mr-4">
                <a href="#_">
                  <img src="assets/img/whatsapp.png" alt="whatsapp">
                </a>
              </div>
              <div class="img mr-4">
                <a href="#_">
                  <img src="assets/img/instagram.png" alt="instagram">
                </a>
              </div>
              <div class="img mr-4">
                <a href="#_">
                  <img src="assets/img/wechat.png" alt="wechat">
                </a>
              </div>
              <div class="img mr-4">
                <a href="#_">
                  <img src="assets/img/snapchat.png" alt="snapchat">
                </a>
              </div>
              <div class="img">
                <a href="#_">
                  <img src="assets/img/twitter.png" alt="twitter">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="update-pass-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-5">
        <img src="assets/img/tick.png" class="warning-img" alt="">
        <h3 class="mt-3 mb-4">Password Has Been Updated Successfully</h3>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="update-profile-m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-5">
        <img src="assets/img/tick.png" class="warning-img" alt="">
        <h3 class="mt-3 mb-4">Profile Has Been Updated Successfully</h3>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="unfriend-people" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body py-4">
        <img src="assets/img/warning.png" class="warning-img" alt="">
        <h3 class="mt-3 mb-4">Are You Sure You Want To<br>Unfriend Daniel Jacob?</h3>
        <div class="modal-btn pb-2">
          <a href="#_" class="brown-btn" data-dismiss="modal">Yes</a>
          <a href="#_" class="yellow-btn" data-dismiss="modal">No</a>
        </div>
      </div>
    </div>
  </div>
</div>






<?php include 'footer.php'; ?>






<script>
  $('.owl-carousel').owlCarousel({
    loop: false,
    items: 1,
    margin: 10,
    dots: false,
    responsiveClass: true,
    responsive: {
      575: {
        nav: true,
      }
    }
  })
</script>