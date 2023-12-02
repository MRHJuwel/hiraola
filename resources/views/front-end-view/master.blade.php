<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/hiraola/hiraola/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Aug 2023 13:18:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front-assets')}}/assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/font-awesome.min.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/ionicons.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/slick.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/nice-select.min.css">
    <!-- Timecircles -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/timecircles.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/style.css">
    <!-- <link rel="stylesheet" href="{{asset('front-assets')}}/assets/css/style.min.css"> -->

</head>

<body class="template-color-1">

<div class="main-wrapper">
    <!-- Begin Hiraola's Newsletter Popup Area -->
{{--    <div class="popup_wrapper">--}}
{{--        <div class="test">--}}
{{--            <span class="popup_off"><i class="ion-android-close"></i></span>--}}
{{--            <div class="subscribe_area">--}}
{{--                <h2>Sign Up Newsletter</h2>--}}
{{--                <p>Subscribe to the our store mailing list to receive updates on new arrivals, special offers and other--}}
{{--                    discount information.</p>--}}
{{--                <div class="subscribe-form-group">--}}
{{--                    <form class="subscribe-form" action="#">--}}
{{--                        <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">--}}
{{--                        <button type="submit">subscribe</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="subscribe-bottom">--}}
{{--                    <input type="checkbox" id="newsletter-permission">--}}
{{--                    <label for="newsletter-permission">Don't show this popup again</label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Hiraola's Newsletter Popup Area Here -->

    <!-- Begin Hiraola's Header Main Area -->
@include('front-end-view.home.include.header')
    <!-- Hiraola's Header Main Area End Here -->

  @yield('content')

    <!-- Begin Hiraola's Footer Area -->
   @include('front-end-view.home.include.footer')
    <!-- Hiraola's Footer Area End Here -->
    <!-- Begin Hiraola's Modal Area -->
    <div class="modal fade modal-wrapper" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area sp-area row">
                        <div class="col-lg-5 col-md-5">
                            <div class="sp-img_area">
                                <div class="sp-img_slider-2 slick-img-slider hiraola-slick-slider arrow-type-two" data-slick-options='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".sp-img_slider-nav"
                                }'>
                                    <div class="single-slide red">
                                        <img src="{{asset('front-assets')}}/assets/images/single-product/large-size/1.jpg" alt="Hiraola's Product Image">
                                    </div>
                                    <div class="single-slide orange">
                                        <img src="{{asset('front-assets')}}/assets/images/single-product/large-size/2.jpg" alt="Hiraola's Product Image">
                                    </div>
                                    <div class="single-slide brown">
                                        <img src="{{asset('front-assets')}}/assets/images/single-product/large-size/3.jpg" alt="Hiraola's Product Image">
                                    </div>
                                    <div class="single-slide umber">
                                        <img src="{{asset('front-assets')}}/assets/images/single-product/large-size/4.jpg" alt="Hiraola's Product Image">
                                    </div>
                                </div>
                                <div class="sp-img_slider-nav slick-slider-nav hiraola-slick-slider arrow-type-two" data-slick-options='{
                                   "slidesToShow": 4,
                                    "asNavFor": ".sp-img_slider-2",
                                   "focusOnSelect": true
                                  }' data-slick-responsive='[
                                        {"breakpoint":1201, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":577, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":481, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":321, "settings": {"slidesToShow": 2}}
                                    ]'>
                                    <div class="single-slide red">
                                        <img src="{{asset('front-assets')}}/assets/images/single-product/small-size/1.jpg" alt="Hiraola's Product Thumnail">
                                    </div>
                                    <div class="single-slide orange">
                                        <img src="{{asset('front-assets')}}/assets/images/single-product/small-size/2.jpg" alt="Hiraola's Product Thumnail">
                                    </div>
                                    <div class="single-slide brown">
                                        <img src="{{asset('front-assets')}}/assets/images/single-product/small-size/3.jpg" alt="Hiraola's Product Thumnail">
                                    </div>
                                    <div class="single-slide umber">
                                        <img src="{{asset('front-assets')}}/assets/images/single-product/small-size/4.jpg" alt="Hiraola's Product Thumnail">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6">
                            <div class="sp-content">
                                <div class="sp-heading">
                                    <h5><a href="#">Light Inverted Pendant Quis Justo Condimentum</a></h5>
                                </div>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                    </ul>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£82.84</span>
                                    <span class="old-price">£93.68</span>
                                </div>
                                <div class="essential_stuff">
                                    <ul>
                                        <li>EX Tax:<span>£453.35</span></li>
                                        <li>Price in reward points:<span>400</span></li>
                                    </ul>
                                </div>
                                <div class="list-item">
                                    <ul>
                                        <li>10 or more £81.03</li>
                                        <li>20 or more £71.09</li>
                                        <li>30 or more £61.15</li>
                                    </ul>
                                </div>
                                <div class="list-item last-child">
                                    <ul>
                                        <li>Brand<a href="javascript:void(0)">Buxton</a></li>
                                        <li>Product Code: Product 15</li>
                                        <li>Reward Points: 100</li>
                                        <li>Availability: In Stock</li>
                                    </ul>
                                </div>
                                <div class="color-list_area">
                                    <div class="color-list_heading">
                                        <h4>Available Options</h4>
                                    </div>
                                    <span class="sub-title">Color</span>
                                    <div class="color-list">
                                        <a href="javascript:void(0)" class="single-color active" data-swatch-color="red">
                                            <span class="bg-red_color"></span>
                                            <span class="color-text">Red (+£3.61)</span>
                                        </a>
                                        <a href="javascript:void(0)" class="single-color" data-swatch-color="orange">
                                            <span class="burnt-orange_color"></span>
                                            <span class="color-text">Orange (+£2.71)</span>
                                        </a>
                                        <a href="javascript:void(0)" class="single-color" data-swatch-color="brown">
                                            <span class="brown_color"></span>
                                            <span class="color-text">Brown (+£0.90)</span>
                                        </a>
                                        <a href="javascript:void(0)" class="single-color" data-swatch-color="umber">
                                            <span class="raw-umber_color"></span>
                                            <span class="color-text">Umber (+£1.81)</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <label>Quantity</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>
                                <div class="hiraola-group_btn">
                                    <ul>
                                        <li><a href="cart.html" class="add-to_cart">Cart To Cart</a></li>
                                        <li><a href="cart.html"><i class="ion-android-favorite-outline"></i></a></li>
                                        <li><a href="cart.html"><i class="ion-ios-shuffle-strong"></i></a></li>
                                    </ul>
                                </div>
                                <div class="hiraola-tag-line">
                                    <h6>Tags:</h6>
                                    <a href="javascript:void(0)">Ring</a>,
                                    <a href="javascript:void(0)">Necklaces</a>,
                                    <a href="javascript:void(0)">Braid</a>
                                </div>
                                <div class="hiraola-social_link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">
                                                <i class="fab fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Modal Area End Here -->

</div>

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('front-assets')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{asset('front-assets')}}/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<!-- Modernizer JS -->
<script src="{{asset('front-assets')}}/assets/js/vendor/modernizr-3.11.2.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('front-assets')}}/assets/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Slick Slider JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/slick.min.js"></script>
<!-- Countdown JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/countdown.min.js"></script>
<!-- Barrating JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/jquery.barrating.min.js"></script>
<!-- Counterup JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script src="{{asset('front-assets')}}/assets/js/plugins/waypoints.min.js"></script>
<!-- Nice Select JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/jquery.nice-select.min.js"></script>
<!-- Sticky Sidebar JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/jquery.sticky-sidebar.js"></script>
<!-- Jquery-ui JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/jquery-ui.min.js"></script>
<!-- Scroll Top JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/scroll-top.min.js"></script>
<!-- Theia Sticky Sidebar JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/theia-sticky-sidebar.min.js"></script>
<!-- ElevateZoom JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/jquery.elevateZoom-3.0.8.min.js"></script>
<!-- Timecircles JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/timecircles.min.js"></script>
<!-- Mailchimp Ajax JS -->
<script src="{{asset('front-assets')}}/assets/js/plugins/mailchimp-ajax.js"></script>

<!-- Main JS -->
<script src="{{asset('front-assets')}}/assets/js/main.js"></script>
 <script src="{{asset('front-assets')}}/assets/js/main.min.js"></script>

</body>


<!-- Mirrored from htmldemo.net/hiraola/hiraola/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Aug 2023 13:19:44 GMT -->
</html>
