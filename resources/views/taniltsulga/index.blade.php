@extends('layouts.master')

@section('title')@parent - {{ trans('globals.home') }} @stop

@include('partial.message')

@section('content')


    <div class="container">
    <section>
        <div class="row">
            <div class="cp-heding-style1">
                <h2>Салоны танилцуулга</h2>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="">
                        <img src="img/tanilcuulga/salon.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <h3>Мэргэжлийн Нүүр хувиргагч Төгс үзэсгэлэнт Академи </h3>
                        <p>Монголын анхны  Мэргэжлийн Нүүр хувиргагч Төгс үзэсгэлэнт Академи нь 2014  онд байгуулагдсан бөгөөд  Монголын гоо сайхан нүүр будах урлагыг дэлхийн түвшинд таниулах гадаад орны мэргэжлийн академитай хамтран ажиллах, туршлага солилцох, сургалт семинар уулзалт зохион байгуулах, дэмжлэг туслалцаа үзүүлэх, мэргэжлийн байгууллага тэдгээрийн уялдаа холбоог нэгтгэх энэ чиглэлээр нийгмийн эмзэг бүлгийн иргэдэд  дэмжлэг туслалцаа үзүүлэх, сургалт зөвлөгөөг нээлттэй хүртээмжтэй хүргэх зорилготойгоор үйл ажиллагаа явуулж буй нийгэмд үйлчилдэг төрийн бус байгууллага юм.</p>
                        <div class="bottom-holder">
                            <div class="inner">
                                <p>Академийн үйл ажиллагааны гол чиглэл нь  нүүр хувиргагч бэлтгэх анхан, дунд, гүнзгий шатны мэргэжлийн чиг баримжаа олгох  сургалтыг зохион байгуулдаг. 
</p>
                                <em>Маке up  салон нь өдөр тутамын будалт болон гоёлын, хуримын будалтыг тогтмол хийж байна</span></em>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    

    <section class="cp_promotion-section pd-b80">
        <div class="row">
            <div class="cp-heding-style1">
                <h2>Будалт</h2>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <div class="promotion-item">
                        <div class="text">
                            <h3><a href="product-detail.html">Гоёлын будалт </a></h3>
                            <p>Энэ жилийн тренд нь голдуу саа зонхилсон будалт байгаа. Манай салоны  гоёлын будалт нь дотроо хуримын, art, хүлээн авалтын будалт хийдэг.</p>
                        </div>
                        <div class="thumb">
                            <img src="img/tanilcuulga/promotion1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="promotion-item">
                        <div class="text">
                            <h3><a href="product-detail.html">Энгийн будалт</a></h3>
                            <p>Манай салон нь өдөр тутамдаа зориулж энгийн будалт хийдэг бөгөөд энэ нь дотроо express, бизнес, өдөр тутам гэсэн 3 ангилалаар буддаг.</p>
                        </div>
                        <div class="thumb">
                            <img src="img/tanilcuulga/promotion2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>
    <section class="cp_our-services-section pd-t80">
    <div class="container">
        <div class="cp-heding-style2">
            <h2>Үйлчилгээний төрөл</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="img/tanilcuulga/service2.jpg" alt="">
                    <div class="services-caption">
                        <h3>Энгийн будалт</h3>
                        <span class="cp_linebar-style"></span>
                        <span class="glyphicon glyphicon-ok icomoon"></span>
                        <a href="services.html" class="service_detail cp-btn-style2">Өдөр тутамд зориулагдсан хэт тод биш хувь хүний царайны онцлогт нь тааруулж засаж тодруулж өгнө.</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="img/tanilcuulga/service1.jpg" alt="">
                    <div class="services-caption">
                        <h3>Гоёлын будалт</h3>
                        <span class="cp_linebar-style"></span>
                        <span class="glyphicon glyphicon-ok icomoon"></span>
                        <a href="services.html" class="service_detail cp-btn-style2">Өдөр тутмын энгийн будалтыг бодвол илүү тод,хурц,хүнийг бүрэн өөрчилсөн,өөрийгөө тэс өөрөөр харах боломж юм.</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="img/tanilcuulga/service3.jpg" alt="">
                    <div class="services-caption">
                        <h3>Ганцааричлсан сургалт</h3>
                        <span class="cp_linebar-style"></span>
                        <span class="glyphicon glyphicon-ok icomoon"></span>
                        <a href="services.html" class="service_detail cp-btn-style2">Зөвхөн өөрөө өөртөө зориулсан,дүр төрхөндөө таарсан будалтыг заалгаж мэдэж авдаг.</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="img/tanilcuulga/service4.jpg" alt="">
                    <div class="services-caption">
                        <h3>Групп сургалт</h3>
                        <span class="cp_linebar-style"></span>
                        <span class="glyphicon glyphicon-ok icomoon"></span>
                        <a href="services.html" class="service_detail cp-btn-style2">Найз нөхөд,хамт олонд зориулсан сургалт.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cp_our-team-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style1">
            <h2>Манай шилдэг артистууд</h2>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-5">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="img/tanilcuulga/bella.jpg" alt="">
                       
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Белла</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="img/tanilcuulga/daria.jpg" alt="">
                     
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Дариа</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="img/tanilcuulga/ulzii.jpg" alt="">
                   
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Өлзий</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="img/tanilcuulga/deegii.jpg" alt="">
                    
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Дээгий</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="img/tanilcuulga/maralaa.jpg" alt="">
                        
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Маралаа</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-5">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="img/tanilcuulga/shagai.jpg" alt="">
                       
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Шагай</a></h3>
                    </div>
                </div>
            </div>

        
        </div>
    </div>
</section>

<section class="cp_pricing-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style2">
            <h2>Үйлчилгээний тариф</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm">

                <div class="pricing-item">
                    <div class="cp-thumb">
                        <img src="img/tanilcuulga/budalt1.jpg" alt="">
                    </div>
                    <div class="pricing-text">
                        <span class="price">Энгийн будалт</span>
                        <a href="#" class="btn-hair-service">Бэлла:</a>
                        <ul class="price-list">
                            <li> 100 000 </li>
                        </ul>
                        <a href="#" class="btn-hair-service">Артистууд:</a>
                        <ul class="price-list">
                            <li> 60 000 </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm">

                <div class="pricing-item">
                    <div class="cp-thumb">
                        <img src="img/tanilcuulga/budalt4.jpg" alt="">
                    </div>
                    <div class="pricing-text">
                        <span class="price">Гоёлын будалт</span>
                        <a href="#" class="btn-hair-service">Бэлла:</a>
                        <ul class="price-list">
                            <li> 150 000 </li>
                        </ul>
                        <a href="#" class="btn-hair-service">Артистууд:</a>
                        <ul class="price-list">
                            <li> 80 000 </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm">

                <div class="pricing-item">
                    <div class="cp-thumb">
                        <img src="img/tanilcuulga/surgalt1.jpg" alt="">
                    </div>
                    <div class="pricing-text">
                        <span class="price">Сургалт</span>
                        <a href="#" class="btn-hair-service">Бэлла:</a>
                        <ul class="price-list">
                            <li> 1 500 000 </li>
                        </ul>
                        <a href="#" class="btn-hair-service">Артистууд:</a>
                        <ul class="price-list">
                            <li> 800 000 </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm">

                <div class="pricing-item">
                    <div class="cp-thumb">
                        <img src="img/tanilcuulga/budalt2.jpg" alt="">
                    </div>
                    <div class="pricing-text">
                        <span class="price">Групп сургалт</span>
                        <a href="#" class="btn-hair-service">Бэлла:</a>
                        <ul class="price-list">
                            <li> 200 000(хүний) </li>
                        </ul>
                        <a href="#" class="btn-hair-service">Артистууд:</a>
                        <ul class="price-list">
                            <li> .... </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cp_equipment-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style1">
            <h2>Манай эвентүүд</h2>
        </div>
        <div class="row pretty-gallery">
            <div class="col-md-4 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="img/tanilcuulga/event1.jpg" alt="">
                        <a href="img/tanilcuulga/event1.jpg" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="img/tanilcuulga/event2.jpg" alt="">
                        <a href="img/tanilcuulga/event2.jpg" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="img/tanilcuulga/event3.jpg" alt="">
                        <a href="img/tanilcuulga/event3.jpg" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cp_achievement-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style2">
            <h2>Бидний амжилт</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="http://donacion.organos.ua.es/submenu1/premio.jpg" alt="">
                    <div class="services-caption">
                        <span class="glyphicon glyphicon-certificate icomoon"></span>
                        <h3>World cup OMC hairworld </h3>
                        <span class="cp_linebar-style"></span>
                        <a href="services.html" class="service_detail cp-btn-style2">2014 онд  Герман Улсад зохиогдсон   World cup OMC hairworld Дэлхийн аварга шалгаруулах тэмцээнд Маке up төрлөөр  оролцож  Дэлхийн 100 гаруй орноос 10-р  байранд орсон.</a>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="http://donacion.organos.ua.es/submenu1/premio.jpg" alt="">
                    <div class="services-caption">
                        <span class="glyphicon glyphicon-certificate icomoon"></span>
                        <h3>Hairworld OMC World Cup Seoul 2016</h3>
                        <span class="cp_linebar-style"></span>
                        <a href="services.html" class="service_detail cp-btn-style2">БНСУ-д зохиогдсон   Дэлхийн аварга шалгаруулах “ Hairworld OMC World Cup Seoul 2016” тэмцээнд амжилттай оролцсон. </a>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="http://donacion.organos.ua.es/submenu1/premio.jpg" alt="">
                    <div class="services-caption">
                        <span class="glyphicon glyphicon-certificate icomoon"></span>
                        <h3>Монголын Гоо сайханчдын тэмцээн</h3>
                        <span class="cp_linebar-style"></span>
                        <a href="services.html" class="service_detail cp-btn-style2">2014 онд Монголын Гоо сайханчдын тэмцээнд 3 артист амжилттай оролцож тусгай байрын шагнал хүртсэн  </a>
                    </div>
                </div>
            </div><div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="http://donacion.organos.ua.es/submenu1/premio.jpg" alt="">
                    <div class="services-caption">
                        <span class="glyphicon glyphicon-certificate icomoon"></span>
                        <h3>Найрсаг Улаанбаатар</h3>
                        <span class="cp_linebar-style"></span>
                        <a href="services.html" class="service_detail cp-btn-style2">2015 онд “Найрсаг Улаанбаатар” аяны хүрээнд Сүхбаатар дүүргийн нээлттэй хаалагын өдөрлөгт амжилттай оролцов.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21393.15251936965!2d106.89736212370993!3d47.91424985478723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d96924c0239885f%3A0xa6f4eb660c418885!2sGerege+Tower!5e0!3m2!1smn!2smn!4v1482827093951" width="1400" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

@stop {{-- end content --}}

