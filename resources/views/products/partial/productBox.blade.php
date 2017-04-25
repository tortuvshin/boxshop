{{-- col beging   --}}
<?php
if (isset($productSuggestion)) {
    $auxProduct=isset($product) ? $product : '';
    $product=$productSuggestion;
}
 ?>
<div class="col-xs-12 col-sm-6 col-md-3 clearfix product-overflow">

    {{-- product box begin --}}
    <div class="product-box clearfix" ng-controller = "ProductBox">

        <div class="product-reviews @if (!$product['rate_val']) hide @endif">
            {!! \Utility::thousandSuffix($product['rate_val']) !!}
            <small>
                {{ trans_choice('store.review', $product['rate_val']) }}
            </small>
        </div>

        @if ($product['type'] == 'freeproduct')
            <div class="free-products-box-sign"><span>{{ trans('globals.free') }}</span></div>
        @endif

        <div class="product-img-box" ng-click = "goTo('{{ route('products.show',[$product['id']]) }}')">

                <span class="product-image-hover"></span>       
            @if (isset($product["features"]["images"][0]))
                <img  src='{{ $product["features"]["images"][0] }}' alt="{{ $product['name'] }}">
            @else
                <img  src='/img/no-image.jpg'  alt="{{ $product['name'] }}">
            @endif
        </div>
<!-- 
        <p class="product-description">{{ str_limit($product['description'], 100,'...') }}</p>
 -->
        {{-- actions begin --}}
        <div class="product-actions actions">

            <div class="col-md-12 actions-head">
                {{-- wish list (only products not free) --}}
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 add-heart"  ng-click = "goTo('{{ route('orders.add_to_order',['wishlist', $product[($product['type']=='freeproduct')?'parent_id':'id']]) }}')">
                    <div class="glyphicon glyphicon-heart option"></div>
                </div>

                {{-- view --}}
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 quick-view " ng-click = "goTo('{{ route('products.show',[$product['id']]) }}')">
                    <div class="glyphicon glyphicon-eye-open option"></div>
                </div>
            </div>
            
            {{-- add to cart (only products not free)  --}}
            <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4 actions-head add-card" ng-click="submit('#add-{{ $product['id'] }}')">
                <div class = "glyphicon glyphicon-shopping-cart option " >
                    @if ($product['type'] != 'freeproduct')
                        {!! Form::open(['method' => 'put', 'route' => ['orders.add_to_order','cart', $product['id']], 'id' => 'add-'.$product['id'] ]) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
                <span id="card_text">Сагсанд хийх</span>
            </div>
        </div>
        {{-- actions end --}}
        <div class="product-info">
            <h6 class="product-name">
            <a href = "{{ route('products.show',[$product['id']]) }}">
                {{ $product['name'] }}
            </a>
        </h6>

        <div class="product-price">
            <!-- {!! \Utility::showPrice($product['price']) !!} -->
            {{ $product['price'] }} ₮
        </div>

        <div class="product-reviews-summary short empty">
            <div class="product-rating">
                <div class="rating-result-0">
                    
                </div>
            </div>
            <div class="reviews-actions">
                <a class="action add" href="http://tokithemes.com/aloshop/fr/vitra-asterisk-wall-clock-1.html#review-form">
                    0            Үнэлгээ        </a>
            </div>
        </div>
        </div>

    </div>
    {{-- product box end --}}


</div>
{{-- col end   --}}
<?php
if (isset($productSuggestion)) {
    $product=$auxProduct;
}
 ?>