@include('blade_files.include.head')
@include('blade_files.include.header_inner')
<section class="small-section  bg-scroll light-content howtoplay">
    <div class="container relative pt-70">

        <!-- Hero Content -->
        <div class="home-content-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 v-center">
                        <div class="bread-inner">

                            <div class="bread-title">
                                <h2>How To Play</h2>

                                <div class="text-center mod-breadcrumbs text-end">
                                    <a href="{{url('/')}}">Home</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<span class="mod-breadcrumbs-slash"></span>&nbsp;<span><a href="{{url('/howtoplay')}}">How To Play</a></span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Hero Content -->


    </div>
</section>
<section class="howtomobile"> <a href="#about" class="banner-icon"> <i class="flaticon-down-arrow"></i> </a>
    <div class="container mobtop">
        <div class="row">
            <div class="col-lg-8 v-center">
                <div class="bread-inner">
                    <div class="bread-title">
                        <h2>How To Play</h2>
                        <div class="text-center  text-end ">
                            <a href="{{url('/')}}">Home</a>&nbsp;<span class="mod-breadcrumbs-slash">•</span>&nbsp;<span class="mod-breadcrumbs-slash"></span>&nbsp;<span><a href="{{url('/howtoplay')}}">How To Play</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 v-center">
                <div style="display:flex;justify-content:center">
                    <img src="assets/images/mobile/Howtoplay_Overlay_Mobile.png" alt="history" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section  light-content content-6">
    <div class="container relative">

        <!-- Product Content -->
        <div class="row mb-60 mb-xs-30 how-mobile">

            <!-- Product Images -->
            <div class="col-lg-3 col-md-5 col-sm-12 mb-md-30">

                <div class="post-prev-img">

                    <img src="{{asset('assets/images/Howtoplay_Inner.png')}}" alt="" class="img-fluid"></a>
                    <!-- <div class="intro-label">
                        <span class="badge badge-danger bg-red">Sale</span>
                    </div> -->
                </div>
            </div>
            <!-- End Product Images -->

            <!-- Product Description -->
            <div class="col-lg-9 col-sm-12 col-md-7 mb-xs-10">
                <div class="section-title animate__animated animate__fadeInUp animate__delay-3s">
                    <div class="text-center mb-80 mb-sm-50">
                        <h2 class="section-title">Discover What Lies Ahead, And Conquer It!</h2>
                        <p class="section-title-descr">
                            We're your trusted travel experts!
                        </p>
                    </div>
                </div>
                <div class="mb-30">
                    <p>This is one of India's most popular card games and one of the most popular rummy variants to play. You can learn rummy rules explained in detail at 13cardsrummy which is India's most trusted rummy platform. A step-by-step guide to playing Rummy online.</p>
                    <p>There are two to five players in 13cardsrummy and each is dealt 13 cards. Two 52-card decks (104 cards) and four jokers (wild cards) are used for 2 or 4 players, while three decks (156 cards) and six jokers are used for 5 players. Each player deals the cards in turn (clockwise).</p>

                </div>
            </div>
            <!-- End Product Description -->
        </div>
        <div class="row">
            <table class="table">
                <tr>
                    <th>Number of Players</th>
                    <th>Number of Decks</th>
                    <th>Card count for each player</th>
                </tr>
                <tr>
                    <td>2 - 4 player table</td>
                    <td>2 Deck</td>
                    <td>13 Cards Each</td>
                </tr>
                <tr>
                    <td>5 player table 3 decks</td>
                    <td>3 Deck </td>
                    <td>13 Cards Each</td>
                </tr>
            </table>
            <h4>Here's how Rummy works!</h4>
            <p class="mb-30">Each player is dealt 13 cards face down. The next card from the deck is placed face up on the table. Rest of the cards are placed face down in the centre of the table; this is the stock pile/closed deck. All the cards of that rank regardless of the suit can be utilized as additional jokers.
                </p>
        </div>
        <!-- End Product Content -->


        <!-- Nav Tabs -->
        <div class="align-center mb-40 mb-xxs-30">
            <ul class="nav nav-tabs tpl-tabs animate" id="productItem" role="tablist">

                <li class="nav-item">
                    <a href="#Game" aria-controls="Game" class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true">Game objectives</a>
                </li>

                <li class="nav-item">
                    <a href="#Dropping" aria-controls="Dropping" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">Dropping out</a>
                </li>

                <li class="nav-item">
                    <a href="#Sequence" aria-controls="Sequence" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">Sequence</a>
                </li>
                <li class="nav-item">
                    <a href="#start" aria-controls="start" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">Let's start with</a>
                </li>
                <li class="nav-item">
                    <a href="#Set" aria-controls="Set" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">Set</a>
                </li>
            </ul>
        </div>
        <!-- End Nav Tabs -->

        <!-- Tab panes -->
        <div class="tab-content tpl-minimal-tabs-cont">

            <div class="tab-pane fade active show" id="Game" role="tabpanel">

                <p class="mb-30">
                    Once all 13 cards have been used to form runs and sets, the player declares his/her turn. Using only two runs (called First Life), a valid declaration must have at least two runs. Either First Life or Second Life must have four or more cards. Once the objective is met, the player can declare.</p>
                <p class="mb-30">
                    Players must form and declare their valid sets and sequences after a valid declare. All unmatched cards are counted. In order to score 80 points, the player must have at least two runs (First Life and Second Life). If all 13 cards are unmatched, the player loses 80 points.</p>
            </div>
            <div class="tab-pane fade" id="Dropping" role="tabpanel">

                <p class="mb-30">You lose 10 points if you drop out of the game without even picking up a single card from the discard pile or stock pile. You lose 30 points if you drop during a hand, before any other player has declared. The real money is awarded to the player who scored the most points.</p>

            </div>

            <div class="tab-pane fade" id="Sequence" role="tabpanel">
                <p class="mb-30">In 13 card rummy games, there are two types of sequences: pure sequences and impure sequences. The goal is to win at least one pure sequence. Here are the rules for playing rummy with pure and impure sequences.</p>
                <h5>Pure sequence</h5>
                <p>5♥ 6♥ 7♥ are all the same suit ♥<br>
                    A♥ K♥ Q♥ J♥ have the same suit ♥<br>
                    A♥ 2♥ 3♥ follow each other in the same suit ♥<br>
                <p>Despite that</p>
                K♥ A♥ 2♥ cannot qualify as a valid sequence. A valid sequence follows A,2,3,4,5,6,7,8,9,10,J,Q,K,A,10,9,8,7,6,5,4,3,2,A.
                </p>
                <h5>Impure Sequence</h5>
                <p>An impure sequence is when a printed joker or wild card is used to create a sequence. Let us assume K♥: is a selected Wild Card.
                    4&#x26; 5&#x26; PJ 7&#x26; - A printed joker (PJ) replaces 6.
                    4&#x26; 5&#x26; K♥ 7&#x26; - the selected wild card K has been used to replace 6</p>

            </div>
            <div class="tab-pane fade" id="start" role="tabpanel">
                <h4> What is a First Life and Second Life?</h4>
                <p>To be a valid declaration, you need at least two sequences. One sequence must be a pure sequence, and the other must have at least four cards.</p>
                <h4>Let's start with</h4>
                <p>The sequences are both pure<br>
                    First Life 5♥ 6♥ 7♥<br>
                    Second Life A♥ K♥ Q♥ J♥
                </p>
                <h4>Second Combination</h4>
                <p>The first sequence is pure and the other is impure (considering J♠ is joker)<br>
                    First Life 5♥ J♠ 7♥<br>
                    Second Life A♥ K♥ Q♥ J♥
                </p>
                <h4>Third Combination: </h4>
                <p>There is one pure sequence and one impure sequence (considering J♠ is joker)<br>
                    First Life 5♥ 6♥ 7♥<br>
                    Second Life A♥ J♠ Q♥ J♥
                </p>
            </div>
            <div class="tab-pane fade" id="Set" role="tabpanel">

                <h5>What is a set?</h5>
                <p>Three or more cards with the same face value and different suits in a row are called a set</p>
                </p>
                <h5>Pure Set</h5>

                <p>7♥7&#x26;7&#9670; are of different suits ♥ &#x26; &#9670;<br>
                    K&#9670; K&#x26; K♥ K&#9824; are of different suits &#9670; &#x26; &#9824; ♥<br>
                    Nevertheless, 7♥7&#9670;7&#9670; is not regarded as a valid card set. It is considered as an invalid set if two or more cards of the same suit are used to make a set of three or more cards. (This applies to gameplays with at least two decks of cards). Two of seven cards have been used to declare the set, as you can see.</p>
                <h5>Impure Set</h5>
                <p>You can also build a set with a printed joker or a Wild Card. Let's assume the Wild Card is K♥ .<br>
                    4&#x26; 4&#9670; PJ 4♥ - here a printed joker has been used to replace 4&#9824; in the set.<br>
                    A&#x26; A♥ K♥ A&#9824; - here the selected wild card K♥ has been used to build a set replacing A&#9670;.</p>
            </div>

        </div>
        <!-- End Tab panes -->


    </div>
</section>
@include('blade_files.include.footer')