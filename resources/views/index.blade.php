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
        <!-- ===== End of Main Section - Slider ===== -->

    <!-- ===== Start About Us Section ===== -->
    <section id="about-us">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 about-image"></div>

          <div class="col-md-8 main-content">
            <h2 class="section-title">About Us</h2>
            <div class="about-description">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap into
                electronic typesetting.
              </p>
              <a href="about.html" class="btn">Read more</a>
            </div>
          </div>

          <div class="logo-overlay"></div>
        </div>
      </div>
    </section>
    <!-- ===== End About Us Section ===== -->

    <!-- ===== Start of Gallery Section ===== -->
    <section id="gallery">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 pad80">
            <h2 class="section-title">Gallery</h2>
          </div>

          <!-- Start of Gallery Filters -->
          <ul class="gallery-sorting text-center">
            <li>
              <a href="#" class="btn-border active" data-group="all">All</a>
            </li>
            <li>
              <a href="#" class="btn-border" data-group="indoor">Indoor</a>
            </li>
            <li>
              <a href="#" class="btn-border" data-group="outdoor">Outdoor</a>
            </li>
            <li><a href="#" class="btn-border" data-group="spa">Spa</a></li>
            <li><a href="#" class="btn-border" data-group="yoga">Yoga</a></li>
          </ul>
          <!-- End of Gallery Filters -->

          <!-- Start of Gallery Images -->
          <ul class="gallery-items list-unstyled" id="grid">
            <!-- image 1 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["indoor"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0019.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0019.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 2 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["outdoor"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0020.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0020.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 3 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["indoor"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0021.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0021.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 4 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["outdoor"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0022.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0022.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 5 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["outdoor"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0023.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0023.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 6 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["yoga"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0024.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0024.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 7 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["indoor"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0025.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0025.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 8 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["outdoor"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0026.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0026.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 9 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["outdoor"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0027.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/waterpark/IMG-20240405-WA0027.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 10 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["outdoor"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/gallery10.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/gallery10.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 11 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["outdoor"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/gallery11.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/gallery11.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- image 12 -->
            <li class="col-md-2 col-sm-4 col-xs-6" data-groups='["spa"]'>
              <figure class="gallery-item">
                <a href="{{asset('frontend/images/img/gallery12.jpg')}}">
                  <img
                    src="{{asset('frontend/images/img/gallery12.jpg')}}"
                    alt=""
                    class="img-responsive"
                  />
                </a>
              </figure>
            </li>

            <!-- sizer -->
            <li class="col-md-2 col-sm-4 col-xs-6 shuffle_sizer"></li>
          </ul>
          <!-- End of Gallery Images -->
        </div>
      </div>
    </section>
    <!-- ===== End of Gallery Section ===== -->

    <!-- ===== Start of Training Courses Section ===== -->
    <section id="courses">
      <div class="container-fluid">
        <div class="col-md-12 main-content">
          <h2 class="section-title">Training Courses</h2>
        </div>

        <!-- Start of Course Main -->
        <div class="course-main">
          <div class="row">
            <!-- Volley Course -->
            <div
              class="col-md-5 col-sm-6 col-xs-12 training-course"
              id="volley"
            >
              <div class="pull-right">
                <a href="#0">
                  <img src="{{asset('frontend/images/icons/volleyball.svg')}}" alt="" />
                </a>
                <h4>Beach Volley</h4>
                <a href="#" class="btn">visit course</a>
              </div>
            </div>

            <!-- Fitness Course -->
            <div
              class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12 training-course"
              id="fitness"
            >
              <div class="pull-left">
                <a href="#0">
                  <img src="{{asset('frontend/images/icons/fitness.svg')}}" alt="" />
                </a>
                <h4>Fitness</h4>
                <a href="#" class="btn">visit course</a>
              </div>
            </div>
          </div>
          <!-- end of row -->

          <div class="row pad40">
            <!-- Swimming Course -->
            <div
              class="col-md-3 col-sm-6 col-xs-12 training-course"
              id="swimming"
            >
              <div class="pull-right">
                <a href="#0">
                  <img src="{{asset('frontend/images/icons/swimming.svg')}}" alt="" />
                </a>
                <h4>Swimming</h4>
                <a href="#" class="btn">visit course</a>
              </div>
            </div>

            <!-- Main Image -->
            <div class="col-md-6 course-image">
              <img
                src="{{asset('frontend/images/img/yoga-course.png')}}"
                class="img-responsive"
                alt=""
              />
            </div>

            <!-- Yoga Course -->
            <div
              class="col-md-3 col-sm-6 col-xs-12 training-course active"
              id="yoga"
            >
              <div class="pull-left">
                <a href="#0">
                  <img src="{{asset('frontend/images/icons/yoga.svg')}}" alt="" />
                </a>
                <h4>Yoga</h4>
                <a href="#" class="btn">visit course</a>
              </div>
            </div>
          </div>
          <!-- end of row -->
        </div>
        <!-- Start of Course Main -->
      </div>
    </section>
    <!-- ===== End of Training Courses Section ===== -->

    <!-- ===== Start of CountUp Section ===== -->
    <section id="countup">
      <div class="container main-content">
        <div class="col-md-12">
          <!-- 1st Count up item -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <img src="{{asset('frontend/images/icons/trophy.svg')}}" alt="" />
            <h3>Awards Won</h3>
            <span class="counter" data-from="0" data-to="95"></span>
          </div>
          <!-- End of 1st Count up item -->

          <!-- 2nd Count up item -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <img src="{{asset('frontend/images/icons/happy.svg')}}" alt="" />
            <h3>Happy Clients</h3>
            <span class="counter" data-from="0" data-to="100000"></span>
          </div>
          <!-- End of 2nd Count up item -->

          <!-- 3rd Count up item -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <img src="{{asset('frontend/images/icons/swimmer.svg')}}" alt="" />
            <h3>Daily Swimmmers</h3>
            <span class="counter" data-from="0" data-to="225"></span>
          </div>
          <!-- End of 3rd Count up item -->
        </div>
      </div>
    </section>
    <!-- ===== End of CountUp Section ===== -->

    <!-- ===== Start of Blog Section ===== -->
    <section id="blog">
      <div class="container">
        <!-- Start of Blog Post 1 -->
        <article class="col-md-12 blog-post">
          <div class="col-md-3 blog-thumbnail">
            <a href="blog-detail.html"
              ><img
                src="{{asset('frontend/images/img/blog-post1.jpg')}}"
                class="img-responsive"
                alt=""
            /></a>
            <div class="date">
              <span class="day">12</span>
              <span class="publish-month">Nov</span>
            </div>
          </div>

          <div class="col-md-9 blog-desc">
            <h4><a href="blog-detail.html">top 10 meditation tipps</a></h4>
            <div class="post-detail">
              <span><i class="fa fa-user"></i>Author</span>
              <span><i class="fa fa-clock-o"></i>4:30</span>
              <span><i class="fa fa-comments-o"></i>12 Comments</span>
            </div>

            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged....
            </p>
            <a href="blog-detail.html" class="btn">read more</a>
          </div>
        </article>
        <!-- End of Blog Post 1 -->

        <!-- Start of Blog Post 2 -->
        <article class="col-md-12 blog-post">
          <div class="col-md-3 blog-thumbnail">
            <a href="blog-detail.html"
              ><img
                src="{{asset('frontend/images/img/blog-post2.jpg')}}"
                class="img-responsive"
                alt=""
            /></a>
            <div class="date">
              <span class="day">11</span>
              <span class="publish-month">Nov</span>
            </div>
          </div>

          <div class="col-md-9 blog-desc">
            <h4><a href="blog-detail.html">upcoming swimmerland party</a></h4>
            <div class="post-detail">
              <span><i class="fa fa-user"></i>Author</span>
              <span><i class="fa fa-clock-o"></i>4:30</span>
              <span><i class="fa fa-comments-o"></i>12 Comments</span>
            </div>

            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged....
            </p>
            <a href="blog-detail.html" class="btn">read more</a>
          </div>
        </article>
        <!-- End of Blog Post 2 -->

        <!-- Start of Blog Post 3 -->
        <article class="col-md-12 blog-post">
          <div class="col-md-3 blog-thumbnail">
            <a href="blog-detail.html"
              ><img
                src="{{asset('frontend/images/img/blog-post3.jpg')}}"
                class="img-responsive"
                alt=""
            /></a>
            <div class="date">
              <span class="day">11</span>
              <span class="publish-month">Nov</span>
            </div>
          </div>

          <div class="col-md-9 blog-desc">
            <h4><a href="blog-detail.html">our new pools</a></h4>
            <div class="post-detail">
              <span><i class="fa fa-user"></i>Author</span>
              <span><i class="fa fa-clock-o"></i>4:30</span>
              <span><i class="fa fa-comments-o"></i>12 Comments</span>
            </div>

            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged....
            </p>
            <a href="blog-detail.html" class="btn">read more</a>
          </div>
        </article>
        <!-- End of Blog Post 3 -->

        <!-- Start of Blog Post 4 -->
        <article class="col-md-12 blog-post">
          <div class="col-md-3 blog-thumbnail">
            <a href="blog-detail.html"
              ><img
                src="{{asset('frontend/images/img/blog-post4.jpg')}}"
                class="img-responsive"
                alt=""
            /></a>
            <div class="date">
              <span class="day">10</span>
              <span class="publish-month">Nov</span>
            </div>
          </div>

          <div class="col-md-9 blog-desc">
            <h4>
              <a href="blog-detail.html"
                >why children dont like getting out of the water</a
              >
            </h4>
            <div class="post-detail">
              <span><i class="fa fa-user"></i>Author</span>
              <span><i class="fa fa-clock-o"></i>4:30</span>
              <span><i class="fa fa-comments-o"></i>12 Comments</span>
            </div>

            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged....
            </p>
            <a href="blog-detail.html" class="btn">read more</a>
          </div>
        </article>
        <!-- End of Blog Post 4 -->

        <div class="col-md-12 text-center">
          <a href="blog-listing.html" class="btn-border">visit blog</a>
        </div>
      </div>
    </section>
    <!-- ===== End of Blog Section ===== -->

    <!-- ===== Start of Testimonial Section ===== -->
    <section id="testimonials">
      <div class="container main-content">
        <div class="col-md-12">
          <h2 class="section-title">
            <span>happy clients</span><br />
            testimonial
          </h2>
        </div>

        <!-- Start of Sync 1 -->
        <div id="sync1" class="owl-carousel col-md-12">
          <!-- Testimonial of Client 1 -->
          <div class="item">
            <div class="testimonial">
              <blockquote>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specibook. It has
                survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially.
              </blockquote>
            </div>
          </div>

          <!-- Testimonial of Client 2 -->
          <div class="item">
            <div class="testimonial">
              <blockquote>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specibook. It has
                survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially.
              </blockquote>
            </div>
          </div>

          <!-- Testimonial of Client 3 -->
          <div class="item">
            <div class="testimonial">
              <blockquote>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specibook. It has
                survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially.
              </blockquote>
            </div>
          </div>
        </div>
        <!-- End of Sync 1 -->

        <!-- Start of Sync 2 -->
        <div id="sync2" class="owl-carousel col-md-12">
          <!-- Client 1 -->
          <div class="item">
            <!-- Client Image -->
            <div class="client-img">
              <img
                src="{{asset('frontend/images/img/testimonial1.jpg')}}"
                class="img-responsive"
                alt=""
              />
            </div>
            <!-- Client Detail -->
            <div class="details">
              <h4>janie doe</h4>
              <h6>professional swimmer</h6>
            </div>
          </div>

          <!-- Client 2 -->
          <div class="item">
            <!-- Client Image -->
            <div class="client-img">
              <img
                src="{{asset('frontend/images/img/testimonial2.jpg')}}"
                class="img-responsive"
                alt=""
              />
            </div>
            <!-- Client Detail -->
            <div class="details">
              <h4>janie doe</h4>
              <h6>professional swimmer</h6>
            </div>
          </div>

          <!-- Client 3 -->
          <div class="item">
            <!-- Client Image -->
            <div class="client-img">
              <img
                src="{{asset('frontend/images/img/testimonial3.jpg')}}"
                class="img-responsive"
                alt=""
              />
            </div>
            <!-- Client Detail -->
            <div class="details">
              <h4>janie doe</h4>
              <h6>professional swimmer</h6>
            </div>
          </div>
        </div>
        <!-- End of Sync 2 -->
      </div>
    </section>
    <!-- ===== End of Testimonial Section ===== -->

    <!-- ===== Start of Pricing Plan Section ===== -->
    <section id="pricing">
      <div class="container main-content">
        <div class="col-md-12">
          <h2 class="section-title">Pricing Plans</h2>
          <p class="section-descr">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae
            tellus orci. Nulla dictum semper leo. Suspendisse dui magna,
            tincidunt et nisi id, aliquam ultrices odio. Nunc non ipsum ac
            mauris facilisis placerat a quis magna.
          </p>
        </div>

        <!-- Start of Pricing Tables -->
        <div class="pricing-tables">
          <!-- Table 1 -->
          <div class="col-md-4" id="basic">
            <div class="pricing-wrapper">
              <!-- Start of Pricing Header -->
              <div class="pricing-header">
                <div class="price">
                  <span class="value">$17</span>
                </div>

                <div class="pricing-plan">
                  <img src="{{asset('frontend/images/icons/basic.svg')}}" alt="" />
                  <h4>Basic</h4>
                </div>
              </div>
              <!-- End of Pricing Header -->

              <!-- Start of Pricing Body -->
              <div class="pricing-body">
                <ul class="pricing-features">
                  <li>Up to 6 hrs access to all our pools</li>
                  <li>No Gym Access</li>
                  <li>No Sauna Access</li>
                  <li>No Volleyball Field Access</li>
                  <li>-</li>
                </ul>
              </div>
              <!-- End of Pricing Body -->

              <!-- Start of Pricing Footer -->
              <div class="pricing-footer">
                <a class="btn" href="#">Buy Now</a>
              </div>
              <!-- End of Pricing Footer -->
            </div>
          </div>
          <!-- End Table 1 -->

          <!-- Table 2 -->
          <div class="col-md-4" id="pro">
            <div class="pricing-wrapper">
              <!-- Start of Pricing Header -->
              <div class="pricing-header">
                <div class="price">
                  <span class="value">$39</span>
                </div>

                <div class="pricing-plan">
                  <img src="{{asset('frontend/images/icons/pro.svg')}}" alt="" />
                  <h4>Pro</h4>
                </div>
              </div>
              <!-- End of Pricing Header -->

              <!-- Start of Pricing Body -->
              <div class="pricing-body">
                <ul class="pricing-features">
                  <li>All day access to all our pools</li>
                  <li>Up to 2hrs Gym Access</li>
                  <li>Up to 45min Sauna Access</li>
                  <li>Volleyball Field Access</li>
                  <li>1 Yoga Lesson</li>
                </ul>
              </div>
              <!-- End of Pricing Body -->

              <!-- Start of Pricing Footer -->
              <div class="pricing-footer">
                <a class="btn" href="#">Buy Now</a>
              </div>
              <!-- End of Pricing Footer -->
            </div>
          </div>
          <!-- End Table 2 -->

          <!-- Table 3 -->
          <div class="col-md-4" id="ultra">
            <div class="pricing-wrapper">
              <!-- Start of Pricing Header -->
              <div class="pricing-header">
                <div class="price">
                  <span class="value">$99</span>
                </div>

                <div class="pricing-plan">
                  <img src="{{asset('frontend/images/icons/basic.svg')}}" alt="" />
                  <h4>Ultra</h4>
                </div>
              </div>
              <!-- End of Pricing Header -->

              <!-- Start of Pricing Body -->
              <div class="pricing-body">
                <ul class="pricing-features">
                  <li>15 days access to all our pools</li>
                  <li>3hrs Gym Access Daily</li>
                  <li>All Day Sauna Access</li>
                  <li>Volleyball Field Access</li>
                  <li>10 Yoga Lessons</li>
                </ul>
              </div>
              <!-- End of Pricing Body -->

              <!-- Start of Pricing Footer -->
              <div class="pricing-footer">
                <a class="btn" href="#">Buy Now</a>
              </div>
              <!-- End of Pricing Footer -->
            </div>
          </div>
          <!-- End Table 3 -->
        </div>
        <!-- End of Pricing Tables -->
      </div>
    </section>
    <!-- ===== Start of Pricing Table Section ===== -->

    <!-- ===== Start of Sign Up Section ===== -->
    <section id="signup">
      <div class="container">
        <div class="col-md-6 col-md-offset-2">
          <h3 class="section-title">
            signup <strong>now</strong> and win up to<br />
            3 <strong>free</strong> all day tickets
          </h3>
        </div>

        <div class="col-md-4">
          <a href="#" class="btn">signup</a>
        </div>
      </div>
    </section>
    <!-- ===== End of Sign Up Section ===== -->

    <!-- ===== Start of Latest Event Section ===== -->
    <section id="events">
      <div class="container pad80">
        <div class="col-md-12">
          <h2 class="section-title">Latest Events</h2>
          <p class="section-descr">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae
            tellus orci. Nulla dictum semper leo. Suspendisse dui magna,
            tincidunt et nisi id, aliquam ultrices odio. Nunc non ipsum ac
            mauris facilisis placerat a quis magna.
          </p>
        </div>

        <!-- Start of Calendar -->
        <div class="col-md-6 pad80">
          <!-- Start of Calendar Container -->
          <div class="calendar-container">
            <div class="calendar">
              <!-- start of the Calendars header -->
              <header>
                <h3 class="month"></h3>
                <a class="btn-prev fa fa-arrow-circle-left"></a>
                <a class="btn-next fa fa-arrow-circle-right"></a>
              </header>
              <!-- End of the Calendars header -->

              <table class="table-responsive">
                <thead class="event-days">
                  <tr></tr>
                </thead>
                <tbody class="event-calendar">
                  <tr class="1"></tr>
                  <tr class="2"></tr>
                  <tr class="3"></tr>
                  <tr class="4"></tr>
                  <tr class="5"></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End of Calendar Container -->
        </div>
        <!-- End of Calendar -->

        <!-- Start of Events List -->
        <div class="col-md-6 pad80">
          <div class="list">
            <!-- Start of Event 1 -->
            <div
              class="day-event"
              date-month="11"
              date-day="4"
              event-class="event"
            >
              <div class="event-img">
                <img
                  src="{{asset('frontend/images/img/gallery3.jpg')}}"
                  class="img-responsive"
                  alt=""
                />
              </div>

              <div class="event-details">
                <h4>Lorem ipsum 1</h4>
                <p class="date">4 - 11 - 2016</p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                  vitae tellus orci. Nulla dictum semper leo. Suspendisse dui
                  magna, tincidunt et nisi id, aliquam ultrices odio. Nunc non
                  ipsum ac mauris facilisis placerat a quis magna. Morbi velit
                  leo, commodo tempor sagittis ut, consectetur vitae dolor.
                  Pellentesque eleifend nisi nec congue volutpat. Aliquam non ex
                  quis justo auctor sagittis.
                </p>
                <a href="#" class="btn button">Read more!</a>
              </div>
            </div>
            <!-- End of Event 1 -->

            <!-- Start of Event 2 -->
            <div
              class="day-event active"
              date-month="11"
              date-day="14"
              event-class="event"
            >
              <div class="event-img">
                <img
                  src="{{asset('frontend/images/img/event1.jpg')}}"
                  class="img-responsive"
                  alt=""
                />
              </div>

              <div class="event-details">
                <h4>Lorem ipsum 1</h4>
                <p class="date">14 - 11 - 2016</p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                  vitae tellus orci. Nulla dictum semper leo. Suspendisse dui
                  magna, tincidunt et nisi id, aliquam ultrices odio. Nunc non
                  ipsum ac mauris facilisis placerat a quis magna. Morbi velit
                  leo, commodo tempor sagittis ut, consectetur vitae dolor.
                  Pellentesque eleifend nisi nec congue volutpat. Aliquam non ex
                  quis justo auctor sagittis.
                </p>
                <a href="#" class="btn button">Read more!</a>
              </div>
            </div>
            <!-- End of Event 2 -->

            <!-- Start of Event 3 -->
            <div
              class="day-event"
              date-month="11"
              date-day="29"
              event-class="event"
            >
              <div class="event-img">
                <img
                  src="{{asset('frontend/images/img/gallery6.jpg')}}"
                  class="img-responsive"
                  alt=""
                />
              </div>

              <div class="event-details">
                <h4>Lorem ipsum 1</h4>
                <p class="date">29 - 11 - 2016</p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                  vitae tellus orci. Nulla dictum semper leo. Suspendisse dui
                  magna, tincidunt et nisi id, aliquam ultrices odio. Nunc non
                  ipsum ac mauris facilisis placerat a quis magna. Morbi velit
                  leo, commodo tempor sagittis ut, consectetur vitae dolor.
                  Pellentesque eleifend nisi nec congue volutpat. Aliquam non ex
                  quis justo auctor sagittis.
                </p>
                <a href="#" class="btn button">Read more!</a>
              </div>
            </div>
            <!-- End of Event 3 -->
          </div>
          <!-- End of List -->
        </div>
        <!-- End of Events List -->
      </div>
    </section>
    <!-- ===== End of Latest Event Section ===== -->

    <!-- ===== Start of Partners Section ===== -->
    <section id="partners">
      <div class="container main-content">
        <div class="owl-carousel partners-slider">
          <div class="item">
            <a href="#"
              ><img src="{{asset('frontend/images/partners/envato-logo.svg')}}" alt="image title"
            /></a>
          </div>
          <div class="item">
            <a href="#"
              ><img src="{{asset('frontend/images/partners/envato-logo.svg')}}" alt="image title"
            /></a>
          </div>
          <div class="item">
            <a href="#"
              ><img src="{{asset('frontend/images/partners/envato-logo.svg')}}" alt="image title"
            /></a>
          </div>
          <div class="item">
            <a href="#"
              ><img src="{{asset('frontend/images/partners/envato-logo.svg')}}" alt="image title"
            /></a>
          </div>
          <div class="item">
            <a href="#"
              ><img src="{{asset('frontend/images/partners/envato-logo.svg')}}" alt="image title"
            /></a>
          </div>
          <div class="item">
            <a href="#"
              ><img src="{{asset('frontend/images/partners/envato-logo.svg')}}" alt="image title"
            /></a>
          </div>
          <div class="item">
            <a href="#"
              ><img src="{{asset('frontend/images/partners/envato-logo.svg')}}" alt="image title"
            /></a>
          </div>
          <div class="item">
            <a href="#"
              ><img src="{{asset('frontend/images/partners/envato-logo.svg')}}" alt="image title"
            /></a>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== End of Partners Section ===== -->
@endsection
