<!-- === Section Footer-Background Images === -->
<section class="footer">
    <!-- === Section Footer_main === -->
    <div class="footer-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-3">
                    <a class="footer-logo" href="#">
                        <img class="img-fluid" src="../Pool/images/logo.svg" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-9">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link White active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link White" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link White" href="#">Plans &amp; pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link White" href="#">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link White" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link White" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-12 col-md-6">
                    <p class="footer-text m-0">Made by software and pool industry pros</p>
                    <p class="footer-text m-0">in<img class="img-fluid" src="images/sun.svg" alt="Sun Icon"> sunny Florida
                    </p>
                </div>
                <div class="col-12 col-md-6 justify-content-end d-flex">
                    <img class="img-fluid" src="images/facebook.svg" alt="Facebook Icon">
                    <img class="img-fluid ms-3" src="images/insta.svg" alt="Facebook Icon">
                </div>
            </div>
            <div class="row pt-5 align-items-center">
                <div class="col-12 col-md-5">
                    <p class="footer-text m-0">Copyright (c) 2021 Pool Service Software, LLC. All rights reserved.
                    </p>
                </div>
                <div class="col-12 col-md-7">
                    <ul class="navbar-nav justify-content-start">
                        <li class="nav-item">
                            <a class="nav-link White active" aria-current="page" href="#">Privacy Notice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link White active" aria-current="page" href="#">Term of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== Bootstrap.JS === -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!-- ==== JQuery.JS === -->
<script src="js/jquery.min.js"></script>
<!-- ==== Silk.JS === -->
<script src="js/slick.js"></script>
<!-- ==== Script For APP_Slider === -->
<script>
    if ($(".js-slider").length) {
        $(function() {

            $(".js-slider-item").each(function() {
                $(this).attr("data-item", $(this).index());
            });

            $(".js-slider-item[data-item=0]").addClass("active-1");
            $(".js-slider-item[data-item=1]").addClass("active-2");
            $(".js-slider-item[data-item=2]").addClass("active-3");
            $(".js-slider-item[data-item=3]").addClass("active-4");
            $(".js-slider-item[data-item=4]").addClass("active-5");

            function sliderInit(slider, arrows) {
                slider.slick({
                    dots: true,
                    arrows: true,
                    infinite: true,
                    autoplay: true,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    touchThreshold: 200,
                    speed: 1000,
                    swipeToSlide: true,
                    center: true,
                    appendArrows: arrows
                });
            }

            function newsInit(slider, arrows) {
                slider.slick({
                    dots: true,
                    arrows: true,
                    infinite: true,
                    autoplay: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    touchThreshold: 200,
                    speed: 1000,
                    swipeToSlide: true,
                    center: true,
                    appendArrows: arrows,
                    adaptiveHeight: true,
                    responsive: [{
                        breakpoint: 1101,
                        settings: {
                            slidesToShow: 2
                        }
                    }, {
                        breakpoint: 701,
                        settings: {
                            slidesToShow: 1
                        }
                    }],
                });
            }

            setTimeout(function() {
                $(".js-slider-list").on("init", function() {
                    $(".js-slider-loader").removeClass("loaded");
                });

                $(".js-slider-list").each(function() {
                    var $this = $(this),
                        $arrows = $this
                        .closest(".js-slider")
                        .find(".js-slider-arrows");
                    if ($(this).hasClass("js-slider-news")) {
                        newsInit($this, $arrows);
                    } else {
                        sliderInit($this, $arrows);
                    }
                });

                $(".js-slider-list").on("beforeChange", function(
                    event,
                    slick,
                    currentSlide,
                    nextSlide
                ) {
                    $(this).find(".js-slider-item").removeClass("active-1 active-2 active-3 active-4 active-5");
                    $(this).find(".js-slider-item[data-item=" + nextSlide + "]").addClass("active-1").removeClass("active-2 active-3 active-4 active-5");
                    var slickSlideNext1 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                    var slickSlideNext2 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                    var slickSlideNext3 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").next(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                    var slickSlideNext4 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").next(".slick-slide").next(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                    $(this).find(".js-slider-item[data-item=" + slickSlideNext2 + "]").addClass("active-3");
                    $(this).find(".js-slider-item[data-item=" + slickSlideNext1 + "]").addClass("active-2");
                    $(this).find(".js-slider-item[data-item=" + slickSlideNext3 + "]").addClass("active-4");
                    $(this).find(".js-slider-item[data-item=" + slickSlideNext4 + "]").addClass("active-5");
                });
            }, 500);

        });
    }
</script>
<!-- ==== Script For Sticky Header === -->
<script>

    window.onscroll = function() {
        myFunction()
    };
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
    
</script>

</body>

</html>