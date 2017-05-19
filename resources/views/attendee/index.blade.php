@extends('layouts.form')
@include('partials.header')
@section('content')
    <div class="wrapper wrapper--grey wrapper--no-margin">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Attendee Information - Please complete.</div>

                    <div class="panel-body attendee-form">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <p>Just some things we need to know ahead of the event.</p>
                        <form method="post" action="{{ route('attendee.store') }}" class="form-horizontal" id="attendee">

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
                                        <span class="help-block">Will get you into <a href="">Slack</a> and <a href="">Hackbot</a>.</span>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="attendee-contact">A contact number</label>
                                    <div class="col-md-6">
                                        <input id="attendee-contact" value="{{old("attendee-contact")}}" name="attendee-contact"
                                               type="text" placeholder="Your contact number" class="form-control input-md"
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
                            <input type="submit" class="btn btn-primary pull-right" value="send"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax parallax--boole">

    </div>
    <div class="wrapper wrapper--no-margin">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="h h--1 xs-center">How to find us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" id="map" style="height: 400px"></div>
                </div>
            <div class="row">
                    <div class="col-sm-12 attendee-location">
                      <img src="images/lsip-white.png" alt="Lincoln Science and Innovation Park" />  <span>
                            Boole Technology Centre,
                            Beevor St,
                            Lincoln,
                            LN6 7DJ</span>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax">

    </div>
    <div class="wrapper wrapper--grey wrapper--no-margin">
        <div class="container">
            <div class="row">
                <h3 class="h h--1 xs-center">Schedule</h3>
                <p class="xs-center">Subject to change...</p>
                <div class="col-sm-5">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td colspan="2" style="border-top: none">
                                <h5 class="h h--5">Saturday, May 20th</h5>
                            </td>
                        </tr>
                        <tr>
                            <td><b>10:00</b></td>
                            <td>Registration</td>
                        </tr>
                        <tr>
                            <td><b>11:00</b></td>
                            <td>Welcome Presentation</td>
                        </tr>
                        <tr>
                            <td><b>12:00</b></td>
                            <td>Hacking begins</td>
                        </tr>
                        <tr>
                            <td><b>13:00</b></td>
                            <td>Lunch</td>
                        </tr>
                        <tr>
                            <td><b>18:30</b></td>
                            <td>Evening meal and Drinks</td>
                        </tr>
                        <tr>
                            <td><b>Midnight</b></td>
                            <td>Midnight feast</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-5 col-sm-offset-2">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td colspan="2" style="border-top: none">
                                <h5 class="h h--5">Sunday, May 21st</h5>
                            </td>
                        </tr>
                        <tr>
                            <td><b>8:30</b></td>
                            <td>Breakfast</td>
                        </tr>
                        <tr>
                            <td><b>9:30</b></td>
                            <td>Morning Briefing</td>
                        </tr>
                        <tr>
                            <td><b>12:00</b></td>
                            <td>Hacking Ends &amp; Lunch</td>
                        </tr>
                        <tr>
                            <td><b>13:00</b></td>
                            <td>Hack demonstrations</td>
                        </tr>
                        <tr>
                            <td><b>16:45</b></td>
                            <td>Awards Ceremony</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax parallax--boole">

    </div>
    <div class="wrapper wrapper--no-margin">
        <div class="container">
            <div class="row">
                <h3 class="h h--1 xs-center">Hackbot</h3>
                <p class="xs-center">Developed for <a href="https://technottingham.com"> Tech Nottingham </a> by <a href="https://twitter.com/codesleuth">@codesleuth</a></p>
                <p>During the hack - our team organisation and info is aided by a bot within our Slack channel. This bot developed by our friends in the Nottingham
                    technical community is easy to use below is what you can do.</p>
                <div class="col-sm-5 hackbot">

                    <dl>

                    <dt>Find out about your Team</dt>
                    <dd>@hackbot tell me about my team</dd>
                    <dt>Find out about any Team</dt>
                    <dd>@hackbot tell me about team organisers</dd>
                    <dt>Find out about any hacker</dt>
                    <dd>@hackbot tell me about @rob</dd>
                    <dt>Search for a team name</dt>
                    <dd>@hackbot find teams like org</dd>

                    </dl>
                           </div>
                <div class="col-sm-5 hackbot">
                    <dl>

                        <dt>Create a Team</dt>
                        <dd>@hackbot create team Best Team Ever</dd>
                        <dt>Add a teammate</dt>
                        <dd>@hackbot add @rob to my team</dd>
                        <dt>Set your team motto</dt>
                        <dd>@hackbot our motto is We are the bestest</dd>
                        <dt>Leave your Team</dt>
                        <dd>@hackbot leave my team</dd>
                    </dl>
                </div>


            </div>
            <div class="row">
                <p>Hackbot is open source if your a whizz at typescript consider contributing <a href="https://github.com/technottingham">on Github</a></p>
            </div>
        </div>
    </div>
    <div class="parallax parallax--boole">

    </div>
    <div class="wrapper wrapper--no-margin">
    @include('partials.challenges')
        </div>
    <div class="parallax parallax--boole">

    </div>
    <div class="wrapper wrapper--no-margin wrapper--grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="h h--1 xs-center">Contact us</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 col-sm-offset-2 center">
                    Slack: <a href="https://lincolnhack.slack.com">LincolnHack</a>
                </div>
                <div class="col-sm-3 center">
                    Twitter: <a href="https://twitter.com/techlincs">@techlincs</a>
                </div>
                <div class="col-sm-3 center">
                    Email: <a href="mailto:hello@lincolnhack.org">hello@lincolnhack.org</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // initialize the map
        var map = L.map('map').setView([53.227252,-0.55722], 17);
        map.panTo(new L.LatLng(53.227252,-0.55722));
        L.marker([53.227522,-0.5572222]).addTo(map).bindPopup("Boole Technology centre");

        // load a tile layer
        L.tileLayer('https://api.mapbox.com/styles/v1/sdh100shaun/cj10vkv6300552rnjnss2nwc4/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2RoMTAwc2hhdW4iLCJhIjoibnRxYmNfMCJ9.wTlIV3WF0NboEok9OPhzWQ',
                {
                    maxZoom: 17,
                    minZoom: 9
                }).addTo(map);

    </script>
@endsection