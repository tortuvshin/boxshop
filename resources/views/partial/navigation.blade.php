<div class="container">
	<div class="row">
		<div class="navbar-header header-top col-xs-12 col-md-12">
			<div class="partner-shop">
				<b>Хамтын дэлгүүр - </b>
				<span>Хамтдаа хөгжье, Хамтдаа хэмнэе</span>
			</div>
			<ul class="header-user">
				@include('user.partial.menu_top')
				@if(Auth::user())
					<li class="dropdown " id="push-notices" ng-controller="PushNoticesController"  ng-click="check()" ng-focus="check()">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<span class="badge badge-notifications ng-hide" ng-cloak  ng-show="push">[[push]]</span>
							<span class="fui fui-chat"></span>{{ trans('globals.notices') }}
							<span class="visible-xs-inline">
								<span class="caret"></span>
							</span>
						</a>
						<ul class="dropdown-menu notices" role="menu" ng-if="notices.length">
							<li ng-repeat="notice in notices" class="[[notice.status]]">
								<a href="[[getLink(notice)]]" ng-click="check(notice)">[[getDesc(notice)]]</a>
							</li>
							<li>{!! link_to('user/notices/list', trans('globals.all')) !!}</li>
						</ul>
					</li>
					@if (config('app.offering_user_points'))
					<li>
						<a href="{{ route('paypal.buy_points') }}" ng-controller = "PushUsersPoints" ng-init = "pusher()">
							<span class="badge badge-points ng-hide" ng-cloak ng-show = "points" >[[ points | thousandSuffix ]]</span>
							<span class="fui fui-radio-unchecked"></span>{{ trans('store.price') }}
						</a>
					</li>
					@endif
				@endif
				@if (config('app.offering_free_products'))
					<li>
						<a href="{{ route('freeproducts.search') }}">
							<span class="fui fui-star-2"></span>{{ trans('globals.products') }}
							<span class="badge badge-freeproducts">{{ trans('globals.free') }}</span>
						</a>
					</li>
				@endif
			</ul>
		</div>
		<div class="header-search-row col-xs-12 col-md-12">
			<a class="logo col-md-3" href="/home">
				<div>
					@if($main_company['logo'])
						<span class="navbar-brand-text">
							<img class="logo-img" src="{{$main_company['logo']}}" alt="">
						</span>
					@else
						<span class="navbar-brand-text">
							<img src="{{{asset(img/logo.png)}}}" >
						</span>
					@endif
				</div>
				<div class="motto">
					<span class="promotion">Цагаа хэмнэ<br>Зардлаа хэмнэ</span>
				</div>
			</a>
			<nav ng-controller="CategoriesController" class="cat-controller-nav col-md-9">
			<div class="search-contact">
				<span class="search-tel"><i class="fa fa-phone"></i>7555-7007</span>
				<span class="search-email"><i class="fa fa-envelope"></i>service@boxshop.mn</span>
			</div>
			{!! Form::model(Request::all(),['url'=> action('ProductsController@index'), 'method'=>'GET', 'id'=>'searchForm']) !!}
			
				<div class="search-nav">

					<div class="categories-search">
						<button  type="button" class="category dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<span ng-bind="catSelected.name || '{{ isset($categories_menu[Request::get('category')]['name']) ? $categories_menu[Request::get('category')]['name'] : trans('store.all_categories') }}'">
								{{ isset($categories_menu[Request::get('category')]['name']) ? $categories_menu[Request::get('category')]['name'] : trans('store.all_categories') }}
								</span> <span class="caret">
							</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							@foreach($categories_menu as $categorie_menu)
								<li >
									<a href="javascript:void(0)"
									   ng-click="setCategorie({{ $categorie_menu['id'] }},'{{ $categorie_menu['name'] }}')" >
										{{ $categorie_menu['name'] }}
									</a>
								</li>
							@endforeach
						</ul>
					</div>
					<span class="search-ico glyphicon glyphicon-search"></span>
					<input type="hidden" name="category" value="[[refine() || '{{Request::get('category')}}']]">

					@include('partial.search_box',['angularController' => 'AutoCompleteCtrl', 'idSearch'=>'search'])

					
					<button class="search-btn" type="submit">Хайх</button>
					
				</div>
				<!-- End of search container -->
				<div class="cart">

					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#cart" class="dropdown-toggle btn btn-success cart-btn" data-toggle="dropdown" role="button" aria-expanded="false">
								@if(Auth::user()&&Auth::user()->getCartCount())
								<span class="badge badge-cart">{{ Auth::user()->getCartCount() }} </span>
								@elseif(!Auth::user() && is_array(Session::get('user.cart_content')) && array_sum(Session::get('user.cart_content')))
								<span class="badge badge-cart">{{ array_sum(Session::get('user.cart_content')) }} </span>
								@endif

								<span class="fa fa-shopping-cart"> 0 БАРАА ₮ 0.00 </span>
							</a>

				            @if(Auth::user() && Auth::user()->getCartCount() > 0)
				                <ul class="dropdown-menu" role="menu">
				                    @foreach(Auth::user()->getCartContent() as $orderDetail)
				                        <li>
				                            <a href="{{ route('products.show',[$orderDetail->product->id]) }}" >

				                                    <img src="{{ $orderDetail->product->FirstImage }}" alt="{{ $orderDetail->product->name }}" width="32" height="32"/>
				                                    {{ $orderDetail->product->name }}
				                                     - {{ trans('store.quantity') }}: {{ $orderDetail->quantity }}

				                            </a>
				                        </li>
				                    @endforeach
				                    <li><a class="btn btn-default" href="{{ route('orders.show_cart') }}" role="button">{{ trans('store.view_cart') }}</a></li>
				                </ul>
				            @elseif(!Auth::user() && is_array(Session::get('user.cart_content')))
				                <ul class="dropdown-menu cart" role="menu">
				                @foreach(Session::get('user.cart_content') as $product_id => $quantity)
				                @if($product=\App\Product::find($product_id))
				                    <li>
				                        <a href="{{ route('products.show',[$product_id]) }}" >

				                                <img src="{{ $product->first_image }}" width="32" height="32"/>
				                                {{ $product->name }}
				                                 - {{ trans('store.quantity') }}: {{ $quantity }}

				                        </a>
				                    </li>
				                @endif
				                @endforeach
				                <li><a class="btn btn-default" href="{{ route('orders.show_cart') }}" role="button" >{{ trans('store.view_cart') }}</a></li>
				                </ul>
				            @endif
						</li>
					</ul>
				</div>
			<div style="clear: both;"></div>	
		</div>
		{!! Form::close() !!}
		</nav>
		</div>
	</div>
</div>


@include('partial.navigation_bottom')