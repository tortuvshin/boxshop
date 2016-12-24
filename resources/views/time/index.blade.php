@extends('layouts.master')

@section('title')@parent - {{ trans('globals.home') }} @stop

@include('partial.message')

@section('content')

	<section class="get-time">
		<div class="container ">
			<div class="row"> 
			<br><br>
				<div class="col-md-12 get-time" >
					<h3>Цаг авах</h3>
				</div><br>		
				{!! Form::open(['url'=>'/time', 'class'=>'form-horizontal', 'role'=>'form']) !!}
				<form class="time-form">  		
			  		<div class="col-sm-4">
				      	<div class="form-group">	
				      		<select class="form-control" id="" name="sector" placeholder="Үйлчилгээ">
							    <option>Салбар</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
							</select><br>			      		
							<select class="form-control" id="service"  name="service" placeholder="Үйлчилгээ">
							    <option>Үйлчилгээ</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
							</select><br>
							<div class='input-group date' id='datetimepicker1'>
			                    <input type='text' class="form-control" name="service_time" placeholder="Он сар өдөр" />
			                    <span class="input-group-addon">
			                        <span class="glyphicon glyphicon-calendar"></span>
			                    </span>
			                </div>
			                <script type="text/javascript">
					            $(function () {
					                $('#datetimepicker1').datetimepicker();
					            });
					        </script>					  
						  	
						</div>
				    </div>
				    <div class="col-sm-4"> 
				        <div class="form-group">			      		
											  
						  	<input type="text" class="form-control" id="user-name" name="userName" placeholder="Нэрээ оруулна уу."><br>

						 	 <input type="number" class="form-control" id="user-phone" name="userNumber" data-bind="value:replyNumber" placeholder="Дугаараа оруулна уу." /><br>
						 	 <input type="text" class="form-control" id="service-addition" name="addition" placeholder="Нэмэлт"><br>

						 	 
						</div>
				    </div>
				    <div class="col-sm-4">
				    	<textarea class="form-control description" rows="5" id="description" name="description" placeholder="Тайлбар бичнэ үү"></textarea>   			     
				    </div><br>
				    <div class="col-md-12 get-time" >
						<div class="btn-group pull-right ">
	                         <button class="btn btn-info get-time-btn" type="submit">
	                         Авах
	                         </button> 
	                     </div>
					</div><br>
				</form>

    		{!! Form::close() !!}
		  </div>
		</div><br>

	</section>
  

@stop {{-- end content --}}
