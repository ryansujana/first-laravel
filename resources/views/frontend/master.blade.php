<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
@yield('title')
<title>DISKOMINFO | SUBANG</title>
<link rel="icon" href="{{asset('images/logdis.png')}}" type="image/png">
<link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet"/>
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet"/>
<link href="{{url('css/bootstrap-theme.min.css')}}" rel="stylesheet" />
<link href="{{url('css/style.css')}}" rel="stylesheet"  />
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>

</head>

<body>
<div class="col-md-12 top" id="top">
	<div class="col-md-9 top-left">
    	<div class="col-md-3">
        <img src="{{asset('images/logdis.png')}}" width="200px" height="80px" alt="newspaper logo">
        </div>
        <div class="col-md-9 latest-news">
        	<span class="latest">Latest: </span> <a href="{{url('article')}}/{{$latestnews->slug}}">{{$latestnews->title}}</a>
        </div>
    </div>
    <div class="col-md-3 top-social">
        @foreach($setting->social as $key=>$social)
    	<a href="{{$social}}" class="social-icon" ><i class="fa fa-{{$icons[$key]}}"></i></a>
        @endforeach
    </div>
</div>

<div class="col-md-12 main-menu">
	<div class="col-md-10 menu">
		<nav class="navbar">
			<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar"> 
					<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
        		</button>
    		</div>
    		<div class="collapse navbar-collapse" id="mynavbar">
    			<ul class="nav nav-justified">
    				<li><a href="{{url('/')}}" class="active"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFILE <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        @foreach($pages as $page)
                        <li><a href="{{url('page')}}/{{$page->slug}}" class="text-uppercase">{{$page->title}}</a></li>
                        @endforeach
                       </ul>
                   </li>
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LAYANAN <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        @foreach($categories as $cat)
                        <li><a href="{{url('category')}}/{{$cat->slug}}" class="text-uppercase">{{$cat->title}}</a></li>
                        @endforeach
                        <li><a href="{{url('aplikasi')}}" >APLIKASI DISKOMINFO</a></li>
                       </ul>
                       <li><a href="{{url('galleries')}}" class="active">GALLERY</a></li>
                       <li><a href="{{url('contact-us')}}" class="active">CONTACT</a></li>
                   </li>
        		</ul> 
			</div>
		</nav>
	</div>
    <form action="{{url('search')}}" method="GET">
	<div class="col-md-2">
        <div class="search">
        	<input type="text" id="query" name="query" value="{{ request()->input('query') }}" class="form-control" />
            <span class="glyphicon glyphicon-search search-btn"></span>
        </div>
    </div>
    </form>
</div>
<!-- Header-->

@yield('content')

<!-- Footer -->
<div class="col-md-12 bottom">
        <div class="col-md-4">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">About Us</span></h3>
            <div class="col-md-12" style="margin-left: 110px; padding-bottom: 10px;">
                <img src="{{asset('images/logdis.png')}}" width="200px" height="80px" alt="newspaper logo">
            </div>
            <p align="justify">{{$setting->about}}</p>
        </div>
        <div class="col-md-4">
            <div class="col-md-12">
                <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Quick Links</span></h3>
                <ul class="nav">
                    @foreach($pages as $page)
                    <li><a href="{{url('page')}}/{{$page->slug}}" class="text-uppercase">{{$page->title}}</a></li>
                    @endforeach
                    <li><a href="{{url('contact-us')}}" class="text-uppercase">Contact Us</li>
                </ul> 
            </div>    
        </div>
        <div class="col-md-4">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Contact Us</span></h3>
            <ul class="list-unstyled">
                            <li>{{$setting->address}}</li>
                            <li><i class="fa fa-phone" style="color: #333;"></i> {{$setting->phone}}</li>
                            <li><i class="fa fa-envelope-o" style="color: #333;"></i> E-mail: <a class="text-success" href="#">{{$setting->email}}</a></li>
                        </ul>
            <p>Follow us at:</p>
            @foreach($setting->social as $key=>$social)
                <a href="{{$social}}" class="social-icon"><i class="fa fa-{{$icons[$key]}}"></i></a>
            @endforeach
            <a href="#top" class=" goto"><span class="glyphicon glyphicon-chevron-up"></span></a><br />
        </div>
</div>

<div class="col-md-12 text-center copyright">
</div>

<script>            
    $(document).ready(function() {
        var duration = 500;
        $(window).scroll(function() {
            if ($(this).scrollTop() > 500) {
                $('.goto').fadeIn(duration);
            } else {
                $('.goto').fadeOut(duration);
            }
        });

        $('.goto').click(function(event) {
            event.preventDefault();
            $('html').animate({scrollTop: 0}, duration);
            return false;
        })
    });
</script>   

</body>
</html>