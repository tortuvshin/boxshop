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
                        <img src="http://html.crunchpress.com/big-salon/images/about/about-img-01.jpg" alt="">
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
                <h2>Our Promotions</h2>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <div class="promotion-item">
                        <div class="text">
                            <h3><a href="product-detail.html">Only Until December </a></h3>
                            <p>Duisac turpis. Integer rutrum ante eu lacue. Mauris fermeum dictum magn. Saliquam leote llus dolor dapibus eget elementu elfend elit.</p>
                            <span class="item-discount"><b>20%</b>Discount</span>
                        </div>
                        <div class="thumb">
                            <img src="http://html.crunchpress.com/big-salon/images/promotion-img-01.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="promotion-item">
                        <div class="text">
                            <h3><a href="product-detail.html">Only Until July </a></h3>
                            <p>Duisac turpis. Integer rutrum ante eu lacue. Mauris fermeum dictum magn. Saliquam leote llus dolor dapibus eget elementu elfend elit.</p>
                            <span class="item-discount"><b>20%</b>Discount</span>
                        </div>
                        <div class="thumb">
                            <img src="http://html.crunchpress.com/big-salon/images/promotion-img-02.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cp_rates-section pd-b80">
        <div class="container">
            <div class="rates-holder">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="text-holder left">
                            <div class="info-hold">
                                <h4>Woman’s Haircut</h4>
                                <span><b>$40</b>First Length</span>
                            </div>
                            <div class="info-hold">
                                <h4>Woman’s Haircut</h4>
                                <span><b>$60</b>Second Length</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="text-holder right">
                            <div class="info-hold">
                                <h4>Woman’s Haircut</h4>
                                <span><b>$70</b>Third Length</span>
                            </div>
                            <div class="info-hold">
                                <h4>Woman’s Haircut</h4>
                                <span><b>$90</b>Fourth Length</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <p>Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas. Mellentesque habitant morbi tristique et malesuada famesac turpis egestas habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.</p>
                <a href="services.html" >More Services</a>
            </div>
        </div>
    </section>
    </div>
    <section class="cp_our-services-section pd-t80">
    <div class="container">
        <div class="cp-heding-style2">
            <h2>Бидний үйлчилгээ</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">

                <div class="services-item">
                    <img src="http://html.crunchpress.com/big-salon/images/services/services-item-img-01.jpg" alt="">
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
                    <img src="http://html.crunchpress.com/big-salon/images/services/services-item-img-02.jpg" alt="">
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
                    <img src="http://html.crunchpress.com/big-salon/images/services/services-item-img-03.jpg" alt="">
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
                    <img src="http://html.crunchpress.com/big-salon/images/services/services-item-img-01.jpg" alt="">
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


<section class="cp_equipment-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style1">
            <h2>Our Equipment</h2>
        </div>
        <div class="row pretty-gallery">
            <div class="col-md-3 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/equipment-img-01.png" alt="">
                        <a href="images/equipment-img-01.png" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                    <h3>Black Beauty Salon</h3>
                    <span>Styling Sofa</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/equipment-img-02.png" alt="">
                        <a href="images/equipment-img-02.png" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                    <h3>Haircutting Cover</h3>
                    <span>Styling Gown</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/equipment-img-03.png" alt="">
                        <a href="images/equipment-img-03.png" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                    <h3>Black Beauty Salon</h3>
                    <span>Styling Chair</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="box-item">
                    <div class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/equipment-img-04.png" alt="">
                        <a href="images/equipment-img-04.png" class="zooming-holder" data-rel="prettyPhoto" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                    </div>
                    <h3>Brushes Holder</h3>
                    <span>For Salon</span>
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
                        <img src="http://html.crunchpress.com/big-salon/images/pricing/price-img-01.jpg" alt="">
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
                        <img src="http://html.crunchpress.com/big-salon/images/pricing/price-img-02.jpg" alt="">
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
                        <img src="http://html.crunchpress.com/big-salon/images/pricing/price-img-03.jpg" alt="">
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
                        <img src="http://html.crunchpress.com/big-salon/images/pricing/price-img-04.jpg" alt="">
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


<section class="cp_our-team-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style1">
            <h2>Манай шилдэг ажилчид</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/team/team-img-01.jpg" alt="">
                        <figcaption class="caption">
                            <ul class="cp-social-list">
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Белла</a></h3>
                        <span>Захирал</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/team/team-img-02.jpg" alt="">
                        <figcaption class="caption">
                            <ul class="cp-social-list">
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Дариймаа</a></h3>
                        <span>Артист/Загвар зохион бүтээгч</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/team/team-img-03.jpg" alt="">
                        <figcaption class="caption">
                            <ul class="cp-social-list">
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Дэлгэрцэцэг</a></h3>
                        <span>Артист/Маркетинг менежер</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">

                <div class="team-item">
                    <figure class="cp-thumb">
                        <img src="http://html.crunchpress.com/big-salon/images/team/team-img-04.jpg" alt="">
                        <figcaption class="caption">
                            <ul class="cp-social-list">
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-glass"></i></a>
                                </li>
                            </ul>
                        </figcaption>
                    </figure>
                    <div class="team-text">
                        <h3><a href="#">Дөлгөөнзул</a></h3>
                        <span>Артист/Банкны эдийн засагч,ня-бо</span>
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


<section class="cp_brands-section">
    <div class="container-fluid">
        <ul>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-01.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-02.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-03.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-02.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-01.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-04.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-05.jpg" alt="">
            </li>
            <li><img src="http://html.crunchpress.com/big-salon/images/brands/brands-img-01.jpg" alt="">
            </li>
        </ul>
    </div>
</section>

<section class="cp_testimonial-section pd-tb80">
    <div class="container">
        <div class="cp-heding-style1">
            <h2>What Customers Say</h2>
        </div>
        <div class="testimonial-slider-holder">
            <div class="bx-wrapper" style="max-width: 100%;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 376px;">
                    <ul class="bxslider" id="testimonial-slider" style="width: auto; position: relative;">
                        <li style="float: none; list-style: none; position: absolute; width: 1130px; z-index: 0; display: block; opacity: 0.918764;">
                            <div class="testimonial-holder">
                                <span class="icon-holder">
<i class="fa fa-quote-right"></i>
</span>
                                <p>Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.Mellentesque habitant morbi tristique et Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.</p>
                                <strong class="name">“John Doe”</strong>
                            </div>
                        </li>
                        <li style="float: none; list-style: none; position: absolute; width: 1130px; z-index: 51; display: list-item; opacity: 0.081236;">
                            <div class="testimonial-holder">
                                <span class="icon-holder">
<i class="fa fa-quote-right"></i>
</span>
                                <p>Famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas.Mellentesque habitant morbi tristique et Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada famesac turpis egestas Mellentesque habitant morbi tristique senectus et netus et malesuada .</p>
                                <strong class="name">“Britney Doe”</strong>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bx-controls bx-has-pager bx-has-controls-direction">
                    <div class="bx-pager bx-default-pager">
                        <div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link">1</a>
                        </div>
                        <div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link active">2</a>
                        </div>
                    </div>
                    <div class="bx-controls-direction">
                        <a class="bx-prev" href=""> </a>
                        <a class="bx-next" href=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@stop {{-- end content --}}

