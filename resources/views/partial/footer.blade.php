<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-xs-12 footer">
            <div class="col-md-3 col-xs-12 footer-section">
                <h3 class="widget-title heading-title">BOXSHOP.mn</h3>
                <ul>
                    <li><a href="{{ route('about') }}">Бидний тухай</a></li>
                    <li><a href="#">Дэлгүүрийн танилцуулга</a></li>
                    <li><a href="#">Эрхэм зорилго, зорилт</a></li>
                    <li><a href="{{ route('contact') }}">Холбоо барих</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 footer-section">
                <h3 class="widget-title heading-title">Бидэнтэй хамтрах</h3>
                <ul>
                    <li><a href="#">Суртчилгааны самбар байршуулах</a></li>
                    <li><a href="#">Сайтад бараа бүтээгдэхүүнээ байршуулах</a></li>
                    <li><a href="#">Дэлгүүрт бараа бүтээгдэхүүнээ байршуулах</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-xs-12 footer-section">
                <h3 class="widget-title heading-title">Хэрэглэгчид</h3>
                <ul>
                    <li><a href="{{ route('user_service') }}">Үйлчилгээний нөхцөл</a></li>
                    <li><a href="#">Нууцлалын баталгаа</a></li>
                    <li><a href="#">Төлбөрийн хэрэгсэл</a></li>
                    <li><a href="#">Хүргэлт</a></li>
                    <li><a href="#">Санал хүсэлт</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 footer-section">
                <h3 class="widget-title heading-title">Тусламж</h3>
                <ul>
                    <li><a href="#">Худалдан авалт</a></li>
                    <li><a href="#">Бараа буцаалт</a></li>
                    <li><a href="#">Бараа оруулах</a></li>
                    <li><a href="#">Асуулт, хариулт</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-12 col-xs-12 copyright">
            <span>Зохиогчийн эрх хуулиар бүрэн хамгаалагдсан &copy; BOX-SHOP 2017 он</span>
        </div>
    </div>
</div>
@section('scripts') @parent

@stop