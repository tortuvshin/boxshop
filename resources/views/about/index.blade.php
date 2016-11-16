@extends('layouts.master')

@section('title')@parent - About }} @stop

@section('content')

    <section>



<div class="jumbotron">
  <div class="container bg-3 text-center">
     <div class="row">
     	<div class="col-sm-7">
     		<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
     	</div>
     	<div class="col-sm-3">
     		<p>Some text.....<p>
     	</div>
     </div>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">
  <h2>Ажилчид</h2><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Some text1..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text2.</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>

<div class="container-fluid bg-2 text-center">
	<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%; height: 50%" alt="Image">
</div><br><br>

<div class="container text-center">
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div class="row">
    <div class="col-sm-4">
        <h2>Үйл ажиллагаа</h2>
        <div class="panel-group" id="accordion">
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Үйлчилгээ 1</a>
		        </h4>
		      </div>
		      <div id="collapse1" class="panel-collapse collapse in">
		        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Үйлчилгээ 2</a>
		        </h4>
		      </div>
		      <div id="collapse2" class="panel-collapse collapse">
		        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Үйлчилгээ 3</a>
		        </h4>
		      </div>
		      <div id="collapse3" class="panel-collapse collapse">
		        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Үйлчилгээ 4</a>
		        </h4>
		      </div>
		      <div id="collapse4" class="panel-collapse collapse">
		        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Үйлчилгээ 5</a>
		        </h4>
		      </div>
		      <div id="collapse5" class="panel-collapse collapse">
		        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</div>
		      </div>
		    </div>
		  </div>
    </div>
    <div class="col-sm-4">
      <h2>Бүтээгдэхүүн</h2>
      <p>Some texts</p>
	</div>
    <div class="col-sm-4">
      <h2>Үйлчилгээ</h2> 
      <ul class="nav nav-tabs">
	    <li class="active"><a href="">Сургалт</a></li>
	    <li><a href="">Худалдаа</a></li>
	    <li><a href="">Нүүр будаг</a></li>
	  </ul>     
    </div>
  </div>
</div><br><br>

<div class="jumbotron">
  <div class="container bg-3 text-center">
     <div class="row">
     	<h2> Үйлчлүүлэгчийн сэтгэгдэл</h2>
     </div>
  </div>
</div>

</section> 

@stop {{-- end content --}}
