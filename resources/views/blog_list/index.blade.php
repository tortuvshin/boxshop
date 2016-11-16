@extends('layouts.master')

@section('title')@parent - About }} @stop

@section('content')

<div class="container-fluid bg-grey">
  <div class="row">
    
    <div class="col-sm-12">
    <div class="thumbnail text-center bg-grey" >
      
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
        </div>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="container-fluid text-center bg-grey">
 
  <div class="row text-center slideanim">
  
    </div>
    <div class="col-sm-6">
      <div class="thumbnail">
        <img src="img/newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="thumbnail">
        <img src="img/sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
<div class="col-sm-6">
      <div class="thumbnail">
        <img src="img/newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="thumbnail">
        <img src="img/sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>

      <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
  </ul>

  </div><br>
  


<!-- Container (Pricing Section) -->
<div  class="container-fluid">
 
  <div class="row slideanim">
    
   
   <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>

<div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
<div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div>
</div>


@stop {{-- end content --}}
