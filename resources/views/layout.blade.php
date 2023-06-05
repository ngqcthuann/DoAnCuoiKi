<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home</title>
		<link href="{{asset('public/fontend/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('public/fontend/css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('public/fontend/css/prettyPhoto.css')}}" rel="stylesheet">
		<link href="{{asset('public/fontend/css/price-range.css')}}" rel="stylesheet">
		<link href="{{asset('public/fontend/css/animate.css')}}" rel="stylesheet">
		<link href="{{asset('public/fontend/css/main.css')}}" rel="stylesheet">
		<link href="{{asset('public/fontend/css/responsive.css')}}" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->       
		<link rel="shortcut icon" href="{{asset('public/fontend/images/ico/favicon.ico')}}">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	</head><!--/head-->

	<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84 123 456 789</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> phonestore@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/fontend/images/hce.png')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Điện thoại<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
									@foreach($brand as $key => $brand_menu)
                                        <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand_menu->brand_id)}}">{{$brand_menu->brand_name}}</a></li>
									@endforeach
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="blog.php">Tin tức<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										<li><a href="blog.php">Review</a></li>
										
                                    </ul>
                                </li> 
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Phonestore</span>Technology</h1>
									<h2>iPhone</h2>
									<h4>Love the power. Love the price.</h4>
									<p>Which iPhone is right for you?</p>
									<a href="iphone.html"><button  type="button" class="btn btn-default get">Get it now</button></a>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/fontend/images/iphone.png')}}" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Phonestore</span>Technology</h1>
									<h2>Samsung</h2>
									<h4>Embrace epic power.</h4>
									<p>Samsung will jump together to attract you.</p>
									<a href="samsung.html"><button type="button" class="btn btn-default get">Get it now</button></a>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/fontend/images/samsung.png')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Phonestore</span>Technology</h1>
									<h2>Xiaomi</h2>
									<h4>Behind the masterpiece.</h4>
									<p>Always believe that something wonderful is about to happen.</p>
									<a href="xiaomi.html"><button type="button" class="btn btn-default get">Get it now</button></a>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/fontend/images/xiaomi.jpg')}}" class="girl img-responsive" alt="" />

								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian" style="margin-left: 90px;"><!--category-productsr-->
						@foreach($category as $key => $cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
						@endforeach
						</div><!--/category-products-->
						<h2>Thương hiệu sản phẩm</h2>
						<div class="panel-group category-products" id="accordian" style="margin-left: 90px;"><!--category-productsr-->
						@foreach($brand as $key => $brand)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}">{{$brand->brand_name}}</a></h4>
								</div>
							</div>
						@endforeach
						</div><!--/category-products-->
				
				
						
					
						<h2 class="panel-title"><a href="blog.php">Review</a></h2>
						<h2 class="panel-title"><a href="about.php">About</a></h2>
						<h2 class="panel-title"><a href="contact-us.php">Contact Us</a></h2>
						<h2 class="panel-title"><a href="product-details.html">Product Details</a></h2>
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
				@yield('content')	
				
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>PhoneStore</span></h2>
							<p>Good Price - Good Quality - Good Sservice - Good Preferential - Good Guarantee</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/fontend/images/apple.png')}}" alt="" />
									</div>
								</a>
								<p>Apple</p>
								<h2>24 OCT 2023</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/fontend/images/samsungsym.png')}}" alt="" />
									</div>

								</a>
								<p>Samsung</p>
								<h2>02 OCT 2023</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/fontend/images/nokia.png')}}" alt="" />
									</div>

								</a>
								<p>Nokia</p>
								<h2>27 OCT 2023</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/fontend/images/xiaomisyms.png')}}" alt="" />
									</div>

								</a>
								<p>Xiaomi</p>
								<h2>07 JUN 2023</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('public/fontend/images/map.png')}}" alt="" />
							<p>33 Vinh Vien Street, Ward 2, District 10, Ho Chi Minh City, Viet Nam.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="contact-us.html">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Technology</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="home.html">Phone</a></li>
								<li><a href="iphone.html">iPhone</a></li>
								<li><a href="samsung.html">Samsung</a></li>
								<li><a href="#">Power Bank</a></li>
								<li><a href="#">Charging Cable</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 HCE-Information Technolofy Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="">HCE's Student.</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


	
		<script src="{{asset('public/fontend/js/jquery.js')}}"></script>
		<script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('public/fontend/js/jquery.scrollUp.min.js')}}"></script>
		<script src="{{asset('public/fontend/js/price-range.js')}}"></script>
		<script src="{{asset('public/fontend/js/jquery.prettyPhoto.js')}}"></script>
		<script src="{{asset('public/fontend/js/main.js')}}"></script>
	</body>
	</html> 