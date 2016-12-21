@extends('layouts.master')

@section('title')@parent - {{ trans('globals.home') }} @stop

@include('partial.message')

@section('content')


    <div id="myCarousel" class="carousel slide">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="http://html.crunchpress.com/big-salon/images/banner/banner-img-03.jpg">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
            </div>

            <div class="item">
                <img src="http://html.crunchpress.com/big-salon/images/banner/banner-img-02.jpg">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
            </div>

            <div class="item">
                <img src="http://html.crunchpress.com/big-salon/images/banner/banner-img-03.jpg">
                <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
            </div>

            <div class="item">
                <img src="http://html.crunchpress.com/big-salon/images/banner/banner-img-02.jpg">
                <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
    <section>
        <div class="row">
            <div class="cp-heding-style1">
                <h2>About Our Saloon</h2>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="">
                        <img src="http://html.crunchpress.com/big-salon/images/about/about-img-01.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <h3>We create beautiful memories</h3>
                        <p>Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.Mellentesque habitant morbi tristique et malesuada famesac turpis egestas habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.</p>
                        <div class="bottom-holder">
                            <div class="inner">
                                <p>Tapora veritatis in cumque quia conseqae sint porro rerum voluptas ipsum vitae neque quae. Voluptatibus, eligendi veritatis in cumque quia conseqae sint porro rerum voluptas ipsum.</p>
                                <em>I love the confidence that MAKEUP gives me.<span>-Tyra Banks</span></em>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    

    <section class="cp_promotion-section pd-b80">
        <div class="row">
            <div class="cp-heding-style1">
                <h2>Our Promotions</h2>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <div class="promotion-item">
                        <div class="text">
                            <h3><a href="product-detail.html">Only Until December </a></h3>
                            <p>Duisac turpis. Integer rutrum ante eu lacue. Mauris fermeum dictum magn. Saliquam leote llus dolor dapibus eget elementu elfend elit.</p>
                            <span class="item-discount"><b>20%</b>Discount</span>
                        </div>
                        <div class="thumb">
                            <img src="http://html.crunchpress.com/big-salon/images/promotion-img-01.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="promotion-item">
                        <div class="text">
                            <h3><a href="product-detail.html">Only Until July </a></h3>
                            <p>Duisac turpis. Integer rutrum ante eu lacue. Mauris fermeum dictum magn. Saliquam leote llus dolor dapibus eget elementu elfend elit.</p>
                            <span class="item-discount"><b>20%</b>Discount</span>
                        </div>
                        <div class="thumb">
                            <img src="http://html.crunchpress.com/big-salon/images/promotion-img-02.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cp_rates-section pd-b80">
        <div class="container">
            <div class="rates-holder">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="text-holder left">
                            <div class="info-hold">
                                <h4>Woman’s Haircut</h4>
                                <span><b>$40</b>First Length</span>
                            </div>
                            <div class="info-hold">
                                <h4>Woman’s Haircut</h4>
                                <span><b>$60</b>Second Length</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="text-holder right">
                            <div class="info-hold">
                                <h4>Woman’s Haircut</h4>
                                <span><b>$70</b>Third Length</span>
                            </div>
                            <div class="info-hold">
                                <h4>Woman’s Haircut</h4>
                                <span><b>$90</b>Fourth Length</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <p>Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas. Mellentesque habitant morbi tristique et malesuada famesac turpis egestas habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.</p>
                <a href="services.html" >More Services</a>
            </div>
        </div>
    </section>
    </div>
    <section class="cp_our-services-section pd-t80">
    <div class="container">
        <div class="cp-heding-style2">
            <h2>Our Services</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="http://html.crunchpress.com/big-salon/images/services/services-item-img-01.jpg" alt="">
                    <div class="services-caption">
                        <h3>Hair Cutting</h3>
                        <span class="cp_linebar-style"></span>
                        <span class="glyphicon glyphicon-ok icomoon"></span>
                        <a href="services.html" class="read-more cp-btn-style2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="http://html.crunchpress.com/big-salon/images/services/services-item-img-02.jpg" alt="">
                    <div class="services-caption">
                        <h3>Facial Services</h3>
                        <span class="cp_linebar-style"></span>
                        <span class="glyphicon glyphicon-ok icomoon"></span>
                        <a href="services.html" class="read-more cp-btn-style2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="http://html.crunchpress.com/big-salon/images/services/services-item-img-03.jpg" alt="">
                    <div class="services-caption">
                        <h3>Make UP</h3>
                        <span class="cp_linebar-style"></span>
                        <span class="glyphicon glyphicon-ok icomoon"></span>
                        <a href="services.html" class="read-more cp-btn-style2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="http://html.crunchpress.com/big-salon/images/services/services-item-img-01.jpg" alt="">
                    <div class="services-caption">
                        <h3>Manicure</h3>
                        <span class="cp_linebar-style"></span>
                        <span class="glyphicon glyphicon-ok icomoon"></span>
                        <a href="services.html" class="read-more cp-btn-style2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cp_equipment-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style1">
            <h2>Our Equipment</h2>
        </div>
        <div class="row pretty-gallery">
            <div class="col-md-3 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/equipment-img-01.png" alt="">
                        <a href="images/equipment-img-01.png" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                    <h3>Black Beauty Salon</h3>
                    <span>Styling Sofa</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/equipment-img-02.png" alt="">
                        <a href="images/equipment-img-02.png" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                    <h3>Haircutting Cover</h3>
                    <span>Styling Gown</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/equipment-img-03.png" alt="">
                        <a href="images/equipment-img-03.png" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                    <h3>Black Beauty Salon</h3>
                    <span>Styling Chair</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/equipment-img-04.png" alt="">
                        <a href="images/equipment-img-04.png" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                    <h3>Brushes Holder</h3>
                    <span>For Salon</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cp_our-parallax-section pd-tb80">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="left-holder">
                    <h3>The Ultimate Guide to</h3>
                    <strong>Face Makeup Brushes</strong>
                    <a href="#" class="buy-now cp-btn-style1">Buy Now</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="right-holder">
                    <ul>
                        <li>Tapered Foundation Brush</li>
                        <li>Rounded Foundation Brush</li>
                        <li>Flat Concealer Brush</li>
                        <li>Precision Concealer Brush</li>
                        <li>Powder Brush</li>
                        <li>Angled Brush</li>
                        <li>Stippling Brush</li>
                        <li>Fan Brush</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cp_blog-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style1">
            <h2>Latest from Blog</h2>
        </div>
        <ul class="pretty-gallery">
            <li class="blog-holder">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cp-thumb">
                            <img src="http://html.crunchpress.com/big-salon/images/blog/blog-md-img-01.jpg" alt="">
                            <a href="images/blog/blog-md-img-01.jpg" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-holder">
                            <div class="top">
                                <img src="http://html.crunchpress.com/big-salon/images/blog/blog-extra-small-img.jpg" alt="">
                                <h3>Pretty smoky eyes tutorial</h3>
                                <ul class="cp-listed">
                                    <li><i class="glyphicon glyphicon-tag"></i>Makeup</li>
                                    <li><i class="glyphicon glyphicon-user"></i><a href="#">Admin</a>
                                    </li>
                                </ul>
                            </div>
                            <em><span>Written by</span> Natasha <span>on</span> 8th March 2015</em>
                            <p>Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.esuada famesac turpis egestas.</p>
                            <a href="blog-detail.html" class="cp-btn-style2">Read More</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="blog-holder">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cp-thumb">
                            <img src="http://html.crunchpress.com/big-salon/images/blog/blog-md-img-02.jpg" alt="">
                            <a href="images/blog/blog-md-img-02.jpg" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-holder">
                            <div class="top">
                                <img src="http://html.crunchpress.com/big-salon/images/blog/blog-extra-small-img.jpg" alt="">
                                <h3>Layered Bangs Hairstyles</h3>
                                <ul class="cp-listed">
                                    <li><i class="glyphicon glyphicon-tag"></i> Makeup</li>
                                    <li><i class="glyphicon glyphicon-user"></i><a href="#"> Admin</a>
                                    </li>
                                </ul>
                            </div>
                            <em><span>Written by</span> Natasha <span>on</span> 10th July 2015</em>
                            <p>Habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.Mellentesque habitant morbi tristique et malesuada famesac turpis egestas habitant morbi tristique.</p>
                            <a href="blog-detail.html" class="cp-btn-style2">Read More</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="cp_pricing-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style2">
            <h2>Our Pricing</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm">

                <div class="pricing-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/pricing/price-img-01.jpg" alt="">
                    </div>
                    <div class="pricing-text">
                        <span class="price">$9.99</span>
                        <a href="#" class="btn-hair-service">Hair Services</a>
                        <ul class="price-list">
                            <li> Haircut</li>
                            <li> Colour</li>
                            <li> Treatments</li>
                            <li>The Finish</li>
                            <li> Treatments</li>
                            <li> Haircut</li>
                            <li> The Finish</li>
                            <li> <a href="#" class="cp-btn-style2">Order Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm">

                <div class="pricing-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/pricing/price-img-02.jpg" alt="">
                    </div>
                    <div class="pricing-text">
                        <span class="price">$12.99</span>
                        <a href="#" class="btn-hair-service">Colour Services</a>
                        <ul class="price-list">
                            <li> Haircut</li>
                            <li> Colour</li>
                            <li> Treatments</li>
                            <li>The Finish</li>
                            <li> Treatments</li>
                            <li> Haircut</li>
                            <li> The Finish</li>
                            <li> <a href="#" class="cp-btn-style2">Order Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm">

                <div class="pricing-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/pricing/price-img-03.jpg" alt="">
                    </div>
                    <div class="pricing-text">
                        <span class="price">$78.99</span>
                        <a href="#" class="btn-hair-service">Treatments Services</a>
                        <ul class="price-list">
                            <li> Haircut</li>
                            <li> Colour</li>
                            <li> Treatments</li>
                            <li>The Finish</li>
                            <li> Treatments</li>
                            <li> Haircut</li>
                            <li> The Finish</li>
                            <li> <a href="#" class="cp-btn-style2">Order Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm">

                <div class="pricing-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/pricing/price-img-04.jpg" alt="">
                    </div>
                    <div class="pricing-text">
                        <span class="price">$85.99</span>
                        <a href="#" class="btn-hair-service">Haircut Services</a>
                        <ul class="price-list">
                            <li> Haircut</li>
                            <li> Colour</li>
                            <li> Treatments</li>
                            <li>The Finish</li>
                            <li> Treatments</li>
                            <li> Haircut</li>
                            <li> The Finish</li>
                            <li> <a href="#" class="cp-btn-style2">Order Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cp_our-team-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style1">
            <h2>Our Experts</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/team/team-img-01.jpg" alt="">
                        <figcaption class="caption">
                            <ul class="cp-social-list">
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Eliza Cedric</a></h3>
                        <span>Make up Artist</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/team/team-img-02.jpg" alt="">
                        <figcaption class="caption">
                            <ul class="cp-social-list">
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Britney Doe</a></h3>
                        <span>Hair Style Artist</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/team/team-img-03.jpg" alt="">
                        <figcaption class="caption">
                            <ul class="cp-social-list">
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Dale Frank</a></h3>
                        <span>Skin Care Artist</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/team/team-img-04.jpg" alt="">
                        <figcaption class="caption">
                            <ul class="cp-social-list">
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Halena Grey</a></h3>
                        <span>Nail Care Artist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cp_achievement-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style2">
            <h2>Our Achievements</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="achievement-item">
                    <img src="http://html.crunchpress.com/big-salon/images/achivement-img-01.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="achievement-item">
                    <img src="http://html.crunchpress.com/big-salon/images/achivement-img-01.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="achievement-item">
                    <img src="http://html.crunchpress.com/big-salon/images/achivement-img-01.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cp_brands-section">
    <div class="container-fluid">
        <ul>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-01.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-02.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-03.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-02.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-01.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-04.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-05.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-01.jpg" alt="">
            </li>
        </ul>
    </div>
</section>

<section class="cp_testimonial-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style1">
            <h2>What Customers Say</h2>
        </div>
        <div class="testimonial-slider-holder">
            <div class="bx-wrapper" style="max-width: 100%;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 376px;">
                    <ul class="bxslider" id="testimonial-slider" style="width: auto; position: relative;">
                        <li style="float: none; list-style: none; position: absolute; width: 1130px; z-index: 0; display: block; opacity: 0.918764;">
                            <div class="testimonial-holder">
                                <span class="icon-holder">
<i class="fa fa-quote-right"></i>
</span>
                                <p>Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.Mellentesque habitant morbi tristique et Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.</p>
                                <strong class="name">“John Doe”</strong>
                            </div>
                        </li>
                        <li style="float: none; list-style: none; position: absolute; width: 1130px; z-index: 51; display: list-item; opacity: 0.081236;">
                            <div class="testimonial-holder">
                                <span class="icon-holder">
<i class="fa fa-quote-right"></i>
</span>
                                <p>Famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.Mellentesque habitant morbi tristique et Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada .</p>
                                <strong class="name">“Britney Doe”</strong>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bx-controls bx-has-pager bx-has-controls-direction">
                    <div class="bx-pager bx-default-pager">
                        <div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link">1</a>
                        </div>
                        <div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link active">2</a>
                        </div>
                    </div>
                    <div class="bx-controls-direction">
                        <a class="bx-prev" href=""> </a>
                        <a class="bx-next" href=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@stop {{-- end content --}}

