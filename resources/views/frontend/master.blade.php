<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		@yield('title')
		<!-- Title Tag  -->
		<title>Lak Galuh Pakuan</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="{{url('front/img/logo1.png')}}">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		
		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="{{url('front/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{url('front/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{url('front/css/cubeportfolio.min.css')}}">
		<link rel="stylesheet" href="{{url('front/css/font-awesome.css')}}">
		<link rel="stylesheet" href="{{url('front/css/jquery.fancybox.min.css')}}">
		<link rel="stylesheet" href="{{url('front/css/magnific-popup.min.css')}}">
		<link rel="stylesheet" href="{{url('front/css/owl-carousel.min.css')}}">
		<link rel="stylesheet" href="{{url('front/css/slicknav.min.css')}}">

		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="{{url('front/css/reset.css')}}">
		<link rel="stylesheet" href="{{url('front/style.css')}}">
		<link rel="stylesheet" href="{{url('front/css/responsive.css')}}">
		
		<!-- Bizwheel Colors -->
		<!--<link rel="stylesheet" href="css/skins/skin-1.css">
		<!--<link rel="stylesheet" href="css/skins/skin-2.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-3.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-4.css">-->
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>
	<body id="bg">
	
		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->
	
	<!-- ============================= HEADER =================================================-->
		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact"><i class="fa fa-phone"></i>Phone: {{$setting->phone}}</div> 
								<div class="single-contact"><i class="fa fa-envelope-open"></i>Email: {{$setting->email}}</div>	
							</div>
							<!-- End Top Contact -->
						</div>	
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<ul class="social-icons">
									@foreach($setting->social as $key=>$social)
									<li><a href="{{$social}}"><i class="fa fa-{{$icons[$key]}}"></i></a></li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="{{url('/')}}">
													<img src="{{url('front/img/logo1.png')}}" width="50px" style="margin-bottom: 12px;" alt="#">
												</a>
											</div>
										</div>								
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
<!-- ================================================================= NAVBAR ============================================ -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">	
													<div class="nav-inner">	
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="{{url('/')}}">Home</a></li>
																<li class="icon-active"><a href="#">Galuh Pakuan</a>
																	<ul class="sub-menu">
																		@foreach($pages as $page)
																		<li><a href="{{url('page')}}/{{$page->slug}}">{{$page->title}}</a></li>
																		@endforeach
																	</ul>
																</li>
																<li class="icon-active"><a href="#">Gallery</a>
																	<ul class="sub-menu">
																		<li><a href="{{url('galleries')}}">Foto</a></li>
																		<li><a href="{{url('/')}}">Video</a></li>
																	</ul>
																</li>
																<li class="icon-active"><a href="#">Kegiatan</a>
																	<ul class="sub-menu">
																		@foreach($catinfs as $category)
																		<li><a href="{{url('kegiatan')}}/{{$category->slug}}">{{$category->title}}</a></li>
																		@endforeach
																	</ul>
																</li>
																<li class="icon-active"><a href="#">Berita</a>
																	<ul class="sub-menu">
																		@foreach($categories as $cat)
																		<li><a href="{{url('category')}}/{{$cat->slug}}">{{$cat->title}}</a></li>
																		@endforeach
																	</ul>
																</li>
																<li class="icon-active"><a href="#">Event</a>
																	<ul class="sub-menu">
																		<li><a href="blog.html">Festival Jaipong Seri IV</a></li>
																	</ul>
																</li>
																<li><a href="{{url('contact-us')}}">Kontak Kami</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->	
											<!-- Right Bar -->
											<div class="right-bar">
												<!-- Search Bar -->
												<ul class="right-nav">
													<li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
													<li class="bar"><a class="fa fa-bars"></a></li>
												</ul>
												<!--/ End Search Bar -->
												<!-- Search Form -->
												<div class="search-top">
													<form action="{{url('search')}}" class="search-form" method="get">
														<input type="text" id="query" name="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Search" />
														<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
													</form>
												</div>
												<!--/ End Search Form -->
											</div>	
											<!--/ End Right Bar -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			<!-- Sidebar Popup -->
			<div class="sidebar-popup">
				<div class="cross">
					<a class="btn"><i class="fa fa-close"></i></a>
				</div>
				<div class="single-content">
					<h4>Tentang Lak Galuh Pakuan</h4>
					<p>{{$setting->about}}</p>
					<!-- Social Icons -->
					<ul class="social">
						@foreach($setting->social as $key=>$social)
						<li><a href="{{$social}}"><i class="fa fa-{{$icons[$key]}}"></i></a></li>
						@endforeach
					</ul>
				</div>
				<div class="single-content">
					<h4>Important Links</h4>   
					<ul class="links">
						@foreach($pages as $page)
						<li><a href="{{url('page')}}/{{$page->slug}}">{{$page->title}}</a></li>
						@endforeach
					</ul>
				</div>	
			</div>
			<!--/ Sidebar Popup -->	
		</header>
		<!--/ End Header -->

@yield('content')

				<!-- Footer -->
		<footer class="footer" style="background-image:url('img/map.png')">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer About -->		
							<div class="single-widget footer-about widget">	
								<div class="logo">
									<div class="img-logo text-center">
										<a class="logo" href="index.html">
											<img class="img-responsive" src="{{url('front/img/logo1.png')}}" width="100px" alt="logo">
										</a>
									</div>
								</div>
								<div class="footer-widget-about-description">
									<p>{{$setting->about}}</p>
								</div>	
								<div class="social">
									<!-- Social Icons -->
									<ul class="social-icons">
										@foreach($setting->social as $key=>$social)
										<li><a class="facebook" href="{{$social}}" target="_blank"><i class="fa fa-{{$icons[$key]}}"></i></a></li>
										@endforeach
									</ul>
								</div>
							</div>		
							<!--/ End Footer About -->		
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer News -->
							<div class="single-widget footer-news widget">	
								<h3 class="widget-title">Populer</h3>
								<!-- Single News -->
								@foreach($populars->take(3) as $popular)
								<div class="single-f-news">					
									<div class="post-thumb"><a href="#"><img src="{{url('posts')}}/{{$popular->image}}" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>{{$popular->created_at}}</time></p>
										<h4 class="title"><a href="{{url('article')}}/{{$popular->slug}}">{{$popular->title}}</a></h4>
									</div>
								</div>
								@endforeach
								<!--/ End Single News -->
								<!-- Single News -->
							</div>			
							<!--/ End Footer News -->			
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Footer Links -->		
							<div class="single-widget f-link widget">
								<h3 class="widget-title">Link Cepat</h3>
								<ul>
									@foreach($pages as $page)
									<li><a href="{{url('page')}}/{{$page->slug}}">{{$page->title}}</a></li>
									@endforeach
									<li><a href="#">Lain-lain</a></li>
								</ul>
							</div>			
							<!--/ End Footer Links -->			
						</div>
						<div class="col-lg-3 col-md-6 col-12">	
							<!-- Footer Contact -->		
							<div class="single-widget footer_contact widget">	
								<h3 class="widget-title">Kontak</h3>
								<p>Hubungi kami pada menu dibawah ini.</p>
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i>{{$setting->phone}}</li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i>{{$setting->email}}</li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i>{{$setting->address}}</li>
								</ul>
							</div>		
							<!--/ End Footer Contact -->						
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>© Copyright <a href="#">Lakgaluhpakuan</a>. Design &amp; Development By <a target="_blank" href="#">galuhpakuan.id</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		
		<!-- Jquery JS -->
		<script src="{{url('front/js/jquery.min.js')}}"></script>
		<script src="{{url('front/js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{url('front/js/popper.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{url('front/js/bootstrap.min.js')}}"></script>
		<!-- Modernizr JS -->
		<script src="{{url('front/js/modernizr.min.js')}}"></script>
		<!-- ScrollUp JS -->
		<script src="{{url('front/js/scrollup.js')}}"></script>
		<!-- FacnyBox JS -->
		<script src="{{url('front/js/jquery-fancybox.min.js')}}"></script>
		<!-- Cube Portfolio JS -->
		<script src="{{url('front/js/cubeportfolio.min.js')}}"></script>
		<!-- Slick Nav JS -->
		<script src="{{url('front/js/slicknav.min.js')}}"></script>
		<!-- Slick Nav JS -->
		<script src="{{url('front/js/slicknav.min.js')}}"></script>
		<!-- Slick Slider JS -->
		<script src="{{url('front/js/owl-carousel.min.js')}}"></script>
		<!-- Easing JS -->
		<script src="{{url('front/js/easing.js')}}"></script>
		<!-- Magnipic Popup JS -->
		<script src="{{url('front/js/magnific-popup.min.js')}}"></script>
		<!-- Active JS -->
		<script src="{{url('front/js/active.js')}}"></script>
	</body>
</html>