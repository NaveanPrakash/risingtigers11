@include('blade_files.include.head')
@include('blade_files.include.header_inner')
<!-- Home Section -->
<section class="small-section  bg-scroll light-content about-home" id="home">
    <div class="container relative pt-70">
        <div class="home-content-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 v-center">
                        <div class="bread-inner">
                            <div class="bread-title">
                                <h2>About Us</h2>
                                <div class="text-center mod-breadcrumbs text-end">
                                    <a href="{{url('/')}}">Home</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<span class="mod-breadcrumbs-slash"></span>&nbsp;<span><a href="{{url('/about')}}">About Us</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Home for desktop Section -->
<!-- for mobile -->
<section class="aboutmobile"> <a href="#about" class="banner-icon"> <i class="flaticon-down-arrow"></i> </a>
    <div class="container mobtop">
        <div class="row">
            <div class="col-lg-8 v-center">
                <div class="bread-inner">
                    <div class="bread-title">
                        <h2>About Us</h2>
                        <div class="text-center  text-end ">
                            <a href="{{url('/')}}">Home</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<span class="mod-breadcrumbs-slash"></span>&nbsp;<span><a href="{{url('/about')}}">About Us</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 v-center">
                <div style="display:flex;justify-content:center">
                    <img src="assets/images/mobile/Aboutus_Overlay_Mobile.png" alt="history" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- for mobile -->

<!-- About Section -->
<section class="page-section light-content gaming" id="about">
    <div class="container relative">

        <div class="section-text mb-60 mb-sm-40">
            <div class="banner-content wow fadeInUpShort features-descr about-content" data-wow-duration="1.2s">
                <h3 class="banner-heading">Meet The Pioneers Of The Gaming Industry!</h3>
                <div class="banner-decription">
                    In a rapidly evolving world, it's incredible to find someone like you. But first, let's get to know one another well.
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 mb-md-50 mb-xs-10 wow fadeInUpShort" data-wow-offset="0">
                    <p class="mb-30">
                        As a company, we strive to provide our users with the best possible gaming experience. Our website was designed to provide users with a realistic experience of playing on a virtual platform.
                    </p>
                    <p class="mb-30">
                        Furthermore, we strive to give every player a quality and hassle-free Rummy playing experience on our website, Android, and iOS apps. We designed our games so that anyone can enjoy them without consulting anyone beforehand.
                    </p>
                    <p class="mb-30">Online Rummy games require the highest level of fairness. We can assure you that we do not tolerate any foul play and any violation of this will result in an immediate ban.</p>
                </div>

                <div class="col-md-6 mb-md-50 mb-xs-10 wow fadeInUpShort" data-wow-offset="0">

                    <!-- Bar Item -->
                    <div class="progress tpl-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div>Safe Gaming</div> <span>100</span>
                        </div>
                    </div>
                    <!-- End Bar Item -->

                    <!-- Bar Item -->
                    <div class="progress tpl-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
                            <div>Fair Play</div> <span>99</span>
                        </div>
                    </div>
                    <!-- End Bar Item -->

                    <!-- Bar Item -->
                    <div class="progress tpl-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div>24x7 support</div> <span>100</span>
                        </div>
                    </div>
                    <!-- End Bar Item -->

                    <!-- Bar Item -->
                    <div class="progress tpl-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div>Secured Transfer</div> <span>100</span>
                        </div>
                    </div>
                    <!-- End Bar Item -->

                </div>

            </div>
        </div>

        <!-- Counters -->
        <div class="count-wrapper">
            <div class="row">

                <!-- Counter Item -->
                <div class="col-md-6 col-lg-3 mb-md-30">
                    <div class="count-item">
                        <div class="count-bg wow scalexIn"></div>
                        <div class="relative wow fadeIn" data-wow-delay="1s">
                            <div class="count-number">
                                2500
                            </div>
                            <div class="count-descr">
                                <img src="{{asset('assets/images/icons/ActiveUsers.png')}}" alt="">
                                <!-- <i class="fa fa-briefcase"></i> -->
                                <span class="count-title">Active users</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Counter Item -->

                <!-- Counter Item -->
                <div class="col-md-6 col-lg-3 mb-md-30">
                    <div class="count-item">
                        <div class="count-bg wow scalexIn"></div>
                        <div class="relative wow fadeIn" data-wow-delay="1.1s">
                            <div class="count-number">
                                3500
                            </div>
                            <div class="count-descr">
                                <img src="{{asset('assets/images/icons/downloads.png')}}" alt="!">
                                <!-- <i class="fa fa-heart"></i> -->
                                <span class="count-title">Downloads</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Counter Item -->

                <!-- Counter Item -->
                <div class="col-md-6 col-lg-3 mb-md-30">
                    <div class="count-item">
                        <div class="count-bg wow scalexIn"></div>
                        <div class="relative wow fadeIn" data-wow-delay="1.2s">
                            <div class="count-number">
                                2600
                            </div>
                            <div class="count-descr">
                                <img src="{{asset('assets/images/icons/VIPUsers.png')}}" alt="!">
                                <!-- <i class="fa fa-coffee"></i> -->
                                <span class="count-title"> Premium users</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Counter Item -->

                <!-- Counter Item -->
                <div class="col-md-6 col-lg-3 mb-md-30">
                    <div class="count-item">
                        <div class="count-bg wow scalexIn"></div>
                        <div class="relative wow fadeIn" data-wow-delay="1.3s">
                            <div class="count-number">
                                2000
                            </div>
                            <div class="count-descr">
                                <img src="{{asset('assets/images/icons/DailyWinnins.png')}}" alt="!">
                                <!-- <i class="fa fa-lightbulb"></i> -->
                                <span class="count-title">Daily Winners</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Counter Item -->

            </div>
        </div>
        <!-- End Counters -->

    </div>
</section>
<!-- End About Section -->


<!-- Testimonials Section -->
<section class="page-section  content-5">
    <div class="container relative">

        <div class="row">
            <div class=" col-lg-8 offset-lg-2 wow fadeInUpShort">

                <div class="text-center mb-50 mb-sm-20">
                    <h2 class="section-title">The Rumour Mill Is A Whirl!</h2>
                    <p class="section-title-descr">Looks like we have a lot of secret admirers professing their undying love!</p>
                    <!-- <footer class="testimonial-author  mt-sm-20">
                        — Arnab
                    </footer> -->
                </div>

                <div class="text-slider">


                    <!-- End Slide Item -->

                    <!-- Slide Item -->
                    <div>
                        <blockquote class="testimonial">
                            <p>
                                In the past few days, I have enjoyed seeing what is available on your website. I can't express how amazing your games are. Thank you for making this wonderful rummy site!
                            </p>
                            <footer class="testimonial-author  mt-sm-20">
                                — Manash
                            </footer>
                        </blockquote>
                    </div>
                    <!-- End Slide Item -->

                    <!-- Slide Item -->
                    <div>
                        <blockquote class="testimonial">
                            <p>
                                The Support Team at 13cardsrummy is outstanding. I love the website and mobile app's user interface. I would definitely refer my friends and family to 13cardsrummy.
                            </p>
                            <footer class="testimonial-author  mt-sm-20">
                                — Keyashree
                            </footer>
                        </blockquote>
                    </div>
                    <div>
                        <blockquote class="testimonial">
                            <p>
                                I am thrilled as this is my third major win at such a prestigious event. I have won many contests on this authentic website. We are always thrilled to win such an incredible cash pool.
                            </p>
                            <footer class="testimonial-author  mt-sm-20">
                                — Moses
                            </footer>
                        </blockquote>
                    </div>
                    <div>
                        <blockquote class="testimonial">
                            <p>
                                It's fun playing rummy online 13cardsrummy. This site has a great withdrawal system and user experience. We can win more cash games and free cash contest through this website.
                            </p>
                            <footer class="testimonial-author  mt-sm-20">
                                — Johnny
                            </footer>
                        </blockquote>
                    </div>
                    <div>
                        <blockquote class="testimonial">
                            <p>
                                13cardsrummy is an excellent way to meet new people and play rummy. The customer service is helpful. I like the website, especially the rummy tables.
                            </p>
                            <footer class="testimonial-author  mt-sm-20">
                                — Arnab
                            </footer>
                        </blockquote>
                    </div>
                    <!-- End Slide Item -->

                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Testimonials Section -->


<!-- Logotypes Section -->
<section class="small-section pt-20 pb-20  light-content content-2">
    <div class="container relative">

        <div class="row wow fadeInUpShort">
            <div class="col-md-12">

                <div class="small-item-carousel black owl-carousel mb-0">

                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="{{asset('assets/images/clients-logos/dark/CloverLeaf.png')}}" width="150" height="90" alt="Company Name" />
                    </div>
                    <!-- End Logo Item -->

                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="{{asset('assets/images/clients-logos/dark/Diamond_.png')}}" width="150" height="90" alt="Company Name" />
                    </div>
                    <!-- End Logo Item -->

                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="{{asset('assets/images/clients-logos/dark/Heart_.png')}}" width="150" height="90" alt="Company Name" />
                    </div>
                    <!-- End Logo Item -->

                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="{{asset('assets/images/clients-logos/dark/joker_.png')}}" width="150" height="90" alt="Company Name" />
                    </div>
                    <!-- End Logo Item -->

                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="{{asset('assets/images/clients-logos/dark/spade_.png')}}" width="150" height="90" alt="Company Name" />
                    </div>
                    <!-- End Logo Item -->

                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="{{asset('assets/images/clients-logos/dark/Heart_.png')}}" width="150" height="90" alt="Company Name" />
                    </div>
                    <!-- End Logo Item -->
                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="{{asset('assets/images/clients-logos/dark/Diamond_.png')}}" width="150" height="90" alt="Company Name" />
                    </div>
                    <!-- End Logo Item -->
                    <!-- Logo Item -->
                    <div class="logo-item">
                        <img src="{{asset('assets/images/clients-logos/dark/CloverLeaf.png')}}" width="150" height="90" alt="Company Name" />
                    </div>
                    <!-- End Logo Item -->



                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Logotypes -->



<!-- Story Section -->
<section class="page-section bg-dark-lighter light-content mission-vission">
    <div class="container relative">

        <div class="text-center mb-80 mb-sm-50">
            <h2 class="section-title">Let's Bring Out The Best In You!</h2>

        </div>

        <!-- Our Story -->
        <div class="row">

            <div class="col-sm-8 offset-sm-2 wow fadeInUpShort">

                <!-- Nav Tabs -->
                <div class="align-center mb-40 mb-xxs-30">
                    <ul class="nav nav-tabs tpl-minimal-tabs animate" role="tablist">

                        <li class="nav-item">
                            <a href="#mission" aria-controls="mission" class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true">Mission</a>
                        </li>

                        <li class="nav-item">
                            <a href="#vision" aria-controls="vision" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">Vision</a>
                        </li>

                        <li class="nav-item">
                            <a href="#ideas" aria-controls="ideas" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">Values</a>
                        </li>

                    </ul>
                </div>
                <!-- End Nav Tabs -->

                <!-- Tab panes -->
                <div class="tab-content tpl-minimal-tabs-cont section-text align-center">

                    <div class="tab-pane fade show active" id="mission" role="tabpanel">
                        We aim to provide safe and controlled entertainment that benefits our users. We keep our eyes set on our goals and never compromise our way to attain it.
                    </div>

                    <div class="tab-pane fade" id="vision" role="tabpanel">
                        Our vision is to provide exceptional service, while maximizing the talents of our team. Our top priority is to provide the highest quality gaming products and services.
                    </div>

                    <div class="tab-pane fade" id="ideas" role="tabpanel">
                        We make the right decisions for growth and refine our games. We generate insights for a refined gaming experience and unprecedented growth every step of the way.
                    </div>

                </div>
                <!-- End Tab panes -->

            </div>

        </div>
        <!-- End Our Story -->

    </div>
</section>
<!-- End Story Section -->


<!-- Call Action Section -->
<section class="small-section  light-content content-6">
    <div class="container relative">
        <div class="row wow fadeInUpShort">
            <div class="col-md-12 text-center">
                <h3 class="call-action-1-heading">What’s Stopping You?</h3>
                <div class="call-action-1-decription mb-60 mb-sm-30">
                    Relive those golden memories of the past as you join the world of Rummy. Hop on, we ain’t leaving you behind!
                </div>

                <div class="local-scroll ">
                    <a href="https://admin.13cardsrummy.in/download" download="download/13CardRummy_v0.7.apk" class="btn btn-mod btn-w btn-large btn-round btn-mod-1 btn2">DOWNLOAD</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Call Action Section -->


</main>
@include('blade_files.include.footer')