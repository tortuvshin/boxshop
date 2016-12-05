<div class="container">
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 menu">
			<img class="logo-jpg" src="img/logo-1.jpg"><br>
			<ul>
			<ul> <span class="footertext">Skort Maison Martin Margiela knot ponytail cami texture tucked t-shirt. Black skirt razor pleats plaited gold collar. Crop 90s spearmint indigo seam luxe washed out. Prada Saffiano cashmere crop sneaker chignon cami clutch. </span> </ul><br><br>
			<li><i class="fa fa-map-marker"></i> <span class="footertext">  249 Ung Van Khiem St., Binh ThanhDist, HCMC</span></li>
			<li><i class="fa fa-phone"></i> <span class="footertext">  +084 0123 456 999</span></li>
			<li><i class="fa fa-envelope"> </i><span class="footertext">  info@bella.mn</span></li>
			</ul>
		</div>

		<div class="col-xs-4 col-sm-4 col-md-4 enu">
			<h3 class="widget-title heading-title" style="color:white;">Recent posts</h3>
			<div class="line line-30"></div>
			
		</div>

		<div class="col-xs-4 col-sm-4 col-md-4 newsletter" ng-controller = "NewslettersCtrl">
		<h3 class="widget-title heading-title" style="color: white;">
						Мэдээлэл авах					</h3>
						<div class="line line-30"></div>
			@if (\Auth::user())
				<p>{{ trans('globals.reach_us_msg') }}</p>
				<p><strong><a href="/contact"><span class="glyphicon glyphicon-envelope"></span>&nbsp;{{ trans('globals.send_a_email_label') }}</a></strong></p>
			@else
				<div class="signup clearfix">
					<p>{{ trans('user.newsletter_sign_up') }}</p>
					<form>
						<input type="text" ng-model = "newsEmail"  class = "form-control input-sm" placeholder = "{{ trans('user.your_email_address_label') }}">
						<input type="button" ng-click = "save()" value = "{{ trans('user.sign_up_label') }}">
					</form>
				</div>
			@endif
			<div class="footer-bot-right-area">
			<h3 class="widget-title heading-title" style="color: white;">
						Сошиал					</h3>
						<div class="line line-30"></div>
		<ul>
			<li style=" list-style: none; list-style-position: initial;" >						
				<div class="social-icons">
					<ul >
						<li class="icon-facebook"><a href="http://www.facebook.com/#" target="_blank" title="Become our fan"><i class="fa fa-facebook"></i></a></li>				
						
						<li class="icon-twitter"><a href="http://twitter.com/#" target="_blank" title="Follow us"><i class="fa fa-twitter"></i></a></li>
						
						<li class="icon-google"><a href="https://plus.google.com/u/0/#" target="_blank" title="Get updates"><i class="fa fa-google-plus"></i></a></li>
						
						<li class="icon-pin"><a href="http://www.pinterest.com/#" target="_blank" title="See Us"><i class="fa fa-pinterest"></i></a></li>
						
						<li class="icon-instagram"><a href="http://instagram.com/#" target="_blank" title="Follow us"><i class="fa fa-instagram"></i></a></li>
						
						
						<li class="icon-linkedin"><a href="https://www.linkedin.com/pub/#" target="_blank" title="See us"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
		</div>

	</div>

	<div class="row credits">
		<div class="col-md-12">
			{{ trans('globals.power_by_label') }}&nbsp;<a href="http://github.com/tortuvshin/ecommerce">{{ trans('globals.antvel_eCommerce') }}</a>
		</div>
	</div>

</div>
@section('scripts')
    @parent
        <script>
            (function(app){
	                app.controller('NewslettersCtrl', function($scope, $window, notify)
					{
					  	$scope.newsEmail = '';
					  	$scope.save = function()
					  	{
					  		if ($scope.newsEmail.trim() != '') {
					  			$window.location.href = '/register?email='+$scope.newsEmail;
					  		} else {
					  			notify({ duration:5000, messageTemplate: '<strong>{{ trans('globals.validation_error_label') }}</strong><br><br><p>{{ trans('globals.newsletter_email_error') }}</p>', classes: 'alert alert-danger' });
					  		}
					  	};
					});
            })(angular.module("Bella"));
        </script>
    @stop



<div class="rows">
  <div class="copy col-sm-8">

  </div>  <span style="color: white;">© 2014 Glory Fashion Store . All Rights Reserved.</span>

  <div class="col-sm-4"></div>
</div>