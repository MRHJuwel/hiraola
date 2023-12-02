@extends('front-end-view.master')
@section('title','Blog')
@section('content')
<!-- Begin Hiraola's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Blog Grid View</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog Left Sidebar</li>
            </ul>
        </div>
    </div>
</div>
<!-- Hiraola's Breadcrumb Area End Here -->

<!-- Begin Hiraola's Blog Left Sidebar Area -->
<div class="hiraola-blog_area hiraola-blog_area-2 blog-grid-view_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-lg-1 order-2">
                <div class="hiraola-blog-sidebar-wrapper">
                    <div class="hiraola-blog-sidebar">
                        <div class="hiraola-sidebar-search-form">
                            <form action="javascript:void(0)">
                                <input type="text" class="hiraola-search-field" placeholder="search here">
                                <button type="submit" class="hiraola-search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="hiraola-blog-sidebar">
                        <h4 class="hiraola-blog-sidebar-title">Categories</h4>
                        <ul class="hiraola-blog-archive">
                            @foreach($catagories as $catagory)
                            <li><a href="javascript:void(0)">{{$catagory->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="hiraola-blog-sidebar">
                        <h4 class="hiraola-blog-sidebar-title">Blog Archives</h4>
                        <ul class="hiraola-blog-archive">
                            <li><a href="javascript:void(0)">April (05)</a></li>
                            <li><a href="javascript:void(0)">May (10)</a></li>
                            <li><a href="javascript:void(0)">June (15)</a></li>
                            <li><a href="javascript:void(0)">July (20)</a></li>
                            <li><a href="javascript:void(0)">August(25)</a></li>
                            <li><a href="javascript:void(0)">September (30)</a></li>
                        </ul>
                    </div>
                    <div class="hiraola-blog-sidebar">
                        <h4 class="hiraola-blog-sidebar-title">Recent Post</h4>
                        <div class="hiraola-recent-post">
                            <div class="hiraola-recent-post-thumb">
                                <a href="blog-details-left-sidebar.html">
                                    <img class="img-full" src="{{asset('front-assets')}}/assets//images/product/small-size/2-1.jpg" alt="Hiraola's Product Image">
                                </a>
                            </div>
                            <div class="hiraola-recent-post-des">
                                <span><a href="blog-details-left-sidebar.html">First Blog Post</a></span>
                                <span class="hiraola-post-date">28-05-19</span>
                            </div>
                        </div>
                        <div class="hiraola-recent-post">
                            <div class="hiraola-recent-post-thumb">
                                <a href="blog-details-left-sidebar.html">
                                    <img class="img-full" src="{{asset('front-assets')}}/assets//images/product/small-size/2-2.jpg" alt="Hiraola's Product Image">
                                </a>
                            </div>
                            <div class="hiraola-recent-post-des">
                                <span><a href="blog-details-left-sidebar.html">Second Blog Post</a></span>
                                <span class="hiraola-post-date">28-05-19</span>
                            </div>
                        </div>
                        <div class="hiraola-recent-post">
                            <div class="hiraola-recent-post-thumb">
                                <a href="blog-details-left-sidebar.html">
                                    <img class="img-full" src="{{asset('front-assets')}}/assets//images/product/small-size/2-3.jpg" alt="Hiraola's Product Image">
                                </a>
                            </div>
                            <div class="hiraola-recent-post-des">
                                <span><a href="blog-details-left-sidebar.html">Third Blog Post</a></span>
                                <span class="hiraola-post-date">28-05-19</span>
                            </div>
                        </div>
                    </div>
                    <div class="hiraola-blog-sidebar">
                        <h4 class="hiraola-blog-sidebar-title">Tags</h4>
                        <ul class="hiraola-blog-tags">
                            <li><a href="javascript:void(0)">Rings</a></li>
                            <li><a href="javascript:void(0)">Necklaces</a></li>
                            <li><a href="javascript:void(0)">Bracelet</a></li>
                            <li><a href="javascript:void(0)">Earrings</a></li>
                            <li><a href="javascript:void(0)">Necklaces</a></li>
                            <li><a href="javascript:void(0)">Braid</a></li>
                            <li><a href="javascript:void(0)">Harness</a></li>
                            <li><a href="javascript:void(0)">Graceful Armlet</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="row blog-item_wrap">
{{--                    single blog content use loop here --}}
                    <div class="col-lg-6">
                        @foreach($blogs as $blog)
                        <div class="blog-item">
                            <div class="blog-img img-hover_effect">
{{--                                3 ta href ase link korte hobe --}}
                                <a href="{{route('blog.details',$blog->slug)}}">
                                    <img src="{{asset($blog->image)}}" alt="Hiraola's Blog Image">
                                </a>
                                <div class="blog-meta-2">
                                    <div class="blog-time_schedule">
{{--                                        <span class="day">{{$blog->created_at}}</span>--}}
                                        <span class="day">{{date("d")}}</span>
                                        <span class="day">{{substr(date("F"),0,3)}}</span>
{{--                                        <span class="month">{{date("F")->$blog->created_at}}</span>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-heading">
                                    <h5>
                                        <a href="{{route('blog.details',$blog->slug)}}">{{ $blog->title}}</a>
                                    </h5>
                                </div>
                                <div class="blog-short_desc">
                                    <p>{{substr( $blog->content,0,100)}}
                                    </p>
                                </div>
                                <div class="hiraola-read-more_area">
                                    <a href="{{route('blog.details',$blog->slug)}}" class="hiraola-read_more">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

{{--                pagination --}}
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
                                            <p>Show</p>
                                            <select class="myniceselect nice-select">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="25">25</option>
                                            </select>
                                            <span>Per Page</span>
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
<!-- Hiraola's Blog Left Sidebar Area End Here -->
@endsection
