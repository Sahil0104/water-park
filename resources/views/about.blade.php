@extends('include.main')
@section('content')
    <!-- ===== Main Page Section ===== -->
    <section class="main" id="pages">

        <!-- Title -->
        <div class="page-title overlay" style="background: url('images/img/slider-bg.jpg'); background-size: cover;">
            <h2>About Us</h2>
        </div>
        <!-- End of Title -->

    </section>
    <!-- ===== End of Main Page Section ===== -->

    <!-- ===== Start of About Section ===== -->
    <section id="about">
        <div class="container main-content">

            <div class="col-md-12">
                <h2 class="section-title">how we started</h2>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged.</p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                    more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged.</p>
            </div>

            <!-- Start of About Video -->
            <div class="col-md-6 about-vid pad40">
                <div class="vid-container">
                    <!-- Insert video url in the href below -->
                    <a href="video/video.mp4" class="popup-video">
                        <img src="images/img/gallery4.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
            <!-- End of About Video -->

            <div class="col-md-6 pad40">
                <!-- Start of Check List -->
                <ul class="check-list">
                    <li>10 new water slider for extra fun!</li>
                    <li>7 different courses!</li>
                    <li>10 Saunas!</li>
                    <li>25 pools for children & adults!</li>
                    <li>Childcare!</li>
                </ul>
                <!-- End of Check List -->

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged.</p>
            </div>


        </div>
    </section>
    <!-- ===== End of About Section ===== -->

    <!-- ===== Start of CountUp Section ===== -->
    <section id="countup">
        <div class="container main-content">
            <div class="col-md-12">

                <!-- 1st Count up item -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <img src="images/icons/trophy.svg" alt="">
                    <h3>Awards Won</h3>
                    <span class="counter" data-from="0" data-to="95"></span>
                </div>
                <!-- End of 1st Count up item -->

                <!-- 2nd Count up item -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <img src="images/icons/happy.svg" alt="">
                    <h3>Happy Clients</h3>
                    <span class="counter" data-from="0" data-to="100000"></span>
                </div>
                <!-- End of 2nd Count up item -->

                <!-- 3rd Count up item -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <img src="images/icons/swimmer.svg" alt="">
                    <h3>Daily Swimmmers</h3>
                    <span class="counter" data-from="0" data-to="225"></span>
                </div>
                <!-- End of 3rd Count up item -->

            </div>
        </div>
    </section>
    <!-- ===== End of CountUp Section ===== -->

    <!-- ===== Start of Timeline Section ===== -->
    <section id="timeline">
        <div class="container main-content">
            <div class="col-md-12">
                <h2 class="section-title">Our history</h2>


                <!-- Start of Timeline -->
                <ul class="timeline">

                    <!-- Start of Timeline Event 1 -->
                    <li>
                        <div class="timeline-badge wow fadeIn"></div>
                        <div class="timeline-panel wow fadeInLeft">
                            <!-- Timeline Header -->
                            <div class="timeline-header">
                                <h4>timeline event</h4>
                            </div>
                            <!-- Timeline Image -->
                            <div class="timeline-image">
                                <img src="images/img/slider-bg.jpg" class="img-responsive" alt="">
                            </div>
                            <!-- Timeline Description -->
                            <div class="timeline-descr">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </li>
                    <!-- End of Timeline Event 1 -->

                    <!-- Start of Timeline Event 2 -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge wow fadeIn"></div>
                        <div class="timeline-panel wow fadeInRight">
                            <!-- Timeline Header -->
                            <div class="timeline-header">
                                <h4>timeline event</h4>
                            </div>
                            <!-- Timeline Image -->
                            <div class="timeline-image">
                                <img src="images/img/slider-bg2.jpg" class="img-responsive" alt="">
                            </div>
                            <!-- Timeline Description -->
                            <div class="timeline-descr">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </li>
                    <!-- End of Timeline Event 2 -->

                    <!-- Start of Timeline Event 3 -->
                    <li>
                        <div class="timeline-badge"></div>
                        <div class="timeline-panel">
                            <!-- Timeline Header -->
                            <div class="timeline-header">
                                <h4>timeline event</h4>
                            </div>
                            <!-- Timeline Image -->
                            <div class="timeline-image">
                                <img src="images/img/slider-bg.jpg" class="img-responsive" alt="">
                            </div>
                            <!-- Timeline Description -->
                            <div class="timeline-descr">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </li>
                    <!-- End of Timeline Event 3 -->

                    <!-- Start of Timeline Event 4 -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge"></div>
                        <div class="timeline-panel">
                            <!-- Timeline Header -->
                            <div class="timeline-header">
                                <h4>timeline event</h4>
                            </div>
                            <!-- Timeline Image -->
                            <div class="timeline-image">
                                <img src="images/img/slider-bg2.jpg" class="img-responsive" alt="">
                            </div>
                            <!-- Timeline Description -->
                            <div class="timeline-descr">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </li>
                    <!-- End of Timeline Event 4 -->

                </ul>
                <!-- End of Timeline -->

            </div>

            <div class="col-md-12 load wow fadeIn">
                <a href="#" class="btn-border">load more</a>
                <div id="loadmsg"></div>
            </div>
        </div>
    </section>
@endsection
