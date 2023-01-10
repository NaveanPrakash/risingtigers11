    @include('blade_files.include.head')
    @include('blade_files.include.header')

    <section class="home-section  parallax-5">
        <div class="container-fluid   pt-100 pb-80">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-5  col-md-6 col-sm-12 col-12 home-section-1">
                    <img src="{{asset('assets/images/home1.png')}}" alt="homebanner">
                </div>
                <div class="col-lg-offset-0 col-lg-6  col-md-6 col-sm-12 col-12 home-section-2">
                    <!-- Hero Content data-background="images/full-width-images/section-bg-1.jpg" id="home" style="background-image: url(&quot;images/full-width-images/section-bg-1.jpg&quot;); background-position: 50% -53px;"-->
                    <div class="home-content">
                        <div class="wow fadeInUpShort animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUpShort;">
                            <h3 class="hs-line-1 opacity-085 mb-70 mb-sm-40">Keep Them <br>On Their Toes!</h3>
                        </div>
                        <div class="wow fadeInUpShort animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpShort;">
                            <p class="hs-line-6 opacity-07 hs-lines">
                                Get yourself on the spotlight with 13cardsrummy by living,<br> loving, and laughing with us!
                            </p>
                        </div>
                        <div class="local-scroll wow fadeInUpShort animated " data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUpShort;">
                            <a href="#about" class="btn btn-mod btn-large btn-round me-md-1 btn-mod-1">KNOW MORE</a>
                            <a href="https://admin.13cardsrummy.in/download" download="download/13CardRummy_v0.7.apk" class="btn btn-mod btn-large btn-round me-md-1 btn-mod-1">DOWNLOAD</a>                            
                        </div>
                    </div>
                    <!-- End Hero Content -->
                </div>
            </div>


            <!-- Scroll Down -->
            <div class="local-scroll scroll-down-wrap wow fadeInUpShort animated" data-wow-offset="0" style="visibility: visible; animation-name: fadeInUpShort;">
                <a href="#about" class="scroll-down opacity-085"><i class="scroll-down-icon"></i><span class="sr-only">Scroll to the next section</span></a>
            </div>
            <!-- End Scroll Down -->

        </div>
    </section>

    <!-- About Section -->
    <!-- <section class="page-section bg-dark light-content content-1" id="about">
        <div class="container relative">

            <div class="mb-140 mb-sm-70">
                <div class="row section-text">

                    <div class="col-md-12 col-lg-4 mb-md-50 mb-xs-30">
                        <div class="lead-alt wow linesAnimIn" data-splitting="lines">
                            We're Here To Elevate Your Mood!
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-sm-50 mb-xs-30 wow linesAnimIn" data-splitting="lines">
                        13cardsrummy is an online rummy platform dedicated to bringing you everything you need in the exciting world of Rummy.
                    </div>

                    <div class="col-md-6 col-lg-4 mb-sm-50 mb-xs-30 wow linesAnimIn" data-splitting="lines">
                        On the basis of the number of registered users, 13cardsrummy is India's fastest growing online rummy application platform.
                    </div>

                </div>
            </div>

            <div class="row">

           
                <div class="col-md-4 mb-xs-30">
                    <div class="team-item-wrap wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1.2s">
                        <div class="team-item-decoration" style="background-image: url(assets/images/team-decoration-1.png);"></div>
                        <div class="team-item">
                            <div class="team-item-image">
                                <img src="{{asset('assets/images/team/team-1.jpg')}}" alt="" />
                                <div class="team-item-detail">
                                    <p class="team-item-detail-title">
                                        OUR MISSION
                                    </p>
                                    <p>
                                        We aim to provide safe and controlled entertainment that benefits our users. We keep our eyes set on our goals and never compromise our way to attain it.
                                    </p>
                                </div>
                            </div>
                            <div class="team-item-descr">
                                <div class="team-item-name">
                                    OUR MISSION
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4 mb-xs-30">
                    <div class="team-item-wrap wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1.2s">
                    <div class="team-item-decoration" style="background-image: url(assets/images/team/team-decoration-1.png);"></div>
                    <div class="team-item">
                        <div class="team-item-image">
                            <img src="{{asset('assets/images/team/team-3.jpg')}}" alt="" />
                            <div class="team-item-detail">
                                <p class="team-item-detail-title">
                                    OUR GOAL
                                </p>
                                <p>
                                We make the right decisions for growth and refine our games. We generate insights for a refined gaming experience and unprecedented growth every step of the way.
                                </p>
                            </div>
                        </div>
                        <div class="team-item-descr">
                            <div class="team-item-name">
                                OUR GOAL
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        
                <div class="col-md-4 mb-xs-30">
                    <div class="team-item-wrap wow fadeInUp " data-wow-delay=".2s" data-wow-duration="1.2s">
                        <div class="team-item-decoration decoration-1" style="background-image: url(assets/images/team-decoration-2.png);"></div>
                        <div class="team-item">
                            <div class="team-item-image">
                                <img src="{{asset('assets/images/team/team-2.jpg')}}" alt="" />
                                <div class="team-item-detail">
                                    <p class="team-item-detail-title">
                                        OUR VISION
                                    </p>
                                    <p>
                                        Our vision is to provide exceptional service, while maximizing the talents of our team. Our top priority is to provide the highest quality gaming products and services.
                                    </p>
                                </div>
                            </div>
                            <div class="team-item-descr">
                                <div class="team-item-name">
                                    OUR VISION
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </section> -->


    <section class=" pt-0 pb-0 banner-section gaming" id="about">
        <div class="container relative">

            <div class="row gaming__row">

                <div class="col-lg-6 relative gaming_reletive">
                    <!-- <div class="banner-image-1">
                        <img src="{{asset('assets/images/promo-1.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="292" />
                    </div>
                    <div class="banner-image-2">
                        <img src="{{asset('assets/images/promo-2.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="70" />
                    </div> -->
                    <img src="{{asset('assets/images/aboutus.png')}}" class="ml-10" alt="">
                </div>

                <div class="col-lg-6 ">
                    <div class="mt-md-60 mt-xs-30 mt-20 mb-lg-20">
                        <div class="banner-content wow fadeInUpShort features-descr" data-wow-duration="1.2s">
                            <h3 class="banner-heading">Meet The Pioneers Of The Gaming Industry!</h3>
                            <div class="banner-decription">
                                In a rapidly evolving world, it's incredible to find someone like you. But first, let's get to know one another well.
                            </div>

                            <p>13cardsrummy is an online rummy platform dedicated to bringing you everything you need in the exciting world of Rummy.</p>
                            <p> On the basis of the number of registered users, 13cardsrummy is India's fastest growing online rummy application platform.</p>

                            <div class="local-scroll ">
                                <a href="{{url('/about')}}" class="btn btn-mod btn-w btn-large btn-round btn-mod-1 btn2">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!--Counter One Start-->
    <section class="page-section bg-dark light-content content-2">
        <div class="container relative">


            <!-- Counters -->
            <div class="count-wrapper">
                <div class="row">

                    <!-- Counter Item -->
                    <div class="col-md-6 col-lg-3 mb-md-30">
                        <div class="count-item">
                            <div class="count-bg wow scalexIn animated" style="visibility: visible; animation-name: scalexIn;"></div>
                            <div class="relative wow fadeIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">
                                <div class="count-number">2500</div>
                                <div class="count-descr">
                                    <img src="{{asset('assets/images/icons/ActiveUsers.png')}}" alt="">
                                    <!-- <i class="fa fa-briefcase" aria-hidden="true"></i> -->
                                    <span class="count-title">Active users</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Counter Item -->

                    <!-- Counter Item -->
                    <div class="col-md-6 col-lg-3 mb-md-30">
                        <div class="count-item">
                            <div class="count-bg wow scalexIn animated" style="visibility: visible; animation-name: scalexIn;"></div>
                            <div class="relative wow fadeIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;">
                                <div class="count-number">3000</div>
                                <div class="count-descr">
                                    <img src="{{asset('assets/images/icons/downloads.png')}}" alt="!">
                                    <!-- <i class="fa fa-heart" aria-hidden="true"></i> -->
                                    <span class="count-title">Downloads</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Counter Item -->

                    <!-- Counter Item -->
                    <div class="col-md-6 col-lg-3 mb-md-30">
                        <div class="count-item">
                            <div class="count-bg wow scalexIn animated" style="visibility: visible; animation-name: scalexIn;"></div>
                            <div class="relative wow fadeIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeIn;">
                                <div class="count-number">2600</div>
                                <div class="count-descr">
                                    <img src="{{asset('assets/images/icons/VIPUsers.png')}}" alt="!">
                                    <!-- <i class="fa fa-coffee" aria-hidden="true"></i> -->
                                    <span class="count-title">Premium users</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Counter Item -->

                    <!-- Counter Item -->
                    <div class="col-md-6 col-lg-3 mb-md-30">
                        <div class="count-item">
                            <div class="count-bg wow scalexIn animated" style="visibility: visible; animation-name: scalexIn;"></div>
                            <div class="relative wow fadeIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 1.3s; animation-name: fadeIn;">
                                <div class="count-number">2000</div>
                                <div class="count-descr">
                                    <img src="{{asset('assets/images/icons/DailyWinnins.png')}}" alt="!">
                                    <!-- <i class="fa fa-lightbulb" aria-hidden="true"></i>DailyWinnins.png -->
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
    <!--Counter One End-->

    <!-- Services Section -->
    <section class="page-section bg-dark light-content content-3" id="services">
        <div class="container resume-section ">
            <!-- Resume title-->
            <div class="row">
                <div class="col-12">
                    <div class="section-title animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="text-center mb-80 mb-sm-50">
                            <h2 class="section-title">Here Is Why We Are So Popular!</h2>
                            <p class="section-title-descr">
                                Our features leave our users both content and speechless. We bring out the big guns when it comes to helping our users play.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Resume title End-->
            <!-- Resume Content -->
            <div class="row">
                <!-- Education part-->
                <div class="col-md-6 col-sm-12 col-12 ">
                    <div class=" col-block education ">

                        <div class="resume-item resume-item-box-one"><span class="item-arrow"></span>
                            <!-- <h5 class="item-title">Rummy Variants</h5> -->
                            <p class="item-description">There is a wide variety of rummy games that we offer.We have pool, deals, and point rummy. You can play either for free or in cash contest.</p>
                        </div>
                        <div class="resume-item resume-item-box-two"><span class="item-arrow"></span>
                            <!-- <h5 class="item-title">24x7 Support Team</h5> -->
                            <p class="item-description">Our support team is available 24 hours a day through phone,chat,and email.If you have questions or concerns of any type,we are here to help!</p>
                        </div>
                        <div class="resume-item resume-item-box-three"><span class="item-arrow"></span>
                            <!-- <h5 class="item-title">Safe Gaming</h5> -->
                            <p class="item-description">We boast the safest, most secure, and most fun Rummy game ever, right here on 13cardsrummy. Play rummy in real-time with real people.</p>
                        </div>
                    </div>
                </div>
                <!-- Experience part-->
                <div class="col-md-6 col-sm-12 col-12 ">
                    <div class=" col-block education">

                        <div class="resume-item resume-item-box-four">
                            <!-- <h5 class="item-title">Secured Transfer <span class="item-arrow"></span></h5> -->
                            <p class="item-description">Using end-to-end encryption and fast servers, we ensure that your financial information is secure, and nobody - not even us - will ever see it.</p>
                        </div>
                        <div class="resume-item resume-item-box-five"><span class="item-arrow"></span>
                            <!-- <h5 class="item-title">Fair Play</h5> -->
                            <p class="item-description">We use defence grade technology to ensure maximum fair play in our games. Hence, we always use a "Random Number Generator’(RNG).</p>
                        </div>
                        <div class="resume-item resume-item-box-six"><span class="item-arrow"></span>
                            <!-- <h5 class="item-title">Quick Cashout</h5> -->
                            <p class="item-description">The money you win will stay safe until you withdraw it. Instant cashout allows players to withdraw their winnings any time of the year.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resume ContentEnd -->

        </div>
    </section>
    <!-- End Services Section -->



    <!-- End Call Action Section -->

    <section class="page-section bg-dark light-content content-4">
        <div class="container relative">

            <!-- Grid -->
            <div class="row">

                <!-- Text Item -->
                <div class="col-md-12 col-lg-3">
                    <div class="align-left">
                        <h2 class="work-process-heading mt-0">Enhance Your Skills</h2>
                        <p class="work-process-description">
                            Download the app from our website, sign in, choose the variant you want to play, and start playing.
                        </p>
                    </div>
                </div>
                <!-- End Text Item -->

                <!-- Item -->
                <div class="col-md-4 col-lg-3">
                    <div class="work-process-item text-center pt-20">
                        <div class="work-process-icon">
                            <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M20 15c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m-3 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m-3 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m5.415 4.946c-1 .256-1.989.482-3.324.482-3.465 0-7.091-2.065-7.091-5.423 0-3.128 3.14-5.672 7-5.672 3.844 0 7 2.542 7 5.672 0 1.591-.646 2.527-1.481 3.527l.839 2.686-2.943-1.272zm-13.373-3.375l-4.389 1.896 1.256-4.012c-1.121-1.341-1.909-2.665-1.909-4.699 0-4.277 4.262-7.756 9.5-7.756 5.018 0 9.128 3.194 9.467 7.222-1.19-.566-2.551-.889-3.967-.889-4.199 0-8 2.797-8 6.672 0 .712.147 1.4.411 2.049-.953-.126-1.546-.272-2.369-.483m17.958-1.566c0-2.172-1.199-4.015-3.002-5.21l.002-.039c0-5.086-4.988-8.756-10.5-8.756-5.546 0-10.5 3.698-10.5 8.756 0 1.794.646 3.556 1.791 4.922l-1.744 5.572 6.078-2.625c.982.253 1.932.407 2.85.489 1.317 1.953 3.876 3.314 7.116 3.314 1.019 0 2.105-.135 3.242-.428l4.631 2-1.328-4.245c.871-1.042 1.364-2.384 1.364-3.75"></path>
                        </svg> -->
                            <img class="icons" src="{{asset('assets/images/download.png')}}" alt="download">
                        </div>
                        <h3 class="work-process-title"><a href="https://admin.13cardsrummy.in/download" download="download/13CardRummy_v0.7.apk" class="email-adds">1. Download </a></h3>
                    </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="col-md-4 col-lg-3">
                    <div class="work-process-item text-center pt-20">
                        <div class="work-process-icon">
                            <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M6 3.447h-1v-1.447h19v16h-7.731l2.731 4h-1.311l-2.736-4h-1.953l-2.736 4h-1.264l2.732-4h-2.732v-1h8v-1h3v1h3v-14h-17v.447zm2.242 17.343c-.025.679-.576 1.21-1.256 1.21-.64 0-1.179-.497-1.254-1.156l-.406-4.034-.317 4.019c-.051.656-.604 1.171-1.257 1.171-.681 0-1.235-.531-1.262-1.21l-.262-6.456-.308.555c-.241.437-.8.638-1.265.459-.404-.156-.655-.538-.655-.951 0-.093.012-.188.039-.283l1.134-4.098c.17-.601.725-1.021 1.351-1.021h4.096c.511 0 1.012-.178 1.285-.33.723-.403 2.439-1.369 3.136-1.793.394-.243.949-.147 1.24.217.32.396.286.95-.074 1.297l-3.048 2.906c-.375.359-.595.849-.617 1.381-.061 1.397-.3 8.117-.3 8.117zm-5.718-10.795c-.18 0-.34.121-.389.294-.295 1.04-1.011 3.666-1.134 4.098l1.511-2.593c.172-.295.623-.18.636.158l.341 8.797c.01.278.5.287.523.002 0 0 .269-3.35.308-3.944.041-.599.449-1.017.992-1.017.547.002.968.415 1.029 1.004.036.349.327 3.419.385 3.938.043.378.505.326.517.022 0 0 .239-6.725.3-8.124.033-.791.362-1.523.925-2.061l3.045-2.904c-.661.492-2.393 1.468-3.121 1.873-.396.221-1.07.457-1.772.457h-4.096zm16.476 1.005h-5v-1h5v1zm2-2h-7v-1h7v1zm-15.727-4.994c-1.278 0-2.315 1.038-2.315 2.316 0 1.278 1.037 2.316 2.315 2.316s2.316-1.038 2.316-2.316c0-1.278-1.038-2.316-2.316-2.316zm0 1c.726 0 1.316.59 1.316 1.316 0 .726-.59 1.316-1.316 1.316-.725 0-1.315-.59-1.315-1.316 0-.726.59-1.316 1.315-1.316zm15.727 1.994h-7v-1h7v1z"></path>
                        </svg> -->
                            <img class="icons" src="{{asset('assets/images/SignUp.png')}}" alt="Sinup">
                        </div>
                        <h3 class="work-process-title">2. Sign Up</h3>
                    </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="col-md-4 col-lg-3">
                    <div class="work-process-item text-center pt-20">
                        <div class="work-process-icon">
                            <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M15.551 14.703c.474 1.372 2.049 2.459 3.801 1.868l.021-.007c1.565-.544 2.391-2.242 1.854-3.807-.187-.546-.425-1.137-.695-1.757h-5.967c.299 1.366.625 2.647.986 3.703m2.264-9.232l-4.051 1.388c.183 1.037.379 2.103.59 3.141h5.726c-.655-1.404-1.445-2.94-2.265-4.529m.492-1.226c1.524 2.958 3.086 5.915 3.866 8.187.598 1.744-.045 3.895-2.028 4.874l1.211 3.529c.291.812 1.322.926 2.392.808l.252.735-4.728 1.622-.272-.788c.903-.479 1.688-1.215 1.41-2.054l-1.208-3.52c-2.162.439-3.994-.861-4.596-2.61-.791-2.304-1.405-5.566-1.976-8.837l5.677-1.946zm-8.872 6.755h-5.967c-.27.62-.508 1.211-.695 1.757-.536 1.565.289 3.263 1.854 3.807l.021.007c1.753.591 3.328-.496 3.801-1.868.362-1.056.688-2.337.986-3.703m-5.515-1h5.726c.211-1.038.407-2.104.591-3.141l-4.051-1.388c-.821 1.589-1.611 3.125-2.266 4.529m7.45-3.809c-.571 3.271-1.185 6.533-1.976 8.837-.602 1.749-2.434 3.049-4.596 2.61l-1.208 3.52c-.278.839.507 1.575 1.41 2.054l-.271.788-4.729-1.622.252-.735c1.07.118 2.102.004 2.392-.808l1.211-3.529c-1.983-.979-2.625-3.13-2.028-4.874.78-2.272 2.342-5.229 3.867-8.187l5.676 1.946zm7.13 7.811c.414 0 .75.336.75.75 0 .413-.336.75-.75.75s-.75-.337-.75-.75c0-.414.336-.75.75-.75m-14.5.248c0 .414.336.75.75.75s.75-.336.75-.75c0-.413-.336-.75-.75-.75s-.75.337-.75.75m3.25-2.25c.414 0 .75.337.75.75 0 .414-.336.75-.75.75s-.75-.336-.75-.75c0-.413.336-.75.75-.75m10.5-.499c.414 0 .75.336.75.751 0 .413-.336.75-.75.75s-.75-.337-.75-.75c0-.415.336-.751.75-.751m-5.249-7.977v-3.023c0-.277-.223-.5-.5-.5-.275 0-.499.223-.499.5v3.023c0 .276.224.5.499.5.277 0 .5-.224.5-.5m1.932.462l1.641-2.79c.142-.238.062-.545-.176-.685-.239-.139-.544-.062-.684.177l-1.643 2.79c-.14.238-.06.545.176.685.08.047.167.069.254.069.172 0 .339-.088.432-.246m-4.552.246c-.171 0-.337-.088-.432-.246l-1.642-2.79c-.14-.238-.061-.545.177-.685.237-.14.544-.061.685.177l1.643 2.79c.139.238.061.545-.178.685-.08.047-.166.069-.253.069"></path>
                        </svg> -->
                            <img class="icons" src="{{asset('assets/images/Play.png')}}" alt="Play">
                        </div>
                        <h3 class="work-process-title">3. Play</h3>
                    </div>
                </div>
                <!-- End Item -->

            </div>
            <!-- End Grid -->

        </div>
    </section>
    <!-- Call Action Section -->





    <!-- Portfolio Section -->
    <section class="page-section pb-0 light-content content-2" id="howtoplay">
        <div class="container bd-example">
            <div class="row">
                <div class="d-flex align-items-start howto">

                    <div class="col-lg-4 col-md-5 col-sm-12 col-12 nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-links active btn btn-mod btn-w btn-large btn-round btn-mod-1" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">Player's Guide</button>
                        <button class="nav-links btn btn-mod btn-w btn-large btn-round btn-mod-1" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">TIPS & TRICKS</button>
                        <button class="nav-links btn btn-mod btn-w btn-large btn-round btn-mod-1" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="true">GLOSSARY</button>
                        <button class="nav-links btn btn-mod btn-w btn-large btn-round btn-mod-1" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">RULES FOR 13CARDSRUMMY</button>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12 col-12 tab-content " id="v-pills-tabContent">

                        <div class="tab-pane active show text-center marbotscroll mb-sm-50" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="rules rul">
                                <h3 class="section-title">Discover What Lies Ahead,And Conquer It!</h3>
                                <p class="section-title-descr">We're your trusted travel experts!</p>
                                <p>This is one of India's most popular card games and one of the most popular rummy variants to play. You can learn rummy rules explained in detail at 13cardsrummy which is India's most trusted rummy platform. A step-by-step guide to playing Rummy online.</p>
                                <div class="local-scroll">
                                    <a href="{{url('/howtoplay')}}" class="btn btn-mod btn-w btn-large btn-round btn-mod-1 btn2">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane text-center marbotscroll mb-sm-50" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="container relative">

                                <div class="row">
                                    <div class=" col-lg-12 offset-lg-1 rul">

                                        <div class="rules ">
                                            <h3 class="section-title">Aces Like You Might Not Need This</h3>
                                            <p class="section-title-descr">Nevertheless, let us be your comrades in battle!</p>
                                        </div>

                                        <div class="text-slider">

                                            <!-- Slide Item -->
                                            <div>
                                                <blockquote class="testimonial back">
                                                    <h4>Form A Pure Sequence</h4>
                                                    <p>
                                                        Keep the pure sequence as a top priority as it is a game requirement. Don't keep on holding onto cards for longer than necessary in the hopes of making a particular set alone.</p>
                                                </blockquote>
                                            </div>
                                            <!-- End Slide Item -->

                                            <!-- Slide Item -->
                                            <div>
                                                <blockquote class="testimonial back">
                                                    <h4>Get Rid Of High-Value Cards.</h4>
                                                    <p>
                                                        Many people hold onto high-value cards with the hope of using them later in the sequence. However, this is a wrong move as it lowers your score if your opponent declares.
                                                    </p>
                                                </blockquote>
                                            </div>
                                            <!-- End Slide Item -->

                                            <!-- Slide Item -->
                                            <div>
                                                <blockquote class="testimonial back">
                                                    <h4>Bluff Your Opponents</h4>
                                                    <p>
                                                        Hold on to two cards that look similar, and after a sequence is complete, discard the ones you don't need. You can also grab a card your opponent needs; this will throw them off.
                                                    </p>
                                                </blockquote>
                                            </div>
                                            <div>
                                                <blockquote class="testimonial back">
                                                    <h4>Dropping Out</h4>
                                                    <p>
                                                        It is advisable to consider using this option if you have an unlucky hand or if you find it difficult to form a sequence. Use the middle drop option in these cases (after one move).
                                                    </p>
                                                </blockquote>
                                            </div>
                                            <div>
                                                <blockquote class="testimonial back">
                                                    <h4>Middle Card</h4>
                                                    <p>
                                                        You should keep your middle cards for longer as they can help you form multiple combinations. Middle cards can be used extensively; that's why they are a plus in Rummy.
                                                    </p>
                                                </blockquote>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane text-center marbotscroll mb-sm-50" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row ">
                                <div class="col-lg-12 rules">
                                    <h2 class="section-title mb-50 mb-sm-20 rules-1">Keeping Up With The Game</h2>

                                    <dl class="call-action-2-text mb-60 mb-sm-30 height_scroll">
                                        <dt>
                                            101 Pool
                                        </dt>
                                        <dd>
                                            Here, all players are eliminated and one remains until 101 pool points are accumulated. The table is fixed as a starting point.
                                        </dd>
                                        <dt>
                                            201 Pool
                                        </dt>
                                        <dd>
                                            Rummy in which every player is eliminated until one player survives without accruing 201 Pool Points. The winner takes the jackpot.
                                        </dd>
                                        <dt>
                                            13 Card Rummy
                                        </dt>
                                        <dd>
                                            Here,each player is dealt with 13 cards, which must be set and sequenced to win. Each sequence must consist of at least four cards.
                                        </dd>
                                        <dt>
                                            Buy In
                                        </dt>
                                        <dd> It is the amount you need to pay for the entry fee or bet fee when you want to participate in the contest or play at the pool table.

                                        </dd>
                                        <dt>
                                            Deck
                                        </dt>
                                        <dd>There is also a word for it and it refers to the pack of cards used in a Rummy game. A regular deck contains 52 cards and two jokers.</dd>
                                        <dt> Closed Deck</dt>
                                        <dd> A typical 13 cards rummy game is one where the cards that are not distributed are kept face down by the dealer as a closed deck.</dd>
                                        <dt> Open Deck</dt>
                                        <dd> The cards discarded by players from the open deck. Each player can pick one card from the open deck, which is placed face-up on the table.</dd>
                                        <dt>Ace</dt>
                                        <dd> Aces make two, three, or two-three combinations in a 52-card deck. The Ace has four suits (hearts, clubs, diamonds, spades).</dd>
                                        <dt>Printed Joker</dt>
                                        <dd>The 52 cards of four suits form the basis of the standard 52 cards pack, which contains two to three printed jokers. (Printed Joker)</dd>
                                        <dt>Discard</dt>
                                        <dd>A player picks up the 14th card (either from the close or open deck) to start their discard pile. Players end their turn with 13 cards.</dd>
                                        <dt>Extra Time</dt>
                                        <dd>Each player is given extra time after the allotted time period ends. Once this time is up, only the normal playing time is allowed.</dd>
                                        <dt>Declare Time</dt>
                                        <dd> Once a player has declared, each player on the table has a certain amount of time to declare.. (30 seconds in PlayRummy)</dd>
                                    </dl>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane text-center marbotscroll mb-sm-50" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="row">
                                <div class="col-lg-12 rules">

                                    <h2 class="section-title mb-50 mb-sm-20 rules-1">Rules Govern The Game To Keep It Fair!</h2>

                                    <dl class="call-action-2-text mb-60 mb-sm-30 height_scroll">
                                        <dt>
                                            Discover Rummy Rules!
                                        </dt>
                                        <dd>
                                            Playing rummy is an older, more popular game played both offline and online. There are 13 cards dealt with each player. Each player gets two 52-card decks (104 cards) and four jokers (wild cards).
                                        </dd>
                                        <dt>
                                            How To Play Rummy!
                                        </dt>
                                        <dd>
                                            There are 13 cards dealt face-down to each player, and the first move is determined by coin toss. This starts the discard pile/open deck when the next card is dealt face-up from the deck.
                                        </dd>
                                        <dt>
                                            Dropping The Game!
                                        </dt>
                                        <dd>
                                            Those who drop from the game without picking up a card from the discard/stockpile lose 10 points. The winner gets the cash if they drop in between a hand before anyone else declares.
                                        </dd>
                                    </dl>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- End Works Grid -->

    <!-- Call Action Section -->
    <!-- <section class="small-section bg-dark-lighter light-content">
    <div class="container relative">
        <div class="row wow fadeInUpShort">
            <div class="col-lg-5 offset-lg-2">
                <h3 class="call-action-1-heading">What’s Stopping You?</h3>
                <div class="call-action-1-decription mb-0 pb-md-20">
                    <p>Relive those golden memories of the past as you join the world of Rummy. Hop on, we ain’t leaving you behind!</p>
                </div>
            </div>
            <div class="col-lg-3 pt-10 text-lg-end">
                <div class="local-scroll">
                    <a href="#contact" class="btn btn-mod btn-w btn-large btn-round">DOWNLOAD</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
    <!-- End Call Action Section -->


    <!-- End Portfolio Section -->

    <!-- Call Action Section -->
    <!-- <section class="page-section bg-dark light-content">
    <div class="container relative">
        <div class="row">         
            <div class="col-lg-7 mb-md-60 mb-xs-30">
                <div class="call-action-2-images">

                    <div class="call-action-2-image-1">
                        <img src="{{asset('assets/images/promo-3.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="255" />
                    </div>

                    <div class="call-action-2-image-2">
                        <img src="{{asset('assets/images/promo-4.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="134" />
                    </div>

                    <div class="call-action-2-image-3">
                        <img src="{{asset('assets/images/promo-5.jpg')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="0" />
                    </div>

                </div>
            </div>
           
            <div class="col-lg-5 wow fadeInUpShort" data-wow-duration="1.2s" data-wow-offset="255">

                <h2 class="section-title mb-50 mb-sm-20">Rules Govern The Game To Keep It Fair!</h2>

                <dl class="call-action-2-text mb-60 mb-sm-30">
                    <dt>
                        Discover Rummy Rules!
                    </dt>
                    <dd>
                        Playing rummy is an older, more popular game played both offline and online. There are 13 cards dealt with each player. Each player gets two 52-card decks (104 cards) and four jokers (wild cards).
                    </dd>
                    <dt>
                        How To Play Rummy!
                    </dt>
                    <dd>
                        There are 13 cards dealt face-down to each player, and the first move is determined by coin toss. This starts the discard pile/open deck when the next card is dealt face-up from the deck.
                    </dd>
                    <dt>
                        Dropping The Game!
                    </dt>
                    <dd>
                        Those who drop from the game without picking up a card from the discard/stockpile lose 10 points. The winner gets the cash if they drop in between a hand before anyone else declares.
                    </dd>
                </dl>

                <div class="local-scroll">
                    <a href="#contact" class="btn btn-mod btn-w btn-large btn-round">JOIN KNOW</a>
                </div>

            </div>           
        </div>
    </div>
</section> -->
    <!-- End Call Action Section -->

    <!-- Promo Section -->
    <section class="page-section content-3">
        <div class="container relative">
            <div class="row">

                <!-- Text -->
                <div class="col-lg-6 wow fadeInUpShort" data-wow-duration="1.2s" data-wow-offset="205">

                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="section-title lg-mb-60 md-mb-10 mb-sm-10">Here's How We Wowed Them!</h2>
                        </div>
                    </div>

                    <!-- Features Grid -->
                    <div class="row alt-features-grid">

                        <!-- Features Item -->
                        <div class="col-lg-6">
                            <div class="alt-features-item">
                                <div class="alt-features-icon">
                                    <img src="{{asset('assets/images/IconsAnti-FraudAlgorithm.png')}}" alt="FeaturesInnerimage">
                                </div>
                                <h3 class="alt-features-title">Transparency</h3>
                                <div class="alt-features-descr">
                                    With our users, we maintain an open line of communication, so they are aware of everything we do.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->

                        <!-- Features Item -->
                        <div class="col-lg-6">
                            <div class="alt-features-item">
                                <div class="alt-features-icon">
                                    <img src="{{asset('assets/images/Icons_Transparency.png')}}" alt="FeaturesInnerimage">
                                </div>
                                <h3 class="alt-features-title">Anti-Fraud Algorithm</h3>
                                <div class="alt-features-descr">
                                    Our Anti-Fraud algorithm ensures the integrity and fairness of the game. Cheating is prohibited!
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->

                        <!-- Features Item -->
                        <div class="col-lg-6">
                            <div class="alt-features-item">
                                <div class="alt-features-icon">
                                    <img src="{{asset('assets/images/IconsBoundlessFun.png')}}" alt="FeaturesInnerimage">
                                </div>
                                <h3 class="alt-features-title">Boundless Fun</h3>
                                <div class="alt-features-descr">
                                    In order to keep our users entertained, we facilitate boundless fun in a safe and secure environment.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->

                        <!-- Features Item -->
                        <div class="col-lg-6">
                            <div class="alt-features-item">
                                <div class="alt-features-icon">
                                    <img src="{{asset('assets/images/Icons_Legal.png')}}" alt="FeaturesInnerimage">
                                </div>
                                <h3 class="alt-features-title">Legal</h3>
                                <div class="alt-features-descr">
                                    There is no need to worry about the legality of Rummy in India. Playing online Rummy is completely legal.
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->

                    </div>
                    <!-- End Features Grid -->

                </div>
                <!-- End Text -->

                <!-- Images -->
                <div class="col-lg-6">
                    <div class="call-action-3-images mt-xs-0 text-end">

                        <img src="{{asset('assets/images/FeaturesInnerimage.png')}}" alt="FeaturesInnerimage">

                    </div>
                </div>
                <!-- End Images -->

            </div>
        </div>
    </section>
    <!-- End Promo Section -->

    <!-- Newsletter Section -->
    <section class="small-section bg-scroll bg-position-top light-content content-2">
        <div class="container relative">

            <form id="mailchimp" class="form wow fadeInUpShort">
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">

                        <div class="newsletter-label d-flex mb-50 mb-sm-20 play-now">

                            <h3 class="newletter-label-text">
                                Stay Ahead Of Trends, Join the trendsetters of the gaming world!<br> Rummy never goes out of style!
                            </h3>
                        </div>

                        <a href="https://admin.13cardsrummy.in/download" download="download/13CardRummy_v0.7.apk" class="btn btn-mod btn-w btn-large btn-round btn1 btn-mod-1 btn2">PLAY NOW </a>

                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- End Newsletter Section -->



    <!-- Testimonials Section -->
    <section class="page-section  bg-scroll light-content content-5">
        <div class="container relative">

            <div class="row">
                <div class=" col-lg-8 offset-lg-2 wow fadeInUpShort">

                    <div class="text-center mb-50 mb-sm-20">
                        <h2 class="section-title">The Rumour Mill Is A Whirl!</h2>
                        <p class="section-title-descr">Looks like we have a lot of secret admirers professing their undying love!</p>
                    </div>

                    <div class="text-slider">

                        <!-- Slide Item -->
                        <div>
                            <blockquote class="testimonial">
                                <p>
                                    In the past few days, I have enjoyed seeing what is available on your website. I can't express how amazing your games are. Thank you for making this wonderful rummy site!
                                </p>
                                <footer class="testimonial-author  mt-sm-20">
                                    — Arnab
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
                                    — Manash
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="testimonial">
                                <p>
                                    I am thrilled as this is my third major win at such a prestigious event. I have won many contests on this authentic website. We are always thrilled to win such an incredible cash pool.
                                </p>
                                <footer class="testimonial-author  mt-sm-20">
                                    — Keyashree
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="testimonial">
                                <p>
                                    It's fun playing rummy online 13cardsrummy. This site has a great withdrawal system and user experience. We can win more cash games and free cash contest through this website.
                                </p>
                                <footer class="testimonial-author  mt-sm-20">
                                    — Moses
                                </footer>
                            </blockquote>
                        </div>
                        <div>
                            <blockquote class="testimonial">
                                <p>
                                    13cardsrummy is an excellent way to meet new people and play rummy. The customer service is helpful. I like the website, especially the rummy tables.
                                </p>
                                <footer class="testimonial-author  mt-sm-20">
                                    — Johnny
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


    <!-- Blog Section -->
    <section class="page-section bg-dark light-content varbg" id="variants">
        <div class="container relative">

            <div class="text-center mb-80 mb-sm-50">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <h2 class="section-title">From A Quickie To A Long Lasting Game,</h2>
                        <p class="section-title-descr">
                            Our variants come tailor made!
                        </p>
                    </div>
                    <!-- <div class="col-sm-3 text-sm-end pt-30 pt-xs-0">
                    <a href="blog-classic-sidebar-right-dark.html" class="section-more">Our Blog <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div> -->
                </div>
            </div>

            <div class="row game-modes">

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 col-lg-4 mb-md-10">

                    <div class="post-prev-img">
                        <img src="{{asset('assets/images/blog/Pool.png')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" />
                    </div>

                    <h3 class="post-prev-title">
                        Pool Rummy
                    </h3>
                    <div class="post-prev-text">
                        <p>Pool Rummy is a variant of 13cardsrummy in which players pay a fixed entry fee that forms the prize pool. Deal winners receive 0 points, and the rest of the accumulated points are added to their scores.</p>
                        <p>A player is eliminated once their score reaches the maximum limit on the table, for example, 101 Points Pool or 201 Points Pool.</p>
                        <p>There will be a split of the prize pool if more than two players remain at the same time for 101 and 201 and have accumulated more than 80 games each.
                        </p>
                    </div>
                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 col-lg-4 mb-md-10">

                    <div class="post-prev-img">
                        <img src="{{asset('assets/images/blog/Deals.png')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" />
                    </div>

                    <h3 class="post-prev-title">
                       Deals Rummy
                    </h3>
                    <div class="post-prev-text">
                        <p>Another popular variant of 13cardsrummy, Deals Rummy, is played with a fixed number of cards dealt to each player. It is a variant of rummy in which you play a predetermined number of deals.</p>
                        <p>Deals Rummy is a game where all players begin with a fixed amount of chips.The deals rummy rules are essentially the same as the usual rummy rules.</p>
                        <p>At the end of each round, the winning player will receive chips from the losing player based on their scores. In a deal rummy game, the player with the most chips wins.</p>
                    </div>

                </div>
                <!-- End Post Item -->

                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 col-lg-4 mb-md-10">

                    <div class="post-prev-img">

                        <img src="{{asset('assets/images/blog/Points.png')}}" alt="" class="wow scaleOutIn" data-wow-duration="1.2s" />
                    </div>

                    <h3 class="post-prev-title">
                        Point Rummy
                    </h3>
                    <div class="post-prev-text">
                        <p>It is a variant of 13cardsrummy in which players play for points with a predefined value.Based on the opponent's total points, the player who makes the first valid declaration wins the game with 0 points.</p>
                        <p>You can never use the same card twice in a set when two decks are used. Each game lasts for one round only.</p>
                        <p>It is mandatory that a winning hand contains one pure sequence and one impure sequence. The first player to place a valid show is declared the winner.</p>
                    </div>
                </div>
                <!-- End Post Item -->

            </div>

        </div>
    </section>
    <!-- End Blog Section -->
    <!-- faq section -->

    <section class="page-section bg-dark light-content faqbg" id=faq>
        <div class="container relative">

            <div class="section-text mb-60 mb-sm-40">
                <div class="row">

                    <div class="col-lg-6 col-md-6 mb-md-10 mb-xs-10 wow fadeInUpShort">

                        <h2 class="mt-0">Focus On Nothing Else!</h2>
                        <p>
                            Except the card you drew, let us clear your doubts to keep your mind balanced!</p>
                        <img src="{{asset('assets/images/Faq_Inner.png')}}" alt="faq" class="img-fluid">
                    </div>

                    <div class="col-lg-6 col-md-6 mb-md-10 mb-xs-10 wow fadeInUpShort">

                        <!-- Accordion -->
                        <dl class="accordion">
                            <dt>
                                <a href="#">01. How to win at online Rummy?</a>
                            </dt>
                            <dd class=" ">
                                By practicing free rummy games and using the rummy as mentioned above tips and tricks, you can improve your game and increase your winnings.
                            </dd>
                            <dt>
                                <a href="#">02. Can we earn money by playing Rummy?</a>
                            </dt>
                            <dd class=" ">
                                The good news is that you can win grand cash prizes from 13cardsrummy by participating in various cash games and contest.
                            </dd>
                            <dt>
                                <a href="#">03. What is the Rummy Sequence?</a>
                            </dt>
                            <dd class=" ">
                                A sequence of Rummy cards is a group of three or more consecutive cards of the same suit. A pure sequence is what you need to win Rummy's game.
                            </dd>
                            <dt>
                                <a href="#">04. How do I make a deposit?</a>
                            </dt>
                            <dd class=" ">
                                Please select "Add Cash" and "Make a Deposit" on your account. Please enter the proper amount and payment method,before clicking "Next".
                            </dd>
                            <dt>
                                <a href="#">05. How do I see my account details?</a>
                            </dt>
                            <dd class="">
                                When you log into your account and click on 'My Account', you can view and modify the details of your 13cardsrummy account.
                            </dd>
                            <dt>
                                <a href="#">06. Is my credit card information safe at 13cardsrummy?</a>
                            </dt>
                            <dd class="">
                                We offer 24/7 support, fraud protection, and responsible gaming options 13cardsrummy as a responsible and secure online gaming website.
                            </dd>
                        </dl>
                        <!-- End Accordion -->

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Section -->


    <!-- faq end -->

    <!-- Call Action Section -->
    <section class="small-section  light-content content-2">
        <div class="container relative">
            <div class="row wow fadeInUpShort">
                <div class="col-md-12  text-center">
                    <h3 class="section-title">Knowing Us Can Make You Happier!</h3>
                    <div class="section-title-descr mb-60 mb-sm-30">
                        <p>Get in touch and renew your love for rummy! We cater to millions of Rummy lovers just like you!</p>
                    </div>

                    <div class="local-scroll">
                        <a href="#contact" class="btn btn-mod btn-w btn-large btn-round btn-mod-1 btn2">Let's Talk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Section -->

    <!-- Contact Section -->
    <section class="page-section  light-content contactbg" id="contact">
        <div class="container relative">
            <!-- mb-80 -->
            <div class="text-center mb-50  mb-sm-50">
                <h2 class="section-title">Our Team Is Eagerly Awaiting Your Call!</h2>
                <p class="section-title-descr">
                    Click the call button to ease our hearts!
                </p>
            </div>
            <!-- mb-60 -->
            <div class="row  mb-20 mb-xs-40">

                <div class="col-md-10 offset-md-1">
                    <div class="row game-modes">

                        <!-- Phone -->
                        <div class="col-sm-6 col-lg-3 pb-20">
                            <div class="contact-item wow fadeScaleIn" data-wow-delay="0" data-wow-duration="1s">
                                <div class="ci-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="ci-title">
                                    Call Us
                                </div>
                                <div class="ci-text">
                                    +91 7406245507
                                </div>
                            </div>
                        </div>
                        <!-- End Phone -->

                        <!-- Address -->
                        <div class="col-sm-6 col-lg-6 pb-20">
                            <div class="contact-item wow fadeScaleIn" data-wow-delay=".1s" data-wow-duration="1s">
                                <div class="ci-icon">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                                <div class="ci-title">
                                    Address
                                </div>
                                <div class="ci-text">
                                <b>BLUE SPACE TECHNOLOGY</b>
                                </div>
                                <div class="ci-text adds">
                                    GROUND FLOOR, D NO 1-4-1 12A-2, COMMERCIAL COMPLEX,
                                    MANOLIGUJJI WARD, NEAR BALIGA HOSPITAL,
                                    CHAKRATHIRTHA, UDUPI, Udupi, Karnataka, 576102
                                </div>
                                <!-- <div class="ci-link">
                                    <a href="https://goo.gl/maps/7Vw1PBhxx5BaXStr8" target="_blank">See on the Map</a>
                                </div> -->
                            </div>
                        </div>
                        <!-- End Address -->

                        <!-- Email -->
                        <div class="col-sm-6 col-lg-3 pb-20">
                            <div class="contact-item wow fadeScaleIn" data-wow-delay=".2s" data-wow-duration="1s">
                                <div class="ci-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="ci-title">
                                    Email
                                </div>
                                <div class="ci-text">
                                    <a href="mailto:support@13cardsrummy.in" class="email-adds">support@13cardsrummy.in</a>

                                </div>
                                <!-- <div class="ci-link">
                                    <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
                                </div> -->
                            </div>
                        </div>
                        <!-- End Email -->

                    </div>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="row">
                <div class="col-md-10 offset-md-1">

                    <form class="form-inline" action="" id="contact_form">
                        <div class="row pt-2">
                            <div class="col-lg-6 col-md-6 mt-30">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" data-error="Please enter your name" placeholder="Your name" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mt-30">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="" data-error="Please enter your email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mt-30">
                                <div class="form-group">
                                    <input type="text" name="sub" class="form-control" required="" data-error="Please enter your subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mt-30">
                                <div class="form-group">

                                    <input type="text" name="phone" class="form-control" required="" data-error="Please enter your phone" pattern="[1-9]{1}[0-9]{9}" placeholder="Your Phone" maxlength="10" size="10">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 mt-30">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" cols="30" rows="6" required="" data-error="Please enter your message" placeholder="Your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12 submit">
                                <button class="btn btn-mod btn-w btn-large btn-round btn-mod-1  mt-30" style="border: none;pointer-events: all;
                                        cursor: pointer;" type="submit" name="submit" id="contact-submit" required="">
                                    <span class="btn-title ">Submit Now</span></button>



                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>




                </div>

                <div class="modal fade" id="contact-form" tabindex="1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content ">
                            <div class="modal-body">
                                <div class="popup-box" style="text-align: center;">
                                    <h4 class="popup-title mb-4">THANK YOU!</h4>
                                    <h5>This decision of yours has made us the happiest people on the planet!</h5>
                                    <p class="popup-text text-center mt-3">Please let us keep you entertained for your infinite trust!
                                    </p>
                                    <br>
                                    <button type="button" class="btn btn-mod btn-w btn-large btn-round btn-mod-1 btn-primary popup-btn" data-bs-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- End Contact Form -->

        </div>
    </section>
    <!-- End Contact Section -->


    <!-- Google Map -->
    <!-- <div class="google-map light-content">

        <a href="#" class="map-section">
            <div class="map-toggle wow fadeInUpShort" aria-hidden="true">
                <div class="mt-icon">
                    <i class="fa fa-map-marker-alt"></i>
                </div>
                <div class="mt-text">
                    <div class="mt-open">Open the map <i class="mt-open-icon"></i></div>
                    <div class="mt-close">Close the map <i class="mt-close-icon"></i></div>
                </div>
            </div>
        </a>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24572.368311964965!2d-75.602613!3d39.65993!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c703f3d191cf13%3A0xf4674106f987fe3a!2zMjQ1IFF1aWdsZXkgQmx2ZCBTdGUgSywgTmV3IENhc3RsZSwgREUgMTk3MjAsINCh0L_QvtC70YPRh9C10L3RliDQqNGC0LDRgtC4INCQ0LzQtdGA0LjQutC4!5e0!3m2!1suk!2sua!4v1584450429598!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div> -->
    <!-- End Google Map -->


    </main>

    @include('blade_files.include.footer')