@extends ('frontend.master')
@section ('content') 
<div class="wrapper">
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
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    @if(count($featured) > 0)
	<div class="row" style="padding-bottom: : 20px;">
        @foreach($featured as $key=>$f)
        @if($key == 0)
        <div class="col-md-12">
                <h3 style="border-bottom:3px solid #ff7403; padding-bottom:5px;"><span style="padding:6px 12px; background:#ff7403;">FEATURED</span></h3>
            </div>
		<div class="col-md-6">
            <div class="relative">
        		<a href="{{url('article')}}/{{$f->slug}}">
                    <img src="{{url('posts')}}/{{$f->image}}" width="100%" height="360px" />
                    <span class="caption">{{$f->title}}</span>
                </a>
            </div>
    	</div>
        @endif
        @endforeach
    	<div class="col-md-6">
    		<div class="row">
                @foreach($featured as $key=>$f)
                @if($key > 0 && $key < 3)
        		<div class="col-md-6">
                    <div class="relative">
                        <a href="{{url('article')}}/{{$f->slug}}">
                            <img src="{{url('posts')}}/{{$f->image}}" width="100%" height="165px" />
                            <span class="caption">{{$f->title}}</span>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
        	</div>
        	<div class="row" style="margin-top:30px;">
                @foreach($featured as $key=>$f)
                    @if($key > 3 && $key < 6)
        		<div class="col-md-6">
                    <div class="relative">
                        <a href="{{url('article')}}/{{$f->slug}}">
                            <img src="{{url('posts')}}/{{$f->image}}" width="100%" height="165px" />
                            <span class="caption">{{$f->title}}</span>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
        	</div>        
    	</div>
	</div>
    @endif
    
        <div class="row" style="margin-top:30px;">
        	<div class="col-md-8">
            <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px;">
            	<div class="col-md-12">
            		<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">BERITA TERBARU</span></h3>
            	</div>
            	<div class="col-md-6">
                    @foreach($beritas as $key=>$berita)
                    @if($key == 0)
                	<a href="{{url('article')}}/{{$berita->slug}}"><img src="{{url('posts')}}/{{$berita->image}}" width="100%" style="margin-bottom:15px;" /></a>
                    <h3><a href="{{url('article')}}/{{$berita->slug}}">{{$berita->title}}</a></h3>
            		<p align="justify">{!! substr($berita->description,0,300) !!}</p><a href="{{url('article')}}/{{$berita->slug}}">Read more &raquo;</a>
                    @endif
                    @endforeach
                </div>
                <div class="col-md-6">
                    @foreach($beritas as $key=>$berita)
                    @if($key > 0 && $key < 6)
                	<div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
    	            	<div class="col-md-4">
                        	<div class="row">
        	            		<a href="{{url('article')}}/{{$berita->slug}}"><img src="{{url('posts')}}/{{$berita->image}}" width="100%" /></a>
            	        	</div>
                        </div>
                	    <div class="col-md-8">
                        	<div class="row">
                    			<h4><a href="{{url('article')}}/{{$berita->slug}}">{{$berita->title}}</a></h4>
                    		</div>
                        </div>
                    </div>
                    @endif
                    @endforeach    
                </div>
            </div>
            
    	        <div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
        	    	<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">GALLERY</span></h3>
                    <div class="flex"> 
                        @foreach($sliders->take(5) as $b)
                        <div>
                	       <a href="{{url('gallery')}}"><img src="{{url('sliders')}}/{{$b->image}}"/></a>
                        </div>
                        @endforeach
                    </div>
    	        </div>
        </div>


            <div class="col-md-4">
                @if($sidebarBottom)
                <div class="sidebar-adv"><a href="{{$sidebarBottom->url}}"><img src="{{url('advertisements')}}/{{$sidebarBottom->image}}" height="300px" width="100%" alt="{{$sidebarBottom->title}}" /></a></div>
              @endif 
            </div>
        </div>
    </div> 
</div>


@stop
<script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</script>