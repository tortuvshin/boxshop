@extends('layouts.master')

@section('title')@parent - Home }} @stop

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <section class="products_view">
    home
    <div class="row" style="background-color:aliceblue;" >
      
      <h1><center>BELLA</center></h1>

</div>                       
                           
<div class="row" style="background-color:white;" >

          <div class="col-sm-6"  > 
             <img src="img/test.jpg" width="690" height="370">
          </div>

<div class="col-sm-6" style="background-color:Gainsboro;">
            <div class="row">

                          <h2>$100000000000000</h2>
                          
                                <i style="font-size:24px" class="fa">&#xf26b;</i>
                                <i style="font-size:24px" class="fa">&#xf166;</i>
                                <i style="font-size:24px" class="fa">&#xf0d5;</i>
                                <i style="font-size:24px" class="fa">&#xf16d;</i>

                                                     <p>Зочид буудлын салбарын үүсэл хөгжил
                                                    Зочид буудал нь хүн амын тодорхой хэсгийг түр хугацааны орон байраар ханган үйлчлэхэд зориулагдсан тусгай тоноглол төхөөрөмж бүхий өрөө байруудтай иж бүрэн үйлчилгээний газар мөн. Зорчин явах, зочид буудал гэсэн хоёр үг салшгүй холбоотой байдаг. Тухайлбал, Азийн худалдааны замыг даган жинчдэд зориулсан дэн буудлууд (caravansary) эрт дээр үеэс үйл ажиллагаагаа явуулж иржээ.. </p>

                                                            <p><hr></p>
                                                                      <p> <center>Зочид буудлын салбарын үүсэл хөгжил   </center></p>
                                                          <p><hr></p>
                          <div class="well"> ХОТОД ҮНЭГҮЙ ХҮРГЭЖ ӨГНӨ.</div>

                   </div>
          </div>            
</div>

    <div>
          <img src="img/test.jpg"  width="304" height="236" align="left">   
          <img src="img/test.jpg"  width="304" height="236" align="center"> 
          <img src="img/test.jpg"  width="304" height="236" align="right">   
    </div>
<br>
<div class="col-sm-12">
           
                                  <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                                    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
                                  </ul>

  <div class="tab-content">

            <div id="home" class="tab-pane fade in active">
                      <h3>HOME</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>

            <div id="menu3" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>

  </div>
             <p> Зочид буудлын салбарын үүсэл хөгжил </p>
              
              
                  <ul class="pager" >
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                  </ul>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

                          <div class="item active">
                            <img src="img_chania.jpg" alt="Chania" width="460" height="345">
                          </div>

      <div class="item">
        <img src="img_chania2.jpg" alt="Chania" width="460" height="345">
      </div>
    
                              <div class="item">
                                <img src="img_flower.jpg" alt="Flower" width="460" height="345">
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
</div>




    </section> {{-- end products_view --}}

@stop {{-- end content --}}
