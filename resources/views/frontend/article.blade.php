@extends ('frontend.master')
@section ('title')
<title>{{$data->title}} | DISKOMINFO</title>
@stop
@section ('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v7.0" nonce="4SLnVn2i"></script>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script> 
	<div class="wrapper">
		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">				
					<div class="col-md-12">
						<div class="text-right view-count">
							<h3>
								<i class="fa fa-calendar"></i>
								{{ $data->created_at }}
								<i class="fa fa-eye"></i>
								{{ $data->views + 1 }}
								@if($data->views !=0)
								Views 
								@else
								View
								@endif
							</h3>
						</div>
						<h1><a href="#"></a>{{$data->title}}</h1>
						<img src="{{url('posts')}}/{{$data->image}}" width="100%" style="margin-bottom:15px;" />
						{!! $data->description !!}
					</div>	
					<div class="col-md-12 share-this">
						<h4>Share this..</h4>
						<div class="col-md-12">
							<div class="fb-share-button" data-href="{{url('article')}}/{{$data->slug}}" data-layout="button" data-size="small"></div>
							<span class="tweet-btn">
							<a class="twitter-share-button" href="{{url('article')}}/{{$data->slug}}" data-size="small">
							Tweet</a>
							</span>
							<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
							<script type="IN/Share" data-url="{{url('article')}}/{{$data->slug}}"></script>
						</div>
					</div>
						<div class="col-md-12 also-like">
							<h3>You May Also Like</h3>
						</div>
						@foreach($related->take(3) as $r)			
						<div class="col-md-4">
							<a href="{{url('article')}}/{{$r->slug}}"><img src="{{url('posts')}}/{{$r->image}}" width="100%" style="margin-bottom:15px; height: 130px;" /></a>
							<h4><a href="{{url('article')}}/{{$r->slug}}">{{$r->title}}</a></h4>
						</div>
						@endforeach
				</div>        
			</div>

<!-- right section -->
			<div class="col-md-4">
				<div class="col-md-12" style="padding:15px;">
					<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">LATEST NEWS</span></h3>
					@foreach($latest->take(10) as $l)
					<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
						<div class="col-md-4">
							<div class="row">
								<a href="{{url('article')}}/{{$l->slug}}"><img src="{{url('posts')}}/{{$l->image}}" width="100%" style="margin-left:-15px;" />
							</div>
						</div>
						<div class="col-md-8">
							<div class="row" style="padding-left:10px;">
								<h4><a href="{{url('article')}}/{{$l->slug}}">{{$l->title}}</a></h4>
							</div>
						</div>
					</div>
					@endforeach
				</div> 
			</div>
		</div> 
	</div>


@stop
