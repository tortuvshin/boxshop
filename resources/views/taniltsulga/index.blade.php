<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
            .cp_about-section {
            float: left;
            width: 100%;
            position: relative;
            z-index: 99;
        }
        .pd-tb80 {
            padding: 80px 0;
        }
        .cp_promotion-section {
                float: left;
                width: 100%;
            }
            .pd-b80 {
                padding: 0 0 80px;
            }
            .cp_rates-section {
                float: left;
                width: 100%;
            }
            .cp_our-services-section {
                    float: left;
                    width: 100%;
                    position: relative;
                    background: url(http://html.crunchpress.com/big-salon/images/services/services-bg-img.jpg) top center no-repeat;
                    background-size: cover;
                    z-index: 11;
                }
                .cp_our-services-section::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0,0,0,0.88);
                }
        .cp-heding-style1 {
            float: left;
            width: 100%;
            position: relative;
            text-align: center;
            margin: 0 0 40px;
        }
        .cp-heding-style1::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -1px;
            width: 38px;
            border-bottom: 3px solid;
            margin: 0 auto;
            z-index: 99;
                border-color: #d00009;
        }
        .cp-heding-style1:after {
            content: '';
            position: absolute;
            width: 200px;
            left: 0;
            right: 0;
            bottom: 0;
            border-bottom: 1px solid #cecece;
            margin: 0 auto;
        }
        .about-text {
            float: left;
            width: 100%;
            position: relative;
        }
        .about-text .bottom-holder {
            float: left;
            border: 10px solid rgba(255, 255, 255, 0.45);
            position: absolute;
            left: -122px;
            z-index: 99;
        }
        .about-text .bottom-holder .inner {
            background-color: #fff;
            padding: 15px 45px;
        }
        .promotion-item {
		    float: left;
		    width: 100%;
		    position: relative;
			}
			.promotion-item .text {
			    width: 390px;
			    float: left;
			    position: relative;
			    z-index: 11;
			    background-color: #000;
			    padding: 28px 80px 28px 24px;
			}
			.item-discount {
		    display: inline-block;
		    font-size: 14px;
		    color: #fff;
		    padding: 8px 17px;
		    background-color: #232121;
		}
			.promotion-item .thumb {
			    float: right;
			    background-color: #fff;
			    position: absolute;
			    z-index: 11;
			    right: 0;
			    top: 20px;
			    overflow: hidden;
			    border: 8px solid #fff;
			}
            .rates-holder {
                float: left;
                width: 100%;
                position: relative;
                min-height: 593px;
                margin: 0 0 40px;
            }
            .rates-holder .text-holder {
                    float: left;
                    width: 100%;
                    padding: 100px 0 0;
                }
            .rates-holder .text-holder.right {
                    padding: 130px 0 0;
                    text-align: right;
                }


            .rates-holder::before {
                content: '';
                position: absolute;
                background: url(http://html.crunchpress.com/big-salon/images/haircut-img.jpg) no-repeat top center;
                left: 0;
                right: -130px;
                margin: 0 auto;
                width: 674px;
                height: 593px;
            }
            .rates-holder .text-holder .info-hold:before {
                    content: '';
                    position: absolute;
                    width: 120px;
                    border-top: 1px solid #303030;
                }
                .rates-holder .left .info-hold:before {
                right: 130px;
                top: 10px;
            }
            .rates-holder .left .info-hold:after {
                    right: 250px;
                    top: 6px;
                }
                .rates-holder .text-holder .info-hold:after {
                content: '';
                position: absolute;
                width: 10px;
                height: 10px;
                border-radius: 100%;
                background-color: transparent;
                border: 1px solid #303030;
            }
            .cp_rates-section .bottom {
                float: left;
                width: 100%;
                text-align: center;
            }
            .rates-holder .text-holder .info-hold {
                position: relative;
            }
            .rates-holder .right .info-hold:before {
                left: 78px;
                top: 10px;
            }
            .rates-holder .right .info-hold:after {
                    left: 198px;
                    top: 6px;
                }
                .rates-holder .text-holder .info-hold span b {
                    font-size: 24px;
                    line-height: 20px;
                    margin: 0 4px 0 0;
                        color: rgb(208, 0, 9);
                }
                .cp-heding-style2 {
                float: left;
                width: 100%;
                position: relative;
                text-align: center;
                margin: 0 0 40px;
                    color: white;
            }
            .cp-heding-style2::before {
                content: '';
                position: absolute;
                left: 0;
                right: 0;
                bottom: -1px;
                width: 38px;
                border-bottom: 3px solid;
                margin: 0 auto;
                z-index: 99;
                border-color: #d00009;
            }
            .cp-heding-style2:after {
                    content: '';
                    position: absolute;
                    width: 200px;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    border-bottom: 1px solid #fff;
                    margin: 0 auto;
                }
                .services-item {
                float: left;
                width: 100%;
                position: relative;
                padding: 12px;
                margin: 0 0 30px;
                background-color: #fff;
            }
            .services-item:before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(255,255,255,0.75);
                }
                .services-item .services-caption {
                    float: left;
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    left: 0;
                    top: 0;
                    padding: 52px 0 0;
                    text-align: center;
                }
                .cp_linebar-style {
                        position: relative;
                        width: 5px;
                        height: 3px;
                        display: block;
                        margin: 0 auto 20px;
                        text-align: center;
                        background: red;
                    }
                    .cp_linebar-style:before, .cp_linebar-style:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    width: 5px;
                    height: 3px;
                }
                .cp_linebar-style:before {
                left: 13px;
                background-color: #d00009;
                    }   
                    .cp_linebar-style:before, .cp_linebar-style:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    width: 5px;
                    height: 3px;
                }
                .cp_linebar-style:after {
                    right: 13px;
                        background-color: #d00009;
                }
                .services-item .services-caption .icomoon {
                        display: block;
                        margin: 0 0 30px;
                        text-align: center;
                        font-size: 60px;
                    }
                    .cp_equipment-section {
                        float: left;
                        width: 100%;
                    }
                    .cp_equipment-section .box-item {
                        float: left;
                        width: 100%;
                        text-align: center;
                    }
                    .cp_equipment-section .box-item .cp-thumb {
                        position: relative;
                        margin: 0 0 15px;
                    }
                  
           
                .cp_equipment-section .box-item span {
                        font-family: 'Open Sans',sans-serif;
                        font-weight: 600;
                        font-size: 14px;
                        line-height: 14px;
                        color: #d00009;
                    }
                    .cp_our-parallax-section {
                            float: left;
                            width: 100%;
                            background: url(http://html.crunchpress.com/big-salon/images/paralax-bg.jpg) no-repeat top center fixed;
                            background-size: cover;
                            position: relative;
                            z-index: 11;
                        }
                        .cp_our-parallax-section:before {
                            content: '';
                            position: absolute;
                            left: 0;
                            top: 0;
                            width: 100%;
                            height: 100%;
                            z-index: -1;
                            background-color: rgba(0,0,0,0.64);
                        }
                        .cp_our-parallax-section .left-holder {
                            float: left;
                            width: 100%;
                        }
                        .cp_our-parallax-section .left-holder h3 {
                    font-size: 72px;
                    font-style: italic;
                    margin: 0 0 15px;
                    line-height: 72px;
                        color: #d00009;
                }
                .cp_our-parallax-section .left-holder strong {
                        font-family: 'Playfair Display',serif;
                        font-size: 72px;
                        font-style: italic;
                        margin: 0 0 15px;
                        line-height: 72px;
                        color: #fff;
                        text-align: right;
                        display: block;
                        margin: 0 0 24px;
                    }
                    .cp_our-parallax-section .left-holder .buy-now {
                            font-size: 14px;
                            line-height: 14px;
                            padding: 13px 20px;
                            min-width: auto;
                            float: right;
                            border-color: #d00009;
                        }
                        a.cp-btn-style1 {
                            font-family: 'Open Sans',sans-serif;
                            font-size: 14px;
                            line-height: 14px;
                            color: #fff;
                            display: inline-block;
                            min-width: 130px;
                            text-align: center;
                            padding: 14px 20px;
                            position: relative;
                            z-index: 1;
                            border: 1px solid;
                        }

                        a.cp-btn-style1::before {
                            content: '';
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 51%;
                            height: 100%;
                            z-index: -1;
                            transition: all .5s linear;
                                background-color: #d00009;
                                -webkit-transition: all .5s linear;
                        }
                        a.cp-btn-style1::after {
                            content: '';
                            position: absolute;
                            bottom: 0;
                            right: 0;
                            width: 50%;
                            height: 100%;
                            z-index: -1;
                            -webkit-transition: all .5s linear;
                            transition: all .5s linear;
                                background-color: #d00009;
                        }
                        .cp_our-parallax-section .right-holder {
                            padding: 0 120px 0 0;
                            float: right;
                        }
                        .cp_our-parallax-section .right-holder ul>li {
                            font-family: 'Playfair Display',serif;
                            font-size: 30px;
                            line-height: 30px;
                            font-style: italic;
                            color: #fff;
                            margin: 0 0 20px;
                            list-style: none;
                        }
                        .blog-holder {
                            float: left;
                            width: 100%;
                            background-color: #fff;
                            box-shadow: 0 0 12px rgba(98,98,98,0.32);
                            margin: 0 0 35px;
                                list-style: none;
                        }
                        .cp-thumb {
                            float: left;
                            width: 100%;
                            position: relative;
                            overflow: hidden;
                            z-index: 11;
                        }
                        .cp-thumb:before {
                        content: '';
                        position: absolute;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(255,255,255,0.4);
                        opacity: 0;
                        z-index: 99;
                        -webkit-transform: scaleX(1);
                        -moz-transform: scaleX(1);
                        -ms-transform: scaleX(1);
                        -o-transform: scaleX(1);
                        transform: scaleX(1);
                        transition: all 0.5s ease-in;
                        -webkit-transition: all 0.5s ease-in;
                        -moz-transition: all 0.5s ease-in;
                    }
                    .blog-holder .cp-thumb:before, .blog-holder .cp-thumb:after {
                            background-color: rgba(0,0,0,0.0);
                            opacity: 1;
                            visibility: visible;
                            -webkit-transform: scale(1);
                            -moz-transform: scale(1);
                            -ms-transform: scale(1);
                            -o-transform: scale(1);
                            transform: scale(1);
                        }
                    .cp-thumb img {
                            width: 100%;
                            -webkit-transform: scale(1.2);
                            -moz-transform: scale(1.2);
                            -ms-transform: scale(1.2);
                            -o-transform: scale(1.2);
                            transform: scale(1.2);
                        }
                        .blog-holder .cp-thumb .zooming-holder {
                            color: #fff;
                            z-index: 999;
                        }
                        .cp-thumb .zooming-holder {
                                border: 2px solid #fff;
                                border-radius: 100%;
                                color: #fff;
                                display: inline-block;
                                height: 35px;
                                left: 0;
                                line-height: 31px;
                                margin: 0 auto;
                                position: absolute;
                                right: 0;
                                top: 50%;
                                width: 35px;
                                font-size: 16px;
                                text-align: center;
                                color: #fff;
                                -webkit-transform: scale(0);
                                -moz-transform: scale(0);
                                -ms-transform: scale(0);
                                -o-transform: scale(0);
                                transform: scale(0);
                            }
                            .blog-holder .cp-thumb:before, .blog-holder .cp-thumb:after {
                                background-color: rgba(0,0,0,0.0);
                                opacity: 1;
                                visibility: visible;
                                -webkit-transform: scale(1);
                                -moz-transform: scale(1);
                                -ms-transform: scale(1);
                                -o-transform: scale(1);
                                transform: scale(1);
                            }
                            .cp-thumb:after {
                        content: '';
                        position: absolute;
                        right: 0;
                        bottom: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(255,255,255,0.4);
                        opacity: 0;
                        z-index: 99;
                        -webkit-transform: scaleY(1);
                        -moz-transform: scaleY(1);
                        -ms-transform: scaleY(1);
                        -o-transform: scaleY(1);
                        transform: scaleY(1);
                        transition: all 0.5s ease-in;
                        -webkit-transition: all 0.5s ease-in;
                        -moz-transition: all 0.5s ease-in;
                    }
                    ul.cp-listed li {
                        display: inline-block;
                        font-size: 12px;
                        font-weight: 300;
                        color: #282828;
                        margin: 0 10px 0 0;
                        list-style: none;
                    }

                    .cp_pricing-section {
                        float: left;
                        width: 100%;
                        background: url(http://html.crunchpress.com/big-salon/images/pricing/price-bg-img.png) top center #000;
                        background-size: cover;
                        background-attachment: fixed;
                        position: relative;
                        z-index: 11;
                    }
                    .pricing-item {
                        float: left;
                        width: 100%;
                        border: 1px solid #443c39;
                        position: relative;
                    }
                   .pricing-item .pricing-text {
                            float: left;
                            width: 100%;
                            position: relative;
                            width: 100%;
                            padding: 0 18px 0;
                            margin: -68px 0 0;
                            text-align: center;
                        }
                        .pricing-item .pricing-text .price {
                            font-family: 'Open Sans',sans-serif;
                            font-size: 30px;
                            line-height: 30px;
                            color: #fff;
                            padding: 0 0 17px;
                            display: block;
                            position: relative;
                            z-index: 111;
                        }
                        .pricing-item .pricing-text .btn-hair-service {
                                font-family: 'Open Sans',sans-serif;
                                font-size: 14px;
                                color: #fff;
                                background-color: #000;
                                border: 1px solid #fff;
                                padding: 14px 15px;
                                display: inline-block;
                                min-width: 145px;
                                position: relative;
                                z-index: 111;
                            }
                            .pricing-item .price-list {
                            float: left;
                            width: 100%;
                            padding: 20px 0 30px;
                        }
                        .pricing-item .price-list>li {
                        float: left;
                        width: 100%;
                        font-family: 'Open Sans',sans-serif;
                        font-size: 14px;
                        line-height: 14px;
                        color: #fff;
                        padding: 12px 0;
                        border-bottom: 1px solid #443c39;
                            list-style: none;
                    }
                        .team-item {
                    float: left;
                    width: 100%;
                    margin: 0 0 30px;
                }
                .team-item .cp-thumb .caption {
                        position: absolute;
                        width: 100%;
                        float: left;
                        left: 0;
                        bottom: 0;
                        text-align: right;
                        padding: 0 10px;
                        z-index: 111;
                    }
                    .team-item .cp-thumb .caption .cp-social-list {
                        float: right;
                    }
                    .cp-social-list {
                        float: left;
                        width: 100%;
                    }
                    .cp-social-list>li {
                    display: inline-block;
                    list-style: none;
                }
                .team-item .team-text {
                    float: left;
                    width: 100%;
                    text-align: center;
                    padding: 25px 0 30px;
                    background-color: #8f8f8f;
                    position: relative;
                    z-index: 11;
                }
                .team-item .team-text h3 {
                    margin: 0 0 7px;
                }
                .team-item .team-text h3 a {
                    color: #fff;
                }
                .team-item .team-text span {
                font-family: 'Open Sans',sans-serif;
                font-size: 14px;
                line-height: 14px;
                display: block;
                color: #fff;
            }
            .cp_achievement-section {
                    float: left;
                    width: 100%;
                    background: url(http://html.crunchpress.com/big-salon/images/achivement-bg-img.png) top center;
                    background-color: #d00009;
                }
                .achievement-item {
                    float: left;
                    width: 100%;
                    position: relative;
                    overflow: hidden;
                }
                .cp_brands-section {
                    float: left;
                    width: 100%;
                    border-top: 1px solid #d1d1d1;
                    overflow: hidden;
                }
                .cp_brands-section ul {
                        float: left;
                        width: 100%;
                    }
                    .cp_brands-section ul li {
                    float: left;
                    border-left: 1px solid #f4f4f4;
                        width: 12.2%;
                        list-style: none;
                            border: none;
                }
                .cp_testimonial-section {
                    float: left;
                    width: 100%;
                    padding-bottom: 47px;
                    position: relative;
                    border-top: 1px solid #d1d1d1;
                }
                .cp_testimonial-section:before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 214px;
                    height: 449px;
                    background: url(http://html.crunchpress.com/big-salon/images/testimonial-before.jpg) no-repeat;
                }
                .cp_testimonial-section:after {
                        content: '';
                        position: absolute;
                        z-index: -11;
                        right: 0;
                        bottom: 0;
                        width: 126px;
                        height: 341px;
                        background: url(http://html.crunchpress.com/big-salon/images/testimonial-after.jpg) no-repeat;
                    }
                    .testimonial-slider-holder {
                        float: left;
                        width: 100%;
                    }
                    
                    .testimonial-slider-holder .bx-wrapper {
                            margin: 0;
                             position: relative;
                        margin: 0 auto 60px;
                        padding: 0;
                            max-width: 100%;
                        }
                        .bx-wrapper .bx-viewport {
                    -moz-box-shadow: 0 0 5px #ccc;
                    -webkit-box-shadow: 0 0 5px #ccc;
                    box-shadow: 0 0 5px #ccc;
                    border: 5px solid #fff;
                    left: -5px;
                    background: #fff;
                    -webkit-transform: translatez(0);
                    -moz-transform: translatez(0);
                    -ms-transform: translatez(0);
                    -o-transform: translatez(0);
                    transform: translatez(0);
                }
                .testimonial-slider-holder .bx-controls {
                        float: left;
                        width: 100%;
                        text-align: center;
                        position: relative;
                        top: -60px;
                    }
                    .bx-wrapper .bx-pager {
                text-align: center;
                font-size: .85em;
                font-family: Arial;
                font-weight: bold;
                color: #666;
                padding-top: 20px;
            }
            .testimonial-slider-holder .bx-controls .bx-pager {
                    display: none;
                }
                .bx-wrapper .bx-pager, .bx-wrapper .bx-controls-auto {
                    position: absolute;
                    bottom: -30px;
                    width: 100%;
                }
                .bx-wrapper .bx-pager .bx-pager-item, .bx-wrapper .bx-controls-auto .bx-controls-auto-item {
                    display: inline-block;
                }
                .bx-wrapper .bx-pager {
                    text-align: center;
                    font-size: .85em;
                    font-family: Arial;
                    font-weight: bold;
                    color: #666;
                    padding-top: 20px;
                }
                .bx-wrapper .bx-pager.bx-default-pager a {
                    background: #666;
                    text-indent: -9999px;
                    display: block;
                    width: 10px;
                    height: 10px;
                    margin: 0 5px;
                    outline: 0;
                    -moz-border-radius: 5px;
                    -webkit-border-radius: 5px;
                    border-radius: 5px;
                }
    </style>
</head>

<body>



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




    <script>
        $(document).ready(function() {
            // Activate Carousel
            $("#myCarousel").carousel();

            // Enable Carousel Indicators
            $(".item1").click(function() {
                $("#myCarousel").carousel(0);
            });
            $(".item2").click(function() {
                $("#myCarousel").carousel(1);
            });
            $(".item3").click(function() {
                $("#myCarousel").carousel(2);
            });
            $(".item4").click(function() {
                $("#myCarousel").carousel(3);
            });

            // Enable Carousel Controls
            $(".left").click(function() {
                $("#myCarousel").carousel("prev");
            });
            $(".right").click(function() {
                $("#myCarousel").carousel("next");
            });
        });
    </script>


</body>

</html>