<div class="col-md-12 f-footer-area">

    <div class="row ">
        <div class="col-xs-4 col-sm-4 col-md-4 menu">
            <img class="logo-jpg" src="img/logo-1.png" style="width: 241.4px; height: 150.6px;">
            <br>
            <ul>
                <ul> <span class="footertext">Mongolian professional makeup artists PERFECT BEAUTY ACADEMY'S "BELLA MAKE UP STUDIO"
Манай салон нь өдөр тутмын будалт гоёлын, хуримын будалтыг хийнэ. </span> </ul>
                <br>
                <br>
                <li><i class="fa fa-map-marker"></i> <span class="footertext">  249 Ung Van Khiem St., Binh ThanhDist, HCMC</span>
                </li>
                <li><i class="fa fa-phone"></i> <span class="footertext">  +976 8999 2681</span>
                </li>
                <li><i class="fa fa-envelope"> </i><span class="footertext">  info@bella.mn</span>
                </li>
            </ul>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 enu">
            <h3 class="widget-title heading-title" style="color:white;">Instagram posts</h3>
            <div class="line line-30"></div>

            <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                <div style="padding:8px;">
                    <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                        <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                    </div>
                    <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BNXH7vPj42C/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A photo posted by b e l l a m a k e u p (@bella__makeup)</a> on
                        <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-11-28T16:56:13+00:00">Nov 28, 2016 at 8:56am PST</time>
                    </p>
                </div>
            </blockquote>
            <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 newsletter">
            <h3 class="widget-title heading-title" style="color: white;">

                        Мэдээлэл авах                   </h3>
            <div class="line line-30"></div>
            @if (\Auth::user())
            <p>{{ trans('globals.reach_us_msg') }}</p>
            <p><strong><a href="/contact"><span class="glyphicon glyphicon-envelope"></span>&nbsp;{{ trans('globals.send_a_email_label') }}</a></strong>
            </p>
            @else
            <div class="signup clearfix">
                <p>{{ trans('user.newsletter_sign_up') }}</p>
                <div class="subscribe_widget style-1 text-left">

                    <form method="post" target="_blank">
                        <p class="subscribe-email">
                            <input type="text" name="email" class="subscribe_email" placeholder="Емайл хаягаа оруулна уу...">
                        </p>

                        <button class="dada fa fa-paper-plane fa-lg" type="submit" title="Subscribe"><span></span>
                        </button>

                    </form>
                </div>
            </div>
            @endif
            <div class="footer-bot-right-area">
                <h3 class="widget-title heading-title" style="color: white;">
                        Сошиал                  </h3>
                <div class="line line-30"></div>
                <ul>
                    <li style=" list-style: none; list-style-position: initial;">
                        <div class="social-icons">
                            <ul style="
    padding-left: 0px;
">
                                <li class="icon-facebook fa-lg" style="border: 1px solid #f8f8f8;width: 12%;
    text-align: center;"><a href="http://www.facebook.com/#" target="_blank" title="Become our fan"><i class="fa fa-facebook"></i></a>
                                </li>

                                <li class="icon-twitter fa-lg" style="border: 1px solid #f8f8f8;width: 12%;
    text-align: center;"><a href="http://twitter.com/#" target="_blank" title="Follow us"><i class="fa fa-twitter"></i></a>
                                </li>

                                <li class="icon-google fa-lg" style="border: 1px solid #f8f8f8;width: 12%;
    text-align: center;"><a href="https://plus.google.com/u/0/#" target="_blank" title="Get updates"><i class="fa fa-google-plus"></i></a>
                                </li>

                                
                                <li class="icon-instagram fa-lg" style="border: 1px solid #f8f8f8;width: 12%;
    text-align: center;"><a href="http://instagram.com/#" target="_blank" title="Follow us"><i class="fa fa-instagram"></i></a>
                                </li>                            
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="row credits">
        <div class="col-md-12" style="color: #c5c5c5;">
            {{ trans('globals.power_by_label') }}&nbsp;<a href="http://github.com/tortuvshin/ecommerce">{{ trans('globals.antvel_eCommerce') }}</a>
        </div>
    </div>

    <div class="fourth-footer-area row ">

        <div id="copy-right" class="copy-right col-sm-12">
            <div class="col-sm-8">
                Зохиогчын эрх хуулиар хамгаалагдсан ©. 2016 он.Вэбсайтыг хөгжүүлсэн "Тагтаа Солюшн" ХХК.
            </div>
            <div class="payment col-sm-4">
                <ul>
                    <li>
                        <a href="#"><img src="http://glory.demo1.wpdance.com/supermarket2/wp-content/themes/wp_glory/images/media/paypal.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="http://glory.demo1.wpdance.com/supermarket2/wp-content/themes/wp_glory/images/media/mastercard.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="http://glory.demo1.wpdance.com/supermarket2/wp-content/themes/wp_glory/images/media/american.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="http://glory.demo1.wpdance.com/supermarket2/wp-content/themes/wp_glory/images/media/visa.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="http://glory.demo1.wpdance.com/supermarket2/wp-content/themes/wp_glory/images/media/dhl.jpg">
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- end #copyright -->

    </div>

</div>
@section('scripts') @parent

@stop