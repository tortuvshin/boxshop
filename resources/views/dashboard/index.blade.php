@extends('layouts.dashboard')
@section('title')@parent- {{ trans('company.store_config') }} @stop
@section('panel_left_content')
@parent
@stop
@section('center_content')
    
    <h1>Удирдлагын хэсэг</h1>

    <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
            <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Жишээ</h4>
            <span class="text-muted">Жишээ</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Жишээ</h4>
            <span class="text-muted">Жишээ</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Жишээ</h4>
            <span class="text-muted">Жишээ</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Жишээ</h4>
            <span class="text-muted">Жишээ</span>
        </div>
    </div>
   
@stop

@section('script')
    @parent
@stop