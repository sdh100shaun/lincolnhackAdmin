@include('partials.head')
<div class="container-fluid sponsor-page">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1 class="text-center"><strong>Information for Hackers </strong></h1>
                <hr/>
                <p class="text-center">We are really looking forward to you joining the hack - we hope you are too.
                </p>
                <p class="text-center">This is a place where you can confirm your tickets find out a bit more info and
                    reach out to us if there is
                    anything you need to know prior to the event.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2 class="text-center"><strong>Attendee Details</strong></h2>
                <hr/>
                <p class="text-center">Each attendee will need to fill out this information. If you have booked multiple
                    tickets please enter the details for each person.</p>
                <p class="text-center">This is your confirmation of attendance. It is important to complete this
                    otherwise we may not be able to register you.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12">

                @if (count($errors) > 0)
                    <div class="alert alert-danger text-center">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <p></p>
                <form method="post" action="{{ route('attendee.store') }}" class="form-horizontal"
                      id="attendee">

                    {!! csrf_field() !!}
                    <fieldset>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="firstName">First Name</label>
                            <div class="col-md-6">
                                <input id="firstName" value="{{old("firstName")}}" name="firstName" type="text"
                                       placeholder="Your first name" class="form-control input-md"
                                       required="required">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="lastName">Last Name</label>
                            <div class="col-md-6">
                                <input id="lastName" value="{{old("lastName")}}" name="lastName" type="text"
                                       placeholder="Your last name" class="form-control input-md"
                                       required="required">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="attendeeId">Email</label>
                            <div class="col-md-6">
                                <input id="attendeeId" value="{{old("attendeeId")}}" name="attendeeId"
                                       type="email" placeholder="Your email" class="form-control input-md"
                                       required="required">
<<<<<<< HEAD
                                <span class="help-block">We will sign you up to hackbot with this email <a href="https://www.digitallincoln.co.uk/join/"> Sign up to Digital Lincoln Slack</a> and
                                            meet Hackbot in our Lincolnhack channel</a>. You will need to register your team there.</span>
=======


                                <span class="help-block">We will sign you up to hackbot with this email. Sign up to  <a href="https://www.digitallincoln.co.uk/join/">Digital Lincoln Slack</a> and register your team with Hackbot in the LincolnHack channel. If you have any problems please contact us.
                                            If you're not signed up on the day we will sign you up to the Digital Lincoln Slack.</span>


>>>>>>> master
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="attendee-contact">A contact
                                number (in case of emergency) </label>
                            <div class="col-md-6">
                                <input id="attendee-contact" value="{{old("attendee-contact")}}"
                                       name="attendee-contact"
                                       type="text" placeholder="Your emergency contact number"
                                       class="form-control input-md"
                                       required="required">
                                <span class="help-block">This number is not shared and only for health and safety reasons.</span>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="tshirt">Choose your t-shirt size</label>
                            <div class="col-md-6">
                                <select id="tshirt" name="tshirt" class="form-control">
                                    <option value="">Choose from</option>
                                    @foreach ($tshirtsizes as $tshirt)
                                        <option value="{{$tshirt->size}}">{{$tshirt->description}}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">Super snug t-shirts provided by <a
                                            href="http://www.digitallincoln.co.uk/" target="_blank">Digital Lincoln</a></span>

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="dietaryRequirements">Any dietary
                                requirements ?</label>
                            <div class="col-md-6">
                                <select id="dietaryRequirements" name="dietaryRequirements"
                                        class="form-control">
                                    <option value="">Choose</option>
                                    <option value="none">None</option>
                                    <option value="veggie">Vegetarian</option>
                                    <option value="vegan">Vegan</option>
                                    <option value="glutenfree">Gluten Free</option>
                                </select>
                                <span class="help-block">Satisfied by our caterer <a
                                            href="http://www.saltedorange.co.uk/"
                                            target="_blank">Salted Orange</a></span>

                            </div>
                        </div>

                    </fieldset>
                    <p class="text-center"> By submitting this form and attending the event you are agreeing to our <a
                                href="http://hackcodeofconduct.org">code of conduct</a></p>
                    <p class="text-center"><input type="submit" class="btn btn-primary btn-lg"
                                                  value="Send us your information"/>
                    </p>
                </form>
            </div>
        </div>
        <hr/>
    </div>
    <div class="row">
        <div class="container-fluid attendee-location">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">How to find us.</h2>
                </div>
                <div class="col-sm-12" id="map" style="height: 400px; border:none;"></div>
            </div>
            <div class="row">
                <div class="col-sm-12 attendee-location">
                    <br/>
                    <img src="../../images/lsip-white.png" alt="Lincoln Science and Innovation Park"/> <span>
                            Boole Technology Centre,
                            Beevor St,
                            Lincoln,
                            LN6 7DJ</span>
                    <br/>
                    <span>&nbsp;Contact us at hello@lincolnhack.org or @techlincs</span>
                </div>
            </div>
        </div>
    </div>
    <script>
        // initialize the map
        var map = L.map('map').setView([53.227252, -0.55722], 17);
        map.panTo(new L.LatLng(53.227252, -0.55722));
        L.marker([53.227522, -0.5572222]).addTo(map).bindPopup("Boole Technology centre");

        // load a tile layer
        L.tileLayer('https://api.mapbox.com/styles/v1/sdh100shaun/cj10vkv6300552rnjnss2nwc4/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2RoMTAwc2hhdW4iLCJhIjoibnRxYmNfMCJ9.wTlIV3WF0NboEok9OPhzWQ',
            {
                maxZoom: 17,
                minZoom: 9
            }).addTo(map);

    </script>
</div>
<div class="container-fluid what">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center">Challenges.</h2>
            <hr/>
            <p class="text-center"> Our Gold sponsors each set a challenge, check them out.</p>

        </div>

    </div>
    <div class="row">

        <div class="col-md-4 col-md-offset-0 col-md-push-4 col-sm-10 col-sm-offset-1">

            <ul class="list-unstyled sponsor-list">
                <li><a href="../../sponsors/gold/khaoscontrol"><img
                                src="/images/assets/sponsors/KC_Square_black_text.svg" alt="Khaos Control"/></a></li>
                <li>><a href="../../sponsors/gold/epixmedia"><img src="../../images/assets/sponsors/epix-logo.svg"
                                                                  alt="Expix Media"/></a>
                </li>
                <li><a href="../../sponsors/gold/scholarpack"><img src="../../images/assets/sponsors/scholarpack.svg"
                                                                   alt="Recap.io"/></a>
                </li>
                <li><a href="../../sponsors/gold/recap"><img src="../../images/assets/sponsors/recap-io.svg"
                                                             alt="Recap.io"/></a>
                </li>

            </ul>


            <p> Also please check out our <a href="../../sponsors/silver/cooperpress">Silver sponsors</a> , without
                which the event would not happen.</p>
            <div class="flex-container text-center">
                <div class="flex-item">
                    <img width="150px" src="/images/assets/sponsors/streetsheaver.svg" alt="Streets Heaver"/>
                </div>
                <div class="flex-item"><img width="150px" src="../../images/assets/sponsors/selenity.svg"
                                            alt="Selenity"/>
                </div>
                <div class="flex-item"><img width="150px" src="../../images/assets/sponsors/cooperpress.svg"
                                            alt="Cooper Press"/>
                </div>

            </div>

        </div>
    </div>
</div>


@include('partials.footer')