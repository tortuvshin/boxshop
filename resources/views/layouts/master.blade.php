<!DOCTYPE html>
<head>
	@section('metaLabels')
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="/">
		<meta name="description" content="">
		<meta name="author" content="">
	@show

	<link rel="icon" href="favicon.ico">
	<title>Bella</title>

	<script type="text/javascript">
	FileAPI = {
		debug: true
	};
	</script>

	{{-- Bella CSS files --}}

	@if(isset($styles))
		@foreach($styles as $style)
		{!! HTML::style(URL::asset('/css/'.$style)) !!}
		@endforeach
	@else
		<link media="all" type="text/css" rel="stylesheet" href="./css/app.css">
	@endif


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<section class = "@yield('page_class', 'home')">

	{{-- Navigation bar section --}}
	@section('navigation')
		@include('partial.navigation')
	@show

	{{-- Content page --}}
	@section('content')
		@section('panels')

			<div class="container">
				<div class="row global-panels">


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

{{-- Bella - Javascript --}}

@if(isset($scripts['header']))
	@foreach($scripts['header'] as $script)
		@if (!preg_match("~^(?:f|ht)tps?://~i", $script))
			{!! HTML::script(URL::asset('/js/'.$script)) !!}
		@else
			{!! HTML::script(URL::asset($script)) !!}
		@endif
	@endforeach
@endif

</body>
</html>
