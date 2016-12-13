@extends('layouts.master')

@section('title')@parent - {{ trans('globals.home') }} @stop

@include('partial.message')

@section('content')

    <section class="products_view">

        <div>

            {{-- -------------------------------------------------- --}}
            {{-- -------------------- carousel -------------------- --}}
            {{-- -------------------------------------------------- --}}

            <div class="col-md-2 bella-cat mobile">
                <script>
                    $(function() {
                        var demo1 = $("#demo1").slippry({
                            transition: 'fade',
                            //useCSS: false,
                            speed: 300,
                            //pause: 3000,
                            auto: true,
                            //preload: 'visible',
                            autoHover: false
                        });
                    });
                </script>
                <div class="vert-category">
                    <div class="row">
                        <ul>
                            <li>
                                <a href="http://mimico.mn/category/ars-archilgaa">Арьс арчилгаа</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/nuur-budalt">Нүүр будалт</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/us-bie-archilgaa">Үс / бие арчилгаа</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/unertei-us">Үнэртэй ус</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/bagc">Багц</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/eruul-mend">Эрүүл мэнд</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/dijital-baraa">Дижитал бараа</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/hyamdraltai-baraa">Хямдралтай бараа</a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-6 home-carousel-box">



                <div id="store-home-carousel" class="carousel slide" data-ride="carousel">

                    {{-- indicators --}}
                    <ol class="carousel-indicators">
                        @for ($s=0; $s<count($suggestion['carousel']); $s++)
                            <li data-target="#store-home-carousel" data-slide-to="{{ $s }}" @if ($s==0) class="active" @endif ></li>
                        @endfor
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                    <?php $pos = 0; ?>
                    @foreach ($suggestion['carousel'] as $product)

                        {{-- slide items --}}
                        <div class="item @if ($i++==0) active @endif">

                            @if (isset($banner[$pos]))
                                <img src= "{{ $banner[$pos++] }}" alt="{{ $product['name'] }}">
                            @else
                                <img src="/img/no-image.jpg" alt="{{ $product['name'] }}">
                            @endif
                            {{-- panel --}}
                            <div class="jumbotron {{ $jumbotronClasses[mt_rand(0,1)] }} ">

                                <h5>{{ $product['name'] }}</h5>

                                <p class = "description">{{ str_limit($product['description'], 200,'...') }}</p>

                                @if ($product['price'] > 0)
                                    <p class = "price">
                                        <strong>{!! \Utility::showPrice($product['price']) !!}</strong>
                                    </p>
                                @endif

                                <hr>

                                <div class="btn-group" role="group" aria-label="...">

                                    <a href="{{ route('products.show',[$product['id']]) }}" class="btn btn-default btn-sm">
                                         <div class = "glyphicon glyphicon-shopping-cart"></div>&nbsp;{{ trans('store.add_to_cart') }}
                                    </a>

                                    @if(Auth::user())

                                        <a href="{{ route('orders.add_to_order',['wishlist', $product[($product['type']=='freeproduct')?'parent_id':'id']]) }}" class="btn btn-default btn-sm">
                                            <div class = "glyphicon glyphicon-heart"></div>&nbsp;{{ trans('store.add_to_wish_list') }}
                                        </a>

                                    @else

                                        <a href="/login" class="btn btn-default btn-sm">
                                            <div class = "glyphicon glyphicon-heart"></div>&nbsp;{{ trans('store.add_to_wish_list') }}
                                        </a>

                                    @endif

                                    <a href="{{ route('products.show',[$product['id']]) }}" class="btn btn-default btn-sm">

                                        <div class = "glyphicon glyphicon-eye-open"></div>&nbsp;{{ trans('store.viewDetails') }}

                                    </a>

                                </div>

                            </div>

                        </div> {{-- end item --}}

                    @endforeach

                    </div> {{-- end carousel-inner --}}

                </div>

            </div>
            <div class="col-md-4 home-carousel-box">
                <div class="row">
                    sdaasdsa
                </div>
                <div class="row">
                    sdaasdsa
                </div>
                <div class="row">
                    sdaasdsa
                </div>
                
            </div>


             {{-- end carousel --}}
<div class="row"><br></div>

<div class="row">
 

  
<br>

<ul class="nav testtab nav-justified">
  <li class="active"><a href="#tab_a" data-toggle="pill">DAYLY DEALS</a></li>
  <li><a href="#tab_b" data-toggle="pill">WEEKLY DEALS</a></li>
  
</ul>

  <div class="tab-content">
    <div id="tab_a" class="tab-pane fade in active topongo">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="tab_b" class="tab-pane fade topongo">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  
  </div>
</div>


            {{-- -------------------------------------------------- --}}
            {{-- ------------------ Product List ------------------ --}}
            {{-- -------------------------------------------------- --}}

            @parent

            @section('center_content')

                {{-- viewed suggestions --}}
                <div class="clearfix home-products-wrapper">

                    <div class="col-lg-12">
                        @if (Auth::check())
                            <h4 class="home-title-section">{{ trans('store.suggestions.viewed') }}</h4>
                        @else
                            <h4 class="home-title-section">{{ trans('store.suggestions.viewed_unlogged') }}</h4>
                        @endif
                    </div>

                    <div class="container-fluid marketing">
                        <div class="row">
                            @foreach ($suggestion['viewed'] as $product)
                                @include('products.partial.productBox', $product)
                            @endforeach
                        </div>
                    </div>

                </div>

                {{-- categories suggestions --}}
                <div class="clearfix home-products-wrapper">

                    <div class="col-lg-12">
                        <h4 class="home-title-section">{{ trans('store.suggestions.categories') }}</h4>
                    </div>

                    <div class="container-fluid marketing">
                        <div class="row">
                            @foreach ($suggestion['categories'] as $product)
                                @include('products.partial.productBox', $product)
                            @endforeach
                        </div>
                    </div>

                </div>

                {{-- trending suggestions --}}
                <div class="clearfix home-products-wrapper">

                    <div class="col-lg-12">
                        @if (Auth::check())
                            <h4 class="home-title-section">{{ trans('store.suggestions.trends') }}</h4>
                        @else
                            <h4 class="home-title-section">{{ trans('store.suggestions.trends_unlogged') }}</h4>
                        @endif
                    </div>

                    <div class="container-fluid marketing">
                        <div class="row">
                            @foreach ($suggestion['purchased'] as $product)
                                @include('products.partial.productBox', $product)
                            @endforeach
                        </div>
                    </div>

                </div>

            @stop {{-- end center_content --}}


            {{-- -------------------------------------------------- --}}
            {{-- -------------------- Left Bar -------------------- --}}
            {{-- -------------------------------------------------- --}}

            
        </div> {{-- end container-fluid --}}

    </section> {{-- end products_view --}}

      <!-- product section start-->
              <section>
                <div class="container" style="padding-left: 0px;
    padding-right: 0px;
    box-shadow: 0 3px 6px 0 rgba(51, 51, 51, 0.3);">
                      
                    <div class="col-lg-2" style="       padding-right: 0;
    padding-left: 0px;">
                        <div class="" style="background-color: #3face3;">
                            <p style="text-transform: uppercase;
    font-size: 25px;
    line-height: 30px;
    color: #fff;
    margin-bottom: 0;
    padding: 15px 20px;
    word-wrap: break-word;">COMPUTER & ELECTRONICS</p>
                        </div>
                        <div class="row demo" style="background: url(http://demo2.wpdance.com/imgs/wd_glory/supermarket2/supermarket2_product_group5_head.png) bottom left no-repeat;">
                        <ul style=" padding-top: 14px;
    padding-left: 0px;
    margin-bottom: 0;
    padding-bottom: 220px;
    border-right: 1px solid #ebebeb;">

                        <li style="border-color: #ebebeb; ">Tops</li>

                            <li>
                                <a href="http://mimico.mn/category/ars-archilgaa">Арьс арчилгаа</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/nuur-budalt">Нүүр будалт</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/us-bie-archilgaa">Үс / бие арчилгаа</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/unertei-us">Үнэртэй ус</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/bagc">Багц</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/eruul-mend">Эрүүл мэнд</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/dijital-baraa">Дижитал бараа</a>
                                
                            </li>
                            <li>
                                <a href="http://mimico.mn/category/hyamdraltai-baraa">Хямдралтай бараа</a>
                                
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-lg-10" style="border-top: 2px solid #3face3; padding: 20px">

                    <div class="col-lg-5 " >
                         <div class="box foo ">   
                            
                    <img alt="Big title goes here" title="Big title goes here" style="    width: 100%;" src="http://demo2.wpdance.com/imgs/wd_glory/supermarket2/banner/supermarket2_product_group7_content.jpg">
                          
                        </div>
                       

                    </div>
                    <div class="col-lg-7" style="padding-left: 0px;
    padding-right: 0px;">
                        <div class="col-lg-4 clearfix product-overflow">

    
    <div class="product-box clearfix product-overflow ng-scope" ng-controller="ProductBox">

        <div class="product-reviews  hide ">
            
            <small>
                Харах
            </small>
        </div>

        
        <div class="product-img-box" ng-click="goTo('http://localhost/products/30')">

                <span class="product-image-hover"></span>       
                            <img src="/img/pt-default/6.jpg?h=250" alt="PINK TONE UP">
                    </div>
<!-- 
        <p class="product-description"></p>
 -->
        
        <div class="product-actions actions">

            
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4 wrapper add_to_card" ng-click="submit('#add-30')">
                <div class="glyphicon glyphicon-shopping-cart option ">
                                            <form method="POST" action="http://localhost/user/orders/addTo/cart/30" accept-charset="UTF-8" id="add-30" class="ng-pristine ng-valid"><input name="_method" type="hidden" value="PUT" autocomplete="off"><input name="_token" type="hidden" value="NT7ohrAq7xknoLgYlANFpBgMvWhx7FCOGwfwLa53" autocomplete="off">
                        </form>
                                    </div>
                <span id="card_text">Сагс</span>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper add_to_heart" ng-click="goTo('http://localhost/user/orders/addTo/wishlist/30')">
                <div class="glyphicon glyphicon-heart option"></div>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper quick_view" ng-click="goTo('http://localhost/products/30')">
                <div class="glyphicon glyphicon-eye-open option"></div>
            </div>
            

        </div>
        
        <h6 class="product-name">
            <a href="http://localhost/products/30">
                PINK TONE UP
            </a>
        </h6>

        <div class="product-price">
            USD95.00
        </div>

    </div>
    


</div>
<div class="col-lg-4 clearfix product-overflow">

    
    <div class="product-box clearfix product-overflow ng-scope" ng-controller="ProductBox">

        <div class="product-reviews  hide ">
            
            <small>
                Харах
            </small>
        </div>

        
        <div class="product-img-box" ng-click="goTo('http://localhost/products/30')">

                <span class="product-image-hover"></span>       
                            <img src="/img/pt-default/6.jpg?h=250" alt="PINK TONE UP">
                    </div>
<!-- 
        <p class="product-description"></p>
 -->
        
        <div class="product-actions actions">

            
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4 wrapper add_to_card" ng-click="submit('#add-30')">
                <div class="glyphicon glyphicon-shopping-cart option ">
                                            <form method="POST" action="http://localhost/user/orders/addTo/cart/30" accept-charset="UTF-8" id="add-30" class="ng-pristine ng-valid"><input name="_method" type="hidden" value="PUT" autocomplete="off"><input name="_token" type="hidden" value="NT7ohrAq7xknoLgYlANFpBgMvWhx7FCOGwfwLa53" autocomplete="off">
                        </form>
                                    </div>
                <span id="card_text">Сагс</span>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper add_to_heart" ng-click="goTo('http://localhost/user/orders/addTo/wishlist/30')">
                <div class="glyphicon glyphicon-heart option"></div>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper quick_view" ng-click="goTo('http://localhost/products/30')">
                <div class="glyphicon glyphicon-eye-open option"></div>
            </div>
            

        </div>
        
        <h6 class="product-name">
            <a href="http://localhost/products/30">
                PINK TONE UP
            </a>
        </h6>

        <div class="product-price">
            USD95.00
        </div>

    </div>
    


</div>
<div class="col-lg-4 clearfix product-overflow">

    
    <div class="product-box clearfix product-overflow ng-scope" ng-controller="ProductBox">

        <div class="product-reviews  hide ">
            
            <small>
                Харах
            </small>
        </div>

        
        <div class="product-img-box" ng-click="goTo('http://localhost/products/30')">

                <span class="product-image-hover"></span>       
                            <img src="/img/pt-default/6.jpg?h=250" alt="PINK TONE UP">
                    </div>
<!-- 
        <p class="product-description"></p>
 -->
        
        <div class="product-actions actions">

            
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4 wrapper add_to_card" ng-click="submit('#add-30')">
                <div class="glyphicon glyphicon-shopping-cart option ">
                                            <form method="POST" action="http://localhost/user/orders/addTo/cart/30" accept-charset="UTF-8" id="add-30" class="ng-pristine ng-valid"><input name="_method" type="hidden" value="PUT" autocomplete="off"><input name="_token" type="hidden" value="NT7ohrAq7xknoLgYlANFpBgMvWhx7FCOGwfwLa53" autocomplete="off">
                        </form>
                                    </div>
                <span id="card_text">Сагс</span>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper add_to_heart" ng-click="goTo('http://localhost/user/orders/addTo/wishlist/30')">
                <div class="glyphicon glyphicon-heart option"></div>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper quick_view" ng-click="goTo('http://localhost/products/30')">
                <div class="glyphicon glyphicon-eye-open option"></div>
            </div>
            

        </div>
        
        <h6 class="product-name">
            <a href="http://localhost/products/30">
                PINK TONE UP
            </a>
        </h6>

        <div class="product-price">
            USD95.00
        </div>

    </div>
    


</div>
<div class="col-lg-4 clearfix product-overflow">

    
    <div class="product-box clearfix product-overflow ng-scope" ng-controller="ProductBox">

        <div class="product-reviews  hide ">
            
            <small>
                Харах
            </small>
        </div>

        
        <div class="product-img-box" ng-click="goTo('http://localhost/products/30')">

                <span class="product-image-hover"></span>       
                            <img src="/img/pt-default/6.jpg?h=250" alt="PINK TONE UP">
                    </div>
<!-- 
        <p class="product-description"></p>
 -->
        
        <div class="product-actions actions">

            
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4 wrapper add_to_card" ng-click="submit('#add-30')">
                <div class="glyphicon glyphicon-shopping-cart option ">
                                            <form method="POST" action="http://localhost/user/orders/addTo/cart/30" accept-charset="UTF-8" id="add-30" class="ng-pristine ng-valid"><input name="_method" type="hidden" value="PUT" autocomplete="off"><input name="_token" type="hidden" value="NT7ohrAq7xknoLgYlANFpBgMvWhx7FCOGwfwLa53" autocomplete="off">
                        </form>
                                    </div>
                <span id="card_text">Сагс</span>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper add_to_heart" ng-click="goTo('http://localhost/user/orders/addTo/wishlist/30')">
                <div class="glyphicon glyphicon-heart option"></div>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper quick_view" ng-click="goTo('http://localhost/products/30')">
                <div class="glyphicon glyphicon-eye-open option"></div>
            </div>
            

        </div>
        
        <h6 class="product-name">
            <a href="http://localhost/products/30">
                PINK TONE UP
            </a>
        </h6>

        <div class="product-price">
            USD95.00
        </div>

    </div>
    


</div>
<div class="col-lg-4 clearfix product-overflow">

    
    <div class="product-box clearfix product-overflow ng-scope" ng-controller="ProductBox">

        <div class="product-reviews  hide ">
            
            <small>
                Харах
            </small>
        </div>

        
        <div class="product-img-box" ng-click="goTo('http://localhost/products/30')">

                <span class="product-image-hover"></span>       
                            <img src="/img/pt-default/6.jpg?h=250" alt="PINK TONE UP">
                    </div>
<!-- 
        <p class="product-description"></p>
 -->
        
        <div class="product-actions actions">

            
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4 wrapper add_to_card" ng-click="submit('#add-30')">
                <div class="glyphicon glyphicon-shopping-cart option ">
                                            <form method="POST" action="http://localhost/user/orders/addTo/cart/30" accept-charset="UTF-8" id="add-30" class="ng-pristine ng-valid"><input name="_method" type="hidden" value="PUT" autocomplete="off"><input name="_token" type="hidden" value="NT7ohrAq7xknoLgYlANFpBgMvWhx7FCOGwfwLa53" autocomplete="off">
                        </form>
                                    </div>
                <span id="card_text">Сагс</span>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper add_to_heart" ng-click="goTo('http://localhost/user/orders/addTo/wishlist/30')">
                <div class="glyphicon glyphicon-heart option"></div>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper quick_view" ng-click="goTo('http://localhost/products/30')">
                <div class="glyphicon glyphicon-eye-open option"></div>
            </div>
            

        </div>
        
        <h6 class="product-name">
            <a href="http://localhost/products/30">
                PINK TONE UP
            </a>
        </h6>

        <div class="product-price">
            USD95.00
        </div>

    </div>
    


</div>
<div class="col-lg-4 clearfix product-overflow">

    
    <div class="product-box clearfix product-overflow ng-scope" ng-controller="ProductBox">

        <div class="product-reviews  hide ">
            
            <small>
                Харах
            </small>
        </div>

        
        <div class="product-img-box" ng-click="goTo('http://localhost/products/30')">

                <span class="product-image-hover"></span>       
                            <img src="/img/pt-default/6.jpg?h=250" alt="PINK TONE UP">
                    </div>
<!-- 
        <p class="product-description"></p>
 -->
        
        <div class="product-actions actions">

            
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4 wrapper add_to_card" ng-click="submit('#add-30')">
                <div class="glyphicon glyphicon-shopping-cart option ">
                                            <form method="POST" action="http://localhost/user/orders/addTo/cart/30" accept-charset="UTF-8" id="add-30" class="ng-pristine ng-valid"><input name="_method" type="hidden" value="PUT" autocomplete="off"><input name="_token" type="hidden" value="NT7ohrAq7xknoLgYlANFpBgMvWhx7FCOGwfwLa53" autocomplete="off">
                        </form>
                                    </div>
                <span id="card_text">Сагс</span>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper add_to_heart" ng-click="goTo('http://localhost/user/orders/addTo/wishlist/30')">
                <div class="glyphicon glyphicon-heart option"></div>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 wrapper quick_view" ng-click="goTo('http://localhost/products/30')">
                <div class="glyphicon glyphicon-eye-open option"></div>
            </div>
            

        </div>
        
        <h6 class="product-name">
            <a href="http://localhost/products/30">
                PINK TONE UP
            </a>
        </h6>

        <div class="product-price">
            USD95.00
        </div>

    </div>
    


</div>

                    </div>
                    </div>
                
                </div>
              </section>
                <!-- product section end-->

@stop {{-- end content --}}
