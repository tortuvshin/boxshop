@extends('layouts/master')
@section('page_class') wrapper-page @stop

@section('navigation')
	&nbsp;
@stop

@include('partial.message')

@section('content')
<div class="login-page">
  <div class="login">

    {!! Form::open(['url'=>'/register', 'class'=>'form-horizontal', 'role'=>'form']) !!}

    <form class="login-form">
      <input type="text" placeholder="{!! trans('user.first_name') !!}" name="first_name" id="log-form"/>
      <input type="text" placeholder="{!! trans('user.last_name') !!}" name="last_name" id="log-form"/>
      <input type="email" placeholder="{!! trans('user.email') !!}" name="email" id="log-form"/>
      <input type="password" placeholder="{!! trans('user.password') !!}" name="password" id="log-form"/>

      <!-- {!! Recaptcha::render() !!} -->
      <button type="submit"><i class="fa fa-user-plus"></i> {{ trans('user.create_my_account') }}</button>
      <button class="btn-back"><i class="fa fa-angle-left"></i>Буцах</button>
      <!-- нүүр хуудаслуу буцах товч-->
	  <p class="message"><a href="/login">{{  trans('user.sign_in_my_account') }}</a></p>
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