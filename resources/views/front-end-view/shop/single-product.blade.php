@extends('front-end-view.master')
@section('title','Single-Product')
@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Single Product Type</h2>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Single Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->

    <!-- Begin Hiraola's Single Product Area -->
    <div class="sp-area">
        <div class="container">
            <div class="sp-nav">
                <div class="row">
                    @foreach($shops as $shop)
                    <div class="col-lg-5 col-md-5">
                        <div class="sp-img_area">
                            <div class="zoompro-border">
                                <img class="zoompro" src="{{asset($shop->image)}}" data-zoom-image="{{asset('front-assets')}}/assets/images/single-product/large-size/1.jpg" alt="Hiraola's Product Image" />
                            </div>
                            <div id="gallery" class="sp-img_slider">
                                <a class="active" data-image="{{asset($shop->image2)}}" data-zoom-image="{{asset('front-assets')}}/assets/images/single-product/large-size/1.jpg">
                                    <img src="{{asset($shop->image2)}}" alt="Hiraola's Product Image">
                                </a>
                                <a data-image="{{asset('front-assets')}}/assets/images/single-product/large-size/2.jpg" data-zoom-image="{{asset('front-assets')}}/assets/images/single-product/large-size/2.jpg">
                                    <img src="{{asset('front-assets')}}/assets/images/single-product/small-size/2.jpg" alt="Hiraola's Product Image">
                                </a>
                                <a data-image="{{asset('front-assets')}}/assets/images/single-product/large-size/3.jpg" data-zoom-image="{{asset('front-assets')}}/assets/images/single-product/large-size/3.jpg">
                                    <img src="{{asset('front-assets')}}/assets/images/single-product/small-size/3.jpg" alt="Hiraola's Product Image">
                                </a>
                                <a data-image="{{asset('front-assets')}}/assets/images/single-product/large-size/4.jpg" data-zoom-image="{{asset('front-assets')}}/assets/images/single-product/large-size/4.jpg">
                                    <img src="{{asset('front-assets')}}/assets/images/single-product/small-size/4.jpg" alt="Hiraola's Product Image">
                                </a>
                                <a data-image="{{asset('front-assets')}}/assets/images/single-product/large-size/5.jpg" data-zoom-image="{{asset('front-assets')}}/assets/images/single-product/large-size/5.jpg">
                                    <img src="{{asset('front-assets')}}/assets/images/single-product/small-size/5.jpg" alt="Hiraola's Product Image">
                                </a>
                                <a data-image="{{asset('front-assets')}}/assets/images/single-product/large-size/6.jpg" data-zoom-image="{{asset('front-assets')}}/assets/images/single-product/large-size/6.jpg">
                                    <img src="{{asset('front-assets')}}/assets/images/single-product/small-size/6.jpg" alt="Hiraola's Product Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="sp-content">
                            <div class="sp-heading">
                                <h5>{{$shop->name}}</h5>
                            </div>
                            <span class="reference">Reference: {{$shop->reerence}}</span>
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star-of-david"></i></li>
                                    <li><i class="fa fa-star-of-david"></i></li>
                                    <li><i class="fa fa-star-of-david"></i></li>
                                    <li><i class="fa fa-star-of-david"></i></li>
                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                </ul>
                            </div>
                            <div class="sp-essential_stuff">
                                <ul>
                                    <li>EX Tax:  <a href="javascript:void(0)"><span>{{$shop->ex_tax}}</span></a></li>
                                    <li>Brands <a href="javascript:void(0)">{{$shop->brand}}</a></li>
                                    <li>Product Code: <a href="javascript:void(0)">{{$shop->product_code}}</a></li>
                                    <li>Reward Points: <a href="javascript:void(0)">{{$shop->reward_point}}</a></li>
                                    <li>Availability: <a href="javascript:void(0)">@php if ($shop->in_stock !=0) {echo $shop->in_stock; } else {echo 'Out of Stock';} @endphp</a></li>
                                </ul>
                            </div>
                            <div class="product-size_box">
                                <span>Size</span>
                                <select class="myniceselect nice-select">
                                    <option value="1">S</option>
                                    <option value="2">M</option>
                                    <option value="3">L</option>
                                    <option value="4">XL</option>
                                </select>
                            </div>
                            <div class="quantity">
                                <label>Quantity</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                </div>
                            </div>
                            <div class="qty-btn_area">
                                <ul>
{{--                                    <li><a class="qty-cart_btn" href="{{route('cardUpdates.index','id')}}">Add To Cart</a></li>--}}
                                    @if(\Illuminate\Support\Facades\Session::get('visitorId'))
                                        {{--                                                <li><a class="hiraola-add_cart" href="{{route('shop.to.card',$shop->id)}}" onclick="event.preventDefault();document.getElementById('myCard').submit()" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>--}}
                                        <form action="{{route('cardUpdates.store')}}" method="post" enctype="multipart/form-data" id="myCard">
                                            @csrf
                                            @method('post')

                                            <input type="hidden" name="image" value="{{$shop->image}}">
                                            <input type="hidden" name="name" value="{{$shop->name}}">
                                            <input type="hidden" name="productId" value="{{$shop->id}}">
                                            <input type="hidden" name="ex_tax" value="{{$shop->ex_tax}}">
                                            <input type="hidden" name="totals" value="{{$shop->ex_tax}}">
                                            <input type="hidden" name="userId" value="{{\Illuminate\Support\Facades\Session::get('visitorId')}}">
                                            <input type="submit" class=" btn btn-success" value="Add to Cart">

                                        </form>
                                    @else

                                        <li><a class="hiraola-add_compare" href="{{route('login.register')}}" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Login / Register</a></li>
                                    @endif
                                    <li><a class="qty-wishlist_btn" href="wishlist.html" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a class="qty-compare_btn" href="{{route('shop.compare')}}" data-bs-toggle="tooltip" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Single Product Area End Here -->

    <!-- Begin Hiraola's Single Product Tab Area -->
    <div class="hiraola-product-tab_area-2 sp-product-tab_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sp-product-tab_nav ">
                        <div class="product-tab">
                            <ul class="nav product-menu">
                                <li><a class="active" data-bs-toggle="tab" href="#description"><span>Description</span></a>
                                </li>
                                <li><a data-bs-toggle="tab" href="#specification"><span>Specification</span></a></li>
                                <li><a data-bs-toggle="tab" href="#reviews"><span>Reviews (1)</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-content hiraola-tab_content">
                            <div id="description" class="tab-pane active show" role="tabpanel">
                                <div class="product-description">
                                    <ul>
                                        <li>
                                            <strong>Karat Gold</strong>
                                            <span>24K gold is called pure gold or fine gold. (99.99% pure) The color of fine
                                            gold is a bright yellow with a bit of orange. Some say it is too soft for
                                            jewelry application, but high karat gold is commonly worn in some parts of
                                            the world, and it is growing in popularity in designer jewelry. Most will
                                            prefer karat golds for their engagement rings, because of the needed
                                            hardness to hold a gemstone.</span>
                                        </li>
                                        <li>
                                            <strong>Gold Colors</strong>
                                            <span>The most popular color is yellow which is made by adding silver and some
                                            copper. The metals are melted together to form an alloy of the desired color
                                            and karat. It is very important that all the ingredients are pure and that
                                            the amounts of each are weighed very accurately to prevent porosity, which
                                            weakens the alloy.</span>
                                        </li>
                                        <li>
                                            <strong>White alloys</strong>
                                            <span>There are two kinds of White Gold: Nickel based and Palladium based. Some
                                            people are allergic to Nickel, so Palladium white gold is a good
                                            alternative. Palladium white gold is the only legal alloy in Europe. It also
                                            self burnishes and keeps a polish.</span>
                                        </li>
                                        <li>
                                            <strong>The Most Expensive Diamond Color</strong>
                                            <span>D colored diamonds are the rarest and most expensive of diamonds within
                                            the D-Z scale. Certain fancy colored diamonds will command the highest
                                            prices overall, and these will be discussed in separate tutorial. Many
                                            people enjoy diamonds in the near colorless range G-J, as they find a
                                            balance of size, clarity, and price to meet their needs.</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div id="specification" class="tab-pane" role="tabpanel">
                                <table class="table table-bordered specification-inner_stuff">
                                    <tbody>
                                    <tr>
                                        <td colspan="2"><strong>Memory</strong></td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>test 1</td>
                                        <td>8gb</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td colspan="2"><strong>Processor</strong></td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td>No. of Cores</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="reviews" class="tab-pane" role="tabpanel">
                                <div class="tab-pane active" id="tab-review">
                                    <form class="form-horizontal" id="form-review">
                                        <div id="review">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><strong>Customer</strong></td>
                                                    <td class="text-right">25/04/2022</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>Good product! Thank you very much</p>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="fa fa-star-of-david"></i></li>
                                                                <li><i class="fa fa-star-of-david"></i></li>
                                                                <li><i class="fa fa-star-of-david"></i></li>
                                                                <li><i class="fa fa-star-of-david"></i></li>
                                                                <li><i class="fa fa-star-of-david"></i></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2>Write a review</h2>
                                        <div class="form-group required">
                                            <div class="col-sm-12 p-0">
                                                <label>Your Email <span class="required">*</span></label>
                                                <input class="review-input" type="email" name="con_email" id="con_email" required>
                                            </div>
                                        </div>
                                        <div class="form-group required second-child">
                                            <div class="col-sm-12 p-0">
                                                <label class="control-label">Share your opinion</label>
                                                <textarea class="review-textarea" name="con_message" id="con_message"></textarea>
                                                <div class="help-block"><span class="text-danger">Note:</span> HTML is not
                                                    translated!</div>
                                            </div>
                                        </div>
                                        <div class="form-group last-child required">
                                            <div class="col-sm-12 p-0">
                                                <div class="your-opinion">
                                                    <label>Your Rating</label>
                                                    <span>
                                                    <select class="star-rating">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </span>
                                                </div>
                                            </div>
                                            <div class="hiraola-btn-ps_right">
                                                <a href="javascript:void(0)" class="hiraola-btn hiraola-btn_dark">Continue</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Single Product Tab Area End Here -->

    <!-- Begin Hiraola's Product Area Two -->
    <div class="hiraola-product_area hiraola-product_area-2 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="hiraola-section_title">
                        <h4>Special Offer</h4>
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="hiraola-product_slider-3">

                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">

                                @foreach($shops as $shop)
                                <div class="product-img">
                                    <a href="{{route('single.product',$shop->id)}}">
                                        <img class="primary-img" src="{{asset($shop->image)}}" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="{{asset($shop->image2)}}" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="{{route('cardUpdates.index','id')}}" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="{{route('shop.compare')}}" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="{{route('single.product',$shop->id)}}">{{$shop->name}}</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">{{$shop->ex_tax}}</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Product Area Two End Here -->

    <!-- Begin Hiraola's Product Area Two -->
    <div class="hiraola-product_area hiraola-product_area-2 section-space_add">
        <div class="container">
            <div class="row">
{{--                <div class="col-lg-12">--}}

{{--                    <div class="hiraola-section_title">--}}
{{--                        <h4>Related Products</h4>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="hiraola-product_slider-3">--}}

{{--                        <!-- Begin Hiraola's Slide Item Area -->--}}
{{--                        <div class="slide-item">--}}
{{--                            <div class="single_product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="{{route('single.product')}}">--}}
{{--                                        <img class="primary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">--}}
{{--                                        <img class="secondary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-1.jpg" alt="Hiraola's Product Image">--}}
{{--                                    </a>--}}
{{--                                    <span class="sticker-2">Sale</span>--}}
{{--                                    <div class="add-actions">--}}
{{--                                        <ul>--}}
{{--                                            <li><a class="hiraola-add_cart" href="{{route('cardUpdates.index')}}" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="hiraola-add_compare" href="{{route('shop.compare')}}" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i--}}
{{--                                                        class="ion-ios-shuffle-strong"></i></a></li>--}}
{{--                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i--}}
{{--                                                        class="ion-eye"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="hiraola-product_content">--}}
{{--                                    <div class="product-desc_info">--}}
{{--                                        <h6><a class="product-name" href="{{route('single.product')}}">Vitra Sunburst Clock--}}
{{--                                                pret...</a></h6>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="new-price">£1199.60</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="additional-add_action">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i--}}
{{--                                                            class="ion-android-favorite-outline"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="rating-box">--}}
{{--                                            <ul>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Hiraola's Slide Item Area End Here -->--}}
{{--                        <!-- Begin Hiraola's Slide Item Area -->--}}
{{--                        <div class="slide-item">--}}
{{--                            <div class="single_product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="{{route('single.product')}}">--}}
{{--                                        <img class="primary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">--}}
{{--                                        <img class="secondary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">--}}
{{--                                    </a>--}}
{{--                                    <span class="sticker">New</span>--}}
{{--                                    <div class="add-actions">--}}
{{--                                        <ul>--}}
{{--                                            <li><a class="hiraola-add_cart" href="{{route('cardUpdates.index')}}" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="hiraola-add_compare" href="{{route('shop.compare')}}" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i--}}
{{--                                                        class="ion-ios-shuffle-strong"></i></a></li>--}}
{{--                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i--}}
{{--                                                        class="ion-eye"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="hiraola-product_content">--}}
{{--                                    <div class="product-desc_info">--}}
{{--                                        <h6><a class="product-name" href="{{route('single.product')}}">Light Inverted Pendant--}}
{{--                                                Qu...</a></h6>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="new-price">£110.00</span>--}}
{{--                                            <span class="old-price">£110.00</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="additional-add_action">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i--}}
{{--                                                            class="ion-android-favorite-outline"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="rating-box">--}}
{{--                                            <ul>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Hiraola's Slide Item Area End Here -->--}}
{{--                        <!-- Begin Hiraola's Slide Item Area -->--}}
{{--                        <div class="slide-item">--}}
{{--                            <div class="single_product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="{{route('single.product')}}">--}}
{{--                                        <img class="primary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">--}}
{{--                                        <img class="secondary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">--}}
{{--                                    </a>--}}
{{--                                    <span class="sticker">New</span>--}}
{{--                                    <div class="add-actions">--}}
{{--                                        <ul>--}}
{{--                                            <li><a class="hiraola-add_cart" href="{{route('cardUpdates.index')}}" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="hiraola-add_compare" href="{{route('shop.compare')}}" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i--}}
{{--                                                        class="ion-ios-shuffle-strong"></i></a></li>--}}
{{--                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i--}}
{{--                                                        class="ion-eye"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="hiraola-product_content">--}}
{{--                                    <div class="product-desc_info">--}}
{{--                                        <h6><a class="product-name" href="{{route('single.product')}}">JWDA Penant Lamp Brshed</a>--}}
{{--                                        </h6>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="new-price">£602.00</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="additional-add_action">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i--}}
{{--                                                            class="ion-android-favorite-outline"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="rating-box">--}}
{{--                                            <ul>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Hiraola's Slide Item Area End Here -->--}}
{{--                        <!-- Begin Hiraola's Slide Item Area -->--}}
{{--                        <div class="slide-item">--}}
{{--                            <div class="single_product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="{{route('single.product')}}">--}}
{{--                                        <img class="primary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">--}}
{{--                                        <img class="secondary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">--}}
{{--                                    </a>--}}
{{--                                    <span class="sticker">New</span>--}}
{{--                                    <div class="add-actions">--}}
{{--                                        <ul>--}}
{{--                                            <li><a class="hiraola-add_cart" href="{{route('cardUpdates.index')}}" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="hiraola-add_compare" href="{{route('shop.compare')}}" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i--}}
{{--                                                        class="ion-ios-shuffle-strong"></i></a></li>--}}
{{--                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i--}}
{{--                                                        class="ion-eye"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="hiraola-product_content">--}}
{{--                                    <div class="product-desc_info">--}}
{{--                                        <h6><a class="product-name" href="{{route('single.product')}}">Suspensions Aplomb Large--}}
{{--                                                ...</a></h6>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="new-price">£602.00</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="additional-add_action">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i--}}
{{--                                                            class="ion-android-favorite-outline"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="rating-box">--}}
{{--                                            <ul>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Hiraola's Slide Item Area End Here -->--}}
{{--                        <!-- Begin Hiraola's Slide Item Area -->--}}
{{--                        <div class="slide-item">--}}
{{--                            <div class="single_product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="{{route('single.product')}}">--}}
{{--                                        <img class="primary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">--}}
{{--                                        <img class="secondary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">--}}
{{--                                    </a>--}}
{{--                                    <span class="sticker-2">Sale</span>--}}
{{--                                    <div class="add-actions">--}}
{{--                                        <ul>--}}
{{--                                            <li><a class="hiraola-add_cart" href="{{route('cardUpdates.index')}}" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="hiraola-add_compare" href="{{route('shop.compare')}}" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i--}}
{{--                                                        class="ion-ios-shuffle-strong"></i></a></li>--}}
{{--                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i--}}
{{--                                                        class="ion-eye"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="hiraola-product_content">--}}
{{--                                    <div class="product-desc_info">--}}
{{--                                        <h6><a class="product-name" href="{{route('single.product')}}">Work Lamp Silver Proin--}}
{{--                                                he...</a></h6>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="new-price">£135.20</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="additional-add_action">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i--}}
{{--                                                            class="ion-android-favorite-outline"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="rating-box">--}}
{{--                                            <ul>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Hiraola's Slide Item Area End Here -->--}}
{{--                        <!-- Begin Hiraola's Slide Item Area -->--}}
{{--                        <div class="slide-item">--}}
{{--                            <div class="single_product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="{{route('single.product')}}">--}}
{{--                                        <img class="primary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">--}}
{{--                                        <img class="secondary-img" src="{{asset('front-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">--}}
{{--                                    </a>--}}
{{--                                    <span class="sticker">New</span>--}}
{{--                                    <div class="add-actions">--}}
{{--                                        <ul>--}}
{{--                                            <li><a class="hiraola-add_cart" href="{{route('cardUpdates.index')}}" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="hiraola-add_compare" href="{{route('shop.compare')}}" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i--}}
{{--                                                        class="ion-ios-shuffle-strong"></i></a></li>--}}
{{--                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i--}}
{{--                                                        class="ion-eye"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="hiraola-product_content">--}}
{{--                                    <div class="product-desc_info">--}}
{{--                                        <h6><a class="product-name" href="{{route('single.product')}}">Work Lamp Silver Proin--}}
{{--                                                he...</a></h6>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="new-price">£135.20</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="additional-add_action">--}}
{{--                                            <ul>--}}
{{--                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i--}}
{{--                                                            class="ion-android-favorite-outline"></i></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="rating-box">--}}
{{--                                            <ul>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                                <li><i class="fa fa-star-of-david"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Hiraola's Slide Item Area End Here -->--}}

{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Hiraola's Product Area Two End Here -->
@endsection
