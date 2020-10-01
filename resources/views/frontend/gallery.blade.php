@extends ('frontend.master')
@section ('title')
<title>Gallery | Lak Galuh Pakuan</title>
@stop
@section ('content')
        <section class="portfolio">
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
        </section>

        <section>

        <div class="container content-slider">
          <div class="content-slider-wrap">
          <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                @foreach($sliders as $slider)
                <div class="carousel-item {{$loop->index == 0 ? 'active' : ''}}">
                  <img class="d-block w-100" src="{{asset('sliders/'.$slider->image)}}"
                    alt="First slide" style="width: 50px; height: 500px;">
                </div>
                @endforeach
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
              <ol class="carousel-indicators">
                @foreach($sliders as $slider)
                <li data-target="#carousel-thumb" data-slide-to="{{ $loop->index }}" class="{{ $loop->index == 0 ? 'active' : ''}}">
                  <img src="{{asset('sliders/'.$slider->image)}}" style="width: 100px; height: 60px;">
                </li>
                @endforeach
              </ol>
            </div>
          </div>
        </div>
        <!--/.Carousel Wrapper-->
        </section>
@stop