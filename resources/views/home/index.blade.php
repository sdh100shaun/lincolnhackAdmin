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
                    <a data-nav-ref="" href="#sponsors"></a>
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
                                <source src="/videos/lincolnhack.mp4" type="video/mp4">
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
                    <img src="/images/assets/date.png" class="img-responsive" alt="10th & 11th November 2018">
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-2 col-sm-6">
                        <h4>Saturday 10th</h4>
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
                        <h4>Sunday 11th</h4>
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

        <div class="container-fluid where" id="where">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center"><strong>Where</strong> is LincolnHack?</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <img src="/images/assets/marker.png" alt="Boole Technology Centre" class="img-responsive">
                    </div>
                    <div class="col-sm-8">
                        <p> LincolnHack is being hosted in the Boole Technology Centre, within the grounds of Lincoln
                            Science and Innovation Park.
                            The Boole Technology Centre is named after George Boole, who was born in Lincoln in 1815.
                            This self-taught son of a Boot Maker revolutionised mathematics. In doing so, he established
                            the rules of binary code and became the grandfather of the digital age.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="map" id="map"></div>

        <script>
            function initMap() {
                var coords = {lat: 53.227579, lng: -0.556979};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    streetViewControl: false, // hide the yellow Street View pegman
                    draggable: true,
                    center: coords,
                    styles: [{
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [{"saturation": 36}, {"color": "#000000"}, {"lightness": 40}]
                    }, {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [{"visibility": "on"}, {"color": "#000000"}, {"lightness": 16}]
                    }, {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{"color": "#000000"}, {"lightness": 20}]
                    }, {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{"color": "#000000"}, {"lightness": 17}, {"weight": 1.2}]
                    }, {
                        "featureType": "administrative",
                        "elementType": "labels",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "administrative.country",
                        "elementType": "all",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "administrative.country",
                        "elementType": "geometry",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "administrative.country",
                        "elementType": "labels.text",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "administrative.province",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "administrative.locality",
                        "elementType": "all",
                        "stylers": [{"visibility": "simplified"}, {"saturation": "-100"}, {"lightness": "30"}]
                    }, {
                        "featureType": "administrative.neighborhood",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "administrative.land_parcel",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{"visibility": "simplified"}, {"gamma": "0.00"}, {"lightness": "74"}]
                    }, {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 20}]
                    }, {
                        "featureType": "landscape.man_made",
                        "elementType": "all",
                        "stylers": [{"lightness": "3"}]
                    }, {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 21}]
                    }, {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{"color": "#000000"}, {"lightness": 17}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{"color": "#000000"}, {"lightness": 29}, {"weight": 0.2}]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 18}]
                    }, {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 16}]
                    }, {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 19}]
                    }, {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 17}]
                    }],
                    mapTypeControl: false,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                        position: google.maps.ControlPosition.TOP_CENTER
                    },
                    zoomControl: true,
                    zoomControlOptions: {position: google.maps.ControlPosition.TOP_RIGHT},
                    scaleControl: true,
                    streetViewControl: false,
                    streetViewControlOptions: {position: google.maps.ControlPosition.RIGHT_TOP},
                    fullscreenControl: false
                });
                var marker = new google.maps.Marker({
                    zIndex: 100,
                    position: coords,
                    map: map,
                    draggable: false,
                    animation: google.maps.Animation.DROP,
                    title: 'Boole Technology Centre',
                    icon: '/images/assets/map-pin.png'

                });
            }
        </script>

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
                        <h3 class="text-center">LincolnHack would not be possible without our sponsors,<br>View our sponsor challenges and information.</h3>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4 col-md-offset-0 col-md-push-4 col-sm-10 col-sm-offset-1 card gold">
                        <div class="header">
                            <h3 class="text-center">Gold</h3>
                        </div>

                        <div class="body">
                            <ul class="list-unstyled">
                                <li><a href="../../sponsors/gold/khaoscontrol"><img src="/images/assets/sponsors/KC_Square_black_text.svg" alt="Khaos Control" /></a> </li>
                                <li><a href="../../sponsors/gold/epixmedia"><img src="../../images/assets/sponsors/epix-logo.svg" alt="Expix Media" /></a>
                                </li>
                                <li><a href="../../sponsors/gold/scholarpack"><img src="../../images/assets/sponsors/scholarpack.svg" alt="Recap.io" /></a>
                                </li>
                                <li><a href="../../sponsors/gold/recap"><img src="../../images/assets/sponsors/recap-io.svg" width="85%" alt="Recap.io" /></a>
                                </li>

                            </ul>

                            <h4>Click a logo to see sponsor challenges.</h4>
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0 col-md-push-4 col-sm-10 col-sm-offset-1 card silver">
                        <div class="header">
                            <h3 class="text-center">Silver</h3>
                        </div>

                        <div class="body">
                            <ul class="list-unstyled">
                                <li><a href="../../sponsors/silver/StreetsHeaver#streetsheaver"><img width="150px" src="/images/assets/sponsors/streetsheaver.svg" alt="Streets Heaver" /></a> </li>
                                <li><a href="../../sponsors/silver/Selenity#selenity"><img width="150px" src="../../images/assets/sponsors/selenity.svg" alt="Selenity" /></a>
                                </li>
                                <li><a href="../../sponsors/silver/cooperpress#cooperpress"><img width="150px" src="../../images/assets/sponsors/cooperpress.svg" alt="Cooper Press" /></a>
                                </li>

                            </ul>



                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0 col-md-pull-8 col-sm-10 col-sm-offset-1 card partners">
                        <div class="header">
                            <h3 class="text-center">Partners</h3>
                        </div>

                        <div class="body">
                        <ul class="list-unstyled">
                            <li><a href="#"><img width="150px" src="/images/assets/sponsors/lsip.svg" alt="" /></a> </li>
                            <li><a href="#"><img width="250px" src="../../images/assets/sponsors/bl.svg" alt="" /></a>
                            </li>



                        </ul>



                    </div>
                    </div>

                </div>
                <h4 class="friends">Also a big thanks for their support to the <a href="#" >friends of Lincolnhack</a></h4>
                <h4 class="friends">Want to sponsor there is still time contact us at  <a href="mailto:hello@lincolnhack.org" >hello@lincolnhack.org</a></h4>

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
                        <a href="#answer" data-question-ref="7">Do I need Tickets?</a>
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
                                href="http://hackcodeofconduct.org">hackcodeofconduct.org</a>. LincolnHack is a fun event -
                        help us to keep it fun by behaving appropriately<br>Copyright LincolnHack 2018. LincolnHack is
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
                    <div id="eventbrite-widget-container-50209435774"></div>

                    <script src="https://www.eventbrite.co.uk/static/widgets/eb_widgets.js"></script>

                    <script type="text/javascript">
                        var callback = function() {
                            $('.close').click();
                        };

                        window.EBWidgets.createWidget({
                            // Required
                            widgetType: 'checkout',
                            eventId: '50209435774',
                            iframeContainerId: 'eventbrite-widget-container-50209435774',

                            // Optional
                            iframeContainerHeight: 425,
                            onOrderComplete: callback
                        });
                    </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7C_xfL1ftPNavF8PQ9Qvd702D_yEzb1E&callback=initMap"></script>

   @include('partials.scripts')
@endsection