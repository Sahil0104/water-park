@extends('include.main')
@section('content')
    <section class="main" id="home">
        <!-- Swiper -->
        <div class="swiper-container fullscreen">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide overlay"
                    style="
          background: url('{{asset('frontend/images/img/slider-bg.jpg')}}');
          background-size: cover;
        ">
                    <div class="slider-content container">
                        <div class="col-md-12">
                            <h3>
                                Welcome to <br />
                                <span>Ek Mokla Swash Water Park</span>
                            </h3>
                            <h4>The place where you always be <span>young</span>!</h4>
                            <div class="cta">
                                <a href="#" class="btn">discover now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide 1 -->

                <!-- Slide 2 -->
                <div class="swiper-slide overlay"
                    style="
          background: url('{{asset('frontend/images/img/slider-bg2.jpg')}}');
          background-size: cover;
        ">
                    <div class="slider-content container">
                        <div class="col-md-12">
                            <h3>
                                Welcome to <br />
                                <span>Ek Mokla Swash Water Park</span>
                            </h3>
                            <h4>The place where you always be <span>young</span>!</h4>
                            <div class="cta">
                                <a href="#" class="btn">discover now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide 2 -->

                <!-- Slide 3 -->
                <div class="swiper-slide overlay"
                    style="
          background: url('{{asset('frontend/images/img/slider-bg2.jpg')}}');
          background-size: cover;
        ">
                    <!-- Slider Content -->
                    <div class="slider-content container">
                        <div class="col-md-12">
                            <h3>
                                Welcome to <br />
                                <span>Ek Mokla Swash Water Park</span>
                            </h3>
                            <h4>The place where you always be <span>young</span>!</h4>
                            <div class="cta">
                                <a href="#" class="btn">discover now</a>
                            </div>
                        </div>
                    </div>

                    <!-- Video Background -->
                    <video class="video-bg" preload="auto" loop="" autoplay="" poster="video/video.jpg">
                        <source src="video/video.mp4" type="video/mp4" />
                        <source src="video/video.webm" type="video/webm" />
                        <source src="video/video.ogv" type="video/ogg" />
                    </video>
                </div>
                <!-- End of Slide 3 -->
            </div>
            <!-- End of Swiper Wrapper -->

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- scroll down -->
            <div class="scroll-down">
                <a href="#about-us"><i class="fa fa-angle-double-down"></i></a>
            </div>
        </div>
        <!-- End of Swiper Container -->
    </section>
@endsection
