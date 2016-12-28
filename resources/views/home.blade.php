@extends('layouts.master')

@section('title')@parent - {{ trans('globals.home') }} @stop

@include('partial.message')

@section('content')

    <section class="products_view">

 
    <div class="home-layout">


            {{-- -------------------------------------------------- --}}
            {{-- -------------------- carousel -------------------- --}}
            {{-- -------------------------------------------------- --}}

            <div class="col-md-3 col-sm-2 bella-cat mobile">
                <script>
                    // $(function() {
                    //     var demo1 = $("#demo1").slippry({
                    //         transition: 'fade',
                    //         //useCSS: false,
                    //         speed: 300,
                    //         //pause: 3000,
                    //         auto: true,
                    //         //preload: 'visible',
                    //         autoHover: false
                    //     });
                    // });
                </script>
                <div class="vert-category">
                    <div class="row">
                        <ul>
                            <li>
                                <a href="http://www.bella.mn/products?category=1%257C%25D0%2590%25D1%2580%25D1%258C%25D1%2581%2B%25D0%25B0%25D1%2580%25D1%2587%25D0%25B8%25D0%25BB%25D0%25B3%25D0%25B0%25D0%25B0">Арьс арчилгаа</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products?category=2%257C%25D0%259D%25D2%25AF%25D2%25AF%25D1%2580%2B%25D0%25B1%25D1%2583%25D0%25B4%25D0%25B0%25D0%25BB%25D1%2582">Нүүр будалт</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products?category=3%257C%25D2%25AE%25D1%2581%2B%25D0%25B1%25D0%25B8%25D0%25B5%2B%25D0%25B0%25D1%2580%25D1%2587%25D0%25B8%25D0%25BB%25D0%25B3%25D0%25B0%25D0%25B0">Үс / бие арчилгаа</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products?category=4%257C%25D2%25AE%25D0%25BD%25D1%258D%25D1%2580%25D1%2582%25D1%258D%25D0%25B9%2B%25D1%2583%25D1%2581">Үнэртэй ус</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products?category=5%257C%25D0%25AD%25D1%2580%25D2%25AF%25D2%25AF%25D0%25BB%2B%25D0%25BC%25D1%258D%25D0%25BD%25D0%25B4">Эрүүл мэнд</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products?category=5%257C%25D0%25AD%25D1%2580%25D2%25AF%25D2%25AF%25D0%25BB%2B%25D0%25BC%25D1%258D%25D0%25BD%25D0%25B4">Багс</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products">Бүх бараа</a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-sm-10 home-carousel-box">

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

                                f
                            </div>

                        </div> {{-- end item --}}

                    @endforeach

                    </div> {{-- end carousel-inner --}}

                </div>

            </div>
                
             {{-- end carousel --}}
<div class="product-features boxshadow" >
<ul class="nav testtab nav-justified">
  <li style="" class="active borderleft"><a href="#tab_a" data-toggle="pill">Өнөөдөр их зарагдсан</a></li>
  <li class="borderright"><a href="#tab_b" data-toggle="pill">7 хоног их зарагдсан </a></li>
  
</ul>


    <div id="tab_a" class="tab-pane fade in active topongo">
     
          <div class="col-md-8 prodpadding" >
              <div class="col-md-6 box foo prodpadding" >
               
                    <img  src="img/product/baraa.png" >
              
              </div>
              <div class="col-md-6 prodpadding" >
                <div >
                    <h4  class="prodmargin">
                       FOAM
                    </h4>
                 <h3> <b>  30,000₮</b></h3>
                 <hr>
                  <p>
                      Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor…
                  </p>
                </div>
                  
              </div>
          </div>

          <div class="col-md-4">
          <div class="row">
              <div class="col-md-6">
                  <div class="box foo">
                  <img src="img/product/baraa32.png" >
                  </div>
              </div>
              <div class="col-md-6">
                   <div >
                    <h4  class="prodmargin">
                      DR.VITA
                    </h4>
                 <h3> <b>    25,000₮</b></h3>
                
                
                </div>
              </div>
          </div>
             <div class="row">
              <div class="col-md-6">
                  <div class="box foo">
                  <img  src="img/product/baraa42.png" >
                  </div>
              </div>
              <div class="col-md-6">
                    <div >
                    <h4  class="prodmargin">
                        SNOW PACK
                    </h4>
                 <h3> <b>   15,000₮</b></h3>
                 
                </div>
              </div>
          </div>
              
          </div>
    
    </div>
    <div id="tab_b" class="tab-pane fade topongo">
        
          <div class="col-md-8">
              <div class="col-md-8">
                  a
              </div>
              <div class="col-md-4">
                  b
              </div>
          </div>

          <div class="col-md-4">
              <div class="col-md-6">
                  a
              </div>
              <div class="col-md-6">
                  b
              </div>
          </div>
   
    </div>

  
</div>

  <!-- product section start-->
              <section>
                <div class="home-cat-trend">
                      

                    <div class="col-lg-3 prodsec"  >
                        <div  class="prodsectobgcolor">
                            <p class="prodsecto">COSMETIC & Tools</p>

                        </div>
                        <div class="row demo" style="background: url(img/product/producthead.png) bottom left no-repeat;">
                        <ul class="prodsectoul">
                            <li>
                                <a href="http://www.bella.mn/products?category=1%257C%25D0%2590%25D1%2580%25D1%258C%25D1%2581%2B%25D0%25B0%25D1%2580%25D1%2587%25D0%25B8%25D0%25BB%25D0%25B3%25D0%25B0%25D0%25B0">Арьс арчилгаа</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products?category=2%257C%25D0%259D%25D2%25AF%25D2%25AF%25D1%2580%2B%25D0%25B1%25D1%2583%25D0%25B4%25D0%25B0%25D0%25BB%25D1%2582">Нүүр будалт</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products?category=3%257C%25D2%25AE%25D1%2581%2B%25D0%25B1%25D0%25B8%25D0%25B5%2B%25D0%25B0%25D1%2580%25D1%2587%25D0%25B8%25D0%25BB%25D0%25B3%25D0%25B0%25D0%25B0">Үс / бие арчилгаа</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products?category=4%257C%25D2%25AE%25D0%25BD%25D1%258D%25D1%2580%25D1%2582%25D1%258D%25D0%25B9%2B%25D1%2583%25D1%2581">Үнэртэй ус</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products?category=5%257C%25D0%25AD%25D1%2580%25D2%25AF%25D2%25AF%25D0%25BB%2B%25D0%25BC%25D1%258D%25D0%25BD%25D0%25B4">Эрүүл мэнд</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products?category=5%257C%25D0%25AD%25D1%2580%25D2%25AF%25D2%25AF%25D0%25BB%2B%25D0%25BC%25D1%258D%25D0%25BD%25D0%25B4">Багс</a>
                                
                            </li>
                            <li>
                                <a href="http://www.bella.mn/products">Бүх бараа</a>
                                
                            </li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-lg-9" class="sectionprodborder">


                    <div class="col-md-5 " >
                         <div class="box foo ">   
                            
                    <img alt="Big title goes here" title="Big title goes here" style="    width: 100%;" src="img/product/slidema.png">
                          
                        </div>
                       

                    </div>

                    <div class="col-lg-7 prodpadding">
                        <div class="col-md-6 clearfix product-overflow prodpadding">


    
    <div class="product-box clearfix product-overflow ng-scope" ng-controller="ProductBox">

        <div class="product-reviews  hide ">
            
            <small>
                Харах
            </small>
        </div>

        
        <div class="product-img-box" ng-click="goTo('http://www.bella.mn/products/30')">

                <span class="product-image-hover"></span>       
                            <img src="img/product/baraa3.png?h=250" alt="PINK TONE UP">
                    </div>
<!-- 
        <p class="product-description"></p>
 -->
        
        <div >

            
            <div class="col-md-6 col-sm-4 col-xs-4 wrapper add_to_card" ng-click="submit('#add-30')">
                <div class="glyphicon glyphicon-shopping-cart option ">
                                            <form method="POST" action="http://www.bella.mn/user/orders/addTo/cart/30" accept-charset="UTF-8" id="add-30" class="ng-pristine ng-valid"><input name="_method" type="hidden" value="PUT" autocomplete="off"><input name="_token" type="hidden" value="NT7ohrAq7xknoLgYlANFpBgMvWhx7FCOGwfwLa53" autocomplete="off">
                        </form>
                                    </div>
                <span id="card_text">Сагс</span>
            </div>

            
            <div class="col-md-3 col-md-4 col-sm-4 col-xs-4 wrapper add_to_heart" ng-click="goTo('http://www.bella.mn/user/orders/addTo/wishlist/30')">
                <div class="glyphicon glyphicon-heart option"></div>
            </div>

            
            <div class="col-md-3 col-md-4 col-sm-4 col-xs-4 wrapper quick_view" ng-click="goTo('http://www.bella.mn/products/30')">
                <div class="glyphicon glyphicon-eye-open option"></div>
            </div>
            

        </div>
        
        <h6 class="product-name">
            <a href="#">
                PINK TONE UP
            </a>
        </h6>

        <div class="product-price">
            80,000₮
        </div>

    </div>
    


</div>
<div class="col-md-6 clearfix product-overflow prodpadding">

    
    <div class="product-box clearfix product-overflow ng-scope" ng-controller="ProductBox">

        <div class="product-reviews  hide ">
            
            <small>
                Харах
            </small>
        </div>

        
        <div class="product-img-box" ng-click="goTo('http://www.bella.mn/products/30')">

                <span class="product-image-hover"></span>       
                            <img src="img/product/baraa4.png?h=250" alt="PINK TONE UP">
                    </div>
<!-- 
        <p class="product-description"></p>
 -->
        
        <div >

            
            <div class="col-md-6 col-sm-4 col-xs-4 wrapper add_to_card" ng-click="submit('#add-30')">
                <div class="glyphicon glyphicon-shopping-cart option ">
                                            <form method="POST" action="http://www.bella.mn/user/orders/addTo/cart/30" accept-charset="UTF-8" id="add-30" class="ng-pristine ng-valid"><input name="_method" type="hidden" value="PUT" autocomplete="off"><input name="_token" type="hidden" value="NT7ohrAq7xknoLgYlANFpBgMvWhx7FCOGwfwLa53" autocomplete="off">
                        </form>
                                    </div>
                <span id="card_text">Сагс</span>
            </div>

            
            <div class="col-md-3 col-md-4 col-sm-4 col-xs-4 wrapper add_to_heart" ng-click="goTo('http://www.bella.mn/user/orders/addTo/wishlist/30')">
                <div class="glyphicon glyphicon-heart option"></div>
            </div>

            
            <div class="col-md-3 col-md-4 col-sm-4 col-xs-4 wrapper quick_view" ng-click="goTo('http://www.bella.mn/products/30')">
                <div class="glyphicon glyphicon-eye-open option"></div>
            </div>
            

        </div>
        
        <h6 class="product-name">
          <a href="#">
                PINK TONE UP
            </a>
        </h6>

        <div class="product-price">
            70,000₮
        </div>

    </div>
    


</div>
<div class="col-md-6 clearfix product-overflow prodpadding">

    
    <div class="product-box clearfix product-overflow ng-scope" ng-controller="ProductBox">

        <div class="product-reviews  hide ">
            
            <small>
                Харах
            </small>
        </div>

        
        <div class="product-img-box" ng-click="goTo('http://www.bella.mn/products/30')">

                <span class="product-image-hover"></span>       
                            <img src="img/product/baraa5.png?h=250" alt="PINK TONE UP">
                    </div>
<!-- 
        <p class="product-description"></p>
 -->
        
        <div >

            
            <div class="col-md-6 col-xs-4 wrapper add_to_card" ng-click="submit('#add-30')">
                
              
            </div>

            
            <div class="col-md-3 col-md-4 col-sm-4 col-xs-4 wrapper add_to_heart" ng-click="goTo('http://www.bella.mn/user/orders/addTo/wishlist/30')">
                <div class="glyphicon glyphicon-heart option"></div>
            </div>

            
            <div class="col-md-3 col-md-4 col-sm-4 col-xs-4 wrapper quick_view" ng-click="goTo('http://www.bella.mn/products/30')">
                <div class="glyphicon glyphicon-eye-open option"></div>
            </div>
            

        </div>
        
        <h6 class="product-name">
            <a href="#">
                PINK TONE UP
            </a>
        </h6>

        <div class="product-price">
            60,000₮
        </div>

    </div>
    


</div>
<div class="col-md-6 clearfix product-overflow prodpadding">

    
    <div class="product-box clearfix product-overflow ng-scope" ng-controller="ProductBox">

        <div class="product-reviews  hide ">
            
            <small>
                Харах
            </small>
        </div>

        
        <div class="product-img-box" ng-click="goTo('http://www.bella.mn/products/30')">

                <span class="product-image-hover"></span>       
                            <img src="img/product/baraa2.png?h=250" alt="PINK TONE UP">
                    </div>
<!-- 
        <p class="product-description"></p>
 -->
        
        <div >

            
            <div class="col-md-6 col-sm-4 col-xs-4 wrapper add_to_card" ng-click="submit('#add-30')">
                <div class="glyphicon glyphicon-shopping-cart option ">
                                            <form method="POST" action="http://www.bella.mn/user/orders/addTo/cart/30" accept-charset="UTF-8" id="add-30" class="ng-pristine ng-valid"><input name="_method" type="hidden" value="PUT" autocomplete="off"><input name="_token" type="hidden" value="NT7ohrAq7xknoLgYlANFpBgMvWhx7FCOGwfwLa53" autocomplete="off">
                        </form>
                                    </div>
                <span id="card_text">Сагс</span>
            </div>

            
            <div class="col-md-3 col-md-4 col-sm-4 col-xs-4 wrapper add_to_heart" ng-click="goTo('http://www.bella.mn/user/orders/addTo/wishlist/30')">
                <div class="glyphicon glyphicon-heart option"></div>
            </div>

            
            <div class="col-md-3 col-md-4 col-sm-4 col-xs-4 wrapper quick_view" ng-click="goTo('http://www.bella.mn/products/30')">
                <div class="glyphicon glyphicon-eye-open option"></div>
            </div>
            

        </div>
        
        <h6 class="product-name">
            <a href="#">
                PINK TONE UP
            </a>
        </h6>

        <div class="product-price">
           45,000₮
        </div>

    </div>
    


</div>



                    </div>
                    </div>
                
                </div>
              </section>
                <!-- product section end-->


            {{-- -------------------------------------------------- --}}
            {{-- ------------------ Product List ------------------ --}}
            {{-- -------------------------------------------------- --}}

            @parent

            @section('center_content')
                <div class="product-trend" style="">
                {{-- viewed suggestions --}}
                <div class="clearfix home-products-wrapper">
               
                    <div class="col-md-12">
                        @if (Auth::check())
                            <h4 class="home-title-section">Бараанууд</h4>
                        @else
                            <h4 class="home-title-section">Бараанууд</h4>
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

                    <div class="col-md-12">
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

                    <div class="col-md-12">
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
                </div>
            @stop {{-- end center_content --}}


            {{-- -------------------------------------------------- --}}
            {{-- -------------------- Left Bar -------------------- --}}
            {{-- -------------------------------------------------- --}}
    </section> {{-- end products_view --}}

    

@stop {{-- end content --}}
