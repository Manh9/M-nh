@extends('front.layout.master')

@section('title', 'Home')

@section('body')


<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Women's, Flowering</span>
                        <h1>Black, friday</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cumque illum, aliquid earum ut similique aspernatur. Quod nam iure, ullam architecto culpa adipisci eveniet, possimus nihil illum asperiores ipsum sint.</p>
                        <a href="./shop" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Kid's, Flowering</span>
                        <h1>Black, friday</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cumque illum, aliquid earum ut similique aspernatur. Quod nam iure, ullam architecto culpa adipisci eveniet, possimus nihil illum asperiores ipsum sint.</p>
                        <a href="./shop" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->


<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="cointainer-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="img/banner-1.jpg" alt="">
                    <div class="inner-text">
                        <h4>Flowering</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="img/banner-2.jpg" alt="">
                    <div class="inner-text">
                        <h4>Non-Flowerring</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="img/banner-3.jpg" alt="">
                    <div class="inner-text">
                        <h4>Succulents</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Flowering Banner Section Begin -->
<div class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                    <h2>Flowering's</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="item active" data-tag="*" data-category="women">All</li>
                        <li class="item" data-tag=".Flowering" data-category="women">Flowering</li>
                        <li class="item" data-tag=".Non-Flowering" data-category="women">Non-Flowering</li>
                        <li class="item" data-tag=".Succulents" data-category="women">Scculents</li>
                        <li class="item" data-tag=".Tools" data-category="women">Tools</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel women">
                    @foreach($featuredProducts['women'] as $product)
                        @include('front.components.product-item')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Flowering Banner Section End -->

<!-- Deal Of The Week Section Begin -->
<section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>Deal Of The Week</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum, iste ab sequi nihil doloribus necessitatibus provident recusandae aliquid laudantium! Similique placeat debitis, consequuntur unde repellat ipsa corrupti at ipsam?</p>
                <div class="product-price">
                    $35.00
                    <span>/ Jade Scculents</span>
                </div>
            </div>

            <div class="countdown-timer" id="countdown">
                <div class="cd-item">
                    <span>56</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span>12</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>40</span>
                    <p>Mins</p>
                </div>
                <div class="cd-item">
                    <span>52</span>
                    <p>Secs</p>
                </div>
            </div>
            <a href="" class="primary-btn">Shop Now</a>
        </div>
    </div>
</section>
<!-- Deal Of The Week Section End -->



<!-- Man Banner Section Begin -->
<div class="man-banner spad">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                        <li class="item active" data-tag="*" data-category="men">All</li>
                        <li class="item" data-tag=".Flowering" data-category="men">Flowering</li>
                        <li class="item" data-tag=".Non-Flowering" data-category="men">Non-Flowering</li>
                        <li class="item" data-tag=".Succulents" data-category="men">Scculents</li>
                        <li class="item" data-tag=".Tools" data-category="men">Tools</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel men">
                    @foreach($featuredProducts['men'] as $product)
                        @include('front.components.product-item')
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg" data-setbg="img/products/man-large.jpg">
                    <h2>Non-Flowering's</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Man Banner Section End -->


<!-- Instagram Section Begin -->
<div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="img/insta-1.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-2.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-3.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-4.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-5.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-6.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
</div>
<!-- Instagram Section End -->


<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="img/blog/{{$blog->image}}" alt="">
                        <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                {{ date('M d, Y', strtotime($blog->created_at))}}
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                {{count($blog->blogComments)}}
                            </div>
                        </div>
                        <a href="./blog">
                            <h4>{{$blog->title}}</h4>
                        </a>
                        <p>{{$blog->subtitle}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Free Shipping</h6>
                            <p>For all order over 99$</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="img/icon-2.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Delivery On Time</h6>
                            <p>If good have problems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="img/icon-3.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Secure Payment</h6>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->



@endsection