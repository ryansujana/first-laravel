@extends ('frontend.master')
@section ('title')
<title>Gallery | DISKOMINFO</title>
@stop
@section ('content')

    <div class="wrapper">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Gallery</h1>
        </div>

        @foreach($sliders as $b)
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                       <img src="{{url('sliders')}}/{{$b->image}}" class="img-responsive" style="width: 500px; height: 220px;">
                       <p style="text-align: center;">{{$b->title}}</p>
            </div>
        @endforeach
        </div> 
    </div>


@stop
<script>
    $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>
