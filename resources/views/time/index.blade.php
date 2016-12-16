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
		  		<div class="col-sm-4">
			      	<div class="form-group">			      		
						<select class="form-control" id="service" placeholder="Үйлчилгээ">
						    <option>Үйлчилгээ</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						</select><br>					  
					  	
					 	 <input type="text" class="form-control" id="user-name" placeholder="Нэрээ оруулна уу."><br>

					 	 <input type="number" class="form-control" id="user-phone" data-bind="value:replyNumber" placeholder="Дугаараа оруулна уу." /><br>
					</div>
			    </div>
			    <div class="col-sm-4"> 
			        <div class="form-group">			      		
						<select class="form-control" id="" placeholder="Үйлчилгээ">
						    <option>Салбар</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						</select><br>					  
					  	
					 	 <input type="text" class="form-control" id="service-addition" placeholder="Нэмэлт"><br>

					 	 <div class='input-group date' id='datetimepicker1'>
		                    <input type='text' class="form-control" placeholder="Он сар өдөр" />
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
			    	<textarea class="form-control description" rows="5" id="description" placeholder="Тайлбар бичнэ үү"></textarea>   			     
			    </div><br>
			    <div class="col-md-12 get-time" >
					<div class="btn-group pull-right ">
                         <a class="btn btn-info get-time-btn" href="http://localhost/user/orders/checkOut">
                         Авах
                         </a>
                     </div>
				</div><br>
		  </div>
		</div><br>

	</section>
  

@stop {{-- end content --}}
