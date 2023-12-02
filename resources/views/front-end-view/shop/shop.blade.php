@extends('front-end-view.master')
@section('title','Shop')

@section('content')
    <div class="hiraola-content_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="hiraola-sidebar-catagories_area">
{{--                        price shorting --}}
                        <div class="hiraola-sidebar_categories">
                            <div class="hiraola-categories_title">
                                <h5>Price</h5>
                            </div>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <div class="label-input">
                                        <label>price : </label>
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                    </div>
                                    <!-- <button type="button">Filter</button> -->
                                </div>
                            </div>
                        </div>
{{--                        brand selection --}}
                        <div class="hiraola-sidebar_categories">
                            <div class="hiraola-categories_title">
                                <h5>Brand</h5>
                            </div>
                            <ul class="sidebar-checkbox_list">
                                <li>
                                    <a href="javascript:void(0)">Brand 1(15)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Brand 2(16)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Brand 3(16)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Brand 4(17)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hiraola-sidebar_categories">
                            <div class="hiraola-categories_title">
                                <h5>Size</h5>
                            </div>
                            <ul class="sidebar-checkbox_list">
                                <li>
                                    <a href="javascript:void(0)">Size 1(17)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Size 2(16)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Size 3(17)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Size 4(17)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hiraola-sidebar_categories">
                            <div class="hiraola-categories_title">
                                <h5>Weight</h5>
                            </div>
                            <ul class="sidebar-checkbox_list">
                                <li>
                                    <a href="javascript:void(0)">Weight 1(16)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Weight 2(17)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Weight 3(17)</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Weight 4(17)</a>
                                </li>
                            </ul>
                        </div>
{{--                        catagories selection --}}
                        <div class="category-module hiraola-sidebar_categories">
                            <div class="category-module_heading">
                                <h5>Categories</h5>
                            </div>
                            <div class="module-body">
                                <ul class="module-list_item">
                                    <li>
                                        <a href="javascript:void(0)">Hand Harness (18)</a>
                                        <ul class="module-sub-list_item">
                                            <li>
                                                <a href="javascript:void(0)">Maang Tika (18)</a>
                                                <a href="javascript:void(0)">Toe Rings (18)</a>
                                                <a href="javascript:void(0)">Traditional Earrings (18)</a>
                                                <a href="javascript:void(0)">Kada Cum Bracelet (18)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Exquisite Rings (18)</a>
                                        <a href="javascript:void(0)">Necklaces (18)</a>
                                        <a href="javascript:void(0)">Foot Harness (18)</a>
                                        <a href="javascript:void(0)">Braid Jewels (18)</a>
                                        <a href="javascript:void(0)">Anklet (18)</a>
                                        <a href="javascript:void(0)">Graceful Armlet (18)</a>
                                        <a href="javascript:void(0)">Magna Pellentesq (18)</a>
                                        <a href="javascript:void(0)">Molestie Tortor (18)</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-banner_area">
                        <div class="banner-item img-hover_effect">
                            <a href="javascript:void(0)">
                                <img src="{{asset('front-assets')}}/assets/images/banner/1_1.jpg" alt="Hiraola's Shop Banner Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="shop-toolbar">
                        <div class="product-view-mode">
                            <a class="grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                            <a class="active list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                        </div>
                        <div class="product-item-selection_area">
                            <div class="product-short">
                                <label class="select-label">Short By:</label>
                                <select class="nice-select">
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                    <option value="5">Rating (Highest)</option>
                                    <option value="5">Rating (Lowest)</option>
                                    <option value="5">Model (A - Z)</option>
                                    <option value="5">Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="shop-product-wrap grid listview row">
{{--                        singl product now do foreach loop --}}
                        <div class="col-lg-4">
                                @foreach($shops as $shop)
                            <div class="list-slide_item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="{{route('single.product',$shop->id)}}">
                                            <img class="primary-img" src="{{asset($shop->image)}}" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="{{asset($shop->image2)}}" alt="Hiraola's Product Image">
                                        </a>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="{{route('single.product',$shop->id)}}">{{$shop->name}}</a></h6>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li><i class="fa fa-star-of-david"></i></li>
                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">{{$shop->ex_tax}}</span>
                                            </div>
                                            <div class="product-short_desc">
                                                <p>{{$shop->description}}</p>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
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
                                                        <input type="submit" class="btn btn-success" value="Add to Cart">

                                                    </form>
                                                @else

                                                <li><a class="hiraola-add_compare" href="{{route('login.register')}}" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Login / Register</a></li>
                                                    @endif
                                                    <li><a class="hiraola-add_compare" href="{{route('shop.compare')}}" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                            class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-eye"></i></a></li>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>

{{--                                                    add to card unising jQuery --}}

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            @endforeach


                        </div>

                    </div>
{{--                    pagination --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hiraola-paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <ul class="hiraola-pagination-box">
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a class="Next" href="javascript:void(0)"><i
                                                        class="ion-ios-arrow-right"></i></a></li>
                                            <li><a class="Next" href="javascript:void(0)">>|</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="product-select-box">
                                            <div class="product-short">
                                                <p>Showing 1 to 12 of 18 (2 Pages)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Content Wrapper Area End Here -->

@endsection
