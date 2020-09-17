@extends ('frontend.master')
@section ('content') 
<div class="wrapper">
    <div class="col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{{asset('public/images/slider.png')}}" alt="Chania">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="{{asset('public/images/slider.png')}}" alt="Chania">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="{{asset('public/images/slider.png')}}" alt="Flower">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

        <div class="item">
          <img src="{{asset('public/images/slider.png')}}" alt="Flower">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
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
                    <img src="{{url('public/posts')}}/{{$f->image}}" width="100%" height="360px" />
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
                            <img src="{{url('public/posts')}}/{{$f->image}}" width="100%" height="165px" />
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
                            <img src="{{url('public/posts')}}/{{$f->image}}" width="100%" height="165px" />
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
        		<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">NEWS</span></h3>
        	</div>
        	<div class="col-md-6">
                @foreach($general as $key=>$g)
                @if($key == 0)
            	<a href="{{url('article')}}/{{$g->slug}}"><img src="{{url('public/posts')}}/{{$g->image}}" width="100%" style="margin-bottom:15px;" /></a>
                <h3><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}</a></h3>
        		<p align="justify">{!! substr($g->description,0,300) !!}</p><a href="{{url('article')}}/{{$g->slug}}">Read more &raquo;</a>
                @endif
                @endforeach
            </div>
            <div class="col-md-6">
                @foreach($general as $key=>$g)
                @if($key > 0 && $key < 6)
            	<div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<a href="{{url('article')}}/{{$g->slug}}"><img src="{{url('public/posts')}}/{{$g->image}}" width="100%" /></a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<h4><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}</a></h4>
                		</div>
                    </div>
                </div>
                @endif
                @endforeach    
            </div>
        </div>
        
	        <div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
    	    	<h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">BUSINESS</span></h3>
                <div class="flex"> 
                    @foreach($business->take(5) as $b)
                    <div>
            	       <a href="{{url('article')}}/{{$b->slug}}"><img src="{{url('public/posts')}}/{{$b->image}}"/></a>
                    </div>
                @endforeach
                </div>
	        </div>
        
        <div class="row">
        	<div class="col-md-6">
            <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
            	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
                <h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span style="padding:6px 12px; background:#b952c8;">SPORTS</span></h3>
            		@foreach($sports as $key=>$s)
                    @if($key == 0)
                    <a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('public/posts')}}/{{$s->image}}" width="100%" style="margin-bottom:15px; height: 180px;" /></a>
                    <h3><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h3>
                    <p align="justify">{!! substr($s->description,0,300) !!}</p><a href="{{url('article')}}/{{$s->slug}}">Read more &raquo;</a>
                    @endif
                    @endforeach
            	</div>
                @foreach($sports as $key=>$s)
                @if($key > 0 && $key <5)
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row fashion">
    	            		<a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('public/posts')}}/{{$s->image}}" width="100%" /></a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<h4><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h4>
                		</div>
                    </div>
                </div>
                @endif
                @endforeach
            </div></div>
        	<div class="col-md-6">
            <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
            	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
                <h3 style="border-bottom:3px solid #d95757; padding-bottom:5px;"><span style="padding:6px 12px; background:#d95757;">TECHNOLOGY</span></h3>
        			@foreach($technology as $key=>$s)
                    @if($key == 0)
                    <a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('public/posts')}}/{{$s->image}}" width="100%" style="margin-bottom:15px; height: 180px;" /></a>
                    <h3><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h3>
                    <p align="justify">{!! substr($s->description,0,300) !!}</p><a href="{{url('article')}}/{{$s->slug}}">Read more &raquo;</a>
                    @endif
                    @endforeach
            	</div>
                @foreach($technology as $key=>$s)
                @if($key > 0 && $key <5)
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                    <div class="col-md-4">
                        <div class="row fashion">
                            <a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('public/posts')}}/{{$s->image}}" width="100%" /></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <h4><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h4>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div></div>
        
        <div class="col-md-12">
        	<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
			<div class="col-md-12">
            <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">HEALTH</span></h3>
            </div>
        	<div class="col-md-6">
            	@foreach($health as $key=>$s)
                @if($key == 0)
                    <a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('public/posts')}}/{{$s->image}}" width="100%" style="margin-bottom:15px; height: 180px;" /></a>
                    <h3><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h3>
                    <p align="justify">{!! substr($s->description,0,300) !!}</p><a href="{{url('article')}}/{{$s->slug}}">Read more &raquo;</a>
                @endif
                @endforeach
            </div>
            <div class="col-md-6">
            	@foreach($health as $key=>$g)
                @if($key > 0 && $key < 6)
                <div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                    <div class="col-md-4">
                        <div class="row">
                            <a href="{{url('article')}}/{{$g->slug}}"><img src="{{url('public/posts')}}/{{$g->image}}" width="100%" /></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <h4><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}</a></h4>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
		</div>
        
        <div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
                <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">TRAVEL</span></h3>
                <div class="flex"> 
                    @foreach($travel->take(5) as $b)
                    <div>
                       <a href="{{url('article')}}/{{$b->slug}}"><img src="{{url('public/posts')}}/{{$b->image}}"/></a>
                    </div>
                @endforeach
                </div>
            </div>
        
        <div class="col-md-12">
            <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
            <div class="col-md-12">
            <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">ENTERTAINTMENT</span></h3>
            </div>
            <div class="col-md-6">
                @foreach($entertainment as $key=>$s)
                @if($key == 0)
                    <a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('public/posts')}}/{{$s->image}}" width="100%" style="margin-bottom:15px; height: 180px;" /></a>
                    <h3><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h3>
                    <p align="justify">{!! substr($s->description,0,300) !!}</p><a href="{{url('article')}}/{{$s->slug}}">Read more &raquo;</a>
                @endif
                @endforeach
            </div>
            <div class="col-md-6">
                @foreach($entertainment as $key=>$g)
                @if($key > 0 && $key < 6)
                <div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                    <div class="col-md-4">
                        <div class="row">
                            <a href="{{url('article')}}/{{$g->slug}}"><img src="{{url('public/posts')}}/{{$g->image}}" width="100%" /></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <h4><a href="{{url('article')}}/{{$g->slug}}">{{$g->title}}</a></h4>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        </div>
        </div>
    </div>


        <div class="col-md-4">
        <div class="col-md-12" style="border:1px solid #ccc; padding:15px;">
			<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">POLITICS</span></h3>
            @foreach($politics->take(10) as $p)
        	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	           	<div class="col-md-4">
                   	<div class="row">
    	           		<a href="{{url('article')}}/{{$p->slug}}"><img src="{{url('public/posts')}}/{{$p->image}}" width="100%" style="margin-left:-15px;" /></a>
        	       	</div>
                </div>
            	<div class="col-md-8">
                   	<div class="row" style="padding-left:10px;">
                		<h4><a href="{{url('article')}}/{{$p->slug}}">{{$p->title}}</a></h4>
                	</div>
                </div>
            </div>
            @endforeach    
          </div>

          <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 60px 15px; margin-top:30px;">
          	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:0px 10px 20px 10px; margin-bottom:10px;">
           		<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">STYLE</span></h3>
                @foreach($style as $key=>$s)
                @if($key == 0)
                    <a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('public/posts')}}/{{$s->image}}" width="100%" style="margin-bottom:15px;" /></a>
        			{!! substr($s->description,0,300) !!}
                    </p>
                    <a href="{{url('article')}}/{{$s->slug}}">Read more &raquo;</a>
                @endif
                @endforeach
            	</div>
                @foreach($style as $key=>$s)
                @if($key > 0 && $key < 10)
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
    	            		<a href="{{url('article')}}/{{$s->slug}}"><img src="{{url('public/posts')}}/{{$s->image}}" width="100%" style="margin-left-:15px;" /></a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:0px;">
                			<h4><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h4>
                		</div>
                    </div>
                </div>
                @endif
                @endforeach

          </div> 
          </div>
        </div>
    </div> 
</div>


@stop
<script>
    // Activate Carousel
$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
  $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
  $("#myCarousel").carousel("prev");
});
</script>