@extends ('frontend.master')
@section ('content') 
		
		<!-- Hero Slider -->
		<section class="hero-slider style1">
			<div class="home-slider">
				<!-- Single Slider -->
				@foreach($banners as $banner)
				<div class="single-slider">
					<img src="{{asset('posts/'.$banner->image)}}">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="carousel-caption" style="padding-bottom: 50%;"> 
									<div class="hero-text"> 
										<h4>{{$banner->title}}</h4>
										<div class="p-text">
											<!-- <p>Nunc tincidunt venenatis elit. Etiam venenatis quam vel maximus bibendum Pellentesque elementum dapibus diam tristique</p> -->
										</div>
										<div class="button">
											<a href="{{url('article')}}/{{$banner->slug}}" class="bizwheel-btn theme-1 effect" style="margin-right: 100%;">Detail</a>
											<!-- <a href="portfolio.html" class="bizwheel-btn theme-2 effect">View Our Portfolio</a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</section>
		<!--/ End Hero Slider -->
		
		<!-- Features Area -->
		
		<!--/ End Features Area -->
		
		<!-- Call To Action -->
		<hr style="size: 50px; color: yellow">
		<section class="call-action" style="background-image:url('front/img/festivaljaipong.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="call-inner">
							<h2>Ikuti Festival Tari Jaipong</h2>
							<h3 style="color:white">Kreasi Galuh Pakuan Seri IV</h3>
						</div>
					</div>
					<div class="col-lg-3 col-12">
						<div class="button">
							<a href="http://bit.ly/FestivalTariJaipongKreasi_GPcupIV" class="bizwheel-btn">DAFTAR</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		<!-- Services -->
		
		<!--/ End Services -->
		
		<!-- Portfolio -->
		<section class="portfolio section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Simak</span><b>Profil Kegiatan Kami</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text">
									<p>Lorem Ipsum Dolor Sit Amet, Conse Ctetur Adipiscing Elit, Sed Do Eiusmod Tempor Ares Incididunt Utlabore. Dolore Magna Ones Baliqua</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
					<div class="col-12">
						<div class="portfolio-main">
							<div id="portfolio-item" class="portfolio-item-active">
								@foreach($catinfs as $category)
								<div class="cbp-item business animation">
									<!-- Single Portfolio -->
									<div class="single-portfolio" style="padding-top: 30px;">
										<div class="portfolio-content">
											<h4><a href="{{('kegiatan')}}/{{$category->slug}}">{{$category->title}}</a></h4>
										</div>
									</div>
									<!--/ End Single Portfolio -->
								</div>
								@endforeach
								
									<!--/ End Single Portfolio -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Portfolio -->
		
		<!-- Testimonials -->
		<section class="testimonials section-space" style="background-image:url('front/img/rajalak2.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-9 col-12">
						<div class="section-title default text-left">
							<div class="section-top">
								<h1 style="color:white"><b>Kata-kata Bijak Raja Galuh Pakuan</b></h1>
							</div>
							<div class="section-bottom">
							</div>
						</div>
						<div class="testimonial-inner">
							
								<!-- Single Testimonial -->
								<div class="single-slider">
									
									<p>Ngawangun Bangsa Sunda Mibanda Jiwa Tangguh, Raga Kuat, Rasa Asih, Pakeun Ngamulyakeun Nu Hina, Nguatkeun Nu Lemah, Minterkeun Nu Bodo, Ngabeungharkeun Nu Miskin, Tug Dugi Kawangun Tahta Raja Pakeun Rakyatna.</p>
									<!-- Client Info -->
									<div class="t-info">
										<div class="t-left">
											<div class="client-head">
												<a href="https://www.facebook.com/evi.silviadi"><img src="{{url('front/img/abu.jpg')}}" alt="#"></a></div>
											<h2>Evi Silviadi <span>Rahyang Mandalajati</span><span style="font-size: 10px;"><a href="https://www.facebook.com/evi.silviadi">https://www.facebook.com/evi.silviadi</a></span></h2>
										</div>
										<div class="t-right">
											<div class="quote"><i class="fa fa-quote-right"></i></div>
										</div>
									</div>
								</div>
								<!-- / End Single Testimonial -->
								<!-- Single Testimonial -->
							
								<!-- Single Testimonial -->
								
									
								</div>
								<!-- / End Single Testimonial -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->
		
		<!-- Latest Blog -->
		<section class="latest-blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Berita</span><b> Kilasan Berita Terupdate</b></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="blog-latest blog-latest-slider">
							@foreach($beritas as $key=>$berita)
                    		@if($key > 0 && $key < 6)
							<div class="single-slider">
								<!-- Single Blog -->
								<div class="single-news ">
									<div class="news-head overlay">
										<span class="news-img"><img src="{{url('posts')}}/{{$berita->image}}" width="100%" style="padding-top: 30px;">
										</span>
										<a href="{{url('article')}}/{{$berita->slug}}" class="bizwheel-btn theme-2">Read more</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<h3 class="news-title"><a href="{{url('article')}}/{{$berita->slug}}">{{$berita->title}}</a></h3>
											<div class="news-text"><p>{!! substr($berita->description,0,100) !!}</p></div>
											<ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i><small>{{$berita->created_at}}</small></li>
												<li class="view"><i class="fa fa-eye"></i><small>{{ $berita->views + 1 }}
                                                @if($berita->views !=0)
                                                Views 
                                                @else
                                                View
                                                @endif
                                            </small></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Latest Blog -->
		
		<!-- Client Area -->
		<div class="clients section-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><b> Hubungan</b></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="partner-slider">
							@foreach($aplikasis as $app)
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="{{$app->url}}" target="_blank"><img src="{{url('aplikasis')}}/{{$app->image}}" alt="#"></a>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="clients section-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><b> Media Partner</b></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="partner-slider">
							@foreach($partner as $app)
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="{{$app->url}}" target="_blank"><img src="{{url('aplikasis')}}/{{$app->image}}" alt="#"></a>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Client Area -->
		
@stop