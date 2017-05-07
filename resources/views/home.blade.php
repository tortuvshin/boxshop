@extends('layouts.master')

@section('title')

@parent - {{ trans('globals.home') }} @stop

@include('partial.message')

@section('css')
@parent
    <style type="text/css">
        .vert-category {
            visibility: visible;
        }
    </style>
@stop
@section('content')

@include ('partial.social_buttons')

<section class="products_view">
    
    <div class="home-layout container">
      <div class="row">
        <!-- <div class="home-left col-xs-12 col-md-3">
          <div class="row">
            
          </div>
        </div> -->
        <div class="home-right col-xs-12 col-md-9 pull-right">
          <div class="row">
            <div class="col-md-12 col-xs-12 home-carousel-box">
              <div id="store-home-carousel" class="carousel slide" data-ride="carousel">
                  {{-- indicators --}}
                  <ol class="carousel-indicators">
                      @for ($s=0; $s
                      <count($suggestion[ 'carousel']); $s++) <li data-target="#store-home-carousel" data-slide-to="{{ $s }}" @if ($s==0) class="active" @endif>
                        </li>
                        @endfor
                  </ol>
                  <!-- Wrapper for slides -->
                    <div class="carousel-inner img-animate" role="listbox">
                      <?php $pos = 0; ?>
                      @foreach ($suggestion['carousel'] as $product) {{-- slide items --}}
                      <div class="item @if ($i++==0) active @endif">

                          @if (isset($banner[$pos]))
                          <img src="{{ $banner[$pos++] }}" alt="{{ $product['name'] }}"> @else
                          <img src="/img/no-image.jpg" alt="{{ $product['name'] }}"> @endif {{-- panel --}}
                          <div class="jumbotron {{ $jumbotronClasses[mt_rand(0,1)] }} ">

                              <h5>{{ $product['name'] }}</h5>

                              <p class="description">{{ str_limit($product['description'], 200,'...') }}</p>

                              @if ($product['price'] > 0)
                              <p class="price">
                                  <strong>{!! \Utility::showPrice($product['price']) !!}</strong>
                              </p>
                              @endif
                          </div>
                      </div> {{-- end item --}} 
                      @endforeach
                    </div> {{-- end carousel-inner --}}
                </div>
              </div> 
              <div class="home-bestselling col-md-12 col-xs-12">
                <div class="row">
                  <div class="col-md-12 col-xs-12 bestselling-title">
                    <a href="{{ route('products') }}">
                      <span class="b-title">Үнэлгээ өндөр</span>
                    </a>
                  </div>
                  <div class="col-md-12 col-xs-12 bestselling-product">
                      <div class="row">
                        @foreach ($suggestion['purchased'] as $product)
                          @include('products.partial.productBox', $product)
                        @endforeach
                      </div>
                  </div>
                </div>
              </div>
              <div class="home-motto col-md-12 col-xs-12">
                <div class="row">
                  <div class="col-md-4 col-xs-12">
                    <div class="motto-1">
                      <i class="fa fa-clock-o"></i>
                      <span>Цагаа хэмнэ</span> 
                    </div>
                  </div>
                  <div class="col-md-4 col-xs-12">
                    <div class="motto-2">
                      <i class="fa fa-money"></i>
                      <span>Зардлаа хэмнэ</span>
                    </div>
                  </div>
                  <div class="col-md-4 col-xs-12">
                    <div class="motto-3">
                      <i class="fa fa-users"></i>
                      <span>Хамтдаа хөгжье<br>Хамтдаа хэмнэе</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="home-cat-trend col-md-12 col-xs-12">
                <div class="row">
                      {{-- categories suggestions --}}
                      <div class="home-bestselling col-md-12 col-xs-12">
                          <a href="{{ route('products') }}">
                            <span class="b-title">Шинээр нэмэгдсэн</span>
                          </a>
                        <div class="col-md-12 col-xs-12 bestselling-product">
                          @foreach ($suggestion['categories'] as $product)
                              @include('products.partial.productBox', $product)
                          @endforeach
                        </div>
                      </div>

                      {{-- viewed suggestions --}}

                      <div class="home-bestselling col-md-12 col-xs-12">
                          @foreach ($suggestion['viewed'] as $product)
                              @include('products.partial.productBox', $product)
                          @endforeach
                      </div>
                </div>
              </div>
            <div class="brands col-md-12 col-xs-12">
              <div class="row">
                <a href="{{ route('products') }}">
                  <span class="b-title">Брэндүүд</span>
                </a>
                 <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">brand 1</div>
                        <div class="swiper-slide">brand 2</div>
                        <div class="swiper-slide">brand 3</div>
                        <div class="swiper-slide">brand 4</div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
              </div>
            </div>
        </div>{{----- end of row -----}}
        <div class="home-advantage col-md-12 col-xs-12">
          <div class="row">
            <div class="col-md-2">
              <div class="inner-box">
                <div class="advantage-bg" style="background: url('{{asset('img/boxshop/d1.png')}}')"></div>
                <span class="advantage-desc">Бараа байршуулах<br>0% шимтгэл</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <div class="advantage-bg" style="background: url('{{asset('img/boxshop/d2.png')}}')"></div>
                <span class="advantage-desc">Бодит дэлгүүрт бараагаа <br>байршуулах боломж</span>
              </div> 
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <div class="advantage-bg" style="background: url('{{asset('img/boxshop/d3.png')}}')"></div>
                <span class="advantage-desc">Худалдан авагчдад <br>НӨАТ баримт олгоно</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <div class="advantage-bg" style="background: url('{{asset('img/boxshop/d4.png')}}')"></div>
                <span class="advantage-desc">Бараа үйлчилгээний <br>үнэлгээний систем</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <div class="advantage-bg" style="background: url('{{asset('img/boxshop/d5.png')}}')"></div>
                <span class="advantage-desc"> Бараа бүтээгэхүүний үлдэгдэл, <br>төлбөр тооцоогоо хянах боломж</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <div class="advantage-bg" style="background: url('{{asset('img/boxshop/d6.png')}}')"></div>
                <span class="advantage-desc">Мөнгө түгжихгүй,<br>найдвартай шилжүүлэг</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <div class="advantage-bg" style="background: url('{{asset('img/boxshop/d7.png')}}')"></div>
                <span class="advantage-desc">Түргэн шуурхай <br>хүргэлтийн үйлчилгээ</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <div class="advantage-bg" style="background: url('{{asset('img/boxshop/d8.png')}}')"></div>
                <span class="advantage-desc"> Бараа буцаах, <br> солих боломж</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <div class="advantage-bg" style="background: url('{{asset('img/boxshop/d9.png')}}')"></div>
                <span class="advantage-desc">Монголын онцлогт <br>таарсан худалдааны систем</span>
              </div>
            </div>
          </div>
        </div>{{---- End of advantage -----}}
      </div>{{------- End of Home Right -------}}
</section> {{-- end products_view --}}
@section ('scrpits')
@parent
<script type="text/javascript">
</script>

@stop
@stop {{-- end content --}}
