@extends('front-end-view.master')
@section('title','Blog-Details')
@section('content')
    <!-- Begin Hiraola's Blog Details Left Sidebar Area -->
    <div class="hiraola-blog_area hiraola-blog_area-2 hiraola-blog-details hiraola-banner_area">
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
                                <li><a href="javascript:void(0)">Necklaces (07)</a></li>
                                <li><a href="javascript:void(0)">Earrings (12)</a></li>
                                <li><a href="javascript:void(0)">Bracelet (05)</a></li>
                                <li><a href="javascript:void(0)">Anklet (18)</a></li>
                                <li><a href="javascript:void(0)">Braid Jewels (13)</a></li>
                                <li><a href="javascript:void(0)">Foot Harness (06)</a></li>
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

                    @foreach($blogs as $blog)

                    <div class="blog-item">
                        <div class="blog-img img-hover_effect">
                            <a href="blog-details-left-sidebar.html">
                                <img src="{{asset($blog->image)}}" alt="Hiraola's Blog Image">
                            </a>
                            <div class="blog-meta-2">
                                <div class="blog-time_schedule">
                                    <span class="day">{{date("d")}}</span>
                                    <span class="day">{{substr(date("F"),0,3)}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-heading">
                                <h5>
                                    <a href="javascrip:void(0)">{{$blog->title}}</a>
                                </h5>
                            </div>
                            <div class="blog-short_desc">
                                <p>{{substr( $blog->content,0,250)}}-
                                </p>
                            </div>
                        </div>
                        <div class="hiraola-blog-blockquote">
                            <blockquote>
                                <p>{{$blog->contents}}
                                </p>
                            </blockquote>
                        </div>
                        <div class="blog-additional_information">
                            <p>-{{substr( $blog->content,251,9000000)}}
                            </p>
                        </div>
                        <div class="hiraola-tag-line">
                            <h4>Tag:</h4>
                            <a href="javascript:void(0)">Vegetables</a>,
                            <a href="javascript:void(0)">Milk Fresh</a>,
                            <a href="javascript:void(0)">Edible Oils</a>
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
                        <div class="hiraola-comment-section">
                            <h3>03 comment</h3>
                            <ul>
                                <li>
                                    <div class="author-avatar">
                                        <img src="{{asset('front-assets')}}/assets//images/blog/user.png" alt="User">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="javascript:void(0)">reply</a></span>
                                        <h5 class="comment-author">Edwin Adams</h5>
                                        <div class="comment-post-date">
                                            25 April, 2022 at 10:30am
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci
                                            optio ex,
                                            laboriosam
                                            facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li class="comment-children">
                                    <div class="author-avatar">
                                        <img src="{{asset('front-assets')}}/assets//images/blog/admin.png" alt="Admin">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="javascript:void(0)">reply</a></span>
                                        <h5 class="comment-author">Anny Adams</h5>
                                        <div class="comment-post-date">
                                            25 April, 2022 at 11:00am
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci
                                            optio ex,
                                            laboriosam
                                            facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-avatar">
                                        <img src="{{asset('front-assets')}}/assets//images/blog/user.png" alt="User">
                                    </div>
                                    <div class="comment-body">
                                        <span class="reply-btn"><a href="javascript:void(0)">reply</a></span>
                                        <h5 class="comment-author">Edwin Adams</h5>
                                        <div class="comment-post-date">
                                            25 April, 2022 at 06:50pm
                                        </div>
                                        <p>Thank You :)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="hiraola-blog-comment-wrapper">
                            <h3>leave a reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="javascript:void(0)">
                                <div class="comment-post-box">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>comment</label>
                                            <textarea name="commnet" placeholder="Write a comment"></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label>Name</label>
                                            <input type="text" class="coment-field" placeholder="Name">
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label>Email</label>
                                            <input type="text" class="coment-field" placeholder="Email">
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label>Website</label>
                                            <input type="text" class="coment-field" placeholder="Website">
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="comment-btn_wrap f-left">
                                                <div class="hiraola-post-btn_area">
                                                    <a class="hiraola-post_btn" href="javascript:void(0)">Post comment</a>
                                                </div>
                                                <!-- <input class="hiraola-post_btn" type="submit" name="submit" value="post comment"> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Blog Details Left Sidebar Area End Here -->
@endsection
