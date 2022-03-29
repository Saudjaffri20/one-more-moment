Scrollbar.initAll();

$(document).ready(function() {
    $('.shop-link').mouseenter(function() {
        $('.shopdropdown').addClass('toggled');
    });
    $('.shop-link').mouseleave(function() {
        $('.shopdropdown').removeClass('toggled');
    });
})


$("#toggle-icon").click(function() {
        $('.toggle-menu').toggleClass('toggled');
        
    });


$('.video-btn-border').click(function() {
    $(this).next('video').prop('controls', 'true');
});

function playVid(e) {
    e.next()[0].play();
    e.css("display", "none")
}

$('.banner-slider').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    dots: false,
    nav: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        }
    }
})

$('.browse-popular-category').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    responsiveClass: true,
    stagePadding: 10,
    dots: false,
    nav: true,
    responsive: {
        500: {
            items: 2,
        },
        768: {
            items: 3,
            margin: 20,
        },
        992: {
            items: 4,
            nav: true,
            margin: 30,
        }
    }
})

$('.testimonials-slider').owlCarousel({
    loop: true,
    margin: 20,
    items: 1,
    responsiveClass: true,
    stagePadding: 10,
    dots: false,
    nav: true,
    responsive: {
        768: {
            items: 2,
            nav: true
        },
        992: {
            items: 3,
            nav: true,
            margin: 20,
        }
    }
})

$('.more-category').owlCarousel({
    loop: true,
    margin: 20,
    items: 1,
    responsiveClass: true,
    stagePadding: 10,
    dots: true,
    nav: false,
    responsive: {
        500: {
            items: 2,
        },
        768: {
            items: 3,
        },
        992: {
            items: 4,
            margin: 20,
        }
    }
})

$(".js-range-slider").ionRangeSlider({
    type: "double",
    min: 0,
    max: 100,
});

// Main/Product image slider for product page
$('#detail .main-img-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    fade: true,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 300,
    lazyLoad: 'ondemand',
    asNavFor: '.thumb-nav',
});
// Thumbnail/alternates slider for product page
$('.thumb-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    centerPadding: '0px',
    asNavFor: '.main-img-slider',
    dots: false,
    centerMode: false,
    draggable: true,
    speed: 200,
    focusOnSelect: true,
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 400,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
});


//keeps thumbnails active when changing main image, via mouse/touch drag/swipe
$('.main-img-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
    //remove all active class
    $('.thumb-nav .slick-slide').removeClass('slick-current');
    //set active class for current slide
    $('.thumb-nav .slick-slide:not(.slick-cloned)').eq(currentSlide).addClass('slick-current');
});

$(".pswd-i-1").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $(".pswd-1");
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

$(".pswd-i-2").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $(".pswd-2");
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

$(document).ready(function() {

    var aboutTxt = Array.from(document.querySelectorAll('.about-txt'));
    var passAbout = Array.from(document.querySelectorAll('.pass-about'));
    $('.show-hide-field').css('display', 'none');
    // document.querySelector('.updte-btn').style.display = "none";
    // document.querySelector('.save-changes-btn').style.display = "none";

    // console.log(passAbout);

    $('#change-pass').click(function() {

        let chngeBtn = document.querySelector('#change-pass');
        aboutTxt[0].innerHTML = "Existing Password<span>*</span>:";
        aboutTxt[1].innerHTML = `New Password<span>*</span>:`;
        passAbout[0].setAttribute("placeholder", "Enter Existing Password");
        passAbout[1].setAttribute("placeholder", "Enter New Password");
        $('.pass-about').attr("disabled", false);
        $('.fa-eye-slash').css('display', 'block');
        $('.show-hide-field').css('display', 'flex');
        chngeBtn.innerHTML = "Update";
        $('.edit-profile-btn').css("display", 'none');
        setTimeout(() => { 
            $(this).attr("data-target","#update-pass-m");
            $(this).attr("data-toggle","modal");
        }, 200);

        // console.log($(this).innerHTML = "Update");
        // $('.edit-remove-btn').css("display", 'none');
        // $('.chnge-pass-btn').css("display", 'none');
        // $('.updte-btn').css("display", 'block');
        // $(this).innerHTML = "Update";
        // $(this).attr("data-target","#change-pass");
        // $(this).attr("data-toggle","modal");
        // console.log(this.innerHTML = "Update");

        $('i').click(function(){  
            
            var checkedInput = document.querySelectorAll('.pass-about');

            // console.log(checkedInput)
            
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
            $(this).prev().attr('type', 'text');
            // if(){
            // }

            // else{
            //     $(this).removeClass('fa-eye');
            //     $(this).addClass('fa-eye-slash');
            //     console.log(this)
            //     console.log($(this).prev().val())
            // }

        })

    });

    $('#edit-btn').click(function() {

        let saveBtn = document.querySelector('#edit-btn');
        
        passAbout[0].setAttribute("placeholder", "Mark Carson");
        $(passAbout[0]).attr("disabled", false);
        $(passAbout[0]).attr("type", 'text');
        $('.chnge-pass-btn').css("display", 'none');
        $('.edit-profile-btn').addClass("offset-md-4");
        saveBtn.innerHTML = "Save Changes";
        setTimeout(() => { 
            $(this).attr("data-target","#update-profile-m");
            $(this).attr("data-toggle","modal");
        }, 200);
        // chngeBtn.innerHTML = "Update";
        // $(this).innerHTML = "Save Changes";
        // console.log(this.innerHTML = "Save Changes");
    });
    
    
    
    
    document.querySelector('.add-frnd-top').style.display = "none";

    $('.view-profile-tab').click(function(){

        $('.tab-title').removeClass('active');
        $('#home-action').addClass('active');
        $('.tab-content').removeClass('show');
        $('.tab-content-action').addClass('show');
        var btn = $('.add-frnd-top').css('display', 'block');

        // console.log((this).text);

        $('.user-profile-name').text((this).text);

    });

    // $('.add-btn').click(function(){
    //     if(btn === true){
            
    //     }
    // })

  });




  $(document).ready(function(){
    $('.tab-title').on('click',function(){
        var tabTitle = $(this).attr('data-title');

        $('.tab-title').removeClass('active');
        $(this).addClass('active');

        $('.tab-content').removeClass('show');
        $('#'+tabTitle).addClass('show');
    });
});