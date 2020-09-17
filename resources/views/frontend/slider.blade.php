<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="col-md-12">
	        <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        @foreach($banners as $banner)
	        <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->index == 0 ? 'active' : ''}}"></li>
	        @endforeach
	      </ol>

	      <!-- Wrapper for slides -->
	      <div class="carousel-inner" role="listbox">
	        @foreach($banners as $banner)
	        <div class="item {{$loop->index == 0 ? 'active' : ''}}">
	          <img src="{{asset('posts/'.$banner->image)}}" alt="{{$banner->title}}" style="width: 100%; height: 80%;">
	          <div class="carousel-caption">
	            <a href="{{url('article')}}/{{$banner->slug}}"><h3>{{$banner->title}}</h3></a>
	          </div>
	        </div>
	        @endforeach
	      </div>
	    </div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</body>
</html>