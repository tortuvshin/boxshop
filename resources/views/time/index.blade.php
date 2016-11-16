@extends('layouts.master')

@section('title')@parent - Home }} @stop

@section('content')

    <section class="products_view">

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>



<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">
        <div class="carousel-caption">
          <h3>Sell </h3>
          <p>Money Money.</p>
        </div>
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell </h3>
          <p>Lorem ipsum...</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">
  <h3>Цаг авах</h3><br>
  <div class="row">
    <div class="col-sm-4">
        <div class="well">
          <select class="form-control" id="sel1">
            <option>Үйлчилгээ</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
        <div class="well">
          <select class="form-control" id="sel1">
            <option>Салбар</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
        <div class="well">
          <input type="date" class="form-control" id="userTime" placeholder="Он сар өдөр" data-date-inline-picker="false" data-date-open-on-focus="true" />
        </div>
    </div>
    <div class="col-sm-4">
      
      <div class="well">
          <input type="text" class="form-control" id="userName" placeholder="Нэр">
      </div>
      <div class="well">
          <input type="text" class="form-control" id="userPhone" placeholder="Утас">
      </div>
      <div class="well">
          <input type="text" class="form-control" id="userAdd" placeholder="Нэмэлт">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="well">
        <textarea class="form-control" rows="5" id="comment"></textarea>
      </div>
      
      <button type="button" class="btn">Цаг авах</button>
      
      
    </div>
  </div>
</div><br>


</body>
</html>


    </section> {{-- end products_view --}}

@stop {{-- end content --}}
