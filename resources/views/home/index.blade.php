@extends('layouts.site')

@section('content')

    @include('partials.message')
    <header>
        <div>
            <div class="navbar-header">
                <button type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        </div>
    </header>

    <div class="main-nav">
        <!-- <div class="col-md-9 hidden-xs">

        </div> -->
        <div class="col-md-6 col-xs-12">
            <button class="close">
                <span></span>
                <span></span>
            </button>
            <nav>
                <ul class="">
                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#what">What</a>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#when">When</a>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#where">Where</a>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#sponsor">Sponsor</a>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#digitaLincoln">Digital Lincoln</a>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a data-nav-ref="" href="#faqs">FAQS</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <main id="content" role="main">

        <div class="main-sidebar hidden-xs">
            <ul class="">
                <li role="presentation" class="dropdown">
                    <a data-nav-ref="" href="#what"></a>
                    <span>What</span>
                </li>

                <li role="presentation" class="dropdown">
                    <a data-nav-ref="" href="#when"></a>
                    <span>When</span>
                </li>

                <li role="presentation" class="dropdown">
                    <a data-nav-ref="" href="#where"></a>
                    <span>Where</span>
                </li>

                <li role="presentation" class="dropdown">
                    <a data-nav-ref="" href="#sponsor"></a>
                    <span>Sponsor</span>
                </li>

                <li role="presentation" class="dropdown">
                    <a data-nav-ref="" href="#digitaLincoln"></a>
                    <span>Digital Lincoln</span>
                </li>

                <li role="presentation" class="dropdown">
                    <span>FAQS</span>
                    <a data-nav-ref="" href="#faqs"></a>
                </li>
            </ul>
        </div>

        <div class="banner">

            <video autoplay preload="auto" loop muted playsinline>
                <source src="/videos/edit2.mp4" type="video/mp4">

            </video>
            <div class="overlay">
                <img class="logo img-responsive" alt="Lincoln Hack Imp" src="/images/assets/logo.png">
            </div>

        </div>

        <div class="container-fluid what" id="what">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-default text-uppercase" data-toggle="modal" data-target="#ticketsModal">
                            <strong>Get tickets now</strong></button>
                        <h2 class="text-center"><strong>What</strong> is LincolnHack?</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <div class="video-control play"></div>
                            <video class="embed-responsive-item" poster="/images/assets/video-start.png" preload="auto"
                                   autostart="0" loop="loop">
                                <source src="/videos/Lincolnhack-teaser.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <p>LincolnHack is a FREE 24 hour coding competition where teams of up to four people compeate
                            for fantastic prizes. Everyone starts with an idea and builds it in to something. Hardware
                            hacks, software hacks, games, API mash-ups, funny things, arty things, wierd things, noisy
                            things... whatever you decide to create, you’ve got 24 hours to do it!</p>
                    </div>
                    <div class="col-sm-6">
                        <p>LincolnHack, now in it's third year! We plan to keep the same great atmosphere, fun and mix
                            of people. From students to veterans all are welcome. If your interested in tech, willing to
                            build something and enjoy meeting like-minded people, we're sure you will enjoy
                            yourself!</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h4>LincolnHack is a <strong class="text-uppercase">FREE</strong> event, so there's no excuse
                            not to come along...</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid when" id="when">
            <div class="container">

                <div class="row">
                    <h2 class="text-center"><strong>When</strong> is LincolnHack?</h2>
                    <img src="/images/assets/date-2019a.png" class="img-responsive" alt="10th & 11th November 2018">
                </div>


                <div class="row">
                    <div class="col-md-4 col-md-offset-2 col-sm-6">
                        <h4>Saturday 16th</h4>
                        <ul class="list-unstyled">
                            <li class='highlighted first'><span>09:00</span>LincolnHack Starts</li>
                            <li><span>10:00</span>Registration</li>
                            <li><span>11:00</span>Welcome Presentation</li>
                            <li><span>12:00</span>Hacking begins</li>
                            <li><span>13:00</span>Lunch</li>
                            <li><span>18:30</span>Evening meal & Drinks</li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <h4>Sunday 17th</h4>
                        <ul class="list-unstyled">
                            <li class='highlighted first'><span>08:30</span>Breakfast</li>
                            <li><span>09:30</span>Morning Briefing</li>
                            <li><span>12:00</span>Hacking Ends & Lunch</li>
                            <li><span>13:00</span>Hack demonstrations</li>
                            <li><span>16:45</span>Awards Ceremony</li>
                            <li><span>17:30</span>LincolnHack Ends</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class-
                    "col-md-12">
                    <p class="text-center">Times subject to change...</p>
                </div>
            </div>
        </div>
        </div>

        <div class="container where-prefix">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center"><strong>Where</strong> is LincolnHack?</h2>
                </div>
                <div class="col-md-12">
                    <p>A brand new £1.8 million co-working space called Mosaic, located in Thomas Parker House on Silver
                        Street right in the heart of Lincoln city centre.<br/>
                        Developed collaboratively by the digital community, working together with Lincolnshire Co-op and
                        Lincolnshire County Council this is a great space and Lincolnhack is proud to be the first major
                        digital event the hub will host. The location is situated within a short walking distance of the
                        Lincoln transport hub. </p>
                </div>
            </div>
        </div>
        <div class="container-fluid where" id="where">
            <div class="container">


                <div class="row">
                    <div class="col-sm-4">
                        <img src="/images/assets/marker.png" class="img-responsive" alt="Mosaic Digital Hub"/>
                    </div>
                    <div class="col-sm-8">

                    </div>
                </div>
            </div>
        </div>

        <div class="map" id="map"></div>
        <div class="container-fluid subscribe" id="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <form action="//lincolnhack.us13.list-manage.com/subscribe/post?u=9363c6282f6b2b8e8f6e06302&amp;id=b80ea51571"
                              method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                              class="validate form-inline" target="_blank" novalidate="novalidate">
                            <h5><strong>Subscribe to our newsletter</strong></h5>
                    </div>

                    <div class="col-md-2 col-md-offset-0 col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                            <input type="email" value="" name="EMAIL"
                                   class="required form-control email mce_inline_error" placeholder="your email"
                                   id="mce-EMAIL" aria-required="true" aria-invalid="true">
                        </div>
                    </div>

                    <div class="col-md-2 col-md-offset-0 col-sm-10 col-sm-offset-1">
                        <button type="submit" id="mc-embedded-subscribe" class="btn btn-default text-uppercase">
                            Subscribe
                        </button>
                    </div>
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                              name="b_9363c6282f6b2b8e8f6e06302_b80ea51571"
                                                                                              tabindex="-1" value="">
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid sponsors" id="sponsor">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center"> LincolnHack <strong>Sponsors</strong></h2>
                        <h3 class="text-center">LincolnHack would not be possible without our sponsors,<br>We will
                            announce our sponsors soon§</h3>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4 col-md-offset-0 col-md-push-4 col-sm-10 col-sm-offset-1 card gold">
                        <div class="header">
                            <h3 class="text-center">Gold</h3>
                        </div>

                        <div class="body">
                            <ul class="list-unstyled">


                                <li>Sponsors announced shortly</li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0 col-md-push-4 col-sm-10 col-sm-offset-1 card silver">
                        <div class="header">
                            <h3 class="text-center">Silver</h3>
                        </div>

                        <div class="body">
                            <ul class="list-unstyled">

                                <li>Sponsors announced shortly</li>


                            </ul>


                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0 col-md-pull-8 col-sm-10 col-sm-offset-1 card partners">
                        <div class="header">
                            <h3 class="text-center">Partners</h3>
                        </div>

                        <div class="body">
                            <ul class="list-unstyled">
                                <li>Partners announced shortly</li>


                            </ul>


                        </div>
                    </div>

                </div>
                <h4 class="friends">Also a big thanks for their support to the <a href="../../partners#friends">friends
                        of Lincolnhack</a></h4>
                <h4 class="friends">Want to sponsor there is still time contact us at <a
                            href="mailto:hello@lincolnhack.org">hello@lincolnhack.org</a></h4>

            </div>
        </div>
        <div class="container-fluid digital-lincoln" id="digitaLincoln">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="/images/assets/digital-lincoln.png" alt="Digital Lincoln" class="img-responsive">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <h5>Digital Lincoln is a community of people interested in technology and the digital
                            world.</h5>
                        <p><br>We're a friendly bunch, open to all ages and technical abilities. We aim to build the
                            tech community here in Lincoln, sharing ideas and knowledge through a schedule of informal
                            events and socials.</p>
                    </div>

                    <div class="col-sm-5 col-sm-offset-1">
                        <p>We have 500+ members and host regular events in and around Lincoln which alternate between
                            both technical and non-technical topics, that way there is something for everybody. Many of
                            these events take place at the Boole Technology Centre in Lincoln with the kind support of
                            our sponsor, the Lincoln Science and Innovation Park.</p>
                        <form action="https://digitallincoln.co.uk" method="get">
                            <button class="btn btn-default text-uppercase" type="">Join Digital Lincoln</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid faqs" id="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center"><strong>FAQs</strong> of LincolnHack</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <a href="#answer" data-question-ref="1">Where can I park?</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#answer" data-question-ref="2">What are the prizes?</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#answer" data-question-ref="3">How do I get tickets?</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <a href="#answer" data-question-ref="4">Can I choose my team?</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#answer" data-question-ref="5">Who owns my hack?</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#answer" data-question-ref="6">Am I expected to stay up all night?</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <a href="#answer" data-question-ref="7">Do I need tickets?</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#answer" data-question-ref="8">What is for dinner?</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 col-md-offset-3 col-sm-11 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                        <div class="speech-bubble">
                            <p class="text-center" id="answer">Ask the Imp for an answer!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="imp"></div>
                    <div class="eyes"></div>
                    <div class="nose"></div>
                    <div class="mouth-open"></div>
                    <div class="mouth-oo"></div>
                    <div class="laptop-glow"></div>
                </div>
                <div class="col-md-8">
                    <p class="text-center">LincolnHack follows the standard code of conduct as written by <a
                                href="http://hackcodeofconduct.org">hackcodeofconduct.org</a>. LincolnHack is a fun
                        event -
                        help us to keep it fun by behaving appropriately<br>Copyright LincolnHack 2019. LincolnHack is
                        run by members of Digital Lincoln</p>
                </div>
            </div>
        </div>
    </footer>



    <div id="ticketsModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Get LincolnHack Tickets</h2>
                </div>
                <div class="modal-body">
                    <div id="eventbrite-widget-container-69858062345"></div>


                    <script src="https://www.eventbrite.co.uk/static/widgets/eb_widgets.js"></script>

                    <script type="text/javascript">
                        var exampleCallback = function () {
                            console.log('Order complete!');
                        };

                        window.EBWidgets.createWidget({
                            // Required
                            widgetType: 'checkout',
                            eventId: '69858062345',
                            iframeContainerId: 'eventbrite-widget-container-69858062345',

                            // Optional
                            iframeContainerHeight: 425,  // Widget height in pixels. Defaults to a minimum of 425px if not provided
                            onOrderComplete: exampleCallback  // Method called when an order has successfully completed
                        });</script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    @include('partials.scripts')
@endsection
