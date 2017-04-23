@extends('layouts/master')
@section('page_class') wrapper-page @stop

@section('navigation')
	&nbsp;
@stop

@include('partial.message')


@section('content')

	<div class="login-page">
	  <div class="login" ng-controller="LoginController">

		{!! Form::open(['url'=>'/login','name'=>'loginForm', 'class'=>'form-horizontal','role'=>"form",'method'=>"POST"]) !!}

		{{ csrf_field() }}

	    <form class="login-form">
	      <input type="email" placeholder="{{ trans('user.email_address') }}" name="email" value="{{ old('email') }}" id="log-form" required/>
	      <input type="password" placeholder="{{ trans('user.password_message.do_you_have') }}" ng-disabled="!havePassword" name="password" id="log-form" />
	      <button class="btn btn-primary"><i class="fa fa-sign-in"></i>{{ trans('user.sign_in_my_account') }}</button>
	      <button class="btn btn-primary btn-back"><i class="fa fa-angle-left"></i>Буцах</button>
	      <!-- нүүр хуудаслуу буцах товч-->

		<!-- {!! Recaptcha::render() !!} -->
			
		<!-- <input ng-disabled="!havePassword" type="checkbox" name="remember"> {{ trans('user.remember_me') }} -->
					
	    <p class="message"><a href="{{ url('/register') }}" class="btn btn-link">{{ trans('user.register') }}</a> | <a href="{{ url('/password/reset') }}" class="btn btn-link">{{ trans('user.forgot_your_password') }}?</a></p>
	    </form>

		{!! Form::close() !!}
	  
	  </div>
	</div>
@endsection

@section('footer')
	&nbsp;
@stop

@section('scripts')
@parent

@stop
