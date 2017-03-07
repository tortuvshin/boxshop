<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" ng-app="Bella">
<head>
	@section('metaLabels')
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="/">
		<meta name="description" content="">
		<meta name="author" content="">
	@show

	<link rel="icon" href="{{{ asset('img/fav-ico.ico') }}}">
	<title>@section('title'){{ $main_company['website_name']}} @show</title>

	<script type="text/javascript">
	FileAPI = {
		debug: true
	};
	</script>

	@section('css')
		{!! Html::style('/css/lib/angular-notify.min.css') !!}
		{!! Html::style('/css/lib/font-awesome.min.css') !!}
		{!! Html::style('/css/lib/carousel.css') !!}
		{!! Html::style('/css/lib/angucomplete-alt.css') !!}
		{!! Html::style('/css/app.css') !!}
	@show

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div id="fb-root"></div>
<section class = "@yield('page_class', 'home')">

	{{-- Navigation bar section --}}
	@section('navigation')
		@include('partial.navigation')
	@show

	{{-- Breadcrumbs section --}}
	<div>
		@section('breadcrumbs')
		@show
	</div>

	{{-- Content page --}}
	@section('content')
		@section('panels')

			<div>
				<div class="global-panels">

					{{-- left panel --}}
					@if (isset($panel['left']))
						{{-- desktops validation --}}
						<div class="col-sm-{{ $panel['left']['width'] or '3' }} col-md-{{ $panel['left']['width'] or '3' }} {{ $panel['left']['class'] or '' }}">
							@section('panel_left_content')
								Left content
							@show
						</div>
					@endif

					{{-- center content --}}
					<div class="col-xs-12 col-sm-{{ $panel['center']['width'] or '9' }} col-md-{{ $panel['center']['width'] or '9' }}">
						@section('center_content')
							Center content
						@show
					</div>

					{{-- right panel --}}
					@if (isset($panel['right']))
						<div class="hidden-xs col-sm-{{ $panel['right']['width'] or '2' }} col-md-{{ $panel['right']['width'] or '2' }} {{ $panel['right']['class'] or '' }}">
							@section('panel_right_content')
								Right content
							@show
						</div>
					@endif

				</div> {{-- globlas panels --}}
			</div> {{-- container --}}

		@show
	@show

</section>

@section('footer')
	<footer>
		@include('partial.footer')
	</footer>
@show

{!! Html::script('/js/lib/jquery.min.js') !!}
{!! Html::script('/js/lib/angular.min.js') !!}
{!! Html::script('/js/lib/angular-route.min.js') !!}
{!! Html::script('/js/lib/angular-sanitize.min.js') !!}
{!! Html::script('/js/lib/ui-bootstrap-tpls.min.js') !!}
{!! Html::script('/js/lib/angular-animate.min.js') !!}
{!! Html::script('/js/lib/loading-bar.min.js') !!}
{!! Html::script('/js/lib/angular-mocks.js') !!}
{!! Html::script('/js/lib/angular-touch.min.js') !!}
{!! Html::script('/js/lib/bootstrap.min.js') !!}
{!! Html::script('/js/lib/xtForms/xtForm.js') !!}
{!! Html::script('/js/lib/xtForms/xtForm.tpl.min.js') !!}

<script>

	/**
	 * ngModules
	 * Angularjs modules requires by bella
	 * @type {Array}
	 */
	var ngModules = [
		'ngRoute', 'ngSanitize', 'LocalStorageModule',
		'ui.bootstrap', 'chieffancypants.loadingBar', 'xtForm',
		'cgNotify', 'ngTouch', 'angucomplete-alt'
	];

	@section('before.angular') @show

	(function(){
		angular.module('Bella',ngModules,
		function($interpolateProvider){
			$interpolateProvider.startSymbol('[[');
			$interpolateProvider.endSymbol(']]');
		}).config(function(localStorageServiceProvider, cfpLoadingBarProvider,$locationProvider){
			cfpLoadingBarProvider.includeSpinner = false;
			localStorageServiceProvider.setPrefix('tb');
			$locationProvider.html5Mode({enabled:true,rewriteLinks:false});
		});
	})();

</script>

{{-- bella functions --}}
{!! Html::script('/js/app.js') !!}

@section('scripts')
	{{-- Bella angucomplete-alt.js version --}}
	{!! Html::script('/js/lib/angucomplete-alt.js') !!}

	{{-- Bella-bower components --}}
	{!! Html::script('/js/lib/angular-notify.min.js') !!}
	{!! Html::script('/js/lib/angular-local-storage.min.js') !!}
@show
</body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&version=v2.8&appId=1766388183636585";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
	$(window).bind("load resize", function(){    
  	var container_width = $('#likebox-wrapper').width();    
    $('#likebox-wrapper').html('<div class="fb-page" ' + 
    'data-href="https://www.facebook.com/boxshop.mn/"' +
    ' data-width="' + container_width + '" data-height="450" data-show-faces="true" ' +
    'data-header="true"></div>');
    FB.XFBML.parse( );    
});
</script>
</html>
