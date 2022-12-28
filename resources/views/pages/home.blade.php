@extends('layout.index')
@section('content')
      <!--end-->
      <div id="myCarousel1" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <ol class="carousel-indicators">
          <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel1" data-slide-to="1"></li>
          <li data-target="#myCarousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img
              src="images/banner.png"
              style="width: 100%; height: 500px"
              alt="First slide"
            />
            <div class="carousel-caption">
              <h1>
                TUGAS<br />
                FRAMEWORK
              </h1>
            </div>
          </div>
          <div class="item">
            <img
              src="images/banner2.png"
              style="width: 100%; height: 500px"
              alt="Second slide"
            />
            <div class="carousel-caption">
              <h1>
                RESERVASI<br />
                HOTEL
              </h1>
            </div>
          </div>
          <div class="item">
            <img
              src="images/banner3.png"
              style="width: 100%; height: 500px"
              alt="Third slide"
            />
            <div class="carousel-caption">
              <h1>
                STMIK<br />
                LOMBOK
              </h1>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
          <img
            src="images/icons/left-arrow.png"
            onmouseover="this.src = 'images/icons/left-arrow-hover.png'"
            onmouseout="this.src = 'images/icons/left-arrow.png'"
            alt="left"
        /></a>
        <a class="right carousel-control" href="#myCarousel1" data-slide="next"
          ><img
            src="images/icons/right-arrow.png"
            onmouseover="this.src = 'images/icons/right-arrow-hover.png'"
            onmouseout="this.src = 'images/icons/right-arrow.png'"
            alt="left"
        /></a>
      </div>
      <div class="clearfix"></div>

      <!--service block--->
      <section class="service-block">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-6 width-50 text-center">
              <h2>
                <strong><u>Semua Hotel</u></strong>
              </h2>
            </div>
          </div>
        </div>
      </section>

      <!--gallery block--->
      <section class="gallery-block gallery-front">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <div class="gallery-image">
                <img class="img-responsive" src="images/room1.png" />
                <div class="overlay">
                  <a
                    class="info pop example-image-link img-responsive"
                    href="images/room1.png"
                    data-lightbox="example-1"
                    ><i class="fa fa-plus" aria-hidden="true"></i
                  ></a>
                  <p><a>delux room</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endsection
