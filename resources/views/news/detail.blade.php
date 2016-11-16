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
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>My Portfolio</h1>      
    <p>Some text that represents "Me"...</p>
  </div>
</div>
                             
<div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
       
        <div class="item active">
            <img src="img/2.jpg">
        </div>

    <div class="item">
      <img src="img/3.jpg" >
    </div>

          <div class="item">
              <img src="img/4.jpg">
          </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Өмнөх</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Дараах</span>
  </a>
</div>

<div>
<p>
  Зочид буудлын салбарын үүсэл хөгжил
Зочид буудал нь хүн амын тодорхой хэсгийг түр хугацааны орон байраар ханган үйлчлэхэд зориулагдсан
 тусгай тоноглол төхөөрөмж бүхий өрөө байруудтай иж бүрэн үйлчилгээний газар мөн. Зорчин явах, зочид буудал гэсэн хоёр үг
  салшгүй холбоотой байдаг. Тухайлбал, Азийн худалдааны замыг даган жинчдэд зориулсан дэн буудлууд 
  (caravansary) эрт дээр үеэс үйл ажиллагаагаа явуулж иржээ. Сар жилээр үргэлжилдэг, урт хугацааны аяныхаа замд жинчид, 
  худалдаачид алжаалаа тайлах, мал хөсгөө амраах, эд бараагаа хадгалах зайлшгүй шаардлага гардаг байжээ. Европ, Америкт
   Inn ба Tavern гэж нэрлэдэг буудлуудыг морины өдөрт туулах зай, боломжийг бодолцон замын дагуу барьж байгуулж иржээ. 
   Тухайн үеийн нийгмийн хөгжлийн түвшин, үйлчилгээ эрхлэгчдийн санхүүгийн боломж зэргээс шалтгаалан үйлчилгээний чанар муу,
    орчин нь бохир заваан байжээ. Зорчин явагч өөрийн амрах орыг наад зах нь нэг хүнтэй хуваалцах, ачаалал ихтэй замд 4 хүний 
    дунд нэг ор оногдох явдал тэр үед хэвийн үзэгдэл байсан байна. Эдгээр буудлууд нь хүмүүсийг байрлуулаад зогсохгүй, 
    морь малыг нь адгуулах хашаа саравчтай байдгаараа зочид буудлын үйлчилгээний салбарын бие даасан төлөөлөгч болж чадсан юм.
     Дээр үеэс уламжлагдан ирсэн Inn гэдэг үг одоо хүртэл орчин үеийн олонх зочид буудалд хэрэглэгдсээр байна. 


</p>
<hr>

<center><p>Ангилал: Бараа, Хувцас, Бусад бараа </p></center>

<hr>

<center><p>Таг: Бараа, Хувцас, Бусад бараа </p></center> 
                                                  <span class="glyphicon glyphicon-globe">SOCIAL ICON</span>
                                                  <span class="glyphicon glyphicon-globe">SOCIAL ICON</span>
                                                  <span class="glyphicon glyphicon-globe">SOCIAL ICON</span>


<div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
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
</div><br>

<div class="container-fluid bg-3 text-center">    
 
</div><br><br>

<p>
COMMENT
</p>
<p>
ИЖИЛ ТӨСТЭЙ БАРААГ ХАРУУЛ</p>
</body>
</html>
