@extends('layouts.master')

@section('title')@parent - {{ trans('globals.home') }} @stop

@include('partial.message')

@section('content')

<section class="products_view">
    
    <div class="home-layout container">
      <div class="row">
        <div class="home-left col-xs-12 col-md-3">
          <div class="row">
            <div class="vert-category col-md-12 col-xs-12">
                  <ul>
                      <li>
                          <a href="#">Эрэгтэй хувцас</a>
                      </li>
                      <li>
                          <a href="#">Эмэгтэй хувцас</a>
                      </li>
                      <li>
                          <a href="#">Хүүхдийн хувцас, хэрэглэл</a>
                      </li>
                      <li>
                          <a href="#">Гоо сайхан</a>
                      </li>
                      <li>
                          <a href="#">Эрүүл мэнд</a>
                      </li>
                      <li>
                          <a href="#">Бичэг хэрэг</a>
                      </li>
                      <li>
                          <a href="#">Бэлэг дурсгал</a>
                      </li>
                      <li>
                          <a href="#">Цахилгаан бараа</a>
                      </li>
                      <li>
                          <a href="#">Гэр ахуй</a>
                      </li>
                  </ul>
            </div>
          </div>
        </div>
        <div class="home-right col-xs-12 col-md-9">
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

                              <hr> f
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
                        <!-- <div class="col-md-12 col-xs-12 bestselling-product">
                          @foreach ($suggestion['categories'] as $product)
                              @include('products.partial.productBox', $product)
                          @endforeach
                        </div> -->
                      </div>

                      {{-- viewed suggestions --}}

                      <div class="home-bestselling col-md-12 col-xs-12">
                          @foreach ($suggestion['viewed'] as $product)
                              @include('products.partial.productBox', $product)
                          @endforeach
                      </div>
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
                <i class="fa fa-home"></i>
                <span>Бодит дэлгүүрт<br>бараа байршуулах</span>
              </div> 
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <i class="fa fa-pie-chart"></i>
                <span>Барааны тооцоогоо<br>хянах боломж</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <i class="fa fa-money" aria-hidden="true"></i>
                <span>НӨАТ<br>баримт олгох</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <i class="fa fa-truck"></i>
                <span>Хүргэлт</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="inner-box">
                <i class="fa fa-archive"></i>
                <span>Бараа буцаан<br>олголт</span>
              </div>
            </div>
          </div>
        </div>{{---- End of advantage -----}}
      </div>{{------- End of Home Right -------}}
</section> {{-- end products_view --}}
@stop {{-- end content --}}
